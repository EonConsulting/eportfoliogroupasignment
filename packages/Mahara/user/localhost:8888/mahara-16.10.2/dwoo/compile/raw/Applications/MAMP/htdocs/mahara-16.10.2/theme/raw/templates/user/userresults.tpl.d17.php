<?php
/* template head */
if (function_exists('Dwoo_Plugin_include')===false)
	$this->getLoader()->loadPlugin('include');
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
/* end template head */ ob_start(); /* template body */ ;
if ((isset($this->scope["data"]) ? $this->scope["data"] : null)) {
?>
<?php 
$_fh0_data = (is_string($tmp=(isset($this->scope["data"]) ? $this->scope["data"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isTraversable($_fh0_data) == true)
{
	foreach ($_fh0_data as $this->scope['user'])
	{
/* -- foreach start output */
?>
    <?php if ((isset($this->scope["page"]) ? $this->scope["page"] : null) == 'myfriends') {
?>
    <?php echo Dwoo_Plugin_include($this, "user/user.tpl", null, null, null, '_root', null, array('user' => (is_string($tmp=(isset($this->scope["user"]) ? $this->scope["user"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), 'page' => (is_string($tmp=(isset($this->scope["page"]) ? $this->scope["page"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), 'admingroups' => (is_string($tmp=(isset($this->scope["admingroups"]) ? $this->scope["admingroups"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), 'mrmoduleactive' => (is_string($tmp=(isset($this->scope["mrmoduleactive"]) ? $this->scope["mrmoduleactive"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)));?>

    <?php 
}
elseif ((isset($this->scope["page"]) ? $this->scope["page"] : null) == 'find') {
?>
    <?php echo Dwoo_Plugin_include($this, "user/userfind.tpl", null, null, null, '_root', null, array('user' => (is_string($tmp=(isset($this->scope["user"]) ? $this->scope["user"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), 'page' => (is_string($tmp=(isset($this->scope["page"]) ? $this->scope["page"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), 'admingroups' => (is_string($tmp=(isset($this->scope["admingroups"]) ? $this->scope["admingroups"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), 'mrmoduleactive' => (is_string($tmp=(isset($this->scope["mrmoduleactive"]) ? $this->scope["mrmoduleactive"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)));?>

    <?php 
}?>

<?php 
/* -- foreach end output */
	}
}?>

<?php 
}
elseif ((isset($this->scope["query"]) ? $this->scope["query"] : null)) {
?>
    <div class="no-results"><?php echo Dwoo_Plugin_str($this, 'nosearchresultsfound', 'group', null, null, null, null, null);?></div>
<?php 
}?>

<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>