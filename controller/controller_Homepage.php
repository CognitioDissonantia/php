<?php

class controller_Homepage extends Controller {
    public function Show($action = '', array $request = array()) {
        return $this->Output('homepage', array('page_title' => 'Главная'));
    }
}

?>