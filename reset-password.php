<?php

$token = $_GET["token"];

$token_hash = hash("sha256", $token);

$db = "SELECT * FROM USERS WHERE reset_token_hash = ?";

$stmt = $db->prepare($sql);

$stmt->bind_param("s", $token_hash);

$stmt->execute();

$result = stmt->get_result();

$user = $result->fetch_assoc();

if ($user === null){
    die("token not found");

}

if (strtotime($user["reset_token_expires_at"]) <= time()){
    die("token has expired");
}

echo "token is valid and hasn't expired";

?>