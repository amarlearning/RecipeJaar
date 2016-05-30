<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class ContactsController extends AppController
{

    public function index() {
        $this->set([
            'var' => true
            ]);
    }

    public function beforeFilter(Event $event) {
        return $this->Auth->allow(['index','submit']);
    }


    public function view($id = null)
    {
        $this->set([
            'var' => true
            ]);
    }

    public function submit()
    {
        $contact = $this->Contacts->newEntity();
        if ($this->request->is('post')) {
            $contact = $this->Contacts->patchEntity($contact, $this->request->data);
            if ($this->Contacts->save($contact)) {
                $this->Flash->success(__('The contact has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The contact could not be saved. Please, try again.'));
                // return $this->redirect(['action' => 'index']);
            }
        }
        $this->set(compact('contact'));
        $this->set('_serialize', ['contact']);
    }
}
