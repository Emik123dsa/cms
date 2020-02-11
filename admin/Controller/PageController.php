<?php 
namespace Admin\Controller;

class PageController extends AdminController {
    const DATA_AMOUNT_PAGE = "8";
    /**
     * Undocumented function
     *
     * @return void
     */
    public function listing() {
        $this->load->model('Page');
      
        $this->data['pages'] = $this->model->page->getPages();
        
        $this->view->render('pages/list', $this->data);
    }    

    public function edit($id) {
        $this->load->model('Page');

        
        $this->data['page'] = $this->model->page->getPageData($id);

        $this->view->render('pages/edit', $this->data);
    }


    public function create() {
       $this->load->model('Page'); 
        
        $this->view->render('pages/create');
    }

    public function page($id) {

        $this->load->model('Page');

        $this->data['pageId'] = $id; 
        $this->data['maxPageId'] = $this->model->page->getTotalPageAmount(); 
        $this->data['deltaPageId'] = self::DATA_AMOUNT_PAGE;
        $total = $this->model->page->getTotalPageAmount();
        
       foreach($total as $item) {
           $sigma = $item['amount'];
        }

        if ($id <= 0  or $id > ceil($sigma / self::DATA_AMOUNT_PAGE)) {
            header('Location: /dynweb/cms/admin/pages/page/1', true, 301);
            exit;
        }

        $this->data['pages'] = $this->model->page->getPageNumber($id);

        $this->data['pagination'] = $this->model->page->getPageCurrentAmount($sigma, $this->data['pageId']);

        $this->view->render('pages/list_order', $this->data);

    }

    
    public function update() {
        $this->load->model('Page');
        $params = $this->request->post; 
        
        if (isset($params['title'])) {
            $pageId = $this->model->page->updatePages($params);
            echo $pageId;
        }
        
    }

    public function add() {
        $this->load->model('Page');
        $params = $this->request->post; 
        

        if (isset($params['title'])) {
            $pageId = $this->model->page->createPages($params);
            echo $pageId;
        }
        
       
    }
}


?>