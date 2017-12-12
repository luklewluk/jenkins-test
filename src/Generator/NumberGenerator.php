<?php

namespace App\Generator;

/**
 * Generator for random numbers
 *
 * @package App\Generator
 * @author Lukasz Lewandowski <luklewluk@gmail.com>
 */
class NumberGenerator
{
    /**
     * Generate number between given range
     *
     * @param int $min Minimal number
     * @param int $max Maximum number
     *
     * @return int
     */
    public function generate(int $min = 0, $max = 100): int
    {
        return mt_rand($min, $max);
    }
}
