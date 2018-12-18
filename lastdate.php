<?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "diary";
      // $input_date=$_POST['date'];
      // $date = date("Y-m-d H:i:s",strtotime($input_date));

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);

      // Check connection
      if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
      }

        $sql =  "SELECT * FROM `daty` WHERE ID = (SELECT MAX(ID) FROM `daty`)";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          // output data of each row
          while($lastDate = $result->fetch_assoc()) {
            echo
            "<script>
            document.getElementById('date').setDisplayValue('XD');
           </script>";
          }
        } else {
            echo "Tak serio to nie liczymy w ogóle...";
        }

        $conn->close();
      ?>
