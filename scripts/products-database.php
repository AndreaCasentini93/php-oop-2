<?php

    require_once __DIR__ . '/../classes/ProductClothing.php';
    require_once __DIR__ . '/../classes/ProductSport.php';

    $products = [
        [
            "name" => "Revolution 5, Sneaker Uomo",
            "genre" => "clothing",
            "price" => 43.97,
            "image" => "images/scarpa.jpg",
            "description" => "Design minimalista, comfort. La scarpa da running Nike Revolution 5 combina ammortizzazione, leggerezza e un design minimalista che assicura velocità e comfort per tutto il giorno. Mesh per un comfort traspirante. Intersuola in schiuma per ammortizzazione e leggerezza.",
            "vote" => 5,
            "reviews_number" => 15.365,
            "expedition_price" => 0,
            "color" => [
                "nero",
                "bianco",
                "blu",
                "rosso",
            ],
            "size" => [
                "S",
                "M",
                "L",
                "XL",
            ],
            "season" => "primavera-estate",
        ],
        [
            "name" => "Levi's Cappello a Falda Larga Uomo",
            "genre" => "clothing",
            "price" => 22,
            "image" => "images/cappello.jpg",
            "description" => "Quello che iniziò come un'invenzione per il lavoratore americano divenne l'uniforme del progresso. Indossati da minatori, cowboy, ribelli, rock star, presidenti e da uomini e donne comuni, questi capi funzionali erano gli abiti con cui le persone non solo lavoravano ma vivevano letteralmente la loro vita. Ma i Levi’s sono molto più di questo. Sono la più pura forma indossabile dell'autentica espressione di sé. Portano i segni della vita, le forme dei nostri corpi, i ricordi delle nostre avventure. Levi Strauss & Co. è una delle più grandi aziende di abbigliamento al mondo e leader mondiale nei jeans. Abbiamo circa 500 negozi in tutto il mondo e i nostri prodotti sono disponibili in oltre 100 Paesi.",
            "vote" => 4,
            "reviews_number" => 333,
            "expedition_price" => 0,
            "color" => [
                "nero",
                "bianco",
                "blu",
                "rosso",
            ],
            "size" => [
                "S",
                "M",
                "L",
                "XL",
            ],
            "season" => "4 stagioni",
        ],
        [
            "name" => "Wrangler Pique Polo Uomo",
            "genre" => "clothing",
            "price" => 43.89,
            "image" => "images/maglietta.jpg",
            "description" => "Una tipica avventura americana unita ad un tipico fuoco americano di denim. Dal deserto alla città, l'origine di Wrangler è molto celebrata e discutente mentre ha sviluppato questa collezione primaverile. La storia è stata realizzata in questa collezione con silhouette fresche cucite e un look a strati in denim completamente sicuro di sé, mostrano un approccio progressivo del design di Wranglers.",
            "vote" => 4,
            "reviews_number" => 192,
            "expedition_price" => 3.25,
            "color" => [
                "nero",
                "bianco",
                "blu",
                "rosso",
            ],
            "size" => [
                "S",
                "M",
                "L",
                "XL",
            ],
            "season" => "primavera-estate",
        ],
        [
            "name" => "Pantaloni da Uomo Slim Fit",
            "genre" => "clothing",
            "price" => 25.99,
            "image" => "images/pantaloni.jpg",
            "description" => "Materiali di alta qualità: i nostri pantaloni per il tempo libero da uomo sono realizzati in fibra di poliestere di alta qualità, comodi da indossare, traspiranti, non facili da sbiadire dopo il lavaggio e resistenti all'usura.",
            "vote" => 3,
            "reviews_number" => 50,
            "expedition_price" => 1.5,
            "color" => [
                "nero",
                "bianco",
                "blu",
                "rosso",
            ],
            "size" => [
                "S",
                "M",
                "L",
                "XL",
            ],
            "season" => "autunno-inverno",
        ],
        [
            "name" => "JIM Fitness Cyclette Sport Tech",
            "genre" => "sport",
            "price" => 139.90,
            "image" => "images/cyclette.jpg",
            "description" => "ALLENATI TUTTI I GIORNI CON LA NUOVA JIM FITNESS CYLETTE Aumenta la forza delle tue gambe, rimani in forma fai un buon esercizio cardiovascolare con la nuova bicicletta JIM FINTESS. L'allenamento non ha solo un effetto positivo sui muscoli delle gambe, ma anche sulla colonna vertebrale e le spalle. Studiata per darti il massimo confort, JIM FITNESS CYCLETTE si pone al top della gamma nella sua fascia prezzo. Grazie alle sue potenzialità è perfetta per il tuo allenamento, simulando al meglio le varie condizioni del terreno. Tonifica i tuoi muscoli utilizzando gli 8 livelli di allenamento, monitora il tutto grazie computer integrato nell’ampio display LCD. Potrai avere tutte le informazioni necessarie tra cui distanza, calorie, tempo. La sella comfort è regolabile verticalmente, permettendo all'utilizzatore di registrare la posizione di allenamento più consona alla propria altezza.",
            "vote" => 5,
            "reviews_number" => 2,
            "expedition_price" => 0,
            "weight" => 15000,
            "color" => "nero",
            "materials" => [
                "Gomma",
                "Acciaio inossidabile",
                "Alluminio",
                "Plastica"
            ],
        ],
        [
            "name" => "PRISP Set di Manubri con Rastrelliera",
            "genre" => "sport",
            "price" => 56.99,
            "image" => "images/manubri.jpg",
            "description" => "Il Set di Manubri con Rastrelliera PRISP è l’equipaggiamento perfetto per aiutarti a scolpire e tonificare le tue braccia e il tuo corpo. Con tre diversi set di pesi puoi facilmente modificare il tuo allenamento in base ai tuoi progressi o per diversi gruppi muscolari. I manubri sono codificati in base al colore per permettere una rapida identificazione e rendere il tuo spazio più vibrante.Con il bordo piatto, puoi posarli senza rischiare che i pesi rotolino via. Il rivestimento in neoprene manterrà la tua presa sicura per tutto l’allenamento.
            Versatile
            I manubri sono un ottimo strumento sia per l’allenamento mirato sia come aggiunta al tuo normale programma di allenamento. Che tu stia lavorando su bicipiti, tricipiti, spalle, petto o schiena, un allenamento di resistenza mentre si rimane mobili, migliorerà la tua forza mantenendo i tuoi muscoli magri. Usare i pesi durante una camminata con un amico o anche eseguendo un programma di allenamenti dinamico come un allenamento di step porterà a migliori risultati e ti farà raggiungere i tuoi obiettivi più velocemente.
            I Pesi
            Con tre diverse paia di pesi, modificare il tuo equipaggiamento in base ai tuoi progressi e allenamenti specifici non è mai stato più facile.
            Ogni coppia è di colore diverso per rendere semplice l’associazione (rosa, giallo, verde acqua) e creare una progressione senza problemi.
            Rastrelliera per i Pesi Inclusa
            Il tuo set di manubri PRISP include convenientemente una rastrelliera per conservare il tuo equipaggiamento dopo l’uso. Semplice da montare grazie al cacciavite incluso, la rastrelliera mostra i tuoi pesi in modo elegante, non importa dove li conserverai. Piccoli e facili da trasportare, puoi portare questi manubri in palestra, sul posto di lavoro o anche in viaggio, per non ostacolare i tuoi progressi.",
            "vote" => 4,
            "reviews_number" => 385,
            "expedition_price" => 2.9,
            "weight" => 9.07,
            "color" => "",
            "materials" => ["neoprene"],
        ],
        [
            "name" => "POWRX Palla Medica",
            "genre" => "sport",
            "price" => 31.90,
            "image" => "images/medica.jpg",
            "description" => "Che tu sia un principiante, o una persona particolarmente allenata, con le Palle Mediche della POWRX avrai la possibilità di portare il tuo workout ai massimi livelli.
            Affidati ad oltre 10 anni di esperienza nel settore dello Sport & Fitness.
            La nostra missione è quella di aiutarti a mantenerti in forma divertendoti e, allo stesso tempo, apportare reali benefici a tutte quelle persone che hanno deciso di fare, dello Sport e del Wellness in generale, un vero e proprio stile di vita.
            Grazie al nostro vasto e sempre aggiornato catalogo prodotti, aiutiamo più di 700.000 clienti a raggiungere i loro obiettivi e, soprattutto, a stare bene con se stessi.",
            "vote" => 0,
            "reviews_number" => 0,
            "expedition_price" => 3.9,
            "weight" => "2",
            "color" => "blu",
            "materials" => [],
        ],
        [
            "name" => "Mobvoi Home Tapis roulant",
            "genre" => "sport",
            "price" => 449.99,
            "image" => "images/tapisroulant.jpg",
            "description" => "Modalità camminata e corsa: due modalità di esercizio e velocità regolabile fino a 12 km / h per soddisfare le tue preferenze
            Telecomando e controllo touch: è possibile accendere / spegnere la macchina o regolare la velocità utilizzando il telecomando o il pannello di controllo touch
            Design pieghevole per riporlo facilmente: risparmia spazio riponendo la macchina sotto il letto o il divano
            Altoparlante bluetooth integrato: rendi l'allenamento più piacevole riproducendo le tue musiche preferite mentre ti alleni attraverso l'altoparlante bluetooth integrato
            Forniamo due anni di garanzia per questo prodotto. Si accettano resi entro 30 giorni dall'acquisto.",
            "vote" => 5,
            "reviews_number" => 61,
            "expedition_price" => 0,
            "weight" => "38",
            "color" => "argento",
            "materials" => ["Carbon Steel"],
        ]
    ];

?>