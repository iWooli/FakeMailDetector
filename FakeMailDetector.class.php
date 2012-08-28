class FakeMailDetector {

	private $mail;
	private $domain;
	
	public function lookInArray() {
		//array that contains only non desired domains name without their extention
		$bannedDomains = array(
			'jetable',				'ephemail',				'trashmail',
			'spamgourmet',			'spammotel',			'link2mail',
			'mytrashmail',			'iximail',				'pookmail',
			'haltospam',			'spambox',				'myamail',
			'yopmail',				'spambob',				'mailbidon',
			'0-mail',				'moncourrier',			'kleemail',
			'slopsbox',				'zemail',				'brefemail',
			'guerrillamail',		'web',					'gawab',
			'cashette',				'mail',					'inbox',
			'bk',					'yandex',				'nightmail',
			'kasmail',				'iximail',				'haltoSpam',
			'mailincubator',		'brefemail',			'bofthew',
			'pjjkp',				'tempinbox',			'brefemail',
			'link2mail',			'mailexpire',			'spambox',
			'mailinator',			'dontreg',				'maileater',
			'kasmail',				'klassmaster',			'kleemail',
			'mailin8r',				'mailinator2',			'nyms',
			'shortmail',			'sogetthis',			'spamday',
			'Spamfr',				'temporaryinbox',		'spamcorptastic',
			'filzmail',				'lifebyfood',			'tempemail',
			'spamfree24',			'spamherelots',			'thisisnotmyrealemail',
			'slopsbox',				'tyldd',				'safetymail',
			'spamex',				'e4ward',				'gishpuppy',
		);
		if (in_array($this->domain, $bannedDomains)) return TRUE;
		else return FALSE;
	}

	public function getDomain() {
		$email = explode('@', $this->mail);
		$this->domain = explode('.',$email[1]);
		$this->domain = array_shift($this->domain);
		if ($this->lookInArray()) return TRUE;
		else return FALSE;
	}

	public function inBannedList($mail) {
		$this->mail = $mail;
		if ($this->getDomain()) return TRUE;
		else return FALSE;
	}
}