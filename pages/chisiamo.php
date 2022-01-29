
    <section>
        <div id="section1chisiamo">
            <p></p>
            <p>Tra storia e innovazione</p>
            <p><b>Expertee</b> vuole unire esperienza ed innovazione. Con un software pensato apposta per migliorare la tua attività di manutenzione.
            </p>
            <p class="button"><a href="#section5chisiamo">CONTATTACI</a></p>

            <div id="freccetta">
                <img src="<?php echo get_stylesheet_directory_uri();?>/img/freccetta.png" alt="scendi">
            </div>
        </div>
    </section>

    <section>
        <div id="section2chisiamo">
            <p></p>
            <p>Perchè affidarti a noi</p>
            <p><b>Expertee</b> vuole fondere l’idea di <b>artigianato</b> e quella di <b>tecnologia</b>, mettendosi a disposizione della tua attività di <b>manutenzione</b>. 
                Dimostrando che insieme si vince. <br>
                Expertee è la soluzione che abbiamo pensato per vincere, un <b>software gestionale Incloud</b> che ha lo scopo di integrarsi ed essere implementato perfettamente all’interno di un’attività di <b>manutenzione</b>.
                
            </p>

            <div id="freccetta">
                <img src="<?php echo get_stylesheet_directory_uri();?>/img/freccetta.png" alt="scendi">
            </div>
        </div>
    </section>

    <section>
        <div id="section3chisiamo">
            <p>Dove puoi trovarci</p>
            <p>
                Corso Svizzera 185,</br>
                10149 Torino (TO), Italia</br>
                Fabbricato 1 – 3° Piano – Scala L</br>
                Centro Direzionale Piero della Francesca</br>
                </br>
                Orario 9.00 – 18.00
            </p>

            <!--mappa desktop-->
            <p id="positiondesktop"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2816.7776742040996!2d7.658140715428684!3d45.090301379098264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47886db2bc671231%3A0xff5b84db691e2856!2sCorso%20Svizzera%2C%20185%2C%2010149%20Torino%20TO!5e0!3m2!1sit!2sit!4v1643219096445!5m2!1sit!2sit" width="500" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </p>
            <!--mappa mobile-->
            <p id="positionmobile"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2816.7776742040996!2d7.658140715428684!3d45.090301379098264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47886db2bc671231%3A0xff5b84db691e2856!2sCorso%20Svizzera%2C%20185%2C%2010149%20Torino%20TO!5e0!3m2!1sit!2sit!4v1643219096445!5m2!1sit!2sit" width="257" height="257" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>
        </div>
    </section>

    <section>
        <div id="section4chisiamo">
            <p>La nostra esperienza è al tuo servizio!</p>
        </div>
    </section>

    <section>
        <div id="section5chisiamo">
            <p>Contattaci per organizzare una demo gratuita</p>
            <p>Inserisci i tuoi dati nel form e sarai ricontattato</p>
            <p>Campi obbligatori*</p>
            <!-- form -->

            <form action="#" method="POST" target="_self" id="form">
                <div>
                    <input type="text" name="nome" id="nome" placeholder="Nome*" required>
                    <input type="text" name="cognome" id="cognome" placeholder="Cognome*" required>
                    <input type="email" name="email" id="email" placeholder="Email*" required>
                    <input type="text" name="telefono" id="numero" placeholder="Telefono">
                    <input type="text" name="ragSociale" id="ragione" placeholder="Ragione sociale*" required>
                    <input type="text" name="provincia" list="province" placeholder="Provincia*" id="provincia" required/>
                    <select id="attivita" name="attivita">
                        <option value="none">Tipo di attività*</option>
                        <option value="Antintrusione">Antintrusione</option>
                        <option value="Antincendio">Antincendio</option>
                        <option value="Edile">Edile</option>
                        <option value="Elettrico">Elettrico</option>
                        <option value="Elettrico/Impianti speciali">Elettrico/Impianti speciali</option>
                        <option value="Elevatori">Elevatori</option>
                        <option value="Idrico-sanitario">Idrico-sanitario</option>
                        <option value="Impianti speciali">Impianti speciali</option>
                        <option value="Meccanico/Idrico-sanitario">Meccanico/Idrico-sanitario</option>
                        <option value="Meccanico/Antincendio">Meccanico/Antincendio</option>
                        <option value="Meccanico/Elettrico">Meccanico/Elettrico</option>
                    </select>
                    <datalist id="province">
                        <option>Agrigento</option>
                        <option>Alessandria</option>
                        <option>Ancona</option>
                        <option>Aosta</option>
                        <option>Arezzo</option>
                        <option>Ascoli Piceno</option>
                        <option>Asti</option>
                        <option>Avellino</option>
                        <option>Bari</option>
                        <option>Barletta-Andria-Trani</option>
                        <option>Belluno</option>
                        <option>Benevento</option>
                        <option>Bergamo</option>
                        <option>Biella</option>
                        <option>Bologna</option>
                        <option>Bolzano</option>
                        <option>Brescia</option>
                        <option>Brindisi</option>
                        <option>Cagliari</option>
                        <option>Caltanissetta</option>
                        <option>Campobasso</option>
                        <option>Carbonia-iglesias</option>
                        <option>Caserta</option>
                        <option>Catania</option>
                        <option>Catanzaro</option>
                        <option>Chieti</option>
                        <option>Como</option>
                        <option>Cosenza</option>
                        <option>Cremona</option>
                        <option>Crotone</option>
                        <option>Cuneo</option>
                        <option>Enna</option>
                        <option>Fermo</option>
                        <option>Ferrara</option>
                        <option>Firenze</option>
                        <option>Foggia</option>
                        <option>Forl&igrave;-Cesena</option>
                        <option>Frosinone</option>
                        <option>Genova</option>
                        <option>Gorizia</option>
                        <option>Grosseto</option>
                        <option>Imperia</option>
                        <option>Isernia</option>
                        <option>La spezia</option>
                        <option>L'aquila</option>
                        <option>Latina</option>
                        <option>Lecce</option>
                        <option>Lecco</option>
                        <option>Livorno</option>
                        <option>Lodi</option>
                        <option>Lucca</option>
                        <option>Macerata</option>
                        <option>Mantova</option>
                        <option>Massa-Carrara</option>
                        <option>Matera</option>
                        <option>Medio Campidano</option>
                        <option>Messina</option>
                        <option>Milano</option>
                        <option>Modena</option>
                        <option>Monza Brianza</option>
                        <option>Napoli</option>
                        <option>Novara</option>
                        <option>Nuoro</option>
                        <option>Ogliastra</option>
                        <option>Olbia-Tempio</option>
                        <option>Oristano</option>
                        <option>Padova</option>
                        <option>Palermo</option>
                        <option>Parma</option>
                        <option>Pavia</option>
                        <option>Perugia</option>
                        <option>Pesaro e Urbino</option>
                        <option>Pescara</option>
                        <option>Piacenza</option>
                        <option>Pisa</option>
                        <option>Pistoia</option>
                        <option>Pordenone</option>
                        <option>Potenza</option>
                        <option>Prato</option>
                        <option>Ragusa</option>
                        <option>Ravenna</option>
                        <option>Reggio Calabria</option>
                        <option>Reggio Emilia</option>
                        <option>Rieti</option>
                        <option>Rimini</option>
                        <option>Roma</option>
                        <option>Rovigo</option>
                        <option>Salerno</option>
                        <option>Sassari</option>
                        <option>Savona</option>
                        <option>Siena</option>
                        <option>Siracusa</option>
                        <option>Sondrio</option>
                        <option>Taranto</option>
                        <option>Teramo</option>
                        <option>Terni</option>
                        <option>Torino</option>
                        <option>Trapani</option>
                        <option>Trento</option>
                        <option>Treviso</option>
                        <option>Trieste</option>
                        <option>Udine</option>
                        <option>Varese</option>
                        <option>Venezia</option>
                        <option>Verbano-Cusio-Ossola</option>
                        <option>Vercelli</option>
                        <option>Verona</option>
                        <option>Vibo valentia</option>
                        <option>Vicenza</option>
                        <option>Viterbo</option>
                    </datalist>
                </div>
                <textarea name="messaggio" id="messaggio" placeholder="Messaggio"></textarea>

                <input type="checkbox" name="privacy" id="btnprivacy" required/>
                <p id="privacy">Accetto i termini e <br> l’informativa sulla privacy*</p>

                <button type="submit" id="submit" class="button">CONTATTACI</button>
            </form>
            <!-- end form-->
        </div>
    </section>

