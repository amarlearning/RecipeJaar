<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;


class IndexController extends AppController {

	public function index() {
		$connection = ConnectionManager::get('default');
		$resultUsers = $connection->execute('SELECT * FROM users')->fetchAll('assoc');
		$resultPosts = $connection->execute('SELECT * FROM posts')->fetchAll('assoc');
		$var = true;
		$this->set([
			'users'=>$resultUsers,
			'posts'=>$resultPosts,
			'var' => $var
			]);
	}

	public function beforeFilter(Event $event) {
        $this->Auth->allow(['index']);    
    }
}