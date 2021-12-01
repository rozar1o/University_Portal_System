<?php

require_once 'db_connect.php';

function showImage($name){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `Faculty` where V_NAME = '$name'";

    try {
      $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $row;
}


function updateProfilePicture($username, $file){
    $conn = db_conn();
    $selectQuery = "UPDATE faculty set IMAGE = '$file' where USERNAME = '$username'";
    try{
          $stmt = $conn->query($selectQuery);

    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}






function show($username){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `faculty` where USERNAME = '$username'";

    try {
      $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $row;
}

function searchUsername($username){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `faculty` WHERE USERNAME = '$username'";


    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function provideNotice($data){
	$conn = db_conn();
    $selectQuery = "INSERT into providenotice (TITLE,DESCRIPTION)
VALUES (:title,:body)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	
        	':title' => $data['TITLE'],
					':body' => $data['DESCRIPTION'],
					

          ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}








function update($username, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE faculty set V_NAME = ?, EMAIL = ?, PHONE = ? where USERNAME = '$username'";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['name'], $data['email'], $data['phone']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}
function updatePassword($username, $password){
    $conn = db_conn();
    $selectQuery = "UPDATE faculty set PASSWORD = '$password' where USERNAME = '$username'";
    try{
          $stmt = $conn->query($selectQuery);

    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}


