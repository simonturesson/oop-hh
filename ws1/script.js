window.onload = function () { //När DOM har laddats körs scriptet.

    //Canvas load
    var canvas = document.getElementById("canvas");
    var ctx = canvas.getContext("2d");
    //Sätter bredd + höjd = fönsterhöjd
    var W = window.innerWidth, H = window.innerHeight;
    canvas.width = W;
    canvas.height = H;


    //Ställer in hur många partiklar som ska skapas + array'en
    var particles = [];
    var particle_count = 100;

    //Namnarray
    var names = ['Kalle', 'Lisa', 'Etc'];


//Skapar partikelklassen. I JS skapas klasser som funktioner.


    //Startar instansiering av alla partiklar
    for (var i = 0; i < particle_count; i++) {
        //Sätter våra variablar för ett partikelobjekt och genererar egenskaper
        var speed = {x: -2.5 + Math.random() * 20, y: -2.5 + Math.random() * 20};
        var location = {x: Math.random() * W, y: H / 2};
        var radius = 2 + Math.random() * 4;
        var color = "rgb(" + Math.floor(Math.random() * 256) + "," + Math.floor(Math.random() * 256) + "," + Math.floor(Math.random() * 256) + ")";
        var name = names[Math.floor(Math.random() * names.length)];

        particles.push(new particle(speed, location, radius, color, name));

        //Skapa klasser för partikllar (konstruktor)
        function particle(speed, location, radius, color, name) {
            this.speed = speed;
            this.location = location;
            this.radius = radius;
            this.color = color;
            this.name = name;
        }

        //Förflyttning av en partikel inkl studs vid kanterna
        function move(p) {
            p.location.x += p.speed.x;
            p.location.y += p.speed.y;


            if (p.location.x > W || p.location.x < 0)
                return p.speed.x = -p.speed.x;

            if (p.location.y > H || p.location.y < 0)
                return p.speed.y = -p.speed.y;
        }
    }

    //Kollisionsfunktionen
    function collision(p) {

        //Loopar igenom alla "particle" med forEach loop.

        //TODO:Laddar async??
        particles.forEach(function (particle) {
            if (p != particle) {
                //Jämnför positioner på p-partiklar.
                if (
                    p.location.y - p.radius < particle.location.y + particle.radius &&
                    p.location.y + p.radius > particle.location.y - particle.radius &&
                    p.location.x - p.radius < particle.location.x + particle.radius &&
                    p.location.x + p.radius > particle.location.x - particle.radius) {

                    //Bestämmer vilken partikel som har minst radie och bestämmer vilken som ska tas bort.

                    if (p.radius < particle.radius) {
                        //Ökar radien på den största partiklen
                        particle.radius += p.radius / 2;

                        //Ta bort partikel som är liten och krockas
                        particles.splice(particles.indexOf(p), 1);
                    }
                }
            }

        });
    }

//Får draw-funktion som var 33:e millisekund ritar om canvas.
    function draw() {

        ctx.fillStyle = "black";
        ctx.fillRect(0, 0, W, H);
        //I loopen  under finns logiken för partiklarnas förändrade position m.m.

        for (var i = 0; i < particle_count; i++) {
            var p = particles[i];
            ctx.beginPath();
            ctx.fillStyle = p.color;
            ctx.arc(p.location.x, p.location.y, p.radius, Math.PI * 2, false);
            ctx.fill();
            move(p);
            collision(p);
            ctx.fillText(p.name, p.location.x + 1, p.location.y + 1);
            ctx.stroke();
            ctx.fillStyle = "white";
            console.log(particles[i]);

        }
    }

    setInterval(draw, 33); //Uppdateringsfrekvens...
}
