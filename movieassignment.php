<?php

// Movie Database
$movies = array(
    "The Shawshank Redemption" => "Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.",
    "The Godfather" => "The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.",
    "The Dark Knight" => "When the menace known as the Joker wreaks havoc and chaos on the people of Gotham, Batman must accept one of the greatest psychological and physical tests of his ability to fight injustice.",
    // Add more movies if needed
);

// Collect User's Information
if (!isset($_POST['review'])) {
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Movie Reviewer</title>
        <style>
            body {
                background-color: lightgrey;
                font-family: Arial, sans-serif;
            }
            h2 {
                color: blue;
                font-size: 24px;
            }
            form {
                background-color: white;
                padding: 20px;
                border-radius: 10px;
            }
            label {
                font-weight: bold;
                margin-bottom: 5px;
                color: black;
            }
            select, textarea {
                padding: 5px;
                margin-bottom: 10px;
                width: 100%;
            }
            input[type=submit] {
                background-color: #4CAF50;
                color: white;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
            }
            .result {
                color: blue;
                font-weight: bold;
                font-size: 18px;
            }
        </style>
    </head>
    <body>
        <h2>Movie Reviewer</h2>
        <form method="post">
            <label for="movie">Select a movie:</label>
            <select name="movie">
                <?php foreach ($movies as $title => $description) { ?>
                    <option value="<?php echo $title; ?>"><?php echo $title; ?></option>
                <?php } ?>
            </select><br><br>
            <label for="review">Write your review:</label><br>
            <textarea name="review" rows="4" cols="50" required></textarea><br><br>
            <input type="submit" value="Submit Review">
        </form>
    </body>
    </html>
    <?php
} else {
    // Process Review
    $selected_movie = $_POST['movie'];
    $review = $_POST['review'];

    // Save the review in a file or database
    // For demonstration purposes, let's just display the review
    echo "<div class='result'>Review Submitted for $selected_movie: $review</div>";
}

?>
