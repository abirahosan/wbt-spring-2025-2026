<?php require_once "contact_process.php"; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact | Abir Ahosan Ratul</title>
    <link rel="stylesheet" href="../css/style.css" />
  </head>

  <body>

    <header>
      <h1>Contact Me</h1>

      <nav>
        <p>
          <a href="../index.html">Home</a> 
          <a href="educations.html">Education</a> 
          <a href="experience.html">Experience</a> 
          <a href="projects.html">Projects</a> 
          <a class="active" href="contact.html">Contact</a>
        </p>
      </nav>
    </header>

    <form method="post">
      <fieldset>
        <legend>Contact Form</legend>

        <table>

          <tr>
            <td><label for="fname">First Name:</label></td>
            <td>
              <input type="text" id="fname" name="fname" value="<?= $fname ?>" />
              <span class="error"><?= $fnameErr ?></span>
            </td>
          </tr>


          <tr>
            <td><label for="lname">Last Name:</label></td>
            <td>
              <input type="text" id="lname" name="lname" value="<?= $lname ?>" />
              <span class="error"><?= $lnameErr ?></span>
            </td>
          </tr>


          <tr>
            <td>Gender <span class="required">*</span></td>
            <td>
              <input type="radio" name="gender" value="female" <?= ($gender == "female") ? "checked" : "" ?>> Female &nbsp;
              <input type="radio" name="gender" value="male" <?= ($gender == "male") ? "checked" : "" ?>> Male
              <span class="error"><?= $genderErr ?></span>
            </td>
          </tr>


          <tr>
            <td>Email <span class="required">*</span></td>
            <td>
              <input type="text" name="email" value="<?= $email ?>">
              <span class="error"><?= $emailErr ?></span>
            </td>
          </tr>


          <tr>
            <td><label for="company">Company:</label></td>
            <td>
              <input type="text" id="company" name="company" value="<?= $company ?>" />
            </td>
          </tr>


          <tr>
            <td><label>Reason of Contact:</label></td>
            <td>
              <input type="radio" name="reason" value="Projects" <?= ($reason == "Projects") ? "checked" : "" ?> /> Projects
              <input type="radio" name="reason" value="Thesis" <?= ($reason == "Thesis") ? "checked" : "" ?> /> Thesis
              <input type="radio" name="reason" value="Job" <?= ($reason == "Job") ? "checked" : "" ?> /> Job
            </td>
          </tr>


          <tr>
            <td><label>Topics:</label></td>
            <td>
              <input type="checkbox" name="topic[]" value="WebDevelopment" <?= in_array("WebDevelopment", $topic) ? "checked" : "" ?> /> Web Development
              <input type="checkbox" name="topic[]" value="MobileDevelopment" <?= in_array("MobileDevelopment", $topic) ? "checked" : "" ?> /> Mobile Development
              <input type="checkbox" name="topic[]" value="AI/ML Development" <?= in_array("AI/ML Development", $topic) ? "checked" : "" ?> /> AI/ML Development
            </td>
          </tr>


          <tr>
            <td><label for="date">Consultation Date:</label></td>
            <td>
              <input type="date" id="date" name="date" value="<?= $date ?>" />
            </td>
          </tr>


          <tr>
            <td></td>
            <td>
              <input type="submit" value="Submit" />
              <input type="reset" value="Reset" />
            </td>
          </tr>

        </table>
      </fieldset>
    </form>


    <footer>
      <p>Connect with me:</p>

      <a href="https://github.com/abirahosan" target="_blank">
        <img src="../data/github.png" alt="GitHub" width="40" />
      </a>

      <a href="https://www.linkedin.com/in/abir-ahosan-b250583b3/" target="_blank">
        <img src="../data/linkedin.png" alt="LinkedIn" width="40" />
      </a>

      <p>© 2026 AAR | All Rights Reserved</p>
    </footer>
  </body>
</html>