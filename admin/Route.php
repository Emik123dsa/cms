<?php

$this->router->add('auth-admin', '/admin/auth/', 'LoginController:authAdmin', 'POST');
$this->router->add('login', '/admin/login/', 'LoginController:form');
$this->router->add('dashboard', '/admin/', 'DashboardController:index');
$this->router->add('logout', '/admin/logout/', 'AdminController:logout');
//GET_PAGES
$this->router->add('pages', '/admin/pages/', 'PageController:listing');
$this->router->add('page-create', '/admin/pages/create/', 'PageController:create');
$this->router->add('page-edit', '/admin/pages/edit/(id:int)', 'PageController:edit');
$this->router->add('pages-page-numertaion', '/admin/pages/page/(id:int)', 'PageController:page');
//POST_PAGES
$this->router->add('page-add', '/admin/page/add/', 'PageController:add', 'POST');
$this->router->add('page-update', '/admin/pages/update/', 'PageController:update', 'POST');
//GET_POSTS 
$this->router->add('posts', '/admin/posts/', 'PostController:listing');
$this->router->add('post-create', '/admin/posts/create/', 'PostController:create'); 
$this->router->add('post-edit', '/admin/posts/edit/(id:int)', 'PostController:edit');
$this->router->add('posts-page-numeration', '/admin/posts/post/(id:int)', 'PostController:post'); 
//POST_POSTS
$this->router->add('post-add', '/admin/post/add/', 'PostController:add', 'POST');
$this->router->add('post-update', '/admin/posts/update/', 'PostController:update', 'POST');
//GET_SETTINGS
$this->router->add('settings-general', '/admin/settings/general/', 'SettingController:general');
$this->router->add('setting-menus', '/admin/settings/appearance/menus/', 'SettingController:menus');
//POST_SETTING
$this->router->add('settings-update', '/admin/settings/general/update/', 'SettingController:updateSetting', 'POST');
$this->router->add('settings-add', '/admin/settings/general/ajaxMenuAdd/', 'SettingController:ajaxMenuAdd', 'POST');
$this->router->add('setting-menu-add', '/admin/settings/general/ajaxMenuAdditem/', 'SettingController:ajaxMenuAddItem', 'POST');
$this->router->add('setting-menu-sort', '/admin/settings/ajaxMenuSortItem/', 'SettingController:ajaxMenuSortItem', 'POST');
$this->router->add('setting-menu-item-delete', '/admin/settings/ajaxMenuDeleteItem/', 'SettingController:ajaxMenuDeleteItem', 'POST');
$this->router->add('setting-menu-item-change-name', '/admin/settings/ajaxMenuChangeItemName/', 'SettingController:ajaxMenuChangeItemName', 'POST');
$this->router->add('setting-menu-item-change-link', '/admin/settings/ajaxMenuChangeItemLink/', 'SettingController:ajaxMenuChangeItemLink', 'POST');
?>