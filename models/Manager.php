<?php

class Manager 

{
    protected function connectiondb()

    {
        
      $db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
      return $db;
        
    }
}