// JavaScript Document
var type_commande_verre = 0;

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

	$('.display_fabrication').addClass('hide')
	$('.pager .previous').removeClass('disabled');

$('input[name=epaisseur_bord_verre]').change(function() {
	$('#to_etape2').removeClass('disabled');
});

$( "#to_etape2" ).click(function() {
  $('#etape1').removeClass('active');
  $('#titre_etape1').removeClass('active');
  $('#etape1').removeClass('in');
  $('#to_etape1').removeClass('disabled');
  
  $('#etape2').addClass('active');
  $('#titre_etape2').addClass('active');
  $('#etape2').addClass('in');
  
 $('.pager .previous').removeClass('disabled');
  
});

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
});

$('#reference_client').keyup(function() {
 
    var nombreCaractere = $(this).val().length;
 	nombreCaractere = 14-nombreCaractere;
    var msg = ' '+ nombreCaractere + ' Caractères restants';
    $('#compeur_caracteres').text(msg);
    
    $('#caracteristique_verre').removeClass('hide');
    $('#div2_ref_client').removeClass('focus_panel');
    
  })

$('#commande_ferme').click(function(){ 
  
  $('#div1_ref_client').removeClass('hide');
  $('#div2_type_commande').removeClass('focus_panel');
  $('#to_etape2').addClass('disabled');
})

$('#casse_atelier').click(function(){ 
  
  $('#div1_ref_client').addClass('hide');
  $('#div2_type_commande').addClass('focus_panel');
})

$('#erreur_ophtalmologiste').click(function(){ 
  
  $('#div1_ref_client').addClass('hide');
  $('#div2_type_commande').addClass('focus_panel');
})



$('#indices').on('change', function() {

	$('#div_refraction').addClass('hide');
    $('#generation').val("").change();
    $('#lensFocalGroup').val("").change();
    $("#generation_progressif").css("display", "none");
    $('#precalibrage').addClass('hide');
  	$('#certif').addClass('hide');
    
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
  
  var droite = $('#droit').is(':checked');
	var gauche = $('#gauche').is(':checked');
	if(droite)
	{	
		$(".display_droit").css("display", "block");
		$("#sphereD").prop('disabled', false);
		$("#cylindreD").prop('disabled', false);
		$("#axeD").prop('disabled', false);
		$("#additionD").prop('disabled', false);
		
	/*	$("#sphereD").val('+0.00');
		$("#cylindreD").val('+0.00');
		$("#axeD").val('0');
		$("#additionD").val('+0.75');
	*/	
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
       
    }
  
});

$("#checkbox_prismes").click(function() {
   
    $('#precalibrage').addClass('hide');
  	$('#certif').addClass('hide');
  	
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
});
$('input[name=cylindreD]').focus(function() { 
    $('#produit').addClass('hide');
    $("#detailD").css("display", "none");
    $("#afficherV").css("display", "inline-block");
    $('#precalibrage').addClass('hide');
  	$('#certif').addClass('hide');
});
$('input[name=axeD]').focus(function() { 
    $('#produit').addClass('hide');
    $("#detailD").css("display", "none");
    $("#afficherV").css("display", "inline-block");
    $('#precalibrage').addClass('hide');
  	$('#certif').addClass('hide');
});
$('input[name=additionD]').focus(function() { 
    $('#produit').addClass('hide');
    $("#detailD").css("display", "none");
    $("#afficherV").css("display", "inline-block");
    $('#precalibrage').addClass('hide');
  	$('#certif').addClass('hide');
});
$('input[name=sphereG]').focus(function() { 
    $('#produit').addClass('hide');
    $("#detailD").css("display", "none");
    $("#afficherV").css("display", "inline-block");
    $('#precalibrage').addClass('hide');
  	$('#certif').addClass('hide');
});
$('input[name=cylindreG]').focus(function() { 
    $('#produit').addClass('hide');
    $("#detailD").css("display", "none");
    $("#afficherV").css("display", "inline-block");
    $('#precalibrage').addClass('hide');
  	$('#certif').addClass('hide');
});
$('input[name=axeG]').focus(function() { 
    $('#produit').addClass('hide');
    $("#detailD").css("display", "none");
    $("#afficherV").css("display", "inline-block");
    $('#precalibrage').addClass('hide');
  	$('#certif').addClass('hide');
});
$('input[name=additionG]').focus(function() { 
    $('#produit').addClass('hide');
    $("#detailD").css("display", "none");
    $("#afficherV").css("display", "inline-block");
    $('#precalibrage').addClass('hide');
  	$('#certif').addClass('hide');
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
    
    $('#type_de_verreG').empty();
    $('#type_de_verreG').append('<option value="">-- Choisir --</option>'); 
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
    
  
    $('#type_de_verreG').trigger('change');
   
     
	if(indiceId != "" && (cylindreD != '' || cylindreG != '')) {
	   getTypedeVerreG(indiceId,lensFocalGroup,generation,sphereD,sphereG,cylindreD,cylindreG,axeD,axeG,additionD,additionG,stockD,stockG,progressionD,progressionG,droite,gauche,panierA);
	   
	} 
});

$("input[name='dispoD']").change(function(){

	$('#precalibrage').addClass('hide');
  	$('#certif').addClass('hide');
  	
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
    
   // $('#type_de_verreD').trigger('change');
     
	if(indiceId != "" && (cylindreD != '' || cylindreG != '')) {
	   getTypedeVerre(indiceId,lensFocalGroup,generation,sphereD,sphereG,cylindreD,cylindreG,axeD,axeG,additionD,additionG,stockD,stockG,progressionD,progressionG,droite,gauche,panierA);
	   
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
		
		setTimeout(function(){
			copyVersDroit();

		},1000);
	}
     
	if(indiceId != "" && (cylindreD != '' || cylindreG != '')) {
	   getTypedeVerre(indiceId,lensFocalGroup,generation,sphereD,sphereG,cylindreD,cylindreG,axeD,axeG,additionD,additionG,stockD,stockG,progressionD,progressionG,droite,gauche,panierA);
	   
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
	   getTypedeVerre(indiceId,lensFocalGroup,generation,sphereD,sphereG,cylindreD,cylindreG,axeD,axeG,additionD,additionG,stockD,stockG,progressionD,progressionG,droite,gauche,panierA);
	   
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
    
    if(selectedText.indexOf("Panier") >= 0 || selectedTextG.indexOf("Panier") >= 0)
	{	
		panierA = 1;
		
		$('#text_titre_carte').html("«&nbsp;La carte d'authenticité est obligatoire pour des produits commandés en panier A&nbsp;»");
		$('input[name=carte_auth][value=1]').prop("checked",true);
	}
	else
	{
		panierA = 0;
		
		$('#text_titre_carte').html(" Je souhaite un certificat d'authenticité (Gratuit) ");
		$('input[name=carte_auth][value=0]').prop("checked",true);
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
			$('#quantiteD').prop('disabled', false);
			type_commande_verre = 2;
		
			if(selectedText.indexOf("Panier") >= 0 && selectedTextG.indexOf("Panier") == -1)
			{	
				$("#type_de_verreG option").filter(function(){
					cur_text = $(this).text().trim();
					return cur_text.indexOf('Panier') == -1;
				}).remove();
			
				panierA = 1;
			
				$('#type_de_verreG').trigger('change');	
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
			}
			else
			{
				var info_type_de_verreD = rel.split('*');
			
				var diametre_type_de_verreD = info_type_de_verreD[1].split(',');
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
		if(type_de_verreD != "") {
			
				if(selectedText.indexOf(" - Stock") >= 0)
				{
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
					
					if((selectedText.indexOf("Mineral") >= 0 && selectedText.indexOf("Photo") >= 0) || (selectedText.indexOf("Minéral") >= 0 && selectedText.indexOf("Photo") >= 0) || selectedText.indexOf("Panier") >= 0)
					{
						$('#traitementD').prop('disabled', true);
					}
					else
					{
						$('#traitementD').prop('disabled', false);
					}
					
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
				
					var k = "";
					$.ajax({
							type: "POST",
							url: "/index/getOptions",
							data: {"lens" : type_de_verreD},
							dataType: "json",
							success: function (data) {		
							console.log("DATA:");
							console.log(data);
							k = data;
						
							$.ajax({
								type: "POST",
								url: "/index/getOptions_price",
								data: {"tab_options" : k,
								"nom_du_verre" : selectedText
								},
								dataType: "json",
								success: function (data) {		
								
								
							//	$('#traitementD').append('<option value="0">Aucun</option>');
								$('#traitementD option:eq(0)').prop('selected', true);
								$('#traitementDH').val("Durci (0.00€)");
								/*data.sort(function(a, b) {
									var x = a.prix, y = b.prix;
									return x < y ? -1 : x > y ? 1 : 0;
								});*/

								$.each(data, function(key, value){
								
										if(value.name != "Express 24" && value.name != "Second pair")
											$('#traitementD').append('<option value="'+ value.code +'">' + decodeURIComponent(escape(value.trad_fr)) + ' ('+value.prix+'.00€)</option>');

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
							//console.log(data);
							c = data;
						
							$.ajax({
								type: "POST",
								url: "/index/getColors_price",
								data: {"tab_colors" : c,
								"nom_du_verre" : selectedText
								},
								dataType: "json",
								success: function (data) {	
							
								console.log(data);
								$('#teinteD').append('<option value="">Aucune</option>');
								$('#teinteD option:eq(0)').prop('selected', true);

							/*	data.sort(function(a, b) {
									var x = a.prix, y = b.prix;
									return x < y ? -1 : x > y ? 1 : 0;
								});*/

								$.each(data, function(key, value){
									$('#teinteD').append('<option value="'+ value.id +'">' + value.fr + ' ('+value.prix+'.00€)</option>');
						
								});
							
								}
						
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
							if(lensFocalGroup == "1" || lensFocalGroup == "6")
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
    	var nomverre = $("#type_de_verreD option:selected").html();
    	$('#divprixD').removeClass('hide');
    	var result = nomverre.match(/\((.*)\)/);
    	$('#prixD').val(result[1]);
    	$('#prixDH').val(result[1]);
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
	
	/*if(sphereD == sphereG && cylindreD==cylindreG && axeD==axeG && additionD==additionG  && progressionD==progressionG && stockD==stockG && droite && gauche && type_de_verreG=="")
	{
		//alert("copy")
		setTimeout(function(){
			copyVersDroit();

		},1000);
	}*/
	
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
    
    var selectedText = $("#type_de_verreG option:selected").html();
    var selectedTextD = $("#type_de_verreD option:selected").html();
    
    if(selectedText.indexOf("Panier") >= 0 || selectedTextD.indexOf("Panier") >= 0)
	{	
		panierA = 1;
		
		$('#text_titre_carte').html("«&nbsp;La carte d'authenticité est obligatoire pour des produits commandés en panier A&nbsp;»");
		$('input[name=carte_auth][value=1]').prop("checked",true);
	}
	else
	{
		panierA = 0;
		
		$('#text_titre_carte').html(" Je souhaite un certificat d'authenticité (Gratuit) ");
		$('input[name=carte_auth][value=0]').prop("checked",true);
		//$('#carte_auth_y').prop('checked', true);
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
    
    
    $('#teinteG').empty();
    $('#traitementG').empty();    
    
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
			
				$("#type_de_verreD option").filter(function(){
					cur_text = $(this).text().trim();
					return cur_text.indexOf('Panier') == -1;
				}).remove();
			
				panierA = 1;
			
				$('#type_de_verreD').trigger('change');	
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
			}
			else
			{
				var info_type_de_verreG = rel.split('*');
			
				var diametre_type_de_verreG = info_type_de_verreG[1].split(',');
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
					
					if((selectedText.indexOf("Mineral") >= 0 && selectedText.indexOf("Photo") >= 0) || (selectedText.indexOf("Minéral") >= 0 && selectedText.indexOf("Photo") >= 0) || selectedText.indexOf("Panier") >= 0)
					{
						$('#traitementG').prop('disabled', true);
					}
					else
					{
						$('#traitementG').prop('disabled', false);
					}
					
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
			
			
					var k = "";
					$.ajax({
							type: "POST",
							url: "/index/getOptions",
							data: {"lens" : type_de_verreG},
							dataType: "json",
							success: function (data) {		
							
							console.log(data);
							k = data;
						
							$.ajax({
								type: "POST",
								url: "/index/getOptions_price",
								data: {"tab_options" : k,
								"nom_du_verre" : selectedText
								},
								dataType: "json",
								success: function (data) {		
							
		//						$('#traitementG').append('<option value="0">Aucun</option>');
								$('#traitementG option:eq(0)').prop('selected', true);
								$('#traitementGH').val("Durci (0.00€)");
								/*data.sort(function(a, b) {
									var x = a.prix, y = b.prix;
									return x < y ? -1 : x > y ? 1 : 0;
								});*/

								$.each(data, function(key, value){
								
										if(value.name != "Express 24" && value.name != "Second pair")
											$('#traitementG').append('<option value="'+ value.code +'">' + decodeURIComponent(escape(value.trad_fr)) + ' ('+value.prix+'.00€)</option>');

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
						
							c = data;
						
							$.ajax({
								type: "POST",
								url: "/index/getColors_price",
								data: {"tab_colors" : c,
								"nom_du_verre" : selectedText
								},
								dataType: "json",
								success: function (data) {		
							
								$('#teinteG').append('<option value="">Aucune</option>');
								$('#teinteG option:eq(0)').prop('selected', true);

								/*data.sort(function(a, b) {
									var x = a.prix, y = b.prix;
									return x < y ? -1 : x > y ? 1 : 0;
								});*/

								$.each(data, function(key, value){
									$('#teinteG').append('<option value="'+ value.id +'">' + value.fr + ' ('+value.prix+'.00€)</option>');
						
								});
							
								}
						
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
							if(lensFocalGroup == "1" || lensFocalGroup == "6")
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
    	var nomverre = $("#type_de_verreG option:selected").html();
    	$('#divprixG').removeClass('hide');
    	var result = nomverre.match(/\((.*)\)/);
    	$('#prixG').val(result[1]);
    	$('#prixGH').val(result[1]);
    }
    else
    {
    	$('#divprixG').addClass('hide');
    	$('#prixG').val("");
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
		$('#to_etape2').addClass('disabled');
	}
}); 

$('#quantiteD').on('change', function() {
	
	if(type_commande_verre == 2)
	{
		var nomverre = $("#type_de_verreD option:selected").html();
		var result = nomverre.match(/\((.*)\)/);
		
		var prix = parseFloat(result[1].replace('€', ''));
	}
	else
	{
		var prix = parseFloat($('#prixD').val().replace('€', ''));
	}
	
	
	var qty = $('#quantiteD').val();
	var prixf = prix*qty;
	$('#prixD').val(prixf.toFixed(2)+'€');
	$('#prixDH').val(prixf.toFixed(2)+'€');	
	
	if(($("#type_de_verreD").val() == $("#type_de_verreG").val()) && (type_commande_verre == 2))
	{
		$('#quantiteG').val(qty);
		$('#quantiteG option[value="'+ qty +'"]').prop('selected', true);
		$('#prixG').val($('#prixD').val());
		$('#prixGH').val($('#prixDH').val());
	}
	
	copyVersDroit();
});

$('#quantiteG').on('change', function() {

	if(type_commande_verre == 2)
	{
		var nomverre = $("#type_de_verreG option:selected").html();
		var result = nomverre.match(/\((.*)\)/);
		
		var prix = parseFloat(result[1].replace('€', ''));
	}
	else
	{
		var prix = parseFloat($('#prixG').val().replace('€', ''));
	}
	
	var qty = $('#quantiteG').val();
	var prixf = prix*qty;
	$('#prixG').val(prixf.toFixed(2)+'€');
	$('#prixGH').val(prixf.toFixed(2)+'€');	
	
	if(($("#type_de_verreD").val() == $("#type_de_verreG").val()) && (type_commande_verre == 2))
	{
		$('#quantiteG').val(qty);
		$('#quantiteD option[value="'+ qty +'"]').prop('selected', true);
		$('#prixD').val($('#prixG').val());
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
			if(selectedTextG.indexOf(" - Stock") == -1 || $('#diametreG').val() == "")
			{
				$('#certif').addClass('hide');
				
			}
			if(selectedTextD.indexOf("Panier") >= 0 || selectedTextG.indexOf("Panier") >= 0)
			{
				$('#certif').removeClass('hide');
			}
		}
		else
		{
			$('#certif').removeClass('hide');
			
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
				
				$('.verres').show();
				$('.verres .options').show();
				
				$('.verres').find('.nom_verre').text(optionType_de_verreD.split('(')[0]);
				//$('.verres').find('.diam_verre').text(diametreD_text);
				$('.verres').find('.miroir').text(traitementD.split('(')[0]+" "+teinteD.split('(')[0]);
				
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
	
	copyVersDroit();
	
	if(diametreD=="precalibrage")
	{
		$('#to_etape2').addClass('disabled');
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
			if(selectedTextD.indexOf(" - Stock") == -1 || $('#diametreD').val() == "")
			{
				$('#certif').addClass('hide');
			}
			if(selectedTextG.indexOf("Panier") >= 0 || selectedTextD.indexOf("Panier") >= 0)
			{
				$('#certif').removeClass('hide');
			}
		}
		else
		{
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
				//$('.verres').find('.diam_verre').text(diametreG_text);
				$('.verres').find('.miroir').text(traitementG.split('(')[0]+" "+teinteG.split('(')[0]);
				
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
	
	if(diametreG=="precalibrage")
	{
		$('#to_etape2').addClass('disabled');
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
    
    var selectedText = $("#teinteD option:selected").html();
    
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
	}
	*/
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
			var prixverre = nomverre.match(/\((.*€)\)/);
			var prixteinte = nomteinte.match(/\((.*€)\)/);
			if(nomtraitement != "----" && nomtraitement != "Aucun")
			{
				var prixtraitement = nomtraitement.match(/\((.*€)\)/);
				var tot = parseFloat(prixverre[1])+parseFloat(prixteinte[1])+parseFloat(prixtraitement[1]);
				$('#prixD').val(tot+".00€");
				$('#prixDH').val(tot+".00€");
			}
			else
			{
				var tot = parseFloat(prixverre[1])+parseFloat(prixteinte[1]);
				$('#prixD').val(tot+".00€");
				$('#prixDH').val(tot+".00€");
			}
		}
		else
		{
			var nomverre = $("#type_de_verreD option:selected").html();
			var nomtraitement = $("#traitementD option:selected").html();
			$('#divprixD').removeClass('hide');
			var prixverre = nomverre.match(/\((.*€)\)/);
			if(nomtraitement != "----" && nomtraitement != "Aucun")
			{
				var prixtraitement = nomtraitement.match(/\((.*€)\)/);
				var tot = parseFloat(prixverre[1])+parseFloat(prixtraitement[1]);
				$('#prixD').val(tot+".00€");
				$('#prixDH').val(tot+".00€");
			}
			else
			{
				var tot = parseFloat(prixverre[1]);
				$('#prixD').val(tot+".00€");
				$('#prixDH').val(tot+".00€");
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
    copyVersDroit();
});


$('#teinteG').on('change', function() {
	var stockD = $('input[name="dispoD"]:checked').val()
	var teinteG = $(this).val();
    var type_de_verreG = $('#type_de_verreG').val();
    
    
    if(type_de_verreG != "")
    {
    	if(teinteG != "")
    	{
			var nomverre = $("#type_de_verreG option:selected").html();
			var nomteinte = $("#teinteG option:selected").html();
			var nomtraitement = $("#traitementG option:selected").html();
			$('#divprixG').removeClass('hide');
			var prixverre = nomverre.match(/\((.*€)\)/);
			var prixteinte = nomteinte.match(/\((.*€)\)/);
			if(nomtraitement != "----" && nomtraitement != "Aucun")
			{
				var prixtraitement = nomtraitement.match(/\((.*€)\)/);
				var tot = parseFloat(prixverre[1])+parseFloat(prixteinte[1])+parseFloat(prixtraitement[1]);
				$('#prixG').val(tot+".00€");
				$('#prixGH').val(tot+".00€");
			}
			else
			{
				var tot = parseFloat(prixverre[1])+parseFloat(prixteinte[1]);
				$('#prixG').val(tot+".00€");
				$('#prixGH').val(tot+".00€");
			}
		}
		else
		{
			var nomverre = $("#type_de_verreG option:selected").html();
			var nomtraitement = $("#traitementG option:selected").html();
			$('#divprixG').removeClass('hide');
			var prixverre = nomverre.match(/\((.*€)\)/);
			if(nomtraitement != "----" && nomtraitement != "Aucun")
			{
				var prixtraitement = nomtraitement.match(/\((.*€)\)/);
				var tot = parseFloat(prixverre[1])+parseFloat(prixtraitement[1]);
				$('#prixG').val(tot+".00€");
				$('#prixGH').val(tot+".00€");
			}
			else
			{
				var tot = parseFloat(prixverre[1]);
				$('#prixG').val(tot+".00€");
				$('#prixGH').val(tot+".00€");
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
	
/*	if(sphereD == sphereG && cylindreD==cylindreG && axeD==axeG && additionD==additionG  && progressionD==progressionG && stockD==stockG && droite && gauche && type_de_verreG==type_de_verreD && traitementD==traitementG && teinteD==teinteG && diametreD==diametreG && ((galbeG=="Standard" || galbeD==galbeG) && galbeD!="Standard"))
	{
		
		setTimeout(function(){
			copyVersDroit();

		},1000);
	}
	*/
	copyVersDroit();
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
    
    var progressionD = $('#progressionD').val();
    var progressionG = $('#progressionG').val();
    
    var diametreG = $('#diametreG').val();
  
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
			var prixverre = nomverre.match(/\((.*€)\)/);
			var prixtraitement = nomtraitement.match(/\((.*€)\)/);
			if(teinteD != "")
			{
				var prixteinte = nomteinte.match(/\((.*€)\)/);
				var tot = parseFloat(prixverre[1])+parseFloat(prixteinte[1])+parseFloat(prixtraitement[1]);
				$('#prixD').val(tot+".00€");
				$('#prixDH').val(tot+".00€");
			}
			else
			{
				var tot = parseFloat(prixverre[1])+parseFloat(prixtraitement[1]);
				$('#prixD').val(tot+".00€");
				$('#prixDH').val(tot+".00€");
			}
		}
		else
		{
			var nomverre = $("#type_de_verreD option:selected").html();
			var nomteinte = $("#teinteD option:selected").html();
			$('#divprixD').removeClass('hide');
			var prixverre = nomverre.match(/\((.*€)\)/);
			if(nomteinte != "----" && nomteinte != "Aucune")
			{
				var prixteinte = nomteinte.match(/\((.*€)\)/);
				var tot = parseFloat(prixverre[1])+parseFloat(prixteinte[1]);
				$('#prixD').val(tot+".00€");
				$('#prixDH').val(tot+".00€");
			}
			else
			{
				var tot = parseFloat(prixverre[1]);
				$('#prixD').val(tot+".00€");
				$('#prixDH').val(tot+".00€");
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
	copyVersDroit();
	
});

$('#traitementG').on('change', function() {
	var stockD = $('input[name="dispoG"]:checked').val()
	var traitementG = $(this).val();
    var type_de_verreG = $('#type_de_verreG').val();
    var teinteG = $('#teinteG').val();
    
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
    
    if(type_de_verreG != "")
    {
    	if(traitementG != "" && traitementG != "0")
    	{
			var nomverre = $("#type_de_verreG option:selected").html();
			var nomteinte = $("#teinteG option:selected").html();
			var nomtraitement = $("#traitementG option:selected").html();
			$('#divprixG').removeClass('hide');
			var prixverre = nomverre.match(/\((.*€)\)/);
			var prixtraitement = nomtraitement.match(/\((.*€)\)/);
			if(teinteG != "")
			{
				var prixteinte = nomteinte.match(/\((.*€)\)/);
				var tot = parseFloat(prixverre[1])+parseFloat(prixteinte[1])+parseFloat(prixtraitement[1]);
				$('#prixG').val(tot+".00€");
				$('#prixGH').val(tot+".00€");
			}
			else
			{
				var tot = parseFloat(prixverre[1])+parseFloat(prixtraitement[1]);
				$('#prixG').val(tot+".00€");
				$('#prixGH').val(tot+".00€");
			}
		}
		else
		{
			var nomverre = $("#type_de_verreG option:selected").html();
			var nomteinte = $("#teinteG option:selected").html();
			$('#divprixG').removeClass('hide');
			var prixverre = nomverre.match(/\((.*€)\)/);
			if(nomteinte != "----" && nomteinte != "Aucune")
			{
				var prixteinte = nomteinte.match(/\((.*€)\)/);
				var tot = parseFloat(prixverre[1])+parseFloat(prixteinte[1]);
				$('#prixG').val(tot+".00€");
				$('#prixGH').val(tot+".00€");
			}
			else
			{
				var tot = parseFloat(prixverre[1]);
				$('#prixG').val(tot+".00€");
				$('#prixGH').val(tot+".00€");
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
		$('#to_etape2').addClass('disabled');
	}
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
    
    $('#type_de_verreD').empty();
	$('#type_de_verreD').append('<option value="">-- Choisir --</option>');
	$('#type_de_verreD option:eq(0)').prop('selected', true);
    $('#type_de_verreD').val("");
    $('#type_de_verreD').trigger('change');
    
    $('#type_de_verreG').empty();
	$('#type_de_verreG').append('<option value="">-- Choisir --</option>');
	$('#type_de_verreG option:eq(0)').prop('selected', true);
    $('#type_de_verreG').val("");
    $('#type_de_verreG').trigger('change');
    
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
    	   	getTypedeVerre(indiceId,lensFocalGroup,generation,sphereD,sphereG,cylindreD,cylindreG,axeD,axeG,additionD,additionG,stockD,stockG,progressionD,progressionG,droite,gauche,panierA);
    	   
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
	$('#epaisseur_bord_verre').val('');
	
	
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



function getTypedeVerre(indiceId,lensFocalGroup,generation,sphereD,sphereG,cylindreD,cylindreG,axeD,axeG,additionD,additionG,stockD,stockG,progressionD,progressionG,droite,gauche,panierA)
{

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
		/*else
		{
			if (axeD.indexOf("+") >= 0)
			{
				axeD = axeD.replace('+', '');
			}
			else if (axeD.indexOf("-") >= 0)
			{
		
			}
			else
			{
				var new_axeD = "+"+axeD
				$("#axeD").val(new_axeD); 
			}
		}
		*/
	
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
	
	/*	if (String(axeD).indexOf("+") >= 0)
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
		}
	*/
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
			
			$('#type_de_verreD').empty();
			$('#type_de_verreD').append('<option value="" rel="">-- Choisir --</option>');
			$('#type_de_verreD').trigger('change');
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
						$.ajax({
							type: "POST",
							url: "/index/getStockTypeDeVerre",
							data: {"indiceId" : indiceId, "lensFocalGroup" : lensFocalGroup, "generation" : generation,"sphereD" : sphereD,"cylindreD" : cylindreD,"axeD" : axeD,"additionD" : additionD,"stockD" : stockD,"panierA" : panierA},
							dataType: "json",
							success: function (data) {	
							//alert(data);
							console.log(data);	
							$.each(data, function(key, value){
								$('#type_de_verreD').append('<option value="S26783" rel="]S26783">'+ value.name + ' (13&euro;)</option>');
							})
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
						data: {"indiceId" : indiceId, "lensFocalGroup" : lensFocalGroup, "generation" : generation,"sphereD" : sphereD,"cylindreD" : cylindreD,"axeD" : axeD,"additionD" : additionD,"stockD" : stockD,"panierA" : panierA},
						dataType: "json",
						beforeSend: function () {
							$(".loading").show();
						},
						success: function (data) {		
						console.log(data);	
						$.each(data, function(key, value){
					
						if(value.prix_perso != null)
						{
							value.prix = value.prix_perso;
						}
						
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
						
						if((progressionD == '' || progressionD == 'Tous') && lensFocalGroup == '3')
						{
							$('#type_de_verreD').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)</option>');
						}
						else if(progressionD == 'Regular' && lensFocalGroup == '3')
						{
							if ((value.name.indexOf(" R ") >= 0 || (value.name.indexOf("T-One 18 ") >= 0) || (value.name.indexOf("Panier A Initial 18 ") >= 0)))
							{
								$('#type_de_verreD').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)</option>');
							}
						}
						else if(progressionD == 'Short' && lensFocalGroup == '3')
						{
							if ((value.name.indexOf(" S ") >= 0 || (value.name.indexOf("T-One 17 ") >= 0) || (value.name.indexOf("Panier A Initial 17 ") >= 0)))
							{
								$('#type_de_verreD').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)</option>');
							}
						}
						else if(progressionD == 'Extra Short' && lensFocalGroup == '3')
						{
							if ((value.name.indexOf(" E ") >= 0 || (value.name.indexOf("T-One 16 ") >= 0) || (value.name.indexOf("Panier A Initial 16 ") >= 0)))
							{
								$('#type_de_verreD').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)</option>');
							}
						}
						else if(progressionD == 'Ultra Short' && lensFocalGroup == '3')
						{
							if ((value.name.indexOf(" U ") >= 0 || (value.name.indexOf("T-One 15 ") >= 0) || (value.name.indexOf("Panier A Initial 15 ") >= 0)))
							{
								$('#type_de_verreD').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)</option>');
							}
						}	
						else
						{
							if ((value.name.indexOf("-stock") >= 0) || (value.name.indexOf("-stock") >= 0) || (value.name.indexOf("- stock") >= 0) || (value.name.indexOf("-Stock") >= 0) )
							{
								$('#type_de_verreD').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' - Stock déporté ('+value.prix+'&euro;)</option>');
							}
							else
							{
								$('#type_de_verreD').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)</option>');
							}
						}
						});	
						$('#type_de_verreD').trigger('change');
						$(".loading").hide();
						}
					});
				}
			}
			else
			{
				var tab_verres_stock = {};
				var tab_verres = {};
				
			//	alert("indiceId:"+indiceId+" ,lensFocalGroup:"+lensFocalGroup+" ,generation:"+generation+" ,sphereD:"+sphereD+" ,sphereG:"+sphereG+" ,cylindreD:"+cylindreD+" ,cylindreG:"+cylindreG+" ,axeD:"+axeD+" ,axeG:"+axeG+" ,additionD:"+additionD+" ,additionG:"+additionG+" ,stockD:"+stockD+" ,stockG:"+stockG+" ,progressionD:"+progressionD+" ,progressionG:"+progressionG);
				if((indiceId == "1.5" || indiceId == "1.6" || indiceId == "1.59" || indiceId == "1.67") && (lensFocalGroup == "1") && (stockD == 'StockD' || stockD == 'ToutD'))
				{
					//alert("indiceId:"+indiceId+" ,lensFocalGroup:"+lensFocalGroup+" ,generation:"+generation+" ,sphereD:"+sphereD+" ,sphereG:"+sphereG+" ,cylindreD:"+cylindreD+" ,cylindreG:"+cylindreG+" ,axeD:"+axeD+" ,axeG:"+axeG+" ,additionD:"+additionD+" ,additionG:"+additionG+" ,stockD:"+stockD+" ,stockG:"+stockG+" ,progressionD:"+progressionD+" ,progressionG:"+progressionG);	
					$.ajax({
						type: "POST",
						url: "/index/getStockTypeDeVerre",
						data: {"indiceId" : indiceId, "lensFocalGroup" : lensFocalGroup, "generation" : generation,"sphereD" : sphereD,"cylindreD" : cylindreD,"axeD" : axeD,"additionD" : additionD,"stockD" : stockD,"panierA" : panierA},
						dataType: "json",
						async: false,
						success: function (data) {	
						//alert(data);
						console.log(data);	
						$.each(data, function(key, value){
							tab_verres_stock[value.sorting] = {};
							tab_verres_stock[value.sorting]['id'] = value.id_verre;
							tab_verres_stock[value.sorting]['code'] = ']'+ value.id_verre +'*'+value.diametre;
							tab_verres_stock[value.sorting]['name'] = value.name + ' - Stock ('+value.prix+'&euro;)';
							
							//$('#type_de_verreD').append('<option value="]'+ value.id_verre +'*'+value.diametre+'">'+ value.name + ' - Stock ('+value.prix+'&euro;)</option>');
						})
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
						data: {"indiceId" : indiceId, "lensFocalGroup" : lensFocalGroup, "generation" : generation,"sphereD" : sphereD,"cylindreD" : cylindreD,"axeD" : axeD,"additionD" : additionD,"stockD" : stockD,"panierA" : panierA},
						dataType: "json",
						async: false,
						beforeSend: function () {
							$(".loading").show();
						},
						success: function (data) {		
							console.log(data);	
							if(data != "0")
							{
								$.each(data, function(key, value){
					
								if(value.prix_perso != null)
								{
									value.prix = value.prix_perso;
								}
						
								if(value.trad_fr == "")
								{
									value.trad_fr = value.name;
								}
							
								if ((value.name.indexOf("-stock") >= 0) || (value.name.indexOf("-stock") >= 0) || (value.name.indexOf("- stock") >= 0) || (value.name.indexOf("-Stock") >= 0) )
								{
									//$('#type_de_verreD').append('<option value="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' - Stock déporté ('+value.prix+'&euro;)</option>');
									tab_verres_stock[value.sorting] = {};
									tab_verres_stock[value.sorting]['id'] = value.code;
									tab_verres_stock[value.sorting]['code'] = value.code;
									tab_verres_stock[value.sorting]['name'] = decodeURIComponent(unescape(value.trad_fr)) + ' - Stock déporté ('+value.prix+'&euro;)';							
								}
								else
								{
									//$('#type_de_verreD').append('<option value="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)</option>');
									tab_verres[value.sorting] = {};
									tab_verres[value.sorting]['id'] = value.code;
									tab_verres[value.sorting]['code'] = value.code;
									tab_verres[value.sorting]['name'] = decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)';	
								}
							
								});	
							}
						
						$(".loading").hide();
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
					$('#type_de_verreD').trigger('change');
				}
			}
				
			if(cylindreG != '-' && gauche)
			{
			
			$('#type_de_verreG').empty();
			$('#type_de_verreG').append('<option value="" rel="">-- Choisir --</option>');
			$('#type_de_verreG').trigger('change');
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
						$.ajax({
							type: "POST",
							url: "/index/getStockTypeDeVerre",
							data: {"indiceId" : indiceId, "lensFocalGroup" : lensFocalGroup, "generation" : generation,"sphereD" : sphereG,"cylindreD" : cylindreG,"axeD" : axeG,"additionD" : additionG,"stockD" : stockG,"panierA" : panierA},
							dataType: "json",
							success: function (data) {	
							//alert(data);
							//console.log(data);	
							$.each(data, function(key, value){
								$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+ value.name + ' (13&euro;)</option>');
							})
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
						data: {"indiceId" : indiceId, "lensFocalGroup" : lensFocalGroup, "generation" : generation,"sphereD" : sphereG,"cylindreD" : cylindreG,"axeD" : axeG,"additionD" : additionG,"stockD" : stockG,"panierA" : panierA},
						dataType: "json",
						beforeSend: function () {
							$(".loading").show();
						},
						success: function (data) {		
						console.log(data);	
						$.each(data, function(key, value){
					
						if(value.prix_perso != null)
						{
							value.prix = value.prix_perso;
						}
						
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
							$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)</option>');
						}
						else if(progressionG == 'Regular' && lensFocalGroup == '3')
						{
							if ((value.name.indexOf(" R ") >= 0 || (value.name.indexOf("T-One 18 ") >= 0) || (value.name.indexOf("Panier A Initial 18 ") >= 0)))
							{
								$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)</option>');
							}
						}
						else if(progressionG == 'Short' && lensFocalGroup == '3')
						{
							if ((value.name.indexOf(" S ") >= 0 || (value.name.indexOf("T-One 17 ") >= 0) || (value.name.indexOf("Panier A Initial 17 ") >= 0)))
							{
								$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)</option>');
							}
						}
						else if(progressionG == 'Extra Short' && lensFocalGroup == '3')
						{
							if ((value.name.indexOf(" E ") >= 0 || (value.name.indexOf("T-One 16 ") >= 0) || (value.name.indexOf("Panier A Initial 16 ") >= 0)))
							{
								$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)</option>');
							}
						}
						else if(progressionG == 'Ultra Short' && lensFocalGroup == '3')
						{
							if ((value.name.indexOf(" U ") >= 0 || (value.name.indexOf("T-One 15 ") >= 0) || (value.name.indexOf("Panier A Initial 15 ") >= 0)))
							{
								$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)</option>');
							}
						}	
						else
						{
							if ((value.name.indexOf("-stock") >= 0) || (value.name.indexOf("-stock") >= 0) || (value.name.indexOf("- stock") >= 0) || (value.name.indexOf("-Stock") >= 0) )
							{
								$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' - Stock déporté ('+value.prix+'&euro;)</option>');
							}
							else
							{
								$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)</option>');
							}
						}
						});	
						$('#type_de_verreG').trigger('change');
						$(".loading").hide();
						}
					});
				}
			}
			else
			{
				var tab_verres_stock = {};
				var tab_verres = {};
				
			//	alert("indiceId:"+indiceId+" ,lensFocalGroup:"+lensFocalGroup+" ,generation:"+generation+" ,sphereD:"+sphereD+" ,sphereG:"+sphereG+" ,cylindreD:"+cylindreD+" ,cylindreG:"+cylindreG+" ,axeD:"+axeD+" ,axeG:"+axeG+" ,additionD:"+additionD+" ,additionG:"+additionG+" ,stockD:"+stockD+" ,stockG:"+stockG+" ,progressionD:"+progressionD+" ,progressionG:"+progressionG);
				if((lensFocalGroup == "1") && (stockG == 'StockD' || stockG == 'ToutD'))
				{
					//alert("indiceId:"+indiceId+" ,lensFocalGroup:"+lensFocalGroup+" ,generation:"+generation+" ,sphereD:"+sphereD+" ,sphereG:"+sphereG+" ,cylindreD:"+cylindreD+" ,cylindreG:"+cylindreG+" ,axeD:"+axeD+" ,axeG:"+axeG+" ,additionD:"+additionD+" ,additionG:"+additionG+" ,stockD:"+stockD+" ,stockG:"+stockG+" ,progressionD:"+progressionD+" ,progressionG:"+progressionG);	
					$.ajax({
						type: "POST",
						url: "/index/getStockTypeDeVerre",
						data: {"indiceId" : indiceId, "lensFocalGroup" : lensFocalGroup, "generation" : generation,"sphereD" : sphereG,"cylindreD" : cylindreG,"axeD" : axeG,"additionD" : additionG,"stockD" : stockG,"panierA" : panierA},
						dataType: "json",
						async: false,
						success: function (data) {	
						//alert(data);
						console.log(data);	
						$.each(data, function(key, value){
							tab_verres_stock[value.sorting] = {};
							tab_verres_stock[value.sorting]['id'] = value.id_verre;
							tab_verres_stock[value.sorting]['code'] = ']'+ value.id_verre +'*'+value.diametre;
							tab_verres_stock[value.sorting]['name'] = value.name + ' - Stock ('+value.prix+'&euro;)';
							
							//$('#type_de_verreD').append('<option value="]'+ value.id_verre +'*'+value.diametre+'">'+ value.name + ' - Stock ('+value.prix+'&euro;)</option>');
						})
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
						data: {"indiceId" : indiceId, "lensFocalGroup" : lensFocalGroup, "generation" : generation,"sphereD" : sphereG,"cylindreD" : cylindreG,"axeD" : axeG,"additionD" : additionG,"stockD" : stockG,"panierA" : panierA},
						dataType: "json",
						async: false,
						beforeSend: function () {
							$(".loading").show();
						},
						success: function (data) {		
							console.log(data);	
							$.each(data, function(key, value){
					
							if(value.prix_perso != null)
							{
								value.prix = value.prix_perso;
							}
						
							if(value.trad_fr == "")
							{
								value.trad_fr = value.name;
							}
							
							if ((value.name.indexOf("-stock") >= 0) || (value.name.indexOf("-stock") >= 0) || (value.name.indexOf("- stock") >= 0) || (value.name.indexOf("-Stock") >= 0) )
							{
								//$('#type_de_verreD').append('<option value="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' - Stock déporté ('+value.prix+'&euro;)</option>');
								tab_verres_stock[value.sorting] = {};
								tab_verres_stock[value.sorting]['id'] = value.code;
								tab_verres_stock[value.sorting]['code'] = value.code;
								tab_verres_stock[value.sorting]['name'] = decodeURIComponent(unescape(value.trad_fr)) + ' - Stock déporté ('+value.prix+'&euro;)';							
							}
							else
							{
								//$('#type_de_verreD').append('<option value="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)</option>');
								tab_verres[value.sorting] = {};
								tab_verres[value.sorting]['id'] = value.code;
								tab_verres[value.sorting]['code'] = value.code;
								tab_verres[value.sorting]['name'] = decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)';	
							}
							
							});	
						
						$(".loading").hide();
						}
					});
					}
					
					$.each(tab_verres_stock, function(key, value){
							//console.log("Stock: "+key+" - "+value.code+" - "+value.name);
							$('#type_de_verreG').append('<option value="'+ value.id +'" rel="'+ value.code +'">'+value.name+'</option>');
					});
					
					$.each(tab_verres, function(key, value){
							//console.log(key+" - "+value);
							$('#type_de_verreG').append('<option value="'+ value.id +'" rel="'+ value.code +'">'+value.name+'</option>');
					});
					$('#type_de_verreG').trigger('change');
				}
			}
				
				
        }
}

function getTypedeVerreG(indiceId,lensFocalGroup,generation,sphereD,sphereG,cylindreD,cylindreG,axeD,axeG,additionD,additionG,stockD,stockG,progressionD,progressionG,droite,gauche,panierA)
{

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
			$('#type_de_verreG').trigger('change');
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
						$.ajax({
							type: "POST",
							url: "/index/getStockTypeDeVerre",
							data: {"indiceId" : indiceId, "lensFocalGroup" : lensFocalGroup, "generation" : generation,"sphereD" : sphereG,"cylindreD" : cylindreG,"axeD" : axeG,"additionD" : additionG,"stockD" : stockG,"panierA" : panierA},
							dataType: "json",
							success: function (data) {	
							//alert(data);
							//console.log(data);	
							$.each(data, function(key, value){
								$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+ value.name + ' (13&euro;)</option>');
							})
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
						data: {"indiceId" : indiceId, "lensFocalGroup" : lensFocalGroup, "generation" : generation,"sphereD" : sphereG,"cylindreD" : cylindreG,"axeD" : axeG,"additionD" : additionG,"stockD" : stockG,"panierA" : panierA},
						dataType: "json",
						beforeSend: function () {
							$(".loading").show();
						},
						success: function (data) {		
						console.log(data);	
						$.each(data, function(key, value){
					
						if(value.prix_perso != null)
						{
							value.prix = value.prix_perso;
						}
						
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
							$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)</option>');
						}
						else if(progressionG == 'Regular' && lensFocalGroup == '3')
						{
							if ((value.name.indexOf(" R ") >= 0 || (value.name.indexOf("T-One 18 ") >= 0) || (value.name.indexOf("Panier A Initial 18 ") >= 0)))
							{
								$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)</option>');
							}
						}
						else if(progressionG == 'Short' && lensFocalGroup == '3')
						{
							if ((value.name.indexOf(" S ") >= 0 || (value.name.indexOf("T-One 17 ") >= 0) || (value.name.indexOf("Panier A Initial 17 ") >= 0)))
							{
								$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)</option>');
							}
						}
						else if(progressionG == 'Extra Short' && lensFocalGroup == '3')
						{
							if ((value.name.indexOf(" E ") >= 0 || (value.name.indexOf("T-One 16 ") >= 0) || (value.name.indexOf("Panier A Initial 16 ") >= 0)))
							{
								$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)</option>');
							}
						}
						else if(progressionG == 'Ultra Short' && lensFocalGroup == '3')
						{
							if ((value.name.indexOf(" U ") >= 0 || (value.name.indexOf("T-One 15 ") >= 0) || (value.name.indexOf("Panier A Initial 15 ") >= 0)))
							{
								$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)</option>');
							}
						}	
						else
						{
							if ((value.name.indexOf("-stock") >= 0) || (value.name.indexOf("-stock") >= 0) || (value.name.indexOf("- stock") >= 0) || (value.name.indexOf("-Stock") >= 0) )
							{
								$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' - Stock déporté ('+value.prix+'&euro;)</option>');
							}
							else
							{
								$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)</option>');
							}
						}
						});	
						$('#type_de_verreG').trigger('change');
						$(".loading").hide();
						}
					});
				}
			}
			else
			{
				var tab_verres_stock = {};
				var tab_verres = {};
				
			//	alert("indiceId:"+indiceId+" ,lensFocalGroup:"+lensFocalGroup+" ,generation:"+generation+" ,sphereD:"+sphereD+" ,sphereG:"+sphereG+" ,cylindreD:"+cylindreD+" ,cylindreG:"+cylindreG+" ,axeD:"+axeD+" ,axeG:"+axeG+" ,additionD:"+additionD+" ,additionG:"+additionG+" ,stockD:"+stockD+" ,stockG:"+stockG+" ,progressionD:"+progressionD+" ,progressionG:"+progressionG);
				if((lensFocalGroup == "1") && (stockG == 'StockD' || stockG == 'ToutD'))
				{
					//alert("indiceId:"+indiceId+" ,lensFocalGroup:"+lensFocalGroup+" ,generation:"+generation+" ,sphereD:"+sphereD+" ,sphereG:"+sphereG+" ,cylindreD:"+cylindreD+" ,cylindreG:"+cylindreG+" ,axeD:"+axeD+" ,axeG:"+axeG+" ,additionD:"+additionD+" ,additionG:"+additionG+" ,stockD:"+stockD+" ,stockG:"+stockG+" ,progressionD:"+progressionD+" ,progressionG:"+progressionG);	
					$.ajax({
						type: "POST",
						url: "/index/getStockTypeDeVerre",
						data: {"indiceId" : indiceId, "lensFocalGroup" : lensFocalGroup, "generation" : generation,"sphereD" : sphereG,"cylindreD" : cylindreG,"axeD" : axeG,"additionD" : additionG,"stockD" : stockG,"panierA" : panierA},
						dataType: "json",
						async: false,
						success: function (data) {	
						//alert(data);
						console.log(data);	
						$.each(data, function(key, value){
							tab_verres_stock[value.sorting] = {};
							tab_verres_stock[value.sorting]['id'] = value.id_verre;
							tab_verres_stock[value.sorting]['code'] = ']'+ value.id_verre +'*'+value.diametre;
							tab_verres_stock[value.sorting]['name'] = value.name + ' - Stock ('+value.prix+'&euro;)';
							
							//$('#type_de_verreD').append('<option value="]'+ value.id_verre +'*'+value.diametre+'">'+ value.name + ' - Stock ('+value.prix+'&euro;)</option>');
						})
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
						data: {"indiceId" : indiceId, "lensFocalGroup" : lensFocalGroup, "generation" : generation,"sphereD" : sphereG,"cylindreD" : cylindreG,"axeD" : axeG,"additionD" : additionG,"stockD" : stockG,"panierA" : panierA},
						dataType: "json",
						async: false,
						beforeSend: function () {
							$(".loading").show();
						},
						success: function (data) {		
							console.log(data);	
							$.each(data, function(key, value){
					
							if(value.prix_perso != null)
							{
								value.prix = value.prix_perso;
							}
						
							if(value.trad_fr == "")
							{
								value.trad_fr = value.name;
							}
							
							if ((value.name.indexOf("-stock") >= 0) || (value.name.indexOf("-stock") >= 0) || (value.name.indexOf("- stock") >= 0) || (value.name.indexOf("-Stock") >= 0) )
							{
								//$('#type_de_verreD').append('<option value="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' - Stock déporté ('+value.prix+'&euro;)</option>');
								tab_verres_stock[value.sorting] = {};
								tab_verres_stock[value.sorting]['id'] = value.code;
								tab_verres_stock[value.sorting]['code'] = value.code;
								tab_verres_stock[value.sorting]['name'] = decodeURIComponent(unescape(value.trad_fr)) + ' - Stock déporté ('+value.prix+'&euro;)';							
							}
							else
							{
								//$('#type_de_verreD').append('<option value="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)</option>');
								tab_verres[value.sorting] = {};
								tab_verres[value.sorting]['id'] = value.code;
								tab_verres[value.sorting]['code'] = value.code;
								tab_verres[value.sorting]['name'] = decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)';	
							}
							
							});	
						
						$(".loading").hide();
						}
					});
					}
					
					$.each(tab_verres_stock, function(key, value){
							//console.log("Stock: "+key+" - "+value.code+" - "+value.name);
							$('#type_de_verreG').append('<option value="'+ value.id +'" rel="'+ value.code +'">'+value.name+'</option>');
					});
					
					$.each(tab_verres, function(key, value){
							//console.log(key+" - "+value);
							$('#type_de_verreG').append('<option value="'+ value.id +'" rel="'+ value.code +'">'+value.name+'</option>');
					});
					$('#type_de_verreG').trigger('change');
				}
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
	if(sphereD == sphereG && cylindreD==cylindreG && axeD==axeG && additionD==additionG && droite && gauche)
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
		$('#teinteD option').clone().appendTo('#teinteG');
		$('#traitementD option').clone().appendTo('#traitementG');
		$('#diametreD option').clone().appendTo('#diametreG');
		$('#galbeD option').clone().appendTo('#galbeG');
	
		$('#progressionG').val(progressionD);
		$('#type_de_verreG').val(type_de_verreD);
		$('#teinteG').val(teinteD);
		$('#traitementG').val(traitementD);
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
				
				$('#prixG').val($('#prixD').val());
				$('#prixGH').val($('#prixDH').val());
			
				$('#teinteGH').val($('#teinteDH').val());
				$('#traitementGH').val($('#traitementDH').val());

		},600);
	
		
		
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
					$('#teinteG option[value="'+ teinteD +'"]').prop('selected', true);
					if(traitementD!="")
						$('#traitementG option[value="'+ traitementD +'"]').prop('selected', true);
					if(galbeD!="")
						$('#galbeG option[value="'+ galbeD +'"]').prop('selected', true);
				
					if(quantiteD!="")
						$('#quantiteG option[value="'+ quantiteD +'"]').prop('selected', true);
						
					if(progressionD!="")
						$('#progressionG option[value="'+ progressionD +'"]').prop('selected', true);
				
					$('#prixG').val($('#prixD').val());
					$('#prixGH').val($('#prixDH').val());
			
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
				},500);
				
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
				getTypedeVerreG(indiceId,lensFocalGroup,generation,sphereD,sphereG,cylindreD,cylindreG,axeD,axeG,additionD,additionG,stockD,stockG,progressionD,progressionG,droite,gauche,panierA);
	    	},500);
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
	}
	else
	{
		if(diametreD != "")
		{
			$('#to_etape2').removeClass('disabled');
		}
	}
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
	
	
		$('#type_de_verreD').trigger('change');
	
		setTimeout(function(){
				if(progressionD!="")
					$('#progressionD option[value="'+ progressionG +'"]').prop('selected', true);
				if(type_de_verreG!="")
				{
					$('#type_de_verreD option[value="'+ type_de_verreG +'"]').prop('selected', true);
					$('#nomverreDH').val(selectedText);
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
				
				$('#prixD').val($('#prixG').val());
				$('#prixDH').val($('#prixGH').val());
			
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
			$('#to_etape2').addClass('disabled');
		}
		//alert(selectedText.indexOf(" - Stock"));
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
											//$('.verres').find('.diam_verre').text(diametreG_text);
											$('.verres').find('.miroir').text(traitementG.split('(')[0]+" "+couleur);
										
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
											$('.verres').find('.miroir').text(traitementD.split('(')[0]+" "+couleurD);
										
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
											$('#carteG .verres').find('.diam_verre').text(diametreG_text);
											$('#carteG .verres').find('.miroir').text(traitementG.split('(')[0]+" "+couleur);
										
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
											$('#carteD .verres').find('.diam_verre').text(diametreD_text);
											$('#carteD .verres').find('.miroir').text(traitementD.split('(')[0]+" "+couleurD);
										
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

		$('#commande_type').show();
		$('#typecommande').css('height','');
		if(precalibrage == 'oui'){
			$('#precalibrage_oui').show();
			$('#precalibrage_non').hide();
			$('input[name="diametre_verre"]').removeClass('required');
			$('#cotea,#coteb,#cotec,#coted,select[name="type_monture"],#epaisseur_bord_verre,#calibre_selected').addClass('required');
			$('.hauteur_pup input[type=text]').val('');
		} else{
			$('#precalibrage_oui').hide();
			$('#precalibrage_non').show();

			$('input[name="diametre_verre"]').addClass('required');
			$('#cotea,#coteb,#cotec,#coted,select[name="type_monture"],#epaisseur_bord_verre,#calibre_selected').removeClass('required');
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