<?php
session_start();
 
// create an array
$my_array=['kip', 'dog', 'mouse', 'bird', 'crocodile', 'wombat', 'koala', 'kangaroo'];
 
// put the array in a session variable
$_SESSION['bestelling']=$my_array;
 
// a little message to say we have done it
echo 'Putting array into a session variable';

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

