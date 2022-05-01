// ---------------------------------------------- A. Composant de traçage ----------------------------------------------
const signalRServerUrl = 'https://tracerserver.edieyes.net/signalrserver/signalr/';

// ------------------------ I- Connexion ------------------------
let _TracerHub = null;
let _CustomerCode = null;
let _CallBack = null;
let _Devices = [];
let _Device = null;
let _FromTabletteOrTracer = 'tablette';
let _DeviceIsConnected = false;

document.getElementById('inputFileToOma')
    .addEventListener('change', function() {

        var fr=new FileReader();
        fr.onload=function(){
            document.getElementById('txtOmaImageIn')
                .textContent=fr.result;
            document.getElementById('txtOmaImageIn').value = fr.result;
        }
        fr.readAsText(this.files[0]);
        setTimeout(function () {
            GetImageFromOma();
        }, 200);
    })

function Connect(callBack, is_loading = false) {
    _CallBack = callBack;
    _CustomerCode = $('#txtCustomerCode').val();

    $.connection.hub.url = signalRServerUrl;
    $.connection.hub.qs = "Opticien=" + _CustomerCode;
    _TracerHub = $.connection.tracerHub;

    _TracerHub.client.receiveClientVersion = function (deviceData, version) {

        const datas = deviceData.split('|');
        const deviceName = datas[0];
        const deviceId = datas.length > 1 ? datas[1] : null;

        _DeviceIsConnected = true;

        if (!_Device) {
            if (is_loading) {
                isLoading('Connection...');
            }
            // $('#divDevices').hide();

            if (!_Devices.some((device) => device.id === deviceId)) {
                _Devices.push({
                    id: deviceId,
                    name: deviceName
                });
            }

            $('#ddlDevices')
                .empty()
                // .append('<option selected="selected" value="">Sélectionner une machine</option>');
            let i = 0;
            _Devices.forEach(device => {
                i++;
                $('#ddlDevices')
                    .append('<option value="' + device.id + '">' + device.name + '</option>');
            });
            if (i == 1) {
                $('#choice_machine').hide();
            }
            // $('#btnConnect').html('Se connecter').removeClass('disabled');
            if ($('#ul_type_format li.active').attr('id') && $('#div1_format_type').is(':visible')) {
                $('#div_teledetourage').removeClass('hide');
            }
            $("#loading-overlay,#loading-drole").hide();
            // $('#divDevices').show();
        }
        else if (_Device.id === deviceId) {
            //1- Je lance soit la tabelette soit le traceur physique
            _CallBack();
        }
    };

    //Se cabler sur l'évènement pour récupérer la forme envoyée soit par la tablette soit par le traceur
    _TracerHub.client.sendEncodedOma = function (name, data) {
        $.connection.hub.stop();
        var oma = '';
        var regExp = new RegExp(/^([0-9A-Fa-f]{2})+$/);

        if (data != null && data != '' && regExp.test(data)) {
            for (i = 0; i < (data.length / 2); i++) {
                b = parseInt("0x" + data.substr(i * 2, 2));
                b ^= (i + 1) % 256;
                oma += String.fromCharCode(b);
            }
        } else {
            oma = data;
        }
        console.log('OMA' + oma);
        if (_FromTabletteOrTracer === 'tablette') {
            $('#txtOmaTabletteOut').val(oma);
            $('#txtOmaImageIn').val(oma);
            GetImageFromOma();
        }
        else if (_FromTabletteOrTracer === 'tarcer') {
            $('#txtOmaTracerOut').val(oma);

            $('#txtOmaImageIn').val(oma);
            GetImageFromOma();
        }
        else {
            $('#txtOmaTracerOut').val(oma);
        }
    };

    _TracerHub.client.broadcastMessage = function (deviceData, message) {
        const datas = deviceData.split('|');
        //const deviceName = datas[0];
        var index = message.indexOf("START");
        if(index !== -1){
            $("#loading-overlay,#loading-drole").hide();
            $('#loading-drole span').css('top', 248);
            swal({
                title: "Tracez votre monture",
                text: "Lancez le traçage de votre forme en appuyant sur le bouton de votre palpeur.",
                type: "success",
                showCancelButton: false,
                showConfirmButton: true,
                confirmButtonText: "Fermer",
                timer: 4000,
            });
            // $('#tracer_in_modal').modal('show');
            const timeModal = 3000;
            let remainingTime = timeModal;
            let percent = 100;
            let myInterval = setInterval(function () {
                remainingTime -= 100;
                percent = remainingTime / timeModal * 100
                // console.log(remainingTime);
                // console.log(remainingTime / timeModal * 100);
                document.getElementById("progress-bar-tracer").style.width = percent + "%";
                if (remainingTime < 0) {
                    clearInterval(myInterval);
                }
            }, 100);
            setTimeout(function () {
                // $('#tracer_in_modal').modal('hide')
            }, timeModal);
            //$("#divDebug").html($("#divDebug").html() + "<br/>" + "Veuillez faire démarrer le traceur");
        }
        // index = message.indexOf("JOB requested");
        console.log(message);
        // if(index !== -1){
        //     isLoading('Lancement du traceur');
        // }
        // index = message.indexOf("Build OMA buffer");
        // if(index !== -1){
        //     $("#loading-overlay,#loading").hide();
        // }
        // $("#divDebug").html($("#divDebug").html() + "<br/>" + makeSecure(deviceName) + ":" + makeSecure(message));
    };

    if ($.connection.hub.state == 1) $.connection.hub.stop();

    if (!_Device) {
        if (is_loading) {
            isLoading('Connection...');
        }
        // $('#divDevices').hide();
    }

    $.connection.hub.start()
        .done(function () {

            _DeviceIsConnected = false;

            _TracerHub.server.getClientVersion(_CustomerCode);

            setTimeout(function () {
                if (_DeviceIsConnected == false) {

                    // if (is_loading) {
                    //     isLoading('xxxx...');
                    // }
                    // $('#divDevices').hide();

                    $.connection.hub.stop();

                    $("#loading-overlay,#loading-drole").hide();
                    //$('#divDevices').show();
                    if ($('#is_teledetourage').is(':checked')) {
                        swalTeledetourage()
                        // $('#teledetourage_not_connected').modal('show');
                    }
                    // alert('Aucune machine n\'est connecté');
                }
            }, 5000); //on attend 5s pour voir si cela a répondu
        })
        .fail(function (error) {
            console.log(error);
        });
}

// function progressBar() {
//     console.log('dsadas');
// }
function makeSecure(txt) {
    txt = txt.replace("<", "[");
    txt = txt.replace(">", "]");
    return txt;
}

// ------------------------ II- Lancer la Tablette ------------------------
function LaunchTablette() {
    const oma = $('#txtOmaImageIn').val();
    const deviceId = $('#ddlDevices').find(":selected").val();

    _Device = _Devices.find((device) => device.id === deviceId);

    _FromTabletteOrTracer = 'tablette';

    const callBack = () => {

        $('#btnLaunchTablette').html('Lancer la Tablette').removeClass('disabled');

        _TracerHub.invoke('editShape', _Device.id, oma.replace(/\[BR\]/g, '\r\n'), 'fr', false);
    };

    $('#btnLaunchTablette').html('<span class="spinner-border spinner-border-sm mr-2" role="status" aria-hidden="true"></span>Lancement de la <br>Tablette en cours...').addClass('disabled');
    document.getElementById("inputFileToOma").value = "";
    Connect(callBack);
}

function addDrilled(valueX = '', valueY = '', valueDiameter = '') {
    const div = document.createElement('div');


    div.className = 'row form-group drilled';
    let num_drilled = '';
    let i = 0;
    let element = '';
    let myElem;
    while (!num_drilled) {
        i++;
        element = "drilled_" + i;
        myElem = document.getElementById(element);
        if (!myElem) {
            num_drilled = element;
        }
    }
    div.setAttribute('id',num_drilled);

    div.innerHTML = `
    <div class="col-xs-12 col-md-1"></div>
        <div class="col-xs-12 col-md-2 number-input">
        <label class="label_drilled" for="drilled_X_` + i + `">Valeur X</label>
        <input type="number"
               class="percage percage_` + i + ` valid form-control"
               name="drilled_X_` + i + `"
               id="drilled_X_` + i + `"
               value="` + valueX + `"
               aria-invalid="false">
        </div>
        <div class="col-xs-12 col-md-1"></div>
        <div class="col-xs-12 col-md-2 number-input">
        <label class="label_drilled" for="drilled_Y_` + i + `">Valeur Y</label>
        <input type="number"
               class="percage percage_` + i + ` valid form-control"
               name="drilled_Y_` + i + `"
               id="drilled_Y_` + i + `"
               value="` + valueY + `" 
               aria-invalid="false">
        </div>
        <div class="col-xs-12 col-md-1"></div>
        <div class="col-xs-12 col-md-2 number-input">
        <label for="drilled_diameter_` + i + `" style="margin-top: 7px; text-align:center">Diamètre du trou</label>
        <input type="number"
           class="percage percage_` + i + ` valid form-control"
           name="drilled_diameter_` + i + `"
           id="drilled_diameter_` + i + `"
           value="` + valueDiameter + `"
           aria-invalid="false">
        </div>
        <div class="col-xs-12 col-md-1">
        </div>
        <div class="col-xs-12 col-md-1">
        <button id="delete_drille_` + i + `" class="btn btn-warning btn-bordred btn-block waves-effect waves-light text-uppercase form-control delete_drille" type="button" name="delete_drille_` + i + `">Supprimer</button>
        </div>
        <div class="col-xs-12 col-md-1"></div>
  `;
    document.getElementById('add_drille').appendChild(div);
    $('.percage').off('input');
    $('.percage').on('input', function () {
        changeImageByOma('DRILLED', 'drilled', 1000, false)
        backgroundDrilled()
    });
    $('.delete_drille').off('click');
    $(".delete_drille").on('click', function() {
        let id =  this.id;
        console.log('id: ' + id);
        id = id.replace('delete_drille', "drilled");
        console.log('id_new: ' + id);
        let add_drille = document.getElementById("add_drille");
        console.log('add_drille: ' + add_drille);
        let drilled = document.getElementById(id);
        console.log('drilled: ' + drilled);
        add_drille.removeChild(drilled);
        changeImageByOma('DRILLED', 'drilled', 500, false)
    });
    backgroundDrilled()
}


// ------------------------ III- Lancer le Traceur ------------------------
function LaunchTracer() {
    const deviceId = $('#ddlDevices').find(":selected").val();
    _Device = _Devices.find((device) => device.id === deviceId);

    _FromTabletteOrTracer = 'tarcer';

    const callBack = () => {

        $('#btnLaunchTracer').html('Tracer la forme').removeClass('disabled');
        _TracerHub.invoke('traceWithSetup', _Device.id, {});
    };

    isLoading('Connection au <br>Traceur en cours...');
    $('#loading-drole span').css('top', 248);

    // $('#btnLaunchTracer').html('<span class="spinner-border spinner-border-sm mr-2" role="status" aria-hidden="true"></span>Lancement du <br>Traceur en cours...').addClass('disabled');
    document.getElementById("inputFileToOma").value = "";
    Connect(callBack);
}

// ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

// ---------------------------------------------- B.Forme Oma API ----------------------------------------------
const omaApiUrl = 'https://tracerserver.edieyes.net/Api/oma/';

// ------------------------ I- Récupération d'une image à partir d'une forme OMA ------------------------
function GetImageFromOma() {
    $('#produit').addClass('hide');

    // $('.quantity').on('change', function () {
    //     $('#produit').addClass('hide');
    // })

    // $('#divOmaImageOut').hide();
    // $('#divOmaImageError').hide();
    let txtOmaImageIn = $('#txtOmaImageIn').val();
    if (txtOmaImageIn.indexOf("SEGHT") == -1) {
        changeOma('SEGHT', 'hauteur_montage')
        // changeHauteurMontage();
    }

    if (txtOmaImageIn.indexOf("IPD") == -1) {
        changeOma('IPD', 'teledetourage_ecart_puppillaire')
        // changeEcartPupillaire()
    }

    const hauteurBoxingOld = $('#hauteur_boxing').val()
    const largeurBoxingOld = $('#largeur_boxing').val()

    const omaIn = $('#txtOmaImageIn').val();
    const params = {
        OMA: omaIn
    };

    const request = {
        type: 'POST',
        url: omaApiUrl + 'GetImage',
        contentType: 'application/json',
        data: JSON.stringify(params),
        success: function (result) {
            $('#imgOmaImageOut').attr('style', "width: 100%;height: 100%;background-size: cover;background-repeat: no-repeat;background-image: url('data:image/png;base64," + result + "')");
            $('#omaImageDatas').show();
            // $('#divOmaImageOut').show();
            widthImageOma();
            txtOmaImageIn = $('#txtOmaImageIn').val();
            // console.log('dadsasadsasdadssadsad ' + txtOmaImageIn);
            let ecart_pup_G;
            let ecart_pup_D;
            let hauteur_montage_G;
            let hauteur_montage_D;
            if (txtOmaImageIn == '') {
                $('#btnLaunchTablette').prop('disabled', true);
                $('#divSaveOmaToFile').hide();
            }
            else {
                $('#btnLaunchTablette').prop('disabled', false);
                $('#divSaveOmaToFile').show();
                let calculDiametreUtile = true;
                if (txtOmaImageIn.lastIndexOf("IPD") != -1) {
                    let ipd = txtOmaImageIn.substring(
                        txtOmaImageIn.lastIndexOf("IPD") + 3,
                        txtOmaImageIn.lastIndexOf("\n") + 2);
                    ipd = ipd.substring(
                        0,
                        ipd.indexOf("\n"));
                    ecart_pup_D = ipd.substring(
                        ipd.lastIndexOf("=") + 1,
                        ipd.indexOf(";"))
                    ecart_pup_G = ipd.substring(
                        ipd.lastIndexOf(";") + 1
                    )
                    $('#teledetourage_ecart_puppillaire_droit').val(ecart_pup_D * 1);
                    $('#teledetourage_ecart_puppillaire_gauche').val(ecart_pup_G * 1);
                }
                else {
                    calculDiametreUtile = false;
                }

                if (txtOmaImageIn.lastIndexOf("SEGHT") != -1) {
                    let seght = txtOmaImageIn.substring(
                        txtOmaImageIn.lastIndexOf("SEGHT") + 5,
                        txtOmaImageIn.lastIndexOf("\n") + 2);
                    seght = seght.substring(
                        0,
                        seght.indexOf("\n"));

                    // console.log('txtOmaImageIn :' + txtOmaImageIn);
                    console.log('seght :' + seght);
                    hauteur_montage_D = seght.substring(
                        seght.lastIndexOf("=") + 1,
                        seght.lastIndexOf(";"))
                    hauteur_montage_G = seght.substring(
                        seght.lastIndexOf(";") + 1
                    )
                    console.log('hauteur_montage_D' + hauteur_montage_D)
                    console.log('hauteur_montage_G' + hauteur_montage_G)
                    console.log('hauteur_montage_droit' + hauteur_montage_D * 1)
                    console.log('hauteur_montage_gauche' + hauteur_montage_G * 1)
                    $('#hauteur_montage_droit').val(hauteur_montage_D * 1);
                    $('#hauteur_montage_gauche').val(hauteur_montage_G * 1);
                }
                else {
                    calculDiametreUtile = false;
                }

                if (txtOmaImageIn.lastIndexOf("DRILLE") != -1) {
                    let els = document.getElementsByClassName("drilled");
                    if (els.length == 0) {
                        getDrilledByOmaAndSet(txtOmaImageIn);
                    }
                }

                let dbl = txtOmaImageIn.substring(
                    txtOmaImageIn.lastIndexOf("DBL") + 3,
                    txtOmaImageIn.lastIndexOf("\n") + 2);
                let taille_du_pont = dbl.substring(
                    1,
                    dbl.indexOf("\n"));

                $('#taille_du_pont').val(taille_du_pont * 1);

                let hbox = txtOmaImageIn.substring(
                    txtOmaImageIn.lastIndexOf("HBOX") + 4,
                    txtOmaImageIn.lastIndexOf("\n") + 2);
                let largeurBoxing = hbox.substring(
                    1,
                    hbox.indexOf(";"));
                // console.log('largeur_boxing : ' + largeurBoxing);
                if(largeurBoxing != largeurBoxingOld) {
                    $('#largeur_boxing').val(Math.round(largeurBoxing * 100) / 100);
                }


                let vbox = txtOmaImageIn.substring(
                    txtOmaImageIn.lastIndexOf("VBOX") + 4,
                    txtOmaImageIn.lastIndexOf("\n") + 2);

                let hauteurBoxing = vbox.substring(
                    1,
                    vbox.indexOf(";"));

                if(hauteurBoxing != hauteurBoxingOld) {
                    $('#hauteur_boxing').val(Math.round(hauteurBoxing * 100) / 100);
                }

                let omaArray = txtOmaImageIn.split('\n');
                let currentEye = '';
                result = {
                    'left':{'rayon':[],'angle':[]},
                    'right':{'rayon':[],'angle':[]}
                };

                omaArray.forEach( (element,index)=> {
                    if(element.substr(0,7)==='TRCFMT='){
                        // currentEye = element.split(';')[3];
                        if (element.split(';')[3] == 'R') {
                            currentEye = 'right';
                        }
                        else if (element.split(';')[3] == 'L') {
                            currentEye = 'left';
                        }
                    }
                    if(element.substr(0,2)==='R=' || element.substr(0,2)==='A='){
                        let currentElementType;
                        if (element.substr(0,1) == 'R') {
                            currentElementType = 'rayon';
                        }
                        else if (element.substr(0,1) == 'A') {
                            currentElementType = 'angle';
                        }

                        const ligne = element.substr(2,999);
                        const ligneArray = ligne.split(';');
                        ligneArray.forEach(value=>result[currentEye][currentElementType].push(parseInt(value)));
                    }
                });
                let addAngleLeft = false;
                let addAngleRight = false;
                let leftLength = result.left.rayon.length;
                let rightLength = result.right.rayon.length;
                if (result.left.angle.length === 0) {
                    addAngleLeft = true;
                    // leftLength = result.left.rayon.length;
                }
                if (result.right.angle.length === 0) {
                    addAngleRight = true;
                    // rightLength = result.right.rayon.length;
                }

                if (addAngleLeft && addAngleRight && leftLength == rightLength) {
                    for (let i = 0; i < leftLength; i++) {
                        result.right.angle.push(36000 / rightLength * i)
                        result.left.angle.push(36000 / leftLength * i)
                    }
                }
                else if (addAngleLeft) {
                    for (let i = 0; i < leftLength; i++) {
                        result.left.angle.push(36000 / leftLength * i)
                    }
                }
                else if (addAngleRight) {
                    result.right.angle.push(36000 / rightLength * i)
                }


                if (calculDiametreUtile) {
                    taille_du_pont = parseFloat(taille_du_pont)
                    largeurBoxing = parseFloat(largeurBoxing)
                    ecart_pup_G = parseFloat(ecart_pup_G)
                    ecart_pup_D = parseFloat(ecart_pup_D)
                    hauteur_montage_D = parseFloat(hauteur_montage_D)
                    hauteur_montage_G = parseFloat(hauteur_montage_G)
                    let rayonUtileLeft = 0;
                    let rayonUtileRight = 0;
                    let x_centre_eye_left = myRound(ecart_pup_G - (taille_du_pont + largeurBoxing) / 2, 3);
                    let x_centre_eye_right = myRound((taille_du_pont + largeurBoxing) / 2 - ecart_pup_D, 3);
                    let y_centre_eye_left = myRound(hauteur_montage_G - hauteurBoxing / 2, 3);
                    let y_centre_eye_right = myRound(hauteur_montage_D - hauteurBoxing / 2, 3);
                    let x;
                    let y;
                    let longueur;

                    console.log(rightLength);
                    for (let i = 0; i < rightLength; i++) {
                        x = (result.right.rayon[i] / 100) * Math.sin(result.right.angle[i] / 100);
                        y = (result.right.rayon[i] / 100) * Math.cos(result.right.angle[i] / 100);
                        longueur = Math.sqrt(Math.pow(x_centre_eye_right - x, 2) + Math.pow(y_centre_eye_right - y, 2))
                        rayonUtileRight = Math.max(rayonUtileRight, longueur);
                    }

                    for (let i = 0; i < leftLength; i++) {
                        x = (result.left.rayon[i] / 100) * Math.sin(result.left.angle[i] / 100);
                        y = (result.left.rayon[i] / 100) * Math.cos(result.left.angle[i] / 100);
                        longueur = Math.sqrt(Math.pow(x_centre_eye_left - x, 2) + Math.pow(y_centre_eye_left - y, 2))
                        rayonUtileLeft = Math.max(rayonUtileLeft, longueur);
                    }

                    const marge_d_erreur_diametre_utile = 0;
                    let diametreUtileLeft = myCeil(rayonUtileLeft * 2, 1) + marge_d_erreur_diametre_utile;
                    let diametreUtileRight = myCeil(rayonUtileRight * 2, 1) + marge_d_erreur_diametre_utile;

                    console.log('diametreUtileRight : ' + diametreUtileRight);
                    console.log('diametreUtileLeft : ' + diametreUtileLeft);
                    $('#diametre_utile_right').val(diametreUtileRight);
                    $('#diametre_utile_left').val(diametreUtileLeft);
                    // console.log(result);
                    if (!($('#li_format_perce').hasClass('active'))) {
                        $('#div_refraction').removeClass('hide');
                    }
                    else {
                        $('#div_refraction').addClass('hide');
                    }
                }
                backgroundEcartAndHauteurAll();
                backgroundDrilled()
                // x = (result.right.rayon[0] / 100) * Math.sin(result.right.angle[0] / 100);
                // y = (result.right.rayon[0] / 100) * Math.cos(result.right.angle[0] / 100);
                // longueur = Math.sqrt(Math.pow(x_centre_eye_right - x, 2) + Math.pow(y_centre_eye_right - y, 2))
                // diametreUtileRight = Math.max(diametreUtileRight, longueur);
                //
                // x = (result.left.rayon[0] / 100) * Math.sin(result.left.angle[0] / 100);
                // y = (result.left.rayon[0] / 100) * Math.cos(result.left.angle[0] / 100);
                // longueur = Math.sqrt(Math.pow(x_centre_eye_left - x, 2) + Math.pow(y_centre_eye_left - y, 2))
                // diametreUtileLeft = Math.max(diametreUtileLeft, longueur);
                // console.log(x_centre_eye_right);
                // console.log(y_centre_eye_right);
                // console.log(x);
                // console.log(y);
                // console.log(diametreUtileRight);
                // console.log(diametreUtileLeft);
            }

        },
        statusCode: {
            400: function (data) {
                $('#divOmaImageError').show();

                if (data && data.responseText) {
                    $('#divOmaImageError').html(data.responseText);
                }
                else {
                    $('#divOmaImageError').html('Erreur lors de l\'appel au Web Service');
                }
            }
        }
    };

    $.ajax(request);

}

function myRound(number, chiffre_apres_la_virgule) {
    let x = Math.pow(10, chiffre_apres_la_virgule);
    return Math.round(number * x) / x;
}

function myCeil(number, chiffre_apres_la_virgule) {
    let x = Math.pow(10, chiffre_apres_la_virgule);
    return Math.ceil(number * x) / x;
}

//------------------------ II - Redimensionner une forme OMA ------------------------
function ResizeOma() {
    const omaIn = $('#txtOmaImageIn').val();
    const aBox = parseFloat($('#largeur_boxing').val());
    const bBox = parseFloat($('#hauteur_boxing').val());
    console.log($('#largeur_boxing').val());

    const params = {
        ABox: aBox,
        BBox: bBox,
        OMA: omaIn
    };

    const request = {
        type: 'POST',
        contentType: 'application/json',
        url: omaApiUrl + 'Resize',
        data: JSON.stringify(params),
        dataType: "json",
        async: true,
        success: function (data) {
            if (data && data.oma) {
                $('#txtOmaImageIn').val(data.oma);
                setTimeout(function () {
                     GetImageFromOma();
                }, 100);
            }
        },
        statusCode: {
            400: function (data) {
                if (data && data.responseText) {
                    $('#txtOmaResizeOut').val(data.responseText);
                }
                else {
                    $('#txtOmaResizeOut').val('Erreur lors de l\'appel au Web Service');
                }
            }
        }
    };

    $.ajax(request);
}

function SetCodeOma() {
    $("#inputFileToOma").click();
}

function isLoading(text) {
    $("#text_loading_drole").html(text) ;
    $("#loading-overlay,#loading-drole").show();
}

function saveOmaToFile() {
    let blob = new Blob([$('#txtOmaImageIn').val()],
        { type: "text/plain;charset=utf-8" });
    saveAs(blob, "optieyes.oma");
}

$('.btn-plus, .btn-minus').on('click', function(e) {
    const isNegative = $(e.target).closest('.btn-minus').is('.btn-minus');
    const input = $(e.target).closest('.input-group').find('input');
    if (input.is('input')) {
        input[0][isNegative ? 'stepDown' : 'stepUp']()
    }
})

$('.teledetourage_ecart_puppillaire').on('input', function () {
    changeImageByOma('IPD', 'teledetourage_ecart_puppillaire', 1000)
});

// $('#teledetourage_ecart_puppillaire_gauche').on('input', function () {
//     changeImageByOma('SEGHT', 'teledetourage_ecart_puppillaire', 1000)
// });

$('.hauteur_montage').on('input', function () {
    changeImageByOma('SEGHT', 'hauteur_montage', 1000)
});

// $('#hauteur_montage_gauche').on('input', function () {
//     changeImageByOma('IPD', 'hauteur_montage', 1000)
// });

$('#largeur_boxing').on('input', function () {
    ResizeOma();
    // setTimeout(function () {
    //     GetImageFromOma();
    // }, 1000);
});

$('#hauteur_boxing').on('input', function () {
    ResizeOma();
    // setTimeout(function () {
    //     GetImageFromOma();
    // }, 1000);
});

$('#taille_du_pont').on('input', function () {
    alert('xxx');
    changeImageByOma('DBL', 'taille_du_pont', 1000, false)
});

function changeImageByOma(dataChangeInOma, dataChangeInSite, time, droit_gauche = true) {
    changeOma(dataChangeInOma, dataChangeInSite, droit_gauche)
    // changeHauteurMontage();
    setTimeout(function () {
        GetImageFromOma();
    }, time);
}

$(".change_hauteur_montage").on('click', function(e) {
    changeImageByOma('SEGHT', 'hauteur_montage', 200)
})

$(".change_ecart_puppillaire").on('click', function(e) {
    changeImageByOma('IPD', 'teledetourage_ecart_puppillaire', 200)
})

$(".change_taille_du_pont").on('click', function(e) {
    changeImageByOma('DBL', 'taille_du_pont', 200, false)
})

$(".change_largeur_boxing").on('click', function(e) {
    ResizeOma();
    // setTimeout(function () {
    //     GetImageFromOma();
    // }, 200);
})

$(".change_hauteur_boxing").on('click', function(e) {
    ResizeOma();
    // setTimeout(function () {
    //     GetImageFromOma();
    // }, 200);
})

function changeOma(dataChangeInOma, dataChangeInSite, droit_gauche = true) {
    let txtOmaImageIn = $('#txtOmaImageIn').val();
    console.log(txtOmaImageIn);
    console.log(dataChangeInOma);
    if (dataChangeInOma == 'DRILLED') {
        changeOmaForDrilled(txtOmaImageIn);
    }
    else {
        let data = txtOmaImageIn.substring(
            txtOmaImageIn.lastIndexOf(dataChangeInOma),
            txtOmaImageIn.lastIndexOf("\n") + 2);
        data = data.substring(
            0,
            data.indexOf("\n") + 1);

        txtOmaImageIn = txtOmaImageIn.replace(data, "");
        if (droit_gauche) {
            let idDroit = dataChangeInSite + '_droit';
            let valueDroit = $('#' + idDroit).val();

            // console.log('valueDroit ' + valueDroit);
            // console.log('dataChangeInOma ' + dataChangeInOma + ' ' + valueDroit);
            // let minDroit = document.getElementById(idDroit).min;
            // let maxDroit = document.getElementById(idDroit).max;
            //
            // if (valueDroit) {
            //     valueDroit = Math.max(minDroit, valueDroit);
            //     valueDroit = Math.min(maxDroit, valueDroit);
            // }

            let idGauche = dataChangeInSite + '_gauche';
            let valueGauche = $('#' + idGauche).val();

            // let minGauche = document.getElementById(idGauche).min;
            // let maxGauche = document.getElementById(idGauche).max;
            //
            // if (valueGauche) {
            //     valueGauche = Math.max(minGauche, valueGauche);
            //     valueGauche = Math.min(maxGauche, valueGauche);
            // }
            //
            if (valueGauche && !valueDroit) {
                valueDroit = valueGauche
            }
            else if (valueDroit && !valueGauche) {
                valueGauche = valueDroit
            }
            // console.log('valueDroitOld' + valueDroitOld);
            // console.log(!(!valueDroitOld && !valueGaucheOld));
            if (valueDroit || valueGauche) {
                $('#txtOmaImageIn').val(txtOmaImageIn + dataChangeInOma + "=" + valueDroit + ';' + valueGauche + '\n');
            }
        }
        else {
            let id = dataChangeInSite;
            let value = $('#' + id).val();
            // let min = document.getElementById(id).min;
            // let max = document.getElementById(id).max;

            // if (!value) {
            //     value = min;
            // } else {
            //     value = Math.max(min, value);
            //     value = Math.min(max, value);
            // }

            if (dataChangeInOma == 'DBL') {
                $('#txtOmaImageIn').val(txtOmaImageIn + dataChangeInOma + "=" + value + '\n');
            }
            else {
                $('#txtOmaImageIn').val(txtOmaImageIn + dataChangeInOma + "=" + value + ';' + value + '\n');
            }
        }
    }
}

function changeOmaForDrilled(txtOmaImageIn) {
    let data;
    let indexDrille = txtOmaImageIn.indexOf("DRILLE");
    while (indexDrille >= 0) {
        data = txtOmaImageIn.substring(
            indexDrille,
            txtOmaImageIn.indexOf("CentreBoxing") + 13);
        // console.log("DATA     :    " + data);
        // console.log("txtOmaImageIn     :    " + txtOmaImageIn);

        txtOmaImageIn = txtOmaImageIn.replace(data, "");
        // console.log("txtOmaImageInNNNNNNNNNNNNNNNNNNNNNNNNNN   " + txtOmaImageIn);
        indexDrille = txtOmaImageIn.indexOf("DRILLE");
    }

    // console.log(txtOmaImageIn);

    let els = document.getElementsByClassName("drilled");
    let num;
    let addDrilled = '';
    let drilled_X = '';
    let drilled_Y = '';
    let drilled_diameter = '';
    for(let i = 0; i < els.length; i++)
    {
        num = els[i].id.replace("drilled", "");
        drilled_X = $('#drilled_X' + num).val();
        drilled_Y = $('#drilled_Y' + num).val();
        drilled_diameter = $('#drilled_diameter' + num).val();
        if (drilled_X != '' && drilled_Y != '' && drilled_diameter != '') {
            addDrilled += 'DRILLE=B;CF;' + drilled_X + ';' + drilled_Y + ';' + drilled_diameter + ';;;;;;;\n' +
                '_DRILLE=B;CF;' + drilled_X + ';' + drilled_Y + ';' + drilled_diameter + ';;;;;;;;CentreBoxing\n';
        }
    }
    txtOmaImageIn += addDrilled;
    $('#txtOmaImageIn').val(txtOmaImageIn);

}

function getDrilledByOmaAndSet(txtOmaImageIn) {
    let data;
    let indexDrille = txtOmaImageIn.indexOf("DRILLE");
    // let endIndex = txtOmaImageIn.indexOf("_DRILLE");
    let matches;
    let valueX = '';
    let valueY = '';
    let valueDiameter = '';
    // if (endIndex < 0) {
    let endIndex = txtOmaImageIn.indexOf("CentreBoxing");
    // }
    let i=0;
    let dataClone;
    while (indexDrille >= 0 && i<10) {
        data = txtOmaImageIn.substring(
            indexDrille,
            endIndex);
        // console.log("DATA     :    " + data);
        // console.log("txtOmaImageIn     :    " + txtOmaImageIn);
        dataClone = data;
        for (let i = 0; i < 3; i++) {
            matches = data.match(/(\-*\d+\.*\d*)/);
            if (typeof matches[0] !== 'undefined') {
                if (i == 0) {
                    valueX = matches[0];
                }
                else if (i == 1) {
                    valueY = matches[0];
                }
                else {
                    valueDiameter = matches[0];
                }
            }
            console.log('valueX ' + valueX);
            console.log('valueY ' + valueY);
            console.log('valueDiameter ' + valueDiameter);
            data = data.replace(matches[0], "");
        }
        addDrilled(valueX, valueY, valueDiameter)
        txtOmaImageIn = txtOmaImageIn.replace(dataClone, "");
        indexDrille = txtOmaImageIn.indexOf("DRILLE");
        i++;
    }

    // console.log(txtOmaImageIn);

    // let els = document.getElementsByClassName("drilled");
    // let num;
    // let addDrilled = '';
    // let drilled_X = '';
    // let drilled_Y = '';
    // let drilled_diameter = '';
    // for(let i = 0; i < els.length; i++)
    // {
    //     num = els[i].id.replace("drilled", "");
    //     drilled_X = $('#drilled_X' + num).val();
    //     drilled_Y = $('#drilled_Y' + num).val();
    //     drilled_diameter = $('#drilled_diameter' + num).val();
    //     if (drilled_X != '' && drilled_Y != '' && drilled_diameter != '') {
    //         addDrilled += 'DRILLE=B;CF;' + drilled_X + ';' + drilled_Y + ';' + drilled_diameter + ';;;;;;;\n' +
    //             '_DRILLE=B;CF;' + drilled_X + ';' + drilled_Y + ';' + drilled_diameter + ';;;;;;;;CentreBoxing\n';
    //     }
    // }
}