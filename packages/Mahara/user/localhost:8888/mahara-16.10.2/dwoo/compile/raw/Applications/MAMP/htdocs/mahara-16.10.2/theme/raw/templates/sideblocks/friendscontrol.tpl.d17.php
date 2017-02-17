<?php
/* template head */
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
if (function_exists('Dwoo_Plugin_contextualhelp')===false)
	$this->getLoader()->loadPlugin('contextualhelp');
/* end template head */ ob_start(); /* template body */ ?><div class="panel panel-default">
    <h3 class="panel-heading">
    	<?php echo Dwoo_Plugin_str($this, "friendsdescr", "account", null, null, null, null, null);?>

    	<span class="pull-right">
    	<?php echo Dwoo_Plugin_contextualhelp($this, 'core', 'account', 'accountprefs', 'friendscontrol', null, null);?>

    </span>
    </h3>
    <div class="panel-body">
    <?php echo (isset($this->scope["sbdata"]["form"]) ? $this->scope["sbdata"]["form"]:null);?>

    </div>
</div>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>