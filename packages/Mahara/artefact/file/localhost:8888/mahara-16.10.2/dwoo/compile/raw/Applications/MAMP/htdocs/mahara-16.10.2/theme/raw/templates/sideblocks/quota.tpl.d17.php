<?php
/* template head */
if (function_exists('Dwoo_Plugin_loadquota')===false)
	$this->getLoader()->loadPlugin('loadquota');
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
if (function_exists('Dwoo_Plugin_contextualhelp')===false)
	$this->getLoader()->loadPlugin('contextualhelp');
/* end template head */ ob_start(); /* template body */ ;
echo Dwoo_Plugin_loadquota($this);?>

<div class="panel panel-default">
    <h3 class="panel-heading">
        <?php echo Dwoo_Plugin_str($this, "quota", 'mahara', null, null, null, null, null);?>

        <span class="pull-right">
        <?php echo Dwoo_Plugin_contextualhelp($this, 'artefact', 'file', null, null, 'quota_message', null);?>

        </span>
    </h3>
    <div class="panel-body">
        <p id="quota_message">
            <?php echo (isset($this->scope["QUOTA_MESSAGE"]) ? $this->scope["QUOTA_MESSAGE"] : null);?>

        </p>
        <div id="quotawrap" class="progress">
            <div id="quota_fill" class="progress-bar <?php if ((isset($this->scope["QUOTA_PERCENTAGE"]) ? $this->scope["QUOTA_PERCENTAGE"] : null) < 11) {
?>small-progress<?php 
}?>" role="progressbar" aria-valuenow="<?php if ((isset($this->scope["QUOTA_PERCENTAGE"]) ? $this->scope["QUOTA_PERCENTAGE"] : null)) {

echo (is_string($tmp=$this->scope["QUOTA_PERCENTAGE"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);

}
else {
?>0<?php 
}?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo (is_string($tmp=$this->scope["QUOTA_PERCENTAGE"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>%;">
                <span><?php echo (is_string($tmp=$this->scope["QUOTA_PERCENTAGE"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>%</span>
            </div>
        </div>
    </div>
</div>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>