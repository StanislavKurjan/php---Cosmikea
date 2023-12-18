<?php
            
            $hostname='localhost';
            $username ='cosmIkea';
            $password='V1.rj)7hWWm@6M0v';
            $database='cosmikea';
            

            $connection = new mysqli($hostname, $username, $password, $database);
            if (!$connection) {
                die("Connection failed:" . mysqli_connect_error() );
            }


?>