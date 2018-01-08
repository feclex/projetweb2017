<?php 

echo "<table class='table'>";

$tableau = array ('Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi','Dimanche');
$count= count($tableau);


echo '<tr>'.'<th colspan=2>'."Jour".'</th>'.'</tr>';

	foreach ($tableau as $jour ) 
	{ 
		if ((($count-1)%2)==0) 
{
	$color="grey";
}
else
{

	$color="";
}

 	echo '<tr>'.'<td style="background-color:'.$color.' ">'.$jour.'</td>'.'</tr>';
 	$count= $count-1;
	} 
echo "</table>";

//------------------------------------------------------------------------------------


echo "<table class='table'>";

//$Jour = array ('Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi','Dimanche');

$todo = array (
	'Lundi'=> 'Ecole',
	'Mardi' => 'Ecole',
	'Mercredi' => 'Ecole',
	'Jeudi' => 'Ecole',
	'Vendredi '=> 'Ecole',
	'Samedi'=> 'Maison',
	'Dimanche'=> 'Maison');

echo '<tr>'.'<th>'."Jour".'</th>'.'<th>'."Ce que je fais".'</th>'.'</tr>';

	foreach ($todo as $cle => $todo ) 
	{ 
 	echo '<tr>'.'<td>'.$cle.'</td>'.'<td>'.$todo.'</td>'.'</tr>';
	} 
echo "</table>";

//-------------------------------------------------------------------------------


echo "<table class='table'>";

//$Jour = array ('Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi','Dimanche');

$todo = array (
	'Lundi'=> 'Ecole',
	'Mardi' => 'Ecole',
	'Mercredi' => 'Ecole',
	'Jeudi' => 'Ecole',
	'Vendredi '=> 'Ecole',
	'Samedi'=> 'Maison',
	'Dimanche'=> 'Maison');
$semaine = array ();
for ($i=1; $i < 52 ; $i++) 
{ 
	$semaine[$i] = $todo;
}


echo '<tr>'.'<th>'."Semaine".'</th>'.'<th>'."Jour".'</th>'.'<th>'."Ce que je fais".'</th>'.'</tr>';
foreach($semaine as $key => $value)
{
	$flag = true; 

	foreach ($value as $jour => $activite) 
	{
		if ($flag==true) 
		{
			echo '<tr>'.'<td rowspan="7">'.$key.'</td>';
			$flag = false;
		}
			 	echo '<td>'.$jour.'</td>'.'<td>'.$activite.'</td>'.'</tr>';
	}
}


echo "</table>";

?>