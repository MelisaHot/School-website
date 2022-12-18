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
                        <li class="act"><a href="index.php" >POČETNA</a></li>
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
                                <a class="dropbtn" href="odeljenjskestaresine.php" style="color: rgb(247, 150, 29); text-shadow: 2px 1px 3px rgb(1,1,1);">NASTAVA <i class="fa fa-caret-down"></i></a>
                                <div class="dropdown-content">
                                  <a  href="odeljenjskestaresine.php">Odeljenjske starešine</a>
                                  <a  href="prakticnanastava.php" style="color: rgb(247, 150, 29); text-shadow: 2px 1px 3px rgb(1,1,1);">Praktična nastava</a>
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
<!---------------------Prakticna nastava----------------------------------------------->

    <section class="qu">
        <ul class="breadcrumb">
            <li><a href="index.php">POČETNA</a></li>
            <li><a href="odeljenjskestaresine.php">NASTAVA</a></li>
            <li>PRAKTIČNA NASTAVA</li>
          </ul>
    </section>
    <section class="new-qu">
        <h2 class="h2so"> PRAKTIČNA NASTAVA</h2>
        <p class="psr"> Vežbe su deo obrazovno-vaspitnog rada, kojima se ostvaruju nastavni sadržaji utvrđeni programom određenog predmeta, koji treba da omoguće učenicima proširenje i produbljivanje znanja stečenog na časovima teorije.
            </br>  Vežbe koje imaju isti oblik demonstracija izvodi nastavnik koji ostvaruje teorijski deo programa. </br> Ove vežbe se izvode sa celim deljenjem, a čas traje 45 minuta. Broj tih časova je preciziran u godišnjim operativnim planovima rada nastavnika.
            </br>  U Tehničkoj školi, u školskoj 2021/2022.godini časovi vežbi će se realizovati iz sledećih predmeta </p>
        <table class="new-table" style="padding:10px; margin: 10px auto;">
            <tr>
                <th>Naziv predmeta</th>
                <th> Razred - odeljenje</th>
                <th> Fond časova (god.)</th>
            </tr>
            <tr>
                <td> Praktična nastava za tehničare drumskog saobraćaja</td>
                <td> I/2 </td>
                <td> 148 </td>
            </tr>
            <tr>
                <td class="even"> Praktična nastava za tehničare motornih vozila</td>
                <td class="even"> I/5 </td>
                <td class="even"> 222 </td>
            </tr>
            <tr>
                <td> Praktična nastava za modelare odeće</td>
                <td> I/7 </td>
                <td> 350 </td>
            </tr>
            <tr>
                <td class="even"> Praktična nastava za elektroinstalatere</td>
                <td class="even"> I/8 </td>
                <td class="even"> 222 </td>
            </tr>
            <tr>
                <td> Praktična nastava za tehničare drumskog saobraćaja</td>
                <td> II/2 </td>
                <td> 280 </td>
            </tr>
            <tr>
                <td class="even"> Praktična nastava za tehničare motornih vozila</td>
                <td class="even"> II/5 </td>
                <td class="even"> 222 </td>
            </tr>
            <tr>
                <td> Praktična nastava za modelare odeće</td>
                <td> II/7 </td>
                <td> 222 </td>
            </tr>
            <tr>
                <td class="even"> Praktična nastava za automehaničare</td>
                <td class="even"> II/8 </td>
                <td class="even"> 888 </td>
            </tr>
            <tr>
                <td> Praktična nastava za tehničare drumskog saobraćaja</td>
                <td> III/2 </td>
                <td> 280 </td>
            </tr>
            <tr>
                <td class="even"> Praktična nastava za tehničare motornih vozila</td>
                <td class="even"> III/5 </td>
                <td class="even"> 444 </td>
            </tr>
            <tr>
                <td> Praktična nastava za modelare odeće</td>
                <td> III/7 </td>
                <td> 270 </td>
            </tr>
            <tr>
                <td class="even"> Praktična nastava za automehaničare</td>
                <td class="even"> III/8 </td>
                <td class="even"> 896 </td>
            </tr>
            <tr>
                <td> Praktična nastava za tehničare  za kompjutersko konstruisanje</td>
                <td> IV/2 </td>
                <td> 222 </td>
            </tr>
            <tr>
                <td class="even"> Praktična nastava za tehničare drumskog saobraćaja</td>
                <td class="even"> IV/2 </td>
                <td class="even"> 280 </td>
            </tr>
            <tr>
                <td> Praktična nastava za pogonski tehnicar masinske obrade</td>
                <td> IV/5 </td>
                <td> 448 </td>
            </tr>
            <tr>
                <td class="even"> Praktična nastava za konfekcijskog tehničara </td>
                <td class="even"> IV/7 </td>
                <td class="even"> 240 </td>
            </tr>
        </table>
        <p class="psr">Prakticna nastava se organizuje kroz sadrzaje koji treba da omoguce ucenicima sticanje znanja i vestina neophodnih za obavljanje poslova i zadataka u odgovarajucim zanimanjima. </br>Prakticna nastava se uglavnom realizuje u skolskim radionicama.Pored skolskih radionica deo prakticne nastave za elektroinstalatere ce se realizovati u RO „Elektroras".Za masinske tehnicare u RO „Dalas" „Elan"i „Transport",skola je sa ovim radnim organizacijama potpisala ugovor o zajednickoj saradnji.
        </br>Napomena:Blok nastava ce se realizovati na kraju nastavne godine u skolskim radionicama, a iz racunarstva i informatike u posebnim danima prema nastavnom planu i programu. Tehnička škola ce izvrsiti obucavanje ucenika za zastitu na radu pri izvodjenju prakticne nastave.</p>
    </section>


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