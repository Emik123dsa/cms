<?php 

namespace Admin\Model\Page;

use Engine\Core\Database\ActiveRecord;

class Page {
    use ActiveRecord; 

    protected $table = 'page';
/**
 * Undocumented variable
 *
 * @var [type]
 */
    public $id;
/**
 * Undocumented variable
 *
 * @var [type]
 */
    public $title;
/**
 * Undocumented variable
 *
 * @var [type]
 */
    public $content;
/**
 * Undocumented variable
 *
 * @var [type]
 */
    public $date; 
/**
 * Undocumented function
 *
 * @return void
 */
    public function getId() {
        return $this->id;
    }
/**
 * Undocumented function
 *
 * @return void
 */
    public function getTitle() {
        return $this->title;
    }
/**
 * Undocumented function
 *
 * @return void
 */
    public function getContent() {
        return $this->content;
    }
/**
 * Undocumented function
 *
 * @return void
 */
    public function getDate() {
        return $this->date;
    }
/**
 * Undocumented function
 *
 * @param [type] $id
 * @return void
 */
    public function setId($id) {
        $this->id = $id;
    }
/**
 * Undocumented function
 *
 * @param [type] $title
 * @return void
 */
    public function setTitle($title) {
        $this->title = $title;
    }
/**
 * Undocumented function
 *
 * @param [type] $content
 * @return void
 */
    public function setContent($content) {
        $this->content = $content;
    }
/**
 * Undocumented function
 *
 * @param [type] $date
 * @return void
 */
    public function setDate($date) {
        $this->date = $date;
    }

}

?>