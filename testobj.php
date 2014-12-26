<?php
class Example {
  public static function hello(){
    echo 'hello';
  }
  public function world(){
    echo 'world';
  }
}

// Static method, can be called from the class name
Example::hello();

// Instance method, can only be called from an instance of the class
$obj = new Example();
$obj->world();
?>
