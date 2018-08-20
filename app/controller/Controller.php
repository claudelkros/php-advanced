<?php
/**
 * Created by PhpStorm.
 * User: CLAUDEL KROS
 * Date: 8/19/2018
 * Time: 5:32 PM
 */

namespace app\controller;


class Controller
{
    public function run(){
        $uri = $_SERVER['REQUEST_URI'];
        if (!empty($uri) && $uri[-1] === "/"){
            header('Location:' . substr($uri, 0, -1));
            header('HTTP/1.1 301 Moved Permanently');
            exit();
        }
        echo "bonjour";
    }
}