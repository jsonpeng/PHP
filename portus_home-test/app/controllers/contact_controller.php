<?php 

class ContactController extends AppController {

    var $name = 'contact';

    var $uses = array('Contact', 'Setting');

    var $components = array('Mailer');



    function index() {

       

        $content = $this->Contact->find("category='page' AND name='contact'");

        $this->set('email_error', 'Email must be filled in');



        if (!empty($this->data)) {

            

            if ($this->Contact->validates($this->data['Contact'])) {

                

                $settings = $this->Setting->find('list', array('fields' => array('Setting.name', 'Setting.content')));



                $this->Mailer->init();

                $this->Mailer->__set('From', $this->data['Contact']['email']);

                $this->Mailer->__set('FromName', $this->data['Contact']['name']);

                $this->Mailer->AddAddress($settings['emailWebmaster']);

                $this->Mailer->Subject = 'Message from ' . $settings['siteName'];

                $this->Mailer->IsHtml(true);

                $this->data['Contact']['ip'] = env('HTTP_USER_AGENT');

                $this->set('content', $this->data['Contact']);



                ob_start();

                $this->render('email_contact', 'email_contact');

                $this->Mailer->Body = ob_get_clean();



                if ($this->Mailer->send()) {

                    $this->redirect('/contact/success/');

                    exit();

                } 

            

            } else {

                

                if (!$this->data['Contact']['name']) {

                    $this->Contact->invalidate($this->data['Contact']['name']);   

                }

                

                if (!$this->data['Contact']['message']) {

                    $this->Contact->invalidate($this->data['Contact']['message']);   

                }

                

                if ($this->data['Contact']['email'] && $this->Contact->validationErrors['email']) {

                   $this->set('email_error', 'Please enter a valid email');

                } 

                

            }

            

            if(isset($this->params['requested'])) {

                return $content;

            }

           

        }



        $this->set('content', $content);

    }

    

    function success() {

        $content = $this->Contact->find("category='page' AND name='contact'");

        $this->set('content', $content);

    }

    

    function beforeFilter() {

        $username = $this->Session->read('user.email');

        if ($username) {

            $this->set('username', $username);

        }

    }        

}

?>