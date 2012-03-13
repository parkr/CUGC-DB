<?php
App::uses('AppController', 'Controller');
/**
 * Members Controller
 *
 * @property Member $Member
 */
class MembersController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Member->recursive = 1;
		$this->set('members', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Member->id = $id;
		if (!$this->Member->exists()) {
			throw new NotFoundException(__('Invalid member'));
		}
		$this->set('member', $this->Member->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			
			// Parse emails
			$emails = explode(',', $this->request->data['Email']['email']);
			unset($this->request->data['Email']['email']);
			$i = 0;
			foreach($emails as $email){
				$this->request->data['Email'][$i] = array(
					'email' => trim($email)
				);
				$i++;
			}
			// Parse phone numbers
			$phone_numbers = explode(',', $this->request->data['PhoneNumber']['phone_number']);
			unset($this->request->data['PhoneNumber']['phone_number']);
			$i = 0;
			foreach($phone_numbers as $phone_number){
				$this->request->data['PhoneNumber'][$i] = array(
					'phone_number' => trim($phone_number)
				);
				$i++;
			}
			// Parse degrees, years
			$grad['degrees'] = explode(',', $this->request->data['GraduationYear']['degree']);
			unset($this->request->data['GraduationYear']['degree']);
			$grad['years'] = explode(',', $this->request->data['GraduationYear']['year']);
			unset($this->request->data['GraduationYear']['year']);
			
			$i = 0;
			foreach($grad['degrees'] as $graddegree){
				$this->request->data['GraduationYear'][$i] = array(
					'degree' => trim($graddegree),
					'year' => trim(@$grad['years'][$i])
				);
				$i++;
			}
			// Parse mailing addresses, greater cities, states
			$addresses['mailing_addresses'] = explode(';', $this->request->data['MailingAddress']['mailing_address']);
			unset($this->request->data['MailingAddress']['mailing_address']);
			
			$addresses['greater_cities'] = explode(';', $this->request->data['MailingAddress']['greater_city']);
			if(count($addresses['greater_cities']) == 1 && count($addresses['mailing_addresses']) > 1){
				$addresses['greater_cities'] = explode(',', $this->request->data['MailingAddress']['greater_city']);
			}
			unset($this->request->data['MailingAddress']['greater_city']);
			
			$addresses['states'] = explode(';', $this->request->data['MailingAddress']['state']);
			if(count($addresses['states']) == 1 && count($addresses['mailing_addresses']) > 1){
				$addresses['states'] = explode(',', $this->request->data['MailingAddress']['state']);
			}
			unset($this->request->data['MailingAddress']['state']);
			
			$i = 0;
			foreach($addresses['mailing_addresses'] as $mailing_address){
				$this->request->data['MailingAddress'][$i] = array(
					'mailing_address' => trim($mailing_address),
					'greater_city' => trim(@$addresses['greater_cities'][$i]),
					'state' => trim(@$addresses['states'][$i]),
				);
				$i++;
			}
			// Parse occupations: positions, years
			$occupations['positions'] = explode(',', $this->request->data['Occupation']['position']);
			unset($this->request->data['Occupation']['position']);
			$occupations['companies'] = explode(',', $this->request->data['Occupation']['company']);
			unset($this->request->data['Occupation']['company']);
			
			$i = 0;
			foreach($occupations['companies'] as $company){
				$this->request->data['Occupation'][$i] = array(
					'position' => trim(@$occupations['positions'][$i]),
					'company' => trim($company),
				);
				$i++;
			}
			// Parse officer positions: positions, years
			// Parse occupations: positions, years
			$officerpositions['positions'] = explode(',', $this->request->data['OfficerPosition']['position']);
			unset($this->request->data['OfficerPosition']['position']);
			$officerpositions['years'] = explode(',', $this->request->data['OfficerPosition']['years']);
			unset($this->request->data['OfficerPosition']['years']);
			
			$i = 0;
			foreach($officerpositions['positions'] as $position){
				$this->request->data['OfficerPosition'][$i] = array(
					'position' => trim($position),
					'company' => trim(@$officerpositions['years'][$i]),
				);
				$i++;
			}
			
			$this->Member->create();
			if ($this->Member->saveAssociated($this->request->data)) {
				$this->Session->setFlash(__('The member has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The member could not be saved. Please, try again.'));
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
		$this->Member->id = $id;
		if (!$this->Member->exists()) {
			throw new NotFoundException(__('Invalid member'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Member->save($this->request->data)) {
				$this->Session->setFlash(__('The member has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The member could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Member->read(null, $id);
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
		$this->Member->id = $id;
		if (!$this->Member->exists()) {
			throw new NotFoundException(__('Invalid member'));
		}
		if ($this->Member->delete()) {
			$this->Session->setFlash(__('Member deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Member was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
