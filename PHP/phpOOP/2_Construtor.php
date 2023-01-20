<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constructor in PHP</title>
</head>

<body>
    <?php
    class Fruit
    {
        public $name;
        public $color;
        public $flavor;

        public function __construct($name, $color, $flavor)
        {
            $this->name = $name;
            $this->color = $color;
            $this->flavor = $flavor;
        }

        /**
         * Get the value of name
         */
        public function getName()
        {
            return $this->name;
        }

        /**
         * Get the value of color
         */
        public function getColor()
        {
            return $this->color;
        }

        /**
         * Get the value of flavor
         */
        public function getFlavor()
        {
            return $this->flavor;
        }
    }

    $apple = new Fruit("Apple", "Red", "Sweet");
    ?>
    <div>
        This is an <?php echo $apple->getName() ?>
        <br>
        The color is <?php echo $apple->getColor() ?>
        <br>
        The Flavor is <?php echo $apple->getFlavor() ?>
    </div>


</body>

</html>