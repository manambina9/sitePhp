<?php 
/* tableau de bord de l'utilisateur apres connexion */ 
    session_start();
    if(!isset($_SESSION['user'])){
        header('Location:conn.php');
    }

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

<h1>Bonjour ! <?php echo $_SESSION['user']; ?> </h1>
    <nav class="sidebar">
        <header>
            <nav class="image-text">
                <span class="image">
                    <img src="logo.ico" alt="logo">
                </span>

                <div class="text header-text">
                    <span class="name">Lsformation</span>
                    <span class="proffession">web dev</span>
                </div>
            </nav>

            <i class='bx bxs-right-arrow toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">
                <li class="search-box">
                        <i class='bx bx-search-alt-2 icon' ></i>
                        <input type="search" placeholder="search...">
                </li>
                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-home icon' ></i>
                            <span class="text nav-text">Dashbord</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-bar-chart-alt-2 icon' ></i>
                            <span class="text nav-text">Revenue</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-bell icon' ></i>
                            <span class="text nav-text">Notifications</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bxs-offer icon'></i>
                            <span class="text nav-text">Offres</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-heart icon' ></i>
                            <span class="text nav-text">Likes</span>
                        </a>
                    </li> 

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-wallet icon' ></i>
                            <span class="text nav-text">Portefeuille</span>
                        </a>
                    </li>                    
                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="#">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Se deconnecter</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="moon-sun">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>

                    <span class="mode-text text">Mode Sombre</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>

                </li>
            </div>
        </div>
    </nav>

    <a href="deconnexion.php" class="btn btn-danger btn-lg"> Déconnexion </a>
    <script src="index.js"></script>
</body>
</html>