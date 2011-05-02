<?php 
echo "<h1>Hello from deployment-test</h1>";

$conf = parse_ini_file("../conf/live.ini");
if($conf["islive"]){
  echo "<p style='color:green'>islive = true</p>";
}else{
  echo "<p style='color:red'>islive = false</p>";
}
