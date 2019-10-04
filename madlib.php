<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Madlibs</title>
    </head>
    <body>

         <form action="test.php" method="post">
            Colour:         <input type="text" name="Colour">
            <br>
            Plural Noun:   <input type="text" name="PluralNoun">
            <br>
            Celebrity:         <input type="text" name="Celebrity">
            <br>
            <input type="submit">
         </form>
        <br>
         <?php
            $Colour = $_POST["Colour"];
            $PluralNoun = $_POST["PluralNoun"];
            $Celebrity = $_POST["Celebrity"];
            echo "Roses are $Colour <br>";
            echo "$PluralNoun are blue <br>";
            echo "I love $Celebrity <br>";
         ?>
    </body>
</html>
