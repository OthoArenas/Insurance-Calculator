<?php

function insurance_form() {
    ob_start();
    get_template_part('insurance-form');
    return ob_get_clean();   
} 
add_shortcode( 'formCalc_shortcode', 'insurance_form' );

function insurance_widget_form() {
    ob_start();
    get_template_part('insurance-widget-form');
    return ob_get_clean();   
} 
add_shortcode( 'formCalc_widget_shortcode', 'insurance_widget_form' );

function insurance_calc(){

    if(isset($_POST["submit"]) || isset($_POST['send'])){
        $name = $_POST['form-name'];
        $email = $_POST['form-email'];
        $phone = $_POST['form-phone'];
        $address = $_POST['form-address'];
        $state = $_POST['form-state'];
        $city = $_POST['form-city'];
        $zc = $_POST['form-zc'];
        $age = $_POST['form-age'];
        $gender = $_POST['form-gender'];
        $ocupation = $_POST['form-ocupation'];
        $initial_value = 1000;
        $isSmoker = 0;
        $isDrunkard = 0;
        $isDriver = 0;
        $isDesease = 0;
        $ageCharge = 0;
        $genderCharge = 0;
    
        foreach ($_POST['conditions'] as $condition) {
            $isSmoker = ($condition == 'Smoker' || $isSmoker != 0 ? 0.15*$initial_value : 0);
            $isDrunkard = ($condition == 'Drunkard' || $isDrunkard != 0 ? 0.20*$initial_value : 0);
            $isDriver = ($condition == 'Driver' || $isDriver != 0 ? 0.05*$initial_value : 0);
            $isDesease = ($condition == 'Chronic Disease' || $isDesease != 0 ? 0.30*$initial_value : 0);
        }
    
        $ageCharge = ($age>=40 ? 0.20*$initial_value : 0);
        $genderCharge = ($gender=="male" ? 0.20*$initial_value : 0.10*$initial_value);
        
        echo '<h3>Hi, '. $name .'!</h3>';
        echo '<h4>Personal Data: </h4>';
        echo '<ul>
        <li>Email: '.$email.'</li>
        <li>Phone Number: '.$phone.'</li>
        <li>Address: '.$address.'</li>
        <li>State: '.$state.'</li>
        <li>City: '.$city.'</li>
        <li>Zip Code: '.$zc.'</li>
        </ul>';
        echo '<h4>Acording to the data you chose: </h4>';
        echo '<ul>
        <li>Age: '.$age.'</li>
        <li>Gender: '.$gender.'</li>
        <li>Ocupation: '.$ocupation.'</li>';
        if(!empty($_POST["conditions"])){
            echo '<h4>Conditions: </h4>';
            foreach ($_POST['conditions'] as $condition) {
                echo '<li>'.$condition.'</li>';
            }
        }else{
            echo '<h4>You didn\'t select any option</h4>';
        }
    
        echo '</ul>';
    
        echo '<h4>You must pay: </h4>';
    
        $totalValue = $initial_value + $isDesease + $isDriver + $isDrunkard + $isSmoker + $ageCharge + $genderCharge;
    
        echo '<h3>$ '.number_format($totalValue,2,'.',',').' USD</h3>';
    }
}

if(isset($_POST['submit'])){
    add_filter( 'the_content' , 'insurance_calc');
}
elseif(isset($_POST['send'])){
    add_filter( 'widget_text' , 'insurance_calc');
}
?>