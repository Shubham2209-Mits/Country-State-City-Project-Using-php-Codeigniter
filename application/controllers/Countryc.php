<?php 
class Countryc extends CI_Controller{

    public function create(){
        $this->load->model('Model_new');
        $countries= $this->Model_new->Getcountries();


        $data=[];
        $data['countries']=$countries;
        $this->load->view('countrydrop',$data);


    }

    public function getstates(){
        $country_id = $this->input->post('country_id');
        $this->load->model('Model_new');
        $states = $this->Model_new->GetStatesofcountry($country_id);
        // echo "<pre>";
        // print_r($states);
    
        $data=[];
        $data['states']=$states;
        $stateString = $this->load->view('states-select',$data,true);
        $response['states']=$stateString;
        echo json_encode($response);


    }

    public function getcities(){
        $state_id = $this->input->post('state_id');
        $this->load->model('Model_new');
        $cities = $this->Model_new->GetCitiesofstate($state_id);
        // echo "<pre>";
        // print_r($cities);
    
        $data=[];
        $data['cities']=$cities;
        $citiesString = $this->load->view('citys-select',$data,true);
        $response['cities']=$citiesString;
        echo json_encode($response);


    }

}



?>