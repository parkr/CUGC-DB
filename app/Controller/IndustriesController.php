<?php
App::uses('AppController', 'Controller');
/**
 * Industries Controller
 *
 * @property Industry $Industry
 */
class IndustriesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Industry->recursive = 0;
		$this->set('industries', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Industry->id = $id;
		if (!$this->Industry->exists()) {
			throw new NotFoundException(__('Invalid industry'));
		}
		$this->set('industry', $this->Industry->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Industry->create();
			if ($this->Industry->save($this->request->data)) {
				$this->Session->setFlash(__('The industry has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The industry could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Industry->id = $id;
		if (!$this->Industry->exists()) {
			throw new NotFoundException(__('Invalid industry'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Industry->save($this->request->data)) {
				$this->Session->setFlash(__('The industry has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The industry could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Industry->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Industry->id = $id;
		if (!$this->Industry->exists()) {
			throw new NotFoundException(__('Invalid industry'));
		}
		if ($this->Industry->delete()) {
			$this->Session->setFlash(__('Industry deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Industry was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
