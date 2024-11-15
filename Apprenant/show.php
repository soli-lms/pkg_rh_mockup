<?php include_once $_SERVER['DOCUMENT_ROOT'].'/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<?php include_once  $config['views_path'] . 'head.php'; ?>


<body class="sidebar-mini" style="height: auto;">

<!-- Site wrapper -->
<div class="wrapper">

    <!-- Navigation -->
    <?php include_once  $config['views_path'] . 'nav.php'; ?>

    <!-- Barre latérale -->
    <?php include_once  $config['views_path'] . 'aside.php'; ?>


    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <section class="content-header">
                    <div class="container-fluid ">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Details d'apprenants</h1>
                            </div>
                            <div class="col-sm-6">
                                <a href="./create.php" type="button" class="btn btn-primary float-right">
                                    <i class="fas fa-plus"></i> Ajouter un Apprenant
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
                
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Informations de l'apprenant</h5>
                        <br>
                        <br>
                        <p><strong>Nom: </strong> Grain</p>
                        <p><strong>Prénom: </strong> Reda</p>
                        <p><strong>Numéro d'étudiant: </strong> 123456</p>
                        <p><strong>Classe: </strong> Classe A</p>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-secondary" href='./index.php'>Annuler</a>
                        <button class="btn btn-primary" onclick="editStudent()">Modifier</button>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
  
</div>
</body>


</html>