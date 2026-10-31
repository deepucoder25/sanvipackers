<?php
$htmlcontent = '';
$htmlcontent1 = '';
$htmlcontent2 = '';
// bihar 
if (strtolower($city) == "") {
   $htmlcontent = "
        
   ";
   $htmlcontent1 = "
   
   ";
   $htmlcontent2 = "
   
   ";
} else {
   $htmlcontent = "<p class='pm-cd-lead-text mb-3'>
                        Looking for trusted, certified, and affordable shifting services in <strong>$cityName, $stateName</strong>? 
                        <strong>$company3</strong> is your comprehensive packing and moving partner. Whether you are shifting your home within $cityName or moving long-distance across India, our dedicated local team guarantees 5-layer bubble packaging, containerized transit, and punctual doorstep delivery.
                    </p>
   ";

   $htmlcontent1 = "
   ";

    $htmlcontent2 = "
    ";

   $htmlcontent3 = "
   ";
} 