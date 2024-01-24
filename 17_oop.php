<?php
/* --- Object Oriented Programming --- */

class User
{
  private $name;
  private $email;
  private $password;

  public function __construct($name, $email, $password)
  {
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
  }

  function set_name($name)
  {
    $this->name = $name;
  }

  function get_name()
  {
    return $this->name;
  }
}

$user1 = new User('Leo', 'leonardo@test.com', 'password');
$user2 = new User('John', 'john@test.com', 'password');

$user1->set_name('Leo');
$user2->set_name('John');

echo $user1->get_name() . '<br>';
echo $user2->get_name() . '<br>';

var_dump($user1);
var_dump($user2);

class Employee extends User
{
  private $title;
  public function __construct($name, $email, $password, $title)
  {
    parent::__construct($name, $email, $password);
    $this->title = $title;
  }
  public function get_title()
  {
    return $this->title;
  }
}

$employee1 = new Employee('Jane', 'jane@test.com', '4343', 'Manager');

echo $employee1->get_title();
