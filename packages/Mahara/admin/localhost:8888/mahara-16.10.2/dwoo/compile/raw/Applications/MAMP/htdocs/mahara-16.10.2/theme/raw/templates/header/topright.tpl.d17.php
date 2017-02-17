<?php
/* template head */
if (function_exists('Dwoo_Plugin_display_default_name')===false)
	$this->getLoader()->loadPlugin('display_default_name');
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
/* end template head */ ob_start(); /* template body */ ?>
<ul class="nav navbar-nav navbar-right top-nav <?php if ((isset($this->scope["languageform"]) ? $this->scope["languageform"] : null)) {
?>with-languageform<?php 
}?>">
    <?php if ((isset($this->scope["USERMASQUERADING"]) ? $this->scope["USERMASQUERADING"] : null) && (isset($this->scope["LOGGEDIN"]) ? $this->scope["LOGGEDIN"] : null)) {?><li class="backto-be-admin has-icon"><a href="<?php echo (is_string($tmp=$this->scope["becomeyoulink"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" title="<?php echo (is_string($tmp=$this->scope["becomeyouagain"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><span class="icon icon-undo" role="presentation"></span><span class="nav-title"><?php echo (is_string($tmp=$this->scope["becomeyouagain"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></span></a></li><?php }
if ((isset($this->scope["LOGGEDIN"]) ? $this->scope["LOGGEDIN"] : null)) {?><li class="identity has-icon"><a href="<?php echo profile_url((is_string($tmp=(isset($this->scope["USER"]) ? $this->scope["USER"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp));?>"><span class="icon icon-user" role="presentation" aria-hidden="true"></span><span class="nav-title"><?php echo Dwoo_Plugin_display_default_name($this, (is_string($tmp=(isset($this->scope["USER"]) ? $this->scope["USER"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp));?></span></a></li><?php }
if ((isset($this->scope["RIGHTNAV"]) ? $this->scope["RIGHTNAV"] : null)) {
$_fh5_data = (is_string($tmp=(isset($this->scope["RIGHTNAV"]) ? $this->scope["RIGHTNAV"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);if ($this->isTraversable($_fh5_data) == true){foreach ($_fh5_data as $this->scope['item']){/* -- foreach start output */?><li class="<?php echo (is_string($tmp=$this->scope["item"]["path"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ((isset($this->scope["item"]["selected"]) ? $this->scope["item"]["selected"]:null)) {
echo $this->assignInScope((is_string($tmp=(isset($this->scope["item"]) ? $this->scope["item"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), 'MAINNAVSELECTED');?> selected<?php }
if ((isset($this->scope["item"]["class"]) ? $this->scope["item"]["class"]:null)) {?> <?php echo (is_string($tmp=$this->scope["item"]["class"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
}?>  <?php if ((isset($this->scope["item"]["iconclass"]) ? $this->scope["item"]["iconclass"]:null)) {?>has-icon<?php }?>"><a <?php if ((isset($this->scope["item"]["linkid"]) ? $this->scope["item"]["linkid"]:null)) {?>id="<?php echo (is_string($tmp=$this->scope["item"]["linkid"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"<?php }?> <?php if ((isset($this->scope["item"]["accesskey"]) ? $this->scope["item"]["accesskey"]:null)) {?>accesskey="<?php echo (is_string($tmp=$this->scope["item"]["accesskey"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" <?php }
if ((isset($this->scope["item"]["aria"]) ? $this->scope["item"]["aria"]:null)) {
$_fh4_data = (is_string($tmp=(isset($this->scope["item"]["aria"]) ? $this->scope["item"]["aria"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);if ($this->isTraversable($_fh4_data) == true){foreach ($_fh4_data as $this->scope['key']=>$this->scope['value']){/* -- foreach start output */?>aria-<?php echo (is_string($tmp=$this->scope["key"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>="<?php echo (is_string($tmp=$this->scope["value"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" <?php /* -- foreach end output */}}
}?>href="<?php if ((isset($this->scope["item"]["wwwroot"]) ? $this->scope["item"]["wwwroot"]:null)) {
echo (is_string($tmp=$this->scope["item"]["wwwroot"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
}
else {
echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
}
echo (is_string($tmp=$this->scope["item"]["url"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><?php if ((isset($this->scope["item"]["iconclass"]) ? $this->scope["item"]["iconclass"]:null)) {?><span class="icon icon-<?php echo (is_string($tmp=$this->scope["item"]["iconclass"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" role="presentation" aria-hidden="true"></span><?php }
if (((is_string($tmp=(isset($this->scope["item"]["count"]) ? $this->scope["item"]["count"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) !== null)) {?><span class="navcount<?php if ((isset($this->scope["item"]["countclass"]) ? $this->scope["item"]["countclass"]:null)) {?> <?php echo (is_string($tmp=$this->scope["item"]["countclass"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
}?>"><span class="sr-only"><?php echo (is_string($tmp=$this->scope["item"]["title"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>: </span><?php echo (is_string($tmp=$this->scope["item"]["count"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></span><?php }
elseif ((isset($this->scope["item"]["title"]) ? $this->scope["item"]["title"]:null)) {?><span class="nav-title"><?php echo (is_string($tmp=$this->scope["item"]["title"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></span><?php }?></a></li><?php /* -- foreach end output */}}?><li class="btn-logout has-icon"><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>?logout" accesskey="l"><span class="icon icon-sign-out" role="presentation" aria-hidden="true"></span><span class="nav-title"><?php echo Dwoo_Plugin_str($this, "logout", 'mahara', null, null, null, null, null);?></span></a></li><?php }?>

    <?php if (! (isset($this->scope["LOGGEDIN"]) ? $this->scope["LOGGEDIN"] : null) && ! (isset($this->scope["SHOWLOGINBLOCK"]) ? $this->scope["SHOWLOGINBLOCK"] : null) && ! (isset($this->scope["LOGINPAGE"]) ? $this->scope["LOGINPAGE"] : null)) {
?>
        <li id="loginlink" class="has-icon login-link">
            <a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>?login" accesskey="l">
                <span class="icon icon-sign-in" role="presentation" aria-hidden="true"></span>
                <span><?php echo Dwoo_Plugin_str($this, "login", 'mahara', null, null, null, null, null);?></span>
            </a>
        </li>
    <?php 
}?>

    <?php if (! (isset($this->scope["nosearch"]) ? $this->scope["nosearch"] : null) && ! (isset($this->scope["LOGGEDIN"]) ? $this->scope["LOGGEDIN"] : null) && (isset($this->scope["languageform"]) ? $this->scope["languageform"] : null)) {
?>
        <li id="language" class="language-form">
            <?php echo (isset($this->scope["languageform"]) ? $this->scope["languageform"] : null);?>

        </li>
    <?php 
}?>

</ul>


<?php if (! (isset($this->scope["nosearch"]) ? $this->scope["nosearch"] : null) && ( (isset($this->scope["LOGGEDIN"]) ? $this->scope["LOGGEDIN"] : null) || (isset($this->scope["publicsearchallowed"]) ? $this->scope["publicsearchallowed"] : null) )) {
?>
<div class="navbar-form navbar-right collapse  navbar-collapse">
    <?php echo header_search_form();?>

</div>
<?php 
}?>

<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>