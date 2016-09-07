<?php

    class Place {

        private $city_name;
        private $city_image;
        private $trip_length;

        function __construct($city, $image, $length) {
            $this->city_name = $city;
            $this->city_image = $image;
            $this->trip_length = $length;
        }
        function setCity($city){
            $this->city_name = (string) $city;
        }
        function getCity(){
            return $this->city_name;
        }
        function setImage($image){
            $this->city_image = (string) $image;
        }
        function getImage(){
            return $this->city_image;
        }
        function setLength($length) {
            $this->trip_length = (string) $length;
        }
        function getLength(){
            return $this->trip_length;
        }
        function save(){
            array_push($_SESSION['list_of_places'], $this);
        }
        static function getAll() {
            return $_SESSION['list_of_places'];
        }
        static function deleteAll(){
            $_SESSION['list_of_places'] = array();
        }
    }


?>
