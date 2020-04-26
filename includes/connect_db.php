<?php
  try{
  	$db = new PDO('mysql:host=localhost;dbname=id12857167_restaurant','id12857167_root','');
  }catch(PDOException $e){
  	die('Erreur :'.$e->getMessage());
  }
  ?>