<?php
function randameValue4()
{
   $goal = array_rand(range(0,9),4);

  session_start();
  $a="";  
  for ($i=0; $i < 4 ; $i++) { 
    // echo "<h1>goal is = $goal[$i] </h1>";
    $a.=$goal[$i];
  }
  $_SESSION[goalNum] = $a;
  // echo "$_SESSION[goalNum]";
  
}
function parseValue($num)
{
  if($_SESSION[goalNum] !== $num){
    $goal = $_SESSION[goalNum];
    $inputArray = array();
    $a = 0;
    $b = 0;
    echo "<h1>$num faill</h1>";

    for($i=0;$i<4;$i++){
      array_push($inputArray,$num[$i]);
    }
    for($i=0;$i<4;$i++){

      $k = array_search($goal[$i],$inputArray);
      // echo "<br/>$goal[$i] $num[$i] /$k/<br/>";
      if($k!==FALSE ){
        if($k==$i){
          $a+=1;
        }else{
          $b+=1;
        }
      }
    }
    echo "<dib id='res'>$a A : $b B <div>";
  }
  else{
    echo "<h1>good!<h1>";
  }
  echo "<form action=$_SERVER[HTTP_REFERER] >"
    ."<input type='submit' value='anotherNumber'>"
    ."</form>";
}


if(isset($_POST[num])){
  session_start();
  $num = $_POST[num];
  parseValue($num);
  // echo "$_SESSION[goalNum]";

  
}
else{
  
  randameValue4();
  
}

?>
