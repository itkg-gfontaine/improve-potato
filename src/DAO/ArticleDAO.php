<?php

namespace MicroCMS\DAO;

use Doctrine\DBAL\Connection;
use MicroCMS\Domain\Article;

class ArticleDAO {
	
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
	 * Return a list of all articles, sorted by date (most recent first).
	 *
	 * @return array A list of all articles
	 */
	public function findAll(){
		$sql = "SELECT * FROM t_article ORDER BY art_id DESC";	
		$result = $this->db->fetchAll($sql);

		// convert query result to an array of domain objects
		$articles = array();
		foreach($result as $row){
			$articleId = $row['art_id'];
			$articles[$articleId] = $this->buildArticles($row);
		}

		return $articles;
	}

	/**
	 * Creates an Article object based on a DB row
	 *
	 * @params array $row The DB row containing Article data
	 * @return \MicroCMS\Domain\Article
	 */
	private function buildArticles(array $row){
		$article = new Article();
		$article->setId     ($row['art_id']);
		$article->setTitle  ($row['art_title']);
		$article->setContent($row['art_content']);

		return $article;
	}

}