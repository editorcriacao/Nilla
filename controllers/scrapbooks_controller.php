<?php

Class ScrapbooksController extends AppController {

    var $name = 'Scrapbooks';

    function index() {
        $scrap = $this->Scrapbook->find('all');
                
        if (isset($this->params['requested'])) {
            return $scrap;
        } else {
            $this->set('scrap', $scrap);
        }
    }

    function mostrar($id) {

        $this->autoRender = false;
        $scrap = $this->Scrapbook->find('first', array('conditions' => array('Scrapbook.id' => $id)));
        return json_encode($scrap);
    }

    function adicionar() {
        
    }

}
