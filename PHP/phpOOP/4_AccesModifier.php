<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Modifier</title>
</head>

<body>
    <?php
    class Fruit
    {
        public $name;
        protected $color;
        private $weight;

        /**
         * Set the value of name
         *
         * @return  self
         */
        public function setName($name)
        {
            $this->name = $name;

            return $this;
        }

        /**
         * Set the value of color
         *
         * @return  self
         */
        protected function setColor($color)
        {
            $this->color = $color;

            return $this;
        }

        /**
         * Set the value of weight
         *
         * @return  self
         */
        private function setWeight($weight)
        {
            $this->weight = $weight;

            return $this;
        }
    }

    $mango = new Fruit();
    $mango->name = 'Mango';
    // $mango->color = 'Yellow';    --> Error
    // $mango->weight = '300';      --> Error
    // $mango->set_color('Yellow'); --> ERROR
    // $mango->set_weight('300');   --> ERROR

    ?>
</body>

</html>