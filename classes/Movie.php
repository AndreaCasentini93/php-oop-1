<?php

    class Movie {
        // Attributes
        public $title;
        public $original_title;
        public $original_language;
        public $vote;
        public $genre;
        public $year_release;
        public $plot;
        public $url;

        // Constructs
        public function __construct($title, $original_title = "", $original_language = "", $vote = 0, $genre = "", $year_release = "", $plot = "") {
            $this->title = $title;
            $this->original_title = $original_title;
            $this->original_language = $original_language;
            $this->vote = $vote;
            $this->genre = $genre;
            $this->year_release = $year_release;
            $this->plot = $plot;
            $this->url = "/movies/" . str_replace(" ", "-", $title);
        }

        // Methods
        public function getExcerpt($charsNumber = 60) {
            return substr($this->plot, 0, $charsNumber) . "...";
        }
    }

    // Debug
    $back_to_the_future_plot = "Ambientato nella New York del 1945, racconta la storia dei Corleone, la più potente famiglia italo-americana mafiosa della città. Prostituzione, racket, gioco d'azzardo sono le attività in cui è specializzata e il patriarca Don Vito (Marlon Brando) ha stabilito negli anni un potere fondato sulla violenza ma soprattutto sui debiti: elargendo favori in cambio di fedeltà e riconoscenza, ha amicizie importanti tra personaggi di spicco della società newyorkese. Si avvale del contributo dei suoi figli: l'iracondo Santino detto \"Sonny\" (James Caan), l'ingenuo Fredo (John Cazale), e il figliastro Tom Hagen (Robert Duvall), avvocato di spicco e braccio destro del padre tra i consiglieri per gli affari illegali.
    Dopo il fastoso matrimonio della figlia Connie (Talia Shire), Don Vito riceve il trafficante di droga Sollozzo (Al Lettieri), ma nega la propria protezione e il supporto economico per un nuovo traffico di stupefacenti; questo rifiuto scatena una guerra feroce tra le famiglie mafiose, fatta di vendette, ritorsioni e attentati per affermare la supremazia sulla città.
    Lo stesso Don Vito rimane ferito in un attacco; il figlio Micheal (Al Pacino), decorato della seconda guerra mondiale e fino ad allora estraneo alle attività criminali della famiglia, decide di vendicare l'attentato insieme al fratello Sonny, al comando dei Corleone in assenza del padre, e subito dopo scappa in Sicilia per non essere arrestato. Sonny viene ucciso in un'imboscata, e Don Vito, colpito da questo avvenimento, si riunisce con le famiglie per stipulare una tregua, offrendo il benestare sul traffico di droga e ottenendo l'incolumità per Micheal, che può tornare a New York per assumere il comando e diventare il nuovo \"padrino\"";

    $the_godfather_plot = "Il film narra la storia di Marty McFly (Micheal J. Fox), un adolescente californiano alle prese con uno scienziato carismatico e un po’ strampalato, Emmett “Doc” Brown (Christopher Lloyd). Doc invita Marty a raggiungerlo al parcheggio di un grande centro commerciale per aiutarlo a filmare un esperimento. Una volta giunto lì, Marty scopre che l’esperimento è in realtà una macchina del tempo, costruita all’interno di una DeLorean modificata. Lo scienziato rivela che la macchina è alimentata a plutonio e confessa di aver rubato il prezioso elemento ai terroristi libici.
    Nel tentativo di spiegare a Marty il funzionamento della macchina, Doc seleziona il 5 Novembre 1955 come data di viaggio. Proprio in quel momento, sopraggiungono inaspettatamente i terroristi, i quali sparano allo scienziato. Marty si rifugia dentro la DeLorean e inavvertitamente ne attiva i comandi, e così viaggia indietro nel tempo, fino al 1955. Qui il ragazzo scopre di non avere plutonio a sufficienza per tornare indietro. Così si mette alla ricerca del giovane Doc, l’unico che possa aiutarlo.
    Strada facendo incontra George (Crispin Glover), suo futuro padre, bullizzato dal compagno di classe Biff Tannen (Thomas F. Wilson), e, nel seguirlo, finisce con l'intromettersi nel suo passato. Infatti, Lorraine (Lea Thompson) si invaghisce di Marty, innescando un paradosso temporale pericolosissimo, dal momento che la ragazza è la sua futura madre.
    Una volta rintracciato Doc, lo scienziato si mette all’opera per escogitare un piano per riportare Marty “indietro” nel futuro e mette in guardia il ragazzo: dovrà necessariamente fare in modo che i suoi genitori si innamorino quella notte stessa, o verrà cancellato dalla faccia della terra.";

    $movie1 = new Movie("Ritorno al futuro", "Back to the Future", "en", 4, "commedy", "18-10-1985", $back_to_the_future_plot);
    $movie2 = new Movie("Il padrino", "The Godfather", "en", 4, "drama", "21-09-1972", $the_godfather_plot);

    // var_dump($movie1);
    // var_dump($movie1->getExcerpt());
    // var_dump($movie2);
    // var_dump($movie2->getExcerpt());

?>