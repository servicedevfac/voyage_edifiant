document.addEventListener("DOMContentLoaded", function () {
<<<<<<< HEAD
    const boutons = document.querySelectorAll("#bouton1, #bouton2, #bouton3, #bouton4");
=======
    const boutons = document.querySelectorAll('[id^="bouton"]');
    const contenus = document.querySelectorAll('.voircontenu');
>>>>>>> djuedev

    boutons.forEach(bouton => {
        bouton.addEventListener("click", function () {
            const num = this.id.replace("bouton", ""); 
       
<<<<<<< HEAD
            for (let i = 1; i <= 4; i++) {
                const contenu = document.getElementById("contenu" + i);
                if (contenu) {
                    contenu.style.display = "none";
                }
            }

            
=======
            contenus.forEach(contenu => {
                contenu.style.display = "none";
            });

>>>>>>> djuedev
            const contenuActif = document.getElementById("contenu" + num);
            if (contenuActif) {
                contenuActif.style.display = "block";
            }

<<<<<<< HEAD
           
=======
>>>>>>> djuedev
            boutons.forEach(b => {
                const car = b.querySelector(".car2");
                if (car) {
                    car.classList.remove("car-active");
                }
            });

<<<<<<< HEAD

=======
>>>>>>> djuedev
            const actif = this.querySelector(".car2");
            if (actif) {
                actif.classList.add("car-active");
            }
        });
    });

<<<<<<< HEAD

    document.getElementById("bouton1").click();
=======
    const btn1 = document.getElementById("bouton1");
    if(btn1) {
        btn1.click();
    }
>>>>>>> djuedev
});