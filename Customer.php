<?php

class Customer {
    private $id;
    private $firstName;
    private $surName;
    private $email;

    public function __construct(
        int $id,
        string $firstName,
        string $surName,
        string $email
    ) {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->surName = $surName;
        $this->email = $email; 
    }

    public function __set($variable, $value) {}
        public function __get($variable) {
            if(isset($this->variable)) return $this->variable;
            else {
                return "Property not set!";
            }
        }

    public function __toString() {
        return "ID: {$this->id}<br>Name: {$this->firstName}<br>{$this->surName}<br>Email: {$this->email}";
    }

}