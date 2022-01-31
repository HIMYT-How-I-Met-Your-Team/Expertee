<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  </head>
  <body>
    <header>
        <div id="brand"><a href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/img/Logo_expertee_2.svg" alt="logo expertee"></a></div>
        <div id="nav">
            <a href="#contattaci"><span id="contattaci">CONTATTACI</span></a>
            <a href="#chisiamo" >CHI SIAMO</a>
            <a href="#incloud">INCLOUD</a>
            <a href="#software">SOFTWARE</a>
            <a href="#home">HOMEPAGE</a>
        </div>
        <div id="hamburger-menu" onclick="toggleMobileMenu(this)">
            <div  id="hamburger-icon">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
            <div id="mobile-menu">
                <a href="#home">HOMEPAGE</a>
                <a href="#software">SOFTWARE</a>
                <a href="#incloud">INCLOUD</a>
                <a href="#chisiamo" >CHI SIAMO</a>
                <a href="#contattaci"><span id="contattaci-hamburger">CONTATTACI</span></a>
            </div>
        </div>
    </header>

    <section>
        <div id="section1homepage">
            <p>GESTIONALE MANUTENZIONE</p>
            <p>Rendi efficiente la tua attività di manutenzione</p>
            <p><b>Expertee</b>, il software gestionale perfetto per migliorare la tua attività.</p>
            <p class="button"><a href="">RICHIEDI DEMO GRATUTITA</a></p>

            <div id="freccetta">
                <img src="<?php echo get_stylesheet_directory_uri();?>/img/freccetta.png" alt="">
            </div>
        </div>
    </section>

    <section>
        <div id="section2homepage">
            <p>Scopri le funzionalità</p>
            <p><b>Expertee</b> aiuta la tua azienda grazie alle sue molteplici funzionalità, create appositamente per soddisfare ogni tua esigenza!</p>
            <p class="button"><a href="">VAI ALLE FUNZIONI</a></p>
        </div>
    </section>

        <div class="breakimg-mobile">
            <img src="<?php echo get_stylesheet_directory_uri();?>/img/second.png" alt="">
        </div>

        <div class="breakimg-desktop">
            <img src="<?php echo get_stylesheet_directory_uri();?>/img/secondBig.png" alt="">
        </div>

    <section>
        <div id="section3homepage">
            <p>Perchè scegliere Expertee?</p>
            <p>
                <ul>
                    Expertee aiuta la tua azienda grazie alle sue molteplici funzioni!
                    <li>Gestisci gli sprechi di risorse e tempo.</li>
                    <li>Accorcia i tempi di fatturazione.</li>
                    <li>Rispetta con precisione le scadenze di intervento.</li>
                    <li>Genera i report delle attività con un click.</li>
                </ul>
            </p>
            <p class="button"><a href="">SCOPRI DI PIÙ</a></p>
        </div>
    </section>

        <div class="breakimg-mobile">
            <img src="<?php echo get_stylesheet_directory_uri();?>/img/third.png" alt="">
        </div>

    <section>
        <div id="section4homepage">
            <p>La tecnologia Incloud al tuo servizio</p>
            <p>
                <ul>
                    Il software sfrutta la tecnologia InCloud che fornisce diversi vantaggi:
                    <li>Accesso da qualsiasi dispositivo.</li>
                    <li>Nessun rischio di perdere i tuoi dati.</li>
                    <li>Paghi solo quello che usi.</li>
                    <li>Aggiornamento automatico.</li>
                </ul>
            </p>
            <p class="button"><a href="">SCOPRI DI PIÙ</a></p>
        </div>
    </section>
    
    <section>
        <div id="section5homepage">
            <p>Incentivi Industria 4.0</p>
            <p>Scopri gli incentivi e le agevolazioni 4.0 per la tua azienda!</p>
            <p class="button"><a href="">LEGGI IL BLOG</a></p>
        </div>
    </section>

    <section>
        <div id="section6homepage">
            <p>Cosa dicono di noi</p>
            <!-- slider -->

            <div class="card selected">
                <div class="container">
                    <img src="<?php echo get_stylesheet_directory_uri();?>/img/virgolette.png" alt="virgolette">
                    <p>Il gestionale più completo presente sul mercato, sviluppato da Expertee. Rappresenta da anni la soluzione ideale per la gestione di qualsiasi tipologia di impresa. Usiamo Expertee nella gestione quotidiana lavorando su manutenzione industriale, doveri di sicurezza e gestione del personale.</p>
                    <div>
                        <p>Elisa Zamorani</p>
                        <p>Manager Contarina S.p.a.</p>
                    </div>
                    <img class="card-img" src="<?php echo get_stylesheet_directory_uri();?>/img/profilo.png" alt="profilo">
                </div>
            </div>
    
            <div class="card noselected">
                <div class="container">
                    <img src="<?php echo get_stylesheet_directory_uri();?>/img/virgolette.png" alt="virgolette">
                    <p>Il gestionale più completo presente sul mercato, sviluppato da Expertee. Rappresenta da anni la soluzione ideale per la gestione di qualsiasi tipologia di impresa. Usiamo Expertee nella gestione quotidiana lavorando su manutenzione industriale, doveri di sicurezza e gestione del personale.</p>
                    <div>
                        <p>Matteo Rossi</p>
                        <p>Manager Contarina S.p.a.</p>
                    </div>
                    <img class="card-img" src="<?php echo get_stylesheet_directory_uri();?>/img/profilo.png" alt="profilo">
                </div>
            </div>
    
            <div class="card noselected">
                <div class="container">
                    <img src="<?php echo get_stylesheet_directory_uri();?>/img/virgolette.png" alt="virgolette">
                    <p>Il gestionale più completo presente sul mercato, sviluppato da Expertee. Rappresenta da anni la soluzione ideale per la gestione di qualsiasi tipologia di impresa. Usiamo Expertee nella gestione quotidiana lavorando su manutenzione industriale, doveri di sicurezza e gestione del personale.</p>
                    <div>
                        <p>Luca Bianchi</p>
                        <p>Manager Contarina S.p.a.</p>
                    </div>
                    <img class="card-img" src="<?php echo get_stylesheet_directory_uri();?>/img/profilo.png" alt="profilo">
                </div>
            </div>
    
            <div id="dots">
                <div class="selecteddot"></div>
                <div class="nonselecteddot"></div>
                <div class="nonselecteddot"></div>
            </div>

            <!-- end slider -->
            <p class="button"><a href="">LEGGI DI PIÙ</a></p>
        </div>
    </section>

    <div id="breakline"></div>

    <section>
        <div id="section7homepage">
            <p>Tantissime aziende ci hanno già scelto!</p>
            <!-- slider -->

            <div class="card selected">
                    <img class="card-img" src="<?php echo get_stylesheet_directory_uri();?>/img/GBS logo.png" alt="GBS">
            </div>

            <div class="card noselected">
                <img class="card-img" src="<?php echo get_stylesheet_directory_uri();?>/img/MAC logo.png" alt="MAC">
            </div>

            <div class="card noselected">
                <img class="card-img" src="<?php echo get_stylesheet_directory_uri();?>/img/SCI logo.png" alt="SCI">
            </div>

            <div class="card noselected">
                <img class="card-img" src="<?php echo get_stylesheet_directory_uri();?>/img/sietec logo.png" alt="sietec">
            </div>

            <div class="card noselected">
                <img class="card-img" src="<?php echo get_stylesheet_directory_uri();?>/img/Format.net.png" alt="Format">
            </div>
            
            <div id="dots">
                <div class="selecteddot"></div>
                <div class="nonselecteddot"></div>
                <div class="nonselecteddot"></div>
                <div class="nonselecteddot"></div>
                <div class="nonselecteddot"></div>
            </div>

            <!-- end slider -->
        </div>
    </section>

    <section>
        <div id="section8homepage">
            <p>La nostra esperienza al tuo servizio</p>
            <p>ICP Informatica unisce alla perfezione esperienza ed innovazione. 
                Dal 1999 al servizio delle PMI.</p>
            <p class="button"><a href="">SCOPRI CHI SIAMO</a></p>
        </div>
    </section>

    <section>
        <div id="section9homepage">
            <p>Contattaci per organizzare una demo gratuita</p>
            <p>Inserisci i tuoi dati nel form e sarai ricontattato</p>
            <p>Campi obbligatori*</p>
            <!-- form -->

            <form action="" method="GET" target="blank" id="form">
                <input type="text" name="nome" id="nome" placeholder="Nome*">
                <input type="text" name="cognome" id="cognome" placeholder="Cognome*">
                <input type="email" name="e-mail" id="email" placeholder="Email*">
                <input type="text" name="numero" id="numero" placeholder="Telefono">
                <select id="attivita">
                    <option value="">Tipo di attività*</option>
                    <option value="">Antintrusione</option>
                    <option value="">Antincendio</option>
                    <option value="">Edile</option>
                    <option value="">Elettrico</option>
                    <option value="">Elettrico/Impianti speciali</option>
                    <option value="">Elevatori</option>
                    <option value="">Idrico-sanitario</option>
                    <option value="">Impianti speciali</option>
                    <option value="">Meccanico/Idrico-sanitario</option>
                    <option value="">Meccanico/Antincendio</option>
                    <option value="">Meccanico/Elettrico</option>
                </select>
                <input type="text" name="ragione" id="ragione" placeholder="Ragione sociale*">
                <input type="text" list="province" placeholder="Provincia*" id="provincia" />
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
                <textarea name="messaggio" id="messaggio">Messaggio</textarea>

                <input type="checkbox" name="privacy" id="btnprivacy" required/>
                <p id="privacy">Accetto i termini e <br> l’informativa sulla privacy</p>

                <button type="submit" id="submit" class="button" disabled>CONTATTACI</button>
            </form>
            <!-- end form-->
        </div>
    </section>

    <footer>
        <div>
            <div id="footer-image">
                <img src="<?php echo get_stylesheet_directory_uri();?>/img/expertee-white.png" alt="logo expertee">
            </div>
            <div id="footer-contattaci">
                <p>Contatti</p>
                <p>+39 011.0437557</p>
                <p>fixerp@icpinformatica.it</p>
                <p>Partita Iva IT 11821700017</p>
                <p>Corso Svizzera, 185 - 10149 Torino (TO)</p>
            </div>
            <div id="footer-end">
                <p>EXPERTEE</p>
                <a href="#">Blog</a><br>
                <a href="#">Chi siamo</a><br>
                <a href="#">FAQ</a><br>
                <a href="#">Servizio assistenza</a><br>
            </div>
        </div>
    </footer>

  </body>
</html>
