<?php 

class AboutController extends AppController {

    var $name = 'about';

    var $uses = array('Page', 'DynamicPage', 'Contact', 'Setting');

    var $components = array('Mailer');

    

    function index() {

    	$this->redirect('/about/overview/');

    }

    

    

    function overview() {}

    function partners() {}

    function management() {}



    function contact() {

        $content = $this->Contact->find("category='page' AND name='contact'");

        $this->set('email_error', 'Email must be filled in');



        if (!empty($this->data)) {

            

            if ($this->Contact->validates($this->data['Contact'])) {

                

                $settings = $this->Setting->find('list', array('fields' => array('Setting.name', 'Setting.content')));

/*

                $this->Mailer->init();

                $this->Mailer->__set('From', $this->data['Contact']['email']);

                $this->Mailer->__set('FromName', $this->data['Contact']['name']);

                $this->Mailer->AddAddress($settings['emailWebmaster']);

                

                $subject = 'Message from ' . $settings['siteName'];

                $this->Mailer->IsHtml(true);

*/



		        $headers  = "MIME-Version: 1.0\n";

		        $headers .= "Content-type: text/html; charset=iso-8859-1\n";

		        $headers .= "X-Priority: 3\n";

		        $headers .= "X-MSMail-Priority: Normal\n";

		        $headers .= "X-Mailer: php\n";

		        $headers .= "From: \"".$this->data['Contact']['name']."\" <".$this->data['Contact']['email'].">\n";

				$subject = 'Message from ' . $settings['siteName'];

				$to      = $settings['emailWebmaster'];

		        

		                       

                

                $this->data['Contact']['ip'] = env('HTTP_USER_AGENT');

                $this->set('content', $this->data['Contact']);



                ob_start();

                $this->render('email_contact', 'email_contact');

                $message = ob_get_clean();



				$result = mail($to, $subject, $message, $headers); 

				

                if ($result) {

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

    

}

?>