<?php 
    class Produtos{

        private $productID, $productName, $supplierID, $categoryID, $quantityPerUnit, $unitPrice;

        function getProductID(){
            return $this->productId;
        }

        function getProductName(){
            return $this->productName;
        }

        function getSupplierID(){
            return $this->supplierID;
        }

        function getCategory(){
            return $this->categoryID;
        }

        function getQdtPerUnity(){
            return $this->quantityPerUnit;
        }

        function getUniPrice(){
            return $this->unitPrice;
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

        function serCategoryID($tmpCategoryID){
            $this->categoryID = $tmpCategoryID;
        }

        function setQtdPerUnit($tmpQtdPerUnit){
            $this->quantityPerUnit = $tmpQtdPerUnit;
        }

        function setUniPrice($tmpUnitPrice){
            $this->unitPrice = $tmpUnitPrice;
        }

        
    }
?>