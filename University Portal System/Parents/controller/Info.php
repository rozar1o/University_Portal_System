<?php

require_once ('../model/model.php');

function fetchAllReports(){
	return showAllReport();

}

function fetchAllDonations(){
	return showAllDonation();

}
function fetch($username){
	return show($username);

}
?>
