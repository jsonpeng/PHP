<?php

/**

 * error.php

 *

 * custom error handler to redirect invalid urls to 

 */

class AppError extends ErrorHandler

{



    function __construct($method, $messages) {

        

        static $__previousError = null;

        $this->__dispatch =& new Dispatcher();



        if ($__previousError != array($method, $messages)) {

            $__previousError = array($method, $messages);



            if (!class_exists('AppController')) {

                loadController(null);

            }



            $this->controller =& new AppController();

            //$this->__dispatch->start($this->controller);







            if (method_exists($this->controller, 'apperror')) {

                return $this->controller->appError($method, $messages);

            }

        } else {

            $this->controller =& new Controller();

        }



        call_user_func_array(array(&$this, $method), $messages);

    }



    function missingController($params) {



		$Dispatcher = new Dispatcher();
		$Dispatcher->dispatch('/dynamicpages/', $params);

        

    }



}//AppError

?>