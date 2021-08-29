function totalIt(){
    var input = document.getElementsByTagName("input");
    var total = 0;
    var total2 = 0;
    var vat = 1.27;
        for (var i = 0; i < input.length; i++)
        {
            if (input[i].checked)
            {
                total += parseFloat(input[i].dataset.price);
               
            }
        }
        total2 += total * vat;
        document.getElementById("output").value = new Intl.NumberFormat('de-DE').format(total) + " Ft";
        document.getElementById("output2").value = new Intl.NumberFormat('de-DE').format(total2) + " Ft";
        }



function showPvc(){
    document.getElementById('pvctable').style.display ='block';
    document.getElementById('hyptable').style.display = 'none';
}
          
function showHyp(){
    document.getElementById('hyptable').style.display = 'block';
    document.getElementById('pvctable').style.display ='none';
}
