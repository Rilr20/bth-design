---
Title: Analysis 
Description: My report for this course.
Template: analysreport
---
Laddningsrapport om 3 hemmsidor
=======================

Här kommer laddningstider att analyseras på tre olika hemmsidor och kommer bestämma vilken av de som är bäst. 

Urval
-----------------------
Jag har valt att analysera Mediamarkt, Elgiganten och NetOnNet. Jag valde dessa tre sidorna för att jag har själv använt de innan. 

Metod
-----------------------

Jag kommer att använda devtools som finns i webbläsaren. Jag tänker göra testet på framsidan, på en kategorisida och på en produktsida. Testet kommer göras 3 gånger med adblock på och 3 gånger med det av. För att försäkra att det inte blir större skillnader mellan dem. Detta görs för att adblock kanske blockerar resurser som tar lång tid att bearbetas. Jag kommer även skriva ner hur många requests, data som skickas och dataresurser som finns. Detta görs bara på första testet då det kommer inte ändra sig i de andra testerna. När alla 3 tester är klara så räknas medelvärdet ut på laddningstiden. 

Resultat
-----------------------
<h3>MediaMarkt</h3>
Mediamarkt fick en långsam 3.905 sekunder på att ladda framsidan, kategorisidan fick 4.21 och produktsidan fick 5.49. Detta är väldigt långsamt vilket ger dem en dålig poäng när det kommer till Pagespeed. Poängen på dator är mycket bättre jämfört med mobilen men det är ändå en dålig poäng.


<h3>Elgiganten</h3>
Alla elgigantens sidor laddas på lite mer än 3 sekunder. I mitt test så laddades produkt sidan nästan dubbelt när man hade adblock på och då hade sidans resurser också sjukigt med 1.2mb. Deras pagespeed på datorn fick en stabil 75 på alla sidorna. Mobilsidorna fick 36-43 i poäng. 

<h3>NetOnNet</h3>
NetonNet var väldigt snabb att ladda deras sidor var var små då den största var bara 2.9mb. Detta resulterade i en väldigt bra 90+ i framsidan och kategorisidan men deras produktsiad fick bara 75 i poäng från pagespeed.  

<h3>Felkällor:</h3> 
På kategorisidorna så hade alla tre sidorna ett bildspel när detta bildspelet byter bild så uppdateras datan i nätverksfliken i devtools. Då får den ny sluttid. Detta kan då påverka resultat negativt för sidorna i min analys. NetOnNet hade även ett bildspel på förstasidan och elgiganten hade det på produktsidan. Internethastigheten kan också vara en faktor i hur snabbt man kan ladda en hemsida. Att göra testet bara tre gånger skapar kanske inte det mest korrekta svaret. Detta för att den kan ske avvikelser som då gör medelvärdet väldigt högt eller väldigt lågt. 

Analys
-----------------------

Diskutera och analysera de resultaten du fann.

Mediamarkt är den sidan som är långsammast i mina tester då medelvärdet är högre än alla andra. Detta kan bero på att deras sidor är flera megabyte stora och iblande nästan 10mb. Detta leder till en låg poäng på Pagespeed testet. Deras mobilsidor är väldigt bristfälliga då de inte ens får en tvåsiffrig poäng. Alla sidorna har väldit dålig poäng på mobilsidan det är bara NetOnNet som får över 50 poäng och då är det på starsidan. Det är kanske något de har lagt tid på att fixa för att en mobilanvändare ska få en ganska bra intryck av de. 

Om man ska gå efter att man har 3 sekunder på sig för att få ett intryck på framsidan så är det bara NetOnNet som klarar det testet. Elgiganten kommer då tvåa med 0.8sekunder efter NetOnNet och mediamarket kommer sist och de är 1.3sekunder långsammare än förstaplatsen. 


När man läser problemen som uppstår i Mediamarkts pagespeed så är det väldigt mycket som kan fixas för både datorn och mobilen. Mobilen har tydligen javascriptkod som inte används vilket tar upp nästan 4s av tiden att ladda. Det är också ett problem när det kommer till datorversionen men det är inte lika allvarligt. 

På Elgiganten framsida så kan de läsa in viktiga resurser i förväg då kommer detta förbättra för både mobilen och för datorn. Det har samma problem som Mediamarkt med att de har javascriptkod som inte används. 

NetOnNet har inte mycket att förbättra när det kommer till datorn men de kan också läsa in resurser i förvävg och tabort oanvänd css och javascript. Deras mobilsida hade också behövt det. 

NetOnNet ser ut som en klar vinnare av dessa tre. Deras sida är markant snabbare än alla andra och de har en mycket hög poäng på datorn men deras mobilpoäng är i snitt med elgigatens poäng bland mobilsidor. Elgiganten kommer två då deras hastighet i att ladda är snabbare än Mediamarkt. Mediamarkt är på sistaplats då deras hemmsida är långsammast och deras pagespeedpoäng är väldigt dålig när det kommer till mobilen och deras datorpoäng är inte så mycket bättre än mobilpoängen. 

Personligen är min gräns för absolut laddningstid runt 3-5 sekunder. Jag kan tolerera 5 sekunder om det är förstasidan som laddas. Men om jag är inne på en hemsida så förväntar jag mig att undersidorna laddar snabbare än vad det tar för förstasidan att ladda. Själv så tycker jag att MediaMarkts framsida laddar lite för långsamt för mig. Deras undersidor är också långsamam men de känns ändå snabbare än vad förstasidan är. Elgiganten är väldigt snabb och det känns stabilt att gå mellan deras sidor. NetonNet är otroligt snabb efter att ha tittat på de andra och man får fram informationen på första sidan direkt. Man kan säga detsamma när man går till de andra sidorna de har. 

Referenser
-----------------------

[Snapshots av webbsidorna](snapshot)

![Excel-ark](%base_url%/assets/img/excel.png){.excel}
[Excel-ark](%base_url%/assets/img/excel.png)

[Elgiganten Förstasida](https://www.elgiganten.se/) 
[Elgiganten Kategori](https://www.elgiganten.se/catalog/tv-bild/se_tv/tv) 
[Elgiganten Produkt](https://www.elgiganten.se/product/tv-bild/tv/149441/samsung-50-tu7175-4k-uhd-smart-tv-ue50tu7175) 

[Elgiganten Pagespeed Förstasida](https://developers.google.com/speed/pagespeed/insights/?url=https%3A%2F%2Fwww.elgiganten.se%2F)
[Elgiganten Pagespeed Kategori](https://developers.google.com/speed/pagespeed/insights/?url=https%3A%2F%2Fwww.elgiganten.se%2Fcatalog%2Ftv-bild%2Fse_tv%2Ftv)
[Elgiganten Pagespeed Produkt](https://developers.google.com/speed/pagespeed/insights/?url=https%3A%2F%2Fwww.elgiganten.se%2Fproduct%2Ftv-bild%2Ftv%2F149441%2Fsamsung-50-tu7175-4k-uhd-smart-tv-ue50tu7175)

[NetOnNet Förstasida](https://www.netonnet.se/) 
[NetOnNet Kategori](https://www.netonnet.se/art/ljud-bild/tv)
[NetOnNet Produkt](https://www.netonnet.se/art/ljud-bild/tv/70tumochstorre/philips-70pus854512/1013430.16252/)
[NetOnNet Pagespeed Förstasida](https://developers.google.com/speed/pagespeed/insights/?url=https%3A%2F%2Fwww.netonnet.se%2F)

[NetOnNet Pagespeed Kategori](https://developers.google.com/speed/pagespeed/insights/?url=https%3A%2F%2Fwww.netonnet.se%2Fart%2Fljud-bild%2Ftv)
[NetOnNet Pagespeed Produkt](https://developers.google.com/speed/pagespeed/insights/?url=https%3A%2F%2Fwww.netonnet.se%2Fart%2Fljud-bild%2Ftv%2F70tumochstorre%2Fphilips-70pus854512%2F1013430.16252%2F)

[MediaMarkt Förstasida](https://www.mediamarkt.se/) 
[MediaMarkt Kategori](https://www.mediamarkt.se/sv/category/_tv-510055.html)
[MediaMarkt Produkt](https://www.mediamarkt.se/sv/product/_philips-70-smart-led-tv-med-4k-uhd-70pus7555-12-1323595.html)

[MediMarkt Pagespeed Förstasida](https://developers.google.com/speed/pagespeed/insights/?url=https%3A%2F%2Fwww.mediamarkt.se%2F)
[MediMarkt Pagespeed Kategori](https://developers.google.com/speed/pagespeed/insights/?url=https%3A%2F%2Fwww.mediamarkt.se%2Fsv%2Fcategory%2F_tv-510055.html)
[MediMarkt Pagespeed Produkt](https://developers.google.com/speed/pagespeed/insights/?url=https%3A%2F%2Fwww.mediamarkt.se%2Fsv%2Fproduct%2F_philips-70-smart-led-tv-med-4k-uhd-70pus7555-12-1323595.html)

Övrigt
-----------------------

Rikard Larsson