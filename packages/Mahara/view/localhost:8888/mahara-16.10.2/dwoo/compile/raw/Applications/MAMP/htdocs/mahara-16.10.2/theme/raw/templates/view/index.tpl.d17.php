<?php
/* template head */
if (function_exists('Dwoo_Plugin_include')===false)
	$this->getLoader()->loadPlugin('include');
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
/* end template head */ ob_start(); /* template body */ ;
echo Dwoo_Plugin_include($this, "header.tpl", null, null, null, '_root', null);?>


    <div class="btn-top-right btn-group btn-group-top <?php if ((isset($this->scope["GROUP"]) ? $this->scope["GROUP"] : null)) {
?> pagetabs<?php 
}?>">
        <?php echo (isset($this->scope["createviewform"]) ? $this->scope["createviewform"] : null);?>

        <form method="post" class="form-as-button pull-left" action="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>view/choosetemplate.php">
            <button class="submit btn btn-default">
                <span class="icon icon-lg left icon-files-o" role="presentation" aria-hidden="true"></span>
                <?php echo Dwoo_Plugin_str($this, "copyaview", "view", null, null, null, null, null);?>

            </button>
            <?php if ((isset($this->scope["GROUP"]) ? $this->scope["GROUP"] : null)) {
?>
                <input type="hidden" name="group" value="<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'id',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["GROUP"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" />
            <?php 
}
elseif ((isset($this->scope["institution"]) ? $this->scope["institution"] : null)) {
?>
                <input type="hidden" name="institution" value="<?php echo (is_string($tmp=$this->scope["institution"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
            <?php 
}?>

        </form>
    </div>
    <?php echo (isset($this->scope["searchform"]) ? $this->scope["searchform"] : null);?>


    <div class="grouppageswrap view-container">
        <div class="panel panel-default">
            <h2 id="searchresultsheading" class="panel-heading"><?php echo Dwoo_Plugin_str($this, 'Results', 'mahara', null, null, null, null, null);?></h2>
            <?php if ((isset($this->scope["views"]) ? $this->scope["views"] : null)) {
?>
                <div id="myviews" class="list-group">
                <?php echo (isset($this->scope["viewresults"]) ? $this->scope["viewresults"] : null);?>

                </div>
            <?php 
}
else {
?>
                <div class="no-results">
                    <?php if ((isset($this->scope["GROUP"]) ? $this->scope["GROUP"] : null)) {
?>
                        <?php echo Dwoo_Plugin_str($this, "noviewstosee", "group", null, null, null, null, null);?>

                    <?php 
}
elseif ((isset($this->scope["institution"]) ? $this->scope["institution"] : null)) {

echo Dwoo_Plugin_str($this, "noviews", "view", null, null, null, null, null);?>

                    <?php 
}
else {

echo Dwoo_Plugin_str($this, "youhavenoviews", "view", null, null, null, null, null);

}?>

                </div>
            <?php 
}?>

        </div>
    </div>
    <div>
        <?php echo (isset($this->scope["pagination"]) ? $this->scope["pagination"] : null);?>

    </div>
<?php echo Dwoo_Plugin_include($this, "footer.tpl", null, null, null, '_root', null);?>

<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>