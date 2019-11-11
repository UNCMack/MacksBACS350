<?php
    // Code to define functions
    require_once 'views.php';
    require_once 'superhero_views.php';
    require_once 'superhero_db.php';
    // List superhero records
    $list = render_superheroes(list_superheroes ($db));
    
    // Button to go to other views
    $add_button = '<p><a class="button" href="insert.php">Add Superhero</a></p>';
    
    $intro = '
        <p>
            A list of my favorite super heros
        </p>
       
    ';
    $content = "$intro $add_button $list";
    // Show the page
    echo render_page('Look SuperHeros', "Mack's Super League of Mighty Amigos", $content);
?>