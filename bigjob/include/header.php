<nav>
            <div class="nav-wrapper bk-s">
                <a class="brand-logo center" href='#'>La Plateforme_</a>
                <?php if (isset($_SESSION['user'])) {
                ?>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="include/deco.php"><i class="material-icons">exit_to_app</i>Déconnexion</a></li>
                    </ul>
            </div>
        </nav>
        <?php 
                }
                ?>