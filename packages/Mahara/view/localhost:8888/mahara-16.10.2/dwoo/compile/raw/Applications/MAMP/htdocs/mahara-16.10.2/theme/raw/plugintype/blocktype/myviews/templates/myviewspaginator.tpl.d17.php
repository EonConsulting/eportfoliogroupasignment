<?php
/* template head */
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
if (function_exists('Dwoo_Plugin_list_tags')===false)
	$this->getLoader()->loadPlugin('list_tags');
/* end template head */ ob_start(); /* template body */ ;

$_fh2_data = (is_string($tmp=(isset($this->scope["items"]) ? $this->scope["items"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isTraversable($_fh2_data) == true)
{
	foreach ($_fh2_data as $this->scope['view'])
	{
/* -- foreach start output */
?>
    <div class="list-group-item">
        <a href="<?php echo (is_string($tmp=$this->scope["view"]["fullurl"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" class="outer-link">
            <span class="sr-only"><?php echo (is_string($tmp=$this->scope["view"]["title"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></span>
        </a>

        <h4 class="title list-group-item-heading text-inline">
            <a href="<?php echo (is_string($tmp=$this->scope["view"]["fullurl"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><?php echo (is_string($tmp=$this->scope["view"]["title"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></a>
        </h4>

        <?php if ((isset($this->scope["view"]["collid"]) ? $this->scope["view"]["collid"]:null)) {
?>
        <span class="text-small text-midtone">
            (<?php echo Dwoo_Plugin_str($this, 'nviews', 'view', null, (is_string($tmp=(isset($this->scope["view"]["numpages"]) ? $this->scope["view"]["numpages"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), null, null, null);?>)
        </span>
        <?php 
}?>

        
        <?php if ((isset($this->scope["view"]["description"]) ? $this->scope["view"]["description"]:null)) {
?>
        <div class="list-group-item-text text-small">
            <?php echo preg_replace('#<[^>]*>#', ' ', str_shorten_html((isset($this->scope["view"]["description"]) ? $this->scope["view"]["description"]:null), 100, true));?>

        </div>
        <?php 
}?>


        <?php if ((isset($this->scope["item"]["tags"]) ? $this->scope["item"]["tags"]:null)) {
?>
        <div class="tags">
            <strong><?php echo Dwoo_Plugin_str($this, 'tags', 'mahara', null, null, null, null, null);?>:</strong> <?php echo Dwoo_Plugin_list_tags($this, (is_string($tmp=(isset($this->scope["view"]["tags"]) ? $this->scope["view"]["tags"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), (is_string($tmp=(isset($this->scope["view"]["owner"]) ? $this->scope["view"]["owner"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp));?>

        </div>
        <?php 
}?>

    </div>
<?php 
/* -- foreach end output */
	}
}?>

<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>