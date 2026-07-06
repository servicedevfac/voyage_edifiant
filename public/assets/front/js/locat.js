document.addEventListener("DOMContentLoaded", function () {
    const boutons = document.querySelectorAll('[id^="bouton"]');
    const contenus = document.querySelectorAll('.voircontenu');

    boutons.forEach(bouton => {
        bouton.addEventListener("click", function () {
            const num = this.id.replace("bouton", ""); 
       
            contenus.forEach(contenu => {
                contenu.style.display = "none";
            });
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

    const btn1 = document.getElementById("bouton1");
    if(btn1) {
        btn1.click();
    }
});