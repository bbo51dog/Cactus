<?php

namespace bbo51dog\cactus\command;

use bbo51dog\cactus\WordList;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class CactusCommand extends Command{

    /** @var string */
    private $wordKey;
    
    /** @var WordList */
    private $wordList;
    
    public function __construct(WordList $wordList, string $wordKey){
        $this->wordList = $wordList;
        $this->wordKey = $wordKey;
        parent::__construct(strtolower($this->wordKey), "{$this->wordKey}の名言をランダムに発言します");
    }
    
    public function execute(CommandSender $sender, string $commandLabel, array $args){
        
    }
}