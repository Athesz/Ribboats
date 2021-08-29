<?php
require 'classes/ProductService.php';
$ProductService = new ProductService();
$boatList = $ProductService->getBoats();
?>
<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rib Csónakok listája</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php require 'navbar.php' ?>
    <div id="themebanner2" class="themebanner container-fluid">
        <div class="container text-white text-center py-5 my-5">
            <p class="my-5"></p>
        </div>
    </div>
    <div class="container text-center pt-2 pb-2 ">
        <h3 class="display-5 mt-4 mb-2 pb-2">Aktuális termék kínálatunk</h3>
        <div class="separator line-separator">♦</div>
    </div>
    <div class="container mb-4">
        <div class="row mx-auto">
            <?php  
            foreach ($boatList as $row ){
               ?>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card mx-2 my-2 px-0 shadow">
                    <img src="img/<?php echo $row['boatimg'];?>" class="img-fluid card-img-top p-3" alt="ribboat" />
                    <div class="card-header bg-white text-center">
                        <h5 class="lead text-uppercase fw-bolder"><?php echo $row['modell'];?></h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col"><small class="text-muted">Szállítható: </small></div>
                            <div class="col"><small class="text-muted"><?php echo $row['maxperson'];?></small></div>                          
                        </div>
                        <div class="row">
                            <div class="col"><small class="text-muted">Nettó súly: </small></div>
                            <div class="col"><small class="text-muted"><?php echo $row['nettweight'];?></small></div>                          
                        </div>
                    </div>
                    <div class="card-body text-center mx-auto">
                        <a class="btn text-white themebutton" role="button"
                            href="productpage.php?id=<?php echo $row['id'];?>">További részletek</a>
                    </div>
                </div>
            </div>
            <?php        
        } 
        ?>
        </div>
    </div>
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