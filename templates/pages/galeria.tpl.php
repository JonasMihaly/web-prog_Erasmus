
<?php session_start(); ?>
<?php $data = $_SESSION;
($_SESSION["csn"]);
($_SESSION["un"]);
($_SESSION["login"]);?>

 <link rel="stylesheet" href="css/style.css">
<div id ="kulso"class="container">
    <div id ="kulso" class="row">
        <div id ="kulso" class="col-md-20">
            <div id ="kulso" class="card">
                <div id ="kulso" class="card-body">
<?php
 $MAPPA = './images/';
    $TIPUSOK = array ('.jpg', '.png');
    $MEDIATIPUSOK = array('image/jpeg', 'image/png');
    $DATUMFORMA = "Y.m.d. H:i";
    $MAXMERET = 500*1024;
	
	 $kepek = array();
    $olvaso = opendir($MAPPA);
    while (($fajl = readdir($olvaso)) !== false) {
        if (is_file($MAPPA.$fajl)) {
            $vege = strtolower(substr($fajl, strlen($fajl)-4));
            if (in_array($vege, $TIPUSOK)) {
                $kepek[$fajl] = filemtime($MAPPA.$fajl);
            }
        }
    }
    closedir($olvaso);
	$nez=false;
 $uzenet = array();   
if(isset($_SESSION["csn"])  && isset($_SESSION["un"])  && isset($_SESSION["login"])  )
{
try{
	   $data = $_SESSION;
($_SESSION["csn"]);
($_SESSION["un"]);
($_SESSION["login"]);
$ne=true;
    if (isset($_POST['kuld'])) {
        foreach($_FILES as $fajl) {
            if ($fajl['error'] == 4);   
            elseif (!in_array($fajl['type'], $MEDIATIPUSOK))
                $uzenet[] = " Inapposite type: " . $fajl['name'];
            elseif ($fajl['error'] == 1   
                        or $fajl['error'] == 2  
                        or $fajl['size'] > $MAXMERET) 
                $uzenet[] = " Too big file: " . $fajl['name'];
            else {
                $vegsohely = $MAPPA.strtolower($fajl['name']);
                if (file_exists($vegsohely))
                    $uzenet[] = " Exists already: " . $fajl['name'];
                else {
                    move_uploaded_file($fajl['tmp_name'], $vegsohely);
                   $uzenet[] = ' Ok: ' . $fajl['name'];
                }
            }
        }        
    }
	}
catch(PDOException $e)
{
	$nez=false;
	?>
	<p id="k">You are not loggin!</p><?php
	echo "Error: ".$e->getMessage();
}
}
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Gallery</title>
  
</head>
<body>
    <div id="galeria">
    <h5><strong>Gallery</strong></h5><br>

    <?php
    arsort($kepek);
    foreach($kepek as $fajl => $datum)
    {
    ?>
	
        <div class="kep" >
            <a href="<?php echo $MAPPA.$fajl ?>">
                <img src="<?php echo $MAPPA.$fajl ?> " class="img-thumbnail">
            </a>   
<div class="desc" >			
            <p id="k"><strong>Name:</strong>  <?php echo $fajl; ?></p>
            <p id="k"><strong>Date:</strong>  <?php echo date($DATUMFORMA, $datum); ?></p>
			<br>
			</div>
        </div>
    <?php
    }
    ?>
    </div>
	<br><br>
	   <h4><center><strong>Upload in gallery:</strong></h4>
	   <br>

<?php

    if (!empty($uzenet))
    {
        echo '<ul>';
        foreach($uzenet as $u)
            echo "<li>$u</li>";
        echo '</ul>';
    }

?>
<?php if($ne==true){ ?>
<h3><center>If you loggin include a picture in the gallery so to recharge.</h3><br>
<?php
}
else
{
?>
<h4><center>You are not registering so you do not include a picture in the gallery to recharge.</h4><br>
<?php }	?>

    <form method="post"
                enctype="multipart/form-data">
				
        <p id="k"><label><strong>Picture:</strong> </label> <input type="file" name="elso" value="Choose file" required><br><p>
       <br>
        <input type="submit" name="kuld" value="Upload" class="button2">
      </form>    

</div>
</div>
</div>
</div>
</div>
</body>
</html>

<?php require_once 'layout/footer.php'; ?>