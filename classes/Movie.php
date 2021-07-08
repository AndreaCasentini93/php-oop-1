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
            $this->url = "/movies/" . strtolower(str_replace(" ", "-", $title));
        }

        // Methods
        public function getExcerpt($charsNumber = 80) {
            return substr($this->plot, 0, $charsNumber) . "...";
        }
    }
    
?>