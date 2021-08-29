<?php

require_once "classes/UserService.php";
$user = new UserService();

$msg2 = "";

if(isset($_POST['login'])) {
    try {
        $user->login($_POST['manager'], $_POST['password']);
       header('Location: orderlist.php');
    }
    catch (Exception $e) {
        $msg2 = $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belépés</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php require 'navbar.php' ?>
<div class="container">
<div class="container my-5 py-5 z-depth-1 border-bottom">
    <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <form method="post" class="text-center" action="#!">
                <p class="h4 mb-4">Belépés</p>
                <?=$msg2?>
                <input type="text" id="defaultLoginForm" class="form-control mb-4" placeholder="Felhasználónév" name="manager">
                <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Jelszó" name="password">
                <button class="btn themebutton text-white mt-2" type="submit" name="login">Belépés</button>
                </form>
            </div>
        </div>
    </section>
</div>
</div>
<?php require 'footer.php' ?>
<script src="https://kit.fontawesome.com/7b6ea743c6.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT"
        crossorigin="anonymous"></script>
</body>
</html>