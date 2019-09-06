<?php


class StopWatch
{
    private $startTime;
    private $endTime;

    public function __construct()
    {
        $this->startTime = microtime(true);
    }


    public function getStartTime()
    {
        return $this->startTime;
    }


    public function getEndTime()
    {
        return $this->endTime;
    }   

    function start()
    {
        $this->startTime = microtime(true);
    }

    function stop()
    {
        $this->endTime = microtime(true);
    }

    function getElapsedTime() {
        return round(($this->endTime - $this->startTime)*1000,0);
    }
}