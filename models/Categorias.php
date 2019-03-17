<?php 
	
	class Categorias{

		private $categoryID, $categoryName, $description;

		//Getters

		public function getCategoryID() {
		    return $this->categoryID;
		}

		public function getCategoryName() {
		    return $this->categoryName;
		}

		public function getDescription() {
		    return $this->description;
		}

		//Setters

		public function setCategoryID($categoryID) {
		    $this->categoryID = $categoryID;
		}

		public function setCategoryName($categoryName) {
		    $this->categoryName = $categoryName;
		}

		public function setDescription($description) {
		    $this->description = $description;
		}
	}
 ?>