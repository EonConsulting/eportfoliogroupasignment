<?php
/* template head */
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
/* end template head */ ob_start(); /* template body */ ?><div id="home-info-container" class="dashboard-widget-container">

    <div class="home-info-boxes<?php if ((($tmp = (isset($this->scope["USER"]) ? $this->scope["USER"] : null)) ? $tmp->is_logged_in() : null)) {
?> loggedin<?php 
}?> fullwidth">

        <?php if ((($tmp = (isset($this->scope["USER"]) ? $this->scope["USER"] : null)) ? $tmp->is_logged_in() : null)) {
?>
        <a href="<?php echo (is_string($tmp=$this->scope["url"]["views"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" title="<?php echo Dwoo_Plugin_str($this, 'create', 'mahara', null, null, null, null, null);?>" class="logged-in thumbnail-widget first">
        <?php 
}
else {
?>
        <div class="logged-out thumbnail-widget first">
        <?php 
}?>

            <div id="home-info-create" class="widget">
                <div class="widget-heading">
                    <div class="circle-bg">
                        <span class="icon icon-plus" role="presentation" aria-hidden="true"></span>
                    </div>
                    <h2 class="title">
                        <?php echo Dwoo_Plugin_str($this, 'create', 'mahara', null, null, null, null, null);?>

                    </h2>
                    <p><?php echo Dwoo_Plugin_str($this, 'createsubtitle', 'mahara', null, null, null, null, null);?></p>
                </div>
                <div class="widget-detail">
                    <p><?php echo Dwoo_Plugin_str($this, 'createdetail', 'mahara', null, null, null, null, null);?></p>
                </div>
            </div>
        <?php if ((($tmp = (isset($this->scope["USER"]) ? $this->scope["USER"] : null)) ? $tmp->is_logged_in() : null)) {
?>
        </a>
        <?php 
}
else {
?>
        </div>
        <?php 
}?>


        <?php if ((($tmp = (isset($this->scope["USER"]) ? $this->scope["USER"] : null)) ? $tmp->is_logged_in() : null)) {
?>
        <a href="<?php echo (is_string($tmp=$this->scope["url"]["share"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" class="logged-in thumbnail-widget">
        <?php 
}
else {
?>
        <div class="logged-out thumbnail-widget">
        <?php 
}?>

            <div id="home-info-share" class="home-info-box">
                <div class="widget-heading">
                    <div class="circle-bg">
                        <span class="icon icon-unlock-alt" role="presentation" aria-hidden="true"></span>
                    </div>
                    <h2 class="title">
                        <?php echo Dwoo_Plugin_str($this, 'share', 'mahara', null, null, null, null, null);?>

                    </h2>
                    <p><?php echo Dwoo_Plugin_str($this, 'sharesubtitle', 'mahara', null, null, null, null, null);?></p>
                </div>
                <div class="widget-detail">
                    <p><?php echo Dwoo_Plugin_str($this, 'sharedetail', 'mahara', null, null, null, null, null);?></p>
                </div>
        </div>
        <?php if ((($tmp = (isset($this->scope["USER"]) ? $this->scope["USER"] : null)) ? $tmp->is_logged_in() : null)) {
?>
        </a>
        <?php 
}
else {
?>
        </div>
        <?php 
}?>


        <?php if ((($tmp = (isset($this->scope["USER"]) ? $this->scope["USER"] : null)) ? $tmp->is_logged_in() : null)) {
?>
        <a href="<?php echo (is_string($tmp=$this->scope["url"]["groups"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" class="logged-in thumbnail-widget last">
        <?php 
}
else {
?>
        <div class="logged-out thumbnail-widget last">
        <?php 
}?>

            <div id="home-info-engage" class="home-info-box">
                <div class="widget-heading">
                    <div class="circle-bg">
                        <span class="icon icon-users" role="presentation" aria-hidden="true"></span>
                    </div>
                    <h2 class="title">
                        <?php echo Dwoo_Plugin_str($this, 'engage', 'mahara', null, null, null, null, null);?>

                    </h2>
                    <p><?php echo Dwoo_Plugin_str($this, 'engagesubtitle', 'mahara', null, null, null, null, null);?></p>
                </div>
                <div class="widget-detail">
                    <p><?php echo Dwoo_Plugin_str($this, 'engagedetail', 'mahara', null, null, null, null, null);?></p>
                </div>
            </div>
        <?php if ((($tmp = (isset($this->scope["USER"]) ? $this->scope["USER"] : null)) ? $tmp->is_logged_in() : null)) {
?>
        </a>
        <?php 
}
else {
?>
        </div>
        <?php 
}?>


        <?php if ((($tmp = (isset($this->scope["USER"]) ? $this->scope["USER"] : null)) ? $tmp->is_logged_in() : null)) {
?>
        <div id="hideinfo" class="nojs-hidden-block text-right hide-info">
            <a href="#" title="<?php echo Dwoo_Plugin_str($this, 'Hide2', 'mahara', null, null, null, null, null);?>" class="remove-widgets">
                <span class="icon icon-remove" role="presentation" aria-hidden="true"></span>
                <span class=""><?php echo Dwoo_Plugin_str($this, 'Hide2', 'mahara', null, null, null, null, null);?></span>
            </a>
        </div>
        <?php 
}?>

    </div>
</div>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>