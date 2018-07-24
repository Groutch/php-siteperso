<?php

/* 
vous ajouterez ici les fonctions qui vous sont utiles dans le site,
je vous ai créé la première qui est pour le moment incomplète et qui devra contenir
la logique pour choisir la page à charger
*/

function getContent(){
	if(!isset($_GET['page'])){
		include __DIR__.'/../pages/home.php';
	} elseif($_GET['page']=="bio") {
        include __DIR__.'/../pages/bio.php';
	} elseif($_GET['page']=="contact"){
        include __DIR__.'/../pages/contact.php';
    }
}

function getPart($name){
	include __DIR__ . '/../parts/'. $name . '.php';
}

function getUserData(){
    $file = file_get_contents('../data/user.json');
    $tabinfo = json_decode($file);
    $tabexp = $tabinfo->{'experiences'};
    echo "<div class='card container text-center'>";
    echo "<h5 class='card-title'>".$tabinfo->{'first_name'}." ".$tabinfo->{'name'}."</h5>";
    echo "<h6 class='card-subtitle mb-2 text-muted'>".$tabinfo->{'occupation'}."</h6>";
    foreach( $tabexp as &$elem){
        echo"<p>".$elem->{'year'}." - ".$elem->{'company'}."</p>";
    }
    echo "</div>";
}