<?php

class Comment {
	
	//1. Attributs (pas de id)
	private $author;
	private $publishedDate;
	private $content;
	private $postId;

	
	//2. Constructeur
	//User user = new User('AlexandreM11', 'salut');
	public function __construct($author, $publishedDate, $content, $postId) {
		
		$this->author = $author;
		$this->publishedDate = $publishedDate;
		$this->content = $content;
		$this->postId = $postId;
		
		
	}
	
	//3. Accesseurs et mutateurs
	// comment.getComment();
		
	
	public function getAuthor() {
		return $this->author;
	}

	public function getPublishedDate() {
		return $this->publishedDate;
	}
	
	public function getContent() {
		return $this->content;
	}

	public function getPostId() {
		return $this->postId;
	}


	// comment.setComment('Paul');
	
	

	public function setAuthor ($author) {
		$this->author = $author;
	}
	
	public function setPublishedDate($publishedDate) {
		$this->publishedDate = $publishedDate;
	}

	public function setContent($content) {
		$this->content = $content;
	}
	
	public function setPostId($postId) {
		$this->postId = $postId;
	}
	
	
}

