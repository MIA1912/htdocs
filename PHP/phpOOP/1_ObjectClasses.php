<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class Fruit
    {
        // Properties
        public $name;
        public $color;

        // Methods
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
         * Get the value of name
         */
        public function getName()
        {
            return $this->name;
        }

        /**
         * Set the value of color
         *
         * @return  self
         */
        public function setColor($color)
        {
            $this->color = $color;

            return $this;
        }

        /**
         * Get the value of color
         */
        public function getColor()
        {
            return $this->color;
        }
    }

    $apple = new Fruit();
    $apple->setName('Apple');
    $apple->setColor('Red');
    ?>
    <div>
        This is an <?php echo $apple->getName(); ?>
    </div>
    <div>
        The color is <?php echo $apple->getColor(); ?>
    </div>
</body>

</html>