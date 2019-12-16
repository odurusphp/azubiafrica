<?php

/**
 * This function inserts record
 * to the users table
 * 
 * @* @param Type string firstname, lastname, password, email ;
 * 
 * @return result;
 */
function insert_user($firstname, $lastname, $password, $email = "")
{
    global $db;

    $sql = "INSERT INTO USERS";
    $sql .= "(firstname,lastname,email,password)";
    $sql .= "VALUES (";
    $sql .= "'" . escape_char($firstname) . "',";
    $sql .= "'" . escape_char($lastname) . "',";
    $sql .= "'" . escape_char($email) . "',";
    $sql .= "'" . escape_char($password) . "'";
    $sql .= ")";

    $result = mysqli_query($db, $sql);

    if ($result) {
        return true;
    } else {
        echo (mysqli_error($db));
        db_disconnect($db);
        exit;
    }
}

/**
 * This is to find all users
 * in the database
 * 
 * @return $result;
 */
function find_all_users() {
    global $db;

    $sql = "SELECT * FROM USERS ";
    $sql .= "ORDER BY userid ASC" ;
    $result = mysqli_query($db, $sql);
    confirm_query($result);
    return $result;
}

/**
 * This is to find users by an id
 * 
 * @* @param Type var $id
 * 
 * @return $result
 */
function find_user_by_id($id)
{
    global $db;

    $sql = "SELECT * FROM USERS ";
    $sql .= "WHERE USERID = ";
    $sql .= "'". escape_char($id) ."'";
    $result = mysqli_query($db, $sql);
    confirm_query($result);
    return $result;
}

/**
 * This function is to insert record for companies
 * 
 * @* @param Type var $companyname, $telephone, $country, $address
 * 
 * @return $result
 */
function insert_company($companyname, $telephone, $email, $country, $address)
{
    global $db;

    $sql = "INSERT INTO COMPANIES";
    $sql .= "(companyname,telephone,email,country,address)";
    $sql .= "VALUES (";
    $sql .= "'" . escape_char($companyname) . "',";
    $sql .= "'" . escape_char($telephone) . "',";
    $sql .= "'" . escape_char($email) . "',";
    $sql .= "'" . escape_char($country) . "',";
    $sql .= "'" . escape_char($address) . "'";
    $sql .= ")";

    $result = mysqli_query($db, $sql);

    if ($result) {
        return true;
    } else {
        echo (mysqli_error($db));
        db_disconnect($db);
        exit;
    }
}

/**
 * This is to find all companies
 * in the database
 * 
 * @return $result;
 */
function find_all_companies()
{
    global $db;

    $sql = "SELECT * FROM COMPANIES ";
    $sql .= "ORDER BY companyid ASC";
    $result = mysqli_query($db, $sql);
    confirm_query($result);
    return $result;
}

/**
 * This is to find company by an id
 * 
 * @* @param Type var $id
 * 
 * @return $result
 */
function find_company_by_id($id)
{
    global $db;

    $sql = "SELECT * FROM COMPANIES ";
    $sql .= "WHERE companyid = ";
    $sql .= "'" . escape_char($id) . "'";
    $result = mysqli_query($db, $sql);
    confirm_query($result);
    return $result;
}
