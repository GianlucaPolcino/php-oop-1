<?php
  class Movie{
    public $title;
    public $genre;
    public $duration;
    public $lobby;
    public $description;

    function __construct($_title, $_genre, $_duration, $_lobby, $_description){
      $this->title = $_title;
      $this->genre = $_genre;
      $this->duration = $_duration;
      $this->lobby = $_lobby;
      $this->description = $_description;
    }

    public function getTrimDescription($length = 40){
      return substr($this->description, 0, $length) . ("...");
    }
  }
 ?>
