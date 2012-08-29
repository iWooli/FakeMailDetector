class FakeMailDetector {

	private $mail;
	private $domain;
	
	public function __construct($mail) {
		$this->mail = $mail;
		$emaildomain = explode('@', $this->mail);
		$this->domain = explode('.',$emaildomain[1]);
		$this->domain = array_shift($this->domain);
	}
	
	public function inBannedList() {
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
}