<?php

namespace App\Core;

class Router {
  
  private static array $routes = [];

  public static function get(string $uri, $callback) {
    $uri = trim($uri,"/");
    self::$routes["GET"][$uri] = $callback;
  }

  public static function post(string $uri, $callback) {
    $uri = trim($uri,"/");
    self::$routes["POST"][$uri] = $callback;
  }

  public static function dispatch(){
    
    $uri = $_SERVER["REQUEST_URI"];
    $uri = trim($uri,"/");
    $validUri = explode("?",$uri)[0];

    $method=$_SERVER["REQUEST_METHOD"];

    foreach (self::$routes[$method] as $route => $callback) {
      if(strpos($route,":")){
        $route = preg_replace("#:[a-zA-Z0-9]+#","([a-zA-Z0-9]+)",$route);
      }
      
      if(preg_match("#^$route$#",$validUri,$matches)){
          
        $params = array_slice($matches,1);
        
        if(is_callable($callback)){
          $response= $callback(...$params);
        }

        if(is_array($callback)){
          $controller = new $callback[0];
          $response   = $controller->{$callback[1]}(...$params);
        }
        
        if(is_array($response) || is_object($response)){
          header("Content-Type: application/json");
          echo json_encode($response);
        }else{
          echo $response;
        }
        
        return;
      }
    }

    echo "404";
    return;
  }

  public static function render(string $view, string $layout, array $data = []): string {
    extract($data);

    if(file_exists(__DIR__ ."/../views/$view.php") && file_exists(__DIR__ . "/../views/layouts/$layout.php")) {
      ob_start();
      include_once __DIR__ . "/../views/$view.php";
      $content = ob_get_clean();

      include_once __DIR__ . "/../views/layouts/$layout.php";
  
      return $content;
    }

    echo 'Developer error: View not found';
    return "Error 404";
  }

  public static function redirect(string $route): void{
    header("Location: {$route}");
  }

}