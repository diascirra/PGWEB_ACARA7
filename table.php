<!DOCTYPE html>
<html>
<body>
<pre>

<?php
$kdrama = array("queen of tears", "snowdrop", "Revenge of others", "alchemy of souls", "My Perfect Stranger"); 
$leadfemale = array("Kim Jiwon", "Kim Jisoo", "Shin yeeun", "go yoonjung", "Jin KiJoo");
$leadmale = array("Kim Soohyun", "Jung Haein", "Park Solomon", "Lee Jaewook", "Lee WonJung");

echo "<table border='2'>";
for($i=0; $i<=4; $i++) {
echo "<tr><td> $kdrama[$i] </td><td> $leadfemale[$i] </td><td> $leadmale[$i] </td></tr>";
}
echo "</table>";
?>

</pre>
</body>
</html>