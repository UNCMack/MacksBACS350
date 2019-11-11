
<?php
    // Code to define functions
    require_once 'views.php';
    require_once 'subscriber_views.php';
    require_once 'subscriber_db.php';
   
    $list = render_subscribers(list_subscribers ($db));
    
    // Button to go to other views
    $add_button = '<p><a class="button" href="insert.php">Add Note</a></p>';
    
    // Display the HTML in the page
    $intro = '
        <p>
            Notes
        </p>
         
    ';
    $content = "$intro $add_button $list";
    // Show the page
    echo render_page('Notes App', "Design notes application", $content);
?>