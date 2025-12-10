document.addEventListener("DOMContentLoaded", function () {
    const boutons = document.querySelectorAll("#bouton1, #bouton2, #bouton3, #bouton4");

    boutons.forEach(bouton => {
        bouton.addEventListener("click", function () {
            const num = this.id.replace("bouton", ""); 
       
            for (let i = 1; i <= 4; i++) {
                const contenu = document.getElementById("contenu" + i);
                if (contenu) {
                    contenu.style.display = "none";
                }
            }

            
            const contenuActif = document.getElementById("contenu" + num);
            if (contenuActif) {
                contenuActif.style.display = "block";
            }

           
            boutons.forEach(b => {
                const car = b.querySelector(".car2");
                if (car) {
                    car.classList.remove("car-active");
                }
            });


            const actif = this.querySelector(".car2");
            if (actif) {
                actif.classList.add("car-active");
            }
        });
    });


    document.getElementById("bouton1").click();
});