<?php

file_put_contents('v.txt', $_POST['textarea']);

header('Location: /v.php');