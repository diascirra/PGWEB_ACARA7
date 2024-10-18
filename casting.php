<!DOCTYPE html>
<html>
<body>

<pre>
<?php
$a = 10;       // Integer
$b = 3.14;    // Float
$c = "haiiii"; // String
$d = false;    // Boolean
$e = NULL;    // NULL

$a = (string) $a;
$b = (string) $b;
$c = (string) $c;
$d = (int) $d;
$e = (string) $e;

//To verify the type of any object in PHP, use the var_dump() function:
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
?> 
</pre>
<p>Note that when casting a Boolean into string it gets the value "1", and when casting NULL into string it is converted into an empty string "".</p>
</body>
</html>
