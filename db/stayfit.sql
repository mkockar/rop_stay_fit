-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: Út 24.Jan 2023, 23:46
-- Verzia serveru: 10.4.24-MariaDB
-- Verzia PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `stayfit`
--
CREATE DATABASE IF NOT EXISTS `stayfit` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_slovak_ci;
USE `stayfit`;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `balicek`
--

CREATE TABLE `balicek` (
  `IDbalicek` int(11) NOT NULL,
  `nazovBalicka` varchar(50) COLLATE utf8mb4_slovak_ci NOT NULL,
  `cena` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `balicek`
--

INSERT INTO `balicek` (`IDbalicek`, `nazovBalicka`, `cena`) VALUES
(1, 'Zlatý balíček', 200),
(2, 'Platinový balíček', 300),
(3, 'Bronzový balíček', 100);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `baliceksluzby`
--

CREATE TABLE `baliceksluzby` (
  `IDbalicek` int(11) NOT NULL,
  `IDsluzba` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovak_ci;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `cvikvybavenie`
--

CREATE TABLE `cvikvybavenie` (
  `IDcvik` int(11) NOT NULL,
  `IDvybavenie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `cvikvybavenie`
--

INSERT INTO `cvikvybavenie` (`IDcvik`, `IDvybavenie`) VALUES
(1, 1),
(2, 5),
(3, 1),
(4, 2),
(5, 1),
(6, 2),
(7, 1),
(8, 1),
(9, 1),
(10, 2),
(11, 1),
(12, 1),
(13, 1),
(14, 2),
(15, 6);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `cviky`
--

CREATE TABLE `cviky` (
  `IDcvik` int(11) NOT NULL,
  `cvik` varchar(50) COLLATE utf8mb4_slovak_ci NOT NULL,
  `postup` text COLLATE utf8mb4_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `cviky`
--

INSERT INTO `cviky` (`IDcvik`, `cvik`, `postup`) VALUES
(1, 'Diamantové kliky', 'Srovnáme se do základní polohy kliku s lokty opřenými o hrudník a dlaně jsou pod tělem u sebe. Nejsme nijak prohlí ani ohlí. Máme zpevněné lopatky i celý spodek těla.\r\nS nádechem začneme klesat kontrolovaným tempem směrem k zemi. Zastavíme se pár centimetrů nad zemí, kde se na malou chvíli zastavíme a potom s výdechem vystartujeme zpátky do původní pozice. Soustřeďte se na vykonávání celého pohybu za pomocí tricepsů.\r\nDole budou protažené a ve vrchní části pohybu je pořádně zatneme.'),
(2, 'Dipy na bradlách', 'Postavíme se k bradlům, která jsou trochu širší. Pokud bychom měli ruce příliš u těla, zapojovali bychom hodně tricepsy.\r\nPo celou dobu pohybu budeme myslet na zpevněný střed těla, mírně vyšpulený hrudník a scvaklé lopatky. Díváme se rovně před sebe.\r\nLokty nebudeme tlačit úplně k tělu, protože tak bychom zapojili přednostně triceps. Lokty budeme tlačit lehce od těla.\r\nNohy nebudeme tlačit dopředu, abychom byli co nejrovnější, to by opět zapojilo přednostně tricepsy. Můžeme nechat tělo mírně v náklonu.\r\nVyskočíme nahoru, zpevníme se. S nádechem začneme klesat tak hluboko, jak nám to mobilita ramen dovolí a snažíme se soustředit na zapojení a protažení prsního svalstva.\r\nPo dosažení maximální hloubky bez porušení zpevnění těla začneme pomyslným tlakem loktů k tělu a soustředěním se na kontrakci hrudníku stoupat směrem vzhůru do startovní pozice.\r\nVáhu přidávejte s rozumem. Musíte mít nejprve vychytanou techniku. Neriskujte zbytečně poranění.\r\nČím více je hrudník během cvičení předkloněn, tím více se posilují dolní vlákna velkého svalu prsního. Naopak, čím svislejší je při pohybu poloha trupu, tím více se zapojuje trojhlavý sval pažní. Tento cvik je výborný na strečink velkého svalu prsního a pro zvyšování ohebnosti pletence ramenního, nehodí se však pro začátečníky, protože vyžaduje jistou dávku síly. Za účelem dosažení větší síly a objemu svalů si zdatní jedinci mohou na břicho připnout opasek s přídatnou zátěží, popřípadě na nohy dodatečná závaží.'),
(3, 'Drep s výskokom', 'Postavíme se na šíři našich ramen a vytočíme špičky mírně směrem ven. \r\nPředpažíme, abychom usnadnili rozložení váhy a lépe drželi balanci. \r\nPohyb začneme provádět tak, že si pomyslně představíme lavičku kousek za námi a budeme si na ni chtít sednout. \r\nPohyb začne první vycházet pohybem hýždí směrem vzad. Mírně se začneme předklánět a po chvilce začneme klesat směrem dolu i s pokrčením v kolenou. Naše kyčle, kolena a celé tělo musí pracovat dohromady. \r\nJakmile dosáhneme spodní pozice, tak s výdechem obrátíme celý postup a pokusíme se vyskočit směrem vzhůru, jako kdybychom chtěli vyskočit na nějakou zídku a můžeme ve vzduchu i lehce přitáhnout kolena směrem vzhůru.\r\nMyslete na rovná záda, nepropadající se kolena ani kotníky. Pokuste se dopadnout do stejné pozice, ve které jsme startovali. Nespěchejte, znovu se srovnejte a pohyb vykonejte poctivě zcela od začátku.'),
(4, 'Glute bridge', 'Lehneme si na záda, pokrčíme nohy přibližně do 90 stupňů. \r\nRuce jsou opřené o zem, stejně jako chodidla. Máme v nich pevnou podporu společně s vrchní částí našich zad. \r\nPohyb začne vycházet v kyčlích. Tlačíme je s výdechem směrem vzhůru do stropu tak vysoko, jak to jen půjde. \r\nAž se dostaneme do maximální pozice, hýždě zatneme a pohyb obrátíme s nádechem do původní pozice. \r\nOpakujeme podle počtu požadovaných opakování, v klidu s kontrolovaně, bez zbytečných škubavých pohybů.'),
(5, 'Klasický klik', 'Zapojíme kromě prsou i triceps, ramena, stabilizační svalstvo, střed těla.\r\nDostaneme se do základní pozice kliku a začneme se srovnávat\r\nJsme opření o dlaně, dlaně jsou přibližně 5-10 cm dál než naše ramena. Lokty svírají s tělem přibližně 45 stupňový úhel.\r\nSesadíme a scvakneme lopatky směrem k sobě, abychom stabilizovali vršek těla, měli ramena ve zdravé pozici a vystavili hrudník k práci. Za žádných okolností nebudeme tuto pozici uvolňovat a dokončovat část pohybu na úkor posunutí ramen.\r\nZpevníme břišní svalstvo a budeme v neutrální pozici. Nebudeme ohlí ani prohlí.\r\nZatneme hýždě a stehna. Tím stabilizujeme i zbytek těla a pomůže nám to držet pevnou a stabilní polohu těla.\r\nS nádechem začneme pomalu klesat směrem k zemi až do protažení prsních svalů. V této pozici můžeme půl sekundy setrvat. S výdechem a s pomyslným tlačením loktů směrem k sobě začneme stoupat směrem od země do původní polohy, kde opět můžeme na půl sekundy zůstat a prsní svalstvo zatnout\r\nSnažíme se zapojit prsní svalstvo. Představujeme si jeho práci.'),
(6, 'Klik na kolenách', 'Méně náročná varianta klasického kliku. Zapojení svalů je podobné. Nebude tak těžké udržet stabilitu těla.\r\nZapojíme kromě prsou i triceps, ramena, stabilizační svalstvo, střed těla.\r\nDostaneme se do základní pozice kliku a začneme se srovnávat s dlaněmi a koleny na zemi.\r\nJsme opření o dlaně, dlaně jsou přibližně 5-10 cm dál než naše ramena. Lokty svírají s tělem přibližně 45 stupňový úhel.\r\nSesadíme a scvakneme lopatky směrem k sobě, abychom stabilizovali vršek těla, měli ramena ve zdravé pozici a vystavili hrudník k práci. Za žádných okolností nebudeme tuto pozici uvolňovat a dokončovat část pohybu na úkor posunutí ramen.\r\nZpevníme břišní svalstvo a budeme v neutrální pozici. Nebudeme ohlí ani prohlí.\r\nZatneme hýždě a stehna. Tím stabilizujeme i zbytek těla a pomůže nám to držet pevnou a stabilní polohu těla. Tato část bude oproti klasickému kliku jednodušší.\r\nS nádechem začneme pomalu klesat směrem k zemi až do protažení prsních svalů. V této pozici můžeme půl sekundy setrvat. S výdechem a s pomyslným tlačením loktů směrem k sobě začneme stoupat směrem od země do původní polohy, kde opět můžeme na půl sekundy zůstat a prsní svalstvo zatnout\r\nSnažíme se zapojit prsní svalstvo. Představujeme si jeho práci.'),
(7, 'Klik na úzko', 'Srovnáme se do základní polohy kliku s lokty opřenými o hrudník a dlaněmi na šíři ramen. \r\nNejsme nijak prohlí ani prohlí. Máme zpevněné lopatky i celý spodek těla.\r\nS nádechem začneme klesat kontrolovaným tempem směrem k zemi. Zastavíme se pár centimetrů nad zemí, kde se na malou chvíli zastavíme a potom s výdechem vystartujeme zpátky do původní pozice. \r\nSoustřeďte se na vykonávání celého pohybu za pomocí tricepsů. Dole budou protažené a ve vrchní části pohybu je pořádně zatneme.\r\nOpakujeme podle počtu požadovaných opakování'),
(8, 'Klik s nohami na lavičke', 'Těžší varianta oproti klasickému kliku. Přesuneme větší nápor na vršek hrudníku a ramena, což bývají malinko slabší části. Méně zapojíme spodek hrudníku.\r\nZapojíme kromě prsou i triceps, ramena, stabilizační svalstvo a střed těla.\r\nDostaneme se do základní pozice kliku a začneme se srovnávat dlaněmi na zemi a s nohami na lavičce.\r\nJsme opření o dlaně, dlaně jsou přibližně 5-10 cm dál než naše ramena. Lokty svírají s tělem přibližně 45 stupňový úhel.\r\nSesadíme a scvakneme lopatky směrem k sobě, abychom stabilizovali vršek těla, měli ramena ve zdravé pozici a vystavili hrudník k práci. Za žádných okolností nebudeme tuto pozici uvolňovat a dokončovat část pohybu na úkor posunutí ramen.\r\nZpevníme břišní svalstvo a budeme v neutrální pozici. Nebudeme ohlí ani prohlí.\r\nZatneme hýždě a stehna. Tím stabilizujeme i zbytek těla a pomůže nám to držet pevnou a stabilní polohu těla.\r\nS nádechem začneme pomalu klesat směrem k zemi až do protažení prsních svalů. V této pozici můžeme půl sekundy setrvat. S výdechem a s pomyslným tlačením loktů směrem k sobě začneme stoupat směrem od země do původní polohy, kde opět můžeme na půl sekundy zůstat a prsní svalstvo zatnout\r\nSnažíme se zapojit prsní svalstvo. Představujeme si jeho práci.'),
(9, 'Plank na lakťoch', 'Mírně pokročilá varianta planku. Zaujmeme polohu kliku, avšak s opřením na loktech. Tato verze je náročnější než základní pozice v kliku.\r\nZpevníme celou postavu. Zatneme břicho, hýždě a spodní záda. Celé tělo udržujeme v rovné linii. Neprohýbáme se ani směrem dolu, ani směrem nahoru. Snažíme se naučit tělo stabilizovat pouze ve správné pozici.\r\nPohled směřujeme do země tak, aby hlava byla v prodloužení páteře. Nedíváme se ani dopředu, ani příliš do země.\r\nV této pozici setrváme dle dispozic jedince v rozmezí 15 až 30 sekund.\r\nPokud je cvik pro vás lehký, je možné, aby vám sparing partner přidal závaží na oblast pánve.\r\nSprávným provedením tohoto cvičení zpevňujeme střed těla a tím pádem potenciálně zlepšujeme výkony u komplexních cviků jako jsou mrtvé tahy, dřepy a tlaky. Zároveň můžeme odstranit bolesti v této oblasti.\r\nNesnažte se posouvat na vyšší level plankových pozic, pokud nezvládáte techniku klasického planku. Výsledek takových pokusů je vám většinou akorát na škodu pro vaše zdraví.'),
(10, 'Superman', 'Lehneme si na břicho, nohy máme pár centimetrů od sebe a ruce natažené směrem dopředu. Vše leží na zemi. Pohled směruje vpřed.\r\nS výdechem zvedneme nohy pár centimetrů do vzduchu, současně s tím i naše ruce. Ruce se snažíme tlačit i mírně dopředu.\r\nVe zvednuté pozici zůstaneme na 2-3 sekund a potom ses nádechem vracíme do původní polohy na zem.\r\nSnažte se cvik vykonávat pomalu, kontrolovaně a opravdu dávejte důraz na podržení zvednuté pozici. '),
(11, 'Výpady vzad', 'Postavíme se na šíři našich ramen a zúžíme ho o 10 cm. Stojíme pěkně rovně.\r\nPohyb začneme provádět tak, že si pomyslně představíme něco na naší botě a chceme se k tomu dostat. Pohyb začne první vycházet pohybem hýždí směrem vzad, následně se začneme předklánět a jednou nohou začneme zakročovat směrem vzad.\r\nTím začneme klesat až do spodní pozice. Po dosažení spodní pozice celý pohyb obrátíme a dostaneme se do původní pozice. Kde můžeme nohu, na které celou dobu stojíme pořádně zatnout. Můžete opakovat pořád na stejnou stranu a nebo strany střídat.\r\nMyslete na rovná záda, nepropadající se kolena ani kotníky. Pokuste se dostat do stejné pozice, ve které jsme startovali.'),
(12, 'Sumo drepy', 'Sumo dřep začínáš ve stoje\r\nzpevni záda a břicho, hlava je vzpřímená a pohled míří dopředu\r\nnohy dej od sebe. Šířka rozestupu je víc jak šířka ramen.\r\nšpičky chodidel vytoč mírně ven\r\nPOHYB DOLE: pánev směřuje dolů k podložce\r\nruce jsou volně podél těla\r\npři pohybu dolů se nadechuješ\r\nnejnižší poloha je, když jsou stehna rovnoběžně s podložkou. Správně zvolený rozestup ti nedovolí jít s pánvi níže.\r\nPOHYB HORE: z nejnižší polohy jdi nahoru opět do základní pozice\r\npři pohybu nahoru pokrč ruce a sepni je v úrovni hrudníku\r\npři pohybu nahoru vydechuj'),
(13, 'Výpady', 'Postavte sa rovno, vystrite chrbát a urobte jednou nohou krok vpred. Nohy by spolu so zemou mali tvoriť trojuholník. Každá noha by so zemou mala zvierať uhol približne o veľkosti 45°.\r\nPokľaknite si zadnou nohou k zemi tak, aby vaše predné koleno dosiahlo úroveň prstov na nohe. Nemusíte sa však báť, ak presiahnete úroveň prstov, je to otázka flexibility nášho tela.\r\nPamätajte, že pokľaknutie by nemalo byť úplné. Koleno zadnej nohy by sa nemalo dotknúť zeme. Môžete ho mierne zohnúť. Pri správnej technike by ste mali pocítiť kvadricepsy na zadnej nohe. V spodnej polohe by mali byť obe kolená zohnuté približne do 90° uhlu.\r\nZdvihnite sa na päte prednej nohy a urobte krok vzad – dostanete sa tak do pôvodnej polohy, v akej ste začínali. Mali by ste cítiť gluteály a kvadricepsy. Nezabudnite vždy precvičiť aj druhú nohu.'),
(14, 'Skracovačky', 'Ľahnite si na chrbát. Prekrížte si ruky na hrudníku a nohy majte pokrčené v kolenách a chodidlá na zemi. Vykonajte kontrakciu brušných svalov tak, aby sa trup \"zbalil\" smerom dopredu. Pohyb vykonávajte iba minimálny, vychádzajúci hlavne z brucha. Nikdy sa nesnažte pohyb vykonávať švihom. Snažte sa lopatky zdvíhať pomaly a maximálne kontrahujte brušné svaly.'),
(15, 'Zhyby podhmatom', 'Pozdvihneme sa a podhmatom uchopíme hrazdu tak, že ruky sú od seba vzdialené menej ako je šírka ramien. Nohy zdvihneme z podlahy a pre lepší balans ich pokrčíme v kolenách. Pri počiatočnej polohe na hrazde visíme s vystretými rukami. Následne sa zdvíhame hore tak, že k hrazde približujeme hrudník, ktorý počas pohybu vypíname vpred. V chrbát sa prehýbame vzad a do vrchnej pozície dorazíme vtedy, ak je brada aspoň na úrovni hrazdy. Potom sa môžeme pomaly spustiť do počiatočnej pozície.');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `faq`
--

CREATE TABLE `faq` (
  `IDotazka` int(11) NOT NULL,
  `otazka` text COLLATE utf8mb4_slovak_ci NOT NULL,
  `odpoved` text COLLATE utf8mb4_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `faq`
--

INSERT INTO `faq` (`IDotazka`, `otazka`, `odpoved`) VALUES
(1, 'Ako dlho by mal trvať tréning v posilňovni?', 'Samotná dĺžka tréningovej jednotky je závislá od mnohých faktorov. Aby ste budovali svaly, tréning môže trvať ľubovoľný čas v optimálnom rozmedzí 45 minút až 2 hodín. Vo všeobecnosti sa však odporúča nepresahovať jednu hodinu, pretože sa vtedy začína uvoľňovať stresový hormón kortizol, ktorý by mohol viesť ku katabolizmu. Ten predstavuje spaľovanie svalových buniek. \r\n\r\nCieľom posilňovania nie je vyčerpať srdcový sval, ale strategicky zničiť svalové vlákna odporom, ktorý predstavujú činky, stroje či gravitácia. Medzi sériami je vhodné oddychovať minútu až dve, aby ste dosiahli maximálny výkon v každej sérii. Ak sa snažíte spáliť tuky alebo zvýšiť kardiovaskulárnu kondíciu, efektívnymi technikami sú supersety, gigantické sety či kratšia prestávka – 30 až 45 sekúnd. Rovnako zložený tréning sa tak dá odcvičiť za dve hodiny alebo aj menej ako hodinu v závislosti od dĺžky prestávok.'),
(2, 'Sójový proteín - aký dobrý je tento lacný proteín?', 'Sójový proteínový izolát je doplnok výživy, ktorého úlohu je zvýšiť tvoj príjem bielkovín.\r\n\r\nBielkoviny sú veľmi dôležitou živinou, a sú o to viac dôležité pri naberaní svalovej hmoty a chudnutí. Dostatočný príjem bielkovín je dôležitý aj v spojení so zdravým životným štýlom.\r\n\r\nTento proteín je vhodný pre vegánov a vegetariánov, čo ho robí populárnou voľbou pre tých, ktorí sa vyhýbajú živočíšnym produktom.\r\n\r\nSójový proteín je charakteristický vysokým obsahom bielkovín, až 90 g na 100 g proteínu. To je vysoký obsah bielkovín aj v porovnaní s inými druhmi proteínov.\r\n\r\nNie je bielkovina ako bielkovina. Najlepšie bielkoviny sú tie, ktoré nazývame kompletné bielkoviny, lebo obsahujú všetkých 9 esenciálnych aminokyselín.\r\n\r\nSójový proteín obsahuje bielkoviny, ktoré sú kompletnými bielkovinami. Rastlinné proteíny nezvyknú obsahovať všetkých deväť esenciálnych aminokyselín, prípadne obsah jednej či viacerých aminokyselín v rastlinnom proteíne je veľmi nízky.\r\n\r\nV tomto smere je sójový proteín výnimkou, a obsahuje všetkých deväť esenciálnych aminokyselín, a dokonca aj v dostatočnom množstve.\r\n\r\nKeďže s diétami založenými na rastlinnej strave môže byť náročné dosiahnuť optimálny príjem esenciálnych aminokyselín, sójový proteín je skvelým riešením.\r\n\r\nObsah tukov, sacharidov aj vlákniny je nízky, čo je plusom pre sójový proteín.'),
(3, 'Mozole z cvičenia: ako sa ich zbaviť? Dá sa im zabrániť?', 'Mozole na dlaniach pozná každý, kto niekedy cvičil na jednoručke, či kladke a sú témou medzi mužmi aj ženami. Hoci dôkladné premasťovanie pokožky znie skôr ako „práca“ pre dámy, páni by nemali zostávať pozadu. Ak budú dlane dostatočne hydratované, mozoľov po cvičení bude podstatne menej.\r\n\r\nNové mozole nechajte poriadne zahojiť. Ďalším namáhaním riskujete prasknutý mozoľ. Neodporúča sa ani trhanie kože, ktorým len oddialite zahojenie (nehovoriac o pálení a bolesti). Ideálne mozole ignorujte a nechajte kožu, nech sa v pokoji zahojí. Na pomoc si vezmite maximálne nechtíkovú masť, ktorá podporuje regeneračnú schopnosť pokožky.\r\n\r\nTvrdé a staré mozole pokojne obrúste pemzou potom, čo ruky namočíte do horúcej vody s trochou jedlej sódy alebo epsomskej soli. Pri obrusovaní nezasahujte veľmi hlboko do kože, nech nie je vrstva veľmi tenká. Staré mozole bez obáv odstrihnite nožničkami na nechty. Stvrdnutá koža by sa len nabaľovala a ďalšie vrstvy by vám pri cvičení spôsobovali bolesti.\r\n\r\nĎalšia rada na mozole vás možno prekvapí… Mozole potierajte balzamom na pery. Keď sa nad tým tak zamyslíte, po balzame väčšina z nás siahne, keď má popraskané pery. Účinok teda bude veľmi podobný.'),
(4, 'Koľko jedál denne jesť? Optimálna frekvencia jedál', 'Existuje univerzálna alebo ak chcete optimálna frekvencia jedál? Ako to už vo svete fitness býva, je to bohužiaľ veľmi individuálne. Všeobecná príručka teda jednoducho neexistuje. Napriek tomu si dovolím tvrdiť, že existuje optimálna frekvencia jedál. Optimálna frekvencia je teda predovšetkým tá, ktorá najlepšie vyhovuje vášmu telu aj životnému štýlu.\r\n\r\nVždy musíte počúvať svoje telo a upraviť počet kalórií, počet jedál a ich zložky vášmu životnému štýlu, kalorickému výdaju alebo cieľom. Obézny človek, ktorý sa snaží schudnúť, má teda úplne iný režim ako športovec, ktorý sa pripravuje na kulturistickú súťaž.'),
(5, 'Môžem sa predávkovať kreatínom?', 'Kreatín je bezpečná látka, ktorej sa zdraví ľudia nemusia obávať. Napriek tomu je možné, že pri nadmernom dávkovaní (rovnako ako pri iných látkach) môže spôsobiť niektoré negatívne účinky. Nemusíte sa však obávať žiadnych vážnych problémov, pretože tie zahŕňajú najmä tráviace problémy a prípadne svalové kŕče. Maximálna denná dávka kreatínu neexistuje, ale ak sa budete riadiť zdravým rozumom a odporúčaniami výrobcu, nemusíte sa ničoho obávať. Niektorí ľudia môžu mať problémy s takzvanou nasycovacou fázou, počas ktorej sa používajú vyššie dávky kreatínu, ale tejto fáze sa dá ľahko vyhnúť. A ak vám kreatín monohydrát nerobí dobre, vyskúšajte kreatín vo forme hydrochloridu, ktorý je v tomto ohľade oveľa šetrnejší.\r\n\r\nDôležité je uvedomiť si, že nadmerný príjem kreatínu nie je v skutočnosti prospešný, takže užívanie vyšších dávok nemá zmysel.');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `ingrediencie`
--

CREATE TABLE `ingrediencie` (
  `IDingrediencie` int(11) NOT NULL,
  `IDrecept` int(11) NOT NULL,
  `ingrediencia` varchar(50) COLLATE utf8mb4_slovak_ci NOT NULL,
  `gramaz` varchar(50) COLLATE utf8mb4_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `ingrediencie`
--

INSERT INTO `ingrediencie` (`IDingrediencie`, `IDrecept`, `ingrediencia`, `gramaz`) VALUES
(1, 1, 'Špagety', '500g'),
(2, 1, 'Vajcia', '1ks'),
(3, 1, 'Strúhaný parmezán', '50g'),
(4, 1, 'Mleté hovädzie mäso', '500g'),
(5, 1, 'Mrkva', '1ks'),
(6, 1, 'Cuketa', '1ks'),
(7, 1, 'Cibuľa', '1ks'),
(8, 1, 'Cesnak', '3 strúčiky'),
(9, 1, 'Paradajky v plechovke', '800g'),
(10, 1, 'Paradajkový pretlak', '1PL'),
(11, 1, 'Trstinový cukor', '1ČL'),
(13, 1, 'Olivový olej', '-'),
(14, 1, 'Oregáno', '-');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `ponukanesluzby`
--

CREATE TABLE `ponukanesluzby` (
  `IDsluzba` int(11) NOT NULL,
  `nazovSluzby` varchar(50) COLLATE utf8mb4_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovak_ci;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `potraviny`
--

CREATE TABLE `potraviny` (
  `IDpotravina` int(11) NOT NULL,
  `nazovPotraviny` varchar(50) COLLATE utf8mb4_slovak_ci NOT NULL,
  `IDtyp` int(11) NOT NULL,
  `imagePotravina` text COLLATE utf8mb4_slovak_ci NOT NULL,
  `kalorie` int(11) NOT NULL,
  `bielkoviny` float NOT NULL,
  `sacharidy` float NOT NULL,
  `tuky` float NOT NULL,
  `draslik` float NOT NULL,
  `horcik` float NOT NULL,
  `fosfor` float NOT NULL,
  `vapnik` float NOT NULL,
  `sodik` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `potraviny`
--

INSERT INTO `potraviny` (`IDpotravina`, `nazovPotraviny`, `IDtyp`, `imagePotravina`, `kalorie`, `bielkoviny`, `sacharidy`, `tuky`, `draslik`, `horcik`, `fosfor`, `vapnik`, `sodik`) VALUES
(0, 'Egreše', 1, './media/gooseberries-potravina.jpg', 49, 0.82, 10, 0.2, 19.8, 1, 2.7, 2.5, 0.1),
(1, 'Avokádo', 1, './media/avocado-potravina.jpg', 159, 1.6, 6, 13.1, 48.5, 2.9, 8.2, 1.4, 0.7),
(2, 'Mrkva', 2, './media/carrot-potravina.jpg', 35, 1, 7.34, 0.22, 21.8, 0.7, 2.3, 4.5, 3.5),
(3, 'Banán', 1, './media/banana-potravina.jpg', 94, 1.1, 22, 0.2, 35.8, 2.7, 2.2, 1.2, 0.1),
(4, 'Jablko', 1, './media/apple-potravina.jpg', 52, 0.4, 13.8, 0.2, 10.7, 0.5, 1.1, 0.5, 0.1),
(5, 'Hruška', 1, './media/pear-potravina.jpg', 57, 0.4, 15.2, 0.1, 11.6, 0.7, 1.2, 0.9, 0.1),
(6, 'Čučoriedky', 1, './media/blueberries-potravina.jpg', 57, 0.7, 14.5, 0.3, 7.7, 0.6, 1.2, 0.6, 0.1),
(7, 'Slivka', 1, './media/plum-potravina.jpg', 46, 0.7, 11.4, 0.3, 15.7, 0.7, 1.6, 0.6, 0),
(8, 'Mandarinka', 1, './media/mandarine-potravina.jpg', 53, 0.8, 13.3, 0.3, 16.6, 1.2, 2, 3.7, 0.2),
(9, 'Hrozno', 1, './media/grape-potravina.jpg', 66, 0.6, 17, 0.4, 19.1, 0.5, 2, 1.4, 0.2),
(10, 'Marhuľa', 1, './media/apricot-potravina.jpg', 48, 1.4, 11.1, 0.4, 25.9, 1, 2.3, 1.3, 0.1),
(11, 'Maliny', 1, './media/raspberries-potravina.jpg', 52, 1.2, 11.9, 0.7, 15.1, 2.2, 2.9, 2.5, 0.1),
(12, 'Nektarínka', 1, './media/nectarine-potravina.jpg', 44, 1.1, 10.6, 0.3, 20.1, 0.9, 2.6, 0.6, 0),
(13, 'Broskyňa', 1, './media/peach-potravina.jpg', 39, 0.9, 9.5, 0.3, 19, 0.9, 2, 0.6, 0),
(14, 'Pomaranč', 1, './media/orange-potravina.jpg', 49, 1, 11.9, 0.3, 17.9, 1, 1.7, 4, 0),
(15, 'Jahody', 1, './media/strawberries-potravina.jpg', 34, 0.79, 6.16, 0.37, 15.3, 1.3, 2.4, 1.6, 0.1),
(16, 'Mango', 1, './media/mango-potravina.jpg', 75, 0.6, 16.45, 0.45, 16.8, 1, 1.4, 1.1, 0.1),
(17, 'Kiwi', 1, './media/kiwi-potravina.jpg', 71, 1, 13.85, 0.63, 31.2, 1.7, 2.5, 3.4, 0.3),
(18, 'Ananás', 1, './media/pineapple-potravina.jpg', 58, 0.49, 12.7, 0.19, 10.9, 1.2, 0.8, 1.3, 0.1),
(19, 'Citrón', 1, './media/lemon-potravina.jpg', 36, 0.66, 6, 0.53, 13.8, 0.8, 1.6, 2.6, 0.2),
(20, 'Melón červený', 2, './media/melon-potravina.jpg', 29, 0.65, 6, 0.17, 12.2, 1, 1.1, 0.7, 0.1),
(21, 'Černice', 1, './media/blackberries-potravina.jpg', 73, 1.35, 12.05, 0.95, 16.2, 2, 2.2, 2.9, 0.1),
(22, 'Grapefruit', 1, './media/grapefruit-potravina.jpg', 49, 0.9, 10.1, 0.3, 13.5, 0.9, 0.8, 2.2, 0),
(23, 'Pomelo', 1, './media/pomelo-potravina.jpg', 42, 0.76, 9.62, 0.04, 21.6, 0.6, 1.7, 0.4, 0.1),
(24, 'Višne', 1, './media/sour-cherries-potravina.jpg', 63, 1, 12.17, 0.62, 17.3, 0.9, 1.5, 1.6, 0.3),
(25, 'Melón žltý', 2, './media/yellow-melon-potravina.jpg', 41, 0.5, 9, 0.14, 26.7, 1.2, 0.8, 0.9, 1.6),
(26, 'Brusnice', 1, './media/cranberries-potravina.jpg', 55, 0.44, 12.09, 0.54, 8.5, 0.6, 1.1, 0.8, 0.2),
(27, 'Nashi ázijská hruška', 1, './media/nashi-potravina.jpg', 53, 0.5, 10.7, 0.2, 33.3, 2.2, 3, 1.1, 0),
(28, 'Čerešne', 1, './media/cherries-potravina.jpg', 69, 0.91, 14.38, 0.41, 17.3, 0.9, 2.1, 1.6, 0.3),
(29, 'Marakuja', 1, './media/passion-fruit-potravina.jpg', 96, 2, 13, 1, 34.8, 2.9, 6.8, 1.2, 2.8),
(30, 'Datle', 1, './media/date-potravina.jpg', 162, 1.06, 38.88, 0.26, 65.6, 4.3, 6.2, 3.9, 0.2),
(31, 'Hurmikaki', 1, './media/kaki-potravina.jpg', 70, 0.6, 19, 0, 31, 0, 0, 2.7, 0.1),
(32, 'Figy', 1, './media/fig-potravina.jpg', 88, 1.35, 18.13, 0.41, 23.2, 1.7, 1.4, 3.5, 0.1),
(33, 'Granátové jablko', 1, './media/pomegranate-potravina.jpg', 100, 1.7, 18.7, 1.2, 23.6, 1.2, 3.6, 1, 0.3),
(35, 'Reďkovka', 2, './media/radish-potravina.jpg', 15, 0.7, 3.4, 0.1, 23.3, 1, 2, 2.5, 3.9),
(36, 'Kaleráb', 2, './media/kohlrabi-potravina.jpg', 27, 1.7, 6, 0.1, 35, 1.9, 4.6, 2.4, 2),
(37, 'Cuketa', 2, './media/zucchini-potravina.jpg', 16, 1.2, 3.1, 0.3, 26.1, 1.8, 3.7, 1.6, 0.8),
(38, 'Pitahaya - dračie ovocie', 1, './media/pitahaya-potravina.jpg', 58, 1, 11, 0.5, 24, 6.8, 3.6, 3.1, 0),
(39, 'Liči', 1, './media/litchi-potravina.jpg', 66, 0.83, 16.5, 0.44, 17.1, 1, 3.1, 0.5, 0.1),
(40, 'Batáty', 2, './media/batat-potravina.jpg', 85, 1.6, 20, 0.1, 33.7, 2.5, 5.4, 3, 5.5),
(41, 'Paradajky', 2, './media/tomato-potravina.jpg', 25, 0.96, 4, 0.23, 23.7, 1.1, 2.4, 1, 0.5),
(42, 'Cibuľa', 2, './media/onion-potravina.jpg', 40, 1.1, 9.34, 0.1, 14.6, 1, 2.9, 2.3, 0),
(43, 'Špenát', 2, './media/spinach-potravina.jpg', 23, 2.9, 3.6, 0.4, 55.8, 7.9, 4.9, 9.9, 7.9),
(44, 'Cvikla', 2, './media/beetroot-potravina.jpg', 18, 1.8, 3.7, 0.2, 37.9, 8.1, 4, 5.1, 21.3),
(45, 'Brokolica', 2, './media/broccoli-potravina.jpg', 33, 2.8, 7, 0.4, 31.6, 2.1, 6.6, 4.7, 3.3),
(46, 'Papája', 1, './media/papaya-potravina.jpg', 50, 0.52, 10.9, 0.09, 18.2, 2.1, 1, 2.07, 0.8),
(47, 'Karfiol', 2, './media/cauliflower-potravina.jpg', 24, 1.9, 5, 0.3, 29.9, 1.5, 4.4, 2.2, 3),
(48, 'Moruša', 1, './media/morus-potravina.jpg', 43, 1.44, 9.8, 0.39, 19.4, 1.8, 3.8, 3.9, 1),
(49, 'Rukola', 2, './media/arugula-potravina.jpg', 25, 2.58, 3.65, 0.66, 36.9, 4.7, 5.2, 16, 2.7),
(50, 'Uhorka šalátová', 2, './media/cucumber-potravina.jpg', 16, 0.65, 3.63, 0.11, 14.7, 1.3, 2.4, 1.6, 0.2),
(51, 'Ľadový šalát', 2, './media/salad-potravina.jpg', 23, 2.9, 3.6, 0.4, 55.8, 7.9, 0, 9.9, 7.9),
(52, 'Zemiaky', 2, './media/potato-potravina.jpg', 23, 3, 17, 0.3, 56, 2.2, 5, 1, 3.1),
(53, 'Cesnak', 2, './media/garlic-potravina.jpg', 163, 6, 32, 0.6, 40, 24, 15.1, 18, 0),
(54, 'Paprika červená', 2, './media/paprika-red-potravina.jpg', 27, 0.9, 4.64, 0.13, 21.3, 1.1, 2.7, 0.6, 0.3);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `recepty`
--

CREATE TABLE `recepty` (
  `IDrecept` int(11) NOT NULL,
  `recept` varchar(100) COLLATE utf8mb4_slovak_ci NOT NULL,
  `obtiaznost` int(11) NOT NULL,
  `cas` varchar(50) COLLATE utf8mb4_slovak_ci NOT NULL,
  `postup` text COLLATE utf8mb4_slovak_ci NOT NULL,
  `image` text COLLATE utf8mb4_slovak_ci NOT NULL,
  `kalorie` int(11) NOT NULL,
  `bielkoviny` float NOT NULL,
  `sacharidy` float NOT NULL,
  `tuky` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `recepty`
--

INSERT INTO `recepty` (`IDrecept`, `recept`, `obtiaznost`, `cas`, `postup`, `image`, `kalorie`, `bielkoviny`, `sacharidy`, `tuky`) VALUES
(1, 'Mäsové guľky v paradajkovej omáčke so špagetami', 4, '60 minút', 'Mäsové guľky - Jednoducho všetky suroviny zmiešame v miske rukami dokiaľ sa všetky suroviny pekne neprepoja.  Zo zmesi vytvoríme menšie guľky a poukladáme na tanier. Paradajková omáčka - Na väčšej a hlbšej panvici si rozohrejeme olivový olej, pridáme najemno nakrájaný cesnak, cibuľu, nastrúhanú cukinu a miešame približne 5 minút. Potom pridáme nakrájané paradajky, paradajkový pretlak, trstinový cukor, dochutíme korením, čerstvou bazalkou, soľou a miešame. Omáčku necháme mierne bublať. Vedľa v ďalšej panvici rozohrejeme olivový olej a mäsové guľky sprudka opečieme z každej strany. Následne ich premiestnime do omáčky a varíme v omáčke pod pokrievkou. Vždy po chvíľke mäsové guľky zľahka premiešame a polievame omáčkou. Dusíme približne 20 minút, dokiaľ masové guľky nie sú hotové. Špagety varíme podľa návodu domäkka, poprípade podľa vlastnej chute.', './media/masove-gulky-paradajkova-omacka-spagety-recept.jpg', 95, 5, 10, 4);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `svalcvik`
--

CREATE TABLE `svalcvik` (
  `IDcvik` int(11) NOT NULL,
  `IDsval` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `svalcvik`
--

INSERT INTO `svalcvik` (`IDcvik`, `IDsval`) VALUES
(1, 7),
(2, 7),
(3, 6),
(4, 15),
(5, 7),
(6, 7),
(7, 3),
(8, 7),
(9, 1),
(10, 10),
(11, 6),
(12, 6),
(13, 6),
(14, 1),
(15, 2);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `svaly`
--

CREATE TABLE `svaly` (
  `IDsval` int(11) NOT NULL,
  `sval` varchar(50) COLLATE utf8mb4_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `svaly`
--

INSERT INTO `svaly` (`IDsval`, `sval`) VALUES
(1, 'Brušné svaly'),
(2, 'Biceps'),
(3, 'Triceps'),
(4, 'Predlaktia'),
(5, 'Lýtka'),
(6, 'Stehná'),
(7, 'Prsia'),
(8, 'Hamstringy'),
(9, 'Spodný chrbát'),
(10, 'Stredný chrbát / krídla'),
(11, 'Krk a horné trapézy'),
(12, 'Ramená'),
(13, 'Horný chrbát a spodné trapézy'),
(14, 'Šikmé brušné svaly'),
(15, 'Sedacie svaly');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `typypotravin`
--

CREATE TABLE `typypotravin` (
  `IDtyp` int(11) NOT NULL,
  `typPotraviny` varchar(50) COLLATE utf8mb4_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `typypotravin`
--

INSERT INTO `typypotravin` (`IDtyp`, `typPotraviny`) VALUES
(1, 'Ovocie'),
(2, 'Zelenina'),
(3, 'Mäso a mäsové výrobky'),
(4, 'Ryby'),
(5, 'Mliečne výrobky'),
(6, 'Vajcia'),
(7, 'Obilniny'),
(8, 'Strukoviny'),
(9, 'Huby');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `vybavenia`
--

CREATE TABLE `vybavenia` (
  `IDvybavenie` int(11) NOT NULL,
  `vybavenie` varchar(100) COLLATE utf8mb4_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `vybavenia`
--

INSERT INTO `vybavenia` (`IDvybavenie`, `vybavenie`) VALUES
(1, 'Bez vybavenia'),
(2, 'Podložka na cvičenie'),
(3, 'Posilňovacie gumy a expandéry'),
(4, 'Švihadlo'),
(5, 'Bradlá'),
(6, 'Hrazda'),
(7, 'Fit lopta'),
(8, 'Balančná podložka Half Ball'),
(9, 'Power bag / posilňovací vak'),
(10, 'Slam ball'),
(11, 'Medicinbal'),
(12, 'Jednoručky'),
(13, 'Kettlebelly'),
(14, 'Olympijská tyč'),
(15, 'Kotúče'),
(16, 'Závesný posilňovací systém'),
(17, 'Posilňovacie kolieska'),
(18, 'Záťažové vesty'),
(19, 'Závažie na telo');

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `balicek`
--
ALTER TABLE `balicek`
  ADD PRIMARY KEY (`IDbalicek`);

--
-- Indexy pre tabuľku `baliceksluzby`
--
ALTER TABLE `baliceksluzby`
  ADD PRIMARY KEY (`IDbalicek`,`IDsluzba`),
  ADD KEY `IDsluzba` (`IDsluzba`);

--
-- Indexy pre tabuľku `cvikvybavenie`
--
ALTER TABLE `cvikvybavenie`
  ADD PRIMARY KEY (`IDcvik`,`IDvybavenie`),
  ADD KEY `IDvybavenie` (`IDvybavenie`);

--
-- Indexy pre tabuľku `cviky`
--
ALTER TABLE `cviky`
  ADD PRIMARY KEY (`IDcvik`);

--
-- Indexy pre tabuľku `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`IDotazka`);

--
-- Indexy pre tabuľku `ingrediencie`
--
ALTER TABLE `ingrediencie`
  ADD PRIMARY KEY (`IDingrediencie`),
  ADD KEY `IDrecept` (`IDrecept`);

--
-- Indexy pre tabuľku `ponukanesluzby`
--
ALTER TABLE `ponukanesluzby`
  ADD PRIMARY KEY (`IDsluzba`);

--
-- Indexy pre tabuľku `potraviny`
--
ALTER TABLE `potraviny`
  ADD PRIMARY KEY (`IDpotravina`),
  ADD KEY `IDtyp` (`IDtyp`);

--
-- Indexy pre tabuľku `recepty`
--
ALTER TABLE `recepty`
  ADD PRIMARY KEY (`IDrecept`);

--
-- Indexy pre tabuľku `svalcvik`
--
ALTER TABLE `svalcvik`
  ADD PRIMARY KEY (`IDcvik`,`IDsval`),
  ADD KEY `IDsval` (`IDsval`);

--
-- Indexy pre tabuľku `svaly`
--
ALTER TABLE `svaly`
  ADD PRIMARY KEY (`IDsval`);

--
-- Indexy pre tabuľku `typypotravin`
--
ALTER TABLE `typypotravin`
  ADD PRIMARY KEY (`IDtyp`);

--
-- Indexy pre tabuľku `vybavenia`
--
ALTER TABLE `vybavenia`
  ADD PRIMARY KEY (`IDvybavenie`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `balicek`
--
ALTER TABLE `balicek`
  MODIFY `IDbalicek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pre tabuľku `cviky`
--
ALTER TABLE `cviky`
  MODIFY `IDcvik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pre tabuľku `faq`
--
ALTER TABLE `faq`
  MODIFY `IDotazka` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pre tabuľku `ingrediencie`
--
ALTER TABLE `ingrediencie`
  MODIFY `IDingrediencie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pre tabuľku `ponukanesluzby`
--
ALTER TABLE `ponukanesluzby`
  MODIFY `IDsluzba` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pre tabuľku `potraviny`
--
ALTER TABLE `potraviny`
  MODIFY `IDpotravina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT pre tabuľku `recepty`
--
ALTER TABLE `recepty`
  MODIFY `IDrecept` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pre tabuľku `svaly`
--
ALTER TABLE `svaly`
  MODIFY `IDsval` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pre tabuľku `typypotravin`
--
ALTER TABLE `typypotravin`
  MODIFY `IDtyp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pre tabuľku `vybavenia`
--
ALTER TABLE `vybavenia`
  MODIFY `IDvybavenie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Obmedzenie pre exportované tabuľky
--

--
-- Obmedzenie pre tabuľku `baliceksluzby`
--
ALTER TABLE `baliceksluzby`
  ADD CONSTRAINT `baliceksluzby_ibfk_1` FOREIGN KEY (`IDbalicek`) REFERENCES `balicek` (`IDbalicek`),
  ADD CONSTRAINT `baliceksluzby_ibfk_2` FOREIGN KEY (`IDsluzba`) REFERENCES `ponukanesluzby` (`IDsluzba`);

--
-- Obmedzenie pre tabuľku `cvikvybavenie`
--
ALTER TABLE `cvikvybavenie`
  ADD CONSTRAINT `cvikvybavenie_ibfk_1` FOREIGN KEY (`IDcvik`) REFERENCES `cviky` (`IDcvik`),
  ADD CONSTRAINT `cvikvybavenie_ibfk_2` FOREIGN KEY (`IDvybavenie`) REFERENCES `vybavenia` (`IDvybavenie`);

--
-- Obmedzenie pre tabuľku `ingrediencie`
--
ALTER TABLE `ingrediencie`
  ADD CONSTRAINT `ingrediencie_ibfk_1` FOREIGN KEY (`IDrecept`) REFERENCES `recepty` (`IDrecept`);

--
-- Obmedzenie pre tabuľku `potraviny`
--
ALTER TABLE `potraviny`
  ADD CONSTRAINT `potraviny_ibfk_1` FOREIGN KEY (`IDtyp`) REFERENCES `typypotravin` (`IDtyp`);

--
-- Obmedzenie pre tabuľku `svalcvik`
--
ALTER TABLE `svalcvik`
  ADD CONSTRAINT `svalcvik_ibfk_1` FOREIGN KEY (`IDcvik`) REFERENCES `cviky` (`IDcvik`),
  ADD CONSTRAINT `svalcvik_ibfk_2` FOREIGN KEY (`IDsval`) REFERENCES `svaly` (`IDsval`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
