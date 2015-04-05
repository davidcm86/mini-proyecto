$(document).ready(function () { 
  // llama a un método para buscar la ciudad 
  $('#autocomplete').autocomplete({
        source: "/pages/buscar_ciudades.json"
  });
});