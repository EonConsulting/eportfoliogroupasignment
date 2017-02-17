<?php
/* template head */
if (function_exists('Dwoo_Plugin_include')===false)
	$this->getLoader()->loadPlugin('include');
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
/* end template head */ ob_start(); /* template body */ ;
echo Dwoo_Plugin_include($this, "header.tpl", null, null, null, '_root', null);?>


<?php echo Dwoo_Plugin_include($this, "view/editviewtabs.tpl", null, null, null, '_root', null, array('selected' => 'content', 'new' => (is_string($tmp=(isset($this->scope["new"]) ? $this->scope["new"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), 'issiteview' => (is_string($tmp=(isset($this->scope["issiteview"]) ? $this->scope["issiteview"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)));?>

<div id="blocksinstruction" class="lead view-description">
        <?php echo Dwoo_Plugin_str($this, 'blocksintructionnoajax', 'view', null, null, null, null, null);?>

</div>

<div class="row view-container" selected='content' data-target="col-collapse">

    <?php if ((isset($this->scope["columns"]) ? $this->scope["columns"] : null)) {
?>
        <form action="<?php echo (is_string($tmp=$this->scope["formurl"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" method="post">
            <input type="submit" name="<?php echo (is_string($tmp=$this->scope["action_name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" id="action-dummy" class="hidden">
            <input type="hidden" id="viewid" name="id" value="<?php echo (is_string($tmp=$this->scope["view"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
            <input type="hidden" name="change" value="1">
            <input type="hidden" id="category" name="c" value="<?php echo (is_string($tmp=$this->scope["category"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
            <input type="hidden" name="sesskey" value="<?php echo (is_string($tmp=$this->scope["SESSKEY"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
            <?php if ((isset($this->scope["new"]) ? $this->scope["new"] : null)) {
?><input type="hidden" name="new" value="1"><?php 
}?>


            <div id="editcontent-sidebar-wrapper" class="col-collapse">
                <div id="editcontent-sidebar" data-spy="affix" data-offset-top="420" data-offset-top="100" class="toolbar-affix">
                <?php echo Dwoo_Plugin_include($this, "view/contenteditor.tpl", null, null, null, '_root', null, array('selected' => 'content', 'new' => (is_string($tmp=(isset($this->scope["new"]) ? $this->scope["new"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)));?>

                <?php if ((isset($this->scope["viewthemes"]) ? $this->scope["viewthemes"] : null)) {
?>
                    <div id="select-theme" class="select dropdown theme-dropdown">
                        <label id="select-theme-header"><?php echo Dwoo_Plugin_str($this, 'theme', 'view', null, null, null, null, null);?></label>
                        <span class="picker">
                        <select id="viewtheme-select" class="form-control select" name="viewtheme">
                        <?php 
$_fh2_data = (is_string($tmp=(isset($this->scope["viewthemes"]) ? $this->scope["viewthemes"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isTraversable($_fh2_data) == true)
{
	foreach ($_fh2_data as $this->scope['themeid']=>$this->scope['themename'])
	{
/* -- foreach start output */
?>
                            <option value="<?php echo (is_string($tmp=$this->scope["themeid"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"<?php if ((isset($this->scope["themeid"]) ? $this->scope["themeid"] : null) == (isset($this->scope["viewtheme"]) ? $this->scope["viewtheme"] : null)) {
?> selected="selected"<?php 
}?>><?php echo (is_string($tmp=$this->scope["themename"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></option>
                        <?php 
/* -- foreach end output */
	}
}?>

                        </select>
                        </span>
                    </div>
                <?php 
}?>

                </div>
            </div>
            <div class="col-with-collapse">
                <div id="bottom-pane" data-role="workspace">
                    <div id="column-container" class="user-page-content">
                        <?php echo (isset($this->scope["columns"]) ? $this->scope["columns"] : null);?>

                    </div>
                </div>
            </div>
        </form>

        <div id="view-wizard-controls" class="col-collapse-offset col-with-collapse">

            <?php if (! (isset($this->scope["issitetemplate"]) ? $this->scope["issitetemplate"] : null)) {
?>
            <a class="btn btn-default" href="<?php echo (is_string($tmp=$this->scope["displaylink"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
                <?php echo Dwoo_Plugin_str($this, 'displayview', 'view', null, null, null, null, null);?>

                <span class="icon icon-arrow-circle-right right" role="presentation" aria-hidden="true"></span>
            </a>
            <?php 
}?>

            <?php if ((isset($this->scope["groupid"]) ? $this->scope["groupid"] : null)) {
?>
            <a class="btn btn-default" href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>view/groupviews.php?group=<?php echo (is_string($tmp=$this->scope["groupid"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
                <?php echo Dwoo_Plugin_str($this, 'returntogrouppages', 'group', null, null, null, null, null);?>

                <span class="icon icon-arrow-circle-right right" role="presentation" aria-hidden="true"></span>
            </a>
            <?php 
}?>

        </div>

    <?php 
}
elseif ((isset($this->scope["block"]) ? $this->scope["block"] : null)) {
?>
        <form action="<?php echo (is_string($tmp=$this->scope["formurl"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" method="post">
            <input type="submit" name="<?php echo (is_string($tmp=$this->scope["action_name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" id="action-dummy" class="hidden">
            <input type="hidden" id="viewid" name="id" value="<?php echo (is_string($tmp=$this->scope["view"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
            <input type="hidden" name="change" value="1">
            <input type="hidden" id="category" name="c" value="<?php echo (is_string($tmp=$this->scope["category"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
            <input type="hidden" name="sesskey" value="<?php echo (is_string($tmp=$this->scope["SESSKEY"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
            <?php if ((isset($this->scope["new"]) ? $this->scope["new"] : null)) {
?><input type="hidden" name="new" value="1"><?php 
}?>


            <div id="editcontent-sidebar-wrapper" class="col-collapse">
                <div id="editcontent-sidebar">
                    <?php echo Dwoo_Plugin_include($this, "view/contenteditor.tpl", null, null, null, '_root', null, array('selected' => 'content', 'new' => (is_string($tmp=(isset($this->scope["new"]) ? $this->scope["new"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)));?>

                    <?php if ((isset($this->scope["viewthemes"]) ? $this->scope["viewthemes"] : null)) {
?>
                    <div id="select-theme" class="select dropdown theme-dropdown">
                        <label id="select-theme-header"><?php echo Dwoo_Plugin_str($this, 'theme', 'view', null, null, null, null, null);?></label>
                        <span class="picker">
                        <select id="viewtheme-select" class="form-control select" name="viewtheme">
                        <?php 
$_fh3_data = (is_string($tmp=(isset($this->scope["viewthemes"]) ? $this->scope["viewthemes"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isTraversable($_fh3_data) == true)
{
	foreach ($_fh3_data as $this->scope['themeid']=>$this->scope['themename'])
	{
/* -- foreach start output */
?>
                            <option value="<?php echo (is_string($tmp=$this->scope["themeid"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"<?php if ((isset($this->scope["themeid"]) ? $this->scope["themeid"] : null) == (isset($this->scope["viewtheme"]) ? $this->scope["viewtheme"] : null)) {
?> selected="selected"<?php 
}?>><?php echo (is_string($tmp=$this->scope["themename"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></option>
                        <?php 
/* -- foreach end output */
	}
}?>

                        </select>
                        </span>
                    </div>
                    <?php 
}?>

                </div>
            </div>
            <div class="blockconfig-background">
                <div class="blockconfig-container">
                        <?php echo (isset($this->scope["block"]["html"]) ? $this->scope["block"]["html"]:null);?>

                </div>
            </div>
            <?php if ((isset($this->scope["block"]["javascript"]) ? $this->scope["block"]["javascript"]:null)) {
?>
            <script type="application/javascript">
                    <?php echo (isset($this->scope["block"]["javascript"]) ? $this->scope["block"]["javascript"]:null);?>

            </script>
            <?php 
}?>

        </form>
    <?php 
}?>


</div>

<div class="modal" id="addblock" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content" data-height=".modal-body">
            <div class="modal-header">
                <button class="deletebutton close" name="action_removeblockinstance_id_<?php echo (is_string($tmp=$this->scope["id"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
                    <span class="times">&times;</span>
                    <span class="sr-only"><?php echo Dwoo_Plugin_str($this, 'Close', 'mahara', null, null, null, null, null);?></span>
                </button>
                <h4 class="modal-title blockinstance-header text-inline" id="addblock-heading"></h4>
            </div>
            <div class="modal-body blockinstance-content">
                <div class="block-inner"><?php echo (isset($this->scope["addform"]) ? $this->scope["addform"] : null);?></div>
            </div>
        </div>
    </div>
</div>

<div class="modal modal-shown modal-docked-right modal-docked closed blockinstance configure" id="configureblock" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" data-height=".modal-body">
            <div class="modal-header">
                <button class="deletebutton close" name="close_configuration">
                    <span class="times">&times;</span>
                    <span class="sr-only"><?php echo Dwoo_Plugin_str($this, 'closeconfiguration', 'view', null, null, null, null, null);?></span>
                </button>
                <h4 class="modal-title blockinstance-header text-inline"></h4>
                <span class="icon icon-cogs icon-2x pull-right" role="presentation" aria-hidden="true"></span>
            </div>
            <div class="modal-body blockinstance-content">
            </div>
        </div>
    </div>
</div>

<?php echo Dwoo_Plugin_include($this, "footer.tpl", null, null, null, '_root', null);?>

<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>