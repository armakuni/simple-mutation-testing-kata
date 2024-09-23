<?php
declare(strict_types=1);

namespace Armakuni\SimpleMutationTestingKata\Maths;

use http\Exception\BadUrlException;

class Comparison
{

    public static function isEqual(int $a, int $b) : bool
    {
        return $a == $b;
    }

    public static function lessThan(int $a, int $b) : bool
    {
        return $a <= $b;
    }

    public static function greaterThan(int $a, int $b) : bool
    {
        return $a > $b;
    }
}