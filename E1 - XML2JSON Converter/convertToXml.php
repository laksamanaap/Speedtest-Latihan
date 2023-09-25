<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the XML input from the textarea
    $xmlInput = $_POST["xml_input"];
    
    // Check if the input is not empty
    if (!empty($xmlInput)) {
        // Load the XML data
        $xml = simplexml_load_string($xmlInput);
        
        if ($xml !== false) {
            // Convert XML to JSON
            $json = json_encode($xml);
            
            if ($json !== false) {
                // Set the content type to JSON
                header('Content-Type: application/json');
                
                // Output the JSON data
                echo $json;
                
                // Call the JavaScript function to display the result
                echo '<script>convertJson(' . $json . ')</script>';
            } else {
                echo "Error converting XML to JSON.";
            }
        } else {
            echo "Invalid XML input.";
        }
    } else {
        echo "Please enter XML data.";
    }
}
?>