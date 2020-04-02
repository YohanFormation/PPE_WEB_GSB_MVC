<?php 

$controller = $_GET["controller"];
$action = $_GET["action"];

if($controller == "stock")
{

    include("Controller\stock_controller.php");
    $obj = new StockController();
    if($action == "f1")
    {
        $obj->findAll();
    }else
    {
        $obj->Contient();
    }
}

?>
