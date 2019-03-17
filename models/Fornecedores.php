<?php 

    class Fornecedores{

        private $supplierID, $companyName, $contactName, $contactTitle, $address, $city, $region, $postalCode, $country, $phone, $fax, $homePage;

        //Getters

        public function getSupplierID() {
            return $this->supplierID;
        }

        public function getCompanyName() {
            return $this->companyName;
        }

        public function getContactName() {
            return $this->contactName;
        }

        public function getContactTitle() {
            return $this->contactTitle;
        }

        public function getAddress() {
            return $this->address;
        }

        public function getCity() {
            return $this->city;
        }

        public function getRegion() {
            return $this->region;
        }

        public function getPostalCode() {
            return $this->postalCode;
        }

        public function getCountry() {
            return $this->country;
        }

        public function getPhone() {
            return $this->phone;
        }

        public function getFax() {
            return $this->fax;
        }

        public function getHomePage() {
            return $this->homePage;
        }

        //Setters

        public function setSupplierID($supplierID) {
            $this->supplierID = $supplierID;
        }

        public function setCompanyName($companyName) {
            $this->companyName = $companyName;
        }

        public function setContactName($contactName) {
            $this->contactName = $contactName;
        }

        public function setContactTitle($contactTitle) {
            $this->contactTitle = $contactTitle;
        }

        public function setAddress($address) {
            $this->address = $address;
        }

        public function setCity($city) {
            $this->city = $city;
        }

        public function setRegion($region) {
            $this->region = $region;
        }

        public function setPostalCode($postalCode) {
            $this->postalCode = $postalCode;
        }

        public function setCountry($country) {
            $this->country = $country;
        }

        public function setPhone($phone) {
            $this->phone = $phone;
        }

        public function setFax($fax) {
            $this->fax = $fax;
        }

        public function setHomePage($homePage) {
            $this->homePage = $homePage;
        }
    }
?>