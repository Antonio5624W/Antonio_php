<?php
declare(strict_types=1);
//Definición de una clase
class SuperHero
{
    //promoted properties (PHP 8.0+)
    public function __construct(
        private string $name,
        public array $powers,
        public string $planet
    ) {
    }

    public function attack()
    {
        return "!$this->name ataca con sus poderes!";
    }
    
    public function description()
    {
        $powers = implode(", ", $this->powers);
        return "!$this->name es un superHero que viene de $this->planet y tiene los siguientes poderes:$powers";
    }

    public static function random()
    {
        $names = ["superman", "batman", "wonderwoman","flash","ironman","hulk"];
        $powers = [
            ["fuerza", "vuelo", "velocidad"],
            ["inteligencia", "tecnología", "estrategia"],
            ["fuerza", "agilidad", "lazo de la verdad"],
            ["velocidad", "reflejos", "viaje en el tiempo"],
            ["tecnología", "armadura", "vuelo"],
            ["fuerza", "inteligencia", "estrategia"]
        ];
        $planets = ["Krypton", "Tierra", "Themyscira", "Tierra", "Tierra"];

        $name = $names[array_rand($names)];
        $power = $powers[array_rand($powers)];
        $planet = $planets[array_rand($planets)]; 

        return new self($name, $power, $planet);
        //echo "el superheroe aleatorio es: $name, con poderes: " . implode(", ", $power) . " y viene del planeta $planet\n";
    }
}
//Uso de la clase con un método estático
$hero = SuperHero::random();
echo $hero->description();
