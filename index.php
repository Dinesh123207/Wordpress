


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

<!-- <?php

$names = array('brad', 'john', 'kajal','shruti');




$count =1;
while($count< 101){
    echo "<li> $count <li>";
    $count++;
}
?> -->

<?php
get_header();
while(have_posts()){
    the_post();?>

    <h2><a href="<?php the_permalink();?>"> <?php the_title(); ?> </a></h2>
    <?php the_content(); ?>
    <hr>
    <?php      } 
get_footer();

    




?>


