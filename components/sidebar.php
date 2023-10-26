<div class="menu">
    <ion-icon name="menu-outline"></ion-icon>
    <ion-icon name="close-outline"></ion-icon>
</div>

<div class="barra-lateral">
    <div>
        <div class="nombre-pagina">
            <ion-icon id="cloud" name="custom-icon" class="custom-icon"></ion-icon>
            <span>Administrador</span>
        </div>
        <div class="boton">
            <ion-icon class="lupa" name="search-outline"></ion-icon>
            <input class="buscar" type="text" placeholder="Buscar....">
        </div>
    </div>

    <nav class="navegacion">
        <ul>
            <li>
                <a id="inbox" href="/StrongGym/pages/admin/principal.php">
                    <ion-icon name="home-outline"></ion-icon>
                    <span>Panel</span>
                </a>
            </li>
            <li>
                <a href="/../StrongGym/pages/admin/sidebar/customers.php">
                    <ion-icon name="bag-outline"></ion-icon>
                    <span>Clientes</span>
                </a>
            </li>
            <li>
                <a href="/../StrongGym/pages/admin/sidebar/plans.php">
                    <ion-icon name="bag-outline"></ion-icon>
                    <span>Planes</span>
                </a>
            </li>
            <li>
                <a href="/../StrongGym/pages/admin/sidebar/routines.php">
                    <ion-icon name="bag-outline"></ion-icon>
                    <span>Rutinas</span>
                </a>
            </li>
            <li>
                <a href="/../StrongGym/pages/admin/sidebar/exercises.php">
                    <ion-icon name="newspaper-outline"></ion-icon>
                    <span>Ejercicios</span>
                </a>
            </li>
            <li>
                <a href="/../StrongGym/pages/admin/sidebar/schedule.php">
                    <ion-icon name="calendar-outline"></ion-icon>
                    <span>Horario</span>
                </a>
            </li>
            <li>
                <a href="/../StrongGym/pages/admin/sidebar/services.php">
                    <ion-icon name="paw-outline"></ion-icon>
                    <span>Servicios</span>
                </a>
            </li>
            <li class="cerrar-sesion">
                <a href="/../StrongGym/pages/admin/cuenta/cerrar_sesion.php">
                    <ion-icon name="log-out-outline"></ion-icon>
                    <span>Cerrar Sesión</span>
                </a>
            </li>

        </ul>
    </nav>

    <div>
        <div class="linea"></div>

        <div class="modo-oscuro">
            <div class="info">
                <ion-icon name="moon-outline"></ion-icon>
                <span>Modo Noche</span>
            </div>
            <div class="switch">
                <div class="base">
                    <div class="circulo">
                    </div>
                </div>
            </div>
        </div>

        <div class="usuario">
            <img src="#" alt="Imagen de usuario">
            <div class="info-usuario">
                <div class="nombre-email">
                    <span class="nombre">Pepito</span>
                    <span class="email">pepito@gmail.com</span>
                </div>
                <a href="/../StrongGym/pages/admin/sidebar/personal_information.php">
                    <ion-icon name="ellipsis-vertical-outline"></ion-icon>
                </a>
            </div>
        </div>
    </div>
</div>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>