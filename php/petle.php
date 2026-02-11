<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo"petla for"."<br>";
for($i=0;$i<10;$i++)
    {
        echo "i=".$i."<br>";
    } 
echo"petla while"."<br>";
$j=11;
while($j<10)
    {
        echo"j=".$j."<br>";
        $j++;
    }
echo"petla do while"."<br>";
$k=11;
do
{
    echo"k= ".$k."<br>";
    $k++;
}
while($k<10);
echo"petla while suma"."<br>";



$l=1;
$suma=0;
while($l<100)
{
$suma+=$l;
$l++;
}
echo"suma=".$suma;
echo"test";

?>
</body>
</html>