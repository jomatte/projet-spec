<?php
App::uses('AppController', 'Controller');
/**
 * Employeurs Controller
 *
 * @property Employeur $Employeur
 * @property PaginatorComponent $Paginator
 */
class EmployeursController extends AppController {

/**
 * Components
 *
 * @var array
 */

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Employeur->recursive = 0;
		$this->Paginator->settings=array(
			'limit' => '20'
		);
		$this->set('employeurs', $this->Paginator->paginate());
		//$this->set('employeurs', $this->Employeur->find('all'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Employeur->exists($id)) {
			throw new NotFoundException(__('Invalid employeur'));
		}
		$options = array('conditions' => array('Employeur.' . $this->Employeur->primaryKey => $id));
		$this->set('employeur', $this->Employeur->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Employeur->create();
			if ($this->Employeur->save($this->request->data)) {
				$this->Session->setFlash(__('L\'employeur a été sauvegardé.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employeur could not be saved. Please, try again.'));
			}
		}
		$this->render('edit');
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Employeur->exists($id)) {
			throw new NotFoundException(__('Invalid employeur'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Employeur->save($this->request->data)) {
				$this->Session->setFlash(__('L\'employeur a été sauvegardé.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employeur could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Employeur.' . $this->Employeur->primaryKey => $id));
			$this->request->data = $this->Employeur->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Employeur->id = $id;
		if (!$this->Employeur->exists()) {
			throw new NotFoundException(__('Invalid employeur'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Employeur->delete()) {
			$this->Session->setFlash(__('L\'employeur a été supprimé.'));
		} else {
			$this->Session->setFlash(__('The employeur could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
