<?php

//class declaration
class Person 
{
}

// object instantiation
$person = new Person

//class properties and constructor
class Person 
{
   protected $firstName;
   protected $lastName;
   public function __construct($firstName, $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName
   }

// Constructor Property Promotion (PHP 8)
class Person 
{
    public function __construct(protected $firstName, protected $lastName) 
    {

    }

// Getter and Setter
class Person
{
    private $name;

    public function setName($name){
        if(!is_string($name)){
            throw new Exception('$name must be a string!');
        }
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }
}

// Readonly properties (PHP 8.1)
class Person 
{
    public function __construct(
        public readonly string $firstName, 
        public readonly string $lastName
    ) {

    }
}

//static constructor
public static function create(...$params) {
    return new self($params)
}
$person = Person::create(‘Mike’, ‘Taylor’);

// Static Method
class greeting {
  public static function welcome() {
    echo "Hello World!";
  }
}

// Call static method
greeting::welcome();

// Static method call
class greeting {
  public static function welcome() {
    echo "Hello World!";
  }

  public function __construct() {
    static::welcome();
  }
}
new greeting();

// Static constant
class Connection
{
  const MAX_USER = 100;
}
echo Connection::MAX_USER # 100

// class inheritance
class Customer extends Person
{
    public function name()
    {
        parent::name();
        echo 'Override method';  
    }
}

// self keyword reference current class (not modify by inheritance late binding like static will be)
self::welcome();

// Interface
interface Animal {
  public function makeSound();
}

class Cat implements Animal {
  public function makeSound() {
    echo "Meow";
  }
}
$animal = new Cat();
$animal->makeSound();

//Trait (mix-in)
trait HelloWorld {
    public function sayHello() {
        echo 'Hello World!';
    }
}

class Greetings {
    use HelloWorld;
}
$object = new Greetings();
$object->sayHello();