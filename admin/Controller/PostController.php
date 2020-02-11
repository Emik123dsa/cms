<?php 
namespace Admin\Controller;

class PostController extends AdminController {
    const DATA_AMOUNT_POST = "8";
    const DATA_DELTA_POST = "3";
    /**
     * Undocumented function
     *
     * @return void
     */
    public function listing() {
        $this->load->model('Post');
      
        $this->data['posts'] = $this->model->post->getPosts();
        
        $this->view->render('posts/list', $this->data);
    }    

    public function post($id) {

        $this->load->model('Post');

        $this->data['postId'] = $id; 
        $this->data['maxPostId'] = $this->model->post->getTotalPostAmount(); 
        $this->data['deltaPostId'] = self::DATA_AMOUNT_POST;
        $total = $this->model->post->getTotalPostAmount();
        
       foreach($total as $item) {
           $sigma = $item['amount'];
        }

        if ($id <= 0  or $id > ceil($sigma / self::DATA_AMOUNT_POST)) {
            header('Location: /dynweb/cms/admin/posts/post/1', true, 301);
            exit;
        }

        $this->data['posts'] = $this->model->post->getPostNumber($id);

        $this->data['pagination'] = $this->model->post->getPostCurrentAmount($sigma, $this->data['postId']);

        $this->view->render('posts/list_order', $this->data);
    }

    public function edit($id) {
        $this->load->model('Post');

        $this->data['post'] = $this->model->post->getPostData($id);

        $this->view->render('posts/edit', $this->data);
    }


    public function create() {
       $this->load->model('Post'); 
        
        $this->view->render('posts/create');
    }

    public function update() {
        $this->load->model('Post');
        $params = $this->request->post; 
        
        if (isset($params['title'])) {
            $postId = $this->model->post->updatePosts($params);
            echo $postId;
        }
        
    }

    public function add() {
        $this->load->model('Post');
        $params = $this->request->post; 
        

        if (isset($params['title'])) {
            $postId = $this->model->post->createPosts($params);
            echo $postId;
        }
        
       
    }
}


?>