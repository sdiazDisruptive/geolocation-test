<?php
    error_reporting(0);
    include("languages/languages.php");
    $idioma = $_SESSION["language"];
    $Host_Sitio= $_SERVER["HTTP_HOST"];
    $Company_Name = "Crypto CNL";
    $Footer_Rights = $Company_Name."© ".date("Y").". All rights reserved";
    $Footer_Crafted = "Crafted by";

    //-------------------------//
    // Conditions
    //-------------------------//

    $Conditions_Language_Eng =($idioma === 'english')? 'active' : '';
    $Conditions_Language_Esp =($idioma === 'spanish')? 'active' : '';
    $Conditions_Language =($idioma === 'spanish')? 'es' : 'en';

    $Conditions_Video_01 = $Conditions_Video_02 = $Conditions_Video_03 = '';
    switch($idioma) {
        case 'portuguese';
            $Conditions_Video_01 = '672504738?h=997ba36929';
            $Conditions_Video_02 = '672505732?h=199de66b13';
            $Conditions_Video_03 = '672506921?h=c601d30317';

            $Popup_Images = array('dubai-portugues', 'lasvegas-portugues');
            break;
        case 'chinese';
            $Conditions_Video_01 = '672440716?h=894ac13608';
            $Conditions_Video_02 = '672444147?h=56dcbe30e8';
            $Conditions_Video_03 = '672448543?h=27fe2d8100';

            $Popup_Images = array('dubai-chino', 'lasvegas-chino');
            break;
        case 'korean';
            $Conditions_Video_01 = '672475545?h=a26530bbab';
            $Conditions_Video_02 = '672476561?h=f2e1539834';
            $Conditions_Video_03 = '672477681?h=70dc0fba47';

            $Popup_Images = array('dubai-corea', 'lasvegas-corea');
            break;
        case 'english';
            $Conditions_Video_01 = '672509146?h=f8c5b07dbf';
            $Conditions_Video_02 = '672509760?h=b3661dd15d';
            $Conditions_Video_03 = '672510675?h=75e8537472';

            $Popup_Images = array('dubai-ingles', 'lasvegas-ingles');
            break;
        case 'filipino';
            $Conditions_Video_01 = '672523670?h=6ba6ce8efd';
            $Conditions_Video_02 = '672524427?h=5ba0d084ec';
            $Conditions_Video_03 = '672525381?h=ddc8ee25d0';

            $Popup_Images = array('dubai-filipino', 'lasvegas-filipino');
            break;
        case 'spanish';
            $Conditions_Video_01 = '672527485?h=68422fa01f';
            $Conditions_Video_02 = '672528051?h=54286337b5';
            $Conditions_Video_03 = '672528771?h=6588cdd020';

            $Popup_Images = array('dubai-espanol', 'lasvegas-espanol');
            break;
        case 'thailandes';
            $Conditions_Video_01 = '672548806?h=ff944f57e2';
            $Conditions_Video_02 = '672553498?h=e869db3dc4';
            $Conditions_Video_03 = '672554418?h=0a528c0501';

            $Popup_Images = array('dubai-tai', 'lasvegas-tai');
            break;
        default:
            $Conditions_Video_01 = '672509146?h=f8c5b07dbf';
            $Conditions_Video_02 = '672509760?h=b3661dd15d';
            $Conditions_Video_03 = '672510675?h=75e8537472';

            $Popup_Images = array('dubai-ingles', 'lasvegas-ingles');
            break;
    }

    //-------------------------//
    // Meta
    //-------------------------//

    $Description_Site  = $Hero_Text;
    $Keywords_Site     = $Company_Name.",crypto, cryptocurrency, cryptomonedas";

?>