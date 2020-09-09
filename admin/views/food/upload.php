<?php
    var_dump($_FILES);
    move_uploaded_file($_FILES['upload_file']['tmp_name'],'upload/'.$_FILES['upload_file']['name']);
?>