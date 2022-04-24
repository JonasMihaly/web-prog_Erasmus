<?php
if(isset($_POST['felhasznalo']) && isset($_POST['jelszo']) && isset($_POST['vezeteknev']) && isset($_POST['utonev'])) {
    try {
        // Kapcsolódás
        $dbh = new PDO('mysql:host=mysql.omega:3306;dbname=dzsonatan', 'dzsonatan', '123asd123',
                        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
        
        // Létezik már a felhasználói név?
        $sqlSelect = "select id from regisztracio where bejelentkezes = :bejelentkezes";
        $sth = $dbh->prepare($sqlSelect);
        $sth->execute(array(':bejelentkezes' => $_POST['felhasznalo']));
        if($row = $sth->fetch(PDO::FETCH_ASSOC)) {
            $uzenet = "The application name is occupied already!";
            $ujra = "true";
        }
        else {
            // Ha nem létezik, akkor regisztráljuk
            $sqlInsert = "insert into regisztracio(id, cs_nev, u_nev, bejelentkezes, jelszo)
                          values(0, :csnev, :unev, :bejelentkezes, :jelszo)";
            $stmt = $dbh->prepare($sqlInsert); 
            $stmt->execute(array(':csnev' => $_POST['vezeteknev'], ':unev' => $_POST['utonev'],
                                 ':bejelentkezes' => $_POST['felhasznalo'], ':jelszo' => sha1($_POST['jelszo']))); 
            if($count = $stmt->rowCount()) {
                $newid = $dbh->lastInsertId();
                $uzenet = "The registration is successful.<br>ID: {$newid}";                     
                $ujra = false;
            }
            else {
                $uzenet = "The registration did not succeed.";
                $ujra = true;
            }
        }
    }
    catch (PDOException $e) {
        $uzenet = "Error: ".$e->getMessage();
        $ujra = true;
    }      
}
else {
    header("Location: .");
}
?>