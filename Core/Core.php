<?php

namespace Core;

use Core\Model\Model;

/**
 * Description of Core
 *
 * @author Touch
 */
class Core
{

    protected static $config = null;
    
    private static $db = null ;


    private function __construct()
    {
        $this->__initialize();
    }

    private function __initialize()
    {
        self::getConfig();
        self::initDb(self::$config);
    }

    /***
     * 获取配置文件
     * @author 郑自强 zhengziqiang163@163.com
     * @return null ;
     */
    private function getConfig()
    {
        self::$config = require_once ROOT . '/Conf/config.php';
        return 0 ;
    }
    
    private function initDb(array $config=[])
    {
        //Mysql::run(self::$config['db']);
        var_dump(Model::init(self::$config['db']));
    }

    public static function run()
    {
        $stdClass = new self();
    }

}
