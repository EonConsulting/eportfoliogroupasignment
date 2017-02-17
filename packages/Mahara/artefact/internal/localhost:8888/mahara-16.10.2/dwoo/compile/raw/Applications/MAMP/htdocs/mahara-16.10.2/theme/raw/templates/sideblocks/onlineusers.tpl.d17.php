<?php
/* template head */
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
if (function_exists('Dwoo_Plugin_display_default_name')===false)
	$this->getLoader()->loadPlugin('display_default_name');
if (function_exists('Dwoo_Plugin_display_name')===false)
	$this->getLoader()->loadPlugin('display_name');
/* end template head */ ob_start(); /* template body */ ?><div class="panel panel-default">
    <h3 class="panel-heading">
        <?php echo Dwoo_Plugin_str($this, "onlineusers", 'mahara', (is_string($tmp=(isset($this->scope["sbdata"]["count"]) ? $this->scope["sbdata"]["count"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), null, null, null, null);?>

        <br>
        <span id="lastminutes" class="text-small text-midtone">(<?php echo Dwoo_Plugin_str($this, "lastminutes", 'mahara', (is_string($tmp=(isset($this->scope["sbdata"]["lastminutes"]) ? $this->scope["sbdata"]["lastminutes"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), null, null, null, null);?>)</span>
    </h3>
    <ul class="list-group">
        <?php 
$_fh9_data = (is_string($tmp=(isset($this->scope["sbdata"]["users"]) ? $this->scope["sbdata"]["users"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isTraversable($_fh9_data) == true)
{
	foreach ($_fh9_data as $this->scope['user'])
	{
/* -- foreach start output */
?>
            <li class="list-group-item list-unstyled list-group-item-link">
                <a href="<?php echo profile_url((is_string($tmp=(isset($this->scope["user"]) ? $this->scope["user"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp));?>" class="">
                    <span class="user-icon">
                        <img src="<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'profileiconurl',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["user"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" alt="<?php echo Dwoo_Plugin_str($this, 'profileimagetext', 'mahara', null, Dwoo_Plugin_display_default_name($this, (is_string($tmp=(isset($this->scope["user"]) ? $this->scope["user"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)), null, null, null);?>" class="profile-icon-container">
                    </span>
                    <?php echo Dwoo_Plugin_display_name($this, (is_string($tmp=(isset($this->scope["user"]) ? $this->scope["user"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), null, false, false);?>

                <?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'loggedinfrom',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["user"]) ? $this->scope["user"]:null), true)) {
?> (<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'loggedinfrom',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["user"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>)<?php 
}?>

                </a>
            </li>
        <?php 
/* -- foreach end output */
	}
}?>

    </ul>
    <a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>user/online.php" class="online-users panel-footer text-small" id="allonline">
        <?php echo Dwoo_Plugin_str($this, "allonline", 'mahara', null, null, null, null, null);?>

        <span class="icon icon-arrow-circle-right pull-right" role="presentation" aria-hidden="true"></span>
    </a>
</div>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>