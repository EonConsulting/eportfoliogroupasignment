<?php
/* template head */
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
/* end template head */ ob_start(); /* template body */ ;
if ((isset($this->scope["MAINNAV"]) ? $this->scope["MAINNAV"] : null)) {
?>

    <nav id="main-nav" class="no-site-messages <?php if ((isset($this->scope["ADMIN"]) ? $this->scope["ADMIN"] : null) || (isset($this->scope["INSTITUTIONALADMIN"]) ? $this->scope["INSTITUTIONALADMIN"] : null) || (isset($this->scope["STAFF"]) ? $this->scope["STAFF"] : null) || (isset($this->scope["INSTITUTIONALSTAFF"]) ? $this->scope["INSTITUTIONALSTAFF"] : null)) {

if ((isset($this->scope["DROPDOWNMENU"]) ? $this->scope["DROPDOWNMENU"] : null)) {
?>dropdown-adminnav navbar-default<?php 
}
else {
?>adminnav navbar-inverse<?php 
}

}
else {
?>navbar-inverse<?php 
}?> nav collapse navbar-collapse nav-main main-nav ">
       <div class="container">
           <?php if ((isset($this->scope["ADMIN"]) ? $this->scope["ADMIN"] : null) || (isset($this->scope["INSTITUTIONALADMIN"]) ? $this->scope["INSTITUTIONALADMIN"] : null) || (isset($this->scope["STAFF"]) ? $this->scope["STAFF"] : null) || (isset($this->scope["INSTITUTIONALSTAFF"]) ? $this->scope["INSTITUTIONALSTAFF"] : null)) {
?>
                <div class="navbar-header">
                    <a class="navbar-text navbar-link" href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" accesskey="h" class="return-site">
                        <span class="icon icon-chevron-left" role="presentation" aria-hidden="true"></span>
                        <?php echo Dwoo_Plugin_str($this, "returntosite", 'mahara', null, null, null, null, null);?>

                    </a>
                </div>
            <?php 
}?>

            <ul id="<?php if ((isset($this->scope["DROPDOWNMENU"]) ? $this->scope["DROPDOWNMENU"] : null)) {
?>dropdown-nav<?php 
}
else {
?>nav<?php 
}?>" class="nav navbar-nav">


            <?php $_fh7_data = (is_string($tmp=(isset($this->scope["MAINNAV"]) ? $this->scope["MAINNAV"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);$this->globals["foreach"]['menu'] = array("index"		=> 0,);$_fh7_glob =& $this->globals["foreach"]['menu'];if ($this->isTraversable($_fh7_data) == true){foreach ($_fh7_data as $this->scope['item']){/* -- foreach start output */?><li class="<?php if ((isset($this->scope["item"]["path"]) ? $this->scope["item"]["path"]:null)) {
echo (is_string($tmp=$this->scope["item"]["path"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
}
else {?>dashboard<?php }
if ((isset($this->scope["item"]["selected"]) ? $this->scope["item"]["selected"]:null)) {?> active<?php }
if ((isset($this->scope["DROPDOWNMENU"]) ? $this->scope["DROPDOWNMENU"] : null)) {?> dropdown-nav-home<?php }?>"><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
echo (is_string($tmp=$this->scope["item"]["url"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"<?php if ((isset($this->scope["item"]["accesskey"]) ? $this->scope["item"]["accesskey"]:null)) {?> accesskey="<?php echo (is_string($tmp=$this->scope["item"]["accesskey"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"<?php }?> class="<?php if ((isset($this->scope["item"]["path"]) ? $this->scope["item"]["path"]:null)) {
echo (is_string($tmp=$this->scope["item"]["path"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
}
else {?>dashboard<?php }?>"><?php if ((isset($this->scope["item"]["accessibletitle"]) ? $this->scope["item"]["accessibletitle"]:null) && ! (isset($this->scope["DROPDOWNMENU"]) ? $this->scope["DROPDOWNMENU"] : null)) {?><span aria-hidden="true" role="presentation" aria-hidden="true"><?php }
echo (is_string($tmp=$this->scope["item"]["title"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ((isset($this->scope["item"]["accessibletitle"]) ? $this->scope["item"]["accessibletitle"]:null) && ! (isset($this->scope["DROPDOWNMENU"]) ? $this->scope["DROPDOWNMENU"] : null)) {?></span> <span class="accessible-hidden sr-only">(<?php echo (is_string($tmp=$this->scope["item"]["accessibletitle"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>)</span><?php }
if ((isset($this->scope["DROPDOWNMENU"]) ? $this->scope["DROPDOWNMENU"] : null) && (isset($this->scope["item"]["submenu"]) ? $this->scope["item"]["submenu"]:null)) {?><span class="accessible-hidden sr-only">(<?php echo Dwoo_Plugin_str($this, 'dropdownmenu', 'mahara', null, null, null, null, null);?>)</span><?php }?></a><?php if ((isset($this->scope["item"]["submenu"]) ? $this->scope["item"]["submenu"]:null)) {?><button type="button" class="navbar-showchildren navbar-toggle dropdown-toggle <?php if (! (isset($this->scope["item"]["selected"]) ? $this->scope["item"]["selected"]:null)) {?>collapsed<?php }?>" data-toggle="collapse" data-target="#childmenu-<?php echo (is_string($tmp=$this->globals["foreach"]["menu"]["index"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><span class="icon icon-chevron-down" role="presentation" aria-hidden="true"></span><span class="nav-title sr-only"><?php echo Dwoo_Plugin_str($this, "show", 'mahara', null, null, null, null, null);?> <?php echo Dwoo_Plugin_str($this, "menu", 'mahara', null, null, null, null, null);?></span></button><?php }
if ((isset($this->scope["item"]["submenu"]) ? $this->scope["item"]["submenu"]:null)) {?><ul id="childmenu-<?php echo (is_string($tmp=$this->globals["foreach"]["menu"]["index"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" class="<?php if ((isset($this->scope["DROPDOWNMENU"]) ? $this->scope["DROPDOWNMENU"] : null)) {?>has-dropdown<?php }
else {?>hidden-md hidden-lg hidden-sm<?php }
if ((isset($this->scope["item"]["selected"]) ? $this->scope["item"]["selected"]:null)) {?> in<?php }?> collapse child-nav" role="menu"><?php $_fh6_data = (is_string($tmp=(isset($this->scope["item"]["submenu"]) ? $this->scope["item"]["submenu"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);if ($this->isTraversable($_fh6_data) == true){foreach ($_fh6_data as $this->scope['subitem']){/* -- foreach start output */?><li class="<?php if ((isset($this->scope["subitem"]["selected"]) ? $this->scope["subitem"]["selected"]:null)) {?>active <?php }
if ((isset($this->scope["subitem"]["submenu"]) ? $this->scope["subitem"]["submenu"]:null)) {?>has-sub <?php }?>"><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
echo (is_string($tmp=$this->scope["subitem"]["url"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"<?php if ((isset($this->scope["subitem"]["accesskey"]) ? $this->scope["subitem"]["accesskey"]:null)) {?> accesskey="<?php echo (is_string($tmp=$this->scope["subitem"]["accesskey"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"<?php }?>><?php echo (is_string($tmp=$this->scope["subitem"]["title"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></a><?php if ((isset($this->scope["subitem"]["submenu"]) ? $this->scope["subitem"]["submenu"]:null)) {?><ul class="dropdown-tertiary"><?php $_fh5_data = (is_string($tmp=(isset($this->scope["subitem"]["submenu"]) ? $this->scope["subitem"]["submenu"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);if ($this->isTraversable($_fh5_data) == true){foreach ($_fh5_data as $this->scope['tertiaryitem']){/* -- foreach start output */?><li<?php if ((isset($this->scope["tertiaryitem"]["selected"]) ? $this->scope["tertiaryitem"]["selected"]:null)) {?> class="selected"<?php }?>><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
echo (is_string($tmp=$this->scope["tertiaryitem"]["url"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"<?php if ((isset($this->scope["tertiaryitem"]["accesskey"]) ? $this->scope["tertiaryitem"]["accesskey"]:null)) {?> accesskey="<?php echo (is_string($tmp=$this->scope["tertiaryitem"]["accesskey"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"<?php }?>><?php echo (is_string($tmp=$this->scope["tertiaryitem"]["title"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></a></li><?php /* -- foreach end output */}}?></ul><?php }?></li><?php /* -- foreach end output */}}?></ul><?php }?></li><?php /* -- foreach end output */$_fh7_glob["index"]+=1;}}
if ((isset($this->scope["ADMIN"]) ? $this->scope["ADMIN"] : null) || (isset($this->scope["INSTITUTIONALADMIN"]) ? $this->scope["INSTITUTIONALADMIN"] : null) || (isset($this->scope["STAFF"]) ? $this->scope["STAFF"] : null) || (isset($this->scope["INSTITUTIONALSTAFF"]) ? $this->scope["INSTITUTIONALSTAFF"] : null)) {
}
elseif ((($tmp = (isset($this->scope["USER"]) ? $this->scope["USER"] : null)) ? $tmp->get('admin') : null)) {?><li class="siteadmin"><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>admin/" accesskey="a" class="admin-site"><?php echo Dwoo_Plugin_str($this, "administration", 'mahara', null, null, null, null, null);?></a></li><?php }
elseif ((($tmp = (isset($this->scope["USER"]) ? $this->scope["USER"] : null)) ? $tmp->is_institutional_admin() : null)) {?><li class="instituteadmin"><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>admin/users/search.php" accesskey="a" class="admin-user"><?php echo Dwoo_Plugin_str($this, "administration", 'mahara', null, null, null, null, null);?></a></li><?php }
elseif ((($tmp = (isset($this->scope["USER"]) ? $this->scope["USER"] : null)) ? $tmp->get('staff') : null)) {?><li class="siteinfo"><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>admin/users/search.php" accesskey="a" class="admin-user"><?php echo Dwoo_Plugin_str($this, "siteinformation", 'mahara', null, null, null, null, null);?></a></li><?php }
elseif ((($tmp = (isset($this->scope["USER"]) ? $this->scope["USER"] : null)) ? $tmp->is_institutional_staff() : null)) {?><li class="instituteinfo"><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>admin/users/search.php" accesskey="a" class="admin-user"><?php echo Dwoo_Plugin_str($this, "institutioninformation", 'mahara', null, null, null, null, null);?></a></li><?php }?>

            </ul>
        </div>
    </nav>

    <?php if ((isset($this->scope["DROPDOWNMENU"]) ? $this->scope["DROPDOWNMENU"] : null)) {
?>
    <?php 
}
else {
?>

        <?php if ((isset($this->scope["SELECTEDSUBNAV"]) ? $this->scope["SELECTEDSUBNAV"] : null)) {
?>

        <div id="sub-nav" class="navbar navbar-default minor-nav hidden-xs">
            <div class="container">
                <ul class="nav navbar-nav">
                <?php $_fh8_data = (is_string($tmp=(isset($this->scope["SELECTEDSUBNAV"]) ? $this->scope["SELECTEDSUBNAV"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);if ($this->isTraversable($_fh8_data) == true){foreach ($_fh8_data as $this->scope['item']){/* -- foreach start output */?><li<?php if ((isset($this->scope["item"]["selected"]) ? $this->scope["item"]["selected"]:null)) {?> class="active"<?php }?>><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
echo (is_string($tmp=$this->scope["item"]["url"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"<?php if ((isset($this->scope["item"]["accesskey"]) ? $this->scope["item"]["accesskey"]:null)) {?> accesskey="<?php echo (is_string($tmp=$this->scope["item"]["accesskey"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"<?php }?>><?php echo (is_string($tmp=$this->scope["item"]["title"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></a></li><?php /* -- foreach end output */}}?>

                </ul>
            </div>
        </div>
        <?php 
}?>

    <?php 
}?>


<?php 
}?>

<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>