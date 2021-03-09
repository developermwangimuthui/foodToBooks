<?php
logout();
function logout(){
    if(session_id() == '') { // start session if none found
        session_start();
    }
// echo session_id();
    session_unset();         
    session_destroy();
    unset($_SESSION['loggedin']);
    header("Location: DevamLogin.php");
}

?>