<?php session_start();
include_once 'function/function.php';
include_once 'function/addSujet.class.php';
$bdd = bdd();

if (isset($_POST['name']) and isset($_POST['sujet'])) {

    $addSujet = new addSujet($_POST['name'], $_POST['sujet'], $_POST['categorie']);
    $verif = $addSujet->verif();
    if ($verif == "ok") {
        if ($addSujet->insert()) {
            header('Location: index.php?sujet=' . $_POST['name']);
        }
    } else {/*Si on a une erreur*/
        $erreur = $verif;
    }
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MedApp</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,700&display=swap">
    <!-- <script src="https://kit.fontawesome.com/b6173cb5aa.js" crossorigin="anonymous"></script> -->

    <link rel="stylesheet" href="./css/addSubject.css">
</head>

<body>
    <header>
        <nav class="nav-bar-container">
            <h1 class="logo">MedApp</h1>
            <ul class="nav-bar">
                <li>
                    <a href="chat.html" class="nav-item"> <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="message" class="svg-inline--fa fa-message" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="currentColor" d="M511.1 63.1v287.1c0 35.25-28.75 63.1-64 63.1h-144l-124.9 93.68c-7.875 5.75-19.12 .0497-19.12-9.7v-83.98h-96c-35.25 0-64-28.75-64-63.1V63.1c0-35.25 28.75-63.1 64-63.1h384C483.2 0 511.1 28.75 511.1 63.1z"></path>
                        </svg> chat</a>
                </li>
                <li class="active">
                    <a href="index.php" class="nav-item"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-group" class="svg-inline--fa fa-user-group" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                            <path fill="currentColor" d="M224 256c70.7 0 128-57.31 128-128S294.7 0 224 0C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3c-95.73 0-173.3 77.6-173.3 173.3C0 496.5 15.52 512 34.66 512H413.3C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304zM479.1 320h-73.85C451.2 357.7 480 414.1 480 477.3C480 490.1 476.2 501.9 470 512h138C625.7 512 640 497.6 640 479.1C640 391.6 568.4 320 479.1 320zM432 256C493.9 256 544 205.9 544 144S493.9 32 432 32c-25.11 0-48.04 8.555-66.72 22.51C376.8 76.63 384 101.4 384 128c0 35.52-11.93 68.14-31.59 94.71C372.7 243.2 400.8 256 432 256z"></path>
                        </svg> forum</a>
                </li>
                <li>
                    <a href="#" class="nav-item">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" class="svg-inline--fa fa-plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path fill="currentColor" d="M432 256c0 17.69-14.33 32.01-32 32.01H256v144c0 17.69-14.33 31.99-32 31.99s-32-14.3-32-31.99v-144H48c-17.67 0-32-14.32-32-32.01s14.33-31.99 32-31.99H192v-144c0-17.69 14.33-32.01 32-32.01s32 14.32 32 32.01v144h144C417.7 224 432 238.3 432 256z"></path>
                        </svg>
                        rechercher une pharmacie
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-item">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="hospital" class="svg-inline--fa fa-hospital" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                            <path fill="currentColor" d="M192 48C192 21.49 213.5 0 240 0H400C426.5 0 448 21.49 448 48V512H368V432C368 405.5 346.5 384 320 384C293.5 384 272 405.5 272 432V512H192V48zM312 64C303.2 64 296 71.16 296 80V104H272C263.2 104 256 111.2 256 120V136C256 144.8 263.2 152 272 152H296V176C296 184.8 303.2 192 312 192H328C336.8 192 344 184.8 344 176V152H368C376.8 152 384 144.8 384 136V120C384 111.2 376.8 104 368 104H344V80C344 71.16 336.8 64 328 64H312zM160 96V512H48C21.49 512 0 490.5 0 464V320H80C88.84 320 96 312.8 96 304C96 295.2 88.84 288 80 288H0V224H80C88.84 224 96 216.8 96 208C96 199.2 88.84 192 80 192H0V144C0 117.5 21.49 96 48 96H160zM592 96C618.5 96 640 117.5 640 144V192H560C551.2 192 544 199.2 544 208C544 216.8 551.2 224 560 224H640V288H560C551.2 288 544 295.2 544 304C544 312.8 551.2 320 560 320H640V464C640 490.5 618.5 512 592 512H480V96H592z"></path>
                        </svg>
                        rechercher une hopital
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-item">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="book-medical" class="svg-inline--fa fa-book-medical" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path fill="currentColor" d="M448 336v-288C448 21.49 426.5 0 400 0H96C42.98 0 0 42.98 0 96v320c0 53.02 42.98 96 96 96h320c17.67 0 32-14.33 32-31.1c0-11.72-6.607-21.52-16-27.1v-81.36C441.8 362.8 448 350.2 448 336zM128 166c0-8.838 7.164-16 16-16h53.1V96c0-8.838 7.164-16 16-16h52c8.836 0 16 7.162 16 16v54H336c8.836 0 16 7.162 16 16v52c0 8.836-7.164 16-16 16h-54V288c0 8.836-7.164 16-16 16h-52c-8.836 0-16-7.164-16-16V234H144c-8.836 0-16-7.164-16-16V166zM384 448H96c-17.67 0-32-14.33-32-32c0-17.67 14.33-32 32-32h288V448z"></path>
                        </svg>
                        historiques de consultation
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-item">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="gear" class="svg-inline--fa fa-gear" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="currentColor" d="M499.5 332c0-5.66-3.112-11.13-8.203-14.07l-46.61-26.91C446.8 279.6 448 267.1 448 256s-1.242-23.65-3.34-35.02l46.61-26.91c5.092-2.941 8.203-8.411 8.203-14.07c0-14.1-41.98-99.04-63.86-99.04c-2.832 0-5.688 .7266-8.246 2.203l-46.72 26.98C362.9 94.98 342.4 83.1 320 75.16V21.28c0-7.523-5.162-14.28-12.53-15.82C290.8 1.977 273.7 0 256 0s-34.85 1.977-51.48 5.461C197.2 7.004 192 13.76 192 21.28v53.88C169.6 83.1 149.1 94.98 131.4 110.1L84.63 83.16C82.08 81.68 79.22 80.95 76.39 80.95c-19.72 0-63.86 81.95-63.86 99.04c0 5.66 3.112 11.13 8.203 14.07l46.61 26.91C65.24 232.4 64 244 64 256s1.242 23.65 3.34 35.02l-46.61 26.91c-5.092 2.941-8.203 8.411-8.203 14.07c0 14.1 41.98 99.04 63.86 99.04c2.832 0 5.688-.7266 8.246-2.203l46.72-26.98C149.1 417 169.6 428.9 192 436.8v53.88c0 7.523 5.162 14.28 12.53 15.82C221.2 510 238.3 512 255.1 512s34.85-1.977 51.48-5.461C314.8 504.1 320 498.2 320 490.7v-53.88c22.42-7.938 42.93-19.82 60.65-34.97l46.72 26.98c2.557 1.477 5.416 2.203 8.246 2.203C455.3 431 499.5 349.1 499.5 332zM256 336c-44.11 0-80-35.89-80-80S211.9 176 256 176s80 35.89 80 80S300.1 336 256 336z"></path>
                        </svg>
                        parametre
                    </a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="container">
            <h1 class="title">Ajouter un nouveau sujet</h1>
            <form method="post" action="addSujet.php?categorie=<?php echo $_GET['categorie']; ?>" class="subject-form">
                <label for="subject" name="name">Nom Sujet: </label>
               	<input type="text" name="name" class="subject-name" placeholder="Nom du sujet..." required/>
                <label for="subject name">Description Sujet: </label>
                <textarea name="sujet" class="input-msg subject-msg" cols="30" rows="6"  placeholder="Contenu du sujet..."></textarea>
                <input type="hidden" value="<?php echo $_GET['categorie']; ?>" name="categorie" />
                <input type="submit" class="btn send-msg-btn add-subject-btn" value="Ajouter le sujet" />
                <?php
                if (isset($erreur)) {
                    echo $erreur;
                }
                ?>
            </form>
            <a class="back-pg-arrow" href="index.php">&#8592; Back</a>
        </div>
    </main>
</body>

</html>