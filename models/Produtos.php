<?php 
    class Produtos{

        private $categoria, $fornecedor, $productId, $productName, $supplierID, $categoryID, $quantityPerUnit, $unitPrice, $unitsInStock, $unitsOnOrder, $reorderLevel;

        function getProductID(){
            return $this->productId;
        }

        function getProductName(){
            return $this->productName;
        }

        function getSupplierID(){
            return $this->supplierID;
        }

        function getCategoryID(){
            return $this->categoryID;
        }

        function getQtdPerUnit(){
            return $this->quantityPerUnit;
        }

        function getUnitPrice(){
            return $this->unitPrice;
        }

        function getCategoria(){
            return $this->categoria;
        }

        function getFornecedor(){
            return $this->fornecedor;
        }

        function getUnitsInStock(){
            return $this->unitsInStock;
        }

        function getUnitsOnOrder(){
            return $this->unitsOnOrder;
        }

        function getReorderLevel(){
            return $this->reorderLevel;
        }



        //Setters

        function setProductId($tmpProductId){
            $this->productId = $tmpProductId;
        }

        function setProductName($tmpProductName){
            $this->productName = $tmpProductName;
        }

        function setSupplierID($tmpSupplierID){
            $this->supplierID = $tmpSupplierID;
        }

        function setCategoryID($tmpCategoryID){
            $this->categoryID = $tmpCategoryID;
        }

        function setQtdPerUnit($tmpQtdPerUnit){
            $this->quantityPerUnit = $tmpQtdPerUnit;
        }

        function setUnitPrice($tmpUnitPrice){
            $this->unitPrice = $tmpUnitPrice;
        }

        function setCategoria($tmpCategoria){
            $this->categoria = $tmpCategoria;
        }

        function setFornecedor($tmpFornecedor){
            $this->fornecedor = $tmpFornecedor;
        }

        function setUnitsInStock($tmpUnitsInStock){
            $this->unitsInStock = $tmpUnitsInStock;
        }

        function setUnitsOnOrder($tmpUnitsOnOrder){
            $this->unitsOnOrder = $tmpUnitsOnOrder;
        }

        function setReorderLevel($tmpReorderLevel){
            $this->reorderLevel = $tmpReorderLevel;
        }

        
    }
?>