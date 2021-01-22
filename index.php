<?php
class Post
{
	public $title;
	public $author;
	public $published;
	public function __construct($title, $author, $published)
	{
		$this->title = $title;
		$this->author = $author;
		$this->published = $published;
	}
}
$posts = [
	new Post('My First Post', 'Hell', true),
	new Post('My Second Post', 'Fun', true),
	new Post('My Third Post', 'Come', false),
	new Post('My Forth Post', 'On', false)
];
$posts = array_map(function ($post) {
	return (array) $post;

}, $posts);
$authors = array_column($posts, 'author');
var_dump($authors);