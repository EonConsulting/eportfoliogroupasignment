<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ;
if ((isset($this->scope["realauthor"]) ? $this->scope["realauthor"] : null)) {
?>
    <?php echo $this->assignInScope(get_random_key(), 'indexhash');?>


    <span>
      <a id="showauthor_<?php echo (is_string($tmp=$this->scope["indexhash"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" href=""><?php echo (isset($this->scope["author"]) ? $this->scope["author"] : null);?></a>
    </span>
    <span class="real_author js-safe-hidden hidden">
        <?php if ((isset($this->scope["realauthorlink"]) ? $this->scope["realauthorlink"] : null)) {
?>
          <a href="<?php echo (is_string($tmp=$this->scope["realauthorlink"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><?php echo (isset($this->scope["realauthor"]) ? $this->scope["realauthor"] : null);?></a>
        <?php 
}
else {
?>
          <?php echo (isset($this->scope["realauthor"]) ? $this->scope["realauthor"] : null);?>

        <?php 
}?>

    </span>
    <script type="application/javascript">
    jQuery('#showauthor_<?php echo (is_string($tmp=$this->scope["indexhash"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>').on('click', function(e) {
        e.preventDefault();
        jQuery(this).parent().parent().find('span.real_author').removeClass('hidden js-safe-hidden');
        jQuery(this).parent().addClass('hidden js-safe-hidden');
    });
    </script>

<?php 
}
else {
?>
    <?php echo (isset($this->scope["author"]) ? $this->scope["author"] : null);?>

<?php 
}?>

<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>