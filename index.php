<?php


class Movie {
  public $title;
  public $gender;
  public $description;
  public $actors;
  public $year;
  public $duration;
  public $publisher;

function __construct(String $title, String $gender, String $description, String $actors, INT $year, String $duration, String $publisher) {
  $this->title = $title;
  $this->gender = $gender;
  $this->$description = $description;
  $this->actors = $actors;
  $this->year = $year;
  $this->duration = $duration;
  $this->publisher = $publisher;
}

public function print() {
  return "$this->title, $this->gender, $this->description, $this->actors, $this->year, $this->duration, $this->publisher";
}
}