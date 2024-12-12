<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class QuizController extends Controller
{
    
        public function index()
        {
            try { 
            // Fetche a list of countries and their capitals from an online API
            $response = Http::get('https://countriesnow.space/api/v0.1/countries/capital');
            $countries = $response->json()['data'];
    
            // Create an empty array to store the questions for the quiz
            $quizData = [];
    
            //Loop 10 times to generate 10 questions
            for ($i = 0; $i < 10; $i++) {

                // Choose a random country from the list and get its correct capital
                $randomCountry = $countries[array_rand($countries)];
                $correctCapital = $randomCountry['capital'];
    
                // Create two incorrect options by choosing random capitals that are not the correct one
                $incorrectOptions = [];
                while (count($incorrectOptions) < 2) {
                    $randomCapital = $countries[array_rand($countries)]['capital'];
                    if ($randomCapital !== $correctCapital && !in_array($randomCapital, $incorrectOptions)) {
                        $incorrectOptions[] = $randomCapital;
                    }
                }
    
                // Combine the correct answer with the incorrect ones and shuffle them randomly
                $options = $incorrectOptions;
                $options[] = $correctCapital;
                shuffle($options);
    
              // Add 3 choices including the correct choice and the country name to the quizData array
                $quizData[] = [
                    'country' => $randomCountry['name'], 
                    'correct' => $correctCapital,        
                    'choices' => $options,             
                ];
            }
    
            // Shuffle the quiz questions so they are in a different order each time
            shuffle($quizData);
            return view('quiz', compact('quizData'));

        } catch (\Exception $e) {
            // Redirect to home page and display an error message
            return redirect()->route('home')->with('error', 'An error occurred . Please try again later.');
        }
        }
  
    
}
