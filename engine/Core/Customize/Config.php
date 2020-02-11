<?php 

namespace Engine\Core\Customize; 

class Config {
/**
 * Undocumented variable
 *
 * @var array
 */
    protected $config = [
        "dashboardMenu" => [ 
        "home" => [
            "classIcon" => "ui home icon", 
            "urlPath"   => "/dynweb/cms/admin/", 
            "title"     => "Home"
        ], 
        "pages" => [
            "classIcon" => "ui list icon", 
            "urlPath"   => "/dynweb/cms/admin/pages/page/1", 
            "title"     => "Pages"
        ], 
        "posts" => [
            "classIcon" => "ui folder icon", 
            "urlPath"   => "/dynweb/cms/admin/posts/post/1", 
            "title"     => "Posts"
        ], 
        "settings" => [
            "classIcon" => "ui setting icon", 
            "urlPath"   => "/dynweb/cms/admin/settings/general/", 
            "title"     => "Settings"

        ]
        ]
    ];
/**
 * Undocumented function
 *
 * @param [type] $key
 * @return boolean
 */
    public function has($key) {
        return isset($this->config[$key]);
    }
/**
 * Undocumented function
 *
 * @param [type] $key
 * @return void
 */
    public function get($key) {
        return $this->has($key) ? $this->config[$key] : null;
    }   
/**
 * Undocumented function
 *
 * @param [type] $key
 * @param [type] $value
 * @return void
 */
    public function set($key, $value) {
        $this->config[$key] = $value;
    }

}




?>