<?php

namespace bbo51dog\cactus;

use bbo51dog\cactus\command\CactusCommand;
use pocketmine\plugin\PluginBase;

class CactusPlugin extends PluginBase{
    
    /** @var array */
    private $words;

    public function onEnable(){
        $file = $this->getResource('Words.json');
        $json = '';
        while (($line = fgets($file))) {
            $json .= $line;
        }
        fclose($file);
        $wordList = new WordList(json_decode($json, true));
        $commandMap = $this->getServer()->getCommandMap()->registerAll('cactus', [
            new CactusCommand($wordList, WordList::KEY_BBO),
            new CactusCommand($wordList, WordList::KEY_LAZYPERSON),
            new CactusCommand($wordList, WordList::KEY_REE),
            new CactusCommand($wordList, WordList::KEY_SAISANA),
            new CactusCommand($wordList, WordList::KEY_TAKUMATUTI),
            new CactusCommand($wordList, WordList::KEY_YURISI),
        ]);
    }
}