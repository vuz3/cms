<?php

/**
 * Article controller manager
 * 
 * @author Przmeyslaw Kotlowski <john.doe@example.com>
 */
class Controller_Cms_Article extends Controller_Welcome {

    public function before() {
        parent::before();
        if($this->request->is_ajax()) {
            $this->auto_render = false;
        }
        $this->template->category = 'category';
    }

    public function action_show() {
        $this->template->center = View::factory('cms/article')
                ->bind('show_article', $show_article)
                ->bind('pagination', $pagination);

        $pagination_model = new Model_Pagination('articles');
        $all = $pagination_model->count_data();

        $pagination = Pagination::factory(array(
                    'current_page' => array('source' => 'route', 'key' => 'page'),
                    'total_items' => $all,
                    'items_per_page' => 5,
                    'view' => 'pagination/basic',
        ));

        $limit = $pagination->items_per_page;
        $offset = $pagination->offset;
      
        $show_article = $pagination_model->load_segregate_element($limit, $offset);
    }

    public function action_add() {
        
    }

    public function action_edit() {
        
    }

    public function action_delete() {
        
    }

}
