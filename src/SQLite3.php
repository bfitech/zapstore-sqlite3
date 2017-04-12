<?php


namespace BFITech\ZapStore;


class SQLite3 extends SQL {

	/**
	 * Constructor.
	 *
	 * @param array $params SQL connection dict exactly the same with
	 *     that in the parent class except that 'dbtype' key can be
	 *     omitted.
	 * @param Logger $logger Instance of BFITech\\ZapCore\\Logger.
	 */
	public function __construct($params, $logger=null) {
		$params['dbtype'] = 'sqlite3';
		parent::__construct($params, $logger);
	}

}

