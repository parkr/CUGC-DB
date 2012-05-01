<?php
App::uses('AppModel', 'Model');
/**
 * Member Model
 *
 * @property Email $Email
 * @property Gift $Gift
 * @property GraduationYear $GraduationYear
 * @property MailingAddress $MailingAddress
 * @property Occupation $Occupation
 * @property OfficerPosition $OfficerPosition
 * @property PhoneNumber $PhoneNumber
 * @property IntlTour $IntlTour
 */
class Member extends AppModel {
	
	public $virtualFields = array(
	    'name' => 'CONCAT(Member.first_name, " ", Member.last_name)',
		'formal_name' => 'CONCAT(Member.last_name, ", ", Member.first_name)',
	);
	
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'first_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'You must provide a first name.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'last_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'You must provide a last name.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'is_living' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Is this member living?',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Email' => array(
			'className' => 'Email',
			'foreignKey' => 'member_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Gift' => array(
			'className' => 'Gift',
			'foreignKey' => 'member_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'GraduationYear' => array(
			'className' => 'GraduationYear',
			'foreignKey' => 'member_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'MailingAddress' => array(
			'className' => 'MailingAddress',
			'foreignKey' => 'member_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Occupation' => array(
			'className' => 'Occupation',
			'foreignKey' => 'member_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'OfficerPosition' => array(
			'className' => 'OfficerPosition',
			'foreignKey' => 'member_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'PhoneNumber' => array(
			'className' => 'PhoneNumber',
			'foreignKey' => 'member_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'IntlTour' => array(
			'className' => 'IntlTour',
			'joinTable' => 'intl_tours_members',
			'foreignKey' => 'member_id',
			'associationForeignKey' => 'intl_tour_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);
	
	public $namePrefixes = array(
		"Ms", "Miss", "Mrs", 
		"Mr", "Master",
		"Rev", "Reverend", "Rt Rev", "Right Reverend",
		"Fr", "Father",
		"Dr", "Doctor",
		"Atty", "Attorney",
		"Prof", "Professor",
		"Hon", "Honorable",
		"Pres", "President",
		"Gov", "Governor",
		"Coach",
		"Ofc", "Officer",
		"Msgr", "Monsignor",
		"Sr", "Sister",
		"Br", "Brother",
		"Supt", "Superintendent",
		"Rep", "Representative",
		"Sen", "Senator",
		"Amb", "Ambassador",
		"Treas", "Treasurer",
		"Sec", "Secretary",
		"Pvt", "Private",
		"Cpl", "Corporal",
		"Sgt", "Sargent",
		"Adm", "Administrative",
		"Maj", "Major",
		"Capt", "Captain",
		"Cmdr", "Commander",
		"Lt", "Lieutenant",
		"Lt Col", "Lieutenant Colonel",
		"Col", "Colonel",
		"Gen", "General"
	);
	public $nameSuffixes = array(
		// Pedigrees
		"jr.", "jr", "junior", "Jr.", "Jr", "Junior",
		"sr.", "sr", "senior", "Sr.", "Sr", "Senior",
		"I", "II", "III", "IV", "V", "VI", "VII", "VIII", "IX", "X",
		// Professional suffixes
		"A.B", "B.A.", "B.F.A.", "B.Tech.", "LL.B.", "B.Sc.", "B.Eng.",
		"AB", "BA", "BFA", "BTech", "LLB", "BSc", "BEng",
		"M.A.", "M.F.A.", "LL.M.", "M.L.A.", "M.B.A.", "M.Sc.", "M.Eng.",
		"MA", "MFA", "LLM", "MLA", "MBA", "MSc", "MEng",
		"J.D.", "M.D.", "D.O.", "D.C.", "Ph.D.", "D.Phil.", "LL.D", "Eng.D.",
		"JD", "MD", "DO", "DC", "PhD", "DPhil", "LLD", "EngD",
		"esq", "Esq", "Esq.", "esq.", "esquire", "Esquire"
	);
	
	
/**
 * parseFromCSVLine function
 *
 * creates Member array, with related model Gift
 *
 * @param $data
 */
	public function saveAllInfoFromCSVRow($data){
		// $data is an array containing the info
		/* $data = array(
		 *		0 => "Donor ID",
		 *		1 => "Donor Full Name",
		 *		2 => "Graduation Year",
		 *		3 => "Gift Type",
		 *		4 => "Gift Date",
		 *		5 => "Alumni, Corporation, Other",
		 *		6 => "Amount",
		 *		7 => "Account",
		 *		8 => "Living"
		 *	);
		 */
		// Check if member exists
		// If member exists:
		//		Get id
		// If member does not exist:
		//		Add member to db, get id, continue
		if(strtolower($data[5]) == "alumni" || strtolower($data[5]) == "alumnus"){
			
			// Check if member exists
			// If member exists:
			//		Get id
			// If member does not exist:
			//		Add member to db, get id, continue
			$member = $this->findById($data[0]);
			if($member){
				$id = $member['Member']['id'];
			}else{
				$member = array("Member" => array(
					"id" => $data[0],
					"title" => "",
					"first_name" => "",
					"middle" => "",
					"last_name" => "",
					"suffix" => "",
					"is_living" => ($data[8] == "Y")
				));
				$new_member = $this->_parseFullName($data[1], $member);
				if($new_member == FALSE){
					// Error parsing name. Abort.
					return FALSE;
				}else{
					$member = $new_member;
				}
			}
			
			// TODO: Check if account exists
			// If account exists:
			//		Get id
			// If account does not exist:
			//		Add account to db, get id, continue
			
			
			// Compile information about Gift
			// And save gift
			$gift = array(
				"Gift" => array(
					"member_id" => $member['Member']['id'],
					"account_id" => $account['Account']['id'],
					"date" => "", // TODO: Parse this
					"amount" => $data[6],
					"description" => "Imported on ".date("Y-m-d H:i:s")." EST"
				)
			);
			
			return $info;
		}
		return FALSE;
	}
	
	/**
	 *
	 */
	protected function _parseFullName($name, $member){
		// clean up name
		$name = str_replace(".", "", $name);	
		
		// split into pieces
		$pieces = explode(" ", $name);
		
		// parse based on # of pieces in name
		switch(count($pieces)){
			case 5:
				// Mr John William Doe (Jr.|Sr.|III|Esq)
				if(in_array($pieces[4], $this->nameSuffixes)){
					if(in_array($pieces[0], $this->namePrefixes)){
						$member["Member"]['title'] = $pieces[0];
						$member["Member"]['first_name'] = $pieces[1];
						$member["Member"]['middle'] = $pieces[2];
						$member["Member"]['last_name'] = $pieces[3];
						$member["Member"]['suffix'] = $pieces[4];	
					}else{
						$member["Member"]['first_name'] = $pieces[0];
						$member["Member"]['middle'] = $pieces[1];
						$member["Member"]['last_name'] = $pieces[2]." ".$pieces[3];
						$member["Member"]['suffix'] = $pieces[4];
					}
				}else{
					if(in_array($pieces[0], $this->namePrefixes)){
						$member["Member"]['title'] = $pieces[0];
						$member["Member"]['first_name'] = $pieces[1];
						$member["Member"]['middle'] = $pieces[2];
						$member["Member"]['last_name'] = $pieces[3]." ".$pieces[4];
					}else{
						$member["Member"]['first_name'] = $pieces[0];
						$member["Member"]['middle'] = $pieces[1]." ".$pieces[2];
						$member["Member"]['last_name'] = $pieces[3]." ".$pieces[4];
					}	
				}
				return $member;
			case 4:
				// Mr John William Doe
				// John William Henry Doe
				// Elí Arroyo López (two last names)
				// John William Doe (Jr.|Sr.|III|Esq)
				if(in_array($pieces[3], $this->nameSuffixes)){
					// second case
					// John William Doe (Jr.|Sr.|III|Esq)
					$member["Member"]['first_name'] = $pieces[0];
					$member["Member"]['middle'] = $pieces[1];
					$member["Member"]['last_name'] = $pieces[2];
					$member["Member"]['suffix'] = $pieces[3];
					return $member;
				}else{
					if(in_array($pieces[0], $this->namePrefixes)){
						$member["Member"]['title'] = $pieces[0];
						$member["Member"]['first_name'] = $pieces[1];
						$member["Member"]['middle'] = $pieces[2];
						$member["Member"]['last_name'] = $pieces[3];
						return $member;
					}else{
						// Two last names or two middle names! No way to tell.
						$member["Member"]['last_name'] = $pieces[3];
						$member["Member"]['first_name'] = implode(" ", array_slice($pieces, 0, 3));
						return $member;
					}
				}
			case 3:
				// John William Doe
				// Mr John Doe
				// John Doe[,] (Jr.|Sr.|III|Esq)
				if(in_array($pieces[2], $this->nameSuffixes)){
					$member["Member"]['first_name'] = $pieces[0];
					$member["Member"]['last_name'] = $pieces[1];
					$member["Member"]['suffix'] = $pieces[2];
					return $member;
				}else{
					if(in_array($pieces[0], $this->namePrefixes)){
						$member["Member"]['title'] = $pieces[0];
						$member["Member"]['first_name'] = $pieces[1];
						$member["Member"]['last_name'] = $pieces[2];
						return $member;
					}else{
						// Two last names or two middle names! No way to tell.
						$member["Member"]['first_name'] = $pieces[0];
						$member["Member"]['middle'] = $pieces[1];
						$member["Member"]['last_name'] = $pieces[2];
						return $member;
					}
				}
			case 2:
				// John Doe
				$member["Member"]['first_name'] = $pieces[0];
				$member["Member"]['last_name'] = $pieces[1];
				return $member;
			
		}
	}

}
