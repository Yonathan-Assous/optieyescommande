<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class xml_read extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    private function readCsv($csv) {
        $file = fopen($csv, 'r');
        while (!feof($file) ) {
            $line[] = fgetcsv($file, 2048);
        }
        fclose($file);
        return $line;
        // Définir le chemin d'accès au fichier CSV

    }

    public function lens_csv() {
        $csv = 'lenses_new.csv';
        $lenses = $this->readCsv($csv);
//        $lenses = utf8_decode($lenses);
        array_pop($lenses);
        foreach ($lenses as $key => $lens) {
            foreach ($lens as $key2 => $value) {
                $data[$key2] = "'" . utf8_encode($value) . "'";
//                var_dump($data);
            }
            $this->d($data);
            if ($key != 0) {
                $sql = "INSERT INTO lenses (".implode(', ', $lenses[0]).") VALUES ("
                    .implode(",", $data).")";
                $this->db->query($sql);
//
            }
        }

    }
    public function changeDefender() {
        $sql = "SELECT * FROM `verres` 
                    WHERE libelle_verre LIKE  '%Defender%'";

    }

    private function readFileXml($file) {
        $xml = simplexml_load_file($file, "SimpleXMLElement", LIBXML_NOCDATA);
        $json = json_encode($xml);
        return json_decode($json,TRUE);
    }

    public function readLens() {
        $sql = "SELECT ranges FROM `lenses` 
                    WHERE code = '100001'";
        $query = $this->db->query($sql);
        $this->dd(json_decode($query->result()[0]->ranges, TRUE));
                    
    }
    
    public function excel() {
        $xmlJson = $this->readFileXml('LC7_20210412_OPTIFR.xml');
        $lenses = $xmlJson['lenses']['lens'];
        foreach ($lenses as $lens) {
            $name = $lens['names']['name']['long'];
            if(strpos($name, 'Emerald') !== false || strpos($name, 'Amber') !== false) {
                $this->d($name);
                $code = $lens['code'];
                $focalGroupId = $lens['focalGroupId'];
                $brand = empty($lens['brand']) ? '' : $lens['brand'];
                $materialPropertyId = $lens['materialPropertyId'];
                $balancingLens = $lens['balancingLens'];
                $lenti = empty($lens['lenti']) ? 0 : $lens['lenti'];
                $trafficRestrictions = empty($lens['trafficRestrictions']) ? "" : $lens['trafficRestrictions'];
//                $trafficRestrictions = $lens['trafficRestrictions'];
                $singleLensOrder = $lens['singleLensOrder'];
                $topology = $lens['topology'];
                $antireflex = $lens['characteristics']['antireflex'];
                $color = isset($lens['characteristics']['color']) ? $lens['characteristics']['color']['type'] : "";
                $photocromic = $lens['characteristics']['photocromic'];
                $hard = $lens['characteristics']['hard'];
                $clean = $lens['characteristics']['clean'];
                $uvAbsorbing = $lens['characteristics']['uvAbsorbing'];
                $mirrored = $lens['characteristics']['mirrored'];
                $polarised = $lens['characteristics']['polarised'];
                $contrastEnhancing = $lens['characteristics']['contrastEnhancing'];
                $uvThreshold = $lens['opticalProperties']['uvThreshold'];
                $uvATransmission = $lens['opticalProperties']['uvATransmission'];
                $uvBTransmission = $lens['opticalProperties']['uvBTransmission'];
                $thicknessreduction = $lens['includedFeatures']['thicknessreduction'];
                $specialThickness = $lens['includedFeatures']['specialThickness'];
                $warranty = $lens['includedFeatures']['warranty'];
                $travellerService = $lens['includedFeatures']['travellerService'];
                $array = [];
//                var_dump($brand);die;
                foreach ($lens['ranges']['range'] as $key => $range) {
//                    array_push($array, 'rangeId');

                    $array[$key]['geoId'][0] = $range['geoId'];
                    $array[$key]['rangeId'][0] = $range['rangeId'];
                    $array[$key]['combinationTreeId'][0] = $range['combinationTreeIds']['combinationTreeId'];
                    $array[$key]['combinationTreeId']['@attributes']['prio'] = 1;

                }
                $range = json_encode($array);
                //$range = str_replace('"', '\"', $range);
                $orderOptionGroupId = isset($lens['orderOptions']['orderOptionGroupIds']['orderOptionGroupId']) ? $lens['orderOptions']['orderOptionGroupIds']['orderOptionGroupId'] : 0;
                $tradFr = "";
                $diplay = "X";
                $prix = 0;

//                $this->dd($array);
                $sql = "INSERT INTO `lenses_test`
                            (`code`, `sorting`, `name`, `focalGroupId`, `brand`, `materialPropertyId`, `balancingLens`,
                             `lenti`, `trafficRestrictions`, `singleLensOrder`, `topology`,
                             `antireflex`, `color`, `photocromic`, `hard`, `clean`, `uvAbsorbing`,
                             `mirrored`, `polarised`, `contrastEnhancing`, `uvThreshold`, `uvATransmission`,
                             `uvBTransmission`, `thicknessreduction`, `specialThickness`, `warranty`,
                             `travellerService`, `ranges`, `trad_fr`, `display`, `prix`, `prog`, `trad_fr2`,
                             `gtin`, `orderOptionGroupId`)
                VALUES ('" . $code . "',
                         0,
                         '" . $name . "',
                         '" . $focalGroupId . "',
                         '" . $brand . "',
                         '" . $materialPropertyId . "',
                         '" . $balancingLens . "',
                         '" . $lenti . "',
                         '" . $trafficRestrictions . "',
                         '" . $singleLensOrder . "',
                         '" . $topology . "',
                         '" . $antireflex . "',
                         '" . $color . "',
                         '" . $photocromic . "',
                         '" . $hard . "',
                         '" . $clean . "',
                         '" . $uvAbsorbing . "',
                         '" . $mirrored . "',
                         '" . $polarised . "',
                         '" . $contrastEnhancing . "',
                         '" . $uvThreshold . "',
                         '" . $uvATransmission . "',
                         '" . $uvBTransmission . "',
                         '" . $thicknessreduction . "',
                         '" . $specialThickness . "',
                         '" . $warranty . "',
                         '" . $travellerService . "',
                         '" . $range . "',
                         '',
                         'X',
                         0,
                         0,
                         '',
                         '',
                         '" . $orderOptionGroupId . "')";
                $this->db->query($sql);
            }
        }

    }

    public function index() {
        $xmlJson = $this->readFileXml('LC7_20210412_OPTIFR.xml');
//        echo '<pre>';
//        print_r($xmlJson['lenses']['lens']);
//        echo '</pre>';die;
        $lenses = $xmlJson['lenses']['lens'];
        foreach ($lenses as $lens) {
            $sql = "SELECT * FROM `lenses` 
                    WHERE code = '" . $lens['code'] . "'";
            $query = $this->db->query($sql);
            if ($query->num_rows() > 0) {
                $result = $query->result()[0];
            }
            else {
                $name = $lens['names']['name']['long'];
                $sql = "SELECT * FROM `lenses` 
                    WHERE name = '" . $name . "' OR name = '" . str_replace(' - stock', '-stock', $name) . "'";
                $query = $this->db->query($sql);
                if ($query->num_rows() > 0) {
                    $result = $query->result()[0];
//                    var_dump($result);die;
                    echo '<br>Le verre ' . $lens['names']['name']['long'] . ' a comme code ' . $result->code . ' au lieu de ' . $lens['code'] . '<br><br>';
                }
                else {
                    echo '<br>Le verre ' . $lens['names']['name']['long'] . ' n\'existe pas chez Optieyes, code ' . $lens['code'] . '<br><br>';
                    continue;
                }
            }
//            $array = [];
//            $array['name'] = $lens['names']['name']['long'];
//            $array['focalGroupId'] = $lens['focalGroupId'];
//            $array['materialPropertyId'] = $lens['materialPropertyId'];
//            $array['brand'] = !empty($lens['brand']) ? $lens['brand'] : "";
//            $array['balancingLens'] = $lens['balancingLens'];
//            $array['lenti'] = $lens['lenti'];
//            $array['trafficRestrictions'] = !empty($lens['trafficRestrictions']) ? $lens['trafficRestrictions'] : "";
//            $array['singleLensOrder'] = $lens['singleLensOrder'];
//            $array['topology'] = $lens['topology'];
//            $array['antireflex'] = $lens['characteristics']['antireflex'];
//            $array['photocromic'] = $lens['characteristics']['photocromic'];
//            $array['hard'] = $lens['characteristics']['hard'];
//            $array['clean'] = $lens['characteristics']['clean'];
//            $array['uvAbsorbing'] = $lens['characteristics']['uvAbsorbing'];
//            $array['mirrored'] = $lens['characteristics']['mirrored'];
//            $array['polarised'] = $lens['characteristics']['polarised'];
//            $array['contrastEnhancing'] = $lens['characteristics']['contrastEnhancing'];
//            $array['uvThreshold'] = $lens['opticalProperties']['uvThreshold'];
//            $array['uvATransmission'] = $lens['opticalProperties']['uvATransmission'];
//            $array['uvBTransmission'] = $lens['opticalProperties']['uvBTransmission'];
//            $array['thicknessreduction'] = $lens['includedFeatures']['thicknessreduction'];
//            $array['specialThicknessn'] = $lens['includedFeatures']['specialThickness'];
//            $array['warranty'] = $lens['includedFeatures']['warranty'];
//            $array['travellerService'] = $lens['includedFeatures']['travellerService'];
//
//            foreach ($result as $key => $value) {
//                if (array_key_exists($key, $array) && $array[$key] != $value)
//                    echo 'Le ' . $key . ' chez oméga est ' . $array[$key] . ' et dans la base de donnée ' . $value . ' pour le code ' . $lens['code'] . '<br>';
//            }



            //$this->dd($query->result());die;
        }

    }

    private function d($variable) {
        echo '<pre>';
            print_r($variable);
        echo '</pre>';
    }

    private function dd($variable) {
        $this->d($variable);
        die;
    }
    public function addLensRangeAnsRefraction()
    {
        $xmlJson = $this->readFileXml('LC7_20210412_OPTIFR.xml');

        $lensRanges = $xmlJson['lensRanges']['lensRange'];

//        echo '<pre>';
//        print_r($lensRanges);
//        echo '</pre>';die;

        foreach ($lensRanges as $key => $lensRange) {
            $refractions = $lensRange['refractions']['refraction'];
            if (isset($refractions['maxMeridian'])) {
                $this->addRefractions($refractions);
            }
            else {
                foreach ($refractions as $refraction) {
                    $this->addRefractions($refraction);
                }
            }

        }

        foreach ($lensRanges as $key => $lensRange) {
            $lensRangeId = $lensRange['@attributes']['id'];
            $diameterPhysical = $lensRange['diameter']['physical'];
            $diameterOptical = isset($lensRange['diameter']['optical']) ? $lensRange['diameter']['optical'] : 'NULL';
            $diameterElliptic = $lensRange['diameter']['elliptic'];
            $refractStepSphere = $lensRange['refractions']['steps']['sphere'];
            $refractStepCylinder = !empty($lensRange['refractions']['steps']['cylinder']) ? $lensRange['refractions']['steps']['cylinder'] : 0;
            $refractStepAddition = !empty($lensRange['refractions']['steps']['addition']) ? $lensRange['refractions']['steps']['addition'] : 0;
            $prismFrom = $lensRange['prism']['from'];
            $prismTo = $lensRange['prism']['to'];
            $stockLens = $lensRange['stockLens'];
            $discountable = !empty($lensRange['discountable']) ? $lensRange['discountable'] : 0;
            $onlineAllowed = !empty($lensRange['onlineAllowed']) ? $lensRange['onlineAllowed'] : 0;
            $onlineDiscount = !empty($lensRange['order']['onlineDiscount']) ? $lensRange['order']['onlineDiscount'] : 0;

//            var_dump($refractStepCylinder);die;
//            var_dump($refractStepAddition);

            $sql = "INSERT INTO `lensRange` 
                            (`id`, `diameter_physical`, `diameter_optical`, `diameter_elliptic`, `refract_steps_sphere`, 
                             `refract_steps_cylinder`, `refract_steps_addition`, `prism_from`, `prism_to`,
                             `stockLens`, `discountable`, `onlineAllowed`, `onlineDiscount`) 
                VALUES (" . $lensRangeId . ",
                         " . $diameterPhysical . ",
                         " . $diameterOptical . ",
                         " . $diameterElliptic . ",
                         " . $refractStepSphere . ",
                         " . $refractStepCylinder . ",
                         " . $refractStepAddition . ",
                         " . $prismFrom . ",
                         " . $prismTo . ",
                         " . $stockLens . ",
                         " . $discountable . ",
                         " . $onlineAllowed . ",
                         " . $onlineDiscount . ")";
//            var_dump($sql);
            $this->db->query($sql);
            $refractions = $lensRange['refractions']['refraction'];
            if (isset($refractions['maxMeridian'])) {
                $refractionId = $this->selectRefractions($refractions);
                $this->addToLensRangeRefraction($lensRangeId, $refractionId);
            }
            else {
                foreach ($refractions as $refraction) {
                    $refractionId = $this->selectRefractions($refraction);
                    $this->addToLensRangeRefraction($lensRangeId, $refractionId);
                }
            }
        }
    }

    private function addToLensRangeRefraction($lensRangeId, $refractionId) {
        $sql = "INSERT INTO `lensRanges_refractions` 
                            (`lensRange_id`, `refraction_id`) 
                VALUES (" . $lensRangeId . ",
                         " . $refractionId . ")";
        $this->db->query($sql);
    }
    private function selectRefractions($refraction) {
        $sql = "SELECT id FROM `refraction` 
                    WHERE maxMeridian_from = " . $refraction['maxMeridian']['from'] . "
                    AND maxMeridian_to = " . $refraction['maxMeridian']['to'] . "
                    AND cylinder_from = " . $refraction['cylinder']['from'] . "
                    AND cylinder_to = " . $refraction['cylinder']['to'] . "
                    AND cylinderPart_from = " . $refraction['cylinderPart']['from'] . "
                    AND cylinderPart_to = " . $refraction['cylinderPart']['to'] . "
                    AND addition_from = " . $refraction['addition']['from'] . "
                    AND addition_to = " . $refraction['addition']['to'];
        $query = $this->db->query($sql);
        return $query->result()[0]->id;
    }
    private function addRefractions($refraction) {
        $sql = "SELECT * FROM `refraction` 
                    WHERE maxMeridian_from = " . $refraction['maxMeridian']['from'] . "
                    AND maxMeridian_to = " . $refraction['maxMeridian']['to'] . "
                    AND cylinder_from = " . $refraction['cylinder']['from'] . "
                    AND cylinder_to = " . $refraction['cylinder']['to'] . "
                    AND cylinderPart_from = " . $refraction['cylinderPart']['from'] . "
                    AND cylinderPart_to = " . $refraction['cylinderPart']['to'] . "
                    AND addition_from = " . $refraction['addition']['from'] . "
                    AND addition_to = " . $refraction['addition']['to'];
        $query = $this->db->query($sql);
        if ($query->num_rows() == 0) {
            $sqlInsert = "INSERT INTO `refraction` 
                            (`maxMeridian_from`, `maxMeridian_to`, `cylinder_from`, `cylinder_to`, 
                             `cylinderPart_from`, `cylinderPart_to`, `addition_from`, `addition_to`) 
                VALUES ( " . $refraction['maxMeridian']['from'] . ",
                         " . $refraction['maxMeridian']['to'] . ",
                         " . $refraction['cylinder']['from'] . ",
                         " . $refraction['cylinder']['to'] . ",
                         " . $refraction['cylinderPart']['from'] . ",
                         " . $refraction['cylinderPart']['to'] . ",
                         " . $refraction['addition']['from'] . ",
                         " . $refraction['addition']['to'] . ")";

            $this->db->query($sqlInsert);
        }
    }
}