<?php

class Database
{
   public function connect()
   {
        $link = mysqli_connect("localhost", "root", "");
        mysqli_select_db($link, "class");

        if ($link == false) {
            exit("Ошибка подключения к БД");
        }
   } 
};

