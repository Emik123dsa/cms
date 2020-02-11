<?php 

namespace Cms\Controller;


class HomeController extends CmsController {
    /**
     * Undocumented function
     *
     * @return void
     */
    public function index() {
        $data = ['name' => 'Haribol'];
        $this->view->render('index', $data);
    }
/**
 * Undocumented function
 *
 * @return void
 */
    public function news($id) {
        echo $id;
    }

}

?>