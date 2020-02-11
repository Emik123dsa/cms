<?php 
namespace Admin\Controller;


class DashboardController extends AdminController {
    /**
     * Undocumented function
     *
     * @return void
     */

    public function index() {

       $this->load->model('User');

       $this->load->language('dashboard/main');
       
       $this->view->render('dashboard');

    }

}

?>