<?php
/**
 * This file is part of the php-mbstring-extension package.
 * (c) Mathias Reker <github@reker.dk>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace MathiasReker\PhpMbFunctions\Tests\Unit;

use MathiasReker\PhpMbFunctions\Mbstring;
use PHPUnit\Framework\TestCase;

final class MbLevenshteinTest extends TestCase
{
    public function testLevenshteinDistanceWithEqualStrings(): void
    {
        $string1 = 'hello';
        $string2 = 'hello';

        $distance = Mbstring::levenshtein($string1, $string2);

        $this->assertSame(0, $distance);
    }

    public function testLevenshteinDistanceWithDifferentStrings(): void
    {
        $string1 = 'kitten';
        $string2 = 'sitting';

        $distance = Mbstring::levenshtein($string1, $string2);

        $this->assertSame(3, $distance);
    }

    public function testLevenshteinDistanceWithEmptyString(): void
    {
        $string1 = '';
        $string2 = 'test';

        $distance = Mbstring::levenshtein($string1, $string2);

        $this->assertSame(4, $distance);
    }

    public function testLevenshteinDistanceWithLongStrings(): void
    {
        $string1 = 'This is a long string to test levenshtein distance';
        $string2 = 'This is a long string for testing levenshtein distance';

        $distance = levenshtein($string1, $string2);

        $this->assertSame(5, $distance);
    }

    public function testLevenshteinDistanceWithLongStringsOverLimit(): void
    {
        // Create two strings longer than 255 characters
        $string1 = str_repeat('a', 300);
        $string2 = str_repeat('b', 300);

        // Calculate Levenshtein distance
        $distance = Mbstring::levenshtein($string1, $string2);

        // Assert that the Levenshtein distance is correct
        $this->assertSame(300, $distance);
    }

    public function testLevenshteinWithMultibyteChars(): void
    {
        $string1 = 'こんにちは';
        $string2 = 'こんばんは';

        $distance = Mbstring::levenshtein($string1, $string2);

        $this->assertSame(2, $distance);
    }

    public function testLevenshteinWithMultibyteChars2(): void
    {
        $string1 = 'ø';
        $string2 = 'å';

        $distance = Mbstring::levenshtein($string1, $string2);

        $this->assertSame(1, $distance);
    }
}
