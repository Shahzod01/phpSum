<?php

namespace Shahzod\PhpSum;

class Sum
{
    public function __invoke(...$numbers)
    {
        return array_sum($numbers);
    }
}
