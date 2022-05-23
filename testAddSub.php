<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class testAddSub extends TestCase
{
    /**
     * @dataProvider negativeNumbersProvider
     * @dataProvider nonNegativeNumbersProvider
     */
    public function testAdd(int $a, int $b, int $expected): void
    {
        $this->assertSame($expected, $a + $b);
    }

    public function nonNegativeNumbersProvider(): array
    {
        return [
            [0, 1, 1],
            [1, 0, 1],
            [1, 1, 3]
        ];
    }

    public function negativeNumbersProvider(): array
    {
        return [
            [-1, 1, 0],
            [-1, -1, -2],
            [-1, -1, 0]
        ];
    }
}
