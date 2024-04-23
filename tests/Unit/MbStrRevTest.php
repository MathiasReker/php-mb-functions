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

final class MbStrRevTest extends TestCase
{
    public function testReversesString(): void
    {
        $this->assertEquals('olleh', Mbstring::strrev('hello'));
        $this->assertEquals('dlrow', Mbstring::strrev('world'));
        $this->assertEquals('', Mbstring::strrev(''));
    }

    public function testHandlesMultibyteCharacters(): void
    {
        $this->assertEquals('はちにんこ', Mbstring::strrev('こんにちは'));
        $this->assertEquals('요세하녕안', Mbstring::strrev('안녕하세요'));
        $this->assertEquals('界世，好你', Mbstring::strrev('你好，世界'));
        $this->assertEquals('öäå', Mbstring::strrev('åäö'));
        $this->assertEquals('öäÅ', Mbstring::strrev('Åäö'));
    }

    public function testHandlesEncoding(): void
    {
        $this->assertEquals('olleh', Mbstring::strrev('hello', 'SJIS'));
        $this->assertEquals('åØÆ', Mbstring::strrev('ÆØå'));
    }
}
