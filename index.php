<?
    if (isset($_SERVER['QUERY_STRING'])) {
        $page=$_SERVER['QUERY_STRING'];
        $allowed=array("TheBlackMarket", "Scrumy", "Def", "Aftervibe");
        $found=in_array($page, $allowed);
    }
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Recent projects<?= $found ? ": ".$page : "" ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="portfolio.css">
    <link rel="shortcut icon" href="favicon.ico">
    <script src="javascripts/typeface/typeface-0.14.js"></script>
    <script src="javascripts/typeface/helvetiker_regular.typeface.js"></script>
</head>
<body id="<?= $found ? $page."\" class=\"section" : "front" ?>">
<div class="typeface-js nav">
<?  include "front.html";?>
</div>
<?  if($found) { ?>
<div><? include $page.".html";?></div>
<?  } ?>
<div id="footer">&#169; Dan Kordik 2010 - <a href="http://github.com/dkordik/portfolio">Source</a> - 
    
<script language="javascript" type="text/javascript">
    var username="dkordik";
    var domain="gmail.com";
    document.write("<a href='mailto:"+username+"@"+domain+"'>Contact</a>");
</script>
</div>
</body>
</html>