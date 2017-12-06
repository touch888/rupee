<?php
namespace Core\Model;

use Core\DbDriver\Mysql;
/**
 * Description of Model
 *
 * @author Touch
 */
class Model extends Mysql
{
    private static $mysqlModel = null ;
    private static $_instance = null;
    
    public function __construct(array $param=[])
    {
        self::__initialize($param);
    }
    
    private function __clone()
    {
        
    }
    
    private function __initialize($param)
    {
        Mysql::run($param);
        self::$mysqlModel = Mysql::$db;
    }


    public static function init()
    {
        if (!(self::$_instance instanceof self)) {
            self::$_instance = new self();
        }
        return self::$_instance ;
    }
}
