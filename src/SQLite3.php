<?php


namespace BFITech\ZapStore;


class SQLite3 extends SQL {

	public function __construct($params, $logger=null) {
		$params['dbtype'] = 'sqlite3';
		parent::__construct($params, $logger);
	}

}

