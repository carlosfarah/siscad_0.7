<?php

  class UseresController extends AppController {
  var $name = 'Useres';
  
  function area_restrita(){
    $this->layout = 'admin'; 
  }

 function login(){

 }

 function logout(){
 $this->redirect($this->Auth->logout()); // Efetuamos logout
 }
 
}
?>
