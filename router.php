<?

$mvcPath = filter_var($_SERVER['REQUEST_URI'], FILTER_SANITIZE_URL);
$mvcPath = mb_substr($mvcPath, 4);

$path = explode('/', $mvcPath);

if ($path[1] == "") {
  require_once('controllers/HomeController.php');
  $controller = new HomeController();
  $controller->index();
  exit();
  

} elseif ($path[1] == "about") {
  echo "О нас: ещё информация";
  exit();
  
} elseif ($path[1] == "products") {
  echo "Список товаров";
  exit();
} elseif ($path[1] == "product") {
  echo "Страничка товара"; 
  exit();
} elseif ($path[1] == "cart") {
  echo "Корзина";  
  exit();
} else {
  echo "404 not found";  
  exit();
}






