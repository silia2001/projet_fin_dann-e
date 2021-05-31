<?php
include_once 'db.php';

function getTrajet(){
  $db = getDb();
  $sql = "SELECT * FROM coordonneesgps";
  $result = $db->query($sql);
  $res = $result->fetch_all();
  $db->close();
  return $res;
}

function hourFromChar($h){
  $h = explode('.',$h);
  $m = $h[1];
  $h = $h[0];
  return substr($h, 0, 2).':'.substr($h, 2, 2).':'.substr($h, 4, 2).'.'.$m; #on recupère deux par deux
}

function degree2decimal($deg_coord){
  $ex = explode(' ', $deg_coord);
  $degree=(int)($ex[0]/100);
  $minutes= $ex[0]-($degree*100);
  $dotdegree=$minutes/60;
  $decimal=$degree+$dotdegree;
  $direction=substr($ex[1],-1);
  if (($direction=="S") or ($direction=="W")){
    $decimal=$decimal*(-1);
  }
  $decimal=number_format($decimal,4,'.','');
  return $decimal;
}

function getMaxId(){
  $db = getDb();
  $sql = "SELECT max(idTrajet) FROM coordonneesgps";
  $result = $db->query($sql);
  $id = intval($result->fetch_all()[0][0])+1;
  $db->close();
  return $id;
}

function insertStep($id,$i,$heure,$lat,$long){
  $db = getDb();
  $sql = 'INSERT INTO coordonneesgps VALUES ('.$id.','.$i.',"'.$heure.'", "'.$lat.'", "'.$long.'")';
  $db->query($sql);
  $db->close();
}

?>
