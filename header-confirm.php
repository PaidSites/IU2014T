<?php include('../template/config.php'); ?>

<?php 

	//setcookie('iu_signup','complete',time() + (10 * 365 * 24 * 60 * 60),'/');

?>

<!doctype html>

<html>

<head>

<script src="//cdn.optimizely.com/js/1214880204.js"></script>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Investment U - <?php echo $title ?></title>

<link rel="shortcut icon" href="http://assets.investmentu.com/root/images/investmentu/favicon.ico?v=4.4.4.2" type="image/x-icon" />

<link rel="stylesheet" href="http://www.investmentu.com/latest-research/template/css/bootstrap.min.css" id="bootstrap-css">

<link rel="stylesheet" href="http://www.investmentu.com/latest-research/template/css/style.css" id="template-style">

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script src="http://www.investmentu.com/latest-research/template/scripts/cookies.js"></script>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->

<script type="text/javascript">
docCookies.setItem('iu_signup', 'complete', 'Tue, 31 Dec 2022 13:11:07 GMT', '/', 'http://investmentu.com');
</script>

<!-- Loads safe seal (which is called in footer) -->
<script language="javascript" type="text/javascript">
//<![CDATA[
var cot_loc0=(window.location.protocol == "https:")? "https://seals.nsprotectsafe.com/script/logo.js" : "http://seals.nsprotectsafe.com/script/logo.js";
document.writeln('<scr' + 'ipt language="JavaScript" src="'+cot_loc0+'" type="text\/javascript">' + '<\/scr' + 'ipt>');
//]]>
</script>

<!-- Google Analytics -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-344672-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- End Google Analytics -->

</head>

<body>

<div id='m3_tracker_1' style='position: absolute; left: 0px; top: 0px; visibility: hidden;'><img src='http://ads.oxfordclub.com/www/delivery/ti.php?trackerid=1&amp;iu_signup=<?php echo $_COOKIE['iu_signup']; ?>&amp;cb=<?php echo rand(); ?>' width='0' height='0' alt='' /></div>

<header>

	<div class="header-bg"><div class="container">
    
    	<div class="row">
        
            <div id="branding" class="col-sm-12">
            
                <a href="http://investmentu.com/" target="_blank"><img src="<?php echo $logo_URL ?>" class="img-responsive center-block" alt="Investment U"></a>
            
            </div>
        
        </div>
    
    </div></div>

</header>