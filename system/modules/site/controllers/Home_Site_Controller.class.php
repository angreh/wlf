<?php

/**
 * Description of Home_Site_Controller
 *
 * @author Lola
 */
class Home_Site_Controller extends DefaultController {
    
    public function indexAction(){
        $this->viewInit();
        
        $model = new Usuario_Site_Mapper();
        $x = $model->get();
        $x = $x[0];
        
        echo $x->nombre;
    }
    
}
