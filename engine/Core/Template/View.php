<?php 
namespace Engine\Core\Template;

use Engine\DI\DI;

class View {
    public $di;
    protected $theme;
    protected $setting; 
    protected $menu; 
public function __construct(DI $di) 
{
    $this->di = $di; 
    $this->theme = new Theme();
    $this->setting = new Setting($di);
    $this->menu = new Menu($di);
    
}
/**
 * Undocumented function
 *
 * @param [type] $template
 * @param array $vars
 * @return void
 */
public function render($template, $vars=[]) {
    $functions = $this->getThemePath() . '/functions.php'; 
    if (file_exists($functions)) {
    include_once $this->getThemePath() . '/functions.php';
    } 
    $templatePath = $this->getTemplatePath($template, ENV);
    
    if(!is_file($templatePath)) {

        throw new \InvalidArgumentException(sprintf('Is not valid!', $template, $templatePath));
    }

    $vars['lang'] = $this->di->get('language');

    $this->theme->setData($vars);

    extract($vars);

    ob_start();
    ob_implicit_flush(0);

    try {
        require $templatePath;
    } catch (\Exception $e) {
        ob_end_clean();
        throw $e;
    }

    echo ob_get_clean();
}
/**
 * Undocumented function
 *
 * @param [type] $template
 * @param [type] $env
 * @return void
 */
private function getTemplatePath($template, $env = null) {
    if($env == 'Cms') {
        return ROOT_DIR. '/content/themes/default/' .$template.'.php';
    } else {
        return path('view') .'/'.$template.'.php';
        
    }
    
}

private function getThemePath() {
    return ROOT_DIR . '/content/themes/default';
}
}
?>