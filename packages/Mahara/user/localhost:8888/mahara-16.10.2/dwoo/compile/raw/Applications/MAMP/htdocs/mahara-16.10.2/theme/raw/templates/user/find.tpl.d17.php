<?php
/* template head */
if (function_exists('Dwoo_Plugin_include')===false)
	$this->getLoader()->loadPlugin('include');
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
/* end template head */ ob_start(); /* template body */ ;
echo Dwoo_Plugin_include($this, "header.tpl", null, null, null, '_root', null);?>

    <?php echo (isset($this->scope["form"]) ? $this->scope["form"] : null);?>

<?php if ((isset($this->scope["results"]) ? $this->scope["results"] : null)) {
?>
<div class="panel panel-default view-container">
    <h2 id="searchresultsheading" class="panel-heading"><?php echo Dwoo_Plugin_str($this, 'Results', 'mahara', null, null, null, null, null);?></h2>
    <div id="friendslist" class="list-group">
        <?php echo (isset($this->scope["results"]["tablerows"]) ? $this->scope["results"]["tablerows"]:null);?>

    </div>
</div>
<?php echo (isset($this->scope["results"]["pagination"]) ? $this->scope["results"]["pagination"]:null);?>

<?php 
}?>

<?php echo Dwoo_Plugin_include($this, "footer.tpl", null, null, null, '_root', null);?>

<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>