<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie PHP</title>
</head>
<?php
    class Movie{
        private $title;
        private $genre;
        private $cast;
        private $description;
        private $duration;
        private $vote;

        function __construct(
            string $title,
            string $description,
            array $genre,
            int $duration,
            int $vote,
            Cast $cast
        ) {
            $this->title = $title;
            $this->description = $description;
            $this->genre = $genre;
            $this->duration = $duration;
            $this->vote = $vote;
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
        public function getVote(): int {
            return $this->vote;
        }
    }
    
    class Cast{
        public $numbers;
        public $protagonist;
        public $secondary;
        public $double;

        function __construct(
            int $numbers,
            array $protagonist,
            array $secondary,
            array $double
        ) {
            $this->numbers = $numbers;
            $this->protagonist = $protagonist;
            $this->secondary = $secondary;
            $this->double = $double;
        }
        public function getNumbers(): int {
            return $this->numbers;
        }
        public function getProtagonist(): array {
            return $this->protagonist;
        }
        public function getSecondary(): array {
            return $this->secondary;
        }
        public function getDouble(): array {
            return $this->double;
        }
    }
?>
</body>
</html>