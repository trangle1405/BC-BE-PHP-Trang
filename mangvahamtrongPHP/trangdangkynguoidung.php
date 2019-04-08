<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>trang dang ky nguoi dung</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>

<style>
            .error {
                color: #FF0000;
            }
            table{
                border-collapse: collapse;
                width: 100%;
            }
            td, th{
                border: solid 1px #ccc;
            }
            form{
                width: 450px;
            }
        </style>

<body>
<?php
    function loadRegistrations($filename){
        $jsondata = file_get_contents($filename);
        $arr_data = json_decode($jsondata, true);
        return $arr_data;
    }

    function saveDataJSON($filename, $name, $email, $phone){
        try {
            $contact = array(
                'name' => $name,
                'email' => $email,
                'phone' => $phone
            );

            $arr_data = loadRegistrations($filename);
            array_push($arr_data, $contact);
            $jsondata = json_encode($arr_data,JSON_PRETTY_PRINT);
            file_put_contents($filename, $jsondata);
            echo "Luu du lieu thanh cong";
        } catch (Exception $e){
            echo "loi: ", $e ->getMessage(), "\n";
        }
    }
    $nameErr = null;
    $emailErr = null;
    $phoneErr = null;
    $name = null;
    $email = null;
    $phone = null;

    if ($_SERVER["REQUEST_METHOD"] === "POST"){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $has_erro = false;

        if(empty($name)){
            $nameErr = "Name khong duoc de trong";
            $has_erro = true;

        }
        if(empty($email)){
            $emailErr = "Email khong duoc de trong";
            $has_erro = true;
        } else {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $emailErr = "dinh dang email sai (xxx@xxx.xxx.xxx)!";
                $has_erro = true;
            }
        }
        if (empty($phone)){
            $phoneErr = "so dien thoai khong duoc de trong";
            $has_erro = true;
        }
         if ($has_erro === false){
             saveDataJSON("data.json", $name, $email, $phone);
             $name = null;
             $email = null;
             $phone = null;
         }

    }


?>
    <h2>Registration Form</h2>
    <form method = "post">
    <fieldset>
    <legend>Detail</legend>
    Name: <input type = "text" name="name" value="<?php echo $name; ?>">
    <span class="error"> *<?php echo $nameErr ?></span><br><br>
    Email: <input type = "text" name="email" value="<?php echo $name; ?>">
    <span class="error"> *<?php echo $emailErr ?></span><br><br>
    Phone: <input type = "text" name="phone" value="<?php echo $name; ?>">
    <span class="error"> *<?php echo $phoneErr ?></span><br><br>
    <input type="submit" name="submit" value="Register">
    <p><span class="error">* required field.</span></p>
    </fieldset>
    </form>

    <?php
    $registrations = loadRegistrations('data.json');
    ?>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
        <?php
        foreach($registrations as $registration):
        ?>
        <tr>
                    <td><?= $registration['name']; ?></td>
                    <td><?= $registration['email']; ?></td>
                    <td><?= $registration['phone']; ?></td>
                </tr>
                <?php
                 endforeach;
                ?>
    </table>

</body>
</html>