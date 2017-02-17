<?php
/* template head */
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
if (function_exists('Dwoo_Plugin_truncate')===false)
	$this->getLoader()->loadPlugin('truncate');
/* end template head */ ob_start(); /* template body */ ;
if (! (isset($this->scope["items"]) ? $this->scope["items"] : null)) {
?>
    <div class="panel-body">
        <p class="lead text-small"><?php echo Dwoo_Plugin_str($this, 'nomessages', 'blocktype.inbox', null, null, null, null, null);?></p>
    </div>
<?php 
}
else {
?>
    <div id="inboxblock" class="inboxblock list-group">
        <?php 
$_fh3_data = (is_string($tmp=(isset($this->scope["items"]) ? $this->scope["items"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isTraversable($_fh3_data) == true)
{
	foreach ($_fh3_data as $this->scope['i'])
	{
/* -- foreach start output */
?>
        <div class="has-attachment panel-default collapsible list-group-item">
            <?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'message',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["i"]) ? $this->scope["i"]:null), true)) {
?>
                <a class="collapsed link-block<?php if (! $this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'read',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["i"]) ? $this->scope["i"]:null), true)) {
?> unread<?php 
}?>" data-toggle="collapse" href="#message_content_<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'type',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["i"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'id',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["i"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" aria-expanded="false">
                    <?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'type',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["i"]) ? $this->scope["i"]:null), true) == 'usermessage') {
?>
                        <span class="icon icon-envelope text-default left" role="presentation" aria-hidden="true"></span>
                    <?php 
}
elseif ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'type',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["i"]) ? $this->scope["i"]:null), true) == 'institutionmessage') {
?>
                        <span class="icon icon-university text-default left" role="presentation" aria-hidden="true"></span>
                    <?php 
}
elseif ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'type',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["i"]) ? $this->scope["i"]:null), true) == 'feedback') {
?>
                        <span class="icon icon-comments text-default left" role="presentation" aria-hidden="true"></span>
                    <?php 
}
elseif ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'type',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["i"]) ? $this->scope["i"]:null), true) == 'annotationfeedback') {
?>
                        <span class="icon icon-comments-o text-default left" role="presentation" aria-hidden="true"></span>
                    <?php 
}
elseif ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'type',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["i"]) ? $this->scope["i"]:null), true) == 'wallpost') {
?>
                        <span class="icon icon-wall text-default left" role="presentation" aria-hidden="true"></span>
                    <?php 
}
else {
?>
                        <span class="icon icon-wrench text-default left" role="presentation" aria-hidden="true"></span>
                    <?php 
}?>

                    <span class="sr-only"><?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'strtype',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["item"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></span>
                    <?php echo Dwoo_Plugin_truncate($this, (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'subject',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["i"]) ? $this->scope["i"]:null), true)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), 50, '...', false, false, 'UTF-8');?>

                    <span class="icon icon-chevron-down collapse-indicator pull-right text-small" role="presentation" aria-hidden="true"></span>
                </a>
            <?php 
}?>

            <div class="collapse" id="message_content_<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'type',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["i"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'id',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["i"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
                <?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'message',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["i"]) ? $this->scope["i"]:null), true)) {
?>
                    <p class="content-text"><?php echo $this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'message',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["i"]) ? $this->scope["i"]:null), true);?></p>
                    <?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'url',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["i"]) ? $this->scope["i"]:null), true)) {
?>
                    <a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'url',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["i"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" class="text-small">
                        <?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'urltext',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["i"]) ? $this->scope["i"]:null), true)) {

echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'urltext',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["i"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);

}
else {

echo Dwoo_Plugin_str($this, "more...", 'mahara', null, null, null, null, null);

}?> <span class="icon icon-arrow-right mls icon-sm" role="presentation" aria-hidden="true"></span>
                    </a>
                    <?php 
}?>

                    <?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'canreplyall',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["i"]) ? $this->scope["i"]:null), true)) {
?>
                    <a title="<?php echo Dwoo_Plugin_str($this, 'replyall', 'module.multirecipientnotification', null, null, null, null, null);?>" href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>module/multirecipientnotification/sendmessage.php?replyto=<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'id',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["i"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>&returnto=outbox" class="text-small">
                        <span class="icon icon-reply-all icon-sm left" role="presentation" aria-hidden="true"></span>
                        <?php echo Dwoo_Plugin_str($this, 'replyall', 'module.multirecipientnotification', null, null, null, null, null);?>

                    </a>
                    <?php 
}
elseif ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'canreply',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["i"]) ? $this->scope["i"]:null), true)) {
?>
                        <a title="<?php echo Dwoo_Plugin_str($this, 'reply', 'module.multirecipientnotification', null, null, null, null, null);?>" href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>module/multirecipientnotification/sendmessage.php?id=<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'fromusr',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["i"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if (! $this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'startnewthread',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["i"]) ? $this->scope["i"]:null), true)) {
?>&replyto=<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'id',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["i"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);

}?>&returnto=outbox" class="text-small">
                            <span class="icon icon icon-reply left icon-sm" role="presentation" aria-hidden="true"></span>
                            <?php echo Dwoo_Plugin_str($this, 'reply', 'module.multirecipientnotification', null, null, null, null, null);?>

                        </a>
                    <?php 
}?>

                <?php 
}
elseif ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'url',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["i"]) ? $this->scope["i"]:null), true)) {
?>
                    <a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'url',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["i"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" class="text-small"><?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'subject',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["i"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></a>
                <?php 
}
else {
?>
                    <?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'subject',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["i"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>

                <?php 
}?>

            </div>
        </div>
        <?php 
/* -- foreach end output */
	}
}?>

    </div>
    <?php if ((isset($this->scope["morelink"]) ? $this->scope["morelink"] : null)) {
?>
    <div class="artefact-detail-link">
        <a class="link-blocktype last" href="<?php echo (is_string($tmp=$this->scope["morelink"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
        <span class="icon icon-arrow-circle-right" role="presentation" aria-hidden="true"></span>
        <?php echo Dwoo_Plugin_str($this, 'More', 'blocktype.inbox', null, null, null, null, null);?></a>
    </div>
    <?php 
}?>

<?php 
}?>

<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>