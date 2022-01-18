const btnInscriptionPatient = document.getElementById("pat-inscription-btn");
const btnInscriptionMedecin = document.getElementById("med-inscription-btn");
const passwordPatient = document.getElementById("passwordPatient");
const confirmationPasswordPatient = document.getElementById("confirmationPasswordPatient");
const passwordMedecin = document.getElementById("passwordmedecin");
const confirmationPasswordMedecin = document.getElementById("confirmationPasswordMedecin");
const sectionDescription = document.getElementById("section-description");
const formulaireInscriptionMedecin = document.querySelector(".inscription-medecin");
const formulaireInscriptionPatient = document.querySelector(".inscription-patient");
const formulaireConnexion = document.querySelector(".log-in-container");

class Displayer {
    constructor(element, text) {
        this.element = element;
        this.text = text;
    }

    activateElement() {
        this.cleaner();
        this.element.style.display = "block";
        sectionDescription.innerText = this.text;
    }

    cleaner() {
        formulaireConnexion.style.display = "none";
        formulaireInscriptionMedecin.style.display = "none";
        formulaireInscriptionPatient.style.display = "none";
    }
}


btnInscriptionMedecin.addEventListener('click', () => {
    const text = "remplissez le formulaire ci-dessous pour inscrire en tant que medecin";
    const sm = new Displayer(formulaireInscriptionMedecin, text);
    sm.activateElement();
})

btnInscriptionPatient.addEventListener('click', () => {
    const text = "remplissez le formulaire ci-dessous pour inscrire en tant que patient";
    const sm = new Displayer(formulaireInscriptionPatient, text);
    sm.activateElement();
})