<?php
class Info extends CI_Controller {
    
    public function index() {
        session_start();
        $data['texto'] = isset($_SESSION['_msg']['texto'])?$_SESSION['_msg']['texto']:'Pulsa el botón para ir a home';
        $data['uri'] = isset($_SESSION['_msg']['uri'])?$_SESSION['_msg']['uri']:'';
        $data['severity'] = isset($_SESSION['_msg']['severity'])?$_SESSION['_msg']['severity']:'';
        
        unset ($_SESSION['_msg']);
        frame($this,'_templates/message',$data);
    }
}
?>