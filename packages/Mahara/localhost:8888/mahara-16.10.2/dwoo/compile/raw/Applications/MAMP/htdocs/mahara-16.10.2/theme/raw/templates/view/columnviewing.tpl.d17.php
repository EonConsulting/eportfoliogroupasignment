<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><div id="row_<?php echo (is_string($tmp=$this->scope["row"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_column_<?php echo (is_string($tmp=$this->scope["column"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" class="column-layout columns<?php echo (is_string($tmp=$this->scope["numcolumns"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ((isset($this->scope["column"]) ? $this->scope["column"] : null) == 1) {
?> first<?php 
}
if ((isset($this->scope["column"]) ? $this->scope["column"] : null) == (isset($this->scope["numcolumns"]) ? $this->scope["numcolumns"] : null)) {
?> last<?php 
}?> <?php if ((isset($this->scope["width"]) ? $this->scope["width"] : null)) {
?>col-width-<?php echo (is_string($tmp=$this->scope["width"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);

}?>" <?php if ((isset($this->scope["width"]) ? $this->scope["width"] : null)) {
?>style="width:<?php if ((isset($this->scope["width"]) ? $this->scope["width"] : null) == 100) {
?> <?php echo (is_string($tmp=$this->scope["width"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>%;<?php 
}
else {

echo (is_string($tmp=$this->scope["width"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)-2;?>%;<?php 
}?>"<?php 
}?>>
    <div class="column-content">
        <?php echo (isset($this->scope["blockcontent"]) ? $this->scope["blockcontent"] : null);?>

    </div>
</div>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>