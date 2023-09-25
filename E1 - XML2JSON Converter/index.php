<?php
    if (isset($_POST['submit']))
    {
        $xmlData = $_POST['xml'];
        $jsonResult = simplexml_load_string($xmlData);
        $arr =  json_decode(json_encode($jsonResult),true);
        // $arr = $jsonResult;
        // $arr =  json_decode($jsonResult);
        // var_dump('XML RAW DATA : ',$jsonResult);
        // echo '<br>';
        // var_dump($arr);

    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>XML TO Json Converter</title>
    <style>
        .flex{
            display: flex;
            flex-direction: column;
            gap: 4rem;
        }

        .result {
            border-radius: 6px;
            padding: 16px;
            color: black;
            font-weight: bold;
            border: 2px dashed black;
        }
    </style>
</head>
<body>
<form method="post" action="" class="flex">
    <textarea name="xml" id="xml" cols="30" rows="10">
        <?= isset($_POST['xml']) ? $_POST['xml'] : '' ?>
    </textarea>
    <div>
        <input type="submit" value="Submit" name="submit">
    </div>
    <div  class="result">
        <pre><?= isset($jsonResult) ? json_encode($arr, JSON_PRETTY_PRINT) : 'Json Result Here' ?></pre>
    </div>

</form>
</body>
</html>