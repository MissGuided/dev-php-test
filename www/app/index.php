<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Your sever is working</title>
</head>
<body>
<h1>PHP practical technical test</h1>
<p>This file will be replaced by your app. Your LAMP stack is up and consists of: </p>

<div class="content">
    <ul>
        <li><?= apache_get_version(); ?></li>
        <li>PHP <?= phpversion(); ?></li>
        <li>
            <?php
            $link = mysqli_connect("mysql", "root", "tiger", null);

            /* check connection */
            if (mysqli_connect_errno()) {
                printf("MySQL connecttion failed: %s", mysqli_connect_error());
            } else {
                /* print server version */
                printf("MySQL Server %s", mysqli_get_server_info($link));
            }
            /* close connection */
            mysqli_close($link);
            ?>
        </li>
    </ul>
</div>
</body>
</html>