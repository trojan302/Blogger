<?php

require_once 'core/init.php';

// Blue Print Class
class Blog extends DB
{
	public $title;
	public $keywords;
	public $body;
	public $author;
	public $date;
	public $category;

	function CreateData($title, $category, $date, $body, $author, $keywords)
	{
		mysql_query("INSERT INTO post VALUES ('$title','$category','$date','$body','$author','$keywords') ");
	}

	function ReadData()
	{
		$sql 	= mysql_query('SELECT * FROM post');
		while( $data 	= mysql_fetch_assoc($sql) )
		{
			$sqlTable = mysql_query("
							SELECT * FROM categories 
							WHERE 
								id= ". $data['category']." 
						");

			$category = mysql_fetch_assoc($sqlTable);

			echo "<div class='post-content'>";
			echo "<h1>". $this->title = $data['title'] ."</h1>";
			echo "<small>". $this->author = $data['author'] ."</small>, &nbsp;";
			echo "<small>". $this->date = $data['date'] ."</small><br>";
			echo "<p>". $this->body = $data['body'] ."</p><br>";
			echo "<span class='category'>". $this->category = $category['text'] ."</span><br>";
			echo "<small>". $this->keywords = $data['keywords'] ."</small><br>";
			echo "</div>";
		}

	}

	function UpdateData($title, $category, $date, $body, $author, $keywords, $id)
	{
		mysql_query("
			UPDATE post SET 
				title='$title', 
				category='$category', 
				date='$date', 
				body='$body', 
				author='$author', 
				keyowrds='$keywords' 
			WHERE id='$id'
		");
	}

	function DeleteData($id)
	{
		mysql_query("DELETE FROM post WHERE id='$id' ");
	}

	function GetData()
	{
		return mysql_query('SELECT * FROM post');
	}


}

class Template
{
	function getHeader()
	{
		require 'moduls/header.php';
	}

	function getBanner()
	{
		require 'moduls/banner.php';
	}

	function getSectionFeature()
	{
		require 'moduls/section-feature.php';
	}

	function getSectionPost()
	{
		require 'moduls/section-post.php';
	}

	function getSearch()
	{
		require 'moduls/search.php';
	}

	function getSideMenu()
	{
		require 'moduls/menu.php';
	}

	function getSectionSide1()
	{
		require 'moduls/section-side-1.php';
	}

	function getSectionSide2()
	{
		require 'moduls/section-side-2.php';
	}

	function getFooter()
	{
		require 'moduls/footer.php';
	}

	function getSectionProjects()
	{
		require 'moduls/section-projects.php';
	}

	function getCarousel()
	{
		require 'moduls/carousel.php';
	}
}

class Albums
{
	function thumb()
	{
		require 'thumbnails.php';
	}
}