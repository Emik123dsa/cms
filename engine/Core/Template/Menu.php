<?php 

namespace Engine\Core\Template;

use Cms\Model\Menu\MenuRepository;

use Cms\Model\MenuItem\MenuItemRepository;


class Menu {
    /**
     * Undocumented variable
     *
     * @var [type]
     */
    protected static $di; 
    /**
     * Undocumented variable
     *
     * @var [type]
     */
    protected static $menuRepository; 
    /**
     * Undocumented variable
     *
     * @var [type]
     */
    protected static $menuItemRepository; 

    public function __construct($di)
    {   
        self::$di = $di; 
        self::$menuItemRepository = new MenuItemRepository(self::$di);
        self::$menuRepository = new MenuRepository(self::$di);
    }
/**
 * Undocumented function
 *
 * @return void
 */
    public static function getItems($menuId) {
        return self::$menuItemRepository->getAllItems($menuId);
    }
}

?>