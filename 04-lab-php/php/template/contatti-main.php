<section>
            <h2>Autori del Blog</h2>
            <table>
                <tr>
                    <th id="autore">Autore</th><th id="email">Email</th><th id="argomenti">Argomenti</th>
                </tr>
                <?php foreach ($templateParams["autori"] as $autore ) : ?>
                <?php $nomeautore = $autore["nome"]?>
                <tr>
                    <th id= <?php getIdFromName($nomeautore) ?> ><?php echo $nomeautore ?> </th>
                    <td headers="email <?php echo $nomeautore ?>"> <?php echo $autore["username"] ?> </td>
                    <td headers="argomenti <?php echo $nomeautore ?>"> <?php echo $autore["argomenti"] ?> </td>
                </tr>
                <?php endforeach; ?>
                
            </table>
        </section>