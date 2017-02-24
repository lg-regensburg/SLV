<?php
/* Vordefinierte Werte */
$menu['active'] = " id=\"current\"";
/* Abkürzungen */
$m = $menu['current'];
$mA = $menu['active'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">
<head>
<title><?php if (!empty($title)) echo $title." - "; ?>Süddeutscher Leichtathletik Verband</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Süddeutscher Leichtathletik Verband, SLV, Leichtathletik, Top-Meeting, Leichtathletik-Elite, Sprint, Hindernis, Hürden" />
<?php if (!empty($description)) echo "<meta name=\"description\" content=\"$description\" />"; ?>
<?php /*if ($menu['current']=="live-ticker" && !empty($refresh)) echo $refresh."\n"; */?>
<meta name="language" content="de" />
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
<link href="css/layout.css" rel="stylesheet" type="text/css"/>
<script language="JavaScript" type="text/javascript" src="banner-rotation.js"></script>
<!--[if lte IE 7]>
<link href="css/patches/patch_layout.css" rel="stylesheet" type="text/css" />
<![endif]-->

<!--[if lte IE 6]>
<link href="css/navigation/adxmenu/ADxMenu-for-IE.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="javascript/ADxMenu.js"></script>
<![endif]-->

</head>
<body onload="bildwechsel('');">
  <div class="banner_skyscraper" id="sponsoren1">
    <a href="" target="_blank" id="imagelink">
      <img src="images/blank.gif" border="0" name="sponsoren1" height="600" width="176"/>
    </a>
  </div>
  <!-- <div class="banner_skyscraper">
    <a href="http://www.meine-bank-bayern.de" target="_blank" title="Volksbanken Raiffeisenbanken">
      <img src="/images/banner/VR-Banner-hoch.png" alt="Volksbanken Raiffeisenbanken" height="600" width="176">
            </a>
  </div> -->

<div id="page_margins">
	<div id="page">
		<div id="header">
			<div id="topnav">
				<!-- start: skip link navigation -->
				<a class="skip" href="#navigation" title="skip link">weiter zur Navigation</a><span class="hideme">.</span>
				<a class="skip" href="#content" title="skip link">weiter zum Inhalt</a><span class="hideme">.</span>
				<!-- end: skip link navigation -->
			</div>
			<div id="flashHeader">
			  <img src="images/design/header.jpg" width="900" height="245" alt="Süddeutscher Leichtathletik Verband" />
			</div>
		</div>
		<!-- begin: main navigation #nav -->
		<div id="nav">
			<!-- skip anchor: navigation -->
			<a id="navigation" name="navigation"></a>
			<div id="nav_main">
				<ul class="adxm menu">
				  <li<? if($m == 'home') echo $mA; ?>><a href="index.php">Home</a></li>
				  <li<? if($m == 'veranstaltungen') echo $mA; ?>><a href="veranstaltungen.php">Veranstaltungen</a></li>
				  <li<? if($m == 'ergebnisse') echo $mA; ?>><a href="ergebnisse.php">Ergebnisse</a></li>
				   <li<? if($m == 'verband') echo $mA; ?>><a href="verband.php">Verband</a>
				    <ul>
				      <li><a href="praesidium.php">Präsidium</a></li>
				      <li><a href="verband.php">Mitgliedsverbände  »</a>></li>
				      <li><a target="_blank" href="/download/Allgemeine_Ausschreibungsbestimmungen.pdf">Ausschreibungs-<br/>bestimmungen</a></li>
				      <li><a target="_blank" href="/download/Normen_SDM.pdf">Normen</a></li>
				      <li><a href="/download/Rotationsplan_2015_2022.pdf">Rotationsplan</a></li>
				    </ul>
				  </li>
				</ul>
			</div>
		</div>
		<!-- end: main navigation -->
		<!-- begin: content area #main -->
		<div id="main">
			<!-- begin: #col1 - first float column -->
			<div id="col1">
          <div id="col1_content" class="clearfix">
            <br>
            <a href="http://www.meine-bank-bayern.de" target="_blank" title="Volksbanken Raiffeisenbanken">
            <img src="images/banner/VR-Banner.png" width="90" alt="Volksbanken Raiffeisenbanken" />
          </a>
          </div>
<!--
<iframe name="sponsoren" width="190" height="400" frameborder="0" src="sponsoren/iframe.html" scrolling="no"></iframe>
-->


			  </div>
			</div>
			<!-- end: #col1 -->
			<!-- begin: #col2 second float column -->
			<div id="col2">
				<div id="col2_content" class="clearfix"> </div>
			</div>
			<!-- end: #col2 -->

			<!-- begin: #col3 Inhaltsspalte (static column) -->
			<div id="col3">
				<div id="col3_content" class="clearfix">
					<!-- skip anchor: content -->
					<a id="content" name="content"></a><br />
<!-- Besonderes
<h4 class="hinweis" style="text-align:center;"><a href="http://www.sparkassen-gala.de/2012/">» Seite der Sparkassen Gala 2012</a></h4>
<br />	-->
