<?php
if (!isset($_POST['submit'])) {
    // Display the form with multiple-choice questions
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>CBT Test</title>
        <style>
            /* CSS styling for the CBT test */
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                background: linear-gradient(90deg, #4CAF50, #008CBA); /* Gradient background */
            }

            h2 {
                color: #fff;
                text-align: center;
                margin-top: 20px;
            }

            form {
                max-width: 600px;
                margin: 0 auto;
                padding: 20px;
                background-color: rgba(255, 255, 255, 0.9); /* Semi-transparent white background */
                border-radius: 10px;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); /* Box shadow effect */
            }

            label {
                display: block;
                margin-bottom: 5px;
                color: #333;
            }

            select {
                width: 100%;
                padding: 8px;
                margin-bottom: 10px;
                border: 1px solid #ccc;
                border-radius: 3px;
                box-sizing: border-box;
            }

            input[type="submit"] {
                background-color: #008CBA;
                color: white;
                padding: 10px 15px;
                border: none;
                border-radius: 3px;
                cursor: pointer;
                font-size: 16px;
            }

            input[type="submit"]:hover {
                background-color: #45a049;
            }

            .score {
                text-align: center;
                margin-top: 20px;
                font-size: 18px;
                color: #333;
            }
        </style>
    </head>
    <body>
    <h2>CBT Test</h2>
    <form method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br><br>

        <?php
        $questions = array(
            "What is the capital of France?" => array("Paris", array("London", "Berlin", "Paris", "Rome")),
            "What is the largest mammal in the world?" => array("Blue Whale", array("Elephant", "Giraffe", "Blue Whale", "Hippopotamus")),
            "Which planet is known as the Red Planet?" => array("Mars", array("Venus", "Mars", "Jupiter", "Saturn")),
            // Add more questions here
            "What is the chemical symbol for water?" => array("H2O", array("H2O", "CO2", "O2", "NH3")),
            "Who discovered the theory of relativity?" => array("Albert Einstein", array("Isaac Newton", "Albert Einstein", "Galileo Galilei", "Stephen Hawking")),
            // Add 25 questions like this
            "What is the powerhouse of the cell?" => array("Mitochondria", array("Nucleus", "Golgi Apparatus", "Mitochondria", "Endoplasmic Reticulum")),
            "Who wrote 'To Kill a Mockingbird'?" => array("Harper Lee", array("Harper Lee", "F. Scott Fitzgerald", "Mark Twain", "Ernest Hemingway")),
            "What is the chemical formula for glucose?" => array("C6H12O6", array("H2O", "CO2", "C6H12O6", "NaCl")),
            "What is the hardest natural substance on Earth?" => array("Diamond", array("Diamond", "Quartz", "Tungsten", "Steel")),
            "Who painted the Mona Lisa?" => array("Leonardo da Vinci", array("Pablo Picasso", "Vincent van Gogh", "Leonardo da Vinci", "Michelangelo")),
            "What is the tallest mountain in the world?" => array("Mount Everest", array("Mount Kilimanjaro", "Mount Everest", "K2", "Makalu")),
            "Who invented the telephone?" => array("Alexander Graham Bell", array("Nikola Tesla", "Alexander Graham Bell", "Thomas Edison", "Albert Einstein")),
            "What is the chemical symbol for gold?" => array("Au", array("Ag", "Fe", "Au", "Cu")),
            "Which planet is known as the 'Morning Star' or 'Evening Star'?" => array("Venus", array("Mars", "Venus", "Mercury", "Jupiter")),
            "Who is known as the 'Father of Modern Physics'?" => array("Albert Einstein", array("Isaac Newton", "Galileo Galilei", "Albert Einstein", "Niels Bohr")),
            "Who is the author of 'Romeo and Juliet'?" => array("William Shakespeare", array("Jane Austen", "William Shakespeare", "Charles Dickens", "F. Scott Fitzgerald")),
            "Which country is known as the 'Land of the Rising Sun'?" => array("Japan", array("China", "India", "Japan", "Korea")),
            "What is the smallest bone in the human body?" => array("Stapes", array("Femur", "Stapes", "Tibia", "Fibula")),
            "Who discovered penicillin?" => array("Alexander Fleming", array("Louis Pasteur", "Robert Koch", "Alexander Fleming", "Joseph Lister")),
            "What is the chemical symbol for silver?" => array("Ag", array("Ag", "Au", "Pt", "Hg")),
            "What is the largest planet in our solar system?" => array("Jupiter", array("Mars", "Jupiter", "Saturn", "Neptune")),
            "What is the study of fossils called?" => array("Paleontology", array("Anthropology", "Paleontology", "Archaeology", "Geology")),
            "What is the currency of Japan?" => array("Yen", array("Yuan", "Yen", "Dollar", "Euro")),
            "Who is known as the 'Father of Computers'?" => array("Charles Babbage", array("Alan Turing", "John von Neumann", "Charles Babbage", "Tim Berners-Lee")),
        );

        foreach ($questions as $question => $data) {
            echo "<label>$question:</label>";
            echo "<select name='" . str_replace(array(' ', "'"), array('_', ''), strtolower($question)) . "' required>";
            foreach ($data[1] as $option) {
                echo "<option value='$option'>$option</option>";
            }
            echo "</select><br><br>";
        }
        ?>
        <input type="submit" name="submit" value="Submit Test">
    </form>
    </body>
    </html>
    <?php
} else {
    // Process User's Information
    $name = $_POST['name'];

    echo "<h3>Welcome, $name!</h3>";

    // Process User's Answers
    $questions = array(
        "What is the capital of France?" => "Paris",
        "What is the largest mammal in the world?" => "Blue Whale",
        "Which planet is known as the Red Planet?" => "Mars",
        // Add more correct answers here
        "What is the chemical symbol for water?" => "H2O",
        "Who discovered the theory of relativity?" => "Albert Einstein",
        // Add 25 questions like this
        "What is the powerhouse of the cell?" => "Mitochondria",
        "Who wrote 'To Kill a Mockingbird'?" => "Harper Lee",
        "What is the chemical formula for glucose?" => "C6H12O6",
        "What is the hardest natural substance on Earth?" => "Diamond",
        "Who painted the Mona Lisa?" => "Leonardo da Vinci",
        "What is the tallest mountain in the world?" => "Mount Everest",
        "Who invented the telephone?" => "Alexander Graham Bell",
        "What is the chemical symbol for gold?" => "Au",
        "Which planet is known as the 'Morning Star' or 'Evening Star'?" => "Venus",
        "Who is known as the 'Father of Modern Physics'?" => "Albert Einstein",
        "Who is the author of 'Romeo and Juliet'?" => "William Shakespeare",
        "Which country is known as the 'Land of the Rising Sun'?" => "Japan",
        "What is the smallest bone in the human body?" => "Stapes",
        "Who discovered penicillin?" => "Alexander Fleming",
        "What is the chemical symbol for silver?" => "Ag",
        "What is the largest planet in our solar system?" => "Jupiter",
        "What is the study of fossils called?" => "Paleontology",
        "What is the currency of Japan?" => "Yen",
        "Who is known as the 'Father of Computers'?" => "Charles Babbage",
    );

    $score = 0;
    foreach ($questions as $question => $answer) {
        $user_answer = $_POST[str_replace(array(' ', "'"), array('_', ''), strtolower($question))];
        $correct_answer = $answer;

        echo "<p><strong>$question</strong><br>";
        echo "Your Answer: $user_answer<br>";
        echo "Correct Answer: $correct_answer</p>";

        if (strtolower($user_answer) === strtolower($correct_answer)) {
            $score++;
        }
    }

    // Calculate and display score
    $total_questions = count($questions);
    echo "<p class='score'>Your Score: $score out of $total_questions</p>";
}
?>
