<?php
$arr = array('apple','avocado', 'orange', 'pineapple');
$arrIterator = new ArrayIterator($arr);
$iterator = new RegexIterator($arrIterator, '/^a/');
print_r(iterator_to_array($iterator));
/*
__construct ($iterator, $regex, $op_mode=0, $spl_flags=0, $preg_flags=0);
The first parameter of note is $op_mode, which controls the regular expression operation
mode. This parameter defaults to RegexIterator::MATCH, but can also be one of the following:
GET_MATCH: In this mode, the current key in the iterator is passed as the third parameter to
the preg_match() function. This will replace the current key with the &$matches data.
ALL_MATCHES: This option is the same as GET_MATCH but substitutes the function preg_match_
all for preg_match.
SPLIT: This mode uses the preg_split function and works identically to GET_MATCH and
ALL_MATCHES.
REPLACE: This option takes the current iterator value and performs a regular expression
replacement, overwriting the value with the replaced string.
*/
/*
$arr = array('apple','avocado', 'orange', 'pineapple');
$arrIterator = new ArrayIterator($arr);
$iterator = new RegexIterator(
$arrIterator,
'/^(a\w{3})\w*$/',
RegexIterator::GET_MATCH
);
print_r(iterator_to_array($iterator));
*/
/*
$arr = array(0=>'A', 1=>'B', 2=>'C', 3=>'D', 'nonnumeric'=>'useless');
$arrIterator = new ArrayIterator($arr);
$iterator = new RegexIterator(
$arrIterator,
'/^\d*$/',
RegexIterator::MATCH,
RegexIterator::USE_KEY
);
print_r(iterator_to_array($iterator));
*/
?>