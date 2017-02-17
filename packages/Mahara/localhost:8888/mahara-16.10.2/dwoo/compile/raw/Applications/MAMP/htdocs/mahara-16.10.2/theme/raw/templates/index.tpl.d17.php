<?php
/* template head */
if (function_exists('Dwoo_Plugin_include')===false)
	$this->getLoader()->loadPlugin('include');
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
/* end template head */ ob_start(); /* template body */ ;
echo Dwoo_Plugin_include($this, "header.tpl", null, null, null, '_root', null);?>

<?php echo clean_html((isset($this->scope["page_content"]) ? $this->scope["page_content"] : null));?>

<?php if (get_config('homepageinfo') && ( ! (($tmp = (isset($this->scope["USER"]) ? $this->scope["USER"] : null)) ? $tmp->is_logged_in() : null) || (($tmp = (isset($this->scope["USER"]) ? $this->scope["USER"] : null)) ? $tmp->get_account_preference('showhomeinfo') : null) )) {
?>
    <?php echo Dwoo_Plugin_include($this, "homeinfo.tpl", null, null, null, '_root', null, array('url' => (is_string($tmp=(isset($this->scope["url"]) ? $this->scope["url"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)));?>

<?php 
}?>

<?php if ((isset($this->scope["dashboardview"]) ? $this->scope["dashboardview"] : null)) {
?>
    <div class="dashboard-editable">
        <div class="btn-top-right btn-group btn-group-top" id="editdashboard">
            <a class="btn btn-default" href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>view/blocks.php?id=<?php echo (is_string($tmp=$this->scope["viewid"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><span class="btn-edit"><span class="icon icon-pencil left" role="presentation" aria-hidden="true"> </span> <?php echo Dwoo_Plugin_str($this, 'editdashboard', 'mahara', null, null, null, null, null);?></span></a>
        </div>

        <?php echo Dwoo_Plugin_include($this, "user/dashboard.tpl", null, null, null, '_root', null);?>


    </div>
<?php 
}?>

<?php echo Dwoo_Plugin_include($this, "footer.tpl", null, null, null, '_root', null);?>

<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>