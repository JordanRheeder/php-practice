<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Hi :)</title>
    </head>
    <body>

         <form action="test.php" method="get">
            Enter: 1-100: <input type="number" name="number">
            <br>
            <input type="submit">
         </form>
        <br>
         <?php
            $get = $_GET["number"];
            $add += 2 * $get;
            echo "$get<br>";
            echo "$add";
         ?>
    </body>
</html>
