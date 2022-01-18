<?php session_start();
include_once 'function/function.php';
include_once 'function/connexion.class.php';
$bdd = bdd();
if(isset($_POST['pseudo']) AND isset($_POST['mdp'])){
    
    $connexion = new connexion($_POST['pseudo'],$_POST['mdp']);
    $verif = $connexion->verif();
    if($verif =="ok"){
      if($connexion->session()){
          header('Location: index.php');
      }
    }
    else {
        $erreur = $verif; 
    } 
}
?> 
<!DOCTYPE html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MedApp - inscription</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,700&display=swap">
    <link rel="stylesheet" href="./css/connexion.css">
    <head>
<body>
    <main>
        <div class="img-section">
            <svg class="log-in-img" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" width="758.67004" height="615.32637" viewBox="0 0 758.67004 615.32637" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M826.3304,254.42005c-3.94109,43.42331-15.16888,89.21081-32.77756,133.38965-21.77541,54.633-51.52607,102.75355-86.03669,139.15916l-1.91519-1.66994c34.34355-36.23054,63.959-84.13863,85.64344-138.54566,19.59746-49.1666,31.25383-100.33187,33.7243-147.9418l2.44729.40972Q827.02652,246.76351,826.3304,254.42005Z" transform="translate(-220.66498 -142.33682)" fill="#f2f2f2"/><path d="M842.0269,506.61454c-48.47245,77.11608-107.27981,132.21582-165.59018,155.14809l-1.17954-2.16253C733.164,636.82626,791.627,582.00857,839.878,505.245Z" transform="translate(-220.66498 -142.33682)" fill="#f2f2f2"/><path d="M825.15393,308.48378c-3.94109,43.42331-15.16888,89.2108-32.77756,133.38965C770.601,496.5064,740.8503,544.627,706.33968,581.03258l-1.91519-1.66993c34.34355-36.23054,63.959-84.13863,85.64344-138.54566,19.59746-49.1666,31.25383-100.33187,33.7243-147.9418l2.44729.40972Q825.85,300.82724,825.15393,308.48378Z" transform="translate(-220.66498 -142.33682)" fill="#f2f2f2"/><path d="M280.99076,419.96463H249.18705a4.50052,4.50052,0,0,1-3.53467-1.70264,4.40806,4.40806,0,0,1-.8628-3.7456,86.49007,86.49007,0,0,0-.55517-40.53614,4.509,4.509,0,0,1,1.74951-4.73828c16.35352-11.76172,29.23242-11.42041,38.2793,1.01611a4.51934,4.51934,0,0,1,.7915,1.90967,141.54042,141.54042,0,0,1,.39649,43.9253A4.49088,4.49088,0,0,1,280.99076,419.96463Z" transform="translate(-220.66498 -142.33682)" fill="#e6e6e6"/><path d="M271.13079,388.11582H260.19027a2.2811,2.2811,0,0,1,0-4.56221h10.94052a2.28111,2.28111,0,0,1,0,4.56221Z" transform="translate(-220.66498 -142.33682)" fill="#fff"/><path d="M271.13079,396.11582H260.19027a2.2811,2.2811,0,0,1,0-4.56221h10.94052a2.28111,2.28111,0,0,1,0,4.56221Z" transform="translate(-220.66498 -142.33682)" fill="#fff"/><path d="M271.13079,404.11582H260.19027a2.2811,2.2811,0,0,1,0-4.56221h10.94052a2.28111,2.28111,0,0,1,0,4.56221Z" transform="translate(-220.66498 -142.33682)" fill="#fff"/><path d="M858.99076,561.96463H827.18705a4.50052,4.50052,0,0,1-3.53467-1.70264,4.40806,4.40806,0,0,1-.8628-3.7456,86.49007,86.49007,0,0,0-.55517-40.53614,4.509,4.509,0,0,1,1.74951-4.73828c16.35352-11.76172,29.23242-11.42041,38.2793,1.01611a4.51934,4.51934,0,0,1,.7915,1.90967,141.54042,141.54042,0,0,1,.39649,43.9253A4.49088,4.49088,0,0,1,858.99076,561.96463Z" transform="translate(-220.66498 -142.33682)" fill="#e6e6e6"/><path d="M849.13079,530.11582H838.19027a2.28111,2.28111,0,0,1,0-4.56221h10.94052a2.2811,2.2811,0,0,1,0,4.56221Z" transform="translate(-220.66498 -142.33682)" fill="#fff"/><path d="M849.13079,538.11582H838.19027a2.28111,2.28111,0,0,1,0-4.56221h10.94052a2.2811,2.2811,0,0,1,0,4.56221Z" transform="translate(-220.66498 -142.33682)" fill="#fff"/><path d="M849.13079,546.11582H838.19027a2.28111,2.28111,0,0,1,0-4.56221h10.94052a2.2811,2.2811,0,0,1,0,4.56221Z" transform="translate(-220.66498 -142.33682)" fill="#fff"/><path d="M979.335,756.47318a1.18646,1.18646,0,0,1-1.19006,1.19H221.855a1.19,1.19,0,0,1,0-2.38h756.29A1.18651,1.18651,0,0,1,979.335,756.47318Z" transform="translate(-220.66498 -142.33682)" fill="#ccc"/><path d="M420.1685,683.61292,418.185,656.02441a89.24413,89.24413,0,0,0-41.89886-9.39587c20.43166,15.79292,18.79511,47.35761,32.94511,68.95962a53.68056,53.68056,0,0,0,40.02768,23.72162L466.263,749.0923a89.95172,89.95172,0,0,0-20.94423-72.346A86.88849,86.88849,0,0,0,428.95085,662.351C425.23408,673.02208,420.1685,683.61292,420.1685,683.61292Z" transform="translate(-220.66498 -142.33682)" fill="#f2f2f2"/><path d="M779.8315,687.61292l1.98354-27.58851a89.24413,89.24413,0,0,1,41.89886-9.39587c-20.43166,15.79292-18.79511,47.35761-32.94511,68.95962a53.68056,53.68056,0,0,1-40.02768,23.72162L733.737,753.0923a89.95172,89.95172,0,0,1,20.94423-72.346A86.88849,86.88849,0,0,1,771.04915,666.351C774.76592,677.02208,779.8315,687.61292,779.8315,687.61292Z" transform="translate(-220.66498 -142.33682)" fill="#f2f2f2"/><circle cx="370.33502" cy="214.94235" r="19" fill="#a11b05"/><path d="M600.75348,349.36059a1.53662,1.53662,0,0,0-2.12134,0,62.934,62.934,0,0,0-10.7818,11.01282q-1.15237-2.22958-2.30456-4.45923c-.88672-1.7157-3.47638-.20007-2.5904,1.51416q1.6854,3.26119,3.37079,6.52234a1.51763,1.51763,0,0,0,2.59046,0,60.74823,60.74823,0,0,1,11.83685-12.46875A1.50907,1.50907,0,0,0,600.75348,349.36059Z" transform="translate(-220.66498 -142.33682)" fill="#fff"/><path d="M505.98469,411.15628,477.33316,366.1606l33.17775-17.76832,8.708,34.32967,61.3554,33.15483a13.26628,13.26628,0,1,1-7.55,18.04831Z" transform="translate(-220.66498 -142.33682)" fill="#a0616a"/><path d="M456.40021,312.19271c-9.00247,13.21766,22.98989,61.26272,22.98989,61.26272,1.55855-3.35948,16.457,34.366,18.95241,32.13752,7.09206-6.3337,18.194-23.97635,24.36508-24.7628,3.52912-.44977-8.1849-25.47849-8.1849-25.47849s-5.35362-14.77941-12.61819-33.65869a33.90293,33.90293,0,0,0-24.626-21.53548S465.40269,298.97509,456.40021,312.19271Z" transform="translate(-220.66498 -142.33682)" fill="#3f3d56"/><polygon points="236.175 600.491 249.782 600.49 256.255 548.005 236.172 548.006 236.175 600.491" fill="#a0616a"/><path d="M453.36846,738.385l3.83-.00016,14.95309-6.08107,8.01441,6.08014h.00108a17.07841,17.07841,0,0,1,17.07749,17.07722v.555l-43.8753.00162Z" transform="translate(-220.66498 -142.33682)" fill="#2f2e41"/><polygon points="299.391 600.491 312.998 600.49 319.472 548.005 299.389 548.006 299.391 600.491" fill="#a0616a"/><path d="M516.58506,738.385l3.83005-.00016,14.95309-6.08107,8.0144,6.08014h.00109a17.07841,17.07841,0,0,1,17.07749,17.07722v.555l-43.87531.00162Z" transform="translate(-220.66498 -142.33682)" fill="#2f2e41"/><path d="M525.946,455.88859l-88.50724,2.21268c-16.80943,9.13-17.06468,28.89072-11.557,52.35232,0,0-1.8593,13.94482,1.85933,17.66344s5.57793,3.71863,3.71862,10.22622,7.9643,17.13641,6.77112,18.32959-3.98215,7.70077-3.98215,7.70077l9.29656,52.99038s6.50759,92.03593,8.3669,93.89524,3.71862,0,1.85931,4.64828-3.71862,2.789-1.85931,4.64828a68.471,68.471,0,0,1,4.64828,5.57794h22.47644s1.69461-9.29656,1.69461-10.22622,1.85931-6.50759,1.85931-7.43724-1.64337-2.573-1.64337-2.573a30.58473,30.58473,0,0,1-1.1456-5.79388c0-1.85931-5.57793-73.44281-5.57793-73.44281L485.37972,533.695l26.96,91.10627s0,79.9504,1.85931,81.80972,1.85931.92965.92966,4.64827-4.64828,2.789-1.85932,5.57794,3.71863-1.85931,2.789,2.789l-.92965,4.64828,27.88967.39894s3.71863-7.83619,1.85931-10.62516-1.74775-2.02767.52061-6.59177,3.198-5.49375,2.26836-6.42341-.92965-5.8744-.92965-5.8744l-4.64828-88.9505s-.92966-93.89524-.92966-96.6842a9.2729,9.2729,0,0,1,.77227-4.1823V501.556l-3.56124-13.41413Z" transform="translate(-220.66498 -142.33682)" fill="#2f2e41"/><circle cx="252.11349" cy="102.01522" r="27.4997" fill="#a0616a"/><path d="M486.52833,290.02712c5.92443,3.52211,9.46845,9.9935,11.50286,16.5787a157.109,157.109,0,0,1,6.75135,37.53694l2.14881,38.14144,26.6126,81.21386c-23.06426,19.51583-109.75939,4.43539-109.75939,4.43539s-2.66125-.887,0-3.54834,5.252-.30353,2.59079-2.96481-.82668.30352.06041-2.35777,0-.887-.88709-1.77416,6.86736-8.87092,6.86736-8.87092L425.31935,401.8l-8.87084-94.03118c10.64508-13.3063,32.05365-21.15028,32.05365-21.15028l5.5317-9.95707,27.65851,2.21268Z" transform="translate(-220.66498 -142.33682)" fill="#3f3d56"/><path d="M495.44762,229.7419a12.7442,12.7442,0,0,1,4.52746,6.35983A89.51311,89.51311,0,0,0,500.034,223.623c-.32412-2.92035-2.38014-3.57724-4.76083-4.33839-2.15-.68768-4.58148-1.46449-5.23567-4.29949-8.64436-8.40938-23.69232-7.98532-33.9908-5.052-5.66675,1.61413-8.92743,3.688-9.21914,4.9029l-.0605.25012-.23013.11506c-4.3681,2.18405-5.21839,9.08085-5.1622,14.48182.10642,10.17585,3.61991,21.733,5.59922,22.67188.1048.0497.13127.03025.17665-.00756h0c2.98031-2.38177,6.61644.181,8.21436,1.57416A28.6009,28.6009,0,0,1,480.97444,229.662a44.87886,44.87886,0,0,0,6.17238-1.035,12.99489,12.99489,0,0,1,3.15318-.41379A8.97355,8.97355,0,0,1,495.44762,229.7419Z" transform="translate(-220.66498 -142.33682)" fill="#2f2e41"/><path d="M666.16229,477.801l52.89941-53.71829,13.93717-42.96322-22.42808-9.07171c-11.11041,11.20695-22.54731,45.51492-22.54731,45.51492l-36.10559,48.45838c-.28835.10715-.57573.22044-.859.35436A10.68681,10.68681,0,1,0,666.16229,477.801Z" transform="translate(-220.66498 -142.33682)" fill="#ffb8b8"/><path d="M704.45269,376.96257l28.36321,8.20484.10562-.02039c10.42569-2.02431,18.6728-19.35032,23.755-33.5285a19.59609,19.59609,0,0,0-10.61481-24.55758h0a19.63934,19.63934,0,0,0-20.49519,3.12519L711.425,342.36338Z" transform="translate(-220.66498 -142.33682)" fill="#a11b05"/><polygon points="459.521 598.895 444.267 598.894 437.011 540.059 459.523 540.06 459.521 598.895" fill="#ffb8b8"/><path d="M684.077,736.25146l-4.29344-.00017-16.76237-6.81683-8.98411,6.8158h-.00122a19.14478,19.14478,0,0,0-19.14379,19.14351v.6221l49.184.00185Z" transform="translate(-220.66498 -142.33682)" fill="#2f2e41"/><polygon points="527.204 598.895 511.95 598.894 504.694 540.059 527.207 540.06 527.204 598.895" fill="#ffb8b8"/><path d="M751.76019,736.25146l-4.29344-.00017-16.76237-6.81683-8.98411,6.8158H721.719a19.14478,19.14478,0,0,0-19.14378,19.14351v.6221l49.184.00185Z" transform="translate(-220.66498 -142.33682)" fill="#2f2e41"/><path d="M771.12794,487.80635s1.78114,21.37362-2.6717,41.85668-4.45284,78.17012-4.45284,78.17012l-9.79624,112.41141-29.38874-2.67171-8.01511-187.90979-28.49817,63.23031,2.67171,8.90568-3.55877,2.22641s2.6682,17.36608.88706,17.36608-6.234,2.6717-6.234,2.6717l3.56227,91.72848-30.2793-.89057L644.66732,585.76883,656.2447,511.8517l.89057-14.24908,4.00756.16475,2.0406-5.95344,3.74809-10.24153Z" transform="translate(-220.66498 -142.33682)" fill="#2f2e41"/><path d="M772.66728,492.29571l.15872-.22264c8.47691-11.86786-4.27238-40.386-6.19528-44.52012l8.099-2.62822L772.906,429.422l-.86405-6.91147,6.19006-6.19.01739-.15437,3.56227-31.16987,5.17945-20.70271a45.45158,45.45158,0,0,0-12.90063-44.04789l-11.97222-11.2882-14.55-21.52881h-23.4635l-8.04511,15.19618a34.19881,34.19881,0,0,0-26.46048,34.91649l1.82332,39.85508-7.138,49.62306-.00435,8.98047-8.03291,8.92742,1.75417,8.77044-6.11352,2.62-2.69953,12.59666c-1.11713,1.47413-8.49083,11.306-8.49083,13.99383,0,.40354.29787.79359.93709,1.22632,5.0251,3.40268,32.79968,10.33981,45.09239,5.42081,13.09413-5.23556,65.14537,2.61865,65.6698,2.69867Z" transform="translate(-220.66498 -142.33682)" fill="#a11b05"/><circle cx="512.14059" cy="107.06758" r="31.07446" fill="#ffb8b8"/><path d="M729.82868,280.982a84.51349,84.51349,0,0,0,14.346-1.37542c4.68679-1.07973,15.02744-9.0757,17.84571-13.79945h0c2.09379-3.50966,3.3505-8.93831,4.03626-12.8741a37.77915,37.77915,0,0,0-7.37934-29.81139,11.93568,11.93568,0,0,0-4.92552-3.98886c-.17437-.06305-.35356-.11828-.53442-.1648a14.72652,14.72652,0,0,1-7.44025-4.34242,12.14528,12.14528,0,0,0-1.24975-1.22149,18.13963,18.13963,0,0,0-7.66375-3.60358c-4.52853-1.08755-11.00643.27528-19.25331,4.05409-4.14323,1.89854-8.74174,1.3689-12.28618.69532a1.1537,1.1537,0,0,0-1.07625.40006,8.14428,8.14428,0,0,1-5.47647,2.34861c-1.25845.08784-2.53516,1.86636-4.07409,4.18236-.34918.52573-.75663,1.1393-1.05233,1.51371l-.05914-.70315-.69227.804a9.88285,9.88285,0,0,0,4.87594,15.98065,19.27346,19.27346,0,0,0,3.891.51747c.7949.05087,1.6172.1035,2.40688.21961a14.90011,14.90011,0,0,1,11.31824,9.38009,3.89666,3.89666,0,0,0,5.92827,1.73939,6.43813,6.43813,0,0,1,5.837-1.21931,4.27384,4.27384,0,0,1,1.94377,2.09336,5.5697,5.5697,0,0,0,2.17641,2.41036c3.23527,1.5637,3.64359,8.85046,2.6539,14.95919-.95405,5.88827-3.02958,10.18369-5.04727,10.44547-1.55328.20133-1.72852.31657-1.83419.5949l-.09439.24917.1809.22612A6.36366,6.36366,0,0,0,729.82868,280.982Z" transform="translate(-220.66498 -142.33682)" fill="#2f2e41"/><path d="M704.04759,380.28588,689.11093,361.254c-15.21464,4.18967-42.21109,28.25266-42.21109,28.25266l-55.44155,24.0594a10.6812,10.6812,0,1,0,6.489,17.30681l72.62706-20.26172Z" transform="translate(-220.66498 -142.33682)" fill="#ffb8b8"/><path d="M700.46759,384.63693l23.56811-26.27257,1.30851-18.616a19.64143,19.64143,0,0,0-9.74716-18.29829h0a19.59508,19.59508,0,0,0-26.03218,6.17112c-8.32764,12.55068-17.28635,29.51961-12.67669,39.08688l.04671.097Z" transform="translate(-220.66498 -142.33682)" fill="#a11b05"/><path d="M483.24425,483.38676,421.98988,452.0155c-4.357-2.23144-5.80026-8.15017-3.21717-13.19382L458.71184,360.838c2.58309-5.04365,8.22931-7.33153,12.58634-5.10009l61.25437,31.37126c4.35707,2.23147,5.80031,8.15019,3.21721,13.19385l-39.93912,77.98366C493.24755,483.33035,487.60132,485.61822,483.24425,483.38676Z" transform="translate(-220.66498 -142.33682)" fill="#e6e6e6"/><path d="M472.77833,468.96505l-41.617-21.31405c-4.08065-2.08989-5.43261-7.633-3.01339-12.35662l33.18076-64.78755c2.41922-4.72367,7.70727-6.86607,11.78791-4.77618l50.26488,25.743c4.08065,2.08989,5.43223,7.63276,3.013,12.35643l-18.02558,35.19607C497.59319,460.06647,490.95483,478.27409,472.77833,468.96505Z" transform="translate(-220.66498 -142.33682)" fill="#fff"/><path d="M493.35472,433.58462l-36.8614-18.87847a2.30543,2.30543,0,0,1,2.07954-4.06043l36.8614,18.87847a2.30543,2.30543,0,0,1-2.07954,4.06043Z" transform="translate(-220.66498 -142.33682)" fill="#a11b05"/><path d="M460.79681,427.03683l-8.41215-4.30826a2.30557,2.30557,0,0,1,2.07965-4.06064l8.41215,4.30826a2.30557,2.30557,0,0,1-2.07965,4.06064Z" transform="translate(-220.66498 -142.33682)" fill="#a11b05"/><path d="M471.58711,442.68971,448.276,430.751a2.30557,2.30557,0,0,1,2.07965-4.06064l23.31111,11.93873a2.30557,2.30557,0,0,1-2.07965,4.06064Z" transform="translate(-220.66498 -142.33682)" fill="#a11b05"/><path d="M507.94167,405.10268l-36.8614-18.87847a2.30543,2.30543,0,0,1,2.07954-4.06043l36.8614,18.87847a2.30543,2.30543,0,0,1-2.07954,4.06043Z" transform="translate(-220.66498 -142.33682)" fill="#a11b05"/><path d="M475.38376,398.55489l-8.41215-4.30826a2.30557,2.30557,0,0,1,2.07965-4.06064l8.41214,4.30826a2.30557,2.30557,0,0,1-2.07964,4.06064Z" transform="translate(-220.66498 -142.33682)" fill="#a11b05"/><path d="M486.17406,414.20777,462.863,402.269a2.30557,2.30557,0,0,1,2.07965-4.06064l23.31111,11.93873a2.30557,2.30557,0,0,1-2.07965,4.06064Z" transform="translate(-220.66498 -142.33682)" fill="#a11b05"/><path d="M432.48537,415.49443l-13.83816-51.51724,36.97936-7.0002L453.638,392.338l48.58778,50.02955a13.26627,13.26627,0,1,1-12.61527,14.95323Z" transform="translate(-220.66498 -142.33682)" fill="#a0616a"/><path d="M414.86314,306.21559c-12.55213,9.90933,3.55855,65.33753,3.55855,65.33753,2.49434-2.73742,5.39291,37.7197,8.44176,36.34213,8.66512-3.91519,24.5472-17.41617,30.67005-16.31569,3.50155.62935-.167-26.76038-.167-26.76038s-.67475-15.70467-1.94289-35.89361a33.90293,33.90293,0,0,0-17.03381-27.92966S427.41528,296.3063,414.86314,306.21559Z" transform="translate(-220.66498 -142.33682)" fill="#3f3d56"/><path d="M623.71891,529.841l-33.42618-15.78416a5.231,5.231,0,0,1-2.87-3.54375,5.12352,5.12352,0,0,1,.95213-4.36489,100.58,100.58,0,0,0,19.41281-42.25364,5.19671,5.19671,0,0,1,5.09238-4.19039c17.04776.058,29.78887,6.28279,37.868,18.49922a5.2612,5.2612,0,0,1,.68837,4.37574,164.52691,164.52691,0,0,1-21.1081,45.4065A5.21976,5.21976,0,0,1,623.71891,529.841Z" transform="translate(-220.66498 -142.33682)" fill="#e6e6e6"/><path d="M633.552,507.70288,607.99386,495.6341a2.65133,2.65133,0,1,1,2.26422-4.79495l25.55809,12.06878a2.65133,2.65133,0,1,1-2.26422,4.79495Z" transform="translate(-220.66498 -142.33682)" fill="#fff"/><path d="M637.52235,499.29475,611.96425,487.226a2.65133,2.65133,0,0,1,2.26422-4.79495l25.5581,12.06877a2.65133,2.65133,0,0,1-2.26422,4.795Z" transform="translate(-220.66498 -142.33682)" fill="#fff"/><path d="M603.37135,235.3519l-2.37941.26061c-10.60747-41.68436-31.16817-70.56285-59.46151-83.514-35.96775-16.46321-80.44329-5.40786-125.23408,31.13-45.01841,36.7244-84.87155,94.733-112.21718,163.34285l-2.30844-1.05643c27.46571-68.90948,67.52341-127.1984,112.7941-164.12694,45.4977-37.11521,90.881-48.25163,127.78958-31.35736C571.45922,163.3529,592.55818,192.85662,603.37135,235.3519Z" transform="translate(-220.66498 -142.33682)" fill="#f2f2f2"/><path d="M340.897,289.64042c-6.22164,13.10661-12.13943,26.68513-17.58916,40.358-31.36052,78.68222-47.25268,159.03767-45.954,232.38347l-2.451-.26154c-1.3-73.61855,14.6379-154.25079,46.09659-233.17836,5.46537-13.71145,11.4-27.32833,17.63957-40.47193Z" transform="translate(-220.66498 -142.33682)" fill="#f2f2f2"/><path d="M339.72057,343.70415c-6.22164,13.1066-12.13943,26.68513-17.58916,40.358-31.36052,78.68222-47.25268,159.03767-45.954,232.38347l-2.451-.26154c-1.3-73.61855,14.6379-154.25079,46.09659-233.17837,5.46537-13.71144,11.4-27.32832,17.63957-40.47193Z" transform="translate(-220.66498 -142.33682)" fill="#f2f2f2"/><ellipse cx="265.35647" cy="357.71937" rx="8.8567" ry="10.19466" transform="translate(-400.12101 238.16505) rotate(-56.36398)" fill="#ccc"/><ellipse cx="842.29847" cy="504.78842" rx="8.8567" ry="10.19466" transform="translate(-265.20165 784.11675) rotate(-56.36398)" fill="#ccc"/></svg>
        </div>
        <div id="Cforum" class="flex-col">
            <h1 class="title">MedApp - Connexion</h1>
            <p class="section-description" id="section-description">veuillez vous connecter ou créez un nouveau compte</p>
            <div class="log-in-container flex-col">
                <form method="post" action="connexion.php" class="log-in-form flex-col">
                    <input class="form-item input-item" name="pseudo" type="text" placeholder="Email" required />
                    <input class="form-item input-item" name="mdp" type="password" placeholder="Mot de passe" required />
                    <input class="btn submit-btn form-item" type="submit" value="connexion" />
                    <?php 
                    if(isset($erreur)){
                        echo $erreur;
                    }
                    ?>
                </form> 
                <div class="signup-btn-area flex-col">
                    <p class="section-description">- créez votre compte -</p>
                    <a class="btn no-bg-btn form-item" href="inscription.php" id="pat-inscription-btn">inscription patient </a>
                    <a class="btn no-bg-btn form-item" href="inscription-medecin.php" id="med-inscription-btn">inscription medecin </a>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
