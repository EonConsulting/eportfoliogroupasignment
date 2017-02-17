<?php
/* template head */
if (function_exists('Dwoo_Plugin_include')===false)
	$this->getLoader()->loadPlugin('include');
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
/* end template head */ ob_start(); /* template body */ ;
echo Dwoo_Plugin_include($this, "header.tpl", null, null, null, '_root', null);?>

<?php if ((isset($this->scope["cancreate"]) ? $this->scope["cancreate"] : null)) {
?>
<div class="btn-top-right btn-group btn-group-top">
    <a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>group/edit.php" class="btn btn-default creategroup">
        <span class="icon icon-lg icon-plus left" role="presentation" aria-hidden="true"></span>
        <?php echo Dwoo_Plugin_str($this, "creategroup", "group", null, null, null, null, null);?>

    </a>
</div>
<?php 
}?>

<?php echo (isset($this->scope["form"]) ? $this->scope["form"] : null);?>

<?php if ((isset($this->scope["groups"]) ? $this->scope["groups"] : null)) {
?>
<div class="panel panel-default view-container">
    <h2 class="panel-heading"><?php echo Dwoo_Plugin_str($this, 'Results', 'mahara', null, null, null, null, null);?></h2>
    <div id="mygroups" class="list-group">
        <?php 
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
}?>

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
    <?php echo Dwoo_Plugin_str($this, "trysearchingforgroups", "group", (is_string($tmp=(isset($this->scope["searchingforgroups"]) ? $this->scope["searchingforgroups"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), null, null, null, null);?>

</p>
<?php 
}?>

<?php echo Dwoo_Plugin_include($this, "footer.tpl", null, null, null, '_root', null);?>

<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>