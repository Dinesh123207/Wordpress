<!-- <?php
function greet($name,$color){

    echo "my name is $name. My fav color is $color";
}
greet('dinesh','blue');
greet('vickey','purple');
?>
<h1>Hello guys</h1>
<h2> <?php  bloginfo( 'name' ); ?> </h2>
<p> <?php   bloginfo( 'description' ); ?> </p> -->

<?php

$names = array('brad', 'john', 'kajal','shruti');




$count =1;
while($count< 101){
    echo "<li> $count <li>";
    $count++;
}
?>
