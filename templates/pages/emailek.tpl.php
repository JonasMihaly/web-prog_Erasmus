
 <link rel="stylesheet" href="./styles/style.css">
<div id="kulso" class="container">
    <div id="kulso" class="row justify-content-center">
        <div id="kulso" class="col-md-10">
            <div id="kulso" class="card">
                <div id="kulso" class="card-body text-center">
				
<table id="tablazat" class="table table-bordered" >
<thead align=center>
<tr><th>Id</th><th>Sender</th><th>Object</th><th>Message</th></tr></thead>
<?php

try{
$pdo = new PDO('mysql:host=mysql.omega:3306;dbname=dzsonatan', 'dzsonatan', '123asd123',
array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
$pdo->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
$utasitas = "Select * From email Order By datum DESC";
$eredm = $pdo->query($utasitas);

foreach ($eredm as $sor)
print "<tr><td>".$sor['id'] . "</td>"."<td> " .$sor['kuldo']. "</td>"."<td> " .$sor['targy']."</td>"."<td> ".$sor['uzenet'] . "</td>"."</tr> ";
}

catch(PDOException $e) {
echo "Hiba: ".$e->getMessage();
}


?>
</table>

 </div>
             
            </div>
        </div>
    </div>
</div>

