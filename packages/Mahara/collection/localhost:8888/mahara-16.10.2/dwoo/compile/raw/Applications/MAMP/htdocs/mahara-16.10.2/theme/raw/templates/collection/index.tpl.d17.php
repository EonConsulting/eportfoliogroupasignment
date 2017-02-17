<?php
/* template head */
if (function_exists('Dwoo_Plugin_include')===false)
	$this->getLoader()->loadPlugin('include');
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
/* end template head */ ob_start(); /* template body */ ;
echo Dwoo_Plugin_include($this, "header.tpl", null, null, null, '_root', null);?>


<p class="lead view-description"><?php echo Dwoo_Plugin_str($this, 'collectiondescription', 'collection', null, null, null, null, null);?></p>
<?php if (! (isset($this->scope["canedit"]) ? $this->scope["canedit"] : null)) {
?><p><?php echo Dwoo_Plugin_str($this, 'canteditgroupcollections', 'collection', null, null, null, null, null);?></p><?php 
}?>

<?php if ((isset($this->scope["collections"]) ? $this->scope["collections"] : null)) {
?>
<div class="panel panel-default">
    <div id="mycollections" class="list-group">
        <?php echo (isset($this->scope["collectionhtml"]) ? $this->scope["collectionhtml"] : null);?>

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
        <?php echo Dwoo_Plugin_str($this, 'nocollections', 'collection', null, null, null, null, null);
if ((isset($this->scope["addonelink"]) ? $this->scope["addonelink"] : null)) {
?> <a href=<?php echo (is_string($tmp=$this->scope["addonelink"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>><?php echo Dwoo_Plugin_str($this, 'addone', 'mahara', null, null, null, null, null);?></a><?php 
}?>

    </p>
<?php 
}?>

<?php echo Dwoo_Plugin_include($this, "footer.tpl", null, null, null, '_root', null);?>

<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>