<div class="container mt-4">

    <!-- Titolo e filtro -->
    <div class="d-flex justify-content-start align-items-center mb-4">
      <h1>I miei Ordini</h1>
      <div class = "mx-5">
        <select id="order-sort" class="form-select">
          <option value = "Date" >Data Ordine</option>
          <option value = "Price" >Costo Totale</option>
        </select>
      </div>
    </div>

    <!--Order List-->
    <div id="orders-list ">
        <?php foreach($templateParams["ordini"] as $ordine): ?>
        <!--Single Order-->
        <div class=" my-3 border rounded border-dark">
            <!--Order Info-->
            <div class = "d-flex justify-content-around mt-3">
                <span class ="fs-5">ID Ordine: <span class = "fw-semibold"><?php echo $ordine["idOrdine"] ?></span></span> 
                <span class ="fs-5">Costo Totale: <span class = "fw-semibold"><?php echo $ordine["costoTotale"] ?></span></span> 
                <span class ="fs-5">Data Ordine: <span class = "fw-semibold"><?php echo $ordine["dataOrdine"] ?></span></span>
            </div>
            <!--Separator-->
            <hr class="mt-3">
            <!--Product List-->
            <div class = "">
              <?php foreach ($templateParams["prodotti"] as $prodotto): ?>
                <!--Single Product -->
                  <div class = " row mt-4">
                      <div class = "col-md-4 mx-5 ">
                          <img src="<?php $prodotto["img"] ?>" alt="img">
                      </div>
                      <div class = "col-md-8 d-flex flex-column mx-6">
                          <div>
                            <span class="fw-semibold fs-3"><?php echo $prodotto["nome"] ?> </span>
                            <span class="fs-5 mx-3"><?php echo $prodotto["prezzo"] ?> </span>
                          </div>
                          <div class = "mt-4">
                              <button type="button" class="btn btn-primary btn-sm">Visualizza Articolo</button>
                              <button type="button" class="btn btn-primary btn-sm mx-3">Recensisci Articolo</button>
                          </div>
                      </div>
                  </div>
                <?php endforeach; ?>
            </div>
            <!--Button-->
            <div class = "d-md-flex justify-content-md-end p-3">
              <button type="button" class="btn btn-light btn-lg">Traccia il mio pacco</button>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

  </div>
