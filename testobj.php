<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
//error_reporting(0);

class Example {
	public $prop1 = 'Sou uma propriedade da classe'; // property declaration
	
  public static function ola(){ // method declaration
    echo 'hello';
  }
  public function world(){
    echo ' world';
  }
}

// Static method, can be called from the class name

Example::ola();

// Instance method, can only be called from an instance of the class
$obj = new Example(); // object
// -> acede às propriedades e métodos de um objeto
$obj->world();
//echo $obj->prop1;
//var_dump($obj);
echo '</br>'.'---------------------'.'</br>';
 
class MyClass {
  public $prop1 = "Sou um propriedade de classe!";
  
  public function __construct()
  {
      echo 'A classe "', __CLASS__, '" foi instanciada!<br />';
  }
  
 /*
  public function __destruct()
  {
      echo 'A classe "', __CLASS__, '" foi destruída.<br />';
  }
 */
  public function setProperty($newval)
  {
      // se $newval viewr vazio assume o que está em $prop1!!!
      $this->prop1 = $newval;
  }
 
  public function getProperty()
  {
      return $this->prop1;
  }
}

$obj = new MyClass; 
//echo $obj->prop1;
echo $obj->getProperty().'</br>';
$obj->setProperty("Sou um novo valor da propriedade!");
echo $obj->getProperty();

//unset($obj);

echo '</br>'.'---------------------'.'</br>';
class SimpleClass {
    // property declaration
    public $var = 'A default value';

    public function displayVar() {
        echo $this->var;
    }
    
    // method declaration
    public static function novoMetodo() {
        echo 'Isto é um método estático'.'</br>';
    }
    
}

SimpleClass::novoMetodo();
$obj2 = new SimpleClass;
$obj2->displayVar();
echo '</br>'.'---------------------'.'</br>';


class Person
{
  private $_name;
  private $_job;
  private $_age;
 
  public function __construct($name, $job, $age)
  {
      $this->_name = $name;
      $this->_job = $job;
      $this->_age = $age;
  }
 
  public function changeJob($newjob)
  {
      $this->_job = $newjob;
  }
 
  public function happyBirthday()
  {
      ++$this->_age;
  }
  public function finalF(){
     echo $this->_age;
     echo $this->_name;
     echo $this->_job;
  
  }
}
$person1 = new Person("Tom", "Button-Pusher", 34);

 //echo "<pre>Person 1: ", print_r($person1,TRUE), "</pre>";
 $person1->changeJob("Box-Mover");
 //echo "<pre>Person 1: ", print_r($person1,TRUE), "</pre>";
 $person1->happyBirthday();
 //echo "<pre>Person 1: ", print_r($person1,TRUE), "</pre>";
 //$output    =    print_r($person1,TRUE); 
 
$person1->finalF();
 
?>
