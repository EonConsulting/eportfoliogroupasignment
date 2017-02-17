<?php
/* template head */
if (function_exists('Dwoo_Plugin_include')===false)
	$this->getLoader()->loadPlugin('include');
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
if (function_exists('Dwoo_Plugin_contextualhelp')===false)
	$this->getLoader()->loadPlugin('contextualhelp');
/* end template head */ ob_start(); /* template body */ ;
echo Dwoo_Plugin_include($this, "header.tpl", null, null, null, '_root', null);?>


<div class="row">
<div class="col-md-3 login-panel">
	<div class="panel panel-default">
	    <h3 class="panel-heading">
	        <?php echo Dwoo_Plugin_str($this, "login", 'mahara', null, null, null, null, null);?>

	        <span class="pull-right"><?php echo Dwoo_Plugin_contextualhelp($this, 'core', 'core', null, null, 'loginbox', null);?></span>
	    </h3>
	    <div class="panel-body">
	        <noscript><p><?php echo Dwoo_Plugin_str($this, "javascriptnotenabled", 'mahara', null, null, null, null, null);?></p></noscript>
	        <?php if($doCache) {
	echo '<dwoo:dynamic_'.$dynamicId.'><?php echo insert_messages(\'loginbox\');?></dwoo:dynamic_'.$dynamicId.'>';
} else {
	echo insert_messages('loginbox');
}?>

	        <div id="loginform_container">
	            <?php echo (isset($this->scope["login_form"]) ? $this->scope["login_form"] : null);?>

	        </div>
	    </div>
	</div>
</div>
</div>

<?php echo Dwoo_Plugin_include($this, "footer.tpl", null, null, null, '_root', null);?>

<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>