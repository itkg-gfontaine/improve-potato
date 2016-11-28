<?php

namespace MicroCMS\Domain;

class Article {
	/**
	 * Article ID
	 *
	 * @var integer
	 */
	private $id;

	/**
	 * Article title
	 *
	 * @var string
	 */
	private $title;
	
	/**
	 * Article content
	 *
	 * @var string
	 */
	private $content;

	function getId(){
		return $this->id;
	}

	function setId($id){
		$this->id = $id;
	}

	function getTitle(){
		return $this->title;
	}

	function setTitle($title){
		$this->title = $title;
	}

	function getContent(){
		return $this->content;
	}

	function setContent($content){
		$this->content = $content;
	}

}	