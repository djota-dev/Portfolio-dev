<?php
// Dirección de correo electrónico que recibirá los mensajes
$receiving_email_address = 'contact@example.com'; // Cambia esta dirección por la tuya

// Incluye el archivo PHP de la librería de formularios si existe
if (file_exists($php_email_form = __DIR__ . '/../vendor/php-email-form/php-email-form.php')) {
  include($php_email_form);
} else {
  die('¡No se pudo cargar la librería de formularios!');
}

// Crear una nueva instancia del formulario
$contact = new PHP_Email_Form();
$contact->ajax = true; // Habilitar AJAX si es necesario

// Configura los detalles del correo
$contact->to = $receiving_email_address;
$contact->from_name = $_POST['name'];
$contact->from_email = $_POST['email'];
$contact->subject = $_POST['subject'];

// Agregar los mensajes de cada campo del formulario
$contact->add_message($_POST['name'], 'Nombre');
$contact->add_message($_POST['email'], 'Email');
$contact->add_message($_POST['message'], 'Mensaje', 10);

// Enviar el correo
echo $contact->send();
