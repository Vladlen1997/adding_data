<?php

class File
{
    public $fp;  //opened file
    public $file; //the way of file

    public function __construct($file)
    {
        $this->file = $file;
        if (!is_writable($this->file)) {
            echo "Файл  {$this->file} недоступен для записи";
            exit;
        }

    }

    public function __destruct()
    {

    }

    public function write($text)
    {

    }
}
