<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me | Portfolio</title>
    <style>
        <?php include "css/style.css"; ?>
    </style>
</head>
<body>
    <?php require "components/header.php"; ?>
    
    <?php require "components/sidepanel.php"; ?>
    <?php require "components/mode.php"; ?>

    <?php require "content/indexMain.php"; ?>

    <?php require "components/footer.php"; ?>


    <script>

        sessionStorage.setItem("page","aboutMe");

        document.body.onload = () => {
            document.getElementById(sessionStorage.getItem('page')).className = "active";
        }
    
    </script>
</body>
</html>