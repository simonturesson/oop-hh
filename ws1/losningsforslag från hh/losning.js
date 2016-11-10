//-------------------------------------
// Förslag till lösning på workshop 1
//-------------------------------------
// Om du beöver mer kunskap om OOP med JavaScript kan denna länk hjälpa till:
// https://developer.mozilla.org/en-US/docs/Web/JavaScript/Introduction_to_Object-Oriented_JavaScript
// Behöver du lära mer om canvas finns en bra genomgång på w3schools:
// http://www.w3schools.com/graphics/canvas_intro.asp
//-------------------------------------

// Efter DOM laddats körs javascriptet igång.
window.onload = function(){ 

	// Här hänvisas till canvasen på HTML-sidan och
	// grafikobjektet ctx instansieras.
	var canvas = document.getElementById("canvas");
	var ctx = canvas.getContext("2d");

	// Vi kollar hur stort vårt fönster är och sätter 
	// canvasens storlek så det fyller hela fönstret.
	var W = window.innerWidth, H = window.innerHeight;
	canvas.width = W;
	canvas.height = H;

	// Vi skapar en array för lagring av våra partiklar
	// och anger hur många partiklar som ska instansieras.
	var particles = [];
	var particle_count = 50;

	// Vi skapar en array för de namn vi vill slumpa fram för varje partikel
	var names = ['Kalle', 'Sven','Lisa'];

	// Instansiering av alla partiklar
	for(var i=0; i<particle_count;i++)
	{

		// Vi genererar samtliga egenskaper för den partikel som ska skapas
		var speed = {x: -2.5+Math.random()*5, y: -2.5+Math.random()*5};
		var location = {x: Math.random()*W, y: H/2};
		var radius = 2+Math.random()*4;
		var color =  "rgb(" + Math.floor(Math.random()*256) + "," + Math.floor(Math.random()*256) + "," + Math.floor(Math.random()*256) + ")";
		var name = names[Math.floor(Math.random()*names.length)];
		
		// Vi lägger till en ny partikel i arrayen particles
		// genom funktionen particle (konstrukorn)
		particles.push(new particle(speed, location, radius, color, name)); 
	
	}

	// En funktion som skapar partikelklasser (konstruktor). 
	// I JS skapas klasser som funktioner.
	function particle(speed, location, radius, color, name){

		this.speed = speed;
		this.location = location;
		this.radius = radius;
		this.color = color;
		this.name = name;

	}

	// En funktion som flyttar en partikel. Om partikeln försöker
	// röra sig utanför canvasen ändras dess riktnigen genom att 
	// göra värdet negativt. Partikeln studsar vid canvasens kanter.
	// argumentet p är en medskickad partikel.
	function move(p){

		// Den aktuella partikelns position förändras med hjälp av dess riktning (fart)
		p.location.x += p.speed.x;
		p.location.y += p.speed.y;
	
		// Koll att partikelns x-värde inte hamnar utanför vår canvas.
		// Om den är större än bredden (W) eller mindre än 0 ändrar vi
		// riktningens x-värde till negativt.
		// Observera att radien på cirkeln också lagts till så att partiklarna
		// studsar direkt då den nuddar kanterna.
		if(p.location.x + p.radius > W || p.location.x - p.radius < 0){
		return p.speed.x = -p.speed.x;
		}
		
		// Koll att partikelns y-värde inte hamnar utanför vår canvas.
		// Om den är stööre än höjden (H) eller mindre än 0 ändrar vi
		// riktningens y-värde till negativt.
		// Observera att radien på cirkeln också lagts till så att partiklarna
		// studsar direkt då den nuddar kanterna.		
		if(p.location.y + p.radius > H || p.location.y - p.radius < 0){
		return p.speed.y = -p.speed.y;
		}

	}

	// En funktion som kontrollerar om partiklar krockar.
	// Vid krock tas den minsta partikeln bort. 
	function collision(p){

		// Vi loopar igenom alla partiklar i arrayen för partiklarna
		// Observera att det är partikelobjekten vi arbetar med och
		// dess egenskaper är: speed, location, radius, color och name.
		particles.forEach(function(particle){

			// Vi kontrollerar krockar för aktuell partikel p för alla
			// partiklar utom sig själv i particles-arrayen (den krockar ju
			// alltid med sig själv annars) :D  
			if(p != particle){

				// Här jämför vi positionerna på aktuell partikel p med 
				// positionerna hos partiklarna vi stegar igenom i partikel-arrayen.
				// Man behöver kolla alla 4 riktningar för att kunna veta om en
				// partikel kolliderar med en annan. Till exempel om 
				// p:s x-värde + radie > particle:s x-värde - radien och samtidigt
				// p:s x-värde - radie < particle:s x-värde + radien kan man konstatera
				// att det är krock i x-led. På samma sätt måste även y-led kollas.
				// Är det även krock i y-led är det en kollision. 
				if(	p.location.y - p.radius < particle.location.y + particle.radius && 
					p.location.y + p.radius > particle.location.y - particle.radius && 
					p.location.x - p.radius < particle.location.x + particle.radius && 
					p.location.x + p.radius > particle.location.x - particle.radius){
					
					// Om radien på aktuell partikel p är mindre än den som den krockar 
					// med så tar vi bort den aktuella partikeln p ur partikel-arrayen
					if(p.radius < particle.radius){
						
						// Vi vill att radien på den största partikeln vid kollisionen
						// ska öka med radien/2 som belöning för att den är så stor och fin
						particle.radius += p.radius/2;

						// Vi tar bort aktuell partikel p som straff för att den
						// är så liten :)
						particles.splice(particles.indexOf(p),1);

					}

				}

			}

		});

	}

	// Draw-funktionen ritar om canvas, tex var 33:e millisekund.
	function draw(){

		// bakgrundsfärg
		ctx.fillStyle = "black";
		ctx.fillRect(0,0,W,H);
		
		//I loopen  under finns logiken för partiklarnas förändrade position mm.
		for(var i=0; i<particle_count;i++){
			
			// aktuell partikel p tilldelas ifrån arrayen som håller partiklarna
			var p = particles[i];

			// sätter färgen till den slumpmässigt genererade
			// ritar ut cirkeln för aktuell partikel
			// sätter färg till vit för namet så kontrasten blir bra
			// skriver ut det slumpade namnet
			ctx.beginPath();
			ctx.fillStyle = p.color;
			ctx.arc(p.location.x,p.location.y,p.radius,Math.PI*2,false);
			ctx.fill();
			ctx.fillStyle = "white";
			ctx.fillText(p.name,p.location.x,p.location.y);
			move(p);
			collision(p);
			// Loggar partiklarna i consolen så man kan se deras värden under körningen
			// Kul att kika vad som händer då
			//console.log(particles[i]);
		}

	}
	// 
	setInterval(draw, 33); //Uppdateringsfrekvens...
	
}