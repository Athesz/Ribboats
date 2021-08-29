<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Képgaléria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php require 'navbar.php' ?>
    <div class="container">
        <div class="row py-3">
            <div class="title-area text-center pt-4 pb-4">
                <h2 class="display-5">Képgaléria</h2>
                <div class="separator separator-danger">♦</div>
            </div>
        </div>
        <div class="gallery">
            <div class="column">
                <img data-bs-toggle="modal" data-bs-target="#galleryModal2" class="img-fluid graypic" src="img/galery18.jpg" alt="Rib boat" title="Rib boat" />
                <img data-bs-toggle="modal" data-bs-target="#galleryModal2" class="img-fluid graypic" src="img/galery11.jpg" alt="Handler" title="Handler" />
            </div>
            <div class="column">
                <img data-bs-toggle="modal" data-bs-target="#galleryModal2" class="img-fluid graypic" src="img/galery20.jpg" alt="Rib boat" title="Rib boat" />
                <img data-bs-toggle="modal" data-bs-target="#galleryModal2" class="img-fluid graypic" src="img/galery13.jpg" alt="Boat wheel" title="Boat wheel" />
            </div>
            <div class="column">
                <img data-bs-toggle="modal" data-bs-target="#galleryModal2" class="img-fluid graypic" src="img/galery16.jpg" alt="Boat led" title="Boat led" />
                <img data-bs-toggle="modal" data-bs-target="#galleryModal2" class="img-fluid graypic" src="img/galery12.jpg" alt="Matteo" title="Matteo" />
            </div>
            <div class="column">
                <img data-bs-toggle="modal" data-bs-target="#galleryModal2" class="img-fluid graypic" src="img/galery08.jpg" alt="Rib boat" title="Rib boat" />
                <img data-bs-toggle="modal" data-bs-target="#galleryModal2" class="img-fluid graypic" src="img/galery10.jpg" alt="Trailer winch" title="Trailer winch" />
            </div>
            <div class="column">
                <img data-bs-toggle="modal" data-bs-target="#galleryModal2" class="img-fluid graypic" src="img/galery09.jpg" alt="Matteo" title="Matteo" />
                <img data-bs-toggle="modal" data-bs-target="#galleryModal2" class="img-fluid graypic" src="img/galery17.jpg" alt="Rib boat" title="Rib boat" />
            </div>
            <div class="column">
                <img data-bs-toggle="modal" data-bs-target="#galleryModal2" class="img-fluid graypic" src="img/galery19.jpg" alt="Rib boat" title="Rib boat" />
                <img data-bs-toggle="modal" data-bs-target="#galleryModal2" class="img-fluid graypic" src="img/galery07.jpg" alt="Matteo" title="Matteo" />
            </div>
        </div>

        <div class="modal fade" id="galleryModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img id="modalPic2" class="img-fluid" src="img/galery18.jpg" alt="ribboat" title="ribboat">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require 'footer.php' ?>
    <script src="js/gallerypage.js"></script>
    <script>
    popUp();
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