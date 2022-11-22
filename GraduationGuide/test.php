<html>

    <body>
        <table>
            <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "graduation guide";

                $connection = new mysqli($servername,$username, $password, $database);
                if ($connection-> connect_error){
                    die("Connection failed: " . $connection->connect_error);
                }
                $sql = "SELECT * FROM comp_courses";
                $result = $connection->query($sql);

                if (!$result){
                    die("invalid query: " . $connection->error);
                }
                while($row = $result->fetch_assoc()){
                   echo " <tr>
                       <td>COMP</td>
                       <td>" . $row["cnumber"] . "</td>
                       <td>" . $row["cname"] . "</td>
                       <td>" . $row["credits"] . "</td>
                   </tr>";
                }
            ?>
        </table>

    </body>
</html>