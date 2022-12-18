<?php session_start(); 
?>
<html lang="en-US">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <title>Tehnicka skola Tutin</title>
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
        <script type="text/javascript" src="script.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />

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
                                <a class="dropbtn" href="nastavnimaterijal.php" style="color: rgb(247, 150, 29); text-shadow: 2px 1px 3px rgb(1,1,1);">UČENJE NA DALJINU <i class="fa fa-caret-down"></i></a>
                                <div class="dropdown-content">
                                  <a href="nastavnimaterijal.php">Nastavni materijal</a>
                                  <?php
                                        if(isset($_SESSION['user'])&&(($_SESSION['tip']=='1') || $_SESSION['tip']=='2')){
                                        echo "   
                                        <a href='nastavnajedinica.php' style='color: rgb(247, 150, 29); text-shadow: 2px 1px 3px rgb(1,1,1);'>Nova nastavna jedinica</a>
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
<!---------------------NOVE NASTAVNE JEDINICE-------------------------------------------->
<?php
include "nastavnajedinicadodaj.php";
?>
     <section class="qu">
        <ul class="breadcrumb">
            <li><a href="index.php">POČETNA</a></li>
            <li><a href="nastavnimaterijal.php"> UČENJE NA DALJINU</a></li>
            <li>NOVA NASTAVNA JEDINICA</li>
          </ul>
        </section>
        <section class="new-qu">
            <h2 class="h2so">NOVA NASTAVNA JEDINICA </h2>
            <h4 style="color:rgb(247, 150, 29); font-style: italic; text-align: center;"><?php if(!empty($problem)) echo $problem;?></h4>
            <form action="" method="POST" enctype="multipart/form-data">
                <table class="table3">
                   
                    <tr>
                        
                        <td>
                            <h1> Smer: </h1>
                            <input type="hidden" name="prvi" value="0">
                            <input type="checkbox" name="prvi" value="1" id="cb1" checked>Ekonomski tehničar</br>
                            <input type="hidden" name="drugi" value="0">
                            <input type="checkbox" name="drugi" id="cb1" value="1">Tehničar drumskog saobraćaja</br>
                            <input type="hidden" name="treci" value="0">
                            <input type="checkbox" name='treci' id="cb1" value='1'>Mašinski tehničar za kompjutersko konstruisanje</br>
                            <input type="hidden" name="cetvrti" value="0">
                            <input type="checkbox" name="cetvrti" id="cb1" value="1">Tehničar za kompjutersko upravljanje (CNC) mašina</br>
                            <input type='hidden'   name='peti'  value='0' >
                            <input type="checkbox" name="peti"  id="cb1" value="1"/>Mašinski tehničar motornih vozila</br>
                            <input type='hidden'   name='sesti'  value='0' >
                            <input type="checkbox" name="sesti"  id="cb1"  value="1"/>Automehaničar</br>
                            <input type='hidden'   name='sedmi'  value='0' >
                            <input type="checkbox" name="sedmi" id="cb1"  value="1"/>Modelar odeće</br>
                            <input type='hidden'   name='osmi'  value='0' >
                            <input type="checkbox" name="osmi" id="cb1"  value="1"/>Modni krojač</br>
                            <input type='hidden'   name='deveti'  value='0' >
                            <input type="checkbox" name="deveti" id="cb1"   value="1"/>Elektromehaničar za termičke i rashladne uređaje</br>
                            <input type='hidden'   name='deseti'  value='0' >
                            <input type="checkbox" name="deseti"  id="cb1"   value="1"/>Elektroinstalater</br>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h1> Razred:  </h1>
                            <input type='hidden'   name='prva'  value='0' >
                            <input type="checkbox" name="prva"  id="cb1"   value="1" checked="checked"/>Prvi </br>
                            <input type='hidden'   name='druga'  value='0' >
                            <input type="checkbox" name="druga" id="cb1"   value="1"/>Drugi</br>
                            <input type='hidden'   name='treca'  value='0' >
                            <input type="checkbox" name="treca" id="cb1"   value="1"/>Treći</br>
                            <input type='hidden'   name='cetvrta'  value='0' >
                            <input type="checkbox" name="cetvrta" id="cb1" value="1"/>Četvrti</br>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h1> Predmet: </h1>
                            <select name="predmet" id="select-state" placeholder="Izaberite predmet..." required>
                                <option value="">Izaberite predmet...</option>
                                <option value="srpski">Srpski jezik</option>
                                <option value="matematika">Matematika</option>
                                <option value="engleski">Engleski jezik</option>
                                <option value="sociologija">Sociologija</option>
                                <option value="istorija">Istorija</option>
                                <option value="geografija">Geografija</option>
                                <option value="biologija">Biologija</option>
                                <option value="fizika">Fizika</option>
                                <option value="fizicko">Fizičko vaspitanje</option>
                                <option value="informatika">Računarstvo i informatika</option>
                                <option value="hemija">Hemija</option>
                                <option value="ekologija">Ekologija i zašt.živ.sredine</option>
                                <option value="osnoviekonomije">Osnovi ekonomije</option>
                                <option value="poslovnaekonomija">Poslovna ekonomija</option>
                                <option value="likovno">Likovna umetnost</option>
                                <option value="racunovodstvo">Računovodstvo</option>
                                <option value="korespondencija">Savremena Posl. Korespond.</option>
                                <option value="statistika">Statistika</option>
                                <option value="pravo">Ustavno i privredno pravo</option>
                                <option value="monetarna">Monetarna ekonomija i bankarstvo</option>
                                <option value="komercijalno">Komercijalno poznavanje robe</option>
                                <option value="marketing">Marketing</option>
                                <option value="poslovnainformatika">Poslovna informatika</option>
                                <option value="tehnickocrtanje">Tehničko crtanje</option>
                                <option value="saobracajnisistemi">Saobraćajni sistemi</option>
                                <option value="tehnologijamaterijala">Tehnologija materijala</option>
                                <option value="mehanika">Mehanika</option>
                                <option value="psihologija">Psihologija</option>
                                <option value="masinskielementi">Mašinski elementi</option>
                                <option value="teretutransportu">Teret u transportu</option>
                                <option value="bezbednostsaobracaja">Regulisanje i bezbednost saobraćaja</option>
                                <option value="motornavozila">Motorna vozila</option>
                                <option value="saobracajnainfrastruktura">Saobraćajna infrastruktura</option>
                                <option value="organizacijaprevoza">Organizacija prevoza</option>
                                <option value="inteligentnisistemi">Inteligentni transportni sistemi</option>
                                <option value="preduzetnistvo">Preduzetništvo</option>
                                <option value="filozofija">Filozofija</option>
                                <option value="programiranje">Računari i programiranje</option>
                                <option value="masinskimaterijali">Mašinski materijali</option>
                                <option value="nacrtnageometrija">Tehničko crtanje sa nacrtnom geometrijom</option>
                                <option value="otpornostmaterijala">Otpornost materijala</option>
                                <option value="grafika">Kompjuterska grafika</option>
                                <option value="elektrotehnika">Osnovi elektrotehnike i elektronike</option>
                                <option value="tehnologijaobrade">Tehnologija obrade</option>
                                <option value="organizacijarada">Organizacija rada</option>
                                <option value="hidraulika">Hidraulika i pneumatika</option>
                                <option value="termodinamika">Termodinamika</option>
                                <option value="robotika">Automatizacija i robotika</option>
                                <option value="konstruisanje">Konstruisanje</option>
                                <option value="masinskekonstrukcije">Ispitivanje mašinskih konstrukcija</option>
                                <option value="modeliranje">Modeliranje mašinskih elemenata i konstrukcija</option>
                            </select>
                           
                        </td>
                        </tr>
                        <tr>
                            <td>  <input type="file" name="file" style="border-radius:5px;text-align:center;background-color:rgb(250, 157, 44);"  required /> </td>
                        </tr>
                    <tr>
                        <td>
                            <td colspan="2"><input type="submit" name="nastavnajedinica" value="Dodaj" class='red-btn'>
						
                        </td>
                    </tr>
                    </table>
                    </form>
                  

                    <script>
                $(document).ready(function () {
                    $('select').selectize({
                        sortField: 'text'
                    });
                });
            </script>
            <script>  
            $(document).ready(function(){  
                $('#nastavnajedinica').click(function(){  
                    var image_name = $('#file').val();  
                    if(image_name == '')  
                    {  
                            alert("Please Select File");  
                            return false;  
                    }  
                    else  
                    {  
                            var extension = $('#file').slice((Math.max(0, fname.lastIndexOf(".")) || Infinity) + 1);  
                            if(jQuery.inArray(extension, ['gif','png','jpg','jpeg', 'pdf', 'zip', 'rar', 'doc', 'docx', 'xlsx', 'pptx', 'txt']) == -1)  
                            {  
                                alert('Invalid  File');  
                                $('#file').val('');  
                                return false;  
                            }  
                    }  
                });  
            });  
        </script> 
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