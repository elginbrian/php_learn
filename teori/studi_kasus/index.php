<html>
    <head>
        <title>Making Table</title>
    </head>

    <body>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No</th>
                <th>Name</th>
            </tr>
            <?php
                $data = ["Budi", "Candra" ,"Doni"];
                $i = 1;

                foreach($data as $name) {
                    echo "<tr>";
                    echo "<td>" . $i++ . "</td>";
                    echo "<td>". $name . "</td>";
                    echo "</tr>";
                }
            ?>
        </table>

        <br/>

        <table border="1" cellpadding="10" cellspacing="0">
            <?php
                $data2 = [
                    "NIM" => "001",
                    "Name" => "Agus",
                    "Prodi" => "TI"
                ];
            ?>

            <tr>
                <?php
                    foreach($data2 as $key => $value) {
                        echo "<th>". $key . "</th>";
                    }
                ?>
            </tr> 

            <tr>
                <?php
                    foreach($data2 as $value) {
                        echo "<td>". $value . "</td>";
                    }
                ?>
            </tr>
        </table>
    </body>
</html>
