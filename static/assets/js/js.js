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

function Connect(callBack) {

    _CallBack = callBack;
    _CustomerCode = $('#txtCustomerCode').val();

    $.connection.hub.url = signalRServerUrl;
    $.connection.hub.qs = "Opticien=" + _CustomerCode;
    _TracerHub = $.connection.tracerHub;

    // Se cabler sur l'évènement de connection au serveur SignalR
    _TracerHub.client.receiveClientVersion = function (deviceData, version) {

        const datas = deviceData.split('|');
        const deviceName = datas[0];
        const deviceId = datas.length > 1 ? datas[1] : null;

        //1- J'affiche la liste des ordinateurs connectés avec le même code client de l'opticien
        if (!_Device) {

            _DeviceIsConnected = true;

            $('#btnConnect').html('<span class="spinner-border spinner-border-sm mr-2" role="status" aria-hidden="true"></span>Connexion en cours...').addClass('disabled');
            $('#divDevices').hide();

            if (!_Devices.some((device) => device.id === deviceId)) {
                _Devices.push({
                    id: deviceId,
                    name: deviceName
                });
            }

            $('#ddlDevices')
                .empty()
                .append('<option selected="selected" value="">Sélectionner une machine</option>');

            _Devices.forEach(device => {
                $('#ddlDevices')
                    .append('<option value="' + device.id + '">' + device.name + '</option>');
            });

            $('#btnConnect').html('Se connecter').removeClass('disabled');
            $('#divDevices').show();
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
        const deviceName = datas[0];

        $("#divDebug").html($("#divDebug").html() + "<br/>" + makeSecure(deviceName) + ":" + makeSecure(message));
    };

    if ($.connection.hub.state == 1) $.connection.hub.stop();

    if (!_Device) {
        $('#btnConnect').html('<span class="spinner-border spinner-border-sm mr-2" role="status" aria-hidden="true"></span>Connexion en cours...').addClass('disabled');
        $('#divDevices').hide();
    }

    $.connection.hub.start()
        .done(function () {

            // _DeviceIsConnected = false;

            _TracerHub.server.getClientVersion(_CustomerCode);

            setTimeout(function () {
                if (_DeviceIsConnected == false) {

                    $('#btnConnect').html('<span class="spinner-border spinner-border-sm mr-2" role="status" aria-hidden="true"></span>Connexion en cours...').addClass('disabled');
                    $('#divDevices').hide();

                    $.connection.hub.stop();

                    alert('Aucune machine n\'est connecté')
                }
            }, 10000); //on attend 20s pour voir si cela a répondu

        })
        .fail(function (error) {
            console.log(error);
        });
}

function makeSecure(txt) {
    txt = txt.replace("<", "[");
    txt = txt.replace(">", "]");
    return txt;
}

// ------------------------ II- Lancer la Tablette ------------------------
function LaunchTablette() {
    const oma = $('#txtOmaTabletteIn').val();
    const deviceId = $('#ddlDevices').find(":selected").val();

    _Device = _Devices.find((device) => device.id === deviceId);

    _FromTabletteOrTracer = 'tablette';

    const callBack = () => {

        $('#btnLaunchTablette').html('Lancer la Tablette').removeClass('disabled');

        _TracerHub.invoke('editShape', _Device.id, oma.replace(/\[BR\]/g, '\r\n'), 'fr', false);
    };

    $('#btnLaunchTablette').html('<span class="spinner-border spinner-border-sm mr-2" role="status" aria-hidden="true"></span>Lancement de la Tablette en cours...').addClass('disabled');

    Connect(callBack);
}


// ------------------------ III- Lancer le Traceur ------------------------
function LaunchTracer() {
    const deviceId = $('#ddlDevices').find(":selected").val();
    _Device = _Devices.find((device) => device.id === deviceId);

    _FromTabletteOrTracer = 'tarcer';

    const callBack = () => {

        $('#btnLaunchTracer').html('Lancer le Traceur').removeClass('disabled');

        _TracerHub.invoke('traceWithSetup', _Device.id, {});
    };

    $('#btnLaunchTracer').html('<span class="spinner-border spinner-border-sm mr-2" role="status" aria-hidden="true"></span>Lancement du Traceur en cours...').addClass('disabled');

    Connect(callBack);
}

// ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

// ---------------------------------------------- B.Forme Oma API ----------------------------------------------
const omaApiUrl = 'https://tracerserver.edieyes.net/Api/oma/';

// ------------------------ I- Récupération d'une image à partir d'une forme OMA ------------------------
function GetImageFromOma() {

    $('#divOmaImageOut').hide();
    $('#divOmaImageError').hide();

    const omaIn = $('#txtOmaImageIn').val();

    const params = {
        OMA: omaIn
    };

    print_r(omaIn);
    console.log(omaApiUrl + 'GetImage');
    const request = {
        type: 'POST',
        url: omaApiUrl + 'GetImage',
        contentType: 'application/json',
        data: JSON.stringify(params),
        success: function (result) {
            $('#imgOmaImageOut').attr('style', "width: 100%;height: 100%;background-size: cover;background-repeat: no-repeat;background-image: url('data:image/png;base64," + result + "')");
            $('#divOmaImageOut').show();
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

//------------------------ II - Redimensionner une forme OMA ------------------------
function ResizeOma() {
    const omaIn = $('#txtOmaResizeIn').val();
    const aBox = parseFloat($('#txtAbox').val());
    const bBox = parseFloat($('#txtBbox').val());

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
                $('#txtOmaResizeOut').val(data.oma);
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

function GetTokens() {
    const params = {
        Name: 'testws',
        Password: 'testws',
        SessionID: '123456789'
    };

    const request = {
        type: 'POST',
        contentType: 'application/json',
        url: 'https://webshoptest.ophtalmic.fr:4433/WebShop.Ophtalmic/api/Tokens/GetTokensWithSessionID',
        data: JSON.stringify(params),
        dataType: 'json',
        success: function (data) {
            alert(data);
        },
        statusCode: {
            400: function (data) {
                if (data && data.responseText) {
                    alert(data.responseText);
                }
                else {
                    alert(data);
                }
            }
        }
    };

    $.ajax(request);
}