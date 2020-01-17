<?php

    function find_all_users() {
        global $db; 

        $sql = "SELECT * FROM users ";
        $sql .= "ORDER BY userid ASC";
        $result = mysqli_query($db, $sql);
        confirm_result_set($result);
        return $result;
    }

    function find_all_companies() {
        global $db; 

        $sql = "SELECT * FROM companies ";
        $sql .= "ORDER BY companyid ASC";
        $result = mysqli_query($db, $sql);
        return $result;
    }

    function confirm_result_set($result_set) {
        if (!$result_set) {
            exit("Database query failed.");
        }
      }
?> 
