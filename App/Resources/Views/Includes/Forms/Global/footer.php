<?php

use Models\Core\Config\Directories;

?>


<div class="card-footer">
    <div class="row my-3">
        <div class="col-4 faq-admin__register-button">
            <a href="?page=forms&auth=guest&action=register">
                <div class="d-flex">
                    <div>
                        <img src="<?php echo Directories::GetFilePath("app/resources/assets/edit2.png") ?>" alt="" />
                    </div>
                    <div>
                        <span>Register</span>
                    </div>
                </div>
            </a>
        </div>

        <div class=" col-8 faq-admin__form-footer d-flex justify-content-start">
            <div class="mx-3">
                <a href=""><small>Help</small></a>
            </div>
            <div class="mx-3">
                <a href=""><small>Privacy</small></a>
            </div>
            <div class="mx-3">
                <a href=""><small>Terms</small></a>
            </div>
        </div>
    </div>
</div>