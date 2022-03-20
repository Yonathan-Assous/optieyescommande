// JavaScript Document
$(document).ready(function($){
	$("#generation_progressif").css("display", "none");
	$("#Teledetourage").attr('disabled', true);
	$("#div_prismes").css("display", "none");
	
	$("#Stock_1").prop("checked", true);

	/*$('.display_stock').removeClass('hide')*/
	$('.display_fabrication').addClass('hide')
	$('.pager .previous').removeClass('disabled');

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

$('#ref_client').keyup(function() {
 
    var nombreCaractere = $(this).val().length;
 	nombreCaractere = 14-nombreCaractere;
    var msg = ' '+ nombreCaractere + ' Caractères restants';
    $('#compeur_caracteres').text(msg);
    
  })

$('input:radio[id="stock_type_commande_1"]').change(function(){ 
  
  $('#div1_ref_client').removeClass('hide')
  $('#div2_type_commande').removeClass('focus_panel')
  $('#to_etape2').addClass('disabled');
})

$('input:radio[id="stock_type_commande_2"]').change(function(){ 
  
  $('#div1_ref_client').addClass('hide')
  $('#div2_type_commande').addClass('focus_panel')
})

$('input:radio[id="stock_type_commande_3"]').change(function(){ 
  
  $('#div1_ref_client').addClass('hide')
  $('#div2_type_commande').addClass('focus_panel')
})

$( "#ok_ref_client" ).click(function() {  
  
  $('#caracteristique_verre').removeClass('hide')
  $('#div2_ref_client').removeClass('focus_panel')
})


$('#lensFocalGroup').on('change', function() {

	$('#div_refraction').addClass('hide');
	$('#progression_D').addClass('hide');
  	$('#progression_G').addClass('hide');
  		
	$('#generation').val("").change();
	
    $('#sphereD').val("0.00");
    $('#cylindreD').val("0.00");
    $('#axeD').val("0.00");
    $('#additionD').val("0.00");
    $('#sphereG').val("0.00");
    $('#cylindreG').val("0.00");
    $('#axeG').val("0.00");
    $('#additionG').val("0.00");
    
    $('#progressionD').val("").change();
    $('#progressionG').val("").change();
    
    $('#type_de_verreD').val("").change();
    $('#type_de_verreG').val("").change();
    
    $('#teinteD').val("").change();
    $('#teinteG').val("").change();
    
    $('#traitementD').val("").change();
    $('#traitementG').val("").change();
    
    $('#diametreD').val("").change();
    $('#diametreG').val("").change();
    
    
    var lensFocalGroup = $(this).val();
    
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
  
  if(this.value == '' || this.value == '1')
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
  
    
   // alert(lensFocalGroup)
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
  
    var indiceId = $('#indices').val();
    var generation = $('#generation').val();
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
	
    	
    if(indiceId != "" && (cylindreD != '' || cylindreG != '')) {			
    getTypedeVerre(indiceId,lensFocalGroup,generation,sphereD,sphereG,cylindreD,cylindreG,axeD,axeG,additionD,additionG,stockD,stockG);
    }
    	
    } 
});


$('#indices').on('change', function() {

	$('#div_refraction').addClass('hide')
    $('#generation').val("").change();
    $('#lensFocalGroup').val("").change();
    $("#generation_progressif").css("display", "none");
    
    $('#droit').prop('checked', true);
    $('#gauche').prop('checked', true);
	
    $('#sphereD').val("0.00");
    $('#cylindreD').val("0.00");
    $('#axeD').val("0.00");
    $('#additionD').val("0.00");
    $('#sphereG').val("0.00");
    $('#cylindreG').val("0.00");
    $('#axeG').val("0.00");
    $('#additionG').val("0.00");
    
    $('#progressionD').val("").change();
    $('#progressionG').val("").change();
    
    $('#type_de_verreD').val("").change();
    $('#type_de_verreG').val("").change();
    
    $('#teinteD').val("").change();
    $('#teinteG').val("").change();
    
    $('#traitementD').val("").change();
    $('#traitementG').val("").change();
    
    $('#diametreD').val("").change();
    $('#diametreG').val("").change();

 // $('#lensFocalGroup option[value=""]').prop('selected', true);

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
    
    $('#teinteD').empty();
    $('#teinteG').empty();
    
    if(indiceId != "1.53" && indiceId != "1.59")
    {
    	$.ajax({
					type: "POST",
					url: "/index/getColor",
					data: {"lens" : ""},
					dataType: "json",
					success: function (data) {		
					//alert(data);	
					console.log(data);
                  
                  $('#teinteD').append('<option value="">-- Choisir --</option>');
                  $('#teinteG').append('<option value="">-- Choisir --</option>');  
                  
                    $.each(data, function(key, value){
                       
                            $('#teinteD').append('<option value="'+ value.en +'">' + value.fr + '</option>');
                            $('#teinteG').append('<option value="'+ value.en +'">' + value.fr + '</option>');
                        
                    });
                    
				}
            
    		});
    }
    
    
    	if(indiceId != "" && (cylindreD != '' || cylindreG != '')) {
    	   getTypedeVerre(indiceId,lensFocalGroup,generation,sphereD,sphereG,cylindreD,cylindreG,axeD,axeG,additionD,additionG,stockD,stockG);
    	   
    	} 

});

$('#generation').on('change', function() {

  var generation = $(this).val();
  
  if(generation != "")
  {

  $('#generation_panel').removeClass('focus_panel')
  $('#refraction_panel').addClass('focus_panel');
  
  $('#div_refraction').removeClass('hide')
  
  $('#sphereD').focus();
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
       
        if(indiceId != "" && (cylindreD != '' || cylindreG != '')) {
    	   getTypedeVerre(indiceId,lensFocalGroup,generation,sphereD,sphereG,cylindreD,cylindreG,axeD,axeG,additionD,additionG,stockD,stockG);
    	   
    	} 
    }
  
});

$("#checkbox_prismes").click(function() {
    // this function will get executed every time the #home element is clicked (or tab-spacebar changed)
    if($(this).is(":checked")) // "this" refers to the element that fired the event
    {
        $("#select_prisme").css("display", "none");
		$("#div_prismes").css("display", "block");
		$("#checkbox_prismes_extend").prop('checked', true);
		
		$('#tab_refraction').removeClass('col-xs-11').addClass('col-xs-8');
		$('#tab_prismes').removeClass('col-xs-1').addClass('col-xs-4');
		
    }
});

$("#checkbox_prismes_extend").click(function() {
    // this function will get executed every time the #home element is clicked (or tab-spacebar changed)
    if($(this).is(":checked")) // "this" refers to the element that fired the event
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
});
$('input[name=cylindreD]').focus(function() { 
    $('#produit').addClass('hide');
    $("#detailD").css("display", "none");
    $("#afficherV").css("display", "inline-block");
});
$('input[name=axeD]').focus(function() { 
    $('#produit').addClass('hide');
    $("#detailD").css("display", "none");
    $("#afficherV").css("display", "inline-block");
});
$('input[name=additionD]').focus(function() { 
    $('#produit').addClass('hide');
    $("#detailD").css("display", "none");
    $("#afficherV").css("display", "inline-block");
});
$('input[name=sphereG]').focus(function() { 
    $('#produit').addClass('hide');
    $("#detailD").css("display", "none");
    $("#afficherV").css("display", "inline-block");
});
$('input[name=cylindreG]').focus(function() { 
    $('#produit').addClass('hide');
    $("#detailD").css("display", "none");
    $("#afficherV").css("display", "inline-block");
});
$('input[name=axeG]').focus(function() { 
    $('#produit').addClass('hide');
    $("#detailD").css("display", "none");
    $("#afficherV").css("display", "inline-block");
});
$('input[name=additionG]').focus(function() { 
    $('#produit').addClass('hide');
    $("#detailD").css("display", "none");
    $("#afficherV").css("display", "inline-block");
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
    
    $('#produit').removeClass('hide')
    
    
    /*
    
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
    
    }
    else
    {
    	$("#detailD").css("display", "block");
    }
    */
    
    $("#detailD").css("display", "none");
    $("#afficherV").css("display", "inline-block");
    
    var stockD = $('input[name="dispoD"]:checked').val()
	var stockG = $('input[name="dispoG"]:checked').val()
    
    if(sphereD == '')
    	sphereD = '-';
    else
    {
    	if (sphereD.indexOf(".") < 0)
    	{
    		sphereD = sphereD+".00";
    		$("#sphereD").val(sphereD);
    	}
    		
    	if (sphereD.indexOf("+") >= 0)
    	{
    		sphereD.replace('+', '');
    	}
    	else if (sphereD.indexOf("-") >= 0)
    	{
    	
    	}
    	else
    	{
    		var new_sphere = "+"+sphereD
    		
    		$("#sphereD").val(new_sphere); 
    		sphereD = $('#sphereD').val();
    	}
    }
    
    if($("#droit").prop('checked') == true && $("#gauche").prop('checked') == true && sphereG == "+0.00"){
		$('#sphereG').val($(this).val())
		sphereG = sphereD
	}
    	
        if(indiceId != "" && (cylindreD != '' || cylindreG != '')) {
    	   getTypedeVerre(indiceId,lensFocalGroup,generation,sphereD,sphereG,cylindreD,cylindreG,axeD,axeG,additionD,additionG,stockD,stockG);
    	   
    	} 
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
    
    /*
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
    */
    
    if(sphereG == '')
    	sphereG = '-';
    else
    {
    	if (sphereG.indexOf(".") < 0)
    	{
    		sphereG = sphereD+".00";
    		$("#sphereG").val(sphereG);
    	}
    	
    	if (sphereG.indexOf("+") >= 0)
    	{
    		sphereG.replace('+', '');
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
    
	 
    	if(indiceId != "" && (cylindreD != '' || cylindreG != '')) {
    	   getTypedeVerre(indiceId,lensFocalGroup,generation,sphereD,sphereG,cylindreD,cylindreG,axeD,axeG,additionD,additionG,stockD,stockG);
    	   
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
    
    $('#produit').removeClass('hide')
    $("#afficherV").css("display", "inline-block");
    /*
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
    
    }
    else
    {
    	$("#detailD").css("display", "block");
    }
    */
    $("#detailD").css("display", "none");
    
    if(cylindreD == '')
    	cylindreD = '-';
    else
    {
    	if (cylindreD.indexOf(".") < 0)
    	{
    		cylindreD = cylindreD+".00";
    		$("#cylindreD").val(cylindreD);
    	}
    	
    	if (cylindreD.indexOf("+") >= 0)
    	{
    		cylindreD.replace('+', '');
    	}
    	else if (cylindreD.indexOf("-") >= 0)
    	{
    	
    	}
    	else
    	{
    		var new_cylindreD = "+"+cylindreD
    		$("#cylindreD").val(new_cylindreD); 
    		cylindreD = $('#cylindreD').val();
    	}
    }
    	
    	if($("#droit").prop('checked') == true && $("#gauche").prop('checked') == true && cylindreG == "+0.00"){
		$('#cylindreG').val($(this).val())
		cylindreG = cylindreD;
		
	}
        if(indiceId != "" && (cylindreD != '' || cylindreG != '')) {
    	   getTypedeVerre(indiceId,lensFocalGroup,generation,sphereD,sphereG,cylindreD,cylindreG,axeD,axeG,additionD,additionG,stockD,stockG);
    	   
    	} 
    	
    	
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
    
    /*
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
    */
    $("#detailG").css("display", "none");
    $("#afficherV").css("display", "inline-block");
    
    $('#produit').removeClass('hide')
    
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
    	cylindreG = '-';
    else
    {
    	if (cylindreG.indexOf(".") < 0)
    	{
    		cylindreG = cylindreG+".00";
    		$("#cylindreG").val(cylindreG);
    	}
    	if (cylindreG.indexOf("+") >= 0)
    	{
    		cylindreG.replace('+', '');
    	}
    	else if (cylindreG.indexOf("-") >= 0)
    	{
    	
    	}
    	else
    	{
    		var new_cylindreG = "+"+cylindreG
    		$("#cylindreG").val(new_cylindreG); 
    		cylindreG = $('#cylindreG').val();
    	}
    }
    	
        if(indiceId != "" && (cylindreD != '' || cylindreG != '')) {
    	   getTypedeVerre(indiceId,lensFocalGroup,generation,sphereD,sphereG,cylindreD,cylindreG,axeD,axeG,additionD,additionG,stockD,stockG);
    	   
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
	
    /*
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
    */
    $("#detailG").css("display", "none");
    $("#afficherV").css("display", "inline-block");
    
     if (axeD.indexOf(".") < 0 && axeD != "")
    	{
    		axeD = axeD+".00";
    		$("#axeD").val(axeD);
    	}
	 
    	if($("#droit").prop('checked') == true && $("#gauche").prop('checked') == true && axeG == "+0.00"){
		$('#axeG').val($(this).val())
		axeG = axeD;
		
	}
	
    	if(indiceId != "" && (cylindreD != '' || cylindreG != '')) {
    	   getTypedeVerre(indiceId,lensFocalGroup,generation,sphereD,sphereG,cylindreD,cylindreG,axeD,axeG,additionD,additionG,stockD,stockG);
    	   
    	} 
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
	
    /*
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
    */
    $("#detailG").css("display", "none");
    $("#afficherV").css("display", "inline-block");
    
     if (axeG.indexOf(".") < 0 && axeG != "")
    	{
    		axeG = axeG+".00";
    		$("#axeG").val(axeG);
    	}
	 
    	if(indiceId != "" && (cylindreD != '' || cylindreG != '')) {
    	   getTypedeVerre(indiceId,lensFocalGroup,generation,sphereD,sphereG,cylindreD,cylindreG,axeD,axeG,additionD,additionG,stockD,stockG);
    	   
    	} 
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
    
    /*
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
    }
    else
    {
    	$("#detailD").css("display", "block");
    }
    */
    $("#detailD").css("display", "none");
    $("#afficherV").css("display", "inline-block");
    
    if (additionD.indexOf(".") < 0 && additionD != "")
    	{
    		additionD = additionD+".00";
    		$("#additionD").val(additionD);
    	}
    	
       if(indiceId != "" && (cylindreD != '' || cylindreG != '')) {
    	   getTypedeVerre(indiceId,lensFocalGroup,generation,sphereD,sphereG,cylindreD,cylindreG,axeD,axeG,additionD,additionG,stockD,stockG);
    	   
    	} 
    	if($("#droit").prop('checked') == true && $("#gauche").prop('checked') == true && additionG == "+0.00"){
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
	
    /*
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
    */
    $("#detailG").css("display", "none");
    $("#afficherV").css("display", "inline-block");
    
     if (additionG.indexOf(".") < 0 && additionG != "")
    	{
    		additionG = additionG+".00";
    		$("#additionG").val(additionG);
    	}
	 
    	if(indiceId != "" && (cylindreD != '' || cylindreG != '')) {
    	   getTypedeVerre(indiceId,lensFocalGroup,generation,sphereD,sphereG,cylindreD,cylindreG,axeD,axeG,additionD,additionG,stockD,stockG);
    	   
    	} 
});

$('#gauche').on('change', function() {
		
        if(this.checked) {
            $(".display_gauche").css("display", "block");
            $(".display_middle").css("display", "block");
        }
       else
       {
       		$(".display_gauche").css("display", "none");
       		$(".display_middle").css("display", "none");
       }     
    });
    
$('#droit').on('change', function() {
		
        if(this.checked) {
            $(".display_droit").css("display", "block");
            $(".display_middle").css("display", "block");
        }
       else
       {
       		$(".display_droit").css("display", "none");
       		$(".display_middle").css("display", "none");
       }     
    });


$("input[name='dispoG']").change(function(){
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
     
        if(indiceId != "" && (cylindreD != '' || cylindreG != '')) {
    	   getTypedeVerre(indiceId,lensFocalGroup,generation,sphereD,sphereG,cylindreD,cylindreG,axeD,axeG,additionD,additionG,stockD,stockG,progressionD,progressionG);
    	   
    	} 
});

$("input[name='dispoD']").change(function(){
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
    
    if(stockD == "FabricationD")
    {
    	$('.display_fabrication').removeClass('hide')
		$('.display_stock').addClass('hide')
		
		$('#teinteG').prop('disabled', false);
		$('#traitementG').prop('disabled', false);
		$('#galbeG').prop('disabled', false);
	
		$('#teinteD').prop('disabled', false);
		$('#traitementD').prop('disabled', false);
		$('#galbeD').prop('disabled', false);
		
		$('#div_hauteurD').removeClass('hide')
		$('#div_hauteurG').removeClass('hide')
    }
    else
    {
    	$('#div_hauteurD').addClass('hide')
    	$('#div_hauteurG').addClass('hide')
    	
    	$('.display_stock').removeClass('hide')
		$('.display_fabrication').addClass('hide')
		
		$('#teinteG').prop('disabled', true);
		$('#traitementG').prop('disabled', true);
		$('#galbeG').prop('disabled', true);
	
		$('#teinteD').prop('disabled', true);
		$('#traitementD').prop('disabled', true);
		$('#galbeD').prop('disabled', true);
    }
    
    
    $('#progressionD option[value=""]').prop('selected', true);
    $('#type_de_verreD option[value=""]').prop('selected', true);
    $('#teinteD option[value=""]').prop('selected', true);
    $('#traitementD option[value=""]').prop('selected', true);
    $('#diametreD option[value=""]').prop('selected', true);
    $('#galbeD option[value="Standard"]').prop('selected', true);
    
    $('#progressionG option[value=""]').prop('selected', true);
    $('#type_de_verreG option[value=""]').prop('selected', true);
    $('#teinteG option[value=""]').prop('selected', true);
    $('#traitementG option[value=""]').prop('selected', true);
    $('#diametreG option[value=""]').prop('selected', true);
    $('#galbeG option[value="Standard"]').prop('selected', true);
		
    
   if(lensFocalGroup == '3')
	{
		if($('#progressionD').val() == '')
    	{
    		$("#detailD").css("display", "none");
    		$("#detailG").css("display", "none");
    	}
    	else
    	{
    		$("#detailD").css("display", "block");
    		$("#detailG").css("display", "block");
    	}
    
    }
    else
    {
    	$("#detailD").css("display", "block");
    	$("#detailG").css("display", "block");
    }
     
        if(indiceId != "" && (cylindreD != '' || cylindreG != '')) {
    	   getTypedeVerre(indiceId,lensFocalGroup,generation,sphereD,sphereG,cylindreD,cylindreG,axeD,axeG,additionD,additionG,stockD,stockG,progressionD,progressionG);
    	   
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
    
    var stockD = $('input[name="dispoD"]:checked').val()
	var stockG = $('input[name="dispoG"]:checked').val()
    
    //alert($(this).val());
    
    var progressionD = $('#progressionD').val();
    var progressionG = $('#progressionG').val();
    
   if($(this).val() == '')
    {
    	$("#detailD").css("display", "none");
    }
    else
    {
    	$("#detailD").css("display", "block");
    }
     
        if(indiceId != "" && (cylindreD != '' || cylindreG != '')) {
    	   getTypedeVerre(indiceId,lensFocalGroup,generation,sphereD,sphereG,cylindreD,cylindreG,axeD,axeG,additionD,additionG,stockD,stockG,progressionD,progressionG);
    	   
    	} 
    	if(sphereD == sphereG && cylindreD==cylindreG && axeD==axeG && additionD==additionG)
            	{
            		//alert("copy")
            		setTimeout(function(){
						copyVersDroit();
						
					},1000);
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
    
   if($('#progressionG').val() == '')
    {
    	$("#detailG").css("display", "none");
    }
    else
    {
    	$("#detailG").css("display", "block");
    }
     
        if(indiceId != "" && (cylindreD != '' || cylindreG != '')) {
    	   getTypedeVerre(indiceId,lensFocalGroup,generation,sphereD,sphereG,cylindreD,cylindreG,axeD,axeG,additionD,additionG,stockD,stockG,progressionD,progressionG);
    	   
    	} 
});

$('#type_de_verreD').on('change', function() {
    var type_de_verreD = $(this).val();
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
    
    var stockD = $('input[name="dispoD"]:checked').val()
	var stockG = $('input[name="dispoG"]:checked').val()
    
    var progressionD = $('#progressionD').val();
    var progressionG = $('#progressionG').val();
    
    $('#teinteD').empty();    
    $('#teinteD').append('<option value="">-- Choisir --</option>');
    
	//alert(type_de_verreD);
	if (type_de_verreD.indexOf("S") >= 0)
	{
		$('#teinteD').prop('disabled', 'disabled');
		$('#traitementD').prop('disabled', 'disabled');
		$('#galbeD').prop('disabled', 'disabled');
		
		$('#diametreD').empty();    
        $('#diametreD').append('<option value="">-- Choisir --</option>');
		if(stockD == "FabricationD")
        	{
        		$('#to_etape2').addClass('disabled');
        	}
        	else
        	{
        		$('#to_etape3').addClass('disabled');
        	}
        	
		if(type_de_verreD == "41274")
		{
			$('#diametreD').append('<option value="70">70</option>');
		}
		else
		{
			var info_type_de_verreD = type_de_verreD.split('*');
			//alert( info_type_de_verreD[1] );
			var diametre_type_de_verreD = info_type_de_verreD[1].split(',');
			for (i = 0; i < diametre_type_de_verreD.length-1; i++) {
  				$('#diametreD').append('<option value="'+diametre_type_de_verreD[i]+'">'+diametre_type_de_verreD[i]+'</option>');
  			}
		}
	}
	else
	{
    if(type_de_verreD != "") {
    
	if(stockD == "FabricationD")
    {
		$('#teinteD').prop('disabled', false);
		$('#traitementD').prop('disabled', false);
		$('#galbeD').prop('disabled', false);
		
		$('#div_hauteurD').removeClass('hide')
		$('#div_hauteurG').removeClass('hide')
    }
    else
    {
		$('#teinteD').prop('disabled', true);
		$('#traitementD').prop('disabled', true);
		$('#galbeD').prop('disabled', true);
		
		$('#div_hauteurD').addClass('hide')
		$('#div_hauteurG').addClass('hide')
    }
			
            $.ajax({
					type: "POST",
					url: "/index/getOptions",
					data: {"lens" : type_de_verreD},
					dataType: "json",
					success: function (data) {		
					//alert(data);	
					console.log(data);
                    
                 
                  $('#traitementD').empty();
                 
                  //  $('#traitementD').append('<option value="">-- Choisir --</option>');
                    
                    data.sort(function(a, b) {
    var x = a.name.toLowerCase(), y = b.name.toLowerCase();
    return x < y ? -1 : x > y ? 1 : 0;
});
                    
                    $.each(data, function(key, value){
                        console.log(value.name);
                        
                        
                            if(value.name != "Express 24" && value.name != "Second pair")
                            	$('#traitementD').append('<option value="'+ value.id +'">' + value.name + '</option>');
                        
                    });
                    
				}
            
    		});
    	
    	
    	$.ajax({
					type: "POST",
					url: "/index/get_Diametre",
					data: {"lens" : type_de_verreD,"sphere" : sphereD,"cylindre" : cylindreD},
					dataType: "json",
					success: function (data) {		
					//alert(data);	
					console.log(data);
                    
                    $('#diametreD').empty();
                    $('#diametreD').append('<option value="">-- Choisir --</option>');
                    if(stockD == "FabricationD")
        			{
        				$('#to_etape2').addClass('disabled');
        			}
        			else
        			{
        				$('#to_etape3').addClass('disabled');
        			}
                    $.each(data, function(key, value){
                        console.log(value.name);
                        $('#diametreD').append('<option value="'+ value.id +'">' + value.diameter_physical + '</option>');
                        
                    }); 
				}
    		});
    		
    		if(indiceId != "1.53" && indiceId != "1.59")
    		{
    			$.ajax({
					type: "POST",
					url: "/index/getColor",
					data: {"lens" : ""},
					dataType: "json",
					success: function (data) {		
					//alert(data);	
					console.log(data);
                   $('#teinteD').empty();
                  $('#teinteD').append('<option value="">-- Choisir --</option>');
                  
                  
                    $.each(data, function(key, value){
                       
                            $('#teinteD').append('<option value="'+ value.en +'">' + value.fr + '</option>');
                        
                    });
                    
				}
            
    		});
    		}
    	}
    }
    	if(sphereD == sphereG && cylindreD==cylindreG && axeD==axeG && additionD==additionG && type_de_verreG=="")
            	{
            		//alert("copy")
            		setTimeout(function(){
						copyVersDroit();
						if (type_de_verreD.indexOf("S") >= 0)
						{
							$('#teinteG').prop('disabled', 'disabled');
							$('#traitementG').prop('disabled', 'disabled');
							$('#galbeG').prop('disabled', 'disabled');
						}
						else
						{
							$('#teinteG').prop('disabled', false);
							$('#traitementG').prop('disabled', false);
							$('#galbeG').prop('disabled', false);
						}

					},1000);
            	}
            	
        if($('#diametreD').val() != "")
        {
        	if(stockD == "FabricationD")
        	{
        		$('#to_etape2').removeClass('disabled');
        	}
        	else
        	{
        		$('#to_etape3').removeClass('disabled');
        	}
        }
}); 

$('#diametreD').on('change', function() {
    var diametreD = $(this).val();
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
    var diametreG = $('#diametreG').val();
    
    var stockD = $('input[name="dispoD"]:checked').val()
	var stockG = $('input[name="dispoG"]:checked').val()
    
    var progressionD = $('#progressionD').val();
    var progressionG = $('#progressionG').val();
    
    if(sphereD == sphereG && cylindreD==cylindreG && axeD==axeG && additionD==additionG  && type_de_verreD==type_de_verreG && diametreG=="")
            	{
            		//alert("copy")
            		setTimeout(function(){
						copyVersDroit();
						
					},1000);
            	}
    if($('#diametreD').val() != "")
    {
        if(stockD == "FabricationD")
        	{
        		$('#to_etape2').removeClass('disabled');
        	}
        	else
        	{
        		$('#to_etape3').removeClass('disabled');
        	}
    }
    else
    {
    	$('#to_etape2').addClass('disabled');
    	$('#to_etape3').addClass('disabled');
    }
    
});

$('#diametreG').on('change', function() {
    var stockD = $('input[name="dispoD"]:checked').val()
    if(stockD == "FabricationD")
    {	
    	copyVersGauche();
    }
    		
    if($('#diametreG').val() != "")
    {
        if(stockD == "FabricationD")
        	{
        		$('#to_etape2').removeClass('disabled');
        	}
        	else
        	{
        		$('#to_etape3').removeClass('disabled');
        	}
    }
    else
    {
    	$('#to_etape2').addClass('disabled');
    	$('#to_etape3').addClass('disabled');
    }
    
});

$('#teinteD').on('change', function() {
    var teinteD = $(this).val();
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
    var teinteG = $('#teinteG').val();
    
    var stockD = $('input[name="dispoD"]:checked').val()
	var stockG = $('input[name="dispoG"]:checked').val()
    
    var progressionD = $('#progressionD').val();
    var progressionG = $('#progressionG').val();
    
    if(sphereD == sphereG && cylindreD==cylindreG && axeD==axeG && additionD==additionG  && type_de_verreD==type_de_verreG && teinteG=="")
            	{
            		//alert("copy")
            		setTimeout(function(){
						copyVersDroit();
						
					},1000);
            	}
    
});


$('#teinteG').on('change', function() {
var stockD = $('input[name="dispoD"]:checked').val()
	if(stockD == "FabricationD")
    {	
    	copyVersGauche();
    }
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
    
    if(sphereD == sphereG && cylindreD==cylindreG && axeD==axeG && additionD==additionG  && type_de_verreD==type_de_verreG && (galbeG=="" || galbeG=="Standard"))
            	{
            		//alert("copy")
            		setTimeout(function(){
						copyVersDroit();
						
					},1000);
            	}
    
});


$('#traitementG').on('change', function() {
var stockD = $('input[name="dispoD"]:checked').val()
	if(stockD == "FabricationD")
    {	
    	copyVersGauche();
    }
});

$('#galbeG').on('change', function() {
var stockD = $('input[name="dispoD"]:checked').val()
	if(stockD == "FabricationD")
    {	
    	copyVersGauche();
    }
});



$('#type_de_verreG').on('change', function() {
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
    
    var stockD = $('input[name="dispoD"]:checked').val()
	var stockG = $('input[name="dispoG"]:checked').val()
    
    var progressionD = $('#progressionD').val();
    var progressionG = $('#progressionG').val();
    
    $('#teinteG').empty();    
    $('#teinteG').append('<option value="">-- Choisir --</option>');
    
    
	if (type_de_verreG.indexOf("S") >= 0)
	{
		$('#teinteG').prop('disabled', 'disabled');
		$('#traitementG').prop('disabled', 'disabled');
		$('#galbeG').prop('disabled', 'disabled');
		
		$('#diametreG').empty();    
        $('#diametreG').append('<option value="">-- Choisir --</option>');
		if(stockD == "FabricationD")
        	{
        		$('#to_etape2').addClass('disabled');
        	}
        	else
        	{
        		$('#to_etape3').addClass('disabled');
        	}
        	
		if(type_de_verreG == "41274")
		{
			$('#diametreG').append('<option value="70">70</option>');
		}
		else
		{
			var info_type_de_verreG = type_de_verreG.split('*');
			//alert( info_type_de_verreG[1] );
			var diametre_type_de_verreG = info_type_de_verreG[1].split(',');
			for (i = 0; i < diametre_type_de_verreG.length-1; i++) {
  				$('#diametreG').append('<option value="'+diametre_type_de_verreG[i]+'">'+diametre_type_de_verreG[i]+'</option>');
  			}
		}
	}
	else
	{
    if(type_de_verreG != "") {
    
    if(stockD == "FabricationD")
    {
		$('#teinteG').prop('disabled', false);
		$('#traitementG').prop('disabled', false);
		$('#galbeG').prop('disabled', false);
		
		$('#div_hauteurD').removeClass('hide')
		$('#div_hauteurG').removeClass('hide')
    }
    else
    {
		$('#teinteG').prop('disabled', true);
		$('#traitementG').prop('disabled', true);
		$('#galbeG').prop('disabled', true);
		
		$('#div_hauteurD').addClass('hide')
		$('#div_hauteurG').addClass('hide')
    }
			
            $.ajax({
					type: "POST",
					url: "/index/getOptions",
					data: {"lens" : type_de_verreG},
					dataType: "json",
					success: function (data) {		
					//alert(data);	
					console.log(data);
                    
                 
                  $('#traitementD').empty();
                 
                 //   $('#traitementD').append('<option value="">-- Choisir --</option>');
                    
                     data.sort(function(a, b) {
    var x = a.name.toLowerCase(), y = b.name.toLowerCase();
    return x < y ? -1 : x > y ? 1 : 0;
});
                    
                    $.each(data, function(key, value){
                        console.log(value.name);
                        
                        
                            if(value.name != "Express 24" && value.name != "Second pair")
                            	$('#traitementD').append('<option value="'+ value.id +'">' + value.name + '</option>');
                        
                    });
                    
				}
            
    		});
    	
    	
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
                    
                    if(stockD == "FabricationD")
        			{
        				$('#to_etape2').addClass('disabled');
        			}
        			else
        			{
        				$('#to_etape3').addClass('disabled');
        			}
        			
                    $.each(data, function(key, value){
                        console.log(value.name);
                        $('#diametreG').append('<option value="'+ value.id +'">' + value.diameter_physical + '</option>');
                        
                    }); 
				}
    		});
    		
    		if(indiceId != "1.53" && indiceId != "1.59")
    		{
    				$.ajax({
					type: "POST",
					url: "/index/getColor",
					data: {"lens" : ""},
					dataType: "json",
					success: function (data) {		
					//alert(data);	
					console.log(data);
                  
                  
                  $('#teinteG').append('<option value="">-- Choisir --</option>');  
                  
                    $.each(data, function(key, value){
                       
                            
                            $('#teinteG').append('<option value="'+ value.en +'">' + value.fr + '</option>');
                        
                    });
                    
				}
            
    		});
    		}
    		
    		if(stockD == "FabricationD")
    		{	
    			copyVersGauche();
    		}
    		
    	}
    }
    
    if($('#diametreG').val() != "")
        {
        	if(stockD == "FabricationD")
        	{
        		$('#to_etape2').removeClass('disabled');
        	}
        	else
        	{
        		$('#to_etape3').removeClass('disabled');
        	}
        }
}); 

$('#afficherV').on('click', function() {

	var droite = $('#droite').val();
	var gauche = $('#gauche').val();
	
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
    
   if($('#progressionG').val() == '')
    {
    	$("#detailG").css("display", "none");
    }
    else
    {
    	$("#detailG").css("display", "block");
    }
     
    if(indiceId != "" && (cylindreD != '' || cylindreG != '')) {
    	   //alert("indiceId:"+indiceId+" ,lensFocalGroup:"+lensFocalGroup+" ,generation:"+generation+" ,sphereD:"+sphereD+" ,sphereG:"+sphereG+" ,cylindreD:"+cylindreD+" ,cylindreG:"+cylindreG+" ,axeD:"+axeD+" ,axeG:"+axeG+" ,additionD:"+additionD+" ,additionG:"+additionG+" ,stockD:"+stockD+" ,stockG:"+stockG+" ,progressionD:"+progressionD+" ,progressionG:"+progressionG);
    	   	getTypedeVerre(indiceId,lensFocalGroup,generation,sphereD,sphereG,cylindreD,cylindreG,axeD,axeG,additionD,additionG,stockD,stockG,progressionD,progressionG);
    	   
    } 
	
	$("#produit").css("display", "block");
	$('#produit').removeClass('hide');
	
	if(droite != "")
	{
		$("#detailD").css("display", "block");
	}
	if(gauche != "")
	{
		$("#detailG").css("display", "block");
	}
	
	$("#afficherV").css("display", "none");
});

$('#VersGauche').on('click', function() {

	copyVersDroit()

});

$('#VersDroit').on('click', function() {

	var progressionG = $('#progressionG').val();
    var type_de_verreG = $('#type_de_verreG').val();
    var teinteG = $('#teinteG').val();
    var traitementG = $('#traitementG').val();
    var diametreG = $('#diametreG').val();
    var galbeG = $('#galbeG').val();
    
    $('#progressionG option').clone().appendTo('#progressionD');
    $('#type_de_verreG option').clone().appendTo('#type_de_verreD');
    $('#teinteG option').clone().appendTo('#teinteD');
    $('#traitementG option').clone().appendTo('#traitementD');
    $('#diametreG option').clone().appendTo('#diametreD');
    $('#galbeG option').clone().appendTo('#galbeD');
    
    if(progressionG!="")
    	$('#progressionD option[value="'+ progressionG +'"]').prop('selected', true);
    if(type_de_verreG!="")
    	$('#type_de_verreD option[value="'+ type_de_verreG +'"]').prop('selected', true);
    if(teinteG!="")
    	$('#teinteD option[value="'+ teinteG +'"]').prop('selected', true);
    if(traitementG!="")
    	$('#traitementD option[value="'+ traitementG +'"]').prop('selected', true);
    if(diametreG!="")
    	$('#diametreD option[value="'+ diametreG +'"]').prop('selected', true);
    if(galbeG!="")
    	$('#galbeD option[value="'+ galbeG +'"]').prop('selected', true);

});



function getTypedeVerre(indiceId,lensFocalGroup,generation,sphereD,sphereG,cylindreD,cylindreG,axeD,axeG,additionD,additionG,stockD,stockG,progressionD,progressionG)
{

	stockG = stockD
	
	if(indiceId == '')
    	indiceId = '-';
    	
    if(generation == '')
    	generation = '-';
    	
    if(lensFocalGroup == '')
    	lensFocalGroup = '-';
    	
    if(sphereD == '')
    	sphereD = '-';
    else
    {
    	if (sphereD.indexOf("+") >= 0)
    	{
    		sphereD.replace('+', '');
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
    		cylindreD.replace('+', '');
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
    else
    {
    	if (axeD.indexOf("+") >= 0)
    	{
    		axeD.replace('+', '');
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
    	
    
    if(additionD == '')
    	additionD = '-';
    else
    {
    	if (additionD.indexOf("+") >= 0)
    	{
    		additionD.replace('+', '');
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
    		sphereG.replace('+', '');
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
    		cylindreG.replace('+', '');
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
    else
    {
    	if (axeG.indexOf("+") >= 0)
    	{
    		axeG.replace('+', '');
    	}
    	else if (axeG.indexOf("-") >= 0)
    	{
    	
    	}
    	else
    	{
    		var new_axeG = "+"+axeG
    		$("#axeG").val(new_axeG); 
    	}
    }
    	
    if(additionG == '')
    	additionG = '-';
    else
    {
    	if (additionG.indexOf("+") >= 0)
    	{
    		additionG.replace('+', '');
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
	
	if(cylindreD != '-')
        	{
        	
        	$('#type_de_verreD').empty();
            $('#type_de_verreD').append('<option value="">-- Choisir --</option>');
        	
        	if(stockD == "FabricationD")
        	{
        		$('#to_etape2').addClass('disabled');
        	}
        	else
        	{
        		$('#to_etape3').addClass('disabled');
        	}
        	
        	if((indiceId == "1.5" || indiceId == "1.6" || indiceId == "1.59" || indiceId == "1.67") && (lensFocalGroup == "1" || (lensFocalGroup == "3" && ((progressionD == 'Short' || progressionD == 'Tous')) && generation == "Progressif de stock")) && stockD == 'StockD')
        	{
        	//	alert("indiceId:"+indiceId+" ,lensFocalGroup:"+lensFocalGroup+" ,generation:"+generation+" ,sphereD:"+sphereD+" ,sphereG:"+sphereG+" ,cylindreD:"+cylindreD+" ,cylindreG:"+cylindreG+" ,axeD:"+axeD+" ,axeG:"+axeG+" ,additionD:"+additionD+" ,additionG:"+additionG+" ,stockD:"+stockD+" ,stockG:"+stockG+" ,progressionD:"+progressionD+" ,progressionG:"+progressionG);
        		
        		$.ajax({
					type: "POST",
					url: "/index/getStockTypeDeVerre",
					data: {"indiceId" : indiceId, "lensFocalGroup" : lensFocalGroup, "generation" : generation,"sphereD" : sphereD,"cylindreD" : cylindreD,"axeD" : axeD,"additionD" : additionD,"stockD" : stockD},
					dataType: "json",
					success: function (data) {		
					console.log(data);	
                    $.each(data, function(key, value){
                    if(lensFocalGroup == "3")
                    {
                    	$('#type_de_verreD').append('<option value="'+ value.id +'">'+ value.name + '</option>');
                    }
                    else
                    {
                    	$('#type_de_verreD').append('<option value="S'+ value.id_verre +'*'+value.diametre+'">'+ value.name + '</option>');
                    }
                  
        			})
        		  }
        		})
        		//return false;
        	}
        	
        	
            $.ajax({
					type: "POST",
					url: "/index/getTypeDeVerre",
					data: {"indiceId" : indiceId, "lensFocalGroup" : lensFocalGroup, "generation" : generation,"sphereD" : sphereD,"cylindreD" : cylindreD,"axeD" : axeD,"additionD" : additionD,"stockD" : stockD},
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
                    
                    if(progressionD == 'Tous')
                    {
                    	if ((value.name.indexOf(" R ") >= 0 || (value.name.indexOf("T-One 18 ") >= 0)))
                    	{
                    		value.trad_fr = value.trad_fr+" Longue"
                    		
                    		console.log(value.name+" "+value.trad_fr)
                    	}
                    	else if ((value.name.indexOf(" S ") >= 0 || (value.name.indexOf("T-One 17 ") >= 0)) )
                    	{
                    		value.trad_fr = value.trad_fr+" Moyenne"
                    	}
                    	else if ((value.name.indexOf(" E ") >= 0 || (value.name.indexOf("T-One 16 ") >= 0)) )
                    	{
                    		value.trad_fr = value.trad_fr+" Extra courte"
                    	}
                    	else if ((value.name.indexOf(" U ") >= 0 || (value.name.indexOf("T-One 15 ") >= 0)) )
                    	{
                    		value.trad_fr = value.trad_fr+" Tres courte"
                    	}
                    	
                    	$('#type_de_verreD').append('<option value="'+ value.id +'">'+  decodeURIComponent(escape(value.trad_fr)) + '</option>');
                    }
                    else if(progressionD == 'Regular')
                    {
                    	if ((value.name.indexOf(" R ") >= 0 || (value.name.indexOf("T-One 18 ") >= 0)))
                    	{
                    		$('#type_de_verreD').append('<option value="'+ value.id +'">'+  decodeURIComponent(escape(value.trad_fr)) + '</option>');
                    	}
                    }
                    else if(progressionD == 'Short')
                    {
                    	if ((value.name.indexOf(" S ") >= 0 || (value.name.indexOf("T-One 17 ") >= 0)))
                    	{
                    		$('#type_de_verreD').append('<option value="'+ value.id +'">'+  decodeURIComponent(escape(value.trad_fr)) + '</option>');
                    	}
                    }
                    else if(progressionD == 'Extra Short')
                    {
                    	if ((value.name.indexOf(" E ") >= 0 || (value.name.indexOf("T-One 16 ") >= 0)))
                    	{
                    		$('#type_de_verreD').append('<option value="'+ value.id +'">'+  decodeURIComponent(escape(value.trad_fr)) + '</option>');
                    	}
                    }
                    else if(progressionD == 'Ultra Short')
                    {
                    	if ((value.name.indexOf(" U ") >= 0 || (value.name.indexOf("T-One 15 ") >= 0)))
                    	{
                    		$('#type_de_verreD').append('<option value="'+ value.id +'">'+  decodeURIComponent(escape(value.trad_fr)) + '</option>');
                    	}
                    }	
                    else
                    {
                        
                        $('#type_de_verreD').append('<option value="'+ value.id +'">'+  decodeURIComponent(escape(value.trad_fr)) + '</option>');
                    }
                    });	
					}
				});
            }
           // alert("cylindreG: "+cylindreG)
            if(cylindreG != '-')
            {
            	
            	//console.log(sphereD+"=="+sphereG+" && "+cylindreD+"=="+cylindreG+" && "+axeD+"=="+axeG+" && "+additionD+"=="+additionG+" && "+stockD+"=="+stockG)
            	
            	if(sphereD == sphereG && cylindreD==cylindreG && axeD==axeG && additionD==additionG )
            	{
            		//alert("copy")
            		setTimeout(function(){
						copyVersDroit();

					},1000);
            	}
            	else
            	{	
            		
            		$('#type_de_verreG').empty();
            		$('#type_de_verreG').append('<option value="">-- Choisir --</option>');
        	
        			if(stockD == "FabricationD")
        			{
        				$('#to_etape2').addClass('disabled');
        			}
        			else
        			{
        				$('#to_etape3').addClass('disabled');
        			}
        			
        			if((indiceId == "1.5" || indiceId == "1.6" || indiceId == "1.59" || indiceId == "1.67") && (lensFocalGroup == "1" || (lensFocalGroup == "3" && progressionD == 'Short' && generation == "Progressif de stock")) && stockD == 'StockD')
        	{
        		
        		
        		$.ajax({
					type: "POST",
					url: "/index/getStockTypeDeVerre",
					data: {"indiceId" : indiceId, "lensFocalGroup" : lensFocalGroup, "generation" : generation,"sphereD" : sphereG,"cylindreD" : cylindreG,"axeD" : axeG,"additionD" : additionG,"stockD" : stockG},
					dataType: "json",
					success: function (data) {		
					console.log(data);	
                    $.each(data, function(key, value){
                    if(lensFocalGroup == "3")
                    {
                    	$('#type_de_verreG').append('<option value="'+ value.id +'">'+ value.name + '</option>');
                    }
                    else
                    {
                    	$('#type_de_verreG').append('<option value="S'+ value.id_verre +'*'+value.diametre+'">'+ value.name + '</option>');
                    }
                  
        			})
        		  }
        		})
        		//return false;
        	}
            		
            		$.ajax({
					type: "POST",
					url: "/index/getTypeDeVerre",
					data: {"indiceId" : indiceId, "lensFocalGroup" : lensFocalGroup, "generation" : generation,"sphereD" : sphereG,"cylindreD" : cylindreG,"axeD" : axeG,"additionD" : additionG,"stockD" : stockG},
					dataType: "json",
					success: function (data) {		
						
                    $.each(data, function(key, value){
                    if(value.trad_fr == "")
                    {
                    	value.trad_fr = value.name;
                    }
                    if(generation == "E-Space")
                    	{
                    		var n_T_ONE = value.trad_fr 
                    		value.trad_fr = n_T_ONE.replace("T-One", "E-Space");
                    	}
                    
                    if(progressionG == 'Tous')
                    {
                    	if ((value.name.indexOf(" R ") >= 0 || (value.name.indexOf("T-One 18 ") >= 0)))
                    	{
                    		value.trad_fr = value.trad_fr+" Longue"
                    	}
                    	else if ((value.name.indexOf(" S ") >= 0 || (value.name.indexOf("T-One 17 ") >= 0)) )
                    	{
                    		value.trad_fr = value.trad_fr+" Moyenne"
                    	}
                    	else if ((value.name.indexOf(" E ") >= 0 || (value.name.indexOf("T-One 16 ") >= 0)) )
                    	{
                    		value.trad_fr = value.trad_fr+" Extra courte"
                    	}
                    	else if ((value.name.indexOf(" U ") >= 0 || (value.name.indexOf("T-One 15 ") >= 0)) )
                    	{
                    		value.trad_fr = value.trad_fr+" Tres courte"
                    	}
                    	$('#type_de_verreD').append('<option value="'+ value.id +'">'+  decodeURIComponent(escape(value.trad_fr)) + '</option>');
                    }
                    else if(progressionG == 'Regular')
                    {
                    	if ((value.name.indexOf(" R ") >= 0 || (value.name.indexOf("T-One 18 ") >= 0)))
                    	{
                    		$('#type_de_verreG').append('<option value="'+ value.id +'">'+  decodeURIComponent(escape(value.trad_fr)) + '</option>');
                    	}
                    }
                    else if(progressionD == 'Short')
                    {
                    	if ((value.name.indexOf(" S ") >= 0 || (value.name.indexOf("T-One 17 ") >= 0)))
                    	{
                    		$('#type_de_verreG').append('<option value="'+ value.id +'">'+  decodeURIComponent(escape(value.trad_fr)) + '</option>');
                    	}
                    }
                    else if(progressionD == 'Extra Short')
                    {
                    	if ((value.name.indexOf(" E ") >= 0 || (value.name.indexOf("T-One 16 ") >= 0)))
                    	{
                    		$('#type_de_verreG').append('<option value="'+ value.id +'">'+  decodeURIComponent(escape(value.trad_fr)) + '</option>');
                    	}
                    }
                    else if(progressionD == 'Ultra Short')
                    {
                    	if ((value.name.indexOf(" U ") >= 0 || (value.name.indexOf("T-One 15 ") >= 0)))
                    	{
                    		$('#type_de_verreG').append('<option value="'+ value.id +'">'+  decodeURIComponent(escape(value.trad_fr)) + '</option>');
                    	}
                    }	
                    else
                    {
                        
                        $('#type_de_verreG').append('<option value="'+ value.id +'">'+  decodeURIComponent(escape(value.trad_fr)) + '</option>');
                    }
                    });	
					}
				});
             
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
    
    if(progressionD != "" || type_de_verreD !="")
    {
    	$("#detailG").css("display", "block");
    }
    
    $('#progressionG').empty()
    $('#type_de_verreG').empty()
    $('#teinteG').empty()
    $('#traitementG').empty()
    $('#diametreG').empty()
    
    
    $('#progressionD option').clone().appendTo('#progressionG');
    $('#type_de_verreD option').clone().appendTo('#type_de_verreG');
    $('#teinteD option').clone().appendTo('#teinteG');
    $('#traitementD option').clone().appendTo('#traitementG');
    $('#diametreD option').clone().appendTo('#diametreG');
    $('#galbeD option').clone().appendTo('#galbeG');
    
    if(progressionD!="")
    	$('#progressionG option[value="'+ progressionD +'"]').prop('selected', true);
    if(type_de_verreD!="")
    	$('#type_de_verreG option[value="'+ type_de_verreD +'"]').prop('selected', true);
    if(teinteD!="")
    	$('#teinteG option[value="'+ teinteD +'"]').prop('selected', true);
    if(traitementD!="")
    	$('#traitementG option[value="'+ traitementD +'"]').prop('selected', true);
    if(diametreD!="")
    	$('#diametreG option[value="'+ diametreD +'"]').prop('selected', true);
    if(galbeD!="")
    	$('#galbeG option[value="'+ galbeD +'"]').prop('selected', true);

}

function copyVersGauche()
{
	var progressionG = $('#progressionG').val();
    var type_de_verreG = $('#type_de_verreG').val();
    var teinteG = $('#teinteG').val();
    var traitementG = $('#traitementG').val();
    var diametreG = $('#diametreG').val();
    var galbeG = $('#galbeG').val();
    
    
    $("#detailD").css("display", "block");
    
    $('#progressionD').empty()
    $('#type_de_verreD').empty()
    $('#teinteD').empty()
    $('#traitementD').empty()
    $('#diametreD').empty()
    
    
    $('#progressionG option').clone().appendTo('#progressionD');
    $('#type_de_verreG option').clone().appendTo('#type_de_verreD');
    $('#teinteG option').clone().appendTo('#teinteD');
    $('#traitementG option').clone().appendTo('#traitementD');
    $('#diametreG option').clone().appendTo('#diametreD');
    $('#galbeG option').clone().appendTo('#galbeD');
    
    if(progressionG!="")
    	$('#progressionD option[value="'+ progressionG +'"]').prop('selected', true);
    if(type_de_verreG!="")
    	$('#type_de_verreD option[value="'+ type_de_verreG +'"]').prop('selected', true);
    if(teinteG!="")
    	$('#teinteD option[value="'+ teinteG +'"]').prop('selected', true);
    if(traitementG!="")
    	$('#traitementD option[value="'+ traitementG +'"]').prop('selected', true);
    if(diametreG!="")
    	$('#diametreD option[value="'+ diametreG +'"]').prop('selected', true);
    if(galbeG!="")
    	$('#galbeD option[value="'+ galbeG +'"]').prop('selected', true);

}


$('#stockwizard').bootstrapWizard({
				'tabClass': 'nav nav-tabs navtab-wizard nav-justified bg-muted',
				'onTabClick': function(tab, navigation, index) {
					return false;
				},
				'onNext': function (tab, navigation, index) {

					/*validFields();

                    var type_generation_verre = $('input[name="id_type_generation_verre"]:checked').val();
                    */

					var $valid = $("#stockForm").valid();
					if (!$valid) {
						$stockvalidator.focusInvalid();
						return false;
					}

					if(!$('.etape2').is(':visible')) {
						return false;
					}

/*
					switch(index) {
						case 2:

                            var sph_droit = $('select[name="sphere_droit"]').val();
                            var cyl_droit = $('select[name="cylindre_droit"]').val();
                            var axe_droit = $('select[name="axe_droit"]').val();

                            var sph_gauche = $('select[name="sphere_gauche"]').val();
                            var cyl_gauche = $('select[name="cylindre_gauche"]').val();
                            var axe_gauche = $('select[name="axe_gauche"]').val();

                            if(type_generation_verre == 2) {
                                var add_droit = $('select[name="degression_droit"]').val();
                                var add_gauche = $('select[name="degression_gauche"]').val();
                            }
                            else {
                                var add_droit = $('select[name="addition_droit"]').val();
                                var add_gauche = $('select[name="addition_gauche"]').val();
                            }

                            var pass = true;

                            if (!$('input[name="only_gauche"]').is(':checked') && !$('input[name="only_droit"]').is(':checked')) {
                                if(forceSphStep == false && ( (sph_droit > 0) != (sph_gauche > 0 )) && sph_droit != 0) {

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
                                            $('#stockwizard').bootstrapWizard('next');
                                        }
                                        else {
                                            $('html, body').animate({
                                                scrollTop: ($('#sphere_droit').offset().top-200)
                                            }, 200);
                                        }
                                    });

                                    return false;

                                }
                            }

							var formData = $('#stockForm').serialize();

							$.ajax({
								type: "POST",
								url: "/index/setOrderRecap",
								data : formData,
								dataType:"html",
								beforeSend:function(){
									$("#recap_commande_stock").empty().append('<div style="height:400px"><div style="width:150px;margin-left:auto;margin-right:auto;padding-top:10%;">Veuillez patienter</div></div>');
								},
								success: function(data){
									if(data=="not_logged")
										window.location.reload();
									else if(data=="error"){
										alert('une erreur est survenue, veuillez réessayer, merci !');
									}
									else{
										$("#recap_commande_stock").empty().append(data);
									}
								},
								error : function(){
									$("#recap_commande_stock").empty().append('<div style="height:400px"><div style="width:550px;margin-left:auto;margin-right:auto;padding-top:10%;color:red;font-size:18px">Une erreur s\'est produite, veuillez recommencer. Si le problème persiste, envoyez un mail à </div></div>');
								}
							});

							break;
					}*/

				}
			});
			
$( "#to_etape3" ).click(function() {			
	
	
	var type_de_verreD = $('#type_de_verreD').val();
	var type_de_verreG = $('#type_de_verreG').val();
	
	var generation = $('#generation').val()
	
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
    
	var progressionD = $('#progressionD').val();
    var type_de_verreD = $('#type_de_verreD').val();
    var teinteD = $('#teinteD').val();
    var traitementD = $('#traitementD').val();
    var diametreD = $('#diametreD').val();
    var galbeD = $('#galbeD').val();
    
    var progressionG = $('#progressionG').val();
    var type_de_verreG = $('#type_de_verreG').val();
    var teinteG = $('#teinteG').val();
    var traitementG = $('#traitementG').val();
    var diametreG = $('#diametreG').val();
    var galbeG = $('#galbeG').val();
    
	var droite = $('#droite').val();
	var gauche = $('#gauche').val();
	
	console.log("indiceId:"+indiceId+"lensFocalGroup:"+lensFocalGroup+"generation:"+generation+"sphereD:"+sphereD+"cylindreD:"+cylindreD+"axeD:"+axeD+"additionD:"+additionD+"stockD:"+stockD+"sphereG:"+sphereG+"cylindreG:"+cylindreG+"axeG:"+axeG+"additionG:"+additionG+"stockG:"+stockG+"progressionD:"+progressionD+"type_de_verreD:"+type_de_verreD+"teinteD:"+teinteD+"traitementD:"+traitementD+"diametreD:"+diametreD+"galbeD:"+galbeD+"progressionG:"+progressionG+"type_de_verreG:"+type_de_verreG+"teinteG:"+teinteG+"traitementG:"+traitementG+"diametreG:"+diametreG+"galbeG:"+galbeG+"droite:"+droite+"gauche:"+gauche)
	
    $.ajax({
								type: "POST",
								url: "/index/setOrderRecapNew",
								data: {"indiceId" : indiceId, "lensFocalGroup" : lensFocalGroup, "generation" : generation,"sphereD" : sphereD,"cylindreD" : cylindreD,"axeD" : axeD,"additionD" : additionD,"stockD" : stockD,"sphereG" : sphereG,"cylindreG" : cylindreG,"axeG" : axeG,"additionG" : additionG,"stockG" : stockG,"progressionD":progressionD,"type_de_verreD":type_de_verreD,"teinteD":teinteD,"traitementD":traitementD,"diametreD":diametreD,"galbeD":galbeD,"progressionG":progressionG,"type_de_verreG":type_de_verreG,"teinteG":teinteG,"traitementG":traitementG,"diametreG":diametreG,"galbeG":galbeG,"droite":droite,"gauche":gauche},
								dataType:"html",
								beforeSend:function(){
									$("#recap_commande_stock").empty().append('<div style="height:400px"><div style="width:150px;margin-left:auto;margin-right:auto;padding-top:10%;">Veuillez patienter</div></div>');
								},
								success: function(data){
								console.log(data)
									if(data=="not_logged")
										window.location.reload();
									else if(data=="error"){
										alert('une erreur est survenue, veuillez réessayer, merci !');
									}
									else{
										$("#recap_commande_stock").empty().append(data);
									}
								},
								error : function(){
									$("#recap_commande_stock").empty().append('<div style="height:400px"><div style="width:550px;margin-left:auto;margin-right:auto;padding-top:10%;color:red;font-size:18px">Une erreur s\'est produite, veuillez recommencer. Si le problème persiste, envoyez un mail à </div></div>');
								}
							});
    
});
			
$( "#to_etape2" ).click(function() {			
		$('.corrections .d').hide();
		$('.corrections .g').hide();
	
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
    
    var progressionD = $('#progressionD').val();
    var progressionG = $('#progressionG').val();
    
	var progressionD = $('#progressionD').val();
    var type_de_verreD = $('#type_de_verreD').val();
    var teinteD = $('#teinteD').val();
    var traitementD = $('#traitementD').val();
    var diametreD = $('#diametreD').val();
    var galbeD = $('#galbeD').val();
    
    var progressionG = $('#progressionG').val();
    var type_de_verreG = $('#type_de_verreG').val();
    var teinteG = $('#teinteG').val();
    var traitementG = $('#traitementG').val();
    var diametreG = $('#diametreG').val();
    var galbeG = $('#galbeG').val();
    
    var options = 0;
    var optionType_de_verre = $( "#type_de_verreD option:selected" ).text();
    $('.verres .nom_verre').text(optionType_de_verre);
    $('.verres .diam_verre').text("diamètre "+diametreD);
    
    $(".verres").css("display", "block");
    $(".verres .options").css("display", "block");
    
		
		if( $('input[id="droit"]').is(':checked') ) {
		
								$('.corrections .d .eye_text').show();
								$('.corrections .d').show();
								
								if (sphereD.indexOf(".") >= 0)
								{
									
								}
								else
								{
									sphereD = sphereD+".00"
								}
								var sph = sphereD;

								var add = '';

								if(lensFocalGroup == 2 || lensFocalGroup == 3) {
									var add = 'ADD ' + additionD;
								}
								else if (lensFocalGroup == 5) {
									var add = 'DEG ' + additionD;
								}
								
								if(axeD == "")
								{
									axeD = "0";
								}
								
								if (cylindreD.indexOf(".") >= 0)
								{
									
								}
								else
								{
									cylindreD = cylindreD+".00"
								}
								if(cylindreD == '') {
									var cyl_axe = '  ';
								}
								else {
									var cyl_axe = ' (' + cylindreD + ') ' + axeD + '° ';
								}

								$('.corrections .d').find('.correction').text(sph + cyl_axe);
								$('.corrections .d').find('.add').text(add);
								
								
							}

							// Corrections gauche
							if( $('input[id="gauche"]').is(':checked') ) {
							
								$('.corrections .g .eye_text').show();
								$('.corrections .g').show();

								if (sphereG.indexOf(".") >= 0)
								{
									
								}
								else
								{
									sphereG = sphereG+".00"
								}
								var sph2 = sphereG;

								var add2 = '';

								if(lensFocalGroup == 2 || lensFocalGroup == 3) {
									 add2 = 'ADD ' + additionG;
								}
								else if (lensFocalGroup == 5) {
									 add2 = 'DEG ' + additionG;
								}
								
								if(axeG == "")
								{
									axeG = "0";
								}
								
								if (cylindreG.indexOf(".") >= 0)
								{
									
								}
								else
								{
									cylindreG = cylindreG+".00"
								}
								if(cylindreG == '') {
									var cyl_axe2 = '  ';
								}
								else {
									var cyl_axe2 = ' (' + cylindreG + ') ' + axeG + '° ';
								}


								$('.corrections .g').find('.correction').text(sph2 + cyl_axe2);
								$('.corrections .g').find('.add').text(add2);
							}

							var last_line = 0;

							if( galbeD != "") {
								$('#preview_auth_card .options .galbe').text('Galbe ' + galbeD);
								++last_line;
								
							} else {
								$('#preview_auth_card .options .galbe').text('');
								options = 0;
							}

							if(traitementD != "") {

								var tiret = '';

								if( galbeD != "") {
									var tiret = '- ';
								}

								$('#preview_auth_card .options .miroir').text('Miroir ' + $('label[for='+$('input[name="miroir"]:checked').attr('id')+']:first').text() + tiret);
								++last_line;
								//++options;
							} else {
								$('#preview_auth_card .options .miroir').text('');
							}


							/*if( $('input[name="precalibrage_diametre"]:checked').val() != 'oui' ) {
								$('.verres .diam_verre').text('diamètre ' +  $('input[name="diametre_verre"]:checked').val() );

								var field_empty = 0;

								$('.hauteur_pup input[type=text]').each(function() {
									if($(this).val() == '') {
										field_empty++;
									}
								});

								if(field_empty > 0) {
									$('.hauteur_pup input[type=text]').val(18);
								}

							}
							else {
								$('.verres .diam_verre').text('Précalibré');
							}
*/

							if( $('select#dioptrie_droit option:selected').val() != 'undefined' && $('select#dioptrie_droit option:selected').val() != '' ) {
								$('.corrections .d').find('.diopt').text($('select#dioptrie_droit option:selected').text()+' ∆');
								//++options;
							} else {
								$('.corrections .d').find('.diopt').text('');
							}

							if( $('select#dioptrie_gauche option:selected').val() != 'undefined' && $('select#dioptrie_gauche option:selected').val() != '') {
								$('.corrections .g').find('.diopt').text($('select#dioptrie_gauche option:selected').text()+' ∆');
								//++options;
							} else {
								$('.corrections .g').find('.diopt').text('');
							}

							if( $('select#base_droit option:selected').val() != 'undefined' && $('select#base_droit option:selected').val() != '' ) {
								$('.corrections .d').find('.base').text(' base ' + $('select#base_droit option:selected').text()+'°');
								//++options;
							} else {
								$('#preview_auth_card .prisme .d .base').text('');
							}

							if( $('select#base_gauche option:selected').val() != 'undefined' && $('select#base_gauche option:selected').val() != '' ) {
								$('.corrections .g').find('.base').text(' base ' + $('select#base_gauche option:selected').text()+'°');
								//++options;
							} else {
								$('.corrections .g').find('.base').text('');
							}

						/*	if(options > 0) {
								$('div.options').show();
							}
							else {
								$('div.options').hide();
							}
*/
					/*		$.ajax({
								type: "POST",
								url: "/index/getIdVerre",
								data : { 'id' : $('select[name=id_verre] option:selected').val() },
								dataType:"html",
								success: function(data){
									if(data !== undefined ) {
										$('span.nom_verre').text(data);
									}
								},
							});
							*/
		});	
		
		
		
		
});


