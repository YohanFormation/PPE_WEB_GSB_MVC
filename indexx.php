<?php 


$action = $_GET["action"];
    
include ("Controller/stock_controller.php");
$obj = new StockController();
$obj->{$action}();
    
?>