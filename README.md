# MedApp 
## Qu'est ce que MedApp
Notre application medapp est une application de rencontre entre les medecins et les patients. cette platte forme est mise sur pied pour limitter le taux deplacement 
et de contamination des personnes en incapacite de retrouver facilement un centre de sante proche elle est donc benefique dans le sens ou elle apporte un 
aide a distance.

<p align="justify" style="margin-bottom: 0.28cm; line-height: 108%">
	<font size="4" style="font-size: 14pt"><b>Liste des développeurs </b></font></font>
	</p>
</ol>


Num | Noms 			et prénoms | Matricule | Compte GitHub
-- | -- | -- | --
1 |  Nzokeu Ngouanea Brice Guenole | 18T2415  |  Nzokeu
2 |   Miessok Eric Cedric Junior  | 18T2523 | LeDoyen14
3 | Kamta Blerio cabrel  |  18t2731 | cabrelkamta
4 |  Jou Tchassi Idriss Jordan  |  18T2484 |  tchassijordan
5 |   Manpho ngueda murhiell |  21S2783 | Manpho


<p align="justify" style="margin-bottom: 0.28cm; line-height: 108%"><br/>
<br/>

</p>

## Comment function MedApp

Cette application  fonctionne comme suit.

Premierement nous avons deux cas
1. compte ou le patient ou le medecin doit s'authentifier s'il n'a pas de compte car il ne pourra pas participer au forum( 
2. compte ou le patient ou le medecin doit acceder a son compte si celui si avait deja creer un compte au prealable

Deuxiemement
1.  le patient ou le medecin en creation de compte doit aller sur la page inscription et remplir  tous les champs du formulaire et obligatoirement apres cela il doit soumettre le formulaire . Apres l'avoir soumis le compte est creer il peut donc l'ouvrir sur une nouvelle page appelle connexion
2. Le patient ou le medecin ayant deja un compte peu juste acceder a son compte et l'ouvrir sur la page connexion c'est-a- dire remplir uniquement l'adresse email et le mot de passe.
   
Ensuite ayant deja un compte( Patient ou Medecin) et s'etant connecter ils iront directement sur la page du chat appele"chat" pour pouvoir converser ici le patient pourra  rechercher le medecin a qui parler ensuite il pourra poser cest preocupations a l'endroit de ce  medecin qui en retour pourra soit le repondre immediatement s'il est connecte ou libre, soit plutard s'il est deconnecter ou occupe et en prenant si possible un rendezvous pour une communication en presentiel avec le patient.

## Comment obtenir MedApp en local
Pour obtenir cette application  il faut:
1. Clone ce repo, si vous ne commencez pas comment le faire derige vous ici, <a href="./how-to/how-to.md">How to</a>
2. Installer et lancer WAMSERVER  WAMSERVER 
3. Apres avoir lancer WAMSERVER, ouvrez votre navigateur de choix et entrez le lien ci-dessous: __localhost/phpmymdmin__  
4. Une fois l'interface de phpmyadmin affiche, creer une nouvelle base de donne note __forum__
5. Une fois _4_ a été fait, allez sur la bar operations, la dedans il y a une option qui te permet d'importe les informations provenant d'un base de donnée externe. 
    1. Choissez l'option __import__
    2. Si tous est bien faire une interface pour choisir le fiche a importe devra apparaitre. Choissez le fiche __forum .sql__ qui ce trouve dans le dossier _chat/bd_, ctd <a href="./app/bd/forum.sql">ici</a>
6. Pour continuez vous devrez mettrez une copie de ce repo dans le dossier __htdocs__ de xammp
    1. Dans linux elle ce trouve dans __/opt/lampp/htdocs__

### Comment acceder a la platforme
1. Pour accede au chat entre le lien ci-dessous dans votre navigateur, __localhost/medical-chat-app/chat/index.php__
2. Pour accede au chat entre le lien ci-dessous dans votre navigateur, __localhost/medical-chat-app/index.php__

