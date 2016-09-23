<!-- Készítette: Szabó Gergely (Gerviba) | GNU GENERAL PUBLIC LICENSE 3 | https://github.com/Gerviba/Tetris -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="hu-HU">
	<head>
		<title><?php echo isset($_GET['psy']) ? "PsyTetris" : "Tetris"; ?></title>
        <link href='https://fonts.googleapis.com/css?family=Press+Start+2P&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" type="image/png" href="0.png" id="favicon">
		<style>
            div.content {
                width: <?php echo isset($_GET['width']) ? $_GET['width'] * 32 + 80 : "400"; ?>px !important;
            }
            
            div.area {
                width: <?php echo isset($_GET['width']) ? $_GET['width'] * 32 : "320"; ?>px !important;
                height: <?php echo isset($_GET['height']) ? $_GET['height'] * 32 : "448"; ?>px !important;
            }
        </style>
		<link rel="stylesheet" type="text/css" href="<?php echo isset($_GET['psy']) ? "psy" : "normal"; ?>.css">
        <script>
            var height = <?php echo isset($_GET['height']) ? $_GET['height'] : 14; ?>;
            var width = <?php echo isset($_GET['width']) ? $_GET['width'] : 10; ?>;
            var defaultSpeed = <?php echo isset($_GET['speed']) ? $_GET['speed'] : 400; ?>;
		</script>
		<script src="tetris.js"></script>
    </head>
    <body onload="init()">
        <h1><?php echo isset($_GET['psy']) ? "Pszichedelikus<br />Tetris Pls" : "Gerviba's<br />Awesome Tetris"; ?></h1>
        <div class="content">
            <!-- 1:0px 2:32px 3:64px 4:96px 5:128px 6:160px 7:192px 8:224px 9:256px 10:288px -->
            <div class="area" id="root"></div> 
            <!-- <div class="entry c%COLOR%" id="uuid_%UUID%"></div> -->
            <div class="opts">
                <h1 id="gameover">Játék vége!</h1>
				<h2 id="scoreboard">Pont: 0</h2>
				<span>Mozgatás: A, D<br />Forgatás: Q, E<br />Indítás: Space<br />Gyors le: S</span>
            </div>
        </div>
    </body>
</html>