<?php

defined('SYSPATH') or die('No direct script access.');

/**
 * Controller responsible for login and logout
 * 
 * @author Przemylaw Kotlowski <john.doe@example.com>
 */
class Controller_Login extends Controller_Welcome {

    public function action_login() {
        $msg = '';
        $status = true;
        if (!Auth::instance()->logged_in()) {
            $this->template->center = View::factory('sites/login')
                    ->bind('msg', $msg)
                    ->bind('status', $status);

            $post = $this->request->post();
            if (isset($post['Submit'])) {
                try {
                    $r = Auth::instance()->login($post['login'], $post['password']);
                    if (!$r) {
                        throw new Exception('Sorry we can not login in now please check username and password<br> ');
                    }
                    $this->template->center = View::factory('sites/loged_in');
                } catch (Exception $exc) {
                    $status = false;
                    $msg = $exc->getMessage();
                }
            }
        } else {
            echo 'You are currently loged';
        }
    }

    public function action_logout() {
        if (Auth::instance()->logged_in()) {
            Auth::instance()->logout();
            $this->redirect('/');
        } else {
            echo 'You are not loged';
        }
    }

    public function action_register() {
        if (!Auth::instance()->logged_in()) {
            $this->template->center = View::factory('sites/register')
                    ->bind('msg', $msg)
                    ->bind('errors', $errors);

            $post = $this->request->post();
            if (isset($post['Submit'])) {
                $email = trim($post['email']);
                $username = trim($post['username']);
                $password = trim($post['password']);
                $client = ORM::factory('User');
                $client->email = $email; //$post['email'];
                $client->username = $username; //$post['username'];
                $client->password = $password; //$post['password'];
                try {
                    $client->save();
                    $role = ORM::factory('Role', '1');
                    $client->add('roles', $role);
                    try {
                        $client->save();
                        $msg = 'Congratulations!';
                    } catch (ORM_Validation_Exception $exc) {
                        $errors = $exc->errors('models');
                    }
                } catch (ORM_Validation_Exception $exc) {
                    $errors = $exc->errors('models');
                }
                var_dump($errors);
            }
        } else {
            echo 'You are currently loged';
        }
    }

}
