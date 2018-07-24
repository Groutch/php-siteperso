<?php
if(isset($_POST["pseudo"])&& isset($_POST["message"])){
    $contact = array('pseudo' => $_POST["pseudo"], 'message' => $_POST["message"]);
    $ctjson = json_encode($contact);
    file_put_contents('../data/last_message.json', $ctjson);  
    header('Location: index.php');
}
?>