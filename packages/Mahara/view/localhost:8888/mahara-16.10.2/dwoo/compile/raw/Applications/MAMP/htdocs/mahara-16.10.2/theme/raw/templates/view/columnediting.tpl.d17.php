<?php
/* template head */
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
/* end template head */ ob_start(); /* template body */ ?><div id="row_<?php echo (is_string($tmp=$this->scope["row"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_column_<?php echo (is_string($tmp=$this->scope["column"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" class="column column-layout columns<?php echo (is_string($tmp=$this->scope["numcolumns"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ((isset($this->scope["column"]) ? $this->scope["column"] : null) == 1) {
?> firstcolumn<?php 
}
if ((isset($this->scope["column"]) ? $this->scope["column"] : null) == (isset($this->scope["numcolumns"]) ? $this->scope["numcolumns"] : null)) {
?> lastcolumn<?php 
}?> <?php if ((isset($this->scope["width"]) ? $this->scope["width"] : null)) {
?>col-width-<?php echo (is_string($tmp=$this->scope["width"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);

}?>" <?php if ((isset($this->scope["width"]) ? $this->scope["width"] : null)) {
?>style="width:<?php if ((isset($this->scope["width"]) ? $this->scope["width"] : null) == 100) {

echo (is_string($tmp=$this->scope["width"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>%;<?php 
}
else {

echo (is_string($tmp=$this->scope["width"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)-2;?>%;<?php 
}?>"<?php 
}?>>
<?php if ((isset($this->scope["addremovecolumns"]) ? $this->scope["addremovecolumns"] : null)) {
?>
        <div class="btn-header btn-group <?php if ((isset($this->scope["column"]) ? $this->scope["column"] : null) == 1) {
?>btn-three<?php 
}
else {
?>btn-two<?php 
}?>">
        <?php if ((isset($this->scope["column"]) ? $this->scope["column"] : null) == 1) {
?>
            <button name="action_addcolumn_row_<?php echo (is_string($tmp=$this->scope["row"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_before_1" alt="<?php echo Dwoo_Plugin_str($this, 'add', 'view', null, null, null, null, null);?>" title="<?php echo Dwoo_Plugin_str($this, 'addcolumn', 'view', null, null, null, null, null);?>" data-action="addcolumn" class="js-add-column-left addcolumn btn btn-default btn-sm text-left">
                <span class="icon-long-arrow-left icon-rotate-45 icon" role="presentation"></span>
                <span class="icon-plus icon" role="presentation"></span>
            </button>
        <?php 
}?>

            <button name="action_removecolumn_row_<?php echo (is_string($tmp=$this->scope["row"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_column_<?php echo (is_string($tmp=$this->scope["column"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" alt="<?php echo Dwoo_Plugin_str($this, 'remove', 'view', null, null, null, null, null);?>" title="<?php echo Dwoo_Plugin_str($this, 'removecolumn', 'view', null, null, null, null, null);?>" class="js-remove-column removecolumn text-center btn btn-default btn-sm">
                <span class="icon-times-circle icon-lg icon" role="presentation"></span>
            </button>
        <?php if ((isset($this->scope["column"]) ? $this->scope["column"] : null) == (isset($this->scope["numcolumns"]) ? $this->scope["numcolumns"] : null)) {
?>
            <button name="action_addcolumn_row_<?php echo (is_string($tmp=$this->scope["row"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_before_<?php echo (is_string($tmp=($this->scope["column"] + 1)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" alt="<?php echo Dwoo_Plugin_str($this, 'add', 'view', null, null, null, null, null);?>" title="<?php echo Dwoo_Plugin_str($this, 'addcolumn', 'view', null, null, null, null, null);?>"  data-action="addcolumn" class="js-add-column-right addcolumn btn btn-default btn-sm text-right">
                 <span class="icon-plus icon" role="presentation"></span>
                 <span class="icon-long-arrow-right icon-rotate-45 icon" role="presentation"></span>
            </button>
        <?php 
}
else {
?>
            <button name="action_addcolumn_row_<?php echo (is_string($tmp=$this->scope["row"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_before_<?php echo (is_string($tmp=($this->scope["column"] + 1)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" alt="<?php echo Dwoo_Plugin_str($this, 'add', 'view', null, null, null, null, null);?>" title="<?php echo Dwoo_Plugin_str($this, 'addcolumn', 'view', null, null, null, null, null);?>"  data-action="addcolumn" class="js-add-column-center addcolumn btn btn-default btn-sm text-right">
                 <span class="icon-plus icon" role="presentation"></span>
                 <span class="icon-long-arrow-right icon-rotate-45 icon" role="presentation"></span>
            </button>
        <?php 
}?>

        </div>
<?php 
}
else {
?>
    <div class="column-header-empty"></div>
<?php 
}?>

    <div class="column-content">
    <?php echo (isset($this->scope["blockcontent"]) ? $this->scope["blockcontent"] : null);?>

    </div>
</div>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>