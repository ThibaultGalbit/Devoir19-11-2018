<?php
class C_region extends CI_Controller
{
    public function index()
    {
        $this->load->view('login');  
    }
    public function connexion()
    { 
        $login = $this->input->post('txtLogin');
        if($login === "Girard")
        {
            $this->load->model('M_region');
            $data['lesRegions'] = $this->M_Region->getAllRegion();
            $this->load->view('lst_Region',$data);
        }
        else
        { 
            $this->load->model('M_Region1');
            $data['bourgogne'] = $this->M_Region1->getOneRegion();
            $this->load->view('lst_Region1',$data);
        }     
              
    }
   }
  
?>