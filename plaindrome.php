<?php

/**
 * Check to see if a word is a palindrome
 *
 * @see https://www.khanacademy.org/computing/computer-science/algorithms/recursive-algorithms/a/using-recursion-to-determine-whether-a-word-is-a-palindrome
 *
 * @param string $word One word to test for palindrome syndrome
 *
 * @return bool
 */
function palindrome($word)
{
    $originalWord = $word;
    $word         = strtolower($word);
    $word         = str_replace(" ", "", $word);
    $hasSpaces    = sizeof(explode(" ", $originalWord)) > 1;

    if (empty($word)) {
        echo 'Please enter a string as an argument' . PHP_EOL;

        return false;
    }

    $chars    = str_split($word);
    $numChars = sizeof($chars);
    if ($numChars == 1 || $numChars == 0) {
        return true;
    }

    for ($i = 0; $i < $numChars; $i++) {

        $firstIndex = $i;
        $lastIndex  = ($numChars - $i - 1);

        if ($chars[ $firstIndex ] != $chars[ $lastIndex ]) {
            echo $originalWord . ' is not a plaindrome' . PHP_EOL;

            return false;
        }
    }

    echo '"' . $originalWord . '" is a ' . $numChars . ' character long palindrome ' . ($hasSpaces ? 'sentence' : 'word') . PHP_EOL;

    return true;
}

$arg = isset($argv[1]) ? $argv[1] : null;

echo PHP_EOL;
palindrome($arg);
echo PHP_EOL;