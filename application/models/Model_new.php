<?php 

class Model_new extends CI_Model{
    public function Getcountries(){
        $countries = $this->db->get('country_list')->result_array();
        return $countries;
    }
    public function GetStatesofcountry($country_id){
        $this->db->where('country_id',$country_id);
        $states = $this->db->get('state_list')->result_array();
        return $states;
    }

    public function GetCitiesofstate($state_id){
        $this->db->where('state_id',$state_id);
        $cities = $this->db->get('city_list')->result_array();
        return $cities;
    }
}

?>