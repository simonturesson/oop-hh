**Konstruktor**
En konstruktor skapas i en klass. Konstruktorn kan användas för att ge ett objekt "properties", som kan användas vid instansiering av objektet.

Fördelen med att använda en konstruktor är att vi kan samla funktioner som ger objekt properties på ett och samma ställe och på så sätt slippa renundans.

**Arv**
En klass kan ärva en annan klass. Med arv så har vi en basklass/superklass och den ärvande klassen är en subklass. Subklassen specialiserar eller utökar basklassen.

Fördelen med att använda subklasser är att vi kan instansiera funktioner som redan används, men använda dem till en specifik funktion.


Ett exempel är hur vi kan ge en grundklass ett antal funktioner för att utföra något. Sedan kan vi återanvända funktionen fast använda tex andra värden eller i en annan kontext.
På så sätt skriver vi bara funktionen en gång, men återanvänder den flera gånger. För att minska renundans. 

**Synlighet(Private, Public, Protected)**
Private: Klassen kan inte används för att anropa metoder, uppdatera medlemsvariabler eller läsa medlemsvariabler. Kan INTE användas i subklasser. Endast i den klassen som den är i. 
Public: Kan läsa och uppdatera medlemsvariabler samt anropa metoder.
Protected: Påverkar synligheten i arv-hierarki. Kan användas i subklasser. Kan inte nås utanför sub-klasser

Kan användas för variabler och metoder

**Felhantering (Exceptions, Try & Catch)**
---- Exceptions: Är en klass för att hitta varianter, undantag och fel. ----

Try: Försöker köra kod som kanske får ett "undantag", som sedan kan fångas in som ett fel med Catch.
Catch: Fångar in fel i koden från "Try" och fortsätter att köra programmet.

Med hjälp av try & catch kan vi ge användaren feedback på till exempel input. Ett konktret exempel kan vara i ett formulär, där användaren inte kan gå vidare om ett fält inte är korrekt ifyllt, eller innehåller rätt antal tecken etc.

**Kloning inom PHP**
Med kloning kan vi klona hela objekt som inte refererar till originalobjektet's innehåll.
Kopian av orginalet, kan vi modifiera innehållet i och med full säkerhet veta att originalet inte försötrs. 


$object1->title = "hej";
$object2 = clone $object1;
$object2->title = "hej2";
print $object1->title; // returns "hej"


**Interceptor**
Interceptors är en handfull fördefinierade metoder som kan användas i klasser.
Exempel på några av metoderna är:  __construct(), __get() , __set(), , __unset(), __isset(), __call() etc... 


**Abstrakta klasser och interface**
Abstrakt klass: En abstrakt klass fördefinierar funktionalitet men tillåter ändringar i SubClasses.
Interface: Ett Interface kan inteinnehålla funktionalitet, endast definitioner av en metod. Interface kan ses som ett tomt skal. Där det finns instruktioner om metoder, men utan innehåll. Interfacet i sig kan inte göra något, men det bidrar till ett mönster för att fortsätta utvecklingen.

**Nyckelordet Final**
Nyckelordet final används i relation för att definiera att en klass eller funktion inte kan skrivas över av en sub-klass.
Effektivt för att begränsa andra programmerare att modifiera koden på annat sätt an de du tänkt från början.
Man kan även begränsa så att det inte går att skapa sub-klasser på klassen/funktionen.

   **OO DESIGN**

**Förklara begreppen cohesion, coupling och orthogonality och hur de relaterar till varandra.**
Orthogonal OO design är grundat på "Cohesion" och "Coupling".  De ska hjälpa till att skapa ett förhållningssätt
till hållbar kod. Kod & design som kan byggas på och växa, utan att grundläggande funktioner måste förstöras, byggas om eller modifieras.


Coupling - Vi vill när vi designar mjukvara undvika coupling så långt vi bara kan. Helst undivka det helt. 
Coupling innebär att kod blir beroende av annan kod för att fungera. Att element får en löst sammansatt koppling
som kan vara svår att föjla upp och förstå om en programmerare återvänder till koden långt efter att den skrivits. Coupling kan leda
till mycket refaktorisering av kod om förändringar behöver göras i framtiden.

Cohesion - Är ett mått på vikten av en funktion i en mjukvara. Beroende på hur många relationer den har och vad som bidrar till dess funktionalitet.
I en utopi bugger vi bara komponenter som är självdrivande men ändå inte skapar rendunant kod. Vi vill skapa kod som är föränderlig och lättförståelig. 
För att undvika problem med cohesion försöker vi alltid att undvika generiska klassnamn, och i variabler och klasser beskriva vad som händer, med hjälp av namnet.
På så sätt undviker vi även problemet med att klassnamn och variablenamn återanvänds i andra delar av koden.

**Polymorfism**
Poymorfism är möjligheten att använda samma "interface" i flera olika kontext. (För olika datatyper)
Tex: 
Om vi har objektet "lärare". 
 - Lärare har en relation till Studenter
 - Lärare har en annan relation till sina Chefer. 
 
 Läraren's objekt använder samma "interaface", fast i flera olika kontexter (Relation till student/chef)(datatyper).
 
**Inkapsling (Encapsulation)**
Inkappsling innebär att vi kan packa in flera metoder i en klass.
I en inkapsling kan vi samla objekt och metoder, och skydda datan i objektet från andra objekt
En inkapsling kan liknas vid användande av vardagliga produkter i vår omvärld. 
Tex: 
En TV har en "inkapsling"( ett skal / skydd ), men vi kan komma åt funktioner i TV'n utan att ta bort skalet, genom att använda
en fjärrkontroll. Allt i inkapslingen är skyddat, men vi kan komma åt grundläggande funktioner som "utvecklaren" valt att
låta oss kontrollera. 
