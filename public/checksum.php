<?php
  require_once('../private/initialize.php');

  $plain_text = "";
  $hashed_text = "";
  $validity = "";
  $checksum_algorithm = "";
  $hashed_output = "";

  if (is_post_request()) {
    if (isset($_POST['submit']) && isset($_POST['checksum_algorithm'])) {
        $plain_text = (isset($_POST['plain_text']))? h($_POST['plain_text']) : nil;
        $hashed_text = (isset($_POST['hashed_text']))? h($_POST['hashed_text']) : nil;
        $checksum_algorithm = (isset($_POST['checksum_algorithm']))? h($_POST['checksum_algorithm']) : nil;

        if ($checksum_algorithm == "crc32") {
            $hashed_output = crc32($plain_text);
        }
        else if ($checksum_algorithm == "md5") {
            $hashed_output = md5($plain_text);
        }
        else if ($checksum_algorithm == "sha1") {
            $hashed_output = sha1($plain_text);
        }

        if ($hashed_output == $hashed_text) {
            $validity = "Valid";
        }
        else {
            $validity = "Not Valid!";
        }

    }
  }
?>

<!doctype html>

<html lang="en">
  <head>
    <title>Checksum</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <link rel="stylesheet" media="all" href="includes/styles.css" />
  </head>
  <body>

    <a href="index.php">Main menu</a>
    <br/>

    <h1>Checksum</h1>

    <div id="checksum">

      <form action="" method="post">
        <div>
          <label for="checksum_algorithm">Hashing Algorithm</label>
          <select name="checksum_algorithm">
            <option value="crc32">crc32</option>
            <option value="md5">md5</option>
            <option value="sha1">sha1</option>
          </select>
        </div>
        <div>
          <label for="plain_text">Plain text</label>
          <textarea name="plain_text"><?php echo h($plain_text); ?></textarea>
        </div>
        <div>
          <label for="hashed_text">Hashed text</label>
          <textarea name="hashed_text"><?php echo h($hashed_text); ?></textarea>
        </div>
        <div>
          <input type="submit" name="submit" value="Checksum">
        </div>
      </form>

      <div class="result"><?php echo h($validity); ?></div>
      <div style="clear:both;"></div>
    </div>

    <hr />

  </body>
</html>
