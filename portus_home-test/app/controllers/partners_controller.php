<?php 

class PartnersController extends AppController {

    var $uses = array('Page', 'DynamicPage', 'Partners', 'Setting');



    function index() {

    	$this->redirect('/partners/solutions/');

    }



    function solutions() {}

    function energy() {}    

    function internet_telco() {}    

    function dias_platform() {}    

    function dias_gateways() {}    

    function dias_applications() {} 

    function home_monitoring() {}   

    function success() {}    



    function inquiry_form() {

        $this->set('email_error', 'Email must be filled in');



        if (!empty($this->data)) {

            

            if ($this->Partners->validates($this->data['Partners'])) {

                

                $settings = $this->Setting->find('list', array('fields' => array('Setting.name', 'Setting.content')));



		        $headers  = "MIME-Version: 1.0\n";

		        $headers .= "Content-type: text/html; charset=iso-8859-1\n";

		        $headers .= "X-Priority: 3\n";

		        $headers .= "X-MSMail-Priority: Normal\n";

		        $headers .= "X-Mailer: php\n";

		        $headers .= "From: \"" . $this->data['Partners']['first_name']. " " . $this->data['Partners']['last_name'] . "\" <" . $this->data['Partners']['email'].">\n";

				$subject = 'Message from ' . $settings['siteName'];

				$to      = $settings['emailWebmaster'];

                

                $this->data['Partners']['ip'] = env('HTTP_USER_AGENT');

                $this->set('content', $this->data['Partners']);



                ob_start();

                $this->render('email_enquiry', 'email_contact');

                $message = ob_get_clean();



				$result = mail($to, $subject, $message, $headers); 

				

                if ($result) {

                    $this->redirect('/partners/success/');

                    exit();

                    

                } 

            

            } else {

                

                if ($this->data['Partners']['email'] && $this->Partners->validationErrors['email']) {

                   $this->set('email_error', 'Please enter a valid email');

                } 

                

            }

            

            if(isset($this->params['requested'])) {

                //return $content;

            }

           

        }



        //$this->set('content', $content);    

    

    

    }    

    

    

        

}

?>