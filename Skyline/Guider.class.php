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
 * @filename Function.php 
 * @encoding UTF-8 
 * @author sunyuw <leentingOne@gmail.com> 
 * @link https://github.com/onesy/skyline.git 
 * @copyright only free software in my mind 
 * @license http://mit-license.org/licenses/
 * @datetime Aug 22, 2014  4:51:23 PM
 * @version 1.0
 * @Description no description yet
 */

class Skyline_Guider {
    
     protected static $http_host = "";
    
    // 计划这里添加方法注册钩子
    
    public function pleaseGuideMe()
    {
        global $global_root_server;
        self::setHttpHost($global_root_server['http_host']);
        $index_file_path = self::getHttpHost() . DIRECTORY_SEPARATOR . 'index.php';
        if (!file_exists($index_file_path)) {
            echo "Guide Faild: can not find index file $index_file_path , please check your configure!";
            die;
        }
        include $index_file_path;
    }
    
    public static function getHttpHost()
    {
        return self::$http_host;
    }
    
    public static function setHttpHost($http_host)
    {
        self::$http_host = $http_host;
    }
}