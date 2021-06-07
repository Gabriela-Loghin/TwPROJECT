<?php 


$Greutate="";
$Varsta="";
$Inaltime="";
$Gen="";
$G_Muschi="";
$Durata="";
$Locatie="";

$errors=array();

if(isset($_POST['Calculate']))
{
    $Greutate=$_POST['masa'];
    $Varsta=$_POST['varsta'];
    $Inaltime=$_POST['inaltime'];
    $Gen=$_POST['gen'];
    $G_Muschi=$_POST['grMuschi'];
    $Durata=$_POST['durata'];
    $Locatie=$_POST['locatie'];

    if(empty($G_Muschi))
    {
        array_push($errors,"Trebuie sa specifici tipul de muschi...");
    }
    if(empty($Varsta))
    {
        array_push($errors,"Sper ca n-ai uitat cati ani ai...");
    }
    if(empty($Inaltime))
    {
        array_push($errors,"Specifica inaltimea ta.");
    }
    if(empty($Gen))
    {
        array_push($errors,"Alegeti genul");
    }
    if(empty($Greutate))
    {
        array_push($errors,"Specificati greutatea");
    }
    if(empty($Durata))
    {
        array_push($errors,"Specifica cat vrei sa tina antrenamentul");
    }
    if(empty($Locatie))
    {
        array_push($errors,"Specifica unde vrei sa faci antrenamentul");
    }
    if(count($errors)==0)
    {
        if((($Greutate>=50) && ($Greutate<=60))&&(($Varsta>=15) && ($Varsta<=30)))
        {
            header('location:./Homepage-ex2.php');
        }
    }

}



?>