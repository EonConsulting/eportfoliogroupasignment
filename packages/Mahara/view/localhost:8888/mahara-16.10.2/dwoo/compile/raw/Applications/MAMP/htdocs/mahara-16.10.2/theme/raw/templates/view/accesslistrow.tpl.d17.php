<?php
/* template head */
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
if (function_exists('Dwoo_Plugin_display_name')===false)
	$this->getLoader()->loadPlugin('display_name');
/* end template head */ ob_start(); /* template body */ ?><td>
    <strong><a href="<?php echo (is_string($tmp=$this->scope["item"]["url"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><?php echo (is_string($tmp=$this->scope["item"]["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></a></strong>
</td>
<td class="accesslist">
<?php if ((isset($this->scope["item"]["access"]) ? $this->scope["item"]["access"]:null)) {
?><div class="detail"><?php echo (is_string($tmp=$this->scope["item"]["access"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></div><?php 
}?>

<?php if ((isset($this->scope["item"]["accessgroups"]) ? $this->scope["item"]["accessgroups"]:null)) {
?>
    <?php 
$_fh2_data = (is_string($tmp=(isset($this->scope["item"]["accessgroups"]) ? $this->scope["item"]["accessgroups"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
$this->globals["foreach"]['ags'] = array
(
	"iteration"		=> 1,
	"last"		=> null,
	"total"		=> $this->count($_fh2_data),
);
$_fh2_glob =& $this->globals["foreach"]['ags'];
if ($this->isTraversable($_fh2_data) == true)
{
	foreach ($_fh2_data as $this->scope['accessgroup'])
	{
		$_fh2_glob["last"] = (string) ($_fh2_glob["iteration"] === $_fh2_glob["total"]);
/* -- foreach start output */

if ((isset($this->scope["accessgroup"]["accesstype"]) ? $this->scope["accessgroup"]["accesstype"]:null) == 'loggedin') {
echo Dwoo_Plugin_str($this, "registeredusers", "view", null, null, null, null, null);
}
elseif ((isset($this->scope["accessgroup"]["accesstype"]) ? $this->scope["accessgroup"]["accesstype"]:null) == 'public') {
echo Dwoo_Plugin_str($this, "public", "view", null, null, null, null, null);
}
elseif ((isset($this->scope["accessgroup"]["accesstype"]) ? $this->scope["accessgroup"]["accesstype"]:null) == 'friends') {?><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>user/myfriends.php" id="link-myfriends"><?php echo Dwoo_Plugin_str($this, "friends", "view", null, null, null, null, null);?></a><?php }
elseif ((isset($this->scope["accessgroup"]["accesstype"]) ? $this->scope["accessgroup"]["accesstype"]:null) == 'group') {?><a href="<?php echo (is_string($tmp=$this->scope["accessgroup"]["groupurl"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><?php echo (is_string($tmp=$this->scope["accessgroup"]["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></a><?php if ((isset($this->scope["accessgroup"]["role"]) ? $this->scope["accessgroup"]["role"]:null)) {?> (<?php echo (is_string($tmp=$this->scope["accessgroup"]["roledisplay"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>)<?php }
}
elseif ((isset($this->scope["accessgroup"]["accesstype"]) ? $this->scope["accessgroup"]["accesstype"]:null) == 'institution') {?><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>account/institutions.php"><?php echo institution_display_name((is_string($tmp=(isset($this->scope["accessgroup"]["id"]) ? $this->scope["accessgroup"]["id"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp));?></a><?php }
elseif ((isset($this->scope["accessgroup"]["accesstype"]) ? $this->scope["accessgroup"]["accesstype"]:null) == 'user') {?><a href="<?php echo profile_url((is_string($tmp=(isset($this->scope["accessgroup"]["id"]) ? $this->scope["accessgroup"]["id"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp));?>"><?php echo Dwoo_Plugin_display_name($this, (is_string($tmp=(isset($this->scope["accessgroup"]["id"]) ? $this->scope["accessgroup"]["id"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), null, false, false);?></a><?php }
if ((isset($this->scope["accessgroup"]["startdate"]) ? $this->scope["accessgroup"]["startdate"]:null)) {
if ((isset($this->scope["accessgroup"]["stopdate"]) ? $this->scope["accessgroup"]["stopdate"]:null)) {?><span class="date"> <?php echo format_date(strtotime((is_string($tmp=(isset($this->scope["accessgroup"]["startdate"]) ? $this->scope["accessgroup"]["startdate"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)), 'strfdaymonthyearshort');?>&rarr;<?php echo format_date(strtotime((is_string($tmp=(isset($this->scope["accessgroup"]["stopdate"]) ? $this->scope["accessgroup"]["stopdate"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)), 'strfdaymonthyearshort');?></span><?php }
else {?><span class="date"> <?php echo Dwoo_Plugin_str($this, 'after', 'mahara', null, null, null, null, null);?> <?php echo format_date(strtotime((is_string($tmp=(isset($this->scope["accessgroup"]["startdate"]) ? $this->scope["accessgroup"]["startdate"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)), 'strfdaymonthyearshort');?></span><?php }
}
elseif ((isset($this->scope["accessgroup"]["stopdate"]) ? $this->scope["accessgroup"]["stopdate"]:null)) {?><span class="date"> <?php echo Dwoo_Plugin_str($this, 'before', 'mahara', null, null, null, null, null);?> <?php echo format_date(strtotime((is_string($tmp=(isset($this->scope["accessgroup"]["stopdate"]) ? $this->scope["accessgroup"]["stopdate"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)), 'strfdaymonthyearshort');?></span><?php }
if (! (isset($this->globals["foreach"]["ags"]["last"]) ? $this->globals["foreach"]["ags"]["last"]:null)) {?>, <?php }

/* -- foreach end output */
		$_fh2_glob["iteration"]+=1;
	}
}?>

<?php 
}?>

<?php if ((isset($this->scope["item"]["template"]) ? $this->scope["item"]["template"]:null)) {
?><div class="detail"><?php echo Dwoo_Plugin_str($this, 'thisviewmaybecopied', 'view', null, null, null, null, null);?></div><?php 
}?>

</td>
<td class="al-edit text-center tiny active">
    <a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>view/access.php?id=<?php echo (is_string($tmp=$this->scope["item"]["viewid"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ((isset($this->scope["item"]["views"]) ? $this->scope["item"]["views"]:null)) {
?>&collection=<?php echo (is_string($tmp=$this->scope["item"]["id"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);

}?>" title="<?php echo Dwoo_Plugin_str($this, 'editaccess', 'view', null, null, null, null, null);?>" class="text-default">
        <span class="icon icon-lock icon-lg" role="presentation" aria-hidden="true"></span>
        <span class="sr-only"><?php echo Dwoo_Plugin_str($this, 'editaccess', 'mahara', null, null, null, null, null);?></span>
    </a>
</td>
<td class="secreturls text-right tiny active">
    <a title="<?php echo Dwoo_Plugin_str($this, 'editsecreturlaccess', 'view', null, null, null, null, null);?>" href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>view/urls.php?id=<?php echo (is_string($tmp=$this->scope["item"]["viewid"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ((isset($this->scope["item"]["views"]) ? $this->scope["item"]["views"]:null)) {
?>&collection=<?php echo (is_string($tmp=$this->scope["item"]["id"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);

}?>" class="text-default">
        <span><?php echo (is_string($tmp=$this->scope["item"]["secreturls"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></span>
        <span class="icon icon-globe icon-lg right" role="presentation" aria-hidden="true"></span>
        <span class="sr-only"><?php echo Dwoo_Plugin_str($this, 'edit', 'mahara', null, null, null, null, null);?></span>
    </a>
</td>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>