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


You could make a copy of the original, and modify your copy with full assurance that your original would remain untouched.

That changed in PHP 5. Now when you assign an object to a new variable. The 2 variables remain inextricably linked.

$object1->title = "Title One";
$object2 = $object1;
$object2->title = "Title Two";
print $object1->title; // returns "Title Two"
In order to create an actual copy and not simply a reference to an existing object, PHP introduced the clone keyword.

$object1->title = "Title One";
$object2 = clone $object1;
$object2->title = "Title Two";
print $object1->title; // returns "Title One"

Now you can modify your newly cloned object to your heart's delight, while keeping intact your original.

**Interceptor**

**Abstrakta klasser och interface**
Abstrakt klass: En abstrakt klass fördefinierar funktionalitet men tillåter ändringar i SubClasses.
Interface: Ett Interface kan inteinnehålla funktionalitet, endast definitioner av en metod.


Difference between Abstract Class and Interface

Abstract Classes

An abstract class can provide some functionality and leave the rest for derived class

The derived class may or may not override the concrete functions defined in base class
The child class extended from an abstract class should logically be related
Interface

An interface cannot contain any functionality. It only contains definitions of the methods

The derived class MUST provide code for all the methods defined in the interface

Completely different and non-related classes can be logically be grouped together using an interface

**Nyckelordet Final**
Nyckelordet final används i relation till att begränsa funktioner och dess "ChildClasses".
Final kan användas för att begränsa ytterliga användningsområden för en funktion.

http://www.hackingwithphp.com/6/7/4/final

   **OO DESIGN**

**Förklara begreppen cohesion, coupling och orthogonality och hur de relaterar till varandra.**
**Polymorfism**
**Inkapsling (Encapsulation)**
