<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Combo&family=Karla:wght@700&family=Mulish:ital,wght@0,400;0,600;1,500&family=Nunito&family=Open+Sans&family=Poppins:wght@500&family=Roboto&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./assets/css/styles.css">

    <title>SIGNUP PAGE</title>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</head>

<body class="sign_up_body border border-3">


    <div class="form_wrapper row m-auto justify-content-center my-5 py-5 rounded-3 bg-white">
        <h1 class="signUp_heading fw-bolder text-center" id="signUp_heading">
            Sign UP
        </h1>
        <p class="signup_text text-center text-secondary" id="signup_text">
            Register to access student data and events.
        </p>

        <form
            class="signUp_form  row justify-content-center rounded col-11 g-3 bg-white needs-validation mt-1 mb-3 m-auto"
            method="POST" action="Register.php">
            
            <div class="col-md-12">
                <label for="FirstName" class="form-label firstName_label">First name</label>

                <div class="input-group border rounded d-flex align-items-center justify-content-center ">
                    <input type="text" class="form-control firstName" id="firstName" name="firstname" placeholder="First Name " required>
                    <span class="input-text rounded">
                        <i class="bi bi-person-vcard-fill rounded p-2 d-inlinie-block fw-bolder fs-2 ">

                        </i>
                    </span>
                </div>

                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            
            <div class="col-md-12">
                <label for="lastName" class="form-label lastName_label">Last Name</label>
                <div class="input-group border rounded d-flex align-items-center justify-content-center ">
                    <input type="text" class="form-control lastname" id="lastname" name="lastname" placeholder="Last Name " required>
                    <span class="input-text rounded">
                        <i class="bi bi-person-vcard-fill rounded p-2 d-inlinie-block fw-bolder fs-2 ">

                        </i>
                    </span>

                </div>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>

            <div class="col-md-12">
                <label for="emailLabel" class="form-label email_label">Email</label>

                <div class="input-group border rounded d-flex align-items-center justify-content-center ">
                    <input type="email" class="form-control email" id="email" name="email" placeholder="******@domain.com">
                    <span class="input-text rounded">
                        <i class="bi bi-envelope-fill rounded p-2 d-inlinie-block fw-bolder fs-2 ">

                        </i>
                    </span>
                </div>


                <div class="invalid-feedback">
                    Please Enter your Email.
                </div>

            </div>

            <div class="col-md-12">
                <label for="username" class="form-label username_label">User Name</label>

                <div class="input-group border rounded d-flex align-items-center justify-content-center ">
                    <input type="username" class="form-control username" id="username" name="username"
                        placeholder=" johndoe ~ P001johndoe" required>
                    <span class="input-text rounded">
                        <i class="bi bi-person-fill rounded p-2 d-inlinie-block fw-bolder fs-2 ">

                        </i>
                    </span>
                </div>
                <div class="invalid-feedback">
                    Please choose a username.
                </div>

            </div>

            <div class="col-md-12">
                <label for="passwordLabel" class="form-label password_label">Set a Secure Password</label>

                <div class="input-group border  rounded d-flex align-items-center justify-content-center ">
                    <input type="password" class="form-control password" id="password" name="password" placeholder=" ************* "
                        required>
                    <span class="input-text rounded">
                        <i class="bi bi-key-fill rounded p-2 d-inlinie-block fw-bolder fs-2 ">

                        </i>
                    </span>
                </div>

                <div class="invalid-feedback">
                    Please choose a secure password.
                </div>

            </div>
            <div class="col-md-12">
                <label for="conPasswordLabel" class="form-label conPassword_label">Confirm Password</label>

                <div class="input-group border rounded d-flex align-items-center justify-content-center ">
                    <input type="password" class="form-control confirmPassword" id="confirmPassword" name="confirmPassword"
                        placeholder=" ************* " required>
                    <span class="input-text rounded">
                        <i class="bi bi-lock-fill rounded p-2 d-inlinie-block fw-bolder fs-2 ">

                        </i>
                    </span>
                </div>

                <div class="invalid-feedback">
                    Please confirm Password.
                </div>

            </div>


            <div class="col-md-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                        I Agree to School's policies
                    </label>
                    <div class="invalid-feedback">
                        You must agree before submitting.
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <button class="btn btn-primary w-100 mb-2 p-4 rounded-2" onclick="window.location.href='login.html'"
                    type="submit">Join</button>
            </div>

            <div class="col-8  col-md-6">
                <span class="input-text">Already a member? &nbsp; &nbsp; &nbsp;
                    <a href="login.html" class="login_link text-decoration-none fw-bold" id="login_link">Login </a>
                </span>
            </div>
        </form>

    </div>





    <script src="./assets/js/scripts.js"></script>
</body>

</html>