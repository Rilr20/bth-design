---
Title: Analysis 
Description: My report for this course.
Template: analysreport
---
Webbplatsdesign och aktuella trender
=======================

Analys av webbplatsers design med aktuella trender i fokus.

Urval
-----------------------

Jag har valt ut 3 kommunsidor och de är Trelleborg, Lund, Uppsala. Jag tittade på SKRs lista och valde ut de 3. Jag valde att välja 3 ganska stora kommuner i folkmängd.

Metod
-----------------------

Jag kommer att titta på laddningstiderna. Jag kommer även titta på tillgängligheten. Detta är 2 saker som the digital listade om designtrender.

Laddningstiderna görs på 3 försök och medelvärdet skrivs ner. Tillgänglighet kommer delvis tittas i lighthouse resultatet. Jag kommer att använda google lighthouse och dev-tools för att ta rdea på värderna 

Resultat
-----------------------

<h2>Lund</h2>
Tillgängligheten var 90 poäng på både mobil och dator. Det som fallerar är att h-taggarna inte går från störst till minst storlek. Länkarna har dåliga namn.
Hastigheten på lunds hemsida är 7,99s på datorn och 7,79 på mobilen.

<h2>Uppsala</h2>
Tillgängligheten hos uppsala fick maxpoäng på mobil och dator.
Hastigheten på mobilen var 1,8s och på datorn var det 1,53s

<h2>Trelleborg</h2>
Tillgänglighet får 98 poäng. De två poängen som fattas försvinner för att en div som inte syns har ett dåligt ARIA input field namn. 
Hastigheten hos trelleborg är 1,5s på dator och 1,70 på mobilen


Analys
-----------------------
Lunds hemmsida var långsammast då de har inte optimiserat bilderna som visas. Det är även varför deras hemmsida är över 10mb stor. Om de hade gjort bilderna mindre då hade gått mycket fortare att ladda. Uppsala och Trelleborg hade väldigt få bilder på sina sidor och laddade då väldigt snabbt. Trelleborgs sida laddade lite snabbare än uppsala fast den är större. På grund av att trelleborg använder http2 protokollet. 

Tillgängligheten hade man förtväntat sig skulle vara 100 på alla 3 sidorna när de är kommunala. Det var bara Uppsala som fick 100 poäng. Trelleborg har en div som inte syns och får avdrag på grund av ARIA input namnet. Tillgängligheten på lunds sida var den sämsta och detta på grund av att texten om corona är en h4 och inte en h2:a. 

Trelleborgs och Uppsalas hemmsidor var snabbast då de inte har få bilder men bilderna de har är optimerade. Lund var långsam och var sämst när det kom till tillgänglighet. Uppsala var den sida som var snabbast och hade 100 tillgänglighet. Lund är sidan som inte riktigt följer designtrenderna med snabbladdningstid och tillgänglighet. 

Referenser
-----------------------
![Excel-ark](%base_url%/assets/img/excel2.png)
[Excel-ark](%base_url%/assets/img/excel2.png)

[Snapshots av webbsidorna](snapshot)

[SKR](https://skr.se/tjanster/kommunerochregioner/kommunerlista.1246.html)

[Design trends](https://www.theedigital.com/blog/web-design-trends)

[Uppsala](https://www.uppsala.se/)

[Trelleborg](https://www.trelleborg.se/)

[Lund](https://www.lund.se/#/)

Övrigt
-----------------------

Rikard Larsson

