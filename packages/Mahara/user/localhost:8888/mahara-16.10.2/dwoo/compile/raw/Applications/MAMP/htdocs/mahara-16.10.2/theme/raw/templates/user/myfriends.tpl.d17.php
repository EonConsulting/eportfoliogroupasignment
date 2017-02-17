<?php
/* template head */
if (function_exists('Dwoo_Plugin_include')===false)
	$this->getLoader()->loadPlugin('include');
/* end template head */ ob_start(); /* template body */ ;
echo Dwoo_Plugin_include($this, "header.tpl", null, null, null, '_root', null);?>

<?php echo (isset($this->scope["form"]) ? $this->scope["form"] : null);?>

<?php if ((isset($this->scope["message"]) ? $this->scope["message"] : null)) {
?>
<p class="no-results">
    <?php echo (isset($this->scope["message"]) ? $this->scope["message"] : null);?>

</p>
<?php 
}?>

<?php if ((isset($this->scope["results"]) ? $this->scope["results"] : null)) {
?>
<div id="friendslist" class="panel-items">
    <?php echo (isset($this->scope["results"]["tablerows"]) ? $this->scope["results"]["tablerows"]:null);?>

</div>
<div class="panel-pagination">
<?php echo (isset($this->scope["results"]["pagination"]) ? $this->scope["results"]["pagination"]:null);?>

</div>
<?php 
}?>

<?php echo Dwoo_Plugin_include($this, "footer.tpl", null, null, null, '_root', null);?>

<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>