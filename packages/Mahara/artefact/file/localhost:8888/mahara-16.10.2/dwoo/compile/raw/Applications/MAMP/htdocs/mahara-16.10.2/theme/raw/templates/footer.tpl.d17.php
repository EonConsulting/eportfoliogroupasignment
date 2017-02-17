<?php
/* template head */
if (function_exists('Dwoo_Plugin_include')===false)
	$this->getLoader()->loadPlugin('include');
if (function_exists('Dwoo_Plugin_theme_url')===false)
	$this->getLoader()->loadPlugin('theme_url');
if (function_exists('Dwoo_Plugin_mahara_version')===false)
	$this->getLoader()->loadPlugin('mahara_version');
if (function_exists('Dwoo_Plugin_mahara_performance_info')===false)
	$this->getLoader()->loadPlugin('mahara_performance_info');
/* end template head */ ob_start(); /* template body */ ?>                    </div><!-- end main-column -->

                </div><!-- mainmiddle -->

            </main>

            <?php if ((isset($this->scope["SIDEBARS"]) ? $this->scope["SIDEBARS"] : null) && (isset($this->scope["SIDEBLOCKS"]["right"]) ? $this->scope["SIDEBLOCKS"]["right"]:null)) {
?>
            <div class="col-md-3 sidebar">
                    <?php echo Dwoo_Plugin_include($this, "sidebar.tpl", null, null, null, '_root', null, array('blocks' => (is_string($tmp=(isset($this->scope["SIDEBLOCKS"]["right"]) ? $this->scope["SIDEBLOCKS"]["right"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)));?>

            </div>
            <?php 
}?>


            <?php if ((isset($this->scope["SIDEBARS"]) ? $this->scope["SIDEBARS"] : null) && (isset($this->scope["SIDEBLOCKS"]["left"]) ? $this->scope["SIDEBLOCKS"]["left"]:null)) {
?>
            <div class="col-md-3 col-md-pull-9 sidebar">
                            <?php echo Dwoo_Plugin_include($this, "sidebar.tpl", null, null, null, '_root', null, array('blocks' => (is_string($tmp=(isset($this->scope["SIDEBLOCKS"]["left"]) ? $this->scope["SIDEBLOCKS"]["left"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)));?>

            </div>
            <?php 
}?>


        </div><!-- row -->

    </div><!-- container -->

</div><!-- middle-container-wrap -->

<footer class="<?php if ((isset($this->scope["editing"]) ? $this->scope["editing"] : null) == true) {
?>editcontent<?php 
}?> footer">
    <div class="footer-inner container">
        <div id="powered-by" class="pull-left mahara-logo">
            <a href="https://mahara.org/">
                <img src="<?php echo Dwoo_Plugin_theme_url($this, 'images/powered_by_mahara.png', null);?>" alt="Powered by Mahara">
            </a>
        </div>
        <!-- This site is powered by Mahara, an Open Source
        ePortfolio system. See https://mahara.org/ for more
        details.
        NOTE: this image and link are a way that you can
        support the Mahara project. Please consider
        displaying them on your site to spread the word! -->
        <ul class="nav nav-pills footer-nav pull-left">
        <?php 
$_fh9_data = (is_string($tmp=(isset($this->scope["FOOTERMENU"]) ? $this->scope["FOOTERMENU"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isTraversable($_fh9_data) == true)
{
	foreach ($_fh9_data as $this->scope['item'])
	{
/* -- foreach start output */
?>
            <li>
                <a href="<?php echo (is_string($tmp=$this->scope["item"]["url"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><?php echo (is_string($tmp=$this->scope["item"]["title"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></a>
            </li>
        <?php 
/* -- foreach end output */
	}
}?>

        </ul>
        <div class="metadata pull-right mahara-version" id="version">
            <?php echo Dwoo_Plugin_mahara_version($this);?>

        </div>

        <div class="metadata text-center fullwidth site-performace">
            <!-- there is a div id="performance-info" wrapping this -->
            <?php echo Dwoo_Plugin_mahara_performance_info($this);?>

        </div>
    </div>
</footer><!-- footer-wrap -->
<?php if ((isset($this->scope["ADDITIONALHTMLFOOTER"]) ? $this->scope["ADDITIONALHTMLFOOTER"] : null)) {

echo (isset($this->scope["ADDITIONALHTMLFOOTER"]) ? $this->scope["ADDITIONALHTMLFOOTER"] : null);

}?>

</body>
</html>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>