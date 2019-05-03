<?php

function get_clients($fname, $lname, $state) {
    global $db;
    $qry = "SELECT * FROM client WHERE CLIENT_LNAME = '$lname' AND CLIENT_FNAME = '$fname'";
    $result = $db->query($qry);
    return $result;
}

function get_package($clientID) {
    global $db;
    $qry = "SELECT PACKAGE_DESC FROM package_tbl WHERE CLIENT_ID = '$clientID'";
    $result = $db->query($qry)->fetch_assoc()['PACKAGE_DESC'];
    return $result;
}

function insert_paypal($paypal_id) {
    global $db;
    $qry = "INSERT INTO donor_tbl (DONOR_PAYPAL) VALUES('$paypal_id')";
    $result = $db->query($qry);
    return $result;
}

function insert_amount($donation_amount) {
    global $db;
    $select_max = "SELECT MAX(DONOR_ID) FROM donor_tbl";
    $sub_qry = $db->query($select_max)->fetch_assoc()['MAX(DONOR_ID)'];
    $qry = "INSERT INTO donation_tbl (DONATION_AMOUNT, DONATION_DATE, DONOR_ID) VALUES('$donation_amount', CURDATE(), '$sub_qry')";
    $result = $db->query($qry);
    return $result;
}

function update_email($email_address) {
    global $db;
    $select_max = "SELECT MAX(DONOR_ID) FROM donor_tbl";
    $sub_qry = $db->query($select_max)->fetch_assoc()['MAX(DONOR_ID)'];
    $qry = "UPDATE donor_tbl SET DONOR_EMAIL = '$email_address' WHERE DONOR_ID = '$sub_qry'";
    $result = $db->query($qry);
    return $result;
}
?>

