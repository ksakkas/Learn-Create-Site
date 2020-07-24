<!--
    $exp = "/expressions/i";

    Functions:
    preg_match()  - Returns 1 if the pattern was found in the string and 0 if not
    preg_match_all() - Returns the number of times the pattern was found in the string, which may also be 0
    preg_replace() - Returns a new string where matched patterns have been replaced with another string

    Modifiers:
    i - Performs a case-insensitive search
    m - Performs a multiline search (patterns that search for the beginning or end of a string will match the beginning or end of each line)
    u - Enables correct matching of UTF-8 encoded patterns

    Patterns:
    [abc] - Find one character from the options between the brackets
    [^abc] - Find any character NOT between the brackets
    [0-9] - Find one character from the range 0 to 9

    Metacharacters:
    |   Find a match for any one of the patterns separated by | as in: cat|dog|fish
    .   Find just one instance of any character
    ^	Finds a match as the beginning of a string as in: ^Hello   
    $	Finds a match at the end of the string as in: World$
    \d	Find a digit
    \s	Find a whitespace character
    \b	Find a match at the beginning of a word like this: \bWORD, or at the end of a word like this: WORD\b
    \uxxxx	Find the Unicode character specified by the hexadecimal number xxxx

    n+	Matches any string that contains at least one n
    n*	Matches any string that contains zero or more occurrences of n
    n?	Matches any string that contains zero or one occurrences of n
    n{x}	Matches any string that contains a sequence of X n's
    n{x,y}	Matches any string that contains a sequence of X to Y n's
    n{x,}	Matches any string that contains a sequence of at least X n's
-->

<!DOCTYPE html>
<html>
<body>

<?php
$str = "Regular Expr";
$pattern = "/Expr/i";
echo preg_replace($pattern, "Expression", $str);
?>

</body>
</html>
