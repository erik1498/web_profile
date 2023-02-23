<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function renderContent($id)
    {
        if ($id == "renderAppContent") {
            $this->Render_model->renderFromDatabaseToFile();
            echo json_encode(true);
            die;
        }
        echo json_encode(false);
    }

}
