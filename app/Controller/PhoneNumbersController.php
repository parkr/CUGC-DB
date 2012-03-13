<?php
App::uses('AppController', 'Controller');
/**
 * PhoneNumbers Controller
 *
 * @property PhoneNumber $PhoneNumber
 */
class PhoneNumbersController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PhoneNumber->recursive = 0;
		$this->set('phoneNumbers', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->PhoneNumber->id = $id;
		if (!$this->PhoneNumber->exists()) {
			throw new NotFoundException(__('Invalid phone number'));
		}
		$this->set('phoneNumber', $this->PhoneNumber->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PhoneNumber->create();
			if ($this->PhoneNumber->save($this->request->data)) {
				$this->Session->setFlash(__('The phone number has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The phone number could not be saved. Please, try again.'));
			}
		}
		$members = $this->PhoneNumber->Member->find('list');
		$this->set(compact('members'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->PhoneNumber->id = $id;
		if (!$this->PhoneNumber->exists()) {
			throw new NotFoundException(__('Invalid phone number'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PhoneNumber->save($this->request->data)) {
				$this->Session->setFlash(__('The phone number has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The phone number could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->PhoneNumber->read(null, $id);
		}
		$members = $this->PhoneNumber->Member->find('list');
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
		$this->PhoneNumber->id = $id;
		if (!$this->PhoneNumber->exists()) {
			throw new NotFoundException(__('Invalid phone number'));
		}
		if ($this->PhoneNumber->delete()) {
			$this->Session->setFlash(__('Phone number deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Phone number was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
