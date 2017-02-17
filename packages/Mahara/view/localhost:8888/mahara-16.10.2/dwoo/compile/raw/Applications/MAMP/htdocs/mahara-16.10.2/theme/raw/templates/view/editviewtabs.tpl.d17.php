<?php
/* template head */
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
/* end template head */ ob_start(); /* template body */ ?><div class="btn-group btn-toolbar btn-group-top">
    <a class="btn btn-default <?php if ((isset($this->scope["selected"]) ? $this->scope["selected"] : null) == 'content') {
?>active<?php 
}?>" href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>view/blocks.php?id=<?php echo (is_string($tmp=$this->scope["viewid"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ((isset($this->scope["new"]) ? $this->scope["new"] : null)) {
?>&new=1<?php 
}?>" title="<?php echo Dwoo_Plugin_str($this, 'editcontent', 'view', null, null, null, null, null);?>">
        <span class="icon icon-lg icon-pencil" role="presentation" aria-hidden="true"></span>
        <span class="btn-title"><?php echo Dwoo_Plugin_str($this, 'editcontent', 'view', null, null, null, null, null);?></span>
    </a>
    <a class="btn btn-default <?php if ((isset($this->scope["selected"]) ? $this->scope["selected"] : null) == 'layout') {
?>active<?php 
}?>" href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>view/layout.php?id=<?php echo (is_string($tmp=$this->scope["viewid"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ((isset($this->scope["new"]) ? $this->scope["new"] : null)) {
?>&new=1<?php 
}?>" title="<?php echo Dwoo_Plugin_str($this, 'editlayout', 'view', null, null, null, null, null);?>">
        <span class="icon icon-lg icon-columns" role="presentation" aria-hidden="true"></span>
        <span class="btn-title"><?php echo Dwoo_Plugin_str($this, 'editlayout', 'view', null, null, null, null, null);?></span>
    </a>
    <?php if (! (isset($this->scope["issitetemplate"]) ? $this->scope["issitetemplate"] : null) && can_use_skins(null, false, (is_string($tmp=(isset($this->scope["issiteview"]) ? $this->scope["issiteview"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp))) {
?>
        <a class="btn btn-default <?php if ((isset($this->scope["selected"]) ? $this->scope["selected"] : null) == 'skin') {
?>active<?php 
}?>" href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>view/skin.php?id=<?php echo (is_string($tmp=$this->scope["viewid"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ((isset($this->scope["new"]) ? $this->scope["new"] : null)) {
?>&new=1<?php 
}?>" title="<?php echo Dwoo_Plugin_str($this, 'chooseskin', 'skin', null, null, null, null, null);?>">
            <span class="icon icon-lg icon-paint-brush" role="presentation" aria-hidden="true"></span>
            <span class="btn-title"><?php echo Dwoo_Plugin_str($this, 'chooseskin', 'skin', null, null, null, null, null);?></span>
        </a>
    <?php 
}?>

    <?php if ((isset($this->scope["edittitle"]) ? $this->scope["edittitle"] : null)) {
?>
        <a class="btn btn-default <?php if ((isset($this->scope["selected"]) ? $this->scope["selected"] : null) == 'title') {
?>active<?php 
}?>" href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>view/edit.php?id=<?php echo (is_string($tmp=$this->scope["viewid"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ((isset($this->scope["new"]) ? $this->scope["new"] : null)) {
?>&new=1<?php 
}?>" title="<?php echo Dwoo_Plugin_str($this, 'edittitleanddescription', 'view', null, null, null, null, null);?>">
            <span class="icon icon-lg icon-cogs" role="presentation" aria-hidden="true"></span>
            <span class="btn-title"><?php echo Dwoo_Plugin_str($this, 'edittitleanddescription', 'view', null, null, null, null, null);?></span>
        </a>
    <?php 
}?>

</div>
<div class="with-heading">
    <?php if (! (isset($this->scope["issitetemplate"]) ? $this->scope["issitetemplate"] : null)) {
?>
    <a href="<?php echo (is_string($tmp=$this->scope["displaylink"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
        <?php echo Dwoo_Plugin_str($this, 'displayview', 'view', null, null, null, null, null);?>

    </a>
        <?php if ((isset($this->scope["edittitle"]) ? $this->scope["edittitle"] : null) || (isset($this->scope["viewtype"]) ? $this->scope["viewtype"] : null) == 'profile') {
?>
        <a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>view/access.php?id=<?php echo (is_string($tmp=$this->scope["viewid"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ((isset($this->scope["collectionid"]) ? $this->scope["collectionid"] : null)) {
?>&collection=<?php echo (is_string($tmp=$this->scope["collectionid"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);

}
if ((isset($this->scope["new"]) ? $this->scope["new"] : null)) {
?>&new=1<?php 
}?>">
            <span class="icon icon-unlock-alt" role="presentation" aria-hidden="true"></span>
            <?php echo Dwoo_Plugin_str($this, 'shareview', 'view', null, null, null, null, null);?>

        </a>
        <?php 
}?>

    <?php 
}
else {
?>
        &nbsp;
    <?php 
}?>

</div>

<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>