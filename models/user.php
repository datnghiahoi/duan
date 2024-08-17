<?php

function checkaccount($username, $password)
{
    $conn = pdo_get_connection();
    $sql = "SELECT * FROM taikhoan WHERE tentk='" . $username . "' AND matkhau='" . $password . "'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    if (count($kq) > 0) return $kq[0]['role'];
    else return 0;
    // return $kq[0]['role'];
    // return $result;
}

function getaccinfo($username, $password)
{
    $conn = pdo_get_connection();
    $sql = "SELECT * FROM taikhoan WHERE tentk='" . $username . "' AND matkhau='" . $password . "'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}

function dangky($tentk,$email,$sdt,$matkhau){
    $conn = pdo_get_connection();
    $sql = "INSERT INTO taikhoan(`tentk`,`email`,`matkhau`,`sdt`) VALUES (:tentk, :email, :matkhau, :sdt)";
    $stmt = $conn->prepare($sql);
    $stmt -> bindParam("tentk", $tentk);
    $stmt -> bindParam("email", $email);
    $stmt -> bindParam("matkhau", $matkhau);
    $stmt -> bindParam("sdt", $sdt);    
    return $stmt->execute();
}
function checkMail($email){
    $conn = pdo_get_connection();
    $sql = "SELECT * FROM taikhoan WHERE email=:email";
    $stmt = $conn->prepare($sql);
    $stmt -> bindParam("email", $email);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $stmt->fetch();
}
function checkTen_tk($tentk){
    $conn = pdo_get_connection();
    $sql = "SELECT * FROM taikhoan WHERE tentk=:tentk";
    $stmt = $conn->prepare($sql);
    $stmt -> bindParam("tentk", $tentk);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $stmt->fetch();
}



