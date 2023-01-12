<?php

    // user object
    class User{

        // public $email;
        // public $name;
        private $email;
        private $name;

        // constructer function
        // public function __construct()
        public function __construct($name,$email)
        {
            // $this is referring to this object
            // $this->email = 'guest@gmail.com';
            // $this->name = 'Guest';
            $this->email = $email;
            $this->name = $name;
        }

        public function login(){
            // have access to name and email
            echo 'User has logged in ' . $this->name . ' with email ' . $this->email;
        }

        // get private value
        // getters
        public function getName(){
            return $this->name;
        }

        // editting a private value
        // setters
        public function setName($name){
            if(is_string($name) && strlen($name) > 1){
                $this->name = $name;
                return "name has been updated to $name";
            }else{
                return 'not a valid name';
            }
        }

    }

    // new user object
    // $user = new User();
    $userOne = new User('mario','mario@gmail.com');

    // -> to use function
    // $user->login();
    $userOne->login();

    // Getting private name via public function
    // echo $userOne->getName();
    // echo $userOne->setName('Par');

    // Can change vlaues because it is public
    // $userOne->name = 'gary';
    // echo $userOne->name;

    // no need to use $ for $name
        // echo '<br>' . $user->name;
        // echo '<br>' . $userOne->name;
        // echo '<br>' . $userOne->email;

?>