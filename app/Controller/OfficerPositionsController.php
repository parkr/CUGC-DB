<?php
App::uses('AppController', 'Controller');
/**
 * OfficerPositions Controller
 *
 * @property OfficerPosition $OfficerPosition
 */
class OfficerPositionsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->OfficerPosition->recursive = 0;
		$this->set('officerPositions', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->OfficerPosition->id = $id;
		if (!$this->OfficerPosition->exists()) {
			throw new NotFoundException(__('Invalid officer position'));
		}
		$this->set('officerPosition', $this->OfficerPosition->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->OfficerPosition->create();
			if ($this->OfficerPosition->save($this->request->data)) {
				$this->Session->setFlash(__('The officer position has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The officer position could not be saved. Please, try again.'));
			}
		}
		$members = $this->OfficerPosition->Member->find('list');
		$this->set(compact('members'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->OfficerPosition->id = $id;
		if (!$this->OfficerPosition->exists()) {
			throw new NotFoundException(__('Invalid officer position'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->OfficerPosition->save($this->request->data)) {
				$this->Session->setFlash(__('The officer position has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The officer position could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->OfficerPosition->read(null, $id);
		}
		$members = $this->OfficerPosition->Member->find('list');
		$this->set(compact('members'));
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
		$this->OfficerPosition->id = $id;
		if (!$this->OfficerPosition->exists()) {
			throw new NotFoundException(__('Invalid officer position'));
		}
		if ($this->OfficerPosition->delete()) {
			$this->Session->setFlash(__('Officer position deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Officer position was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
