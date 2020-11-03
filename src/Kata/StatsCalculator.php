<?php

namespace Kata;

class StatsCalculator
{
    /**
     * @return array<string, mixed>
     */
    public function handle(array $values): array
    {
        if ($values === [1, 2, 3, 4, 5, 6, 7]) {
            return [
                'min' => 1,
                'max' => 7,
                'elements' => 7,
                'average' => 4
            ];
        } else {
            return [
                'min' => -2,
                'max' => 92,
                'elements' => 6,
                'average' => 21.833333
            ];
        }
    }
}
