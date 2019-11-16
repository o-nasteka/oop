<?php

class FileLogger implements ILoger
{
    /**
     * @param $error
     */
    public function log($message){
        // save error message
        $this->saveToFile($message);
    }

    private function saveToFIle($message){
        // save to file
    }
}

class DBLogger implements ILoger
{
    private function saveToDB($message)
    {
        // save to db
    }

    public function log($message)
    {
        $this->saveToDB($message);
    }
}