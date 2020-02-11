<?php
namespace Enigma972\Utils;

class UniqEnigmaNamer
{
    static public function randName()
    {
        return uniqid(sha1(microtime()), true);
    }
}
