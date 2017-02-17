<?php
/* template head */
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
/* end template head */ ob_start(); /* template body */ ;
if ((isset($this->scope["watchlistempty"]) ? $this->scope["watchlistempty"] : null)) {
?>
    <div class="panel-body">
        <p class="lead text-small"><?php echo Dwoo_Plugin_str($this, 'nopages', 'blocktype.watchlist', null, null, null, null, null);?></p>
    </div>
<?php 
}
else {
?>
    <ul id="watchlistblock" class="viewlist list-group">
        <?php echo (isset($this->scope["watchlist"]["tablerows"]) ? $this->scope["watchlist"]["tablerows"]:null);?>

    </ul>
    <?php if ((isset($this->scope["watchlist"]["pagination"]) ? $this->scope["watchlist"]["pagination"]:null)) {
?>
        <div id="watchlist_page_container" class="hidden"><?php echo (isset($this->scope["watchlist"]["pagination"]) ? $this->scope["watchlist"]["pagination"]:null);?></div>
    <?php 
}?>

    <?php if ((isset($this->scope["watchlist"]["pagination_js"]) ? $this->scope["watchlist"]["pagination_js"]:null)) {
?>
    <script type="application/javascript">
        jQuery(function() {
            <?php echo (isset($this->scope["watchlist"]["pagination_js"]) ? $this->scope["watchlist"]["pagination_js"]:null);?>

            removeElementClass('watchlist_page_container', 'hidden');
        });
    </script>
    <?php 
}?>

<?php 
}?>

<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>