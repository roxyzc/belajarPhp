<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <!-- Data Tables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/rowreorder/1.3.1/css/rowReorder.dataTables.min.css">
</head>

<body>
    <h3 class="text-center">
        Universitas Pelita Bangsa<br>
        <small class="text-muted">Pemrograman web 1</small>
    </h3>
    <hr class="d-block d-sm-none">

    <!-- Navbar atas -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark d-none d-sm-block">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Roxyzc</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="?page=home"><i class="bi bi-house-door-fill"></i> Home</a>
                    </li>
                    <div class="btn-group dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Boostrap 5
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="?page=grid">Grid</a></li>
                            <li><a class="dropdown-item" href="?page=tables">Tables</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something
                                    else here</a></li>
                        </ul>
                    </div>
                    <li class="nav-item"><a class="nav-link" href="?page=about"><i class="bi bi-file-person"></i> About</a></li>
                    <li class="nav-item"><a class="nav-link" href="?page=contact"><i class="bi bi-person-lines-fill"></i> Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <?php
    if (isset($_GET['page'])) {
        $page = $_GET['page'];

        switch ($page) {
            case "home":
                include "halaman/home.php";
                break;
            case "about":
                include "halaman/about.php";
                break;
            case "contact":
                include "halaman/contact.php";
                break;
            case "grid":
                include "halaman/grid.php";
                break;
            case "tables":
                include "halaman/tables.php";
                break;
            default:
                echo "<h1 class=\"text-center\">PAGE NOT FOUND</h1>";
                break;
        }
    } else {
        include("./halaman/home.php");
    }

    ?>

    <!-- Nabar bawah -->
    <nav class="navbar navbar-expand navbar-dark bg-dark fixed-bottom d-block d-sm-none">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="?page=home"><i class="bi bi-house-door-fill"></i> Home</a>
                    </li>

                    <!-- Default dropup button -->
                    <div class="btn-group dropup">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Boostrap 5
                        </a>
                        <ul class="dropdown-menu">
                            <!-- Dropdown menu links -->
                            <li><a class="dropdown-item" href="?page=grid">Grid</a></li>
                            <li><a class="dropdown-item" href="?page=tables">Tables</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </li>
                        </ul>
                    </div>

                    <li class="nav-item">
                        <a class="nav-link" href="?page=about"><i class="bi bi-file-person"></i> About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=contact"><i class="bi bi-person-lines-fill"></i> Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <!-- Data Tables JS -->
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/rowreorder/1.3.1/js/dataTables.rowReorder.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#tables').DataTable();
        });
    </script>
</body>

</html>