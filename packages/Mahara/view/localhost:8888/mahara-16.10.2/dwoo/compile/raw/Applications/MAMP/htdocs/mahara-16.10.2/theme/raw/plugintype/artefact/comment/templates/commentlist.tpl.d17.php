<?php
/* template head */
if (class_exists('Dwoo_Plugin_cycle', false)===false)
	$this->getLoader()->loadPlugin('cycle');
if (function_exists('Dwoo_Plugin_profile_icon_url')===false)
	$this->getLoader()->loadPlugin('profile_icon_url');
if (function_exists('Dwoo_Plugin_display_default_name')===false)
	$this->getLoader()->loadPlugin('display_default_name');
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
if (function_exists('Dwoo_Plugin_display_name')===false)
	$this->getLoader()->loadPlugin('display_name');
/* end template head */ ob_start(); /* template body */ ?><!-- The "feedbacktable" class is used as an identifier by Javascript -->
<div class="list-group list-group-lite">
<?php 
$_fh1_data = (is_string($tmp=(isset($this->scope["data"]) ? $this->scope["data"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isTraversable($_fh1_data) == true)
{
	foreach ($_fh1_data as $this->scope['item'])
	{
/* -- foreach start output */
?>
    <div id="comment<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'id',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["item"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" class="comment-item list-group-item <?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'pubmessage',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["item"]) ? $this->scope["item"]:null), true)) {
?>list-group-item-warning<?php 
}
elseif ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'deletedmessage',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["item"]) ? $this->scope["item"]:null), true)) {
?>deleted <?php 
}?> <?php echo $this->classCall('cycle', array('rows', 'r0,r1', true, true, ',', null, false));?> <?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'indent',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["item"]) ? $this->scope["item"]:null), true)) {
?> indent-<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'indent',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["item"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);

}?> <?php if (! $this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'deletedmessage',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["item"]) ? $this->scope["item"]:null), true) && $this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'attachments',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["item"]) ? $this->scope["item"]:null), true)) {
?>has-attachment<?php 
}?>">
        <div class="usericon-heading">
            <span class="user-icon pull-left" role="presentation" aria-hidden="true">
                <?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'author',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["item"]) ? $this->scope["item"]:null), true)) {
?>
                    <img src="<?php echo Dwoo_Plugin_profile_icon_url($this, (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'author',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["item"]) ? $this->scope["item"]:null), true)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), 40, 40);?>" valign="middle" alt="<?php echo Dwoo_Plugin_str($this, 'profileimagetext', 'mahara', null, Dwoo_Plugin_display_default_name($this, (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'author',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["item"]) ? $this->scope["item"]:null), true)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)), null, null, null);?>"/>
                <?php 
}
else {
?>
                    <img src="<?php echo Dwoo_Plugin_profile_icon_url($this, null, 40, 40);?>" valign="middle" alt="<?php echo Dwoo_Plugin_str($this, 'profileimagetextanonymous', 'mahara', null, null, null, null, null);?>"/>
                <?php 
}?>

            </span>
            <h5 class="pull-left list-group-item-heading">
                <?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'author',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["item"]) ? $this->scope["item"]:null), true)) {
?>
                <a href="<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',    1 => '->',  ),  2 =>   array (    0 => 'author',    1 => 'profileurl',  ),  3 =>   array (    0 => '',    1 => '',    2 => '',  ),), $this->scope["item"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
                <span><?php echo Dwoo_Plugin_display_name($this, (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'author',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["item"]) ? $this->scope["item"]:null), true)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), null, false, false);?></span>
                </a>
                <?php 
}
else {
?>
                <span><?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'authorname',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["item"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></span>
                <?php 
}?>

                <br />

                <span class="postedon text-small">
                <?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'date',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["item"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>

                <?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'updated',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["item"]) ? $this->scope["item"]:null), true)) {
?>
                    <p class="metadata">[<?php echo Dwoo_Plugin_str($this, 'Updated', 'mahara', null, null, null, null, null);?>: <?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'updated',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["item"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>]</p>
                <?php 
}?>

                </span>
                <?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'ratingdata',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["item"]) ? $this->scope["item"]:null), true)) {
?>

                <span class="star-comment-rating">
                    <?php 
$_for0_from = (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',    1 => '->',  ),  2 =>   array (    0 => 'ratingdata',    1 => 'min_rating',  ),  3 =>   array (    0 => '',    1 => '',    2 => '',  ),), (isset($this->scope["item"]) ? $this->scope["item"]:null), true)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
$_for0_to = (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',    1 => '->',  ),  2 =>   array (    0 => 'ratingdata',    1 => 'max_rating',  ),  3 =>   array (    0 => '',    1 => '',    2 => '',  ),), (isset($this->scope["item"]) ? $this->scope["item"]:null), true)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
$_for0_step = abs(1);
if (is_numeric($_for0_from) && !is_numeric($_for0_to)) { $this->triggerError('For requires the <em>to</em> parameter when using a numerical <em>from</em>'); }
$tmp_shows = $this->isArray($_for0_from, true) || (is_numeric($_for0_from) && (abs(($_for0_from - $_for0_to)/$_for0_step) !== 0 || $_for0_from == $_for0_to));
if ($tmp_shows)
{
	if ($this->isArray($_for0_from) == true) {
		$_for0_to = is_numeric($_for0_to) ? $_for0_to - $_for0_step : $this->count($_for0_from) - 1;
		$_for0_from = 0;
	}
	if ($_for0_from > $_for0_to) {
				$tmp = $_for0_from;
				$_for0_from = $_for0_to;
				$_for0_to = $tmp;
			}
	for ($this->scope['i'] = $_for0_from; $this->scope['i'] <= $_for0_to; $this->scope['i'] += $_for0_step)
	{
/* -- for start output */
?>
                        <div class="star-rating star star-rating-applied star-rating-readonly <?php echo (is_string($tmp=$this->scope["star"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>-rating<?php if ((isset($this->scope["i"]) ? $this->scope["i"] : null) <= $this->readVarInto(array (  1 =>   array (    0 => '->',    1 => '->',  ),  2 =>   array (    0 => 'ratingdata',    1 => 'value',  ),  3 =>   array (    0 => '',    1 => '',    2 => '',  ),), (isset($this->scope["item"]) ? $this->scope["item"]:null), true)) {
?>-on<?php 
}
else {
?>-off<?php 
}?>"><a <?php if ((isset($this->scope["colour"]) ? $this->scope["colour"] : null)) {
?>style="color: <?php echo (is_string($tmp=$this->scope["colour"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"<?php 
}?>>&nbsp;</a></div>
                    <?php /* -- for end output */
	}
}
?>

                </span>
                <?php 
}?>

            </h5>
            <!-- The "comment-item-buttons" class is used as an identifier by Javascript -->
            <div class="btn-group btn-group-top comment-item-buttons">
                <?php if (! (isset($this->scope["onview"]) ? $this->scope["onview"] : null)) {
?>
                    <?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'canedit',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["item"]) ? $this->scope["item"]:null), true)) {
?>
                    <a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>artefact/comment/edit.php?id=<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'id',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["item"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>&amp;view=<?php echo (is_string($tmp=$this->scope["viewid"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" class="btn btn-default btn-group-item form-as-button pull-left">
                        <span class="icon icon-pencil icon-lg" role="presentation" aria-hidden="true"></span>
                        <span class="sr-only"><?php echo Dwoo_Plugin_str($this, 'edit', 'mahara', null, null, null, null, null);?></span>
                    </a>
                    <?php 
}?>

                <?php 
}?>

                <?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'deleteform',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["item"]) ? $this->scope["item"]:null), true)) {
?>
                    <?php echo $this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'deleteform',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["item"]) ? $this->scope["item"]:null), true);?>

                <?php 
}?>

                <?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'canreply',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["item"]) ? $this->scope["item"]:null), true)) {
?>
                <button class="btn btn-default pull-left commentreplyto btn-group-item js-reply" id="commentreplyto<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'id',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["item"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" title="<?php echo Dwoo_Plugin_str($this, 'reply', 'artefact.comment', null, null, null, null, null);?>" data-replyto="<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'id',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["item"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" data-canprivatereply="<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'canprivatereply',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["item"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" data-canpublicreply="<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'canpublicreply',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["item"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
                    <span class="icon icon-reply icon-lg" role="presentation" aria-hidden="true"></span>
                    <span class="sr-only"><?php echo Dwoo_Plugin_str($this, 'reply', 'artefact.comment', null, null, null, null, null);?></span>
                </button>
                <?php 
}?>

            </div>
        </div>
        <div class="comment-text">
            <div class="comment-content">
                <?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'deletedmessage',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["item"]) ? $this->scope["item"]:null), true)) {
?>
                    <span class="metadata">
                        <?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'deletedmessage',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["item"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>

                    </span>
                <?php 
}
else {
?>
                    <?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'author',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["item"]) ? $this->scope["item"]:null), true)) {
?>
                        <?php echo clean_html($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'description',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["item"]) ? $this->scope["item"]:null), true));?>

                    <?php 
}
else {
?>
                        <?php echo $this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'description',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["item"]) ? $this->scope["item"]:null), true);?>

                    <?php 
}?>

                <?php 
}?>

            </div>

            <?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'makepublicform',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["item"]) ? $this->scope["item"]:null), true) || ( $this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'makepublicrequested',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["item"]) ? $this->scope["item"]:null), true) && ! $this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'deletedmessage',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["item"]) ? $this->scope["item"]:null), true) )) {
?>
            <div class="metadata">
                <?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'pubmessage',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["item"]) ? $this->scope["item"]:null), true)) {
?>
                <em class="privatemessage"> <?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'pubmessage',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["item"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>

                </em> -
                <?php 
}?>


                <?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'makepublicform',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["item"]) ? $this->scope["item"]:null), true)) {
?>
                    <?php echo $this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'makepublicform',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["item"]) ? $this->scope["item"]:null), true);?>

                <?php 
}?>


                <?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'makepublicrequested',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["item"]) ? $this->scope["item"]:null), true) && ! $this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'deletedmessage',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["item"]) ? $this->scope["item"]:null), true)) {
?>
                    <span class="icon icon-lock text-default left" role="presentation" aria-hidden="true"></span>
                    <span><?php echo Dwoo_Plugin_str($this, 'youhaverequestedpublic', 'artefact.comment', null, null, null, null, null);?></span>
                <?php 
}?>

            </div>
            <?php 
}?>

        </div>

        <?php if (! $this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'deletedmessage',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["item"]) ? $this->scope["item"]:null), true) && $this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'attachments',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["item"]) ? $this->scope["item"]:null), true)) {
?>
        <div class="comment-attachment">
            <div class="panel panel-default has-attachment collapsible">
                <h4 class="panel-heading">
                    <a class="collapsible collapsed" aria-expanded="false" href="#attachments_<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'id',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["item"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" data-toggle="collapse">
                        <span class="icon left icon-paperclip" role="presentation" aria-hidden="true"></span>
                        <span class="text-small"><?php echo Dwoo_Plugin_str($this, 'Attachments', 'artefact.comment', null, null, null, null, null);?> (<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'filescount',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["item"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>)</span>
                        <span class="icon icon-chevron-down pull-right collapse-indicator" role="presentation" aria-hidden="true"></span>
                    </a>
                </h4>
                <div id="attachments_<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'id',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["item"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" class="collapse" aria-expanded="false">
                    <ul class=" list-group list-group-unbordered">
                    <?php $_fh0_data = (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'attachments',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["item"]) ? $this->scope["item"]:null), true)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);if ($this->isTraversable($_fh0_data) == true){foreach ($_fh0_data as $this->scope['a']){/* -- foreach start output */?><li class="list-group-item"><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>artefact/file/download.php?file=<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'attachid',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["a"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>&comment=<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'id',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["item"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>&view=<?php echo (is_string($tmp=$this->scope["viewid"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" class="outer-link icon-on-hover"><span class="sr-only"><?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'attachtitle',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["a"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></span></a><span class="title"><?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'attachtitle',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["a"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?><span class="attachsize metadata">[<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'attachsize',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["a"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>]</span></span><span class="icon icon-download icon-lg pull-right text-watermark icon-action" role="presentation" aria-hidden="true"></span></li><?php /* -- foreach end output */}}?>

                    </ul>
                </div>
            </div>
            <?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'attachmessage',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["item"]) ? $this->scope["item"]:null), true)) {
?>
                <em class="attachmessage metadata"><?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'attachmessage',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["item"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></em>
            <?php 
}?>

        </div>
        <?php 
}?>

    </div>
<?php 
/* -- foreach end output */
	}
}?>

</div>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>