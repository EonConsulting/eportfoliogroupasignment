<?php
/* template head */
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
/* end template head */ ob_start(); /* template body */ ;
if ((isset($this->scope["disabled"]) ? $this->scope["disabled"] : null)) {
?>
  <?php 
$_fh1_data = (is_string($tmp=(isset($this->scope["validated"]) ? $this->scope["validated"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isTraversable($_fh1_data) == true)
{
	foreach ($_fh1_data as $this->scope['email'])
	{
/* -- foreach start output */
?>
    <div class="validated">
        <label for="<?php echo (is_string($tmp=$this->scope["form"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_<?php echo (is_string($tmp=$this->scope["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
            <span class="accessible-hidden sr-only"><?php echo (is_string($tmp=$this->scope["title"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>: </span>
        </label>
        <input disabled <?php if ((isset($this->scope["email"]) ? $this->scope["email"] : null) == (isset($this->scope["default"]) ? $this->scope["default"] : null)) {
?> checked<?php 
}
if ((isset($this->scope["describedby"]) ? $this->scope["describedby"] : null)) {
?> aria-describedby="<?php echo (is_string($tmp=$this->scope["describedby"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"<?php 
}?> type="radio" name="<?php echo (is_string($tmp=$this->scope["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_locked" value="<?php echo (is_string($tmp=$this->scope["email"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" id="<?php echo (is_string($tmp=$this->scope["form"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_<?php echo (is_string($tmp=$this->scope["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
        <?php echo (is_string($tmp=$this->scope["email"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>

    </div>
    <input type="hidden" name="<?php echo (is_string($tmp=$this->scope["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_valid[]" value="<?php echo (is_string($tmp=$this->scope["email"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
    <?php if ((isset($this->scope["email"]) ? $this->scope["email"] : null) == (isset($this->scope["default"]) ? $this->scope["default"] : null)) {
?><input type="hidden" name="<?php echo (is_string($tmp=$this->scope["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_selected" value="<?php echo (is_string($tmp=$this->scope["email"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><?php 
}?>

  <?php 
/* -- foreach end output */
	}
}?>

  <?php 
$_fh2_data = (is_string($tmp=(isset($this->scope["unvalidated"]) ? $this->scope["unvalidated"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isTraversable($_fh2_data) == true)
{
	foreach ($_fh2_data as $this->scope['email'])
	{
/* -- foreach start output */
?>
    <div class="unvalidated"><?php echo (is_string($tmp=$this->scope["email"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></div>
    <input type="hidden" name="<?php echo (is_string($tmp=$this->scope["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_invalid[]" value="<?php echo (is_string($tmp=$this->scope["email"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
  <?php 
/* -- foreach end output */
	}
}?>

<?php 
}
else {
?>
<script type="application/javascript">
    var <?php echo (is_string($tmp=$this->scope["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_newrefinput = null;
    var <?php echo (is_string($tmp=$this->scope["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_newref = null;

    function <?php echo (is_string($tmp=$this->scope["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_addedemail() {
        removeElement(<?php echo (is_string($tmp=$this->scope["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_newrefinput);
        removeElement(<?php echo (is_string($tmp=$this->scope["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_newref);
        var newEmail = <?php echo (is_string($tmp=$this->scope["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_newrefinput.value;
        if (typeof(newEmail) == 'string' && newEmail.length > 0) {
            if (newEmail.length > 255) {
                alert(get_string('emailtoolong'));
            }
            else {
                var email = <?php echo (is_string($tmp=$this->scope["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_newrefinput.value;
                appendChildNodes('<?php echo (is_string($tmp=$this->scope["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_list', DIV({'class': 'unsent'},
                    INPUT({'type': 'hidden', 'name': '<?php echo (is_string($tmp=$this->scope["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_unsent[]'       , 'value': email}),
                    ' ',
                    SPAN({'class': 'pseudolabel no-radio'}, email),' ',
                    BUTTON({'class': 'btn btn-default btn-sm', 'onclick': '<?php echo (is_string($tmp=$this->scope["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_remove(this); return false'},
                        SPAN({'class': 'icon icon-times left icon-lg text-danger', 'role': 'presentation'}),
                        SPAN('<?php echo Dwoo_Plugin_str($this, 'delete', 'mahara', null, null, null, null, null);?>')
                    ),
                    DIV({'class': 'clearfix metadata validation-message'}, <?php echo (isset($this->scope["validationemailstr"]) ? $this->scope["validationemailstr"] : null);?>)
                    //' ' + <?php echo (isset($this->scope["validationemailstr"]) ? $this->scope["validationemailstr"] : null);?>

                ));
                if (typeof formchangemanager !== 'undefined') {
                    var form = jQuery(this).closest('form')[0];
                    formchangemanager.setFormState(form, FORM_CHANGED);
                }
            }
        }
        <?php echo (is_string($tmp=$this->scope["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_newrefinput = null;
        <?php echo (is_string($tmp=$this->scope["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_newref = null;
    }

    function <?php echo (is_string($tmp=$this->scope["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_new() {
        if ( <?php echo (is_string($tmp=$this->scope["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_newref ) {
            <?php echo (is_string($tmp=$this->scope["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_newrefinput.focus();
            return false;
        }

        <?php echo (is_string($tmp=$this->scope["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_newrefinput = INPUT({'type': 'text', 'id': 'addnew<?php echo (is_string($tmp=$this->scope["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>', 'class': 'form-control'});
        <?php echo (is_string($tmp=$this->scope["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_newrefsubmit = INPUT({'type': 'submit', 'class': 'btn btn-default', 'value': '<?php echo (is_string($tmp=$this->scope["addbuttonstr"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>'});
        <?php echo (is_string($tmp=$this->scope["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_newref = DIV({'class': 'input-group'},<?php echo (is_string($tmp=$this->scope["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_newrefinput,' ',<?php echo (is_string($tmp=$this->scope["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_newrefsubmit);

        appendChildNodes('<?php echo (is_string($tmp=$this->scope["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_list', <?php echo (is_string($tmp=$this->scope["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_newref);

        <?php echo (is_string($tmp=$this->scope["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_newrefinput.focus();

        connect(<?php echo (is_string($tmp=$this->scope["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_newrefinput, 'onchange', function(k) {
            if (typeof formchangemanager !== 'undefined') {
                var form = jQuery(this).closest('form')[0];
                formchangemanager.setFormState(form, FORM_CHANGED);
            }
        });

        connect(<?php echo (is_string($tmp=$this->scope["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_newrefsubmit, 'onclick', function(k) {
            <?php echo (is_string($tmp=$this->scope["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_addedemail();
            k.stop();
        });
    }

    function <?php echo (is_string($tmp=$this->scope["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_remove(x) {
        var div = x.parentNode;

        var radio = filter(
                function(elem) { return getNodeAttribute(elem, 'type') == 'radio'; },
                getElementsByTagAndClassName('input', null, div)
        );

        if (radio[0] && radio[0].checked) {
            alert(get_string('cannotremovedefaultemail'));
            return;
        }

        if (typeof formchangemanager !== 'undefined') {
            var form = jQuery(div).closest('form')[0];
            formchangemanager.setFormState(form, FORM_CHANGED);
        }

        removeElement(x.parentNode);
    }
</script>
<div id="<?php echo (is_string($tmp=$this->scope["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_list" class="<?php echo (is_string($tmp=$this->scope["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>-list email-list">
<?php 
$_fh3_data = (is_string($tmp=(isset($this->scope["validated"]) ? $this->scope["validated"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isTraversable($_fh3_data) == true)
{
	foreach ($_fh3_data as $this->scope['i']=>$this->scope['email'])
	{
/* -- foreach start output */
?>
    <div class="validated">
        <input<?php if ((isset($this->scope["email"]) ? $this->scope["email"] : null) == (isset($this->scope["default"]) ? $this->scope["default"] : null)) {
?> checked<?php 
}?> type="radio" id="<?php echo (is_string($tmp=$this->scope["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_radio_<?php echo (is_string($tmp=$this->scope["i"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" name="<?php echo (is_string($tmp=$this->scope["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_selected" value="<?php echo (is_string($tmp=$this->scope["email"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" class="text-inline">
        <input type="hidden" name="<?php echo (is_string($tmp=$this->scope["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_valid[]" value="<?php echo (is_string($tmp=$this->scope["email"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
        <label for="<?php echo (is_string($tmp=$this->scope["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_radio_<?php echo (is_string($tmp=$this->scope["i"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" class="stacked-label">
            <span class="accessible-hidden sr-only"><?php echo (is_string($tmp=$this->scope["title"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>: </span><?php echo (is_string($tmp=$this->scope["email"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>

        </label>
        <button class="btn btn-default btn-sm" onclick="<?php echo (is_string($tmp=$this->scope["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_remove(this); return false;" title="<?php echo Dwoo_Plugin_str($this, 'delete', 'mahara', null, null, null, null, null);?>">
            <span class="icon icon-trash icon-lg text-danger" role="presentation" aria-hidden="true"></span>
            <span class="sr-only"><?php echo Dwoo_Plugin_str($this, 'delete', 'mahara', null, null, null, null, null);?></span>
        </button>
    </div>
<?php 
/* -- foreach end output */
	}
}?>

<?php 
$_fh4_data = (is_string($tmp=(isset($this->scope["unvalidated"]) ? $this->scope["unvalidated"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isTraversable($_fh4_data) == true)
{
	foreach ($_fh4_data as $this->scope['email'])
	{
/* -- foreach start output */
?>
    <div class="unvalidated">
        <input type="hidden" name="<?php echo (is_string($tmp=$this->scope["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_invalid[]" value="<?php echo (is_string($tmp=$this->scope["email"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
        <span class="stacked-label no-radio">
            <?php echo (is_string($tmp=$this->scope["email"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>

        </span>
        <button class="btn btn-default btn-sm" onclick="<?php echo (is_string($tmp=$this->scope["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_remove(this); return false;" title="<?php echo Dwoo_Plugin_str($this, 'delete', 'mahara', null, null, null, null, null);?>">
            <span class="icon icon-trash left icon-lg text-danger" role="presentation" aria-hidden="true"></span>
            <span class="sr-only"><?php echo Dwoo_Plugin_str($this, 'delete', 'mahara', null, null, null, null, null);?></span>
        </button>
        <span class="message"><?php echo Dwoo_Plugin_str($this, 'validationemailsent', 'artefact.internal', null, null, null, null, null);?></span>
    </div>
<?php 
/* -- foreach end output */
	}
}?>

</div>
<button class="btn btn-default btn-sm align-with-input" onclick="<?php echo (is_string($tmp=$this->scope["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_new(); return false;">
    <span class="icon icon-plus left text-success icon-lg" role="presentation" aria-hidden="true"> </span>
    <?php echo Dwoo_Plugin_str($this, "addemail", 'mahara', null, null, null, null, null);?>

</button>
<?php 
}?>

<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>