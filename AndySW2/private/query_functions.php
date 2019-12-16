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
    $sql .= "'" . db_escape($db, $firstname) . "',";
    $sql .= "'" . db_escape($db, $lastname) . "',";
    $sql .= "'" . db_escape($db, $email) . "',";
    $sql .= "'" . db_escape($db, $password) . "'";
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
    $sql .= "'". db_escape($db, $id) ."'";
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
    $sql .= "'" . db_escape($db, $companyname) . "',";
    $sql .= "'" . db_escape($db, $telephone) . "',";
    $sql .= "'" . db_escape($db, $email) . "',";
    $sql .= "'" . db_escape($db, $country) . "',";
    $sql .= "'" . db_escape($db, $address) . "'";
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
    $sql .= "'" . db_escape($db, $id) . "'";
    $result = mysqli_query($db, $sql);
    confirm_query($result);
    return $result;
}
