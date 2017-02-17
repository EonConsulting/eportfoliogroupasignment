<?php
/* template head */
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
/* end template head */ ob_start(); /* template body */ ?><div id="content-editor" data-role="content-toolbar" class="content-toolbar">
    <div id="content-editor-header" class="sr-only">
        <div><?php echo Dwoo_Plugin_str($this, 'addcontent', 'view', null, null, null, null, null);?></div>
    </div>
    <div id="content-editor-foldable" class="btn-group-vertical btn-accordion fullwidth">
        <?php if ((isset($this->scope["shortcut_list"]) ? $this->scope["shortcut_list"] : null)) {
?>
            <?php echo (isset($this->scope["shortcut_list"]) ? $this->scope["shortcut_list"] : null);?>

        <?php 
}?>

        <?php echo (isset($this->scope["category_list"]) ? $this->scope["category_list"] : null);?>

    </div>
</div>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>