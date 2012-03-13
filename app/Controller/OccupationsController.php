<?php
App::uses('AppController', 'Controller');
/**
 * Occupations Controller
 *
 * @property Occupation $Occupation
 */
class OccupationsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Occupation->recursive = 0;
		$this->set('occupations', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Occupation->id = $id;
		if (!$this->Occupation->exists()) {
			throw new NotFoundException(__('Invalid occupation'));
		}
		$this->set('occupation', $this->Occupation->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Occupation->create();
			if ($this->Occupation->save($this->request->data)) {
				$this->Session->setFlash(__('The occupation has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The occupation could not be saved. Please, try again.'));
			}
		}
		$members = $this->Occupation->Member->find('list');
		$industries = $this->Occupation->Industry->find('list');
		$this->set(compact('members', 'industries'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Occupation->id = $id;
		if (!$this->Occupation->exists()) {
			throw new NotFoundException(__('Invalid occupation'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Occupation->save($this->request->data)) {
				$this->Session->setFlash(__('The occupation has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The occupation could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Occupation->read(null, $id);
		}
		$members = $this->Occupation->Member->find('list');
		$industries = $this->Occupation->Industry->find('list');
		$this->set(compact('members', 'industries'));
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
		$this->Occupation->id = $id;
		if (!$this->Occupation->exists()) {
			throw new NotFoundException(__('Invalid occupation'));
		}
		if ($this->Occupation->delete()) {
			$this->Session->setFlash(__('Occupation deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Occupation was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
