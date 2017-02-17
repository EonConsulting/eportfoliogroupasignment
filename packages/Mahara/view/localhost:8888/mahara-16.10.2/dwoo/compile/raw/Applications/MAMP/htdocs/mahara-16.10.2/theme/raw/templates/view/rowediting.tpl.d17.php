<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><div id="row_<?php echo (is_string($tmp=$this->scope["row"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" class="js-col-row row-content col-row editing clearfix"<?php if ((isset($this->scope["width"]) ? $this->scope["width"] : null)) {
?> style="width: <?php echo (is_string($tmp=($this->scope["width"] - 2)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>%;"<?php 
}?>>
    <?php echo (isset($this->scope["rowcontent"]) ? $this->scope["rowcontent"] : null);?>

</div>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>