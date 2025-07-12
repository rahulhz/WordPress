<?php
function greet($name, $color){
    echo "<p>Hi, my name is $name and my favorite color is $color</p>";
}

greet('John','blue');
greet('Jane','green');
?>


<?php
$names = array('Rahul','Piyush','Pappu','Manish');
$count = 0;

while ($count < count($names)) {
    echo "<p>Hey, my name is {$names[$count]}</p>";
    $count++;
}
?>


