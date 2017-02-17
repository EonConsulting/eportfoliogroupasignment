<?php
/* template head */
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
/* end template head */ ob_start(); /* template body */ ?><div class="js-blockinstance blockinstance panel panel-secondary clearfix <?php if ((isset($this->scope["configure"]) ? $this->scope["configure"] : null)) {
?> configure<?php 
}
elseif ((isset($this->scope["retractable"]) ? $this->scope["retractable"] : null)) {
?> retractable<?php 
}?>" data-id="<?php echo (is_string($tmp=$this->scope["id"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" id="blockinstance_<?php echo (is_string($tmp=$this->scope["id"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ((isset($this->scope["configure"]) ? $this->scope["configure"] : null)) {
?>_configure<?php 
}?>">
	<h3 class="panel-heading js-heading drag-handle <?php if (! (isset($this->scope["title"]) ? $this->scope["title"] : null)) {
?>panel-heading-placeholder<?php 
}?>">
		<span class="icon icon-arrows move-indicator" role="presentation" aria-hidden="true"></span>
		<span class="blockinstance-header">
			<?php if ((isset($this->scope["configure"]) ? $this->scope["configure"] : null)) {

echo (is_string($tmp=$this->scope["configtitle"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>: <?php echo Dwoo_Plugin_str($this, 'Configure', 'view', null, null, null, null, null);

}
else {

echo (($tmp = (is_string($tmp=(isset($this->scope["title"]) ? $this->scope["title"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp))===null||$tmp==='' ? "[".(is_string($tmp=(isset($this->scope["strnotitle"]) ? $this->scope["strnotitle"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)."]" : $tmp);

}?>


			<?php if ((isset($this->scope["retractable"]) ? $this->scope["retractable"] : null) && ! (isset($this->scope["configure"]) ? $this->scope["configure"] : null)) {
?>
			<span class="icon icon-chevron-down text-watermark icon-sm" role="presentation" aria-hidden="true"></span>
			<span class="sr-only"><?php echo Dwoo_Plugin_str($this, 'retractable', 'view', null, null, null, null, null);?></span>
			<?php 
}?>

		</span>
		<span class="blockinstance-controls">

			<button class="keyboardmovebutton btn btn-default hidden sr-only" name="action_moveblockinstance_id_<?php echo (is_string($tmp=$this->scope["id"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" alt="<?php echo (is_string($tmp=$this->scope["strmovetitletext"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"  data-id="<?php echo (is_string($tmp=$this->scope["id"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
				<?php echo (is_string($tmp=$this->scope["strmovetitletext"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>

			</button>


			<?php 
$_fh1_data = (is_string($tmp=(isset($this->scope["movecontrols"]) ? $this->scope["movecontrols"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isTraversable($_fh1_data) == true)
{
	foreach ($_fh1_data as $this->scope['item'])
	{
/* -- foreach start output */
?>
				<button class="movebutton hidden" name="action_moveblockinstance_id_<?php echo (is_string($tmp=$this->scope["id"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_row_<?php echo (is_string($tmp=$this->scope["row"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_column_<?php echo (is_string($tmp=$this->scope["item"]["column"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_order_<?php echo (is_string($tmp=$this->scope["item"]["order"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" data-id="<?php echo (is_string($tmp=$this->scope["id"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
					<?php echo (is_string($tmp=$this->scope["item"]["title"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>

				</button>
			<?php 
/* -- foreach end output */
	}
}?>




			<span class="pull-right btn-group btn-group-top">
				<?php if ((isset($this->scope["configurable"]) ? $this->scope["configurable"] : null) && ! (isset($this->scope["configure"]) ? $this->scope["configure"] : null)) {
?>
				<button class="configurebutton btn btn-inverse btn-xs" name="action_configureblockinstance_id_<?php echo (is_string($tmp=$this->scope["id"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" alt="<?php echo (is_string($tmp=$this->scope["strconfigtitletext"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" data-id="<?php echo (is_string($tmp=$this->scope["id"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
					<span class="icon icon-cog icon-lg" role="presentation" aria-hidden="true"></span>
				</button>
				<?php 
}?>


				<?php if ((isset($this->scope["configure"]) ? $this->scope["configure"] : null)) {
?>
					<button class="deletebutton btn btn-inverse btn-xs" name="action_removeblockinstance_id_<?php echo (is_string($tmp=$this->scope["id"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" alt="<?php echo Dwoo_Plugin_str($this, 'Close', 'mahara', null, null, null, null, null);?>" data-id="<?php echo (is_string($tmp=$this->scope["id"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
						<span class="icon icon-trash text-danger icon-lg" role="presentation" aria-hidden="true"></span>
					</button>
				</button>
				<?php 
}
else {
?>
					<button class="deletebutton btn btn-inverse btn-xs" name="action_removeblockinstance_id_<?php echo (is_string($tmp=$this->scope["id"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" alt="<?php echo (is_string($tmp=$this->scope["strremovetitletext"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" data-id="<?php echo (is_string($tmp=$this->scope["id"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
						<span class="icon icon-trash text-danger icon-lg" role="presentation" aria-hidden="true"></span>
					</button>
				<?php 
}?>

			</span>
		</span>
	</h3>
	<div class="block blockinstance-content js-blockinstance-content">
		<?php echo (isset($this->scope["content"]) ? $this->scope["content"] : null);?>

	</div>
</div>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>