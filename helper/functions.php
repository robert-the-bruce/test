<?php

function getStatement($con, $query, $param){

    $stmt = $con->prepare($query);

    $stmt->execute($param);

    return $stmt;
}