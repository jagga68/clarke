<?php

class Song {
    public $songId;
    public $title;

}

$firstSong = new Song();
$firstSong->songId = 1001;
$firstSong->title = "Octopus's Garden";

//var_dump($firstSong);

class Playlist {
    public $name;
    public $songs = [];

    public function addSong($song)
    {
        $this->songs[] = $song;
    }

}

$playList = new Playlist();
$playList->name = 'Rock!';
$playList->addSong($firstSong);

$secondSong = new Song();
$secondSong->songId = 1002;
$secondSong->title = "Yellow Submarine";

$playList->addSong($secondSong);

var_dump($playList->songs);



?>