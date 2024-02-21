<?php
function generate_random_password($length){
  // Stringa contenente tutti i caratteri per la password
  $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+{}[]|;:,.<>?';
  $password = '';
  // Ottengo la lunghezza della stringa per iterare
  $characters_length = strlen($characters);
  // Genera la password casuale
  for ($i = 0; $i < $length; $i++) {
    // Ottengo un carattere casuale e lo concateno alla stringa
    $password .= $characters[rand(0, $characters_length - 1)];
  }
  // Restituisci la password generata
  return $password;
}
