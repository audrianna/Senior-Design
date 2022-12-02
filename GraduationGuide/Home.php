<!DOCTYPE html>
<html>
<head>

    <style>


    </style>


</head>
<body>

    <h2>Graduation Guide Class Check Off</h2>


    <p class="form-box">


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
                       <td>" . $row["subj"]. "</td>
                       <td>" . $row["cnum"] . "</td>
                       <td>" . $row["cname"] . "</td>
                       <td>" . $row["credits"] . "</td>"



                ?>
                <form action = " " method = "GET">
                           <td> <input type= "text" name = "grade" placeholder = "Enter Grade"> </td>
                           <td><input type="submit" name="submit" value="submit"></td></tr>
                </form>
                 <?php }?>
                     <?php
                           $grade = $_GET['grade'];

                           $sql = "INSERT INTO completed_courses (grade)
                                     VALUES(?)";
                           $sql_query = "INSERT completed_courses(subj, cnum, cname, prereq, credits) select subj, cnum, cname, prereq, credits from comp_courses";



                            $stmt = mysqli_stmt_init($connection);
                            if( !mysqli_stmt_prepare($stmt, $sql) ){
                                    die(mysqli_error($conn));

                            }

                                mysqli_stmt_bind_param($stmt, "s",
                                                       $grade);
                               mysqli_stmt_execute($stmt);
                         if ($connection->query($sql_query) === true){


                          }




                        ?>
                        <td>  </td>
                        </tr>
</table>
<table>

            <tr><td> <label for="Science-Elective">Select the Approved COMP Elective taken:</label>
             <select id="Science-Elective" name="Science-Elective">
                           `<optgroup label="COMP Electives">
                                 <?php

                                     $sql = "SELECT * FROM comp";
                                     $result = $connection->query($sql);

                                     while($row=mysqli_fetch_array($result)){
                                     ?>
                                       <option Value = "<?php echo $row['cname'];?>"><?php echo $row['cname'], $row['cnumber'];?> </option>
                                 <?php  } ?>`
               <input type= "text" name = "grade" placeholder = "Enter Grade">
              <input type="submit" name="submit" value="submit"></tr>
            </tr>

       <tr><td> <label for="Science-Elective">Select the Approved COMP Elective taken:</label>
        <select id="Science-Elective" name="Science-Elective">
                      `<optgroup label="COMP Electives">
                            <?php

                                $sql = "SELECT * FROM comp";
                                $result = $connection->query($sql);

                                while($row=mysqli_fetch_array($result)){
                                ?>
                                  <option Value = "<?php echo $row['cname'];?>"><?php echo $row['cname'], $row['cnumber'];?> </option>
                            <?php  } ?>`
                      <input type= "text" name = "grade" placeholder = "Enter Grade">
                    <input type="submit" name="submit" value="submit"></tr>
       </tr>

         <tr><td><label for="Science-Elective">Select the Approved Mathematics Elective taken:</label>
          <select id="Science-Elective" name="Science-Elective">
                        `<optgroup label="Approved Mathematics Electives">
                              <?php

                                  $sql = "SELECT * FROM math";
                                  $result = $connection->query($sql);

                                  while($row=mysqli_fetch_array($result)){
                                  ?>
                                    <option Value = "<?php echo $row['cname'];?>"><?php echo $row['cname'], $row['cnumber'];?> </option>
                              <?php  } ?>`
                              <input type= "text" name = "grade" placeholder = "Enter Grade">
                                            <input type="submit" name="submit" value="submit"></tr>
         </tr>

            <tr><td><label for="Science-Elective">Select the Approved Statistics Elective taken:</label>
             <select id="Science-Elective" name="Science-Elective">
                           `<optgroup label=" Approved Statistics Electives">
                                 <?php

                                     $sql = "SELECT * FROM math";
                                     $result = $connection->query($sql);

                                     while($row=mysqli_fetch_array($result)){
                                     ?>
                                       <option Value = "<?php echo $row['cname'];?>"><?php echo $row['cname'], $row['cnumber'];?> </option>
                                 <?php  } ?>`
                                 <input type= "text" name = "grade" placeholder = "Enter Grade">
                                               <input type="submit" name="submit" value="submit"></tr>
            </tr>



            <tr><td><label for="Science-Elective">Select the Knowledge of African American Culture & History class taken:</label>
             <select id="Science-Elective" name="Science-Elective">
                           `<optgroup label="Knowledge of African American Culture & History Electives">
                                 <?php

                                     $sql = "SELECT * FROM hist";
                                     $result = $connection->query($sql);

                                     while($row=mysqli_fetch_array($result)){
                                     ?>
                                       <option Value = "<?php echo $row['cname'];?>"><?php echo $row['cname'], $row['cnumber'];?> </option>
                                 <?php  } ?>`
                                 <input type= "text" name = "grade" placeholder = "Enter Grade">
                                               <input type="submit" name="submit" value="submit"></tr>
            </tr>




            <tr><td><label for="Science-Elective">Select the Social/Behavioral Science Elective taken:</label>
            <select id="Science-Elective" name="Science-Elective">
               `<optgroup label="Social/Behavioral Science Electives">
                     <?php

                         $sql = "SELECT * FROM bued UNION SELECT * FROM hist UNION SELECT * FROM fcs UNION SELECT * FROM poli UNION SELECT * FROM soci UNION SELECT * FROM ssfm UNION SELECT * FROM jomc";
                         $result = $connection->query($sql);

                         while($row=mysqli_fetch_array($result)){
                         ?>
                           <option Value = "<?php echo $row['cname'];?>"><?php echo $row['cname'], $row['cnumber'];?> </option>
                     <?php  } ?>`
                     <input type= "text" name = "grade" placeholder = "Enter Grade">
                                   <input type="submit" name="submit" value="submit"></tr>

            </tr>


           <tr><td> <label for="Science-Elective">Select the Global Awareness Elective taken:</label>
            <select id="Global-Awareness-Elective" name="Global-Awareness-Elective">
               `<optgroup label="Global Awareness Electives">
                     <?php

                         $sql = "SELECT * FROM hist UNION SELECT * FROM mgmt ";
                         $result = $connection->query($sql);

                         while($row=mysqli_fetch_array($result)){
                         ?>
                           <option Value = "<?php echo $row['cname'];?>"><?php echo $row['cname'], $row['cnumber'];?> </option>
                     <?php  } ?>`
                     <input type= "text" name = "grade" placeholder = "Enter Grade">
                                   <input type="submit" name="submit" value="submit"></tr>
           </tr>



            <tr><label for="Science-Elective">Select the Business Elective taken:</label>
            <select id="Science-Elective" name="Science-Elective">
                        `<optgroup label="Science Electives">
                              <?php

                                  $sql = "SELECT * FROM econ UNION SELECT * FROM mgmt UNION SELECT * FROM mktg";
                                  $result = $connection->query($sql);

                                  while($row=mysqli_fetch_array($result)){
                                  ?>
                                    <option Value = "<?php echo $row['cname'];?>"><?php echo $row['cname'], $row['cnumber'];?> </option>
                              <?php  } ?>`
                              <input type= "text" name = "grade" placeholder = "Enter Grade">
                                            <input type="submit" name="submit" value="submit"></tr>
            </tr>
<br>
            <tr><label for="Science-Elective">Enter the free elective taken:</label>
            <input type="text" id="Science-Elective" name="Science-Elective"></tr>
            <input type= "text" name = "grade" placeholder = "Enter Grade">
                          <input type="submit" name="submit" value="submit"></tr>
            <br>
            <tr><label for="Science-Elective">Enter the free elective taken:</label>
            <input type="text" id="Science-Elective" name="Science-Elective"></tr>
            <input type= "text" name = "grade" placeholder = "Enter Grade">
                          <input type="submit" name="submit" value="submit"></tr>


            <tr><p> Select Science Elective Taken:</p>
            <select id="Science-Elective" name="Science-Elective">
            `<optgroup label="Science Electives">
                  <?php

                      $sql = "SELECT * FROM chem UNION SELECT * FROM phys";
                      $result = $connection->query($sql);

                      while($row=mysqli_fetch_array($result)){
                      ?>
                        <option Value = "<?php echo $row['cname'];?>"><?php echo $row['cname'], $row['cnumber'];?> </option>
                  <?php  } ?>`
                  <input type= "text" name = "grade" placeholder = "Enter Grade">
                                <input type="submit" name="submit" value="submit"></tr>
            </tr>
            <tr><p> Select Science Elective Taken:</p>
            <select id="Science-Elective" name="Science-Elective">
                <optgroup label="Science Electives">
                      <?php

                          $sql = "SELECT * FROM chem UNION SELECT * FROM phys";
                          $result = $connection->query($sql);

                      while($row=mysqli_fetch_array($result)){
                      ?>
                      <option Value = "<?php echo $row['cname'];?>"><?php echo $row['cname'], $row['cnumber'];?> </option>
                      <?php  } ?>
                      <input type= "text" name = "grade" placeholder = "Enter Grade">
                                    <input type="submit" name="submit" value="submit"></tr>
            </tr>


            <tr><p> Select Science Elective Taken:</p>
            <select id="Science-Elective" name="Science-Elective">
                <optgroup label="Science Electives">
                      <?php

                          $sql = "SELECT * FROM chem UNION SELECT * FROM bio UNION SELECT * FROM phys ";
                          $result = $connection->query($sql);

                      while($row=mysqli_fetch_array($result)){
                      ?>
                      <option Value = "<?php echo $row['cname'];?>"><?php echo $row['cname'], $row['cnumber'];?> </option>
                      <?php  } ?>
                      <input type= "text" name = "grade" placeholder = "Enter Grade">
                                    <input type="submit" name="submit" value="submit"></tr>
            </tr>


                    <br>
        <tr></tr>




        <br>
</table>

</body>
</html>