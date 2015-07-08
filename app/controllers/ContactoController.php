<?php

class contactoController extends BaseController {

	public function postMail()
	{
		$datos = Input::all();

		$datos_email = array(
			'nombre' => $datos['nombre'],
			'email' => $datos['email'],
			'comentario' => $datos['comment']
		);

		$fromEmail = $datos['email']; 
		$fromName = $datos['nombre'];
		Mail::send('emails.contacto', $datos_email, function($message) use ($fromName, $fromEmail){
			$message->from($fromEmail, $fromName);
			$to = array('');
			foreach ($to as $para) {		
				$message->to($para);
			}
			$message->subject('Consultas Sistec');
		});
		
		$mensaje['icon'] = 'send';
		$mensaje['class'] = 'success';
		$mensaje['mensaje'] = 'Su mensaje ha sido enviado con éxito. Será revizado y contestado por nuestro personal';

		return View::make('layout')->with('mensaje', $mensaje);
	}

}