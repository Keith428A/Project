<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data From Db</title>
  <link rel="stylesheet" href="display_data.css">
</head>
<body>
  <div class="container">
    <h1 class="bg-light-subtle" style="text-align: center;"><u>Data From Database.</u></h1>
    <?php
    require_once("dbcontact.php");

  
    if ($connect->connect_error) {
        die("Connection failed: " . $connect->connect_error);
    }

    $sql = "SELECT id, name, email, message FROM user";
    $result = $connect->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                </tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["name"] . "</td>
                    <td>" . $row["email"] . "</td>
                    <td>" . $row["message"] . "</td>
                    <td>
                        <a class='edit-button' href='edit_contact_form.php?id=" . $row["id"] . "'>Edit</a>
                        <button class='delete-button' onclick='deleteRow(this, " . $row["id"] . ")'>Delete</button>
                    </td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    $connect->close();
    ?>
  </div>

  <script>

    function deleteRow(button, id) {
        var confirmation = confirm("Are you sure you want to delete this entry?");
        if (confirmation) {
            var row = button.parentNode.parentNode;
            row.parentNode.removeChild(row);

            
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        console.log("Entry deleted successfully");
                    } else {
                        console.error("Error deleting entry: " + xhr.statusText);
                    }
                }
            };
            xhr.open("POST", "delete_form.php", true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.send("id=" + id);
        }
    }
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
