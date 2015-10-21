function calcul(){
    var tva = $('#tauxTVA option:selected').text();
    var ht = $('#montantHT').val();
   var result = ht*tva;
   console.log(ht);
   console.log(tva);
     console.log(result);
    document.getElementById('montantTVA').value = result;
}