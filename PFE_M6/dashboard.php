<?php
include 'connexion.php';

if (isset($_POST['submit'])) {
    $h2premiere = $_POST['h2premiere'] ?? '';
    $paragraphe = $_POST['paragraphe'] ?? '';
    $h2deuxieme = $_POST['h2deuxieme'] ?? '';
    $h2troisieme = $_POST['h2troisieme'] ?? '';
    $h4premiere = $_POST['h4premiere'] ?? '';
    $paragrapheF = $_POST['paragrapheF'] ?? '';
    $paragrapheS = $_POST['paragrapheS'] ?? '';

    $stmt = mysqli_prepare($conn, "INSERT INTO `annonce1` (h2premiere, paragraphe, h2deuxieme, h2troisieme, h4premiere, paragrapheF, paragrapheS) VALUES (?, ?, ?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmt, 'sssssss', $h2premiere, $paragraphe, $h2deuxieme, $h2troisieme, $h4premiere, $paragrapheF, $paragrapheS);
    
    if (mysqli_stmt_execute($stmt)) {
        echo "<script>alert('Data inserted successfully');</script>";
    } else {
        echo "<script>alert('Failed to execute statement: " . mysqli_stmt_error($stmt) . "');</script>";
    }
    
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
     <!-- Favicon-->
     <link rel="icon" type="image/x-icon" href="fav png.png" />
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/xlsx/dist/xlsx.full.min.js"></script>
    <title>Dashboard</title>
</head>
    <body id="page-top">
        <!-- Navigation-->
        <?php include 'header.php'; ?><!--  page dashboard makhasch ndiro liha f header dyalha login  -->
        <!-- form-->
        <section class="page-section" id="contact">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 col-xl-6 text-center">
                    <h2>Dashboard</h2>
                    <hr class="divider" />
                    <p class="text-muted mb-5">Manage your content</div>
            </div>
        <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
    <div class="col-lg-6">
        <form method="post">
            <!-- h2premiere input-->
            <div class="mb-3 mt-3">
                <label for="h2premiere">h2premiere</label>
                <textarea type="text" id="h2premiere" class="form-control" name="h2premiere"></textarea>
            </div>
            <!-- paragraphe input-->
            <div class="mb-3 mt-3">
                <label for="paragraphe">paragraphe</label>
                <textarea type="text" id="paragraphe" class="form-control" name="paragraphe"></textarea>
            </div>
            <!-- h2deuxieme input-->
            <div class="mb-3 mt-3">
                <label for="h2deuxieme">h2deuxieme</label>
                <textarea type="text" id="h2deuxieme" class="form-control" name="h2deuxieme"></textarea>
            </div>
            <!-- h2troisieme input-->
            <div class="mb-3 mt-3">
                <label for="h2troisieme">h2troisieme</label>
                <textarea type="text" id="h2troisieme" class="form-control" name="h2troisieme"></textarea>
            </div>
            <!-- h4premiere input-->
            <div class="mb-3 mt-3">
                <label for="h4premiere">h4premiere</label>
                <textarea type="text" id="h4premiere" class="form-control" name="h4premiere"></textarea>
            </div>
            <!-- paragrapheF input-->
            <div class="mb-3 mt-3">
                <label for="paragrapheF">paragrapheF</label>
                <textarea type="text" id="paragrapheF" class="form-control" name="paragrapheF"></textarea>
            </div>
            <!-- paragrapheS input-->
            <div class="mb-3 mt-3">
                <label for="paragrapheS">paragrapheS</label>
                <textarea type="text" id="paragrapheS" class="form-control" name="paragrapheS"></textarea>
            </div>
            <!-- Submit Button-->
            <div class="d-grid">
                <button type="submit" name="submit" class="btn btn-primary btn-xl mb-3">Submit</button>
            </div>
        </form>
    </div>
</div>
<!-- <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
    <div class="col-lg-6">
        <form method="post">
            
            <!- Submit Button->
            <div class="d-grid">
                <button type="submit" name="submit1" class="btn btn-primary btn-xl mb-3">Submit</button>
            </div>
        </form>
    </div>
</div> -->
</div>
    </section>
        <!-- Footer-->
        <?php include 'footer.php'; ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>

