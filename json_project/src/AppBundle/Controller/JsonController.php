<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\json_data;

class JsonController extends Controller
{

  /**
     * @Route("/jnj", name="jnj")
     */
     public function jnjAction(Request $request){
         //return new Response("Ola");
         return $this->render('default/home.html');
     }

       /**
     * @Route("/emailMsg", name="emailMsg")
     */
     public function emailMsgAction(Request $request){
         //return new Response("Ola");
         return $this->render('default/emailMsg.html');
     }

  /**
     * @Route("/msg", name="msg")
     */
     public function msgSuccessAction(Request $request){
         //return new Response("Ola");
         return $this->render('/msgSuccess.html');
     }



   


      /**
     * @Route("/jsonUrl/{ano}", name="jsonUrl")
     */
    public function jsonUrlAction($ano, Request $request){
        $url = "https://jnjjanssend679dev.prod.acquia-sites.com/pantallaapi/pantalla_service?year=".$ano;
        $this->testeDB($url);
        //return new Response("Informações gravadas no banco !");
        return $this->redirectToRoute('msg');
    }

        /**
     * @Route("/jsonUrl/{ano}/{month}", name="jsonUrlx")
     */
    public function jsonUrlxAction($ano, $month, Request $request){
        $url = "https://jnjjanssend679dev.prod.acquia-sites.com/pantallaapi/pantalla_service?year=".$ano."&month=".$month;
        $this->testeDB($url);
        //return new Response("Informações gravadas no banco !");
        return $this->redirectToRoute('msg');
    }



    /**
     * @Route("/json", name="json")
     */
    public function url(Request $request){

        $url = 'https://jnjjanssend679dev.prod.acquia-sites.com/pantallaapi/pantalla_service?year=2017&month=April';
        return new Response($this->readJsonUrl($url)->getContent());
       
    }


     public function readJsonUrl($url)
     {


      $curl = curl_init();
      //$headers[] = "Content-Type: application/json;charset=utf-8";
      $cabecalho = array('api-key: yIQT2WncoWxM1li86yQRjA', 'Content-Type: application/json;charset=utf-8');
    // Optional Authentication:
    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($curl, CURLOPT_USERPWD, "jjuser:jjpass1");
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $cabecalho);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($curl);
    return new Response($response);

    

     }
     
      /**
     * @Route("/testeDB", name="testeDB")
     */
     public function testeDB($url)
     {
        //$url = 'https://jnjjanssend679dev.prod.acquia-sites.com/pantallaapi/pantalla_service?year=2017';
        $data=$this->readJsonUrl($url)->getContent();

        $em = $this->getDoctrine()->getManager();
        $array = json_decode($data, true);
        foreach($array as $row){
        $json_datas = new json_data();
        $json_datas->setEmail($this->validate($row["EMAIL"]));
        $json_datas->setAccountName($this->validate($row["account_name"]));
        $json_datas->setCountry($this->validate($row["Country"]));
        $json_datas->setCity($this->validate($row["City"]));
        $json_datas->setYear($this->validate($row["Year"]));
        $json_datas->setMonth($this->validate($row["Month"]));
        $json_datas->setACycles($this->validate($row["A_Cycles_with_H2O2_Gas_Plasma"]));
        $json_datas->setBCycles($this->validate($row["B_Cycles_with_Ethylene_Oxide"]));
        $json_datas->setCCycles($this->validate($row["C_Cycles_with_Formaldehyde"]));
        $json_datas->setDCycles($this->validate($row["D_Cycles_with_Steam_Sterilization_System"]));
        $json_datas->setECycles($this->validate($row["E_Cycles_with_Vaporized_H2O2"]));
        $json_datas->setATotal($this->validate($row["A_Total_detected_errors_prior_to_sterilization_process"]));
        $json_datas->setBTotal($this->validate($row["B_Total_detected_errors_before_the_distribution_process"]));
        $json_datas->setCTotal($this->validate($row["C_Total_detected_or_reported_errors_after_the_distribution_process"]));
        $json_datas->setEndoEquip($this->validate($row["Endoscopic_equipment"]));
        $json_datas->setEndoRoom($this->validate($row["Endoscopy_Room"]));
        $json_datas->setGenSurg($this->validate($row["General_surgery_trays"]));
        $json_datas->setGenOrtho($this->validate($row["General_orthopedic_instrumentation_sets"]));
        $json_datas->setLaborDel($this->validate($row["Labor_Delivery_Room"]));
        $json_datas->setLoparoscopic($this->validate($row["Laparoscopic_instrumentation_sets"]));
        $json_datas->setMonthlyDet($this->validate($row["Monthly_Detected_Errors"]));
        $json_datas->setNonResp($this->validate($row["Non_Responsive_Chemical_Indicators"]));
        $json_datas->setOpRooms($this->validate($row["Operating_Rooms"]));
        $json_datas->setPositiveBio($this->validate($row["Positive_Biological_Indicators"]));
        $json_datas->setOtherInPat($this->validate($row["Other_in_patient_rooms_or_services"]));
        $json_datas->setSpecialityTrays($this->validate($row["Specialty_trays"]));
        $json_datas->setSterilization($this->validate($row["Sterilization_Loads_Retrieved"]));
        $json_datas->setNumbOph($this->validate($row["Number_of_sets_of_ophthalmic_surgery"]));
        $json_datas->setWorkplaceInj($this->validate($row["Workplace_injuries_and_adverse_events"]));
        $json_datas->setSterilizationLoads($this->validate($row["Sterilization_Loads_Retrieved_from_operating_rooms"]));
        $json_datas->setPantallaId($this->validate($row["pantalla_id"]));
        $em->persist($json_datas);
        $em->flush();
        
     }
     //return new Response("OK");
       
        }

    
        public function validate($dado){
            if(empty($dado) || is_array($dado)){
                return "";
            }
            else{
                return $dado;
            }
        
        }
}

    
        
   
     
    

