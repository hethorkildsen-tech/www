<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta content="Bedriftsdagen 2020 arrangert av Mannhullet ved NTNU" name="description"></meta>

<title>Bedriftsdagen 2020 - Påmelding</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="styles/bootstrap.css">
<link rel="stylesheet" href="styles/main.css">
<link href="styles/bootstrap-responsive.css" rel="stylesheet">

<script src="scripts/vendor/modernizr.min.js"></script>

<link rel="icon" type="image/png" href="img/bedriftsdagenfavicon.png"/>

</head>
<body>
<div id="wrap">

<div class="container-fluid"><!--WRAPPER START-->

  <div class="logo"><!--LOGO START-->
   <div id="storlogo">
    <div class="top-logo"><img src="img/Logo/2021/Bedriftsdagen_logo_2021.png"</div>

    </div>
   <!-- <div class="dnh-logo">
      <div class="symbol"></div>
      <div class="tekst">Tekst til høyre?</div>
    </div>-->
    <div style="clear:both;"></div><!--CLEARFIX-->
  </div><!--LOGO SLUTT-->

  <div class="navbar"><!-- MENUBAR START -->
    <div class="navbar-inner">
    <!--<a class="brand" href="#">Title</a>-->
      <ul class="nav">
        <li ><a href="/">Forsiden</a></li>
        <li ><a href="info.html">Om Bedriftsdagen</a></li>
        <li><a href="program.html">Program</a></li>
        <li><a href="forstudenter.html">For studenter</a></li>
        <li><a href="forbedrifter.html">For bedrifter</a></li>
        <li><a href="kontakt-oss.html">Kontakt</a></li>

      </ul>
    </div>

  </div><!-- MENUBAR SLUTT -->


     <div class="row-fluid">
     	<div class="span6">



     <?php

	 include "inc/connect-database.php";

	 kobleTil();
	 	$mail=$_POST['epost'];
	 	$fnavn=$_POST['fornavn'];
		$enavn=$_POST['etternavn'];


	 if ($fnavn == "" || $enavn == "" || $_POST['epost']== ""){

		 echo  "<h3>Prøv en gang til...</h3>";




	 }else {
		 if(isset($_POST['revy'])){
			 $revy=1;
			 $revyprint="ja";
			 }else{
			 $revy=0;
			 $revyprint= "nei";
			 };

		 if(isset($_POST['middag'])){
			 $middag=1;
			 $middagprint="ja";
			 }else{
			 $middag=0;
			 $revy=0;
			 $middagprint= "nei";
			 $revyprint= "nei";};



		 echo "<h3>Takk for din påmelding</h3><br><br>	Informasjonen du skrev inn:
<br><br>";
		 echo $fnavn." ".$enavn."<br>Middag: ".$middagprint."<br> Revy: ".$revyprint."<br> E-post: ".$mail;




		$sql="INSERT INTO deltakere (id, fornavn, etternavn, epost, revy, middag)
		VALUES (0, '$fnavn', '$enavn', '$mail', '$revy', '$middag');";
	 	mysql_query($sql);

	 }?>










        </div>
<div class="span6">
<div style=" max-width:100%; position:relative; float:left; margin-top:65px;">
<img src="img/om-oss.jpg" alt="Om oss "></div>
    </div>
     </div>




</div><!--WRAPPER SLUTT-->
      <!-- Begin page content -->
       <div class="container"></div><div id="push"></div></div><div id="footer"><div class="container" style="width:850px; text-align:center; max-width: 850px;">
    <img style="padding:5px;"src="img/bedrifter/bottombar/dnv_gl.png"><br>
    <img style="padding:5px;"src="img/bedrifter/bottombar/boa.png">
    <img style="padding:5px;"src="img/bedrifter/bottombar/fedem.png">
    <img style="padding:5px;"src="img/bedrifter/bottombar/havyard.png">
    <img style="padding:5px;"src="img/bedrifter/bottombar/global.png"><br>
    <img style="padding:5px;"src="img/bedrifter/bottombar/sfd.png">
    <img style="padding:5px;"src="img/bedrifter/bottombar/skips.png">
    <img style="padding:5px;"src="img/bedrifter/bottombar/stat.png">
    <img style="padding:5px;"src="img/bedrifter/bottombar/tech.png">



    <p class="muted credit">
Org: 912 199 568 - post@bedriftsdagen.no<br />
     Tyholt - Trondheim <br />
Siden er laget av <a href="http://www.granbarmedia.no">Granbar Media</a> 2013

    </p></div></div>
<!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

<!-- Add your site or application content here -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="scripts/vendor/jquery.min.js"><\/script>')</script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>

<!-- build:js scripts/plugins.js -->
<script src="scripts/vendor/bootstrap/bootstrap-affix.js"></script>
<script src="scripts/vendor/bootstrap/bootstrap-alert.js"></script>
<script src="scripts/vendor/bootstrap/bootstrap-dropdown.js"></script>
<script src="scripts/vendor/bootstrap/bootstrap-tooltip.js"></script>
<script src="scripts/vendor/bootstrap/bootstrap-modal.js"></script>
<script src="scripts/vendor/bootstrap/bootstrap-transition.js"></script>
<script src="scripts/vendor/bootstrap/bootstrap-button.js"></script>
<script src="scripts/vendor/bootstrap/bootstrap-popover.js"></script>
<script src="scripts/vendor/bootstrap/bootstrap-typeahead.js"></script>
<script src="scripts/vendor/bootstrap/bootstrap-carousel.js"></script>
<script src="scripts/vendor/bootstrap/bootstrap-scrollspy.js"></script>
<script src="scripts/vendor/bootstrap/bootstrap-collapse.js"></script>
<script src="scripts/vendor/bootstrap/bootstrap-tab.js"></script>
<!-- endbuild -->
</body>
</html>
