Jaime S D
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nachete extends CI_Controller {
	
	public function index(){
		@$id = $this->input->get('id');
		$this->load->model('Persona');
		//$this->Persona->insertar();
		// $this->Persona->actualizar('id');
		$data['persona'] = $this->Persona->recuperar();

		$this->load->view('nacheteview',$data);	
	}

	

	public function ver_persona(){
		@$id = $this->input->get('id');

		$this->load->model('Persona');

		$data['persona'] = $this->Persona->recuperar_una($id);
		/*echo'<pre>';
		print_r($data);
		die;*/
		$this->load->view('personaview',$data);

	}
	public function update(){
		$this->load->model("Persona");
		
	}
	



}
