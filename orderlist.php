<?php
require_once 'classes/ProductService.php';
require_once 'classes/OrderService.php';
require_once 'classes/UserService.php';
$ProductService = new ProductService();
$OrderService = new OrderService();
$user = new UserService();   

if(!$_SESSION['loggedIn']) {
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Árajánlat lista</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php require 'navbar.php' ?>
    <div class="container">
        <div class="row mx-auto">
            <div class="jumbotron jumbotron-fluid border-bottom mt-4 mb-2">
                <div class="container">
                    <h1 class="display-4">Árajánlat kérések listája</h1>
                </div>
            </div>
            <?php  
    $orderList = $OrderService->getOrderList();
        foreach ($orderList as $row ){
            $productId = $row['boatid'];
            $boatName = $ProductService->getBoatName($productId);
            $ColorId = $row['colorid'];
            $colorName = $ProductService->getColorById($ColorId);
            ?>
            <div class="card shadow col-10 mx-auto my-4">
                <div class="card-body">
                    <h4 class="card-title">Árajánlat azonosító: <?php echo $row['id'];?></h4>
                    <p><i class="icons far fa-calendar-alt"></i> <?php echo $row['date'];?></p>
                    <div class="table-responsive mt-4">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="col-6" scope="col">Személyes adatok</th>
                                    <th class="col-6" scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">A neve:</td>
                                    <td><?php echo $row['buyername'];?></td>
                                </tr>
                                <tr>
                                    <td scope="row">A telefonszáma:</td>
                                    <td><?php echo $row['phone'];?></td>
                                </tr>
                                <tr>
                                    <td scope="row">Az e-mail címe:</td>
                                    <td><?php echo $row['email'];?></td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="col-6" scope="col">A csónak adatai</th>
                                    <th class="col-6" scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">A csónak modellje:</td>
                                    <td><?php echo $boatName; ?></td>
                                </tr>
                                <tr>
                                    <td scope="row">A test ára:</td>
                                    <td><?php echo $row['bodyprice']; ?> Ft</td>
                                </tr>
                                <tr>
                                    <td scope="row">A csónak szine:</td>
                                    <td><?php echo $colorName; ?></td>
                                </tr>
                                <tr>
                                    <td scope="row">A szín ára:</td>
                                    <td><?php echo $row['materialprice'];?> Ft</td>
                                </tr>
                                <tr>
                                    <td scope="row">A csónak anyaga:</td>
                                    <td><?php echo $row['material']; ?></td>
                                </tr>
                            </tbody>
                        </table>
                        <?php  
                            $orderId = $row['id'];
                            $basicList = $OrderService-> getOrderBasicList($orderId);
                            if(count($basicList) > 0) {
                            ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="col-6" scope="col">Az aktuális alap kiegészítők:</th>
                                    <th class="col-6" scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php                                                                 
                                foreach ($basicList as $basicrow ){
                                    $BasicName = $basicrow['orderedbasicname'];
                                ?>
                                <tr>
                                    <td scope="row"><?php echo $BasicName;?></td>
                                    <td></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <?php } ?>
                        <?php  
                            $extraList = $OrderService-> getOrderExtraList($orderId);
                            if(count($extraList) > 0) {
                            ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="col-6" scope="col">A választott extrák:</th>
                                    <th class="col-6" scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                foreach ($extraList as $extrarow ){
                                    $orderExtraId = $extrarow['orderedextraid'];
                                    $extraName = $ProductService-> getThisExtraName($orderExtraId);
                                ?>
                                <tr>
                                    <td scope="row"><?php echo $extraName;?></td>
                                    <td><?php echo $extrarow['extraprice'];?> Ft</td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <?php } ?>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="col-6" scope="col"></th>
                                <th class="col-6" scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">A teljes csomag nettó ára:</td>
                                <td><?php echo $row['sumprice']; ?> Ft</td>
                            </tr>
                            <tr>
                                <td scope="row">A teljes csomag bruttó ára:</td>
                                <td><?php echo $row['sumvatprice']; ?> Ft</td>
                            </tr>
                            <tr>
                                <td scope="row">Az árajánlat státusza:</td>
                                <td><?php echo $row['status']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <form action="" method="POST">
                        <div class="text-center">
                            <input value="<?php echo $row['id'];?>" type="hidden" name="CurrentOrderId" id="" />
                            <button type="submit" name="orderRefuse"
                                class="btn btn-danger btn-block mb-4">Elutasítás</button>
                            <button type="submit" name="orderFinished"
                                class="btn btn-success btn-block mb-4">Jóváhagyva</button>
                            <button type="submit" name="orderPending"
                                class="btn btn-info btn-block mb-4">Függőben</button>
                        </div>
                    </form>
                </div>
            </div>
            <?php 
        } 
        ?>
        </div>
    </div>

    <?php   
        if(isset($_POST['orderRefuse'])) {
            $CurrentOrderId = $_POST['CurrentOrderId'];
            $OrderService->orderStatusRefused($CurrentOrderId);
        }

        if(isset($_POST['orderFinished'])) {
            $CurrentOrderId = $_POST['CurrentOrderId'];
            $OrderService->orderStatusAccepted($CurrentOrderId);
        }

        if(isset($_POST['orderPending'])) {
            $CurrentOrderId = $_POST['CurrentOrderId'];
            $OrderService->orderStatusPending($CurrentOrderId);
        }
    ?>

    <?php require 'footer.php' ?>
    <script src="https://kit.fontawesome.com/7b6ea743c6.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>
</body>

</html>