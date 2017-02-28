<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Persona extends CI_Model {

	public function insertar(){
		$data = array("id" => "Hagrid", "nom" => "juan", "cognom" => "diaz", "edat" => "36");                                                                   
		$data_string = json_encode($data);                                                                                   

		$ch = curl_init('https://restito.restlet.net/v1/personas');                                                                      
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");      
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);


		// Will return the response, if false it print the response
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                               
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
			'Content-Type: application/json',                                                                                
			'Content-Length: ' . strlen($data_string))                                                                       
		);                                                                                                                   

		$result = curl_exec($ch);
	}

	public function actualizar(){
		$datos=$this->recuperar_una($this->input->get("id"));
		print_r($datos);
		$data = array("id" =>@$datos["id"] , "nom" =>@$datos["nom"], "cognom" => @$datos["cognom"], "edat" => @$datos["edat"]);                                                                   
		$data_string = json_encode($data);                                                                                   

		$ch = curl_init('https://restito.restlet.net/v1/personas'.$id);                                                                      
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");      
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);


		// Will return the response, if false it print the response
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                               
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
			'Content-Type: application/json',                                                                                
			'Content-Length: ' . strlen($data_string))                                                                       
		);                                                                                                                   

		$result = curl_exec($ch);
	}

	public function recuperar(){

		$url='https://restito.restlet.net/v1/personas';
		$ch = curl_init($url);
		// Disable SSL verification
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);


		// Will return the response, if false it print the response
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		// Set the url
		curl_setopt($ch, CURLOPT_URL,$url);
		// Execute
		$result=curl_exec($ch);
		// Closing
		curl_close($ch);

		//Decode
		$result=json_decode($result, true);
		
		return $result;
	}

	public function recuperar_una($id){
		$url='https://restito.restlet.net/v1/personas/'.$id;
		//  Initiate curl
		$ch = curl_init();
		// Disable SSL verification
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		/*if ($this->input->get("action")=="editar") {
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
		}else{

		}*/
		// curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");  
		//$data = array("name" => "Hagrid", "age" => "36");    SOLO PARA EL PUT                                                                
		//$data_string = json_encode($data);
		//curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string); 
		// curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");    
		// Will return the response, if false it print the response
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		// Set the url
		curl_setopt($ch, CURLOPT_URL,$url);
		// Execute
		$result=curl_exec($ch);
		// Closing
		curl_close($ch);

		//Decode
		$result=json_decode($result, true);
		return $result;
	}
}

?>