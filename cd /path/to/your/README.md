Quiz App

This is a quiz website to help users learn the capital cities of the world and is built using Laravel and Livewire


Features

Randomly select a country and show 3 capital city options.
Users can select one option as their answer.
Provide feedback if the answer is correct or incorrect.
Display the correct answer if the user’s answer is wrong.
Track the user’s progress.
Allow users to continue to the next question or exit the quiz.
Fully responsive for desktop and mobile devices




Installation and Setup

1 - Download the ZIP file
2-  Navigate to the Project Directory: cd quiz-app
3 - Install Dependencies : composer install
4 - Create the .env File: Copy the .env.example file and rename it to .env
5-  Generate the Application Key: php artisan key:generate
6 - Start the Application: php artisan serve
7 - Open your browser and go to http://127.0.0.1:8000



API Information

This app uses the following API to fetch countries and capital cities data:
Endpoint: https://countriesnow.space/api/v0.1/countries/capital


How to Use

Open the app in your browser.
Click the (Get Started) button to begin the quiz.
Answer the question by selecting one option.
Click the Submit button to check your answer.
See feedback (correct or incorrect) and the correct answer.
Click Continue to move to the next question.
Exit the quiz anytime by clicking the Exit Quiz button.
