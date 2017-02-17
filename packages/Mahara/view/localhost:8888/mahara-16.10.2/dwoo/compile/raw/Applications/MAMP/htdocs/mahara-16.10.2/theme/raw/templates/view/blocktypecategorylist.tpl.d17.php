<?php
/* template head */
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
/* end template head */ ob_start(); /* template body */ ;

$_fh1_data = (is_string($tmp=(isset($this->scope["categories"]) ? $this->scope["categories"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isTraversable($_fh1_data) == true)
{
	foreach ($_fh1_data as $this->scope['name']=>$this->scope['category'])
	{
/* -- foreach start output */
?>
    <div id="block-category-<?php echo (is_string($tmp=$this->scope["category"]["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" class="block-category-title hide-title-collapsed btn btn-primary text-left" title="<?php echo (is_string($tmp=$this->scope["category"]["description"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
        <span class="icon icon-sm icon-chevron-down indicator" role="presentation" aria-hidden="true"></span>
        <span class="icon icon-<?php echo (is_string($tmp=$this->scope["category"]["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?> block-icon" role="presentation" aria-hidden="true"></span>

        <span class="title"><?php echo (is_string($tmp=$this->scope["category"]["title"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></span>
    </div>
    <?php if ((isset($this->scope["selectedcategory"]) ? $this->scope["selectedcategory"] : null) == (isset($this->scope["category"]["name"]) ? $this->scope["category"]["name"]:null)) {
?>
        <div id="<?php echo (is_string($tmp=$this->scope["category"]["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
            <?php echo (isset($this->scope["blocktypelist"]) ? $this->scope["blocktypelist"] : null);?>

        </div>
    <?php 
}
else {
?>
        <div id="<?php echo (is_string($tmp=$this->scope["category"]["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
            <div class="metadata hide-title-collapsed">
                <span class="icon icon-spin icon-spinner icon left" role="presentation" aria-hidden="true"></span>
                <span class="title"><?php echo Dwoo_Plugin_str($this, 'loading', 'mahara', null, null, null, null, null);?></span>
            </div>
        </div>
    <?php 
}?>

<?php 
/* -- foreach end output */
	}
}?>


<div class="btn btn-primary text-right last collapse-expand" aria-hidden="true" data-trigger="col-collapse">
    <span class="icon icon-angle-double-left" role="presentation" aria-hidden="true"></span>
    <span class="icon icon-angle-double-right" role="presentation" aria-hidden="true"></span>
    <span class="sr-only"><?php echo Dwoo_Plugin_str($this, 'expandcontract', 'view', null, null, null, null, null);?></span>
</div>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>