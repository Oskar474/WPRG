<?php
include "Playable.php";
include "Volume.php";


Class MusicPlayer implements Volume,Playable {

    private $volume = 0;
    private $isPlaying = false;
    function play()
    {
        $this->isPlaying = true;
    }
    function stop()
    {
        $this->isPlaying = false;
    }

    function increaseVolume()
    {
        if ($this->volume < 11)
            $this->volume += 1;
    }

    function decreaseVolume()
    {
        if ($this->volume > 0)
            $this->volume -= 1;
    }
    function getVolume()
    {
        return $this->volume;
    }

    function getStatus()
    {
        return $this->isPlaying;
    }
}
?>