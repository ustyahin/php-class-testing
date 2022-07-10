<?php

class Database
{
   public $link;

   public function connect()
   {
        $this->link = mysqli_connect("localhost", "root", "");
        mysqli_select_db($this->link, "class");

        if ($this->link == false) {
            throw new Exception('Нет подключения к БД');
        }
   } 
};

 