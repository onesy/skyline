<?php

class Registry {
    
    public static $_instance = null;
    
    public static $vari = array();
    
    private function __construct()
    {
        ;
    }
    
    public static function Instance()
    {
        if (!self::$_instance) {
            self::$_instance = new BCRegistry();
        }
        return self::$_instance;
    }
    
    public static function register($key, &$value)
    {
        self::$vari[$key] = &$value;
    }
    
    public static function unRegister($key)
    {
        if (isset(self::$vari[$key])){
            unset(self::$vari[$key]);
        }
    }
    public static function get($key)
    {
        $med = self::$vari;
        if (is_array($key)) {
            foreach($key as $v) {
                $med = $med[$v];
            }
        } else {
            $med = self::$vari[$key];
        }
        return $med;
    }
    
    public static function getV()
    {
        $params = func_get_args();
        return self::get($params);
    }
    
    public static function set($key, &$value)
    {
        self::$vari[$key] = &$value;
    }
    
    public static function isRegist($key) {
        if (isset(self::$vari[$key])) {
            return true;
        } else {
            return false;
        }
    }
}