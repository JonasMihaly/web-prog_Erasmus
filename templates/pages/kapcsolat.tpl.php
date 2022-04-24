 <link rel="stylesheet" href="./styles/style.css">
<div class="container" id="kulso">
    <div class="row justify-content-center" id="kulso">
        <div class="col-md-12"id="kulso" >
            <div class="card"  id="kulso">
                <div class="card-body text-center" name="elso" id="kulso">
              
					</div>
					
                   <form method=post id="kulso">
						<tr><img id="arnyek" src="./images/menu/kapcsolat.jpg" align=right width=500 height=616>
						</tr>
						<tr>
						<td><input class="long" align=center type=text name=kuldo placeholder="Sender" required>
						<br>
						<br>
						<input class="long" align=center type=text name=targy placeholder="Object" required></td>
						<br>
						<br>
						<tr><td> <textarea  rows="21" cols="70" name=uzenet placeholder="Message..."></textarea></td></tr>
						<br>
						<br>						
						<br><input  type=submit class="button" name=gomb value="Send" align="right" ><br>
					</th>
				
				  </form>

                 <?php

if(isset($_POST['kuldo']) && isset($_POST['targy']) && isset($_POST['uzenet'])) {

try{
$datum=date("Y-m-d");

$dbh = new PDO('mysql:host=mysql.omega:3306;dbname=dzsonatan', 'dzsonatan', '123asd123',
array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
$dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');

$sqlInsert = "insert into email(id, kuldo, targy, uzenet, datum)
values(0, :kuldo, :targy, :uzenet, :datum)";


$stmt = $dbh->prepare($sqlInsert);
$stmt->execute(array(':kuldo' => $_POST['kuldo'], ':targy' => $_POST['targy'],
':uzenet' => $_POST['uzenet'], ':datum' => $datum));

}
catch(PDOException $e)
{
	
	echo "Error: ".$e->getMessage();
	
}
}
?>


            </div>
        </div>
    </div>
</div>

