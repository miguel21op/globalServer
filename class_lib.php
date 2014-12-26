<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
error_reporting(0);

// criar a classe
 class person{
    	 var $name; /* property */
        
         public function __construct($persons_name){
         	$this->name = $persons_name;
         }
         
     // acrescentar métodos (funções)
     	 public function set_name($new_name){
     	 $this->name=$new_name;
     	  //echo ($this->name);
     	 // $this chama outros métodos e propriedades do objecto / classe (built-in variable)
     	}
     	
     	function get_name(){
     	   return $this->name;
     	}
     	
 }
 // o new cria o objecto a partir da classe
// $stefan= new person();
 $jimmy = new person;
 //$stefan = handle variável; 
// $stefan->set_name("João Pedro");
 // ou for short
 $stefan=new person("João Pedro Matos");
 $jimmy ->set_name("Jimmy Silva");
 echo "O nome do Stefan é:  ". $stefan->get_name().'</br>';
 echo "O nome do Jimmy é:  ". $jimmy->name;
 
/*
class MyClass
{
    private $foo = FALSE;

    public function __construct()
    {
        $this->foo = TRUE;

        echo($this->foo);
    }
}
$bar = new Myclass();
*/
?>
