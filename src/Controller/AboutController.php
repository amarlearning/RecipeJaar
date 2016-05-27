<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;


class AboutController extends AppController {
	public function index() {
		$this->set([
			'var' => true
			]);
	}

	public function beforeFilter(Event $event) {
		$this->Auth->allow(['index']);
	}
}









