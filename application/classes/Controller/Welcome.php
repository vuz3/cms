<?php

defined('SYSPATH') or die('No direct script access.');

/**
 * Main controller
 * 
 * @author Przemyslaw Kotlowski <john.doe@example.com>
 */
class Controller_Welcome extends Controller_Template {

    /**
     * Css folder
     * it's can be array or href
     */
    private $_CSS_ = 'assets/css/';

    /**
     * JS folders
     * it's can be array or href
     */
    private $_JS_ = array(
        'assets/js/core/',
        'assets/js/',
        'code.jquery.com/ui/1.10.2/jquery-ui.js',
    );

    /**
     * Head template
     *
     * @var string
     */
    public $template = 'site';

    /**
     * Functions get array with or simply href to
     * folder with css, and return all
     * files with extend *css or null if
     * file dosn't exists
     * 
     * @param mixed $where
     * @return mixed
     */
    private function check_css($where) {
        if (is_array($where)) {
            foreach ($where as $location) {
                foreach (glob($location . '*.css') as $file) {
                    $css[] = $file;
                }
            }
        } else {
            foreach (glob($where . '*.css') as $file) {
                $css[] = $file;
            }
        }
        (null != $css) ? $css : $css = null;
        return $css;
    }

    /**
     * Functions get array with href or simply href to
     * folder with js, and return all
     * files with extend *js or null if
     * file dosn't exists
     * 
     * @param mixed $where
     * @return mixed
     */
    private function check_js($where) {
        if (is_array($where)) {
            foreach ($where as $location) {
                foreach (glob($location . '*.js') as $file) {
                    $js[] = $file;
                }
            }
        } else {
            foreach (glob($location . '*.js') as $file) {
                $js[] = $file;
            }
        }
        (null != $js) ? $js : $js = null;
        return $js;
    }

    public function before() {
        parent::before();
        if (Auth::instance()->logged_in()) {
            $user = Auth::instance()->get_user();
        } else {
            $user = 'You are not logged';
        }
        $this->template->title = 'CMS';
        $this->template->js = view::factory('partial/js')
                ->set('scripts', $this->check_js($this->_JS_));
        $this->template->css = View::factory('partial/css')
                ->set('styles', $this->check_css($this->_CSS_));
        $this->template->met_tag = View::factory('partial/meta_tag');
    }

    public function after() {
        $this->template->header = View::factory('partial/header')
                ->bind('user', $user);
        $this->template->menu = View::factory('partial/menu');
        $this->template->footer = View::factory('partial/footer');
        parent::after();
    }

    public function action_index() {
        $this->template->center = View::factory('sites/index');
    }

}
