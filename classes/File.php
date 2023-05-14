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

        $this->fp = fopen($this->file, 'a');


    }

    public function __destruct()
    {
        fclose($this->fp);
    }

    public function write($text)
    {
        if (fwrite($this->fp, $text) === FALSE) {
            echo "Не могу произвести запись в {$this->file}";
            exit;
        }
    }
}
