<?php
// criar o objeto
 class person{
     var $name; /* property */
     
     // acrescentar métodos (funções)
     	function set_name($new_name){
     	 $this->name=$new_name;
     	 // $this chama outros métodos e propriedades do objecto / classe (built-in variable)
     	}
     	
     	function get_name(){
     	   return $this->name;
     	}
     	
 }
 $stefan= new person();
 // $stefan = handle variável
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

