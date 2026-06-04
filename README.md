# melloapi
Hämta data om deltagare, namn på låtar och deltävlingar

Använder wordpress som cms, hämta data ifrån annan sida samt databas som endpointent använder sig utav. 

V-18: Startup, göra readme, planera  
V-19: Få igång backend med api calling. Inklusive databas, api endpoint.  
V-20: Frontend, fokusera på UI och UX.  
V-21: Flytta från lokalt till subdomän  
V-22: Finslipa små buggar mm.  
V-23: Skriv utvärdering  


Api dokumentation.  
Detta APIs syfte är att leverera data för mellodifestivalen 2027 och dess deltävlingar som låtar och deras artister.   
Format: JSON  
Metod: GET  
Bas-Urlen: https://melloapi.ntigskovde.se/mellotimer.json  


Ord lista:  
<img width="342" height="739" alt="bild" src="https://github.com/user-attachments/assets/439b1965-4f6c-4f65-bae1-032cd1775164" />  
Tournament: Namn på event  
Next_event: Ett objekt som innehåller info(date, time, arena, city, broadcasting_channel) om den närmaste deltävlingen.  
Schedule: En array som innehåller alla deltävlingar.  
    Artists: Underliggande array som innehåller alla artister.  
    
Arbetet använder fetch i JS för att hämta JSON datan samt displaya den på skärmen. Koden läser av next_event.date och jämför det med dagens datum(new Date()) för att bestämma vilken deltävling som ska visas.  

För att visa listan med deltävlingar använde jag en php function i functions.php för att använda mig av en shortcode. Php koden använder sig av file_get_contents() och sedan json_decode() för att göra om det till en array och loopar sen igenom arrayen och display det i en lista.
