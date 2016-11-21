<?php
class UserPasswordController extends AppController {

    function beforeFilter() {
        $username = $this->Session->read('user.email');
        if ($username) {
            $this->set('username', $username);
        } else {
            $this->redirect('/users/login/');
        }
    }     
    
    function index() {
        
        $this->set('error_password', '');
        $this->set('error_confirm_password', '');

        if (!empty($this->data)) {

            if ($this->data['UserPassword']['password'] && ($this->data['UserPassword']['password'] == $this->data['UserPassword']['confirm_password'])) {
                unset($this->data['UserPassword']['confirm_password']);
                $this->data['UserPassword']['password'] = md5($this->data['UserPassword']['password']);
                $this->UserPassword->save($this->data);
                //$this->Session->setFlash('The Profile has been saved');
                $this->redirect('/users/');
                exit();
            }
            
            if (!$this->data['UserPassword']['password']) {
                $this->set('error_password', 'Password can not be empty');
            }
            
            if (!$this->data['UserPassword']['confirm_password']) {
                $this->set('error_confirm_password', 'Confirm Password can not be empty');
            }
            
            if ($this->data['UserPassword']['password'] && ($this->data['UserPassword']['password'] != $this->data['UserPassword']['confirm_password'])) {
                $this->set('error_password', 'Password and Confirm Password do not match');
            }          
            
        } else {
        
             $this->data = $this->UserPassword->findByEmail($this->Session->read('user.email'));
             if (isset($this->data['UserPassword']['password'])) {
                unset($this->data['UserPassword']['password']);
            }

        }         
        
    }    

}
?>