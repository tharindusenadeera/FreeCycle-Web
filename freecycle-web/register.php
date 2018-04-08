<?php
require_once 'header.php';
require_once 'navbar.php';
?>
<div class="main-reg-bg">
    <div class="container main-reg-page">
        <div class="row">
            <div class="col-sm-push-3 col-sm-6 col">
                <form action="./functions/register_function.php" method="post">
                    <div class="register-form">
                        <h1>REGISTER</h1>
                        <div class="input-field">
                            <input type="text" placeholder="Username" name="username" required>
                        </div>
                        <div class="input-field">
                            <input type="email" placeholder="Email" name="email" required>
                        </div>
                        <div class="input-field">
                            <input type="password" placeholder="Password" name="password" required>
                        </div>
                        <div class="input-field">
                            <div class="g-recaptcha" data-sitekey="6LcTvTYUAAAAAIe80MjiIdlvy4ANrPyig30G4rDF" aria-required="true" ></div>
                        </div>

                        <button type="submit" name="submit">Submit</button>
                    </div>
                </form>

            </div>
        </div>

    </div>
</div>
<?php
require_once 'footer.php';
?>