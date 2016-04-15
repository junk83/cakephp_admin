<?php
class HomesController extends AppController
{
    public $uses = array('Contact');
    public $helpers = array('Paginator');
    public $components = array('Paginator');

    public function beforeFilter()
    {
        $this->Auth->deny('home', 'contacts');
        $this->set('user', $this->Auth->user('name'));
    }

    public function home()
    {

    }

    public function contacts()
    {

        $this->Paginator->settings = array(
                'limit' => 20,
                'order' => array('created' => 'desc'),
        );
        $this->set('datas', $this->paginate('Contact'));

    }

    public function detail()
    {
        if($this->request->params['id']) {
            $id = $this->request->params['id'];
            $this->set('datas', $this->Contact->findById($id));
        }
    }

}