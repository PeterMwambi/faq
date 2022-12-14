<?php ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../resources/CSS/style.css">
</head>

<body>
    <div class="test-form__container d-flex">
        <div class="test-form__intro col-5">
            <div class="test-form__container d-flex justify-content-center">
                <h2 class="test-form__heading mx-4">New User Registration</h2>
            </div>
            <div class="test-form__intro-body">
                <div class="d-flex justify-content-center">
                    <h3>Hello, welcome</h3>
                </div>
                <div>
                    <p>We are proud you have made the choice to become part of our team.</p>
                    <p>By becoming a member, you stand to benefit in many ways</p>

                    <div class="test-form__row">
                        <div class="col-6">
                            <div class="d-flex justify-content-center">
                                <img src="../resources/assets/resume.png" class="test-form__description-image">
                            </div>
                            <div class="d-flex justify-content-center">
                                <h5>Free portfolio</h5>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex justify-content-center">
                                <img src="../resources/assets/conference.png" class="test-form__description-image">
                            </div>
                            <div class="d-flex justify-content-center">
                                <h5>Tech Meetups</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="test-form__container d-flex justify-content-center">
                <h5 class="test-form__cta btn">Lets get you started</h5>
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <div class="test-form__body col-6">
                <div class="test-form__help-text">
                    <div class="mx-1">
                        <h5>Step 1 out of 3:</h5>
                    </div>
                    <div>
                        <em>Personal information</em>
                    </div>
                </div>
                <form method="post" action="">
                    <div class="test-form__row">
                        <div class="test-form__group col-6">
                            <label for="test-form__firstname">Firstname:</label>
                            <input type="text" name="firstname" value="" class="test-form__input">
                            <emp class="test-form__message"></emp>
                        </div>
                        <div class="test-form__group col-6">
                            <label for="test-form__lastname">Lastname:</label>
                            <input type="text" name="lastname" class="test-form__input">
                            <emp class="test-form__message"></emp>
                        </div>
                    </div>

                    <div class="test-form__row">
                        <div class="test-form__group col-6">
                            <label for="test-form__gender">Gender:</label>
                            <select name="gender" value="" class="test-form__input">
                                <option>Male</option>
                                <option>Female</option>
                                <option>Rather not say</option>
                            </select>
                            <emp class="test-form__message"></emp>
                        </div>
                        <div class="test-form__group col-6">
                            <label for="test-form__nationality">Nationality:</label>
                            <select name="nationality" value="" class="test-form__input">
                                <option>Kenya</option>
                            </select>
                            <emp class="test-form__message"></emp>
                        </div>
                    </div>

                    <div class="test-form__group">
                        <label for="test-form__national id">National id:</label>
                        <input type="text" name="national-id" value="" class="test-form__input">
                        <emp class="test-form__message"></emp>
                    </div>
                    <div class="test-form__group">
                        <label for="test-form__phone number">Phone number:</label>
                        <input type="text" name="phone-number" value="" class="test-form__input">
                        <emp class="test-form__message"></emp>
                    </div>
                    <div class="test-form__group">
                        <label for="">Email:</label>
                        <input type="text" name="email" class="test-form__input">
                        <emp class="test-form__message"></emp>
                    </div>
                    <div class="test-form__group">
                        <button type="submit" class="test-form__input btn">Register</button>
                    </div>
                </form>
            </div>

        </div>
    </div>


</body>

</html>