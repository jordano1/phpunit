<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class EqualsCanonicalizingTest extends TestCase
{
    public function testFailure()
    {
        $this->assertEqualsCanonicalizing([3, 2, 1], [2, 3, 0, 1]);
    }
}
