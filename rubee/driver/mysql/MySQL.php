<?php
namespace rubee\driver\mysql;

use Swoole;
/**
 * Description of MySQL
 *
 * @author qiaoda
 */
class MySQL
{
    private static $instance = null ;
    
    private static $dbParamer = null ;
    
    private static $conn = null ;


    protected function __construct()
    {
        self::initialize();
    }
    
    private function initialize()
    {
        self::getConfig();
        self::connet();
    }
    
    private function getConfig():int
    {
        self::$dbParamer = require_once ROOT.'/conf/db.php';
        return 0 ;
    }
    
    private function connet()
    {
        $db = new \swoole_mysql();
        $db->on('close', function($db){
            var_dump($db);
        });
        //var_dump($db);
        exit();
    }

    private function __clone()
    {
        
    }
    
    public static function getInstance()
    {
        if (!(self::$instance instanceof self)) {
            self::$instance =  new self();
        }
        return self::$instance ;
    }
}
