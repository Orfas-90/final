<?php

namespace system\core;

class Router
{
    public static $routers = [];
    public static $rout = [];

    public static function add($route)
    {
        foreach ($route as $k => $val){
            self::$routers[$k] = $val;
        }

    }

    /**
     * Метод проверяет совпадение с таблицей маршрутов
     * @param $url - адресная строка
     * @return bool
     */
    public static function checkRoute($url)
    {
        $url = self::removeQueryString($url);
        foreach (self::$routers as $k => $val){
            if(preg_match("#$k#i", $url, $matches)){
                $route = $val;
                foreach ($matches as $key => $match){
                    if(is_string($key)){
                        $route[$key] = $match;
                    }
                }
                $route['controller'] = self::uStr($route['controller']);
                if(!isset($route['action'])){
                    $route['action'] = 'index';
                }

                if(!isset($route['prefix'])){
                    $route['prefix'] = '';
                }
                self::$rout = $route;
                return true;
            }
        }
        return false;
    }

    private static function uStr($str)
    {
        $str = str_replace('-', ' ', $str);
        $str = ucwords($str);
        $str = str_replace(' ', '', $str);
        return $str;
    }
    private static function lStr($str)
    {
        return lcfirst(self::uStr($str));
    }


    public static function dispatch($path)
    {
        if(self::checkRoute($path)){
            $controller ='\app\controllers\\' .self::$rout['prefix']. self::$rout['controller'] . 'Controller';
            if(class_exists($controller)){

                $obj = new $controller(self::$rout);
                $action = self::lStr(self::$rout['action']) . 'Action';
                if(method_exists($obj, $action)){
                    if(isset(self::$rout['id'])){
                        $obj->$action(self::$rout['id']);
                    }else{
                        $obj->$action();
                    }

                    $obj->getView();
                }else{
                    http_response_code(404);
					include '404.html';
                }
            }else{
                http_response_code(404);
				include '404.html';
            }
        }else{
            http_response_code(404);
            include '404.html';
        }
    }

    private static function removeQueryString($url)
    {
        if($url != ''){
            $params = explode('&', $url);
            if(strpos($params[0], '=') === false){
                return $params[0];
            }else{
                return '';
            }

        }
        return $url;
    }

}