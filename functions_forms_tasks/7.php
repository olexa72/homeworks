<?php
$filename = "db.txt";
if(isset($_POST['send'])) {
    $username = trim($_POST['username']);
    $msg = trim($_POST['msg']);

    $data = array('username' => $username, 'msg' => $msg, 'date' => date('Y-m-d H:i:s'));

    file_put_contents($filename, serialize($data) . "\r\n", FILE_APPEND);
}
?>
<html>
<head>
    <title>Comments</title>
</head>
<body>
    <?php
        $file=file_get_contents($filename);
        $items=explode("\r\n", $file);
        echo "<table cellpadding=\"5\" border=\"1\">";
        foreach($items as $key=>$item){
            $item = unserialize($item);
            $username = $item['username'];
            $msg = $item['msg'];
            $date = $item['date'];
            echo "<tr> <td width=\"20%\">$username <br> $date </td> <td width=\"80%\">$msg</td></tr>";
        }
        echo '</table>';
    ?>
    <h2> Write a comment.</h2>
    <form method="post" action='7.php'>
        Username: <br> <input type="text" name="username"><br>
        <br>
        Message: <br> <textarea name="msg"></textarea><br><br>
        <input type="submit" value="Send" name="send">
    </form>
</body>
</html>
