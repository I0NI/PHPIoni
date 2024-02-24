<?php
echo "Estructuras de control condicionales (IF - IF ELSE)\n";
//calcule la edad de una persona basado en una fecha de nacimiento. 
$fechaNacimiento = '2004-12-04';
$fechaNacimientoObj = new DateTime($fechaNacimiento);
$fechaActual = new DateTime();
$edad = $fechaActual->diff($fechaNacimientoObj)->y;
echo "La edad es: " . $edad . " años\n";

//cuál es el mayor de los dos.
$primerNumero = 10;
$segundoNumero = 20;

if ($primerNumero > $segundoNumero) {
    echo "El mayor es: " . $primerNumero;
} elseif ($segundoNumero > $primerNumero) {
    echo "El mayor es: " . $segundoNumero ;
} else {
    echo "Los números son iguales";
}

//determine si es par o impar.
$numero = 7;

if ($numero % 2 == 0) {
    echo "\nEl número es par";
} else {
    echo "\nEl número es impar";
}



echo "\n\nEstructuras de control Iterativas ( FOR - WHILE):\n";
//calcule su factorial utilizando un bucle while.
$numeroBase = 6;
$factorial = 1;

while ($numeroBase > 1) {
    $factorial *= $numeroBase;
    $numeroBase--;
}

echo "El factorial es: " . $factorial;

// Generar 20 números aleatorios
$NumerosA = [];
for ($i = 0; $i < 20; $i++) {
    $NumerosA[] = rand(1, 100); 
}
echo "\nNúmeros Aleatorios: " . implode(', ', $NumerosA) . "\n";
rsort($NumerosA);

echo "Números ordenados de mayor a menor: " . implode(', ', $NumerosA);



echo "\n\nArray Asociato y Foreach";
// Llenar un array asociativo con datos de 10 alumnos
$alumnos = [
    "1" => ["nombre" => "Juanito", "curso" => "Matemáticas", "nota" => 85],
    "2" => ["nombre" => "María", "curso" => "Progra lll", "nota" => 92],
    "3" => ["nombre" => "Carlos", "curso" => "Fisica ll", "nota" => 78],
    "4" => ["nombre" => "Ioni", "curso" => "Inglés", "nota" => 95],
    "5" => ["nombre" => "Ana", "curso" => "Física l", "nota" => 88],
    "6" => ["nombre" => "Pedro", "curso" => "Electronica", "nota" => 90],
    "7" => ["nombre" => "Sofía", "curso" => "Literatura", "nota" => 87],
    "8" => ["nombre" => "Miguel", "curso" => "Contabilidad", "nota" => 75],
    "9" => ["nombre" => "Isabel", "curso" => "Arte", "nota" => 93],
    "10" => ["nombre" => "JP", "curso" => "Educación Física", "nota" => 82]
];

foreach ($alumnos as $clave => $datos) {
    echo "\nAlumno $clave:\n";
    echo "Nombre: " . $datos['nombre'] . "\n";
    echo "Curso: " . $datos['curso'] . "\n";
    echo "Nota: " . $datos['nota'] . "\n\n";
}
?>