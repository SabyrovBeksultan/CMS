<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link active" href="/admin/settings/general/">
            General
        </a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            Appearance
        </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="/admin/settings/appearance/themes/">Themes</a>
            <a class="dropdown-item" href="/admin/settings/appearance/menus/">
                Menus
            </a>
        </div>
    </li>
</ul>
<!--<div class="ui secondary pointing menu">
    <?php /*foreach (Customize::getInstance()->getAdminMenuItems() as $key => $item): */?>
        <a class="item<?php /*if (\Engine\Helper\Common::isLinkActive($key)) echo 'active'; */?>" href="<?/*= $item['urlPath']; */?>">
            <?/*= $item['title']*/?>
        </a>
    <?php /*endforeach; */?>
</div>-->