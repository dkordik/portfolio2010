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
<?  include "front.html" ?>
</div>
<?  if($found) { ?>
<div><? include $page.".html" ?></div>
<?  } ?>
<? include "footer.html" ?>
</body>
</html>