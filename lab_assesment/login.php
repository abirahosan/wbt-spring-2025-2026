<?php require_once "login_process.php"; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact | Noman</title>
    <link rel="stylesheet" href="../css/style.css" />
  </head>
  <body>
    <h2>Login</h2>
    <p><span class="required">* required field</span></p>

    <?php if (!empty($loginErr)): ?>
        <p class="error" style="color:red;"><?= $loginErr ?></p>
    <?php endif; ?>

    <form method="post" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <table class="form-table">
            <tr>
                <td>Username <span class="required">*</span></td>
                <td>
                    <input type="text" name="username" value="<?= $username ?>">
                    <span class="error" style="color:red;"><?= $usernameErr ?></span>
                </td>
            </tr>
            <tr>
                <td>Password<span class="required">*</span></td>
                <td>
                    <input type="password" name="password" value="<?= $password ?>">
                    <span class="error" style="color:red;"><?= $passwordErr ?></span>
                </td>
            </tr>   
            <tr>
                <td></td>
                <td><input type="submit" value="Register"></td>
            </tr>
        </table>
    </form>

    <?php if ($loginSuccess): ?>
        <h3>Login Successful!</h3>
    <?php endif; ?>

    <hr />
  </body>
</html>