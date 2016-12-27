<?php 

include('httpful.phar');

$url = "https://api.github.com/users/trojan302/repos";
$response = \Httpful\Request::get($url)
    ->expectsJson()
    ->send();

$repositories = array();
for ($i = 0; $i < count($response->body) ; $i++) {

	$repositories[] = $response->body[$i]->name;

}

$html_url = array();
for ($i = 0; $i < count($response->body) ; $i++) {

	$html_url[] = $response->body[$i]->html_url;

}

$description = array();
for ($i = 0; $i < count($response->body) ; $i++) {

	$description[] = $response->body[$i]->description;

}

$created_at = array();
for ($i = 0; $i < count($response->body) ; $i++) {

	$created_at[] = $response->body[$i]->created_at;

}

$clone_url = array();
for ($i = 0; $i < count($response->body) ; $i++) {

	$clone_url[] = $response->body[$i]->clone_url;

}




// echo "<pre>";
$Github = array(

	"repo_url" => $repositories,
	"html_url" => $html_url,
	"description" => $description,
	"created_at" => $created_at,
	"clone_url" => $clone_url

);

// print_r($Github);
// echo "</pre>";
// $json = json_encode($Github);
// file_put_contents('data.json', $json);
// 
for ($i=0; $i < count($Github['repo_url']) ; $i++) {


echo "<div style='margin-bottom:10px;padding:10px;width:20%;margin-right:30px;'>";	
	echo "<h2>".strtoupper($Github['repo_url'][$i])."</h2>";
	echo "<img src='https://assets-cdn.github.com/images/modules/logos_page/GitHub-Mark.png' width='100%'>";
	echo "<p>".$Github['description'][$i]."<p>";
	echo "<small>".$Github['created_at'][$i]."</small><br>";
	echo "Clone Repo URL : <br><code style='padding:2px 5px;border-radius:5px;background-color:lightgrey;'>" . $Github['clone_url'][$i] . "</code><br><br>";
	echo "<a href='".$Github['html_url'][$i]."'>View On Github</a><br>";
echo "</div>";

}

?>