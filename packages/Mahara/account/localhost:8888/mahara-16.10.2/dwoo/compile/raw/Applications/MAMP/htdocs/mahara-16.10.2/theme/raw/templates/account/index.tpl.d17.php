<?php
/* template head */
if (function_exists('Dwoo_Plugin_include')===false)
	$this->getLoader()->loadPlugin('include');
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
/* end template head */ ob_start(); /* template body */ ;
echo Dwoo_Plugin_include($this, "header.tpl", null, null, null, '_root', null);?>

<?php if ((isset($this->scope["candeleteself"]) ? $this->scope["candeleteself"] : null)) {
?>
<div class="btn-top-right btn-group btn-group-top">
    <a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>account/delete.php" class="btn btn-default delete">
        <span class="icon icon-trash icon-lg text-danger left" role="presentation" aria-hidden="true"></span>
        <span><?php echo Dwoo_Plugin_str($this, 'deleteaccount', 'account', null, null, null, null, null);?></span>
    </a>
</div>
<?php 
}?>

<div class="view-container">
    <?php echo (isset($this->scope["form"]) ? $this->scope["form"] : null);?>

</div>
<?php echo Dwoo_Plugin_include($this, "footer.tpl", null, null, null, '_root', null);?>

<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>