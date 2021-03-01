<?php
include_once('header.php');
include_once('menu.php');
?>
<style>
.select2-container .select2-choice > .select2-chosen {
    white-space: break-spaces;
    height: auto;
}
</style>
<script>
// JavaScript Document
var type_commande_verre = 1;
var commande_omega = <?php echo $id_commande_omega; ?>;

$(document).ready(function($){

	$(function(){
        $(document).on('click','input[type=text]',function(){ this.select(); });
        $(document).on('click','input[type=number]',function(){ this.select(); });
    });
    
    function roundToNearest(numToRound, numToRoundTo) {
    numToRoundTo = 1 / (numToRoundTo);

    return (Math.round(numToRound * numToRoundTo) / numToRoundTo).toFixed(2);
}

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

$('#indices').on('change', function() {

	$('#div_refraction').addClass('hide')
    $('#generation').val("").change();
    $('#lensFocalGroup').val("").change();
    $("#generation_progressif").css("display", "none");
    $('#precalibrage').addClass('hide');
    
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
});
$('input[name=cylindreD]').focus(function() { 
    $('#produit').addClass('hide');
    $("#detailD").css("display", "none");
    $("#afficherV").css("display", "inline-block");
    $('#precalibrage').addClass('hide');
});
$('input[name=axeD]').focus(function() { 
    $('#produit').addClass('hide');
    $("#detailD").css("display", "none");
    $("#afficherV").css("display", "inline-block");
    $('#precalibrage').addClass('hide');
});
$('input[name=additionD]').focus(function() { 
    $('#produit').addClass('hide');
    $("#detailD").css("display", "none");
    $("#afficherV").css("display", "inline-block");
    $('#precalibrage').addClass('hide');
});
$('input[name=sphereG]').focus(function() { 
    $('#produit').addClass('hide');
    $("#detailD").css("display", "none");
    $("#afficherV").css("display", "inline-block");
    $('#precalibrage').addClass('hide');
});
$('input[name=cylindreG]').focus(function() { 
    $('#produit').addClass('hide');
    $("#detailD").css("display", "none");
    $("#afficherV").css("display", "inline-block");
    $('#precalibrage').addClass('hide');
});
$('input[name=axeG]').focus(function() { 
    $('#produit').addClass('hide');
    $("#detailD").css("display", "none");
    $("#afficherV").css("display", "inline-block");
    $('#precalibrage').addClass('hide');
});
$('input[name=additionG]').focus(function() { 
    $('#produit').addClass('hide');
    $("#detailD").css("display", "none");
    $("#afficherV").css("display", "inline-block");
    $('#precalibrage').addClass('hide');
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
    	
  /*  	if($("#droit").prop('checked') == true && $("#gauche").prop('checked') == true && cylindreG == "+0.00"){
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
   
 /*   if($("#droit").prop('checked') == true && $("#gauche").prop('checked') == true && axeG == "0")
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
		
		$("#VersGauche").css("display", "block");
	}
	else
	{
		$(".display_gauche").css("display", "none");
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
		
		$("#VersDroit").css("display", "block");
	}
	else
	{
		$(".display_droit").css("display", "none");
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
    $('#type_de_verreG option[value="Tous"]').prop('selected', true);
    $('#teinteG option[value=""]').prop('selected', true);
    $('#traitementG option[value=""]').prop('selected', true);
    $('#diametreG option[value=""]').prop('selected', true);
    $('#galbeG option[value="Standard"]').prop('selected', true);
    
  
    $('#type_de_verreG').trigger('change');
   
     
	if(indiceId != "" && (cylindreD != '' || cylindreG != '')) {
	   getTypedeVerre(indiceId,lensFocalGroup,generation,sphereD,sphereG,cylindreD,cylindreG,axeD,axeG,additionD,additionG,stockD,stockG,progressionD,progressionG,droite,gauche,panierA);
	   
	} 
});

$("input[name='dispoD']").change(function(){

	$('#precalibrage').addClass('hide');
  	
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
	
	var progressionD = $('#progressionD').val();
    var progressionG = $('#progressionG').val();
    
    if(stockD == "FabricationD")
    {
    	$('.display_fabrication').removeClass('hide');
		$('.display_stock').addClass('hide');
		
		$('#teinteD').prop('disabled', false);
		$('#traitementD').prop('disabled', false);
		$('#galbeD').prop('disabled', false);
    }
    else
    {
    	$('.display_stock').removeClass('hide');
		$('.display_fabrication').addClass('hide');
		
		$('#teinteD').prop('disabled', true);
		$('#traitementD').prop('disabled', true);
		$('#galbeD').prop('disabled', true);
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
    
    $('#type_de_verreD').trigger('change');
     
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
    
    var progressionD = $('#progressionD').val();
    var progressionG = $('#progressionG').val();
    
    var diametreG = $('#diametreG').val();
    var selectedText = $("#type_de_verreD option:selected").html();
    var selectedTextG = $("#type_de_verreG option:selected").html();
    
   
	$('.eye_text, .corrections .d, .corrections .g').hide();
	
    
    $('#nomverreDH').val(selectedText);
    
    $('#to_etape2').removeClass('disabled');
    
    $('#teinteD').empty();
    $('#traitementD').empty();
    

	if (type_de_verreD.indexOf("]") >= 0)
	{
		
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
		
		$('#teinteD').prop('disabled', 'disabled');
		$('#traitementD').prop('disabled', 'disabled');
		$('#galbeD').prop('disabled', 'disabled');
		
		
		$('#teinteD').append('<option value="">----</option>');
		$('#teinteD').append('<option value="">----</option>');
		
		$('#diametreD').empty();    
        $('#traitementD').append('<option value="">----</option>');
		
        	
		if(type_de_verreD == "]26783")
		{
			$('#diametreD').append('<option value="70">70</option>');
		}
		else
		{
			var info_type_de_verreD = type_de_verreD.split('*');
			
			var diametre_type_de_verreD = info_type_de_verreD[1].split(',');
			for (i = 0; i < diametre_type_de_verreD.length-1; i++) {
  				$('#diametreD').append('<option value="'+diametre_type_de_verreD[i]+'">'+diametre_type_de_verreD[i]+'</option>');
  			}
		}
		
		
	}
	else
	{
    if(type_de_verreD != "") {
    		
			if(selectedText.indexOf("-stock") >= 0 || selectedText.indexOf(" - stock") >= 0)
			{
			    type_commande_verre = 2;
			/*	$('#teinteD').append('<option value="">----</option>');
				$('#teinteD option:eq(0)').prop('selected', true);
				//$('#traitementD').empty();
				$('#traitementD').append('<option value="">----</option>');
				$('#traitementD option:eq(0)').prop('selected', true);
				
				$('#teinteD').prop('disabled', true);
				$('#traitementD').prop('disabled', true);
				$('#galbeD').prop('disabled', true);
				*/
			}
			else
			{
				type_commande_verre = 1;
			}
				$('#teinteD').prop('disabled', false);
				$('#traitementD').prop('disabled', false);
				$('#galbeD').prop('disabled', false);
				
				
				var k = "";
				$.ajax({
						type: "POST",
						url: "/admin/getOptions/",
						data: {"lens" : type_de_verreD},
						dataType: "json",
						success: function (data) {		
						
						console.log(data);
								
						//$('#traitementD').append('<option value="0">Aucun</option>');
						$('#traitementD option:eq(0)').prop('selected', true);

						/*data.sort(function(a, b) {
							var x = a.prix, y = b.prix;
							return x < y ? -1 : x > y ? 1 : 0;
						});*/

						$.each(data, function(key, value){
							
								if(value.name != "Express 24" && value.name != "Second pair")
									$('#traitementD').append('<option value="'+ value.code +'">' + value.name + '</option>');

						});
						
						

					}
			
				});
				
    			if(indiceId != "1.53" && indiceId != "1.59")
				{
					var c = "";
					
					$.ajax({
						type: "POST",
						url: "/admin/getColorWithPerso/",
						data: {"lens" : ""},
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
								$('#teinteD').append('<option value="'+ value.code +'">' + value.name + '</option>');
						
							});
							
						}
			
					});	
				}
			
    	
			$.ajax({
					type: "POST",
					url: "/admin/get_Diametre/",
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
					if(selectedText.indexOf("-stock") == -1 && selectedText.indexOf(" - stock") == -1)
					{
						$('#diametreD').append('<option value="precalibrage">Précalibrage (Gratuit)</option>');
					}
				}
			});	
			
			
    	}
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
	
	if(sphereD == sphereG && cylindreD==cylindreG && axeD==axeG && additionD==additionG  && progressionD==progressionG && stockD==stockG && droite && gauche && type_de_verreG=="")
	{
		//alert("copy")
		setTimeout(function(){
			copyVersDroit();

		},1000);
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
    
    var progressionD = $('#progressionD').val();
    var progressionG = $('#progressionG').val();
    
    var selectedText = $("#type_de_verreG option:selected").html();
    var selectedTextD = $("#type_de_verreD option:selected").html();
    
    if(selectedText.indexOf("Panier") >= 0 || selectedTextD.indexOf("Panier") >= 0)
	{	
		panierA = 1;
		
		
	}
	else
	{
		panierA = 0;
		
		
	}
    
	$('.eye_text, .corrections .d, .corrections .g').hide();
	
	
    
    if(selectedTextD.indexOf("-stock") >= 0 || selectedTextD.indexOf(" - stock") >= 0 || type_de_verreD == "")
    {
    	
    	type_commande_verre = 2;
    }
    
    $('#nomverreGH').val(selectedText);
    
    var droite = $('#droit').is(':checked');
	var gauche = $('#gauche').is(':checked');
	
	$('#to_etape2').removeClass('disabled');
    
    
    $('#teinteG').empty();
    $('#traitementG').empty();    
    
    
	if (type_de_verreG.indexOf("]") >= 0)
	{
		
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
		$('#galbeG').prop('disabled', 'disabled');
		
		
    	$('#teinteG').append('<option value="">----</option>');
    	$('#traitementG').append('<option value="">----</option>');
		
		$('#diametreG').empty();    
        $('#diametreG').append('<option value="">----</option>');
		
        	
		if(type_de_verreG == "]26783")
		{
			$('#diametreG').append('<option value="70">70</option>');
		}
		else
		{
			var info_type_de_verreG = type_de_verreG.split('*');
			
			var diametre_type_de_verreG = info_type_de_verreG[1].split(',');
			for (i = 0; i < diametre_type_de_verreG.length-1; i++) {
  				$('#diametreG').append('<option value="'+diametre_type_de_verreG[i]+'">'+diametre_type_de_verreG[i]+'</option>');
  			}
		}
		
	}
	else
	{
    	if(type_de_verreG != "") {
    
			if(selectedText.indexOf("-stock") >= 0 || selectedText.indexOf(" - stock") >= 0)
			{
			    type_commande_verre = 2;
			/*	$('#teinteG').append('<option value="">----</option>');
				$('#teinteG option:eq(0)').prop('selected', true);
				
				$('#traitementG').append('<option value="">----</option>');
				$('#traitementG option:eq(0)').prop('selected', true);
				
				$('#teinteG').prop('disabled', true);
				$('#traitementG').prop('disabled', true);
				$('#galbeG').prop('disabled', true);
*/
			}
			else
			{
				type_commande_verre = 1;
			}
				$('#teinteG').prop('disabled', false);
				$('#traitementG').prop('disabled', false);
				$('#galbeG').prop('disabled', false);
				
				
			
				var k = "";
				$.ajax({
						type: "POST",
						url: "/admin/getOptions/",
						data: {"lens" : type_de_verreG},
						dataType: "json",
						success: function (data) {		
							
						console.log(data);
					//	$('#traitementG').append('<option value="0">Aucun</option>');
						$('#traitementG option:eq(0)').prop('selected', true);

						$.each(data, function(key, value){
							
								if(value.name != "Express 24" && value.name != "Second pair")
									$('#traitementG').append('<option value="'+ value.code +'">' + value.name + '</option>');

						});

					}
			
				});
				
    			if(indiceId != "1.53" && indiceId != "1.59")
				{
					var c = "";
					$.ajax({
						type: "POST",
						url: "/admin/getColorWithPerso/",
						data: {"lens" : ""},
						dataType: "json",
						success: function (data) {		
						
						$('#teinteG').append('<option value="">Aucune</option>');
						$('#teinteG option:eq(0)').prop('selected', true);

						/*data.sort(function(a, b) {
							var x = a.prix, y = b.prix;
							return x < y ? -1 : x > y ? 1 : 0;
						});*/

						$.each(data, function(key, value){
							$('#teinteG').append('<option value="'+ value.code +'">' + value.name + '</option>');
					
						});
						
						}
			
					});	
				}
				
				
			
    	
			$.ajax({
					type: "POST",
					url: "/admin/get_Diametre/",
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
					
					if(selectedText.indexOf("-stock") == -1 && selectedText.indexOf(" - stock") == -1)
					{
						$('#diametreG').append('<option value="precalibrage">Précalibrage (Gratuit)</option>');
					}
				}
			});	
    		
    	
    	}
    }	
    
  
    
    if(diametreD == 'precalibrage')
	{
		$('#precalibrage').removeClass('hide');
	}
	else
	{
		$('#precalibrage').addClass('hide');
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
    
    var progressionD = $('#progressionD').val();
    var progressionG = $('#progressionG').val();
    
    var diametreG = $('#diametreG').val();
    
    var selectedText = $("#teinteD option:selected").html();

	$('.eye_text, .corrections .d, .corrections .g').hide();
	
    $("#teinteDH").val(selectedText);
   
   $("#teintepersoD").val("");
    
  /* if(teinteD == 'CUST_24' || teinteD == 'CUST_25')
    {
    	$("#teintepersoD").removeClass("hide");
    }
    else
    {
    	$("#teintepersoD").addClass("hide");
    }*/
    
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
	
    if(sphereD == sphereG && cylindreD==cylindreG && axeD==axeG && additionD==additionG  && progressionD==progressionG && stockD==stockG && droite && gauche && type_de_verreG==type_de_verreD && teinteD!="" && (teinteG=="" || teinteG==teinteD) && (traitementG=="" || traitementG=="0") && diametreG=="")
	{
		
		setTimeout(function(){
			copyVersDroit();

		},1000);
	}
    
});

$('#teinteG').on('change', function() {

   var teinte = $('#teinteG').val();
   
   var selectedText = $("#teinteG option:selected").html();
    
    $("#teinteGH").val(selectedText);
    
	$('.eye_text, .corrections .d, .corrections .g').hide();
	
   
   $("#teintepersoG").val("");
   
   $("#teintepersoG").addClass("hide");
    
   /*if(teinte == 'CUST_24' || teinte == 'CUST_25')
    {
    	$("#teintepersoG").removeClass("hide");
    }
    else
    {
    	$("#teintepersoG").addClass("hide");
    }*/
    
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
		if(selectedTextD.indexOf("-stock") >= 0 || selectedTextD.indexOf(" - stock") >= 0)
		{
			
		}
		else
		{
			
			if((droite && type_de_verreD != "" && optionType_de_verreD.indexOf("-stock") == -1 && optionType_de_verreD.indexOf(" - stock") == -1 && optionType_de_verreD.indexOf(" - stock") == -1) || (droite && type_de_verreD != "" && optionType_de_verreD.indexOf("Panier") >= 0))
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
				$('.verres').find('.diam_verre').text(diametreD_text);
				$('.verres').find('.miroir').text(traitementD.split('(')[0]+" "+teinteD.split('(')[0]);
				
				if(galbeD != "Standard")
				{
					$('.verres').find('.galbe').text(" - Galbe:"+galbeD);
				}
				
			}
			
			
		}
		
    }
    
	$('.eye_text, .corrections .d, .corrections .g').hide();
	
	
    
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
    
    
    if(sphereD == sphereG && cylindreD==cylindreG && axeD==axeG && additionD==additionG  && progressionD==progressionG && stockD==stockG && droite && gauche && type_de_verreG==type_de_verreD && (teinteGval==teinteDval) && (traitementGval==traitementDval) && (diametreG=="" || diametreD==diametreG) && diametreD!="")
	{
		
		setTimeout(function(){
			copyVersDroit();

		},1000);
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
        if(selectedTextG.indexOf("-stock") >= 0 || selectedTextG.indexOf(" - stock") >= 0)
		{
			
		}
		else
		{
			
			
			if((gauche && type_de_verreG != "" && optionType_de_verreG.indexOf("-stock") == -1 && optionType_de_verreG.indexOf(" - stock") == -1) || (gauche && type_de_verreG != "" && optionType_de_verreG.indexOf("Panier") >= 0))
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
				$('.verres').find('.diam_verre').text(diametreG_text);
				$('.verres').find('.miroir').text(traitementG.split('(')[0]+" "+teinteG.split('(')[0]);
				
				if(galbeG != "Standard")
				{
					$('.verres').find('.galbe').text(" - Galbe:"+galbeG);
				}
			}
		}
    }
    
	$('.eye_text, .corrections .d, .corrections .g').hide();
	
});



$('#galbeD').on('change', function() {
    var galbeD = $(this).val();
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
    
    var stockD = $('input[name="dispoD"]:checked').val()
	var stockG = $('input[name="dispoG"]:checked').val()
    
    var progressionD = $('#progressionD').val();
    var progressionG = $('#progressionG').val();
    

	$('.eye_text, .corrections .d, .corrections .g').hide();
	
	
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
    
    var progressionD = $('#progressionD').val();
    var progressionG = $('#progressionG').val();
    
    var diametreG = $('#diametreG').val();
  
	$('.eye_text, .corrections .d, .corrections .g').hide();
	
	
    
    if(traitementD == "0")
    {
    	traitementD = "";
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
    
    if(sphereD == sphereG && cylindreD==cylindreG && axeD==axeG && additionD==additionG  && progressionD==progressionG && stockD==stockG && droite && gauche && type_de_verreG==type_de_verreD && (traitementD!="" && traitementD!="0") && (teinteG=="" || teinteG==teinteD) && (traitementG=="" || traitementG=="0" || traitementG==traitementD) && diametreG=="")
	{
		
		setTimeout(function(){
			copyVersDroit();

		},1000);
	}
});

$('#traitementG').on('change', function() {
	var stockD = $('input[name="dispoG"]:checked').val()
	var traitementG = $(this).val();
    var type_de_verreG = $('#type_de_verreG').val();
    var teinteG = $('#teinteG').val();
    
	$('.eye_text, .corrections .d, .corrections .g').hide();
	
	
    var selectedText = $("#traitementG option:selected").html();  
    $("#traitementGH").val(selectedText);
});

$('#galbeG').on('change', function() {
var stockD = $('input[name="dispoD"]:checked').val();
	
	$('.eye_text, .corrections .d, .corrections .g').hide();
	
	
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
	
	var progressionD = $('#progressionD').val();
    var progressionG = $('#progressionG').val();
    
    $("#teintepersoD").val("");
    $("#teintepersoD").addClass("hide");
    $("#teintepersoG").val("");
    $("#teintepersoG").addClass("hide");
    
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
    
		
	}
	
    
    $('#to_etape2').addClass('disabled');
    
    
    $('input[name=dispoD][value=ToutD]').prop('checked', true);
    $('input[name=dispoG][value=ToutD]').prop('checked', true);
    
    var stockD = $('input[name="dispoD"]:checked').val()
	var stockG = $('input[name="dispoG"]:checked').val()
    
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
		
		
	
		if(additionD == '')
			additionD = '-';
		else
		{
			if (additionD.indexOf("+") >= 0)
			{
				additionD = additionD.replace('+', '');
			}
			else if (additionD.indexOf("-") >= 0)
			{
		
			}
			else
			{
				var new_additionD = "+"+additionD
				$("#additionD").val(new_additionD); 
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
			}
			else if (additionG.indexOf("-") >= 0)
			{
		
			}
			else
			{
				var new_additionG = "+"+additionG
				$("#additionG").val(new_additionG); 
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
		
	
		if(cylindreD != '-' && droite)
		{
			
				$('#type_de_verreD').empty();
				$('#type_de_verreD').append('<option value="">-- Choisir --</option>');
			
			
				//alert("indiceId:"+indiceId+" ,lensFocalGroup:"+lensFocalGroup+" ,generation:"+generation+" ,sphereD:"+sphereD+" ,sphereG:"+sphereG+" ,cylindreD:"+cylindreD+" ,cylindreG:"+cylindreG+" ,axeD:"+axeD+" ,axeG:"+axeG+" ,additionD:"+additionD+" ,additionG:"+additionG+" ,stockD:"+stockD+" ,stockG:"+stockG+" ,progressionD:"+progressionD+" ,progressionG:"+progressionG);
			/*	if((indiceId == "1.5" || indiceId == "1.6" || indiceId == "1.59" || indiceId == "1.67") && (lensFocalGroup == "1" || ((lensFocalGroup == "3" && ((progressionD == 'Short' || progressionD == 'Tous')) && (generation == "Progressif de stock")))) && (stockD == 'StockD' || stockD == 'ToutD'))
				{
				
					//alert("indiceId:"+indiceId+" ,lensFocalGroup:"+lensFocalGroup+" ,generation:"+generation+" ,sphereD:"+sphereD+" ,sphereG:"+sphereG+" ,cylindreD:"+cylindreD+" ,cylindreG:"+cylindreG+" ,axeD:"+axeD+" ,axeG:"+axeG+" ,additionD:"+additionD+" ,additionG:"+additionG+" ,stockD:"+stockD+" ,stockG:"+stockG+" ,progressionD:"+progressionD+" ,progressionG:"+progressionG);
				
					$.ajax({
						type: "POST",
						url: "/admin/getStockTypeDeVerre/",
						data: {"indiceId" : indiceId, "lensFocalGroup" : lensFocalGroup, "generation" : generation,"sphereD" : sphereD,"cylindreD" : cylindreD,"axeD" : axeD,"additionD" : additionD,"stockD" : stockD,"panierA" : panierA},
						dataType: "json",
						success: function (data) {	
						//alert(data);
						//console.log(data);	
						$.each(data, function(key, value){
						
						if(lensFocalGroup == "3")
						{
							$('#type_de_verreD').append('<option value="'+ value.code +'">'+ value.name + '</option>');
						}
						else
						{
							$('#type_de_verreD').append('<option value="]'+ value.id_verre +'*'+value.diametre+'">'+ value.name + '</option>');
						}
				
						})
					  }
					})
					//return false;
				}*/
			
				if(lensFocalGroup != "" && lensFocalGroup !="-")
				{
					//alert("progressionD:"+progressionD);
				$.ajax({
						type: "POST",
						url: "/admin/getTypeDeVerreAll",
						data: {"indiceId" : indiceId, "lensFocalGroup" : lensFocalGroup, "generation" : generation,"sphereD" : sphereD,"cylindreD" : cylindreD,"axeD" : axeD,"additionD" : additionD,"stockD" : stockD,"panierA" : panierA},
						dataType: "json",
						success: function (data) {		
						console.log(data);	
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
						
						if(progressionD == '' && lensFocalGroup == '3')
						{
							$('#type_de_verreD').append('<option value="'+ value.code +'">'+  value.name+'</option>');
						}
						else if(progressionD == 'Tous')
						{
							$('#type_de_verreD').append('<option value="'+ value.code +'">'+  value.name +'</option>');
						}
						else if(progressionD == 'Regular')
						{
							if ((value.name.indexOf(" R ") >= 0 || (value.name.indexOf("T-One 18 ") >= 0) || (value.name.indexOf("Panier A Initial 18 ") >= 0)))
							{
								$('#type_de_verreD').append('<option value="'+ value.code +'">'+  value.name + '</option>');
							}
						}
						else if(progressionD == 'Short')
						{
							if ((value.name.indexOf(" S ") >= 0 || (value.name.indexOf("T-One 17 ") >= 0) || (value.name.indexOf("Panier A Initial 17 ") >= 0)))
							{
								$('#type_de_verreD').append('<option value="'+ value.code +'">'+  value.name +'</option>');
							}
						}
						else if(progressionD == 'Extra Short')
						{
							if ((value.name.indexOf(" E ") >= 0 || (value.name.indexOf("T-One 16 ") >= 0) || (value.name.indexOf("Panier A Initial 16 ") >= 0)))
							{
								$('#type_de_verreD').append('<option value="'+ value.code +'">'+  value.name +'</option>');
							}
						}
						else if(progressionD == 'Ultra Short')
						{
							if ((value.name.indexOf(" U ") >= 0 || (value.name.indexOf("T-One 15 ") >= 0) || (value.name.indexOf("Panier A Initial 15 ") >= 0)))
							{
								$('#type_de_verreD').append('<option value="'+ value.code +'">'+  value.name +'</option>');
							}
						}	
						else
						{
							if ((value.name.indexOf("-stock") >= 0) || (value.name.indexOf("- stock") >= 0) || (value.name.indexOf("-Stock") >= 0) )
							{
								$('#type_de_verreD').append('<option value="'+ value.code +'">'+  value.name + '</option>');
							}
							else
							{
								$('#type_de_verreD').append('<option value="'+ value.code +'">'+  value.name + '</option>');
							}
						}
						});	
						}
					});
				
				
					}
					
			
				}
			
			   // alert("cylindreG: "+cylindreG)
				if(cylindreG != '-' && gauche)
				{
				
					//console.log(sphereD+"=="+sphereG+" && "+cylindreD+"=="+cylindreG+" && "+axeD+"=="+axeG+" && "+additionD+"=="+additionG+" && "+stockD+"=="+stockG)
				
					
						$('#type_de_verreG').empty();
						$('#type_de_verreG').append('<option value="">-- Choisir --</option>');
			
			
						//alert("indiceId:"+indiceId+" ,lensFocalGroup:"+lensFocalGroup+" ,generation:"+generation+" ,sphereD:"+sphereD+" ,sphereG:"+sphereG+" ,cylindreD:"+cylindreD+" ,cylindreG:"+cylindreG+" ,axeD:"+axeD+" ,axeG:"+axeG+" ,additionD:"+additionD+" ,additionG:"+additionG+" ,stockD:"+stockD+" ,stockG:"+stockG+" ,progressionD:"+progressionD+" ,progressionG:"+progressionG);
				/*		if((indiceId == "1.5" || indiceId == "1.6" || indiceId == "1.59" || indiceId == "1.67") && (lensFocalGroup == "1" || lensFocalGroup == "6" || ((lensFocalGroup == "3" && ((progressionG == 'Short' || progressionG == 'Tous')) && generation == "Progressif de stock"))) && (stockG == 'StockD' || stockG == 'ToutD'))
						{
				
							//alert("indiceId:"+indiceId+" ,lensFocalGroup:"+lensFocalGroup+" ,generation:"+generation+" ,sphereD:"+sphereD+" ,sphereG:"+sphereG+" ,cylindreD:"+cylindreD+" ,cylindreG:"+cylindreG+" ,axeD:"+axeD+" ,axeG:"+axeG+" ,additionD:"+additionD+" ,additionG:"+additionG+" ,stockD:"+stockD+" ,stockG:"+stockG+" ,progressionD:"+progressionD+" ,progressionG:"+progressionG);
				
							$.ajax({
								type: "POST",
								url: "/admin/getStockTypeDeVerre/",
								data: {"indiceId" : indiceId, "lensFocalGroup" : lensFocalGroup, "generation" : generation,"sphereD" : sphereG,"cylindreD" : cylindreG,"axeD" : axeG,"additionD" : additionG,"stockD" : stockG,"panierA" : panierA},
								dataType: "json",
								success: function (data) {	
								//alert(data);
								//console.log(data);	
								$.each(data, function(key, value){
								if(lensFocalGroup == "3")
								{
									$('#type_de_verreG').append('<option value="'+ value.code +'">'+ value.name + '</option>');
								}
								else
								{
									$('#type_de_verreG').append('<option value="]'+ value.id_verre +'*'+value.diametre+'">'+ value.name + '</option>');
								}
				
								})
							  }
							})
							//return false;
						}*/
			
						if(lensFocalGroup != "" && lensFocalGroup !="-")
						{
			
						$.ajax({
								type: "POST",
								url: "/admin/getTypeDeVerreAll",
								data: {"indiceId" : indiceId, "lensFocalGroup" : lensFocalGroup, "generation" : generation,"sphereD" : sphereG,"cylindreD" : cylindreG,"axeD" : axeG,"additionD" : additionG,"stockD" : stockG,"panierA" : panierA},
								dataType: "json",
								success: function (data) {		
								//console.log(data);	
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
						
								if(progressionG == '' && lensFocalGroup == '3')
								{
									$('#type_de_verreG').append('<option value="'+ value.code +'">'+  value.name + '</option>');
								}
								else if(progressionG == 'Tous')
								{
									$('#type_de_verreG').append('<option value="'+ value.code +'">'+  value.name +'</option>');
								}
								else if(progressionG == 'Regular')
								{
									if ((value.name.indexOf(" R ") >= 0 || (value.name.indexOf("T-One 18 ") >= 0)))
									{
										$('#type_de_verreG').append('<option value="'+ value.code +'">'+  value.name +'</option>');
									}
								}
								else if(progressionG == 'Short')
								{
									if ((value.name.indexOf(" S ") >= 0 || (value.name.indexOf("T-One 17 ") >= 0)))
									{
										$('#type_de_verreG').append('<option value="'+ value.code +'">'+  value.name + '</option>');
									}
								}
								else if(progressionG == 'Extra Short')
								{
									if ((value.name.indexOf(" E ") >= 0 || (value.name.indexOf("T-One 16 ") >= 0)))
									{
										$('#type_de_verreG').append('<option value="'+ value.code +'">'+  value.name + '</option>');
									}
								}
								else if(progressionG == 'Ultra Short')
								{
									if ((value.name.indexOf(" U ") >= 0 || (value.name.indexOf("T-One 15 ") >= 0)))
									{
										$('#type_de_verreG').append('<option value="'+ value.code +'">'+  value.name + '</option>');
									}
								}	
								else
								{
									if ((value.name.indexOf("-stock") >= 0) || (value.name.indexOf("- stock") >= 0) || (value.name.indexOf("-Stock") >= 0) )
									{
										$('#type_de_verreG').append('<option value="'+ value.code +'">'+  value.name + '</option>');
									}
									else
									{
										$('#type_de_verreG').append('<option value="'+ value.code +'">'+  value.name + '</option>');
									}
								}
								});	
								}
							});
							}
						
				}
				
				
        }
}



function copyVersDroit()
{
	var progressionD = $('#progressionD').val();
    var type_de_verreD = $('#type_de_verreD').val();
    var teinteD = $('#teinteD').val();
    var traitementD = $('#traitementD').val();
    var diametreD = $('#diametreD').val();
    var galbeD = $('#galbeD').val();
    var teintepersoD = $("#teintepersoD").val();
    
    var selectedText = $("#type_de_verreD option:selected").html();
    
    var dispoD = $('input[name="dispoD"]:checked').val();
    
   // $('input[name=dispoD][value=ToutD]').prop('checked', true);
    $('input[name=dispoG][value='+dispoD+']').prop('checked', true);
    
   /* if(teinteD == "CUST_24" || teinteD == "CUST_25")
    {
    	$("#teintepersoG").removeClass("hide");
    	$("#teintepersoG").val(teintepersoD);
    }
    else
    {
    	$("#teintepersoG").addClass("hide");
    	$("#teintepersoG").val("");
    }
    */
    
    if(progressionD != "" || type_de_verreD !="")
    {
    	$("#detailG").css("display", "block");
    }
    
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
			
			$('#teinteGH').val($('#teinteDH').val());
			$('#traitementGH').val($('#traitementDH').val());

	},500);
    

}

function copyVersGauche()
{
	var progressionG = $('#progressionG').val();
    var type_de_verreG = $('#type_de_verreG').val();
    var teinteG = $('#teinteG').val();
    var traitementG = $('#traitementG').val();
    var diametreG = $('#diametreG').val();
    var galbeG = $('#galbeG').val();
    
    var selectedText = $("#type_de_verreG option:selected").html();
    
    var teintepersoG = $("#teintepersoG").val();
    
    var dispoG = $('input[name="dispoG"]:checked').val();
    
   // $('input[name=dispoD][value=ToutD]').prop('checked', true);
    $('input[name=dispoD][value='+dispoG+']').prop('checked', true);

    
  /*  if(teinteG == "CUST_24" || teinteG == "CUST_25")
    {
    	$("#teintepersoD").removeClass("hide");
    	$("#teintepersoD").val(teintepersoG);
    }
    else
    {
    	$("#teintepersoD").addClass("hide");
    	$("#teintepersoD").val("");
    }
    */
    
    $("#detailD").css("display", "block");
    
    $('#progressionD').empty()
    $('#type_de_verreD').empty()
   // $('#teinteD').empty()
  //  $('#traitementD').empty()
    $('#diametreD').empty()
    
    
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
		if(progressionG!="")
			$('#progressionD option[value="'+ progressionG +'"]').prop('selected', true);
		if(type_de_verreG!="")
		{
			$('#type_de_verreD option[value="'+ type_de_verreG +'"]').prop('selected', true);
			$('#nomverreDH').val(selectedText);
		}
	},200);
	
	 setTimeout(function(){
		if(teinteG!="")
			$('#teinteD option[value="'+ teinteG +'"]').prop('selected', true);
		if(traitementG!="")
			$('#traitementD option[value="'+ traitementG +'"]').prop('selected', true);
		if(diametreG!="")
			$('#diametreD option[value="'+ diametreG +'"]').prop('selected', true);
		if(galbeG!="")
			$('#galbeD option[value="'+ galbeG +'"]').prop('selected', true);
		
		
	},500);
	
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
					
					  <div class="page-content container-fluid">
					  
		<?php echo '<div style="width:100%;position:fixed;z-index: 2;background-color: #f5f5f5;padding: 10px;"><h4 class="page-title">Choix d\'un autre verre</h4><table border="0" cellpadding="20" cellspacing="20" width="1200"><tr><td valign="top">'.$infos."</td><td valign='top'>".$detail."</td><td valign='top'>".$p."</td></tr></table></div>"; ?>
		
        <form id="commandeForm" class="form-edit-add form-commande" role="form"
              action=""
              method="POST" enctype="multipart/form-data" autocomplete="off">
           
              <div class="row">
                <div class="col-md-12" style="margin-top: 286px;">
					<div id="stepswizard" class="pull-in">
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
																	<div class="col-lg-10">

																			<div class="radio radio-warning radio-inline">
																				<input type="radio" id="stock_type_commande_1" value="1" name="type_commande" class="required" aria-required="true" checked>
																				<label for="stock_type_commande_1"> Commande ferme </label>
																			</div>
																			<div class="validator"></div>

																		</div>
																</div>
															</div>
														  </div>
												         </div>
														  <div class="col-xs-3">
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
														  <div class="col-xs-3 hide" id="type_produit">
															<div class="panel panel-default" id="lensFocalGroup_panel">
																  <div class="panel-heading"><h5 >Type de produit</h5></div>
																  <div class="panel-body" style="padding-top: 15px"><select class="form-control" id="lensFocalGroup" name="lensFocalGroup">
																	<option value="">-- Choisir --</option>
																	<option value="1">Unifocal</option>
																	<option value="2">Bifocal</option>
																	<option value="3">Progressif</option>
																	<option value="4">Dégressif</option>
																	<option value="5">Trifocal</option>
																	<option value="6">EyeFatigue</option>
																</select></div>
															  </div>
														  </div>
														  <div class="col-xs-3 hide" id="generation_progressif">
															<div class="panel panel-default" id="generation_panel">
																  <div class="panel-heading"><h5 >Génération</h5></div>
																  <div class="panel-body" style="padding-top: 15px"><select class="form-control" name="generation" id="generation">
																	    <option value="">-- Choisir --</option>
																	    <option value="T-One">T-One</option>
																		<option value="Platinium">Platinium</option>
																		<option value="Omega">Omega</option>
																		<option value="Elysium">Elysium</option>
																		<option value="Progressif de stock">Progressif de stock</option>
																		<option value="Panier A Initial">Panier A Initial</option>
																	</select></div>
															  </div>
														  </div>
														</div>		

														<div class="form-group row hide" id="div_refraction">
														  <div class="col-xs-11" id="tab_refraction">
															  <div class="panel panel-default" id="refraction_panel">
																<div class="panel-heading"><h5 >Refraction</h5></div>
																<div class="panel-body" style="padding-top: 15px">
																	<div class="col-xs-12">
																		 <div class="form-group row">
																				<div class="col-xs-1"></div>
																				<div class="col-xs-2"></div>
																				<div class="col-xs-2 text-center"><strong>Sphere</strong></div>
																				<div class="col-xs-2 text-center"><strong>Cylindre</strong></div>
																				<div class="col-xs-2 text-center"><strong>Axe</strong></div>
																				<div class="col-xs-2 text-center addition"><strong>Addition</strong></div>
																		 </div>
																		 <div class="form-group row">
																				<div class="col-xs-1"></div>
																				<div class="col-xs-2">
																					<strong>Droit</strong> <input type="checkbox" id="droit" name="droit" value="droit" style="float:right">
																				</div>
																				<div class="col-xs-2"><input type="text" class="form-control" name="sphereD" id="sphereD" value="+0.00"></div>
																				<div class="col-xs-2"><input type="text" class="form-control" name="cylindreD" id="cylindreD" value="+0.00"></div>
																				<div class="col-xs-2"><input type="number" class="form-control" name="axeD" id="axeD" value='0' min='0' max="360"></div>
																				<div class="col-xs-2"><input type="text" class="form-control" name="additionD" id="additionD" value="+0.00"></div>
																		 </div>
																		 <div class="form-group row">
																				<div class="col-xs-1"></div>
																				<div class="col-xs-2">
																					<strong>Gauche</strong> <input type="checkbox" id="gauche" name="gauche" value="gauche" style="float:right">
																				</div>
																				<div class="col-xs-2"><input type="text" class="form-control" name="sphereG" id="sphereG" value="+0.00"></div>
																				<div class="col-xs-2"><input type="text" class="form-control" name="cylindreG" id="cylindreG" value="+0.00"></div>
																				<div class="col-xs-2"><input type="number" class="form-control" name="axeG" id="axeG" value='0' min='0' max="360"></div>
																				<div class="col-xs-2"><input type="text" class="form-control" name="additionG" id="additionG" value="+0.00"></div>
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
																	  <div class="col-xs-6 ">
																		  <div class="panel panel-default display_droit">
																			<div class="panel-heading"><h5 >Droit <div class="btn btn-warning" style="float:right; cursor:hand;margin-top: -9px;" id="VersGauche"><strong>Copier sur le gauche >></strong></div></h5></div>
																			<div class="panel-body" style="padding-top: 15px">
																				<div class="form-group row" style="height: 28px;">
																					<div class="col-xs-3">Disponibilité</div>
																					<div class="col-xs-9">
																						<div class="radio radio-warning radio-inline">
																							<input type="radio" value="ToutD" id="ToutD" name="dispoD" aria-required="true" checked>
																							<label for="ToutD"> Tout </label>
																						</div>
																					
																						<div class="radio radio-warning radio-inline">
																							<input type="radio" value="StockD" id="StockD" name="dispoD" aria-required="true">
																							<label for="StockD"> Stock Omega</label>
																						</div>

																						<div class="radio radio-warning radio-inline">
																							<input type="radio" value="FabricationD" id="FabricationD" name="dispoD" aria-required="true">
																							<label for="FabricationD"> Fabrication </label>
																						</div>
																					</div>
																				</div>
																				<div class="form-group row"  id="progression_D">
																					<div class="col-xs-3">Progression</div>
																					<div class="col-xs-9"><select class="form-control" id="progressionD" name="progressionD">
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
																					<div class="col-xs-3">Type de verre</div>
																					<div class="col-xs-9"><select class="form-control select-search" id="type_de_verreD" name="type_de_verreD">
																						<option value="">-- Choisir --</option>
																						</select>
																					</div>
																				</div>
																				<div class="form-group row">
																					<div class="col-xs-3">Teinte</div>
																					<div class="col-xs-9"><select class="form-control " id="teinteD" name="teinteD" disabled>
																						<option value="">-- Choisir --</option>
																						</select>
																						<div>
																							<input type="text" value="" class="form-control hide" name="teintepersoD" id="teintepersoD" placeholder="Décrivez votre couleur personnalisée">
																						</div>
																					</div>
																				</div>
																				<div class="form-group row">
																					<div class="col-xs-3">Traitement</div>
																					<div class="col-xs-9"><select class="form-control " id="traitementD" name="traitementD" disabled>
																						<option value="">-- Choisir --</option>
																						</select>
																					</div>
																				</div>
																				<div class="form-group row">
																					<div class="col-xs-3">Diamètre</div>
																					<div class="col-xs-9"><select class="form-control " id="diametreD" name="diametreD">
																						<option value="">-- Choisir --</option>
																						</select>
																					</div>
																				</div>
																				<div class="form-group row">
																					<div class="col-xs-3">Prisme</div>
																					<div class="col-xs-9"><input type="number" lang="en" step="0.5" min="0.5" max="7" placeholder="Dioptries (aucune)" class="form-control" id="PrismeSphereD" name="PrismeSphereD" style=" width: 49%; float: left; margin-right: 2%;"><input type="number" step="1" min="0" max="360"  placeholder="Base (aucune)" class="form-control" id="PrismeCylindreD" name="PrismeCylindreD"  style=" width: 49%; float: left;">
																					</div>
																				</div>
																				<div class="form-group row">
																					<div class="col-xs-3">Galbe</div>
																					<div class="col-xs-9"><select class="form-control" id="galbeD" name="galbeD" disabled>
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
																				
																			</div>
																			</div>
																		  </div>
																	  </div>
																	  <div class="col-xs-6 " >
																		  <div class="panel panel-default display_gauche">
																			<div class="panel-heading"><h5 style="height: 16px;" ><div class="btn btn-warning" style="float: left;width: 188px;cursor:hand;margin-top: -9px;" id="VersDroit"><strong><< Copier sur le droit</strong></div><span style="float:right">Gauche</span></h5></div>
																			<div class="panel-body" style="padding-top: 15px">
																				<div class="form-group row" style="height: 28px;">
																					<div class="col-xs-3">Disponibilité</div>
																					<div class="col-xs-9">
																						<div class="radio radio-warning radio-inline">
																							<input type="radio" value="ToutD" id="ToutG" name="dispoG" aria-required="true" checked>
																							<label for="ToutG"> Tout </label>
																						</div>

																						<div class="radio radio-warning radio-inline">
																							<input type="radio" value="StockD" id="stockG" name="dispoG" aria-required="true">
																							<label for="StockG"> Stock Omega</label>
																						</div>

																						<div class="radio radio-warning radio-inline">
																							<input type="radio" value="FabricationD" id="FabricationG" name="dispoG" aria-required="true">
																							<label for="FabricationG"> Fabrication </label>
																						</div>
																					</div>
																				</div>
																				<div class="form-group row" id="progression_G">
																					<div class="col-xs-3">Progression</div>
																					<div class="col-xs-9"><select class="form-control" id="progressionG" name="progressionG">
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
																					<div class="col-xs-3">Type de verre</div>
																					<div class="col-xs-9"><select class="form-control select-search" id="type_de_verreG" name="type_de_verreG">
																						<option value="">-- Choisir --</option>
																						</select>
																					</div>
																				</div>
																				<div class="form-group row">
																					<div class="col-xs-3">Teinte</div>
																					<div class="col-xs-9"><select class="form-control " name="teinteG" id="teinteG" disabled>
																						<option value="">-- Choisir --</option>
																						</select>
																						<div>
																							<input type="text" value="" class="form-control hide" name="teintepersoG" id="teintepersoG" placeholder="Décrivez votre couleur personnalisée">
																						</div>
																					</div>
																				</div>
																				<div class="form-group row">
																					<div class="col-xs-3">Traitement</div>
																					<div class="col-xs-9"><select class="form-control " name="traitementG" id="traitementG" disabled>
																						<option value="">-- Choisir --</option>
																						</select>
																					</div>
																				</div>
																				<div class="form-group row">
																					<div class="col-xs-3">Diamètre</div>
																					<div class="col-xs-9"><select class="form-control " id="diametreG" name="diametreG">
																						<option value="">-- Choisir --</option>
																						</select>
																					</div>
																				</div>
																				<div class="form-group row">
																					<div class="col-xs-3">Prisme</div>
																					<div class="col-xs-9"><input type="number" lang="en" step="0.5" min="0.5" max="7" placeholder="Dioptries (aucune)" class="form-control" id="PrismeSphereG" name="PrismeSphereG" style=" width: 49%; float: left; margin-right: 2%;"><input type="number" step="1" min="0" max="360"  placeholder="Base (aucune)" class="form-control" id="PrismeCylindreG" name="PrismeCylindreG"  style=" width: 49%; float: left;">
																					</div>
																				</div>
																				<div class="form-group row">
																					<div class="col-xs-3">Galbe</div>
																					<div class="col-xs-9"><select class="form-control" id="galbeG" name="galbeG" disabled>
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

																				<div class="group-title"><span>Cliquez sur le calibre qui correspond le plus à votre commande.</span></div>

																				<div class="col-lg-8 col-lg-offset-2 col-sm-12">

																					<?php
																					$directory = $this->config->item('directory_img_calibre');
																					if ($handle = opendir($directory)) {

																						while (false !== ($image = readdir($handle))) {
																							if(is_file($directory."/".$image)){

																								list($img,$extension) = explode(".",$image);
																								if(false === strpos($img,'calibre')) {
																									echo '<img src="' . $pre_url . $directory . "/" . $image . '" alt="' . $img . '" height="70" style="margin:15px" class="calibre"/>';
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

																			<div class="group-title"><span><b>Mesures FREEFORM.</b> Toutes les mesures ci-dessous doivent être remplies en millimètre.</span></div>



																			<div class="form-group clearfix">
																				<label class="col-lg-2 col-sm-2 col-xs-3 control-label" for="cotea">
																					<img src="/static/img/mesure_freeform/cote_a.jpg" alt="Largeur boxing" />
																					<small>Largeur boxing</small>
																				</label>
																				<div class="col-lg-10 col-sm-10 col-xs-9">
																					<input id="cotea" name="cotea" type="text" class="form-control" pattern="[0-9]+([\.,][0-9]+)?">
																					<div class="validator"></div>
																				</div>
																			</div>

																			<div class="form-group clearfix">
																				<label class="col-lg-2 col-sm-2 col-xs-3 control-label" for="coteb">
																					<img src="/static/img/mesure_freeform/cote_b.jpg" alt="Hauteur boxing" />
																					<small>Hauteur boxing</small>
																				</label>
																				<div class="col-lg-10 col-sm-10 col-xs-9">
																					<input id="coteb" name="coteb" type="text" class="form-control"  pattern="[0-9]+([\.,][0-9]+)?">
																					<div class="validator"></div>
																				</div>
																			</div>

																			<div class="form-group clearfix">
																				<label class="col-lg-2 col-sm-2 col-xs-3 control-label" for="cotec">
																					<img src="/static/img/mesure_freeform/cote_c.jpg" alt="Taille du pont" />
																					<small>Taille du pont</small>
																				</label>
																				<div class="col-lg-10 col-sm-10 col-xs-9">
																					<input id="cotec" name="cotec" type="text" class="form-control"  pattern="[0-9]+([\.,][0-9]+)?">
																					<div class="validator"></div>
																				</div>
																			</div>

																			<div class="form-group clearfix">
																				<label class="col-lg-2 col-sm-2 col-xs-3 control-label" for="coted">
																					<img src="/static/img/mesure_freeform/cote_d.jpg" alt="Digonale verre en mm" />
																					<small>Digonale verre en mm</small>
																				</label>
																				<div class="col-lg-10 col-sm-10 col-xs-9">
																					<input id="coted" name="coted" type="text" class="form-control"  pattern="[0-9]+([\.,][0-9]+)?">
																					<div class="validator"></div>
																				</div>
																			</div>


																			<div class="form-group clearfix">
																				<label class="col-lg-2 control-label" for="type_monture">Type de monture</label>
																				<div class="col-lg-10">
																					<select name="type_monture" class="form-control required">
																						<option value="">Sélectionner un type</option>
																						<option value="Plastique">Plastique</option>
																						<option value="Optyl">Optyl</option>
																						<option value="Metal">Métal</option>
																						<option value="Nylor">Nylor</option>
																						<option value="Percee">Percée</option>
																					</select>
																					<div class="validator"></div>
																				</div>
																			</div>

																			<div class="form-group clearfix">
																				<label class="col-lg-2 control-label" for="epaisseur_bord_verre">Epaisseur minimum au bord du verre</label>
																				<div class="col-lg-10">
																					<input id="epaisseur_bord_verre" name="epaisseur_bord_verre" type="text" class="form-control"  pattern="[0-9]+([\.,][0-9]+)?" placeholder="A remplir en millimètre par pas de 0,1 mm" />
																					<div class="validator"></div>
																				</div>
																			</div>
																			
																			<div class="form-group div_pupilles clearfix">
																				<label class="col-lg-2 control-label" for="hauteur_ecart">Hauteur de montage et écarts pupillaires</label>
																				<div class="col-lg-10">

																					<div class="col-lg-6 col-sm-6 ecart_pup">

																						<div style="text-align:center;padding-bottom:10px">
																							Ecarts pupillaire <span class="topoffice" style="display: none;">VL</span>
																						</div>

																						<img alt="Ecart pupillaire" class="hep-image" src="/static/img/mesure_freeform/ecart_pup.jpg" style="margin-bottom: 18px;">

																						<div class="clearfix">
																							<div class="col-lg-6 col-sm-6 col-xs-6">
																								<label>Oeil droit</label>
																								<input type="text" name="ecart_puppillaire_droit" value="" class="form-control required decimal" pattern="[0-9]+([\.,][0-9]+)?">
																							</div>
																							<div class="col-lg-6 col-sm-6 col-xs-6">
																								<label>Oeil gauche</label>
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
																								<label>Oeil droit</label>
																								<input type="text" name="hauteur" value="" class="form-control required decimal" pattern="[0-9]+([\.,][0-9]+)?">
																							</div>
																							<div class="col-lg-6 col-sm-6 col-xs-6">
																								<label>Oeil gauche</label>
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
														
													</div>

												</div>									
										  </div>
									  </div>
								  </div>
								<ul class="pager m-b-0 wizard display_next">
									<li class="next1" style="float: right;"><a href="#" class="btn btn-warning btn-lg waves-effect waves-light disabled" id="to_etape2">Remplacer</a></li>
								</ul>
							</div>
							
							<input type="hidden" id="id_indice_verre" value="1" name="id_indice_verre">
							<input type="hidden" value="" id="nomverreDH" name="nomverreDH">
							<input type="hidden" value="" id="nomverreGH" name="nomverreGH">
					</div>
					 
		             
		        </div>
		    </div>
</form>
					
				</div>
				
		</div> <!-- container -->
	</div> <!-- content -->

	<!-- Form wizard -->
	<script src="/static/assets/plugins/bootstrap-wizard/jquery.bootstrap.wizard.js"></script>
	<script src="/static/assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>

	<script type="text/javascript">
	
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
	


	$(document).ready(function() {
	
	$('#lensFocalGroup').on('change', function() {

	$('#div_refraction').addClass('hide');
	$('#progression_D').addClass('hide');
  	$('#progression_G').addClass('hide');
  	
  	$('#precalibrage').addClass('hide');
  		
	$('#generation').val("").change();
	
	
	$('#sphereD').prop('readOnly', false);
	$('#sphereG').prop('readOnly', false);
	$('#cylindreD').prop('readOnly', false);
	$('#cylindreG').prop('readOnly', false);
	$('#axeD').prop('readOnly', false);
	$('#axeG').prop('readOnly', false);

	function addPlus(number) {
        if (!number.includes("-")) {
            number = "+" + number;
        }
        return number;
    }
	let sphereD = document.getElementById('spanSphereD').innerText;
        sphereD = addPlus(sphereD)
	let cylindreD = document.getElementById('spanCylindreD').innerText;
        cylindreD = addPlus(cylindreD);
    let axeD = 0;
    if (document.getElementById("spanAxeD")) {
        axeD = document.getElementById('spanAxeD').innerText;
    }
    let additionD = "+0.75";
    if (document.getElementById("spanAdditionD")) {
        additionD = document.getElementById('spanAdditionD').innerText;
        additionD = addPlus(additionD);
    }

        $('#sphereD').val(sphereD);
    $('#cylindreD').val(cylindreD);
    $('#axeD').val(axeD);
    $('#additionD').val(additionD);

    let sphereG = document.getElementById('spanSphereG').innerText;
        sphereG = addPlus(sphereG)
    let cylindreG = document.getElementById('spanCylindreG').innerText;
        cylindreG = addPlus(cylindreG);
    let axeG = 0;
    if (document.getElementById("spanAxeG")) {
        axeG = document.getElementById('spanAxeG').innerText;
    }
    let additionG = "+0.75";
    if (document.getElementById("spanAdditionG")) {
        additionG = document.getElementById('spanAdditionG').innerText;
        additionG = addPlus(additionG);
    }

    $('#sphereG').val(sphereG);
    $('#cylindreG').val(cylindreG);
    $('#axeG').val(axeG);
    $('#additionG').val(additionG);
 	
    
    var lensFocalGroup = $(this).val();
    var id_generation_verre = Number(lensFocalGroup) + 30; 
    $("#id_generation_verre").val(id_generation_verre);
    
    if(lensFocalGroup != "")
    {
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
			if ($('#additionD').val == 0 || $('#additionD').val == "+0.00") {
                $('#additionD').val("+0.75");
            }
            if ($('#additionG').val == 0 || $('#additionD').val == "+0.00") {
                $('#additionG').val("+0.75");
            }
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
			console.log($('#additionD').val());
              $('#additionD').val("+0.00");
              $('#additionG').val("+0.00");

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
    		$("#additionD").val(additionD);
    	}
    	
    	if (additionD.indexOf(".") < 0)
    	{
    		additionD = additionD+".00";
    		$("#additionD").val(additionD);
    	}
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
    		$("#additionG").val(additionG);
    	}
    	
    	if (additionG.indexOf(".") < 0)
    	{
    		additionG = additionG+".00";
    		$("#additionG").val(additionG);
    	}
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
			
	
    $( "#to_etape2" ).click(function() {			
	
		validFields();

		var $valid = $("#commandeForm").valid();
		if (!$valid) {
			$validator.focusInvalid();
			return false;
		}
					
		var formData = $('#commandeForm').serialize();
		//console.log(formData);
		
		var g = 0;
		var gauche = $('#gauche').is(':checked');
		var diametreG = $('#diametreG').val();
		var dCheck = $('#droit').is(':checked');
		var diametreD = $('#diametreD').val();
		
		if(gauche && diametreG == "")
		{
			g = 1;
			swal({
				title: "Erreur",
				text: "Veuillez spécifier un diamètre pour le verre gauche",
				type: "warning",
				showCancelButton: false,
				confirmButtonText: "OK",
				closeOnConfirm: true
			});

		}
		
		if(dCheck && diametreD == "")
		{
			g = 1;
			swal({
				title: "Erreur",
				text: "Veuillez spécifier un diamètre pour le verre droit",
				type: "warning",
				showCancelButton: false,
				confirmButtonText: "OK",
				closeOnConfirm: true
			});

		}
		
		if(g == 0)
		{
		$.ajax({
			type: "POST",
			url: "/admin/remplaceVerreOmega/<?php echo $id_commande_omega.'/'.$ref; ?>",
			data : formData,
			dataType:"html",
			beforeSend:function(){
				$("#recap_commande").empty().append('<div style="height:400px"><div style="width:150px;margin-left:auto;margin-right:auto;padding-top:10%;">Veuillez patienter</div></div>');
			},
			success: function(data){
				if(data=="error"){
					$("#recap_commande").empty().append('<div style="height:400px"><div style="width:550px;margin-left:auto;margin-right:auto;padding-top:10%;color:red;font-size:18px">Une erreur s\'est produite, veuillez recommencer. Si le problème persiste, envoyez un mail à </div></div>');
				}
				else{
					//window.location.replace("/admin/edi_omega");
					var n = $("a[id^=" + "button_commentaires_omega_" + "]").get(0).id
					window.location.replace("/admin/edi_omega?id="+n);
				}
			},
			error : function(){
				$("#recap_commande").empty().append('<div style="height:400px"><div style="width:550px;margin-left:auto;margin-right:auto;padding-top:10%;color:red;font-size:18px">Une erreur s\'est produite, veuillez recommencer. Si le problème persiste, envoyez un mail à </div></div>');
			}
		});
		
		}
		
		
	});
   
});  
	</script>

<?php include_once('footer.php'); ?>