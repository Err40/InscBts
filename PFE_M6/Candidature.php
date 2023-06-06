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
    <title>Candidature</title>
</head>
<body>
<?php include 'header.php'; ?>
    <section class="page-section" id="contact">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 col-xl-6 text-center">
                    <h2 class="mt-0">Candidature BTS 2022/2023 - Liste d'Attente N° 3 - Ouverture du 16/09/2022 jusqu'au 19/09/2022 à 14h.</h2>
                    <hr class="divider" />
                    <p class="text-muted mb-5">Dépôt de candidature pour l'accès en 1 ère année du BTS au Centre des BTS Lycée Mohammed VI Marrakech.
                        Une adresse mail Gmail est nécessaire pour pouvoir envoyer les fichiers joints.</p>
                </div>
            </div>
            <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                <div class="col-lg-6">
                    <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                        <!-- Code Massar input-->
                        <div class="form-floating mb-3 mt-3">
                            <input class="form-control" id="codeInput" type="text"  data-sb-validations="required"/>
                            <label for="codeInput">Code Massar</label>
                        </div>
                        <!-- Nom Prenom input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="nameInput" type="text" readonly/>
                            <label for="nameInput">Nom Prénom</label>
                        </div>
                        <!-- Adresse e-mail input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="emailInput" type="email" readonly/>
                            <label for="emailInput">Adresse e-mail</label>
                        </div>
                        <!-- Type de Bac input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="bacInput" type="text" readonly/>
                            <label for="bacInput">Type de BAC</label>
                        </div>
                        <!-- Moyenne générale du Bac input-->
                          <div class="form-floating mb-3 mt-3">
                            <input class="form-control" id="noteInput" type="number" readonly/>
                            <label for="noteInput">Moyenne générale du Bac</label>
                        </div>
                        <!-- Téléphone input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="phoneInput" type="tel" readonly/>
                            <label for="phoneInput">Téléphone</label>
                        </div>
                        <!-- Submit Button-->
                        <div class="d-grid"><button class="btn btn-primary btn-xl mb-3" id="submitButton" type="submit">Remplir</button></div>
                        <!-- Filière demandée - 1er Choix-->
                        <p class="text-primary text-center mb-3">Filière demandée - 1ere Choix</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                MCW(Multimédia et Conception Web)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                CG(Comptabilité et Gestion)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault3">
                            <label class="form-check-label" for="flexRadioDefault3">
                                SE(Système Electronique)
                            </label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault4">
                            <label class="form-check-label" for="flexRadioDefault4">
                                PROD(Productique)
                            </label>
                        </div>
                        <!-- Filière demandée - 2eme Choix-->
                        <p class="text-primary text-center mb-3">Filière demandée - 2eme Choix</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                MCW(Multimédia et Conception Web)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                CG(Comptabilité et Gestion)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                SE(Système Electronique)
                            </label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                PROD(Productique)
                            </label>
                        </div>
                        <!-- Filière demandée - 3eme Choix-->
                        <p class="text-primary text-center mb-3">Filière demandée - 3eme Choix</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                MCW(Multimédia et Conception Web)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                CG(Comptabilité et Gestion)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                SE(Système Electronique)
                            </label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                PROD(Productique)
                            </label>
                        </div>
                        
                        <!-- Filière demandée - 4eme Choix-->
                        <p class="text-primary text-center mb-3">Filière demandée - 4eme Choix</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault4" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                MCW(Multimédia et Conception Web)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault4" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                CG(Comptabilité et Gestion)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault4" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                SE(Système Electronique)
                            </label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="flexRadioDefault4" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                PROD(Productique)
                            </label>
                        </div>
                        
                        <!-- Copie de Bac input-->
                        <p class="text-primary text-center mb-3">Copie de Bac <br> Copie (légalisés) du Baccalauréat.Fichier au format pdf ou jpg ne dépassant pas 1 Mo et lisible </p>
                        <div class="mb-3">
                            <label for="formFile" class="form-label"></label>
                            <input class="form-control" type="file" id="formFile">
                        </div>
                        <!-- Copie de Relevé de notes input-->
                        <p class="text-primary text-center mb-3">Copie de Relevé de notes<br> Copie (légalisés) du Baccalauréat.Fichier au format pdf ou jpg ne dépassant pas 1 Mo et lisible </p>
                        <div class="mb-3">
                            <label for="formFile" class="form-label"></label>
                            <input class="form-control" type="file" id="formFile">
                        </div>
                        <!-- Copie de CIN input-->
                        <p class="text-primary text-center mb-3">Copie de CIN <br> Copie (légalisés) du Baccalauréat.Fichier au format pdf ou jpg ne dépassant pas 1 Mo et lisible </p>
                        <div class="mb-3">
                            <label for="formFile" class="form-label"></label>
                            <input class="form-control" type="file" id="formFile">
                        </div>
                        <!-- Copie Fiche de Candidature input-->
                        <p class="text-primary text-center mb-3">Copie Fiche de Candidature <br> Copie (légalisés) du Baccalauréat.Fichier au format pdf ou jpg ne dépassant pas 1 Mo et lisible </p>
                        <div class="mb-3">
                            <label for="formFile" class="form-label"></label>
                            <input class="form-control" type="file" id="formFile">
                        </div>
                        <!-- Submit success message-->
                        <!---->
                        <!-- This is what your users will see when the form-->
                        <!-- has successfully submitted-->
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Form submission successful!</div>
                                To activate this form, sign up at
                                <br />
                                <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                            </div>
                        </div>
                        <!-- Submit error message-->
                        <!---->
                        <!-- This is what your users will see when there is-->
                        <!-- an error submitting the form-->
                        <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                        <!-- Submit Button-->
                        <div class="d-grid"><button class="btn btn-primary btn-xl" id="submitButton" type="submit">Submit</button></div>
                    </form>
                </div>
            </div>
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-4 text-center mb-5 mb-lg-0">
                    <i class="bi-phone fs-2 mb-3 text-muted"></i>
                    <div>06 66 66 66 66 </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <?php include 'footer.php'; ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>
    <script src="app.js"></script>
</body>
</html>