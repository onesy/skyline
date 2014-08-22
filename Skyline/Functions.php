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
 * @filename Functions.php 
 * @encoding UTF-8 
 * @author sunyuw <leentingOne@gmail.com> 
 * @link https://github.com/onesy/skyline.git 
 * @copyright only free software in my mind 
 * @license http://mit-license.org/licenses/
 * @datetime Aug 22, 2014  4:58:09 PM
 * @version 1.0
 * @Description 注册一些必备的方法
 */
/**
 * Sunyuw - 处理请求的参数
 * 
 * @param int  $type
 * @param type $varname
 * 
 * @return type
 */
function filterInput($type, $varname)
{
    $post_var = filter_input(INPUT_POST, $varname);

    $get_var = filter_input(INPUT_GET, $varname);

    if ($type == INPUT_GET) {
        return $get_var;
    } elseif ($type == INPUT_POST) {
        return $post_var;
    } elseif ($type == INPUT_REQUEST) {
        $request = $post_var ? $post_var : $get_var;
        return $request;
    }
}

function registAccessRoute() {
    // 直接利用$_SERVER['HTTP_HOST'] 做分发
    global $global_root_server;
    $global_root_server['http_host']= strtolower(filter_input("INPUT_SERVER", 'HTTP_HOST'));
}

function GetSessionInt($r,$default=0){
    return isset($_SESSION[$r]) ? intval($_SESSION[$r]) : $default;
}
function GetSessionFloat($r,$default=0){
    return isset($_SESSION[$r]) ? floatval($_SESSION[$r]) : $default;
}
function GetSession($r,$default=null){
    return isset($_SESSION[$r]) ? $_SESSION[$r] : $default;
}

function GetCookie($n, $def = null){
    return isset(filter_input("INPUT_COOKIE", $n)) ? filter_input("INPUT_COOKIE", $n) : $def;
}