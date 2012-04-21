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
			throw new NotFoundException(__('Invalid member.'));
		}
		$this->Member->recursive = 2;
		$this->set('accounts', $this->Member->Gift->Account->find('all'));
		$this->set('member', $this->Member->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Member->create();
			if ($this->Member->saveAll($this->request->data)) {
				$this->Session->setFlash(__('Member has been saved.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The member could not be saved. Please, try again.'));
			}
		}
	}
	
/**
 * simple_add method
 *
 * @return void
 */
	public function simple_add() {
		if ($this->request->is('post')) {
			$this->Member->create();
			if ($this->Member->save($this->request->data)) {
				$this->Session->setFlash(__('Member has been saved.'));
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
			throw new NotFoundException(__('Invalid member.'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			$this->Member->Email->deleteAll				(array('Email.member_id' => $id), false);
			$this->Member->PhoneNumber->deleteAll		(array('PhoneNumber.member_id' => $id), false);
			$this->Member->MailingAddress->deleteAll	(array('MailingAddress.member_id' => $id), false);
			$this->Member->Occupation->deleteAll		(array('Occupation.member_id' => $id), false);
			$this->Member->OfficerPosition->deleteAll	(array('OfficerPosition.member_id' => $id), false);
			$this->Member->GraduationYear->deleteAll	(array('GraduationYear.member_id' => $id), false);
			$this->Member->IntlTour->deleteAll			(array('IntlTourMember.member_id' => $id), false);
			if ($this->Member->saveAll($this->request->data)) {
				$this->Session->setFlash(__('The member has been saved.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The member could not be saved. Please, try again.'));
				$this->redirect(array('action' => 'view', $id));
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
			throw new NotFoundException(__('Invalid member.'));
		}
		if ($this->Member->delete()) {
			$this->Session->setFlash(__('Member deleted.'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Member was not deleted.s'));
		$this->redirect(array('action' => 'index'));
	}
	
	private function _parseMemberAssociatedFields($data){
		// Parse emails
		$emails = explode(',', $data['Email']['email']);
		unset($data['Email']['email']);
		$i = 0;
		foreach($emails as $email){
			$data['Email'][$i] = array(
				'email' => trim($email)
			);
			$i++;
		}
		// Parse phone numbers
		$phone_numbers = explode(',', $data['PhoneNumber']['phone_number']);
		unset($data['PhoneNumber']['phone_number']);
		$i = 0;
		foreach($phone_numbers as $phone_number){
			$data['PhoneNumber'][$i] = array(
				'phone_number' => trim($phone_number)
			);
			$i++;
		}
		// Parse degrees, years
		$grad['degrees'] = explode(',', $data['GraduationYear']['degree']);
		unset($data['GraduationYear']['degree']);
		$grad['years'] = explode(',', $data['GraduationYear']['year']);
		unset($data['GraduationYear']['year']);
			
		$i = 0;
		foreach($grad['degrees'] as $graddegree){
			$data['GraduationYear'][$i] = array(
				'degree' => trim($graddegree),
				'year' => trim(@$grad['years'][$i])
			);
			$i++;
		}
		// Parse mailing addresses, greater cities, states
		$addresses['street'] = explode(';', $data['MailingAddress']['street']);
		unset($data['MailingAddress']['street']);
		
		$mailing_address_fields = array('city', 'greater_city', 'zip_code', 'state');
		foreach($mailing_address_fields as $mailing_address_field){
			$pluralized = Inflector::pluralize($mailing_address_field);
			$addresses[$pluralized] = explode(';', $data['MailingAddress'][$mailing_address_field]);
			if(count($addresses[$pluralized]) == 1 && count($addresses['street']) > 1){
				$addresses['greater_cities'] = explode(',', $data['MailingAddress'][$mailing_address_field]);
			}
			unset($data['MailingAddress'][$mailing_address_field]);
				
		}
		
		$i = 0;
		foreach($addresses['street'] as $mailing_address){
			$data['MailingAddress'][$i] = array(
				'street' => trim($mailing_address)
			);
			foreach($mailing_address_fields as $mailing_address_field){
				$data['MailingAddress'][$i][$mailing_address_field] = $addresses[Inflector::pluralize($mailing_address_field)][$i];
			}
			$i++;
		}
		// Parse occupations: positions, years
		$occupations['positions'] = explode(',', $data['Occupation']['position']);
		unset($data['Occupation']['position']);
		$occupations['companies'] = explode(',', $data['Occupation']['company']);
		unset($data['Occupation']['company']);
			
		$i = 0;
		foreach($occupations['companies'] as $company){
			$data['Occupation'][$i] = array(
				'position' => trim(@$occupations['positions'][$i]),
				'company' => trim($company),
			);
			$i++;
		}
		// Parse officer positions: positions, years
		$officerpositions['positions'] = explode(',', $data['OfficerPosition']['position']);
		unset($data['OfficerPosition']['position']);
		$officerpositions['years'] = explode(',', $data['OfficerPosition']['years']);
		unset($data['OfficerPosition']['years']);
			
		$i = 0;
		foreach($officerpositions['positions'] as $position){
			$data['OfficerPosition'][$i] = array(
				'position' => trim($position),
				'years' => trim(@$officerpositions['years'][$i]),
			);
			$i++;
		}
		return $data;
	}
}
