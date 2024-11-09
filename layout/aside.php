 <!-- Gestion RH -->
 <li class="nav-item has-treeview">
          <a href="#"
            class="nav-link <?php echo (strpos($current_route, 'pkg rh') !== false) ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Gestion RH
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/modules/pkg_rh/Formateur/index.php"
                class="nav-link <?php echo (strpos($current_route, 'Formateur') !== false) ? 'active' : ''; ?>">
                <i class="fa-solid fa-chalkboard-user"></i>
                <p>Gestion Formateurs</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/modules/pkg_rh/Apprenant/index.php"
                class="nav-link <?php echo (strpos($current_route, 'Apprenant') !== false) ? 'active' : ''; ?>">
                <i class="fa-solid fa-users"></i>
                <p>Gestion Apprenants</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/modules/pkg_rh/Ville/index.php"
                class="nav-link <?php echo (strpos($current_route, 'Ville') !== false) ? 'active' : ''; ?>">
                <i class="fa-solid fa-city"></i>
                <p>Gestion Villes</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/modules/pkg_rh/Groupe/index.php"
                class="nav-link <?php echo (strpos($current_route, 'Groupe') !== false) ? 'active' : ''; ?>">
                <i class="fa-solid fa-table"></i>
                <p>Gestion Groupes</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/modules/pkg_rh/NiveauxScolaire/index.php"
                class="nav-link <?php echo (strpos($current_route, 'NiveauxScolaire') !== false) ? 'active' : ''; ?>">
                <i class="fa-solid fa-book"></i>
                <p>Gestion Niveaux Scolaire</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/modules/pkg_rh/Specialite/index.php"
                class="nav-link <?php echo (strpos($current_route, 'Specialite') !== false) ? 'active' : ''; ?>">
                <i class="nav-icon fas fa-th"></i>
                <p>Gestion Spécialité</p>
              </a>
            </li>
          </ul>
        </li>