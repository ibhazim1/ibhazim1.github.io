<!DOCTYPE html>
<html>
  <head>
    <title>Valentine</title>
    <meta charset="utf-8" />
    <meta name="author" content="Muhammad Hazim"  />
    <link rel="icon" href="Images/flower.png" type="image/x-icon">
    <link rel = "stylesheet" type = "text/css" href = "style.css" >
  </head>
<body>
    <?php
    $error="";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      $date = $_POST["birthday"];
      if($date == "2004-07-19"){
        header("Location: page3.html");
      }else{
        $error="Wow! I didn't expect you got this wrong.";
      }
    }
    ?>
    <article class="page2">
        <img src="Images/bunnyask.gif" alt="bunny">
        <p>Prove it! When is my birthday?</p>
        <form action="page2.php" method="POST">
            <p><input type="date" name="birthday" class="birthday" id="birthday">
            <br>
            <span id="errmes"><?php echo $error; ?></span></p>
            <p><input type="submit" value="Next" class="enter" id="enter"></p>
        </form>
    </article>
</body>
</html>