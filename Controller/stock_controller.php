<?php 
include ("./Model/stock_model.php");
class StockController{

    var $information = array();

    public function findAll(){
        $obj = new stock();
        $tab = $obj->findAll();
        include ("./View/stock_view.php");
    }

    public function findCommencePar($CommencePar){
        $obj = new stock();
        $tab = $obj->findCommencePar($CommencePar);
        include ("./View/stock_view.php");
    }
}
?>