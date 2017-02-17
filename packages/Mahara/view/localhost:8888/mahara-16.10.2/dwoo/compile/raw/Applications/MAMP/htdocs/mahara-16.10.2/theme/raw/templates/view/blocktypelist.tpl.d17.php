<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ;
if ((isset($this->scope["blocktypes"]) ? $this->scope["blocktypes"] : null)) {
?>
    <?php if ((isset($this->scope["javascript"]) ? $this->scope["javascript"] : null)) {
?>
    <div class='btn-group-vertical'>
    <?php 
}?>

        <?php 
$_fh0_data = (is_string($tmp=(isset($this->scope["blocktypes"]) ? $this->scope["blocktypes"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isTraversable($_fh0_data) == true)
{
	foreach ($_fh0_data as $this->scope['blocktype'])
	{
/* -- foreach start output */
?>
            <a class="blocktype-drag blocktypelink btn btn-default hide-title-collapsed text-left" href="#" title="<?php echo (is_string($tmp=$this->scope["blocktype"]["description"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
                <span class="icon icon-arrows icon-sm left move-indicator" role="presentation" aria-hidden="true"></span>
                <input type="radio" id="blocktype-list-radio-<?php echo (is_string($tmp=$this->scope["blocktype"]["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" class="blocktype-radio" name="blocktype" value="<?php echo (is_string($tmp=$this->scope["blocktype"]["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
                <?php if ((isset($this->scope["blocktype"]["cssicon"]) ? $this->scope["blocktype"]["cssicon"]:null)) {
?><span class="icon icon-<?php echo (is_string($tmp=$this->scope["blocktype"]["cssicon"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?> block-icon" title="<?php echo (is_string($tmp=$this->scope["blocktype"]["title"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" role="presentation" aria-hidden="true"></span><?php 
}
else {
?><img class="icon block-icon" src="<?php echo (is_string($tmp=$this->scope["blocktype"]["thumbnail_path"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" title="<?php echo (is_string($tmp=$this->scope["blocktype"]["description"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" alt="<?php echo (is_string($tmp=$this->scope["blocktype"]["description"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" width="14" height="14"><?php 
}?>

                <label for="blocktype-list-radio-<?php echo (is_string($tmp=$this->scope["blocktype"]["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" class="blocktypetitle title"><?php echo (is_string($tmp=$this->scope["blocktype"]["title"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></label>
                <span class="sr-only">(<?php echo (is_string($tmp=$this->scope["blocktype"]["description"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>)</span>
            </a>
        <?php 
/* -- foreach end output */
	}
}?>

    <?php if ((isset($this->scope["javascript"]) ? $this->scope["javascript"] : null)) {
?>
    </div>
    <?php 
}?>

<?php 
}?>

<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>