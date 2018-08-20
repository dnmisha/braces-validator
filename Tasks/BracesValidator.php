<?php
/**
 * Created by PhpStorm.
 * User: mihailvysochin
 * Date: 20.08.2018
 * Time: 14:29
 */

class BracesValidator
{
    /**
     * @param string $text
     * @return bool
     */
    public function isValidEntry(string $text): bool
    {
        $balance = [];

        for ($i = 0; $i < strlen($text); $i++) {
            if ($text[$i] === "(" || $text[$i] === "{" || $text[$i] === "[") {
                array_push($balance, $text[$i]);
            } elseif ($text[$i] === ")") {
                if (array_pop($balance) !== "(") {
                    return false;
                }
            } elseif ($text[$i] === "}") {
                if (array_pop($balance) !== "{") {
                    return false;
                }
            } elseif ($text[$i] === "]") {
                if (array_pop($balance) !== "[") {
                    return false;
                }
            }
        }

        if (count($balance) == 0) {
            return true;
        }

        return false;
    }
}
