<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Verificar si se ha enviado el campo "selectedCountries"
  if (isset($_POST["selectedCountries"])) {
    // Obtener los países seleccionados del arreglo
    $selectedCountriesArr = $_POST["selectedCountries"];

    // Hacer lo que desees con el arreglo de países seleccionados
    // Por ejemplo, puedes imprimirlos o guardarlos en una base de datos
    foreach ($selectedCountriesArr as $country) {
      echo $country . "<br>";
      // Aquí puedes realizar otras operaciones con los países seleccionados
    }
  }
}
?>
