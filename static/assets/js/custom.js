// JavaScript Document
var type_commande_verre = 0;
//var deuxiemepaire = 0;
$(document).ready(function(){
    setInterval(function(){ reload_page(); },120*60000);
 });

 function reload_page()
 {
    window.location.reload(true);
    console.log("Refresh");
 }
 
$(document).ready(function($){
 
$(function(){
        $(document).on('click','input[type=text]',function(){ this.select(); });
        $(document).on('click','input[type=number]',function(){ this.select(); });
    });
    
function roundToNearest(numToRound, numToRoundTo) {
    numToRoundTo = 1 / (numToRoundTo);

    return (Math.round(numToRound * numToRoundTo) / numToRoundTo).toFixed(2);
}

var regExp = new RegExp('[a-zA-Z]'),
    inputVal = '';

$('#sphereD').on('keydown keyup', function(e) {
    var value = $(this).val();
    // Do not allow alphabets to be entered.
    if (regExp.test(value)) {
        $(this).val(inputVal)
    }
    else{ 
        inputVal = value
    }
});

$('#sphereG').on('keydown keyup', function(e) {
    var value = $(this).val();
    // Do not allow alphabets to be entered.
    if (regExp.test(value)) {
        $(this).val(inputVal)
    }
    else{ 
        inputVal = value
    }
});

$('#cylindreD').on('keydown keyup', function(e) {
    var value = $(this).val();
    // Do not allow alphabets to be entered.
    if (regExp.test(value)) {
        $(this).val(inputVal)
    }
    else{ 
        inputVal = value
    }
});

$('#cylindreG').on('keydown keyup', function(e) {
    var value = $(this).val();
    // Do not allow alphabets to be entered.
    if (regExp.test(value)) {
        $(this).val(inputVal)
    }
    else{ 
        inputVal = value
    }
});

$('#additionD').on('keydown keyup', function(e) {
    var value = $(this).val();
    // Do not allow alphabets to be entered.
    if (regExp.test(value)) {
        $(this).val(inputVal)
    }
    else{ 
        inputVal = value
    }
});

$('#additionG').on('keydown keyup', function(e) {
    var value = $(this).val();
    // Do not allow alphabets to be entered.
    if (regExp.test(value)) {
        $(this).val(inputVal)
    }
    else{ 
        inputVal = value
    }
});
    
    $( "input[type=number]" ).change(function() {
        var max = parseInt($(this).attr('max'));
        var min = parseInt($(this).attr('min'));
        if ($(this).val() > max)
        {
            $(this).val(max);
        }
        else if ($(this).val() < min)
        {
            $(this).val(min);
        } 
    });    
    
	$("#generation_progressif").css("display", "none");
	$("#Teledetourage").attr('disabled', true);
	$("#div_prismes").css("display", "none");
	
	$("#Stock_1").prop("checked", true);

	$('.display_fabrication').addClass('hide');
	$('.pager .previous').removeClass('disabled');

$('#cotec').on('change', function() {
	$('#to_etape2').removeClass('disabled');
});

// $( "#to_etape2" ).click(function() {
//   var g = 0;
// 	var gauche = $('#gauche').is(':checked');
// 	var diametreG = $('#diametreG').val();
// 	var dCheck = $('#droit').is(':checked');
// 	var diametreD = $('#diametreD').val();
//
// 	var nameD = $("#type_de_verreD option:selected").html();
// 	var nameG = $("#type_de_verreG option:selected").html();
//
// 	var traitementD = $("#traitementD option:selected").text();
// 	var traitementG = $("#traitementG option:selected").text();
//
// 	if(gauche && diametreG == "")
// 	{
// 		g = 1;
//
//
// 	}
// 	if($('#calibre_selected').val() == "" && (diametreD == "precalibrage" || diametreG == "precalibrage"))
// 	{
// 		g = 1;
//
// 	}
//
// 	if(gauche && diametreG == "precalibrage" && ($("#cotea").val() == '' || $("#coteb").val() == '' || $("#cotec").val() == '' || $("#ecart_puppillaire_gauche").val() == ''  || $("#hauteur_gauche").val() == '' ))
// 	{
// 		g = 1;
//
// 	}
//
// 	if(dCheck && diametreD == "precalibrage" && ($("#cotea").val() == '' || $("#coteb").val() == '' || $("#cotec").val() == '' || $("#ecart_puppillaire_droit").val() == ''  || $("#hauteur").val() == '' ))
// 	{
// 		g = 1;
//
// 	}
//
// 	if(dCheck && diametreD == "")
// 	{
// 		g = 1;
//
//
// 	}
//
// 	if(gauche && traitementG == "" && nameG.indexOf("Panier") == 0 && nameG.indexOf("Stock") == 0)
// 	{
// 		g = 1;
//
//
// 	}
//
// 	if(dCheck && traitementD == "" && nameD.indexOf("Panier") == 0 && nameD.indexOf("Stock") == 0)
// 	{
// 		g = 1;
//
//
// 	}
//
//   if(g == 0)
//  {
//   $('#etape1').removeClass('active');
//   $('#titre_etape1').removeClass('active');
//   $('#etape1').removeClass('in');
//   $('#to_etape1').removeClass('disabled');
//
//   $('#etape2').addClass('active');
//   $('#titre_etape2').addClass('active');
//   $('#etape2').addClass('in');
//
//  $('.pager .previous').removeClass('disabled');
//  }
//
// });

$( "#to_etape3" ).click(function() {
  $('#etape1').removeClass('active');
  $('#titre_etape1').removeClass('active');
  $('#etape1').removeClass('in');
  
  $('#etape2').removeClass('active');
  $('#titre_etape2').removeClass('active');
  $('#etape2').removeClass('in');
  
  $('#etape3').addClass('active');
  $('#titre_etape3').addClass('active');
  $('#etape3').addClass('in');
  $('.pager .previous').removeClass('disabled');
  
});

$( ".pager #to_etape1" ).click(function() {
  $('#etape2').removeClass('active');
  $('.display_stock #titre_etape2').removeClass('active');
  $('#etape2').removeClass('in');
  
  $('#etape3').removeClass('active');
  $('.display_stock #titre_etape3').removeClass('active');
  $('#etape3').removeClass('in');
  
  $('#etape1').addClass('active');
  $('.display_stock #titre_etape1').addClass('active');
  $('#etape1').addClass('in');
  
  if($('#type_commande').val() == 1)
  {
  	    var currentForm = $(this).closest('form');
		currentForm.find('.ancienne_commande_ref').hide();
		$('.next .btn').removeClass('disabled');
		$('.ec_commande_status').fadeOut(60);
		$('#li_commande_ferme').addClass('active');
		$('#li_casse_atelier').removeClass('active');
		$('#li_erreur_ophta').removeClass('active');
  }
  
});

$('#reference_client').keyup(function() {
 
    var nombreCaractere = $(this).val().length;
 	nombreCaractere = 14-nombreCaractere;
    var msg = ' '+ nombreCaractere + ' Caractères restants';
    $('#compeur_caracteres').text(msg);
    
    $('#caracteristique_verre').removeClass('hide');
    $('#div2_ref_client').removeClass('focus_panel');
    
  })


$('#indices').on('change', function() {
	$('#div_refraction').addClass('hide');
    $('#generation').val("").change();
    $('#lensFocalGroup').val("").change();
    $("#generation_progressif").css("display", "none");
    $('#precalibrage').addClass('hide');
  	$('#certif').addClass('hide');
	$('#additional_info').addClass('hide');
    $('#droit').prop('checked', true);
    $('#gauche').prop('checked', true);
	
    
	$('#type_produit').removeClass('hide');
	$('#indices_panel').removeClass('focus_panel')
	$('#lensFocalGroup_panel').addClass('focus_panel');
	$('#lensFocalGroup').focus();

	$('#refraction_panel').removeClass('focus_panel')
	$('#generation_panel').removeClass('focus_panel')
	
	
	var indiceId = $(this).val();
	var generation = $('#generation').val();
	var lensFocalGroup = $('#lensFocalGroup').val();
	var sphereD = $('#sphereD').val();
	var cylindreD = $('#cylindreD').val();
	var axeD = $('#axeD').val();
	var additionD = $('#additionD').val();
	var sphereG = $('#sphereG').val();
	var cylindreG = $('#cylindreG').val();
	var axeG = $('#axeG').val();
	var additionG = $('#additionG').val();

	var stockD = $('input[name="dispoD"]:checked').val()
	var stockG = $('input[name="dispoG"]:checked').val()
	
	if(stockG == "StockG")
	{
		stockG = "StockD";
	}
	
	if(stockG == "FabricationG")
	{
		stockG = "FabricationD";
	}
	
	if(stockG == "ToutG")
	{
		stockG = "ToutD";
	}
	
	if(indiceId=='1.5')
	{
		$("#id_indice_verre").val("1");
	}
	else if(indiceId=='1.53')
	{
		$("#id_indice_verre").val("2");
	}
	else if(indiceId=='1.56')
	{
		$("#id_indice_verre").val("3");
	}
	else if(indiceId=='1.6')
	{
		$("#id_indice_verre").val("4");
	}
	else if(indiceId=='1.67')
	{
		$("#id_indice_verre").val("5");
	}
	else if(indiceId=='1.74')
	{
		$("#id_indice_verre").val("6");
	}
	else if(indiceId=='1.59')
	{
		$("#id_indice_verre").val("8");
	}
	else if(indiceId=='mineral')
	{
		$("#id_indice_verre").val("9");
	}
	else
	{
	
	}
	let sel = document.getElementById("lensFocalGroup");
	let op = sel.getElementsByTagName("option")
	if(indiceId=='mineral') {
		op[3].hidden = true;
		op[4].hidden = true;
		op[6].hidden = true;
	}
	else {
		op[3].hidden = false;
		op[4].hidden = false;
		op[6].hidden = false;
	}



	if(lensFocalGroup == '3')
	{
	if($('#progressionD').val() == '')
	{
		$("#detailD").css("display", "none");
	}
	else
	{
		$("#detailD").css("display", "block");
	}

	if($('#progressionG').val() == '')
	{
		$("#detailG").css("display", "none");
	}
	else
	{
		$("#detailG").css("display", "block");
	}
	}
	else
	{
		$("#detailD").css("display", "block");
		$("#detailG").css("display", "block");
	}
   
});

$('#lensFocalGroup').on('change', function() {
	
	$('#sphereD').select();
	
	
});

$('#generation').on('change', function() {

  var generation = $(this).val();
  $('#precalibrage').addClass('hide');
  $('#certif').addClass('hide');
  $('#additional_info').addClass('hide');
  $('#progressionD').prop('disabled', false);
  $('#progressionG').prop('disabled', false);
  
  var droite = $('#droit').is(':checked');
	var gauche = $('#gauche').is(':checked');
	if(droite)
	{	
		$(".display_droit").css("display", "block");
		$("#sphereD").prop('disabled', false);
		$("#cylindreD").prop('disabled', false);
		$("#axeD").prop('disabled', false);
		$("#additionD").prop('disabled', false);
		$("#VersDroit").css("display", "block");
	}
	else
	{
		$(".display_droit").css("display", "none");
		
		$("#sphereD").val('');
		$("#cylindreD").val('');
		$("#axeD").val('');
		$("#additionD").val('');
		
		$("#sphereD").prop('disabled', true);
		$("#cylindreD").prop('disabled', true);
		$("#axeD").prop('disabled', true);
		$("#additionD").prop('disabled', true);
		
		$("#VersDroit").css("display", "none");
	}
	
	if(gauche)
	{
		$(".display_gauche").css("display", "block");
		$("#sphereG").prop('disabled', false);
		$("#cylindreG").prop('disabled', false);
		$("#axeG").prop('disabled', false);
		$("#additionG").prop('disabled', false);
		
	/*	$("#sphereG").val('+0.00');
		$("#cylindreG").val('+0.00');
		$("#axeG").val('0');
		$("#additionG").val('+0.75');
	*/	
		$("#VersGauche").css("display", "block");
	}
	else
	{
		$(".display_gauche").css("display", "none");
		
		$("#sphereG").val('');
		$("#cylindreG").val('');
		$("#axeG").val('');
		$("#additionG").val('');
		
		$("#sphereG").prop('disabled', true);
		$("#cylindreG").prop('disabled', true);
		$("#axeG").prop('disabled', true);
		$("#additionG").prop('disabled', true);
		
		$("#VersGauche").css("display", "none");
	}
  
  if(generation != "")
  {
		$('#generation_panel').removeClass('focus_panel')
		$('#refraction_panel').addClass('focus_panel');

		$('#div_refraction').removeClass('hide')

		$('#sphereD').select();
		var indiceId = $('#indices').val();
		var lensFocalGroup = $('#lensFocalGroup').val();
		var sphereD = $('#sphereD').val();
		var cylindreD = $('#cylindreD').val();
		var axeD = $('#axeD').val();
		var additionD = $('#additionD').val();
		var sphereG = $('#sphereG').val();
		var cylindreG = $('#cylindreG').val();
		var axeG = $('#axeG').val();
		var additionG = $('#additionG').val();

		var stockD = $('input[name="dispoD"]:checked').val()
		var stockG = $('input[name="dispoG"]:checked').val()
		
		if(stockG == "StockG")
		{
			stockG = "StockD";
		}
	
		if(stockG == "FabricationG")
		{
			stockG = "FabricationD";
		}
	
		if(stockG == "ToutG")
		{
			stockG = "ToutD";
		}

		if(lensFocalGroup == '3')
		{
		if($('#progressionD').val() == '')
		{
			$("#detailD").css("display", "none");
		}
		else
		{
			$("#detailD").css("display", "block");
		}

		if($('#progressionG').val() == '')
		{
			$("#detailG").css("display", "none");
		}
		else
		{
			$("#detailG").css("display", "block");
		}
		}
		else
		{
			$("#detailD").css("display", "block");
			$("#detailG").css("display", "block");
		}
		
		if(generation == "Progressif de stock")
		{
			$('#cylindreD').val("+0.00");
			$('#cylindreG').val("+0.00");
			$('#axeD').val("0");
			$('#axeG').val("0");
			
			$('#cylindreD').prop('readOnly', true);
			$('#cylindreG').prop('readOnly', true);
			$('#axeD').prop('readOnly', true);
			$('#axeG').prop('readOnly', true);
		}
		else
		{
			if(deuxiemepaire != 1)
			{
				$('#cylindreD').prop('readOnly', false);
				$('#cylindreG').prop('readOnly', false);
				$('#axeD').prop('readOnly', false);
				$('#axeG').prop('readOnly', false);
			}
		}
       
    }
  
});

$("#checkbox_prismes").click(function() {
   
    $('#precalibrage').addClass('hide');
  	$('#certif').addClass('hide');
	$('#additional_info').addClass('hide');
    if($(this).is(":checked")) 
    {
        $("#select_prisme").css("display", "none");
		$("#div_prismes").css("display", "block");
		$("#checkbox_prismes_extend").prop('checked', true);
		
		$('#tab_refraction').removeClass('col-xs-11').addClass('col-xs-8');
		$('#tab_prismes').removeClass('col-xs-1').addClass('col-xs-4');
		
    }
});

$("#checkbox_prismes_extend").click(function() {
   
    $('#precalibrage').addClass('hide');
  	$('#certif').addClass('hide');
	$('#additional_info').addClass('hide');
    if($(this).is(":checked")) 
    {
       
    }
    else
    {
    	$("#select_prisme").css("display", "block");
		$("#div_prismes").css("display", "none");
		$("#checkbox_prismes").prop('checked', false);
		
		$('#tab_refraction').removeClass('col-xs-8').addClass('col-xs-11');
		$('#tab_prismes').removeClass('col-xs-4').addClass('col-xs-1');
    }
});

$('input[name=sphereD]').focus(function() { 
    $('#produit').addClass('hide');
    $("#detailD").css("display", "none");
    $("#afficherV").css("display", "inline-block");
    $('#precalibrage').addClass('hide');
  	$('#certif').addClass('hide');
	$('#additional_info').addClass('hide');
});
$('input[name=cylindreD]').focus(function() { 
    $('#produit').addClass('hide');
    $("#detailD").css("display", "none");
    $("#afficherV").css("display", "inline-block");
    $('#precalibrage').addClass('hide');
  	$('#certif').addClass('hide');
	$('#additional_info').addClass('hide');
});
$('input[name=axeD]').focus(function() { 
    $('#produit').addClass('hide');
    $("#detailD").css("display", "none");
    $("#afficherV").css("display", "inline-block");
    $('#precalibrage').addClass('hide');
  	$('#certif').addClass('hide');
	$('#additional_info').addClass('hide');
});
$('input[name=additionD]').focus(function() { 
    $('#produit').addClass('hide');
    $("#detailD").css("display", "none");
    $("#afficherV").css("display", "inline-block");
    $('#precalibrage').addClass('hide');
  	$('#certif').addClass('hide');
	$('#additional_info').addClass('hide');
});
$('input[name=sphereG]').focus(function() { 
    $('#produit').addClass('hide');
    $("#detailD").css("display", "none");
    $("#afficherV").css("display", "inline-block");
    $('#precalibrage').addClass('hide');
  	$('#certif').addClass('hide');
	$('#additional_info').addClass('hide');
});
$('input[name=cylindreG]').focus(function() { 
    $('#produit').addClass('hide');
    $("#detailD").css("display", "none");
    $("#afficherV").css("display", "inline-block");
    $('#precalibrage').addClass('hide');
  	$('#certif').addClass('hide');
	$('#additional_info').addClass('hide');
});
$('input[name=axeG]').focus(function() { 
    $('#produit').addClass('hide');
    $("#detailD").css("display", "none");
    $("#afficherV").css("display", "inline-block");
    $('#precalibrage').addClass('hide');
  	$('#certif').addClass('hide');
	$('#additional_info').addClass('hide');
});
$('input[name=additionG]').focus(function() { 
    $('#produit').addClass('hide');
    $("#detailD").css("display", "none");
    $("#afficherV").css("display", "inline-block");
    $('#precalibrage').addClass('hide');
  	$('#certif').addClass('hide');
	$('#additional_info').addClass('hide');
});


$('input[name=sphereD]').change(function() {
    var indiceId = $('#indices').val();
    var generation = $('#generation').val();
    var lensFocalGroup = $('#lensFocalGroup').val();
    var sphereD = $(this).val();
    var cylindreD = $('#cylindreD').val();
    var axeD = $('#axeD').val();
    var additionD = $('#additionD').val();
    var sphereG = $('#sphereG').val();
    var cylindreG = $('#cylindreG').val();
    var axeG = $('#axeG').val();
    var additionG = $('#additionG').val();
    
   // $('#produit').removeClass('hide')
    
    
    $("#detailD").css("display", "none");
    $("#afficherV").css("display", "inline-block");
    
    var stockD = $('input[name="dispoD"]:checked').val()
	var stockG = $('input[name="dispoG"]:checked').val()
	
	if(stockG == "StockG")
	{
		stockG = "StockD";
	}
	
	if(stockG == "FabricationG")
	{
		stockG = "FabricationD";
	}
	
	if(stockG == "ToutG")
	{
		stockG = "ToutD";
	}
    
    if(sphereD == '')
    {
    	sphereD = '-';
    	$("#sphereD").val("+0.00");
    }
    else
    {
    	if (sphereD.indexOf(",") >= 0)
    	{
    		sphereD = sphereD.replace(',', '.');
    		sphereD = roundToNearest(sphereD,0.25);
    		$("#sphereD").val(sphereD);
    	}
    	
    	if (sphereD.indexOf(".") < 0)
    	{
    		
    		sphereD = sphereD+".00";
    		//alert(sphereD);
    		$("#sphereD").val(sphereD);
		}
		if(isNaN(sphereD) == true)
		{
			sphereD = "0.00"
		}

    	if (sphereD.indexOf("+") >= 0)
    	{
    		sphereD = sphereD.replace('+', '');
    		n_sphereD = roundToNearest(sphereD,0.25);
    		n_sphereD = n_sphereD.toString();
    		if (n_sphereD.indexOf(".") < 0)
			{
				n_sphereD = n_sphereD+".00";	
			}
    		var new_sphere = "+"+n_sphereD;
    		
    		$("#sphereD").val(new_sphere);
    	}
    	else if (sphereD.indexOf("-") >= 0)
    	{
    		n_sphereD = roundToNearest(sphereD,0.25);
    		n_sphereD = n_sphereD.toString();
    		
    		if (n_sphereD.indexOf(".") < 0)
			{
				n_sphereD = n_sphereD+".00";	
			}
    		$("#sphereD").val(n_sphereD);
    	}
    	else
    	{
    		n_sphereD = roundToNearest(sphereD,0.25);
    		n_sphereD = n_sphereD.toString();
    		
    		if (n_sphereD.indexOf(".") < 0)
			{
				n_sphereD = n_sphereD+".00";
			}
    		var new_sphere = "+"+n_sphereD;
    		
    		$("#sphereD").val(new_sphere); 
    		sphereD = $('#sphereD').val();
    	}
    }
    
  /*  if($("#droit").prop('checked') == true && $("#gauche").prop('checked') == true && sphereG == "+0.00"){
		$('#sphereG').val($(this).val())
		sphereG = sphereD
	}
  */  	
        
});

$('input[name=sphereG]').change(function() {
     var indiceId = $('#indices').val();
    var generation = $('#generation').val();
    var lensFocalGroup = $('#lensFocalGroup').val();
    var sphereD = $('#sphereD').val();
    var cylindreD = $('#cylindreD').val();
    var axeD = $('#axeD').val();
    var additionD = $('#additionD').val();
    var sphereG = $(this).val();
    var cylindreG = $('#cylindreG').val();
    var axeG = $('#axeG').val();
    var additionG = $('#additionG').val();
    
    var stockD = $('input[name="dispoD"]:checked').val()
	var stockG = $('input[name="dispoG"]:checked').val()
	
	if(stockG == "StockG")
	{
		stockG = "StockD";
	}
	
	if(stockG == "FabricationG")
	{
		stockG = "FabricationD";
	}
	
	if(stockG == "ToutG")
	{
		stockG = "ToutD";
	}
    
    $("#detailG").css("display", "none");
    $("#afficherV").css("display", "inline-block");
   
    if(sphereG == '')
    {
    	sphereG = '-';
    	$("#sphereG").val("+0.00");
    }
    else
    {
    	if (sphereG.indexOf(",") >= 0)
    	{
    		sphereG = sphereG.replace(',', '.');
    		sphereG = roundToNearest(sphereG,0.25);
    		$("#sphereG").val(sphereG);
    	}
    	
    	if (sphereG.indexOf(".") < 0)
    	{
    		
    		sphereG = sphereG+".00";
    		//alert(sphereD);
    		$("#sphereG").val(sphereG);
    	}
		if(isNaN(sphereG) == true)
		{
			sphereG = "0.00"
		}
    	if (sphereG.indexOf("+") >= 0)
    	{
    		sphereG = sphereG.replace('+', '');
    		n_sphereD = roundToNearest(sphereG,0.25);
    		n_sphereD = n_sphereD.toString();
    		if (n_sphereD.indexOf(".") < 0)
			{
				n_sphereD = n_sphereD+".00";	
			}
    		var new_sphere = "+"+n_sphereD;
    		
    		$("#sphereG").val(new_sphere);
    	}
    	else if (sphereG.indexOf("-") >= 0)
    	{
    		n_sphereD = roundToNearest(sphereG,0.25);
    		n_sphereD = n_sphereD.toString();
    		
    		if (n_sphereD.indexOf(".") < 0)
			{
				n_sphereD = n_sphereD+".00";	
			}
    		$("#sphereG").val(n_sphereD);
    	}
    	else
    	{
    		n_sphereD = roundToNearest(sphereG,0.25);
    		n_sphereD = n_sphereD.toString();
    		
    		if (n_sphereD.indexOf(".") < 0)
			{
				n_sphereD = n_sphereD+".00";
			}
    		var new_sphere = "+"+n_sphereD;
    		
    		$("#sphereG").val(new_sphere); 
    		sphereG = $('#sphereG').val();
    	}
    }
    
	 
    	
});

$('input[name=cylindreD]').change(function() {
     var indiceId = $('#indices').val();
    var generation = $('#generation').val();
    var lensFocalGroup = $('#lensFocalGroup').val();
    var sphereD = $('#sphereD').val();
    var cylindreD = $(this).val();
    var axeD = $('#axeD').val();
    var additionD = $('#additionD').val();
    var sphereG = $('#sphereG').val();
    var cylindreG = $('#cylindreG').val();
    var axeG = $('#axeG').val();
    var additionG = $('#additionG').val();
    
    var stockD = $('input[name="dispoD"]:checked').val()
	var stockG = $('input[name="dispoG"]:checked').val()
	
	if(stockG == "StockG")
	{
		stockG = "StockD";
	}
	
	if(stockG == "FabricationG")
	{
		stockG = "FabricationD";
	}
	
	if(stockG == "ToutG")
	{
		stockG = "ToutD";
	}
    
    //$('#produit').removeClass('hide')
    $("#afficherV").css("display", "inline-block");
   
    $("#detailD").css("display", "none");
    
    if(cylindreD == '')
    {
    	cylindreD = '-';
    	$("#cylindreD").val("+0.00");
    }
    else
    {
    	if (cylindreD.indexOf(",") >= 0)
    	{
    		cylindreD = cylindreD.replace(',', '.');
    		cylindreD = roundToNearest(cylindreD,0.25);
    		$("#cylindreD").val(cylindreD);
    	}
    	
    	if (cylindreD.indexOf(".") < 0)
    	{
    		
    		cylindreD = cylindreD+".00";
    		//alert(sphereD);
    		$("#cylindreD").val(cylindreD);
    	}
		if(isNaN(cylindreD) == true)
		{
			cylindreD = "0.00"
		}
    	if (cylindreD.indexOf("+") >= 0)
    	{
    		cylindreD = cylindreD.replace('+', '');
    		n_sphereD = roundToNearest(cylindreD,0.25);
    		n_sphereD = n_sphereD.toString();
    		if (n_sphereD.indexOf(".") < 0)
			{
				n_sphereD = n_sphereD+".00";	
			}
    		var new_sphere = "+"+n_sphereD;
    		
    		$("#cylindreD").val(new_sphere);
    	}
    	else if (cylindreD.indexOf("-") >= 0)
    	{
    		n_sphereD = roundToNearest(cylindreD,0.25);
    		n_sphereD = n_sphereD.toString();
    		
    		if (n_sphereD.indexOf(".") < 0)
			{
				n_sphereD = n_sphereD+".00";	
			}
    		$("#cylindreD").val(n_sphereD);
    	}
    	else
    	{
    		n_sphereD = roundToNearest(cylindreD,0.25);
    		n_sphereD = n_sphereD.toString();
    		
    		if (n_sphereD.indexOf(".") < 0)
			{
				n_sphereD = n_sphereD+".00";
			}
    		var new_sphere = "+"+n_sphereD;
    		
    		$("#cylindreD").val(new_sphere); 
    		cylindreD = $('#cylindreD').val();
    	}
    	
    	
    }
    	
    /*	if($("#droit").prop('checked') == true && $("#gauche").prop('checked') == true && cylindreG == "+0.00"){
			$('#cylindreG').val($(this).val())
			cylindreG = cylindreD;
		
		}
     */   
    	
    	
});

$('input[name=cylindreG]').change(function() {
     var indiceId = $('#indices').val();
    var generation = $('#generation').val();
    var lensFocalGroup = $('#lensFocalGroup').val();
    var sphereD = $('#sphereD').val();
    var cylindreD = $('#cylindreD').val();
    var axeD = $('#axeD').val();
    var additionD = $('#additionD').val();
    var sphereG = $('#sphereG').val();
    var cylindreG = $(this).val();
    var axeG = $('#axeG').val();
    var additionG = $('#additionG').val();
    
    var stockD = $('input[name="dispoD"]:checked').val()
	var stockG = $('input[name="dispoG"]:checked').val()
	
	if(stockG == "StockG")
	{
		stockG = "StockD";
	}
	
	if(stockG == "FabricationG")
	{
		stockG = "FabricationD";
	}
	
	if(stockG == "ToutG")
	{
		stockG = "ToutD";
	}
    
    $("#detailG").css("display", "none");
    $("#afficherV").css("display", "inline-block");
    
    //$('#produit').removeClass('hide')
    
    if(lensFocalGroup == '3')
	{
		if($('#progressionG').val() == '')
    	{
    		$("#detailG").css("display", "none");
    	}
    	else
    	{
    		$("#detailG").css("display", "block");
    	}
    
    }
    else
    {
    	$("#detailG").css("display", "block");
    }
    
    if(cylindreG == '')
    {
    	cylindreG = '-';
    	$("#cylindreG").val("+0.00");
    }
    else
    {
    	if (cylindreG.indexOf(",") >= 0)
    	{
    		cylindreG = cylindreG.replace(',', '.');
    		cylindreG = roundToNearest(cylindreG,0.25);
    		$("#cylindreG").val(cylindreG);
    	}
    	
    	if (cylindreG.indexOf(".") < 0)
    	{
    		
    		cylindreG = cylindreG+".00";
    		//alert(sphereD);
    		$("#cylindreG").val(cylindreG);
    	}

		if(isNaN(cylindreG) == true)
		{
			cylindreG = "0.00"
		}

    	if (cylindreG.indexOf("+") >= 0)
    	{
    		cylindreG = cylindreG.replace('+', '');
    		n_sphereD = roundToNearest(cylindreG,0.25);
    		n_sphereD = n_sphereD.toString();
    		if (n_sphereD.indexOf(".") < 0)
			{
				n_sphereD = n_sphereD+".00";	
			}
    		var new_sphere = "+"+n_sphereD;
    		
    		$("#cylindreG").val(new_sphere);
    	}
    	else if (cylindreG.indexOf("-") >= 0)
    	{
    		n_sphereD = roundToNearest(cylindreG,0.25);
    		n_sphereD = n_sphereD.toString();
    		
    		if (n_sphereD.indexOf(".") < 0)
			{
				n_sphereD = n_sphereD+".00";	
			}
    		$("#cylindreG").val(n_sphereD);
    	}
    	else
    	{
    		n_sphereD = roundToNearest(cylindreG,0.25);
    		n_sphereD = n_sphereD.toString();
    		
    		if (n_sphereD.indexOf(".") < 0)
			{
				n_sphereD = n_sphereD+".00";
			}
    		var new_sphere = "+"+n_sphereD;
    		
    		$("#cylindreG").val(new_sphere); 
    		cylindreG = $('#cylindreG').val();
    	}
    }
    	
        
});

$('input[name=axeD]').change(function() {
	var axeD = $(this).val();
	var indiceId = $('#indices').val();
    var generation = $('#generation').val();
    var lensFocalGroup = $('#lensFocalGroup').val();
    var sphereD = $('#sphereD').val();
    var cylindreD = $('#cylindreD').val();
    var additionD = $('#additionD').val();
    var sphereG = $('#sphereG').val();
    var cylindreG = $('#cylindreG').val();
    var axeG = $('#axeG').val();
    var additionG = $('#additionG').val();
    
    var stockD = $('input[name="dispoD"]:checked').val()
	var stockG = $('input[name="dispoG"]:checked').val()
	
	if(stockG == "StockG")
	{
		stockG = "StockD";
	}
	
	if(stockG == "FabricationG")
	{
		stockG = "FabricationD";
	}
	
	if(stockG == "ToutG")
	{
		stockG = "ToutD";
	}
	
    $("#detailG").css("display", "none");
    $("#afficherV").css("display", "inline-block");
    
     /*if (axeD.indexOf(".") < 0 && axeD != "")
    	{
    		axeD = axeD+".00";
    		$("#axeD").val(axeD);
    	}*/
    if(axeD == '')
    {
    	axeD = '-';
    	$("#axeD").val("0");
    }
    
	 
  /*  if($("#droit").prop('checked') == true && $("#gauche").prop('checked') == true && axeG == "0")
    {
		$('#axeG').val($(this).val())
		axeG = axeD;
	}
	*/
    	
});

$('input[name=axeG]').change(function() {
	var axeG = $(this).val();
	var indiceId = $('#indices').val();
    var generation = $('#generation').val();
    var lensFocalGroup = $('#lensFocalGroup').val();
    var sphereD = $('#sphereD').val();
    var cylindreD = $('#cylindreD').val();
    var additionD = $('#additionD').val();
    var sphereG = $('#sphereG').val();
    var cylindreG = $('#cylindreG').val();
    var axeD = $('#axeD').val();
    var additionG = $('#additionG').val();
    
    var stockD = $('input[name="dispoD"]:checked').val()
	var stockG = $('input[name="dispoG"]:checked').val()
	
	if(stockG == "StockG")
	{
		stockG = "StockD";
	}
	
	if(stockG == "FabricationG")
	{
		stockG = "FabricationD";
	}
	
	if(stockG == "ToutG")
	{
		stockG = "ToutD";
	}
   
    $("#detailG").css("display", "none");
    $("#afficherV").css("display", "inline-block");
    
    if(axeG == '')
    {
    	axeG = '-';
    	$("#axeG").val("0");
    }
     
});



$('#gauche').on('change', function() {

	$('#precalibrage').addClass('hide');
	$('#certif').addClass('hide');
	$('#additional_info').addClass('hide');
	$('#produit').addClass('hide');
	$("#afficherV").css("display", "inline-block");
	
	var droite = $('#droit').is(':checked');
	var gauche = $('#gauche').is(':checked');   
   
	if(gauche)
	{
		$(".display_gauche").css("display", "block");
		$("#sphereG").prop('disabled', false);
		$("#cylindreG").prop('disabled', false);
		$("#axeG").prop('disabled', false);
		$("#additionG").prop('disabled', false);
		
		$("#sphereG").val('+0.00');
		$("#cylindreG").val('+0.00');
		$("#axeG").val('0');
		$("#additionG").val('+0.75');
		
		$("#VersGauche").css("display", "block");
	}
	else
	{
		$(".display_gauche").css("display", "none");
		
		$("#sphereG").val('');
		$("#cylindreG").val('');
		$("#axeG").val('');
		$("#additionG").val('');
		
		$("#sphereG").prop('disabled', true);
		$("#cylindreG").prop('disabled', true);
		$("#axeG").prop('disabled', true);
		$("#additionG").prop('disabled', true);
		
		$("#VersGauche").css("display", "none");
	}
	
	if(droite && gauche) 
	{
		$("#VersDroit").css("display", "block");
	}
	else
	{
		$("#VersDroit").css("display", "none");
	}  
});
    
$('#droit').on('change', function() {
		
	$('#precalibrage').addClass('hide');
	$('#certif').addClass('hide');
	$('#additional_info').addClass('hide');
	$('#produit').addClass('hide');
	$("#afficherV").css("display", "inline-block");
	
	var droite = $('#droit').is(':checked');
	var gauche = $('#gauche').is(':checked');
	
	//alert(gauche);
	
	if(droite)
	{	
		$(".display_droit").css("display", "block");
		$("#sphereD").prop('disabled', false);
		$("#cylindreD").prop('disabled', false);
		$("#axeD").prop('disabled', false);
		$("#additionD").prop('disabled', false);
		
		$("#sphereD").val('+0.00');
		$("#cylindreD").val('+0.00');
		$("#axeD").val('0');
		$("#additionD").val('+0.75');
		
		$("#VersDroit").css("display", "block");
	}
	else
	{
		$(".display_droit").css("display", "none");
		
		$("#sphereD").val('');
		$("#cylindreD").val('');
		$("#axeD").val('');
		$("#additionD").val('');
		
		$("#sphereD").prop('disabled', true);
		$("#cylindreD").prop('disabled', true);
		$("#axeD").prop('disabled', true);
		$("#additionD").prop('disabled', true);
		
		$("#VersDroit").css("display", "none");
	}
	
	if(droite && gauche) 
	{
		$("#VersGauche").css("display", "block");
	}
	else
	{	
		$("#VersGauche").css("display", "none");
	}     
});


$("input[name='dispoG']").change(function(){

	$('#precalibrage').addClass('hide');
  	$('#certif').addClass('hide');
	$('#additional_info').addClass('hide');
    var indiceId = $('#indices').val();
    var generation = $('#generation').val();
    var lensFocalGroup = $('#lensFocalGroup').val();
    var sphereD = $('#sphereD').val();
    var cylindreD = $('#cylindreD').val();
    var axeD = $('#axeD').val();
    var additionD = $('#additionD').val();
    var sphereG = $('#sphereG').val();
    var cylindreG = $('#cylindreG').val();
    var axeG = $('#axeG').val();
    var additionG = $('#additionG').val();
    
    var droite = $('#droit').is(':checked');
	var gauche = $('#gauche').is(':checked');
    
    var stockD = $('input[name="dispoD"]:checked').val();
	var stockG = $('input[name="dispoG"]:checked').val();
	
	if(stockG == "StockG")
	{
		stockG = "StockD";
	}
	
	if(stockG == "FabricationG")
	{
		stockG = "FabricationD";
	}
	
	if(stockG == "ToutG")
	{
		stockG = "ToutD";
	}
    
    var progressionD = $('#progressionD').val();
    var progressionG = $('#progressionG').val();
    
   // $('#type_de_verreG').empty();
  //  $('#type_de_verreG').append('<option value="">-- Choisir --</option>'); 
   // $('#progressionG').empty()
  //  $('#progressionG').append('<option value="">-- Choisir --</option>'); 
    $('#teinteG').empty();
    $('#teinteG').append('<option value="">-- Choisir --</option>'); 
    $('#traitementG').empty();
    $('#traitementG').append('<option value="">-- Choisir --</option>'); 
    $('#diametreG').empty();
    $('#diametreG').append('<option value="">-- Choisir --</option>'); 
    
    $('#progressionG option[value=""]').prop('selected', true);
    $('#type_de_verreG option[value=""]').prop('selected', true);
    $('#teinteG option[value=""]').prop('selected', true);
    $('#traitementG option[value=""]').prop('selected', true);
    $('#diametreG option[value=""]').prop('selected', true);
    $('#galbeG option[value="Standard"]').prop('selected', true);
    
  
   // $('#type_de_verreG').trigger('change');
   
     
	if(indiceId != "" && (cylindreD != '' || cylindreG != '')) {
	   getTypedeVerreG(indiceId,lensFocalGroup,generation,sphereD,sphereG,cylindreD,cylindreG,axeD,axeG,additionD,additionG,stockD,stockG,progressionD,progressionG,droite,gauche,panierAm,deuxiemepaire);
	   
	} 
});

$("input[name='dispoD']").change(function(){

	$('#precalibrage').addClass('hide');
  	$('#certif').addClass('hide');
	$('#additional_info').addClass('hide');

    var indiceId = $('#indices').val();
    var generation = $('#generation').val();
    var lensFocalGroup = $('#lensFocalGroup').val();
    var sphereD = $('#sphereD').val();
    var cylindreD = $('#cylindreD').val();
    var axeD = $('#axeD').val();
    var additionD = $('#additionD').val();
    var sphereG = $('#sphereG').val();
    var cylindreG = $('#cylindreG').val();
    var axeG = $('#axeG').val();
    var additionG = $('#additionG').val();
    
    var droite = $('#droit').is(':checked');
	var gauche = $('#gauche').is(':checked');
    
    var stockD = $('input[name="dispoD"]:checked').val();
	var stockG = $('input[name="dispoG"]:checked').val();
	
	if(stockG == "StockG")
	{
		stockG = "StockD";
	}
	
	if(stockG == "FabricationG")
	{
		stockG = "FabricationD";
	}
	
	if(stockG == "ToutG")
	{
		stockG = "ToutD";
	}
	
	var progressionD = $('#progressionD').val();
    var progressionG = $('#progressionG').val();

    console.log('teeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeest');
    console.log(stockD);
    if(stockD == "FabricationD")
    {
    	$('.display_fabrication').removeClass('hide');
		$('.display_stock').addClass('hide');
		
		$('#teinteD').prop('disabled', false);
		$('#traitementD').prop('disabled', false);
		$('#galbeD').prop('disabled', false);
		$("#PrismeSphereD").prop('disabled', false);
		$("#PrismeCylindreD").prop('disabled', false);
    }
    else
    {
    	$('.display_stock').removeClass('hide');
		$('.display_fabrication').addClass('hide');
		
		$('#teinteD').prop('disabled', true);
		$('#traitementD').prop('disabled', true);
		$('#galbeD').prop('disabled', true);
		
		$("#PrismeSphereD").val('');
		$("#PrismeCylindreD").val('');
				
		$("#PrismeSphereD").prop('disabled', true);
		$("#PrismeCylindreD").prop('disabled', true);
    }
    
    $('#type_de_verreD').empty();
    $('#type_de_verreD').append('<option value="">-- Choisir --</option>'); 
    
    $('#type_de_verreG').empty();
    $('#type_de_verreG').append('<option value="">-- Choisir --</option>'); 
    //$('#progressionD').empty()
    //$('#progressionD').append('<option value="">-- Choisir --</option>'); 
    $('#teinteD').empty();
    $('#teinteD').append('<option value="">-- Choisir --</option>'); 
    $('#traitementD').empty();
    $('#traitementD').append('<option value="">-- Choisir --</option>'); 
    $('#diametreD').empty();
    $('#diametreD').append('<option value="">-- Choisir --</option>'); 
    
    $('#progressionD option[value="Tous"]').prop('selected', true);
    $('#type_de_verreD option[value=""]').prop('selected', true);
    $('#teinteD option[value=""]').prop('selected', true);
    $('#traitementD option[value=""]').prop('selected', true);
    $('#diametreD option[value=""]').prop('selected', true);
    $('#galbeD option[value="Standard"]').prop('selected', true);
    
     
	if(indiceId != "" && (cylindreD != '' || cylindreG != '')) {
	   getTypedeVerre(indiceId,lensFocalGroup,generation,sphereD,sphereG,cylindreD,cylindreG,axeD,axeG,additionD,additionG,stockD,stockG,progressionD,progressionG,droite,gauche,panierAm,deuxiemepaire);
	   
	} 
});

$('#progressionD').on('change', function() {
    var indiceId = $('#indices').val();
    var generation = $('#generation').val();
    var lensFocalGroup = $('#lensFocalGroup').val();
    var sphereD = $('#sphereD').val();
    var cylindreD = $('#cylindreD').val();
    var axeD = $('#axeD').val();
    var additionD = $('#additionD').val();
    var sphereG = $('#sphereG').val();
    var cylindreG = $('#cylindreG').val();
    var axeG = $('#axeG').val();
    var additionG = $('#additionG').val();
    
    var droite = $('#droit').is(':checked');
	var gauche = $('#gauche').is(':checked');
    
    var stockD = $('input[name="dispoD"]:checked').val()
	var stockG = $('input[name="dispoG"]:checked').val()
	
	if(stockG == "StockG")
	{
		stockG = "StockD";
	}
	
	if(stockG == "FabricationG")
	{
		stockG = "FabricationD";
	}
	
	if(stockG == "ToutG")
	{
		stockG = "ToutD";
	}
    
    var progressionD = $('#progressionD').val();
    var progressionG = $('#progressionG').val();
    
    $('#nomverreDH').val("");
    
    $('#type_de_verreD').empty();
	$('#type_de_verreD').append('<option value="">-- Choisir --</option>');
	$('#type_de_verreD option:eq(0)').prop('selected', true);
    $('#type_de_verreD').val("");
    $('#type_de_verreD').trigger('change');
    $('#teinteD').empty();
    $('#teinteD').append('<option value="">-- Choisir --</option>'); 
    $('#traitementD').empty();
    $('#traitementD').append('<option value="">-- Choisir --</option>'); 
    $('#diametreD').empty();
    $('#diametreD').append('<option value="">-- Choisir --</option>'); 
    
    $('#type_de_verreD option[value=""]').prop('selected', true);
    $('#teinteD option[value=""]').prop('selected', true);
    $('#traitementD option[value=""]').prop('selected', true);
    $('#diametreD option[value=""]').prop('selected', true);
    $('#galbeD option[value="Standard"]').prop('selected', true);
    
    if(sphereD == sphereG && cylindreD==cylindreG && axeD==axeG && additionD==additionG  && ((progressionG=="Tous" || progressionD==progressionG) && progressionD!="Tous") && stockD==stockG && droite && gauche )
	{
		console.log("progressionD copyVersDroit");
		copyVersDroit();
		/*
		setTimeout(function(){
			copyVersDroit();

		},1000);*/
	}
     
	if(indiceId != "" && (cylindreD != '' || cylindreG != '')) {
	   getTypedeVerre(indiceId,lensFocalGroup,generation,sphereD,sphereG,cylindreD,cylindreG,axeD,axeG,additionD,additionG,stockD,stockG,progressionD,progressionG,droite,gauche,panierAm,deuxiemepaire);
	   
	} 
	
});

$('#progressionG').on('change', function() {
    var indiceId = $('#indices').val();
    var generation = $('#generation').val();
    var lensFocalGroup = $('#lensFocalGroup').val();
    var sphereD = $('#sphereD').val();
    var cylindreD = $('#cylindreD').val();
    var axeD = $('#axeD').val();
    var additionD = $('#additionD').val();
    var sphereG = $('#sphereG').val();
    var cylindreG = $('#cylindreG').val();
    var axeG = $('#axeG').val();
    var additionG = $('#additionG').val();
    
    var stockD = $('input[name="dispoD"]:checked').val()
	var stockG = $('input[name="dispoG"]:checked').val()
	
	if(stockG == "StockG")
	{
		stockG = "StockD";
	}
	
	if(stockG == "FabricationG")
	{
		stockG = "FabricationD";
	}
	
	if(stockG == "ToutG")
	{
		stockG = "ToutD";
	}
	
	var progressionD = $('#progressionD').val();
    var progressionG = $('#progressionG').val();
    
    var droite = $('#droit').is(':checked');
	var gauche = $('#gauche').is(':checked');
    
    $('#nomverreGH').val("");
    
    $('#type_de_verreG').empty();
	$('#type_de_verreG').append('<option value="">-- Choisir --</option>');
	$('#type_de_verreG option:eq(0)').prop('selected', true);
    $('#type_de_verreG').val("");
    $('#type_de_verreG').trigger('change');
    $('#teinteG').empty();
    $('#teinteG').append('<option value="">-- Choisir --</option>'); 
    $('#traitementG').empty();
    $('#traitementG').append('<option value="">-- Choisir --</option>'); 
    $('#diametreG').empty();
    $('#diametreG').append('<option value="">-- Choisir --</option>'); 
    
    $('#type_de_verreG option[value=""]').prop('selected', true);
    $('#teinteG option[value=""]').prop('selected', true);
    $('#traitementG option[value=""]').prop('selected', true);
    $('#diametreG option[value=""]').prop('selected', true);
    $('#galbeG option[value="Standard"]').prop('selected', true);
     
	if(indiceId != "" && (cylindreD != '' || cylindreG != '')) {
	   getTypedeVerre(indiceId,lensFocalGroup,generation,sphereD,sphereG,cylindreD,cylindreG,axeD,axeG,additionD,additionG,stockD,stockG,progressionD,progressionG,droite,gauche,panierAm,deuxiemepaire);
	   
	} 
});

$('#type_de_verreD').on('change', function() {

	$('#precalibrage').addClass('hide');
  	
	var indiceId = $('#indices').val();
    var generation = $('#generation').val();
    var lensFocalGroup = $('#lensFocalGroup').val();
    
    var type_de_verreD = $(this).val();
    var sphereD = String($('#sphereD').val());
    var cylindreD = String($('#cylindreD').val());
    var axeD = String($('#axeD').val());
    var additionD = String($('#additionD').val());
    var sphereG = String($('#sphereG').val());
    var cylindreG = String($('#cylindreG').val());
    var axeG = String($('#axeG').val());
    var additionG = String($('#additionG').val());
    var type_de_verreG = $('#type_de_verreG').val();
    var indiceId = $('#indices').val();
    
    var droite = $('#droit').is(':checked');
	var gauche = $('#gauche').is(':checked');
    
    var stockD = $('input[name="dispoD"]:checked').val()
	var stockG = $('input[name="dispoG"]:checked').val()
	
	if(stockG == "StockG")
	{
		stockG = "StockD";
	}
	
	if(stockG == "FabricationG")
	{
		stockG = "FabricationD";
	}
	
	if(stockG == "ToutG")
	{
		stockG = "ToutD";
	}
    
    var progressionD = $('#progressionD').val();
    var progressionG = $('#progressionG').val();
    
    var diametreG = $('#diametreG').val();
    var selectedText = $("#type_de_verreD option:selected").html();
    var selectedTextG = $("#type_de_verreG option:selected").html();
    
    $('#prixVerreD').val("0");
    $('#prixTeinteD').val("0");
    $('#prixTraitementD').val("0");
    
    if(selectedText.indexOf("Panier") >= 0 || selectedTextG.indexOf("Panier") >= 0)
	{	
		panierA = 1;
		//panierAm = 1;
		
		$('#text_titre_carte').html("«&nbsp;La carte d'authenticité est obligatoire pour des produits commandés en panier A&nbsp;»");
		$('input[name=carte_auth][value=1]').prop("checked",true);
		
		$("#carte_auth_y").prop("checked", true);
		$("#carte_auth_n").prop("checked", false);
			
		$('#div_auth_n').css("display", "none");
	}
	else
	{
		panierA = 0;
		
		$('#text_titre_carte').html(" Je souhaite un certificat d'authenticité (Gratuit) ");
		$('input[name=carte_auth][value=0]').prop("checked",true);
		
		$('#div_auth_n').css("display", "block");
	}
    
    
    $('#divquantiteD').removeClass('hide');
    $('#quantiteD').val("1");
    
    $('#carte_1').hide;
	$("#carte_1").css("display", "none");
	$('#cartesGD').hide;
	$("#cartesGD").css("display", "none");
	
	$('#preview_carte, #preview_auth_card, #preview_auth_img, #prev_auth').hide();
	$('.eye_text, .corrections .d, .corrections .g').hide();
	
	$('input[name=carte_auth][value=0]').prop('checked', true);
	$('#civiliteClient option:eq(0)').prop('selected', true);
	$('#nomClient').val("");
	$('#prenomClient').val("");
	
	if(panierA!=1)
	{
		$('#civilite_client').css("display", "none");
		$('#nom_client').css("display", "none");
		$('#prenom_client').css("display", "none");
		$('#generer_carte').css("display", "none");
	}
	else
	{
		$('#civilite_client').css("display", "block");
		$('#to_etape2').addClass('disabled');
	}

	if( (selectedTextG.toLowerCase()).indexOf("t-one") != -1 ||
		(selectedTextG.toLowerCase()).indexOf("e-space") != -1 ||
		(selectedTextG.toLowerCase()).indexOf("elysium") != -1 ||
		(selectedTextG.toLowerCase()).indexOf("platinium") != -1 ||
		(selectedTextG.toLowerCase()).indexOf("omega") != -1 ||
		(selectedTextG.toLowerCase()).indexOf("eyefatigue") != -1 ||
		(selectedTextG.toLowerCase()).indexOf("top office") != -1 ||
		(selectedTextG.toLowerCase()).indexOf("freestyle") != -1
	)
	{
		$('#additional_info').removeClass('hide');
	}
	else {
		$('#additional_info').addClass('hide');
	}

	if( (selectedTextG.toLowerCase()).indexOf("t-one") != -1 ||
		(selectedTextG.toLowerCase()).indexOf("e-space") != -1 ||
		(selectedTextG.toLowerCase()).indexOf("elysium") != -1 ||
		(selectedTextG.toLowerCase()).indexOf("platinium") != -1 ||
		(selectedTextG.toLowerCase()).indexOf("omega") != -1 ||
		(selectedTextG.toLowerCase()).indexOf("eyefatigue") != -1 ||
		(selectedTextG.toLowerCase()).indexOf("top office") != -1 ||
		(selectedTextG.toLowerCase()).indexOf("freestyle") != -1
	)
	{
		$('#additional_info').removeClass('hide');
	}
	else {
		$('#additional_info').addClass('hide');
	}

    if(selectedTextG.indexOf("- Stock") >= 0 || type_de_verreG == "")
    {

    	if(panierA == 0)
		{
    		$('#certif').addClass('hide');
    	}
    	type_commande_verre = 2;
    }
    
    $('#nomverreDH').val(selectedText);
    
    $('#to_etape2').addClass('disabled');
    
    $('#teinteD').empty();
    $('#traitementD').empty();
    
    
    if(type_de_verreD != "")
    {
		var rel = "";
		rel = $(this).find('option:selected').attr('rel');
		console.log(rel);

		if (rel.indexOf("]") >= 0)
		{
			console.log('AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA');
			$('#quantiteD').prop('disabled', false);
			type_commande_verre = 2;
		
			if(selectedText.indexOf("Panier") >= 0 && selectedTextG.indexOf("Panier") == -1)
			{	
				/*$("#type_de_verreG option").filter(function(){
					cur_text = $(this).text().trim();
					return cur_text.indexOf('Panier') == -1;
				}).remove();*/
			
				panierA = 1;
			
				//$('#type_de_verreG').trigger('change');	
				
				$('input[name=carte_auth][value=1]').prop('checked', true);
				$("#carte_auth_y").prop("checked", true);
				$("#carte_auth_n").prop("checked", false);	
				
				$('#div_auth_n').css("display", "none");
	
			}
			else
			{
				$('#div_auth_n').css("display", "block");
			}
		
			$('#galbeD option[value="Standard"]').prop('selected', true);
		
			$('#teinteD').prop('disabled', 'disabled');
			$('#traitementD').prop('disabled', 'disabled');
			$('#galbeD').prop('disabled', 'disabled');
		
			$("#PrismeSphereD").val('');
			$("#PrismeCylindreD").val('');
		
			$("#PrismeSphereD").prop('disabled', true);
			$("#PrismeCylindreD").prop('disabled', true);
		
		
			$('#teinteD').append('<option value="">----</option>');
			$('#teinteD').append('<option value="">----</option>');
		
			$('#diametreD').empty();    
			$('#diametreD').append('<option value="">choisir</option>');
			$('#traitementD').append('<option value="">----</option>');
		
			//alert(rel);
			if(rel == "]S26783")
			{
				$('#diametreD').append('<option value="70">70</option>');
				$('#prixVerreD').val('13.00');
				$('#prixD').val('13.00€');
    			$('#prixDH').val('13.00');
			}
			else
			{
				var info_type_de_verreD = rel.split('*');
			
				var diametre_type_de_verreD = info_type_de_verreD[1].split(',');
				
				var ref_type_de_verreD = info_type_de_verreD[0];
				
				$.ajax({
							type: "POST",
							url: "/index/getPrix",
							data: {"lens" : ref_type_de_verreD,
							"typedelens" : "stock"},
							dataType: "json",
							success: function (data) {		
								$.each(data, function(key, value){
									$('#prixVerreD').val(value.prix);
									console.log("PrixD1")
									$('#prixD').val(value.prix+"€");
    								$('#prixDH').val(value.prix);

								});
							}
					});
				
				for (i = 0; i < diametre_type_de_verreD.length-1; i++) {
					$('#diametreD').append('<option value="'+diametre_type_de_verreD[i]+'">'+diametre_type_de_verreD[i]+'</option>');
				}
			}
		
			if(gauche && droite)
			{
				if(type_de_verreG != "" && diametreG != "")
				{
					$('#to_etape2').removeClass('disabled');
				}
			}
			else
			{
				if(droite)
				{
					$('#to_etape2').removeClass('disabled');
				}
			}
		}
		else
		{
			console.log('BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB');
			if(type_de_verreD != "") {
		//console.log(generation);

				if(selectedText.indexOf(" - Stock") >= 0)
				{
					$.ajax({
						type: "POST",
						url: "/index/getPrix",
						data: {"lens" : type_de_verreD,
							"typedelens" : "fab",
							"generation" : generation},
						dataType: "json",
						success: function (data) {
							//console.log(data);
							$.each(data, function(key, value){
								$('#prixVerreD').val(value.prix);
								console.log("PrixD2")
								$('#prixD').val(value.prix+"€");
								$('#prixDH').val(value.prix);
								var indice = $('#indices').val();
								// var generation = $('#generation').val();
								// var nomtraitement = $("#traitementD option:selected").html();
								var nomverre = $("#type_de_verreD option:selected").html();
								var traitementD = $('#traitementD').val();
								var prixverre = $('#prixVerreD').val();


								if (!traitementD) {
									traitementD = "700100";
								}

								$.ajax({
									type: "POST",
									url: "/index/getOptions_price",
									data: {"code" : traitementD,
										"nom_du_verre" : nomverre,
										"indice": indice,
										"generation": generation
									},
									dataType: "json",
									success: function (data) {
										console.log('bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb')

										setTimeout(function(){
											let prixteinte = $('#prixTeinteD').val();
											$.each(data, function(key, value){
												$('#prixTraitementD').val(value.prix);
												var tot =  (parseFloat(prixverre)+parseFloat(prixteinte)+parseFloat(value.prix)+addPrismeGalbeGauche()).toFixed(2);
												console.log("PrixD5")
												$('#prixD').val(tot+"€");
												$('#prixDH').val(tot+"€");
											});
										},1000);
									}

								});
							});

						}
					});

					type_commande_verre = 2;
					$('#teinteD').append('<option value="">----</option>');
					$('#teinteD option:eq(0)').prop('selected', true);
					//$('#traitementD').empty();
					$('#traitementD').append('<option value="">----</option>');
					$('#traitementD option:eq(0)').prop('selected', true);
				
					$('#teinteD').prop('disabled', true);
					$('#traitementD').prop('disabled', true);
				
					$('#galbeD option[value="Standard"]').prop('selected', true);
					$('#galbeD').prop('disabled', true);
				
					$("#PrismeSphereD").val('');
					$("#PrismeCylindreD").val('');
				
					$("#PrismeSphereD").prop('disabled', true);
					$("#PrismeCylindreD").prop('disabled', true);
				
					$('#quantiteD').prop('disabled', false);
				}
				else
				{
					type_commande_verre = 1;
					
					if((selectedText.indexOf("Mineral") >= 0 && selectedText.indexOf("Photo") >= 0) || (selectedText.indexOf("Minéral") >= 0 && selectedText.indexOf("Photo") >= 0) || selectedText.indexOf("Panier") >= 0 || selectedText.indexOf("Transition") >= 0  || selectedText.indexOf("Xtractive") >= 0 || selectedText.indexOf("Polarisé") >= 0 || selectedText.indexOf("Drivewear") >= 0 || selectedText.indexOf("1,53") >= 0 || selectedText.indexOf("1,59") >= 0)
					{
						$('#teinteD').prop('disabled', true);
					}
					else
					{
						$('#teinteD').prop('disabled', false);
					}
					$('#traitementD').prop('disabled', false);
					// if((selectedText.indexOf("Mineral") >= 0 && selectedText.indexOf("Photo") >= 0) || (selectedText.indexOf("Minéral") >= 0 && selectedText.indexOf("Photo") >= 0))
					// {
					// 	$('#traitementD').prop('disabled', true);
					// }
					// else
					// {
					// 	$('#traitementD').prop('disabled', false);
					// }
					
					if(selectedText.indexOf("Mineral") >= 0 || selectedText.indexOf("Minéral") >= 0  || selectedText.indexOf("Panier") >= 0 )
					{
						$('#galbeD').prop('disabled', true);
					}
					else
					{
						$('#galbeD').prop('disabled', false);
					}
					
				
					$("#PrismeSphereD").prop('disabled', false);
					$("#PrismeCylindreD").prop('disabled', false);
				
					$('#quantiteD').prop('disabled', true);

					console.log('22222222222222222222222222222222222222222222222222222222222222222')

					$.ajax({
							type: "POST",
							url: "/index/getOptions",
							data: {"lens" : type_de_verreD},
							dataType: "json",
							success: function (data) {

							$('#traitementD option:eq(0)').prop('selected', true);

							// $('#traitementGH').val("Durci");
							$.each(data, function(key, value){
								if(value.name != "Express 24" && value.name != "Second pair") {
									$('#traitementD').append('<option value="'+ value.code +'">' + decodeURIComponent(escape(value.trad_fr)) + '</option>');
								}
							});
							var selectedText = $("#traitementD option:selected").html();
							$('#traitementDH').val(selectedText);
								$.ajax({
									type: "POST",
									url: "/index/getPrix",
									data: {"lens" : type_de_verreD,
										"typedelens" : "fab",
										"generation" : generation},
									dataType: "json",
									success: function (data) {
										//console.log(data);
										$.each(data, function(key, value){
											$('#prixVerreD').val(value.prix);
											console.log("PrixD2")
											$('#prixD').val(value.prix+"€");
											$('#prixDH').val(value.prix);
											var indice = $('#indices').val();
											// var generation = $('#generation').val();
											// var nomtraitement = $("#traitementD option:selected").html();
											var nomverre = $("#type_de_verreD option:selected").html();
											var traitementD = $('#traitementD').val();
											var prixverre = $('#prixVerreD').val();

											console.log('saaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa')
											console.log($('#traitementD').val())
											if (!traitementD) {
												traitementD = "700100";
											}

											$.ajax({
												type: "POST",
												url: "/index/getOptions_price",
												data: {"code" : traitementD,
													"nom_du_verre" : nomverre,
													"indice": indice,
													"generation": generation
												},
												dataType: "json",
												success: function (data) {
													setTimeout(function(){
														let prixteinte = $('#prixTeinteD').val();
														$.each(data, function(key, value){
															$('#prixTraitementD').val(value.prix);
															var tot =  (parseFloat(prixverre)+parseFloat(prixteinte)+parseFloat(value.prix)+addPrismeGalbeDroit()).toFixed(2);
															console.log("PrixD5")
															$('#prixD').val(tot+"€");
															$('#prixDH').val(tot+"€");
														});
													},1000);
												}

											});
										});

									}
								});

							}
			
					});




					if(indiceId != "1.53" && indiceId != "1.59")
					{
						var c = "";
					
						$.ajax({
							type: "POST",
							url: "/index/getColor",
							data: {"lens" : selectedText, "id_lens" : type_de_verreD},
							dataType: "json",
							success: function (data) {
								$('#teinteD').append('<option value="">Aucune</option>');
								$('#teinteD option:eq(0)').prop('selected', true);
								$.each(data, function(key, value){
									$('#teinteD').append('<option value="'+ value.code +'">' + value.trad_fr + '</option>');
								});
							}
						});	
					}
				}
				
				$.ajax({
						type: "POST",
						url: "/index/get_Diametre",
						data: {"lens" : type_de_verreD,"sphere" : sphereD,"cylindre" : cylindreD},
						dataType: "json",
						success: function (data) {	
						$('#diametreD').empty();
						$('#diametreD').append('<option value="">-- Choisir --</option>');
					
						$.each(data, function(key, value){
							console.log(value.name);
							if(lensFocalGroup == "1" || lensFocalGroup == "6" || (lensFocalGroup == "4" && selectedText.indexOf(" - Stock") >= 0))
							{
								$('#diametreD').append('<option value="'+ value.diameter_physical +'">' + value.diameter_physical + '</option>');
							}
							else
							{
								$('#diametreD').append('<option value="'+ value.diameter_physical + '/'+(parseInt(value.diameter_physical)+5) +'">' + value.diameter_physical + '/'+(parseInt(value.diameter_physical)+5)+'</option>');
							}
						
					
						}); 
						if(selectedText.indexOf(" - Stock") == -1)
						{
							$('#diametreD').append('<option value="precalibrage">Précalibrage (Gratuit)</option>');
						}
					}
				});	
			
			
			}
		}
  	}
    if(type_de_verreD != "")
    {
    	$('#divprixD').removeClass('hide');
    }
    else
    {
    	$('#divprixD').addClass('hide');
    	$('#prixD').val("");
    	$('#prixDH').val("");
    }
    
    if(diametreG == 'precalibrage')
	{
		$('#precalibrage').removeClass('hide');
	}
	else
	{
		$('#precalibrage').addClass('hide');
	}
    
	
	if (String(sphereD).indexOf("+") >= 0)
	{
		sphereD = String(sphereD).replace('+', '');
	}
	if (String(sphereD).indexOf(".00") >= 0)
	{
		sphereD = String(sphereD).replace('.00', '');
	}
	
	if (String(sphereG).indexOf("+") >= 0)
	{
		sphereG = String(sphereG).replace('+', '');
	}
	if (String(sphereG).indexOf(".00") >= 0)
	{
		sphereG = String(sphereG).replace('.00', '');
	}
	
	if (String(cylindreD).indexOf("+") >= 0)
	{
		cylindreD = String(cylindreD).replace('+', '');
	}
	if (String(cylindreD).indexOf(".00") >= 0)
	{
		cylindreD = String(cylindreD).replace('.00', '');
	}
	
	if (String(cylindreG).indexOf("+") >= 0)
	{
		cylindreG = String(cylindreG).replace('+', '');
	}
	if (String(cylindreG).indexOf(".00") >= 0)
	{
		cylindreG = String(cylindreG).replace('.00', '');
	}
	
	if (String(additionD).indexOf("+") >= 0)
	{
		additionD = String(additionD).replace('+', '');
	}
	if (String(additionD).indexOf(".00") >= 0)
	{
		additionD = String(additionD).replace('.00', '');
	}
	
	if (String(additionG).indexOf("+") >= 0)
	{
		additionG = String(additionG).replace('+', '');
	}
	if (String(additionG).indexOf(".00") >= 0)
	{
		additionG = String(additionG).replace('.00', '');
	}
	
	if(sphereD == sphereG && cylindreD==cylindreG && axeD==axeG && additionD==additionG  && progressionD==progressionG && stockD==stockG && droite && gauche)
	{
		//alert("copy");
		//copyVersDroit();
		
		/*setTimeout(function(){
			copyVersDroit();

		},1000);*/
	}
	console.log("type_de_verreD copyVersDroit");
	copyVersDroit();
	
	/*var qty = $('#quantiteD').val();
	if(($("#type_de_verreD").val() == $("#type_de_verreG").val()) && (type_commande_verre == 2))
	{
		$('#quantiteG').val(qty);
		$('#quantiteG option[value="'+ qty +'"]').prop('selected', true);
		//$('#prixG').val($('#prixD').val());
		//$('#prixGH').val($('#prixDH').val());
	}*/
	
	if(panierA == 1)
	{
		$('#to_etape2').addClass('disabled');
	}
}); 


$('#type_de_verreG').on('change', function() {
	// console.log('44444444444444444444444444444444444444444444444444444');
	// console.log($('#traitementG').val());
	$('#precalibrage').addClass('hide');
	var indiceId = $('#indices').val();
    var generation = $('#generation').val();
    var lensFocalGroup = $('#lensFocalGroup').val();
    var type_de_verreG = $(this).val();
    var sphereD = $('#sphereD').val();
    var cylindreD = $('#cylindreD').val();
    var axeD = $('#axeD').val();
    var additionD = $('#additionD').val();
    var sphereG = $('#sphereG').val();
    var cylindreG = $('#cylindreG').val();
    var axeG = $('#axeG').val();
    var additionG = $('#additionG').val();
    var type_de_verreD = $('#type_de_verreD').val();
    var indiceId = $('#indices').val();
    
    var diametreD = $('#diametreD').val();
    
    var stockD = $('input[name="dispoD"]:checked').val()
	var stockG = $('input[name="dispoG"]:checked').val()
	
	if(stockG == "StockG")
	{
		stockG = "StockD";
	}
	
	if(stockG == "FabricationG")
	{
		stockG = "FabricationD";
	}
	
	if(stockG == "ToutG")
	{
		stockG = "ToutD";
	}
    
    var progressionD = $('#progressionD').val();
    var progressionG = $('#progressionG').val();
    
    $('#prixVerreG').val("0");
    $('#prixTeinteG').val("0");
    $('#prixTraitementG').val("0");
    
    var selectedText = $("#type_de_verreG option:selected").html();
    var selectedTextD = $("#type_de_verreD option:selected").html();
    
    if(selectedText.indexOf("Panier") >= 0 || selectedTextD.indexOf("Panier") >= 0)
	{	
		panierA = 1;
		
		$('#text_titre_carte').html("«&nbsp;La carte d'authenticité est obligatoire pour des produits commandés en panier A&nbsp;»");
		$('input[name=carte_auth][value=1]').prop("checked",true);
		
		$("#carte_auth_y").prop("checked", true);
		$("#carte_auth_n").prop("checked", false);	
			
		$('#div_auth_n').css("display", "none");
	
	}
	else
	{
		panierA = 0;
		
		$('#text_titre_carte').html(" Je souhaite un certificat d'authenticité (Gratuit) ");
		$('input[name=carte_auth][value=0]').prop("checked",true);
		//$('#carte_auth_y').prop('checked', true);
		
		$('#div_auth_n').css("display", "block");
	
	}
    
    $('#divquantiteG').removeClass('hide');
    $('#quantiteG').val("1");
    
    $('#carte_1').hide;
	$("#carte_1").css("display", "none");
	$('#cartesGD').hide;
	$("#cartesGD").css("display", "none");
	
	$('#preview_carte, #preview_auth_card, #preview_auth_img, #prev_auth').hide();
	$('.eye_text, .corrections .d, .corrections .g').hide();
	
	$('input[name=carte_auth][value=0]').prop('checked', true);
	
	var nameD = $("#type_de_verreD option:selected").html();
    var nameG = $("#type_de_verreG option:selected").html();
	if(nameG.indexOf("Panier") >= 0 || nameD.indexOf("Panier") >= 0)
	{
		$('input[name=carte_auth][value=1]').prop('checked', true);
		$("#carte_auth_y").prop("checked", true);
		$("#carte_auth_n").prop("checked", false);	
		
		$('#div_auth_n').css("display", "none");
	}
	else
	{
		$('#div_auth_n').css("display", "block");
	}
	
	$('#civiliteClient option:eq(0)').prop('selected', true);
	$('#nomClient').val("");
	$('#prenomClient').val("");
	
	if(panierA!=1)
	{
		$('#civilite_client').css("display", "none");
		$('#nom_client').css("display", "none");
		$('#prenom_client').css("display", "none");
		$('#generer_carte').css("display", "none");
	}
	else
	{
		$('#civilite_client').css("display", "block");
		$('#to_etape2').addClass('disabled');
	}

	if( (selectedTextD.toLowerCase()).indexOf("t-one") != -1 ||
		(selectedTextD.toLowerCase()).indexOf("e-space") != -1 ||
		(selectedTextD.toLowerCase()).indexOf("elysium") != -1 ||
		(selectedTextD.toLowerCase()).indexOf("platinium") != -1 ||
		(selectedTextD.toLowerCase()).indexOf("omega") != -1 ||
		(selectedTextD.toLowerCase()).indexOf("eyefatigue") != -1 ||
		(selectedTextD.toLowerCase()).indexOf("top office") != -1 ||
		(selectedTextD.toLowerCase()).indexOf("freestyle") != -1
	)
	{
		$('#additional_info').removeClass('hide');
	}
	else {
		$('#additional_info').addClass('hide');
	}

    if(selectedTextD.indexOf("- Stock") >= 0 || type_de_verreD == "")
    {
    	if(panierA == 0)
		{
    		$('#certif').addClass('hide');
    	}
    	type_commande_verre = 2;
    }
    
    $('#nomverreGH').val(selectedText);
    
    var droite = $('#droit').is(':checked');
	var gauche = $('#gauche').is(':checked');
	
	$('#to_etape2').addClass('disabled');
    
    
    // $('#teinteG').empty();
    // $('#traitementG').empty();
    
    if(type_de_verreG != "")
    {
    
		 var rel = "";
		 rel = $(this).find('option:selected').attr('rel');
	
	
		if (rel.indexOf("]") >= 0)
		{
			$('#quantiteG').prop('disabled', false);
			type_commande_verre = 2;
		
			if(selectedText.indexOf("Panier") >= 0 && selectedTextD.indexOf("Panier") == -1)
			{	
			
				/*$("#type_de_verreG option").filter(function(){
					cur_text = $(this).text().trim();
					return cur_text.indexOf('Panier') == -1;
				}).remove();*/
			
				panierA = 1;
			
				//$('#type_de_verreG').trigger('change');	
			}
		
			$('#teinteG').prop('disabled', 'disabled');
			$('#traitementG').prop('disabled', 'disabled');
			$('#galbeG option[value="Standard"]').prop('selected', true);
			$('#galbeG').prop('disabled', 'disabled');
		
			$("#PrismeSphereG").val('');
			$("#PrismeCylindreG").val('');
		
			$("#PrismeSphereG").prop('disabled', true);
			$("#PrismeCylindreG").prop('disabled', true);
		
			$('#teinteG').append('<option value="">----</option>');
			$('#traitementG').append('<option value="">----</option>');
		
			$('#diametreG').empty();    
			$('#diametreG').append('<option value="">choisir</option>');
		
			
			if(rel == "]S26783")
			{
				$('#diametreG').append('<option value="70">70</option>');
				$('#prixVerreG').val('13.00');
				$('#prixG').val('13.00€');
    			$('#prixGH').val('13.00');
			}
			else
			{
				var info_type_de_verreG = rel.split('*');
			
				var diametre_type_de_verreG = info_type_de_verreG[1].split(',');
				
				var ref_type_de_verreG = info_type_de_verreG[0];
				
				$.ajax({
							type: "POST",
							url: "/index/getPrix",
							data: {"lens" : ref_type_de_verreG,
							"typedelens" : "stock"},
							dataType: "json",
							success: function (data) {	
								$.each(data, function(key, value){
									$('#prixVerreG').val(value.prix);
									calculPriceG();
									// $('#prixG').val(value.prix+"€");
    								$('#prixGH').val(value.prix);
								});
							}
					});
				for (i = 0; i < diametre_type_de_verreG.length-1; i++) {
					$('#diametreG').append('<option value="'+diametre_type_de_verreG[i]+'">'+diametre_type_de_verreG[i]+'</option>');
				}
			}
		
			if(gauche && droite)
			{
				if(type_de_verreD != "" && diametreD != "")
				{
					$('#to_etape2').removeClass('disabled');
				}
			}
			else
			{
				if(gauche)
				{
					$('#to_etape2').removeClass('disabled');
				}
			}
		}
		else
		{

			if(type_de_verreG != "") {
				if(selectedText.indexOf(" - Stock") >= 0)
				{
					$.ajax({
						type: "POST",
						url: "/index/getPrix",
						data: {"lens" : type_de_verreG,
							"typedelens" : "fab",
							"generation" : generation},
						dataType: "json",
						success: function (data) {
							$.each(data, function(key, value){
								$('#prixVerreG').val(value.prix);
								//calculPriceG();
								// $('#prixG').val(value.prix+"€");
								//$('#prixGH').val(value.prix);
								var indice = $('#indices').val();
								var generation = $('#generation').val();
								var nomtraitement = $("#traitementD option:selected").html();
								var nomverre = $("#type_de_verreG option:selected").html();
								var traitementG = $('#traitementG').val();
								var prixverre = $('#prixVerreG').val();
								var quantity = $('#quantiteD').val();
								console.log('test6')
								console.log(indice)
								console.log(generation)
								console.log(nomtraitement)
								console.log(nomverre)
								console.log(traitementG)
								console.log(prixverre)
								if (!nomtraitement) {
									nomtraitement = "Durci";
								}
								if (!traitementG) {
									traitementG = "700100";
								}
								console.log('ccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccc')

								$.ajax({
									type: "POST",
									url: "/index/getOptions_price",
									data: {"code" : traitementG,
										"name" : nomtraitement,
										"nom_du_verre" : nomverre,
										"indice": indice,
										"generation": generation
									},
									dataType: "json",
									success: function (data) {
										setTimeout(function(){
											var prixteinte = $('#prixTeinteG').val();
											$.each(data, function(key, value){
												$('#prixTraitementG').val(value.prix);
												var tot =  ((parseFloat(prixverre)+parseFloat(prixteinte)+parseFloat(value.prix)+addPrismeGalbeGauche())*quantity).toFixed(2);
												console.log("PrixG5")
												console.log(tot)
												$('#prixG').val(tot+"€");
												$('#prixGH').val(tot+"€");
											});
										},1000);
									}

								});
							});
						}
					});

					type_commande_verre = 2;
					$('#teinteG').append('<option value="">----</option>');
					$('#teinteG option:eq(0)').prop('selected', true);
				
					$('#traitementG').append('<option value="">----</option>');
					$('#traitementG option:eq(0)').prop('selected', true);
				
					$('#teinteG').prop('disabled', true);
					$('#traitementG').prop('disabled', true);
					$('#galbeG option[value="Standard"]').prop('selected', true);
					$('#galbeG').prop('disabled', true);
				
					$("#PrismeSphereG").val('');
					$("#PrismeCylindreG").val('');
				
					$("#PrismeSphereG").prop('disabled', true);
					$("#PrismeCylindreG").prop('disabled', true);
				
					$('#quantiteG').prop('disabled', false);
				
				}
				else
				{
					if((selectedText.indexOf("Mineral") >= 0 && selectedText.indexOf("Photo") >= 0) || (selectedText.indexOf("Minéral") >= 0 && selectedText.indexOf("Photo") >= 0) || selectedText.indexOf("Panier") >= 0 || selectedText.indexOf("Transition") >= 0  || selectedText.indexOf("Xtractive") >= 0 || selectedText.indexOf("Polarisé") >= 0 || selectedText.indexOf("Drivewear") >= 0 || selectedText.indexOf("1,53") >= 0 || selectedText.indexOf("1,59") >= 0)
					{
						$('#teinteG').prop('disabled', true);
					}
					else
					{
						$('#teinteG').prop('disabled', false);
					}
					
					// if((selectedText.indexOf("Mineral") >= 0 && selectedText.indexOf("Photo") >= 0) || (selectedText.indexOf("Minéral") >= 0 && selectedText.indexOf("Photo") >= 0))
					// {
					// 	$('#traitementG').prop('disabled', true);
					// }
					// else
					// {
					// 	$('#traitementG').prop('disabled', false);
					// }
					$('#traitementG').prop('disabled', false);

					if(selectedText.indexOf("Mineral") >= 0 || selectedText.indexOf("Minéral") >= 0  || selectedText.indexOf("Panier") >= 0 )
					{
						$('#galbeG').prop('disabled', true);
					}
					else
					{
						$('#galbeG').prop('disabled', false);
					}
				
					$("#PrismeSphereG").prop('disabled', false);
					$("#PrismeCylindreG").prop('disabled', false);
					type_commande_verre = 1;
				
					$('#quantiteG').prop('disabled', true);
					// console.log($('#traitementG').val());
					// console.log('11111111111111111111111111111111111111111111111111111')
					var k = "";
					$.ajax({
							type: "POST",
							url: "/index/getOptions",
							data: {"lens" : type_de_verreG},
							dataType: "json",
							success: function (data) {
								// console.log('OPTIOOOOOOOOOOOOOOOOOOOOON');
								// console.log('77777777777777777777777777777777777777777777777777777777777');
								// console.log($('#traitementG').val());
								var traitementG = $('#traitementG').val();
							$('#traitementG option:eq(0)').prop('selected', true);
								// console.log('888888888888888888888888888888888888888888888888');
								// console.log($('#traitementG').val());
								$('#traitementG').val(traitementG);
							// $('#traitementGH').val("Durci");
							$("#traitementG").empty();

							$.each(data, function(key, value){
								if(value.name != "Express 24" && value.name != "Second pair")
									$('#traitementG').append('<option value="'+ value.code +'">' + decodeURIComponent(escape(value.trad_fr)) + '</option>');
							});
							var selectedText = $("#traitementG option:selected").html();
							$('#traitementGH').val(selectedText);
							console.log('traitementG TEST:' + $('#traitementG').val());
							console.log(selectedText);
							$.ajax({
									type: "POST",
									url: "/index/getPrix",
									data: {"lens" : type_de_verreG,
										"typedelens" : "fab",
										"generation" : generation},
									dataType: "json",
									success: function (data) {
										$.each(data, function(key, value){
											$('#prixVerreG').val(value.prix);
											//calculPriceG();
											// $('#prixG').val(value.prix+"€");
											//$('#prixGH').val(value.prix);
											var indice = $('#indices').val();
											var generation = $('#generation').val();
											var nomtraitement = $("#traitementG option:selected").html();
											var nomverre = $("#type_de_verreG option:selected").html();
											traitementG = $('#traitementG').val();
											var prixverre = $('#prixVerreG').val();
											console.log('test11')
											console.log(indice)
											console.log(generation)
											console.log(nomtraitement)
											console.log(nomverre)
											console.log(traitementG)
											console.log(prixverre)
											if (!nomtraitement) {
												nomtraitement = "Durci";
											}
											if (!traitementG) {
												traitementG = "700100";
											}
											console.log('ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd')

											$.ajax({
												type: "POST",
												url: "/index/getOptions_price",
												data: {"code" : traitementG,
													"name" : nomtraitement,
													"nom_du_verre" : nomverre,
													"indice": indice,
													"generation": generation
												},
												dataType: "json",
												success: function (data) {
													setTimeout(function(){
														var prixteinte = $('#prixTeinteG').val();
														$.each(data, function(key, value){
															$('#prixTraitementG').val(value.prix);
															console.log(value.prix);
															console.log('testtttttttttttttttttt');
															var tot =  (parseFloat(prixverre)+parseFloat(prixteinte)+parseFloat(value.prix)+addPrismeGalbeGauche()).toFixed(2);
															console.log("PrixG5")
															console.log(tot);
															$('#prixG').val(tot+"€");
															$('#prixGH').val(tot+"€");
														});
													},1000);
												}

											});
										});
									}
								});

							}
					});



					if(indiceId != "1.53" && indiceId != "1.59")
					{
						var c = "";
						$.ajax({
							type: "POST",
							url: "/index/getColor",
							data: {"lens" : selectedText, "id_lens" : type_de_verreG},
							dataType: "json",
							success: function (data) {		
							
								$('#teinteG').append('<option value="">Aucune</option>');
								$('#teinteG option:eq(0)').prop('selected', true);

								/*data.sort(function(a, b) {
									var x = a.prix, y = b.prix;
									return x < y ? -1 : x > y ? 1 : 0;
								});*/
								$("#teinteG").empty();
								$('#teinteG').append('<option value>Aucune</option>');
								$.each(data, function(key, value){
									$('#teinteG').append('<option value="'+ value.code +'">' + value.trad_fr + '</option>');
						
								});
							
								}
			
						});	
					}
				
				
				}
		
				$.ajax({
						type: "POST",
						url: "/index/get_Diametre",
						data: {"lens" : type_de_verreG,"sphere" : sphereG,"cylindre" : cylindreG},
						dataType: "json",
						success: function (data) {		
						//alert(data);	
						console.log(data);
				
						$('#diametreG').empty();
						$('#diametreG').append('<option value="">-- Choisir --</option>');
					
						$.each(data, function(key, value){
							console.log(value.name);
							if(lensFocalGroup == "1" || lensFocalGroup == "6" || (lensFocalGroup == "4" && selectedText.indexOf(" - Stock") >= 0))
							{
								$('#diametreG').append('<option value="'+ value.diameter_physical +'">' + value.diameter_physical + '</option>');
							}
							else
							{
								
								$('#diametreG').append('<option value="'+ value.diameter_physical + '/'+(parseInt(value.diameter_physical)+5) +'">' + value.diameter_physical + '/'+(parseInt(value.diameter_physical)+5)+'</option>');
							}
					
						}); 
					
						if(selectedText.indexOf(" - Stock") == -1)
						{
							$('#diametreG').append('<option value="precalibrage">Précalibrage (Gratuit)</option>');
						}
					}
				});	
			
		
			}
		}	
    }
    if(type_de_verreG != "")
    {
    	$('#divprixG').removeClass('hide');
    }
    else
    {
    	$('#divprixG').addClass('hide');
		calculPriceG();
		// $('#prixG').val("");
    	$('#prixGH').val("");
    }
    
    if(diametreD == 'precalibrage')
	{
		$('#precalibrage').removeClass('hide');
	}
	else
	{
		$('#precalibrage').addClass('hide');
	}
	
	var qty = $('#quantiteD').val();
	
	if(($("#type_de_verreD").val() == $("#type_de_verreG").val()) && (type_commande_verre == 2))
	{
		$('#quantiteG').val(qty);
		$('#quantiteD option[value="'+ qty +'"]').prop('selected', true);
		//$('#prixD').val($('#prixG').val());
		//$('#prixDH').val($('#prixGH').val());
	}
    
	if(panierA == 1)
	{
		// $('#to_etape2').addClass('disabled');
	}
}); 

$('#quantiteD').on('change', function() {
	
	/*if(type_commande_verre == 2)
	{
		var nomverre = $("#type_de_verreD option:selected").html();
		var result = nomverre.match(/\((.*)\)/);
		
		var prix = parseFloat(result[1].replace('€', ''));
	}
	else
	{
		var prix = parseFloat($('#prixD').val().replace('€', ''));
	}*/
	
	// var prixverre =  parseFloat($('#prixVerreD').val());
	// var prixteinte =  parseFloat($('#prixTeinteD').val());
	// var prixtraitement =  parseFloat($('#prixTraitementD').val());
	
	calculPriceD();
	
	
	var qty = $('#quantiteD').val();
	//var prixf = prix*qty;
	//console.log("PrixD3")
	//$('#prixD').val(prixf.toFixed(2)+'€');
	//$('#prixDH').val(prixf.toFixed(2)+'€');
	
	if(($("#type_de_verreD").val() == $("#type_de_verreG").val()) && (type_commande_verre == 2))
	{
		$('#quantiteG').val(qty);
		$('#quantiteG option[value="'+ qty +'"]').prop('selected', true);
		calculPriceG();
		//$('#prixG').val($('#prixD').val());
		$('#prixGH').val($('#prixDH').val());
	}
	console.log("quantiteD copyVersDroit");
	copyVersDroit();
});

$('#quantiteG').on('change', function() {

	/*if(type_commande_verre == 2)
	{
		var nomverre = $("#type_de_verreG option:selected").html();
		var result = nomverre.match(/\((.*)\)/);
		
		var prix = parseFloat(result[1].replace('€', ''));
	}
	else
	{
		var prix = parseFloat($('#prixG').val().replace('€', ''));
	}*/
	// var prixverre =  parseFloat($('#prixVerreG').val());
	// var prixteinte =  parseFloat($('#prixTeinteG').val());
	// var prixtraitement =  parseFloat($('#prixTraitementG').val());
	//
	// var prix = (prixverre+prixteinte+prixtraitement).toFixed(2);
	//
	var qty = $('#quantiteG').val();
	// var prixf = prix*qty;
	// $('#prixG').val(prixf.toFixed(2)+'€');
	calculPriceG();
	$('#prixGH').val(prixf.toFixed(2)+'€');
	$('#quantiteD option[value="'+ qty +'"]').prop('selected', true);
	if(($("#type_de_verreD").val() == $("#type_de_verreG").val()) && (type_commande_verre == 2))
	{

		// $('#quantiteD option[value="'+ qty +'"]').prop('selected', true);
		console.log("PrixD4")
		calculPriceG();
		//$('#prixD').val($('#prixG').val());
		$('#prixDH').val($('#prixGH').val());
	}
});




$('#teinteG').on('change', function() {

   var teinte = $('#teinteG').val();
   
   var selectedText = $("#teinteG option:selected").html();
    
    $("#teinteGH").val(selectedText);
    
    $('#preview_carte, #preview_auth_card, #preview_auth_img, #prev_auth').hide();
	$('.eye_text, .corrections .d, .corrections .g').hide();
	
	$('input[name=carte_auth][value=0]').prop('checked', true);
	
	var nameD = $("#type_de_verreD option:selected").html();
    var nameG = $("#type_de_verreG option:selected").html();
	if(nameG.indexOf("Panier") >= 0 || nameD.indexOf("Panier") >= 0)
	{
		$('input[name=carte_auth][value=1]').prop('checked', true);
		$("#carte_auth_y").prop("checked", true);
		$("#carte_auth_n").prop("checked", false);	
			
		$('#div_auth_n').css("display", "none");
	}
	else
	{
		$('#div_auth_n').css("display", "block");
	}
	
	$('#civiliteClient option:eq(0)').prop('selected', true);
	$('#nomClient').val("");
	$('#prenomClient').val("");
	
	if(panierA!=1)
	{
		$('#civilite_client').css("display", "none");
		$('#nom_client').css("display", "none");
		$('#prenom_client').css("display", "none");
		$('#generer_carte').css("display", "none");
	}
	else
	{
		$('#civilite_client').css("display", "block");
		// $('#to_etape2').addClass('disabled');
	}
   
   $("#teintepersoG").val("");
    
   if(teinte == 'CUST_24' || teinte == 'CUST_25')
    {
    	$("#teintepersoG").removeClass("hide");
    }
    else
    {
    	$("#teintepersoG").addClass("hide");
    }
    
});


$('#diametreD').on('change', function() {
    var diametreD = $(this).val();
    var type_de_verreD = $('#type_de_verreD').val();
    var sphereD = String($('#sphereD').val());
    var cylindreD = String($('#cylindreD').val());
    var axeD = String($('#axeD').val());
    var additionD = String($('#additionD').val());
    var sphereG = String($('#sphereG').val());
    var cylindreG = String($('#cylindreG').val());
    var axeG = String($('#axeG').val());
    var additionG = String($('#additionG').val());
    var type_de_verreG = $('#type_de_verreG').val();
    var diametreG = $('#diametreG').val();
    
    var galbeD = $('#galbeD').val();
    
    var stockD = $('input[name="dispoD"]:checked').val()
	var stockG = $('input[name="dispoG"]:checked').val()
	
	if(stockG == "StockG")
	{
		stockG = "StockD";
	}
	
	if(stockG == "FabricationG")
	{
		stockG = "FabricationD";
	}
	
	if(stockG == "ToutG")
	{
		stockG = "ToutD";
	}
    
    var progressionD = $('#progressionD').val();
    var progressionG = $('#progressionG').val();
    
    var selectedTextD = $("#type_de_verreD option:selected").html();
    var selectedTextG = $("#type_de_verreG option:selected").html();
    
    var optionType_de_verreD = $( "#type_de_verreD option:selected" ).text();
	var droite = $('#droit').is(':checked');
	var gauche = $('#gauche').is(':checked');
	
	var diametreG_text = $( "#diametreG option:selected" ).text();
	var diametreD_text = $( "#diametreD option:selected" ).text();
	
	var traitementD = $("#traitementD option:selected").text();
	var teinteD = $("#teinteD option:selected").text();
	
	var teinteDval = $('#teinteD').val();
    var teinteGval = $('#teinteG').val();
    var traitementDval = $('#traitementD').val();
    var traitementGval = $('#traitementG').val();
    
    
	if(traitementD == "Aucun" || traitementD == "----")
	{
		traitementD = "";
	}
	
	if(teinteD == "Aucune")
	{
		teinteD = "";
	}
	else
	{
		if(traitementD != "Aucun" && traitementD != "----" && traitementD != "")
		{
			teinteD = ", "+teinteD;
		}
	}
	
	if(diametreD_text == 'Précalibrage (Gratuit)' || diametreG_text == 'Précalibrage (Gratuit)')
	{
		$('#precalibrage').removeClass('hide');
		diametreD_text = "Precalibré";
	}
	else
	{
		$('#precalibrage').addClass('hide');
	}
	
    if($('#diametreD').val() != "")
    {
		if(selectedTextD.indexOf(" - Stock") >= 0)
		{
			$('#additional_info').addClass('hide');
			if(selectedTextG.indexOf(" - Stock") == -1 || $('#diametreG').val() == "")
			{
				$('#certif').addClass('hide');
				
			}
			if(selectedTextD.indexOf("Panier") >= 0 || selectedTextG.indexOf("Panier") >= 0)
			{
				$('#certif').removeClass('hide');
				$("#carte_auth_y").prop("checked", true);
				$('input[name=carte_auth][value=1]').prop('checked', true);
				$("#carte_auth_n").prop("checked", false);
	
				$('#div_auth_n').css("display", "none");
			}
			else
			{
				$('#div_auth_n').css("display", "block");
			}
		}
		else
		{
			$('#additional_info').removeClass('hide');
			$('#certif').removeClass('hide');
			
			if((droite && type_de_verreD != "" && optionType_de_verreD.indexOf(" - Stock") == -1) || (droite && type_de_verreD != "" && optionType_de_verreD.indexOf("Panier") >= 0))
			{
				$('.corrections .d .eye_text').show();
				$('.corrections .d').show();
				
				if(axeD == "0" || axeD == "")
				{
					axeD = "0";
				}
				
				if(cylindreD == "0") {
					$('.corrections .d').find('.correction').text(sphereD);
				}
				else {
					$('.corrections .d').find('.correction').text(sphereD+" ("+cylindreD+") "+axeD+"°");
				}
				
				$('.corrections .d').find('.correction').text(sphereD+" ("+cylindreD+") "+axeD+"°");
				
				if(additionD != "+0.00")
				{
					additionD = additionD.replace("+", "");
					
					if(lensFocalGroup == 3)
					{
						$('.corrections .d').find('.add').text("ADD "+additionD);
					}
					if(lensFocalGroup == 4 || lensFocalGroup == 5)
					{
						$('.corrections .d').find('.add').text("DEG "+additionD);
					}
				}
				
				$('.verres').show();
				$('.verres .options').show();
				
				$('.verres').find('.nom_verre').text(optionType_de_verreD.split('(')[0]);
				$('.verres').find('.diam_verre').text(" Diamètre: "+$('#diametreD').val());
				nameD = optionType_de_verreD.split('(')[0];
				
				if((nameD.indexOf("Panier") >= 0) && traitementD.split('(')[0] == "Durci")
				{
					$('.verres').find('.miroir').text(teinteD.split('(')[0]);
					//console.log("P A : "+teinteD.split('(')[0]);
				}
				else
				{
					$('.verres').find('.miroir').text(traitementD.split('(')[0]+" "+teinteD.split('(')[0]);
					//console.log("Autres : "+traitementD.split('(')[0]+" "+teinteD.split('(')[0]);
				}
				
				if(galbeD != "Standard")
				{
					$('.verres').find('.galbe').text(" Galbe:"+galbeD);
				}
				
			}
			
			
		}
			
        if(gauche && droite)
		{
			if(type_de_verreG != "" && diametreG != "")
			{
				$('#to_etape2').removeClass('disabled');
			}
		}
		else
		{
			if(droite)
			{
				$('#to_etape2').removeClass('disabled');
			}
		}
		
		
    }
    else
    {
    	$('#to_etape2').addClass('disabled');
    	$('#to_etape3').addClass('disabled');
    }
    
    $('#preview_carte, #preview_auth_card, #preview_auth_img, #prev_auth').hide();
	$('.eye_text, .corrections .d, .corrections .g').hide();
	
	$('input[name=carte_auth][value=0]').prop('checked', true);
	
	var nameD = $("#type_de_verreD option:selected").html();
    var nameG = $("#type_de_verreG option:selected").html();
	if(nameG.indexOf("Panier") >= 0 || nameD.indexOf("Panier") >= 0)
	{
		$('input[name=carte_auth][value=1]').prop('checked', true);
		$("#carte_auth_y").prop("checked", true);
		$("#carte_auth_n").prop("checked", false);	
		
		$('#div_auth_n').css("display", "none");
	}
	else
	{
		$('#div_auth_n').css("display", "block");
	}
	
	$('#civiliteClient option:eq(0)').prop('selected', true);
	$('#nomClient').val("");
	$('#prenomClient').val("");
	
	if(panierA!=1)
	{
		$('#civilite_client').css("display", "none");
		$('#nom_client').css("display", "none");
		$('#prenom_client').css("display", "none");
		$('#generer_carte').css("display", "none");
	}
	else
	{
		$('#civilite_client').css("display", "block");
		// $('#to_etape2').addClass('disabled');
	}
    
    if (String(sphereD).indexOf("+") >= 0)
	{
		sphereD = String(sphereD).replace('+', '');
	}
	if (String(sphereD).indexOf(".00") >= 0)
	{
		sphereD = String(sphereD).replace('.00', '');
	}
	
	if (String(sphereG).indexOf("+") >= 0)
	{
		sphereG = String(sphereG).replace('+', '');
	}
	if (String(sphereG).indexOf(".00") >= 0)
	{
		sphereG = String(sphereG).replace('.00', '');
	}
	
	if (String(cylindreD).indexOf("+") >= 0)
	{
		cylindreD = String(cylindreD).replace('+', '');
	}
	if (String(cylindreD).indexOf(".00") >= 0)
	{
		cylindreD = String(cylindreD).replace('.00', '');
	}
	
	if (String(cylindreG).indexOf("+") >= 0)
	{
		cylindreG = String(cylindreG).replace('+', '');
	}
	if (String(cylindreG).indexOf(".00") >= 0)
	{
		cylindreG = String(cylindreG).replace('.00', '');
	}
	
	/*if (String(axeD).indexOf("+") >= 0)
	{
		axeD = String(axeD).replace('+', '');
	}
	if (String(axeD).indexOf(".00") >= 0)
	{
		axeD = String(axeD).replace('.00', '');
	}
	
	if (String(axeG).indexOf("+") >= 0)
	{
		axeG = String(axeG).replace('+', '');
	}
	if (String(axeG).indexOf(".00") >= 0)
	{
		axeG = String(axeG).replace('.00', '');
	}*/
	
	if (String(additionD).indexOf("+") >= 0)
	{
		additionD = String(additionD).replace('+', '');
	}
	if (String(additionD).indexOf(".00") >= 0)
	{
		additionD = String(additionD).replace('.00', '');
	}
	
	if (String(additionG).indexOf("+") >= 0)
	{
		additionG = String(additionG).replace('+', '');
	}
	if (String(additionG).indexOf(".00") >= 0)
	{
		additionG = String(additionG).replace('.00', '');
	}
    
    
   /* if(sphereD == sphereG && cylindreD==cylindreG && axeD==axeG && additionD==additionG  && progressionD==progressionG && stockD==stockG && droite && gauche && type_de_verreG==type_de_verreD && (teinteGval==teinteDval) && (traitementGval==traitementDval) && (diametreG=="" || diametreD==diametreG) && diametreD!="")
	{
		
		setTimeout(function(){
			copyVersDroit();

		},1000);
	}*/
	
	/*if($('#traitementDH').val() != "")
	{
		if($('#traitementD option[value="Durci"]').length == 0)
		{
			$('#traitementDH').val('HMC');
		}
	}*/
	
	console.log("diametreD copyVersDroit");
	copyVersDroit();
	
	if(diametreD=="precalibrage")
	{
		$('#to_etape2').addClass('disabled');
		
				$('#ecart_puppillaire_droit,#hauteur').addClass('required');
				$("#ecart_puppillaire_droit").prop('required',true);
				$("#hauteur").prop('required',true);
		
	}
    
});

$('#diametreG').on('change', function() {
	var diametreG = $(this).val();
	var diametreD = $('#diametreD').val();
    var stockD = $('input[name="dispoD"]:checked').val()
    var selectedTextD = $("#type_de_verreD option:selected").html();
    var selectedTextG = $("#type_de_verreG option:selected").html();
    var type_de_verreD = $('#type_de_verreD').val();
    var sphereD = $('#sphereD').val();
    var cylindreD = $('#cylindreD').val();
    var axeD = $('#axeD').val();
    var additionD = $('#additionD').val();
    var sphereG = $('#sphereG').val();
    var cylindreG = $('#cylindreG').val();
    var axeG = $('#axeG').val();
    var additionG = $('#additionG').val();
    var type_de_verreG = $('#type_de_verreG').val();
    
    var galbeG = $('#galbeG').val();
    
	var optionType_de_verreG = $( "#type_de_verreG option:selected" ).text();
	var gauche = $('#gauche').is(':checked');
	var droite = $('#droit').is(':checked');
	
	var diametreG_text = $( "#diametreG option:selected" ).text();
	var diametreD_text = $( "#diametreD option:selected" ).text();
	
	var traitementG = $("#traitementG option:selected").text();
	var teinteG = $("#teinteG option:selected").text();
	
	var nameD = $("#type_de_verreD option:selected").html();
	var nameG = $("#type_de_verreG option:selected").html();
	
	if(traitementG == "Aucun" || traitementD == "----")
	{
		traitementG = "";
	}
	
	if(teinteG == "Aucune")
	{
		teinteG = "";
	}
	else
	{
		if(traitementG != "Aucun" && traitementG != "----" && traitementG != "")
		{
			teinteG = ", "+teinteG;
		}
	}
    
    if(diametreD_text == 'Précalibrage (Gratuit)' || diametreG_text == 'Précalibrage (Gratuit)')
	{
		$('#precalibrage').removeClass('hide');
		diametreG_text = "Precalibré";
	}
	else
	{
		$('#precalibrage').addClass('hide');
	}
    
    if($('#diametreG').val() != "")
    {
        if(selectedTextG.indexOf(" - Stock") >= 0)
		{
			$('#additional_info').addClass('hide');
			if(selectedTextD.indexOf(" - Stock") == -1 || $('#diametreD').val() == "")
			{
				$('#certif').addClass('hide');
			}
			
			if(nameG.indexOf("Panier") >= 0 || nameD.indexOf("Panier") >= 0)
			{
				$('input[name=carte_auth][value=1]').prop('checked', true);
				$("#carte_auth_y").prop("checked", true);
				$("#carte_auth_n").prop("checked", false);
					
				$('#div_auth_n').css("display", "none");
			}
			else
			{
				$('#div_auth_n').css("display", "block");
			}
		}
		else
		{
			$('#additional_info').removeClass('hide');
			$('#certif').removeClass('hide');
			
			if((gauche && type_de_verreG != "" && optionType_de_verreG.indexOf(" - Stock") == -1) || (gauche && type_de_verreG != "" && optionType_de_verreG.indexOf("Panier") >= 0))
			{
				$('.corrections .g .eye_text').show();
				$('.corrections .g').show();
				
				if(axeG == "0" || axeG == "")
				{
					axeG = "0";
				}
				
				
				$('.corrections .g').find('.correction').text(sphereG+" ("+cylindreG+") "+axeG+"°");
				
				if(additionG != "+0.00")
				{
					additionG = additionG.replace("+", "");
					
					if(lensFocalGroup == 3)
					{
						$('.corrections .g').find('.add').text("ADD "+additionG);
					}
					if(lensFocalGroup == 4 || lensFocalGroup == 5)
					{
						$('.corrections .g').find('.add').text("DEG "+additionG);
					}
				}
				
				$('.verres').show();
				$('.verres .options').show();
				
				$('.verres').find('.nom_verre').text(optionType_de_verreG.split('(')[0]);
				$('.verres').find('.diam_verre').text(" Diamètre: "+$('#diametreG').val());
				nameG = optionType_de_verreG.split('(')[0];
				if((nameG.indexOf("Panier") >= 0) && traitementG.split('(')[0] == "Durci")
				{
					$('.verres').find('.miroir').text(teinteG.split('(')[0]);
				}
				else
				{
					$('.verres').find('.miroir').text(traitementG.split('(')[0]+" "+teinteG.split('(')[0]);
				}
				
				if(galbeG != "Standard")
				{
					$('.verres').find('.galbe').text(" Galbe:"+galbeG);
				}
			}
		}
        
        
        if(gauche && droite)
		{
			if(type_de_verreD != "" && diametreD != "")
			{
				$('#to_etape2').removeClass('disabled');
			}
		}
		else
		{
			if(gauche)
			{
				$('#to_etape2').removeClass('disabled');
			}
		}
    }
    else
    {
    	$('#to_etape2').addClass('disabled');
    	$('#to_etape3').addClass('disabled');
    }
    
    $('#preview_carte, #preview_auth_card, #preview_auth_img, #prev_auth').hide();
	$('.eye_text, .corrections .d, .corrections .g').hide();
	
	$('input[name=carte_auth][value=0]').prop('checked', true);
	
	if(nameG.indexOf("Panier") >= 0 || nameD.indexOf("Panier") >= 0)
	{
		$('input[name=carte_auth][value=1]').prop('checked', true);
		$("#carte_auth_y").prop("checked", true);
		$("#carte_auth_n").prop("checked", false);
		
		$('#div_auth_n').css("display", "none");
	}
	else
	{
		$('#div_auth_n').css("display", "block");
	}
	
	$('#civiliteClient option:eq(0)').prop('selected', true);
	$('#nomClient').val("");
	$('#prenomClient').val("");
	
	if(panierA!=1)
	{
		$('#civilite_client').css("display", "none");
		$('#nom_client').css("display", "none");
		$('#prenom_client').css("display", "none");
		$('#generer_carte').css("display", "none");
	}
	else
	{
		$('#civilite_client').css("display", "block");
		// $('#to_etape2').addClass('disabled');
	}
	
	if(diametreG=="precalibrage")
	{
		$('#to_etape2').addClass('disabled');
		
				$('#ecart_puppillaire_gauche,#hauteur_gauche').addClass('required');
				$("#ecart_puppillaire_gauche").prop('required',true);
				$("#hauteur_gauche").prop('required',true);
			
	}
    
});

$('#teinteD').on('change', function() {
   var teinteD = $('#teinteD').val();
    var teinteG = $('#teinteG').val();
    var traitementD = $('#traitementD').val();
    var traitementG = $('#traitementG').val();
    var indiceId = $('#indices').val();
    var generation = $('#generation').val();
    var lensFocalGroup = $('#lensFocalGroup').val();
    
    var type_de_verreD = $('#type_de_verreD').val();
    var sphereD = String($('#sphereD').val());
    var cylindreD = String($('#cylindreD').val());
    var axeD = String($('#axeD').val());
    var additionD = String($('#additionD').val());
    var sphereG = String($('#sphereG').val());
    var cylindreG = String($('#cylindreG').val());
    var axeG = String($('#axeG').val());
    var additionG = String($('#additionG').val());
    var type_de_verreG = $('#type_de_verreG').val();
    var indiceId = $('#indices').val();
    
    var droite = $('#droit').is(':checked');
	var gauche = $('#gauche').is(':checked');
    
    var stockD = $('input[name="dispoD"]:checked').val()
	var stockG = $('input[name="dispoG"]:checked').val()
	
	if(stockG == "StockG")
	{
		stockG = "StockD";
	}
	
	if(stockG == "FabricationG")
	{
		stockG = "FabricationD";
	}
	
	if(stockG == "ToutG")
	{
		stockG = "ToutD";
	}
    
    var progressionD = $('#progressionD').val();
    var progressionG = $('#progressionG').val();
    
    var diametreG = $('#diametreG').val();
    
    var prixverre = $('#prixVerreD').val();
    
    var selectedText = $("#teinteD option:selected").html();
    
    $('#prixTeinteD').val("0");
    
    
    $('#preview_carte, #preview_auth_card, #preview_auth_img, #prev_auth').hide();
	$('.eye_text, .corrections .d, .corrections .g').hide();
	
	$('input[name=carte_auth][value=0]').prop('checked', true);
	
	var nameD = $("#type_de_verreD option:selected").html();
    var nameG = $("#type_de_verreG option:selected").html();
	if(nameG.indexOf("Panier") >= 0 || nameD.indexOf("Panier") >= 0)
	{
		$('input[name=carte_auth][value=1]').prop('checked', true);
		$("#carte_auth_y").prop("checked", true);
		$("#carte_auth_n").prop("checked", false);
	
		$('#div_auth_n').css("display", "none");
	}
	else
	{
		$('#div_auth_n').css("display", "block");
	}
	$('#civiliteClient option:eq(0)').prop('selected', true);
	$('#nomClient').val("");
	$('#prenomClient').val("");
	
	if(panierA!=1)
	{
		$('#civilite_client').css("display", "none");
		$('#nom_client').css("display", "none");
		$('#prenom_client').css("display", "none");
		$('#generer_carte').css("display", "none");
	}
	else
	{
		$('#civilite_client').css("display", "block");
		// $('#to_etape2').addClass('disabled');
	}
    
    $("#teinteDH").val(selectedText);
   
   $("#teintepersoD").val("");
    
    if(teinteD == 'CUST_24' || teinteD == 'CUST_25')
    {
    	$("#teintepersoD").removeClass("hide");
    }
    else
    {
    	$("#teintepersoD").addClass("hide");
    }
    
    if (String(sphereD).indexOf("+") >= 0)
	{
		sphereD = String(sphereD).replace('+', '');
	}
	if (String(sphereD).indexOf(".00") >= 0)
	{
		sphereD = String(sphereD).replace('.00', '');
	}
	
	if (String(sphereG).indexOf("+") >= 0)
	{
		sphereG = String(sphereG).replace('+', '');
	}
	if (String(sphereG).indexOf(".00") >= 0)
	{
		sphereG = String(sphereG).replace('.00', '');
	}
	
	if (String(cylindreD).indexOf("+") >= 0)
	{
		cylindreD = String(cylindreD).replace('+', '');
	}
	if (String(cylindreD).indexOf(".00") >= 0)
	{
		cylindreD = String(cylindreD).replace('.00', '');
	}
	
	if (String(cylindreG).indexOf("+") >= 0)
	{
		cylindreG = String(cylindreG).replace('+', '');
	}
	if (String(cylindreG).indexOf(".00") >= 0)
	{
		cylindreG = String(cylindreG).replace('.00', '');
	}
	
	if (String(additionD).indexOf("+") >= 0)
	{
		additionD = String(additionD).replace('+', '');
	}
	if (String(additionD).indexOf(".00") >= 0)
	{
		additionD = String(additionD).replace('.00', '');
	}
	
	if (String(additionG).indexOf("+") >= 0)
	{
		additionG = String(additionG).replace('+', '');
	}
	if (String(additionG).indexOf(".00") >= 0)
	{
		additionG = String(additionG).replace('.00', '');
	}
	
	if(type_de_verreD != "")
    {
    	if(teinteD != "")
    	{
			var nomverre = $("#type_de_verreD option:selected").html();
			var nomteinte = $("#teinteD option:selected").html();
			var nomtraitement = $("#traitementD option:selected").html();
			$('#divprixD').removeClass('hide');
			var indice = $('#indices').val();
			var generation = $('#generation').val();
			$.ajax({
				type: "POST",
				url: "/index/getColors_price",
				data: {"code" : teinteD,
					   "name" : nomteinte,
					   "nom_du_verre" : nomverre,
					   "indice": indice,
					   "generation": generation
				},
				dataType: "json",
				success: function (data) {	
				
				$.each(data, function(key, value){
					$('#prixTeinteD').val(value.prix);
		
				});
			
				}
		
			});
			// console.log(nomtraitement);
			// console.log('55555555555555555555555555555555555555555555555555555555555555')
			console.log('eeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee')

			if(nomtraitement != "----" && nomtraitement != "Aucun")
			{
				var indice = $('#indices').val();
				var generation = $('#generation').val();
				$.ajax({
					type: "POST",
					url: "/index/getOptions_price",
					data: {"code" : traitementD,
					"name" : nomtraitement,
					"nom_du_verre" : nomverre,
					"indice": indice,
					"generation": generation
					},
					dataType: "json",
					success: function (data) {	
						setTimeout(function(){
							var prixteinte = $('#prixTeinteD').val();
							$.each(data, function(key, value){
								$('#prixTraitementD').val(value.prix);
								var tot =  (parseFloat(prixverre)+parseFloat(prixteinte)+parseFloat(value.prix)+addPrismeGalbeDroit()).toFixed(2);
								console.log("PrixD5")
								$('#prixD').val(tot+"€");
								$('#prixDH').val(tot+"€");
							});
						},1000);
					}
			
				});
				
				
			}
			else
			{
				
				setTimeout(function(){
							var prixteinte = $('#prixTeinteD').val();
							var tot = (parseFloat(prixverre)+parseFloat(prixteinte)+addPrismeGalbeDroit()).toFixed(2);
							console.log("PrixD6")
							$('#prixD').val(tot+"€");
							$('#prixDH').val(tot+"€");
						},1000);
				
			}
		}
		else
		{
			var nomverre = $("#type_de_verreD option:selected").html();
			var nomtraitement = $("#traitementD option:selected").html();
			$('#divprixD').removeClass('hide');
			console.log(nomtraitement);
			console.log('8888888888888888888888888888888888888888888888888888888888')

			if(nomtraitement != "----" && nomtraitement != "Aucun")
			{
				var indice = $('#indices').val();
				var generation = $('#generation').val();
				$.ajax({
					type: "POST",
					url: "/index/getOptions_price",
					data: {"code" : traitementD,
						"name" : nomtraitement,
						"nom_du_verre" : nomverre,
						"indice": indice,
						"generation": generation
					},
					dataType: "json",
					success: function (data) {	
				
					$.each(data, function(key, value){
						$('#prixTraitementD').val(value.prix);
						var tot = (parseFloat(prixverre)+parseFloat(value.prix)+addPrismeGalbeDroit()).toFixed(2);
						console.log("PrixD7")
						$('#prixD').val(tot+"€");
						$('#prixDH').val(tot+"€");
					});
			
					}
			
				});
				
				
			}
			else
			{
				var tot = (parseFloat(prixverre)+addPrismeGalbeDroit()).toFixed(2);
				console.log("PrixD8")
				$('#prixD').val(tot+"€");
				$('#prixDH').val(tot+"€");
			}
		}
    }
    else
    {
    	$('#divprixD').addClass('hide');
    	$('#prixD').val("");
    	$('#prixDH').val("");
    }
    
    /* if(sphereD == sphereG && cylindreD==cylindreG && axeD==axeG && additionD==additionG  && progressionD==progressionG && stockD==stockG && droite && gauche && type_de_verreG==type_de_verreD && teinteD!="" && (teinteG=="" || teinteG==teinteD) && (traitementG=="" || traitementG=="0") && diametreG=="")
	{
		
		setTimeout(function(){
			copyVersDroit();

		},1000);
	}
    */
    console.log("teinteD copyVersDroit");
    copyVersDroit();
});


$('#teinteG').on('change', function() {

	var teinteD = $('#teinteD').val();
    
    var traitementD = $('#traitementD').val();
    var traitementG = $('#traitementG').val();
    var indiceId = $('#indices').val();
    var generation = $('#generation').val();
    var lensFocalGroup = $('#lensFocalGroup').val();
    
    var type_de_verreD = $('#type_de_verreD').val();
    var sphereD = String($('#sphereD').val());
    var cylindreD = String($('#cylindreD').val());
    var axeD = String($('#axeD').val());
    var additionD = String($('#additionD').val());
    var sphereG = String($('#sphereG').val());
    var cylindreG = String($('#cylindreG').val());
    var axeG = String($('#axeG').val());
    var additionG = String($('#additionG').val());
    var type_de_verreG = $('#type_de_verreG').val();
    var indiceId = $('#indices').val();
    
    var droite = $('#droit').is(':checked');
	var gauche = $('#gauche').is(':checked');
    
    var progressionD = $('#progressionD').val();
    var progressionG = $('#progressionG').val();
    
    var diametreG = $('#diametreG').val();
	var stockD = $('input[name="dispoD"]:checked').val()
	var teinteG = $(this).val();
    var prixverre = $('#prixVerreG').val();
    
    $('#prixTeinteG').val("0");
    
    if(type_de_verreG != "")
    {
    	if(teinteG != "")
    	{
			var nomverre = $("#type_de_verreG option:selected").html();
			var nomteinte = $("#teinteG option:selected").html();
			var nomtraitement = $("#traitementG option:selected").html();
			var indice = $('#indices').val();
			var generation = $('#generation').val();
			$('#divprixG').removeClass('hide');
			
			$.ajax({
				type: "POST",
				url: "/index/getColors_price",
				data: {"code" : teinteG,
					"name" : nomteinte,
					"nom_du_verre" : nomverre,
					"indice": indice,
					"generation": generation
				},
				dataType: "json",
				success: function (data) {	
				
				$.each(data, function(key, value){
					$('#prixTeinteG').val(value.prix);
		
				});
			
				}
		
			});
			console.log(nomtraitement);
			console.log('777777777777777777777777777777777777777777777777')

			if(nomtraitement != "----" && nomtraitement != "Aucun")
			{
				var indice = $('#indices').val();
				var generation = $('#generation').val();
				$.ajax({
					type: "POST",
					url: "/index/getOptions_price",
					data: {"code" : traitementG,
						"name" : nomtraitement,
						"nom_du_verre" : nomverre,
						"indice": indice,
						"generation": generation
					},
					dataType: "json",
					success: function (data) {	
						setTimeout(function(){
							var prixteinte = $('#prixTeinteG').val();
							$.each(data, function(key, value){
								$('#prixTraitementG').val(value.prix);
								calculPriceG();
								// var tot =  (parseFloat(prixverre)+parseFloat(prixteinte)+parseFloat(value.prix)).toFixed(2);
								// $('#prixG').val(tot+"€");
								$('#prixGH').val($('#prixG').val());
							});
						},1000);
					}
			
				});
				
				
			}
			else
			{
				
				setTimeout(function(){
							// var prixteinte = $('#prixTeinteG').val();
							// var tot = (parseFloat(prixverre)+parseFloat(prixteinte)).toFixed(2);
							// $('#prixG').val(tot+"€");
							calculPriceG();
							$('#prixGH').val($('#prixG').val());
						},1000);
				
			}
		}
		else
		{
			var nomverre = $("#type_de_verreG option:selected").html();
			var nomtraitement = $("#traitementG option:selected").html();
			$('#divprixG').removeClass('hide');
			// console.log(nomtraitement);
			// console.log('6666666666666666666666666666666666666666666666666666')
			console.log('uuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuu')

			if(nomtraitement != "----" && nomtraitement != "Aucun")
			{
				var indice = $('#indices').val();
				var generation = $('#generation').val();
				$.ajax({
					type: "POST",
					url: "/index/getOptions_price",
					data: {"code" : traitementG,
						"name" : nomtraitement,
						"nom_du_verre" : nomverre,
						"indice": indice,
						"generation": generation
					},
					dataType: "json",
					success: function (data) {	
				
					$.each(data, function(key, value){
						$('#prixTraitementG').val(value.prix);
						// var tot = (parseFloat(prixverre)+parseFloat(value.prix)).toFixed(2);
						// $('#prixG').val(tot+"€");
						calculPriceG();
						$('#prixGH').val($('#prixG').val());
					});
			
					}
			
				});
				
				
			}
			else
			{
				// var tot = parseFloat(prixverre).toFixed(2);
				// $('#prixG').val(tot+"€");
				calculPriceG();
				$('#prixGH').val($('#prixG').val());
			}
		}
    }
    else
    {
    	$('#divprixG').addClass('hide');
    	$('#prixG').val("");
    	$('#prixGH').val("");
    }
});

$('#galbeD').on('change', function() {
    var galbeD = $(this).val();
     var diametreD = $(this).val();
    var type_de_verreD = $('#type_de_verreD').val();
    var sphereD = String($('#sphereD').val());
    var cylindreD = String($('#cylindreD').val());
    var axeD = String($('#axeD').val());
    var additionD = String($('#additionD').val());
    var sphereG = String($('#sphereG').val());
    var cylindreG = String($('#cylindreG').val());
    var axeG = String($('#axeG').val());
    var additionG = String($('#additionG').val());
    var type_de_verreG = $('#type_de_verreG').val();
    var diametreG = $('#diametreG').val();
    
    var selectedTextD = $("#type_de_verreD option:selected").html();
    var selectedTextG = $("#type_de_verreG option:selected").html();
    
    var optionType_de_verreD = $( "#type_de_verreD option:selected" ).text();
	var droite = $('#droit').is(':checked');
	var gauche = $('#gauche').is(':checked');
	
	var diametreG_text = $( "#diametreG option:selected" ).text();
	var diametreD_text = $( "#diametreD option:selected" ).text();
	
	var traitementD = $("#traitementD option:selected").text();
	var teinteD = $("#teinteD option:selected").text();
	
	var diametreD = $("#diametreD option:selected").text();
	
	var traitementG = $("#traitementG option:selected").text();
	var teinteG = $("#teinteG option:selected").text();
	
	var diametreG = $("#diametreG option:selected").text();
	
	var teinteDval = $('#teinteD').val();
    var teinteGval = $('#teinteG').val();
    var traitementDval = $('#traitementD').val();
    var traitementGval = $('#traitementG').val();
    var galbeG = $('#galbeG').val();
    
    var stockD = $('input[name="dispoD"]:checked').val()
	var stockG = $('input[name="dispoG"]:checked').val()
	
	if(stockG == "StockG")
	{
		stockG = "StockD";
	}
	
	if(stockG == "FabricationG")
	{
		stockG = "FabricationD";
	}
	
	if(stockG == "ToutG")
	{
		stockG = "ToutD";
	}
    
    var progressionD = $('#progressionD').val();
    var progressionG = $('#progressionG').val();
    
    $('#preview_carte, #preview_auth_card, #preview_auth_img, #prev_auth').hide();
	$('.eye_text, .corrections .d, .corrections .g').hide();
	
	$('input[name=carte_auth][value=0]').prop('checked', true);
	
	var nameD = $("#type_de_verreD option:selected").html();
    var nameG = $("#type_de_verreG option:selected").html();
	if(nameG.indexOf("Panier") >= 0 || nameD.indexOf("Panier") >= 0)
	{
		$('input[name=carte_auth][value=1]').prop('checked', true);
		$("#carte_auth_y").prop("checked", true);
		$("#carte_auth_n").prop("checked", false);	

		$('#div_auth_n').css("display", "none");
	}
	else
	{
		$('#div_auth_n').css("display", "block");
	}
	
	$('#civiliteClient option:eq(0)').prop('selected', true);
	$('#nomClient').val("");
	$('#prenomClient').val("");
	
	if(panierA!=1)
	{
		$('#civilite_client').css("display", "none");
		$('#nom_client').css("display", "none");
		$('#prenom_client').css("display", "none");
		$('#generer_carte').css("display", "none");
	}
	else
	{
		$('#civilite_client').css("display", "block");
		// $('#to_etape2').addClass('disabled');
	}
	
/*	if(sphereD == sphereG && cylindreD==cylindreG && axeD==axeG && additionD==additionG  && progressionD==progressionG && stockD==stockG && droite && gauche && type_de_verreG==type_de_verreD && traitementD==traitementG && teinteD==teinteG && diametreD==diametreG && ((galbeG=="Standard" || galbeD==galbeG) && galbeD!="Standard"))
	{
		
		setTimeout(function(){
			copyVersDroit();

		},1000);
	}
	*/
	console.log("galbeD copyVersDroit");
	copyVersDroit();
	// calculPrice();
});

$('#PrismeSphereD').on('change keyup paste click', function() {
	calculPrice();
});

$('#PrismeSphereG').on('change keyup paste click', function() {
	calculPrice();
});

$('#traitementD').on('change', function() {
	var stockD = $('input[name="dispoD"]:checked').val()
	var traitementD = $(this).val();
    var type_de_verreD = $('#type_de_verreD').val();
    var teinteD = $('#teinteD').val();
    
    var teinteG = $('#teinteG').val();
    var traitementG = $('#traitementG').val();
    var indiceId = $('#indices').val();
    var generation = $('#generation').val();
    var lensFocalGroup = $('#lensFocalGroup').val();
    
    var sphereD = $('#sphereD').val();
    var cylindreD = $('#cylindreD').val();
    var axeD = $('#axeD').val();
    var additionD = $('#additionD').val();
    var sphereG = $('#sphereG').val();
    var cylindreG = $('#cylindreG').val();
    var axeG = $('#axeG').val();
    var additionG = $('#additionG').val();
    var type_de_verreG = $('#type_de_verreG').val();
    var indiceId = $('#indices').val();
    
    var droite = $('#droit').is(':checked');
	var gauche = $('#gauche').is(':checked');
    
	var stockG = $('input[name="dispoG"]:checked').val()
	
	if(stockG == "StockG")
	{
		stockG = "StockD";
	}
	
	if(stockG == "FabricationG")
	{
		stockG = "FabricationD";
	}
	
	if(stockG == "ToutG")
	{
		stockG = "ToutD";
	}
	
	$('#prixTraitementD').val("0");
    
    var progressionD = $('#progressionD').val();
    var progressionG = $('#progressionG').val();
    
    var diametreG = $('#diametreG').val();
    
    var prixverre = $('#prixVerreD').val();
  
  	$('#preview_carte, #preview_auth_card, #preview_auth_img, #prev_auth').hide();
	$('.eye_text, .corrections .d, .corrections .g').hide();
	
	$('input[name=carte_auth][value=0]').prop('checked', true);
	
	var nameD = $("#type_de_verreD option:selected").html();
    var nameG = $("#type_de_verreG option:selected").html();
	if(nameG.indexOf("Panier") >= 0 || nameD.indexOf("Panier") >= 0)
	{
		$('input[name=carte_auth][value=1]').prop('checked', true);
		$("#carte_auth_y").prop("checked", true);
		$("#carte_auth_n").prop("checked", false);
		
		$('#div_auth_n').css("display", "none");
	}
	else
	{
		$('#div_auth_n').css("display", "block");
	}
	
	$('#civiliteClient option:eq(0)').prop('selected', true);
	$('#nomClient').val("");
	$('#prenomClient').val("");
	
	if(panierA!=1)
	{
		$('#civilite_client').css("display", "none");
		$('#nom_client').css("display", "none");
		$('#prenom_client').css("display", "none");
		$('#generer_carte').css("display", "none");
	}
	else
	{
		$('#civilite_client').css("display", "block");
		// $('#to_etape2').addClass('disabled');
	}
    
    if(traitementD == "0")
    {
    	traitementD = "";
    }
    
    if(type_de_verreD != "")
    {
    	if(traitementD != "")
    	{
			var nomverre = $("#type_de_verreD option:selected").html();
			var nomteinte = $("#teinteD option:selected").html();
			var nomtraitement = $("#traitementD option:selected").html();
			$('#divprixD').removeClass('hide');

			console.log('4444444444444444444444444444444444444444444444444444444444444444')

			var indice = $('#indices').val();
			var generation = $('#generation').val();
			$.ajax({
				type: "POST",
				url: "/index/getOptions_price",
				data: {"code" : traitementD,
					"name" : nomtraitement,
					"nom_du_verre" : nomverre,
					"indice": indice,
					"generation": generation
				},
				dataType: "json",
				success: function (data) {	
					$.each(data, function(key, value){
						$('#prixTraitementD').val(value.prix);
					});
				}
		
			});
			//console.log("GGGGGGTEINTED:"+teinteD+"dddddd")
			if(teinteD != "" && teinteD != null)
			{
				var indice = $('#indices').val();
				var generation = $('#generation').val();
				$.ajax({
				type: "POST",
				url: "/index/getColors_price",
				data: {"code" : teinteD,
					"name" : nomteinte,
					"nom_du_verre" : nomverre,
					"indice": indice,
					"generation": generation
				},
				dataType: "json",
				success: function (data) {	
					setTimeout(function(){
							var prixtraitement = $('#prixTraitementD').val();
							$.each(data, function(key, value){
								$('#prixTeinteD').val(value.prix);
								var tot =  (parseFloat(prixverre)+parseFloat(prixtraitement)+parseFloat(value.prix)+addPrismeGalbeDroit()).toFixed(2);
								console.log("PrixD9")
								$('#prixD').val(tot+"€");
								$('#prixDH').val(tot+"€");
							});
						},1000);
					}
		
				});
			}
			else
			{
				setTimeout(function(){
					var prixtraitement = $('#prixTraitementD').val();
					var tot = (parseFloat(prixverre)+parseFloat(prixtraitement)+addPrismeGalbeDroit()).toFixed(2);
					//console.log("prixtraitementD:"+prixtraitement+" - tot:"+tot);
					console.log("PrixD10")
					$('#prixD').val(tot+"€");
					$('#prixDH').val(tot+"€");
				},1000);
			}
		}
		else
		{
			
			var nomverre = $("#type_de_verreD option:selected").html();
			var nomteinte = $("#teinteD option:selected").html();
			$('#divprixD').removeClass('hide');
			
			if(nomteinte != "----" && nomteinte != "Aucune")
			{
				var indice = $('#indices').val();
				var generation = $('#generation').val();
				$.ajax({
				type: "POST",
				url: "/index/getColors_price",
				data: {"code" : teinteD,
					"name" : nomteinte,
					"nom_du_verre" : nomverre,
					"indice": indice,
					"generation": generation
				},
				dataType: "json",
				success: function (data) {
					$.each(data, function(key, value){
						$('#prixTeinteD').val(value.prix);
						var tot = (parseFloat(prixverre)+parseFloat(value.prix)+addPrismeGalbeDroit()).toFixed(2);
						console.log("PrixD11")
						$('#prixD').val(tot+"€");
						$('#prixDH').val(tot+"€");
					});
					
					}
		
				});
				
			}
			else
			{
				var tot = (parseFloat(prixverre)+addPrismeGalbeDroit()).toFixed(2);
				console.log("PrixD12")
				$('#prixD').val(tot+"€");
				$('#prixDH').val(tot+"€");
			}
		}
    }
    else
    {
    	$('#divprixD').addClass('hide');
    	$('#prixD').val("");
    	$('#prixDH').val("");
    }
    
    var selectedText = $("#traitementD option:selected").html();  
    $("#traitementDH").val(selectedText);
    
    if (String(sphereD).indexOf("+") >= 0)
	{
		sphereD = String(sphereD).replace('+', '');
	}
	if (String(sphereD).indexOf(".00") >= 0)
	{
		sphereD = String(sphereD).replace('.00', '');
	}
	
	if (String(sphereG).indexOf("+") >= 0)
	{
		sphereG = String(sphereG).replace('+', '');
	}
	if (String(sphereG).indexOf(".00") >= 0)
	{
		sphereG = String(sphereG).replace('.00', '');
	}
	
	if (String(cylindreD).indexOf("+") >= 0)
	{
		cylindreD = String(cylindreD).replace('+', '');
	}
	if (String(cylindreD).indexOf(".00") >= 0)
	{
		cylindreD = String(cylindreD).replace('.00', '');
	}
	
	if (String(cylindreG).indexOf("+") >= 0)
	{
		cylindreG = String(cylindreG).replace('+', '');
	}
	if (String(cylindreG).indexOf(".00") >= 0)
	{
		cylindreG = String(cylindreG).replace('.00', '');
	}
	
	/*if (String(axeD).indexOf("+") >= 0)
	{
		axeD = String(axeD).replace('+', '');
	}
	if (String(axeD).indexOf(".00") >= 0)
	{
		axeD = String(axeD).replace('.00', '');
	}
	
	if (String(axeG).indexOf("+") >= 0)
	{
		axeG = String(axeG).replace('+', '');
	}
	if (String(axeG).indexOf(".00") >= 0)
	{
		axeG = String(axeG).replace('.00', '');
	}*/
	
	if (String(additionD).indexOf("+") >= 0)
	{
		additionD = String(additionD).replace('+', '');
	}
	if (String(additionD).indexOf(".00") >= 0)
	{
		additionD = String(additionD).replace('.00', '');
	}
	
	if (String(additionG).indexOf("+") >= 0)
	{
		additionG = String(additionG).replace('+', '');
	}
	if (String(additionG).indexOf(".00") >= 0)
	{
		additionG = String(additionG).replace('.00', '');
	}
    
   /* if(sphereD == sphereG && cylindreD==cylindreG && axeD==axeG && additionD==additionG  && progressionD==progressionG && stockD==stockG && droite && gauche && type_de_verreG==type_de_verreD && (traitementD!="" && traitementD!="0") && (teinteG=="" || teinteG==teinteD) && (traitementG=="" || traitementG=="0" || traitementG==traitementD) && diametreG=="")
	{
		setTimeout(function(){
			copyVersDroit();
		},1000);
	}*/
	console.log("traitementD copyVersDroit");
	copyVersDroit();
	
});

$('#traitementG').on('change', function() {
	var stockD = $('input[name="dispoG"]:checked').val()
	var traitementG = $(this).val();
    var type_de_verreG = $('#type_de_verreG').val();
    var teinteG = $('#teinteG').val();
   
	var traitementD = $(this).val();
    var type_de_verreD = $('#type_de_verreD').val();
    var teinteD = $('#teinteD').val();
    
    var indiceId = $('#indices').val();
    var generation = $('#generation').val();
    var lensFocalGroup = $('#lensFocalGroup').val();
    
    var sphereD = $('#sphereD').val();
    var cylindreD = $('#cylindreD').val();
    var axeD = $('#axeD').val();
    var additionD = $('#additionD').val();
    var sphereG = $('#sphereG').val();
    var cylindreG = $('#cylindreG').val();
    var axeG = $('#axeG').val();
    var additionG = $('#additionG').val();
    
    var indiceId = $('#indices').val();
    
    var prixverre = $('#prixVerreG').val();
    
    $('#prixTraitementG').val("0");
    
    $('#preview_carte, #preview_auth_card, #preview_auth_img, #prev_auth').hide();
	$('.eye_text, .corrections .d, .corrections .g').hide();
	
	$('input[name=carte_auth][value=0]').prop('checked', true);
	
	var nameD = $("#type_de_verreD option:selected").html();
    var nameG = $("#type_de_verreG option:selected").html();
	if(nameG.indexOf("Panier") >= 0 || nameD.indexOf("Panier") >= 0)
	{
		$('input[name=carte_auth][value=1]').prop('checked', true);
		$("#carte_auth_y").prop("checked", true);	
		$("#carte_auth_n").prop("checked", false);
	
		$('#div_auth_n').css("display", "none");
	}
	else
	{
		$('#div_auth_n').css("display", "block");
	}
	
	$('#civiliteClient option:eq(0)').prop('selected', true);
	$('#nomClient').val("");
	$('#prenomClient').val("");
	
	if(panierA!=1)
	{
		$('#civilite_client').css("display", "none");
		$('#nom_client').css("display", "none");
		$('#prenom_client').css("display", "none");
		$('#generer_carte').css("display", "none");
	}
	else
	{
		$('#civilite_client').css("display", "block");
		// $('#to_etape2').addClass('disabled');
	}
    
    if(type_de_verreG != "")
    {
    	if(traitementG != "")
    	{
			var nomverre = $("#type_de_verreG option:selected").html();
			var nomteinte = $("#teinteG option:selected").html();
			var nomtraitement = $("#traitementG option:selected").html();
			$('#divprixG').removeClass('hide');
			console.log('333333333333333333333333333333333333333333333333333333333333333333333333333')

			var indice = $('#indices').val();
			var generation = $('#generation').val();
			$.ajax({
				type: "POST",
				url: "/index/getOptions_price",
				data: {"code" : traitementG,
					"name" : nomtraitement,
					"nom_du_verre" : nomverre,
					"indice": indice,
					"generation": generation
				},
				dataType: "json",
				success: function (data) {	
					$.each(data, function(key, value){
						$('#prixTraitementG').val(value.prix);
					});
				}
		
			});
			
			if(teinteG != ""  && teinteG != null)
			{
				var indice = $('#indices').val();
				var generation = $('#generation').val();
				$.ajax({
				type: "POST",
				url: "/index/getColors_price",
				data: {"code" : teinteG,
					"name" : nomteinte,
					"nom_du_verre" : nomverre,
					"indice": indice,
					"generation": generation
				},
				dataType: "json",
				success: function (data) {	
					setTimeout(function(){
							// var prixtraitement = $('#prixTraitementG').val();
							// var prixverre = $('#prixVerreG').val();
							$.each(data, function(key, value){
								$('#prixTeinteG').val(value.prix);
								
								// console.log("prixVerreG:");
								// console.log(prixverre);
								//
								// console.log("prixTraitementG:");
								// console.log(prixtraitement);
								//
								// console.log("prixTeinteG:");
								// console.log(value.prix);
								//
								// var tot =  (parseFloat(prixverre)+parseFloat(prixtraitement)+parseFloat(value.prix)).toFixed(2);
								//
								// console.log("tot:");
								// console.log(tot);
								calculPriceG();
								// $('#prixG').val(tot+"€");
								$('#prixGH').val($('#prixG').val());
							});
						},1000);
					}
		
				});
			}
			else
			{
				setTimeout(function(){
					// var prixtraitement = $('#prixTraitementG').val();
					// var prixverre = $('#prixVerreG').val();
					// var tot = (parseFloat(prixverre)+parseFloat(prixtraitement)).toFixed(2);
					// $('#prixG').val(tot+"€");
					calculPriceG();
					$('#prixGH').val($('#prixG').val());
				},1000);
			}
		}
		else
		{
			
			var nomverre = $("#type_de_verreG option:selected").html();
			var nomteinte = $("#teinteG option:selected").html();
			$('#divprixG').removeClass('hide');
			
			if(nomteinte != "----" && nomteinte != "Aucune")
			{
				var indice = $('#indices').val();
				var generation = $('#generation').val();
				$.ajax({
				type: "POST",
				url: "/index/getColors_price",
				data: {"code" : teinteG,
					"name" : nomteinte,
					"nom_du_verre" : nomverre,
					"indice": indice,
					"generation": generation
				},
				dataType: "json",
				success: function (data) {
					$.each(data, function(key, value){
						var prixverre = $('#prixVerreG').val();
						$('#prixTeinteG').val(value.prix);
						var tot = (parseFloat(prixverre)+parseFloat(value.prix)).toFixed(2);
						$('#prixG').val(tot+"€");
						$('#prixGH').val(tot+"€");
					});
					
					}
		
				});
				
			}
			else
			{
				var tot = parseFloat(prixverre).toFixed(2);
				$('#prixG').val(tot+"€");
				$('#prixGH').val(tot+"€");
			}
		}
    }
    else
    {
    	$('#divprixG').addClass('hide');
    	$('#prixG').val("");
    	$('#prixGH').val("");
    }
    
    var selectedText = $("#traitementG option:selected").html();  
    $("#traitementGH").val(selectedText);
});

$('#galbeG').on('change', function() {

var stockD = $('input[name="dispoD"]:checked').val();
var galbeD = $('#galbeD').val();
var galbeG = $('#galbeG').val();
	
	$('#preview_carte, #preview_auth_card, #preview_auth_img, #prev_auth').hide();
	$('.eye_text, .corrections .d, .corrections .g').hide();
	
	$('input[name=carte_auth][value=0]').prop('checked', true);
	
	var nameD = $("#type_de_verreD option:selected").html();
    var nameG = $("#type_de_verreG option:selected").html();
	if(nameG.indexOf("Panier") >= 0 || nameD.indexOf("Panier") >= 0)
	{
		$('input[name=carte_auth][value=1]').prop('checked', true);
		$("#carte_auth_y").prop("checked", true);
		$("#carte_auth_n").prop("checked", false);	
		
		$('#div_auth_n').css("display", "none");
	}
	else
	{
		$('#div_auth_n').css("display", "block");
	}
	
	$('#civiliteClient option:eq(0)').prop('selected', true);
	$('#nomClient').val("");
	$('#prenomClient').val("");
	
	$('#galbeD').val(galbeG);
	
	if(panierA!=1)
	{
		$('#civilite_client').css("display", "none");
		$('#nom_client').css("display", "none");
		$('#prenom_client').css("display", "none");
		$('#generer_carte').css("display", "none");
	}
	else
	{
		$('#civilite_client').css("display", "block");
		// $('#to_etape2').addClass('disabled');
	}
	calculPrice();

});

$('#afficherV').on('click', function() {

	var droite = $('#droit').is(':checked');
	var gauche = $('#gauche').is(':checked');
	
	var indiceId = $('#indices').val();
    var generation = $('#generation').val();
    var lensFocalGroup = $('#lensFocalGroup').val();
    var sphereD = $('#sphereD').val();
    var cylindreD = $('#cylindreD').val();
    var axeD = $('#axeD').val();
    var additionD = $('#additionD').val();
    var sphereG = $('#sphereG').val();
    var cylindreG = $('#cylindreG').val();
    var axeG = $('#axeG').val();
    var additionG = $('#additionG').val();
    
    var stockD = $('input[name="dispoD"]:checked').val()
	var stockG = $('input[name="dispoG"]:checked').val()
	
	if(stockG == "StockG")
	{
		stockG = "StockD";
	}
	
	if(stockG == "FabricationG")
	{
		stockG = "FabricationD";
	}
	
	if(stockG == "ToutG")
	{
		stockG = "ToutD";
	}
	
	var progressionD = $('#progressionD').val();
    var progressionG = $('#progressionG').val();
    
    $('#prixVerreD').val("0");
    $('#prixTeinteD').val("0");
    $('#prixTraitementD').val("0");
    
    $('#prixVerreG').val("0");
    $('#prixTeinteG').val("0");
    $('#prixTraitementG').val("0");
    
    $("#teintepersoD").val("");
    $("#teintepersoD").addClass("hide");
    
    $("#teintepersoG").val("");
    $("#teintepersoG").addClass("hide");
    
    
   
	if(generation == "Progressif de stock" || generation == "Panier A Initial")
	{
		$('#progressionD').prop('disabled', true);
		$('#progressionG').prop('disabled', true);
	}
    
    
    
    var forceSphStep = true;
    
    if (gauche && droite) {
    	var checkD = sphereD;
    	var checkG = sphereG;
    	
    	if (checkD.indexOf(",") >= 0)
    	{
    		checkD = checkD.replace(',', '.');
    	}
    	if (checkD.indexOf("+") >= 0)
    	{
    		checkD = checkD.replace('+', '');
    	}
    	
    	if (checkG.indexOf(",") >= 0)
    	{
    		checkG = checkG.replace(',', '.');
    	}
    	if (checkG.indexOf("+") >= 0)
    	{
    		checkG = checkG.replace('+', '');
    	}
    
		if( ((Number(checkD) > 0) != (Number(checkG) > 0)) && checkD != 0) {

			swal({
				title: "Signes contraires confirmés ?",
				text: "",
				type: "warning",
				showCancelButton: true,
				confirmButtonText: "Oui",
				cancelButtonText: "Modifier",
				closeOnConfirm: true,
				closeOnCancel: true
			}, function(isConfirm){
				if (isConfirm) {
					forceSphStep = true;
				}
				else {
					forceSphStep = false;
					$('#produit').addClass('hide');
					$("#detailD").css("display", "none");
					$("#afficherV").css("display", "inline-block");
					$('#precalibrage').addClass('hide');
					$('#certif').addClass('hide');
					$('#additional_info').addClass('hide');
				}
			});

		}
	}
	
	
	if(forceSphStep == true)
    {
    
    
    $('#to_etape2').addClass('disabled');
    
    $('#divquantiteD').addClass('hide');
    $('#divquantiteG').addClass('hide');
    
    $('#quantiteD option:eq(0)').prop('selected', true);
    $('#quantiteG option:eq(0)').prop('selected', true);
    
    $('#quantiteD').prop('disabled', true);
    $('#quantiteG').prop('disabled', true);
    
    $('input[name=dispoD][value=ToutD]').prop('checked', true);
    $('input[name=dispoG][value=ToutD]').prop('checked', true);
    
    var stockD = $('input[name="dispoD"]:checked').val()
	var stockG = $('input[name="dispoG"]:checked').val()
	
	if(stockG == "StockG")
	{
		stockG = "StockD";
	}
	
	if(stockG == "FabricationG")
	{
		stockG = "FabricationD";
	}
	
	if(stockG == "ToutG")
	{
		stockG = "ToutD";
	}
    
   if($('#progressionG').val() == '')
    {
    	$("#detailG").css("display", "none");
    }
    else
    {
    	$("#detailG").css("display", "block");
    }
    
    $('#nomverreDH').val("");
    $('#nomverreGH').val("");
    
/*    $('#type_de_verreD').empty();
	$('#type_de_verreD').append('<option value="">-- Choisir --</option>');
	$('#type_de_verreD option:eq(0)').prop('selected', true);
    $('#type_de_verreD').val("");
    $('#type_de_verreD').trigger('change');
    
    $('#type_de_verreG').empty();
	$('#type_de_verreG').append('<option value="">-- Choisir --</option>');
	$('#type_de_verreG option:eq(0)').prop('selected', true);
    $('#type_de_verreG').val("");
    $('#type_de_verreG').trigger('change');
*/    
    $('#teinteD').empty();
	$('#teinteD').append('<option value="">----</option>');
	$('#teinteD option:eq(0)').prop('selected', true);
	$('#traitementD').empty();
	$('#traitementD').append('<option value="">----</option>');
	$('#traitementD option:eq(0)').prop('selected', true);
	$('#diametreD').empty();
	$('#diametreD').append('<option value="">-- Choisir --</option>');
	$('#diametreD option:eq(0)').prop('selected', true);
	$('#progressionD option:eq(1)').prop('selected', true);
    
    $('#teinteG').empty();
	$('#teinteG').append('<option value="">----</option>');
	$('#teinteG option:eq(0)').prop('selected', true);
	$('#traitementG').empty();
	$('#traitementG').append('<option value="">----</option>');
	$('#traitementG option:eq(0)').prop('selected', true);
	$('#diametreG').empty();
	$('#diametreG').append('<option value="">-- Choisir --</option>');
	$('#diametreG option:eq(0)').prop('selected', true);
	$('#progressionG option:eq(1)').prop('selected', true);
	 
    
     
    if(indiceId != "" && (cylindreD != '' || cylindreG != '')) {
    	  // alert("indiceId:"+indiceId+" ,lensFocalGroup:"+lensFocalGroup+" ,generation:"+generation+" ,sphereD:"+sphereD+" ,sphereG:"+sphereG+" ,cylindreD:"+cylindreD+" ,cylindreG:"+cylindreG+" ,axeD:"+axeD+" ,axeG:"+axeG+" ,additionD:"+additionD+" ,additionG:"+additionG+" ,stockD:"+stockD+" ,stockG:"+stockG+" ,progressionD:"+progressionD+" ,progressionG:"+progressionG);
    	   	getTypedeVerre(indiceId,lensFocalGroup,generation,sphereD,sphereG,cylindreD,cylindreG,axeD,axeG,additionD,additionG,stockD,stockG,progressionD,progressionG,droite,gauche,panierAm,deuxiemepaire);
    	   
    } 
    
    
    $('#teinteD').empty();
    $('#teinteG').empty();
    $('#teinteD').append('<option value="">----</option>');
    $('#teinteG').append('<option value="">----</option>');  
  
    
	$("#produit").css("display", "block");
	$('#produit').removeClass('hide');
	
	if(droite)
	{
		$("#detailD").css("display", "block");
	}
	if(gauche)
	{
		$("#detailG").css("display", "block");
	}
	
	
	$('#cotea').val('');
	$('#coteb').val('');
	$('#cotec').val('');
	$('#coted').val('');
	//$('#epaisseur_bord_verre').val('');
	
	
	$('.calibre').removeClass('calibre_selected');
	
	$('#precalibrage').addClass('hide');
	
	
	$("#afficherV").css("display", "none");
	
	/*setTimeout(function(){
			sortlist_id('#type_de_verreD');
			sortlist_id('#type_de_verreG');
			
		},1000);
	*/	
	$("#traitementDH").val("");
    $("#traitementGH").val("");
    $("#teinteDH").val("");
    $("teinteGH").val("");
    
    $('#carte_1').hide;
	$("#carte_1").css("display", "none");
	$('#cartesGD').hide;
	$("#cartesGD").css("display", "none");
	
	$('input[name=carte_auth][value=0]').prop('checked', true);
	
	var nameD = $("#type_de_verreD option:selected").html();
    var nameG = $("#type_de_verreG option:selected").html();
	if(nameG.indexOf("Panier") >= 0 || nameD.indexOf("Panier") >= 0)
	{
		$('input[name=carte_auth][value=1]').prop('checked', true);
		$("#carte_auth_y").prop("checked", true);
		$("#carte_auth_n").prop("checked", false);	
			
		$('#div_auth_n').css("display", "none");
	}
	else
	{
		$('#div_auth_n').css("display", "block");
	}
	
	$('#civiliteClient option:eq(0)').prop('selected', true);
	$('#nomClient').val("");
	$('#prenomClient').val("");
	
	$('#civilite_client').css("display", "none");
	$('#nom_client').css("display", "none");
	$('#prenom_client').css("display", "none");
	$('#generer_carte').css("display", "none");
	
	}
	
});

$('#VersGauche').on('click', function() {

	copyVersDroit()

});

$('#VersDroit').on('click', function() {

	copyVersGauche()

});



function getTypedeVerre(indiceId,lensFocalGroup,generation,sphereD,sphereG,cylindreD,cylindreG,axeD,axeG,additionD,additionG,stockD,stockG,progressionD,progressionG,droite,gauche,panierAm,deuxiemepaire)
{
	var type = $('#type_commande').val();
	console.log("type_commande_verre : "+type);
		
	if(indiceId == '')
    	indiceId = '-';
    	
    if(generation == '')
    	generation = '-';
    	
    if(lensFocalGroup == '')
    	lensFocalGroup = '-';
    	
    if(lensFocalGroup != '-')
    {
    	
		if(sphereD == '')
			sphereD = '-';
		else
		{
			if (sphereD.indexOf("+") >= 0)
			{
				sphereD = sphereD.replace('+', '');
			}
			else if (sphereD.indexOf("-") >= 0)
			{
		
			}
			else
			{
				var new_sphere = "+"+sphereD
				$("#sphereD").val(new_sphere); 
			}
		}
	
		if(cylindreD == '')
			cylindreD = '-';
		else
		{
			if (cylindreD.indexOf("+") >= 0)
			{
				cylindreD = cylindreD.replace('+', '');
			}
			else if (cylindreD.indexOf("-") >= 0)
			{
		
			}
			else
			{
				var new_cylindreD = "+"+cylindreD
				$("#cylindreD").val(new_cylindreD); 
			}
		}
		
	
		
		if(axeD == '')
			axeD = '-';
		
		if(additionD == '')
			additionD = '-';
		else
		{
			
			if (additionD.indexOf("+") >= 0)
			{
				additionD = additionD.replace('+', '');
				additionD = roundToNearest(additionD,0.25);
				var new_additionD = "+"+additionD;
			
				$("#additionD").val(new_additionD);
			}
			else if (additionD.indexOf("-") >= 0)
			{
				additionD = roundToNearest(additionD,0.25);
				$("#additionD").val(additionD);
			}
			else
			{
				additionD = roundToNearest(additionD,0.25);
				var new_additionD = "+"+additionD;
			
				$("#additionD").val(new_additionD); 
				additionD = $('#additionD').val();
			}
		}
		
		if(sphereG == '')
			sphereG = '-';
		else
		{
			if (sphereG.indexOf("+") >= 0)
			{
				sphereG = sphereG.replace('+', '');
			}
			else if (sphereG.indexOf("-") >= 0)
			{
		
			}
			else
			{
				var new_sphere = "+"+sphereG
				$("#sphereG").val(new_sphere); 
			}
		}
		
	
		if(cylindreG == '')
			cylindreG = '-';
		else
		{
			if (cylindreG.indexOf("+") >= 0)
			{
				cylindreG = cylindreG.replace('+', '');
			}
			else if (cylindreG.indexOf("-") >= 0)
			{
		
			}
			else
			{
				var new_cylindreG = "+"+cylindreG
				$("#cylindreG").val(new_cylindreG); 
			}
		}
	
		
		if(axeG == '')
			axeG = '-';
		
		
		if(additionG == '')
			additionG = '-';
		else
		{
			if (additionG.indexOf("+") >= 0)
			{
				additionG = additionG.replace('+', '');
				additionG = roundToNearest(additionG,0.25);
				var new_additionG = "+"+additionG;
			
				$("#additionG").val(new_additionG);
			}
			else if (additionG.indexOf("-") >= 0)
			{
				additionG = roundToNearest(additionG,0.25);
				$("#additionG").val(additionG);
			}
			else
			{
				additionG = roundToNearest(additionG,0.25);
				var new_additionG = "+"+additionG;
			
				$("#additionG").val(additionG); 
				additionG = $('#additionG').val();
			}
		}
		
		if (String(sphereD).indexOf("+") >= 0)
		{
			sphereD = String(sphereD).replace('+', '');
		}
		if (String(sphereD).indexOf(".00") >= 0)
		{
			sphereD = String(sphereD).replace('.00', '');
		}
	
		if (String(sphereG).indexOf("+") >= 0)
		{
			sphereG = String(sphereG).replace('+', '');
		}
		if (String(sphereG).indexOf(".00") >= 0)
		{
			sphereG = String(sphereG).replace('.00', '');
		}
	
		if (String(cylindreD).indexOf("+") >= 0)
		{
			cylindreD = String(cylindreD).replace('+', '');
		}
		if (String(cylindreD).indexOf(".00") >= 0)
		{
			cylindreD = String(cylindreD).replace('.00', '');
		}
	
		if (String(cylindreG).indexOf("+") >= 0)
		{
			cylindreG = String(cylindreG).replace('+', '');
		}
		if (String(cylindreG).indexOf(".00") >= 0)
		{
			cylindreG = String(cylindreG).replace('.00', '');
		}
	
		if (String(additionD).indexOf("+") >= 0)
		{
			additionD = String(additionD).replace('+', '');
		}
		if (String(additionD).indexOf(".00") >= 0)
		{
			additionD = String(additionD).replace('.00', '');
		}
	
		if (String(additionG).indexOf("+") >= 0)
		{
			additionG = String(additionG).replace('+', '');
		}
		if (String(additionG).indexOf(".00") >= 0)
		{
			additionG = String(additionG).replace('.00', '');
		}
		
		
		if(cylindreD != '-' && droite)
		{
			
			//$("#type_de_verreD").attr('disabled', true);
			$(".loading").show();
			$('#type_de_verreD').empty();
			
			$('#type_de_verreD').append('<option value="" rel="">-- Choisir --</option>');
			setTimeout(function(){
				console.log("getTypedeVerre Empty type_de_verreD");
				$('#type_de_verreD').trigger('change');
			},300);
			console.log('AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA');
			if(lensFocalGroup == "3")
			{
				if(progressionD == '')
				{
					progressionD = 'Tous';
				}
				if(generation == "Progressif de stock")
				{
					//alert("indiceId:"+indiceId+" ,lensFocalGroup:"+lensFocalGroup+" ,generation:"+generation+" ,sphereD:"+sphereD+" ,sphereG:"+sphereG+" ,cylindreD:"+cylindreD+" ,cylindreG:"+cylindreG+" ,axeD:"+axeD+" ,axeG:"+axeG+" ,additionD:"+additionD+" ,additionG:"+additionG+" ,stockD:"+stockD+" ,stockG:"+stockG+" ,progressionD:"+progressionD+" ,progressionG:"+progressionG);	
					if((indiceId == "1.5" || indiceId == "1.6" || indiceId == "1.59" || indiceId == "1.67") &&  (progressionD == 'Short' || progressionD == 'Tous') && (stockD == 'StockD' || stockD == 'ToutD'))
					{
						console.log('GGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGG');

						$.ajax({
							type: "POST",
							url: "/index/getStockTypeDeVerre",
							data: {"indiceId" : indiceId, "lensFocalGroup" : lensFocalGroup, "generation" : generation,"sphereD" : sphereD,"cylindreD" : cylindreD,"axeD" : axeD,"additionD" : additionD,"stockD" : stockD,"panierA" : panierAm,"type" : type},
							dataType: "json",
							success: function (data) {	
							//alert(data);
							if(data)
							{
								console.log(data);	
								$.each(data, function(key, value){
								setTimeout(function(){
									$('#type_de_verreD').append('<option value="S26783" rel="]S26783">'+ value.name + '</option>');
									
								},300);
								})
							}
						  }
						})
					}
				}
				else
				{
					//alert("progressionD:"+progressionD);
				$.ajax({
						type: "POST",
						url: "/index/getTypeDeVerre",
						data: {"indiceId" : indiceId, "lensFocalGroup" : lensFocalGroup, "generation" : generation,"sphereD" : sphereD,"cylindreD" : cylindreD,"axeD" : axeD,"additionD" : additionD,"stockD" : stockD,"panierA" : panierAm,"type" : type},
						dataType: "json",
						beforeSend: function () {
							//$(".loading").show();
						},
						success: function (data) {	
						console.log("Droit1:");	
						console.log(data);	
						if(data != "")
						{
							$.each(data, function(key, value){
					
							if(value.trad_fr == "")
							{
								value.trad_fr = value.name;
							}
					
							if(generation == "E-Space")
							{
								var n_T_ONE = value.trad_fr; 
								value.trad_fr = n_T_ONE.replace("T-One", "E-Space");
							}
						
							//alert("Name:"+value.name+" - progressionD:"+progressionD+" - lensFocalGroup:"+lensFocalGroup+" - deuxiemepaire:"+deuxiemepaire);
						
							if((progressionD == '' || progressionD == 'Tous') && lensFocalGroup == '3')
							{
								if((value.name.indexOf("Panier A ") >= 0) && deuxiemepaire == 0)
								{
									if(((parseFloat(cylindreD)+parseFloat(sphereD)) >= -2 && (parseFloat(cylindreD)+parseFloat(sphereD)) <= 2 && indiceId == "1.5") || ((parseFloat(cylindreD)+parseFloat(sphereD)) >= -4 && (parseFloat(cylindreD)+parseFloat(sphereD)) <= 4 && indiceId == "1.59") || ((parseFloat(cylindreD)+parseFloat(sphereD)) >= -4 && (parseFloat(cylindreD)+parseFloat(sphereD)) <= 4 && indiceId == "1.6") || ((parseFloat(cylindreD)+parseFloat(sphereD)) >= -8 && (parseFloat(cylindreD)+parseFloat(sphereD)) <= 8 && indiceId == "1.67") || (indiceId == "1.74") )
									{
										if(generation == "E-Space")
										{
											if(value.trad_fr.indexOf("E-Space") >= 0)
											{
												$('#type_de_verreD').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else if(generation == "T-One")
										{
											if(value.trad_fr.indexOf("T-One") >= 0)
											{
												$('#type_de_verreD').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else
										{
											$('#type_de_verreD').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
										}
									}
								}
								else
								{
									if(generation == "E-Space")
										{
											if(value.trad_fr.indexOf("E-Space") >= 0)
											{
												$('#type_de_verreD').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else if(generation == "T-One")
										{
											if(value.trad_fr.indexOf("T-One") >= 0)
											{
												$('#type_de_verreD').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else
										{
											$('#type_de_verreD').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
										}
								}
							}
							else if(progressionD == 'Regular' && lensFocalGroup == '3')
							{
								if ((value.name.indexOf(" R ") >= 0 || (value.name.indexOf("T-One 18 ") >= 0) || (value.name.indexOf("Panier A Initial 18 ") >= 0)))
								{
									if((value.name.indexOf("Panier A Initial 18 ") >= 0) && deuxiemepaire == 0)
									{
										if(((parseFloat(cylindreD)+parseFloat(sphereD)) >= -2 && (parseFloat(cylindreD)+parseFloat(sphereD)) <= 2 && indiceId == "1.5") || ((parseFloat(cylindreD)+parseFloat(sphereD)) >= -4 && (parseFloat(cylindreD)+parseFloat(sphereD)) <= 4 && indiceId == "1.59") || ((parseFloat(cylindreD)+parseFloat(sphereD)) >= -4 && (parseFloat(cylindreD)+parseFloat(sphereD)) <= 4 && indiceId == "1.6") || ((parseFloat(cylindreD)+parseFloat(sphereD)) >= -8 && (parseFloat(cylindreD)+parseFloat(sphereD)) <= 8 && indiceId == "1.67") || (indiceId == "1.74") )
										{
											if(generation == "E-Space")
										{
											if(value.trad_fr.indexOf("E-Space") >= 0)
											{
												$('#type_de_verreD').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else if(generation == "T-One")
										{
											if(value.trad_fr.indexOf("T-One") >= 0)
											{
												$('#type_de_verreD').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else
										{
											$('#type_de_verreD').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
										}
										}
									}
									else
									{
										if(generation == "E-Space")
										{
											if(value.trad_fr.indexOf("E-Space") >= 0)
											{
												$('#type_de_verreD').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else if(generation == "T-One")
										{
											if(value.trad_fr.indexOf("T-One") >= 0)
											{
												$('#type_de_verreD').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else
										{
											$('#type_de_verreD').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
										}
									}
								}
							}
							else if(progressionD == 'Short' && lensFocalGroup == '3')
							{
								if ((value.name.indexOf(" S ") >= 0 || (value.name.indexOf("T-One 17 ") >= 0) || (value.name.indexOf("Panier A Initial 17 ") >= 0)))
								{
									if((value.name.indexOf("Panier A Initial 17 ") >= 0) && deuxiemepaire == 0)
									{
										if(((parseFloat(cylindreD)+parseFloat(sphereD)) >= -2 && (parseFloat(cylindreD)+parseFloat(sphereD)) <= 2 && indiceId == "1.5") || ((parseFloat(cylindreD)+parseFloat(sphereD)) >= -4 && (parseFloat(cylindreD)+parseFloat(sphereD)) <= 4 && indiceId == "1.59") || ((parseFloat(cylindreD)+parseFloat(sphereD)) >= -4 && (parseFloat(cylindreD)+parseFloat(sphereD)) <= 4 && indiceId == "1.6") || ((parseFloat(cylindreD)+parseFloat(sphereD)) >= -8 && (parseFloat(cylindreD)+parseFloat(sphereD)) <= 8 && indiceId == "1.67") || (indiceId == "1.74") )
										{
											if(generation == "E-Space")
										{
											if(value.trad_fr.indexOf("E-Space") >= 0)
											{
												$('#type_de_verreD').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else if(generation == "T-One")
										{
											if(value.trad_fr.indexOf("T-One") >= 0)
											{
												$('#type_de_verreD').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else
										{
											$('#type_de_verreD').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
										}
										}
									}
									else
									{
										if(generation == "E-Space")
										{
											if(value.trad_fr.indexOf("E-Space") >= 0)
											{
												$('#type_de_verreD').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else if(generation == "T-One")
										{
											if(value.trad_fr.indexOf("T-One") >= 0)
											{
												$('#type_de_verreD').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else
										{
											$('#type_de_verreD').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
										}
									}
								}
							}
							else if(progressionD == 'Extra Short' && lensFocalGroup == '3')
							{
								if ((value.name.indexOf(" E ") >= 0 || (value.name.indexOf("T-One 16 ") >= 0) || (value.name.indexOf("Panier A Initial 16 ") >= 0)))
								{
									if((value.name.indexOf("Panier A Initial 16 ") >= 0) && deuxiemepaire == 0)
									{
										if(((parseFloat(cylindreD)+parseFloat(sphereD)) >= -2 && (parseFloat(cylindreD)+parseFloat(sphereD)) <= 2 && indiceId == "1.5") || ((parseFloat(cylindreD)+parseFloat(sphereD)) >= -4 && (parseFloat(cylindreD)+parseFloat(sphereD)) <= 4 && indiceId == "1.59") || ((parseFloat(cylindreD)+parseFloat(sphereD)) >= -4 && (parseFloat(cylindreD)+parseFloat(sphereD)) <= 4 && indiceId == "1.6") || ((parseFloat(cylindreD)+parseFloat(sphereD)) >= -8 && (parseFloat(cylindreD)+parseFloat(sphereD)) <= 8 && indiceId == "1.67") || (indiceId == "1.74") )
										{
											if(generation == "E-Space")
										{
											if(value.trad_fr.indexOf("E-Space") >= 0)
											{
												$('#type_de_verreD').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else if(generation == "T-One")
										{
											if(value.trad_fr.indexOf("T-One") >= 0)
											{
												$('#type_de_verreD').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else
										{
											$('#type_de_verreD').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
										}
										}
									}
									else
									{
										if(generation == "E-Space")
										{
											if(value.trad_fr.indexOf("E-Space") >= 0)
											{
												$('#type_de_verreD').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else if(generation == "T-One")
										{
											if(value.trad_fr.indexOf("T-One") >= 0)
											{
												$('#type_de_verreD').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else
										{
											$('#type_de_verreD').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
										}
									}
								}
							}
							else if(progressionD == 'Ultra Short' && lensFocalGroup == '3')
							{
								if ((value.name.indexOf(" U ") >= 0 || (value.name.indexOf("T-One 15 ") >= 0) || (value.name.indexOf("Panier A Initial 15 ") >= 0)))
								{
									if((value.name.indexOf("Panier A Initial 15 ") >= 0) && deuxiemepaire == 0)
									{
										if(((parseFloat(cylindreD)+parseFloat(sphereD)) >= -2 && (parseFloat(cylindreD)+parseFloat(sphereD)) <= 2 && indiceId == "1.5") || ((parseFloat(cylindreD)+parseFloat(sphereD)) >= -4 && (parseFloat(cylindreD)+parseFloat(sphereD)) <= 4 && indiceId == "1.59") || ((parseFloat(cylindreD)+parseFloat(sphereD)) >= -4 && (parseFloat(cylindreD)+parseFloat(sphereD)) <= 4 && indiceId == "1.6") || ((parseFloat(cylindreD)+parseFloat(sphereD)) >= -8 && (parseFloat(cylindreD)+parseFloat(sphereD)) <= 8 && indiceId == "1.67") || (indiceId == "1.74") )
										{
											if(generation == "E-Space")
										{
											if(value.trad_fr.indexOf("E-Space") >= 0)
											{
												$('#type_de_verreD').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else if(generation == "T-One")
										{
											if(value.trad_fr.indexOf("T-One") >= 0)
											{
												$('#type_de_verreD').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else
										{
											$('#type_de_verreD').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
										}
										}
									}
									else
									{
										if(generation == "E-Space")
										{
											if(value.trad_fr.indexOf("E-Space") >= 0)
											{
												$('#type_de_verreD').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else if(generation == "T-One")
										{
											if(value.trad_fr.indexOf("T-One") >= 0)
											{
												$('#type_de_verreD').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else
										{
											$('#type_de_verreD').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
										}
									}
								}
							}	
							else
							{
								if ((value.name.indexOf("-stock") >= 0) || (value.name.indexOf("-stock") >= 0) || (value.name.indexOf("- stock") >= 0) || (value.name.indexOf("-Stock") >= 0) )
								{
									$('#type_de_verreD').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' - Stock déporté</option>');
								}
								else
								{
									if((value.name.indexOf("Panier A ") >= 0) && deuxiemepaire == 0)
									{
										if(((parseFloat(cylindreD)+parseFloat(sphereD)) >= -2 && (parseFloat(cylindreD)+parseFloat(sphereD)) <= 2 && indiceId == "1.5") || ((parseFloat(cylindreD)+parseFloat(sphereD)) >= -4 && (parseFloat(cylindreD)+parseFloat(sphereD)) <= 4 && indiceId == "1.59") || ((parseFloat(cylindreD)+parseFloat(sphereD)) >= -4 && (parseFloat(cylindreD)+parseFloat(sphereD)) <= 4 && indiceId == "1.6") || ((parseFloat(cylindreD)+parseFloat(sphereD)) >= -8 && (parseFloat(cylindreD)+parseFloat(sphereD)) <= 8 && indiceId == "1.67") || (indiceId == "1.74") )
										{
											if(generation == "E-Space")
										{
											if(value.trad_fr.indexOf("E-Space") >= 0)
											{
												$('#type_de_verreD').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else if(generation == "T-One")
										{
											if(value.trad_fr.indexOf("T-One") >= 0)
											{
												$('#type_de_verreD').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else
										{
											$('#type_de_verreD').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
										}
										}
									}
									else
									{
										if(generation == "E-Space")
										{
											if(value.trad_fr.indexOf("E-Space") >= 0)
											{
												$('#type_de_verreD').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else if(generation == "T-One")
										{
											if(value.trad_fr.indexOf("T-One") >= 0)
											{
												$('#type_de_verreD').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else
										{
											$('#type_de_verreD').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
										}
									}
								}
							}
							});	
						}
						//$('#type_de_verreD').trigger('change');
						//$(".loading").hide();
						}
					});
				}
			}
			else
			{
				var tab_verres_stock = {};
				var tab_verres = {};
				console.log('BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB');

				//	alert("indiceId:"+indiceId+" ,lensFocalGroup:"+lensFocalGroup+" ,generation:"+generation+" ,sphereD:"+sphereD+" ,sphereG:"+sphereG+" ,cylindreD:"+cylindreD+" ,cylindreG:"+cylindreG+" ,axeD:"+axeD+" ,axeG:"+axeG+" ,additionD:"+additionD+" ,additionG:"+additionG+" ,stockD:"+stockD+" ,stockG:"+stockG+" ,progressionD:"+progressionD+" ,progressionG:"+progressionG);
				if((indiceId == "1.5" || indiceId == "1.6" || indiceId == "1.59" || indiceId == "1.67" || indiceId == "1.74") && (lensFocalGroup == "1") && (stockD == 'StockD' || stockD == 'ToutD'))
				{
					console.log("PanierA:"+panierAm+"AAAAA");
					console.log('HHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHH');

					//alert("indiceId:"+indiceId+" ,lensFocalGroup:"+lensFocalGroup+" ,generation:"+generation+" ,sphereD:"+sphereD+" ,sphereG:"+sphereG+" ,cylindreD:"+cylindreD+" ,cylindreG:"+cylindreG+" ,axeD:"+axeD+" ,axeG:"+axeG+" ,additionD:"+additionD+" ,additionG:"+additionG+" ,stockD:"+stockD+" ,stockG:"+stockG+" ,progressionD:"+progressionD+" ,progressionG:"+progressionG);	
					$.ajax({
						type: "POST",
						url: "/index/getStockTypeDeVerre",
						data: {"indiceId" : indiceId, "lensFocalGroup" : lensFocalGroup, "generation" : generation,"sphereD" : sphereD,"cylindreD" : cylindreD,"axeD" : axeD,"additionD" : additionD,"stockD" : stockD,"panierA" : panierAm,"type" : type},
						dataType: "json",
						async: false,
						success: function (data) {	
						//alert(data);
						console.log("Droit2:");
						console.log(data);	
						if(data != "")
						{
							$.each(data, function(key, value){
								if((value.name.indexOf("Panier A ") >= 0))
								{
							
									if(((parseFloat(cylindreD)+parseFloat(sphereD)) >= -2 && (parseFloat(cylindreD)+parseFloat(sphereD)) <= 2 && indiceId == "1.5") || ((parseFloat(cylindreD)+parseFloat(sphereD)) >= -4 && (parseFloat(cylindreD)+parseFloat(sphereD)) <= 4 && indiceId == "1.59") || ((parseFloat(cylindreD)+parseFloat(sphereD)) >= -4 && (parseFloat(cylindreD)+parseFloat(sphereD)) <= 4 && indiceId == "1.6") || ((parseFloat(cylindreD)+parseFloat(sphereD)) >= -8 && (parseFloat(cylindreD)+parseFloat(sphereD)) <= 8 && indiceId == "1.67") || (indiceId == "1.74") )
									{
										tab_verres_stock[value.sorting] = {};
										tab_verres_stock[value.sorting]['id'] = value.id_verre;
										tab_verres_stock[value.sorting]['code'] = ']'+ value.id_verre +'*'+value.diametre;
										tab_verres_stock[value.sorting]['name'] = value.name + ' - Stock';
									}
								}
								else
								{
									tab_verres_stock[value.sorting] = {};
									tab_verres_stock[value.sorting]['id'] = value.id_verre;
									tab_verres_stock[value.sorting]['code'] = ']'+ value.id_verre +'*'+value.diametre;
									tab_verres_stock[value.sorting]['name'] = value.name + ' - Stock';
								}
							
								//$('#type_de_verreD').append('<option value="]'+ value.id_verre +'*'+value.diametre+'">'+ value.name + ' - Stock</option>');
							})
						}	
					  }
					})
					//return false;
				}
			
				if(lensFocalGroup != "" && lensFocalGroup !="-")
				{
					//alert("progressionD:"+progressionD);
				$.ajax({
						type: "POST",
						url: "/index/getTypeDeVerre",
						data: {"indiceId" : indiceId, "lensFocalGroup" : lensFocalGroup, "generation" : generation,"sphereD" : sphereD,"cylindreD" : cylindreD,"axeD" : axeD,"additionD" : additionD,"stockD" : stockD,"panierA" : panierAm,"type" : type},
						dataType: "json",
						async: false,
						beforeSend: function () {
						//	$(".loading").show();
						},
						success: function (data) {	
							console.log("Droit3:");	
							console.log(data);	
							if(data != "0" && data != "")
							{
								$.each(data, function(key, value){
						
								if(value.trad_fr == "")
								{
									value.trad_fr = value.name;
								}
								if(deuxiemepaire == "1" && value.name.indexOf("Panier A ") >= 0)
								{
								
								}
								else
								{
									if ((value.name.indexOf("-stock") >= 0) || (value.name.indexOf("-stock") >= 0) || (value.name.indexOf("- stock") >= 0) || (value.name.indexOf("-Stock") >= 0) )
									{
										//$('#type_de_verreD').append('<option value="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' - Stock déporté</option>');
										tab_verres_stock[value.sorting] = {};
										tab_verres_stock[value.sorting]['id'] = value.code;
										tab_verres_stock[value.sorting]['code'] = value.code;
										tab_verres_stock[value.sorting]['name'] = decodeURIComponent(unescape(value.trad_fr)) + ' - Stock déporté';							
									}
									else
									{
										//$('#type_de_verreD').append('<option value="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
									
										if((value.name.indexOf("Panier A ") >= 0))
										{
									
											if(((parseFloat(cylindreD)+parseFloat(sphereD)) >= -2 && (parseFloat(cylindreD)+parseFloat(sphereD)) <= 2 && indiceId == "1.5") || ((parseFloat(cylindreD)+parseFloat(sphereD)) >= -4 && (parseFloat(cylindreD)+parseFloat(sphereD)) <= 4 && indiceId == "1.59") || ((parseFloat(cylindreD)+parseFloat(sphereD)) >= -4 && (parseFloat(cylindreD)+parseFloat(sphereD)) <= 4 && indiceId == "1.6") || ((parseFloat(cylindreD)+parseFloat(sphereD)) >= -8 && (parseFloat(cylindreD)+parseFloat(sphereD)) <= 8 && indiceId == "1.67") || (indiceId == "1.74") )
											{
												tab_verres[value.sorting] = {};
												tab_verres[value.sorting]['id'] = value.code;
												tab_verres[value.sorting]['code'] = value.code;
												tab_verres[value.sorting]['name'] = decodeURIComponent(unescape(value.trad_fr)) + '';
											}
										}
										else
										{
											tab_verres[value.sorting] = {};
											tab_verres[value.sorting]['id'] = value.code;
											tab_verres[value.sorting]['code'] = value.code;
											tab_verres[value.sorting]['name'] = decodeURIComponent(unescape(value.trad_fr)) + '';
										}
										
									}
								}
								});	
							}
						
						//
						}
					});
					}
					
					$.each(tab_verres_stock, function(key, value){
							//console.log("Stock: "+key+" - "+value.code+" - "+value.name);
							$('#type_de_verreD').append('<option value="'+ value.id +'" rel="'+ value.code +'">'+value.name+'</option>');
					});
					
					$.each(tab_verres, function(key, value){
							//console.log(key+" - "+value);
							$('#type_de_verreD').append('<option value="'+ value.id +'" rel="'+ value.code +'">'+value.name+'</option>');
					});
					
				}
				setTimeout(function(){
					console.log("getTypedeVerre Append type_de_verreD");
					$('#type_de_verreD').trigger('change');
					
				},500);
				setTimeout(function(){
					$(".loading").hide();
				},2300);
			}
				
			if(cylindreG != '-' && gauche)
			{
			
			$('#type_de_verreG').empty();
			$('#type_de_verreG').append('<option value="" rel="">-- Choisir --</option>');
			setTimeout(function(){
				$('#type_de_verreG').trigger('change');
			},300);
				console.log('CCCCCCCCCCCCCCCCCCCCCCCCCCCCCCC');

				if(lensFocalGroup == "3")
			{
				if(progressionG == '')
				{
					progressionG = 'Tous';
				}
				if(generation == "Progressif de stock")
				{
					//alert("indiceId:"+indiceId+" ,lensFocalGroup:"+lensFocalGroup+" ,generation:"+generation+" ,sphereG:"+sphereG+" ,sphereG:"+sphereG+" ,cylindreG:"+cylindreG+" ,cylindreG:"+cylindreG+" ,axeG:"+axeG+" ,axeG:"+axeG+" ,additionG:"+additionG+" ,additionG:"+additionG+" ,stockG:"+stockG+" ,stockG:"+stockG+" ,progressionG:"+progressionG+" ,progressionG:"+progressionG);	
					if((indiceId == "1.5" || indiceId == "1.6" || indiceId == "1.59" || indiceId == "1.67") &&  (progressionG == 'Short' || progressionG == 'Tous') && (stockG == 'StockD' || stockG == 'ToutD'))
					{
						console.log('IIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIII');

						$.ajax({
							type: "POST",
							url: "/index/getStockTypeDeVerre",
							data: {"indiceId" : indiceId, "lensFocalGroup" : lensFocalGroup, "generation" : generation,"sphereD" : sphereG,"cylindreD" : cylindreG,"axeD" : axeG,"additionD" : additionG,"stockD" : stockG,"panierA" : panierAm,"type" : type},
							dataType: "json",
							success: function (data) {	
							//alert(data);
							//console.log(data);
							//console.log("indiceId:"+indiceId+" ,lensFocalGroup:"+lensFocalGroup+" ,generation:"+generation+" ,sphereD:"+sphereG+" ,cylindreD:"+cylindreG+" ,axeD:"+axeG+" ,additionD:"+additionG+" ,stockD:"+stockG+" ,panierA:"+panierAm);	
							if(data)
							{
								$.each(data, function(key, value){
									setTimeout(function(){
									//$('#type_de_verreG').append('<option value="'+ value.id +'" rel="'+ value.id +'">'+ value.name + ' (13.00&euro;)</option>');
									$('#type_de_verreG').append('<option value="S26783" rel="]S26783">'+ value.name + '</option>');
									console.log('<option value="'+ value.id +'" rel="'+ value.id +'">'+ value.name + ' (13.00&euro;)</option>');
									$('#type_de_verreG').trigger('change');
									console.log(value);
									},1500);
								})
							}
						  }
						})
					}
				}
				else
				{
					//alert("progressionD:"+progressionD);
				$.ajax({
						type: "POST",
						url: "/index/getTypeDeVerre",
						data: {"indiceId" : indiceId, "lensFocalGroup" : lensFocalGroup, "generation" : generation,"sphereD" : sphereG,"cylindreD" : cylindreG,"axeD" : axeG,"additionD" : additionG,"stockD" : stockG,"panierA" : panierAm,"type" : type},
						dataType: "json",
						beforeSend: function () {
						//	$(".loading").show();
						},
						success: function (data) {	
						console.log("Gauche1:");	
						console.log(data);	
						if(data != "")
						{
							$.each(data, function(key, value){
					
							if(value.trad_fr == "")
							{
								value.trad_fr = value.name;
							}
					
							if(generation == "E-Space")
							{
								var n_T_ONE = value.trad_fr; 
								value.trad_fr = n_T_ONE.replace("T-One", "E-Space");
							}
						
							//alert("Name:"+value.name+" - progressionD:"+progressionD+" - lensFocalGroup:"+lensFocalGroup);
						
							if((progressionG == '' || progressionG == 'Tous') && lensFocalGroup == '3')
							{
								if((value.name.indexOf("Panier A ") >= 0) && deuxiemepaire == 0)
								{
									if(((parseFloat(cylindreG)+parseFloat(sphereG)) >= -2 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 2 && indiceId == "1.5") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -4 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 4 && indiceId == "1.59") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -4 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 4 && indiceId == "1.6") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -8 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 8 && indiceId == "1.67") || (indiceId == "1.74") )
									{
										if(generation == "E-Space")
										{
											if(value.trad_fr.indexOf("E-Space") >= 0)
											{
												$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else if(generation == "T-One")
										{
											if(value.trad_fr.indexOf("T-One") >= 0)
											{
												$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else
										{
											$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
										}
										console.log(value.trad_fr);
									}
								}
								else
								{
									if(generation == "E-Space")
										{
											if(value.trad_fr.indexOf("E-Space") >= 0)
											{
												$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else if(generation == "T-One")
										{
											if(value.trad_fr.indexOf("T-One") >= 0)
											{
												$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else
										{
											$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
										}								
								}
							}
							else if(progressionG == 'Regular' && lensFocalGroup == '3')
							{
								if ((value.name.indexOf(" R ") >= 0 || (value.name.indexOf("T-One 18 ") >= 0) || (value.name.indexOf("Panier A Initial 18 ") >= 0)))
								{
									if((value.name.indexOf("Panier A ") >= 0) && deuxiemepaire == 0)
									{
										if(((parseFloat(cylindreG)+parseFloat(sphereG)) >= -2 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 2 && indiceId == "1.5") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -4 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 4 && indiceId == "1.59") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -4 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 4 && indiceId == "1.6") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -8 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 8 && indiceId == "1.67") || (indiceId == "1.74") )
										{
											if(generation == "E-Space")
										{
											if(value.trad_fr.indexOf("E-Space") >= 0)
											{
												$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else if(generation == "T-One")
										{
											if(value.trad_fr.indexOf("T-One") >= 0)
											{
												$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else
										{
											$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
										}
										}
									}
									else
									{
										if(generation == "E-Space")
										{
											if(value.trad_fr.indexOf("E-Space") >= 0)
											{
												$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else if(generation == "T-One")
										{
											if(value.trad_fr.indexOf("T-One") >= 0)
											{
												$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else
										{
											$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
										}
									}
								}
							}
							else if(progressionG == 'Short' && lensFocalGroup == '3')
							{
								if ((value.name.indexOf(" S ") >= 0 || (value.name.indexOf("T-One 17 ") >= 0) || (value.name.indexOf("Panier A Initial 17 ") >= 0)))
								{
									if((value.name.indexOf("Panier A ") >= 0) && deuxiemepaire == 0)
									{
										if(((parseFloat(cylindreG)+parseFloat(sphereG)) >= -2 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 2 && indiceId == "1.5") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -4 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 4 && indiceId == "1.59") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -4 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 4 && indiceId == "1.6") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -8 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 8 && indiceId == "1.67") || (indiceId == "1.74") )
										{
											if(generation == "E-Space")
										{
											if(value.trad_fr.indexOf("E-Space") >= 0)
											{
												$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else if(generation == "T-One")
										{
											if(value.trad_fr.indexOf("T-One") >= 0)
											{
												$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else
										{
											$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
										}
										}
									}
									else
									{
										if(generation == "E-Space")
										{
											if(value.trad_fr.indexOf("E-Space") >= 0)
											{
												$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else if(generation == "T-One")
										{
											if(value.trad_fr.indexOf("T-One") >= 0)
											{
												$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else
										{
											$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
										}
									}
								}
							}
							else if(progressionG == 'Extra Short' && lensFocalGroup == '3')
							{
								if ((value.name.indexOf(" E ") >= 0 || (value.name.indexOf("T-One 16 ") >= 0) || (value.name.indexOf("Panier A Initial 16 ") >= 0)))
								{
									if((value.name.indexOf("Panier A ") >= 0) && deuxiemepaire == 0)
									{
										if(((parseFloat(cylindreG)+parseFloat(sphereG)) >= -2 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 2 && indiceId == "1.5") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -4 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 4 && indiceId == "1.59") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -4 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 4 && indiceId == "1.6") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -8 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 8 && indiceId == "1.67") || (indiceId == "1.74") )
										{
											if(generation == "E-Space")
										{
											if(value.trad_fr.indexOf("E-Space") >= 0)
											{
												$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else if(generation == "T-One")
										{
											if(value.trad_fr.indexOf("T-One") >= 0)
											{
												$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else
										{
											$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
										}
										}
									}
									else
									{
										if(generation == "E-Space")
										{
											if(value.trad_fr.indexOf("E-Space") >= 0)
											{
												$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else if(generation == "T-One")
										{
											if(value.trad_fr.indexOf("T-One") >= 0)
											{
												$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else
										{
											$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
										}
									}
								}
							}
							else if(progressionG == 'Ultra Short' && lensFocalGroup == '3')
							{
								if ((value.name.indexOf(" U ") >= 0 || (value.name.indexOf("T-One 15 ") >= 0) || (value.name.indexOf("Panier A Initial 15 ") >= 0)))
								{
									if((value.name.indexOf("Panier A ") >= 0) && deuxiemepaire == 0)
									{
										if(((parseFloat(cylindreG)+parseFloat(sphereG)) >= -2 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 2 && indiceId == "1.5") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -4 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 4 && indiceId == "1.59") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -4 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 4 && indiceId == "1.6") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -8 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 8 && indiceId == "1.67") || (indiceId == "1.74") )
										{
											if(generation == "E-Space")
										{
											if(value.trad_fr.indexOf("E-Space") >= 0)
											{
												$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else if(generation == "T-One")
										{
											if(value.trad_fr.indexOf("T-One") >= 0)
											{
												$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else
										{
											$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
										}
										}
									}
									else
									{
										if(generation == "E-Space")
										{
											if(value.trad_fr.indexOf("E-Space") >= 0)
											{
												$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else if(generation == "T-One")
										{
											if(value.trad_fr.indexOf("T-One") >= 0)
											{
												$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else
										{
											$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
										}
									}
								}
							}	
							else
							{
								if ((value.name.indexOf("-stock") >= 0) || (value.name.indexOf("-stock") >= 0) || (value.name.indexOf("- stock") >= 0) || (value.name.indexOf("-Stock") >= 0) )
								{
									$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' - Stock déporté</option>');
								}
								else
								{
									if((value.name.indexOf("Panier A ") >= 0) && deuxiemepaire == 0)
									{
										if(((parseFloat(cylindreG)+parseFloat(sphereG)) >= -2 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 2 && indiceId == "1.5") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -4 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 4 && indiceId == "1.59") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -4 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 4 && indiceId == "1.6") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -8 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 8 && indiceId == "1.67") || (indiceId == "1.74") )
										{
											if(generation == "E-Space")
										{
											if(value.trad_fr.indexOf("E-Space") >= 0)
											{
												$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else if(generation == "T-One")
										{
											if(value.trad_fr.indexOf("T-One") >= 0)
											{
												$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else
										{
											$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
										}
										}
									}
									else
									{
										if(generation == "E-Space")
										{
											if(value.trad_fr.indexOf("E-Space") >= 0)
											{
												$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else if(generation == "T-One")
										{
											if(value.trad_fr.indexOf("T-One") >= 0)
											{
												$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else
										{
											$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
										}
									}
								}
							}
							});	
						//	$('#type_de_verreG').trigger('change');
							
						}
						//$(".loading").hide();
						}
					});
				}
			}
			else
			{
				var tab_verres_stockG = {};
				var tab_verresG = {};
				console.log('DDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDD');

				//	alert("indiceId:"+indiceId+" ,lensFocalGroup:"+lensFocalGroup+" ,generation:"+generation+" ,sphereD:"+sphereD+" ,sphereG:"+sphereG+" ,cylindreD:"+cylindreD+" ,cylindreG:"+cylindreG+" ,axeD:"+axeD+" ,axeG:"+axeG+" ,additionD:"+additionD+" ,additionG:"+additionG+" ,stockD:"+stockD+" ,stockG:"+stockG+" ,progressionD:"+progressionD+" ,progressionG:"+progressionG);
				if((lensFocalGroup == "1") && (stockG == 'StockD' || stockG == 'ToutD'))
				{
					console.log('JJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJ');

					//alert("indiceId:"+indiceId+" ,lensFocalGroup:"+lensFocalGroup+" ,generation:"+generation+" ,sphereD:"+sphereD+" ,sphereG:"+sphereG+" ,cylindreD:"+cylindreD+" ,cylindreG:"+cylindreG+" ,axeD:"+axeD+" ,axeG:"+axeG+" ,additionD:"+additionD+" ,additionG:"+additionG+" ,stockD:"+stockD+" ,stockG:"+stockG+" ,progressionD:"+progressionD+" ,progressionG:"+progressionG);	
					$.ajax({
						type: "POST",
						url: "/index/getStockTypeDeVerre",
						data: {"indiceId" : indiceId, "lensFocalGroup" : lensFocalGroup, "generation" : generation,"sphereD" : sphereG,"cylindreD" : cylindreG,"axeD" : axeG,"additionD" : additionG,"stockD" : stockG,"panierA" : panierAm,"type" : type},
						dataType: "json",
						async: false,
						success: function (data) {	
						//alert(data);
						console.log("Gauche2:");
						console.log(data);
						if(data != "")
						{	
							$.each(data, function(key, value){
						
								if(deuxiemepaire == "1" && value.name.indexOf("Panier A ") >= 0)
								{
							
								}
								else
								{
									if((value.name.indexOf("Panier A ") >= 0))
									{
										if(((parseFloat(cylindreG)+parseFloat(sphereG)) >= -2 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 2 && indiceId == "1.5") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -4 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 4 && indiceId == "1.59") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -4 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 4 && indiceId == "1.6") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -8 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 8 && indiceId == "1.67") || (indiceId == "1.74") )
										{
											tab_verres_stockG[value.sorting] = {};
											tab_verres_stockG[value.sorting]['id'] = value.id_verre;
											tab_verres_stockG[value.sorting]['code'] = ']'+ value.id_verre +'*'+value.diametre;
											tab_verres_stockG[value.sorting]['name'] = value.name + ' - Stock';
										}
									}
									else
									{
										tab_verres_stockG[value.sorting] = {};
										tab_verres_stockG[value.sorting]['id'] = value.id_verre;
										tab_verres_stockG[value.sorting]['code'] = ']'+ value.id_verre +'*'+value.diametre;
										tab_verres_stockG[value.sorting]['name'] = value.name + ' - Stock';
									}
									
								}
							
								//$('#type_de_verreD').append('<option value="]'+ value.id_verre +'*'+value.diametre+'">'+ value.name + ' - Stock</option>');
							})
						}
					  }
					})
					//return false;
				}
			
				if(lensFocalGroup != "3" && lensFocalGroup !="-" && lensFocalGroup !="")
				{
					//alert("progressionD:"+progressionD);
				$.ajax({
						type: "POST",
						url: "/index/getTypeDeVerre",
						data: {"indiceId" : indiceId, "lensFocalGroup" : lensFocalGroup, "generation" : generation,"sphereD" : sphereG,"cylindreD" : cylindreG,"axeD" : axeG,"additionD" : additionG,"stockD" : stockG,"panierA" : panierAm,"type" : type},
						dataType: "json",
						async: false,
						beforeSend: function () {
							//$(".loading").show();
						},
						success: function (data) {	
							console.log("Gauche3:");
							console.log(data);
							if(data != "")
							{
								
							$.each(data, function(key, value){
						
							if(value.trad_fr == "")
							{
								value.trad_fr = value.name;
							}
							
							
							if(deuxiemepaire == "1" && value.name.indexOf("Panier A ") >= 0)
							{
							
							}
							else
							{
							
								if ((value.name.indexOf("-stock") >= 0) || (value.name.indexOf("-stock") >= 0) || (value.name.indexOf("- stock") >= 0) || (value.name.indexOf("-Stock") >= 0) )
								{
									//$('#type_de_verreD').append('<option value="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' - Stock déporté</option>');
									tab_verres_stockG[value.sorting] = {};
									tab_verres_stockG[value.sorting]['id'] = value.code;
									tab_verres_stockG[value.sorting]['code'] = value.code;
									tab_verres_stockG[value.sorting]['name'] = decodeURIComponent(unescape(value.trad_fr)) + ' - Stock déporté';							
								}
								else
								{
									//$('#type_de_verreD').append('<option value="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
									if((value.name.indexOf("Panier A ") >= 0) && deuxiemepaire == 0)
									{
										if(((parseFloat(cylindreG)+parseFloat(sphereG)) >= -2 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 2 && indiceId == "1.5") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -4 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 4 && indiceId == "1.59") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -4 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 4 && indiceId == "1.6") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -8 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 8 && indiceId == "1.67") || (indiceId == "1.74") )
										{
											tab_verresG[value.sorting] = {};
											tab_verresG[value.sorting]['id'] = value.code;
											tab_verresG[value.sorting]['code'] = value.code;
											tab_verresG[value.sorting]['name'] = decodeURIComponent(unescape(value.trad_fr)) + '';
										}
									}
									else
									{
										tab_verresG[value.sorting] = {};
										tab_verresG[value.sorting]['id'] = value.code;
										tab_verresG[value.sorting]['code'] = value.code;
										tab_verresG[value.sorting]['name'] = decodeURIComponent(unescape(value.trad_fr)) + '';
									}	
								}
							}
							
							});	
						
							}
						//$(".loading").hide();
						}
					});
					}
					
					$.each(tab_verres_stockG, function(key, value){
							//console.log("Stock: "+key+" - "+value.code+" - "+value.name);
							$('#type_de_verreG').append('<option value="'+ value.id +'" rel="'+ value.code +'">'+value.name+'</option>');
					});
					
					$.each(tab_verresG, function(key, value){
							//console.log(key+" - "+value);
							$('#type_de_verreG').append('<option value="'+ value.id +'" rel="'+ value.code +'">'+value.name+'</option>');
					});
					
				}
				setTimeout(function(){
					$('#type_de_verreG').trigger('change');
				},500);
			}
				
				
        }
}

function getTypedeVerreG(indiceId,lensFocalGroup,generation,sphereD,sphereG,cylindreD,cylindreG,axeD,axeG,additionD,additionG,stockD,stockG,progressionD,progressionG,droite,gauche,panierAm,deuxiemepaire)
{
	var type = $('#type_commande').val();
	
	if(indiceId == '')
    	indiceId = '-';
    	
    if(generation == '')
    	generation = '-';
    	
    if(lensFocalGroup == '')
    	lensFocalGroup = '-';
    	
    if(lensFocalGroup != '-')
    {
    	
		if(sphereG == '')
			sphereG = '-';
		else
		{
			if (sphereG.indexOf("+") >= 0)
			{
				sphereG = sphereG.replace('+', '');
			}
			else if (sphereG.indexOf("-") >= 0)
			{
		
			}
			else
			{
				var new_sphere = "+"+sphereG
				$("#sphereG").val(new_sphere); 
			}
		}
		
	
		if(cylindreG == '')
			cylindreG = '-';
		else
		{
			if (cylindreG.indexOf("+") >= 0)
			{
				cylindreG = cylindreG.replace('+', '');
			}
			else if (cylindreG.indexOf("-") >= 0)
			{
		
			}
			else
			{
				var new_cylindreG = "+"+cylindreG
				$("#cylindreG").val(new_cylindreG); 
			}
		}
	
		
		if(axeG == '')
			axeG = '-';
		/*else
		{
			if (axeG.indexOf("+") >= 0)
			{
				axeG = axeG.replace('+', '');
			}
			else if (axeG.indexOf("-") >= 0)
			{
		
			}
			else
			{
				var new_axeG = "+"+axeG
				$("#axeG").val(new_axeG); 
			}
		}*/
		
		if(additionG == '')
			additionG = '-';
		else
		{
			if (additionG.indexOf("+") >= 0)
			{
				additionG = additionG.replace('+', '');
				additionG = roundToNearest(additionG,0.25);
				var new_additionG = "+"+additionG;
			
				$("#additionG").val(new_additionG);
			}
			else if (additionG.indexOf("-") >= 0)
			{
				additionG = roundToNearest(additionG,0.25);
				$("#additionG").val(additionG);
			}
			else
			{
				additionG = roundToNearest(additionG,0.25);
				var new_additionG = "+"+additionG;
			
				$("#additionG").val(additionG); 
				additionG = $('#additionG').val();
			}
		}
		
		
	
		if (String(sphereG).indexOf("+") >= 0)
		{
			sphereG = String(sphereG).replace('+', '');
		}
		if (String(sphereG).indexOf(".00") >= 0)
		{
			sphereG = String(sphereG).replace('.00', '');
		}
	
		
	
		if (String(cylindreG).indexOf("+") >= 0)
		{
			cylindreG = String(cylindreG).replace('+', '');
		}
		if (String(cylindreG).indexOf(".00") >= 0)
		{
			cylindreG = String(cylindreG).replace('.00', '');
		}
	
	
	
		if (String(additionG).indexOf("+") >= 0)
		{
			additionG = String(additionG).replace('+', '');
		}
		if (String(additionG).indexOf(".00") >= 0)
		{
			additionG = String(additionG).replace('.00', '');
		}
		
		
		if(cylindreG != '-' && gauche)
		{
			
			$('#type_de_verreG').empty();
			$('#type_de_verreG').append('<option value="" rel="">-- Choisir --</option>');
			setTimeout(function(){
				$('#type_de_verreG').trigger('change');
			},300);
			console.log('EEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEE');

			if(lensFocalGroup == "3")
			{
				if(progressionG == '')
				{
					progressionG = 'Tous';
				}
				if(generation == "Progressif de stock")
				{
					//alert("indiceId:"+indiceId+" ,lensFocalGroup:"+lensFocalGroup+" ,generation:"+generation+" ,sphereG:"+sphereG+" ,sphereG:"+sphereG+" ,cylindreG:"+cylindreG+" ,cylindreG:"+cylindreG+" ,axeG:"+axeG+" ,axeG:"+axeG+" ,additionG:"+additionG+" ,additionG:"+additionG+" ,stockG:"+stockG+" ,stockG:"+stockG+" ,progressionG:"+progressionG+" ,progressionG:"+progressionG);	
					if((indiceId == "1.5" || indiceId == "1.6" || indiceId == "1.59" || indiceId == "1.67") &&  (progressionG == 'Short' || progressionG == 'Tous') && (stockG == 'StockD' || stockG == 'ToutD'))
					{
						console.log('KKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKK');

						$.ajax({
							type: "POST",
							url: "/index/getStockTypeDeVerre",
							data: {"indiceId" : indiceId, "lensFocalGroup" : lensFocalGroup, "generation" : generation,"sphereD" : sphereG,"cylindreD" : cylindreG,"axeD" : axeG,"additionD" : additionG,"stockD" : stockG,"panierA" : panierAm,"type" : type},
							dataType: "json",
							success: function (data) {	
							//alert(data);
							console.log("Prog !!!");
							console.log(data);	
							if(data != "")
							{
								$.each(data, function(key, value){
								
									$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+ value.name + ' (13.00&euro;)</option>');
									
								})
							}
						  }
						})
					}
				}
				else
				{
					//alert("progressionD:"+progressionD);
				$.ajax({
						type: "POST",
						url: "/index/getTypeDeVerre",
						data: {"indiceId" : indiceId, "lensFocalGroup" : lensFocalGroup, "generation" : generation,"sphereD" : sphereG,"cylindreD" : cylindreG,"axeD" : axeG,"additionD" : additionG,"stockD" : stockG,"panierA" : panierAm,"type" : type},
						dataType: "json",
						beforeSend: function () {
							//$(".loading").show();
						},
						success: function (data) {	
						console.log("Gauche1:");	
						console.log(data);	
						if(data != "")
						{
							$.each(data, function(key, value){

							if(value.trad_fr == "")
							{
								value.trad_fr = value.name;
							}
					
							if(generation == "E-Space")
							{
								var n_T_ONE = value.trad_fr; 
								value.trad_fr = n_T_ONE.replace("T-One", "E-Space");
							}
						
							//alert("Name:"+value.name+" - progressionD:"+progressionD+" - lensFocalGroup:"+lensFocalGroup);
						
							if((progressionG == '' || progressionG == 'Tous') && lensFocalGroup == '3')
							{
								if((value.name.indexOf("Panier A ") >= 0) && deuxiemepaire == 0)
								{
									if(((parseFloat(cylindreG)+parseFloat(sphereG)) >= -2 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 2 && indiceId == "1.5") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -4 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 4 && indiceId == "1.59") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -4 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 4 && indiceId == "1.6") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -8 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 8 && indiceId == "1.67") || (indiceId == "1.74") )
									{
										if(generation == "E-Space")
										{
											if(value.trad_fr.indexOf("E-Space") >= 0)
											{
												$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else if(generation == "T-One")
										{
											if(value.trad_fr.indexOf("T-One") >= 0)
											{
												$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else
										{
											$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
										}
										console.log(value.trad_fr);
									}
								}
								else
								{
									if(generation == "E-Space")
										{
											if(value.trad_fr.indexOf("E-Space") >= 0)
											{
												$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else if(generation == "T-One")
										{
											if(value.trad_fr.indexOf("T-One") >= 0)
											{
												$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else
										{
											$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
										}								
								}
							}
							else if(progressionG == 'Regular' && lensFocalGroup == '3')
							{
								if ((value.name.indexOf(" R ") >= 0 || (value.name.indexOf("T-One 18 ") >= 0) || (value.name.indexOf("Panier A Initial 18 ") >= 0)))
								{
									if((value.name.indexOf("Panier A ") >= 0) && deuxiemepaire == 0)
									{
										if(((parseFloat(cylindreG)+parseFloat(sphereG)) >= -2 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 2 && indiceId == "1.5") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -4 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 4 && indiceId == "1.59") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -4 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 4 && indiceId == "1.6") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -8 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 8 && indiceId == "1.67") || (indiceId == "1.74") )
										{
											if(generation == "E-Space")
										{
											if(value.trad_fr.indexOf("E-Space") >= 0)
											{
												$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else if(generation == "T-One")
										{
											if(value.trad_fr.indexOf("T-One") >= 0)
											{
												$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else
										{
											$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
										}
										}
									}
									else
									{
										if(generation == "E-Space")
										{
											if(value.trad_fr.indexOf("E-Space") >= 0)
											{
												$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else if(generation == "T-One")
										{
											if(value.trad_fr.indexOf("T-One") >= 0)
											{
												$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else
										{
											$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
										}
									}
								}
							}
							else if(progressionG == 'Short' && lensFocalGroup == '3')
							{
								if ((value.name.indexOf(" S ") >= 0 || (value.name.indexOf("T-One 17 ") >= 0) || (value.name.indexOf("Panier A Initial 17 ") >= 0)))
								{
									if((value.name.indexOf("Panier A ") >= 0) && deuxiemepaire == 0)
									{
										if(((parseFloat(cylindreG)+parseFloat(sphereG)) >= -2 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 2 && indiceId == "1.5") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -4 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 4 && indiceId == "1.59") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -4 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 4 && indiceId == "1.6") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -8 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 8 && indiceId == "1.67") || (indiceId == "1.74") )
										{
											if(generation == "E-Space")
										{
											if(value.trad_fr.indexOf("E-Space") >= 0)
											{
												$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else if(generation == "T-One")
										{
											if(value.trad_fr.indexOf("T-One") >= 0)
											{
												$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else
										{
											$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
										}
										}
									}
									else
									{
										if(generation == "E-Space")
										{
											if(value.trad_fr.indexOf("E-Space") >= 0)
											{
												$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else if(generation == "T-One")
										{
											if(value.trad_fr.indexOf("T-One") >= 0)
											{
												$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else
										{
											$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
										}
									}
								}
							}
							else if(progressionG == 'Extra Short' && lensFocalGroup == '3')
							{
								if ((value.name.indexOf(" E ") >= 0 || (value.name.indexOf("T-One 16 ") >= 0) || (value.name.indexOf("Panier A Initial 16 ") >= 0)))
								{
									if((value.name.indexOf("Panier A ") >= 0) && deuxiemepaire == 0)
									{
										if(((parseFloat(cylindreG)+parseFloat(sphereG)) >= -2 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 2 && indiceId == "1.5") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -4 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 4 && indiceId == "1.59") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -4 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 4 && indiceId == "1.6") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -8 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 8 && indiceId == "1.67") || (indiceId == "1.74") )
										{
											if(generation == "E-Space")
										{
											if(value.trad_fr.indexOf("E-Space") >= 0)
											{
												$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else if(generation == "T-One")
										{
											if(value.trad_fr.indexOf("T-One") >= 0)
											{
												$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else
										{
											$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
										}
										}
									}
									else
									{
										if(generation == "E-Space")
										{
											if(value.trad_fr.indexOf("E-Space") >= 0)
											{
												$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else if(generation == "T-One")
										{
											if(value.trad_fr.indexOf("T-One") >= 0)
											{
												$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else
										{
											$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
										}
									}
								}
							}
							else if(progressionG == 'Ultra Short' && lensFocalGroup == '3')
							{
								if ((value.name.indexOf(" U ") >= 0 || (value.name.indexOf("T-One 15 ") >= 0) || (value.name.indexOf("Panier A Initial 15 ") >= 0)))
								{
									if((value.name.indexOf("Panier A ") >= 0) && deuxiemepaire == 0)
									{
										if(((parseFloat(cylindreG)+parseFloat(sphereG)) >= -2 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 2 && indiceId == "1.5") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -4 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 4 && indiceId == "1.59") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -4 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 4 && indiceId == "1.6") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -8 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 8 && indiceId == "1.67") || (indiceId == "1.74") )
										{
											if(generation == "E-Space")
										{
											if(value.trad_fr.indexOf("E-Space") >= 0)
											{
												$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else if(generation == "T-One")
										{
											if(value.trad_fr.indexOf("T-One") >= 0)
											{
												$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else
										{
											$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
										}
										}
									}
									else
									{
										if(generation == "E-Space")
										{
											if(value.trad_fr.indexOf("E-Space") >= 0)
											{
												$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else if(generation == "T-One")
										{
											if(value.trad_fr.indexOf("T-One") >= 0)
											{
												$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else
										{
											$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
										}
									}
								}
							}	
							else
							{
								if ((value.name.indexOf("-stock") >= 0) || (value.name.indexOf("-stock") >= 0) || (value.name.indexOf("- stock") >= 0) || (value.name.indexOf("-Stock") >= 0) )
								{
									$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' - Stock déporté</option>');
								}
								else
								{
									if((value.name.indexOf("Panier A ") >= 0) && deuxiemepaire == 0)
									{
										if(((parseFloat(cylindreG)+parseFloat(sphereG)) >= -2 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 2 && indiceId == "1.5") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -4 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 4 && indiceId == "1.59") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -4 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 4 && indiceId == "1.6") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -8 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 8 && indiceId == "1.67") || (indiceId == "1.74") )
										{
											if(generation == "E-Space")
										{
											if(value.trad_fr.indexOf("E-Space") >= 0)
											{
												$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else if(generation == "T-One")
										{
											if(value.trad_fr.indexOf("T-One") >= 0)
											{
												$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else
										{
											$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
										}
										}
									}
									else
									{
										if(generation == "E-Space")
										{
											if(value.trad_fr.indexOf("E-Space") >= 0)
											{
												$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else if(generation == "T-One")
										{
											if(value.trad_fr.indexOf("T-One") >= 0)
											{
												$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
											}
										}
										else
										{
											$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
										}
									}
								}
							}
							});	
						//	$('#type_de_verreG').trigger('change');
							
						}
						//$(".loading").hide();
						}
					});
				}
			}
			else
			{
				var tab_verres_stockG = {};
				var tab_verresG = {};
				console.log('FFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFF');

				//	alert("indiceId:"+indiceId+" ,lensFocalGroup:"+lensFocalGroup+" ,generation:"+generation+" ,sphereD:"+sphereD+" ,sphereG:"+sphereG+" ,cylindreD:"+cylindreD+" ,cylindreG:"+cylindreG+" ,axeD:"+axeD+" ,axeG:"+axeG+" ,additionD:"+additionD+" ,additionG:"+additionG+" ,stockD:"+stockD+" ,stockG:"+stockG+" ,progressionD:"+progressionD+" ,progressionG:"+progressionG);
				if((lensFocalGroup == "1") && (stockG == 'StockD' || stockG == 'ToutD'))
				{
					console.log('LLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLL');

					//alert("indiceId:"+indiceId+" ,lensFocalGroup:"+lensFocalGroup+" ,generation:"+generation+" ,sphereD:"+sphereD+" ,sphereG:"+sphereG+" ,cylindreD:"+cylindreD+" ,cylindreG:"+cylindreG+" ,axeD:"+axeD+" ,axeG:"+axeG+" ,additionD:"+additionD+" ,additionG:"+additionG+" ,stockD:"+stockD+" ,stockG:"+stockG+" ,progressionD:"+progressionD+" ,progressionG:"+progressionG);	
					$.ajax({
						type: "POST",
						url: "/index/getStockTypeDeVerre",
						data: {"indiceId" : indiceId, "lensFocalGroup" : lensFocalGroup, "generation" : generation,"sphereD" : sphereG,"cylindreD" : cylindreG,"axeD" : axeG,"additionD" : additionG,"stockD" : stockG,"panierA" : panierAm,"type" : type},
						dataType: "json",
						async: false,
						success: function (data) {	
						//alert(data);
						console.log("Gauche2:");
						console.log(data);
						if(data != "")
						{	
							$.each(data, function(key, value){
						
								if(deuxiemepaire == "1" && value.name.indexOf("Panier A ") >= 0)
								{
							
								}
								else
								{
									if((value.name.indexOf("Panier A ") >= 0))
									{
										if(((parseFloat(cylindreG)+parseFloat(sphereG)) >= -2 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 2 && indiceId == "1.5") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -4 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 4 && indiceId == "1.59") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -4 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 4 && indiceId == "1.6") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -8 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 8 && indiceId == "1.67") || (indiceId == "1.74") )
										{
											tab_verres_stockG[value.sorting] = {};
											tab_verres_stockG[value.sorting]['id'] = value.id_verre;
											tab_verres_stockG[value.sorting]['code'] = ']'+ value.id_verre +'*'+value.diametre;
											tab_verres_stockG[value.sorting]['name'] = value.name + ' - Stock';
										}
									}
									else
									{
										tab_verres_stockG[value.sorting] = {};
										tab_verres_stockG[value.sorting]['id'] = value.id_verre;
										tab_verres_stockG[value.sorting]['code'] = ']'+ value.id_verre +'*'+value.diametre;
										tab_verres_stockG[value.sorting]['name'] = value.name + ' - Stock';
									}
									
								}
							
								//$('#type_de_verreD').append('<option value="]'+ value.id_verre +'*'+value.diametre+'">'+ value.name + ' - Stock</option>');
							})
						}
					  }
					})
					//return false;
				}
			
				if(lensFocalGroup != "3" && lensFocalGroup !="-" && lensFocalGroup !="")
				{
					//alert("progressionD:"+progressionD);
				$.ajax({
						type: "POST",
						url: "/index/getTypeDeVerre",
						data: {"indiceId" : indiceId, "lensFocalGroup" : lensFocalGroup, "generation" : generation,"sphereD" : sphereG,"cylindreD" : cylindreG,"axeD" : axeG,"additionD" : additionG,"stockD" : stockG,"panierA" : panierAm,"type" : type},
						dataType: "json",
						async: false,
						beforeSend: function () {
							//$(".loading").show();
						},
						success: function (data) {	
							console.log("Gauche3:");
							console.log(data);
							if(data != "")
							{
								
							$.each(data, function(key, value){
						
							if(value.trad_fr == "")
							{
								value.trad_fr = value.name;
							}
							
							
							if(deuxiemepaire == "1" && value.name.indexOf("Panier A ") >= 0)
							{
							
							}
							else
							{
							
								if ((value.name.indexOf("-stock") >= 0) || (value.name.indexOf("-stock") >= 0) || (value.name.indexOf("- stock") >= 0) || (value.name.indexOf("-Stock") >= 0) )
								{
									//$('#type_de_verreD').append('<option value="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' - Stock déporté</option>');
									tab_verres_stockG[value.sorting] = {};
									tab_verres_stockG[value.sorting]['id'] = value.code;
									tab_verres_stockG[value.sorting]['code'] = value.code;
									tab_verres_stockG[value.sorting]['name'] = decodeURIComponent(unescape(value.trad_fr)) + ' - Stock déporté';							
								}
								else
								{
									//$('#type_de_verreD').append('<option value="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + '</option>');
									if((value.name.indexOf("Panier A ") >= 0) && deuxiemepaire == 0)
									{
										if(((parseFloat(cylindreG)+parseFloat(sphereG)) >= -2 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 2 && indiceId == "1.5") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -4 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 4 && indiceId == "1.59") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -4 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 4 && indiceId == "1.6") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -8 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 8 && indiceId == "1.67") || (indiceId == "1.74") )
										{
											tab_verresG[value.sorting] = {};
											tab_verresG[value.sorting]['id'] = value.code;
											tab_verresG[value.sorting]['code'] = value.code;
											tab_verresG[value.sorting]['name'] = decodeURIComponent(unescape(value.trad_fr)) + '';
										}
									}
									else
									{
										tab_verresG[value.sorting] = {};
										tab_verresG[value.sorting]['id'] = value.code;
										tab_verresG[value.sorting]['code'] = value.code;
										tab_verresG[value.sorting]['name'] = decodeURIComponent(unescape(value.trad_fr)) + '';
									}	
								}
							}
							
							});	
						
							}
							//$(".loading").hide();
						}
					});
					}
					
					$.each(tab_verres_stockG, function(key, value){
							//console.log("Stock: "+key+" - "+value.code+" - "+value.name);
							$('#type_de_verreG').append('<option value="'+ value.id +'" rel="'+ value.code +'">'+value.name+'</option>');
					});
					
					$.each(tab_verresG, function(key, value){
							//console.log(key+" - "+value);
							$('#type_de_verreG').append('<option value="'+ value.id +'" rel="'+ value.code +'">'+value.name+'</option>');
					});
					
				}
				setTimeout(function(){
					$('#type_de_verreG').trigger('change');
				},500);
			}
				
				
        }
}



function copyVersDroit()
{
	var indiceId = $('#indices').val();
    var generation = $('#generation').val();
    var lensFocalGroup = $('#lensFocalGroup').val();
    
	var progressionD = $('#progressionD').val();
    var type_de_verreD = $('#type_de_verreD').val();
    var teinteD = $('#teinteD').val();
    var traitementD = $('#traitementD').val();
    var diametreD = $('#diametreD').val();
    var galbeD = $('#galbeD').val();
    var quantiteD = $('#quantiteD').val();
    var teintepersoD = $("#teintepersoD").val();
    
    var droite = $('#droit').is(':checked');
	var gauche = $('#gauche').is(':checked');

    var sphereD = $('#sphereD').val();
    var cylindreD = $('#cylindreD').val();
    var axeD = $('#axeD').val();
    var additionD = $('#additionD').val();
    var sphereG = $('#sphereG').val();
    var cylindreG = $('#cylindreG').val();
    var axeG = $('#axeG').val();
    var additionG = $('#additionG').val();
    
    var selectedText = $("#type_de_verreD option:selected").html();
    
    var dispoD = $('input[name="dispoD"]:checked').val();
    
    if(dispoD == "StockD")
	{
		dispoG = "StockG";
	}
	
	if(dispoD == "FabricationD")
	{
		dispoG = "FabricationG";
	}
	
	if(dispoD == "ToutD")
	{
		dispoG = "ToutG";
	}
	
	var stockD = $('input[name="dispoD"]:checked').val()
	var stockG = $('input[name="dispoG"]:checked').val()
	
	if(stockG == "StockG")
	{
		stockG = "StockD";
	}
	
	if(stockG == "FabricationG")
	{
		stockG = "FabricationD";
	}
	
	if(stockG == "ToutG")
	{
		stockG = "ToutD";
	}
	
	
	$('input[name=dispoG][value='+dispoG+']').prop('checked', true);
	
	$('#carte_1').hide;
	$("#carte_1").css("display", "none");
	$('#cartesGD').hide;
	$("#cartesGD").css("display", "none");


	if(teinteD == "CUST_24" || teinteD == "CUST_25")
	{
		$("#teintepersoG").removeClass("hide");
		$("#teintepersoG").val(teintepersoD);
	}
	else
	{
		$("#teintepersoG").addClass("hide");
		$("#teintepersoG").val("");
	}


	if(progressionD != "" || type_de_verreD !="")
	{
		$("#detailG").css("display", "block");
	}
	
	//alert("sphereD:"+sphereD+" ,sphereG:"+sphereG+" ,cylindreD:"+cylindreD+" ,cylindreG:"+cylindreG+" ,axeD:"+axeD+" ,axeG:"+axeG+" ,additionD:"+additionD+" ,additionG:"+additionG+" ,gauche:"+gauche+" ,droite:"+droite);
	if(sphereD == sphereG && cylindreD==cylindreG && axeD==axeG && additionD==additionG && droite && gauche && type_de_verreD != "")
	{
		// $('input[name=dispoD][value=ToutD]').prop('checked', true);
		
	
		$('#progressionG').empty()
		$('#type_de_verreG').empty()
	   // $('#teinteG').empty()
	  //  $('#traitementG').empty()
		$('#diametreG').empty()
	
	   // alert("DiametreD:"+diametreD);
	
	
		$('#progressionD option').clone().appendTo('#progressionG');
		$('#type_de_verreD option').clone().appendTo('#type_de_verreG');
		$('#traitementG').html($('#traitementD').html());
		$('#teinteG').html($('#teinteD').html());
		$('#diametreD option').clone().appendTo('#diametreG');
		$('#galbeD option').clone().appendTo('#galbeG');
	
		$('#progressionG').val(progressionD);
		$('#type_de_verreG').val(type_de_verreD);
		$('#teinteG').val(teinteD);
		$('#traitementG').val(traitementD);
		// console.log('22222222222222222222222222222222222222222');
		// console.log($('#traitementG').val());
		$('#diametreG').val(diametreD);
		$('#galbeG').val(galbeD);
	
		$('#type_de_verreG').trigger('change');
	
		setTimeout(function(){
				if(progressionD!="")
					$('#progressionG option[value="'+ progressionD +'"]').prop('selected', true);
				if(type_de_verreD!="")
				{
					$('#type_de_verreG option[value="'+ type_de_verreD +'"]').prop('selected', true);
					$('#nomverreGH').val(selectedText);
				}

		},200);
		setTimeout(function(){
			
				if(teinteD!="")
					$('#teinteG option[value="'+ teinteD +'"]').prop('selected', true);
				if(traitementD!="")
					$('#traitementG option[value="'+ traitementD +'"]').prop('selected', true);
				if(diametreD!="")
					$('#diametreG option[value="'+ diametreD +'"]').prop('selected', true);
				if(galbeD!="")
					$('#galbeG option[value="'+ galbeD +'"]').prop('selected', true);
				
				if(quantiteD!="")
					$('#quantiteG option[value="'+ quantiteD +'"]').prop('selected', true);
				
				$('#prixVerreG').val($('#prixVerreD').val());
				$('#prixTeinteG').val($('#prixTeinteD').val());
				$('#prixTraitementG').val($('#prixTraitementD').val());
				
				/*
				$('#prixG').val($('#prixD').val());
				$('#prixGH').val($('#prixDH').val());
				*/
				var prixverre = $('#prixVerreD').val();
				console.log("prixVerreD:");
				console.log(prixverre);
				
				var prixteinte = $('#prixTeinteD').val();
				console.log("prixTeinteD:");
				console.log(prixteinte);
				
				var prixtraitement = $('#prixTraitementD').val();
				console.log("prixTraitementD:");
				console.log(prixtraitement)

				var prixPrismeG = 0;
				var prixGalbeG = 0;
				if ($('#PrismeSphereG').val()) {
					prixPrismeG = 3.9;
				}
				if ($('#galbeG').val() != 'Standard') {
					prixGalbeG = 3.9;
				}
				console.log("prixPrismeG:");
				console.log(prixPrismeG);
				console.log("prixGalbeG:");
				console.log(prixGalbeG)

				if(quantiteD!="")
				{
					var tot = ( ((parseFloat(prixverre)
						+parseFloat(prixtraitement)
						+parseFloat(prixteinte)
						+parseFloat(prixPrismeG)
						+parseFloat(prixGalbeG)
						))*parseFloat(quantiteD)).toFixed(2);
				}
				else
				{
					var tot =  (parseFloat(prixverre)+parseFloat(prixtraitement)+parseFloat(prixteinte)+parseFloat(prixPrismeG)
						+parseFloat(prixGalbeG)).toFixed(2);
				}
				console.log("tot:");
				console.log(tot);
				
				$('#prixG').val(tot+"€");
				$('#prixGH').val(tot+"€");
				
			
				$('#teinteGH').val($('#teinteDH').val());
				$('#traitementGH').val($('#traitementDH').val());

		},600);


		// console.log('333333333333333333333333333333333333333333333333333333333');
		// console.log($('#traitementG').val());
	}
	else
	{
		
		if(type_de_verreD != "")
		{
			console.log("YYY");
			console.log(type_de_verreD);
			if($('#type_de_verreG option[value="'+type_de_verreD+'"]').length > 0)
			{
				$('#type_de_verreG option[value="'+type_de_verreD+'"]').prop('selected', true);
				
				setTimeout(function(){
				
					if(teinteD!="")
					{
						$('#teinteG option[value="'+ teinteD +'"]').prop('selected', true);
						//$('#teinteG').trigger("change");
					}
					if(traitementD!="")
						$('#traitementG option[value="'+ traitementD +'"]').prop('selected', true);
					if(galbeD!="")
						$('#galbeG option[value="'+ galbeD +'"]').prop('selected', true);
				
					if(quantiteD!="")
						$('#quantiteG option[value="'+ quantiteD +'"]').prop('selected', true);
						
					if(progressionD!="")
						$('#progressionG option[value="'+ progressionD +'"]').prop('selected', true);
				
					$('#prixVerreG').val($('#prixVerreD').val());
					$('#prixTeinteG').val($('#prixTeinteD').val());
					$('#prixTraitementG').val($('#prixTraitementD').val());
				    
				    // var prixverre = $('#prixVerreD').val();
					// console.log("prixVerreD:");
					// console.log(prixverre);
					//
					// var prixteinte = $('#prixTeinteD').val();
					// console.log("prixTeinteD:");
					// console.log(prixteinte);
					//
					// var prixtraitement = $('#prixTraitementD').val();
					// console.log("prixTraitementD:");
					// console.log(prixtraitement);
					//
					// if(quantiteD!="")
					// {
					// 	var tot = ( ((parseFloat(prixverre)+parseFloat(prixtraitement)+parseFloat(prixteinte)))*parseFloat(quantiteD)).toFixed(2);
					// }
					// else
					// {
					// 	var tot =  (parseFloat(prixverre)+parseFloat(prixtraitement)+parseFloat(prixteinte)).toFixed(2);
					// }
					console.log("tot:");
					// console.log(tot);
					calculPrice();
					// $('#prixG').val(tot+"€");
					$('#prixGH').val($('#prixG').val());
					
					// $('#prixG').val($('#prixD').val());
					$('#prixDH').val($('#prixD').val());
			
					$('#teinteGH').val($('#teinteDH').val());
					$('#traitementGH').val($('#traitementDH').val());
					
					
					if(diametreD != "")
					{
						console.log(diametreD)
						if($('#diametreG option[value="'+diametreD+'"]').length > 0)
						{
							console.log("Here");
							$('#diametreG option[value="'+diametreD+'"]').prop('selected', true);
						}
					}
					else
					{
						$('#diametreG option[value=""]').prop('selected', true);
					}
				},1800);
				
			}
			else
			{
				$('#type_de_verreG option[value=""]').prop('selected', true);
			}
			$('#type_de_verreG').trigger("change");
			$('#nomverreGH').val(selectedText);
		}
		else
		{
			setTimeout(function(){
				getTypedeVerreG(indiceId,lensFocalGroup,generation,sphereD,sphereG,cylindreD,cylindreG,axeD,axeG,additionD,additionG,stockD,stockG,progressionD,progressionG,droite,gauche,panierAm,deuxiemepaire);
	    	},800);
		}
	}
	
	if(diametreD != "" && type_de_verreD != "")
	{
		$('#to_etape2').removeClass('disabled');
		if(panierA == 1)
		{
			$('#to_etape2').addClass('disabled');
		}
		//alert(selectedText.indexOf(" - Stock"));
		if((selectedText.toLowerCase()).indexOf("t-one") != -1 ||
			(selectedText.toLowerCase()).indexOf("e-space") != -1 ||
			(selectedText.toLowerCase()).indexOf("elysium") != -1 ||
			(selectedText.toLowerCase()).indexOf("platinium") != -1 ||
			(selectedText.toLowerCase()).indexOf("omega") != -1 ||
			(selectedText.toLowerCase()).indexOf("eyefatigue") != -1 ||
			(selectedText.toLowerCase()).indexOf("top office") != -1 ||
			(selectedText.toLowerCase()).indexOf("freestyle") != -1
		)
		{
			$('#additional_info').removeClass('hide');
		}
		else {
			$('#additional_info').addClass('hide');
		}
		if(selectedText.indexOf(" - Stock") == -1 || selectedText.indexOf("Panier") >= 0)
		{
			$('#certif').removeClass('hide');
		}
		else
		{
			$('#certif').addClass('hide');
		}
	}

	if(diametreD=="precalibrage")
	{
		$('#to_etape2').addClass('disabled');
		
				$('#ecart_puppillaire_gauche,#hauteur_gauche').addClass('required');
				$("#ecart_puppillaire_gauche").prop('required',true);
				$("#hauteur_gauche").prop('required',true);
			
	}
	else
	{
		if(diametreD != "")
		{
			$('#to_etape2').removeClass('disabled');
		}
	}
	console.log('55555555555555555555555555555555555555555555555555555');
	console.log($('#traitementG').val());
	calculPrice();
}

function copyVersGauche()
{
	var progressionG = $('#progressionG').val();
    var type_de_verreG = $('#type_de_verreG').val();
    var teinteG = $('#teinteG').val();
    var traitementG = $('#traitementG').val();
    var diametreG = $('#diametreG').val();
    var galbeG = $('#galbeG').val();
    
    var droite = $('#droit').is(':checked');
	var gauche = $('#gauche').is(':checked');

    var sphereD = $('#sphereD').val();
    var cylindreD = $('#cylindreD').val();
    var axeD = $('#axeD').val();
    var additionD = $('#additionD').val();
    var sphereG = $('#sphereG').val();
    var cylindreG = $('#cylindreG').val();
    var axeG = $('#axeG').val();
    var additionG = $('#additionG').val();
    
    var quantiteG = $('#quantiteG').val();
    
    var selectedText = $("#type_de_verreG option:selected").html();
    
    var teintepersoG = $("#teintepersoG").val();
    
    var dispoG = $('input[name="dispoG"]:checked').val();
    
    if(dispoG == "StockG")
	{
		dispoG = "StockD";
	}
	
	if(dispoG == "FabricationG")
	{
		dispoG = "FabricationD";
	}
	
	if(dispoG == "ToutG")
	{
		dispoG = "ToutD";
	}
	
	$('input[name=dispoG][value='+dispoG+']').prop('checked', true);
	
	$('#carte_1').hide;
	$("#carte_1").css("display", "none");
	$('#cartesGD').hide;
	$("#cartesGD").css("display", "none");


	if(teinteG == "CUST_24" || teinteG == "CUST_25")
	{
		$("#teintepersoD").removeClass("hide");
		$("#teintepersoD").val(teintepersoG);
	}
	else
	{
		$("#teintepersoD").addClass("hide");
		$("#teintepersoD").val("");
	}


	if(progressionD != "" || type_de_verreD !="")
	{
		$("#detailD").css("display", "block");
	}
	
	//alert("sphereD:"+sphereD+" ,sphereG:"+sphereG+" ,cylindreD:"+cylindreD+" ,cylindreG:"+cylindreG+" ,axeD:"+axeD+" ,axeG:"+axeG+" ,additionD:"+additionD+" ,additionG:"+additionG+" ,gauche:"+gauche+" ,droite:"+droite);
	if(sphereD == sphereG && cylindreD==cylindreG && axeD==axeG && additionD==additionG && droite && gauche)
	{
		// $('input[name=dispoD][value=ToutD]').prop('checked', true);
		
	
		$('#progressionD').empty()
		$('#type_de_verreD').empty()
	   // $('#teinteG').empty()
	  //  $('#traitementG').empty()
		$('#diametreD').empty()
	
	   // alert("DiametreD:"+diametreD);
	
	
		$('#progressionG option').clone().appendTo('#progressionD');
		$('#type_de_verreG option').clone().appendTo('#type_de_verreD');
		$('#teinteG option').clone().appendTo('#teinteD');
		$('#traitementG option').clone().appendTo('#traitementD');
		$('#diametreG option').clone().appendTo('#diametreD');
		$('#galbeG option').clone().appendTo('#galbeD');
	
		$('#progressionD').val(progressionG);
		$('#type_de_verreD').val(type_de_verreG);
		$('#teinteD').val(teinteG);
		$('#traitementD').val(traitementG);
		$('#diametreD').val(diametreG);
		$('#galbeD').val(galbeG);
	
	
	//	$('#type_de_verreD').trigger('change');
	
		setTimeout(function(){
				if(progressionD!="")
					$('#progressionD option[value="'+ progressionG +'"]').prop('selected', true);
				if(type_de_verreG!="")
				{
					$('#type_de_verreD option[value="'+ type_de_verreG +'"]').prop('selected', true);
					$('#nomverreDH').val(selectedText);
					$('#type_de_verreD').trigger('change');
				}

		},200);
		setTimeout(function(){
			
				if(teinteD!="")
					$('#teinteD option[value="'+ teinteG +'"]').prop('selected', true);
				if(traitementD!="")
					$('#traitementD option[value="'+ traitementG +'"]').prop('selected', true);
				if(diametreD!="")
					$('#diametreD option[value="'+ diametreG +'"]').prop('selected', true);
				if(galbeD!="")
					$('#galbeD option[value="'+ galbeG +'"]').prop('selected', true);
				
				if(quantiteD!="")
					$('#quantiteD option[value="'+ quantiteG +'"]').prop('selected', true);
					
				$('#teinteD').trigger('change');
				$('#traitementD').trigger('change');
				
			//	$('#prixVerreD').val($('#prixVerreG').val());
			//	$('#prixTeinteD').val($('#prixTeinteG').val());
			//	$('#prixTraitementD').val($('#prixTraitementG').val());
    
			//	$('#prixD').val($('#prixG').val());
		//		$('#prixDH').val($('#prixGH').val());
			
				$('#teinteDH').val($('#teinteGH').val());
				$('#traitementDH').val($('#traitementGH').val());

		},600);
	
		
		
	}
	else
	{
		
		if(type_de_verreG != "")
		{
			console.log(type_de_verreG)
			if($('#type_de_verreD option[value="'+type_de_verreG+'"]').length > 0)
			{
				$('#type_de_verreD option[value="'+type_de_verreG+'"]').prop('selected', true);
				
				setTimeout(function(){
				
					if(teinteD!="")
					$('#teinteD option[value="'+ teinteG +'"]').prop('selected', true);
					if(traitementD!="")
						$('#traitementD option[value="'+ traitementG +'"]').prop('selected', true);
					if(galbeD!="")
						$('#galbeD option[value="'+ galbeG +'"]').prop('selected', true);
				
					if(quantiteD!="")
						$('#quantiteD option[value="'+ quantiteG +'"]').prop('selected', true);
						
					if(progressionD!="")
						$('#progressionD option[value="'+ progressionG +'"]').prop('selected', true);
				
					$('#prixF').val($('#prixG').val());
					$('#prixDH').val($('#prixGH').val());
			
					$('#teinteDH').val($('#teinteGH').val());
					$('#traitementDH').val($('#traitementGH').val());
					
					
					if(diametreD != "")
					{
						console.log(diametreD)
						if($('#diametreD option[value="'+diametreG+'"]').length > 0)
						{
							console.log("Here");
							$('#diametreD option[value="'+diametreG+'"]').prop('selected', true);
						}
					}
					else
					{
						$('#diametreD option[value=""]').prop('selected', true);
					}
				},500);
				
			}
			else
			{
				$('#type_de_verreD option[value=""]').prop('selected', true);
			}
			$('#type_de_verreD').trigger("change");
			$('#nomverreDH').val(selectedText);
		}
	}
	
	if(diametreG != "" && type_de_verreG != "")
	{
		$('#to_etape2').removeClass('disabled');
		if(panierA == 1)
		{
			// $('#to_etape2').addClass('disabled');
		}
		//alert(selectedText.indexOf(" - Stock"));
		if( (selectedText.toLowerCase()).indexOf("t-one") != -1 ||
		    (selectedText.toLowerCase()).indexOf("e-space") != -1 ||
			(selectedText.toLowerCase()).indexOf("elysium") != -1 ||
			(selectedText.toLowerCase()).indexOf("platinium") != -1 ||
			(selectedText.toLowerCase()).indexOf("omega") != -1 ||
			(selectedText.toLowerCase()).indexOf("eyefatigue") != -1 ||
			(selectedText.toLowerCase()).indexOf("top office") != -1 ||
			(selectedText.toLowerCase()).indexOf("freestyle") != -1
		)
		{
			$('#additional_info').removeClass('hide');
		}
		else {
			$('#additional_info').addClass('hide');
		}

		if(selectedText.indexOf(" - Stock") == -1 || selectedText.indexOf("Panier") >= 0)
		{
			$('#certif').removeClass('hide');
		}
		else
		{
			$('#certif').addClass('hide');
		}
	}

	if(diametreG=="precalibrage")
	{
		$('#to_etape2').addClass('disabled');
		
				$('#ecart_puppillaire_droit,#hauteur').addClass('required');
				$("#ecart_puppillaire_droit").prop('required',true);
				$("#hauteur").prop('required',true);
		
	}
	else
	{
		if(diametreG != "")
		{
			$('#to_etape2').removeClass('disabled');
		}
	}
}

	function validFields() {
		$('.form-commande input[type=radio], .form-commande select').each(function (e) {
			$(this).rules("add", {
				messages: {
					required: "Veuillez choisir une option."
				}
			});
		});
	}

$('input[name=PrismeSphereD]').change(function() {	
	if( $('#PrismeSphereD').val() != '' ) {
		$('.corrections .d').find('.diopt').text($('#PrismeSphereD').val()+' ∆');
	
	} else {
		$('.corrections .d').find('.diopt').text('');
	}
});

$('input[name=PrismeSphereG]').change(function() {	
	if( $('#PrismeSphereG').val() != '') {
		$('.corrections .g').find('.diopt').text($('#PrismeSphereG').val()+' ∆');
	
	} else {
		$('.corrections .g').find('.diopt').text('');
	}
});

$('input[name=PrismeCylindreD]').change(function() {	
	if( $('#PrismeCylindreD').val() != '' ) {
		$('.corrections .d').find('.base').text(' base ' + $('#PrismeCylindreD').val()+'°');
	
	} else {
		$('#preview_auth_card .prisme .d .base').text('');
	}
});

$('input[name=PrismeCylindreG]').change(function() {	
	if( $('#PrismeCylindreG').val() != '' ) {
		$('.corrections .g').find('.base').text(' base ' + $('#PrismeCylindreG').val()+'°');
	
	} else {
		$('.corrections .g').find('.base').text('');
	}
});
		
});

function sortlist_id(idselect) {
  var select = $(idselect);
  select.html(select.find('option').sort(function(x, y) {
    // to change to descending order switch "<" for ">"
    return $(x).text() > $(y).text() ? 1 : -1;
  }));

  // select default item after sorting (first item)
  // $('select').get(0).selectedIndex = 0;

}

/***********revrse by id******/
function sortreverse_id(idselect) {
  var select = $(idselect);
  select.html(select.find('option').sort(function(x, y) {
    return $(x).text() < $(y).text() ? 1 : -1;
  }));
}


var iledefrance = '<?php echo $region; ?>';
var tabLivIleDeFrance = ["Mardi","Mercredi","Jeudi","Vendredi","Lundi","Mardi","Mardi"];
var tabLivHorsIleDeFrance = ["Mercredi","Jeudi","Vendredi","Samedi","Mardi","Mardi","Mardi"];
var currentChoixMultiCommande = "";
var tabCurrentGroupeDiametre = [];
var precalibrage = "oui";
var forceAddStep = false;
var forceSphStep = false;

$(document).ready(function() {

	$('.order-form-container').fadeIn(60);
	$(".select-search").select2();

	$('.referenceClient').on('keyup', 'input', function() {

		var $referenceClient = $(this).closest('.referenceClient');
		var length = $(this).val().length;

		var rest = 14-length;

		$referenceClient.find('.helper-text b').text(rest);

	});

	

	// ------------------------------
	// Type de commande

	$('#ancienne_commande, #stock_ancienne_commande').on('change', function() {
		if($(this).val() > 0) {
			$('.next .btn').removeClass('disabled');
		}
		else {
			$('.next .btn').addClass('disabled');
		}
	});


	// ------------------------------
	// Prix des verres - EC

	$('.continue_commande').on('click', function() {
		$('input[name="type_commande"]').val(1);
		$('.next .btn').removeClass('disabled').trigger('click');
	});


	$('.abort_commande').on('click', function() {
		swal({
			title: "Etes-vous sûr ?",
			text: "Voulez-vous vraiment annuler cette commande ?",
			type: "warning",
			showCancelButton: true,
			confirmButtonClass: 'btn-warning',
			cancelButtonText: 'Annuler',
			confirmButtonText: "Oui, annuler",
			closeOnConfirm: false
		}, function () {
			window.location.reload();
		});
	});


	// ------------------------------
	// Authenticite
	$('select[name="civilite_client"]').on('change', function() {
	
	if(panierA == 1)
	{
		// $('#to_etape2').removeClass('disabled');
	
		var type_de_verreD = $('#type_de_verreD').val();
		var type_de_verreG = $('#type_de_verreG').val();
	
		var lensFocalGroup = $('#lensFocalGroup').val()
	
		var sphereD = $('#sphereD').val();
		var cylindreD = $('#cylindreD').val();
		var axeD = $('#axeD').val();
		var additionD = $('#additionD').val();
	
		var sphereG = $('#sphereG').val();
		var cylindreG = $('#cylindreG').val();
		var axeG = $('#axeG').val();
		var additionG = $('#additionG').val();
	
		var indiceId = $('#indices').val();
	
		var stockD = $('input[name="dispoD"]:checked').val()
		var stockG = $('input[name="dispoG"]:checked').val()
		
		if(stockG == "StockG")
		{
			stockG = "StockD";
		}
	
		if(stockG == "FabricationG")
		{
			stockG = "FabricationD";
		}
	
		if(stockG == "ToutG")
		{
			stockG = "ToutD";
		}
	
		var progressionD = $('#progressionD').val();
		var progressionG = $('#progressionG').val();
	
		var progressionD = $('#progressionD').val();
		var type_de_verreD = $('#type_de_verreD').val();
		var teinteD = $('#teinteD').val();
		//var traitementD = $('#traitementD').val();
		var diametreD = $('#diametreD').val();
		var galbeD = $('#galbeD').val();
	
		var progressionG = $('#progressionG').val();
		var type_de_verreG = $('#type_de_verreG').val();
		var teinteG = $('#teinteG').val();
		//var traitementG = $('#traitementG').val();
		var diametreG = $('#diametreG').val();
		var galbeG = $('#galbeG').val();
	
		var options = 0;
		var optionType_de_verreD = $( "#type_de_verreD option:selected" ).text();
		var optionType_de_verreG = $( "#type_de_verreG option:selected" ).text();
		
		var droite = $('#droit').is(':checked');
		var gauche = $('#gauche').is(':checked');
		
		var diametreG_text = $( "#diametreG option:selected" ).text();
		var diametreD_text = $( "#diametreD option:selected" ).text();
		
		var traitementD = $("#traitementD option:selected").text();
		var teinteD = $("#teinteD option:selected").text();
		var teinteDCode = $("#teinteD").val();
		
		var traitementG = $("#traitementG option:selected").text();
		var teinteG = $("#teinteG option:selected").text();
		var teinteGCode = $("#teinteG").val();
	
		if(traitementD == "Aucun" || traitementD == "----")
		{
			traitementD = "";
		}
	
		if(teinteD == "Aucune")
		{
			teinteD = "";
		}
		else
		{
			if(traitementD != "Aucun" && traitementD != "----" && traitementD != "")
			{
				teinteD = ", "+teinteD;
			}
		}
	
		if(diametreD_text == 'Précalibrage (Gratuit)')
		{
			
			diametreD_text = "Precalibré";
		}
		
		if(traitementG == "Aucun" || traitementG == "----")
		{
			traitementG = "";
		}
	
		if(teinteG == "Aucune")
		{
			teinteG = "";
		}
		else
		{
			if(traitementG != "Aucun" && traitementG != "----" && traitementG != "")
			{
				teinteG = ", "+teinteG;
			}
		}
	
		if(diametreG_text == 'Précalibrage (Gratuit)')
		{
			
			diametreG_text = "Precalibré";
		}
		
		$('#preview_auth_card, #preview_auth_img').hide();

		// Nom
		if( $(this).val() != 0 ) {

			var civilites = {0:'', 1:'Mme', 2: 'M.', 3:'Mlle', 4:''};


			$('#preview_auth_card .civilite').text(civilites[$(this).find('option:selected').val()]);

			$('div#nom_client').fadeIn();

			$('input[name="nom_client"]').on('keyup', function() {

				$('#preview_auth_card, #preview_auth_img').hide();

				if( $(this).val().length > 0 ) {

					var nom = $(this).val();

					$('#preview_auth_card .nom_client .nom').text(nom.toLowerCase());

					// Prenom
					$('div#prenom_client').fadeIn();
					$('input[name="prenom_client"]').on('keyup', function () {

						$('#preview_auth_card, #preview_auth_img').hide();

						if ($(this).val().length > 0) {
							var prenom = $(this).val();

							$('#preview_auth_card .nom_client .prenom').text(prenom.toLowerCase());
							$('#preview_carte, #generer_carte, #prev_auth').fadeIn(120);
							
							if((droite==true && gauche==false) || (droite==false && gauche==true) || (droite == true && gauche == true && type_de_verreG==type_de_verreD && teinteD==teinteG && traitementD==traitementG))
							{
								$('#carte_1').show;
								$("#carte_1").css("display", "block");
								$('#cartesGD').hide;
								$("#cartesGD").css("display", "none");
								
								if((gauche && type_de_verreG != "" && optionType_de_verreG.indexOf(" - Stock") == -1) || (gauche && type_de_verreG != "" && optionType_de_verreG.indexOf("Panier") >= 0))
								{
									$('.corrections .g .eye_text').show();
									$('.corrections .g').show();
								
									if(axeG == "0" || axeG == "")
									{
										axeG = "0";
									}
								
								
									$('.corrections .g').find('.correction').text(sphereG+" ("+cylindreG+") "+axeG+"°");
								
									if(additionG != "+0.00")
									{
										additionG = additionG.replace("+", "");
									
										if(lensFocalGroup == 3)
										{
											$('.corrections .g').find('.add').text("ADD "+additionG);
										}
										if(lensFocalGroup == 4 || lensFocalGroup == 5)
										{
											$('.corrections .g').find('.add').text("DEG "+additionG);
										}
									}
								
									$('.verres').show();
									$('.verres .options').show();
									
									var couleur = teinteG.split('(')[0]
									if(teinteGCode == 'CUST_24' || teinteGCode == 'CUST_25')
										couleur = $("#teintepersoG").val();
		
									$('.verres').find('.nom_verre').text(optionType_de_verreG.split('(')[0]);
									$('.verres').find('.diam_verre').text(" Diamètre: "+$('#diametreG').val());
									nameG = optionType_de_verreG.split('(')[0];
									if((nameG.indexOf("Panier") >= 0) && traitementG.split('(')[0] == "Durci")
									{
										$('.verres').find('.miroir').text(couleur);
									}
									else
									{
										$('.verres').find('.miroir').text(traitementG.split('(')[0]+" "+couleur);
									}
									if(galbeG != "Standard")
									{
										$('.verres').find('.galbe').text(" Galbe:"+galbeG);
									}
							
								}
							
								if((droite && type_de_verreD != "" && optionType_de_verreD.indexOf(" - Stock") == -1) || (droite && type_de_verreD != "" && optionType_de_verreD.indexOf("Panier") >= 0))
								{
									$('.corrections .d .eye_text').show();
									$('.corrections .d').show();
								
									if(axeD == "0" || axeD == "")
									{
										axeD = "0";
									}
								
								
									$('.corrections .d').find('.correction').text(sphereD+" ("+cylindreD+") "+axeD+"°");
								
									if(additionD != "+0.00")
									{
										additionD = additionD.replace("+", "");
									
										if(lensFocalGroup == 3)
										{
											$('.corrections .d').find('.add').text("ADD "+additionD);
										}
										if(lensFocalGroup == 4 || lensFocalGroup == 5)
										{
											$('.corrections .d').find('.add').text("DEG "+additionD);
										}
									}
								
									var couleurD = teinteD.split('(')[0]
									if(teinteDCode == 'CUST_24' || teinteDCode == 'CUST_25')
										couleurD = $("#teintepersoD").val();
								
									$('.verres').show();
									$('.verres .options').show();
		
									$('.verres').find('.nom_verre').text(optionType_de_verreD.split('(')[0]);
									$('.verres').find('.diam_verre').text(" Diamètre: "+$('#diametreD').val());
									nameD = optionType_de_verreD.split('(')[0];
									if((nameD.indexOf("Panier") >= 0) && traitementD.split('(')[0] == "Durci")
									{
										$('.verres').find('.miroir').text(couleurD);
									}
									else
									{
										$('.verres').find('.miroir').text(traitementD.split('(')[0]+" "+couleurD);
									}
									if(galbeD != "Standard")
									{
										$('.verres').find('.galbe').text(" Galbe:"+galbeD);
									}
								}
							}
							else
							{
								$('#carte_1').hide;
								$("#carte_1").css("display", "none");
								$('#cartesGD').show;
								$("#cartesGD").css("display", "block");
								
								if((gauche && type_de_verreG != "" && optionType_de_verreG.indexOf(" - Stock") == -1) || (gauche && type_de_verreG != "" && optionType_de_verreG.indexOf("Panier") >= 0))
								{
									$('#carteG .corrections .g .eye_text').show();
									$('#carteG .corrections .g').show();
								
									if(axeG == "0" || axeG == "")
									{
										axeG = "0";
									}
								
								
									$('#carteG .corrections .g').find('.correction').text(sphereG+" ("+cylindreG+") "+axeG+"°");
								
									if(additionG != "+0.00")
									{
										additionG = additionG.replace("+", "");
									
										if(lensFocalGroup == 3)
										{
											$('#carteG .corrections .g').find('.add').text("ADD "+additionG);
										}
										if(lensFocalGroup == 4 || lensFocalGroup == 5)
										{
											$('#carteG .corrections .g').find('.add').text("DEG "+additionG);
										}
									}
									
									var couleur = teinteG.split('(')[0]
									if(teinteGCode == 'CUST_24' || teinteGCode == 'CUST_25')
										couleur = $("#teintepersoG").val();
										
									$('#carteG .verres').show();
									$('#carteG .verres .options').show();
		
									$('#carteG .verres').find('.nom_verre').text(optionType_de_verreG.split('(')[0]);
									//$('#carteG .verres').find('.diam_verre').text(diametreG_text);
									$('#carteG .verres').find('.diam_verre').text(" Diamètre: "+$('#diametreG').val());
									nameG = optionType_de_verreG.split('(')[0];
									if((nameG.indexOf("Panier") >= 0) && traitementG.split('(')[0] == "Durci")
									{
										$('.verres').find('.miroir').text(couleur);
									}
									else
									{
										$('#carteG .verres').find('.miroir').text(traitementG.split('(')[0]+" "+couleur);
									}
									if(galbeG != "Standard")
									{
										$('#carteG .verres').find('.galbe').text(" Galbe:"+galbeG);
									}
							
								}
								
								if((droite && type_de_verreD != "" && optionType_de_verreD.indexOf(" - Stock") == -1) || (droite && type_de_verreD != "" && optionType_de_verreD.indexOf("Panier") >= 0))
								{
									
									$('#carteD .corrections .d .eye_text').show();
									$('#carteD .corrections .d').show();
								
									if(axeD == "0" || axeD == "")
									{
										axeD = "0";
									}
								
								
									$('#carteD .corrections .d').find('.correction').text(sphereD+" ("+cylindreD+") "+axeD+"°");
								
									if(additionD != "+0.00")
									{
										additionD = additionD.replace("+", "");
									
										if(lensFocalGroup == 3)
										{
											$('#carteD .corrections .d').find('.add').text("ADD "+additionD);
										}
										if(lensFocalGroup == 4 || lensFocalGroup == 5)
										{
											$('#carteD .corrections .d').find('.add').text("DEG "+additionD);
										}
									}
								
								
									var couleurD = teinteD.split('(')[0]
									if(teinteDCode == 'CUST_24' || teinteDCode == 'CUST_25')
										couleurD = $("#teintepersoD").val();
										
									$('#carteD .verres').show();
									$('#carteD .verres .options').show();
		
									$('#carteD .verres').find('.nom_verre').text(optionType_de_verreD.split('(')[0]);
									//$('#carteD .verres').find('.diam_verre').text(diametreD_text);
									$('#carteD .verres').find('.diam_verre').text(" Diamètre: "+$('#diametreD').val());
									nameD = optionType_de_verreD.split('(')[0];
									if((nameD.indexOf("Panier") >= 0) && traitementD.split('(')[0] == "Durci")
									{
										$('.verres').find('.miroir').text(couleurD);
									}
									else
									{
										$('#carteD .verres').find('.miroir').text(traitementD.split('(')[0]+" "+couleurD);
									}				
									if(galbeD != "Standard")
									{
										$('#carteD .verres').find('.galbe').text(" Galbe:"+galbeD);
									}
								}
								
							}

						}
						else {
							$('#generer_carte').fadeOut(120);
						}

					});

				} else {
					$('div#prenom_client').fadeOut();
				}
			});

		}
	}
	});
	
	$('#commandeForm').on('change', 'input[name="carte_auth"]', function() {
	
		$('#to_etape2').removeClass('disabled');
	
		var type_de_verreD = $('#type_de_verreD').val();
		var type_de_verreG = $('#type_de_verreG').val();
	
		var lensFocalGroup = $('#lensFocalGroup').val()
	
		var sphereD = $('#sphereD').val();
		var cylindreD = $('#cylindreD').val();
		var axeD = $('#axeD').val();
		var additionD = $('#additionD').val();
	
		var sphereG = $('#sphereG').val();
		var cylindreG = $('#cylindreG').val();
		var axeG = $('#axeG').val();
		var additionG = $('#additionG').val();
	
		var indiceId = $('#indices').val();
	
		var stockD = $('input[name="dispoD"]:checked').val()
		var stockG = $('input[name="dispoG"]:checked').val()
		
		if(stockG == "StockG")
		{
			stockG = "StockD";
		}
	
		if(stockG == "FabricationG")
		{
			stockG = "FabricationD";
		}
	
		if(stockG == "ToutG")
		{
			stockG = "ToutD";
		}
	
		var progressionD = $('#progressionD').val();
		var progressionG = $('#progressionG').val();
	
		var progressionD = $('#progressionD').val();
		var type_de_verreD = $('#type_de_verreD').val();
		var teinteD = $('#teinteD').val();
		//var traitementD = $('#traitementD').val();
		var diametreD = $('#diametreD').val();
		var galbeD = $('#galbeD').val();
	
		var progressionG = $('#progressionG').val();
		var type_de_verreG = $('#type_de_verreG').val();
		var teinteG = $('#teinteG').val();
		//var traitementG = $('#traitementG').val();
		var diametreG = $('#diametreG').val();
		var galbeG = $('#galbeG').val();
	
		var options = 0;
		var optionType_de_verreD = $( "#type_de_verreD option:selected" ).text();
		var optionType_de_verreG = $( "#type_de_verreG option:selected" ).text();
		
		var droite = $('#droit').is(':checked');
		var gauche = $('#gauche').is(':checked');
		
		var diametreG_text = $( "#diametreG option:selected" ).text();
		var diametreD_text = $( "#diametreD option:selected" ).text();
		
		var traitementD = $("#traitementD option:selected").text();
		var teinteD = $("#teinteD option:selected").text();
		var teinteDCode = $("#teinteD").val();
		
		var traitementG = $("#traitementG option:selected").text();
		var teinteG = $("#teinteG option:selected").text();
		var teinteGCode = $("#teinteG").val();
	
		if(traitementD == "Aucun" || traitementD == "----")
		{
			traitementD = "";
		}
	
		if(teinteD == "Aucune")
		{
			teinteD = "";
		}
		else
		{
			if(traitementD != "Aucun" && traitementD != "----" && traitementD != "")
			{
				teinteD = ", "+teinteD;
			}
		}
	
		if(diametreD_text == 'Précalibrage (Gratuit)')
		{
			
			diametreD_text = "Precalibré";
		}
		
		if(traitementG == "Aucun" || traitementG == "----")
		{
			traitementG = "";
		}
	
		if(teinteG == "Aucune")
		{
			teinteG = "";
		}
		else
		{
			if(traitementG != "Aucun" && traitementG != "----" && traitementG != "")
			{
				teinteG = ", "+teinteG;
			}
		}
	
		if(diametreG_text == 'Précalibrage (Gratuit)')
		{
			
			diametreG_text = "Precalibré";
		}
		

		$('#preview_carte, #preview_auth_card, #preview_auth_img, #prev_auth').hide();
		$('.eye_text, .corrections .d, .corrections .g').hide();

		if( $(this).val() == 1) {

			$('#commandeForm input[name="nom_client"], #commandeForm input[name="prenom_client"], #commandeForm select').addClass('required');

			$('.next .btn').addClass('disabled');

			// Civilité
			$('div#civilite_client').fadeIn();
			$('select[name="civilite_client"]').on('change', function() {

				$('#preview_auth_card, #preview_auth_img').hide();

				// Nom
				if( $(this).val() != 0 ) {

					var civilites = {0:'', 1:'Mme', 2: 'M.', 3:'Mlle', 4:''};


					$('#preview_auth_card .civilite').text(civilites[$(this).find('option:selected').val()]);

					$('div#nom_client').fadeIn();

					$('input[name="nom_client"]').on('keyup', function() {

						$('#preview_auth_card, #preview_auth_img').hide();

						if( $(this).val().length > 0 ) {

							var nom = $(this).val();

							$('#preview_auth_card .nom_client .nom').text(nom.toLowerCase());

							// Prenom
							$('div#prenom_client').fadeIn();
							$('input[name="prenom_client"]').on('keyup', function () {

								$('#preview_auth_card, #preview_auth_img').hide();

								if ($(this).val().length > 0) {
									var prenom = $(this).val();

									$('#preview_auth_card .nom_client .prenom').text(prenom.toLowerCase());
									$('#preview_carte, #generer_carte, #prev_auth').fadeIn(120);
									
									if((droite==true && gauche==false) || (droite==false && gauche==true) || (droite == true && gauche == true && type_de_verreG==type_de_verreD && teinteD==teinteG && traitementD==traitementG))
									{
										$('#carte_1').show;
										$("#carte_1").css("display", "block");
										$('#cartesGD').hide;
										$("#cartesGD").css("display", "none");
										
										if((gauche && type_de_verreG != "" && optionType_de_verreG.indexOf(" - Stock") == -1) || (gauche && type_de_verreG != "" && optionType_de_verreG.indexOf("Panier") >= 0))
										{
											$('.corrections .g .eye_text').show();
											$('.corrections .g').show();
										
											if(axeG == "0" || axeG == "")
											{
												axeG = "0";
											}
										
										
											$('.corrections .g').find('.correction').text(sphereG+" ("+cylindreG+") "+axeG+"°");
										
											if(additionG != "+0.00")
											{
												additionG = additionG.replace("+", "");
											
												if(lensFocalGroup == 3)
												{
													$('.corrections .g').find('.add').text("ADD "+additionG);
												}
												if(lensFocalGroup == 4 || lensFocalGroup == 5)
												{
													$('.corrections .g').find('.add').text("DEG "+additionG);
												}
											}
										
											$('.verres').show();
											$('.verres .options').show();
											
											var couleur = teinteG.split('(')[0]
											if(teinteGCode == 'CUST_24' || teinteGCode == 'CUST_25')
												couleur = $("#teintepersoG").val();
				
											$('.verres').find('.nom_verre').text(optionType_de_verreG.split('(')[0]);
											$('.verres').find('.diam_verre').text(" Diamètre: "+$('#diametreG').val());
											//$('.verres').find('.diam_verre').text(diametreG_text);
											nameG = optionType_de_verreG.split('(')[0];
											
											if((nameG.indexOf("Panier") >= 0) && traitementG.split('(')[0] == "Durci")
				{
					$('.verres').find('.miroir').text(couleur);
				}
				else
				{
											$('.verres').find('.miroir').text(traitementG.split('(')[0]+" "+couleur);
						}				
											if(galbeG != "Standard")
											{
												$('.verres').find('.galbe').text(" Galbe:"+galbeG);
											}
									
										}
									
										if((droite && type_de_verreD != "" && optionType_de_verreD.indexOf(" - Stock") == -1) || (droite && type_de_verreD != "" && optionType_de_verreD.indexOf("Panier") >= 0))
										{
											$('.corrections .d .eye_text').show();
											$('.corrections .d').show();
										
											if(axeD == "0" || axeD == "")
											{
												axeD = "0";
											}
										
										
											$('.corrections .d').find('.correction').text(sphereD+" ("+cylindreD+") "+axeD+"°");
										
											if(additionD != "+0.00")
											{
												additionD = additionD.replace("+", "");
											
												if(lensFocalGroup == 3)
												{
													$('.corrections .d').find('.add').text("ADD "+additionD);
												}
												if(lensFocalGroup == 4 || lensFocalGroup == 5)
												{
													$('.corrections .d').find('.add').text("DEG "+additionD);
												}
											}
										
											var couleurD = teinteD.split('(')[0]
											if(teinteDCode == 'CUST_24' || teinteDCode == 'CUST_25')
												couleurD = $("#teintepersoD").val();
										
											$('.verres').show();
											$('.verres .options').show();
				
											$('.verres').find('.nom_verre').text(optionType_de_verreD.split('(')[0]);
											//$('.verres').find('.diam_verre').text(diametreD_text);
											$('.verres').find('.diam_verre').text(" Diamètre: "+$('#diametreD').val());
											nameD = optionType_de_verreD.split('(')[0];
											if((nameD.indexOf("Panier") >= 0) && traitementD.split('(')[0] == "Durci")
				{
					$('.verres').find('.miroir').text(couleurD);
				}
				else
				{
											$('.verres').find('.miroir').text(traitementD.split('(')[0]+" "+couleurD);
										}
											if(galbeD != "Standard")
											{
												$('.verres').find('.galbe').text(" Galbe:"+galbeD);
											}
										}
									}
									else
									{
										$('#carte_1').hide;
										$("#carte_1").css("display", "none");
										$('#cartesGD').show;
										$("#cartesGD").css("display", "block");
										
										if((gauche && type_de_verreG != "" && optionType_de_verreG.indexOf(" - Stock") == -1) || (gauche && type_de_verreG != "" && optionType_de_verreG.indexOf("Panier") >= 0))
										{
											$('#carteG .corrections .g .eye_text').show();
											$('#carteG .corrections .g').show();
										
											if(axeG == "0" || axeG == "")
											{
												axeG = "0";
											}
										
										
											$('#carteG .corrections .g').find('.correction').text(sphereG+" ("+cylindreG+") "+axeG+"°");
										
											if(additionG != "+0.00")
											{
												additionG = additionG.replace("+", "");
											
												if(lensFocalGroup == 3)
												{
													$('#carteG .corrections .g').find('.add').text("ADD "+additionG);
												}
												if(lensFocalGroup == 4 || lensFocalGroup == 5)
												{
													$('#carteG .corrections .g').find('.add').text("DEG "+additionG);
												}
											}
											
											var couleur = teinteG.split('(')[0]
											if(teinteGCode == 'CUST_24' || teinteGCode == 'CUST_25')
												couleur = $("#teintepersoG").val();
												
											$('#carteG .verres').show();
											$('#carteG .verres .options').show();
				
											$('#carteG .verres').find('.nom_verre').text(optionType_de_verreG.split('(')[0]);
											$('#carteG .verres').find('.diam_verre').text(" Diamètre: "+$('#diametreG').val());
											//$('#carteG .verres').find('.diam_verre').text(diametreG_text);
											nameG = optionType_de_verreG.split('(')[0];
											if((nameG.indexOf("Panier") >= 0) && traitementD.split('(')[0] == "Durci")
				{
					$('.verres').find('.miroir').text(couleur);
				}
				else
				{
											$('#carteG .verres').find('.miroir').text(traitementG.split('(')[0]+" "+couleur);
										}
											if(galbeG != "Standard")
											{
												$('#carteG .verres').find('.galbe').text(" Galbe:"+galbeG);
											}
									
										}
										
										if((droite && type_de_verreD != "" && optionType_de_verreD.indexOf(" - Stock") == -1) || (droite && type_de_verreD != "" && optionType_de_verreD.indexOf("Panier") >= 0))
										{
											
											$('#carteD .corrections .d .eye_text').show();
											$('#carteD .corrections .d').show();
										
											if(axeD == "0" || axeD == "")
											{
												axeD = "0";
											}
										
										
											$('#carteD .corrections .d').find('.correction').text(sphereD+" ("+cylindreD+") "+axeD+"°");
										
											if(additionD != "+0.00")
											{
												additionD = additionD.replace("+", "");
											
												if(lensFocalGroup == 3)
												{
													$('#carteD .corrections .d').find('.add').text("ADD "+additionD);
												}
												if(lensFocalGroup == 4 || lensFocalGroup == 5)
												{
													$('#carteD .corrections .d').find('.add').text("DEG "+additionD);
												}
											}
										
										
											var couleurD = teinteD.split('(')[0]
											if(teinteDCode == 'CUST_24' || teinteDCode == 'CUST_25')
												couleurD = $("#teintepersoD").val();
												
											$('#carteD .verres').show();
											$('#carteD .verres .options').show();
				
											$('#carteD .verres').find('.nom_verre').text(optionType_de_verreD.split('(')[0]);
											nameD = optionType_de_verreD.split('(')[0];
											//$('#carteD .verres').find('.diam_verre').text(diametreD_text);
											$('#carteD .verres').find('.diam_verre').text(" Diamètre: "+$('#diametreD').val());
											if((nameD.indexOf("Panier") >= 0) && traitementD.split('(')[0] == "Durci")
				{
					$('.verres').find('.miroir').text(couleurD);
				}
				else
				{
											$('#carteD .verres').find('.miroir').text(traitementD.split('(')[0]+" "+couleurD);
						}				
											if(galbeD != "Standard")
											{
												$('#carteD .verres').find('.galbe').text(" Galbe:"+galbeD);
											}
										}
										
									}

								}
								else {
									$('#generer_carte').fadeOut(120);
								}

							});

						} else {
							$('div#prenom_client').fadeOut();
						}
					});

				}

			});

		} else {
			$('.auth_fields, #preview_auth_card, #preview_auth_img, #prev_auth, div.sub-auth').fadeOut();
			$('.next .btn').removeClass('disabled');
			$('#commandeForm input[type=text], #commandeForm select').removeClass('required');
		}

	});

	$('.content').on('click', '#generer_carte', function() {
	
		var type_de_verreD = $('#type_de_verreD').val();
		var type_de_verreG = $('#type_de_verreG').val();
	
		var lensFocalGroup = $('#lensFocalGroup').val()
	
		var sphereD = $('#sphereD').val();
		var cylindreD = $('#cylindreD').val();
		var axeD = $('#axeD').val();
		var additionD = $('#additionD').val();
	
		var sphereG = $('#sphereG').val();
		var cylindreG = $('#cylindreG').val();
		var axeG = $('#axeG').val();
		var additionG = $('#additionG').val();
	
		var indiceId = $('#indices').val();
	
		var stockD = $('input[name="dispoD"]:checked').val()
		var stockG = $('input[name="dispoG"]:checked').val()
		
		if(stockG == "StockG")
		{
			stockG = "StockD";
		}
	
		if(stockG == "FabricationG")
		{
			stockG = "FabricationD";
		}
	
		if(stockG == "ToutG")
		{
			stockG = "ToutD";
		}
	
		var progressionD = $('#progressionD').val();
		var progressionG = $('#progressionG').val();
	
		var progressionD = $('#progressionD').val();
		var type_de_verreD = $('#type_de_verreD').val();
		var teinteD = $('#teinteD').val();
		//var traitementD = $('#traitementD').val();
		var diametreD = $('#diametreD').val();
		var galbeD = $('#galbeD').val();
	
		var progressionG = $('#progressionG').val();
		var type_de_verreG = $('#type_de_verreG').val();
		var teinteG = $('#teinteG').val();
		//var traitementG = $('#traitementG').val();
		var diametreG = $('#diametreG').val();
		var galbeG = $('#galbeG').val();
	
		var options = 0;
		var optionType_de_verreD = $( "#type_de_verreD option:selected" ).text();
		var optionType_de_verreG = $( "#type_de_verreG option:selected" ).text();
		
		var droite = $('#droit').is(':checked');
		var gauche = $('#gauche').is(':checked');
		
		var diametreG_text = $( "#diametreG option:selected" ).text();
		var diametreD_text = $( "#diametreD option:selected" ).text();
		
		var traitementD = $("#traitementD option:selected").text();
		var teinteD = $("#teinteD option:selected").text();
		
		var traitementG = $("#traitementG option:selected").text();
		var teinteG = $("#teinteG option:selected").text();

		if((droite==true && gauche==false) || (droite==false && gauche==true) || (droite == true && gauche == true && type_de_verreG==type_de_verreD && teinteD==teinteG && traitementD==traitementG))
		{
			$('#carte_1').show;
			$("#carte_1").css("display", "block");
			$('#cartesGD').hide;
			$("#cartesGD").css("display", "none");
		}
		else
		{
			$('#carte_1').hide;
			$("#carte_1").css("display", "none");
			$('#cartesGD').show;
			$("#cartesGD").css("display", "block");
		}
		$('.next .btn').removeClass('disabled');
		$('#preview_auth_card, #preview_auth_img').fadeIn(120);

	});


	// ------------------------------
	// Calibrage

	$('input[name="precalibrage_diametre"]').on('change', function(){
		precalibrage = $(this).val();
		
		var droite = $('#droit').is(':checked');
		var gauche = $('#gauche').is(':checked');
			
		$('#commande_type').show();
		$('#typecommande').css('height','');
		if(precalibrage == 'oui'){
			$('#precalibrage_oui').show();
			$('#precalibrage_non').hide();
			$('input[name="diametre_verre"]').removeClass('required');
			$('#cotea,#coteb,#cotec,#coted,select[name="type_monture"],#epaisseur_bord_verre,#calibre_selected').addClass('required');
			$('.hauteur_pup input[type=text]').val('');
			
			if(droite)
			{
				$('#ecart_puppillaire_droit,#hauteur').addClass('required');
				$("#ecart_puppillaire_droit").prop('required',true);
				$("#hauteur").prop('required',true);
				
			}
			
			if(gauche)
			{
				$('#ecart_puppillaire_gauche,#hauteur_gauche').addClass('required');
				$("#ecart_puppillaire_gauche").prop('required',true);
				$("#hauteur_gauche").prop('required',true);
			}
			
		} else{
			$('#precalibrage_oui').hide();
			$('#precalibrage_non').show();

			$('input[name="diametre_verre"]').addClass('required');
			$('#cotea,#coteb,#cotec,#coted,select[name="type_monture"],#epaisseur_bord_verre,#calibre_selected').removeClass('required');
			if(droite)
			{
				$('#ecart_puppillaire_droit,#hauteur').removeClass('required');
				
				
			}
			
			if(gauche)
			{
				$('#ecart_puppillaire_gauche,#hauteur_gauche').removeClass('required');
				
			}
		}
	});

	$('.calibre').on('click', function(){
		$('.calibre').removeClass('calibre_selected');
		$(this).addClass('calibre_selected');
		$('#calibre_selected').val($(this).attr('alt'));
		$('#error_calibre_selected').hide();
	});

	if($('#calibre_selected').val() != "") {
		$('img[alt='+$('#calibre_selected').val()+']').addClass('calibre_selected');
	}

	
});



function addPrismeGalbeDroit() {
	var prixPrisme = 0;
	var prixGalbe = 0;
	if ($('#PrismeSphereD').val()) {
		prixPrisme = 3.9;
	}
	if ($('#galbeD').val() != 'Standard') {
		prixGalbe = 3.9;
	}
	return parseFloat(prixPrisme) + parseFloat(prixGalbe);
}

function addPrismeGalbeGauche() {
	var prixPrisme = 0;
	var prixGalbe = 0;
	if ($('#PrismeSphereG').val()) {
		prixPrisme = 3.9;
	}
	if ($('#galbeG').val() != 'Standard') {
		prixGalbe = 3.9;
	}
	return parseFloat(prixPrisme) + parseFloat(prixGalbe);
}

function calculPrice() {
	calculPriceD();
	calculPriceG();
	console.log('66666666666666666666666666666666666666666666666666666');
	console.log($('#traitementG').val());
}
function calculPriceD() {
	var droit = $('#droit').is(':checked');
	if (!droit) {
		$('#prixVerreD').val(0)
	}
	var quantiteD = $('#quantiteD').val();
	var prixverre = $('#prixVerreD').val();
	console.log("prixVerreD:");
	console.log(prixverre);

	var prixteinte = $('#prixTeinteD').val();
	console.log("prixTeinteD:");
	console.log(prixteinte);

	var prixtraitement = $('#prixTraitementD').val();
	console.log("prixTraitementD:");
	console.log(prixtraitement);

	var tot;
	if(quantiteD != "")
	{
		tot = ( ((parseFloat(prixverre)
			+parseFloat(prixtraitement)
			+parseFloat(prixteinte)
			+addPrismeGalbeDroit()
		))*parseFloat(quantiteD)).toFixed(2);
	}
	else
	{
		tot =  (parseFloat(prixverre)+parseFloat(prixtraitement)+parseFloat(prixteinte)+addPrismeGalbeDroit()).toFixed(2);
	}
	console.log("tot:");
	console.log(tot);

	$('#prixD').val(tot+"€");
	$('#prixDH').val(tot+"€");

}

function calculPriceG() {
	var gauche = $('#gauche').is(':checked');
	if (!gauche) {
		$('#prixVerreG').val(0)
	}
	var quantiteG = $('#quantiteG').val();
	var prixverre = $('#prixVerreG').val();
	console.log("prixVerreG:");
	console.log(prixverre);

	var prixteinte = $('#prixTeinteG').val();
	console.log("prixTeinteG:");
	console.log(prixteinte);

	var prixtraitement = $('#prixTraitementG').val();
	console.log("prixTraitementG:");
	console.log(prixtraitement);

	var tot;
	if(quantiteD != "")
	{
		tot = ( ((parseFloat(prixverre)
			+parseFloat(prixtraitement)
			+parseFloat(prixteinte)
			+addPrismeGalbeGauche()
		))*parseFloat(quantiteG)).toFixed(2);
	}
	else
	{
		tot = (parseFloat(prixverre)+parseFloat(prixtraitement)+parseFloat(prixteinte)+addPrismeGalbeGauche()).toFixed(2);
	}
	console.log("tot:");
	console.log(tot);

	$('#prixG').val(tot+"€");
	$('#prixGH').val(tot+"€");

}