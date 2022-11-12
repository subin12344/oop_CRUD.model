<?php

class DB {
    function connection() {
        $con = mysqli_connect('localhost', 'root', '', 'test');
        if (!$con) {
            die('Connection error' . mysqli_connect_error());
        }
      return $con;  
    }
}


/* 
 * OOP provides a clear structure for the programs. 
 * OOP helps to keep the PHP code DRY "Don't Repeat Yourself", 
 * and makes the code easier to maintain, modify and debug. 
 * OOP makes it possible to create full reusable applications with less code 
 * and shorter development time.
 */