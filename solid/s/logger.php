<?php

class Logger
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