<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;

class RecipeController extends AppController {

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

	public function view($id) {
		$var = true;
		$connection = ConnectionManager::get('default');
		$results = $connection
		->execute('SELECT * FROM posts WHERE id = :id', ['id' => $id])
		->fetchAll('assoc');
		$get = $connection
		->execute('SELECT * FROM users')
		->fetchAll('assoc');
		$this->set([
			'var' => $var,
			'result' => $results,
			'get' => $get
			]);

		if($results == NULL) {
			$this->redirect(['controller' => 'Recipe','action'=>'index']);
		}

	}

	public function beforeFilter(Event $event) {
        $this->Auth->allow(['index','view']);    
    }
}