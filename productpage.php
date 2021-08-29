<?php
require_once  'classes/ProductService.php';
require_once  'classes/OrderService.php';
$ProductService = new ProductService();
$OrderService = new OrderService();

$PVCColors = $ProductService->getPvcColors();
$HYPColors = $ProductService->getHypColors();

?>
<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adatlap és konfigurátor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php require 'navbar.php' ?>
    <div class="container">
        <div class="row">
            <?php   
            if (count($_POST)>0) { ?>
            <div class="alert alert-success" role="alert">
                <strong>Sikeres árajánlat kérés!</strong> Üzletkötőnk hamarosan felveszi önnel a kapcsolatot és
                tájékoztatja a részletekről.
            </div>
            <?php } ?>
            <?php 
            if (isset($_GET['id'])){
                $boatId = $_GET['id'];
                $boatDataPage = $ProductService->getThisBoat($boatId);
                $boatBasics = $ProductService->getThisBoatBasicList($boatId);
                $boatExtras = $ProductService->getThisBoatExtraList($boatId);       
            } 

            foreach ($boatDataPage as $row ){
                ?>
            <!-- KÉP ÉS MODELL KIÍRÁSA -->
            <div class="jumbotron jumbotron-fluid border-bottom mt-4 mb-4">
                <div class="container">
                    <h2 class="display-5">Adatlap és konfigurátor</h2>
                    <p class="lead"><?php echo $row['modell'];?></p>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 m-auto">
                <img data-bs-toggle="modal" data-bs-target="#galleryModal" src="img/<?php echo $row['boatimg'];?>"
                    class="col-8 m-auto d-block img-fluid" alt="" id="productImg">
                <div class="row justify-content-center mx-auto pt-4">
                    <div class="col"><img onclick="changePic()" src="img/parts01.jpg"
                            class="img-fluid small-img img-thumbnail" alt=""></div>
                    <div class="col"><img onclick="changePic()" src="img/parts02.jpg"
                            class="img-fluid small-img img-thumbnail" alt=""></div>
                    <div class="col"><img onclick="changePic()" src="img/parts04.jpg"
                            class="img-fluid small-img img-thumbnail" alt=""></div>
                    <div class="col"><img onclick="changePic()" src="img/<?php echo $row['boatimg'];?>"
                            class="img-fluid small-img img-thumbnail" alt=""></div>
                </div>
            </div>

            <div class="modal fade" id="galleryModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img id="modalPic" class="img-fluid" src="img/<?php echo $row['boatimg'];?>" alt="ribboat"
                                title="ribboat">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 p-2">
                <div class="container mt-5 mb-2">
                    <div class="row row-cols-2">
                        <div class="col text-center mt-2">
                            <i class="bigicons fas fa-ship"></i>
                            <h3 class="subtitle display-6 pt-2"><?php echo $row['fulllength'];?> x <?php echo $row['fullwidth'];?></h3>
                        </div>
                        <div class="col text-center mt-2">
                            <i class="bigicons fas fa-weight"></i></i>
                            <h3 class="subtitle display-6 pt-2"><?php echo $row['nettweight'];?></h3>
                        </div>
                        <div class="col text-center mt-2 pt-3">
                            <i class="bigicons fas fa-bolt"></i></i>
                            <h3 class="subtitle display-6 pt-2"><?php echo $row['suggestedengine'];?></h3>
                        </div>
                        <div class="col text-center mt-2 pt-3">
                            <i class="bigicons far fa-user-circle"></i>
                            <h3 class="subtitle display-6 pt-2"><?php echo $row['maxperson'];?></h3>
                        </div>
                    </div>
                </div>
            </div>
            
            <?php } ?>
            <!-- ALAP KIEG TÁBLA ELEJE -->
            <div class="table-responsive mt-4">
                <table class="table table-sm table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Alap kiegészítők</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            foreach ($boatBasics as $row ){
                            ?>
                        <tr>
                            <td>
                                <?php echo $row['basicName'];?>
                            </td>
                        </tr>
                        <?php     
                            } 
                            ?>
                    </tbody>
                </table>
            </div>
            <!-- ALAP KIEG TÁBLA VÉGE -->
            <?php     
                foreach ($boatDataPage as $row ){
                ?>
            <!-- ADATOK KIIRÁSA -->
            <div class="table-responsive mt-3">
                <table class="table table-sm table-striped">
                    <thead>
                        <tr>
                            <th class="col-8" scope="col">Leírás</th>
                            <th class="col-4" scope="col">Adatok</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Teljes hossz</th>
                            <td><?php echo $row['fulllength'];?></td>
                        </tr>
                        <tr>
                            <th scope="row">Belső hossz</th>
                            <td><?php echo $row['innerlength'];?></td>
                        </tr>
                        <tr>
                            <th scope="row">Teljes szélesség</th>
                            <td><?php echo $row['fullwidth'];?></td>
                        </tr>
                        <tr>
                            <th scope="row">Belső szélesség</th>
                            <td><?php echo $row['innerwidth'];?></td>
                        </tr>
                        <tr>
                            <th scope="row">Gumitömlő átmérő</th>
                            <td><?php echo $row['diameter'];?></td>
                        </tr>
                        <tr>
                            <th scope="row">Nettó súly</th>
                            <td><?php echo $row['nettweight'];?></td>
                        </tr>
                        <tr>
                            <th scope="row">Maximum terhelhetőségi súly</th>
                            <td><?php echo $row['maxweight'];?></td>
                        </tr>
                        <tr>
                            <th scope="row">Maximum személy</th>
                            <td><?php echo $row['maxperson'];?></td>
                        </tr>
                        <tr>
                            <th scope="row">Maximális motor erősség</th>
                            <td><?php echo $row['maxengine'];?></td>
                        </tr>
                        <tr>
                            <th scope="row">Ajánlott motor erősség</th>
                            <td><?php echo $row['suggestedengine'];?></td>
                        </tr>
                        <tr>
                            <th scope="row">Maximális megengedett motor súly</th>
                            <td><?php echo $row['maxengineweight'];?></td>
                        </tr>
                        <tr>
                            <th scope="row">Csónak mérete lábban</th>
                            <td><?php echo $row['feet'];?></td>
                        </tr>
                        <tr>
                            <th scope="row">Légkamrák száma</th>
                            <td><?php echo $row['airchamber'];?></td>
                        </tr>
                        <tr>
                            <th scope="row">Vászon csomagolás, csomag méret</th>
                            <td><?php echo $row['packagesize'];?></td>
                        </tr>
                    </tbody>
                </table>

                <form action="" method="POST">
                    <div class="table-responsive mt-4">
                        <table class="table table-sm table-striped">
                            <thead>
                                <tr>
                                    <th class="col-8" scope="col">Csónak anyagának kiválasztása</th>
                                    <th class="col-4" scope="col">Ára</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">
                                        <div class="form-check">
                                            <input value="<?php echo $row['pvc1'];?>" onclick="totalIt(); showPvc()"
                                                class="form-check-input" type="radio" name="flexRadioBody"
                                                data-price="<?php echo $row['pvc1'];?>" id="flexRadioBody1" />
                                            <label class="form-check-label" for="flexRadioBody1">0.9mm PVC</label>
                                        </div>
                                    </td>
                                    <td><?php echo number_format($row['pvc1'],0,",",".");?> Ft</td>
                                </tr>
                                <tr>
                                    <td scope="row">
                                        <div class="form-check">
                                            <input value="<?php echo $row['pvc2'];?>" onclick="totalIt(); showPvc()"
                                                class="form-check-input" type="radio" name="flexRadioBody"
                                                data-price="<?php echo $row['pvc2'];?>" id="flexRadioBody2" />
                                            <label class="form-check-label" for="flexRadioBody2">1.2mm PVC</label>
                                        </div>
                                    </td>
                                    <td><?php echo number_format($row['pvc2'],0,",",".");?> Ft</td>
                                </tr>
                                <tr>
                                    <td scope="row">
                                        <div class="form-check">
                                            <input value="<?php echo $row['hyp1'];?>" onclick="totalIt(); showHyp()"
                                                class="form-check-input" type="radio" name="flexRadioBody"
                                                data-price="<?php echo $row['hyp1'];?>" id="flexRadioBody3" />
                                            <label class="form-check-label" for="flexRadioBody3">Hypalon, Taiwan</label>
                                        </div>
                                    </td>
                                    <td><?php echo number_format($row['hyp1'],0,",",".");?> Ft</td>
                                </tr>
                                <tr>
                                    <td scope="row">
                                        <div class="form-check">
                                            <input value="<?php echo $row['hyp2'];?>" onclick="totalIt(); showHyp()"
                                                class="form-check-input" type="radio" name="flexRadioBody"
                                                data-price="<?php echo $row['hyp2'];?>" id="flexRadioBody4" />
                                            <label class="form-check-label" for="flexRadioBody4">Hypalon, French
                                                ORCA</label>
                                        </div>
                                    </td>
                                    <td><?php echo number_format($row['hyp2'],0,",",".");?> Ft</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
            </div>
            <!-- ADATOK KIIRÁS VÉGE-->
            <?php } ?>
            <!-- SZÍNEK KIIRÁS -->
            <div id="pvctable" class="table-responsive mt-4 hide">
                <table class="table table-sm table-striped ">
                    <thead>
                        <tr>
                            <th class="col-md-2" scope="col">PVC - Szín kiválasztása</th>
                            <th class="col-md-6" scope="col"></th>
                            <th class="col-md-4" scope="col">Ára</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                          foreach ($PVCColors as $row ){ 
                            ?>
                        <tr class="align-middle">
                            <td>
                                <div class="form-check">
                                    <input value="<?php echo $row['id'];?>" onclick="totalIt()" class="form-check-input"
                                        type="radio" name="flexRadioColor" data-price="<?php echo $row['price'];?>"
                                        id="flexRadioColor1" />
                                    <label class="form-check-label"
                                        for="flexRadioColor"><?php echo $row['color'];?></label>
                                </div>
                            </td>
                            <td><img class="img-fluid img-thumbnail h-25" src="img/<?php echo $row['image'];?>" alt="">
                            </td>
                            <td><?php echo number_format($row['price'],0,",",".");?> Ft</td>
                        </tr>
                        <?php     
                    } 
                    ?>
                    </tbody>
                </table>
            </div>
            <div id="hyptable" class="table-responsive mt-4 hide">
                <table class="table table-sm table-striped ">
                    <thead>
                        <tr>
                            <th class="col-md-2" scope="col">Hypalon - Szín kiválasztása</th>
                            <th class="col-md-6" scope="col"></th>
                            <th class="col-md-4" scope="col">Ára</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($HYPColors as $row ){
                            ?>
                        <tr class="align-middle">
                            <td>
                                <div class="form-check">
                                    <input value="<?php echo $row['id'];?>" onclick="totalIt()" class="form-check-input"
                                        type="radio" name="flexRadioColor" data-price="<?php echo $row['price'];?>"
                                        id="flexRadioColor15" />
                                    <label class="form-check-label"
                                        for="flexRadioColor"><?php echo $row['color'];?></label>
                                </div>
                            </td>
                            <td><img class="img-fluid img-thumbnail h-25" src="img/<?php echo $row['image'];?>" alt="">
                            </td>
                            <td><?php echo number_format($row['price'],0,",",".");?> Ft</td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <!-- SZÍNEK KIIRÁS VÉGE -->
            <!-- EXTRÁK KIIRÁSA -->
            <div class="table-responsive mt-3">
                <table class="table table-sm table-striped">
                    <thead>
                        <tr>
                            <th class="col-8" scope="col">Opcionális Kiegészítők</th>
                            <th class="col-4" scope="col">Ára</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($boatExtras as $row ){
                                ?>
                        <tr>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input name="extraList[]" class="form-check-input" type="checkbox"
                                        id="inlineCheckbox1" value="<?php echo $row['extraid'];?>"
                                        data-price="<?php echo $row['extraprice'];?>" onclick="totalIt()" />
                                    <label class="form-check-label"
                                        for="inlineCheckbox1"><?php echo $row['extraName'];?></label>
                                </div>
                            </td>
                            <td><?php echo number_format($row['extraprice'],0,",",".");?> Ft</td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <!-- EXTRÁK KIIRÁS VÉGE -->
            <div class="table-responsive pt-4">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-6" scope="col">Az összeállított csónak ára</th>
                            <th class="col-3" scope="col">Nettó ár</th>
                            <th class="col-3" scope="col">Bruttó ár(+27% áfa)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-primary">
                            <td></td>
                            <td class="fw-bold"><output id="output"></output></td>
                            <td class="fw-bold"><output id="output2"></output></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <h4 class="text-center">Figyelem! Az összeállított terméknek a motor nem tartozéka!</h4>
            <h2 class="display-5 border-bottom mt-4">Személyes adatok</h2>

            <div class="form-outline mb-4">
                <input type="text" name="userName" id="form5Example1" class="form-control" placeholder="Teljes név"
                    required>
            </div>
            <div class="form-outline mb-4">
                <input type="text" name="userPhone" id="form5Example2" class="form-control"
                    placeholder="Tel. formátuma: 06303334444" required>
            </div>
            <div class="form-outline mb-4">
                <input type="email" name="userMail" id="form5Example3" class="form-control"
                    placeholder="Email cím megadása" required>
            </div>
            <div class="form-check d-flex justify-content-center mb-4">
                <input class="form-check-input me-2" type="checkbox" value="" id="form5Example3" required>
                <label class="form-check-label" for="form5Example3">
                    Beleegyezem, hogy az oldal kezelje adataimat.
                </label>
            </div>
            <div class="text-center">
                <a class="btn text-white themebutton mb-4" href="index.php">Vissza</a>
                <button type="submit" name="confirm" class="btn text-white themebutton mb-4">Árajánlat kérése</button>
            </div>
            </form>
        </div>
    </div>
    </div>

    <?php   
        if(isset($_POST['confirm'])) {
            $userName = $_POST['userName'];
            $userPhone = $_POST['userPhone'];
            $userMail = $_POST['userMail'];
            $radioBodyPrice = $_POST['flexRadioBody'];
            $radioColorId = $_POST['flexRadioColor'];
            $colorMaterial = $ProductService->getColorMaterialById($radioColorId);
            $colorPrice = $ProductService->getColorPriceById($radioColorId);
            $extraListIdArray = $_POST['extraList'];
            $sumPrice = $OrderService->sumExtraItemPrices($extraListIdArray, $colorPrice, $radioBodyPrice, $boatId);
            $sumVatPrice = $OrderService->sumPriceWithVat($sumPrice);
            $OrderService->orderRegistrate($userName, $userPhone, $userMail, $boatId, $radioColorId, $colorMaterial, $colorPrice, $radioBodyPrice, $sumPrice, $sumVatPrice, $extraListIdArray, $boatBasics);
        }
    ?>

    <?php require 'footer.php' ?>
    <script src="js/counter.js"></script>
    <script src="js/gallery.js"></script>
    <script>
        changePic();
    </script>
    <script src="https://kit.fontawesome.com/7b6ea743c6.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>
</body>

</html>