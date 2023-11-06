<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="master.css">
    <title>Student Managment</title>
</head>
<body>
                <?php
                //connect to database
                $dsn = 'mysql:host=localhost;dbname=students';
                $user = 'root';
                $pass = '';
            
                try{
                    $con = new PDO($dsn,$user,$pass);
                    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                }
                catch(PDOException $e){
                    echo "faild " . $e->getMessage();
                }
                $res = $con->query("SELECT * FROM student");
            
                $name = '';
                $email = '';
                $tel_number ='';
                $address = '';
            
                if (isset($_POST["name"])){
                    $name = $_POST["name"];
                }
                if (isset($_POST["email"])){
                    $email = $_POST["email"];
                }
                if (isset($_POST["tel"])){
                    $tel_number = $_POST["tel"];
                }
                if (isset($_POST["address"])){
                    $address = $_POST["address"];
                }
            
                $sqls = '';
            
                if(isset($_POST["add"])){
                    $sqls = "INSERT INTO student ( name , email , tel_number , address ) values(:name, :email, :tel_number, :address)";
                    $data = [
                        ':name' =>$name,
                        ':email' =>$email,
                        ':tel_number' => $tel_number,
                        ':address' =>$address
                    ];
                    $con->prepare($sqls)->execute($data);
                    header("Location : home.php");
                    exit();
                }
            
                if(isset($_POST["del"])){
                    $sqls = "DELETE FROM student WHERE email = '$email' && name ='$name' ";
                    $con->query($sqls);
                    header("Location : home.php");
                    exit();
                }
                ?>
    <div>
        <div class = "control-panel">
            <form action="" method="post">
                <div>
                    <br>
                    <h3>Admin Panel</h3>
                </div>
                <label for="name">Student Name :</label> <br>
                <input type="text" name="name" id="name" placeholder="Type Student Name">
                <br>
                <label for="email">Student Email :</label> <br>
                <input type="email" name="email" id="email" placeholder="Type Student Email" required>
                <br>
                <label for="name">Student Number :</label> <br>
                <input type="text" name="tel" id="tel" placeholder="Type Student Telephone Number">
                <br>
                <label for="name">Student Address :</label> <br>
                <input type="text" name="address" id="address" placeholder="Type Student Address">
                <br>
                <input class="button" type="submit" id="add" name="add" value="Add">
                <input class="button" type="submit" id="del" name="del" title="To Delete A student You need To Input Student Name And Input Student Email" value="Delete">
            </form>
        </div>
        <div class="tbl">
            <table>
                <tr>
                    <th>Student Id</th>
                    <th>Student Name</th>
                    <th>Student Email</th>
                    <th>Student Tel-Number</th>
                    <th>Student Adress</th>
                </tr>
                <?php
                while ($row = $res->fetch()){
                    echo "<tr>";
                        echo  "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['tel_number'] . "</td>";
                        echo "<td>" . $row['address'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </table>
        </div>
    </div>
</body>
</html>
