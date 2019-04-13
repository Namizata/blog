<?php

class Article {
	
	//1. Attributs (pas de id)
	private $title;
	private $content;
	private $publishedDate;
	private $author;

	
	//2. Constructeur
	//User user = new User('AlexandreM11', 'salut');
	public function __construct($title, $content, $publishedDate, $author) {
		
		$this->title = $title;
		$this->content = $content;
		$this->publishedDate = $publishedDate;
		$this->author = $author;
		
		
	}
	
	//3. Accesseurs et mutateurs
	// user.getUsername();
	public function getTitle() {
		return $this->title;
	}
	
	public function getContent() {
		return $this->content;
	}

	public function getPublishedDate() {
		return $this->publishedDate;
	}

	public function getAuthor() {
		return $this->author;
	}


	// user.setUsername('Paul');
	public function setTitle($title) {
		
		$this->title = $title;
		
	}
	
	public function setContent($content) {
		
		$this->content = $content;
		
	}

	public function setPublishedDate($publishedDate) {
		
		$this->publishedDate = $publishedDate;
		
	}

	public function setAuthor ($author) {
		
		$this->author = $author;
		
	}
	
}

