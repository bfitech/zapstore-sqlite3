<?php


use BFITech\ZapStore as zs;

class SQLite3Test extends SQLTest {

	public static $engine = 'sqlite3';

	public function test_sqlite3() {
		$sql = new zs\SQLite3(['dbname' => ':memory:']);
		$this->assertEquals(
			$sql->get_connection_params()['dbtype'], 'sqlite3');
	}

}
