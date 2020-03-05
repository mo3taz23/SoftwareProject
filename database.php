<?php
$mysqli = new mysqli('localhost', 'root', '1234', 'Online Courses');
    if($mysqli->connect_error)
        {
        echo $mysqli->connect_error;
        }
		
  ?>
