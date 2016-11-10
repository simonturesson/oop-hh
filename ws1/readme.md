**Hej**
Här kommer min workshopuppgift och kommentarer till frågorna. Uppgifterna är lösa och besvarade. Jag tror dock att lösning för kollisionen skullle kunna förbättras för prestanda, men har inte lagt tid på det.


**Uppgift 1: En funktion skall anropas som gör att alla objekten stannar på den definierade canvas-ytan. Ange nedan steg för steg hur du går till väga. Vilka lösningar finns det?**

Här börjar vi med att instansiera klassen med `id = canvas.` 
Sedan definierar vi storleken på fönstret och passar vidare variablen till `"canvas.width"` och `"canvas.height".` 
Därefter kollas den aktuella positionen av varje partikel. 
Om den aktuella partiklens position har ett `X eller Y (Width & Height)` värde som går utanför vår canvas så adderar vi ett negativ värde så att partiklen byter riktning.
För att kompensera för radien på partiklen så adderar vi den, annars hade partlens mitten räknats som att partiklns kant. 


----------


**Uppgift 2: Varje objekt skall ha en egen färg som den behåller under sin livslängd. Du väljer själv var du lägger koden för ändamålet. Ange nedan steg för steg hur du går till väga.**

Jag började med att placera färg generator inuti draw funktionen, men iom att canvas ritas om var 33e millisec så blinkar alla partiklar i olika färger. 
Därför testade jag att placera den utanför drawfunktionen, men då fick alla partiklar samma färg. 
Så för att fesöka färgfunktionen skapade jag en array som randomatiserade färgerna till partiklarna och assignade varje färg till partiklarna slumpartat, 
i en particle funktion. 
Men koden kändes onödigt stor för den lilla funktionen så därför använde jag mig av konstruktorn som introduceras i uppgift 3. Med hjälp av konstruktorn kunde jag effektivisera min kod och tog hjälp av `Math.Rrandom` som introducerades i lösningsförslaget.


----------


**Uppgift 3: Skapa nu en konstruktor för partikel-klassen. Hur påverkar det genereringen av partikelobjekt och dess data? Ge nu partiklarna ytterligare en egenskap, ett namn! Ange nedan steg för steg hur du går till väga.**

Uppgift 3 gick relativt enkelt att lösa då jag redan hade en array för färgerna som jag använt innnan, så jag skrev om arrayen till att innehålla namn, och använde sedan den på liknande sätt som jag använt color i konstruktorn. 
jag refaktoriserade koden och lade in `speed, location och radius` i konstruktiorn för att få en lättläst och lättarbetad kod. Att separera funktioner och bygga klasser & variablar som går att återanvända får vi en kod med lite renundans och effektivare tolkning. 


----------


**Uppgift 4: Skapa händelser vid kollision eller annan typ av interaktion mellan två objekt. (kan vara objekt som försvinner, studsar, blir större) Ange nedan steg för steg hur du går till väga.**

Collision funktionen var klurigast. Här var det viktigt att tänka på hur räkningen skulle ske beroende på storlek av partiklarna, vem som skulle äta vem osv. 

Först loopas partiklararrayen igenom. 
Partiklen `(p)` är den som jämnförs med de andra som finns på canvas ytan.
Med hjälp av location ( och adderat radien) jämnförs positionerna på den aktuella partiklen. Med hjälp av en if sats i en if sats bestämmer vi sedan vad som ska hända.
Om `(If)` radien på en partikel är större än den andra som krockar med partiklen så tas partiklen ut ur arrayen och radien ökas med 2. Den minsta partiklen tas bort. 
