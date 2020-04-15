<?php

namespace bbo51dog\cactus\command;

use bbo51dog\cactus\WordList;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

abstract class CactusCommandBase extends Command{

    /** @var string */
    protected $wordKey;
    
    /** @var WordList */
    private $wordList;
    
    public function __construct(WordList $wordList){
        $this->wordList = $wordList;
        parent::__construct(strtolower($this->wordKey), "{$this->wordKey}の名言をランダムに発言します");
    }
    
    public function execute(CommandSender $sender, $commandLabel, string $args){
        
    }
}