<?php
/* template head */
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
/* end template head */ ob_start(); /* template body */ ?><div class="bt-<?php echo (is_string($tmp=$this->scope["blocktype"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?> panel panel-secondary clearfix <?php if ((isset($this->scope["retractable"]) ? $this->scope["retractable"] : null)) {
?>collapsible<?php 
}?>" id="blockinstance_<?php echo (is_string($tmp=$this->scope["id"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
    <?php if ((isset($this->scope["title"]) ? $this->scope["title"] : null)) {
?>
        <h3 class="title panel-heading js-heading">
            <?php if ((isset($this->scope["retractable"]) ? $this->scope["retractable"] : null)) {
?>
            <a data-toggle="collapse" href="#blockinstance_<?php echo (is_string($tmp=$this->scope["id"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_target" aria-expanded="<?php if ((isset($this->scope["retractedonload"]) ? $this->scope["retractedonload"] : null)) {
?>false<?php 
}
else {
?>true<?php 
}?>" aria-controls="blockinstance_<?php echo (is_string($tmp=$this->scope["id"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_target" class="outer-link<?php if ((isset($this->scope["retractedonload"]) ? $this->scope["retractedonload"] : null)) {
?> collapsed<?php 
}?>"></a>
            <?php 
}?>


            <?php echo (is_string($tmp=$this->scope["title"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>

            <?php if ((isset($this->scope["feedlink"]) ? $this->scope["feedlink"] : null)) {
?>
                <a href="<?php echo (is_string($tmp=$this->scope["feedlink"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" class="secondary-link inner-link">
                    <span class="icon-rss icon icon-large mahara-rss-icon right" role="presentation" aria-hidden="true"></span>
                    <span class="sr-only">RSS</span>
                </a>
            <?php 
}?>



            <?php if ((isset($this->scope["retractable"]) ? $this->scope["retractable"] : null)) {
?>
            <span class="icon icon-chevron-up collapse-indicator pull-right inner-link" role="presentation" aria-hidden="true"></span>
            <?php 
}?>


        </h3>
    <?php 
}
else {
?>
        <?php if ((isset($this->scope["link"]) ? $this->scope["link"] : null)) {
?>
            <a href="<?php echo (is_string($tmp=$this->scope["link"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" class="text-default btn-default btn-sm pull-right">
                <?php echo Dwoo_Plugin_str($this, 'detailslinkalt', 'view', null, null, null, null, null);?>

            </a>
        <?php 
}?>

    <?php 
}?>


    <div class="<?php if (! (isset($this->scope["title"]) ? $this->scope["title"] : null)) {
?>no-heading <?php 
}?>block<?php if ((isset($this->scope["retractable"]) ? $this->scope["retractable"] : null)) {
?> collapse<?php if ((isset($this->scope["retractedonload"]) ? $this->scope["retractedonload"] : null)) {


}
else {
?> in<?php 
}

}?>"  id="blockinstance_<?php echo (is_string($tmp=$this->scope["id"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_target" <?php if ((isset($this->scope["loadbyajax"]) ? $this->scope["loadbyajax"] : null)) {
?>data-blocktype-ajax="<?php echo (is_string($tmp=$this->scope["id"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"<?php 
}
else {
?>data-blocktype-noajax="<?php echo (is_string($tmp=$this->scope["id"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"<?php 
}?>>
        <?php if (! (isset($this->scope["loadbyajax"]) ? $this->scope["loadbyajax"] : null)) {

echo (isset($this->scope["content"]) ? $this->scope["content"] : null);

}?>


        <?php if ((isset($this->scope["link"]) ? $this->scope["link"] : null) || (isset($this->scope["viewartefacturl"]) ? $this->scope["viewartefacturl"] : null)) {
?>

            <?php if ((isset($this->scope["link"]) ? $this->scope["link"] : null)) {
?>
                <a href="<?php echo (is_string($tmp=$this->scope["link"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" class="detail-link link-blocktype"><span class="icon icon-link" role="presentation" aria-hidden="true"></span> <?php echo Dwoo_Plugin_str($this, 'detailslinkalt', 'view', null, null, null, null, null);?></a>
            <?php 
}
elseif ((isset($this->scope["viewartefacturl"]) ? $this->scope["viewartefacturl"] : null)) {
?>
                <a href="<?php echo (is_string($tmp=$this->scope["viewartefacturl"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" class="detail-link link-blocktype"><span class="icon icon-link" role="presentation" aria-hidden="true"></span> <?php echo Dwoo_Plugin_str($this, 'detailslinkalt', 'view', null, null, null, null, null);?></a>
            <?php 
}?>

        <?php 
}?>

    </div>
</div>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>