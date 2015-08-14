<?php
/* Vordefinierte Werte */
$menu['active'] = " id=\"current\"";
/* Abkürzungen */
$m = $menu['current'];
$mA = $menu['active'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title><?php if (!empty($title)) echo $title." - "; ?>Süddeutscher Leichtathletik Verband</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Süddeutscher Leichtathletik Verband, SLV, Leichtathletik, Top-Meeting, Leichtathletik-Elite, Sprint, Hindernis, Hürden" />
<?php if (!empty($description)) echo "<meta name=\"description\" content=\"$description\" />"; ?>
<?php /*if ($menu['current']=="live-ticker" && !empty($refresh)) echo $refresh."\n"; */?>
<meta name="language" content="de" />
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
<link href="css/layout.css" rel="stylesheet" type="text/css"/>
<!--[if lte IE 7]>
<link href="css/patches/patch_layout.css" rel="stylesheet" type="text/css" />
<![endif]-->

<!--[if lte IE 6]>
<link href="css/navigation/adxmenu/ADxMenu-for-IE.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="javascript/ADxMenu.js"></script>
<![endif]-->

</head>
<body>
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
				  <li<? if($m == 'veranstaltungen') echo $mA; ?>><a href="ausschreibungen.php">Veranstaltungen</a>
				    <ul>
				      <li><a href="termine.php">Termine</a></li>
				      <li><a target="_blank" href="http://www.sdm2015.de/ ">SDM Aktive / U18 </a></li>
				      <li><a target="_blank" href="/download/Ausschreibung_SDM_2015.pdf">SDM U23 / U16</a></li>
				      <li><a target="_blank" href="/download/Ausschreibung_SDHM_U18.pdf">SDHM Aktive / U 18</a></li>
				      <li><a target="_blank" href="/download/Meldeliste-Süddt.Halle-Akt-U18+Rahmenwettb.pdf">SDHM Aktive / U 18 Teilnehmer</a></li>
				      <li><a target="_blank" href="/download/Ausschreibung%20Bayer%20und%20S%C3%BCddeutsche%2020140521%2013%20Uhr.pdf">SDM Gehen</a></li>
              <li><a target="_blank" href="http://www.hlv.de/WETTKAMPFSPORT/view_termin.asp?id=975">SDM Bahngehen</a></li>
					  <li><a target="_blank" href="http://www.lvrheinhessen.de/html/Termine-2015/Ausschreibungen-2015/150919-55%20SLV%20Senioren-MK%202015.pdf">SDM Senioren MK</a></li>
				      <li><a target="_blank" href="/download/Allgemeine%20Ausschreibungsbestimmungen%20Aenderung.pdf">Ausschreibungs-<br/>bestimmungen</a></li>
				      <li><a target="_blank" href="/download/Normen_SDM.pdf">Normen</a></li>
					</ul>
				  </li>
				  <li<? if($m == 'ergebnisse') echo $mA; ?>><a href="ergebnisse.php">Ergebnisse</a>
				  <ul>
				      <li><a target="_blank" href="http://ladv.de/ergebnis/datei/24012">SDM Aktive / U 18</a></li>
					  <li><a target="_blank" href="http://slvu23.hlv-region-nord.de/day1.htm">SDM U23 / U16</a></li>
					  <li><a target="_blank" href="http://lalive.de/150207DESHT">SDHM Aktive / U 18</a></li>
					  <li><a target="_blank" href="http://www.lvrheinhessen.de/html/Termine-2014/Ergebnisse-2014/140920-SLV%20SenMk%20Erg%20.htm">SDM Senioren MK</a></li>
				      <li><a target="_blank" href="http://www.blv-sport.de/fileadmin/wettkampfsport/2014/erg/0712_blv-strassengehen.pdf">SDM Gehen</a></li>
					<li><a href="ergebnisse.php">Ergebnisse der letzten Jahre</a>
				  </ul></li>
				   <li<? if($m == 'verband') echo $mA; ?>><a href="verband.php">Verband</a>
				    <ul>
				      <li><a href="praesidium.php">Präsidium</a></li>
				      <li><a href="verbaende.php">Mitgliedsverbände&nbsp; &raquo;</a>
						<ul id="navImpressionen">
						  <li><a href="http://www.blv-online.de/">Baden</a></li>
						  <li><a href="http://www.blv-sport.de">Bayern</a></li>
						  <li><a href="http://www.wlv-sport.de">Württemberg</a></li>
						  <li><a href="http://www.lv-pfalz.de">Pfalz</a></li>
						  <li><a href="http://www.hlv.de">Hessen</a></li>
						  <li><a href="http://www.lvrheinhessen.de">Rheinhessen</a></li>
						  <li><a href="http://www.slb-saarland.com">Saarland</a></li>
						</ul></li>
				      <li><a target="_blank" href="/download/Allgemeine%20Ausschreibungsbestimmungen%20%C3%84nderung.pdf">Ausschreibungs-<br/>bestimmungen</a></li>
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


<!--
<iframe name="sponsoren" width="190" height="400" frameborder="0" src="sponsoren/iframe.html" scrolling="no"></iframe>
-->


			  </div>
			</div>
			<!-- end: #col1 -->
			<!-- begin: #col2 second float column -->
			<div id="col2">
				<div id="col2_content" class="clearfix">&nbsp;</div>
			</div>
			<!-- end: #col2 -->

			<!-- begin: #col3 Inhaltsspalte (static column) -->
			<div id="col3">
				<div id="col3_content" class="clearfix">
					<!-- skip anchor: content -->
					<a id="content" name="content"></a><br />
<!-- Besonderes
<h4 class="hinweis" style="text-align:center;"><a href="http://www.sparkassen-gala.de/2012/">&raquo; Seite der Sparkassen Gala 2012</a></h4>
<br />	-->
