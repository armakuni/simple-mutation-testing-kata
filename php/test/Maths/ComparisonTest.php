<?php

namespace Armakuni\SimpleMutationTestingKata\Maths;

use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertFalse;
use function PHPUnit\Framework\assertTrue;

class ComparisonTest extends TestCase
{
    public function test1IsEqualTo1()
    {
        $this->assertTrue(Comparison::isEqual(1,1));
    }

    public function test2IsNotEqualTo1()
    {
        $this->assertFalse(Comparison::isEqual(2,1));
    }

    public function test1IsLessThan2()
    {
        $this->assertTrue(Comparison::lessThan(1,2));
    }

    public function test2IsNotLessThan1()
    {
        $this->assertFalse(Comparison::lessThan(2,1));
    }

    public function test2IsGreaterThan1()
    {
        $this->assertTrue(Comparison::greaterThan(2,1));
    }

    public function test1IsNotGreaterThan2()
    {
        $this->assertFalse(Comparison::greaterThan(1,2));
    }
}
