<?php
/* template head */
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
/* end template head */ ob_start(); /* template body */ ?><div class="panel panel-default">
    <h3 class="panel-heading has-link">
        <a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>tags.php"><?php echo Dwoo_Plugin_str($this, "tags", 'mahara', null, null, null, null, null);?> <span class="icon icon-arrow-right pull-right" role="presentation" aria-hidden="true"></span></a>
    </h3>
    <div class="tagblock panel-body">
        <?php if ((isset($this->scope["sbdata"]["tags"]) ? $this->scope["sbdata"]["tags"]:null)) {
?>
            <?php 
$_fh10_data = (is_string($tmp=(isset($this->scope["sbdata"]["tags"]) ? $this->scope["sbdata"]["tags"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isTraversable($_fh10_data) == true)
{
	foreach ($_fh10_data as $this->scope['tag'])
	{
/* -- foreach start output */
?>
                <a class="tag"<?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'size',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["tag"]) ? $this->scope["tag"]:null), true)) {
?> style="font-size: <?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'size',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["tag"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>em;"<?php 
}?> href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>tags.php?tag=<?php echo urlencode($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'tag',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["tag"]) ? $this->scope["tag"]:null), true));?>" title="<?php echo Dwoo_Plugin_str($this, 'nitems', 'mahara', null, (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'count',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["tag"]) ? $this->scope["tag"]:null), true)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), null, null, null);?>"><?php echo str_shorten_text((is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'tag',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["tag"]) ? $this->scope["tag"]:null), true)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), 20);?></a> &nbsp;
            <?php 
/* -- foreach end output */
	}
}?>

        <?php 
}
else {
?>
            <div class="no-results-small text-small"><?php echo Dwoo_Plugin_str($this, 'youhavenottaggedanythingyet', 'mahara', null, null, null, null, null);?></div>
        <?php 
}?>

    </div>
</div>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>