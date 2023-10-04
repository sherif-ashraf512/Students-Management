<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="master.css">
    <title></title>
</head>
<body>
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
                <input type="email" name="email" id="email" placeholder="Type Student Email">
                <br>
                <label for="name">Student Number :</label> <br>
                <input type="text" name="tel" id="tel" placeholder="Type Student Telephone Number">
                <br>
                <label for="name">Student Adress :</label> <br>
                <input type="text" name="adress" id="adress" placeholder="Type Student Adress">
                <br>
                <input class="button" type="submit" id="add" name="add" value="Add">
                <input class="button" type="submit" id="del" name="del" value="Delete">
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
                <td>1</td>
                <td>Sherif Ashraf</td>
                <td>sherifashraf51203@gmail.com</td>
                <td>01069782279</td>
                <td>Egypt</td>
            </table>
        </div>
    </div>
</body>
</html>