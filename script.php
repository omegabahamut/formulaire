<?php

 session_start();
 if (isset($_SESSION['nombreATrouver'])){
	 $nombreATrouver= $_SESSION['nombreATrouver'];
 } else {
	 $nombreATrouver= rand(0,100);
	 $_SESSION['nombreATrouver'] = $nombreATrouver; 
 }
 
$proposition = $_GET['proposition'];
/*if (isset($_GET['nbatrouver']) ){
	//le nombre aléatoire à deja été généré
	$nombreATrouver= $_GET['nbatrouver'];
} else {
	// c'est une nouvelle partie
	$nombreATrouver= rand(0,100);
}*/

echo "le nombre A trouver est ".$nombreATrouver."<br/>";
if($proposition == $nombreATrouver){
	echo "vous avez gagné";
	/*$nombreATrouver= rand(0,100);
	 $_SESSION['nombreATrouver'] = $nombreATrouver; */
} elseif ($proposition < $nombreATrouver){
	echo "votre chiffre est trop petit";
} else {
	echo "votre chiffre est trop grand";
}
?>

<form action="script.php" method="get">
	<input type="text" name="proposition">
	<input type="submit" value="jouer">
</body>