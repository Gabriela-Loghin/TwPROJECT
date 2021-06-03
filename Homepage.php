<?php include('Server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Workout Generator</title>
</head>
<body>
    <nav>
        <div class="topnav">
          <a class="active" href="./Homepage.php">Home</a>
          <a href="./contact.php">Contact</a>
          <a href="./about.php">About</a>
        </div>
      </nav>
    <header>
       <div class="content">
        
            
        <div class="login-btn-container">
            
            <a href="index.php?logout='1'"><button id="loginBtn">Log Out</button></a>
        </div> 
        
       </div>

    </header>

    <div class="container" id="text">
        <h1>
            <span>Start Training</span>
        </h1>
      </div>
    <main>
        <section id="optionSection">
            <form action="#" method="get" id ="main-form">
                <div class="options">
                    <div class="no-login">
                        <label for="inputMasa">
                            <span>Greutate</span>
                            <input type="number" name="masa" id="inputMasa">
                        </label>
                        <label for="inputVarsta">
                            <span>Varsta</span>
                            <input type="number" name="varsta" id="inputVarsta">
                        </label>
                        <label for="inputInaltime">
                            <span>Inaltime ( in cm )</span>
                            <input type="number" name="inaltime" id="inputInaltime">
                        </label>
                        <label for="inputGen">
                            <span>Gen</span>
                            <input type="text" name="gen" id="inputGen">
                        </label>
                    </div>
                    <div class="with-login">
                        <!--inputuri care  apar doar daca userlui este conectat  -->
                        <label for="inputGrMuschi">
                            <span>Grupa de muschi dorita</span>
                            <select name="grMuschi" id="inputGrMuschi">
                                <option value="">Alege grupa de muschi</option>
                                <option value="deltoid">Deltoid</option>
                                <option value="biceps">Biceps</option>
                                <option value="triceps">Triceps</option>
                                <option value="cvadriceps_femural">Cvadriceps femural</option>
                                <option value="fesier">Fesieri</option>
                                <option value="biceps_femural">Biceps femural</option>
                                <option value="pectoral">Pectoral</option>
                                <option value="drept_abdominal">Drept abdominal</option>
                                <option value="oblic_extern">Oblic extern</option>
                                <option value="trapez">Trapez</option>
                                <option value="marele_dorsal">Marele dorsal</option>
                            </select>
                        </label>
                        <label for="inputDurata">
                            <span>Durata ( in minute )</span>
                            <input type="number" name="durata" id="inputDurata">
                        </label>
                        <label for="inputLocatie">
                            <span>Locatie</span> 
                            <select name="locatie" id="inputLocatie">
                                <option value="">Alegeti locatia</option>
                                <option value="acasa">Acasa</option>
                                <option value="aer_liber">Afara</option>
                            </select>
                        </label>
                        <!-- ------ -->
                    </div>
                </div>
                
                <input type="submit" value="Calculeaza" id="submit-btn">
            </form>
        </section>
        <section id="exerciseDisplay">
            <div class="exercise-container">
                <div class="instructions">
                    <h3 class="exercise-name">Podul cu extensie de picior</h3>
                    <ul class="exercise-instructions">
                        <li>stai intinsa pe spate cu genunchii flexati</li>
                        <li>ridica-ti piciorul pe diagonala</li>
                        <li>incordeaza-ti fesierii si ridica-ti trunchiul cat de sus poti;</li>
                        <li>din aceasta pozitie, coboara-ti trunchiul foarte aproape de podea apoi reia;
                        </li>
                        <li>exercitiul se executa timp de 45 de secunde, pana la un minut;</li>
                    </ul>
                    <div class="exercise-photo-instructions">
                        <div class="photo-container">
                            <a href="./images/podul-cu-extensie1.jpg" target="_blank">
                                <img src="./images/podul-cu-extensie1.jpg" alt="" class="example-photo">
                            </a>
                        </div>
                        <div class="photo-container">
                            <a href="./images/podul-cu-extensie1.jpg" target="_blank">
                                <img src="./images/podul-cu-extensie1.jpg" alt="" class="example-photo">
                            </a>
                        </div>
                        <div class="photo-container">
                            <a href="./images/podul-cu-extensie1.jpg" target="_blank">
                                <img src="./images/podul-cu-extensie1.jpg" alt="" class="example-photo">
                            </a>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
            
            <div class="exercise-container">
                <div class="instructions">
                    <h3 class="exercise-name">Flotari</h3>
                    <ul class="exercise-instructions">
                        <li>asigura-te ca varful picioarelor nu va derapa de pe suprafata de actiune unde executi flotarile;</li>
                        <li>de indata ce flexezi bratele si inclini corpul,ai grija ca posteriorul se nu fie la un nivel diferit fata de celelalte parti ale corpului;</li>
                        <li>Asigura-te ca executi miscarea uniform fara sa pierzi controlul bratelor;</li>
                        <li>Incepe cu un numar de repetari pe care le poti sustine uaor si apoi adauga pe masura ce avansezi;
                        </li>
                        <li>Durata acestui exercitiu depinde de cat poati sa faci;</li>
                    </ul>
                    <div class="exercise-photo-instructions">
                        
                        <div class="photo-container">
                             <video controls="controls" src="./videos/Slabeste cu Serban - Cum sa executi corect o flotare_.mp4" width="640" height="480">
                            </video>
                         </div>
                        
                        
                    </div>
                </div>
            </div>
            
            <div class="exercise-container">
                <div class="instructions">
                    <h3 class="exercise-name">Genoflexiuni</h3>
                    <ul class="exercise-instructions">
                        <li>Inspira si trage-ti posteriorul catre spate;</li>
                        <li>Mentine-ti spatele drept si lasa-te usor in jos;</li>
                        <li>Lasa-te in jos pana in momentul in care posteriorul este mai jos decat genunchii;</li>
                        <li>Ridica-te apoi sus usor,mentinandu-ti spatele drept;
                        </li>
                        <li>Durata acestui exercitiu este de minim 3 minute;</li>
                    </ul>
                    <div class="exercise-photo-instructions">
                        
                        <div class="photo-container">
                             <video controls="controls" src="./videos/Cum Sa Faci Genuflexiuni Corecte In 2021.mp4" width="640" height="480">
                            </video>
                         </div>
                        
                        
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer></footer>
</body>
</html>