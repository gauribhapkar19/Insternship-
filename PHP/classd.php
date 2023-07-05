<?php
 class fruit
 {
   public $shape;
   public  $color;

   function __construct()
   {
    $this->shape="circle";
    $this->color="red";
   }

   function __destruct()
   {
    echo "<br><br>this will be executed at the end";
   }

   function setshape($s)
   {
    $this->shape=$s;
   }

   function getshape()
   {
     return $this->shape;
   }
   
   function setcolor($c)
   {
    $this->color=$c;
   }

   function getcolor()
   {
     return $this->color;
   }
 }
 
  class Apple extends fruit
  {
    private $type;

    function __construct( )
    {
      $this->type="kashmir";
    }

    function gettype()
    {
      return $this->type;
    }

    function settype($t)
    {
      $this->type=$t;
    }
  }

  //echo "<br> shape :".$ob1->shape;
  //echo "<br> color :".$ob1->color;

  /*$ob1=new fruit();
  $ob1->setshape("rectangle");
  $ob1->setcolor("red");

  echo "<br> shape : ".$ob1->getshape();
  echo "<br> color : ".$ob1->getcolor();

  $ob2=new fruit();
  echo "<br><br>object 2 : ";
  echo "<br> <br>shape : ".$ob2->getshape();
  echo "<br> color : ".$ob2->getcolor();

  $ob2->setshape("circle");
  $ob2->setcolor("purple");

  echo "<br> <br>shape : ".$ob2->getshape();
  echo "<br> color : ".$ob2->getcolor();

  $ob1=new fruit("rect","red");
  echo "<br>Shape : ".$ob1->getshape();
  echo "<br>color : ".$ob1->getcolor();

  $ob2=new fruit("circle","blue");
  echo "<br><br>Shape : ".$ob2->getShape();
  echo "<br>color : ".$ob2->getcolor();*/

   $ob1=new Apple();
   echo "shape : ".$ob1->getshape();
   echo "color : ".$ob1->getcolor();
   echo "type : ".$ob1->gettype();
?>  