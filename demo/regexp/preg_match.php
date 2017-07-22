<?php
if (preg_match("/php/i", "PHP")) {
    print "Проходит!\n";
}

preg_match("/php/", "php");//True
preg_match("php/", "php");//Error
preg_match("/php/", "PHP");//False
preg_match("/php/i", "PHP");//True
preg_match("/Foo/i", "FOO");//True

/////////////////////////////////////////////////////////////////
preg_match("/[A-Z]+/", "123");//False
preg_match("/[A-Z][A-Z0-9]+/i", "A123");//True
preg_match("/[0-9]?[A-Z]+/", "10GreenBottles");//True
preg_match("/[0-9]?[A-Z0-9]*/i", "10GreenBottles");//True
preg_match("/[A-Z]?[A-Z]?[A-Z]*/", "");//True
 
/////////////////////////////////////////////////////////////////
preg_match("/[A-Z]{3}/", "FuZ");//False
preg_match("/[A-Z]{3}/i", "FuZ");//True
preg_match("/[0-9]{3}-[0-9]{4}/", "555-1234");//True
preg_match("/[a-z]+[0-9]?[a-z]{1}/", "aaa1");//True
preg_match("/[A-Z]{1,}99/", "99")//False
preg_match("/[A-Z]{1,5}99/", "FINGERS99");//True
preg_match("/[A-Z]{1,5}[0-9]{2}/i", "adams42");//True
 
/////////////////////////////////////////////////////////////////
preg_match("/(Linux|Mac OS X)/", "Linux");//True
preg_match("/(Linux|Mac OS X){2}/", "Mac OS XLinux");//True
preg_match("/(Linux|Mac OS X){2}/", "Mac OS X Linux");//False
preg_match("/contra(diction|vention)/", "contravention");//True
preg_match("/Windows ([0-9][0-9] +|Me|XP)/", "Windows 2000");//True
preg_match("/Windows (([0-9][0-9] +|Me|XP)|Codename (Whistler|Longhorn))/", "Windows Codename Whistler");//True
 
//////////////////////////////////////////////////////////////////
$multitest = "This is\na long test\nto see whether\nthe dollar\nSymbol\nand
    the\ncaret symbol\nwork as planned";
/*
This is
a long test
to see whether
the dollar
Symbol
and the
caret symbol
work as planned
*/
preg_match("/is$/m", $multitest);
preg_match("/the$/m", $multitest);
preg_match("/^the/m", $multitest);
preg_match("/^Symbol/m", $multitest);
preg_match("/^[A-Z][a-z]{1,}/m", $multitest);

preg_match("/\AThis/m", $multitest);//True
preg_match("/symbol\z/m", $multitest);//False

////////////////////////////////////////////////////////////////
$string = "Foolish child!";
preg_match("/[\S]{7}[\s]{1}[\S]{6}/", $string);

preg_match("/oo\b/i", $string);//False
preg_match("/oo\B/i", $string);//True
    
preg_match("/no\b/", "he said 'no!'");//True
preg_match("/royalty\b/", "royalty-free photograph");//True

////////////////////////////////////////////////////////////////
$a = "Foo moo boo tool foo!";
preg_match("/[A-Za-z]oo\b/i", $a, $matches);
preg_match_all("/[A-Za-z]oo\b/i", $a, $matches);
var_dump($matches);
    
?>