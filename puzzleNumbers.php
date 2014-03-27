<!doctype>
<html>
<head>
<link rel="stylesheet" type="text/css" href="./css/style.css">  
</head>

<body>
  <div id="main">
    <h1>puzzleNumbers</h1>
    <?php include 'numberPredict.php';?>

    <form action="./puzzleNumbers.php" method="post" accept-charset="utf-8">
    <input name="num" type="text" >
    <input type='submit' value='Submit'>
    </form>
  </div>

</body>
<html>