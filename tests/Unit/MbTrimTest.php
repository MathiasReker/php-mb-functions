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

final class MbTrimTest extends TestCase
{
    public function testTrim(): void
    {
        $this->assertSame('abc', Mbstring::trim('abc'));
        $this->assertSame('abc', Mbstring::trim("\n\t\r abc"));
        $this->assertSame('abc', Mbstring::trim("abc\n\t\r "));
        $this->assertSame('abc', Mbstring::trim("\n\t\r abc\n\t\r "));
        $this->assertSame("a\n\t\r c", Mbstring::trim("\n\t\r a\n\t\r c\n\t\r "));
    }

    public function testTrimUtf8(): void
    {
        $this->assertSame('Άξιον Εστί', Mbstring::trim(' Άξιον Εστί '));
        $this->assertSame('берегу пустынных', Mbstring::trim(' берегу пустынных '));
        $this->assertSame('Sîne klâwen', Mbstring::trim(' Sîne klâwen '));
        $this->assertSame('ĳs vrĳ', Mbstring::trim(' ĳs vrĳ '));
    }
}
