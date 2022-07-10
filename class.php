<?php

class Database
{
   public $link;

   public function connect()
   {
        $this->link = mysqli_connect("localhost", "root", "");
        mysqli_select_db($this->link, "class");

        if ($this->link == false) {
            exit("Ошибка подключения к БД");
        }
   } 
};

 