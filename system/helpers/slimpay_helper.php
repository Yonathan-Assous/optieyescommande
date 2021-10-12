<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once("static/slimpay/autoload.php");


function checkIBAN($iban)
{
    $iban = strtolower(str_replace(' ','',$iban));
    $Countries = array('al'=>28,'ad'=>24,'at'=>20,'az'=>28,'bh'=>22,'be'=>16,'ba'=>20,'br'=>29,'bg'=>22,'cr'=>21,'hr'=>21,'cy'=>28,'cz'=>24,'dk'=>18,'do'=>28,'ee'=>20,'fo'=>18,'fi'=>18,'fr'=>27,'ge'=>22,'de'=>22,'gi'=>23,'gr'=>27,'gl'=>18,'gt'=>28,'hu'=>28,'is'=>26,'ie'=>22,'il'=>23,'it'=>27,'jo'=>30,'kz'=>20,'kw'=>30,'lv'=>21,'lb'=>28,'li'=>21,'lt'=>20,'lu'=>20,'mk'=>19,'mt'=>31,'mr'=>27,'mu'=>30,'mc'=>27,'md'=>24,'me'=>22,'nl'=>18,'no'=>15,'pk'=>24,'ps'=>29,'pl'=>28,'pt'=>25,'qa'=>29,'ro'=>24,'sm'=>27,'sa'=>24,'rs'=>22,'sk'=>24,'si'=>19,'es'=>24,'se'=>24,'ch'=>21,'tn'=>24,'tr'=>26,'ae'=>23,'gb'=>22,'vg'=>24);
    $Chars = array('a'=>10,'b'=>11,'c'=>12,'d'=>13,'e'=>14,'f'=>15,'g'=>16,'h'=>17,'i'=>18,'j'=>19,'k'=>20,'l'=>21,'m'=>22,'n'=>23,'o'=>24,'p'=>25,'q'=>26,'r'=>27,'s'=>28,'t'=>29,'u'=>30,'v'=>31,'w'=>32,'x'=>33,'y'=>34,'z'=>35);

    if(strlen($iban) == $Countries[substr($iban,0,2)]){

        $MovedChar = substr($iban, 4).substr($iban,0,4);
        $MovedCharArray = str_split($MovedChar);
        $NewString = "";

        foreach($MovedCharArray AS $key => $value){
            if(!is_numeric($MovedCharArray[$key])){
                $MovedCharArray[$key] = $Chars[$MovedCharArray[$key]];
            }
            $NewString .= $MovedCharArray[$key];
        }

        if(bcmod($NewString, '97') == 1)
        {
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
    else{
        return FALSE;
    }
}


use \HapiClient\Http;
use \HapiClient\Hal;


function createMandat($infos = null)
{
    if($infos) {

        try {

            // The HAPI Client
            $hapiClient = new Http\HapiClient(
                'https://api.slimpay.net',
                '/',
                'https://api.slimpay.net/alps/v1',
                new Http\Auth\Oauth2BasicAuthentication(
                    '/oauth/token',
                    'optimeyes01 ',
                    'ix9J690T8qnMTy9glvHeZCSIUzsCswEG5lHLQMhO'
                )
            );

            // The Relations Namespace
            $relNs = 'https://api.slimpay.net/alps#';

            // Follow create-orders
            $rel = new Hal\CustomRel($relNs . 'create-orders');
            $follow = new Http\Follow($rel, 'POST', ['user-approval'], new Http\JsonBody(
                [
                    'locale' => 'fr',
                    'reference' => null,
                    'started' => true,
                    'creditor' => [
                        'reference' => 'optimizefrance'
                    ],
                    'subscriber' => [
                        'reference' => $infos['client_ref']
                    ],
                    'items' => [
                        [
                            'type' => 'signMandate',
                            'mandate' => [
                                'createSequenceType' => null,
                                'dateSigned' => null,
                                'reference' => $infos['slm_ref'],
                                'standard' => 'SEPA',
                                'signatory' => [
                                    'companyName' => $infos['companyName'],
                                    'email' => $infos['email'],
                                    'familyName' => $infos['familyName'],
                                    'givenName' => $infos['givenName'],
                                    'honorificPrefix' => $infos['honorificPrefix'],
                                    'organizationName' => null,
                                    'telephone' => null,
                                    'bankAccount' => [
                                        'bic' => null,
                                        'iban' => $infos['iban']
                                    ],
                                    'billingAddress' => [
                                        'city' => $infos['city'],
                                        'country' => 'FR',
                                        'postalCode' => $infos['postalCode'],
                                        'street1' => $infos['street1'],
                                        'street2' => $infos['street2']
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ));

            $res = $hapiClient->sendFollow($follow);

            // The Resource's state

            $res = [
                'state' => $res->getState(),
                'links' => $res->getAllLinks($relNs . 'user-approval')
            ];

            return array('status' => 1, 'link' => $res['links'][$relNs.'user-approval']->href);

        } catch (Exception $e) {
            return array('status' => $e->getMessage());
        }

    }
    else {
        return false;
    }

}

function createMandatTest($infos = null)
{
//    if($infos) {
//
//        try {
//
//            // The HAPI Client
//            $hapiClient = new Http\HapiClient(
//                'https://api.slimpay.net',
//                '/',
//                'https://api.slimpay.net/alps/v1',
//                new Http\Auth\Oauth2BasicAuthentication(
//                    '/oauth/token',
//                    'optimeyes01 ',
//                    'ix9J690T8qnMTy9glvHeZCSIUzsCswEG5lHLQMhO'
//                )
//            );
//
//            // The Relations Namespace
//            $relNs = 'https://api.slimpay.net/alps#';
//
//            // Follow create-orders
//            $rel = new Hal\CustomRel($relNs . 'create-orders');
//            $follow = new Http\Follow($rel, 'POST', ['user-approval'], new Http\JsonBody(
//                [
//                    'locale' => 'fr',
//                    'reference' => null,
//                    'started' => true,
//                    'creditor' => [
//                        'reference' => 'optimizefrance'
//                    ],
//                    'subscriber' => [
//                        'reference' => $infos['client_ref']
//                    ],
//                    'items' => [
//                        [
//                            'type' => 'signMandate',
//                            'mandate' => [
//                                'createSequenceType' => null,
//                                'dateSigned' => null,
//                                'reference' => $infos['slm_ref'],
//                                'standard' => 'SEPA',
//                                'signatory' => [
//                                    'companyName' => $infos['companyName'],
//                                    'email' => $infos['email'],
//                                    'familyName' => $infos['familyName'],
//                                    'givenName' => $infos['givenName'],
//                                    'honorificPrefix' => $infos['honorificPrefix'],
//                                    'organizationName' => null,
//                                    'telephone' => null,
//                                    'bankAccount' => [
//                                        'bic' => null,
//                                        'iban' => $infos['iban']
//                                    ],
//                                    'billingAddress' => [
//                                        'city' => $infos['city'],
//                                        'country' => 'FR',
//                                        'postalCode' => $infos['postalCode'],
//                                        'street1' => $infos['street1'],
//                                        'street2' => $infos['street2']
//                                    ]
//                                ]
//                            ]
//                        ]
//                    ]
//                ]
//            ));
//
//            $res = $hapiClient->sendFollow($follow);
//
//            // The Resource's state
//
//            $res = [
//                'state' => $res->getState(),
//                'links' => $res->getAllLinks($relNs . 'user-approval')
//            ];
//
//            return array('status' => 1, 'link' => $res['links'][$relNs.'user-approval']->href);
//
//        } catch (Exception $e) {
//            return array('status' => $e->getMessage());
//        }
//
//    }
//    else {
//        return false;
//    }

}

function getMandat($ref)
{

    try {

        // The HAPI Client
        $hapiClient = new Http\HapiClient(
            'https://api.slimpay.net',
            '/',
            'https://api.slimpay.net/alps/v1',
            new Http\Auth\Oauth2BasicAuthentication(
                '/oauth/token',
                'optimeyes01 ',
                'ix9J690T8qnMTy9glvHeZCSIUzsCswEG5lHLQMhO'
            )
        );

        // The Relations Namespace
        $relNs = 'https://api.slimpay.net/alps#';

        // Follow get-mandates
        $rel = new Hal\CustomRel($relNs . 'get-mandates');
        $follow = new Http\Follow($rel, 'GET', [
            'creditorReference' => 'optimizefrance',
            'reference' => $ref,
        ]);
        $res = $hapiClient->sendFollow($follow);

        return $res->getState();

    } catch (Exception $e) {
        return false;
    }

}


function createDebit($data) {

    if(!empty($data)) {


        try {

            // The HAPI Client
            $hapiClient = new Http\HapiClient(
                'https://api.slimpay.net',
                '/',
                'https://api.slimpay.net/alps/v1',
                new Http\Auth\Oauth2BasicAuthentication(
                    '/oauth/token',
                    'optimeyes01 ',
                    'ix9J690T8qnMTy9glvHeZCSIUzsCswEG5lHLQMhO'
                )
            );


            if($data['jour_prelevement'] != 0) {
                $executionDate = date('Y-m').'-'.str_pad($data['jour_prelevement'], 2, 0, STR_PAD_LEFT).'T08:00:00.000+0000';
            }
            else {
                $executionDate = null;
            }

            // The Relations Namespace
            $relNs = 'https://api.slimpay.net/alps#';

            // Follow create-direct-debits
            $rel = new Hal\CustomRel($relNs . 'create-direct-debits');

           $follow = new Http\Follow($rel, 'POST', null, new Http\JsonBody(
                [
                    'amount' => $data['montant'],
                    'currency' => 'EUR',
                    'executionDate' => $executionDate,
                    'label' => 'Facture OptiEyes '.$data['date'],
                    'paymentReference' => 'OPTIEYES-'.$data['id_user'].'-'.$data['date'],
                    'creditor' => [
                        'reference' => 'optimizefrance'
                    ],
                    'mandate' => [
                        'reference' => 'OPTR'.$data['id_mandat'],
                    ],
                    'subscriber' => [
                        'reference' => 'OPTC'.$data['id_mandat']
                    ]
                ]
            ));

            $res = $hapiClient->sendFollow($follow);

            // The Resource's state
            return $res->getState();


        } catch (Exception $e) {
            return false;
        }

    }

}

function getDebitStatus($id = null) {

    if($id) {

        // The HAPI Client
        $hapiClient = new Http\HapiClient(
            'https://api.slimpay.net',
            '/',
            'https://api.slimpay.net/alps/v1',
            new Http\Auth\Oauth2BasicAuthentication(
                '/oauth/token',
                'optimeyes01 ',
                'ix9J690T8qnMTy9glvHeZCSIUzsCswEG5lHLQMhO'
            )
        );

        // The Relations Namespace
        $relNs = 'https://api.slimpay.net/alps#';


        // Follow get-direct-debits
        $rel = new Hal\CustomRel($relNs . 'get-direct-debits');
        $follow = new Http\Follow($rel, 'GET', [
            'id' => $id
        ]);

        $res = $hapiClient->sendFollow($follow);

        // The Resource's state
        return $res->getState();

    }
    else {
        return false;
    }

}

?>