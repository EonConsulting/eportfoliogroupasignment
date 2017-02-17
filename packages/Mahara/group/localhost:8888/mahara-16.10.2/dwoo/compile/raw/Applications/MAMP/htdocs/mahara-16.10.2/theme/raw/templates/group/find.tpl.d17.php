<?php
/* template head */
if (function_exists('Dwoo_Plugin_include')===false)
	$this->getLoader()->loadPlugin('include');
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
/* end template head */ ob_start(); /* template body */ ;
echo Dwoo_Plugin_include($this, "header.tpl", null, null, null, '_root', null);?>

<?php echo (isset($this->scope["form"]) ? $this->scope["form"] : null);?>

<?php if ((isset($this->scope["groups"]) ? $this->scope["groups"] : null)) {
?>
<div class="panel panel-default view-container">
    <h2 class="panel-heading"><?php echo Dwoo_Plugin_str($this, 'Results', 'mahara', null, null, null, null, null);?></h2>
    <div id="findgroups" class="list-group">
        <?php echo (isset($this->scope["groupresults"]) ? $this->scope["groupresults"] : null);?>

    </div>
</div>
<?php echo (isset($this->scope["pagination"]) ? $this->scope["pagination"] : null);?>

<?php if ((isset($this->scope["pagination_js"]) ? $this->scope["pagination_js"] : null)) {
?>
<script type="application/javascript">
<?php echo (isset($this->scope["pagination_js"]) ? $this->scope["pagination_js"] : null);?>

</script>
<?php 
}?>

<?php 
}
else {
?>
    <p class="no-results">
        <?php echo Dwoo_Plugin_str($this, "nogroupsfound", "group", null, null, null, null, null);?>

    </p>
<?php 
}?>

<?php echo Dwoo_Plugin_include($this, "footer.tpl", null, null, null, '_root', null);
 /* end template body */
return $this->buffer . ob_get_clean();
?>