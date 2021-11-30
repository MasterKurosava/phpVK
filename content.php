<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  session_start();
    if($_SESSION['USER_ROLL']=="USER"){
      echo "<p>Вы обычный пользователь</p>";
    }
    else{
      echo "<img width='400px' height='400px' src='https://catherineasquithgallery.com/uploads/posts/2021-02/1613449428_76-p-fon-dlya-prezentatsii-pro-vulkani-96.jpg'>";
    }
  ?>
</body>
</html>