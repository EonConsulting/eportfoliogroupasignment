<?php
/* template head */
if (function_exists('Dwoo_Plugin_include')===false)
	$this->getLoader()->loadPlugin('include');
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
if (function_exists('Dwoo_Plugin_list_tags')===false)
	$this->getLoader()->loadPlugin('list_tags');
/* end template head */ ob_start(); /* template body */ ;
echo Dwoo_Plugin_include($this, "header.tpl", null, null, null, '_root', null);?>


<?php if ((isset($this->scope["collection"]) ? $this->scope["collection"] : null)) {
?>
    <?php echo Dwoo_Plugin_include($this, 'collectionnav.tpl', null, null, null, '_root', null);?>

<?php 
}?>


<?php if ((isset($this->scope["notrudeform"]) ? $this->scope["notrudeform"] : null)) {
?>
    <div class="alert alert-danger">
    <?php echo (isset($this->scope["notrudeform"]) ? $this->scope["notrudeform"] : null);?>

    </div>
<?php 
}?>


<?php if ((isset($this->scope["maintitle"]) ? $this->scope["maintitle"] : null)) {
?>
<h1 id="viewh1" class="page-header">
    <?php if ((isset($this->scope["title"]) ? $this->scope["title"] : null)) {
?>
        <span class="subsection-heading"><?php echo (isset($this->scope["title"]) ? $this->scope["title"] : null);?></span>
    <?php 
}
else {
?>
        <span class="section-heading"><?php echo (isset($this->scope["maintitle"]) ? $this->scope["maintitle"] : null);?></span>
    <?php 
}?>

</h1>
<?php 
}?>


<div class="btn-group btn-group-top">
    <?php if ((isset($this->scope["editurl"]) ? $this->scope["editurl"] : null)) {

if ((isset($this->scope["new"]) ? $this->scope["new"] : null)) {?><a class="btn btn-default" href="<?php echo (is_string($tmp=$this->scope["editurl"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><?php echo Dwoo_Plugin_str($this, 'back', 'mahara', null, null, null, null, null);?></a><?php }
else {?><a title="<?php echo Dwoo_Plugin_str($this, 'editthisview', 'view', null, null, null, null, null);?>" href="<?php echo (is_string($tmp=$this->scope["editurl"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" class="btn btn-default"><span class="icon icon-pencil icon-lg left" role="presentation" aria-hidden="true"></span><?php echo Dwoo_Plugin_str($this, 'editthisview', 'view', null, null, null, null, null);?></a><?php }

}?>


    <?php if ((isset($this->scope["copyurl"]) ? $this->scope["copyurl"] : null)) {
?><a id="copyview-button" title="<?php echo Dwoo_Plugin_str($this, 'copythisview', 'view', null, null, null, null, null);?>" href="<?php echo (is_string($tmp=$this->scope["copyurl"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" class="btn btn-default"><span class="icon icon-files-o icon-lg left" role="presentation" aria-hidden="true"></span><?php echo Dwoo_Plugin_str($this, 'copy', 'mahara', null, null, null, null, null);?></a><?php 
}?>


    <?php if ((isset($this->scope["mnethost"]) ? $this->scope["mnethost"] : null)) {
?>
    <a href="<?php echo (is_string($tmp=$this->scope["mnethost"]["url"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" class="btn btn-default">
        <span class="icon icon-long-arrow-right icon-lg left" role="presentation" aria-hidden="true"></span>
        <?php echo Dwoo_Plugin_str($this, 'backto', 'mahara', null, (is_string($tmp=(isset($this->scope["mnethost"]["name"]) ? $this->scope["mnethost"]["name"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), null, null, null);?>

    </a>
    <?php 
}?>


    <?php if ((isset($this->scope["LOGGEDIN"]) ? $this->scope["LOGGEDIN"] : null) && ! (isset($this->scope["userisowner"]) ? $this->scope["userisowner"] : null)) {
?>
    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
        <span class="icon icon-ellipsis-h icon-lg" role="presentation" aria-hidden="true"></span>
        <span class="sr-only"><?php echo Dwoo_Plugin_str($this, "more...", 'mahara', null, null, null, null, null);?></span>
    </button>
    <ul class="dropdown-menu dropdown-menu-right" role="menu">
        <li>
            <a id="toggle_watchlist_link" class="watchlist" href="">
                <?php if ((isset($this->scope["viewbeingwatched"]) ? $this->scope["viewbeingwatched"] : null)) {
?>
                <span class="icon icon-eye-slash left" role="presentation" aria-hidden="true"></span>
                <?php echo Dwoo_Plugin_str($this, 'removefromwatchlist', 'view', null, null, null, null, null);?>

                <?php 
}
else {
?>
                <span class="icon icon-eye left" role="presentation" aria-hidden="true"></span>
                <?php echo Dwoo_Plugin_str($this, 'addtowatchlist', 'view', null, null, null, null, null);?>

                <?php 
}?>

            </a>
        </li>
        <li>
            <a id="objection_link" href="#" data-toggle="modal" data-target="#report-form">
                <span class="icon icon-lg icon-flag text-danger left" role="presentation" aria-hidden="true"></span>
                <?php echo Dwoo_Plugin_str($this, 'reportobjectionablematerial', 'mahara', null, null, null, null, null);?>

            </a>
        </li>
    </ul>
    <?php 
}?>

</div>

<div class="with-heading text-small">
    <?php echo Dwoo_Plugin_include($this, 'author.tpl', null, null, null, '_root', null);?>


    <?php if ((isset($this->scope["tags"]) ? $this->scope["tags"] : null)) {
?>
    <div class="tags">
        <strong><?php echo Dwoo_Plugin_str($this, 'tags', 'mahara', null, null, null, null, null);?>:</strong>
        <?php echo Dwoo_Plugin_list_tags($this, (is_string($tmp=(isset($this->scope["tags"]) ? $this->scope["tags"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), (is_string($tmp=(isset($this->scope["owner"]) ? $this->scope["owner"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp));?>

    </div>
    <?php 
}?>

</div>

<div id="view-description" class="view-description">
    <?php echo clean_html((isset($this->scope["viewdescription"]) ? $this->scope["viewdescription"] : null));?>

</div>

<div id="view" class="view-container">
    <div id="bottom-pane">
        <div id="column-container" class="user-page-content">
            <?php echo (isset($this->scope["viewcontent"]) ? $this->scope["viewcontent"] : null);?>

        </div>
    </div>
    <div class="viewfooter view-container">
        <?php if ((isset($this->scope["releaseform"]) ? $this->scope["releaseform"] : null)) {
?>
        <div class="releaseviewform alert alert-warning clearfix">
            <?php echo (isset($this->scope["releaseform"]) ? $this->scope["releaseform"] : null);?>

        </div>
        <?php 
}?>


        <?php if ((isset($this->scope["view_group_submission_form"]) ? $this->scope["view_group_submission_form"] : null)) {
?>
        <div class="submissionform alert alert-default">
            <?php echo (isset($this->scope["view_group_submission_form"]) ? $this->scope["view_group_submission_form"] : null);?>

        </div>
        <?php 
}?>


        <?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'position',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["feedback"]) ? $this->scope["feedback"]:null), true) == 'base') {
?>
        <div class="comment-container">
            <?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'count',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["feedback"]) ? $this->scope["feedback"]:null), true) || (isset($this->scope["enablecomments"]) ? $this->scope["enablecomments"] : null)) {
?>
            <h3 class="title">
                <?php echo Dwoo_Plugin_str($this, "Comments", "artefact.comment", null, null, null, null, null);?>

            </h3>
            <?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'count',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["feedback"]) ? $this->scope["feedback"]:null), true) == 0) {
?>
            <hr />
            <?php 
}?>

            <div id="feedbacktable" class="feedbacktable js-feedbackbase fullwidth">
                <?php echo $this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'tablerows',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["feedback"]) ? $this->scope["feedback"]:null), true);?>

            </div>
            <?php echo $this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'pagination',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["feedback"]) ? $this->scope["feedback"]:null), true);?>

            <?php 
}?>


            <?php if ((isset($this->scope["enablecomments"]) ? $this->scope["enablecomments"] : null)) {
?>
                <?php echo Dwoo_Plugin_include($this, "view/viewmenu.tpl", null, null, null, '_root', null);?>

            <?php 
}?>

        </div>
        <?php 
}?>


        <?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'position',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["feedback"]) ? $this->scope["feedback"]:null), true) == 'blockinstance' && (isset($this->scope["enablecomments"]) ? $this->scope["enablecomments"] : null)) {
?>
        <div class="feedback modal modal-docked" id="feedback-form">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" data-dismiss="modal-docked" aria-label="Close">
                            <span class="times">&times;</span>
                            <span class="sr-only"><?php echo Dwoo_Plugin_str($this, 'Close', 'mahara', null, null, null, null, null);?></span>
                        </button>
                        <h4 class="modal-title">
                            <span class="icon icon-lg icon-comments left" role="presentation" aria-hidden="true"></span>
                            <?php echo Dwoo_Plugin_str($this, 'addcomment', 'artefact.comment', null, null, null, null, null);?>

                        </h4>
                    </div>
                    <div class="modal-body">
                        <?php echo (isset($this->scope["addfeedbackform"]) ? $this->scope["addfeedbackform"] : null);?>

                    </div>
                </div>
            </div>
        </div>
        <?php 
}?>


        <?php if ((isset($this->scope["LOGGEDIN"]) ? $this->scope["LOGGEDIN"] : null)) {
?>
        <div class="modal fade" id="report-form">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">
                            <span class="icon icon-lg icon-flag text-danger left" role="presentation" aria-hidden="true"></span>
                            <?php echo Dwoo_Plugin_str($this, 'reportobjectionablematerial', 'mahara', null, null, null, null, null);?>

                        </h4>
                    </div>
                    <div class="modal-body">
                        <?php echo (isset($this->scope["objectionform"]) ? $this->scope["objectionform"] : null);?>

                    </div>
                </div>
            </div>
        </div>
        <?php 
}?>

        <div class="modal fade" id="copyview-form">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">
                            <span class="icon icon-lg icon-flag text-danger left" role="presentation" aria-hidden="true"></span>
                            <?php echo Dwoo_Plugin_str($this, 'confirmcopytitle', 'view', null, null, null, null, null);?>

                        </h4>
                    </div>
                    <div class="modal-body">
                        <p><?php echo Dwoo_Plugin_str($this, 'confirmcopydesc', 'view', null, null, null, null, null);?></p>
                        <div class="btn-group">
                            <button id="copy-collection-button" type="button" class="btn btn-default"><span class="icon icon-folder-open" role="presentation" aria-hidden="true"></span> <?php echo Dwoo_Plugin_str($this, 'Collection', 'collection', null, null, null, null, null);?></button>
                            <button id="copy-view-button" type="button" class="btn btn-default"><span class="icon icon-file-text " role="presentation" aria-hidden="true"></span> <?php echo Dwoo_Plugin_str($this, 'view', 'mahara', null, null, null, null, null);?></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php if ((isset($this->scope["visitstring"]) ? $this->scope["visitstring"] : null)) {
?>
<div class="metadata text-right">
    <?php echo (is_string($tmp=$this->scope["visitstring"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>

</div>
<?php 
}?>

<?php echo Dwoo_Plugin_include($this, "footer.tpl", null, null, null, '_root', null);?>

<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>