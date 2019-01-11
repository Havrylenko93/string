<?php

declare(strict_types=1);

/**
 * Class StringComparison
 * strcmp — Binary safe string comparison. IS CASE SENSITIVE
 * strcasecmp - Binary safe string comparison. CASE-INSENSITIVE
 * strncmp — Binary safe string comparison of the first n characters. IS CASE SENSITIVE
 */

class StringComparison
{
    public $defaultMessage = 'equal';

    /**
     * @param string $firstString
     * @param string $secondString
     * @return string
     */
    public function compareCaseSensitive(string $firstString, string $secondString) :string
    {
        return (strcmp($firstString, $secondString) !== 0) ? 'Given strings is not equal in a case sensitive string comparison' : $this->defaultMessage;
    }

    /**
     * @param string $firstString
     * @param string $secondString
     * @return string
     */
    public function compareCaseInsensitive(string $firstString, string $secondString) :string
    {
        return (strcasecmp($firstString, $secondString) !== 0) ? 'Given strings is not equal in a case insensitive string comparison' : $this->defaultMessage;
    }

    public function compareFirstNCharacters(string $firstString, string $secondString, int $length) :string
    {
        return (strncmp($firstString, $secondString, $length) !== 0) ? 'Given strings is not equal' : $this->defaultMessage;
    }
}

$stringComparisonObject = new StringComparison();

printMessage($stringComparisonObject->compareCaseSensitive('First', 'first'));
printMessage($stringComparisonObject->compareCaseInsensitive('First', 'first'));
printMessage($stringComparisonObject->compareFirstNCharacters('firXYYYYY', 'firXZZZZZ', 3));

function printMessage($message) {
    echo $message  . nl2br(PHP_EOL);
}