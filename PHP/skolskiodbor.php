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
                        <li class="act"><a href="index.php">POČETNA</a></li>
                        <li >
                            <div class="dropdown">
                                <a class="dropbtn" href="direktor.php"  style="color: rgb(247, 150, 29); text-shadow: 2px 1px 3px rgb(1,1,1);">O NAMA <i class="fa fa-caret-down"></i></a>
                                <div class="dropdown-content">
                                  <a href="direktor.php">Direktor</a>
                                  <a href="nastavnikadar.php">Nastavni kadar</a>
                                  <a href="skolskiodbor.php"  style="color: rgb(247, 150, 29); text-shadow: 2px 1px 3px rgb(1,1,1);">Školski odbor</a>
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
<!--------------------SKOLSKI ODBOR---------------------------------------------->

    <section class="qu">
        <ul class="breadcrumb">
            <li><a href="index.php">POČETNA</a></li>
            <li><a href="direktor.php">O NAMA</a></li>
            <li>ŠKOLSKI ODBOR</li>
        </ul>
    </section>
    <section class="new-qu">
        <h2 class="h2so"> ŠKOLSKI ODBOR</h2>
        <p class="pso"> Školski odbor je organ upravljanja u školi. Članove školskog odbora imenuje i razrešava Skupština opštine, odnosno Skupština grada. Izbomi period traje četiri godine.</p>
        <p class="pso"> Članovi školskog odbora:  </p>
        <div class="ro">
        <div class="column" style="width:33.33%; padding-bottom: 20px;" >
        <p class="pso"> Ispred nastavničkog veća: </p>
        <ul class="ulsr" >
            <li>
                Pepić Vahid
            </li>
            <li>
                Pepić Nezrina
            </li>
            <li>
                Habibović Muamer
            </li>
        </ul>
        </div>
        <div class="column" style="width:33.33%; padding-bottom: 20px;" >
        <p class="pso"> Ispred saveta roditelja: </p>
        <ul class="ulsr" >
            <li>
                Mušina Tahir
            </li>
            <li>
                Tiganj Mirsada
            </li>
            <li>
                Sretković Slavoljub
            </li>
        </ul>
                        </div>
        <div class="column" style="width:33.33%; padding-bottom: 20px;" >
        <p class="pso"> Ispred lokalne samouprave: </p>
        <ul class="ulsr" >
            <li>
                Čalaković Ahmedin
            </li>
            <li>
                Destanović Semir
            </li>
            <li>
                Dedeić Samir
            </li>
        </ul>
                        </div>
                        </div>
        <h2 class="h2so">Plan i program rada Školskog odbora</h2>
        <table class="new-table" style="padding: 10px">
            <tr>
                <th>
                    Aktivnosti
                </th>
                <th>
                    Način realizacije
                </th>
                <th>
                    Mesto
                </th>
                <th>
                    Izvršioci
                </th>
                <th>
                    Vreme realizacije
                </th>
            </tr>
            <tr>
                <td>
                    <p> * Usvajanje izveštaja o radu škole za prethodnu školsku godinu </p>
                    <p> * Usvajanje Godišnjeg plana rada za tekuću Školsku godinu </p>                           
                    <p> * Izveštaj direktora o radu škole </p>
                    <p> * Raspisivanje konkursa za izbor nastavnika  </p>
                    <p> * Donošenje plana za stručno usavršavanje </p>
                </td>
                <td>
                    <p> Razmatranje usvajanja </p>
                </td>
                <td>
                    <p> Školski prostor </p>
                    
                </td>
                <td>
                    <p> Direktor</p>
                </td>
                <td>
                    <p> Septembar</p>
                </td>
            </tr>

            <tr>
                <td class="even">
                    <p> * Usklađivanje normativnih akata i pravilnika sa izmenama Zakona o srednjoj školi i drugim zakonima </p>
                    <p> * Formiranje ispitnih komisija </p>
                    <p> * Predlog upisa učenika za narednu školsku godinu </p>
                    <p> * Saradnja sa lokalnom zajednicom </p>
                </td>
                <td class="even" >
                    <p> Razmatranje usvajanja </p>
                </td>
                <td class="even" >
                    <p> Školski prostor </p>
                    
                </td>
                <td class="even">
                    <p> Članovi odbora </p></br>
                    <p> Direktor </p>
                </td>
                <td class="even">
                    <p> Novembar </p></br>
                    <p> Decembar </p>
                </td>
            </tr>

            <tr>
                <td>
                    <p> * Razmatranje izveštaja direktora o realizaciji godišnjeg programa rada u I polugodištu </p>
                    <p> * Usvajanje izveštaja o poslovanju i godišnjeg obračuna</p>
                    <p> * Donošenje finansijskog plana za 2021. g.</p>
                    <p> * Plan javnih nabavki za 2022.god </p>
                    <p> * Usvajanje izveštaja o sprovedenom popisu </p>
                </td>
                <td >
                    <p> Razmatranje usvajanja </p>
                </td>
                <td >
                    <p> Školski prostor</p>
                    
                </td>
                <td>
                    <p> Članovi odbora </p></br>
                    <p> Direktor </p>
                </td>
                <td >
                    <p> Februar </p>
                </td>
            </tr>

            <tr >
                <td class="even">
                    <p> * Informacija o uslovima rada i završetku nastavne godine </p>
                    <p> * Informacije o upisu učenika u prvi razred </p>
                    <p> * Analiza opremljenosti škole nastavnim sredstvima </p>
                    <p> * Analiza uspeha učenika </p>
                    <p> * Donošenje odluke o nagradama učenika </p>
                    <p> * Kadrovska pitanja </p>
                    <p> * Izveštaj direktora o uspehu učenika na kraju II polugodišta. </p>

                </td>
                <td class="even">
                    <p> Razmatranje usvajanja</p>
                </td>
                <td class="even">
                    <p> Školski prostor</p>
                </td>
                <td class="even">
                    <p> Članovi odbora</p></br>
                    <p> Direktor</p></br>
                    <p> Pomoćnici direktora</p>
                </td>
                <td class="even">
                    <p> Jun</p>
                </td>
            </tr>

            <tr>
                <td>
                    <p> * Raspisnje konkursa za izbor nastavnika škole </p>
                    <p> * Davanje mišljenja na izbor nastavnika po raspisanom konkursu</p>
                    <p> * Informacije o uslovima rada pred početak nastavne godine </p>
                    <p> * Usvajanje izveštaja o RPŠ IGPS </p>
                    <p> * Vršenje drugih poslova predviđenih Zakonom o srednjem </p>
                </td>
                <td>
                    <p> Razmatranje usvajanja </p>
                </td>
                <td>
                    <p> Školski prostor</p>      
                </td>
                <td>
                    <p> Članovi odbora</p>
                </td>
                <td>
                    <p> Avgust</p>
                </td>
            </tr>



        </table>
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