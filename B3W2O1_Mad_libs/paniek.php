<?php 
    $array=[];
    $error=[];

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nonEmpty=0;
        foreach($_POST as $name => $y){
            if($name != "submit"){
                if(!empty($y)){
                    $array[$name] = checkInput($y);
                    $nonEmpty++;
                }else{
                    $error[$name] = "vul hier iets in";
                }
            }
            if($nonEmpty == 8){
                $submit = true;
            }
        }
    }else{
        $submit = false;
    }

    function checkInput($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>


<!DOCTYPE html>
<html lang=en>
<head>
  <meta charset="UTF-8">
	<title>Paniek</title>
	<link rel="stylesheet" href="css.css?v=<?php echo time(); ?>">
</head>
<body>

<form action="" method="POST">
  
<section id="mad">
	<header>Mad Libs</header>
</section>

<div id="container">
	
<div id="red">
  	<p>Er heerst paniek...</p>
  	<p id="onkunde">Paniek</p>
  	<a  id="nextPage" href="Index.php">Klik hier voor: Onkunde</a>
  </div>
  		<?php 
  		if($submit == false){
  			?>
  		 <h1>Paniek</h1>
		<p><label id="vraag1">Welk dier zou je nooit als huisdier willen hebben?</label></p>
		<input type="text" name="vraag1" value='<?php echo $array["vraag1"] ?>'>

		<p><label id="vraag2">Wie is de belangrijkste persoon in je leven?</label></p>
		<input type="text" name="vraag2" value='<?php echo $array["vraag2"] ?>'>

		<p><label id="vraag3">In welk land zou je graag willen wonen?</label></p>
		<input type="text" name="vraag3" value='<?php echo $array["vraag3"] ?>'>

		<p><label id="vraag4">Wat doe je als je je verveelt?</label></p>
		<input type="text" name="vraag4" value='<?php echo $array["vraag4"] ?>'>

		<p><label id="vraag5">Met welk speelgoed speelde je als kind het meest mee?</label></p>
		<input type="text" name="vraag5" value='<?php echo $array["vraag5"] ?>'>

		<p><label id="vraag6">Bij welk docent spijbel je het liefst?</label></p>
		<input type="text" name="vraag6" value='<?php echo $array["vraag6"] ?>'>

		<p><label id="vraag7">Als je $100.000,- had, wat zou je dan kopen?</label></p>
		<input type="text" name="vraag7" value='<?php echo $array["vraag7"] ?>'>

    <p><label id="vraag8">Wat is je favoriete bezigheid?</label></p>
    <input id="input8" type="text" name="vraag8" value='<?php echo $array["vraag8"] ?>'>
		
		<input type="submit" name="submit" id="submit" value="Versturen">

		<?php  
		} 
  		 	else{
		?>
<section id="text">
 <p>
Er heerst paniek in het koninkrijk <?php echo $array["vraag3"]; ?>. Koning <?php echo $array["vraag6"]; ?> is ten einde raad en 
als koning <?php echo $array["vraag6"]; ?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?php echo $array["vraag2"]; ?>.</p>
<p>
"<?php echo $array["vraag2"]; ?>, het is een ramp! Het is een schande!"
</p>
<p>
"Sire, Majesteit, Uwe luidruchtigheid, wat is er aan de hand?"
</p>
<p>
"Mijn <?php echo $array["vraag1"]; ?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?php echo $array["vraag5"]; ?>
 voor hem gekocht!"
</p>                            
<p>
"Majesteit, uw <?php echo $array["vraag1"]; ?> komt vast vanzelf weer terug?"
</p>
<p>
"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $array["vraag8"]; ?> leren?"
</p>
<p>
"Maar sire, daar kunt u toch uw <?php echo $array["vraag7"]; ?> voor gebruiken."
</p>
<p>
"<?php echo $array["vraag2"]; ?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."
</p>
<p>
"<?php echo $array["vraag4"]; ?>, Sire."
</p>
</section>
  <?php 
    }
  ?>


		<section class="footer">
			<footer>Deze website is gemaakt door Stijn.</footer>

		</section>

	</div>
</form>	

<?php 
 
function pre_r( $array ){
	echo '<pre>';
	print_r($array);
	echo '</pre>';
}

 ?>
</body>
</html>