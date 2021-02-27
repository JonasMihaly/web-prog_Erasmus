<?php if(isset($row)) { ?>
    <?php if($row) { ?>
	<div id="kulso" class="container">
    <div id="kulso" class="row justify-content-center">
        <div id="kulso" class="col-md-10">
            <div id="kulso" class="card">
                <div id="kulso"  class="card-body text-center">
				 </p>  <div id="kulso" class="bej"> <p class="inset"> </p>
        <h5><strong>Bejelentkezett:</strong></h5>
       <h4> Azonosító: <strong><?= $row['id'] ?></strong></h4>
       <h4> Név: <strong><?= $row['cs_nev']." ".$row['u_nev'] ?></strong></h4>
		<br>
<br>
<p class="inset"> </p>

    <?php } else { ?>
	 </p>  <div class="bej"> <p class="inset"> </p>
        <h5><center><strong>A bejelentkezés nem sikerült!</strong></h5>
		<br>
        <h6><a href="?oldal=belepes" >Próbálja újra!</a></h6>
				<br>
<br>
</div>
<p class="inset"> </p>
    <?php } ?>
<?php } ?>
<?php if(isset($errormessage)) { ?>
</p>  <div class="bej"> <p class="inset"> </p>
    <h2><?= $errormessage ?></h2>
			<br>
<br>
</div>
<p class="inset"> </p>
<?php } ?>
</div>
            </div>
            </div>
        </div>
    </div>
