<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php

        include_once 'TextSimilarity.class.php';

        $result = '';
        $text1 = '';
        $text2 = '';

        if($_POST){
            $text1 = $_POST['text1'];
            $text2 = $_POST['text2'];

            if (strlen($text1) <= 0 || strlen($text2) <= 0) {
                $result = 'text1 or text2 is null';
            } else {
                $obj = new TextSimilarity($text1, $text2);
                $result = $obj->run();
            }
        }
    ?>
        <form method="post">
            text1:<br>
            <textarea name="text1" id="" cols="30" rows="10"><?php echo $text1;?></textarea> 
            <br>
            text2:
            <br>
            <textarea name="text2" id="" cols="30" rows="10"><?php echo $text2;?></textarea>
            <br>
            <input type="submit" value="submit">
            <br>

            result:
            <?php echo $result; ?>
        </form>
</body>

</html>