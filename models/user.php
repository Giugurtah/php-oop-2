<?php
    class user {
        // Properties
        public $name;
        public $surname;
        public $address;
        public $creditCard;

        // Construct
        public function __construct($_name, $_surname, $_address) {
            $this->name = $_name;
            $this->surname = $_surname;
            $this->address = $_address;
        }

        //Methods
        public function getCreditCard($_creditCard) {
            $this->creditCard = $_creditCard;
        }
    }
?>