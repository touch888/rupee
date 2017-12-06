<?php
namespace Core\DbDriver;
/**
 * Description of Mysql
 *
 * @author Touch
 */
class Mysql
{

    private static $_instance = null;
    public static $db = null;

    public function __construct(array $param=[])
    {
        self::initDb($param);
    }

    private function __clone()
    {
        
    }

    /**
     * 初始化mysql
     * @author 郑自强 zhengziqiang163@163.com
     * @date 2017年12月7日00:31:20
     * @param array $param 数据库配置参数
     * @return int
     */
    private function initDb(array $param=[])
    {
        $dsn = 'mysql:dbname='.$param['db_name'].';host='.$param['db_host'];
        $user = $param['db_user'];
        $password = $param['db_pass'];
        try {
            self::$db = new \PDO($dsn, $user, $password);
        } catch (\PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
        return 0;
    }

    /**
     * 数据单利操作
     * @author 郑自强 zhengziqiang163@163.com
     * @param array $param 数据库配置参数
     * @return string
     */
    public static function run(array $param=[])
    {
        if (empty($param)) {
            return 'config require error';
        }
        if (!(self::$_instance instanceof self)) {
            self::$_instance = new self($param);
        }

        return self::$_instance;
    }

}
