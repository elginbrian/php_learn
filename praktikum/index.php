<!DOCTYPE html>
<html>
    <head>
        <title><?php echo "Praktikum Modul 01" ?></title>
    </head>

    <?php
        $name  = "Elgin Brian Wahyu Bramadhika";
        $nim   = 235150701111031;
        $email = "elginbrian49@student.ub.ac.id";
    ?>

    <body>
        <div style="background-color: yellow; padding: 2em">
            <?php
                echo "<h1>Data Diri</h1>";
                echo "<hr/>";
                echo "<p>Nama: $name</p>";
                echo "<p>NIM: $nim</p>";
                echo "<p>Email: $email</p>";
            ?>
        </div>
    </body>
</html>