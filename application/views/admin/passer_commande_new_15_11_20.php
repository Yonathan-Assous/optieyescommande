<?php
include_once('header.php');
include_once('menu.php');

$user_id = $user_info[0]->id_users;

if(!isset($panierA))
{
	$panierA = 0;
}

if($panierA == $user_id)
{
	$panierA = 1;
}

if(is_object($pair_order)) {
	$deuxiemepaire = 1;
}
else
{
	$deuxiemepaire = 0;
}

?>
<style>
.select2-container .select2-choice > .select2-chosen {
    white-space: break-spaces;
    height: auto;
}
</style>
<script>
var panierA = <?php if($panierA == 1) echo "1"; else echo "0";?>;

var deuxiemepaire = <?php if($deuxiemepaire == 1) echo "1"; else echo "0";?>;

function roundToNearest(numToRound, numToRoundTo) {
    numToRoundTo = 1 / (numToRoundTo);

    return (Math.round(numToRound * numToRoundTo) / numToRoundTo).toFixed(2);
}
// JavaScript Document
var type_commande_verre = 0;

$(document).ready(function($){

$(function(){
        $(document).on('click','input[type=text]',function(){ this.select(); });
        $(document).on('click','input[type=number]',function(){ this.select(); });
    });
    
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
	   getTypedeVerreG(indiceId,lensFocalGroup,generation,sphereD,sphereG,cylindreD,cylindreG,axeD,axeG,additionD,additionG,stockD,stockG,progressionD,progressionG,droite,gauche,panierA,deuxiemepaire);
	   
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
	   getTypedeVerre(indiceId,lensFocalGroup,generation,sphereD,sphereG,cylindreD,cylindreG,axeD,axeG,additionD,additionG,stockD,stockG,progressionD,progressionG,droite,gauche,panierA,deuxiemepaire);
	   
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
	   getTypedeVerre(indiceId,lensFocalGroup,generation,sphereD,sphereG,cylindreD,cylindreG,axeD,axeG,additionD,additionG,stockD,stockG,progressionD,progressionG,droite,gauche,panierA,deuxiemepaire);
	   
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
	   getTypedeVerre(indiceId,lensFocalGroup,generation,sphereD,sphereG,cylindreD,cylindreG,axeD,axeG,additionD,additionG,stockD,stockG,progressionD,progressionG,droite,gauche,panierA,deuxiemepaire);
	   
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
							url: "/admin/getOptions",
							data: {"lens" : type_de_verreD},
							dataType: "json",
							success: function (data) {		
							console.log("DATA:");
							console.log(data);
							k = data;
						
							$.ajax({
								type: "POST",
								url: "/admin/getOptions_price",
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
							url: "/admin/getColor",
							data: {"lens" : selectedText, "id_lens" : type_de_verreD},
							dataType: "json",
							success: function (data) {		
							//console.log(data);
							c = data;
						
							$.ajax({
								type: "POST",
								url: "/admin/getColors_price",
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
						url: "/admin/get_Diametre",
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
							url: "/admin/getOptions",
							data: {"lens" : type_de_verreG},
							dataType: "json",
							success: function (data) {		
							
							console.log(data);
							k = data;
						
							$.ajax({
								type: "POST",
								url: "/admin/getOptions_price",
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
							url: "/admin/getColor",
							data: {"lens" : selectedText, "id_lens" : type_de_verreG},
							dataType: "json",
							success: function (data) {		
						
							c = data;
						
							$.ajax({
								type: "POST",
								url: "/admin/getColors_price",
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
						url: "/admin/get_Diametre",
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
	console.log("quantiteD copyVersDroit");
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
	console.log("diametreD copyVersDroit");
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
    console.log("teinteD copyVersDroit");
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
	
/*	if(sphereD == sphereG && cylindreD==cylindreG && axeD==axeG && additionD==additionG  && progressionD==progressionG && stockD==stockG && droite && gauche && type_de_verreG==type_de_verreD && traitementD==traitementG && teinteD==teinteG && diametreD==diametreG && ((galbeG=="Standard" || galbeD==galbeG) && galbeD!="Standard"))
	{
		
		setTimeout(function(){
			copyVersDroit();

		},1000);
	}
	*/
	console.log("galbeD copyVersDroit");
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
	console.log("traitementD copyVersDroit");
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
    	   	getTypedeVerre(indiceId,lensFocalGroup,generation,sphereD,sphereG,cylindreD,cylindreG,axeD,axeG,additionD,additionG,stockD,stockG,progressionD,progressionG,droite,gauche,panierA,deuxiemepaire);
    	   
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



function getTypedeVerre(indiceId,lensFocalGroup,generation,sphereD,sphereG,cylindreD,cylindreG,axeD,axeG,additionD,additionG,stockD,stockG,progressionD,progressionG,droite,gauche,panierA,deuxiemepaire)
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
			
			$('#type_de_verreD').empty();
			$('#type_de_verreD').append('<option value="" rel="">-- Choisir --</option>');
			setTimeout(function(){
				console.log("getTypedeVerre Empty type_de_verreD");
				$('#type_de_verreD').trigger('change');
			},300);
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
							url: "/admin/getStockTypeDeVerre/<?php echo $user_info[0]->id_users;?>",
							data: {"indiceId" : indiceId, "lensFocalGroup" : lensFocalGroup, "generation" : generation,"sphereD" : sphereD,"cylindreD" : cylindreD,"axeD" : axeD,"additionD" : additionD,"stockD" : stockD,"panierA" : panierA},
							dataType: "json",
							success: function (data) {	
							//alert(data);
							if(data != "")
							{
								console.log(data);	
								$.each(data, function(key, value){
									$('#type_de_verreD').append('<option value="S26783" rel="]S26783">'+ value.name + ' (13&euro;)</option>');
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
						url: "/admin/getTypeDeVerre/<?php echo $user_info[0]->id_users;?>",
						data: {"indiceId" : indiceId, "lensFocalGroup" : lensFocalGroup, "generation" : generation,"sphereD" : sphereD,"cylindreD" : cylindreD,"axeD" : axeD,"additionD" : additionD,"stockD" : stockD,"panierA" : panierA},
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
						
							//alert("Name:"+value.name+" - progressionD:"+progressionD+" - lensFocalGroup:"+lensFocalGroup+" - deuxiemepaire:"+deuxiemepaire);
						
							if((progressionD == '' || progressionD == 'Tous') && lensFocalGroup == '3')
							{
								if((value.name.indexOf("Panier A ") >= 0) && deuxiemepaire == 0)
								{
									if(((parseFloat(cylindreD)+parseFloat(sphereD)) >= -2 && (parseFloat(cylindreD)+parseFloat(sphereD)) <= 2 && indiceId == "1.5") || ((parseFloat(cylindreD)+parseFloat(sphereD)) >= -4 && (parseFloat(cylindreD)+parseFloat(sphereD)) <= 4 && indiceId == "1.59") || ((parseFloat(cylindreD)+parseFloat(sphereD)) >= -4 && (parseFloat(cylindreD)+parseFloat(sphereD)) <= 4 && indiceId == "1.6") || ((parseFloat(cylindreD)+parseFloat(sphereD)) >= -8 && (parseFloat(cylindreD)+parseFloat(sphereD)) <= 8 && indiceId == "1.67") || (indiceId == "1.74") )
									{
										$('#type_de_verreD').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)</option>');
									}
								}
								else
								{
									$('#type_de_verreD').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)</option>');
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
											$('#type_de_verreD').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)</option>');
										}
									}
									else
									{
										$('#type_de_verreD').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)</option>');
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
											$('#type_de_verreD').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)</option>');
										}
									}
									else
									{
										$('#type_de_verreD').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)</option>');
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
											$('#type_de_verreD').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)</option>');
										}
									}
									else
									{
										$('#type_de_verreD').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)</option>');
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
											$('#type_de_verreD').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)</option>');
										}
									}
									else
									{
										$('#type_de_verreD').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)</option>');
									}
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
									if((value.name.indexOf("Panier A ") >= 0) && deuxiemepaire == 0)
									{
										if(((parseFloat(cylindreD)+parseFloat(sphereD)) >= -2 && (parseFloat(cylindreD)+parseFloat(sphereD)) <= 2 && indiceId == "1.5") || ((parseFloat(cylindreD)+parseFloat(sphereD)) >= -4 && (parseFloat(cylindreD)+parseFloat(sphereD)) <= 4 && indiceId == "1.59") || ((parseFloat(cylindreD)+parseFloat(sphereD)) >= -4 && (parseFloat(cylindreD)+parseFloat(sphereD)) <= 4 && indiceId == "1.6") || ((parseFloat(cylindreD)+parseFloat(sphereD)) >= -8 && (parseFloat(cylindreD)+parseFloat(sphereD)) <= 8 && indiceId == "1.67") || (indiceId == "1.74") )
										{
											$('#type_de_verreD').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)</option>');
										}
									}
									else
									{
										$('#type_de_verreD').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)</option>');
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
				
			//	alert("indiceId:"+indiceId+" ,lensFocalGroup:"+lensFocalGroup+" ,generation:"+generation+" ,sphereD:"+sphereD+" ,sphereG:"+sphereG+" ,cylindreD:"+cylindreD+" ,cylindreG:"+cylindreG+" ,axeD:"+axeD+" ,axeG:"+axeG+" ,additionD:"+additionD+" ,additionG:"+additionG+" ,stockD:"+stockD+" ,stockG:"+stockG+" ,progressionD:"+progressionD+" ,progressionG:"+progressionG);
				if((indiceId == "1.5" || indiceId == "1.6" || indiceId == "1.59" || indiceId == "1.67") && (lensFocalGroup == "1") && (stockD == 'StockD' || stockD == 'ToutD'))
				{
					//alert("indiceId:"+indiceId+" ,lensFocalGroup:"+lensFocalGroup+" ,generation:"+generation+" ,sphereD:"+sphereD+" ,sphereG:"+sphereG+" ,cylindreD:"+cylindreD+" ,cylindreG:"+cylindreG+" ,axeD:"+axeD+" ,axeG:"+axeG+" ,additionD:"+additionD+" ,additionG:"+additionG+" ,stockD:"+stockD+" ,stockG:"+stockG+" ,progressionD:"+progressionD+" ,progressionG:"+progressionG);	
					$.ajax({
						type: "POST",
						url: "/admin/getStockTypeDeVerre/<?php echo $user_info[0]->id_users;?>",
						data: {"indiceId" : indiceId, "lensFocalGroup" : lensFocalGroup, "generation" : generation,"sphereD" : sphereD,"cylindreD" : cylindreD,"axeD" : axeD,"additionD" : additionD,"stockD" : stockD,"panierA" : panierA},
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
										tab_verres_stock[value.sorting]['name'] = value.name + ' - Stock ('+value.prix+'&euro;)';
									}
								}
								else
								{
									tab_verres_stock[value.sorting] = {};
									tab_verres_stock[value.sorting]['id'] = value.id_verre;
									tab_verres_stock[value.sorting]['code'] = ']'+ value.id_verre +'*'+value.diametre;
									tab_verres_stock[value.sorting]['name'] = value.name + ' - Stock ('+value.prix+'&euro;)';
								}
							
								//$('#type_de_verreD').append('<option value="]'+ value.id_verre +'*'+value.diametre+'">'+ value.name + ' - Stock ('+value.prix+'&euro;)</option>');
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
						url: "/admin/getTypeDeVerre/<?php echo $user_info[0]->id_users;?>",
						data: {"indiceId" : indiceId, "lensFocalGroup" : lensFocalGroup, "generation" : generation,"sphereD" : sphereD,"cylindreD" : cylindreD,"axeD" : axeD,"additionD" : additionD,"stockD" : stockD,"panierA" : panierA},
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
					
								if(value.prix_perso != null)
								{
									value.prix = value.prix_perso;
								}
						
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
										//$('#type_de_verreD').append('<option value="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' - Stock déporté ('+value.prix+'&euro;)</option>');
										tab_verres_stock[value.sorting] = {};
										tab_verres_stock[value.sorting]['id'] = value.code;
										tab_verres_stock[value.sorting]['code'] = value.code;
										tab_verres_stock[value.sorting]['name'] = decodeURIComponent(unescape(value.trad_fr)) + ' - Stock déporté ('+value.prix+'&euro;)';							
									}
									else
									{
										//$('#type_de_verreD').append('<option value="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)</option>');
									
										if((value.name.indexOf("Panier A ") >= 0))
										{
									
											if(((parseFloat(cylindreD)+parseFloat(sphereD)) >= -2 && (parseFloat(cylindreD)+parseFloat(sphereD)) <= 2 && indiceId == "1.5") || ((parseFloat(cylindreD)+parseFloat(sphereD)) >= -4 && (parseFloat(cylindreD)+parseFloat(sphereD)) <= 4 && indiceId == "1.59") || ((parseFloat(cylindreD)+parseFloat(sphereD)) >= -4 && (parseFloat(cylindreD)+parseFloat(sphereD)) <= 4 && indiceId == "1.6") || ((parseFloat(cylindreD)+parseFloat(sphereD)) >= -8 && (parseFloat(cylindreD)+parseFloat(sphereD)) <= 8 && indiceId == "1.67") || (indiceId == "1.74") )
											{
												tab_verres[value.sorting] = {};
												tab_verres[value.sorting]['id'] = value.code;
												tab_verres[value.sorting]['code'] = value.code;
												tab_verres[value.sorting]['name'] = decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)';
											}
										}
										else
										{
											tab_verres[value.sorting] = {};
											tab_verres[value.sorting]['id'] = value.code;
											tab_verres[value.sorting]['code'] = value.code;
											tab_verres[value.sorting]['name'] = decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)';
										}
										
									}
								}
								});	
							}
						
						//$(".loading").hide();
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
			}
				
			if(cylindreG != '-' && gauche)
			{
			
			$('#type_de_verreG').empty();
			$('#type_de_verreG').append('<option value="" rel="">-- Choisir --</option>');
			setTimeout(function(){
				$('#type_de_verreG').trigger('change');
			},300);
			
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
							url: "/admin/getStockTypeDeVerre/<?php echo $user_info[0]->id_users;?>",
							data: {"indiceId" : indiceId, "lensFocalGroup" : lensFocalGroup, "generation" : generation,"sphereD" : sphereG,"cylindreD" : cylindreG,"axeD" : axeG,"additionD" : additionG,"stockD" : stockG,"panierA" : panierA},
							dataType: "json",
							success: function (data) {	
							//alert(data);
							//console.log(data);	
							if(data != "")
							{
								$.each(data, function(key, value){
									$('#type_de_verreG').append('<option value="S26783" rel="]S26783">'+ value.name + ' (13&euro;)</option>');
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
						url: "/admin/getTypeDeVerre/<?php echo $user_info[0]->id_users;?>",
						data: {"indiceId" : indiceId, "lensFocalGroup" : lensFocalGroup, "generation" : generation,"sphereD" : sphereG,"cylindreD" : cylindreG,"axeD" : axeG,"additionD" : additionG,"stockD" : stockG,"panierA" : panierA},
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
								if((value.name.indexOf("Panier A ") >= 0) && deuxiemepaire == 0)
								{
									if(((parseFloat(cylindreG)+parseFloat(sphereG)) >= -2 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 2 && indiceId == "1.5") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -4 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 4 && indiceId == "1.59") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -4 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 4 && indiceId == "1.6") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -8 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 8 && indiceId == "1.67") || (indiceId == "1.74") )
									{
										$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)</option>');
										console.log(value.trad_fr);
									}
								}
								else
								{
									$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)</option>');								
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
											$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)</option>');
										}
									}
									else
									{
										$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)</option>');
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
											$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)</option>');
										}
									}
									else
									{
										$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)</option>');
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
											$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)</option>');
										}
									}
									else
									{
										$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)</option>');
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
											$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)</option>');
										}
									}
									else
									{
										$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)</option>');
									}
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
									if((value.name.indexOf("Panier A ") >= 0) && deuxiemepaire == 0)
									{
										if(((parseFloat(cylindreG)+parseFloat(sphereG)) >= -2 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 2 && indiceId == "1.5") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -4 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 4 && indiceId == "1.59") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -4 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 4 && indiceId == "1.6") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -8 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 8 && indiceId == "1.67") || (indiceId == "1.74") )
										{
											$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)</option>');
										}
									}
									else
									{
										$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)</option>');
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
				
			//	alert("indiceId:"+indiceId+" ,lensFocalGroup:"+lensFocalGroup+" ,generation:"+generation+" ,sphereD:"+sphereD+" ,sphereG:"+sphereG+" ,cylindreD:"+cylindreD+" ,cylindreG:"+cylindreG+" ,axeD:"+axeD+" ,axeG:"+axeG+" ,additionD:"+additionD+" ,additionG:"+additionG+" ,stockD:"+stockD+" ,stockG:"+stockG+" ,progressionD:"+progressionD+" ,progressionG:"+progressionG);
				if((lensFocalGroup == "1") && (stockG == 'StockD' || stockG == 'ToutD'))
				{
					//alert("indiceId:"+indiceId+" ,lensFocalGroup:"+lensFocalGroup+" ,generation:"+generation+" ,sphereD:"+sphereD+" ,sphereG:"+sphereG+" ,cylindreD:"+cylindreD+" ,cylindreG:"+cylindreG+" ,axeD:"+axeD+" ,axeG:"+axeG+" ,additionD:"+additionD+" ,additionG:"+additionG+" ,stockD:"+stockD+" ,stockG:"+stockG+" ,progressionD:"+progressionD+" ,progressionG:"+progressionG);	
					$.ajax({
						type: "POST",
						url: "/admin/getStockTypeDeVerre/<?php echo $user_info[0]->id_users;?>",
						data: {"indiceId" : indiceId, "lensFocalGroup" : lensFocalGroup, "generation" : generation,"sphereD" : sphereG,"cylindreD" : cylindreG,"axeD" : axeG,"additionD" : additionG,"stockD" : stockG,"panierA" : panierA},
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
											tab_verres_stockG[value.sorting]['name'] = value.name + ' - Stock ('+value.prix+'&euro;)';
										}
									}
									else
									{
										tab_verres_stockG[value.sorting] = {};
										tab_verres_stockG[value.sorting]['id'] = value.id_verre;
										tab_verres_stockG[value.sorting]['code'] = ']'+ value.id_verre +'*'+value.diametre;
										tab_verres_stockG[value.sorting]['name'] = value.name + ' - Stock ('+value.prix+'&euro;)';
									}
									
								}
							
								//$('#type_de_verreD').append('<option value="]'+ value.id_verre +'*'+value.diametre+'">'+ value.name + ' - Stock ('+value.prix+'&euro;)</option>');
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
						url: "/admin/getTypeDeVerre/<?php echo $user_info[0]->id_users;?>",
						data: {"indiceId" : indiceId, "lensFocalGroup" : lensFocalGroup, "generation" : generation,"sphereD" : sphereG,"cylindreD" : cylindreG,"axeD" : axeG,"additionD" : additionG,"stockD" : stockG,"panierA" : panierA},
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
					
							if(value.prix_perso != null)
							{
								value.prix = value.prix_perso;
							}
						
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
									//$('#type_de_verreD').append('<option value="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' - Stock déporté ('+value.prix+'&euro;)</option>');
									tab_verres_stockG[value.sorting] = {};
									tab_verres_stockG[value.sorting]['id'] = value.code;
									tab_verres_stockG[value.sorting]['code'] = value.code;
									tab_verres_stockG[value.sorting]['name'] = decodeURIComponent(unescape(value.trad_fr)) + ' - Stock déporté ('+value.prix+'&euro;)';							
								}
								else
								{
									//$('#type_de_verreD').append('<option value="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)</option>');
									if((value.name.indexOf("Panier A ") >= 0) && deuxiemepaire == 0)
									{
										if(((parseFloat(cylindreG)+parseFloat(sphereG)) >= -2 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 2 && indiceId == "1.5") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -4 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 4 && indiceId == "1.59") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -4 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 4 && indiceId == "1.6") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -8 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 8 && indiceId == "1.67") || (indiceId == "1.74") )
										{
											tab_verresG[value.sorting] = {};
											tab_verresG[value.sorting]['id'] = value.code;
											tab_verresG[value.sorting]['code'] = value.code;
											tab_verresG[value.sorting]['name'] = decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)';
										}
									}
									else
									{
										tab_verresG[value.sorting] = {};
										tab_verresG[value.sorting]['id'] = value.code;
										tab_verresG[value.sorting]['code'] = value.code;
										tab_verresG[value.sorting]['name'] = decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)';
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

function getTypedeVerreG(indiceId,lensFocalGroup,generation,sphereD,sphereG,cylindreD,cylindreG,axeD,axeG,additionD,additionG,stockD,stockG,progressionD,progressionG,droite,gauche,panierA,deuxiemepaire)
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
			setTimeout(function(){
				$('#type_de_verreG').trigger('change');
			},300);
			
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
							url: "/admin/getStockTypeDeVerre/<?php echo $user_info[0]->id_users;?>",
							data: {"indiceId" : indiceId, "lensFocalGroup" : lensFocalGroup, "generation" : generation,"sphereD" : sphereG,"cylindreD" : cylindreG,"axeD" : axeG,"additionD" : additionG,"stockD" : stockG,"panierA" : panierA},
							dataType: "json",
							success: function (data) {	
							//alert(data);
							//console.log(data);	
							if(data != "")
							{
								$.each(data, function(key, value){
									$('#type_de_verreG').append('<option value="S26783" rel="]S26783">'+ value.name + ' (13&euro;)</option>');
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
						url: "/admin/getTypeDeVerre/<?php echo $user_info[0]->id_users;?>",
						data: {"indiceId" : indiceId, "lensFocalGroup" : lensFocalGroup, "generation" : generation,"sphereD" : sphereG,"cylindreD" : cylindreG,"axeD" : axeG,"additionD" : additionG,"stockD" : stockG,"panierA" : panierA},
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
								if((value.name.indexOf("Panier A ") >= 0) && deuxiemepaire == 0)
								{
									if(((parseFloat(cylindreG)+parseFloat(sphereG)) >= -2 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 2 && indiceId == "1.5") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -4 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 4 && indiceId == "1.59") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -4 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 4 && indiceId == "1.6") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -8 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 8 && indiceId == "1.67") || (indiceId == "1.74") )
									{
										$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)</option>');
										console.log(value.trad_fr);
									}
								}
								else
								{
									$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)</option>');								
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
											$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)</option>');
										}
									}
									else
									{
										$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)</option>');
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
											$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)</option>');
										}
									}
									else
									{
										$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)</option>');
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
											$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)</option>');
										}
									}
									else
									{
										$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)</option>');
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
											$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)</option>');
										}
									}
									else
									{
										$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)</option>');
									}
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
									if((value.name.indexOf("Panier A ") >= 0) && deuxiemepaire == 0)
									{
										if(((parseFloat(cylindreG)+parseFloat(sphereG)) >= -2 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 2 && indiceId == "1.5") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -4 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 4 && indiceId == "1.59") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -4 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 4 && indiceId == "1.6") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -8 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 8 && indiceId == "1.67") || (indiceId == "1.74") )
										{
											$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)</option>');
										}
									}
									else
									{
										$('#type_de_verreG').append('<option value="'+ value.code +'" rel="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)</option>');
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
				
			//	alert("indiceId:"+indiceId+" ,lensFocalGroup:"+lensFocalGroup+" ,generation:"+generation+" ,sphereD:"+sphereD+" ,sphereG:"+sphereG+" ,cylindreD:"+cylindreD+" ,cylindreG:"+cylindreG+" ,axeD:"+axeD+" ,axeG:"+axeG+" ,additionD:"+additionD+" ,additionG:"+additionG+" ,stockD:"+stockD+" ,stockG:"+stockG+" ,progressionD:"+progressionD+" ,progressionG:"+progressionG);
				if((lensFocalGroup == "1") && (stockG == 'StockD' || stockG == 'ToutD'))
				{
					//alert("indiceId:"+indiceId+" ,lensFocalGroup:"+lensFocalGroup+" ,generation:"+generation+" ,sphereD:"+sphereD+" ,sphereG:"+sphereG+" ,cylindreD:"+cylindreD+" ,cylindreG:"+cylindreG+" ,axeD:"+axeD+" ,axeG:"+axeG+" ,additionD:"+additionD+" ,additionG:"+additionG+" ,stockD:"+stockD+" ,stockG:"+stockG+" ,progressionD:"+progressionD+" ,progressionG:"+progressionG);	
					$.ajax({
						type: "POST",
						url: "/admin/getStockTypeDeVerre/<?php echo $user_info[0]->id_users;?>",
						data: {"indiceId" : indiceId, "lensFocalGroup" : lensFocalGroup, "generation" : generation,"sphereD" : sphereG,"cylindreD" : cylindreG,"axeD" : axeG,"additionD" : additionG,"stockD" : stockG,"panierA" : panierA},
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
											tab_verres_stockG[value.sorting]['name'] = value.name + ' - Stock ('+value.prix+'&euro;)';
										}
									}
									else
									{
										tab_verres_stockG[value.sorting] = {};
										tab_verres_stockG[value.sorting]['id'] = value.id_verre;
										tab_verres_stockG[value.sorting]['code'] = ']'+ value.id_verre +'*'+value.diametre;
										tab_verres_stockG[value.sorting]['name'] = value.name + ' - Stock ('+value.prix+'&euro;)';
									}
									
								}
							
								//$('#type_de_verreD').append('<option value="]'+ value.id_verre +'*'+value.diametre+'">'+ value.name + ' - Stock ('+value.prix+'&euro;)</option>');
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
						url: "/admin/getTypeDeVerre/<?php echo $user_info[0]->id_users;?>",
						data: {"indiceId" : indiceId, "lensFocalGroup" : lensFocalGroup, "generation" : generation,"sphereD" : sphereG,"cylindreD" : cylindreG,"axeD" : axeG,"additionD" : additionG,"stockD" : stockG,"panierA" : panierA},
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
					
							if(value.prix_perso != null)
							{
								value.prix = value.prix_perso;
							}
						
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
									//$('#type_de_verreD').append('<option value="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' - Stock déporté ('+value.prix+'&euro;)</option>');
									tab_verres_stockG[value.sorting] = {};
									tab_verres_stockG[value.sorting]['id'] = value.code;
									tab_verres_stockG[value.sorting]['code'] = value.code;
									tab_verres_stockG[value.sorting]['name'] = decodeURIComponent(unescape(value.trad_fr)) + ' - Stock déporté ('+value.prix+'&euro;)';							
								}
								else
								{
									//$('#type_de_verreD').append('<option value="'+ value.code +'">'+  decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)</option>');
									if((value.name.indexOf("Panier A ") >= 0) && deuxiemepaire == 0)
									{
										if(((parseFloat(cylindreG)+parseFloat(sphereG)) >= -2 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 2 && indiceId == "1.5") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -4 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 4 && indiceId == "1.59") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -4 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 4 && indiceId == "1.6") || ((parseFloat(cylindreG)+parseFloat(sphereG)) >= -8 && (parseFloat(cylindreG)+parseFloat(sphereG)) <= 8 && indiceId == "1.67") || (indiceId == "1.74") )
										{
											tab_verresG[value.sorting] = {};
											tab_verresG[value.sorting]['id'] = value.code;
											tab_verresG[value.sorting]['code'] = value.code;
											tab_verresG[value.sorting]['name'] = decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)';
										}
									}
									else
									{
										tab_verresG[value.sorting] = {};
										tab_verresG[value.sorting]['id'] = value.code;
										tab_verresG[value.sorting]['code'] = value.code;
										tab_verresG[value.sorting]['name'] = decodeURIComponent(unescape(value.trad_fr)) + ' ('+value.prix+'&euro;)';
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
				getTypedeVerreG(indiceId,lensFocalGroup,generation,sphereD,sphereG,cylindreD,cylindreG,axeD,axeG,additionD,additionG,stockD,stockG,progressionD,progressionG,droite,gauche,panierA,deuxiemepaire);
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
	$('select[name="civilite_client"]').on('change', function() {
	
	if(panierA == 1)
	{
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
</script>
	<div class="content-page">
		<!-- Start content -->
		<div class="content">
			<div class="container">

				<div class="row">
					<div class="col-sm-12 m-b-10">
						<h4 class="page-title">Passer une commande  pour le magasin  <?php echo $user_info[0]->id_users; 
							if($panierA == 1)
								echo " - Panier A";
						?></h4><?php
					if(is_object($pair_order)) {
						$pair_order_correction = json_decode($pair_order->information_commande, true);
						if($pair_order->generation == "T-One")
						{
							$pair_order->trad_fr = str_replace("E-Space","T-One",$pair_order->trad_fr);
						}
						echo '<strong class="pair-title">Deuxième paire pour la commande de '.$pair_order->trad_fr.' référence "'.$pair_order->reference_client.'"</strong>';
					}?>
					</div>
					  <div class="page-content container-fluid">
        <form id="commandeForm" class="form-edit-add form-commande" role="form"
              action=""
              method="POST" enctype="multipart/form-data" autocomplete="off">
           
              <div class="row">
                <div class="col-md-12">
					<div id="stepswizard" class="pull-in">
						<ul class="nav nav-tabs navtab-wizard nav-justified bg-muted display_stock">
							<li class="active" id="titre_etape1"><a href="#" data-toggle="tab" aria-expanded="true"><span>Etape 1 <b>/ 2</b></span><br>
<i>Commande Verres</i></a></li>
							<li id="titre_etape2"><a href="#" data-toggle="tab" aria-expanded="true"><span>Etape 2 <b>/ 2</b></span><br>
<i>Récapitulatif</i></a></li>
						</ul>
						<div class="tab-content m-b-0 b-0">
							<div class="tab-pane m-t-10 fade active in" id="etape1">
								<div class="tab-content">
								  <div id="commande" class="tab-pane fade in active">
									  <div>
										  <div class="panel panel-bordered">
												<div class="panel-body">
														<div class="form-group row" id="div1_type_commande">
															<div class="col-m-12">
															<div class="panel panel-default focus_panel" id="div2_type_commande">
																<div class="panel-heading"><h5 >Type de commande</h5></div>
																<div class="panel-body" style="padding-top: 15px">
																	<div class="col-lg-10 card-tabs">
																			<ul class="nav nav-pills type_commande_verre">
																				<li><a href="#" data-toggle="tab" aria-expanded="true" id="commande_ferme">Commande ferme</a>
																				</li>
																				<?php
																			if($panierA!=1)
																			{?>
																				<li><a href="#" data-toggle="tab" aria-expanded="false" id="casse_atelier">Casse atelier</a>
																				</li>
																				<li><a href="#" data-toggle="tab" aria-expanded="false" id="erreur_ophtalmologiste">Erreur ophtalmologiste</a>
																				</li>
																			<?php
																			}
																			?>
																			</ul>
																			<div class="ec_commande_status" style="display: none;">
																				<div class="alert alert-warning" style="margin-bottom: 0px;">Votre crédit : <b>417.78 €</b></div>
																			</div>

																			<div class="validator"></div>
																	</div>
																</div>
															</div>
														  </div>
												         </div>
												         <div class="form-group row ancienne_commande_ref" >
														  <div class="col-m-12">
															<div class="panel panel-default focus_panel">
															  <div class="panel-heading"><h5 >Référence commande remplacée</h5></div>
																<div class="panel-body" style="padding-top: 15px">
																	<div class="commandes_list">
																				<select name="ancienne_commande" id="stock_ancienne_commande" class="form-control select-search">
																					<option>Sélectionner</option>
																					<?php echo $id_commandes; ?>
																				</select>
																	</div>
																	<div class="validator"></div>
																</div>
															</div>
														  </div>
												         </div>
														<div class="form-group row <?php if(!is_object($pair_order) && $panierA!=1) echo 'hide';?>" id="div1_ref_client">
															<div class="col-m-12">
															<div class="panel panel-default focus_panel" id="div2_ref_client">
																<div class="panel-heading"><h5 >Référence client</h5></div>
																<div class="panel-body" style="padding-top: 15px">
																	<div style="height: 41px; width: 100%; border: 1px solid #dcdcdc;border-radius: 4px; padding: 8px 10px 0px 10px;">
																	<input type="text" maxlength="14" id="reference_client" name="reference_client" style="border:none;width: 300px;"
																	<?php if(is_object($pair_order)) {
																		echo 'value="'.$pair_order->reference_client.'" readonly';
																	}else
																	{
																		if(isset($refPanierA))
																		{
																			echo 'value="'.$refPanierA.'"';
																		}
																		else
																		{
																	?>
																	value=""
																	<?php
																		}
																	}?>
																	>
																	<span id="compeur_caracteres" style="float: right;">14 Caractères restants</span>
																	</div>
																</div>
															</div>
														  </div>
												         </div>
														<div class="form-group row <?php if(!is_object($pair_order) && $panierA!=1) echo 'hide';?>" id="caracteristique_verre">
														  <div class="col-xs-12 col-md-3">
															  <div class="panel panel-default">
																  <div class="panel-heading "><h5 >Format</h5></div>
																  <div class="panel-body text-center" style="padding-top: 25px;padding-bottom: 26px;">
																	  		<div class="radio radio-warning radio-inline">
																				<input type="radio" id="Standard" value="Standard" name="format" class="required" aria-required="true" checked>
																				<label for="Standard"> Standard </label>
																			</div>

																			<div class="radio radio-warning radio-inline">
																				<input type="radio" id="Teledetourage" value="Teledetourage" name="format" class="required" aria-required="true">
																				<label for="Teledetourage"> Teledetourage </label>

																			</div>
																	  </div>
															  </div>
														  </div>	
														  
														  <div class="col-xs-12 col-md-3">
															<div class="panel panel-default focus_panel" id="indices_panel">
																  <div class="panel-heading"><h5 >Indice</h5></div>
																<div class="panel-body" style="padding-top: 15px">
																	<select class="form-control" id="indices" name="indices">
																		<option value="">-- Choisir --</option>
																		<option value="1.5">1.5</option>
																		<option value="1.53">1.53 Trivex</option>
																		<option value="1.56">1.56</option>
																		<option value="1.59">1.591 Polycarbonate</option>
																		<option value="1.6">1.6</option>
																		<option value="1.67">1.67</option>
																		<option value="1.74">1.74</option>
																		<option value="mineral">Minéral</option>
																	</select></div>
															  </div>
														  </div>
														  <div class="col-xs-12 col-md-3 hide" id="type_produit">
															<div class="panel panel-default" id="lensFocalGroup_panel">
																  <div class="panel-heading"><h5 >Type de produit</h5></div>
																  <div class="panel-body" style="padding-top: 15px"><select class="form-control" id="lensFocalGroup" name="lensFocalGroup">
																	<option value="">-- Choisir --</option>
																	<?php
																	if(is_object($pair_order))
																	{
																		if($pair_order->id_generation_verre == 31)
																		{
																			echo '<option value="1">Unifocal</option>
																				  <option value="6">EyeFatigue</option>';
																		}
																		elseif($pair_order->id_generation_verre == 32 || $pair_order->id_generation_verre == 33 || $pair_order->id_generation_verre == 35)
																		{
																			echo '<option value="2">Bifocal</option>
																					<option value="3">Progressif</option>
																					<option value="4">Dégressif</option>
																					<option value="5">Trifocal</option>';
																		}
																		elseif($pair_order->id_generation_verre == 34)
																		{
																			echo '<option value="4">Dégressif</option>';
																		}
																	
																	}
																	else
																	{
																	?>
																	<option value="1">Unifocal</option>
																	<option value="3">Progressif</option>
																	<option value="4">Dégressif</option>
																	<option value="6">EyeFatigue</option>
																	<option value="2">Bifocal</option>
																	<option value="5">Trifocal</option>
																	
																	<?php
																	}?>
																</select></div>
															  </div>
														  </div>
														  <div class="col-xs-12 col-md-3 hide" id="generation_progressif">
															<div class="panel panel-default" id="generation_panel">
																  <div class="panel-heading"><h5 >Génération</h5></div>
																  <div class="panel-body" style="padding-top: 15px"><select class="form-control" name="generation" id="generation">
																	    <option value="">-- Choisir --</option>
																	    <?php if($panierA != 1)
																	    { ?>
																	    <option value="T-One">T-One</option>
																		<option value="E-Space">E-Space</option>
																		<option value="Platinium">Platinium</option>
																		<option value="Omega">Omega</option>
																		<option value="Elysium">Elysium</option>
																		<?php
																		if(!is_object($pair_order)) { ?>
																		<option value="Progressif de stock">Progressif de stock</option>
																		<?php } ?>
																		<?php } 
																		if(!is_object($pair_order)) { ?>
																		<option value="Panier A Initial" <?php if($panierA == 1) echo "selected";?>>Panier A Initial</option>
																		<?php } ?>
																	</select></div>
															  </div>
														  </div>
														</div>	

														<div class="form-group row hide" id="div_refraction">
														  <div class="col-xs-12" id="tab_refraction">
															  <div class="panel panel-default" id="refraction_panel">
																<div class="panel-heading"><h5 >Refraction</h5></div>
																<div class="panel-body" style="padding-top: 15px">
																	<div class="col-xs-12">
																		 <div class="form-group row">
																				
																				<div class="col-xs-12 col-md-2"></div>
																				<div class="col-xs-12 col-md-2 text-center" style="margin-right: 20px;"><strong>Sphere</strong></div>
																				<div class="col-xs-12 col-md-2 text-center" style="margin-right: 20px;"><strong>Cylindre</strong></div>
																				<div class="col-xs-12 col-md-2 text-center" style="margin-right: 20px;"><strong>Axe</strong></div>
																				<div class="col-xs-12 col-md-2 text-center addition" style="margin-right: 20px;"><strong>Addition</strong></div>
																		 </div>
																		 <div class="form-group row">
																				
																				<div class="col-xs-12 col-md-2">
																					<input type="checkbox" class="jsswitch droit" data-color="#64bd63" id="droit" name="droit" value="droit" style="float:right" checked> <strong>Oeil Droit</strong> 
																				</div>
																				<div class="col-xs-12 col-md-2" style="margin-right: 20px;"><input type="text" class="form-control" name="sphereD" id="sphereD" value="+0.00"></div>
																				<div class="col-xs-12 col-md-2" style="margin-right: 20px;"><input type="text" class="form-control" name="cylindreD" id="cylindreD" value="+0.00"></div>
																				<div class="col-xs-12 col-md-2" style="margin-right: 20px;"><input type="number" class="form-control" name="axeD" id="axeD" value='0' min='0' max="360"></div>
																				<div class="col-xs-12 col-md-2"><input type="text" class="form-control" name="additionD" id="additionD" value="+0.75"></div>
																		 </div>
																		 <div class="form-group row">
																				
																				<div class="col-xs-12 col-md-2">
																					<input type="checkbox" class="jsswitch gauche" data-color="#64bd63" id="gauche" name="gauche" value="gauche" style="float:right" checked> <strong>Oeil Gauche</strong> 
																				</div>
																				<div class="col-xs-12 col-md-2" style="margin-right: 20px;"><input type="text" class="form-control" name="sphereG" id="sphereG" value="+0.00"></div>
																				<div class="col-xs-12 col-md-2" style="margin-right: 20px;"><input type="text" class="form-control" name="cylindreG" id="cylindreG" value="+0.00"></div>
																				<div class="col-xs-12 col-md-2" style="margin-right: 20px;"><input type="number" class="form-control" name="axeG" id="axeG" value='0' min='0' max="360"></div>
																				<div class="col-xs-12 col-md-2"><input type="text" class="form-control" name="additionG" id="additionG" value="+0.75"></div>
																		 </div>
																	</div>
																  </div>
															  </div>
															</div>
															<br>
															<div class="btn btn-warning btn-lg waves-effect waves-light" style="margin-left: 15px;float: left;" id="afficherV">Afficher les verres</div>
														  </div>
													    

														<div class="form-group row hide" id="produit">
														  <div class="col-xs-12">
															  <div class="panel panel-default">
																<div class="panel-heading"><h5 >Produit</h5></div>
																<div class="panel-body " style="padding-top: 15px">
																	
																	<div class="form-group row" > 
																	  <div class="col-xs-12 col-md-6 ">
																		  <div class="panel panel-default display_droit">
																			<div class="panel-heading"><h5 >Droit <div class="btn btn-warning" style="float:right; cursor:hand;margin-top: -9px;max-width: 100%; white-space: normal;" id="VersGauche"><strong>Copier sur le gauche >></strong></div></h5></div>
																			<div class="panel-body" style="padding-top: 15px">
																				<div class="form-group row" style="height: 28px;">
																					<div class="col-xs-12 col-md-3">Disponibilité</div>
																					<div class="col-xs-12 col-md-9">
																						<div class="radio radio-warning radio-inline">
																							<input type="radio" value="ToutD" id="ToutD" name="dispoD" aria-required="true" checked>
																							<label for="ToutD"> Tout </label>
																						</div>
																					
																						<div class="radio radio-warning radio-inline" style="margin-left: 20px;">
																							<input type="radio" value="StockD" id="StockD" name="dispoD" aria-required="true">
																							<label for="StockD"> Stock </label>
																						</div>

																						<div class="radio radio-warning radio-inline" style="margin-left: 6px;">
																							<input type="radio" value="FabricationD" id="FabricationD" name="dispoD" aria-required="true">
																							<label for="FabricationD"> Fabrication </label>
																						</div>
																					</div>
																				</div>
																				<div class="form-group row"  id="progression_D">
																					<div class="col-xs-12 col-md-3">Progression</div>
																					<div class="col-xs-12 col-md-9"><select class="form-control" id="progressionD" name="progressionD">
																						<option value="">-- Choisir --</option>
																						<option value="Tous">Toutes</option>
																						<option value="Ultra Short">Tres courte</option>
																						<option value="Extra Short">Courte</option>
																						<option value="Short">Moyenne</option>
																						<option value="Regular">Longue</option>
																						</select>
																					</div>
																				</div>
																				<div id="detailD">
																				<div class="form-group row">
																					<div class="col-xs-12 col-md-3">Type de verre</div>
																					<div class="col-xs-12 col-md-9"><select class="form-control select-search" id="type_de_verreD" name="type_de_verreD">
																						<option value="">-- Choisir --</option>
																						</select>
																					</div>
																				</div>
																				<div class="form-group row">
																					<div class="col-xs-12 col-md-3">Teinte</div>
																					<div class="col-xs-12 col-md-9"><select class="form-control " id="teinteD" name="teinteD" disabled>
																						<option value="">-- Choisir --</option>
																						</select>
																						<div>
																							<input type="text" value="" class="form-control hide" name="teintepersoD" id="teintepersoD" placeholder="Décrivez votre couleur personnalisée">
																						</div>
																					</div>
																				</div>
																				<div class="form-group row">
																					<div class="col-xs-12 col-md-3">Traitement</div>
																					<div class="col-xs-12 col-md-9"><select class="form-control " id="traitementD" name="traitementD" disabled>
																						<option value="">-- Choisir --</option>
																						</select>
																					</div>
																				</div>
																				<div class="form-group row">
																					<div class="col-xs-12 col-md-3">Diamètre</div>
																					<div class="col-xs-12 col-md-9"><select class="form-control " id="diametreD" name="diametreD">
																						<option value="">-- Choisir --</option>
																						</select>
																					</div>
																				</div>
																				<div class="form-group row">
																					<div class="col-xs-12 col-md-3">Prisme</div>
																					<div class="col-xs-12 col-md-9"><input type="number" lang="en" step="0.5" min="0.5" max="7" placeholder="Dioptries (aucune)" class="form-control" id="PrismeSphereD" name="PrismeSphereD" style=" width: 49%; float: left; margin-right: 2%;" disabled><input type="number" step="1" min="0" max="360"  placeholder="Base (aucune)" class="form-control" id="PrismeCylindreD" name="PrismeCylindreD"  style=" width: 49%; float: left;" disabled>
																					</div>
																				</div>
																				<div class="form-group row">
																					<div class="col-xs-12 col-md-3">Galbe</div>
																					<div class="col-xs-12 col-md-9"><select class="form-control" id="galbeD" name="galbeD" disabled>
																						<option value="Standard">Standard</option>
																						<option value="2">2</option>
																						<option value="2.5">2.5</option>
																						<option value="3">3</option>
																						<option value="3.5">3.5</option>
																						<option value="4">4</option>
																						<option value="4.5">4.5</option>
																						<option value="5">5</option>
																						<option value="5.5">5.5</option>
																						<option value="6">6</option>
																						<option value="6.5">6.5</option>
																						<option value="7">7</option>
																						<option value="7.5">7.5</option>
																						<option value="8">8</option>
																						</select></div>
																				</div>
																				<div class="form-group row hide" id="divquantiteD">
																					<div class="col-xs-12 col-md-3">Quantité</div>
																					<div class="col-xs-12 col-md-9"><select class="form-control" id="quantiteD" name="quantiteD" disabled>
																						<option value="1" selected>1</option>
																						<option value="2">2</option>
																						<option value="3">3</option>
																						<option value="4">4</option>
																						<option value="5">5</option>
																						<option value="6">6</option>
																						<option value="7">7</option>
																						<option value="8">8</option>
																						<option value="9">9</option>
																						<option value="10">10</option>
																						</select>
																					</div>
																				</div>
																				<div class="form-group row hide" id="divprixD">
																					<div class="col-xs-12 col-md-3"><b>Prix</b></div>
																					<div class="col-xs-12 col-md-9"><input type="text" style="text-align: right;" value="" class="form-control" id="prixD" name="prixD" disabled>
																					</div>
																				</div>
																			</div>
																			</div>
																		  </div>
																	  </div>
																	  <div class="col-xs-12 col-md-6" >
																		  <div class="panel panel-default display_gauche">
																			<div class="panel-heading"><h5 style="height: 16px;" ><div class="btn btn-warning" style="float: left;width: 188px;cursor:hand;margin-top: -9px;max-width: 100%; white-space: normal;" id="VersDroit"><strong><< Copier sur le droit</strong></div><span style="float:right">Gauche</span></h5></div>
																			<div class="panel-body" style="padding-top: 15px">
																				<div class="form-group row" style="height: 28px;">
																					<div class="col-xs-12 col-md-3">Disponibilité</div>
																					<div class="col-xs-12 col-md-9">
																						<div class="radio radio-warning radio-inline">
																							<input type="radio" value="ToutG" id="ToutG" name="dispoG" aria-required="true" checked>
																							<label for="ToutG"> Tout </label>
																						</div>

																						<div class="radio radio-warning radio-inline" style="margin-left: 20px;">
																							<input type="radio" value="StockG" id="StockG" name="dispoG" aria-required="true">
																							<label for="StockG"> Stock </label>
																						</div>

																						<div class="radio radio-warning radio-inline" style="margin-left: 6px;">
																							<input type="radio" value="FabricationG" id="FabricationG" name="dispoG" aria-required="true">
																							<label for="FabricationG"> Fabrication </label>
																						</div>
																					</div>
																				</div>
																				<div class="form-group row" id="progression_G">
																					<div class="col-xs-12 col-md-3">Progression</div>
																					<div class="col-xs-12 col-md-9"><select class="form-control" id="progressionG" name="progressionG">
																						<option value="">-- Choisir --</option>
																						<option value="Tous">Toutes</option>
																						<option value="Ultra Short">Tres courte</option>
																						<option value="Extra Short">Courte</option>
																						<option value="Short">Moyenne</option>
																						<option value="Regular">Longue</option>
																						</select>
																					</div>
																				</div>
																				<div id="detailG">
																				<div class="form-group row">
																					<div class="col-xs-12 col-md-3">Type de verre</div>
																					<div class="col-xs-12 col-md-9"><select class="form-control select-search" id="type_de_verreG" name="type_de_verreG">
																						<option value="">-- Choisir --</option>
																						</select>
																					</div>
																				</div>
																				<div class="form-group row">
																					<div class="col-xs-12 col-md-3">Teinte</div>
																					<div class="col-xs-12 col-md-9"><select class="form-control " name="teinteG" id="teinteG" disabled>
																						<option value="">-- Choisir --</option>
																						</select>
																						<div>
																							<input type="text" value="" class="form-control hide" name="teintepersoG" id="teintepersoG" placeholder="Décrivez votre couleur personnalisée">
																						</div>
																					</div>
																				</div>
																				<div class="form-group row">
																					<div class="col-xs-12 col-md-3">Traitement</div>
																					<div class="col-xs-12 col-md-9"><select class="form-control " name="traitementG" id="traitementG" disabled>
																						<option value="">-- Choisir --</option>
																						</select>
																					</div>
																				</div>
																				<div class="form-group row">
																					<div class="col-xs-12 col-md-3">Diamètre</div>
																					<div class="col-xs-12 col-md-9"><select class="form-control " id="diametreG" name="diametreG">
																						<option value="">-- Choisir --</option>
																						</select>
																					</div>
																				</div>
																				<div class="form-group row">
																					<div class="col-xs-12 col-md-3">Prisme</div>
																					<div class="col-xs-12 col-md-9"><input type="number" lang="en" step="0.5" min="0.5" max="7" placeholder="Dioptries (aucune)" class="form-control" id="PrismeSphereG" name="PrismeSphereG" style=" width: 49%; float: left; margin-right: 2%;" disabled><input type="number" step="1" min="0" max="360"  placeholder="Base (aucune)" class="form-control" id="PrismeCylindreG" name="PrismeCylindreG"  style=" width: 49%; float: left;" disabled>
																					</div>
																				</div>
																				<div class="form-group row">
																					<div class="col-xs-12 col-md-3">Galbe</div>
																					<div class="col-xs-12 col-md-9"><select class="form-control" id="galbeG" name="galbeG" disabled>
																						<option value="Standard">Standard</option>
																						<option value="2">2</option>
																						<option value="2.5">2.5</option>
																						<option value="3">3</option>
																						<option value="3.5">3.5</option>
																						<option value="4">4</option>
																						<option value="4.5">4.5</option>
																						<option value="5">5</option>
																						<option value="5.5">5.5</option>
																						<option value="6">6</option>
																						<option value="6.5">6.5</option>
																						<option value="7">7</option>
																						<option value="7.5">7.5</option>
																						<option value="8">8</option>
																						</select></div>
																				</div>
																				<div class="form-group row hide" id="divquantiteG">
																					<div class="col-xs-12 col-md-3">Quantité</div>
																					<div class="col-xs-12 col-md-9"><select class="form-control" id="quantiteG" name="quantiteG" disabled>
																						<option value="1" selected>1</option>
																						<option value="2">2</option>
																						<option value="3">3</option>
																						<option value="4">4</option>
																						<option value="5">5</option>
																						<option value="6">6</option>
																						<option value="7">7</option>
																						<option value="8">8</option>
																						<option value="9">9</option>
																						<option value="10">10</option>
																						</select>
																					</div>
																				</div>
																				<div class="form-group row hide" id="divprixG">
																					<div class="col-xs-12 col-md-3"><b>Prix</b></div>
																					<div class="col-xs-12 col-md-9"><input type="text" style="text-align: right;" value="" class="form-control" id="prixG" name="prixG" disabled>
																					</div>
																				</div>
																			</div>
																			</div>
																		  </div>
																	  </div>
																	</div>
																</div>
															</div>
														 </div>
													   </div>			
													    <div class="form-group row hide" id="precalibrage">
													    	<div class="col-xs-12">
															  <div class="panel panel-default">
																<div class="panel-heading"><h5 >Précalibrage</h5></div>
																<div class="panel-body " style="padding-top: 15px">
																	<div id="precalibrage_oui">

																			<div class="form-group clearfix">

																				<div class="group-title" id="click_calibre"><span>Cliquez sur le calibre qui correspond le plus à votre commande.</span></div>
																				
																				<div class="col-lg-8 col-lg-offset-2 col-sm-12" id="mini_calibres">

																					<?php
																					$directory = $this->config->item('directory_img_calibre');
																					if ($handle = opendir($directory)) {

																						while (false !== ($image = readdir($handle))) {
																							if(is_file($directory."/".$image)){

																								list($img,$extension) = explode(".",$image);
																								if(false === strpos($img,'calibre')) {
																									echo '<img src="' . $pre_url . $directory . "/" . $image . '" alt="' . $img . '" id="img_' . $img . '" onclick="show_pic('. $img .')" height="70" style="margin:15px" class="calibre"/>';
																								}
																							}
																						}

																						echo '<div class="validator"></div>';


																						closedir($handle);
																					}
																					?>

																				</div>
																				<input type="text" value="" id="calibre_selected"  name="calibre" class="form-control required" />
																			</div>
																			<div class="group-title col-sm-3" id="back_calibre" style="display:none;border: none;"><div class="btn btn-warning">Revenir a la selection des calibres.</div></div>
																			<div class="group-title col-sm-9" id="big_img" style="text-align: center;background-color: #FFF;margin-top: 0; display:none">
																			</div>

																			<div class="group-title"><span><b>Mesures FREEFORM.</b> Toutes les mesures ci-dessous doivent être remplies en millimètre.</span></div>



																			<div class="form-group clearfix col-lg-2 col-sm-2 col-xs-12">
																				<label class=" control-label" for="cotea">
																					<div class="col-xs-12" style="height:77px">
																						<img src="/static/img/mesure_freeform/cote_a.jpg" alt="Largeur boxing" />
																					</div>
																					<div class="col-xs-12">
																						<small>Largeur boxing</small>
																					</div>
																				</label>
																				<div class="col-xs-12">
																					<input id="cotea" name="cotea" type="text" class="form-control required" pattern="[0-9]+([\.,][0-9]+)?" required>
																					<div class="validator"></div>
																				</div>
																			</div>

																			<div class="form-group clearfix col-lg-2 col-sm-2 col-xs-12">
																				<label class="control-label" for="coteb">
																					<div class="col-xs-12" style="height:77px">
																						<img src="/static/img/mesure_freeform/cote_b.jpg" alt="Hauteur boxing" />
																					</div>
																					<div class="col-xs-12">
																						<small>Hauteur boxing</small>
																					</div>
																				</label>
																				<div class="col-xs-12">
																					<input id="coteb" name="coteb" type="text" class="form-control required"  pattern="[0-9]+([\.,][0-9]+)?" required>
																					<div class="validator"></div>
																				</div>
																			</div>

																			<div class="form-group clearfix col-lg-2 col-sm-2 col-xs-12">
																				<label class="control-label" for="cotec">
																					<div class="col-xs-12" style="height:77px">
																						<img src="/static/img/mesure_freeform/cote_c.jpg" alt="Taille du pont" />
																					</div>
																					<div class="col-xs-12">
																						<small>Taille du pont</small>
																					</div>
																				</label>
																				<div class="col-xs-12">
																					<input id="cotec" name="cotec" type="text" class="form-control required"  pattern="[0-9]+([\.,][0-9]+)?" required>
																					<div class="validator"></div>
																				</div>
																			</div>

																			<div class="form-group clearfix col-lg-2 col-sm-2 col-xs-12 hide">
																				<label class="control-label" for="coted">
																					<img src="/static/img/mesure_freeform/cote_d.jpg" alt="Digonale verre en mm" />
																					<small>Digonale verre en mm</small>
																				</label>
																				<br>
																					<input id="coted" name="coted" type="text" class="form-control required"  pattern="[0-9]+([\.,][0-9]+)?" required>
																					<div class="validator"></div>
																			</div>


																			<div class="form-group clearfix col-lg-2 col-sm-2 col-xs-12" style="margin-top: 80px;">
																				<label class=" control-label col-xs-12" for="type_monture"><small>Type de monture</small></label>
																					<select name="type_monture" class="form-control required col-xs-12" required>
																						<option value="">Sélectionner un type</option>
																						<option value="Plastique">Plastique</option>
																						<option value="Optyl">Optyl</option>
																						<option value="Metal">Métal</option>
																						<option value="Nylor">Nylor</option>
																						<option value="Percee">Percée</option>
																					</select>
																					<div class="validator"></div>
																			</div>

																			<div class="form-group clearfix col-lg-4 col-xs-12" style="margin-top: 80px;">
																				<div class="col-xs-12">
																					<label class=" control-label" for="epaisseur_bord_verre"><small>Epaisseur minimum au bord du verre</small></label>
																				</div>
																				<div class="col-xs-12">
																					<input id="epaisseur_bord_verre" name="epaisseur_bord_verre" type="text" class="form-control required"  pattern="[0-9]+([\.,][0-9]+)?" placeholder="A remplir en millimètre par pas de 0,1 mm" required />
																					<div class="validator"></div>
																				</div>
																			</div>
																			
																			<div class="form-group clearfix col-xs-12 hide" >
																				<label class="col-lg-2 control-label" for="hauteur_ecart">Hauteur de montage et écarts pupillaires</label>
																			</div>
																			<div class="form-group div_pupilles clearfix col-xs-12" style="
    margin-top: 37px;
">
																				<div class="col-lg-8">

																					<div class="col-lg-6 col-sm-6 ecart_pup">

																						<div style="text-align:center;padding-bottom:10px">
																							Ecarts pupillaire <span class="topoffice" style="display: none;">VL</span>
																						</div>

																						<img alt="Ecart pupillaire" class="hep-image" src="/static/img/mesure_freeform/ecart_pup.jpg" style="margin-bottom: 18px;">

																						<div class="clearfix">
																							<div class="col-lg-6 col-sm-6 col-xs-6">
																								<label><small>Oeil droit</small></label>
																								<input type="text" name="ecart_puppillaire_droit" value="" class="form-control required decimal" pattern="[0-9]+([\.,][0-9]+)?">
																							</div>
																							<div class="col-lg-6 col-sm-6 col-xs-6">
																								<label><small>Oeil gauche</small></label>
																								<input type="text" name="ecart_puppillaire_gauche" value="" class="form-control required decimal" pattern="[0-9]+([\.,][0-9]+)?">
																							</div>
																						</div>

																					</div>

																					<div class="col-lg-6 col-sm-6 hauteur_pup">

																						<div style="text-align:center;padding-bottom:10px">
																							Hauteur de montage <span id="baspupille" style="display:none;"></span>
																						</div>

																						<img alt="Hauteur" class="hep-image" src="/static/img/mesure_freeform/Hauteur.jpg" style="margin-bottom: 18px">

																						<div class="clearfix">
																							<div class="col-lg-6 col-sm-6 col-xs-6">
																								<label><small>Oeil droit</small></label>
																								<input type="text" name="hauteur" value="" class="form-control required decimal" pattern="[0-9]+([\.,][0-9]+)?">
																							</div>
																							<div class="col-lg-6 col-sm-6 col-xs-6">
																								<label><small>Oeil gauche</small></label>
																								<input type="text" name="hauteur_gauche" value="" class="form-control required decimal" pattern="[0-9]+([\.,][0-9]+)?">
																							</div>
																						</div>

																					</div>

																					<div class="validator"></div>
																				</div>
																			</div>

																		</div>	
																</div>
															  </div>
															</div>
														</div>						
														<div id="certif" class="form-group row hide">
															<div class="col-xs-12">
															  <div class="panel panel-default">
																<div class="panel-heading"><h5 >Certificat</h5></div>
																<div class="panel-body " style="padding-top: 15px">
																
																		<div id="type_commande_error" class="col-lg-10">
																			<?php if($panierA != 1)
																			{?>
																			<div class="radio radio-warning">
																				<input type="radio" id="carte_auth_y" value="1" name="carte_auth" class="required" aria-required="true">
																				<label id="text_titre_carte" for="carte_auth_y"> Je souhaite un certificat d'authenticité (Gratuit) </label>
																			</div>

																			<div class="radio radio-warning" id="div_auth_n">
																				<input type="radio" id="carte_auth_n" value="0" name="carte_auth" class="required" aria-required="true" checked>
																				<label for="carte_auth_n"> Non </label>
																			</div>
																			<?php
																			}
																			else
																			{
																			?> 
																			<div class="radio radio-warning">
																				<input type="radio" id="carte_auth_y" value="1" name="carte_auth" class="required" aria-required="true">
																				<label id="text_titre_carte" for="carte_auth_y">«&nbsp;La carte d'authenticité est obligatoire pour des produits commandés en panier A&nbsp;»</label>
																			</div>
																			<?php
																			}
																			?>
																			<div class="validator"></div>
																		</div>
																		
																		<label class="col-xs-12 control-label hide">Votre carte</label>
																		<div class="col-xs-12" style="margin-top:20px">
																		<div id="civilite_client" class="col-xs-2 form-group clearfix auth_fields">
																			<label class=" control-label">Civilité client</label>
																			<div >
																				<select class="form-control required" id="civiliteClient" name="civilite_client" aria-required="true" >
																					<option value="0">Sélectionner..</option>
																					<option value="1">Madame</option>
																					<option value="2">Monsieur</option>
																					<option value="3">Mademoiselle</option>
																					<option value="4">Enfant</option>
																				</select>
																				<div class="validator"></div>
																			</div>

																		</div>

																		<div id="nom_client" class="col-xs-12 col-md-3 form-group clearfix auth_fields">
																			<label class=" control-label">Nom du client</label>
																			<div class="">
																				<input type="text" class="form-control required" name="nom_client" id="nomClient" aria-required="true">
																				<div class="validator"></div>
																			</div>
																		</div>

																		<div id="prenom_client" class="col-xs-12 col-md-3 form-group clearfix auth_fields">
																			<label class=" control-label">Prénom du client</label>
																			<div class="">
																				<input type="text" class="form-control required" name="prenom_client" id="prenomClient" aria-required="true">
																				<div class="validator"></div>
																			</div>
																		</div>
																		
																		<div class="col-xs-12 col-md-3">
																			<label class=" control-label"> </label>
																			<div class=" clearfix" style="margin-top:12px">
																				<a id="generer_carte" class="btn btn-warning">Générer la carte d'authenticité</a>
																			</div>
																		</div>
																	</div>
																	
																	</div>
																	

																	<div id="preview_carte" class="form-group clearfix auth_fields" style="display:none; margin-top:20px">
																		
																		
																			<div class="col-lg-12" id="carte_1">
																				<div class="col-lg-12">
																					<div id="carte">
																							<?php setlocale(LC_TIME, "fr_FR.UTF-8"); ?>
																					
																							<div id="preview_auth_card" style="float:left" >

																								<span class="titre optieyes"></span>
																								<?php if(isset($logo)) echo '<img class="card_logo" src="/static/img/logo.png" />'; ?>

																								<div class="info">
																									<span class="ref">REF OPTIEYES</span>
																									<span class="date"><?php echo strftime('%d %B %Y', time()) ?></span>
																								</div>

																								<div class="client">
																									<span class="civilite">M.</span>
																									<span class="nom_client"><b class="nom">Dupont</b> <b class="prenom">Jean</b></span>
																								</div>

																								<div class="corrections">

																									<table>
																										<tr class="d" style="display: none;">
																											<td class="correct">OD: <span class="correction"></span></td>
																											<td><span class="add"></span></td>
																											<td class="prism"><span class="diopt"></span><span class="base"></span></td>
																										</tr>

																										<tr class="g" style="display: none;">
																											<td class="correct">OG: <span class="correction"></span></td>
																											<td><span class="add"></span></td>
																											<td class="prism"><span class="diopt"></span><span class="base"></span></td>
																										</tr>

																									</table>

																								</div>

																								<div class="verres">
																									<span class="nom_verre"></span>
																									<span class="diam_verre"></span>
																									<div class="options">
																										<span class="miroir"></span>
																										<span class="galbe"></span>
																									</div>
																								</div>

																								<div class="opticien">
																									<span class="titre"><?php echo $user_info[0]->nom_magasin; ?></span>
																									<span><?php echo $user_info[0]->adresse; ?></span>
																									<span><?php echo $user_info[0]->cp; ?> <?php echo $user_info[0]->ville; ?></span>
																									<span class="tel">Tél: <?php echo $user_info[0]->tel_fixe; ?></span>
																								</div>


																							</div>

																							<div id="preview_auth_img" style="float:right">
																								<img src="/static/img/auth_back.jpg" />
																							</div>

																						</div>
																				</div>
																		    </div>
																			<div class="col-lg-12" id="cartesGD" style="display:none">
																				<div class="sub-auth" id="prev_auth">
																					<div id="carteD" style="width:100%; float:left">
																						<?php setlocale(LC_TIME, "fr_FR.UTF-8"); ?>
																					
																						<div id="preview_auth_card" >

																							<span class="titre optieyes"></span>
																							<?php if(isset($logo)) echo '<img class="card_logo" src="/static/img/logo.png" />'; ?>

																							<div class="info">
																								<span class="ref">REF OPTIEYES</span>
																								<span class="date"><?php echo strftime('%d %B %Y', time()) ?></span>
																							</div>

																							<div class="client">
																								<span class="civilite">M.</span>
																								<span class="nom_client"><b class="nom">Dupont</b> <b class="prenom">Jean</b></span>
																							</div>

																							<div class="corrections">

																								<table>
																									<tr class="d" style="display: none;">
																										<td class="correct">OD: <span class="correction"></span></td>
																										<td><span class="add"></span></td>
																										<td class="prism"><span class="diopt"></span><span class="base"></span></td>
																									</tr>
																								</table>

																							</div>

																							<div class="verres">
																								<span class="nom_verre"></span>
																								<span class="diam_verre"></span>
																								<div class="options">
																									<span class="miroir"></span>
																									<span class="galbe"></span>
																								</div>
																							</div>

																							<div class="opticien">
																								<span class="titre"><?php echo $user_info[0]->nom_magasin; ?></span>
																								<span><?php echo $user_info[0]->adresse; ?></span>
																								<span><?php echo $user_info[0]->cp; ?> <?php echo $user_info[0]->ville; ?></span>
																								<span class="tel">Tél: <?php echo $user_info[0]->tel_fixe; ?></span>
																							</div>


																						</div>

																						<div id="preview_auth_img" >
																							<img src="/static/img/auth_back.jpg" />
																						</div>

																					</div>
																					<div id="carteG" style="width:100%; float:left">
																						<?php setlocale(LC_TIME, "fr_FR.UTF-8"); ?>
																					
																						<div id="preview_auth_card" >

																							<span class="titre optieyes"></span>
																							<?php if(isset($logo)) echo '<img class="card_logo" src="/static/img/logo.png" />'; ?>

																							<div class="info">
																								<span class="ref">REF OPTIEYES</span>
																								<span class="date"><?php echo strftime('%d %B %Y', time()) ?></span>
																							</div>

																							<div class="client">
																								<span class="civilite">M.</span>
																								<span class="nom_client"><b class="nom">Dupont</b> <b class="prenom">Jean</b></span>
																							</div>

																							<div class="corrections">

																								<table>
																									<tr class="g" style="display: none;">
																										<td class="correct">OG: <span class="correction"></span></td>
																										<td><span class="add"></span></td>
																										<td class="prism"><span class="diopt"></span><span class="base"></span></td>
																									</tr>

																								</table>

																							</div>

																							<div class="verres">
																								<span class="nom_verre"></span>
																								<span class="diam_verre"></span>
																								<div class="options">
																									<span class="miroir"></span>
																									<span class="galbe"></span>
																								</div>
																							</div>

																							<div class="opticien">
																								<span class="titre"><?php echo $user_info[0]->nom_magasin; ?></span>
																								<span><?php echo $user_info[0]->adresse; ?></span>
																								<span><?php echo $user_info[0]->cp; ?> <?php echo $user_info[0]->ville; ?></span>
																								<span class="tel">Tél: <?php echo $user_info[0]->tel_fixe; ?></span>
																							</div>


																						</div>

																						<div id="preview_auth_img" >
																							<img src="/static/img/auth_back.jpg" />
																						</div>

																					</div>
																				</div>
																			</div>

																	</div>
																</div>
															</div>
														</div>
													</div>

												</div>									
										  </div>
									  </div>
								  </div>
								<ul class="pager m-b-0 wizard display_next">
									<li class="next1" style="float: right;"><a href="#" class="btn btn-warning btn-lg waves-effect waves-light disabled" id="to_etape2">Suivant</a></li>
								</ul>
							</div>
							<div class="tab-pane m-t-10 fade last_of_page" id="etape2">
								<div id="recap_commande" class="invoice"></div>
								<ul class="pager m-b-0 wizard">
									<li class="previous display_next" id="to_etape1"><a href="#" class="btn btn-inverse btn-lg waves-effect waves-light" >Précédent</a></li>
									<li class="finish"><a href="#" class="btn btn-warning btn-lg waves-effect waves-light" id="valider_commande">Valider la commande</a></li>
								</ul>
							</div>
							<input type="hidden" value="" id="prixDH" name="prixDH">
							<input type="hidden" value="" id="prixGH" name="prixGH">
							<input type="hidden" value="" id="nomverreDH" name="nomverreDH">
							<input type="hidden" value="" id="nomverreGH" name="nomverreGH">
							<input type="hidden" value="" id="teinteDH" name="teinteDH">
							<input type="hidden" value="" id="teinteGH" name="teinteGH">
							<input type="hidden" value="" id="traitementDH" name="traitementDH">
							<input type="hidden" value="" id="traitementGH" name="traitementGH">
							<input type="hidden" id="id_generation_verre" value="31" name="id_generation_verre">
							<input type="hidden" id="id_indice_verre" value="1" name="id_indice_verre">
							<input type="hidden" id="type_commande" name="type_commande" value="1">
					</div>
					  <div id="casse" class="tab-pane fade">
						<h3>Casse atelier</h3>
						<p></p>
					  </div>
					  <div id="erreur" class="tab-pane fade">
						<h3>Erreur optique</h3>
						<p></p>
					  </div>
					</div>
		             
		        </div>
		    </div>
</form>
					
				</div>
				

				<div class="row">


					<div class="col-sm-12">

						<?php 
						if($user_info[0]->valid_mandat != 1) { ?>

							<div class="card-box clearfix">

								<h4 class="header-title m-t-0 m-b-5">Vos informations de paiement</h4>
								<p class="m-b-30">Avant de pouvoir passer vos commandes sur OptiEyes, veuillez renseigner les informations de prélèvement ci-dessous, vous serez amenné à valider votre mandat par siangature éléctronique avant de pouvoir commander.</p>


								<form class="box manual validate" id="update_RIB">

									<div class="form-group clearfix m-b-15">
										<label class="col-lg-2 control-label" for="reference_client">Société</label>
										<div class="col-lg-10">
											<input id="companyName" name="companyName" type="text" class="required form-control" value="<?php echo $user_info[0]->nom_magasin ?>" />
											<div class="validator"></div>
										</div>
									</div>

									<div class="form-group rd-200 clearfix m-b-15">
										<label class="col-lg-2 control-label">Civilité du gérant</label>
										<div class="col-lg-10">
											<div class="radio radio-warning radio-inline">
												<input type="radio" id="civilite_1" value="1" name="honorificPrefix" class="required" checked>
												<label for="civilite_1"> M. </label>
											</div>
											<div class="radio radio-warning radio-inline">
												<input type="radio" id="civilite_2" value="2" name="honorificPrefix" class="required">
												<label for="civilite_2"> Mme </label>
											</div>
											<div class="radio radio-warning radio-inline">
												<input type="radio" id="civilite_3" value="3" name="honorificPrefix" class="required">
												<label for="civilite_3"> Mlle </label>
											</div>
											<div class="validator"></div>
										</div>
									</div>

									<div class="form-group clearfix m-b-15">
										<label class="col-lg-2 control-label" for="familyName">Nom du gérant</label>
										<div class="col-lg-10">
											<input id="familyName" name="familyName" type="text" class="required form-control" />
											<div class="validator"></div>
										</div>
									</div>

									<div class="form-group clearfix m-b-15">
										<label class="col-lg-2 control-label" for="givenName">Prénom du gérant</label>
										<div class="col-lg-10">
											<input id="givenName" name="givenName" type="text" class="required form-control" />
											<div class="validator"></div>
										</div>
									</div>

									<div class="form-group clearfix m-b-15">
										<label class="col-lg-2 control-label" for="street1">Adresse de la société</label>
										<div class="col-lg-10">
											<input id="street1" name="street1" type="text" class="required form-control" value="<?php echo $user_info[0]->adresse ?>" />
											<div class="validator"></div>
										</div>
									</div>

									<div class="form-group clearfix m-b-15">
										<label class="col-lg-2 control-label" for="street2">Complément</label>
										<div class="col-lg-10">
											<input id="street2" name="street2" type="text" class="required form-control" />
											<div class="validator"></div>
										</div>
									</div>

									<div class="form-group clearfix m-b-15">
										<label class="col-lg-2 control-label" for="city">Ville</label>
										<div class="col-lg-10">
											<input id="city" name="city" type="text" class="required form-control" value="<?php echo $user_info[0]->ville ?>" />
											<div class="validator"></div>
										</div>
									</div>

									<div class="form-group clearfix m-b-15">
										<label class="col-lg-2 control-label" for="postalCode">Code Postal</label>
										<div class="col-lg-10">
											<input id="postalCode" name="postalCode" type="text" class="required form-control" value="<?php echo $user_info[0]->cp ?>" />
											<div class="validator"></div>
										</div>
									</div>

									<div class="form-group clearfix m-b-15">
										<label class="col-lg-2 control-label" for="pays">Code Postal</label>
										<div class="col-lg-10">
											<input id="pays" name="pays" type="text" class="required form-control" value="France" disabled />
											<div class="validator"></div>
										</div>
									</div>

									<div class="form-group clearfix m-b-15">
										<label class="col-lg-2 control-label" for="iban">IBAN</label>
										<div class="col-lg-10">
											<input id="iban" name="iban" type="text" class="required form-control" />
											<div class="validator"></div>
										</div>
									</div>


									<button type="submit" class="btn btn-warning">Envoyer</button>


								</form>


								<script>

									$(document).ready(function() {

										$('#update_RIB').on('submit', function(e) {

											e.preventDefault();

											$.ajax({
												type: "POST",
												url: "/admin/submit_mandat",
												data: $('#update_RIB').serialize(),

												success: function(data){

													$('#update_RIB input').removeClass('error');
													$('#update_RIB .validator').text('');

													if(data!="" && data == "not_logged") {
														window.location.reload();
													}
													else {

														data = $.parseJSON(data);

														if(data.status == 1) {
															window.location.href = data.link;
														}
														else {

															$.each(data, function(index, value) {
																$('#update_RIB input#'+index).removeClass('valid').addClass('error');
																if(value == 1) {
																	$('#update_RIB input#'+index).siblings('.validator').text('Ce champ est requis');
																}
																else {
																	$('#update_RIB input#'+index).siblings('.validator').text('Format invalide');
																}
															});

														}

													}


												}
											});


										});

									});

								</script>


							</div>

						<?php }

						elseif($user_info[0]->commande_suspendue == 1){

							echo '<div class="card-box clearfix">
								<h4 class="header-title m-t-0 m-b-5">Commandes suspendues</h4>
								<p class="m-b-30"><strong>Attention !</strong> La partie commande vous a été restreinte jusqu\'à la régularisation de votre compte. Contactez-nous pour de plus amples informations.</p>
							</div>';

						}

						?>

					</div>

				</div><!-- end col -->

                <?php if(!is_object($pair_order)) : ?>
                <div class="row secondPairOffers">
                    <div class="col-sm-12 m-b-10">
                        <h4 class="page-title">Nos offres seconde paire</h4>
                    </div>
                </div>

                <div class="row secondPairOffers">
                    <div class="col-sm-12">
                        <div class="card-box clearfix">
                            <strong>A la fin de votre commande choisissez l'option "2ème paire" et passez votre 2ème commande pour obtenir jusqu'à 50% sur la paire la moins chere.</strong><br />
                            Trouvez ci-dessous la liste des remises en fonction de la génération de verre choisie en première paire

                            <?php
                            $remises = array(
                                array('verre' => 'T-One', 'remise' => 0),
                                array('verre' => 'E-Space', 'remise' => 30),
                                array('verre' => 'Platinum', 'remise' => 35),
                                array('verre' => 'Omega', 'remise' => 40),
                                array('verre' => 'Elysium', 'remise' => 50),
                                array('verre' => 'Bifocaux', 'remise' => 30),
                                array('verre' => 'Degressifs', 'remise' => 30),
                                array('verre' => 'Freestyle', 'remise' => 30),
                                array('verre' => 'Eye-Fatigue', 'remise' => 30),
                            );
                            ?>

                            <table class="remises">
                                <?php foreach($remises as $k => $v) {

                                    echo '<tr>
                                        <td>'.$v['verre'].'</td>
                                        <td><span>'.$v['remise'].'%</span></td>
                                    </tr>';
                                }
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
			</div>


		</div> <!-- container -->
	</div> <!-- content -->

	<!-- Form wizard -->
	<script src="/static/assets/plugins/bootstrap-wizard/jquery.bootstrap.wizard.js"></script>
	<script src="/static/assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>

	<script type="text/javascript">
	
	function show_pic(img)
	{
		$("#big_img").show();
		$("#mini_calibres").hide();
		
		$("#back_calibre").show();
		$("#click_calibre").hide();
		
		$("#big_img").html("<img id='theImg' src='/static/img/calibre_B/"+img+".png'/>");
		
		$('html, body').animate({
        scrollTop: $("#precalibrage").offset().top
    	}, 2000);
	}
	
	$.extend($.validator.messages, {
		required: "Ce champ est obligatoire",
		number: "Veuillez indiquer un nombre",
		digits: "Veuillez indiquer des numéros",
		maxlength: jQuery.validator.format("Limite à {0} caractères."),
		minlength: jQuery.validator.format("Veuillez indiquer au moins {0} caractères."),
		rangelength: jQuery.validator.format("Veuillez indiquer entre {0} et {1} caractères."),
		range: jQuery.validator.format("Veuillez indiquer une valeur entre {0} et {1}."),
		max: jQuery.validator.format("Veuillez indiquer une valeur inferieure à {0}."),
		min: jQuery.validator.format("Veuillez indiquer une valeur supérieure à {0}.")
	});
	
	var iledefrance = '<?php echo $region; ?>';
	var tabLivIleDeFrance = ["Mardi","Mercredi","Jeudi","Vendredi","Lundi","Mardi","Mardi"];
	var tabLivHorsIleDeFrance = ["Mercredi","Jeudi","Vendredi","Samedi","Mardi","Mardi","Mardi"];
	var currentChoixMultiCommande = "";
	var tabCurrentGroupeDiametre = [];
	var precalibrage = "oui";
	var forceAddStep = false;
	var forceSphStep = false;

	$(document).ready(function() {
	
	if($('.jsswitch').length > 0) 
	{
		var elems = Array.prototype.slice.call(document.querySelectorAll('.jsswitch'));

		elems.forEach(function(html) {
			var init = new Switchery(html, {
				color: '#64bd63',
				secondaryColor: '#fb2b54',
				jackColor: '#f5f5f5',
				jackSecondaryColor: '#f5f5f5'
			});
		});
	}
	
	$('#back_calibre').on('click', function() {
		$("#big_img").hide();
		$("#mini_calibres").show();
		
		$("#back_calibre").hide();
		$("#click_calibre").show();
	});
	
	$('#lensFocalGroup').on('change', function() {

	$('#div_refraction').addClass('hide');
	$('#progression_D').addClass('hide');
  	$('#progression_G').addClass('hide');
  	
  	$('#precalibrage').addClass('hide');
  	$('#certif').addClass('hide');
  		
	$('#generation').val("").change();
	
	<?php
	if(is_object($pair_order)) {
		?>
		if($("#lensFocalGroup").val() == '4')
		{
			<?php
			if($pair_order->id_generation_verre == 33)
			{
			?>
			$('#sphereD').val(<?php echo floatval($pair_order_correction['verre']['correction_droit']['sphere'])+floatval($pair_order_correction['verre']['correction_droit']['addition']);?>);
			$('#sphereG').val(<?php echo floatval($pair_order_correction['verre']['correction_gauche']['sphere'])+floatval($pair_order_correction['verre']['correction_gauche']['addition']);?>);
			<?php
			}
			else
			{?>
			$('#sphereD').val(<?php echo $pair_order_correction['verre']['correction_droit']['sphere'];?>);
			$('#sphereG').val(<?php echo $pair_order_correction['verre']['correction_gauche']['sphere'];?>);
			<?php
			}?>
		}
		else
		{
			$('#sphereD').val(<?php echo $pair_order_correction['verre']['correction_droit']['sphere'];?>);
			$('#sphereG').val(<?php echo $pair_order_correction['verre']['correction_gauche']['sphere'];?>);
					
		}
		
		$('#cylindreD').val(<?php echo $pair_order_correction['verre']['correction_droit']['cylindre'];?>);
		$('#cylindreG').val(<?php echo $pair_order_correction['verre']['correction_gauche']['cylindre'];?>);
			
		$('#axeD').val(<?php echo $pair_order_correction['verre']['correction_droit']['axe'];?>);
		$('#axeG').val(<?php echo $pair_order_correction['verre']['correction_gauche']['axe'];?>);
		
		$('#sphereD').prop('readOnly', true);
		$('#sphereG').prop('readOnly', true);
		$('#cylindreD').prop('readOnly', true);
		$('#cylindreG').prop('readOnly', true);
		$('#axeD').prop('readOnly', true);
		$('#axeG').prop('readOnly', true);
		
		
		//alert($("#lensFocalGroup").val());
		if($("#lensFocalGroup").val() == '4')
		{
			$('#additionD').prop('readOnly', false);
			$('#additionG').prop('readOnly', false);
		}
		else
		{
			
			$('#additionD').val(<?php 
			if(floatval($pair_order_correction['verre']['correction_droit']['addition']) >= 0)
				echo "+".$pair_order_correction['verre']['correction_droit']['addition'];
			else
				echo $pair_order_correction['verre']['correction_droit']['addition'];?>);
			$('#additionG').val(<?php 
			if(floatval($pair_order_correction['verre']['correction_gauche']['addition']) >= 0)
				echo "+".$pair_order_correction['verre']['correction_gauche']['addition'];
			else
				echo $pair_order_correction['verre']['correction_gauche']['addition'];?>);
			$('#additionD').prop('readOnly', true);
			$('#additionG').prop('readOnly', true);
		}
		
		<?php	
	}
	else
	{
	?>
	$('#sphereD').prop('readOnly', false);
	$('#sphereG').prop('readOnly', false);
	$('#cylindreD').prop('readOnly', false);
	$('#cylindreG').prop('readOnly', false);
	$('#axeD').prop('readOnly', false);
	$('#axeG').prop('readOnly', false);
	
    $('#sphereD').val("+0.00");
    $('#cylindreD').val("+0.00");
    $('#axeD').val("0");
    $('#additionD').val("+0.00");
    $('#sphereG').val("+0.00");
    $('#cylindreG').val("+0.00");
    $('#axeG').val("0");
    $('#additionG').val("+0.00");
    
    var droite = $('#droit').is(':checked');
	var gauche = $('#gauche').is(':checked');
	
	
	
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
 	<?php
 	}
 	?>
    
    var lensFocalGroup = $(this).val();
    var id_generation_verre = Number(lensFocalGroup) + 30; 
    $("#id_generation_verre").val(id_generation_verre);
    
    if(lensFocalGroup != "")
    {
		  if(this.value == '4' )
		  {
		  	$(".addition").html("<b>Dégréssion</b>");
		  }
		  else
		  {
		  	$(".addition").html("<b>Addition</b>");
		  }
		  
		  
		  
		  if(this.value == '3' )
		  {
			$("#generation_progressif").css("display", "block");
			$('#lensFocalGroup_panel').removeClass('focus_panel')
			$('#generation_panel').addClass('focus_panel');
			$('#generation').focus();
	
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
			$('#additionD').val("+0.75");
			$('#additionG').val("+0.75");
		  }
		  else
		  {
			$("#generation_progressif").css("display", "none");
			$('#lensFocalGroup_panel').removeClass('focus_panel')
			$('#refraction_panel').addClass('focus_panel');
			$('#sphereD').focus();
	
			$("#detailD").css("display", "block");
			$("#detailG").css("display", "block");
		  }
  
		  if(this.value == '' || this.value == '1' || this.value == '6')
		  {
			$("#additionD").css("display", "none");
			$("#additionG").css("display", "none");
			$(".addition").css("display", "none");
	
		  }
		  else
		  {
			$("#additionD").css("display", "block");
			$("#additionG").css("display", "block");
			$(".addition").css("display", "block");
		  }
  
			if(lensFocalGroup!="3")
			{
				$('#div_refraction').removeClass('hide')
				$('#progression_D').addClass('hide')
				$('#progression_G').addClass('hide')
			}
			else
			{
				$("#generation_progressif").css("display", "block");
				$('#generation_progressif').removeClass('hide')
				$('#progression_D').removeClass('hide')
				$('#progression_G').removeClass('hide')
			}
			
	}
   
    $('#produit').addClass('hide');
    $("#afficherV").css("display", "block");
});
	
	$('input[name=additionD]').change(function() {
     var indiceId = $('#indices').val();
    var generation = $('#generation').val();
    var lensFocalGroup = $('#lensFocalGroup').val();
    var sphereD = $('#sphereD').val();
    var cylindreD = $('#cylindreD').val();
    var axeD = $('#axeD').val();
    var additionD = $(this).val();
    var sphereG = $('#sphereG').val();
    var cylindreG = $('#cylindreG').val();
    var axeG = $('#axeG').val();
    var additionG = $('#additionG').val();
    
    var stockD = $('input[name="dispoD"]:checked').val()
	var stockG = $('input[name="dispoG"]:checked').val()
    
    
    $("#detailD").css("display", "none");
    $("#afficherV").css("display", "inline-block");
    
    if(additionD == '')
    {
    	additionD = '-';
    	$("#additionD").val("+0.75");
    }
    else
    {
    	if (additionD.indexOf(",") >= 0)
    	{
    		additionD = additionD.replace(',', '.');
    		additionD = roundToNearest(additionD,0.25);
    		<?php
			if(is_object($pair_order)) {
			?>
				if(lensFocalGroup == "4")
				{
					if(n_sphereD>2)
					{
						n_sphereD = 2;
					}
					
					if(n_sphereD<0.75)
					{
						n_sphereD = 0.75;
					}
				}
			<?php } ?>
    		$("#additionD").val(additionD);
    	}
    	
    	if (additionD.indexOf(".") < 0)
    	{
    		
    		additionD = additionD+".00";
    		//alert(sphereD);
    		$("#additionD").val(additionD);
    	}
    		
    	if (additionD.indexOf("+") >= 0)
    	{
    		additionD = additionD.replace('+', '');
    		n_sphereD = roundToNearest(additionD,0.25);
    		
    		<?php
			if(is_object($pair_order)) {
			?>
				if(lensFocalGroup == "4")
				{
					if(n_sphereD>2)
					{
						n_sphereD = 2;
					}
					
					if(n_sphereD<0.75)
					{
						n_sphereD = 0.75;
					}
				}
			<?php } ?>
			
    		n_sphereD = n_sphereD.toString();
    		if (n_sphereD.indexOf(".") < 0)
			{
				n_sphereD = n_sphereD+".00";	
			}
    		var new_sphere = "+"+n_sphereD;
    		
    		$("#additionD").val(new_sphere);
    	}
    	else if (additionD.indexOf("-") >= 0)
    	{
    		n_sphereD = roundToNearest(additionD,0.25);
    		
    		<?php
			if(is_object($pair_order)) {
			?>
				if(lensFocalGroup == "4")
				{
					if(n_sphereD>2)
					{
						n_sphereD = 2;
					}
					
					if(n_sphereD<0.75)
					{
						n_sphereD = 0.75;
					}
				}
			<?php } ?>
			
    		n_sphereD = n_sphereD.toString();
    		
    		if (n_sphereD.indexOf(".") < 0)
			{
				n_sphereD = n_sphereD+".00";	
			}
    		$("#additionD").val(n_sphereD);
    	}
    	else
    	{
    		n_sphereD = roundToNearest(additionD,0.25);
    		
    		<?php
			if(is_object($pair_order)) {
			?>
				if(lensFocalGroup == "4")
				{
					if(n_sphereD>2)
					{
						n_sphereD = 2;
					}
					
					if(n_sphereD<0.75)
					{
						n_sphereD = 0.75;
					}
				}
			<?php } ?>
    		
    		n_sphereD = n_sphereD.toString();
    		
    		if (n_sphereD.indexOf(".") < 0)
			{
				n_sphereD = n_sphereD+".00";
			}
    		var new_sphere = "+"+n_sphereD;
    		
    		
    		
    		$("#additionD").val(new_sphere); 
    		additionD = $('#additionD').val();
    	}
    }
    
    <?php
	if(is_object($pair_order)) {
		if($pair_order->id_generation_verre == '34')
		{
	?>
			if (cylindreD.indexOf(",") >= 0)
			{
				cylindreD = cylindreD.replace(',', '.');
			}
			if (cylindreD.indexOf("+") >= 0)
			{
				cylindreD = cylindreD.replace('+', '');
			}
			new_sphereD = (Number(additionD)+Number(cylindreD)).toFixed(2);
			$("#sphereD").val(new_sphereD);
	<?php
		}
	}
	?>
    	
       
    if($("#droit").prop('checked') == true && $("#gauche").prop('checked') == true && additionG == "+0.75"){
		$('#additionG').val($(this).val())
	}
	
	
});

$('input[name=additionG]').change(function() {
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
    var additionG = $(this).val();
    
    var stockD = $('input[name="dispoD"]:checked').val()
	var stockG = $('input[name="dispoG"]:checked').val()
	
    $("#detailG").css("display", "none");
    $("#afficherV").css("display", "inline-block");
    
    if(additionG == '')
    {
    	additionG = '-';
    	$("#additionG").val("+0.75");
    }
    else
    {
    	if (additionG.indexOf(",") >= 0)
    	{
    		additionG = additionG.replace(',', '.');
    		additionG = roundToNearest(additionG,0.25);
    		<?php
			if(is_object($pair_order)) {
			?>
				if(lensFocalGroup == "4")
				{
					if(n_sphereD>2)
					{
						n_sphereD = 2;
					}
					
					if(n_sphereD<0.75)
					{
						n_sphereD = 0.75;
					}
				}
			<?php } ?>
    		$("#additionG").val(additionG);
    	}
    	
    	if (additionG.indexOf(".") < 0)
    	{
    		
    		additionG = additionG+".00";
    		//alert(sphereD);
    		$("#additionG").val(additionG);
    	}
    		
    	if (additionG.indexOf("+") >= 0)
    	{
    		additionG = additionG.replace('+', '');
    		n_sphereD = roundToNearest(additionG,0.25);
    		<?php
			if(is_object($pair_order)) {
			?>
				if(lensFocalGroup == "4")
				{
					if(n_sphereD>2)
					{
						n_sphereD = 2;
					}
					
					if(n_sphereD<0.75)
					{
						n_sphereD = 0.75;
					}
				}
			<?php } ?>
    		n_sphereD = n_sphereD.toString();
    		if (n_sphereD.indexOf(".") < 0)
			{
				n_sphereD = n_sphereD+".00";	
			}
    		var new_sphere = "+"+n_sphereD;
    		
    		$("#additionG").val(new_sphere);
    	}
    	else if (additionG.indexOf("-") >= 0)
    	{
    		n_sphereD = roundToNearest(additionG,0.25);
    		<?php
			if(is_object($pair_order)) {
			?>
				if(lensFocalGroup == "4")
				{
					if(n_sphereD>2)
					{
						n_sphereD = 2;
					}
					
					if(n_sphereD<0.75)
					{
						n_sphereD = 0.75;
					}
				}
			<?php } ?>
    		n_sphereD = n_sphereD.toString();
    		
    		if (n_sphereD.indexOf(".") < 0)
			{
				n_sphereD = n_sphereD+".00";	
			}
    		$("#additionG").val(n_sphereD);
    	}
    	else
    	{
    		n_sphereD = roundToNearest(additionG,0.25);
    		<?php
			if(is_object($pair_order)) {
			?>
				if(lensFocalGroup == "4")
				{
					if(n_sphereD>2)
					{
						n_sphereD = 2;
					}
					
					if(n_sphereD<0.75)
					{
						n_sphereD = 0.75;
					}
				}
			<?php } ?>
    		n_sphereD = n_sphereD.toString();
    		
    		if (n_sphereD.indexOf(".") < 0)
			{
				n_sphereD = n_sphereD+".00";
			}
    		var new_sphere = "+"+n_sphereD;
    		
    		$("#additionG").val(new_sphere); 
    		additionG = $('#additionG').val();
    	}
    }
    
    <?php
	if(is_object($pair_order)) {
		if($pair_order->id_generation_verre == '34')
		{
	?>
			if (cylindreG.indexOf(",") >= 0)
			{
				cylindreG = cylindreG.replace(',', '.');
			}
			if (cylindreG.indexOf("+") >= 0)
			{
				cylindreG = cylindreG.replace('+', '');
			}
			new_sphereG = (Number(additionG)+Number(cylindreG)).toFixed(2);
			$("#sphereG").val(new_sphereG);
	<?php
		}
	}
	?>
	 
});
	
	
	function validFields() {
		$('.form-commande input[type=radio], .form-commande select').each(function (e) {
			$(this).rules("add", {
				messages: {
					required: "Veuillez choisir une option."
				}
			});
		});
	}

	var $validator = $("#commandeForm").validate({
		errorPlacement: function(error, element) {
			error.appendTo(element.closest('.form-group').find('.validator'));
		}
	});

	var $stockvalidator = $("#stockForm").validate({
		errorPlacement: function(error, element) {
			error.appendTo(element.closest('.form-group').find('.validator'));
		}
	});

	validFields();
			
	<?php if(!is_object($pair_order)) : ?>
            $('.next .btn').addClass('disabled');
    <?php endif; ?>
    $( "#to_etape2" ).click(function() {			
	
		validFields();

		var $valid = $("#commandeForm").valid();
		if (!$valid) {
			$validator.focusInvalid();
			return false;
		}
					
		var formData = $('#commandeForm').serialize();
		console.log(formData);
		
		$.ajax({
			type: "POST",
			url: "/admin/setOrderRecapNew/<?php echo $user_info[0]->id_users; ?>",
			data : '<?php if(is_object($pair_order)) { echo 'pair_order='.$pair_order->id_commande.'&'; } ?>'+formData,
			dataType:"html",
			beforeSend:function(){
				$("#recap_commande").empty().append('<div style="height:400px"><div style="width:150px;margin-left:auto;margin-right:auto;padding-top:10%;">Veuillez patienter</div></div>');
			},
			success: function(data){
				//console.log(data);
				if(data=="not_logged")
					window.location.reload();
				else if(data=="error"){
					alert('une erreur est survenue, veuillez réessayer, merci !');
				}
				else{
					$("#recap_commande").empty().append(data);
					
					$("#wiz .finish").show();
					$('#wiz .next .btn').hide();
					$("#recap_commande").empty().append(data);
					
					if($('.js-switch').length > 0) 
					{
						var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

						elems.forEach(function(html) {
							var init = new Switchery(html, {
								color: '#64bd63',
								secondaryColor: '#fb2b54',
								jackColor: '#f5f5f5',
								jackSecondaryColor: '#f5f5f5'
							});
						});

						$('.js-switch').each(function() {

							var row = $(this).closest('tr');
							var switches = $('.js-switch.express:checked').length;

							if($(this).is(':checked')) {
								row.find('td.expressPrice').text('25 €');
								row.find('td.expressQty').text('1');
							}
							else {
								row.find('td.expressPrice').text('-');
								row.find('td.expressQty').text('0');
							}

							$('.calculatedTotal').each(function() {
								$(this).text(parseFloat($(this).data('base'))+(switches*25));
							});

						});


						$('.js-switch').on('change', function() {

							var row = $(this).closest('tr');
							var switches = $('.js-switch.express:checked').length;


							if($(this).attr('id') === 'finish_pair') {
								if($(this).is(':checked')) {
									$('.finish').find('.btn').text('Valider ma première commande');
								}
								else {
									$('.finish').find('.btn').text('Valider la commande');
								}
							}
							else {
								if($(this).is(':checked')) {
									row.find('td.expressPrice').text('25 €');
									row.find('td.expressQty').text('1');
								}
								else {
									row.find('td.expressPrice').text('-');
									row.find('td.expressQty').text('0');
								}

								$('.calculatedTotal').each(function() {
									$(this).text(parseFloat($(this).data('base'))+(switches*25));
								});
							}

						});

					}
				}
			},
			error : function(){
				$("#recap_commande").empty().append('<div style="height:400px"><div style="width:550px;margin-left:auto;margin-right:auto;padding-top:10%;color:red;font-size:18px">Une erreur s\'est produite, veuillez recommencer. Si le problème persiste, envoyez un mail à </div></div>');
			}
		});
		
	});
    $('.finish').on('click', function() {

		orderOk = false;
		
		//alert("type_commande_verre:"+type_commande_verre);

		var date = new Date();
		var pair = false;

		if($('#finish_pair').is(':checked') && type_commande_verre == 1) {
			pair = true;
		}

		var jourLivraison = iledefrance == '1' ? tabLivIleDeFrance[date.getDay()] : tabLivHorsIleDeFrance[date.getDay()];
		
		var nom_verreD = $("#type_de_verreD option:selected").html();
        var nom_verreG = $("#type_de_verreG option:selected").html();
        
		if(nom_verreD.indexOf(" - Stock déporté") >= 0 || nom_verreG.indexOf(" - Stock déporté") >= 0) {
			swal({
				title: "Livraison",
				text: "Livraison "+jourLivraison+", valider ? ( hors jours feriés )",
				type: "warning",
				showCancelButton: true,
				confirmButtonText: "Oui",
				cancelButtonText: "Non",
				closeOnConfirm: false,
				closeOnCancel: true
			}, function(isConfirm){
				if (isConfirm) {
					orderOk = true;
					placeOrder();
				}
			});

		} else {
			orderOk = true;
			placeOrder();
		}
		
		function placeOrder() 
		{
			var is_express = 0;
			var is_express_pair = 0;
			
			var commentaire = $('#commentaire').val(); 

			if(type_commande_verre == 1 && $('#express').is(':checked')) {
				is_express = 1;
			}

			if(type_commande_verre == 1 && $('#express_pair').is(':checked')) {
				is_express_pair = 1;
			}

			if($('#finish_pair').is(':checked')) {

				var next = false;

				swal({
					title: "Première paire",
					text: "Vous venez de passer la commande de la première paire, vous devez impérativement terminer la commande de la deuxième paire afin de valider les deux commandes.",
					type: "success",
					confirmButtonClass: 'btn-warning',
					confirmButtonText: "Ok",
					closeOnConfirm: false,
					showCancelButton: true,
					cancelButtonText: 'Annuler'
				}, function () {

					$.ajax({
						type: "POST",
						data: {
							express: is_express,
							express_pair: is_express_pair,
							pair: pair,
							commentaire: commentaire
						},
						dataType: 'json',
						url: "/admin/addOrder/<?php echo $user_info[0]->id_users; ?>",
						beforeSend:function(){

						},
						success: function(data){
							if(data.status != 'ok' && data.status != 'error') {
								window.location.reload();
							}
							else if(data.status == 'error') {
								swal({
									title: "Une erreur est survenue",
									text: "Un problème technique est survenu lors de votre commande et celle-ci n'a pu être prise en compte. euillez la renouveler où nous contacter si le problème persiste. Merci.",
									type: "error",
									showCancelButton: true,
									confirmButtonClass: 'btn-danger waves-effect waves-light',
									confirmButtonText: 'Fermer'
								});
							} else {


								if(data.pair == true && data.order_id > 0) {
									window.location.href = '<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>/'+data.order_id;
								}
								else {
									window.location.reload();
								}

							}
						},
						error:function(){
							$("#loading-overlay,#loading").hide();
						}
					});

					$(this).parent().fadeOut();

				});
			}
			else {

				$.ajax({
					type: "POST",
					data: {
						express: is_express,
						express_pair: is_express_pair,
						commentaire: commentaire
					},
					dataType: 'json',
					url: "/admin/addOrder/<?php echo $user_info[0]->id_users; ?>",
					beforeSend:function(){

					},
					success: function(data){
						if(data.status != 'ok' && data.status != 'error') {
							window.location.reload();
						}
						else if(data.status == 'error') {
							swal({
								title: "Une erreur est survenue",
								text: "Un problème technique est survenu lors de votre commande et celle-ci n'a pu être prise en compte. veuillez la renouveler où nous contacter si le problème persiste. Merci.",
								type: "error",
								showCancelButton: true,
								confirmButtonClass: 'btn-danger waves-effect waves-light',
								confirmButtonText: 'Fermer'
							});
						} else {

							if(data.pair == true && data.order_id > 0) {
								window.location.href = '<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>/'+data.order_id;
							}
							else {

								swal({
									title: "<?php if(is_object($pair_order)) { echo 'Commandes validées'; } else { echo 'Commande validée'; } ?>",
									text: "<?php if(is_object($pair_order)) { echo 'Vos commandes ont été ajoutées avec succès, vous pouvez suivre leur évolution depuis la page \"Mes commandes\"'; } else { echo 'Votre commande à été ajouté avec succès, vous pouvez suivre son évolution depuis la page \"Mes commandes\"'; } ?>",
									type: "success",
									confirmButtonClass: 'btn-warning',
									confirmButtonText: "Ok",
									closeOnConfirm: false
								}, function () {
									window.location.href = '/admin/passer_commande/<?php echo $user_info[0]->id_users; ?>';
								});
							}

						}
					},
					error:function(){
						$("#loading-overlay,#loading").hide();
					}
				});

				$(this).parent().fadeOut();

			}

		}

	}); 
	
	$('#commande_ferme').click(function(){ 
	$('#type_commande').val('1');
	var currentForm = $(this).closest('form');
		currentForm.find('.ancienne_commande_ref').hide();
		$('.next .btn').removeClass('disabled');
		$('.ec_commande_status').fadeOut(60);
	})

	$('#casse_atelier').click(function(){ 
	$('#type_commande').val('2');
	var currentForm = $(this).closest('form');
  		$('.next .btn').addClass('disabled');

			$.ajax({
				type: "POST",
				url: "/admin/ECCreditCheck/<?php echo $user_info[0]->id_users; ?>",
				success: function(data){

					if(data!="" && data == "not_logged") {
						window.location.reload();
					}
					else if(data <= 0){
						currentForm.find('#commande_type').addClass('row_error');
						currentForm.find('.ancienne_commande_ref').hide();
						currentForm.find('.ec_commande_status').find('.alert').addClass('alert-danger').removeClass('alert-warning').html('Vous ne disposez d\'aucun crédit Erreur / Casse');
						$('.next .btn').addClass('disabled');
					} else {
						currentForm.find('.ancienne_commande_ref').show();
						$('#div1_ref_client').removeClass('hide');
						currentForm.find('.ec_commande_status').find('.alert').addClass('alert-warning').removeClass('alert-danger').html('Votre crédit : <b>'+data+' €</b>');
						currentForm.find('#commande_type').removeClass('row_error');
					}

				},
				error:function(){
					currentForm.find('.ec_commande_status').find('span').addClass('error').html('Une erreur est survenue, veuillez recharger la page et réessayer.');
					currentForm.find("#loading-overlay,#loading").hide();
					$('.next .btn').addClass('disabled');
				}
			});


			$('.ec_commande_status').fadeIn(60);
	})

	$('#erreur_ophtalmologiste').click(function(){ 
	$('#type_commande').val('3');
	var currentForm = $(this).closest('form');
  		$('.next .btn').addClass('disabled');

			$.ajax({
				type: "POST",
				url: "/admin/ECCreditCheck/<?php echo $user_info[0]->id_users; ?>",
				success: function(data){

					if(data!="" && data == "not_logged") {
						window.location.reload();
					}
					else if(data <= 0){
						currentForm.find('#commande_type').addClass('row_error');
						currentForm.find('.ancienne_commande_ref').hide();
						currentForm.find('.ec_commande_status').find('.alert').addClass('alert-danger').removeClass('alert-warning').html('Vous ne disposez d\'aucun crédit Erreur / Casse');
						$('.next .btn').addClass('disabled');
					} else {
						currentForm.find('.ancienne_commande_ref').show();
						$('#div1_ref_client').removeClass('hide');
						currentForm.find('.ec_commande_status').find('.alert').addClass('alert-warning').removeClass('alert-danger').html('Votre crédit : <b>'+data+' €</b>');
						currentForm.find('#commande_type').removeClass('row_error');
					}

				},
				error:function(){
					currentForm.find('.ec_commande_status').find('span').addClass('error').html('Une erreur est survenue, veuillez recharger la page et réessayer.');
					currentForm.find("#loading-overlay,#loading").hide();
					$('.next .btn').addClass('disabled');
				}
			});


			$('.ec_commande_status').fadeIn(60);
	})
	
	$('#commandeForm').on('change', 'input[name="miroir"], select[name="id_verre"], input[name="only_gauche"], input[name="only_droit"]', function() {

		var option_price = 0;
		var total_price = 0;


		var cote = "", opose = '_gauche', elem_opose = '_gauche', elem = '_droit';

		if($(this).attr('id') !== undefined && $(this).attr('id').indexOf('gauche') != -1){
			cote= "_gauche";
			opose= "";
			elem_opose= "_droit";
			elem = "_gauche";
		}

		if($('input[name="only'+elem+'"]').is(':checked')) {
			$('.correction'+elem_opose).hide();
		}
		else {
			$('.correction'+elem_opose).show();
		}

		if($('input[name="type_commande"]:checked').val() > 1) {

			if($('select[name="id_verre"] option:selected').val() != 0) {

				$.ajax({
					type: "POST",
					url: "/admin/getPrixVerre/<?php echo $user_info[0]->id_users; ?>",
					data: {'id': $('select[name="id_verre"] option:selected').val()},
					dataType: "html",
					success: function (data) {

						$.ajax({
							type: "POST",
							url: "/admin/ECCreditCheck/<?php echo $user_info[0]->id_users; ?>",
							beforeSend:function(){
								$("#loading-overlay,#loading").show();
							},
							success: function(credit){

								if(credit!="" && credit == "not_logged") {
									window.location.reload();
								}

								if($('input[name="miroir"]:checked').val() > 0) {
									option_price = 7;
								}

								if ($('input[name="only_gauche"]').is(':checked') || $('input[name="only_droit"]').is(':checked')) {
									total_price += parseFloat(data);
									total_price += parseFloat(option_price);
								}
								else {
									total_price += parseFloat(data * 2);
									total_price += parseFloat(option_price*2);
								}

								$('.credit_casse').text(credit);
								$('.total_commande').text(total_price);

								var diff = credit-total_price;

								if(diff < 0) {
									$('.limite_commande').fadeIn(60);
									$('.next .btn').addClass('disabled');
								}
								else {
									$('.limite_commande').fadeOut(60);
									$('.next .btn').removeClass('disabled');
								}


								$("#loading-overlay,#loading").hide();
							},
						});

					},
				});

			}

		}

	});
	
	
});  
	</script>

<?php include_once('footer.php'); ?>