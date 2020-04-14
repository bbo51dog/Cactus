<?php

namespace bbo51dog\cactus;

use pocketmine\plugin\PluginBase;

class CactusPlugin extends PluginBase{
    
    /** @var array */
    private $words;

    public function onEnable(){
        $file = $this->getResource('kana.json');
        $json = '';
        while (($line = fgets($file))) {
            $json .= $line;
        }
        fclose($file);
        $wordList = new WordList(json_decode($json, true));
    }
}