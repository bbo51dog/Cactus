<?php

namespace bbo51dog\cactus;

class WordList{
    
    /** @var string */
    public const KEY_SAISANA = "Saisana299";
    public const KEY_LAZYPERSON = "lazyperson710";
    public const KEY_BBO = "bbo51dog";
    public const KEY_TAKUMATUTI = "xtakumatutix";
    public const KEY_YURISI = "yurisi";
    public const KEY_REE = "Reejp";
    
    /** @var array */
    private $words;
    
    public function __construct(array $words){
        $this->words = $words;
    }
    
    public function getWord(string $name): string{
        return $this->words[array_rand($this->words)];
    }
}