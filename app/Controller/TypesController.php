<?php
class TypesController extends AppController{
    public function index(){
        $types = $this->Type->find('all');
        $this->set('types', $types);
    }
    
    public function add(){
        if ($this->request->is('post')){
            if ($this->Type->save($this->request->data)){
                $this->Session->setFlash('New type is added.');
                $this->redirect('/types/');
            }
        }
    }
}
?>