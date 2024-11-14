<!-- questa è la base del template html che useremo in piu pagine finali, dobbiamo mettere alcune cose in modo dinamico cioe che prende i valori dal database e non li scriviamo in modo statico-->
<!DOCTYPE html>
<html lang="it">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $templateParams["titolo"] ?></title>
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
</head>
<body>
    <header>
        <h1>Blog di Tecnologie Web</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.html">Home</a></li><li><a href="archivio.html">Archivio</a></li><li><a href="contatti.html">Contatti</a></li><li><a href="login.html">Login</a></li>
        </ul>
    </nav>
    <main>
        <?php require($templateParams["nome"]); ?>
    </main><aside>
        <section>
            <h2>Post Casuali</h2> 
            <ul>
                <?php foreach($templateParams["articolicasuali"] as $articolocasuale): ?>
                <li>
                    <img src= " <?php echo $articolocasuale["imgarticolo"]; ?>" alt="" />
                    <a href="#"><?php echo $articolocasuale["titoloarticolo"]; ?></a>
                </li>
                <?php endforeach; ?>
            </ul>
        </section>
        <section>
            <h2> Categorie </h2>
            <ul>
                <?php foreach($templateParams["categorie"] as $categoria): ?>
                <li><a href="#"><?php echo $categoria["nomecategoria"]; ?></a></li>
                <?php endforeach; ?>
            </ul>

        </section>
    </aside>
    <footer>
        <p>Tecnologie Web - A.A. 2024/2025</p>
    </footer>
</body>
</html>