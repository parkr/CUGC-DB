<?php
App::uses('AppController', 'Controller');
/**
 * GraduationYears Controller
 *
 * @property GraduationYear $GraduationYear
 */
class GraduationYearsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->GraduationYear->recursive = 0;
		$this->set('graduationYears', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->GraduationYear->id = $id;
		if (!$this->GraduationYear->exists()) {
			throw new NotFoundException(__('Invalid graduation year'));
		}
		$this->set('graduationYear', $this->GraduationYear->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->GraduationYear->create();
			if ($this->GraduationYear->save($this->request->data)) {
				$this->Session->setFlash(__('The graduation year has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The graduation year could not be saved. Please, try again.'));
			}
		}
		$members = $this->GraduationYear->Member->find('list');
		$this->set(compact('members'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->GraduationYear->id = $id;
		if (!$this->GraduationYear->exists()) {
			throw new NotFoundException(__('Invalid graduation year'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->GraduationYear->save($this->request->data)) {
				$this->Session->setFlash(__('The graduation year has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The graduation year could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->GraduationYear->read(null, $id);
		}
		$members = $this->GraduationYear->Member->find('list');
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
		$this->GraduationYear->id = $id;
		if (!$this->GraduationYear->exists()) {
			throw new NotFoundException(__('Invalid graduation year'));
		}
		if ($this->GraduationYear->delete()) {
			$this->Session->setFlash(__('Graduation year deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Graduation year was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
