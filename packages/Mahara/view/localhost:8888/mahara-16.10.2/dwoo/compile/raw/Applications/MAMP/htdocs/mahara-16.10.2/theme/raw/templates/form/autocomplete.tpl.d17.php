<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><select class="js-data-ajax" multiple="multiple" id="<?php echo (is_string($tmp=$this->scope["id"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" name="<?php echo (is_string($tmp=$this->scope["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>[]" <?php if ((isset($this->scope["describedby"]) ? $this->scope["describedby"] : null)) {
?>aria-describedby="<?php echo (is_string($tmp=$this->scope["describedby"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"<?php 
}?>>
<?php if ((isset($this->scope["initvalues"]) ? $this->scope["initvalues"] : null)) {
?>
    <?php 
$_fh0_data = (is_string($tmp=(isset($this->scope["initvalues"]) ? $this->scope["initvalues"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isTraversable($_fh0_data) == true)
{
	foreach ($_fh0_data as $this->scope['value'])
	{
/* -- foreach start output */
?>
    <option selected value="<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'id',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["value"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'text',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["value"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></option>
    <?php 
/* -- foreach end output */
	}
}?>

<?php 
}?>

</select>

<script type="application/javascript">
<?php if (! (isset($this->scope["inblockconfig"]) ? $this->scope["inblockconfig"] : null)) {
?>
    addLoadEvent(function () {
<?php 
}?>

    jQuery("#<?php echo (is_string($tmp=$this->scope["id"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>").select2({
        ajax: {
            url: "<?php echo (is_string($tmp=$this->scope["ajaxurl"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>",
            dataType: 'json',
            type: 'POST',
            delay: 250,
            data: function(params) {
                return {
                    'q': params.term,
                    'page': params.page || 0,
                    'sesskey': "<?php echo (is_string($tmp=$this->scope["sesskey"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>",
                    'offset': 0,
                    'limit': 10,
                }
            },
            processResults: function(data, page) {
                return {
                    results: data.results,
                    pagination: {
                        more: data.more
                    }
                };
            }
        },
        language: "<?php echo (is_string($tmp=$this->scope["language"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>",
        multiple: <?php echo (is_string($tmp=$this->scope["multiple"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>,
        width: "<?php echo (is_string($tmp=$this->scope["width"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>",
        allowClear: <?php echo (is_string($tmp=$this->scope["allowclear"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>,
        <?php if ((isset($this->scope["hint"]) ? $this->scope["hint"] : null)) {
?>placeholder: "<?php echo (is_string($tmp=$this->scope["hint"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>",<?php 
}?>

        minimumInputLength: <?php echo (is_string($tmp=$this->scope["mininputlength"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>,
        <?php echo (isset($this->scope["extraparams"]) ? $this->scope["extraparams"] : null);?>

    });
<?php if (! (isset($this->scope["inblockconfig"]) ? $this->scope["inblockconfig"] : null)) {
?>
    });
<?php 
}?>

jQuery("#<?php echo (is_string($tmp=$this->scope["id"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>").prop('disabled', <?php echo (is_string($tmp=$this->scope["disabled"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>);
</script>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>