<?php
// criar o objeto
 class person{
    	  var $name; /* property */
     
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
 $stefan= new person();
 // $stefan = handle variável; 
 $stefan->set_name("João Pedro");
 echo "O nome do Stefan é:  ". $stefan->get_name();
 
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

