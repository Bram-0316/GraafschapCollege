<?php 
include "server.php";
$users = $db->query("SELECT * FROM tickets");
$klantNaam = $_POST('firstname');
$klantAchternaam = $_POST('lastname');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tickets</title>
</head>
<body>
    <h1><?php echo $klantNaam; echo $klantAchternaam; ?></h1>
    <table>
    <thead>
    <tr>
        <th>Opdracht</th>
        <th colspan="2">Action</th>
    </tr>
    </thead>
    <?php
    $user = $db->query("SELECT * FROM tickets WHERE firstName=$klantNaam AND Where lastName=$klantAchternaam");
    ?>

    <?php while ($row = $users->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['opdracht']; ?></td>
            <td>
                <a href="index.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
            </td>
            <td>
                <a href="server.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
            </td>
        </tr>
    <?php } ?>
    <form method="post" action="server.php">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <div class="input-group">
        <label>Opdracht</label>
        <input type="opdracht" name="opdracht" value="<?php echo $opdracht; ?>">
    </div>
    <div class="input-group">
        <button class="btn" type="submit" name="TicketSave" >Sumbit Ticket</button>
    </div>
</form>
</body>
</html>
