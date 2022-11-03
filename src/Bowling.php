<?php
namespace APP;
class Bowling {
    private static int $score=0;
    public function newThrow (int $pinsNbr) :void
    {
        self::$score+=$pinsNbr;
       
    }
    public function getCurrentScore () :int
    {
        return self::$score;
    }
}