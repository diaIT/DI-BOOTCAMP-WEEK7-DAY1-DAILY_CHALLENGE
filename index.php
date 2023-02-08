<?php 
/**
 * 
 */
class User
{
    public $firtName;
    public $lastName;
    
    function __construct($firtName)
    {
       $this->firtName=$firtName;
       
    }
    public function hello()
    {
        echo"hello,".$this->firtName;

    }
   
}

     function test()
    {
        $firtName="Jonnie";
        $lastName="Roe";
        $user1= new User("Jonnie");
        $user1->hello();
    }
     test();

 ?>