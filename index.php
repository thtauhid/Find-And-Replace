<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Find And Replace</title>
  </head>
  <body>
    <?php
        error_reporting(0);
        $find = $_POST['find'];
        $replace = $_POST['replace'];
        $textarea = $_POST['textarea'];
        $new_text = str_ireplace($find, $replace, $textarea);
    ?>
    <form class="" action="index.php" method="post">
      <textarea name="textarea" rows="8" cols="80" placeholder="Type your text here"><?php echo $new_text; ?></textarea><br>
      <input type="text" name="find" value="" placeholder="What to find?"><br>
      <input type="text" name="replace" value="" placeholder="What to replace?"><br>
      <input type="submit" name="submit" value="Submit">
    </form>
  </body>
</html>
