<?php
/* template head */
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
if (function_exists('Dwoo_Plugin_escape')===false)
	$this->getLoader()->loadPlugin('escape');
/* end template head */ ob_start(); /* template body */ ?>                <?php 
$_fh0_data = (is_string($tmp=(isset($this->scope["views"]) ? $this->scope["views"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isTraversable($_fh0_data) == true)
{
	foreach ($_fh0_data as $this->scope['view'])
	{
/* -- foreach start output */
?>
                    <div class="list-group-item <?php if ((isset($this->scope["view"]["submittedto"]) ? $this->scope["view"]["submittedto"]:null)) {
?> list-group-item-warning <?php 
}?>">
                        <?php if (! (isset($this->scope["view"]["issitetemplate"]) ? $this->scope["view"]["issitetemplate"]:null)) {
?>
                            <a href="<?php echo (is_string($tmp=$this->scope["view"]["fullurl"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" class="outer-link"><span class="sr-only"><?php echo (is_string($tmp=$this->scope["view"]["displaytitle"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></span></a>
                        <?php 
}?>

                        <div class="row">
                            <div class="col-md-9">
                                <h3 class="title list-group-item-heading">
                                    <?php echo (is_string($tmp=$this->scope["view"]["displaytitle"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>

                                </h3>

                                <?php if ((isset($this->scope["view"]["submittedto"]) ? $this->scope["view"]["submittedto"]:null)) {
?>
                                    <div class="detail submitted-viewitem"><?php echo clean_html((isset($this->scope["view"]["submittedto"]) ? $this->scope["view"]["submittedto"]:null));?></div>
                                <?php 
}
elseif ((isset($this->scope["view"]["type"]) ? $this->scope["view"]["type"]:null) == 'profile') {
?>
                                    <div class="detail"><?php echo Dwoo_Plugin_str($this, 'profiledescription', 'mahara', null, null, null, null, null);?></div>
                                <?php 
}
elseif ((isset($this->scope["view"]["type"]) ? $this->scope["view"]["type"]:null) == 'dashboard') {
?>
                                    <div class="detail"><?php echo Dwoo_Plugin_str($this, 'dashboarddescription', 'mahara', null, null, null, null, null);?></div>
                                <?php 
}
elseif ((isset($this->scope["view"]["type"]) ? $this->scope["view"]["type"]:null) == 'grouphomepage') {
?>
                                    <div class="detail"><?php echo Dwoo_Plugin_str($this, 'grouphomepagedescription', 'view', null, null, null, null, null);?></div>
                                <?php 
}
elseif ((isset($this->scope["view"]["description"]) ? $this->scope["view"]["description"]:null)) {
?>
                                    <div class="detail">
                                    <?php if ((isset($this->scope["view"]["issitetemplate"]) ? $this->scope["view"]["issitetemplate"]:null) && (isset($this->scope["view"]["type"]) ? $this->scope["view"]["type"]:null) == 'portfolio') {
?>
                                       <?php echo preg_replace('#<[^>]*>#', ' ', (isset($this->scope["view"]["description"]) ? $this->scope["view"]["description"]:null));?>

                                    <?php 
}
else {
?>
                                       <?php echo preg_replace('#<[^>]*>#', ' ', str_shorten_html((isset($this->scope["view"]["description"]) ? $this->scope["view"]["description"]:null), 110, true));?>

                                    <?php 
}?>

                                    </div>
                                <?php 
}?>

                            </div>
                            <div class="col-md-3">
                                <div class="inner-link btn-action-list">
                                    <div class="btn-top-right btn-group btn-group-top">
                                        <?php if (! (isset($this->scope["view"]["submittedto"]) ? $this->scope["view"]["submittedto"]:null) && ( ! (isset($this->scope["view"]["locked"]) ? $this->scope["view"]["locked"]:null) || (isset($this->scope["editlocked"]) ? $this->scope["editlocked"] : null) )) {
?>
                                            <a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>view/blocks.php?id=<?php echo (is_string($tmp=$this->scope["view"]["id"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>&<?php echo (is_string($tmp=$this->scope["querystring"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" title="<?php echo Dwoo_Plugin_str($this, "editcontentandlayout", "view", null, null, null, null, null);?>" class="btn btn-default btn-xs">
                                                <span class="icon icon-pencil icon-lg" role="presentation" aria-hidden="true"></span>
                                                <span class="sr-only"><?php echo Dwoo_Plugin_escape($this, Dwoo_Plugin_str($this, 'editspecific', 'mahara', null, (isset($this->scope["view"]["displaytitle"]) ? $this->scope["view"]["displaytitle"]:null), null, null, null), 'html', null);?></span>
                                            </a>
                                        <?php 
}?>

                                        <?php if (! (isset($this->scope["view"]["submittedto"]) ? $this->scope["view"]["submittedto"]:null) && (isset($this->scope["view"]["removable"]) ? $this->scope["view"]["removable"]:null) && ( ! (isset($this->scope["view"]["locked"]) ? $this->scope["view"]["locked"]:null) || (isset($this->scope["editlocked"]) ? $this->scope["editlocked"] : null) )) {
?>
                                            <a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>view/delete.php?id=<?php echo (is_string($tmp=$this->scope["view"]["id"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>&<?php echo (is_string($tmp=$this->scope["querystring"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" title="<?php echo Dwoo_Plugin_str($this, 'deletethisview', 'view', null, null, null, null, null);?>" class="btn btn-default btn-xs">
                                                <span class="icon icon-lg icon-trash text-danger" role="presentation" aria-hidden="true"></span>
                                                <span class="sr-only"><?php echo Dwoo_Plugin_escape($this, Dwoo_Plugin_str($this, 'deletespecific', 'mahara', null, (isset($this->scope["view"]["displaytitle"]) ? $this->scope["view"]["displaytitle"]:null), null, null, null), 'html', null);?></span>
                                            </a>
                                        <?php 
}?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php 
/* -- foreach end output */
	}
}?>

<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>