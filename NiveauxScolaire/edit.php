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
                                <h1>Modifier Niveaux Scolaire</h1>
                            </div>
                        </div>
                    </div>
                </section>
                
                <div class="card">
                    <div class="card-body">
                        <form id="createStudentForm">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="nom">Nom</label>
                                        <input type="text" class="form-control" value="Bac+5" id="nom" name="nom">
                                    </div>
                                    <div class="form-group">
                                        <label for="Description">Description</label>
                                        <textarea type="text" class="form-control" id="Description" name="nom"></textarea>
                                    </div>
                                </div>
                            </div>
                            <a type="button" href='./index.php' class="btn btn-secondary">Annuler</a>
                            <button type="submit" class="btn btn-primary">Modifier</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
  
</div>
</body>


</html>
