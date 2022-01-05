<?php

    include_once 'user_session.php';

    $userSession = new UserSession();
    $userSession->cerraSession();

    header("location: ../../../index.php");

?>