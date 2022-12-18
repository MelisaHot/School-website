<?php session_start(); 
?>
<html lang="en-US">
    <head>
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <title>Tehnicka skola Tutin</title>
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
        <script type="text/javascript" src="script.js"></script>
    </head>
    
    <body>
        <section class="header">
            <nav >
                <a  href="index.php"><img src="images/logo1.png" ></a>
                <div class="nav-links" id="navLinks">
                    <i class="fa fa-times" onclick="hideMenu()"></i>
                    <ul>
                        <li class="act"><a href="index.php" style="color: rgb(247, 150, 29); text-shadow: 2px 1px 3px rgb(1,1,1);">POČETNA</a></li>
                        <li >
                            <div class="dropdown">
                                <a class="dropbtn" href="direktor.php">O NAMA <i class="fa fa-caret-down"></i></a>
                                <div class="dropdown-content">
                                  <a href="direktor.php">Direktor</a>
                                  <a href="nastavnikadar.php">Nastavni kadar</a>
                                  <a href="skolskiodbor.php">Školski odbor</a>
                                  <a href="savetroditelja.php"> Savet roditelja </a>
                                  <a href="ucenickiparlament.php">Učenički parlament </a>
                                  <a href="timovi.php"> Timovi </a>
                                  <a href="galerija.php">Galerija </a>
                                  <a href="kontakt.php"> Kontakt </a>
                                </div>
                              </div> 
                        </li>
                        <li>
                            <div class="dropdown">
                                <a class="dropbtn" href="odeljenjskestaresine.php">NASTAVA <i class="fa fa-caret-down"></i></a>
                                <div class="dropdown-content">
                                  <a  href="odeljenjskestaresine.php">Odeljenjske starešine</a>
                                  <a  href="prakticnanastava.php">Praktična nastava</a>
                                  <a  href="rasporedzvonjenja.php">Raspored zvonjenja</a>
                                  <a  href="skolskikalendar.php"> Školski kalendar </a>
                                </div>
                              </div> 
                            </li>
                        <li>
                            <div class="dropdown">
                                <a class="dropbtn" href="vanrednikandidati.php">VANREDNI KANDIDATI <i class="fa fa-caret-down"></i></a>
                                <div class="dropdown-content">
                                  <a  href="vanrednikandidati.php">Obaveštenja</a>
                                  <a  href="upisvanrednih.php">Upis vanrednih učenika</a>
                                  <a  href="ispitnirokovi.php">Ispitni rokovi</a>                                
                                </div>
                              </div> 
                        </li>
                        <li >
                            <div class="dropdown">
                                <a class="dropbtn" href="sekcije.php">UČENIČKI KUTAK
                                  <i class="fa fa-caret-down"></i>
                                </a>
                                <div class="dropdown-content">
                                  <a  href="sekcije.php">Sekcije</a>
                                  <a  href="ucenickagalerija.php">Učenička galerija</a>                              
                                </div>
                              </div> 
                        </li>
                        <li >
                            <div class="dropdown">
                                <a class="dropbtn" href="nastavnimaterijal.php">UČENJE NA DALJINU <i class="fa fa-caret-down"></i></a>
                                <div class="dropdown-content">
                                  <a href="nastavnimaterijal.php">Nastavni materijal</a>
                                  <?php
                                        if(isset($_SESSION['user'])&&(($_SESSION['tip']=='1') || $_SESSION['tip']=='2')){
                                        echo "   
                                        <a href='nastavnajedinica.php'>Nova nastavna jedinica</a>
                                            ";
                                        }
                                    ?>                           
                                </div>
                              </div> 
                        </li>
                        <li >
                            <div class="dropdown">
                                <a class="dropbtn" href="dokumenti.php">DOKUMENTI <i class="fa fa-caret-down"></i></a>
                                <div class="dropdown-content">
                                  <a href="dokumenti.php">Dokumenti škole</a>                              
                                </div>
                              </div> 
                        </li>
                        <li ><a href=" registracija.php">REGISTRUJ SE</a></li>
                        <?php
                            if(isset($_SESSION['user'])){
                            echo "   
                            <li ><a href='odjava.php'>ODJAVI SE</a></li>
                                ";
                            }else{
                            echo "   
                                    <li ><a href=' prijava.php'>PRIJAVI SE</a></li>
                                ";
                            } 
                        ?>
                        
                        <?php
                            if(isset($_SESSION['user'])&&($_SESSION['tip']=='1')){
                            echo '
                            <li >
                            <div class="dropdown">
                                <a class="dropbtn" href="novaobavestenja.php">ADMIN OPCIJE <i class="fa fa-caret-down"></i></a>
                                <div class="dropdown-content">
                                  <a  href="novaobavestenja.php">Nova obaveštenja</a>
                                  <a  href="korisnici.php">Upravljanje korisnicima</a>
                                  <a  href="novadokumenta.php">Nova dokumenta </a>
                                </div>
                            </div> 
                        </li>
                            ';
                            }
                        
                        ?>
                    </ul>
                    </div>
                <i class="fa fa-bars" onclick="showMenu()"></i>
               
            </nav>

            <div class="text-box">
                <h1>TEHNIČKA ŠKOLA TUTIN</h1>
                <p> Kvalitetno obrazovanje i napredak naših učenika najveća je i najbolja potvrda našeg uspeha. </div>

        </section>
<!---------------------OBRAZOVNI PROFILI----------------------------------------------->

        <section class="course">
            <h1> OBRAZOVNI PROFILI </h1>
            <p>Tehnička škola Tutin nudi sledeće obrazovne profile:</p>
            
            <div class="row">
                
                <div class="course-col">
                    <h3>Ekonomski tehničar</h3>
                    <img src="images/eko.png" class="imgg">
                    <p>Trajanje školovanja je 4 godine i po položenoj maturi, stiče se zvanje- Ekonomski tehničar.Učenici se osposobljavaju za rad u raznim kompanijama, bankama, vladinim organizacijama, osiguravajućim društvima, investicionim fondovima, mogu i da osnivaju sopstvena preduzeća itd. Cilj nastavnog plana i programa je da učenici steknu sposobnosti vezane za ekonomiju, organizaciju i menadžment preduzeća, savremenu poslovnu korespondenciju , poslovnu informatiku itd. U toku školovanja, izučavaju se predmeti usko povezani sa strukom, dva jezika, kao i opšti predmeti.</p>
                </div>
            
                <div class="course-col">
                    <h3>Tehničar drumskog saobraćaja</h3>
                    <img src="images/car.png" class="imgg">
                    <p>Poslovi ovog obrazovnog profila su veoma različiti, npr. prikupljanje, analiza i praćenje podataka o putničkom i teretnom saobraćaju, evidentiranje prisutnosti vozača i raspoređivanje voznog osoblja, provera raspoloživosti i ispravnosti saobraćajne signalizacije, učešće u izradi reda vožnje, poslovi održavanja vozila, tehnički pregledi, registracija, dispečerski i skladišni poslovi i dr.</p>
                </div>

                <div class="course-col">
                    <h3>Mašinski tehničar za kompjutersko konstruisanje</h3>
                    <img src="images/com.png" class="imgg">
                    <p>Obrazovni profil mašinski tehničar za kompjutersko konstruisanje je formiran sa namerom da se omogući implementacija najsavremenijih računarskih i informatičkih dostignuća u oblasti mašinstva. Tokom četvorogodišnjeg školovanja učenici se osposobljavaju za izradu proračuna i tehničke dokumentacije, spitivanje i merenje karakteristika mašinskih delova i sklopova...</p>
                </div>
                
            </div>
        
            <div class="row">

            <div class="course-col">
                    <h3>Tehničar za komjutersko upravljanje (CNC) mašina</h3>
                    <img src="images/cnc.png" class="imgg">
                    <p>Obrazovni profil tehničar komjuterski upravljanih mašina, je zanimanje budućnosti. Povezujući poznavanje opšte mašinskih znanja, sa poznavanjem tehnologija obrade na kompjuterski upravljanim strugovima i glodalicama uz primenu znanja i veština rada na računaru. Učenici se obučavaju da programiraju i koriste kompjuterski upravljane mašine (KUM). Zato sa pravom kažemo da ovaj profil čini da mašta postane stvarnost.</p>
                </div>
            
                
                <div class="course-col">
                    <h3>Mašinski tehničar motornih vozila</h3>
                    <img src="images/mot.png" class="imgg">
                    <p>Ovaj obrazovni profil je formiran sa namerom da omogući učenicima sticanje neophodnog teorijskog i praktičnog znanja o motorima, motornim vozilima i njihovoj opremi, pravilnoj eksploataciji i održavanju. Obučen je za tehnički pregled raznih vrsta motora, prati aktuelne potrebe mušterija za određenim delovima i prikuplja nova znanja o motornim vozilima u skladu sa novinama na današnjem tržištu. Vrši servis vozila i obučen je za njihov remont i održavanje.
                    Znanje o načinu funcionisanja, adekvatnoj opremi, alatu i održavanju vozila stiče kako teorijskim tako i praktičnim radom.</p>
                </div>
            
                <div class="course-col">
                    <h3>Automehaničar</h3>
                    <img src="images/carrep.png" class="imgg">
                    <p>Automehaničar je obrazovni profil koji je bio aktualan kako u prošlosti tako i danas. Zadaci automehaničara su da obavlјa tekuće poslove održavanje i popravku vozila, utvrđuje kvar proverom i pregledom celog vozila, proverava funkcionisanje popravlјenog dela. Tokom obrazovanja učenici se osposoblјavaju da vrše servis, održavanje motornih vozila, određivanje i otklanjanje neispravnosti na vozilima.</p>
                </div>

                
                
            </div>

            <div class="row">

            <div class="course-col">
                        <h3>Elektroinstalater</h3>
                        <img src="images/elec.png" class="imgg">
                        <p>Elektroinstalater je trogodišnje zanimanje u kojem ćete biti osposobljeni za održavanje, popravku i izvođenje električnih instalacija, kao i popravkom svih vrsta električnih uređaja i aparata. Tu spadaju i priključci za potrošnju električne energije, svetla, osigurači, utikači, prekidači, vezivanje vodova, priključivanje kabolova, montažni i demontažni poslovi za elektroinstalacije i drugo. </p>
                    </div>

                    <div class="course-col">
                        <h3>Elektromehaničar za termičke i rashladne uređaje</h3>
                        <img src="images/elm.png" class="imgg">
                        <p> Elektrotehničаr zа rаshlаdne i termičke uređаje je profil u okviru kogа se školuju stručnjаci osposobljeni zа poprаvku i održаvаnje svih termičkih i rаshlаdnih uređаjа. Sа diplomom ovog profilа moguće je nаći posаo u svim servisimа koje se bаve prodаjom i servisirаnjem bele tehnike, kаo i u fаbrikаmа koje se bаve projektovаnjem i proizvodnjom rаshlаdnih i termičkih uređаjа. </p>
                    </div>
                <div class="course-col">
                        <h3>Modni krojač</h3>
                        <img src="images/igla.png" class="imgg">
                        <p>Po završetku školovanja, učenici profila modni krojač će biti obučeni da: konstruišu i modeluju odeću, izrađuju krojnu sliku, ručno i mašinski kroje, izrađuju mušku, žensku i dečju odeću, rade na automatima i specijalnim mašinama za šivenje i vez.  </p>
                    </div>
                    <div class="course-col">
                        <h3>Modelar odeće</h3>
                        <img src="images/odeca.png" class="imgg">
                        <p>Nakon početne ideje, dizajner pravi prototip (ili upućuje kako da se izradi), a može i samostalno da ostvari svoju ideju. Odeću može izraditi i predstaviti kao samostalnu ili je predstaviti u kolekciji. </p>
                    </div>

                    
            </div>
        </section>
<!----------------------------Obavestenja-------------------------------------------->
        <section class="notice">
            <h1 >OBAVEŠTENJA</h1>
            <ol>
            <?php  
                require 'Connection.php';
               
                $query = "SELECT * FROM obavestenja ORDER BY id DESC";  
                $result = mysqli_query($conn, $query); 
                 while($row = $result->fetch_assoc())  
                {  
                     echo '   
                    <li class="">
                    <a href="Obavestenja.php?id='.$row['id'].'&naslov='.$row['naslov'].'&text='.$row['tekst'].'&datum='.$row['datum'].'">'.$row['naslov'].' </a>
                    </li>
                 ';  
                }  
                ?>  
            </ol>
        </section>
<!-------------------------POSETITE NAS---------------------------------------------------------------->    

<div class="box effect5">
<h3> Tehnička škola pruža mogućnost pohađanja velikog broja obrazovnih profila svima koji žele  kvalitetno znanje u struci i zaposle se. </br>
        Takođe učenici će biti pripremlјeni za nastavak uspešnog školovanja na visokoškolskim ustanovama.</h3>
<h5>Za više informacija kontaktirajte nas. </h5>
<a  href="kontakt.php" class="hero-btn" > KONTAKTIRAJTE NAS</a>
</div>
<!---------------------------FOOTER------------------------------------------>
<section class="footer">
    <div class="ro">
        <div class="column" >
            <img src="images/tel.png" class="imgg">
            <h3>Tel: 020/811-160</h3>
            <h3>Fax: 020/510-0252</h3>
        </div>
        <div class="column" >
            <img src="images/address.png" class="imgg">
            <h3>Adresa: 7. jul 18</h3>
            <h3>36320 TUTIN</h3>

        </div>
        <div class="column" >
            <img src="images/email.png" class="imgg">
            <h3>E-mail: tehtutin1@gmail.com</h3>
        </div>
        <div class="column" >
            <img src="images/social.png" class="imgg">
           
            <div class="icons">
                <h3> Ostani konektovan</h3>
                <a href="https://www.facebook.com/"> <i class="fa fa-facebook" ></i></a>
                <a href="https://www.twitter.com/"> <i class="fa fa-twitter" ></i></a>
                <a href="https://www.instagram.com/"> <i class="fa fa-instagram" ></i></a>
                <a href="https://www.pinterest.com/"> <i class="fa fa-pinterest" ></i></a>
                <a href="https://www.youtube.com/"> <i class="fa fa-youtube" ></i></a>
            </div>
        </div>
      </div>
    <p class="p-footer"> Žiro račun: 840-893666-16 | PIB: 102021423 | Matični broj: 07350767 
    <p class="p-footer">&copy 2021. Tehnička škola Tutin - Sva prava zadržana </p>
    <p class="p-footer"> Made with <i class="fa fa-heart" ></i> Tehnička škola Tutin </p>

</section>







    </body>

</html>