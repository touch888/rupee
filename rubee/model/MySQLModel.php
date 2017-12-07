<?php
namespace rubee\model;

use rubee\driver\mysql\MySQL;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MySQLModel
 *
 * @author qiaoda
 */
class MySQLModel extends MySQL
{
    private static $instance = null ;
    
    private static $mysqlConn=null;


    protected function __construct()
    {
        self::$mysqlConn = MySQL::getInstance();
    }
    
    private function __clone()
    {
        
    }
    
    public static function getInstance()
    {
        if (!(self::$instance instanceof self)) {
            self::$instance = new self();
        }
        
        return self::$instance ;
        
    }
    
    
}
