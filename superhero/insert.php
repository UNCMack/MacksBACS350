<?php
    // Code to define functions
    require_once 'views.php';
    require_once 'superhero_views.php';
    require_once 'superhero_db.php';
    // Pick out the inputs
    $name = filter_input(INPUT_GET, 'name');
    $aka = filter_input(INPUT_GET, 'aka');
    $image = filter_input(INPUT_GET, 'image');
    $description = filter_input(INPUT_GET, 'description');
    if ($name == '' || $aka == '' || $image == '' || $description == '') {
        
        // Form view to add superhero
        $add_form = add_superhero_form();
        // Button to clear
        $clear_button = '<a href="delete.php">Reset Heros</a>';
        // Display the HTML in the page
        $intro = 'This form collects data to create a superhero record in the database.';
        $content = "$intro $list $add_form $clear_button";
        echo render_page('Macks Page', "Add Hero", $content);
    }
    // Add record and return to list
    if (add_superhero ($db, $name, $aka, $image, $description))
    {
        header("Location: index.php");
    };
 
?>