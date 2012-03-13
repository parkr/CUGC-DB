<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 */
class UsersController extends AppController {

	public function login() {
		$this->set('title_for_layout', 'Login');
		if ($this->request->is('post')) {
			$user = $this->User->findByEmail($this->request->data['User']['email']);
			if($user && $user['User'] && $user['User']['email']){
				if($this->Auth->login()){
					return $this->redirect($this->Auth->redirect());
				}else{
					$this->Session->setFlash(__('Your username and/or password is incorrect.'), 'default', array(), 'auth');
				}
			}else{
				$this->Session->setFlash(__('The email entered has not been registered.'), 'default', array(), 'auth');
			}
		}
	}
	public function logout() {
		$this->set('title_for_layout', 'Logout');
		$redirect_to = $this->Auth->logout();
		if($redirect_to){
			$this->Session->setFlash('You have been successfully logged out.');
			$this->redirect($redirect_to);
		}else{
			$this->Session->setFlash('You could not be logged out.');
			$this->redirect($redirect_to);
		}
	}


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if($this->request->data['User']['password'] == $this->request->data['User']['confirm_password']){
				if ($this->User->save($this->request->data)) {
					$this->Session->setFlash(__('The user has been saved'));
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
				}
			} else {
				$this->Session->setFlash(__('The passwords do not match.'));
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
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('User does not exist'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			
			$fieldlist = array();
			if($this->request->data['User']['password'] != ""){
				// something entered - save the password! 
				$fieldList[] = 'password';
			}
			
			if($this->request->data['User']['password'] == $this->request->data['User']['confirm_password']){
				if ($this->User->save($this->request->data, true, $fieldlist)) {
					$this->Session->setFlash(__('The user has been saved'));
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
				}
			} else {
				$this->Session->setFlash(__('The passwords do not match.'));
			}
		} else {
			$this->request->data = $this->User->read(null, $id);
			$this->request->data['User']['password'] = "";
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
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->User->delete()) {
			$this->Session->setFlash(__('User deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('User was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
