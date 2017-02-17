<?php
/* template head */
if (function_exists('Dwoo_Plugin_include')===false)
	$this->getLoader()->loadPlugin('include');
/* end template head */ ob_start(); /* template body */ ?>        <?php 
$_fh0_data = (is_string($tmp=(isset($this->scope["groups"]) ? $this->scope["groups"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isTraversable($_fh0_data) == true)
{
	foreach ($_fh0_data as $this->scope['group'])
	{
/* -- foreach start output */
?>
            <?php echo Dwoo_Plugin_include($this, "group/group.tpl", null, null, null, '_root', null, array('group' => (is_string($tmp=(isset($this->scope["group"]) ? $this->scope["group"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), 'returnto' => 'mygroups'));?>

        <?php 
/* -- foreach end output */
	}
}
 /* end template body */
return $this->buffer . ob_get_clean();
?>