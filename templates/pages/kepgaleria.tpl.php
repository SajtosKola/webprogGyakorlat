<style type="text/css">
    div#galeria {
        margin: 0 auto;
        max-width: 100%;
        text-align: center;
    }
    div.kep {
        display: inline-block;
        margin: 15px;
        background-color: white;
        padding: 15px;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        text-align: center;
    }
    div.kep img {
        width: 250px;
        height: auto;
        border-radius: 5px;
    }
    div.kep p {
        margin: 5px 0 0 0;
        font-size: 0.9em;
        color: #333;
    }
    .delete-btn {
        background-color: #e74c3c;
        color: white;
        border: none;
        padding: 5px 12px;
        border-radius: 4px;
        cursor: pointer;
        font-size: 0.85em;
        margin-top: 10px;
        transition: background-color 0.2s;
    }
    .delete-btn:hover {
        background-color: #c0392b;
    }
    .torles-info {
        color: #e74c3c;
        margin-bottom: 15px;
        font-weight: bold;
    }

</style>

<div id="galeria">
    <h2>Képgaléria</h2>

    <?php if (isset($torles_uzenet)): ?>
        <p class="torles-info"><?php echo $torles_uzenet; ?></p>
    <?php endif; ?>

    <?php
    if (!empty($kepek)) {
        foreach($kepek as $fajl => $datum) {
            ?>
            <div class="kep">
                <a href="<?php echo $MAPPA.$fajl ?>" target="_blank">
                    <img src="<?php echo $MAPPA.$fajl ?>" alt="Galéria kép">
                </a>
                <p><strong>Név:</strong> <?php echo $fajl; ?></p>
                <p><strong>Feltöltve:</strong> <?php echo date($DATUMFORMA, $datum); ?></p>

                <?php if (isset($_SESSION['login'])): ?>
                    <form action="" method="post" onsubmit="return confirm('Biztosan törölni szeretnéd ezt a képet?');">
                        <input type="hidden" name="fajl_nev" value="<?php echo $fajl; ?>">
                        <button type="submit" name="torles" class="delete-btn">Törlés</button>
                    </form>
                <?php endif; ?>

            </div>
            <?php
        }
    } else {
        echo "<p>Jelenleg nincsenek feltöltött képek.</p>";
    }
    ?>
</div>