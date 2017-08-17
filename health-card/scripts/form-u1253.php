<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2014.1.6
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Envío de Formulario Contacto',
	'heading' => 'Envío de nuevo formulario',
	'success_redirect' => '',
	'email' => array(
		'from' => 'info@healthcardelite.com',
		'to' => 'info@healthcardelite.com'
	),
	'fields' => array(
		'custom_U1259' => array(
			'type' => 'string',
			'label' => 'Nombre',
			'required' => true,
			'errors' => array(
				'required' => 'El campo \'Nombre\' es obligatorio.'
			)
		),
		'Email' => array(
			'type' => 'email',
			'label' => 'Correo electrónico',
			'required' => true,
			'errors' => array(
				'required' => 'El campo \'Correo electrónico\' es obligatorio.',
				'format' => 'El campo \'Correo electrónico\' contiene un correo electrónico no válido.'
			)
		),
		'custom_U1255' => array(
			'type' => 'string',
			'label' => 'Programe su cita',
			'required' => false,
			'errors' => array(
			)
		)
	)
);

process_form($form);
?>
