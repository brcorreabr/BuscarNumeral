<?php
class autoloader {

    public static $loader;

    public static function init(){
        if (self::$loader == NULL)
            self::$loader = new self();

        return self::$loader;
    }

    public function __construct(){
        spl_autoload_register(array($this,'classes'));
        spl_autoload_register(array($this,'smarty'));
    }

    public function classes($class){
        set_include_path('class/');
        spl_autoload_extensions('.class.php');
        spl_autoload($class);
    }
		
	public function smarty($class){
        set_include_path('lib/smarty/');
        spl_autoload_extensions('.class.php');
        spl_autoload($class);
    }
}



?>