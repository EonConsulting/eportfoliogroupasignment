<?php
/* template head */
if (function_exists('Dwoo_Plugin_include')===false)
	$this->getLoader()->loadPlugin('include');
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
/* end template head */ ob_start(); /* template body */ ?>    <?php 
$_fh4_data = (is_string($tmp=(isset($this->scope["views"]) ? $this->scope["views"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isTraversable($_fh4_data) == true)
{
	foreach ($_fh4_data as $this->scope['as']=>$this->scope['view'])
	{
/* -- foreach start output */
?>
        <li class="list-group-item">
            <a href="<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'fullurl',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["view"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" class=" outer-link watchlist-showview">
                <span class="sr-only"><?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'title',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["view"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></span>
            </a>
            <h4 class="title list-group-item-heading">
                <?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'title',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["view"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>

            </h4>
            <?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'sharedby',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["view"]) ? $this->scope["view"]:null), true)) {
?>
                <div class="groupuserdate text-small">
                <?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'group',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["view"]) ? $this->scope["view"]:null), true) && (isset($this->scope["loggedin"]) ? $this->scope["loggedin"] : null)) {
?>
                <a class="inner-link" href="<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',    1 => '->',  ),  2 =>   array (    0 => 'groupdata',    1 => 'homeurl',  ),  3 =>   array (    0 => '',    1 => '',    2 => '',  ),), $this->scope["view"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'sharedby',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["view"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></a>
                <?php 
}
elseif ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'owner',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["view"]) ? $this->scope["view"]:null), true) && (isset($this->scope["loggedin"]) ? $this->scope["loggedin"] : null)) {
?>
                    <?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'anonymous',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["view"]) ? $this->scope["view"]:null), true)) {
?>
                        <?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'staff_or_admin',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["view"]) ? $this->scope["view"]:null), true)) {
?>
                            <?php echo $this->assignInScope((is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'sharedby',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["view"]) ? $this->scope["view"]:null), true)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), 'realauthor');?>

                            <?php echo $this->assignInScope(profile_url((is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'user',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["view"]) ? $this->scope["view"]:null), true)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)), 'realauthorlink');?>

                        <?php 
}?>

                        <?php echo $this->assignInScope(get_string('anonymoususer'), 'author');?>

                        <?php echo Dwoo_Plugin_include($this, 'author.tpl', null, null, null, '_root', null);?>

                    <?php 
}
else {
?>
                        <a class="inner-link" href="<?php echo profile_url((is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'user',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["view"]) ? $this->scope["view"]:null), true)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp));?>"><?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'sharedby',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["view"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></a>
                    <?php 
}?>

                <?php 
}
else {
?>
                    <?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'sharedby',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["view"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>

                <?php 
}?>

                <span class="postedon text-midtone">
                - <?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'mtime',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["view"]) ? $this->scope["view"]:null), true) == $this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'ctime',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["view"]) ? $this->scope["view"]:null), true)) {

echo Dwoo_Plugin_str($this, 'Created', 'mahara', null, null, null, null, null);

}
else {

echo Dwoo_Plugin_str($this, 'Updated', 'mahara', null, null, null, null, null);

}?>

                <?php echo format_date(strtotime((is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'mtime',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["view"]) ? $this->scope["view"]:null), true)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)), 'strftimedate');?></span>
                </div>
            <?php 
}?>

        </li>
    <?php 
/* -- foreach end output */
	}
}?>

<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>