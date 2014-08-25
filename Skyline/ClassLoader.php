<?php

/* 
 * The MIT License
 *
 * Copyright 2014 sunyuw <leentingOne@gmail.com https://github.com/onesy/skyline.git>.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */
/**
 * @filename ClassLoader.php 
 * @encoding UTF-8 
 * @author sunyuw <leentingOne@gmail.com> 
 * @link https://github.com/onesy/skyline.git 
 * @copyright only free software in my mind 
 * @license http://mit-license.org/licenses/
 * @datetime Aug 23, 2014  2:04:42 PM
 * @version 1.0
 * @Description 文件自动加载类,根据psr0编写。
  */

class Skyline_ClassLoader {
    
    protected static $_skylineVendorName = "Skyline";
    
    protected static $_userVendorName ;
    
    protected static $_classSearchStack = array();
    
    protected static $_fileExtension=  array('.php', '.class.php');
    
    protected static $_namespaceSeparator = '\\';
    
    public static function addClassSearchPath(array $pathes = array())
    {
        self::$_classSearchStack = array_intersect(self::$_classSearchStack, $pathes);
    }
    
    public static function addFileSuffix(array $pathes = array())
    {
        self::$_fileExtension = array_intersect(self::$_fileExtension, $pathes);
    }
    
    public static function setUserVendor($vender_name)
    {
        self::$_userVendorName = $vender_name;
    }
    
    public static function getUserVendor()
    {
        return self::$_userVendorName;
    }
    
    public static function setSkylineVendor($vendor_name)
    {
        self::$_skylineVendorName = $vendor_name;
    }
    
    public static function getSkylineVendor()
    {
        return self::$_skylineVendorName;
    }
    
    public static function setNamespaceSeparator($namespaceSeparator)
    {
        self::$_namespaceSeparator = $namespaceSeparator;
    }
    
    public static function getNamespaceSeparator()
    {
        return self::$_namespaceSeparator;
    }
    
    public static function autoload($class_name)
    {
        $class_name = ltrim($class_name);
        foreach (self::$_classSearchStack as $searchaPath) {
            $path = $searchaPath . DIRECTORY_SEPARATOR . str_replace(array('\\','_'), DIRECTORY_SEPARATOR, $class_name);
            foreach (self::$_fileExtension as $extension) {
                $file_path_name = $path . $extension;
                if (file_exists($file_path_name)) {
                    include_once $file_path_name;
                    return;
                }
            }
        }
        return ;
        /*
        if (strpos('\\', $class_name)) { // 包含命名空间，加上endor拼接成路径.
            if (self::$_userVendorName) {
                $path = ROOT_PROJECT_PATH . DIRECTORY_SEPARATOR . self::$_userVendorName . DIRECTORY_SEPARATOR . str_replace(array('\\','_'), DIRECTORY_SEPARATOR, $class_name);
            } else {
                $path = ROOT_PROJECT_PATH . DIRECTORY_SEPARATOR . str_replace(array('\\','_'), DIRECTORY_SEPARATOR, $class_name);
            }
            foreach (self::$_fileExtension as $extension) {
                $file_path_name = $path . $extension;
                if (file_exists($file_path_name)) {
                    include_once $file_path_name;
                    return ;
                }
            }
            return;
        } else {
            
        }
         * 
         */
    }
}