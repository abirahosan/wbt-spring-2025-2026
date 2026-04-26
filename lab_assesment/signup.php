<?php require_once "signup_process.php"; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>sodium | Abir Ahosan Ratul</title>
    <link rel="stylesheet" href="../css/style.css" />
  </head>

  <body>



    <form method="post">
      <fieldset>
        <legend>Signup Form</legend>

        <table>

          <tr>
            <td><label for="fname">First Name:<span class="required">*</span></label></td>
            <td>
              <input type="text" id="fname" name="fname" value="<?= $fname ?>" />
              <span class="error"><?= $fnameErr ?></span>
            </td>
          </tr>


          <tr>
            <td><label for="lname">Last Name:<span class="required">*</span></label></td>
            <td>
              <input type="text" id="lname" name="lname" value="<?= $lname ?>" />
              <span class="error"><?= $lnameErr ?></span>
            </td>
          </tr>

          <tr>
            <td><label for="contact">Contact:</label></td>
            <td>
              <input type="text" id="contact" name="contact" value="<?= $contact ?>" />
              <span class="error"><?= $contactErr ?></span>
            </td>
          </tr>


          <tr>
            <td>Email: <span class="required">*</span></td>
            <td>
              <input type="text" name="email" value="<?= $email ?>">
              <span class="error"><?= $emailErr ?></span>
            </td>
          </tr>


          <tr>
            <td><label for="password">Password:<span class="required">*</span></label></td>
            <td>
              <input type="text" id="password" name="password" value="<?= $password ?>" />
              <span class="error"><?= $passwordErr ?></span>
            </td>
          </tr>



          <tr>
            <td></td>
            <td>
              <input type="submit" value="Signup" />
              
            </td>
          </tr>

        </table>
      </fieldset>
    </form>


  </body>
</html>