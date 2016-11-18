<?php namespace Hdphp\Rbac;

class Rbac
{

    protected $user_table;
    protected $role_table;
    protected $node_table;
    protected $user_role_table;
    protected $access_table;
    protected $auth_key;

    public function __construct()
    {
        $this->user_table      = C('database.prefix') . C('rbac.user_table');
        $this->role_table      = C('database.prefix') . C('rbac.role_table');
        $this->node_table      = C('database.prefix') . C('rbac.node_table');
        $this->user_role_table = C('database.prefix') . C('rbac.user_role_table');
        $this->access_table    = C('database.prefix') . C('rbac.access_table');
        $this->auth_key        = C('rbac.auth_key');
    }

    /**
     * 获取用户所有角色名称
     *
     * @return array
     */
    public function getRoleName($id)
    {
        $sql = "SELECT * FROM " . $this->user_role_table . " u " . " JOIN " . $this->role_table . " r ON ur.role_id = r.id " . " WHERE ur.user_id=" . $id;

        if ($data = Db::query($sql))
        {
            foreach ($data as $d)
            {
                $r[] = $d['name'];
            }

            return $r;
        }
    }

    /**
     * 获取所有节点
     *
     * @return [type] [description]
     */
    public function getLevelNode()
    {
        $sql = "SELECT * FROM " . $this->node_table . " n ORDER BY n.sort ASC ";

        $data = Db::query($sql);
        if ( ! $data)
        {
            return array();
        }

        return $this->formatNode($data);
    }

    /**
     * 验证提供的"模块.控制器.动作"
     *
     * @param  string $action 模块.控制器.动作
     *
     * @return bool
     */
    public function authAction($action)
    {
        $info = explode('.', $action);
        //权限检查
        foreach ($_SESSION['__RBAC__'] as $module => $a)
        {
            if ($module == strtolower($info[0]))
            {
                if (isset($a['_NODE_'][strtolower($info[1])]))
                {
                    if (isset($a['_NODE_'][strtolower($info[1])]['_NODE_'][strtolower($info[2])]))
                    {
                        return true;
                    }
                }
            }
        }

        return false;
    }

    /**
     * 获取用户的所有权限节点
     */
    public function getUserNode($id)
    {
        $sql = "SELECT n.id,n.name,n.pid,n.level,n.title,n.show FROM " . $this->user_role_table . " ur" . " JOIN " . $this->role_table . " r ON ur.role_id = r.id " . " JOIN " . $this->access_table . " a ON a.role_id=r.id " . " JOIN " . $this->node_table . " n ON n.id = a.node_id" . " WHERE ur.user_id=" . $id . " AND n.status=1 AND r.status=1" . " GROUP BY a.node_id" . " ORDER BY n.sort ASC";

        $data = Db::query($sql);
        if ( ! $data)
        {
            return array();
        }

        return $this->formatNode($data);
    }

    /**
     * 登录检测
     */
    public function isLogin()
    {
        return isset($_SESSION[$this->auth_key]);
    }

    /**
     * 验证权限
     *
     * @return [type] [description]
     */
    public function verify()
    {
        //检查不需要验证的动作
        foreach (C('rbac.no_auth') as $noAuth)
        {
            if (strtolower($noAuth) == strtolower(MODULE . '.' . CONTROLLER . '.' . ACTION))
            {
                return true;
            }
        }

        if ( ! $this->isLogin())
        {
            return false;
        }

        //检测超级管理员
        if ($this->isSuperUser())
        {
            return true;
        }
        //没有权限节点或时时验证时
        //都要从数据库中取权限节点信息
        if ( ! isset($_SESSION['__RBAC__']) || C('rbac.type') == 1)
        {
            $node                 = $this->getUserNode($_SESSION[$this->auth_key]);
            $_SESSION['__RBAC__'] = $node;
        }


        //权限检查
        foreach ($_SESSION['__RBAC__'] as $module => $a)
        {
            if ($module == strtolower(MODULE))
            {
                if (isset($a['_NODE_'][strtolower(CONTROLLER)]))
                {
                    if (isset($a['_NODE_'][strtolower(CONTROLLER)]['_NODE_'][strtolower(ACTION)]))
                    {
                        return true;
                    }
                }
            }
        }

        return false;
    }

    /**
     * 超级管理员检测
     *
     * @return boolean [description]
     */
    public function isSuperUser()
    {
        if ( ! $this->isLogin())
        {
            return false;
        }
        if (isset($_SESSION['__SUPER_USER__']))
        {
            return true;
        }
        $username = Db::table(C('rbac.user_table'))->where($this->auth_key, $_SESSION[$this->auth_key])->pluck(C('rbac.username_field'));
        if ($username == C('rbac.super_user'))
        {
            $_SESSION['__SUPER_USER__'] = true;

            return true;
        }
    }

    /**
     * 格式化节点为层级结构
     *
     * @param  [type] $data [description]
     *
     * @return [type]       [description]
     */
    private function formatNode($data)
    {
        $node = array();
        foreach ($data as $d)
        {
            if ($d['level'] == 1)
            {
                $node[strtolower($d['name'])] = $d;
                foreach ($data as $m)
                {
                    if ($m['pid'] == $d['id'])
                    {
                        $node[strtolower($d['name'])]['_NODE_'][strtolower($m['name'])] = $m;
                        foreach ($data as $n)
                        {
                            if ($n['pid'] == $m['id'])
                            {
                                $node[strtolower($d['name'])]['_NODE_'][strtolower($m['name'])]['_NODE_'][$n['name']] = $n;
                            }
                        }
                    }
                }
            }
        }

        return $node;
    }
}





