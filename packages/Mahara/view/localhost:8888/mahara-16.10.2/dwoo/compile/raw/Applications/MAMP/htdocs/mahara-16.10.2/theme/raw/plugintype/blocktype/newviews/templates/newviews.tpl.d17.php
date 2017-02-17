<?php
/* template head */
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
if (function_exists('Dwoo_Plugin_include')===false)
	$this->getLoader()->loadPlugin('include');
/* end template head */ ob_start(); /* template body */ ;
if ((isset($this->scope["views"]) ? $this->scope["views"] : null)) {
?>
<div class="list-group">
    <?php 
$_fh0_data = (is_string($tmp=(isset($this->scope["views"]) ? $this->scope["views"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isTraversable($_fh0_data) == true)
{
	foreach ($_fh0_data as $this->scope['view'])
	{
/* -- foreach start output */
?>
    <div class="list-group-item">
        <h4 class="list-group-item-heading text-inline">
            <a href="<?php echo (is_string($tmp=$this->scope["view"]["fullurl"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><?php echo (is_string($tmp=$this->scope["view"]["title"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></a>
        </h4>
        <span class="text-small text-midtone"><?php if ((isset($this->scope["view"]["collid"]) ? $this->scope["view"]["collid"]:null)) {
?>(<?php echo Dwoo_Plugin_str($this, 'nviews', 'view', null, (is_string($tmp=(isset($this->scope["view"]["numpages"]) ? $this->scope["view"]["numpages"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), null, null, null);?>)<?php 
}?></span>
        <?php if ((isset($this->scope["view"]["sharedby"]) ? $this->scope["view"]["sharedby"]:null)) {
?>
        <div class="groupuserdate text-small">
            <?php if ((isset($this->scope["view"]["group"]) ? $this->scope["view"]["group"]:null) && (isset($this->scope["loggedin"]) ? $this->scope["loggedin"] : null)) {
?>
            <a href="<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'homeurl',  ),  3 =>   array (    0 => '',    1 => '',    2 => '',  ),), $this->scope["view"]["groupdata"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" class="text-link">
                <?php echo (is_string($tmp=$this->scope["view"]["sharedby"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>

            </a>
            <?php 
}
elseif ((isset($this->scope["view"]["owner"]) ? $this->scope["view"]["owner"]:null) && (isset($this->scope["loggedin"]) ? $this->scope["loggedin"] : null)) {
?>
                <?php if ((isset($this->scope["view"]["anonymous"]) ? $this->scope["view"]["anonymous"]:null)) {
?>
                    <?php if ((isset($this->scope["view"]["staff_or_admin"]) ? $this->scope["view"]["staff_or_admin"]:null)) {
?>
                    <?php echo $this->assignInScope((is_string($tmp=(isset($this->scope["view"]["sharedby"]) ? $this->scope["view"]["sharedby"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), 'realauthor');?>

                    <?php echo $this->assignInScope(profile_url((is_string($tmp=(isset($this->scope["view"]["user"]) ? $this->scope["view"]["user"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)), 'realauthorlink');?>

                <?php 
}?>


                <?php echo $this->assignInScope(get_string('anonymoususer'), 'author');?>


                <?php echo Dwoo_Plugin_include($this, 'author.tpl', null, null, null, '_root', null);?>

            <?php 
}
else {
?>
                <a href="<?php echo profile_url((is_string($tmp=(isset($this->scope["view"]["user"]) ? $this->scope["view"]["user"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp));?>" class="text-link">
                    <?php echo (is_string($tmp=$this->scope["view"]["sharedby"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>

                </a>
            <?php 
}?>

        <?php 
}
else {
?>
            <?php echo (is_string($tmp=$this->scope["view"]["sharedby"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>

        <?php 
}?>

            <span class="postedon text-midtone">
                - <?php if ((isset($this->scope["view"]["mtime"]) ? $this->scope["view"]["mtime"]:null) == (isset($this->scope["view"]["ctime"]) ? $this->scope["view"]["ctime"]:null)) {
?>
                    <?php echo Dwoo_Plugin_str($this, 'Created', 'mahara', null, null, null, null, null);?>

                <?php 
}
else {
?>
                    <?php echo Dwoo_Plugin_str($this, 'Updated', 'mahara', null, null, null, null, null);?>

                <?php 
}?>

                <?php echo format_date(strtotime((is_string($tmp=(isset($this->scope["view"]["mtime"]) ? $this->scope["view"]["mtime"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)), 'strftimedate');?>

            </span>
        </div>
        <?php if ((isset($this->scope["view"]["description"]) ? $this->scope["view"]["description"]:null)) {
?>
        <p class="detail list-group-item-text text-small">
            <?php echo preg_replace('#<[^>]*>#', ' ', str_shorten_html((isset($this->scope["view"]["description"]) ? $this->scope["view"]["description"]:null), 100, true));?>

        </p>
        <?php 
}?>

    </div>
    <?php 
}

/* -- foreach end output */
	}
}?>

</div>
<?php 
}
else {
?>
<div class="panel-body">
    <p class="lead text-small"><?php echo Dwoo_Plugin_str($this, 'noviews', 'view', null, null, null, null, null);?></p>
</div>
<?php 
}?>

<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>