<?php

namespace App\Tests\Generator;

use App\Generator\NumberGenerator;
use PHPUnit\Framework\TestCase;

class NumberGeneratorTest extends TestCase
{
    public function testGenerate()
    {
        $generator = new NumberGenerator();
        $result = $generator->generate();

        $this->assertLessThanOrEqual(100, $result);
        $this->assertGreaterThanOrEqual(0, $result);
    }

    public function testGenerateWithParameters()
    {
        $min = 500;
        $max = 600;

        $generator = new NumberGenerator();
        $result = $generator->generate($min, $max);

        $this->assertLessThanOrEqual($max, $result);
        $this->assertGreaterThanOrEqual($min, $result);
    }
}
