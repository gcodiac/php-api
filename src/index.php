<?php
    require "../vendor/autoload.php";

    use GenericApiLayer\GenericApiLayer;

    $api = new GenericApiLayer();

    // Retrieve a page 2 list of users 
    $users = $api->getUsers(2);

    // retrieve user with id = 3 
    // $user = $api->getUser(3);


    
    // display the data 
    // var_dump($users); 

?>