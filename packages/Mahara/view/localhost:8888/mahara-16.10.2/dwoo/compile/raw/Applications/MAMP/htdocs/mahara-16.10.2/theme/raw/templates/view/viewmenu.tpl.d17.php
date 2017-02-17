<?php
/* template head */
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
/* end template head */ ob_start(); /* template body */ ?><div id="add-comment" class="add-comment-container">
    <h4 id="add_feedback_heading">
        <span class="icon icon-comments left" role="presentation" aria-hidden="true"></span>
        <?php echo Dwoo_Plugin_str($this, 'addcomment', 'artefact.comment', null, null, null, null, null);?>

    </h4>

    <div class="addcommentform" id="comment-form">
        <?php echo (isset($this->scope["addfeedbackform"]) ? $this->scope["addfeedbackform"] : null);?>

    </div>
</div>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>