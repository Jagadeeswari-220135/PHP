<!--
<!DOCTYPE html>
<html>
    <head>
        <title> Website </title>
    </head>
    <body>
       <form action="index.php" method="post">
        <label>country:</label>
        <input type="text" for="country" name="country"><br>
        <input type="submit" value="calculate">
       </form>      
    </body>
</html>
-->
<?php
$fiopen=fopen("filess.txt","r");
echo fread($fiopen,filesize("filess.txt"));
// fclose($fiopen);

$fiopen = fopen("filess.txt", "w");
fwrite($fiopen, "Hello PHP");
echo "<br>";
// fclose($fiopen);

echo file_get_contents("filess.txt");
file_put_contents("filess.txt", "Welcome to PHP");
echo "<br>";
$lines = file("filess.txt");
print_r($lines);
echo file_exists("filess.txt");
echo "<br>";
echo filesize("filess.txt");
echo "<br>";
echo fileatime("filess.txt");
echo "<br>";
echo filemtime("filess.txt");
echo "<br>";
echo filectime("filess.txt");
echo "<br>";
echo fileperms("filess.txt");
echo "<br>";
echo fileowner("filess.txt");
echo "<br>";
echo fileinode("filess.txt");
echo "<br>";
echo filegroup("filess.txt");
echo "<br>";

$currentDir = getcwd();
echo "Current Directory: " . $currentDir . "<br><br>";


$file = fopen("path.txt", "w");
fwrite($file, $currentDir);
fclose($file);

echo "Current directory stored in path.txt<br><br>";

chdir("website");
echo "After chdir(): " . getcwd() . "<br><br>";


$files = scandir(".");
echo "Files using scandir():<br>";
print_r($files);
echo "<br><br>";


echo "Files using opendir() and readdir():<br>";
$dir = opendir(".");
while (($fileName = readdir($dir)) !== false) {
    echo $fileName . "<br>";
}
closedir($dir);
$file = fopen("data.txt", "w");
fwrite($file, "This is write mode");
fclose($file);

$file = fopen("data.txt", "a");
fwrite($file, "\nThis is appended text");
fclose($file);

$file = fopen("newfile.txt", "x");
fwrite($file, "New file created");
fclose($file);

$file = fopen("data.txt", "r+");
echo fread($file, filesize("data.txt"));
fwrite($file, "\nRead and write mode");
?>



//copy("data.txt", "backup/data.txt");
//rename("old.txt", "new.txt");
/*$files = scandir("website");
print_r($files);
$dir = opendir("website");
while (($file = readdir($dir)) !== false) {
    echo $file . "<br>";
}*/
/*
$dir = opendir("website");
while (($fiopen = readdir($dir)) !== false) {
    echo $fiopen . "<br>";
}
closedir($dir);
*/



/*
$radius=$_POST["radius"];
$Circumference=2*pi()*$radius;
$area=pi()*$radius*$radius;
echo "the circumference is {$Circumference}cm <br> ";
echo "the area is {$area}";
*/
/*
$age=20;
if($age>18){
    echo "major";
}
elseif($age<0){
    echo "invalid age";
}
elseif($age>100){
    echo "OLD age";
}
else{
    echo "minor";
}
*/
/*
$day= "sunday" ;
switch($day){
    case "monday" :
        echo "weekday";
        break;
    case "tuesday":
        echo "week day";
        break;
    case "wednesday" :
        echo "week3 day";
        break;
    case "thursday" :
        echo "week4day";
        break;
    case "friday" :
        echo "week5day";
        break;
    case "saturday":
        echo "weekend";
        break;
    case "sunday":
        echo "weekend";
        break;
    default:
        echo "Not a day";
} 
for($i=1;$i<=8;$i++){
    echo $i."<br>";
}
*/
/*
$capitals = array("ap"=>"amaravati",
               "tamilnadu"=>"chennai",
               "maharastra"=>"mumbai");

$capital = $capitals[$_POST["country"]];
echo $capital."<br>";

/*
echo "I like pizza <br>";
$name="Jagath";
echo $name;
echo"<br>";
echo "Hello {$name}";
*/
/*
  echo "{$_POST["username"]} <br>";
  echo "{$_POST["password"]} <br>";
 */

/*
   $item="pizza";
   $price=4.99;  
   $quantity = $_POST["quantity"];
   $total=null;
   $total= $quantity * $price;
   echo" you order is {$quantity} x {$item}:";
   echo"the total is {$total}";
*/
/*
$x=$_POST["x"];
// $total=abs($x);
//$total=floor($x);
//$total=ceil($x);
//$total=round($x);
//$total=round(sqrt($x),2);
//$total=pi();
//$total=rand(1,8);
echo $total;
*/
?> 