<?php session_start(); ?>

<?php if(file_exists('./logicals/'.$keres['fajl'].'.php')) { include("./logicals/{$keres['fajl']}.php"); } ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?= $ablakcim['cim'] . ( (isset($ablakcim['mottó'])) ? ('|' . $ablakcim['mottó']) : '' ) ?></title>
	 <link rel="stylesheet" href="./styles/style.css">
	<?php if(file_exists('./styles/'.$keres['fajl'].'.css')) { ?><link rel="stylesheet" href="./styles/<?= $keres['fajl']?>.css" type="text/css"><?php } ?>
	<img  src="./images/menu/logo.png" align=left width=60 height=60>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-#3D3D3D navbar-Dark" >
	<header>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"><span class="navbar-toggler-icon"></span></button>
		<?php foreach ($oldalak as $url => $oldal) { ?>
						<?php if(! isset($_SESSION['login']) && $oldal['menun'][0] || isset($_SESSION['login']) && $oldal['menun'][1]) { ?>
							<div class="collapse navbar-collapse" id="collapsibleNavbar">
<ul class="navbar-nav">
							<li class="nav-item"<?= (($oldal == $keres) ? ' class="active"' : '') ?>>
						 	<a class="navbar-brand" href="<?= ($url == '/') ? '.' : ('?oldal=' . $url) ?>">
							<?= $oldal['szoveg'] ?></a>
							</li>
</ul>
						<?php } ?>
					<?php } ?>
		
		
		</ul>
		<?php if(isset($_SESSION['login'])) { ?><h4 id="bejelen"><center> <strong>Welcome:</strong><?= $_SESSION['csn']." ".$_SESSION['un']." (".$_SESSION['login'].")" ?></h4><?php } ?>
	</header>
	</nav>
    <div id="wrapper">
        
        <div id="content">
            <?php include("./templates/pages/{$keres['fajl']}.tpl.php"); ?>
        </div>
    </div>
</body>
</html>
