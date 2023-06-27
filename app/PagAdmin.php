
<!DOCTYPE html>
<html>
    <head>
        <title>Página Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

        <style>

            .table{
                border-radius: 5px;
            }

        </style>

    </head>
    <body style="background-color:darkgray; text-align: center;">

        <h1>Bem vindo/a à página de Admin</h1>
        <h2>Aqui pode ver os vários utilizadores e os respetivos dados</h2>
        <h4><a href="logout.php">Logout</a></h4>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Password</th>
                </tr>
            </thead>
            <tbody> 
                <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                ?>
                        <tr>
                            <td><?php echo $row['First Name']; ?></td>
                            <td><?php echo $row['Last Name']; ?></td>
                            <td><?php echo $row['Username']; ?></td>
                            <td><?php echo $row['Email']; ?></td>
                            <td><?php echo $row['Password']; ?></td>
                        </tr>                       
                <?php       }
                    }
                ?>                
            </tbody>
        </table>
    </div> 


    </body>
</html>