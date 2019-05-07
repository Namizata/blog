<?php

class Comment {
	
	//1. Attributs (pas de id)
	private $content;
	private $publishedDate;
	private $author;
	private $postId;

	
	//2. Constructeur
	//User user = new User('AlexandreM11', 'salut');
	public function __construct($content, $publishedDate, $author, $postId,) {
		
		$this->content = $content;
		$this->publishedDate = $publishedDate;
		$this->author = $author;
		$this->postId = $postId;
		
		
	}
	
	//3. Accesseurs et mutateurs
	// user.getUsername();
		
	public function getContent() {
		return $this->content;
	}

	public function getPublishedDate() {
		return $this->publishedDate;
	}

	public function getAuthor() {
		return $this->author;
	}
	public function getPostId() {
		return $this->postId;
	}


	// user.setUsername('Paul');
	
	public function setContent($content) {
		
		$this->content = $content;
		
	}

	public function setPublishedDate($publishedDate) {
		
		$this->publishedDate = $publishedDate;
		
	}

	public function setAuthor ($author) {
		
		$this->author = $author;
		
	}

	public function setPostId($postId) {
		
		$this->postId = $postId;
		
	}
	
	
}

