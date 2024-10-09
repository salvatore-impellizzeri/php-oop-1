<?php
    class Movie{
        private $title;
        private $genre;
        private $cast;
        private $description;
        private $duration;
        private $rating;

        function __construct(
            string $title,
            string $description,
            array $genre,
            int $duration,
            float $rating,
            Cast $cast
        ) {
            $this->title = $title;
            $this->description = $description;
            $this->genre = $genre;
            $this->duration = $duration;
            $this->rating = $rating;
            $this->cast = $cast;
        }

        public function getTitle(): string {
            return $this->title;
        }
        public function getGenre(): array {
            return $this->genre;
        }
        public function getCast(): Cast {
            return $this->cast;
        }
        public function getDescription(): string {
            return $this->description;
        }
        public function getDuration(): int {
            return $this->duration;
        }
        public function getRating(): float {
            return $this->rating;
        }
    }
    
    class Cast{
        public $producer;
        public $numbers;
        public $protagonist;
        public $secondary;
        public $double;

        function __construct(
            int $numbers,
            string $producer,
            array $protagonist,
            array $secondary,
            array $double
        ) {
            $this->numbers = $numbers;
            $this->producer = $producer;
            $this->protagonist = $protagonist;
            $this->secondary = $secondary;
            $this->double = $double;
        }
        public function getProducer(): string {
            return $this->producer;
        }
        public function getNumbers(): int {
            return $this->numbers;
        }
        public function getProtagonist(): string {
            return implode(', ', $this->protagonist);
        }
        public function getSecondary(): string {
            return implode(', ', $this->secondary);
        }
        public function getDouble(): string {
            return implode(', ', $this->double);
        }
    }

    $castSherlockHolmes = new Cast(5, "Joel Silver", ["Robert Downey Jr.","Jude Law"], ["Stephen Fry", "Paul Anderson"], ["Mio nonno"] );
    $castSherlockHolmes2 = new Cast(5, "Joel Silver", ["Robert Downey Jr.","Jude Law"], ["Stephen Fry", "Paul Anderson"], ["Mio nonno"]);


    $SherlockHolmes = new Movie("Sherlock Holmes", "A detective story", ["Giallo","Avventura","Commedia","Thriller"], 128, 8.8, $castSherlockHolmes);
    $SherlockHolmes2 = new Movie("Sherlock Holmes - Gioco di ombre", "A detective story", ["Giallo","Avventura","Commedia","Thriller"], 129, 9.2, $castSherlockHolmes2);

    $movies = [$SherlockHolmes, $SherlockHolmes2];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie PHP</title>
</head>
<body>
    <?php 
        foreach ($movies as $movie) {
    ?>

        <ul>
            <li>
                Titolo: <?php echo $movie->getTitle(); ?>
            </li>
            <li>
                Descrizione: <?php echo $movie->getDescription(); ?>
            </li>
            <li>
                Genere: <?php echo implode(', ', $movie->getGenre()); ?>
            </li>
            <li>
                Durata: <?php echo $movie->getDuration(); ?>
            </li>
            <li>
                Rating: <?php echo $movie->getRating(); ?>
            </li>
            <li>
                Cast:
                <ul>
                        <li>
                            Produttore: <?php echo $movie->getCast()->getProducer(); ?>
                        </li>
                        <li>
                            Numero di attori: <?php echo $movie->getCast()->getNumbers(); ?>
                        </li>
                        <li>
                            Protagonisti: <?php echo $movie->getCast()->getProtagonist(); ?>
                        </li>
                        <li>
                            Attori secondari: <?php echo $movie->getCast()->getSecondary(); ?>
                        </li>
                        <li>
                            Controfigure: <?php echo $movie->getCast()->getDouble(); ?>
                        </li>
                </ul> 
            </li>
        </ul>
        <br>

    <?php      
        }
    ?>
</body>
</html>