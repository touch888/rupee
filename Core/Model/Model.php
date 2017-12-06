<?php
use Core\DbDriver\Mysql;
/**
 * Description of Model
 *
 * @author Touch
 */
class Model extends Mysql
{
    private static $mysqlModel = null ;
    
    private function __construct()
    {
        parent::__construct();
    }
}
