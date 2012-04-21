<?php
App::uses('AppController', 'Controller');
/**
 * IntlTours Controller
 *
 * @property IntlTour $IntlTour
 */
class IntlToursController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->IntlTour->recursive = 0;
		$this->set('intlTours', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->IntlTour->id = $id;
		if (!$this->IntlTour->exists()) {
			throw new NotFoundException(__('Invalid intl tour'));
		}
		$this->set('intlTour', $this->IntlTour->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->IntlTour->create();
			if ($this->IntlTour->save($this->request->data)) {
				$this->Session->setFlash(__('The intl tour has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The intl tour could not be saved. Please, try again.'));
			}
		}
		$members = $this->IntlTour->Member->find('list');
		$this->set(compact('members'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->IntlTour->id = $id;
		if (!$this->IntlTour->exists()) {
			throw new NotFoundException(__('Invalid intl tour'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->IntlTour->save($this->request->data)) {
				$this->Session->setFlash(__('The intl tour has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The intl tour could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->IntlTour->read(null, $id);
		}
		$members = $this->IntlTour->Member->find('list');
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
		$this->IntlTour->id = $id;
		if (!$this->IntlTour->exists()) {
			throw new NotFoundException(__('Invalid intl tour'));
		}
		if ($this->IntlTour->delete()) {
			$this->Session->setFlash(__('Intl tour deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Intl tour was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
