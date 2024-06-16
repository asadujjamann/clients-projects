<?php

session_start();


require('set_password.php');

    if(isset($_POST['pass']) && $_POST['pass'] == $pass)
    {
        $_SESSION['asad2'] = 'My Name';
        echo json_encode(array("status"=>'success'));

    }else{
        echo json_encode(array("status"=>'failed'));
    }

?>