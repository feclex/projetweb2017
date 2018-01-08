<?php

$phrase ='Ceci est la ligne n°';

for ($i=1; $i <= 10 ; $i++) 
{ 
	echo '<p>'. $phrase.$i .'</p>'	;


}
 echo "----------------------------------------------------------";

for ($i=1; $i <=10; $i++)
 { 

 	echo '<p>'.'<ul>'.'<li>'. $phrase.$i .'</li>'.'</ul>'.'</p>'	;

 }

 echo "----------------------------------------------------------";


echo "<table class='table'>";

for ($i=1; $i <=10; $i++)
 { 

 	echo "<tr>"."<td>".$i."</td>"."<td>". $phrase.$i ."</td>"."</tr>"	;

 }
echo "</table>";

 echo "----------------------------------------------------------";


echo "<table class='table'>";

for ($i=1; $i <=10; $i++)
 { 
if (($i%2)==0) 
{
	$color="red";
}
else
{

	$color="blue";
}

	

 	echo "<tr>";
 	echo"<td><font color='".$color."'>".$i."</font></td>";
 	echo "<td><font color='".$color."'>".$phrase.$i."</font></td></tr>";
 	
 }
echo "</table>";



  ?>

