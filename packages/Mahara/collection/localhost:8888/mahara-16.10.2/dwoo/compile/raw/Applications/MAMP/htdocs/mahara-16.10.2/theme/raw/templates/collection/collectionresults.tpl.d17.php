<?php
/* template head */
if (class_exists('Dwoo_Plugin_cycle', false)===false)
	$this->getLoader()->loadPlugin('cycle');
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
if (function_exists('Dwoo_Plugin_escape')===false)
	$this->getLoader()->loadPlugin('escape');
/* end template head */ ob_start(); /* template body */ ?>        <?php 
$_fh1_data = (is_string($tmp=(isset($this->scope["collections"]) ? $this->scope["collections"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isTraversable($_fh1_data) == true)
{
	foreach ($_fh1_data as $this->scope['collection'])
	{
/* -- foreach start output */
?>
            <div class="list-group-item <?php echo $this->classCall('cycle', array('default', 'r0,r1', true, true, ',', null, false));?> <?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'submitinfo',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["collection"]) ? $this->scope["collection"]:null), true)) {
?>list-group-item-warning<?php 
}?>">
                <?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',    1 => '.',    2 => '->',  ),  2 =>   array (    0 => 'views',    1 => '0',    2 => 'view',  ),  3 =>   array (    0 => '',    1 => '',    2 => '',    3 => '',  ),), (isset($this->scope["collection"]) ? $this->scope["collection"]:null), true)) {
?>
                   <a href="<?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'frameworkname',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["collection"]) ? $this->scope["collection"]:null), true)) {

echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'fullurl',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["collection"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);

}
else {

echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',    1 => '.',    2 => '->',  ),  2 =>   array (    0 => 'views',    1 => '0',    2 => 'fullurl',  ),  3 =>   array (    0 => '',    1 => '',    2 => '',    3 => '',  ),), $this->scope["collection"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);

}?>" class="outer-link"><span class="sr-only"><?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'name',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["collection"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></span></a>
                <?php 
}?>

                 <div class="row">
                    <div class="col-md-9">

                        <h3 class="title list-group-item-heading" title="<?php echo Dwoo_Plugin_str($this, 'emptycollection', 'collection', null, null, null, null, null);?>">
                            <?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'name',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["collection"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>

                        </h3>
                        <div class="detail"><?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'description',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["collection"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></div>

                        <div class="detail">
                            <span class="lead text-small"><?php echo Dwoo_Plugin_str($this, 'Views', 'view', null, null, null, null, null);?>:</span>
                            <?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'views',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["collection"]) ? $this->scope["collection"]:null), true)) {
?>
                                <?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'frameworkname',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["collection"]) ? $this->scope["collection"]:null), true)) {
?>
                                    <a href="<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'fullurl',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["collection"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'frameworkname',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["collection"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></a>,
                                <?php 
}?>

                                <?php 
$_fh0_data = (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'views',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["collection"]) ? $this->scope["collection"]:null), true)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
$this->globals["foreach"]['cviews'] = array
(
	"iteration"		=> 1,
	"last"		=> null,
	"total"		=> $this->count($_fh0_data),
);
$_fh0_glob =& $this->globals["foreach"]['cviews'];
if ($this->isTraversable($_fh0_data) == true)
{
	foreach ($_fh0_data as $this->scope['view'])
	{
		$_fh0_glob["last"] = (string) ($_fh0_glob["iteration"] === $_fh0_glob["total"]);
/* -- foreach start output */
?>
                                    <a href="<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'fullurl',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["view"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" class="inner-link"><?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'title',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["view"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></a><?php if (! (isset($this->globals["foreach"]["cviews"]["last"]) ? $this->globals["foreach"]["cviews"]["last"]:null)) {
?>, <?php 
}?>

                                <?php 
/* -- foreach end output */
		$_fh0_glob["iteration"]+=1;
	}
}?>

                            <?php 
}
else {
?>
                                <?php echo Dwoo_Plugin_str($this, 'none', 'mahara', null, null, null, null, null);?>

                            <?php 
}?>

                        </div>

                        <?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'submitinfo',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["collection"]) ? $this->scope["collection"]:null), true)) {
?>
                            <div class="detail submitted-viewitem"><?php echo Dwoo_Plugin_str($this, 'collectionsubmittedtogroupon', 'view', null, (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',    1 => '->',  ),  2 =>   array (    0 => 'submitinfo',    1 => 'url',  ),  3 =>   array (    0 => '',    1 => '',    2 => '',  ),), (isset($this->scope["collection"]) ? $this->scope["collection"]:null), true)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',    1 => '->',  ),  2 =>   array (    0 => 'submitinfo',    1 => 'name',  ),  3 =>   array (    0 => '',    1 => '',    2 => '',  ),), (isset($this->scope["collection"]) ? $this->scope["collection"]:null), true)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), format_date((is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',    1 => '->',  ),  2 =>   array (    0 => 'submitinfo',    1 => 'time',  ),  3 =>   array (    0 => '',    1 => '',    2 => '',  ),), (isset($this->scope["collection"]) ? $this->scope["collection"]:null), true)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)), null);?></div>
                        <?php 
}?>

                    </div>
                     <div class="col-md-3">
                        <div class="inner-link btn-action-list">
                            <?php if (! $this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'submitinfo',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["collection"]) ? $this->scope["collection"]:null), true) && (isset($this->scope["canedit"]) ? $this->scope["canedit"] : null)) {
?>
                                <div class="btn-top-right btn-group btn-group-top">
                                    <a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>collection/views.php?id=<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'id',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["collection"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" title="<?php echo Dwoo_Plugin_str($this, 'manageviews', 'collection', null, null, null, null, null);?>" class="btn btn-default btn-xs">
                                        <span class="icon icon-list icon-lg text-default" role="presentation" aria-hidden="true"></span>
                                        <span class="sr-only"><?php echo Dwoo_Plugin_escape($this, Dwoo_Plugin_str($this, 'manageviewsspecific', 'collection', null, $this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'name',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["collection"]) ? $this->scope["collection"]:null), true), null, null, null), 'html', null);?></span>
                                    </a>
                                    <a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>collection/edit.php?id=<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'id',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["collection"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" title="<?php echo Dwoo_Plugin_str($this, 'edittitleanddescription', 'view', null, null, null, null, null);?>" class="btn btn-default btn-xs">
                                        <span class="icon icon-pencil icon-lg text-default" role="presentation" aria-hidden="true"></span>
                                        <span class="sr-only"><?php echo Dwoo_Plugin_escape($this, Dwoo_Plugin_str($this, 'editspecific', 'mahara', null, $this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'name',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["collection"]) ? $this->scope["collection"]:null), true), null, null, null), 'html', null);?></span>
                                    </a>
                                    <a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>collection/delete.php?id=<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'id',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["collection"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" title="<?php echo Dwoo_Plugin_str($this, 'deletecollection', 'collection', null, null, null, null, null);?>" class="btn btn-default btn-xs">
                                        <span class="icon icon-trash icon-lg text-danger" role="presentation" aria-hidden="true"></span>
                                        <span class="sr-only"><?php echo Dwoo_Plugin_escape($this, Dwoo_Plugin_str($this, 'deletespecific', 'mahara', null, $this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'name',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["collection"]) ? $this->scope["collection"]:null), true), null, null, null), 'html', null);?></span>
                                    </a>
                                </div>
                            <?php 
}?>

                        </div>
                    </div>
                </div>
            </div>
        <?php 
/* -- foreach end output */
	}
}?>

<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>