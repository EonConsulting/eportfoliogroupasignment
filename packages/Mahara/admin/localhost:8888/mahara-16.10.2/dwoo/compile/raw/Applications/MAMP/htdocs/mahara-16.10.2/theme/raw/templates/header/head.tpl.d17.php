<?php
/* template head */
if (function_exists('Dwoo_Plugin_theme_url')===false)
	$this->getLoader()->loadPlugin('theme_url');
/* end template head */ ob_start(); /* template body */ ?><head data-basehref="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
    <meta name="generator" content="Mahara <?php echo (is_string($tmp=$this->scope["SERIES"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?> (https://mahara.org)" />
    <meta http-equiv="Content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta property="og:title" content="<?php echo (is_string($tmp=$this->scope["PAGETITLE"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" />
    <meta property="og:description" content="<?php echo (is_string($tmp=$this->scope["sitedescription4facebook"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" />
    <meta property="og:image" content="<?php echo (is_string($tmp=$this->scope["sitelogo4facebook"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" />
    <meta name="viewport" id="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=10.0,initial-scale=1.0" />
    <?php if (((is_string($tmp=(isset($this->scope["PAGEAUTHOR"]) ? $this->scope["PAGEAUTHOR"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) !== null)) {
?><meta name="author" content="<?php echo (is_string($tmp=$this->scope["PAGEAUTHOR"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><?php 
}?>

    <title><?php echo (is_string($tmp=$this->scope["PAGETITLE"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></title>
    <script type="application/javascript">
    var config = {
        'theme': <?php echo (isset($this->scope["THEMELIST"]) ? $this->scope["THEMELIST"] : null);?>,
        'sesskey' : '<?php echo (is_string($tmp=$this->scope["SESSKEY"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>',
        'wwwroot': '<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>',
        'loggedin': <?php echo intval((is_string($tmp=$this->scope["USER"]->is_logged_in()) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp));?>,
        'userid': <?php echo (is_string($tmp=$this->scope["USER"]->get('id')) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>,
        'mobile': <?php if ((isset($this->scope["MOBILE"]) ? $this->scope["MOBILE"] : null)) {
?>1<?php 
}
else {
?>0<?php 
}?>,
        'handheld_device': <?php if ((isset($this->scope["HANDHELD_DEVICE"]) ? $this->scope["HANDHELD_DEVICE"] : null)) {
?>1<?php 
}
else {
?>0<?php 
}?>,
        'cc_enabled': <?php echo intval((is_string($tmp=(isset($this->scope["CC_ENABLED"]) ? $this->scope["CC_ENABLED"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp));?>,
        'mathjax': <?php if (get_config('mathjax') == true) {
?>1<?php 
}
else {
?>0<?php 
}?>,
        'select2_lang': '<?php echo (is_string($tmp=$this->scope["select2_language"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>'
    };
    </script>
    <?php echo (isset($this->scope["STRINGJS"]) ? $this->scope["STRINGJS"] : null);?>

<?php 
$_fh1_data = (is_string($tmp=(isset($this->scope["JAVASCRIPT"]) ? $this->scope["JAVASCRIPT"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isTraversable($_fh1_data) == true)
{
	foreach ($_fh1_data as $this->scope['script'])
	{
/* -- foreach start output */
?>
    <script type="application/javascript" src="<?php echo (is_string($tmp=$this->scope["script"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"></script>
<?php 
/* -- foreach end output */
	}
}?>

    <script type="application/javascript" src="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>/js/select2/select2.full.js?v=<?php echo (is_string($tmp=$this->scope["CACHEVERSION"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"></script>
<?php if (((is_string($tmp=(isset($this->scope["INLINEJAVASCRIPT"]) ? $this->scope["INLINEJAVASCRIPT"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) !== null)) {
?>
    <script type="application/javascript">
<?php echo (isset($this->scope["INLINEJAVASCRIPT"]) ? $this->scope["INLINEJAVASCRIPT"] : null);?>

    </script>
<?php 
}?>

<?php 
$_fh2_data = (is_string($tmp=(isset($this->scope["HEADERS"]) ? $this->scope["HEADERS"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isTraversable($_fh2_data) == true)
{
	foreach ($_fh2_data as $this->scope['header'])
	{
/* -- foreach start output */
?>
    <?php echo (isset($this->scope["header"]) ? $this->scope["header"] : null);?>

<?php 
/* -- foreach end output */
	}
}?>


<?php 
$_fh3_data = (is_string($tmp=(isset($this->scope["STYLESHEETLIST"]) ? $this->scope["STYLESHEETLIST"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isTraversable($_fh3_data) == true)
{
	foreach ($_fh3_data as $this->scope['cssurl'])
	{
/* -- foreach start output */
?>
    <link rel="stylesheet" type="text/css" href="<?php echo (is_string($tmp=$this->scope["cssurl"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
<?php 
/* -- foreach end output */
	}
}?>

    <script type="application/javascript" src="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>/lib/bootstrap/assets/javascripts/bootstrap.js?v=<?php echo (is_string($tmp=$this->scope["CACHEVERSION"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"></script>
    <script type="application/javascript" src="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>/js/javascript-templates/js/tmpl.min.js?v=<?php echo (is_string($tmp=$this->scope["CACHEVERSION"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"></script>
    <script type="application/javascript" src="<?php echo Dwoo_Plugin_theme_url($this, 'js/masonry.min.js', null);?>?v=<?php echo (is_string($tmp=$this->scope["CACHEVERSION"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"></script>
    <script type="application/javascript" src="<?php echo Dwoo_Plugin_theme_url($this, 'js/pieform.js', null);?>?v=<?php echo (is_string($tmp=$this->scope["CACHEVERSION"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"></script>
    <script type="application/javascript" src="<?php echo Dwoo_Plugin_theme_url($this, 'js/formtabs.js', null);?>?v=<?php echo (is_string($tmp=$this->scope["CACHEVERSION"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"></script>
    <script type="application/javascript" src="<?php echo Dwoo_Plugin_theme_url($this, 'js/filebrowser.js', null);?>?v=<?php echo (is_string($tmp=$this->scope["CACHEVERSION"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"></script>
    <script type="application/javascript" src="<?php echo Dwoo_Plugin_theme_url($this, 'js/access.js', null);?>?v=<?php echo (is_string($tmp=$this->scope["CACHEVERSION"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"></script>
    <script type="application/javascript" src="<?php echo Dwoo_Plugin_theme_url($this, 'js/notification.js', null);?>?v=<?php echo (is_string($tmp=$this->scope["CACHEVERSION"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"></script>
    <script type="application/javascript" src="<?php echo Dwoo_Plugin_theme_url($this, 'js/dock.js', null);?>?v=<?php echo (is_string($tmp=$this->scope["CACHEVERSION"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"></script>
    <script type="application/javascript" src="<?php echo Dwoo_Plugin_theme_url($this, 'js/theme.js', null);?>?v=<?php echo (is_string($tmp=$this->scope["CACHEVERSION"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"></script>

    <link rel="shortcut icon" href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>favicon.ico?v=<?php echo (is_string($tmp=$this->scope["CACHEVERSION"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" type="image/vnd.microsoft.icon">
    <link rel="image_src" href="<?php echo (is_string($tmp=$this->scope["sitelogo"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
<?php if ((isset($this->scope["ADDITIONALHTMLHEAD"]) ? $this->scope["ADDITIONALHTMLHEAD"] : null)) {

echo (isset($this->scope["ADDITIONALHTMLHEAD"]) ? $this->scope["ADDITIONALHTMLHEAD"] : null);

}?>

<?php if ((isset($this->scope["COOKIECONSENTCODE"]) ? $this->scope["COOKIECONSENTCODE"] : null)) {

echo (isset($this->scope["COOKIECONSENTCODE"]) ? $this->scope["COOKIECONSENTCODE"] : null);

}?>


</head>
<?php if($doCache) {
	echo '<dwoo:dynamic_'.$dynamicId.'><?php echo flush();?></dwoo:dynamic_'.$dynamicId.'>';
} else {
	echo flush();
}?>

<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>