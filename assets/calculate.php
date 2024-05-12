<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get input values
    $height = isset($_POST['height']) ? $_POST['height'] : '';
    $weight = isset($_POST['weight']) ? $_POST['weight'] : '';
    $sex = isset($_POST['sex']) ? $_POST['sex'] : '';
    $age = isset($_POST['age']) ? $_POST['age'] : '';
    $activityFactor = isset($_POST['activity-factor']) ? $_POST['activity-factor'] : '';

    // Validate input
    $errors = [];
    if (!is_numeric($height) || $height <= 0) {
        $errors[] = "Tinggi harus berupa angka yang lebih besar dari 0.";
    }
    if (!is_numeric($weight) || $weight <= 0) {
        $errors[] = "Berat harus berupa angka yang lebih besar dari 0.";
    }
    if (!is_numeric($age) || $age <= 0) {
        $errors[] = "Usia harus berupa angka yang lebih besar dari 0.";
    }

    if (empty($errors)) {
        // Calculate BMI
        $bmi = $weight / pow($height / 100, 2);

        // Determine weight status based on BMI
        if ($bmi < 18.5) {
            $weightStatus = "Underweight (Kurus)";
        } elseif ($bmi >= 18.5 && $bmi < 24.9) {
            $weightStatus = "Normal Weight (Berat Badan Normal)";
        } elseif ($bmi >= 24.9 && $bmi < 29.9) {
            $weightStatus = "Overweight (Kelebihan Berat Badan)";
        } else {
            $weightStatus = "Obese (Obesitas)";
        }

        // Display result
        echo "<div id='bmi-result'>";
        echo "<p>BMI Anda: " . number_format($bmi, 2) . "</p>";
        echo "<p>Status Berat Badan: " . $weightStatus . "</p>";
        echo "</div>";
    } else {
        echo "<div id='bmi-result'>";
        echo "<p>" . implode("<br>", $errors) . "</p>";
        echo "</div>";
    }
}
