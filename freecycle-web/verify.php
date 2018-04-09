<?php
require_once 'header.php';
require_once 'navbar.php';
?>
<div class="main-verify-bg">
    <div class="container main-verify-page">
        <div class="row">
            <div class="col-sm-push-3 col-sm-6 col">
                <form  action="./functions/verify_function.php" method="post">


                <div class="verify-form">
                    <h1>Verify Your Account</h1>
                    <p>Please Enter Your verification code to activate your account</p>
                    <div class="input-field">
                        <input type="text" placeholder="Verification Code" name="activation_code" required>
                    </div>


                    <button name="submit">Submit</button>

                </form>
                </div>
            </div>
        </div>

    </div>
</div>
<?php
require_once 'footer.php';
?>
