<?php
/* template head */
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
/* end template head */ ob_start(); /* template body */ ?><div class="commentreplyview feedbacktable">
    <div class="hidden replyto" id="comment_reply_parent">
        <h4><?php echo Dwoo_Plugin_str($this, "replyto", "artefact.comment", null, null, null, null, null);?></h4>
    </div>
</div>
<div class="hidden add_feedback_form_forcepublic_message add_feedback_form_privacy_message">
    <?php echo Dwoo_Plugin_str($this, "forcepubliccomment", "artefact.comment", null, null, null, null, null);?>

</div>
<div class="hidden add_feedback_form_forceprivate_message add_feedback_form_privacy_message">
    <?php echo Dwoo_Plugin_str($this, "forceprivatecomment", "artefact.comment", null, null, null, null, null);?>

</div>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>