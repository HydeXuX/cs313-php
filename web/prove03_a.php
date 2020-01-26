<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">


<title>Result</title>

<body>
<?php
    if ($_GET['submit'] == "Submit"){
        echo "Purchase was confirmed";
    }
    elseif ($_GET['cancel'] == "Cancel"){
        echo "Purchase was cancelled";
    }
?>

</body>