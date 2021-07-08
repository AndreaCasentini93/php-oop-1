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

    $rocky_plot = "Il pugile dilettante Rocky Balboa ha l'opportunità di raggiungere il successo quando è chiamato a sfidare il campione dei pesi massimi, Apollo Creed. Primo capitolo della fortunata serie, vincitore di tre premi Oscar nel 1977.";

    $movie1 = new Movie("Rocky", "Rocky", "en", 4, "drama", "25-03-1977", $rocky_plot);

    var_dump($movie1);
    var_dump($movie1->getExcerpt());

?>