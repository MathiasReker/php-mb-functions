<?php
/**
 * This file is part of the php-mbstring-extension package.
 * (c) Mathias Reker <github@reker.dk>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace MathiasReker\PhpMbFunctions;

interface MbstringInterface
{
    /**
     * Calculate the Levenshtein distance between two strings.
     *
     * This function measures the minimum number of single-character edits (insertions, deletions, or substitutions)
     * required to change one string into the other.
     *
     * @param string $string1 the first string to compare
     * @param string $string2 the second string to compare
     * @param int    $costIns [optional] The cost of insertion. Default is 1.
     * @param int    $costRep [optional] The cost of replacement. Default is 1.
     * @param int    $costDel [optional] The cost of deletion. Default is 1.
     *
     * @return int returns the Levenshtein distance between the two strings,
     *             or -1 if either string exceeds the limit of 255 characters
     */
    public static function levenshtein(string $string1, string $string2, int $costIns = 1, int $costRep = 1, int $costDel = 1): int;

    /**
     * Uppercase the first character of each word in a string.
     *
     * @param string $string   the input string to modify
     * @param string $encoding [optional] The character encoding. Defaults to 'UTF-8'.
     *
     * @return string the modified string
     */
    public static function ucwords(string $string, string $encoding = 'UTF-8'): string;

    /**
     * Make the first character of a string uppercase.
     *
     * @param string $string   the input string
     * @param string $encoding [optional] The character encoding. Defaults to 'UTF-8'.
     *
     * @return string the resulting string
     */
    public static function ucfirst(string $string, string $encoding = 'UTF-8'): string;

    /**
     * Reverse a string.
     *
     * @param string $string   the string to be reversed
     * @param string $encoding [optional] The character encoding. Defaults to 'UTF-8'.
     *
     * @return string the reversed string
     */
    public static function strrev(string $string, string $encoding = 'UTF-8'): string;

    /**
     * Returns information about characters used in a string.
     *
     * @param string $string   the string to be examined
     * @param int    $mode     Specifies what information to return.
     *                         - 0: Returns an array with the byte-value as key and the frequency of
     *                         every byte as value.
     *                         - 1: Same as 0 but only byte-values with a frequency greater than zero are listed.
     *                         - 2: Same as 0 but only byte-values with a frequency equal to zero are listed.
     *                         - 3: Returns a string containing all unique characters in the string.
     *                         - 4: Returns a string containing all characters in the string that are not used.
     * @param string $encoding [optional] The character encoding. Defaults to 'UTF-8'.
     *
     * @return array<string, int<0, max>>|string Returns the information requested based on the mode parameter:
     *                                           - Mode 0, 1, or 2: returns an array with byte-values as keys and frequencies as values.
     *                                           - Mode 3 or 4: returns a string with unique characters or unused characters.
     *
     * @throws \ValueError if the mode parameter is not between 0 and 4 (inclusive)
     */
    public static function count_chars(string $string, int $mode, string $encoding = 'UTF-8'): array|string;

    /**
     * Multibyte-aware trim function.
     *
     * This function trims whitespace or specified characters from the beginning and end of a string.
     * It supports multibyte characters and provides functionality similar to PHP's built-in trim function.
     *
     * @param string $str      the string to trim
     * @param string $charlist [optional] The characters to trim. If not specified, whitespace characters are trimmed.
     *                         You can also specify Unicode whitespace characters or character ranges using the charlist parameter.
     *                         Defaults to null.
     *
     * @return string the trimmed string
     */
    public static function trim(string $str, string $charlist = " \t\n\r\0\x0B"): string;
}
