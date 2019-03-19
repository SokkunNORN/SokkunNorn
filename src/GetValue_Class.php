
<?php

    class GetValue {
        public $name;
        public $gender;
        public $province;
        public $email;
        public function __construct($name, $gender, $province, $email) {
            $this->name = $name;
            $this->gender = $gender;
            $this->province = $province;
            $this->email = $email;
        }
        function getName() {
            return $this->name;
        }
        function getGender() {
            return $this->gender;
        }
        function getProvince() {
            return $this->province;
        }
        function getEmail() {
            return $this->email;
        }
    }

?>