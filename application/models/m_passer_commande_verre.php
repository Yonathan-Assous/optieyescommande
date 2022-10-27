<?php
error_reporting(E_ALL);

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class m_passer_commande_verre extends CI_Model
{

    var $table_lenses = 'lenses';
    var $table_lensRanges = 'lensRanges';
    var $table_Refractions = 'Refractions';
    var $table_lensFocalGroups = 'lensFocalGroups';
    var $table_colors = 'lensColors';

    var $fields = array(
        'id' => 'id', 'focalType' => 'focalType'
    );

    public
    function __construct()
    {
        parent::__construct();
    }

    public
    function getlensFocalGroups()
    {
        $query = $this->db->query("SELECT *
                                   FROM " . $this->table_lensFocalGroups . " 
                                   WHERE 1
                                   ORDER BY focalType DESC");


        if ($query
            && $query->num_rows() > 0) {
            return $query->result();
        }

        return false;


    }

    public
    function delCustomPrice($id_prix)
    {
        if ($id_prix != "") {
            $res = $this->db->query("DELETE FROM prix_par_client WHERE id = '" . $id_prix . "'");
            //$query = $res->result();

            echo "OK";
        }
    }

    public
    function getCustomPriceList($user_id)
    {
        $tab = array();

        if ($user_id != "") {
            $i = 0;
            $res = $this->db->query("SELECT ppc.id,ppc.code,ppc.id_client,ppc.prix,l.trad_fr, v.libelle_verre
									   FROM prix_par_client ppc 
									   LEFT JOIN lenses l ON (ppc.code = l.code)
									   LEFT JOIN verres_stock v ON ppc.code = v.id_verre
									   WHERE id_client = '" . $user_id . "' 
									   AND (l.trad_fr LIKE (CONCAT('%', ppc.generation ,'%')) OR l.trad_fr IS NULL)
									   AND ppc.name <> ''
									   ORDER BY l.trad_fr,v.id_verre ASC");


            $query = $res->result();

            foreach ($query as $r) {
                $tab[$i]['code'] = $r->code;
                if ($r->trad_fr != NULL) {
                    $tab[$i]['libelle'] = $r->trad_fr;
                } else {
                    $tab[$i]['libelle'] = $r->libelle_verre;
                }

                $tab[$i]['prix'] = $r->prix;
                $tab[$i]['id'] = $r->id;
                $tab[$i]['action'] =
                    '<a class="modifier_prix btn btn-icon waves-effect waves-light btn-warning tooltipster" href="#" rel="'
                    . $r->id . '*' . $r->prix
                    . '" original-title="Modifier" title="Modifier" >Modifier</a> <a class="supprimer_prix btn btn-icon waves-effect waves-light btn-warning tooltipster" href="#" rel="'
                    . $r->id . '" original-title="Supprimer" title="Supprimer" >Supprimer</a>';

                $i++;
            }

        }

        return $tab;

    }

    public
    function setPriceVerreById($new_price, $id_prix)
    {
        if ($id_prix != ""
            && $new_price != "") {
            $res =
                $this->db->query("UPDATE prix_par_client set prix='" . $new_price . "' WHERE id = '" . $id_prix . "'");
            //$query = $res->result();

            echo "OK";
        } else {
            echo "NOT";
        }
    }

    public
    function setPriceVerre($user_id, $new_price, $verre_or_lens_id, $name_verre)
    {

        if ($user_id != ""
            && $new_price != ""
            && $verre_or_lens_id != "") {
            if(strpos($verre_or_lens_id, 'stock_') !== false){
                $code_verre = str_replace("stock_","",$verre_or_lens_id);
            }
            else {
                $sql = "SELECT code
                    FROM lenses
                    WHERE id = $verre_or_lens_id";
                $query = $this->db->query($sql);
                $result = $query->result();
                $code_verre = $result[0]->code;
            }
            
            $generation = "";
            if (strpos($name_verre, 'E-Space') !== false) {
                $generation = "E-Space";
            }
            if (strpos($name_verre, 'T-One') !== false) {
                $generation = "T-One";
            }
            $res =
                $this->db->query("INSERT INTO `prix_par_client` (`id`, `code`, `id_client`, `prix`, name, generation) VALUES (NULL, '"
                                 . $code_verre . "', '" . $user_id . "', '" . $new_price . "', '"
                                 . addslashes($name_verre) . "', '" . $generation . "')");
            //$query = $res->result();
            //echo "INSERT INTO `prix_par_client` (`id`, `code`, `id_client`, `prix`, name, generation) VALUES (NULL, '".$code_verre."', '".$user_id."', '".$new_price."', '".addslashes($name_verre)."', '".$generation."')";

            echo "OK";
        } else {
            echo "NOT";
        }

    }

    public
    function getListeClients()
    {

        $i = 0;

        $stock_res = $this->db->query("SELECT * 
								   FROM users 
								   ORDER BY id_users ASC");

        $stock_query = $stock_res->result();

        foreach ($stock_query as $stock) {
            $tab[$i]['id_users'] = $stock->id_users;
            $tab[$i]['nom_societe'] = $stock->nom_societe;

            $i++;
        }

        return $tab;

    }

    public
    function duplicatePriceTab($user_id, $from_user_id)
    {

        if ($user_id != ""
            && $from_user_id != "") {
            $res = $this->db->query("DELETE FROM prix_par_client WHERE id_client = '" . $user_id . "'");

            $from_res = $this->db->query("SELECT * FROM prix_par_client WHERE id_client = '" . $from_user_id . "'");

            $from_query = $from_res->result();

            foreach ($from_query as $from) {
                $res =
                    $this->db->query("INSERT INTO `prix_par_client` (`id`, `code`, `id_client`, `prix`, `name`, `generation`) VALUES (NULL, '"
                                     . $from->code . "', '" . $user_id . "', '" . $from->prix . "', '"
                                     . addslashes($from->name) . "', '" . $from->generation . "')");

            }
            return "OK";
        } else {
            return false;
        }
    }

    public
    function getAllLenses($requete = "", $user_id)
    {
        $tab = array();

        if ($requete != "") {
            $i = 0;

            $sql = "SELECT * 
                    FROM verres_stock 
                    JOIN grille_tarifaire ON grille_tarifaire.id_verre = verres_stock.id_verre		
                    WHERE libelle_verre LIKE '%" . $requete . "%' AND id_grille_tarifaire = 1
                    ORDER BY libelle_verre ASC";
            $stock_res = $this->db->query($sql);

            $stock_query = $stock_res->result();

            foreach ($stock_query as $stock) {
                $tab[$i]['verre_or_lens_id'] = 'stock_' . $stock->id_verre;
                $tab[$i]['libelle'] = $stock->libelle_verre;
                $tab[$i]['prix'] = $stock->prix_verre;
                $tab[$i]['source'] = "stock";
                $sql = "SELECT prix 
                        FROM prix_par_client
                        WHERE code = '" . $stock->id_verre . "'
                        AND id_client = $user_id";
                $query = $this->db->query($sql);

                if ($query->num_rows() > 0) {
                    $prix = $query->result()[0]->prix;
                    $tab[$i]['prix'] = $prix;
                }
                $i++;
            }

            $omega_res = $this->db->query("SELECT * 
									   FROM lenses 
									   WHERE trad_fr LIKE '%" . utf8_encode($requete) . "%' AND (display = 'X' OR is_teledetourable = 1)
									   ORDER BY trad_fr ASC");

            $omega_query = $omega_res->result();
//            print_r($omega_query);die;
            foreach ($omega_query as $omega) {
                $tab[$i]['verre_or_lens_id'] = $omega->id;
                $tab[$i]['code'] = $omega->code;
                if ($omega->display != 'X' && $omega->is_teledetourable == 1) {
                    $tab[$i]['libelle'] = $omega->trad_fr . ' (télédétourage)';
                }
                else {
                    $tab[$i]['libelle'] = $omega->trad_fr;
                }
                $tab[$i]['prix'] = $omega->prix;
                $tab[$i]['source'] = "omega";
                $sql_generation = "";
                if (strpos( $omega->trad_fr, "T-One") !== false) {
                    $sql_generation .= " AND generation = 'T-One'";
                }
                else if (strpos($omega->trad_fr, "E-Space") !== false) {
                    $sql_generation .= " AND generation = 'E-Space'";
                }
                $sql = "SELECT prix 
                        FROM prix_par_client
                        WHERE code = '" . $omega->code . "'
                        AND id_client = $user_id" . $sql_generation;
                $query = $this->db->query($sql);

                if ($query->num_rows() > 0) {
                    $prix = $query->result()[0]->prix;
                    $tab[$i]['prix'] = $prix;
                }
                $i++;
            }
        } else {
            $i = 0;
            $stock_res = $this->db->query("SELECT * 
									   FROM verres_stock 
									   JOIN grille_tarifaire ON grille_tarifaire.id_verre = verres_stock.id_verre		
									   WHERE id_grille_tarifaire = 1
									   ORDER BY libelle_verre ASC");


            $stock_query = $stock_res->result();
            foreach ($stock_query as $stock) {
                $tab[$i]['verre_or_lens_id'] = 'stock_' . $stock->id_verre;
                $tab[$i]['libelle'] = $stock->libelle_verre;
                $tab[$i]['prix'] = $stock->prix_verre;
                $tab[$i]['source'] = "stock";

                $sql = "SELECT prix 
                        FROM prix_par_client
                        WHERE code = '" . $stock->id_verre . "'
                        AND id_client = $user_id";
                $query = $this->db->query($sql);

                if ($query->num_rows() > 0) {
                    $prix = $query->result()[0]->prix;
                    $tab[$i]['prix'] = $prix;
                }
                $i++;
            }

            $omega_res = $this->db->query("SELECT * 
									   FROM lenses 
									   WHERE display = 'X'
									   ORDER BY trad_fr ASC");

            $omega_query = $omega_res->result();

            foreach ($omega_query as $omega) {
                $tab[$i]['verre_or_lens_id'] = $omega->id;
                $tab[$i]['code'] = $omega->code;
                $tab[$i]['libelle'] = $omega->trad_fr;
                $tab[$i]['prix'] = $omega->prix;
                $tab[$i]['source'] = "omega";

                $sql = "SELECT prix 
                        FROM prix_par_client
                        WHERE code = '" . $omega->code . "'
                        AND id_client = $user_id";
                $query = $this->db->query($sql);

                if ($query->num_rows() > 0) {
                    $prix = $query->result()[0]->prix;
                    $tab[$i]['prix'] = $prix;
                }

                $i++;
            }

        }


        return $tab;
    }

    public
    function getstocklensAdmin($indice, $lensFocalGroup, $generation, $sphereD, $cylindreD, $axeD, $additionD, $stock,
                               $user_id, $panierA)
    {

        $sphereD = str_replace(".00", "", $sphereD);
        $cylindreD = str_replace(".00", "", $cylindreD);
        $additionD = str_replace(".00", "", $additionD);

        $sphereD = str_replace("+", "", $sphereD);
        $cylindreD = str_replace("+", "", $cylindreD);
        $axeD = str_replace("+", "", $axeD);
        $additionD = str_replace("+", "", $additionD);

        $sphereD = str_replace(",", ".", $sphereD);
        $cylindreD = str_replace(",", ".", $cylindreD);
        $axeD = str_replace(",", ".", $axeD);
        $additionD = str_replace(",", ".", $additionD);

        if (($lensFocalGroup == "3"
             && $indice == "1.5")
            && ($sphereD >= -3
                && $sphereD <= 2)
            && ($additionD >= 1
                && $additionD <= 3)) {
            //26783 diametre 70
            $resultat[0]['name'] = "Prog Eco 1,5 HMC - Stock";
            $resultat[0]['id'] = "41274";

            return $resultat;
        } else {
            $indice_fr = str_replace(".", ",", $indice);

            if ($indice_fr == '1,59') {
                $indice_fr = '1,591';
            }

            if ($panierA == "1") {
                $P_A = " AND libelle_verre LIKE '%Panier A%'";
            } else {
                $P_A = "";
            }

            $sql = "SELECT *, ppc.prix as prix_perso  
												FROM verres_stock 
									   JOIN grille_stock ON grille_stock.id_verre = verres_stock.id_verre	
									   JOIN grille_tarifaire ON grille_tarifaire.id_verre = verres_stock.id_verre
                                       LEFT JOIN prix_par_client ppc ON (ppc.code = verres_stock.id_verre AND id_client="
                . $user_id . ")
									   WHERE libelle_verre LIKE '% " . $indice_fr . " %' AND id_grille_tarifaire = 1 "
                . $P_A . "
									   ORDER BY libelle_verre ASC";
            $stock_res = $this->db->query($sql);

            $stock_query = $stock_res->result();
            $i = 0;

            $sphereD = strval($sphereD);
            $sphereD = rtrim($sphereD, "0");
            if ($sphereD == "") {
                $sphereD = "0";
            }

            $cylindreD = strval($cylindreD);
            $cylindreD = rtrim($cylindreD, "0");
            if ($cylindreD == "") {
                $cylindreD = "0";
            }

            //echo "sphereD: ".$sphereD." - cylindreD: ".$cylindreD;
            //return $stock_query;

            foreach ($stock_query as $stock) {
                $grille_stock = json_decode($stock->grille_stock, true);

                if (array_key_exists($sphereD, $grille_stock)) {
                    if (in_array($cylindreD, $grille_stock[$sphereD])) {

                        $resultat[$stock->id_verre]["id_verre"] = $stock->id_verre;
                        $resultat[$stock->id_verre]["sorting"] = $stock->ordre_verre;
                        $resultat[$stock->id_verre]["name"] = $stock->libelle_verre;
                        @$resultat[$stock->id_verre]["diametre"] .= $stock->diametre . ",";

                        if ($stock->prix_perso != NULL) {
                            $resultat[$stock->id_verre]["prix"] = $stock->prix_perso;
                        } else {
                            $resultat[$stock->id_verre]["prix"] = $stock->prix_verre;
                        }
                    }
                }
            }

            return $resultat;

        }

    }

    public
    function getstocklens($indice, $lensFocalGroup, $generation, $sphereD, $cylindreD, $axeD, $additionD, $stock,
                          $user_id, $panierA, $type = "1")
    {
//        echo ('$indice: ' . $indice . "<br>");
//        echo('$lensFocalGroup: ' . $lensFocalGroup . "<br>");
//        echo('$generation: ' . $generation . "<br>");
//        echo('$sphereD: ' . $sphereD . "<br>");
//        echo('$cylindreD: ' . $cylindreD . "<br>");
//        echo('$axeD: ' . $axeD . "<br>");
//        echo('$additionD: ' . $additionD . "<br>");
//        echo('$stock: ' . $stock . "<br>");
//        echo('$user_id: ' . $user_id . "<br>");
//        echo('$panierA: ' . $panierA . "<br>");
//        echo('$type: ' . $type . "<br>");die;
        $sphereD = str_replace(".00", "", $sphereD);
        $cylindreD = str_replace(".00", "", $cylindreD);
        $additionD = str_replace(".00", "", $additionD);

        $sphereD = str_replace("+", "", $sphereD);
        $cylindreD = str_replace("+", "", $cylindreD);
        $axeD = str_replace("+", "", $axeD);
        $additionD = str_replace("+", "", $additionD);

        $sphereD = str_replace(",", ".", $sphereD);
        $cylindreD = str_replace(",", ".", $cylindreD);
        $axeD = str_replace(",", ".", $axeD);
        $additionD = str_replace(",", ".", $additionD);

        if ($generation == "Progressif de stock") {
            if (($lensFocalGroup == "3"
                 && $indice == "1.5")
                && ($sphereD >= -3
                    && $sphereD <= 2)
                && ($additionD >= 1
                    && $additionD <= 3)) {
                //26783 diametre 70
                $resultat[0]['name'] = "Prog Eco 1,5 HMC - Stock";
                $resultat[0]['id'] = "41274";
                $resultat[0]['code'] = "41274";
                $resultat[0]['id_verre'] = "41274";
                return $resultat;
            }
        } else {
            $indice_fr = str_replace(".", ",", $indice);

            if ($indice_fr == '1,59') {
                $indice_fr = '1,591';
            }


            if ($panierA == "1") {
                $P_A = " AND libelle_verre LIKE '%Panier A%'";
            } else {
                $P_A = "";
            }

            if ($type == 2
                || $type == 3) {
                $P_A .= " AND libelle_verre NOT LIKE '%Panier A%'";
            }

            $sql = "SELECT * FROM verres_stock 
									   JOIN grille_stock ON grille_stock.id_verre = verres_stock.id_verre	
									   WHERE libelle_verre LIKE '% " . $indice_fr . " %' " . $P_A . "
									   ORDER BY libelle_verre ASC";
//            print_r($sql);die;
            $stock_res = $this->db->query($sql);

            $stock_query = $stock_res->result();
//            var_dump($stock_query);die;
            //$i = 0;
//            var_dump($sphereD);
//            var_dump((float)$sphereD);

            $sphereD = strval((float)$sphereD);
//            var_dump($sphereD);die;

            //            var_dump($sphereD);
            //            $sphereD = rtrim($sphereD, "0");
            //            var_dump($sphereD);
            if ($sphereD == "") {
                $sphereD = "0";
            }

            $cylindreD = strval((float)$cylindreD);
            //            $cylindreD = rtrim($cylindreD, "0");
            if ($cylindreD == "") {
                $cylindreD = "0";
            }

            //echo "sphereD: ".$sphereD." - cylindreD: ".$cylindreD;
            //return $stock_query;
            $resultat = [];
            foreach ($stock_query as $stock) {
                $grille_stock = json_decode($stock->grille_stock, true);
                //var_dump($grille_stock);
//                var_dump($sphereD);die;
//                var_dump($grille_stock);die;

                if (array_key_exists($sphereD, $grille_stock)) {
                    if (in_array($cylindreD, $grille_stock[$sphereD])) {

                        $resultat[$stock->id_verre]["id_verre"] = $stock->id_verre;
                        $resultat[$stock->id_verre]["sorting"] = $stock->ordre_verre;
                        $resultat[$stock->id_verre]["name"] = $stock->libelle_verre;
                        @$resultat[$stock->id_verre]["diametre"] .= $stock->diametre . ",";


                    }
                }
            }
            //var_dump($resultat);die;
            return $resultat;

        }

    }

    public
    function getlens($indice, $lensFocalGroup, $generation, $sphereD, $cylindreD, $axeD, $additionD, $stock, $user_id,
                     $panierA, $type = "1", $isTeledetourage = false)
    {
        if ($isTeledetourage == false || $isTeledetourage == 'false') {
            $isTeledetourage = false;
        }
        else {
            $isTeledetourage = true;
        }
//        $isTeledetourage = ('true' || true) ? true : false;
        $sphereD = str_replace(".00", "", $sphereD);
        $cylindreD = str_replace(".00", "", $cylindreD);
        $additionD = str_replace(".00", "", $additionD);
        $axeD = str_replace(".00", "", $axeD);

        $sphereD = str_replace("+", "", $sphereD);
        $cylindreD = str_replace("+", "", $cylindreD);
        $axeD = str_replace("+", "", $axeD);
        $additionD = str_replace("+", "", $additionD);

        $sphereD = str_replace(",", ".", $sphereD);
        $cylindreD = str_replace(",", ".", $cylindreD);
        $axeD = str_replace(",", ".", $axeD);
        $additionD = str_replace(",", ".", $additionD);


        if ($lensFocalGroup == "1"
            || $lensFocalGroup == "6") {
            $additionD = '-';
        }

        if ($stock == "StockD") {
            //$stockLens = "1";
            $stockLens = ' stockLens = 1';
        } elseif ($stock == "FabricationD") {
            $stockLens = ' stockLens = 0';
        } else {
            $stockLens = ' stockLens != 2';
        }

        //return "Stock: ".$stockLens;

        if ($sphereD != "-"
            && $cylindreD != "-") {

            $sumSphereCylindre = floatval($sphereD + $cylindreD);

            if ($additionD == '-') {
                /*$sphereD_res = DB::table("Refractions")->where('maxMeridian_from', '<=', $sphereD)->where('maxMeridian_to', '>=', $sphereD)->where('cylinder_from', '<=', $cylindreD)->where('cylinder_to', '>=', $cylindreD)->orderBy('id', 'ASC')->get();*/
                $sql = "SELECT * FROM " . $this->table_Refractions . " 
									   WHERE maxMeridian_from<=" . $sumSphereCylindre . "
									   AND maxMeridian_to>=" . $sphereD . "
									   AND cylinder_from <=" . $cylindreD . "
									   AND cylinder_to >=" . $cylindreD . "
									   ORDER BY id ASC";
                $sphereD_res = $this->db->query($sql);
            } else {
                /*$sphereD_res = DB::table("Refractions")->where('maxMeridian_from', '<=', $sphereD)->where('maxMeridian_to', '>=', $sphereD)->where('cylinder_from', '<=', $cylindreD)->where('cylinder_to', '>=', $cylindreD)->where('addition_from', '<=', $additionD)->where('addition_to', '>=', $additionD)->orderBy('id', 'ASC')->get();*/

                if ($lensFocalGroup == '4'
                    && $additionD > 2.25) {
                    $sphereD_res = $this->db->query("SELECT * 
									   FROM " . $this->table_Refractions . " 
									   WHERE id = 0
									   ORDER BY id ASC");
                } else {
                    $sphereD_res = $this->db->query("SELECT * 
									   FROM " . $this->table_Refractions . " 
									   WHERE maxMeridian_from<=" . $sumSphereCylindre . "
									   AND maxMeridian_to>=" . $sphereD . "
									   AND cylinder_from <=" . $cylindreD . "
									   AND cylinder_to >=" . $cylindreD . "
									   AND addition_from <=" . $additionD . "
									   AND addition_to >=" . $additionD . "
									   ORDER BY id ASC");

                }
            }


            if (!empty($sphereD_res->result())) {
                $resultat_query = $sphereD_res->result();
                //return json_encode($resultat_query);


                $ranges = [];
                foreach ($resultat_query as $sphereDres) {
                    $lensRanges = $sphereDres->lensRanges;
                    $tab_ranges = explode(",", $lensRanges);
                    for ($i = 0; $i < sizeof($tab_ranges); $i++) {
                        if ($tab_ranges[$i] != "") {
                            $sql = "SELECT * 
													FROM " . $this->table_lensRanges . " 
										   WHERE id=" . $tab_ranges[$i] . "
										   AND " . $stockLens . "";
                            $ranges_res = $this->db->query($sql);

                            /*$ranges_res = $this->db->query("SELECT *
													FROM ".$this->table_lensRanges."
										   WHERE id=".$tab_ranges[$i]."
										   ");*/
                            if ($ranges_res
                                && $ranges_res->num_rows() > 0) {
                                $ranges[] = $tab_ranges[$i];
                            }


                        }
                    }
                }
                $r = array_unique($ranges);

                //return json_encode($r);


                //dd($r);
                $conditions = "(";
                foreach ($r as $field) {
//                    $conditions .= "(JSON_EXTRACT(ranges, \"$[*].rangeId\") like '%\"" . $field . "\"%') OR ";
                    $conditions .= "(ranges like '%\"rangeId\": {\"0\": \"" . $field . "\"%') OR ";
                }
                $conditions = rtrim($conditions, " OR ");
                $conditions .= ")";
                $teledetourageCondition = $isTeledetourage ? "AND is_teledetourable = true" : "AND display = 'X'";
                //echo "Conditions:".$conditions." - Generation:".$generation." - Indice:".$indice;
                if ($conditions != "()") {
                    if ($generation == '-') {
                        if ($indice != '-') {
                            if ($indice == "mineral") {

                                $sql = "SELECT * FROM " . $this->table_lenses . " 
                                        WHERE focalGroupId=" . $lensFocalGroup . "
										AND " . $conditions . "
										AND is_mineral = 1 
										$teledetourageCondition
										ORDER BY sorting,trad_fr";

                                $res = $this->db->query($sql);
                            }
                            elseif ($indice == "all") {

                                //echo "LENSFOCAL:".$lensFocalGroup."<br>";
                                //echo "conditions:".$conditions."<br><br><br>";
                                if ($lensFocalGroup != "-") {
                                    //$res = DB::table("lenses")->whereRaw("focalGroupId=$lensFocalGroup")->whereRaw(\DB::raw($conditions))->orderBy('name', 'ASC')->pluck("id","name");//->toSql();
                                    $res = $this->db->query("SELECT * 
													FROM " . $this->table_lenses . " 
										   WHERE focalGroupId=" . $lensFocalGroup . "
										   AND " . $conditions . "
										   $teledetourageCondition
										   ORDER BY sorting,trad_fr");

                                } else {

                                    //$res = DB::table("lenses")->whereRaw(\DB::raw($conditions))->orderBy('name', 'ASC')->pluck("id","name");
                                    $res = $this->db->query("SELECT * 
													FROM " . $this->table_lenses . " 
										   WHERE " . $conditions . "
										   $teledetourageCondition
										   ORDER BY sorting,trad_fr");


                                }
                            }
                            else {
                                $sql = "SELECT * 
													FROM " . $this->table_lenses . " 
										   WHERE focalGroupId=" . $lensFocalGroup . "
										   AND " . $conditions . "
										   AND (name LIKE '%" . $indice . " %' OR name LIKE '%" . $indice
                                    . "' OR name LIKE '%" . $indice . "-%' OR name LIKE '%"
                                    . $indice . "0%')
										   AND name NOT LIKE '%mineral%'
										   $teledetourageCondition
										   ORDER BY sorting,trad_fr";
                                $res = $this->db->query($sql);
                                /*echo "SELECT *
													FROM ".$this->table_lenses."
										   WHERE focalGroupId=".$lensFocalGroup."
										   AND ".$conditions."
										   AND (name LIKE '%".$indice." %' OR name LIKE '%".$indice."' OR name LIKE '%".$indice."-%' OR name LIKE '%".$indice."0%')
										   AND name NOT LIKE '%mineral%'
										   AND display = 'X'
										   ORDER BY sorting,trad_fr,prix";  */
                            }
                        } else {
                            if ($lensFocalGroup != "-") {
                                //$res = DB::table("lenses")->where('focalGroupId', '=', $lensFocalGroup)->whereRaw(\DB::raw($conditions))->orderBy('name', 'ASC')->pluck("id","name");
                                $res = $this->db->query("SELECT * 
													FROM " . $this->table_lenses . " 
										   WHERE focalGroupId=" . $lensFocalGroup . "
										   AND " . $conditions . "
										   $teledetourageCondition
										   ORDER BY sorting,trad_fr");
                            } else {
                                //$res = DB::table("lenses")->whereRaw(\DB::raw($conditions))->orderBy('name', 'ASC')->pluck("id","name");

                                $res = $this->db->query("SELECT * 
													FROM " . $this->table_lenses . " 
										   WHERE " . $conditions . "
										   $teledetourageCondition
										   ORDER BY sorting,trad_fr");
                            }
                        }
                    } else {
                        if ($indice != '-') {
                            if ($indice == "mineral") {
                                $res = $this->db->query("SELECT * 
													FROM " . $this->table_lenses . " 
										   WHERE trad_fr LIKE '%" . $generation . "%'
										   AND focalGroupId='3'
										   AND " . $conditions . "
										   AND name LIKE '%mineral%'
										   $teledetourageCondition
										   ORDER BY sorting,trad_fr");

                            } elseif ($indice == "all") {

                                $res = $this->db->query("SELECT * 
										   FROM " . $this->table_lenses . " 
										   WHERE trad_fr LIKE '%" . $generation . "%'
										   AND focalGroupId='3'
										   AND " . $conditions . "
										   $teledetourageCondition
										   ORDER BY sorting,trad_fr");
                            } else {
                                $sql = "SELECT * 
										   FROM " . $this->table_lenses . " 
										   WHERE trad_fr LIKE '%" . $generation . "%'
										   AND focalGroupId='3'
										   AND " . $conditions . "
										   AND (name LIKE '%" . $indice . " %' OR name LIKE '%" . $indice . "')
										   AND name NOT LIKE '%mineral%'
										   $teledetourageCondition
										   ORDER BY sorting,trad_fr";
                                $res = $this->db->query($sql);

                            }
                        } else {

                            $res = $this->db->query("SELECT * 
										   FROM " . $this->table_lenses . " 
										   WHERE trad_fr LIKE '%" . $generation . "%'
										   focalGroupId='3'
										   AND " . $conditions . "
										   $teledetourageCondition
										   ORDER BY sorting,trad_fr");
                        }
                    }

                    $codes_f = "";
                    if (!empty($res->result())) {
                        $codes_res = $res->result();
                    } else {
                        $codes_res = "";
                    }

                    $n_code = 0;
//                    print_r($sphereD);
//                    print_r($cylindreD);die;
//                    print_r($codes_res);die;
                    if ($codes_res) {
                        foreach ($codes_res as $code) {
                            $diametre = $this->getDiametres($code->code, $sphereD, $cylindreD);
//                        print_r($code->code);
//                        print_r($sphereD);
//                        print_r($cylindreD);
//                        print_r($diametre);
//                        if (!$diametre) {
//                            echo $code->code;
//                            var_dump(' ');
//                        }
                            if (!empty($diametre)) {
                                $codes_f .= "L.code = '" . $code->code . "' OR ";
                                $n_code++;
                            }
                        }
                    }
//                    print_r($codes_f);die;

                    if ($generation == "T-One") {
                        /*$res_f = $this->db->query("SELECT L.code,L.id, L.name, L.trad_fr, L.prix, ppc.prix as prix_perso , L.sorting
														FROM ".$this->table_lenses." L
														LEFT JOIN prix_par_client ppc ON (ppc.code = L.code AND id_client=".$user_id.")
											   WHERE (".$codes_f." L.code = '0') AND L.trad_fr LIKE '%T-One%' ORDER BY sorting,trad_fr,prix");
											   */

                        $res_f = $this->db->query("SELECT L.trad_fr, L.code, L.id, L.name, L.prix, L.sorting
	FROM lenses L LEFT JOIN lenses l2
	 ON (L.trad_fr = l2.trad_fr AND L.sorting > l2.sorting AND (L.name LIKE '%trn%' OR L.name LIKE '%transition%'  OR L.name LIKE '%chrom%'))
	WHERE l2.sorting IS NULL AND  (" . $codes_f
                                                  . " L.code = '0') AND L.trad_fr LIKE '%T-One%' ORDER BY sorting,trad_fr");


                    }
                    if ($generation == "E-Space") {
                        /*$res_f = $this->db->query("SELECT L.code,L.id, L.name, L.trad_fr, L.prix, ppc.prix as prix_perso , L.sorting
														FROM ".$this->table_lenses." L
														LEFT JOIN prix_par_client ppc ON (ppc.code = L.code AND id_client=".$user_id.")
											   WHERE (".$codes_f." L.code = '0') AND L.trad_fr LIKE '%T-One%' ORDER BY sorting,trad_fr,prix");
											   */

                        $res_f = $this->db->query("SELECT L.trad_fr, L.code, L.id, L.name, L.prix, L.sorting
                                                FROM lenses L LEFT JOIN lenses l2
                                                 ON (L.trad_fr = l2.trad_fr AND L.sorting > l2.sorting AND (L.name LIKE '%trn%' OR L.name LIKE '%transition%'  OR L.name LIKE '%chrom%'))
                                                WHERE l2.sorting IS NULL AND  (" . $codes_f
                                                  . " L.code = '0') AND L.trad_fr LIKE '%E-Space%' ORDER BY sorting,trad_fr");


                    }
                    elseif ($generation == "Platinium") {
                        $sql = "SELECT L.code,L.id, L.name, L.trad_fr, L.prix, L.sorting
														FROM " . $this->table_lenses . " L 
											   WHERE (" . $codes_f . " L.code = '0') AND L.trad_fr LIKE '%Platinium%' ORDER BY sorting,trad_fr";
                        $res_f = $this->db->query($sql);

                    }
                    elseif ($generation == "Elysium") {
                        $sql = "SELECT L.code,L.id, L.name, L.trad_fr, L.prix, L.sorting
														FROM " . $this->table_lenses . " L 
											   WHERE (" . $codes_f . " L.code = '0') AND L.trad_fr LIKE '%Elysium%' ORDER BY sorting,trad_fr";
                        $res_f = $this->db->query($sql);

                    }
                    else {

                        if ($panierA == "1") {
                            $P_A = " AND L.trad_fr LIKE '%Panier A%'";
                        } else {
                            $P_A = "";
                        }

                        if ($type == 2
                            || $type == 3) {
                            $P_A .= " AND L.trad_fr NOT LIKE '%Panier A%'";
                        }

                        /*
						$res_f = $this->db->query("SELECT L.code,L.id, L.name, L.trad_fr, L.prix, ppc.prix as prix_perso, L.sorting
														FROM ".$this->table_lenses." L
														LEFT JOIN prix_par_client ppc ON (ppc.code = L.code AND id_client=".$user_id.")
											   WHERE (".$codes_f." L.code = '0') ".$P_A."  ORDER BY sorting,trad_fr,prix");
						*/
                        //echo ($codes_f);die;
                        //print_r($n_code);die;
                        if ($n_code > 2) {
                            $sql = "SELECT L.trad_fr, L.code, L.id, L.name, L.prix, L.sorting
                                    FROM lenses L 
                                    WHERE (" . $codes_f . " L.code = '0') " . $P_A . " ORDER BY sorting,trad_fr";
//                            print_r($sql);die;
                        } else {
                            $sql = "SELECT L.code,L.id, L.name, L.trad_fr, L.prix, ppc.prix as prix_perso, L.sorting 
														FROM " . $this->table_lenses . " L 
														LEFT JOIN prix_par_client ppc ON (ppc.code = L.code AND id_client="
                                . $user_id . ")
											   WHERE (" . $codes_f . " L.code = '0') " . $P_A
                                . "  ORDER BY sorting,trad_fr,prix";
//                            print_r($sql);die;

                        }
//                        print_r($sql);die;

                        $res_f = $this->db->query($sql);



                    }
                    //print_r($res_f->result());
                    return $res_f->result();
                } else {
                    return "";
                }

            } else {
                return 0;
            }

        }

    }


    public
    function getlensAdminAll($indice, $lensFocalGroup, $generation, $sphereD, $cylindreD, $axeD, $additionD, $stock,
                             $user_id, $panierA)
    {

        $sphereD = str_replace(".00", "", $sphereD);
        $cylindreD = str_replace(".00", "", $cylindreD);
        $additionD = str_replace(".00", "", $additionD);
        $axeD = str_replace(".00", "", $axeD);

        $sphereD = str_replace("+", "", $sphereD);
        $cylindreD = str_replace("+", "", $cylindreD);
        $axeD = str_replace("+", "", $axeD);
        $additionD = str_replace("+", "", $additionD);

        $sphereD = str_replace(",", ".", $sphereD);
        $cylindreD = str_replace(",", ".", $cylindreD);
        $axeD = str_replace(",", ".", $axeD);
        $additionD = str_replace(",", ".", $additionD);


        if ($lensFocalGroup == "1"
            || $lensFocalGroup == "6") {
            $additionD = '-';
        }

        if ($stock == "StockD") {
            //$stockLens = "1";
            $stockLens = ' stockLens = 1';
        } elseif ($stock == "FabricationD") {
            $stockLens = ' stockLens = 0';
        } else {
            $stockLens = ' stockLens != 2';
        }

        //return "Stock: ".$stockLens;

        if ($sphereD != "-"
            && $cylindreD != "-") {


            if ($additionD == '-') {
                /*$sphereD_res = DB::table("Refractions")->where('maxMeridian_from', '<=', $sphereD)->where('maxMeridian_to', '>=', $sphereD)->where('cylinder_from', '<=', $cylindreD)->where('cylinder_to', '>=', $cylindreD)->orderBy('id', 'ASC')->get();*/

                $sphereD_res = $this->db->query("SELECT * 
												FROM " . $this->table_Refractions . " 
									   WHERE maxMeridian_from<=" . $sphereD . "
									   AND maxMeridian_to>=" . $sphereD . "
									   AND cylinder_from <=" . $cylindreD . "
									   AND cylinder_to >=" . $cylindreD . "
									   ORDER BY id ASC");

            } else {
                /*$sphereD_res = DB::table("Refractions")->where('maxMeridian_from', '<=', $sphereD)->where('maxMeridian_to', '>=', $sphereD)->where('cylinder_from', '<=', $cylindreD)->where('cylinder_to', '>=', $cylindreD)->where('addition_from', '<=', $additionD)->where('addition_to', '>=', $additionD)->orderBy('id', 'ASC')->get();*/

                if ($lensFocalGroup == '4'
                    && $additionD > 2.25) {
                    $sphereD_res = $this->db->query("SELECT * 
									   FROM " . $this->table_Refractions . " 
									   WHERE id = 0
									   ORDER BY id ASC");
                } else {
                    $sphereD_res = $this->db->query("SELECT * 
									   FROM " . $this->table_Refractions . " 
									   WHERE maxMeridian_from<=" . $sphereD . "
									   AND maxMeridian_to>=" . $sphereD . "
									   AND cylinder_from <=" . $cylindreD . "
									   AND cylinder_to >=" . $cylindreD . "
									   AND addition_from <=" . $additionD . "
									   AND addition_to >=" . $additionD . "
									   ORDER BY id ASC");

                }
            }
            if (!empty($sphereD_res->result())) {
                $resultat_query = $sphereD_res->result();
                //return json_encode($resultat_query);


                $ranges = [];
                foreach ($resultat_query as $sphereDres) {
                    $lensRanges = $sphereDres->lensRanges;
                    $tab_ranges = explode(",", $lensRanges);
                    for ($i = 0; $i < sizeof($tab_ranges); $i++) {
                        if ($tab_ranges[$i] != "") {

                            $ranges_res = $this->db->query("SELECT * 
													FROM " . $this->table_lensRanges . " 
										   WHERE id=" . $tab_ranges[$i] . "
										   AND " . $stockLens . "");


                            /*$ranges_res = $this->db->query("SELECT *
													FROM ".$this->table_lensRanges."
										   WHERE id=".$tab_ranges[$i]."
										   ");*/
                            if ($ranges_res
                                && $ranges_res->num_rows() > 0) {
                                $ranges[] = $tab_ranges[$i];
                            }


                        }
                    }
                }

                $r = array_unique($ranges);
                //return json_encode($r);


                //dd($r);
                $conditions = "(";
                foreach ($r as $field) {
                    $conditions .= "(JSON_EXTRACT(ranges, \"$[*].rangeId\") like '%\"" . $field . "\"%') OR ";
                }
                $conditions = rtrim($conditions, " OR ");
                $conditions .= ")";

                //echo "Conditions:".$conditions." - Generation:".$generation." - Indice:".$indice;

                if ($conditions != "()") {
                    if ($generation == '-') {
                        if ($indice != '-') {

                            if ($indice == "mineral") {


                                $res = $this->db->query("SELECT * 
													FROM " . $this->table_lenses . " 
										   WHERE focalGroupId=" . $lensFocalGroup . "
										   AND " . $conditions . "
										   AND name LIKE '%mineral%' 
										   ORDER BY sorting,trad_fr");
                            } elseif ($indice == "all") {
                                //echo "LENSFOCAL:".$lensFocalGroup."<br>";
                                //echo "conditions:".$conditions."<br><br><br>";
                                if ($lensFocalGroup != "-") {
                                    //$res = DB::table("lenses")->whereRaw("focalGroupId=$lensFocalGroup")->whereRaw(\DB::raw($conditions))->orderBy('name', 'ASC')->pluck("id","name");//->toSql();
                                    $res = $this->db->query("SELECT * 
													FROM " . $this->table_lenses . " 
										   WHERE focalGroupId=" . $lensFocalGroup . "
										   AND " . $conditions . "
										   ORDER BY sorting,trad_fr");

                                } else {
                                    //$res = DB::table("lenses")->whereRaw(\DB::raw($conditions))->orderBy('name', 'ASC')->pluck("id","name");
                                    $res = $this->db->query("SELECT * 
													FROM " . $this->table_lenses . " 
										   WHERE " . $conditions . "
										   ORDER BY sorting,trad_fr");


                                }
                            } else {

                                $res = $this->db->query("SELECT * 
													FROM " . $this->table_lenses . " 
										   WHERE focalGroupId=" . $lensFocalGroup . "
										   AND " . $conditions . "
										   AND (name LIKE '%" . $indice . " %' OR name LIKE '%" . $indice
                                                        . "' OR name LIKE '%" . $indice . "-%' OR name LIKE '%"
                                                        . $indice . "0%')
										   AND name NOT LIKE '%mineral%'
										   ORDER BY sorting,trad_fr");

                                /*	echo "SELECT *
													FROM ".$this->table_lenses."
										   WHERE focalGroupId=".$lensFocalGroup."
										   AND ".$conditions."
										   AND (name LIKE '%".$indice." %' OR name LIKE '%".$indice."' OR name LIKE '%".$indice."-%' OR name LIKE '%".$indice."0%')
										   AND name NOT LIKE '%mineral%'
										   ORDER BY sorting,trad_fr,prix";  */
                            }
                        } else {
                            if ($lensFocalGroup != "-") {
                                //$res = DB::table("lenses")->where('focalGroupId', '=', $lensFocalGroup)->whereRaw(\DB::raw($conditions))->orderBy('name', 'ASC')->pluck("id","name");
                                $res = $this->db->query("SELECT * 
													FROM " . $this->table_lenses . " 
										   WHERE focalGroupId=" . $lensFocalGroup . "
										   AND " . $conditions . "
										   ORDER BY sorting,trad_fr");
                            } else {
                                //$res = DB::table("lenses")->whereRaw(\DB::raw($conditions))->orderBy('name', 'ASC')->pluck("id","name");

                                $res = $this->db->query("SELECT * 
													FROM " . $this->table_lenses . " 
										   WHERE " . $conditions . "
										   ORDER BY sorting,trad_fr");
                            }
                        }
                    } else {
                        if ($indice != '-') {
                            if ($indice == "mineral") {
                                $res = $this->db->query("SELECT * 
													FROM " . $this->table_lenses . " 
										   WHERE trad_fr LIKE '%" . $generation . "%'
										   AND focalGroupId='3'
										   AND " . $conditions . "
										   AND name LIKE '%mineral%'
										   ORDER BY sorting,trad_fr");

                            } elseif ($indice == "all") {

                                $res = $this->db->query("SELECT * 
										   FROM " . $this->table_lenses . " 
										   WHERE trad_fr LIKE '%" . $generation . "%'
										   AND focalGroupId='3'
										   AND " . $conditions . "
										   ORDER BY sorting,trad_fr");
                            } else {

                                $res = $this->db->query("SELECT * 
										   FROM " . $this->table_lenses . " 
										   WHERE trad_fr LIKE '%" . $generation . "%'
										   AND focalGroupId='3'
										   AND " . $conditions . "
										   AND (name LIKE '%" . $indice . " %' OR name LIKE '%" . $indice . "')
										   AND name NOT LIKE '%mineral%'
										   ORDER BY sorting,trad_fr");

                            }
                        } else {

                            $res = $this->db->query("SELECT * 
										   FROM " . $this->table_lenses . " 
										   WHERE trad_fr LIKE '%" . $generation . "%'
										   focalGroupId='3'
										   AND " . $conditions . "
										   ORDER BY sorting,trad_fr");
                        }
                    }

                    $codes_f = "";
                    $codes_res = $res->result();

                    $n_code = 0;

                    foreach ($codes_res as $code) {
                        $codes_f .= "L.code = '" . $code->code . "' OR ";
                        $n_code++;
                    }

                    if ($generation == "T-One") {
                        /*$res_f = $this->db->query("SELECT L.code,L.id, L.name, L.trad_fr, L.prix, ppc.prix as prix_perso , L.sorting
														FROM ".$this->table_lenses." L
														LEFT JOIN prix_par_client ppc ON (ppc.code = L.code AND id_client=".$user_id.")
											   WHERE (".$codes_f." L.code = '0') AND L.trad_fr LIKE '%T-One%' ORDER BY sorting,trad_fr,prix");
											   */

                        $res_f = $this->db->query("SELECT L.trad_fr, L.code, L.id, L.name, L.prix, ppc.prix as prix_perso, L.sorting
	FROM lenses L 
	LEFT JOIN prix_par_client ppc ON (ppc.code = L.code AND id_client=" . $user_id . ")
	LEFT JOIN lenses l2 ON (L.trad_fr = l2.trad_fr AND L.sorting > l2.sorting AND (L.name LIKE '%trn%' OR L.name LIKE '%transition%'  OR L.name LIKE '%chrom%'))
	WHERE l2.sorting IS NULL AND  (" . $codes_f
                                                  . " L.code = '0') AND L.trad_fr LIKE '%T-One%' ORDER BY sorting,trad_fr");


                    }
                    if ($generation == "E-Space") {
                        /*$res_f = $this->db->query("SELECT L.code,L.id, L.name, L.trad_fr, L.prix, ppc.prix as prix_perso , L.sorting
														FROM ".$this->table_lenses." L
														LEFT JOIN prix_par_client ppc ON (ppc.code = L.code AND id_client=".$user_id.")
											   WHERE (".$codes_f." L.code = '0') AND L.trad_fr LIKE '%T-One%' ORDER BY sorting,trad_fr,prix");
											   */

                        $res_f = $this->db->query("SELECT L.trad_fr, L.code, L.id, L.name, L.prix, ppc.prix as prix_perso, L.sorting
	FROM lenses L 
	LEFT JOIN prix_par_client ppc ON (ppc.code = L.code AND id_client=" . $user_id . ")
	LEFT JOIN lenses l2 ON (L.trad_fr = l2.trad_fr AND L.sorting > l2.sorting AND (L.name LIKE '%trn%' OR L.name LIKE '%transition%'  OR L.name LIKE '%chrom%'))
	WHERE l2.sorting IS NULL AND  (" . $codes_f
                                                  . " L.code = '0') AND L.trad_fr LIKE '%E-Space%' ORDER BY sorting,trad_fr");


                    } elseif ($generation == "Platinium") {
                        $res_f = $this->db->query("SELECT L.code,L.id, L.name, L.trad_fr, L.prix, ppc.prix as prix_perso, L.sorting
														FROM " . $this->table_lenses . " L 
											LEFT JOIN prix_par_client ppc ON (ppc.code = L.code AND id_client="
                                                  . $user_id . ")
											   WHERE (" . $codes_f . " L.code = '0') ORDER BY sorting,trad_fr");


                    } else {

                        if ($panierA == "1") {
                            $P_A = " AND L.trad_fr LIKE '%Panier A%'";
                        } else {
                            $P_A = "";
                        }

                        /*
						$res_f = $this->db->query("SELECT L.code,L.id, L.name, L.trad_fr, L.prix, ppc.prix as prix_perso, L.sorting
														FROM ".$this->table_lenses." L
														LEFT JOIN prix_par_client ppc ON (ppc.code = L.code AND id_client=".$user_id.")
											   WHERE (".$codes_f." L.code = '0') ".$P_A."  ORDER BY sorting,trad_fr,prix");
						*/

                        if ($n_code > 2) {
                            /*$res_f = $this->db->query("SELECT L.trad_fr, L.code, L.id, L.name, L.prix, ppc.prix as prix_perso, L.sorting
	FROM lenses L
	LEFT JOIN prix_par_client ppc ON (ppc.code = L.code AND id_client=".$user_id.")
	LEFT JOIN lenses l2
	 ON (L.trad_fr = l2.trad_fr AND L.sorting > l2.sorting)
	WHERE l2.sorting IS NULL AND  (".$codes_f." L.code = '0') ".$P_A." ORDER BY sorting,trad_fr");	*/
                            $res_f = $this->db->query("SELECT L.code,L.id, L.name, L.trad_fr, L.prix, ppc.prix as prix_perso, L.sorting 
														FROM " . $this->table_lenses . " L 
														LEFT JOIN prix_par_client ppc ON (ppc.code = L.code AND id_client="
                                                      . $user_id . ")
											   WHERE (" . $codes_f . " L.code = '0') " . $P_A
                                                      . "  ORDER BY sorting,trad_fr,prix");

                        } else {
                            $res_f = $this->db->query("SELECT L.code,L.id, L.name, L.trad_fr, L.prix, ppc.prix as prix_perso, L.sorting 
														FROM " . $this->table_lenses . " L 
														LEFT JOIN prix_par_client ppc ON (ppc.code = L.code AND id_client="
                                                      . $user_id . ")
											   WHERE (" . $codes_f . " L.code = '0') " . $P_A
                                                      . "  ORDER BY sorting,trad_fr,prix");
                        }


                    }

                    return $res_f->result();
                } else {
                    return "";
                }

            } else {
                return 0;
            }

        }

    }

    public
    function getlensAdmin($indice, $lensFocalGroup, $generation, $sphereD, $cylindreD, $axeD, $additionD, $stock,
                          $user_id, $panierA)
    {

        $sphereD = str_replace(".00", "", $sphereD);
        $cylindreD = str_replace(".00", "", $cylindreD);
        $additionD = str_replace(".00", "", $additionD);
        $axeD = str_replace(".00", "", $axeD);

        $sphereD = str_replace("+", "", $sphereD);
        $cylindreD = str_replace("+", "", $cylindreD);
        $axeD = str_replace("+", "", $axeD);
        $additionD = str_replace("+", "", $additionD);

        $sphereD = str_replace(",", ".", $sphereD);
        $cylindreD = str_replace(",", ".", $cylindreD);
        $axeD = str_replace(",", ".", $axeD);
        $additionD = str_replace(",", ".", $additionD);


        if ($lensFocalGroup == "1"
            || $lensFocalGroup == "6") {
            $additionD = '-';
        }

        if ($stock == "StockD") {
            //$stockLens = "1";
            $stockLens = ' stockLens = 1';
        } elseif ($stock == "FabricationD") {
            $stockLens = ' stockLens = 0';
        } else {
            $stockLens = ' stockLens != 2';
        }

        //return "Stock: ".$stockLens;

        if ($sphereD != "-"
            && $cylindreD != "-") {


            if ($additionD == '-') {
                /*$sphereD_res = DB::table("Refractions")->where('maxMeridian_from', '<=', $sphereD)->where('maxMeridian_to', '>=', $sphereD)->where('cylinder_from', '<=', $cylindreD)->where('cylinder_to', '>=', $cylindreD)->orderBy('id', 'ASC')->get();*/

                $sphereD_res = $this->db->query("SELECT * 
												FROM " . $this->table_Refractions . " 
									   WHERE maxMeridian_from<=" . $sphereD . "
									   AND maxMeridian_to>=" . $sphereD . "
									   AND cylinder_from <=" . $cylindreD . "
									   AND cylinder_to >=" . $cylindreD . "
									   ORDER BY id ASC");

            } else {
                /*$sphereD_res = DB::table("Refractions")->where('maxMeridian_from', '<=', $sphereD)->where('maxMeridian_to', '>=', $sphereD)->where('cylinder_from', '<=', $cylindreD)->where('cylinder_to', '>=', $cylindreD)->where('addition_from', '<=', $additionD)->where('addition_to', '>=', $additionD)->orderBy('id', 'ASC')->get();*/

                if ($lensFocalGroup == '4'
                    && $additionD > 2.25) {
                    $sphereD_res = $this->db->query("SELECT * 
									   FROM " . $this->table_Refractions . " 
									   WHERE id = 0
									   ORDER BY id ASC");
                } else {
                    $sphereD_res = $this->db->query("SELECT * 
									   FROM " . $this->table_Refractions . " 
									   WHERE maxMeridian_from<=" . $sphereD . "
									   AND maxMeridian_to>=" . $sphereD . "
									   AND cylinder_from <=" . $cylindreD . "
									   AND cylinder_to >=" . $cylindreD . "
									   AND addition_from <=" . $additionD . "
									   AND addition_to >=" . $additionD . "
									   ORDER BY id ASC");

                }
            }
            if (!empty($sphereD_res->result())) {
                $resultat_query = $sphereD_res->result();
                //return json_encode($resultat_query);


                $ranges = [];
                foreach ($resultat_query as $sphereDres) {
                    $lensRanges = $sphereDres->lensRanges;
                    $tab_ranges = explode(",", $lensRanges);
                    for ($i = 0; $i < sizeof($tab_ranges); $i++) {
                        if ($tab_ranges[$i] != "") {

                            $ranges_res = $this->db->query("SELECT * 
													FROM " . $this->table_lensRanges . " 
										   WHERE id=" . $tab_ranges[$i] . "
										   AND " . $stockLens . "");

                            /*$ranges_res = $this->db->query("SELECT *
													FROM ".$this->table_lensRanges."
										   WHERE id=".$tab_ranges[$i]."
										   ");*/
                            if ($ranges_res
                                && $ranges_res->num_rows() > 0) {
                                $ranges[] = $tab_ranges[$i];
                            }


                        }
                    }
                }

                $r = array_unique($ranges);
                //return json_encode($r);


                //dd($r);
                $conditions = "(";
                foreach ($r as $field) {
                    $conditions .= "(JSON_EXTRACT(ranges, \"$[*].rangeId\") like '%\"" . $field . "\"%') OR ";
                }
                $conditions = rtrim($conditions, " OR ");
                $conditions .= ")";

                //echo "Conditions:".$conditions." - Generation:".$generation." - Indice:".$indice;

                if ($conditions != "()") {
                    if ($generation == '-') {
                        if ($indice != '-') {

                            if ($indice == "mineral") {


                                $res = $this->db->query("SELECT * 
													FROM " . $this->table_lenses . " 
										   WHERE focalGroupId=" . $lensFocalGroup . "
										   AND " . $conditions . "
										   AND name LIKE '%mineral%' 
										   AND display = 'X'
										   ORDER BY sorting,trad_fr");
                            } elseif ($indice == "all") {
                                //echo "LENSFOCAL:".$lensFocalGroup."<br>";
                                //echo "conditions:".$conditions."<br><br><br>";
                                if ($lensFocalGroup != "-") {
                                    //$res = DB::table("lenses")->whereRaw("focalGroupId=$lensFocalGroup")->whereRaw(\DB::raw($conditions))->orderBy('name', 'ASC')->pluck("id","name");//->toSql();
                                    $res = $this->db->query("SELECT * 
													FROM " . $this->table_lenses . " 
										   WHERE focalGroupId=" . $lensFocalGroup . "
										   AND " . $conditions . "
										   AND display = 'X'
										   ORDER BY sorting,trad_fr");

                                } else {
                                    //$res = DB::table("lenses")->whereRaw(\DB::raw($conditions))->orderBy('name', 'ASC')->pluck("id","name");
                                    $res = $this->db->query("SELECT * 
													FROM " . $this->table_lenses . " 
										   WHERE " . $conditions . "
										   AND display = 'X'
										   ORDER BY sorting,trad_fr");


                                }
                            } else {

                                $res = $this->db->query("SELECT * 
													FROM " . $this->table_lenses . " 
										   WHERE focalGroupId=" . $lensFocalGroup . "
										   AND " . $conditions . "
										   AND (name LIKE '%" . $indice . " %' OR name LIKE '%" . $indice
                                                        . "' OR name LIKE '%" . $indice . "-%' OR name LIKE '%"
                                                        . $indice . "0%')
										   AND name NOT LIKE '%mineral%'
										   AND display = 'X'
										   ORDER BY sorting,trad_fr");

                                /*		echo "SELECT *
													FROM ".$this->table_lenses."
										   WHERE focalGroupId=".$lensFocalGroup."
										   AND ".$conditions."
										   AND (name LIKE '%".$indice." %' OR name LIKE '%".$indice."' OR name LIKE '%".$indice."-%' OR name LIKE '%".$indice."0%')
										   AND name NOT LIKE '%mineral%'
										   AND display = 'X'
										   ORDER BY sorting,trad_fr,prix";  */
                            }
                        } else {
                            if ($lensFocalGroup != "-") {
                                //$res = DB::table("lenses")->where('focalGroupId', '=', $lensFocalGroup)->whereRaw(\DB::raw($conditions))->orderBy('name', 'ASC')->pluck("id","name");
                                $res = $this->db->query("SELECT * 
													FROM " . $this->table_lenses . " 
										   WHERE focalGroupId=" . $lensFocalGroup . "
										   AND " . $conditions . "
										   AND display = 'X'
										   ORDER BY sorting,trad_fr");
                            } else {
                                //$res = DB::table("lenses")->whereRaw(\DB::raw($conditions))->orderBy('name', 'ASC')->pluck("id","name");

                                $res = $this->db->query("SELECT * 
													FROM " . $this->table_lenses . " 
										   WHERE " . $conditions . "
										   AND display = 'X'
										   ORDER BY sorting,trad_fr");
                            }
                        }
                    } else {
                        if ($indice != '-') {
                            if ($indice == "mineral") {
                                $res = $this->db->query("SELECT * 
													FROM " . $this->table_lenses . " 
										   WHERE trad_fr LIKE '%" . $generation . "%'
										   AND focalGroupId='3'
										   AND " . $conditions . "
										   AND name LIKE '%mineral%'
										   AND display = 'X'
										   ORDER BY sorting,trad_fr");

                            } elseif ($indice == "all") {

                                $res = $this->db->query("SELECT * 
										   FROM " . $this->table_lenses . " 
										   WHERE trad_fr LIKE '%" . $generation . "%'
										   AND focalGroupId='3'
										   AND " . $conditions . "
										   AND display = 'X'
										   ORDER BY sorting,trad_fr");
                            } else {

                                $res = $this->db->query("SELECT * 
										   FROM " . $this->table_lenses . " 
										   WHERE trad_fr LIKE '%" . $generation . "%'
										   AND focalGroupId='3'
										   AND " . $conditions . "
										   AND (name LIKE '%" . $indice . " %' OR name LIKE '%" . $indice . "')
										   AND name NOT LIKE '%mineral%'
										   AND display = 'X'
										   ORDER BY sorting,trad_fr");

                            }
                        } else {

                            $res = $this->db->query("SELECT * 
										   FROM " . $this->table_lenses . " 
										   WHERE trad_fr LIKE '%" . $generation . "%'
										   focalGroupId='3'
										   AND " . $conditions . "
										   AND display = 'X'
										   ORDER BY sorting,trad_fr");
                        }
                    }

                    $codes_f = "";
                    $codes_res = $res->result();

                    $n_code = 0;

                    foreach ($codes_res as $code) {
                        $codes_f .= "L.code = '" . $code->code . "' OR ";
                        $n_code++;
                    }

                    if ($generation == "T-One") {
                        /*$res_f = $this->db->query("SELECT L.code,L.id, L.name, L.trad_fr, L.prix, ppc.prix as prix_perso , L.sorting
														FROM ".$this->table_lenses." L
														LEFT JOIN prix_par_client ppc ON (ppc.code = L.code AND id_client=".$user_id.")
											   WHERE (".$codes_f." L.code = '0') AND L.trad_fr LIKE '%T-One%' ORDER BY sorting,trad_fr,prix");
											   */

                        $res_f = $this->db->query("SELECT L.trad_fr, L.code, L.id, L.name, L.prix, ppc.prix as prix_perso, L.sorting
	FROM lenses L 
	LEFT JOIN prix_par_client ppc ON (ppc.code = L.code AND id_client=" . $user_id . ")
	LEFT JOIN lenses l2 ON (L.trad_fr = l2.trad_fr AND L.sorting > l2.sorting AND (L.name LIKE '%trn%' OR L.name LIKE '%transition%'  OR L.name LIKE '%chrom%'))
	WHERE l2.sorting IS NULL AND  (" . $codes_f
                                                  . " L.code = '0') AND L.trad_fr LIKE '%T-One%' ORDER BY sorting,trad_fr");


                    }
                    if ($generation == "E-Space") {
                        /*$res_f = $this->db->query("SELECT L.code,L.id, L.name, L.trad_fr, L.prix, ppc.prix as prix_perso , L.sorting
														FROM ".$this->table_lenses." L
														LEFT JOIN prix_par_client ppc ON (ppc.code = L.code AND id_client=".$user_id.")
											   WHERE (".$codes_f." L.code = '0') AND L.trad_fr LIKE '%T-One%' ORDER BY sorting,trad_fr,prix");
											   */

                        $res_f = $this->db->query("SELECT L.trad_fr, L.code, L.id, L.name, L.prix, ppc.prix as prix_perso, L.sorting
	FROM lenses L 
	LEFT JOIN prix_par_client ppc ON (ppc.code = L.code AND id_client=" . $user_id . ")
	LEFT JOIN lenses l2 ON (L.trad_fr = l2.trad_fr AND L.sorting > l2.sorting AND (L.name LIKE '%trn%' OR L.name LIKE '%transition%'  OR L.name LIKE '%chrom%'))
	WHERE l2.sorting IS NULL AND  (" . $codes_f
                                                  . " L.code = '0') AND L.trad_fr LIKE '%E-Space%' ORDER BY sorting,trad_fr");


                    } elseif ($generation == "Platinium") {
                        $res_f = $this->db->query("SELECT L.code,L.id, L.name, L.trad_fr, L.prix, ppc.prix as prix_perso, L.sorting
														FROM " . $this->table_lenses . " L 
											LEFT JOIN prix_par_client ppc ON (ppc.code = L.code AND id_client="
                                                  . $user_id . ")
											   WHERE (" . $codes_f . " L.code = '0') ORDER BY sorting,trad_fr");


                    } else {

                        if ($panierA == "1") {
                            $P_A = " AND L.trad_fr LIKE '%Panier A%'";
                        } else {
                            $P_A = "";
                        }

                        /*
						$res_f = $this->db->query("SELECT L.code,L.id, L.name, L.trad_fr, L.prix, ppc.prix as prix_perso, L.sorting
														FROM ".$this->table_lenses." L
														LEFT JOIN prix_par_client ppc ON (ppc.code = L.code AND id_client=".$user_id.")
											   WHERE (".$codes_f." L.code = '0') ".$P_A."  ORDER BY sorting,trad_fr,prix");
						*/

                        if ($n_code > 2) {
                            $res_f = $this->db->query("SELECT L.trad_fr, L.code, L.id, L.name, L.prix, ppc.prix as prix_perso, L.sorting
	FROM lenses L 
	LEFT JOIN prix_par_client ppc ON (ppc.code = L.code AND id_client=" . $user_id . ")
	LEFT JOIN lenses l2
	 ON (L.trad_fr = l2.trad_fr AND L.sorting > l2.sorting)
	WHERE l2.sorting IS NULL AND  (" . $codes_f . " L.code = '0') " . $P_A . " ORDER BY sorting,trad_fr");

                        } else {
                            $res_f = $this->db->query("SELECT L.code,L.id, L.name, L.trad_fr, L.prix, ppc.prix as prix_perso, L.sorting 
														FROM " . $this->table_lenses . " L 
														LEFT JOIN prix_par_client ppc ON (ppc.code = L.code AND id_client="
                                                      . $user_id . ")
											   WHERE (" . $codes_f . " L.code = '0') " . $P_A
                                                      . "  ORDER BY sorting,trad_fr,prix");
                        }


                    }

                    return $res_f->result();
                } else {
                    return "";
                }

            } else {
                return 0;
            }

        }

    }

    public
    function getPrixStock($lens = "", $user_id)
    {
        $sql = "SELECT *, ppc.prix as prix_perso  
												FROM verres_stock 
									   JOIN grille_tarifaire ON grille_tarifaire.id_verre = verres_stock.id_verre
                                       LEFT JOIN prix_par_client ppc ON (ppc.code = verres_stock.id_verre AND id_client="
            . $user_id . ")
									   WHERE verres_stock.id_verre = '" . $lens
            . "' AND grille_tarifaire.id_grille_tarifaire = 1";
        $stock_res = $this->db->query($sql);
        $user = $this->m_users->getUserById($user_id);

        $stock_query = $stock_res->result();
        foreach ($stock_query as $stock) {
            if ($stock->prix_perso != NULL) {
                $resultat[$stock->id_verre]["prix"] = $stock->prix_perso;
            } else {
                $resultat[$stock->id_verre]["prix"] = $stock->prix_verre;
            }
            if ($stock->supplement != 0) {
                $resultat[$stock->id_verre]["prix"] += $user[0]->tarif_supplement - 1;
            }
            $resultat[$stock->id_verre]["prix"] = number_format($resultat[$stock->id_verre]["prix"], 2);
        }
        return $resultat;
    }

    public
    function getPrix($lens = "", $user_id, $generation, $traitement = NULL)
    {
        //echo "Generation:".$generation." - ";
        if ($generation != "") {
            $sql = "SELECT L.trad_fr, L.code, L.id, L.name, L.prix, L.sorting, L.verre_type, L.supplement as sup, ppc.prix as prix_perso 
			FROM lenses L 
			LEFT JOIN prix_par_client ppc ON (ppc.code = L.code AND id_client=" . $user_id
                . " AND ppc.name LIKE '%" . $generation . "%')
			WHERE  L.code = '" . $lens . "' AND L.trad_fr LIKE '%" . $generation . "%'";

        } else {
            $sql = "SELECT L.trad_fr, L.code, L.id, L.name, L.prix, L.sorting, L.verre_type, L.supplement as sup, ppc.prix as prix_perso 
			FROM lenses L 
			LEFT JOIN prix_par_client ppc ON (ppc.code = L.code AND id_client=" . $user_id . ")
			WHERE  L.code = '" . $lens . "'";
        }

        $user = $this->m_users->getUserById($user_id);
        $res_f = $this->db->query($sql);

        $res_query = $res_f->result();

        foreach ($res_query as $res) {

            if ($res->prix_perso != NULL) {
                $resultat[$res->code]["prix"] = $res->prix_perso;
            } else {
                $resultat[$res->code]["prix"] = $res->prix;
            }

            if (!is_null($traitement) && $res->verre_type == 't-one' && in_array($lens,['S1UW50','S2UW50','S3UW50','S4UW50']) && (in_array($traitement, [700100, 700102, 700027, 700021]) || !$traitement)) {
                $resultat[$res->code]["prix"] -= 1;
            }
            else {
//                if ($res->sup != 0) {
                    $resultat[$res->code]["prix"] += $user[0]->tarif_supplement_fab - 2;
//                }
            }
            $resultat[$res->code]["prix"] = number_format($resultat[$res->code]["prix"], 2);

//            print_r($user);die;
        }


//        if (in_array($data['type_de_verreD'],['S1UW50','S2UW50','S3UW50','S4UW50']) && in_array($data['traitementD'], [700100, 700102, 700027, 700021])) {
//            $data['supplementD'] -= 1;
//        }
        return $resultat;
    }

    public
    function getColors($lens = "")
    {
        if (strpos($lens, 'Mineral') !== false
            || strpos($lens, 'Minéral') !== false) {
            $res =
                $this->db->query("SELECT * FROM lensOptions WHERE color='COLOR' AND display='X' AND (trad_fr LIKE '%gris%' OR trad_fr LIKE '%brun%') AND trad_fr NOT LIKE '%dégradé%'  AND trad_fr NOT LIKE '% D %'  AND trad_fr NOT LIKE '%nm%' ORDER BY sorting");
        } else {
            $res = $this->db->query("SELECT * FROM lensOptions WHERE color='COLOR' AND display='X' ORDER BY sorting");
        }
        return $res->result();
    }

    public
    function getColorsWithPerso($lens = "")
    {
        if (strpos($lens, 'Mineral') !== false
            || strpos($lens, 'Minéral') !== false) {
            $res =
                $this->db->query("SELECT * FROM lensOptions WHERE (color='COLOR' AND display='X' AND (trad_fr LIKE '%gris%' OR trad_fr LIKE '%brun%') AND trad_fr NOT LIKE '%dégradé%'  AND trad_fr NOT LIKE '% D %'  AND trad_fr NOT LIKE '%nm%') OR code = 'CUST_24' OR code = 'CUST_25' ORDER BY sorting");
        } else {
            $res =
                $this->db->query("SELECT * FROM lensOptions WHERE (color='COLOR' AND display='X') OR code = 'CUST_24' OR code = 'CUST_25' ORDER BY sorting");
        }
        return $res->result();
    }

    public
    function getDiametres($lens, $sphere, $cylindre, $diametreUtile = NULL)
    {
        $sphere = str_replace("+", "", $sphere);
        $cylindre = str_replace("+", "", $cylindre);

        $sphere = str_replace(",", ".", $sphere);
        $cylindre = str_replace(",", ".", $cylindre);

        $rangesFDiameters = array();
        $rangesids = "";
        $sql = "SELECT * FROM " . $this->table_lenses . " WHERE code = '" . $lens . "'";
        $res = $this->db->query($sql);
        $r = $res->result()[0]->ranges;
        $ranges_list = array();

        $rList = json_decode($r);
        //return $rList;

        for ($i = 0; $i < sizeof($rList); $i++) {

            foreach ($rList[$i]->rangeId as $result) {
                $ranges_list[] = $result;
            }
        }
        $ranges_listF = implode(",", $ranges_list);

        $sql = "SELECT * FROM lensRanges WHERE id IN (" . $ranges_listF
            . ") ORDER BY diameter_physical ASC ";

        $res_ranges = $this->db->query($sql);

        $ranges = $res_ranges->result();
        //var_dump($ranges);

        foreach ($ranges as $range) {
            $refractions = $range->refractions;
            $steps = $range->refract_steps_sphere;
            //echo $refractions."<br>";
            $refr = explode(",", $refractions);
            for ($i = 0; $i < sizeof($refr) - 1; $i++) {

                //echo "SELECT * FROM Refractions WHERE id = $refr[$i] AND maxMeridian_from <= $sphere  AND maxMeridian_to >= $sphere AND cylinder_from <= $cylindre AND cylinder_to >= $cylindre AND cylinderPart_from = '0'";
//                $sql = "SELECT * FROM Refractions WHERE id = $refr[$i]
//                                    AND maxMeridian_from <= $sphere
//                                    AND maxMeridian_to >= $sphere
//                                    AND cylinder_from <= $cylindre
//                                    AND cylinder_to >= $cylindre
//                                    AND cylinderPart_from = '0'";
                $sumSphereCylindre = floatval($sphere + $cylindre);
                $sql = "SELECT * FROM Refractions WHERE id = $refr[$i] AND cylinder_from <= $cylindre AND cylinder_to >= $cylindre AND
                ((maxMeridian_from <= $sphere AND maxMeridian_to >= $sphere AND cylinderPart_from = '0' AND cylinderPart_to = '0')
                    OR
                    (maxMeridian_from <= $sphere AND maxMeridian_to >= $sumSphereCylindre AND cylinderPart_from = '0' AND cylinderPart_to = '100')
                    OR
                    (maxMeridian_from <= $sumSphereCylindre AND maxMeridian_to >= $sphere AND cylinderPart_from = '100' AND cylinderPart_to = '0')
                    OR
                    (maxMeridian_from <= $sumSphereCylindre AND maxMeridian_to >= $sumSphereCylindre AND cylinderPart_from = '100' AND cylinderPart_to = '100'))";

                $query =
                    $this->db->query($sql);
                if ($query->num_rows() > 0) {
                    $rangesids .= "id='" . $range->id . "' OR ";
                }

            }
        }

        $rangesids = rtrim($rangesids, " OR ");

        if ($rangesids != "") {
            $rangesids = "(" . $rangesids . ")";
            $diametreUtileSql = '';
            if ($diametreUtile) {
                $diametreUtileSql = ' AND diameter_physical >= ' . $diametreUtile;
            }
            //	echo $rangesids."<br>";
            /*$rangesFDiameters = DB::table('lensRanges')
						 ->whereRaw(\DB::raw($rangesids))
						 ->orderBy('diameter_physical', 'ASC')->groupBy('diameter_physical')->get();
						 */
            //return "SELECT * FROM lensRanges WHERE ".$rangesids." ORDER BY diameter_physical GROUP BY diameter_physical";
            $sql = "SELECT diameter_physical FROM lensRanges WHERE " . $rangesids
                . $diametreUtileSql . " GROUP BY diameter_physical ORDER BY diameter_physical";

            $resultats = $this->db->query($sql);
            //	echo "SELECT * FROM lensRanges WHERE ".$rangesids."  GROUP BY diameter_physical ORDER BY diameter_physical";
            $rangesFDiameters = $resultats->result();
        }

        return $rangesFDiameters;

    }
    public
    function oldGetDiametres($lens, $sphere, $cylindre)
    {
        $sphere = str_replace("+", "", $sphere);
        $cylindre = str_replace("+", "", $cylindre);

        $sphere = str_replace(",", ".", $sphere);
        $cylindre = str_replace(",", ".", $cylindre);

        $rangesFDiameters = array();
        $rangesids = "";
        $sql = "SELECT * FROM " . $this->table_lenses . " WHERE code = '" . $lens . "'";

        $res = $this->db->query($sql);
        $r = $res->result()[0]->ranges;
        $ranges_list = array();

        $rList = json_decode($r);

        //return $rList;

        for ($i = 0; $i < sizeof($rList); $i++) {

            foreach ($rList[$i]->rangeId as $result) {
                $ranges_list[] = $result;
            }
        }
        $ranges_listF = implode(",", $ranges_list);

        $sql = "SELECT * FROM lensRanges WHERE id IN (" . $ranges_listF
            . ") ORDER BY diameter_physical ASC ";

        $res_ranges = $this->db->query($sql);

        $ranges = $res_ranges->result();
        //var_dump($ranges);
        foreach ($ranges as $range) {
            $refractions = $range->refractions;
            $steps = $range->refract_steps_sphere;
            //echo $refractions."<br>";
            $refr = explode(",", $refractions);
            for ($i = 0; $i < sizeof($refr) - 1; $i++) {

                //echo "SELECT * FROM Refractions WHERE id = $refr[$i] AND maxMeridian_from <= $sphere  AND maxMeridian_to >= $sphere AND cylinder_from <= $cylindre AND cylinder_to >= $cylindre AND cylinderPart_from = '0'";
                $sql = "SELECT * FROM Refractions WHERE id = $refr[$i] 
                                    AND maxMeridian_from <= $sphere
                                    AND maxMeridian_to >= $sphere 
                                    AND cylinder_from <= $cylindre 
                                    AND cylinder_to >= $cylindre 
                                    AND cylinderPart_from = '0'";

                $res =
                    $this->db->query($sql);
                $refrc = $res->result();

                foreach ($refrc as $ref) {
                    $from = $ref->cylinderPart_from;
                    $to = $ref->cylinderPart_to;

                    //echo $ref->id." - ";

                    if ($from == '0'
                        && $to == '100') {

                        $p = 0;
                        $c = 0;

                        $valid_cylindre = 0;

                        for ($j = $ref->maxMeridian_to; $j >= $ref->maxMeridian_from; $j -= 0.25) {
                            if ($c <= $ref->cylinder_to) {
                                //echo " - Sphere: ".$j." - Cylindre: ".$c."<br>";
                                //$pente[$p]['sphere']=$j;
                                //$pente[$p]['cylindre']=$c;

                                if ($j == $sphere) {
                                    $valid_cylindre = $c;
                                    //$rangesids.="id='".$range->id."' OR ";
                                    //echo "Valid cyl:".$valid_cylindre;
                                }

                                $c += 0.25;
                                $p++;
                            } else {
                                if ($j == $sphere) {
                                    //echo $range->diameter_physical." - From: ".$from." - to: ".$to."<br>";
                                    $rangesids .= "id='" . $range->id . "' OR ";
                                }
                            }
                        }
                        //echo "Valid cyl:".$valid_cylindre;

                        if ($cylindre <= $valid_cylindre) {
                            //echo $range->diameter_physical." - From: ".$from." - to: ".$to."<br>";
                            $rangesids .= "id='" . $range->id . "' OR ";
                        }
                        //var_dump($pente);
                    } elseif ($from == '0'
                              && $to == '0') {
                        //echo $range->diameter_physical." - From: ".$from." - to: ".$to."<br>";
                        $rangesids .= "id='" . $range->id . "' OR ";
                    }

                }

                //$res100 = DB::table("Refractions")->where('id', '=', $refr[$i])->where('maxMeridian_to', '>=', $sphere)->where('cylinder_from', '<=', $cylindre)->where('cylinder_to', '>=', $cylindre)->where('cylinderPart_from', '=', '100')->get();

                //echo "SELECT * FROM Refractions WHERE id = $refr[$i]  AND maxMeridian_to >= $sphere AND cylinder_from <= $cylindre AND cylinder_to >= $cylindre AND cylinderPart_from = '100'";
                $sql = "SELECT * FROM Refractions WHERE id = $refr[$i]
                                    AND maxMeridian_to >= $sphere 
                                    AND cylinder_from <= $cylindre 
                                    AND cylinder_to >= $cylindre 
                                    AND cylinderPart_from = '100'";
                $res_100 =
                    $this->db->query($sql);

                $refrc_100 = $res_100->result();

                foreach ($refrc_100 as $ref100) {

                    $from = $ref100->cylinderPart_from;
                    $to = $ref100->cylinderPart_to;

                    if ($from == '100'
                        && $to == '0') {

                        $s = $ref100->maxMeridian_from;

                        $valid_cylindre = 0;
                        //echo "Cylindre FROM:".$ref100->cylinder_from."<br>";
                        //echo "Cylindre TO:".$ref100->cylinder_to."<br>";

                        for ($k = $ref100->cylinder_from; $k <= $ref100->cylinder_to; $k += 0.25) {

                            //echo "Sphere:".$s." - cylindre:".$k."<br>";
                            //echo "<strong>".$k."==".$cylindre." && ".$s."<=".$sphere." && ".$s."<=".$ref100->maxMeridian_from."</strong><br>";

                            if ($k == $cylindre
                                && $s <= $sphere)//&& $sphere <= $ref100->maxMeridian_from  )
                            {
                                //echo "LA3<br>";
                                //$valid_cylindre = $s;
                                //echo "<strong>".$s."</strong><br>";

                                //echo "<strong>SphereA:".$s." - cylindre:".$k." - Start Sphere:".$ref100->maxMeridian_from." - Refr ID:".$ref100->id."</strong><br>";
                                $rangesids .= "id='" . $range->id . "' OR ";

                            }

                            $s -= 0.25;


                        }
                    } elseif ($from == '100'
                              && $to == '100') {
                        $c = 0;

                        $valid_cylindre = 0;
                        //	echo "###".$range->diameter_physical.": Max to:".$ref100->maxMeridian_to." - Max from:".$ref100->maxMeridian_from." ";
                        for ($v = $ref100->maxMeridian_to; $v >= $ref100->maxMeridian_from; $v -= 0.25) {
                            //	echo " // ".$v."==".$sphere." : ".$c."<=".$ref100->cylinder_to;
                            //print_r($v);
                            //echo(' ');
                            if ($c <= $ref100->cylinder_to) {

                                if ($v == $sphere) {
                                    $valid_cylindre = $c;
                                    //echo "cylindre:".$cylindre;
                                    //echo "valid_cylindre:".$valid_cylindre;

                                    if ($cylindre <= $valid_cylindre) {
                                        //echo "LA2<br>";
                                        //echo $range->diameter_physical." - From: ".$from." - to: ".$to."<br>";
                                        $rangesids .= "id='" . $range->id . "' OR ";
                                        //echo " **".$range->diameter_physical." - Rangesids: ".$rangesids." ";
                                    }
                                }
                                $c += 0.25;

                            } else {

                                if ($v == $sphere) {
                                    //echo "LA1<br>";
                                    $rangesids .= "id='" . $range->id . "' OR ";
                                    //	echo " ??".$range->diameter_physical." - Rangesids: ".$rangesids." ";
                                }
                            }
                        }


                        $s = $ref100->maxMeridian_from;

                        $valid_cylindre = 0;
                        //echo "Cylindre FROM:".$ref100->cylinder_from."<br>";
                        //echo "Cylindre TO:".$ref100->cylinder_to."<br>";

                        for ($k = $ref100->cylinder_from; $k <= $ref100->cylinder_to; $k += 0.25) {

                            //echo "Sphere:".$s." - cylindre:".$k."<br>";
                            //echo "<strong>".$k."==".$cylindre." && ".$s."<=".$sphere." && ".$s."<=".$ref100->maxMeridian_from."</strong><br>";

                            if ($k == $cylindre
                                && $s <= $sphere
                                && $sphere <= $ref100->maxMeridian_from) {
                                //echo "LA3<br>";
                                //$valid_cylindre = $s;
                                //echo "<strong>".$s."</strong><br>";

                                //	echo "<strong>SphereA:".$s." - cylindre:".$k." - Start Sphere:".$ref100->maxMeridian_from." - Refr ID:".$ref100->id."</strong><br>";
                                $rangesids .= "id='" . $range->id . "' OR ";

                            }

                            $s -= 0.25;


                        }


                    }
                }
//                die;
            }

        }
//        echo '\n';
//        print_r($rangesids);
//        die;


        //echo "Rangesids: ".$rangesids."<br>";
        $rangesids = rtrim($rangesids, " OR ");

        if ($rangesids != "") {
            $rangesids = "(" . $rangesids . ")";

            //	echo $rangesids."<br>";
            /*$rangesFDiameters = DB::table('lensRanges')
						 ->whereRaw(\DB::raw($rangesids))
						 ->orderBy('diameter_physical', 'ASC')->groupBy('diameter_physical')->get();
						 */
            //return "SELECT * FROM lensRanges WHERE ".$rangesids." ORDER BY diameter_physical GROUP BY diameter_physical";
            $sql = "SELECT diameter_physical FROM lensRanges WHERE " . $rangesids
                . "  GROUP BY diameter_physical ORDER BY diameter_physical";

            $resultats = $this->db->query($sql);
            //	echo "SELECT * FROM lensRanges WHERE ".$rangesids."  GROUP BY diameter_physical ORDER BY diameter_physical";
            $rangesFDiameters = $resultats->result();
        }

        return $rangesFDiameters;

    }


    public
    function getOptions($lens)
    {

        /*
		$res_verre = $this->db->query("SELECT * FROM verres WHERE id_verre = '".$lens."'");
		$r_verre_code = $res_verre->result()[0]->code;

		$res = $this->db->query("SELECT * FROM ".$this->table_lenses." WHERE code = '".$r_verre_code."'");
		*/
        $res = $this->db->query("SELECT * FROM " . $this->table_lenses . " WHERE code = '" . $lens . "'");
        //$res = $this->db->query("SELECT * FROM " . $this->table_lenses . " WHERE code = 'S4UH60'");
        //echo "SELECT * FROM ".$this->table_lenses." WHERE code = '".$lens."'";
        $r = $res->result()[0]->ranges;

        $data = json_decode($r);
        //var_dump($data);
        $combinationTreeId = json_encode($data[0]->combinationTreeId);
        $t = explode(":", $combinationTreeId);
        $p = explode(",", $t[1]);
        $p[0] = str_replace('"', "", $p[0]);
        if ($p[0] != "2") {
            //$tree = DB::table("combinationTrees")->where('combinationTrees.id', '=', $p[0])->join('combinationNodes', 'combinationNodes.id', '=', 'combinationTrees.combinationNodeId')->get();

            $tree =
                $this->db->query("SELECT * FROM combinationTrees JOIN combinationNodes ON combinationNodes.id = combinationTrees.combinationNodeId WHERE combinationTrees.id = "
                                 . $p[0] . " ");
            //	echo "SELECT * FROM combinationTrees JOIN combinationNodes ON combinationNodes.id = combinationTrees.combinationNodeId WHERE combinationTrees.id = ".$p[0]." ";

            //$tree = $this->db->query("SELECT * FROM combinationNodes  WHERE id = ".$p[0]." ");
            if ($tree->result()[0]->minSelection == '0') {
                $optionCode = "0," . $tree->result()[0]->optionCode;
            } else {
                $optionCode = $tree->result()[0]->optionCode;
            }
            //            var_dump($tree->result()[0]);die;
            $code1 = array();
            $code2 = array();
            $code3 = array();
            $code4 = array();

            $code1 = explode(",", $optionCode);

            //return $tree->result()[0]->id;
            if ($tree->result()[0]->id != ""
                && $tree->result()[0]->childsIds != "") {

                //$tree2 = DB::table("combinationNodes")->where('combinationNodes.id', '=', $tree[0]->childsIds)->get();
                $tree2 = $this->db->query("SELECT * FROM combinationNodes WHERE combinationNodes.id = "
                                          . $tree->result()[0]->childsIds . " ");

                //echo "SELECT * FROM combinationNodes WHERE combinationNodes.id = ".$tree->result()[0]->childsIds." ";

                if ($tree2->result()[0]->optionCode) {
                    $optionCode2 = $tree2->result()[0]->optionCode;
                    //return $optionCode2;
                    //	echo "<br><br>".$optionCode2;

                    $code2 = explode(",", $optionCode2);

                    if ($tree2->result()[0]->id != "") {
                        //$tree3 = DB::table("combinationNodes")->where('combinationNodes.id', '=', $tree2[0]->childsIds)->get();
                        $tree3 = $this->db->query("SELECT * FROM combinationNodes WHERE combinationNodes.id = "
                                                  . $tree2->result()[0]->id . " ");
                        $optionCode3 = $tree3->result()[0]->optionCode;
                        //echo "<br><br>".$optionCode3;

                        $code3 = explode(",", $optionCode3);

                        if ($tree3->result()[0]->id != "") {
                            //$tree4 = DB::table("combinationNodes")->where('combinationNodes.id', '=', $tree3[0]->childsIds)->get();
                            $tree4 = $this->db->query("SELECT * FROM combinationNodes WHERE combinationNodes.id = "
                                                      . $tree3->result()[0]->id . " ");
                            $optionCode4 = $tree4->result()[0]->optionCode;
                            //echo "<br><br>".$optionCode4;

                            $code4 = explode(",", $optionCode4);
                        }
                    }
                }
            }

            $codef = array_merge($code1, $code2, $code3, $code4);
            $codes = join("','", $codef);

            $codes = rtrim($codes, ",'");

            //return json_encode($codef)

            //return "SELECT * FROM lensOptions WHERE code IN ('".$codes."') ORDER BY id,name,color ";

            $optionList = $this->db->query("SELECT trad_fr, sorting, code, name FROM lensOptions WHERE code IN ('" . $codes
                . "') AND display='X' AND color!='COLOR' GROUP BY trad_fr, sorting, code, name ORDER BY sorting");

            //echo "SELECT * FROM lensOptions WHERE code IN ('".$codes."') GROUP BY trad_fr ORDER BY sorting ";
            //$optionList = DB::table('lensOptions')
            //       ->whereIn('code', $codef)
            //        ->orderBy('name', 'ASC')->get(['id','name','color']);

            //            var_dump($optionList->result());die;
            //dd($optionList);
            return ($optionList->result());
        } else {
            $optionList = "";
        }


    }

}
