<?php foreach($templateParams["articoli"] as $articolo): ?>
        <article>
            <header>
                <div>
                    <img src="./img/html5-js-css3.png" alt="" />
                </div>
                <h2><?php echo $articolo["titoloarticolo"]; ?></h2>
                <p><?php echo $articolo["dataarticolo"]; ?> - <?php echo $articolo["nome"]; ?></p>
            </header>
            <section>
                <p><?php echo $articolo["anteprimaarticolo"]; ?></p>
            </section>
            <footer>
                <a href="#">Leggi tutto</a>
            </footer>
        </article>
        <?php endforeach; ?>