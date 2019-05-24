<?php 

    class Funcionarios{

        private $employeeID, $lastName, $firstName, $title, $address, $city, $region, $postalCode, $country, $homePhone;

        //Getters and setters

        

        public function getEmployeeID() {
            return $this->employeeID;
        }

        public function setEmployeeID($employeeID) {
            $this->employeeID = $employeeID;
        }

        public function getLastName() {
            return $this->lastName;
        }

        public function setLastName($lastName) {
            $this->lastName = $lastName;
        }

        public function getFirstName() {
            return $this->firsName;
        }

        public function setFirstName($firsName) {
            $this->firsName = $firsName;
        }

        public function getTitle() {
            return $this->title;
        }

        public function setTitle($title) {
            $this->title = $title;
        }

        public function getAddress() {
            return $this->address;
        }

        public function setAddress($address) {
            $this->address = $address;
        }

        public function getCity() {
            return $this->city;
        }

        public function setCity($city) {
            $this->city = $city;
        }

        public function getRegion() {
            return $this->region;
        }

        public function setRegion($region) {
            $this->region = $region;
        }

        public function getPostalCode() {
            return $this->postalCode;
        }

        public function setPostalCode($postalCode) {
            $this->postalCode = $postalCode;
        }

        public function getCountry() {
            return $this->country;
        }

        public function setCountry($country) {
            $this->country = $country;
        }

        public function getHomePhone() {
            return $this->homePhone;
        }

        public function setHomePhone($homePhone) {
            $this->homePhone = $homePhone;
        }
    }
?>