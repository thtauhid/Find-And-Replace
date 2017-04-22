<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Find And Replace</title>
  </head>
  <body style="text-align: center;">
    <form class="" action="index.php" method="post">
      <textarea name="textarea" rows="8" cols="80" placeholder="Input your text here..."></textarea><br>
      <input type="text" name="find" value="" placeholder="What to find?"><br>
      <input type="text" name="replace" value="" placeholder="What to replace?"><br>
      <input type="submit" name="submit" value="Submit">
    </form>

    <br><br><hr><br><br>

    <?php
        if (isset($_POST['find']) && isset($_POST['replace']) && isset($_POST['textarea'])) {
          $find = $_POST['find'];
          $replace = $_POST['replace'];
          $textarea = $_POST['textarea'];
          $new_text = str_ireplace($find, $replace, $textarea);
          echo "<textarea name='textarea' rows='8' cols='80' placeholder='You get your output here....'>$new_text</textarea><br>";

        }
    ?>
  </body>
</html>
