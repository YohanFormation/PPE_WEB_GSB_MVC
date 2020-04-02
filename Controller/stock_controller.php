<?php 

include("./Model/connexion.php");
include("./Model/stock_model.php");

class StockController{

    public function findAll(){
        $obj = new stock();
        $tab = $obj->findAll();
        include("./View/stock_view.php");
    }

    public function Contient(){
        $obj = new stock();
        $tab = $obj->Contient("DELL");
        include("./View/stock_view.php");
    }


}





?>