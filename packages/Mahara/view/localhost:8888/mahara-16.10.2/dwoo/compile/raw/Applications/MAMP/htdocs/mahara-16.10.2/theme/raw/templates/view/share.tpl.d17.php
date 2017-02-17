<?php
/* template head */
if (function_exists('Dwoo_Plugin_include')===false)
	$this->getLoader()->loadPlugin('include');
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
if (class_exists('Dwoo_Plugin_cycle', false)===false)
	$this->getLoader()->loadPlugin('cycle');
/* end template head */ ob_start(); /* template body */ ;
echo Dwoo_Plugin_include($this, "header.tpl", null, null, null, '_root', null);?>

<?php if (! (isset($this->scope["accesslists"]["views"]) ? $this->scope["accesslists"]["views"]:null) && ! (isset($this->scope["accesslists"]["collections"]) ? $this->scope["accesslists"]["collections"]:null)) {
?>
    <p class="no-results">
        <?php echo Dwoo_Plugin_str($this, 'youhaventcreatedanyviewsyet', 'view', null, null, null, null, null);?>

    </p>
<?php 
}
else {
?>
    <?php if ((isset($this->scope["accesslists"]["views"]) ? $this->scope["accesslists"]["views"]:null) && (isset($this->scope["accesslists"]["collections"]) ? $this->scope["accesslists"]["collections"]:null)) {
?>
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" aria-hidden="true" class="active">
                <a href="#collection-tab" aria-controls="home" aria-selected="true" role="tab" data-toggle="tab">
                    <?php echo Dwoo_Plugin_str($this, 'Collections', 'collection', null, null, null, null, null);?>

                </a>
            </li>
            <li role="presentation" aria-hidden="true">
                <a href="#pages-tab" aria-controls="profile" role="tab" data-toggle="tab">
                    <?php echo Dwoo_Plugin_str($this, 'Views', 'view', null, null, null, null, null);?>

                </a>
            </li>
        </ul>
        <div class="tab-content">
    <?php 
}?>

    <?php if ((isset($this->scope["accesslists"]["collections"]) ? $this->scope["accesslists"]["collections"]:null)) {
?>
        <div id="collection-tab" class="panel panel-secondary<?php if ((isset($this->scope["accesslists"]["views"]) ? $this->scope["accesslists"]["views"]:null)) {
?> tab-pane active<?php 
}?>">
            <?php if (! (isset($this->scope["accesslists"]["views"]) ? $this->scope["accesslists"]["views"]:null)) {
?><h2 class="panel-heading"><?php echo Dwoo_Plugin_str($this, 'Collections', 'collection', null, null, null, null, null);?></h2><?php 
}?>

            <table class="fullwidth accesslists table">
                <thead>
                    <tr>
                        <th><?php echo Dwoo_Plugin_str($this, 'name', 'collection', null, null, null, null, null);?></th>
                        <th><?php echo Dwoo_Plugin_str($this, 'accesslist', 'view', null, null, null, null, null);?></th>
                        <th class="al-edit text-tiny text-center active"><?php echo Dwoo_Plugin_str($this, 'editaccess', 'view', null, null, null, null, null);?></th>
                        <th class="secreturls text-tiny text-center active"><?php echo Dwoo_Plugin_str($this, 'secreturls', 'view', null, null, null, null, null);?></th>
                    </tr>
                </thead>
                <?php 
$_fh0_data = (is_string($tmp=(isset($this->scope["accesslists"]["collections"]) ? $this->scope["accesslists"]["collections"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isTraversable($_fh0_data) == true)
{
	foreach ($_fh0_data as $this->scope['collection'])
	{
/* -- foreach start output */
?>
                    <tr class="<?php echo $this->classCall('cycle', array('default', 'r0,r1', true, true, ',', null, false));?>">
                    <?php echo Dwoo_Plugin_include($this, "view/accesslistrow.tpl", null, null, null, '_root', null, array('item' => (is_string($tmp=(isset($this->scope["collection"]) ? $this->scope["collection"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)));?>

                    </tr>
                <?php 
/* -- foreach end output */
	}
}?>

                </tbody>
            </table>
        </div>
    <?php 
}?>


    <?php if ((isset($this->scope["accesslists"]["views"]) ? $this->scope["accesslists"]["views"]:null)) {
?>
    <div id="pages-tab" class="panel panel-secondary<?php if ((isset($this->scope["accesslists"]["collections"]) ? $this->scope["accesslists"]["collections"]:null)) {
?> tab-pane<?php 
}?>">
        <?php if (! (isset($this->scope["accesslists"]["collections"]) ? $this->scope["accesslists"]["collections"]:null)) {
?><h2 class="panel-heading"><?php echo Dwoo_Plugin_str($this, 'Views', 'view', null, null, null, null, null);?></h2><?php 
}?>

        <table class="fullwidth accesslists table">
            <thead>
                <tr>
                    <th><?php echo Dwoo_Plugin_str($this, 'title', 'view', null, null, null, null, null);?></th>
                    <th><?php echo Dwoo_Plugin_str($this, 'accesslist', 'view', null, null, null, null, null);?></th>
                    <th class="al-edit text-tiny text-center active"><?php echo Dwoo_Plugin_str($this, 'editaccess', 'view', null, null, null, null, null);?></th>
                    <th class="secreturls text-tiny text-center active"><?php echo Dwoo_Plugin_str($this, 'secreturls', 'view', null, null, null, null, null);?></th>
                </tr>
            </thead>
            <tbody>
            <?php 
$_fh1_data = (is_string($tmp=(isset($this->scope["accesslists"]["views"]) ? $this->scope["accesslists"]["views"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isTraversable($_fh1_data) == true)
{
	foreach ($_fh1_data as $this->scope['view'])
	{
/* -- foreach start output */
?>
                <tr>
                <?php echo Dwoo_Plugin_include($this, "view/accesslistrow.tpl", null, null, null, '_root', null, array('item' => (is_string($tmp=(isset($this->scope["view"]) ? $this->scope["view"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)));?>

                </tr>
            <?php 
/* -- foreach end output */
	}
}?>

            </tbody>
        </table>
    </div>
    <?php 
}?>

    <?php if ((isset($this->scope["accesslists"]["views"]) ? $this->scope["accesslists"]["views"]:null) && (isset($this->scope["accesslists"]["collections"]) ? $this->scope["accesslists"]["collections"]:null)) {
?></div><?php 
}?>

<?php 
}?>

<?php echo Dwoo_Plugin_include($this, "footer.tpl", null, null, null, '_root', null);?>

<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>