<?php


class Album {
    // public static $id = 0;
    public $year = 0;
    public $stamp = 0;
    public $name = 0;
    public $size = 0;
    public $album = 0;
    

    public function __construct ($year, $stamp, $name, $size, $album) {
        $this->year = $year;
        $this->stamp = $stamp;
        $this->name = $name;
        $this->size = $size;
        $this->album = $album;
        


    }
}