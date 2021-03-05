<?php

use App\categorie;
use App\domaine;
use App\localite;
use App\offre;
use App\role;
use App\secteur;
use App\structure;
use App\User;

function role(){
return role::all();
}

function users(){
    return User::paginate(30);
}
function categorie(){
    return categorie::all();
}
function structure(){
    return structure::all();
}
function domaine(){
    return domaine::all();
}
function localite(){
    return localite::all();
}
function secteur(){
    return secteur::all();
}

function offres($num=null){
    if($num==null){
        return offre::all();
    }
    return offre::paginate($num);
}

function domaine_offre($id){

    $offr=offre::where('domaine_id','=',$id)->paginate(3);
    return $offr;
}

