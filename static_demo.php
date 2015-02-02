<?php


function static_function_demo() {
    
    static $antall_ganger_jeg_har_kalt_denne_funksjonen = 0;
    
    $antall_ganger_jeg_har_kalt_denne_funksjonen++;
    
    echo "Denne funksjonen blir kalt for gang nummer: $antall_ganger_jeg_har_kalt_denne_funksjonen \n";
    
    
    
}


for($i = 0; $i < 10; $i++) {
    
    
    static_function_demo();
    
}

