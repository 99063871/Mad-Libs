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
            if($nonEmpty == 7){
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
	<title>Onkunde</title>
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
  	<p id="onkunde">Onkunde</p>
  	<a id="nextPage" href="paniek.php">Klik hier voor: Paniek</a>
  </div>
  		<?php 
  		if($submit == false){
  			?>
  		 <h1>Onkunde</h1>
		<p><label id="vraag1">Wat zou je graag willen kunnen?</label></p>
		<input type="text" name="vraag1" value='<?php echo $array["vraag1"] ?>'>

		<p><label id="vraag2">Met welk persoon kun je goed opschieten?</label></p>
		<input type="text" name="vraag2" value='<?php echo $array["vraag2"] ?>'>

		<p><label id="vraag3">Wat is je favoriete getal?</label></p>
		<input type="text" name="vraag3" value='<?php echo $array["vraag3"] ?>'>

		<p><label id="vraag4">Wat heb je altijd bij je als je op vakantie gaat?</label></p>
		<input type="text" name="vraag4" value='<?php echo $array["vraag4"] ?>'>

		<p><label id="vraag5">Wat is je beste persoonlijke eigenschap?</label></p>
		<input type="text" name="vraag5" value='<?php echo $array["vraag5"] ?>'>

		<p><label id="vraag6">Wat is je slechste persoonlijke eigenschap?</label></p>
		<input type="text" name="vraag6" value='<?php echo $array["vraag6"] ?>'>

		<p><label id="vraag7">Wat is het ergste wat je kan overkomen?</label></p>
		<input type="text" name="vraag7" value='<?php echo $array["vraag7"] ?>'>
		
		<input type="submit" name="submit" id="submit" value="Versturen">

		<?php  
		} 
  		 	else{
		?>
  <p id="finaltext">
  Er zijn veel mensen die niet kunnen <?php echo $array["vraag1"]; ?>. Neem nou <?php echo $array["vraag2"]; ?>. Zelfs met de hulp van een <?php echo $array["vraag4"]; ?> of zelf <?php echo $array["vraag3"]; ?> kan <?php echo $array["vraag2"]; ?> niet <?php echo $array["vraag1"]; ?>. Dat heeft niets te maken met een gebrek aan <?php echo $array["vraag5"]; ?>, maar een te veel aan <?php echo $array["vraag6"]; ?>. Te veel <?php echo $array["vraag6"]; ?> leidt tot <?php echo $array["vraag7"]; ?> en dat is niet goed als je wilt <?php echo $array["vraag1"]; ?>. Helaas voor <?php echo $array["vraag2"]; ?>.
  </p>
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