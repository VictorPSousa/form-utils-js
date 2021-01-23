<?php

$date = $_POST['nasc'];

valid_date($date);
/**
      * Verifica se a data informada é valida, formato padrão dd/mm/yyyy
      * caso precise validar em outros formatos adicione nessa função
      * ex: mm/yyyy, mm/yy, etc
      * @param     string
      * @return     bool
      */
     function valid_date($date, $format = 'dd/mm/yyyy')
     {

         $dateArray = explode("/", $date); // slice the date to get the day, month and year separately

         $d = 0;
         $m = 0;
         $y = 0;
         if (sizeof($dateArray) == 3) {
             if (is_numeric($dateArray[0]))
                 $d = $dateArray[0];
             if (is_numeric($dateArray[1]))
                 $m = $dateArray[1];
             if (is_numeric($dateArray[2]))
                 $y = $dateArray[2];
         }

         return checkdate($m, $d, $y) == 1;
     }

     // ---
  
  // --------------------------------------------------------------------

     /**
      * Verifica se a hora informada é valida, formato padrão HH:ii
      * caso precise validar em outros formatos adicione nessa função
      * 
      * @param     string
      * @return     bool
      */
     function valid_hour($hour)
     {
   if(preg_match("/^([0-1][0-9]|[2][0-3]):[0-5][0-9]$/", $hour)){
   return TRUE;
  }else{
   return FALSE;
  }

     }

?>