<?php
/* template head */
if (function_exists('Dwoo_Plugin_include')===false)
	$this->getLoader()->loadPlugin('include');
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
/* end template head */ ob_start(); /* template body */ ?><!doctype html>
<!--[if IE 8 ]><html<?php if ((isset($this->scope["LANGDIRECTION"]) ? $this->scope["LANGDIRECTION"] : null) == 'rtl') {
?> dir="rtl"<?php 
}?> lang="<?php echo (is_string($tmp=$this->scope["LANGUAGE"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" class="ie ie8"><![endif]-->
<!--[if IE 9 ]><html<?php if ((isset($this->scope["LANGDIRECTION"]) ? $this->scope["LANGDIRECTION"] : null) == 'rtl') {
?> dir="rtl"<?php 
}?> lang="<?php echo (is_string($tmp=$this->scope["LANGUAGE"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" class="ie ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html<?php if ((isset($this->scope["LANGDIRECTION"]) ? $this->scope["LANGDIRECTION"] : null) == 'rtl') {
?> dir="rtl"<?php 
}?> lang="<?php echo (is_string($tmp=$this->scope["LANGUAGE"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><!--<![endif]-->
<?php echo Dwoo_Plugin_include($this, "header/head.tpl", null, null, null, '_root', null);?>

<body data-usethemedjs="true" class="no-js <?php if ((isset($this->scope["ADMIN"]) ? $this->scope["ADMIN"] : null) || (isset($this->scope["INSTITUTIONALADMIN"]) ? $this->scope["INSTITUTIONALADMIN"] : null) || (isset($this->scope["STAFF"]) ? $this->scope["STAFF"] : null) || (isset($this->scope["INSTITUTIONALSTAFF"]) ? $this->scope["INSTITUTIONALSTAFF"] : null)) {
?>admin<?php 
}?> <?php if ((isset($this->scope["loggedout"]) ? $this->scope["loggedout"] : null)) {
?>loggedout<?php 
}?> <?php if ((isset($this->scope["pagename"]) ? $this->scope["pagename"] : null)) {

echo (is_string($tmp=$this->scope["pagename"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);

}?>">
    <div class="skiplink btn-group btn-group-top">
        <a class="sr-only sr-only-focusable btn btn-default" href="#main"><?php echo Dwoo_Plugin_str($this, 'skipmenu', 'mahara', null, null, null, null, null);?></a>
    </div>

    <?php if ((isset($this->scope["USERMASQUERADING"]) ? $this->scope["USERMASQUERADING"] : null) || ! (isset($this->scope["PRODUCTIONMODE"]) ? $this->scope["PRODUCTIONMODE"] : null) || (isset($this->scope["SITECLOSED"]) ? $this->scope["SITECLOSED"] : null) || (isset($this->scope["SITETOP"]) ? $this->scope["SITETOP"] : null)) {
?>
        <div class="site-messages text-center">
    <?php 
}?>


        <?php if ((isset($this->scope["USERMASQUERADING"]) ? $this->scope["USERMASQUERADING"] : null)) {
?>
            <div class="site-message alert alert-warning" role="alert">
                <span class="icon icon-lg icon-exclamation-triangle left" role="presentation" aria-hidden="true"></span>
                <span><?php echo (is_string($tmp=$this->scope["masqueradedetails"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></span> 
                <a href="<?php echo (is_string($tmp=$this->scope["becomeyoulink"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><?php echo (is_string($tmp=$this->scope["becomeyouagain"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></a>
            </div>
        <?php 
}?>

        <?php if (! (isset($this->scope["PRODUCTIONMODE"]) ? $this->scope["PRODUCTIONMODE"] : null)) {
?>
            <div class="site-message alert alert-info" role="alert">
                <span class="icon icon-lg icon-info-circle left" role="presentation" aria-hidden="true"></span>
                <?php echo Dwoo_Plugin_str($this, 'notproductionsite', 'error', null, null, null, null, null);?>

            </div>
        <?php 
}?>

        <?php if ((isset($this->scope["SITECLOSED"]) ? $this->scope["SITECLOSED"] : null)) {
?>
            <div class="site-message alert alert-danger" role="alert">
                <span class="icon icon-lg icon-lock left" role="presentation" aria-hidden="true"></span>
                <?php if ((isset($this->scope["SITECLOSED"]) ? $this->scope["SITECLOSED"] : null) == 'logindisabled') {

echo Dwoo_Plugin_str($this, 'siteclosedlogindisabled', 'mahara', null, "".(is_string($tmp=(isset($this->scope["WWWROOT"]) ? $this->scope["WWWROOT"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)."admin/upgrade.php", null, null, null);

}
else {

echo Dwoo_Plugin_str($this, 'siteclosed', 'mahara', null, null, null, null, null);

}?>

            </div>
        <?php 
}?>

        <?php if ((isset($this->scope["SITETOP"]) ? $this->scope["SITETOP"] : null)) {
?>
            <div id="switchwrap"><?php echo (isset($this->scope["SITETOP"]) ? $this->scope["SITETOP"] : null);?></div>
        <?php 
}?>


    <?php if ((isset($this->scope["USERMASQUERADING"]) ? $this->scope["USERMASQUERADING"] : null) || ! (isset($this->scope["PRODUCTIONMODE"]) ? $this->scope["PRODUCTIONMODE"] : null) || (isset($this->scope["SITECLOSED"]) ? $this->scope["SITECLOSED"] : null) || (isset($this->scope["SITETOP"]) ? $this->scope["SITETOP"] : null)) {
?>
        </div>
    <?php 
}?>

    <header class="header navbar navbar-default navbar-fixed-top no-site-messages">
        <div class="container">
            <?php if ((isset($this->scope["MAINNAV"]) ? $this->scope["MAINNAV"] : null)) {
?>
             <!-- Brand and toggle get grouped for better mobile display -->
                <button type="button" class="menu-toggle navbar-toggle collapsed" data-toggle="collapse" data-target=".nav-main">
                    <span class="sr-only"><?php echo Dwoo_Plugin_str($this, "show", 'mahara', null, null, null, null, null);?> <?php echo Dwoo_Plugin_str($this, "menu", 'mahara', null, null, null, null, null);?></span>
                    <span class="icon-bar" role="presentation"></span>
                    <span class="icon-bar" role="presentation"></span>
                    <span class="icon-bar" role="presentation"></span>
                </button>
            <?php 
}?>

            <?php if (! (isset($this->scope["nosearch"]) ? $this->scope["nosearch"] : null) && ( (isset($this->scope["LOGGEDIN"]) ? $this->scope["LOGGEDIN"] : null) || (isset($this->scope["publicsearchallowed"]) ? $this->scope["publicsearchallowed"] : null) )) {
?>
            <button type="button" class="navbar-toggle search-toggle collapsed" data-toggle="collapse" data-target=".navbar-form">
                <span class="icon icon-search" role="presentation" aria-hidden="true"></span>
                <span class="nav-title sr-only"><?php echo Dwoo_Plugin_str($this, "show", 'mahara', null, null, null, null, null);?> <?php echo Dwoo_Plugin_str($this, "search", 'mahara', null, null, null, null, null);?></span>
            </button>
            <?php 
}?>

            <div id="logo-area" class="logo-area">
                <a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" class="logo">
                    <img src="<?php echo (is_string($tmp=$this->scope["sitelogo"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" alt="<?php echo (is_string($tmp=$this->scope["sitename"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
                </a>
                <?php if ((isset($this->scope["ADMIN"]) ? $this->scope["ADMIN"] : null) || (isset($this->scope["INSTITUTIONALADMIN"]) ? $this->scope["INSTITUTIONALADMIN"] : null) || (isset($this->scope["STAFF"]) ? $this->scope["STAFF"] : null) || (isset($this->scope["INSTITUTIONALSTAFF"]) ? $this->scope["INSTITUTIONALSTAFF"] : null)) {
?>
                    <div class="admin-title">
                        <a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>admin/" accesskey="a" class="admin-site"><?php echo Dwoo_Plugin_str($this, "administration", 'mahara', null, null, null, null, null);?></a>
                    </div>
                <?php 
}?>

                <div id="loading-box" class="loading-box" style='display:none'></div>
            </div>
            <?php echo Dwoo_Plugin_include($this, "header/topright.tpl", null, null, null, '_root', null);?>


        </div>
    </header>

    <?php echo Dwoo_Plugin_include($this, "header/navigation.tpl", null, null, null, '_root', null);?>



    <div class="container main-content">
        <div class="row">
            <main id="main" class="<?php if ((isset($this->scope["SIDEBARS"]) ? $this->scope["SIDEBARS"] : null)) {

if ((isset($this->scope["SIDEBLOCKS"]["right"]) ? $this->scope["SIDEBLOCKS"]["right"]:null)) {
?>col-md-9 <?php 
}
else {
?>col-md-9 col-md-push-3<?php 
}

}
else {
?>col-md-12<?php 
}?> main">
                <div id="content" class="main-column<?php if ((isset($this->scope["selected"]) ? $this->scope["selected"] : null) == 'content') {
?> editcontent<?php 
}?>">
                    <div id="main-column-container">

                        <?php if ((isset($this->scope["SUBPAGENAV"]) ? $this->scope["SUBPAGENAV"] : null) || (isset($this->scope["sectiontabs"]) ? $this->scope["sectiontabs"] : null)) {
?>
                        <?php echo $this->assignInScope((is_string($tmp=(isset($this->scope["SUBPAGENAV"]) ? $this->scope["SUBPAGENAV"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), 'item');?>

                        <div class="arrow-bar <?php echo (is_string($tmp=$this->scope["item"]["subnav"]["class"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
                            <span class="arrow hidden-xs">
                                <span class="text">
                                <?php if (((is_string($tmp=(isset($this->scope["PAGEHEADING"]) ? $this->scope["PAGEHEADING"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) !== null)) {

echo (is_string($tmp=$this->scope["PAGEHEADING"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);

}?>

                                </span>
                            </span>
                            <span class="right-text">
                                <?php echo Dwoo_Plugin_include($this, "inpagenav.tpl", null, null, null, '_root', null);?>

                            </span>
                        </div>
                        <?php 
}?>


                        <?php if($doCache) {
	echo '<dwoo:dynamic_'.$dynamicId.'><?php echo insert_messages();?></dwoo:dynamic_'.$dynamicId.'>';
} else {
	echo insert_messages();
}?>

                        <?php if ((isset($this->scope["institutionselector"]) ? $this->scope["institutionselector"] : null)) {
?>
                            <div class="institutionselector">
                            <?php echo (isset($this->scope["institutionselector"]) ? $this->scope["institutionselector"] : null);?>

                            </div>
                        <?php 
}?>


                        <?php if (((is_string($tmp=(isset($this->scope["PAGEHEADING"]) ? $this->scope["PAGEHEADING"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) !== null)) {
?>
                            <h1 class="<?php echo (is_string($tmp=$this->scope["headingclass"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
                                <?php if (((is_string($tmp=(isset($this->scope["pageicon"]) ? $this->scope["pageicon"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) !== null)) {
?>
                                <span class="<?php echo (is_string($tmp=$this->scope["pageicon"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"></span>
                                <?php 
}?>

                                <?php if ((isset($this->scope["SUBSECTIONHEADING"]) ? $this->scope["SUBSECTIONHEADING"] : null)) {
?>
                                <span class="section-heading">
                                    <?php echo (is_string($tmp=$this->scope["SUBSECTIONHEADING"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>

                                </span>
                                <?php 
}?>

                                <span class="section-heading">
                                    <?php if ((isset($this->scope["SUBSECTIONHEADING"]) ? $this->scope["SUBSECTIONHEADING"] : null)) {
?>| <?php 
}
echo (is_string($tmp=$this->scope["PAGEHEADING"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>

                                </span>
                                <?php if ((isset($this->scope["PAGEHELPNAME"]) ? $this->scope["PAGEHELPNAME"] : null)) {
?><span class="page-help-icon"><?php echo (isset($this->scope["PAGEHELPICON"]) ? $this->scope["PAGEHELPICON"] : null);?></span><?php 
}?>

                                <?php if ((isset($this->scope["publicgroup"]) ? $this->scope["publicgroup"] : null) && (isset($this->scope["rsswithtitle"]) ? $this->scope["rsswithtitle"] : null)) {
?>
                                <a href="<?php echo (is_string($tmp=$this->scope["feedlink"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" class="mahara-rss-icon text-small pull-right " role="presentation" aria-hidden="true">
                                    <span class="icon-rss icon icon-lg" role="presentation" aria-hidden="true"></span>
                                </a>
                                <?php 
}?>

                            </h1>
                        <?php 
}?>


                        <?php if ((isset($this->scope["SUBPAGETOP"]) ? $this->scope["SUBPAGETOP"] : null)) {
?>
                            <?php echo Dwoo_Plugin_include($this, (is_string($tmp=(isset($this->scope["SUBPAGETOP"]) ? $this->scope["SUBPAGETOP"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), null, null, null, '_root', null);?>

                        <?php 
}?>

<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>