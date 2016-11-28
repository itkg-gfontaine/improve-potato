<?php

namespace MicroCMS\DAO;

use Doctrine\DBAL\Connection;

abstract class DAO {
	
	/**
  	 * Database connection
  	 *
  	 * @var \Doctrine\DBAL\Connection
  	 */
	private $db;

	/**
	 * Constructor
	 *
	 * @params \Doctrine\DBAL\Connection The database connection objet
	 */
	public function __construct(Connection $db){
		$this->db = $db;
	}

	/**
	 * Grants access to the database connection object
	 *
	 * @return \Doctrine\DBAL\Connection The database conntion object.
	 *
	 */
	protected function getDb(){
		return $this->db;
	}
	/**
	 * Builds a domain object from a DB row.
	 * Must be overriden by child classes.
	 */
	protected abstract function buildDomainObject($row);

}