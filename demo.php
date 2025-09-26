<?php
$name = "Messi";
$isDev = true;
$age = 38;
#var_dump($name);
#var_dump($isDev);
#var_dump($age);


$isOld = $age > 40;

define('LOGO_URL', 'https://imgs.search.brave.com/t2nRPV4WubRN17UAxvWb8TxBNDo-zYpVRBGermQGdAk/rs:fit:500:0:1:0/g:ce/aHR0cHM6Ly93YWxs/cGFwZXJzLmNvbS9p/bWFnZXMvaGQvbWVz/c2ktYXJnZW50aW5h/LXNlcmlvdXMtbG9v/ay04aG53eWsxdTU4/eHA4b2N1LmpwZw');

$output = "Hola $name, con una edad de $age. XD";
#ternaria
$outputAge = $isOld
    ? 'Eres viejo, lo siento'
    : 'Eres joven, felicidades';

$outputAge = match (true) {
    $age < 2 => "Eres un bebe, $name",
    $age < 10 => "Eres un niño, $name",
    $age < 18 => "Eres un adolescente, $name",
    $age == 18 => "Eres mayor de edad, $name",
    $age < 40 => "Eres un adulto joven, $name",
    $age < 60 => "Eres un adulto viejo",
    default => "Hueles mas a madera que a fruta, $name",
};

$bestLanguages = ["PHP", "JavaScript","Python"];
$bestLanguages[] = "Java";
$bestLanguages[] = "TypeScript";
$bestLanguages[] = "Kotlin";

$person = [
   "Name" => "Messi",
   "age"  => 78,
   "isDev" => true,
   "languages" => ["PHP", "JavaScrript", "Python"]
];

$person["Name"] = "pheralb";
$person["languages"][]= "C++";
?>

<ul>
    <?php foreach ($bestLanguages as $key => $language) : ?>
        <li><?= $key . " " . $language ?></li>
    <?php endforeach;?>
</ul>

<?php
#Opcion normal
/*if ($isOld){
    echo "<h2> Eres viejo, lo siento</h2>";
} elseif($isDev){
    echo "<h2> No eres viejo, pero eres Dev. Estas jodido</h2>";
} else {
    echo "<h2> Eres joven, felicidades</h2>";
}*/
?>



<h2><?= $outputAge ?></h2>


<?php /* if ($isOld) : ?>
  <h2>Eres viejo,  Lo siento</h2>
<?php elseif($isDev) : ?>
  <h2>No eres viejo, pero eres Dev. Estas jodido</h2>
<?php else : ?>
  <h2>Eres joven, felicidades</h2>
<?php endif; */ ?>







<img src="<?= LOGO_URL ?> " alt="Messi logo" width="200">
<h1>

    <?= $output ?>
    <?= $isOld ?>

</h1>


<style>
    :root {

        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>
