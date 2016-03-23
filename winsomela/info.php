<?php

	$catID = getCatID($slug);
	$pageText = getPageTextID($catID);
	
	$metaTitle = str_replace("-", " ", $slug);

?>

<!DOCTYPE>
<html lang="en">
<head>

    <title><?=strtoupper($metaTitle)?> | <?=getOption('company')?> PHOTOGRAPHY</title>
	<?php include('includes/scripts.php'); ?>
	<!-- Custom Scripts For This Page -->
	
	<meta property="og:title" content="<?=strtoupper($metaTitle)?> | <?=getOption('company')?> PHOTOGRAPHY" /> 
	<meta property="og:image" content="<?=getOption("url")?><?=getOption("imagePathFront")?><?=$firstImage['img']?>" /> 
	<meta property="og:description" content="<?=strtoupper($metaTitle)?> | <?=getOption('company')?> PHOTOGRAPHY" />
	<meta property="og:url" content="<?=getOption('url')?>" />
	<meta property="og:site_name" content="<?=getOption('company')?> PHOTOGRAPHY" />

</head>
<body class="info">

<div id="leftNav">
	<?php include('includes/leftNav.php'); ?>
</div>

<?=$pageText?>

</body>
</html>