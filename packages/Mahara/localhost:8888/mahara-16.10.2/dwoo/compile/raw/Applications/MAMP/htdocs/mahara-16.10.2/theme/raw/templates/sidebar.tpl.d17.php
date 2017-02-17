<?php
/* template head */
if (class_exists('Dwoo_Plugin_counter', false)===false)
	$this->getLoader()->loadPlugin('counter');
if (function_exists('Dwoo_Plugin_include')===false)
	$this->getLoader()->loadPlugin('include');
/* end template head */ ob_start(); /* template body */ ;

$_fh0_data = (is_string($tmp=(isset($this->scope["blocks"]) ? $this->scope["blocks"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isTraversable($_fh0_data) == true)
{
	foreach ($_fh0_data as $this->scope['sideblock'])
	{
/* -- foreach start output */

echo $this->classCall('counter', array("sidebar", null, null, null, null, 'sequence'));?><div<?php if ((isset($this->scope["sideblock"]["id"]) ? $this->scope["sideblock"]["id"]:null)) {
?> id="<?php echo (is_string($tmp=$this->scope["sideblock"]["id"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"<?php 
}?> class="sideblock-<?php echo (is_string($tmp=$this->scope["sequence"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?> <?php if ((isset($this->scope["sideblock"]["class"]) ? $this->scope["sideblock"]["class"]:null)) {

echo (is_string($tmp=$this->scope["sideblock"]["class"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);

}?>">
<?php echo Dwoo_Plugin_include($this, "sideblocks/".(is_string($tmp=(isset($this->scope["sideblock"]["name"]) ? $this->scope["sideblock"]["name"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp).".tpl", null, null, null, '_root', null, array('sbdata' => (is_string($tmp=(isset($this->scope["sideblock"]["data"]) ? $this->scope["sideblock"]["data"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)));?>


</div>
<?php 
/* -- foreach end output */
	}
}?>


<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>