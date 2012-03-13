<?php
App::uses('AppController', 'Controller');
/**
 * MailingAddresses Controller
 *
 * @property MailingAddress $MailingAddress
 */
class MailingAddressesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->MailingAddress->recursive = 0;
		$this->set('mailingAddresses', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->MailingAddress->id = $id;
		if (!$this->MailingAddress->exists()) {
			throw new NotFoundException(__('Invalid mailing address'));
		}
		$this->set('mailingAddress', $this->MailingAddress->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MailingAddress->create();
			if ($this->MailingAddress->save($this->request->data)) {
				$this->Session->setFlash(__('The mailing address has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mailing address could not be saved. Please, try again.'));
			}
		}
		$members = $this->MailingAddress->Member->find('list');
		$this->set(compact('members'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->MailingAddress->id = $id;
		if (!$this->MailingAddress->exists()) {
			throw new NotFoundException(__('Invalid mailing address'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->MailingAddress->save($this->request->data)) {
				$this->Session->setFlash(__('The mailing address has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mailing address could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->MailingAddress->read(null, $id);
		}
		$members = $this->MailingAddress->Member->find('list');
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
		$this->MailingAddress->id = $id;
		if (!$this->MailingAddress->exists()) {
			throw new NotFoundException(__('Invalid mailing address'));
		}
		if ($this->MailingAddress->delete()) {
			$this->Session->setFlash(__('Mailing address deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Mailing address was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
