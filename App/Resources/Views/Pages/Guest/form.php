<?php

use Models\Authentication\Services\Input;
use Models\Core\Config\Directories as Directories;
?>

<div class="container-fluid">
    <div class="faq-admin__form-heading d-flex justify-content-center mt-5 my-3">
        <h3>Create an Account</h3>
    </div>
    <?php
    switch(Input::Get("action")){
        case "register":
            require_once(Directories::GetFilePath("app/resources/views/pages/guest/forms/register.php"));
            break;
        case "login":
            require_once(Directories::GetFilePath("app/resources/views/pages/guest/forms/login.php"));
            break;
    }
    ?>
</div>