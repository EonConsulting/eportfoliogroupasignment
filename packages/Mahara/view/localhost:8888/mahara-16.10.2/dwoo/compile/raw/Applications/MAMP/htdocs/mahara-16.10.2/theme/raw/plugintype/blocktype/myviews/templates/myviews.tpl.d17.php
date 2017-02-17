<?php
/* template head */
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
/* end template head */ ob_start(); /* template body */ ;
if ((isset($this->scope["myviews"]) ? $this->scope["myviews"] : null)) {
?>
    <div class="list-group">
        <div id="myviewlist" class="list-group">
            <?php echo (isset($this->scope["myviews"]["tablerows"]) ? $this->scope["myviews"]["tablerows"]:null);?>

        </div>
    <?php if ((isset($this->scope["myviews"]["pagination"]) ? $this->scope["myviews"]["pagination"]:null)) {
?>
        <div id="myviews_page_container" class="hidden"><?php echo (isset($this->scope["myviews"]["pagination"]) ? $this->scope["myviews"]["pagination"]:null);?></div>
    <?php 
}?>

    <?php if ((isset($this->scope["myviews"]["pagination_js"]) ? $this->scope["myviews"]["pagination_js"]:null)) {
?>
    <script type="application/javascript">
        addLoadEvent(function() {
            <?php echo (isset($this->scope["myviews"]["pagination_js"]) ? $this->scope["myviews"]["pagination_js"]:null);?>

            removeElementClass('myviews_page_container', 'hidden');
        });
    </script>
    <?php 
}?>

    </div>
<?php 
}
else {
?>
<p class="content-text lead text-center"><?php echo Dwoo_Plugin_str($this, 'noviewstosee', 'group', null, null, null, null, null);?></p>
<?php 
}?>


<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>