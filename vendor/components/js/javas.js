$(document).ready(function() {
  $('.ocultar').click(function(event){
    var nomdiv = $(this).attr('name');
    switch (nomdiv) {
      case "m1":
        $('#n1').hide();
      break;
      case "m2":
        $('#n2').hide();
      break;
      case "m3":
        $('#n3').hide();
      break;
      case "m4":
        $('#n4').hide();
      break;
      case "m5":
        $('#n5').hide();
      break;
      case "m6":
        $('#n6').hide();
      break;
      case "m7":
        $('#n7').hide();
      break;
      case "m8":
        $('#n8').hide();
      break;
      case "m9":
        $('#n9').hide();
      break;
      case "m10":
        $('#n10').hide();
      break;
      case "m11":
        $('#n11').hide();
      break;
      case "m12":
        $('#n12').hide();
      break;
      case "m13":
        $('#n13').hide();
      break;
      default:
        alert("Opcion no valida!");
        break;
    }
  });
  $('.mostrar').click(function(event){
    var nomdiv = $(this).attr('name');
    switch (nomdiv) {
      case "m1":
        $('#n1').show();
      break;
      case "m2":
        $('#n2').show();
      break;
      case "m3":
        $('#n3').show();
      break;
      case "m4":
        $('#n4').show();
      break;
      case "m5":
        $('#n5').show();
      break;
      case "m6":
        $('#n6').show();
      break;
      case "m7":
        $('#n7').show();
      break;
      case "m8":
        $('#n8').show();
      break;
      case "m9":
        $('#n9').show();
      break;
      case "m10":
        $('#n10').show();
      break;
      case "m11":
        $('#n11').show();
      break;
      case "m12":
        $('#n12').show();
      break;
      case "m13":
        $('#n13').show();
      break;
      default:
        alert("Opcion no valida!");
        break;
    }
  });





});
