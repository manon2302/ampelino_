<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="<?= URL;?>">CRUD IESA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                                <a class="nav-link" href="<?= URL;?>">Accueil</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="<?= URL;?>admin/">Consultation des articles</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="<?= URL;?>contact.php">Contact</a>
                        </li>
                </ul>
                <a href="<?= URL;?>admin/profil.php" title="Profil" class=" my-2 my-sm-0 btn btn-lg text-white">
                        <i class="fas fa-user-tie"></i>
                </a>
                <a href="<?= URL;?>login.php" class="btn btn-success btn-sm" title="Se connecter">
                        <i class="fas fa-sign-in-alt"></i>
                </a>
                <a href="<?= URL;?>login.php" class="btn btn-danger btn-sm" title="Se déconnecter">
                        <i class="fas fa-sign-out-alt"></i>
                </a>
        </div>
</nav>
