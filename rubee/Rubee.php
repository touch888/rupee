<?php
namespace rubee;

use rubee\model\MySQLModel;
/**
 * Description of Rubee
 *
 * @author qiaoda
 */
class Rubee
{
    
    private function __construct()
    {
        self::initialize();
    }
    
    private function initialize()
    {
        echo "Hello Rubee \n";
    }
    
    
    
    private function __clone()
    {
        
    }
    
    public static function run()
    {
        MySQLModel::getInstance();
        echo "Hello Rubee \n";
    }
}

require_once ROOT.'/rubee/driver/mysql/MySQL.php';
require_once ROOT.'/rubee/model/MySQLModel.php';
\rubee\Rubee::run();
