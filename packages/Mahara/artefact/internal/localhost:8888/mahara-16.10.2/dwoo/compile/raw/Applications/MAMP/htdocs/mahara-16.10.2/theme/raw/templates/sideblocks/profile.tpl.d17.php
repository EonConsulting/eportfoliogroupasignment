<?php
/* template head */
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
if (function_exists('Dwoo_Plugin_profile_icon_url')===false)
	$this->getLoader()->loadPlugin('profile_icon_url');
/* end template head */ ob_start(); /* template body */ ?><div class="panel panel-default">
        <h3 class="panel-heading profile-block">
            <a href="<?php echo (is_string($tmp=$this->scope["sbdata"]["url"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" class="username"><?php echo (is_string($tmp=$this->scope["sbdata"]["myname"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></a>
            <a href="<?php echo (is_string($tmp=$this->scope["sbdata"]["profileiconurl"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" title="<?php echo Dwoo_Plugin_str($this, "editprofileicon", "artefact.file", null, null, null, null, null);?>" class="user-icon">
                <img src="<?php echo Dwoo_Plugin_profile_icon_url($this, (is_string($tmp=(isset($this->scope["sbdata"]["id"]) ? $this->scope["sbdata"]["id"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), 60, 60);?>" alt="<?php echo Dwoo_Plugin_str($this, "editprofileicon", "artefact.file", null, null, null, null, null);?>">
            </a>
        </h3>
    <div class="list-group">
        <?php if ((isset($this->scope["sbdata"]["mnetloggedinfrom"]) ? $this->scope["sbdata"]["mnetloggedinfrom"]:null)) {
?>
            <div class="sidebar-content">
                <p><?php echo clean_html((isset($this->scope["sbdata"]["mnetloggedinfrom"]) ? $this->scope["sbdata"]["mnetloggedinfrom"]:null));?></p>
            </div>
        <?php 
}?>

        <?php if ((isset($this->scope["sbdata"]["invitedgroups"]) ? $this->scope["sbdata"]["invitedgroups"]:null)) {
?>
            <div id="invitedgroups" class="list-group-item list-group-item-warning list-group-item-profile-notification">
                <a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>group/mygroups.php?filter=invite">
                    <div>
                        <span id="invitedgroupscount" class="label label-warning"><?php echo (is_string($tmp=$this->scope["sbdata"]["invitedgroups"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></span>
                    </div>
                    <span id="invitedgroupsmessage"><?php echo (is_string($tmp=$this->scope["sbdata"]["invitedgroupsmessage"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></span>
                </a>
            </div>
        <?php 
}?>

        <?php if ((isset($this->scope["sbdata"]["pendingfriends"]) ? $this->scope["sbdata"]["pendingfriends"]:null)) {
?>
            <div id="pendingfriends" class="list-group-item list-group-item-warning list-group-item-profile-notification">
                <a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>user/myfriends.php?filter=pending">
                    <div>
                        <span id="pendingfriendscount" class="label label-warning"><?php echo (is_string($tmp=$this->scope["sbdata"]["pendingfriends"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></span>
                    </div>
                    <span id="pendingfriendsmessage"><?php echo (is_string($tmp=$this->scope["sbdata"]["pendingfriendsmessage"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></span>
                </a>
            </div>
        <?php 
}?>

        <?php if ((isset($this->scope["sbdata"]["groups"]) ? $this->scope["sbdata"]["groups"]:null)) {
?>
            <div id="groups" class="list-group-item">
                <div class="list-group-item-heading sidebar-item-heading"><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>group/mygroups.php"><?php echo Dwoo_Plugin_str($this, "mygroups", 'mahara', null, null, null, null, null);?>:</a></div>
                <ul class="list-nested list-group-item-text list-unstyled list-group-item-link">
        <?php 
$_fh6_data = (is_string($tmp=(isset($this->scope["sbdata"]["groups"]) ? $this->scope["sbdata"]["groups"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isTraversable($_fh6_data) == true)
{
	foreach ($_fh6_data as $this->scope['group'])
	{
/* -- foreach start output */
?>
                    <li><a href="<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'homeurl',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["group"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" class="bordered"><?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'name',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["group"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?> <?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'role',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["group"]) ? $this->scope["group"]:null), true) == 'admin') {
?><small>(<?php echo Dwoo_Plugin_str($this, 'Admin', 'group', null, null, null, null, null);?>)</small><?php 
}?></a></li>
        <?php 
/* -- foreach end output */
	}
}?>

               </ul>
                <span class="text-small text-midtone"><?php echo (is_string($tmp=$this->scope["sbdata"]["grouplimitstr"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></span>
            </div>
        <?php 
}?>

        <?php if ((isset($this->scope["sbdata"]["views"]) ? $this->scope["sbdata"]["views"]:null)) {
?>
            <div id="views" class="list-group-item">
                <div class="list-group-item-heading sidebar-item-heading"><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>view/"><?php echo Dwoo_Plugin_str($this, "views", 'mahara', null, null, null, null, null);?>:</a></div>
                <ul class="list-nested list-group-item-text list-unstyled list-group-item-link">
        <?php 
$_fh7_data = (is_string($tmp=(isset($this->scope["sbdata"]["views"]) ? $this->scope["sbdata"]["views"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isTraversable($_fh7_data) == true)
{
	foreach ($_fh7_data as $this->scope['view'])
	{
/* -- foreach start output */
?>
                    <li><a href="<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'fullurl',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["view"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'title',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["view"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></a></li>
        <?php 
/* -- foreach end output */
	}
}?>

                </ul>
            </div>
        <?php 
}?>

        <?php if ((isset($this->scope["sbdata"]["artefacts"]) ? $this->scope["sbdata"]["artefacts"]:null)) {
?>
            <div class="artefacts list-group-item">
                <div class="list-group-item-heading sidebar-item-heading"><?php echo Dwoo_Plugin_str($this, "Artefacts", 'mahara', null, null, null, null, null);?>:</div>
                <ul class="list-nested list-group-item-text list-unstyled list-group-item-link">
        <?php 
$_fh8_data = (is_string($tmp=(isset($this->scope["sbdata"]["artefacts"]) ? $this->scope["sbdata"]["artefacts"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isTraversable($_fh8_data) == true)
{
	foreach ($_fh8_data as $this->scope['artefact'])
	{
/* -- foreach start output */
?>
        <?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'artefacttype',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["artefact"]) ? $this->scope["artefact"]:null), true) == 'blog') {
?>
                    <li><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>artefact/blog/view/index.php?id=<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'id',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["artefact"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'title',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["artefact"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></a></li>
        <?php 
}
elseif ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'artefacttype',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["artefact"]) ? $this->scope["artefact"]:null), true) == 'blogpost') {
?>
                    <li><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>artefact/blog/view/index.php?id=<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'blogid',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["artefact"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'title',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["artefact"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></a></li>
        <?php 
}
elseif ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'artefacttype',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["artefact"]) ? $this->scope["artefact"]:null), true) == 'file' || $this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'artefacttype',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["artefact"]) ? $this->scope["artefact"]:null), true) == 'image' || $this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'artefacttype',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["artefact"]) ? $this->scope["artefact"]:null), true) == 'profileicon' || $this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'artefacttype',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["artefact"]) ? $this->scope["artefact"]:null), true) == 'archive') {
?>
                    <li><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>artefact/file/download.php?file=<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'id',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["artefact"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'title',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["artefact"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></a></li>
        <?php 
}
elseif ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'artefacttype',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["artefact"]) ? $this->scope["artefact"]:null), true) == 'folder') {
?>
                    <li><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>artefact/file/index.php?folder=<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'id',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["artefact"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'title',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["artefact"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></a></li>
        <?php 
}?>

        <?php 
/* -- foreach end output */
	}
}?>

                </ul>
            </div>
        <?php 
}?>

    </div>
    <?php if ((isset($this->scope["sbdata"]["peer"]) ? $this->scope["sbdata"]["peer"]:null)) {
?>
        <div id="sbdatapeer"><a href="<?php echo (is_string($tmp=$this->scope["sbdata"]["peer"]["wwwroot"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" class="panel-body"><?php echo (is_string($tmp=$this->scope["sbdata"]["peer"]["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></a></div>
    <?php 
}?>

    <?php if ((isset($this->scope["USERMASQUERADING"]) ? $this->scope["USERMASQUERADING"] : null)) {
?>
        <div id="changeuser" class="panel-footer">
            <a href="<?php echo (is_string($tmp=$this->scope["becomeyoulink"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
                <span class="icon icon-lg left icon-undo" role="presentation" aria-hidden="true"></span>
                <span><?php echo (is_string($tmp=$this->scope["becomeyouagain"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></span>
            </a>
        </div>
    <?php 
}?>

</div>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>