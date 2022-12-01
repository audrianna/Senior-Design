<!DOCTYPE html>
<html>
<head>


    <style>


    </style>


</head>
<body>

<h2>Graduation Guide Class Check Off</h2>
<p> Enter your current classification:</p>
<p> <input type="radio" class="option" value="Freshman">Freshman</p>
<p> <input type="radio" class="option" value="Sophmore">Sophmore</p>
<p> <input type="radio" class="option" value="Junior">Junior</p>
<p> <input type="radio" class="option" value="Senior">Senior</p>

<br>

<form name="my-form" action="#">
    <p class="form-box">

    <h2> Year 1: </h2>
    <h4>Semester 1</h4>
    <table>
    <th> course subject</th>
    <th> course number</th>
    <th> course name</th>
    <th> credits </th>
    <th> grade </th>
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
                           <td> <input> </td>
                       </tr>";
                    }
                ?>
    </table>
    <label for="freshman-class">ENGL100</label>
    <input type="checkbox" id="freshman-class" name="freshman-class">
    <br>
    <label for="freshman-class">COMP163</label>
    <input type="checkbox" id="freshman-class" name="freshman-class">
    <br>
    <label for="freshman-class">MATH131</label>
    <input type="checkbox" id="freshman-class" name="freshman-class">
    <br>
    <label for="freshman-class">COMP121</label>
    <input type="checkbox" id="freshman-class" name="freshman-class">
    <br>
    <label for="freshman-class">GEEN111</label>
    <input type="checkbox" id="freshman-class" name="freshman-class">
    <br>
    <label for="Science-Elective">Enter the Social/Behavioral Science Elective taken:</label>
    <input type="text" id="Science-Elective" name="Science-Elective">

    <h4>Semester 2</h4>
    <label for="freshman-class">ENGL101</label>
    <input type="checkbox" id="freshman-class" name="freshman-class">
    <br>
    <label for="freshman-class">COMP167</label>
    <input type="checkbox" id="freshman-class" name="freshman-class">
    <br>
    <label for="freshman-class">COMP180</label>
    <input type="checkbox" id="freshman-class" name="freshman-class">
    <br>
    <label for="freshman-class">MATH132</label>
    <input type="checkbox" id="freshman-class" name="freshman-class">
    <br>
    <label for="Science-Elective">Enter the African American Culture & History class taken:</label>
    <input type="text" id="Science-Elective" name="Science-Elective">


    <h2> Year 2: </h2>
    <h4>Semester 1</h4>
    <label for="freshman-class">ENGL100</label>
    <input type="checkbox" id="freshman-class" name="freshman-class">
    <br>
    <label for="freshman-class">COMP163</label>
    <input type="checkbox" id="freshman-class" name="freshman-class">
    <br>
    <label for="freshman-class">MATH131</label>
    <input type="checkbox" id="freshman-class" name="freshman-class">
    <br>
    <label for="freshman-class">COMP121</label>
    <input type="checkbox" id="freshman-class" name="freshman-class">
    <br>
    <label for="freshman-class">GEEN111</label>
    <input type="checkbox" id="freshman-class" name="freshman-class">
    <br>
    <label for="Science-Elective">Enter the Social/Behavioral Science Elective taken:</label>
    <input type="text" id="Science-Elective" name="Science-Elective">

    <h4>Semester 2</h4>
    <label for="freshman-class">ENGL101</label>
    <input type="checkbox" id="freshman-class" name="freshman-class">
    <br>
    <label for="freshman-class">COMP167</label>
    <input type="checkbox" id="freshman-class" name="freshman-class">
    <br>
    <label for="freshman-class">COMP180</label>
    <input type="checkbox" id="freshman-class" name="freshman-class">
    <br>
    <label for="freshman-class">MATH132</label>
    <input type="checkbox" id="freshman-class" name="freshman-class">
    <br>
    <label for="Science-Elective">Enter the African American Culture & History class taken:</label>
    <input type="text" id="Science-Elective" name="Science-Elective">



    <h2> Year 3: </h2>
    <h4>Semester 1</h4>
    <label for="freshman-class">ENGL100</label>
    <input type="checkbox" id="freshman-class" name="freshman-class">
    <br>
    <label for="freshman-class">COMP163</label>
    <input type="checkbox" id="freshman-class" name="freshman-class">
    <br>
    <label for="freshman-class">MATH131</label>
    <input type="checkbox" id="freshman-class" name="freshman-class">
    <br>
    <label for="Science-Elective">Enter the Social/Behavioral Science Elective taken:</label>
    <input type="text" id="Science-Elective" name="Science-Elective">
    <br>
    <label for="Science-Elective">Enter the Social/Behavioral Science Elective taken:</label>
    <input type="text" id="Science-Elective" name="Science-Elective">
    <br>
    <label for="Science-Elective">Enter the Social/Behavioral Science Elective taken:</label>
    <input type="text" id="Science-Elective" name="Science-Elective">
    <br>



    <h4>Semester 2</h4>
    <label for="freshman-class">ENGL331</label>
    <input type="checkbox" id="freshman-class" name="freshman-class">
    <br>
    <label for="freshman-class">COMP322</label>
    <input type="checkbox" id="freshman-class" name="freshman-class">
    <br>
    <label for="freshman-class">COMP365</label>
    <input type="checkbox" id="freshman-class" name="freshman-class">
    <br>
    <label for="freshman-class">COMP350</label>
    <input type="checkbox" id="freshman-class" name="freshman-class">
    <br>
    <label for="freshman-class">COMP390</label>
    <input type="checkbox" id="freshman-class" name="freshman-class">
    <br>
    <label for="freshman-class">COMP300</label>
    <input type="checkbox" id="freshman-class" name="freshman-class">
    <br>




    <h2> Year 4: </h2>
    <h4>Semester 1</h4>
    <label for="freshman-class">COMP385</label>
    <input type="checkbox" id="freshman-class" name="freshman-class">
    <br>
    <label for="freshman-class">COMP410</label>
    <input type="checkbox" id="freshman-class" name="freshman-class">
    <br>

    <label for="freshman-class">COMP476</label>
    <input type="checkbox" id="freshman-class" name="freshman-class">
    <br>

    <label for="Science-Elective">Enter the free elective taken:</label>
    <input type="text" id="Science-Elective" name="Science-Elective">

    <h4>Semester 2</h4>
    <label for="freshman-class">COMP496</label>
    <input type="checkbox" id="freshman-class" name="freshman-class">
    <br>

    <p> Enter Science Elective Taken:</p>

    <select id="Science-Elective" name="Science-Elective">
        <optgroup label="Science Electives">
              <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $database = "graduation guide";

                  $connection = new mysqli($servername,$username, $password, $database);
                  if ($connection-> connect_error){
                      die("Connection failed: " . $connection->connect_error);
                  }
                  $sql = "SELECT * FROM chem";
                  $result = $connection->query($sql);

              while($row=mysqli_fetch_array($result)){
              ?>
              <option Value = "<?php echo $row['cname'];?>"><?php echo $row['cname'], $row['cnumber'];?><?option>
              <?php } ?>
            <option value=""> </option>
            <option value=""> </option>
            <option value=""> </option>
            <option value=""> </option>
            <option value=""> </option>
            <option value=""> </option>
            <option value=""> </option>

            <br>
<tr></tr>
<td><input type="submit" name="submit" value="submit"> </td>
<button type = "button"> Add Another Semester </button>


</form>

<br>

<table>

</table>

</body>
</html>