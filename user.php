<?php

class User{

  public $name;
  public $email;

  public function __construct($name, $email){
    $this->name = $name;
    $this->email = $email;
  }

  public function describe(){
    return "{$this->name} ({$this->email})";
  }

}

$u1 = new User("Alice", "alice@example.com");
echo $u1->describe();

?>
