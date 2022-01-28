<?php
    define("DB_HOST", "localhost");
    define("DB_NAME", "umpmykids");
    define("DB_CHARSET", "utf8");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");

    //connect db
    try {
        $pdo = new PDO(
          "mysql:host=".DB_HOST.";charset=".DB_CHARSET.";dbname=".DB_NAME,
          DB_USER, DB_PASSWORD, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
          ]
        );
      } catch (Exception $ex) { exit($ex->getMessage()); }
?>
<?php
    include 'connect.php';//use connection file

   if (isset($_POST["Search"]))
      {
          $stmt = $pdo->prepare("SELECT * FROM `ump staff parents` WHERE `ParentsID` LIKE ?");
          $stmt->execute(["%".$_POST["Search"]."%"]);
          $results = $stmt->fetchAll();
          if (isset($_POST["ajax"])) { echo json_encode($results); }

          //Display
          if (count($results) > 0) { foreach ($results as $data) {                                                
          ?>
          <tr>
          <!--<td><a href="parentlist.php"><?php //echo $data['ParentsID'] ?></td>-->
          <?php echo '<td><a href=\'parentlist.php?ParentsID='.$data['ParentsID'].'\'>'.$data['ParentsID']. '</td>'; ?>
         <td><?php echo $data['PaymentID'] ?></td>
          <td><?php echo $data['UserName'] ?></td>
          <td><?php echo $data['Status'] ?></td>
                                                   
         </tr>
           <?php
           }} else { echo "No results found"; }
                                              
           }
?>
</body>
</html>


