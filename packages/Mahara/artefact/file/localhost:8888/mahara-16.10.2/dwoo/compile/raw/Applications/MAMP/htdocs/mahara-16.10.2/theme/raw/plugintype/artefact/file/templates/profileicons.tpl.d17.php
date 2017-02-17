<?php
/* template head */
if (function_exists('Dwoo_Plugin_include')===false)
	$this->getLoader()->loadPlugin('include');
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
/* end template head */ ob_start(); /* template body */ ;
echo Dwoo_Plugin_include($this, "header.tpl", null, null, null, '_root', null);?>

    <?php echo (isset($this->scope["settingsformtag"]) ? $this->scope["settingsformtag"] : null);?>

    <div class="table-responsive">
        <table id="profileicons" class="hidden fullwidth table table-striped">
            <thead>
                <tr>
                    <th class="profileiconcell"><?php echo Dwoo_Plugin_str($this, "image", 'mahara', null, null, null, null, null);?></th>
                    <th><?php echo Dwoo_Plugin_str($this, "imagetitle", 'artefact.file', null, null, null, null, null);?></th>
                    <th class="text-center"><?php echo Dwoo_Plugin_str($this, "Default", 'artefact.file', null, null, null, null, null);?></th>
                    <th class="text-center"><?php echo Dwoo_Plugin_str($this, "delete", 'mahara', null, null, null, null, null);?></th>
                </tr>
            </thead>
            <tbody>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4" class="text-right">
                        <button id="settings_default" type="submit" class="submit btn btn-default" name="default">
                            <span class="icon icon-check icon-lg text-success left" role="presentation" aria-hidden="true"></span>
                            <?php echo Dwoo_Plugin_str($this, "setdefault", 'artefact.file', null, null, null, null, null);?>

                        </button>
                        <button id="settings_delete" type="submit" class="delete btn btn-default" name="delete">
                             <span class="icon icon-trash icon-lg text-danger left" role="presentation" aria-hidden="true"></span>
                             <?php echo Dwoo_Plugin_str($this, "deleteselectedicons", 'artefact.file', null, null, null, null, null);?>

                         </button>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
    <input type="hidden" name="pieform_settings" value="">
    <input type="hidden" name="sesskey" value="<?php echo (is_string($tmp=$this->scope["USER"]->get('sesskey')) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
    </form>

    <h3><?php echo Dwoo_Plugin_str($this, "uploadprofileicon", "artefact.file", null, null, null, null, null);?></h3>
    <p class="lead">
        <?php echo Dwoo_Plugin_str($this, "profileiconsiconsizenotice", "artefact.file", (is_string($tmp=(isset($this->scope["imagemaxdimensions"]) ? $this->scope["imagemaxdimensions"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), null, null, null, null);?>

    </p>

    <?php echo (isset($this->scope["uploadform"]) ? $this->scope["uploadform"] : null);?>

<?php echo Dwoo_Plugin_include($this, "footer.tpl", null, null, null, '_root', null);?>

<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>