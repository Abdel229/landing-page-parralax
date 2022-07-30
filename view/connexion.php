<?php
session_start();
$_SESSION = array();
session_destroy();
$erreur = array(
    'Remplissez le formulaire',
    'Identifiant incorrect'
);
if (isset($_GET)) {
    extract($_GET);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <style>
        .gradient-custom {
            /* fallback for old browsers */
            background: #6a11cb;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
        }
    </style>
</head>

<body>

    <section class="vh-100 gradient-custom">



        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <div class="mb-md-5 mt-md-4 pb-5">

                                <?php if (isset($_GET)) : ?>
                                    <div class="toast align-items-center" role="alert" aria-live="assertive" aria-atomic="true" style="z-index:20;">
                                        <div class="d-flex bg-danger">
                                            <div class="toast-body">
                                                <?= $erreur[$error]; ?>

                                            </div>
                                            <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                                        </div>
                                    </div>
                                <?php endif; ?>


                                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                <p class="text-white-50 mb-5">Entrez votre nom et mot de passe</p>
                                <form action="../controller/connexion.php" method="post">
                                    <div class="form-outline form-white mb-4">
                                        <input type="text" id="typeEmailX" class="form-control form-control-lg text-center" name="name" autocomplete="off" />
                                        <label class="form-label" for="typeEmailX">Nom</label>
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <input type="password" id="typePasswordX" class="form-control form-control-lg text-center" name="pswd" autocomplete="off" />
                                        <label class="form-label" for="typePasswordX">Mot de passe</label>
                                    </div>



                                    <button class="btn btn-outline-light btn-lg px-5" type="submit">Connexion</button>


                                </form>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>