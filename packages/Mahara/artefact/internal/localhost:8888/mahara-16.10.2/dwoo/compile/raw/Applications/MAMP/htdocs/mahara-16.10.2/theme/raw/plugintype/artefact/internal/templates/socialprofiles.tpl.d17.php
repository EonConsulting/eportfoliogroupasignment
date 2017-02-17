<?php
/* template head */
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
/* end template head */ ob_start(); /* template body */ ;
if ((isset($this->scope["rows"]) ? $this->scope["rows"] : null)) {
?>
<div class="text-right">
    <a class="btn btn-default" href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>artefact/internal/socialprofile.php">
        <span class="icon icon-lg icon-plus left" role="presentation" aria-hidden="true"></span>
        <?php echo Dwoo_Plugin_str($this, 'newsocialprofile', 'artefact.internal', null, null, null, null, null);?>

    </a>
</div>
<div class="table-responsive">
<table id="socialprofilelist" class="tablerenderer fullwidth table">
    <thead>
        <tr>
            <th class="icons"></th>
            <th><?php echo Dwoo_Plugin_str($this, 'service', 'artefact.internal', null, null, null, null, null);?></th>
            <th><?php echo Dwoo_Plugin_str($this, 'profileurl', 'artefact.internal', null, null, null, null, null);?></th>
            <?php if ((isset($this->scope["controls"]) ? $this->scope["controls"] : null)) {
?><th class="control-buttons">
                <span class="accessible-hidden sr-only"><?php echo Dwoo_Plugin_str($this, 'edit', 'mahara', null, null, null, null, null);?></span>
            </th><?php 
}?>

        </tr>
    </thead>
    <tbody>
        <?php 
$_fh0_data = (is_string($tmp=(isset($this->scope["rows"]) ? $this->scope["rows"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isTraversable($_fh0_data) == true)
{
	foreach ($_fh0_data as $this->scope['row'])
	{
/* -- foreach start output */
?>
        <tr class="social-info">
            <td class="text-center">
                <img src="<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'icon',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["row"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" alt="<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'description',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["row"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
            </td>
            <td>
                <span><?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'description',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["row"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></span>
            </td>
            <td>
                <?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'link',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["row"]) ? $this->scope["row"]:null), true)) {
?>
                <a href="<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'link',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["row"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" title="<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'link',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["row"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" class="socialprofile">
                <?php 
}?>

                <?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'title',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["row"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>

                <?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'link',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["row"]) ? $this->scope["row"]:null), true)) {
?>
                </a><?php 
}?>

            </td>
            <?php if ((isset($this->scope["controls"]) ? $this->scope["controls"] : null)) {
?>
            <td class="control-buttons">
                <div class="btn-group">
                    <a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>artefact/internal/socialprofile.php?id=<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'id',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["row"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" title="<?php echo Dwoo_Plugin_str($this, 'edit', 'mahara', null, null, null, null, null);?>" class="btn btn-default btn-xs">
                        <span class="icon icon-pencil icon-lg" role="presentation" aria-hidden="true"></span>
                        <span class="sr-only"><?php echo Dwoo_Plugin_str($this, 'edit', 'mahara', null, null, null, null, null);?></span>
                    </a>
                    <?php if ((isset($this->scope["candelete"]) ? $this->scope["candelete"] : null)) {
?>
                    <a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>artefact/internal/socialprofile.php?id=<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'id',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["row"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>&delete=1" title="<?php echo Dwoo_Plugin_str($this, 'delete', 'mahara', null, null, null, null, null);?>" class="btn btn-default btn-xs">
                        <span class="icon icon-trash text-danger icon-lg" role="presentation" aria-hidden="true"></span>
                        <span class="sr-only"><?php echo Dwoo_Plugin_str($this, 'delete', 'mahara', null, null, null, null, null);?></span>
                    </a>
                    <?php 
}?>

                </div>
            </td>
            <?php 
}?>

        </tr>
        <?php 
/* -- foreach end output */
	}
}?>

    </tbody>
</table>
</div>
<?php 
}
else {
?>
<p class="no-results">
    <a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>artefact/internal/socialprofile.php">
        <span class="icon icon-plus left" role="presentation" aria-hidden="true"></span>
        <?php echo Dwoo_Plugin_str($this, 'newsocialprofile', 'artefact.internal', null, null, null, null, null);?>

    </a>
</p>
<?php 
}?>

<?php echo (isset($this->scope["pagination"]["html"]) ? $this->scope["pagination"]["html"]:null);?>

<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>