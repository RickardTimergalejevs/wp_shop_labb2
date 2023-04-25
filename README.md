# Arbetslogg

Först och främst laddade jag ner och installerade wordpress.
Jag skapade sedan en databas och döpte om den till "labb2" för att synkronisera det med wordpress.
Genom wordpress och databas skapade jag den första adminanvändaren med ett användarnamn och lösenord "medie-admin".

Efter att ha slutfört installationen av hela strukturen började jag arbeta i adminpanelen och installera tillägg som heter WooCommerce. Efter installationen började jag konfigurera plugin, specifikt butiksadress, valuta, moms, frakt och betalningsmetoder. Efter att jag var klar med det började jag skapa produkter, jag gjorde 7 stycken i olika kategorier och med olika typer(en nedladdningsbara produkt, fyra enkla produkter och två variabla produkter). Jag har även lagt till produktbeskrivningar, kategorier, bilder och priser. Storlek och färg efter behov. Efter att ha satt upp alla produkterna började jag skapa ett tema.

När jag valde ett tema bestämde jag mig för storefront, eftersom detta tema är mycket väl anpassat för att skapa en fullfjädrad butik. Efter installationen gick jag in i temamappen för att skapa en mapp med ett barntema, jag döpte mappen till storefront-child. Inuti den här mappen skapade jag en style.css fil för att länka föräldra- och barntemat till varandra, samt ge det ett namn, beskrivning och författare. Efter det skapade jag en mapp inuti barnetema som heter woocommerce, i den här mappen skapade jag en template som heter archive-product.php. Denna mall behövs för att ändra innehållet på sidan och inte komma in i själva tillägg mappen. Inuti den här template tog jag bort raden "do_action( 'woocommerce_after_shop_loop' );", eftersom jag tänkte att jag inte vill se två fält med sortering på product sidan. Efter att jag tagit itu med detta började jag styla butiken med hjälp av adminpanelen och anpassning teknik. 

I den anpassning menyn började jag ändra webbplatsrubrik, stylade olika färger på sidor och knappar. Lagt till huvudmeny som har 3 flikar, produkter, kassan och mitt konto. Valde att visa startsidan som en statisk sida "Products". Efter att ha ställt in butikens utseende började jag göra funktioner.

I mappen storefront-child skapade jag en fil som heter functions.php. I den här filen provade jag hur krokarna fungerar. Jag skapade krok add_action vilket i sin tur lade en text "fri frakt" till singel-produktsidan, lite ovanför produktrubriken. Sedan provade jag den andra kroken remove_action, det tar bort produktkategorimallen från produktsidan. Jag bestämde mig för att det inte behövs eftersom det redan finns en sökning på kategori högst upp på sidan. Efter att jag förstått hur krokarna fungerar började jag skapa mitt eget plugin. 

I plugins-mappen skapade jag en ny mapp och döpte om den till rickard-plugin. Inuti den här mappen skapade jag en php-fil. Först av allt lade jag till ett namn, en beskrivning och författare till plugin. Som ett test för att skapa en plugin bestämde jag mig för att ändra färgen på adminpanelen. Och nu, när plugin är aktiverat, ändras färgen på adminpanelen från svart till blå. Pluginet är lätt, men visar tydligt hur du enkelt kan ändra vad som helst med hjälp av en funktion och en krok.




