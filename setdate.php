<?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "diary";
      $input_date=$_POST['date'];
      $date = date("Y-m-d H:i:s",strtotime($input_date));


      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);

      // Check connection
      if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
      }

        $createDate = "INSERT INTO `daty`(`daty`) VALUES ('$date')";

        if ($conn->query($createDate) === TRUE) {
            echo "
            <script>
              alert('Dodano nowy rekord!');
              window.history.go(-1);
            </script>
            ";
        } else {
            echo "Error: " . $createDate . "<br>" . $conn->error;
        }

        $conn->close();
      ?>
