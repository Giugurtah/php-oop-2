<?php 
    class creditCard {
        protected $cardNumber;
        protected $expirationDate;

        //Methods
        public function getNumber($_cardNumber) {
            if ( strlen(str_replace(" ", "", $_cardNumber))!=16 ) {
                throw new Exception('Il codice della carta non è corretto');
            } else {
                $this->cardNumber = $_cardNumber;
            }
        }

        public function getDate($_expirationDate) {
            $date = date_create_from_format('j/m/Y', $_expirationDate);
            $date = date_format($date, 'm/j/Y');
            $today = date('m/j/Y');

            if ( strtotime($today) > strtotime($date) ) {
                throw new Exception('La  carta di credito è scaduta');
            } else {
                $this->expirationDate = $_expirationDate;
            }
        }
    }
?>