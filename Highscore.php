<?php
$highscore = array("Magd"=>"90", "Millad"=>"90", "Emanuel"=>"80", "Deved"=>"70", "Edwar"=>"50");
arsort($highscore);
echo "<ol>";
foreach($highscore as $x => $_value){
    echo "<li> $x har $_value poäng. </li>";
}
echo "</ol>";
?>