<?php
/* template head */
if (function_exists('Dwoo_Plugin_include')===false)
	$this->getLoader()->loadPlugin('include');
/* end template head */ ob_start(); /* template body */ ;
echo Dwoo_Plugin_include($this, "header.tpl", null, null, null, '_root', null);?>

<?php if ((isset($this->scope["ADMIN"]) ? $this->scope["ADMIN"] : null) || (isset($this->scope["INSTITUTIONALADMIN"]) ? $this->scope["INSTITUTIONALADMIN"] : null)) {
?>
<div class="row">
    <div class="col-md-9">
        <div class="panel panel-default">
            <div class="panel-body">
                <?php echo (isset($this->scope["form"]) ? $this->scope["form"] : null);?>

            </div>
        </div>
    </div>
</div>
<?php 
}
else {
?>
<?php echo (isset($this->scope["form"]) ? $this->scope["form"] : null);?>

<?php 
}?>

<?php echo Dwoo_Plugin_include($this, "footer.tpl", null, null, null, '_root', null);?>

<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>