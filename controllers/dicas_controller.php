<?php
    Class DicasController extends AppController{

        var $name = 'Dicas';

        function index(){

            $dicas = $this->Dica->find('all');

            if(isset($this->params['requested'])){
                return $dicas;
            }else{
                $this->set('dicas', $dicas);
            }
        }

        function mostrar($id){

            $this->autoRender = false;

            $dicas = $this->Dica->find('first', array('conditions'=>array('Dica.id'=>$id)));

            return json_encode($dicas);
        }

        function adicionar(){

        }
        
    }