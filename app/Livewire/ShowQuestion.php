<?php

namespace App\Livewire;
use Illuminate\Support\Facades\Http;

use Livewire\Component;

class ShowQuestion extends Component
{
    public  $quizData;   //The quiz questions and answers
    public $counter = 0; //The current question number
    public $questioncount=0; // The total number of questions
    public $feedbackMessage = null; //Feedback for the current answer
    public $progress = 0; //score
    public $correctAnswers = 0;   // Number of correct answer
    public $selectedOption;   //The answer selected



    public function mount($quizData)
    {
       // Initialize the quiz data and reset user progress and selected options when the quiz starts
        $this->quizData = $quizData;
        $this->selectedOption = null;
        $this->progress = 0;
    }

    public function render()
    {
        //Prepare the data for display and calculate the total number of questions

        $data = $this->quizData;
        $this->questioncount = count($data);
        return view('livewire.show-question',compact( 'data'));

    }
    public function submitAnswer($correctAnswer)
    {
        //Check if the user has selected an answer
        if ($this->selectedOption === null) {
            session()->flash('error', 'Please select an option before submitting.');
            return;
        }

       // Compare the selected answer with the correct one
        if (trim($correctAnswer) === trim($this->selectedOption)) {
            $this->feedbackMessage = 'Correct! Well done.';
            $this->correctAnswers++;
        } else {
            $this->feedbackMessage = 'Incorrect! The correct answer is: ' . $correctAnswer;
        }
         //Calculate the progress
         $this->progress = ($this->correctAnswers / $this->questioncount) * 100;
   
    }
    public function nextQuestion()
    {
        $this->feedbackMessage = null; 
        $this->selectedOption = null; 

        //Move to the next question or end the quiz if all questions are answered
        if ($this->counter < $this->questioncount - 1) {
            $this->counter++; 
        } else {
            session()->flash('success', 'You completed the quiz with ' . round($this->progress) . '% correct answers!');
            return redirect('/'); 
        }
    }

     // This function resets the quiz to the beginning
    public function resetQuiz()
    {
        $this->counter = 0;
        $this->progress = 0;
        $this->correctAnswers = 0;
        $this->selectedOption = null;
        $this->feedbackMessage = null;

        //redirect to home
        return redirect()->route('home');
    }
}
