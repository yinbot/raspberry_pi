<?php
/**
* Web based SQLite management
* @package SQLiteManager
* @version $Id: dutch.inc.php,v 1.24 2006/04/14 15:16:52 freddy78 Exp $ $Revision: 1.24 $
*/
$charset = 'iso-8859-1';
$langSuffix = 'de';
/**
* Fichier dinternationnalisation
*/
$itemTranslated = array(	"Table"		=> "Tabel",
							"View"		=> "View",
							"Trigger"	=> "Trigger",
							"Function"	=> "Functie");
$langueTranslated = array(	1=>"Frans", 2=>"Engels", 3=>"Pools", 
							4=>"Duits", 5=>"Japans", 6=>"Italiaans", 
							7=>"Kroatisch", 8=>"Braziliaans portugees", 9=>"Nederlands", 
							10=>"Spanish", 11=>"Danish", 12=>"Chinese traditional", 
              				13=>"Chinese simplified");
$themeTranslated = array("default"=>"Standaard",  "PMA"=>"PMA", "jall"=>"JALL", "green"=>"Green");
$TEXT[1]	=	"Home";
$TEXT[2]	=	"Welkom op <a href=\"http://www.sqlitemanager.org\" target=\"_blank\">SQLiteManager</a> versie";
$TEXT[3]	=	"SQLite versie";
$TEXT[4]	=	"SQLite Documentatie";
$TEXT[5]	=	"SQL Taal";
$TEXT[6]	=	"De SQLite extensie kan niet worden geladen.";
$TEXT[7]	=	"De'SQLite' configuration database kan niet worden geopend.<br>Foutmelding";
$TEXT[8]	=	"De configuratie database heeft geen 'Schrijf' rechten!";
$TEXT[9]	=	"Fout";
$TEXT[10]	=	"Functie";
$TEXT[11]	=	"Totaal";
$TEXT[12]	=	"Laatste functie";
$TEXT[13]	=	"Nb Args";
$TEXT[14]	=	"Bewerk";
$TEXT[15]	=	"Verwijder";
$TEXT[16]	=	"Niewe functie eigenschappen";
$TEXT[17]	=	"Functie eigenschappen";
$TEXT[18]	=	"Fout : Alle velden moeten worden ingevuld.";
$TEXT[19]	=	"Naam";
$TEXT[20]	=	"Type";
$TEXT[21]	=	"Stap Eigenschappen";
$TEXT[22]	=	"Uiteindelijke Eigenscahppen";
$TEXT[23]	=	"Nb args";
$TEXT[24]	=	"Hang deze functie aan alle databases.";
$TEXT[25]	=	"Niewe tabel eigenschappen";
$TEXT[26]	=	"Tabel eigenschappen";
$TEXT[27]	=	"Veld";
$TEXT[28]	=	"Type";
$TEXT[29]	=	"Lengte";
$TEXT[30]	=	"Null";
$TEXT[31]	=	"Standaard";
$TEXT[32]	=	"Primair";
$TEXT[33]	=	"Actie";
$TEXT[34]	=	"Selecteer alles";
$TEXT[35]	=	"Deselecteer alles";
$TEXT[36]	=	"voor de selectie";
$TEXT[37]	=	"Weet je zeker dat je dit/deze velden wilt verwijderen?";
$TEXT[38]	=	"Management van de  index(en)";
$TEXT[39]	=	"Weet je zeker dat je dit veld wilt verwijderen?";
$TEXT[40]	=	"Ja";
$TEXT[41]	=	"Nee";
$TEXT[42]	=	"Primair";
$TEXT[43]	=	"Voeg toe";
$TEXT[44]	=	"Veld(en)";
$TEXT[45]	=	"Aan het einde van de tabel";
$TEXT[46]	=	"Aan het begin van de tabel";
$TEXT[47]	=	"Na";
$TEXT[48]	=	"Voeg een nieuw record toe";
$TEXT[49]	=	"Verander een record";
$TEXT[50]	=	"Waarde";
$TEXT[51]	=	"Bewaar";
$TEXT[52]	=	"Voeg data in vanuit een file.";
$TEXT[53]	=	"Trigger";
$TEXT[54]	=	"Niewe trigger eigenschappen";
$TEXT[55]	=	"Trigger eigenschappen";
$TEXT[56]	=	"Moment";
$TEXT[57]	=	"Gebeurtenis";
$TEXT[58]	=	"Op";
$TEXT[59]	=	"Conditie";
$TEXT[60]	=	"Stap";
$TEXT[61]	=	"Eigenschappen";
$TEXT[62]	=	"Niewe View eigenschappen";
$TEXT[63]	=	"View eigenschappen";
$TEXT[64]	=	"Er is geen query uitgevoerd!";
$TEXT[65]	=	"Slecte resource connectie!";
$TEXT[66]	=	"voer 1 of meer query's uit";
$TEXT[67]	=	"<i>Of</i> vanuit een sql file";
$TEXT[68]	=	"Query formaat : Standaard (sqlite)";
$TEXT[69]	=	"Voer uit";
$TEXT[70]	=	"query is uitgevoerd.";
$TEXT[71]	=	"Regele is aangepast.";
$TEXT[72]	=	"Structuur";
$TEXT[73]	=	"Display";
$TEXT[74]	=	"SQL";
$TEXT[75]	=	"Voeg in";
$TEXT[76]	=	"Exporteer";
$TEXT[77]	=	"Leeg";
$TEXT[78]	=	"Weet je zeker dat je deze functie wilt verwijderen?";
$TEXT[79]	=	"Weet je zeker dat je deze tabel wilt legen?";
$TEXT[80]	=	"Weet je zeker dat je deze tabel wilt verwijderen?";
$TEXT[81]	=	"Voeg toe";
$TEXT[82]	=	"Weet je zeker dat je deze view wilt verwijderen?";
$TEXT[83]	=	"Weet je zeker dat je deze trigger wilt verwijderen?";
$TEXT[84]	=	"Opties";
$TEXT[85]	=	"Weet je zeker dat je de database wilt weggooien? De database wordt allen maar uitgeschreven, niet verwijderd.  ";
$TEXT[86]	=	"Verwijder";
$TEXT[87]	=	"Voeg een view toe";
$TEXT[88]	=	"Voeg een trigger toe";
$TEXT[89]	=	"Voeg een functie toe";
$TEXT[90]	=	"SQL query";
$TEXT[91]	=	"Sleutel naam";
$TEXT[92]	=	"Weet je zeker dat je deze index wilt verwijderen?";
$TEXT[93]	=	"Voeg een index toe op";
$TEXT[94]	=	"kolom(en)";
$TEXT[95]	=	"Negeer";
$TEXT[96]	=	"Voeg in op de sleutel";
$TEXT[97]	=	"Maak een view met de naam ";
$TEXT[98]	=	"van deze query.";
$TEXT[99]	=	"Fout regel(s)";
$TEXT[100]	=	"Er is zeker een probleem met de schrijfrechten op de configuratiedatabase";
$TEXT[101]	=	"Onmogelijk om deze database te maken of te lezen";
$TEXT[102]	=	"Alle velden moeten ingevuld zijn!";
$TEXT[103]	=	"Maak een nieuwe database";
$TEXT[104]	=	"Pad";
$TEXT[105]	=	"De data array heeft geen constant nummer van elementen";
$TEXT[106]	=	"De parameters van de  constructor class 'Grid' moeten een array zijn";
$TEXT[107]	=	"De kolom uitlijning array heeft een onjuis nummer aan elementen.";
$TEXT[108]	=	"De cell uitlijning moet zijn : 'links', 'rechts' of 'midden'";
$TEXT[109]	=	"De parameters voor de kolomen uitlijning moet een array zijn";
$TEXT[110]	=	"de parameters voor de kolomen formaat moet een array zijn";
$TEXT[111]	=	"De kolom sort array heeft een onjuist aantal elementen.";
$TEXT[112]	=	"De sortering paramaters moeten zijn 0=geen sortering, Of 1=sortering.";
$TEXT[113]	=	"De parameters voor de kolpmen sortering moet een array zijn";
$TEXT[114]	=	"De formaat string voor de berekening kolom is leeg.";
$TEXT[115]	=	"De titel is verplicht voor een berekening kolom.";
$TEXT[116]	=	"De parameters van de constructor class 'ArrayToGrid' moet een array zijn.";
$TEXT[117]	=	"Onmogelijk om de nummers van het record te telen";
$TEXT[118]	=	"Nb records";
$TEXT[119]	=	"Voeg in";
$TEXT[120]	=	"Weet je zeker dat je wilt verwijderen";
$TEXT[121]	=	"de";
$TEXT[122]	=	"de";
$TEXT[123]	=	"Weet je zeker dat je deze tabel leeg wilt maken?";
$TEXT[124]	=	"Alleen structuur";
$TEXT[125]	=	"Structuur en Data";
$TEXT[126]	=	"Alleen Data";
$TEXT[127]	=	"Complete insert query's";
$TEXT[128]	=	"verstuur";
$TEXT[129]	=	"Host";
$TEXT[130]	=	"Generatie Tijd";
$TEXT[131]	=	"Database";
$TEXT[132]	=	"Tabel structuur voor tabel";
$TEXT[133]	=	"Verzamelen data van tabel";
$TEXT[134]	=	"View structuur van view";
$TEXT[135]	=	"Gebruiker Gedefinieerde Functie eigenschappen";
$TEXT[136]	=	"Records";
$TEXT[137]	=	"Bestand";
$TEXT[138]	=	"Vervang inhoud";
$TEXT[139]	=	"Scheider";
$TEXT[140]	=	"Invoer van data van een tekst bestand";
$TEXT[141]	=	"Taal";
$TEXT[142]	=	"Thema";
$TEXT[143]	=	"Upload Database";
$TEXT[144]	=	"Upload map ontoegangtelijk.<br>(Verander constante 'DEFAULT_DB_PATH' in het bestand 'include/user_defined.inc.php')";
$TEXT[145]	=	"Leg SQL uit";
$TEXT[146]	=	"Beheer van aangekoppelde databases";
$TEXT[147]	=	"You are not allowed to acces here.You must enter valid login and password.";
$TEXT[148]	=	"This login is not valid.";
$TEXT[149]	=	"This password don't correspond with thie login.";
$TEXT[150]	=	"PHP versie";
$TEXT[151]	= 	"After save";
$TEXT[152]	= 	"Go back to previous page";
$TEXT[153]	= 	"Insert another new row";
$TEXT[154]	= 	"The configuration database is in read only.<br>Some feature of SQLiteManager can't work correctly.";
$TEXT[155]	= 	"This database is in read only.";
$TEXT[156]	= 	"Privileges"; 
$TEXT[157]	= 	"Change password"; 
$TEXT[158]	= 	"Logoff"; 
$TEXT[159]	= 	"Add user"; 
$TEXT[160]	= 	"Add groupe"; 
$TEXT[161]	= 	"User overview"; 
$TEXT[162]	= 	"Groupes overview"; 
$TEXT[163]	= 	"Name"; 
$TEXT[164]	= 	"Login"; 
$TEXT[165]	= 	"Groupe"; 
$TEXT[166]	= 	"execSQL"; 
$TEXT[167]	= 	"data"; 
$TEXT[168]	= 	"export"; 
$TEXT[169]	= 	"empty"; 
$TEXT[170]	= 	"del"; 
$TEXT[171]	= 	"Incorrect old password."; 
$TEXT[172]	= 	"Password and confirmation are differente."; 
$TEXT[173]	= 	"The password have been changed"; 
$TEXT[174]	= 	"Clic here for re-logon"; 
$TEXT[175]	= 	"Old :"; 
$TEXT[176]	= 	"New :"; 
$TEXT[177]	= 	"Confirm :"; 
$TEXT[178]	= 	"Information"; 
$TEXT[179]	= 	"Location :"; 
$TEXT[180]	= 	"Size :"; 
$TEXT[181]	= 	"Rights :"; 
$TEXT[182]	= 	"Last modified :"; 
$TEXT[183]	= 	"Integrity Check"; 
$TEXT[184]	= 	"Vacuum"; 
$TEXT[185]	= 	"Default synchronous :"; 
$TEXT[186]	= 	"Default cache_size :"; 
$TEXT[187]	= 	"OFF "; 
$TEXT[188]	= 	"NORMAL "; 
$TEXT[189]	= 	"FULL "; 
$TEXT[190]	= 	"Access control management"; 
$TEXT[191]	= 	"Ja"; 
$TEXT[192]	= 	"geen"; 
$TEXT[193]	= 	"Default Temporary Storage"; 
$TEXT[194]	= 	"DEFAULT"; 
$TEXT[195]	= 	"MEMORY"; 
$TEXT[196]	= 	"FILE"; 
$TEXT[197]	= 	"Unique"; 
$TEXT[198]	= 	"Index"; 
$TEXT[199]	= 	"Data";
$TEXT[200]	= 	"Apply";
$TEXT[201]	=	"Selection";
$TEXT[202]	=	"Operator";
$TEXT[203]	=	"additional condition :";
$TEXT[204]	=	"AND";
$TEXT[205]	=	"OR";
$TEXT[206]	=	"Select";
$TEXT[207]	=	"Search";
$TEXT[208]	=	"Rename";
$TEXT[209]	=	"Move";
$TEXT[210]	=	"Copy";
$TEXT[211]	=	"Plugins";
$TEXT[212]	=	"Maintenance";
$TEXT[213]	=	"Query time :";
$TEXT[214]	=	"msec.";
$TEXT[215]	=	"Rename table to :";
$TEXT[216]	=	"Move table to (database.table) :";
$TEXT[217]	=	"Copy table to (database.table) :";
$TEXT[218]	=	"Add DROP TABLE";
$TEXT[219]	=	"Save as New Row";
$TEXT[220]	=	"Save";
$TEXT[221]	=	"Save Type";
$TEXT[222]  =   "Operation";
$TEXT[223]  =   "Update";
$TEXT[224]  =   "Tip : You can use internal PHP functions in your queries !";
$TEXT[225]  =   "Truncated text";
$TEXT[226]  =   "Full text";
$TEXT[227]  =   "-- select --";
$TEXT[228]  =   "(s)";
$TEXT[229]  =   "Version";
$TEXT[230]  =   "(new database)";
$TEXT[231]  =   "Official SQliteManager Homepage";
$TEXT[232]  =   "The database can't be attain";
$TEXT[233]  =   "Trigger structure";
?>