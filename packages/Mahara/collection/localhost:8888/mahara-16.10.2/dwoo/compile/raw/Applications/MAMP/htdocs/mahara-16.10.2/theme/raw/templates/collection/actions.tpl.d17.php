<?php
/* template head */
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
/* end template head */ ob_start(); /* template body */ ;
if ((isset($this->scope["canedit"]) ? $this->scope["canedit"] : null)) {
?>
    <div class="btn-group btn-top-right btn-group-top <?php if ((isset($this->scope["GROUP"]) ? $this->scope["GROUP"] : null)) {
?>pagetabs<?php 
}?>">
        <a class="btn btn-default" href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>collection/edit.php?new=1<?php echo (is_string($tmp=$this->scope["urlparamsstr"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
            <span class="icon icon-plus icon-lg left" role="presentation" aria-hidden="true"></span>
            <?php echo Dwoo_Plugin_str($this, 'newcollection', 'collection', null, null, null, null, null);?></a>
        <a class="btn btn-default" href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>view/choosetemplate.php?searchcollection=1<?php echo (is_string($tmp=$this->scope["urlparamsstr"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
            <span class="icon icon-files-o icon-lg left" role="presentation" aria-hidden="true"></span>
            <?php echo Dwoo_Plugin_str($this, 'copyacollection', 'collection', null, null, null, null, null);?>

        </a>
    </div>
<?php 
}?>

<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>