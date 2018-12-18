<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>My Dear Diary...</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <?php require 'lastdate.php';?>
  </head>
  <body>
      <p id="CounterScore">-- -- --</p>
      <button type="button" id="reset">Reset</button>
      <form class="" action="setdate.php" method="post">
        Choose date of begin: <br>
        <input type="datetime-local" id="date" name="date">
        <input type="submit" value="Set Counter" name="submit">
      </form>
  </body>
  <script src="counter.js"></script>
</html>
