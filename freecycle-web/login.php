<?php
require_once 'header.php';
$_SESSION["username"] = null;
$_SESSION["email"] = null;
unset($_COOKIE['user']);
require_once 'navbar.php';
?>
    <div class="main-login-bg">
        <div class="container main-login-page">
            <div class="row">
                <div class="col-sm-push-3 col-sm-6 col">
                    <form action="./functions/login_function.php" method="post">
                        <div class="login-form">
                            <h1>LOGIN</h1>
                            <div class="input-field">
                                <input type="text" placeholder="Username" name="username" required>
                            </div>
                            <div class="input-field">
                                <input type="password" placeholder="Password" name="password" required>
                            </div>

                            <button name="submit">Submit</button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
<?php
require_once 'footer.php';
?>