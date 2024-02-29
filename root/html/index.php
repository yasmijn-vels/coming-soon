<?php 
  session_start();
  include './languages/langConfig.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Back Soon</title>
    <link href="./assets/css/style.css?v=<?php echo getdate()[0]; ?>" rel="stylesheet" type="text/css">
</head>

<body>
  <div class="container">
  <p class="lang"><a href="?lang=nl"><img src="flags/nl.png"></a> <a href="?lang=en"><img src="flags/eng.png"></a></p>
        <img src="./images/logo-main.png" class="logo">
    </dv>
    <div class="content">
        <h3><?php echo $lang['title'] ?></h3>
        <h1><?php echo $lang['content'] ?></h1>
    </div>
</body>

</html> 