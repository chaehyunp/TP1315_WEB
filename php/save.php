<?php
    header('Content-Type:text/plain; charset=utf-8');

    $title = $_POST['title'];
    $text = $_POST['text'];
    $name = $_POST['name'];

    $title = addslashes($title);
    $text = addslashes($text);

    $db = mysqli_connect('localhost', 'testhue96', 't1e2s3t4!', 'testhue96');
    mysqli_query($db, 'set names utf8');

    $sql = "INSERT INTO review(title,text,name) VALUES('$title', '$text', '$name');
    $result = mysqli_query($db, $sql);

    if($result) echo "리뷰가 등록되었습니다.";

    mysqli_close($db);
?>