<?php $connect = mysql_connect(“127.0.0.1”, “root”, “6!Chargers24”); 
if (!connect) { 
  die('Connection Failed: ' . mysql_error()); { 
    mysql_select_db(“database_name”, $connect); 
