<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class ContactController extends AppController {
	public function index() {
		$this->set([
			'var' => true
			]);
	}

	public function beforeFilter(Event $event) {
		return $this->Auth->allow(['index']);
	}
}









