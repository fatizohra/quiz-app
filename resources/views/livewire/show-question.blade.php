<div>
       {{-- Show the questions number --}}
        <div class="mb-4">
            <h6>Question {{ $counter + 1 }} of {{ $questioncount }}</h6>
            <p>Questions Remaining: {{ $questioncount - ($counter + 1) }}</p>
        </div>
    <div class="card card-statistics mb-30">
        @include('includes.alerts.errors')
        <div class="card-body">
           {{-- Show the current question --}}
            <h5 class="card-title">
                What is the capital of {{ $data[$counter]['country'] }}?
            </h5>

           {{-- Show the answer options --}}
            @foreach($data[$counter]['choices'] as $index => $choice)
            @if(!empty($choice))
            <div class="custom-control custom-radio">
                <input 
                    type="radio" 
                    id="customRadio{{ $index }}" 
                    name="selectedOption" 
                    value="{{ $choice }}" 
                    class="custom-control-input" 
                    wire:model="selectedOption" 
                    {{ $feedbackMessage ? 'disabled' : '' }}>
                <label 
                    class="custom-control-label" 
                    for="customRadio{{ $index }}">
                    {{ $choice }}
                </label>
            </div>
            @endif
        @endforeach
           
        </div>
    </div>

    <div class="row">
        <div class="col-md-3 col-sm-12">
                {{-- Exit Button --}}
            <div class="mt-4">
            <a 
                href="#"
                wire:click.prevent="resetQuiz"
                class="btn btn-secondary">
                Exit Quiz
            </a>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
                {{-- Show feedback after the user answers --}}                 
                   @if($feedbackMessage)
                   <div class="mt-4 text-white {{ $feedbackMessage === 'Correct! Well done.' ? 'bg-success' : 'bg-danger' }}"  style="padding: 10px;">
                        <strong>{{ $feedbackMessage }}</strong>
                   </div>
               @endif
   
        </div>
        
        <div class="col-md-3 col-sm-12 mb-3">
           {{-- Show Submit / Continue buttons --}}
             <div class="mt-4">
                @if($feedbackMessage === null)
                    {{-- Submit Button --}}
                    <button 
                        wire:click="submitAnswer('{{ $data[$counter]['correct'] }}')" 
                        type="button" 
                        class="btn btn-primary" >
                        Submit
                    </button>
                @else
                    {{-- Continue Button --}}
                    <button 
                        wire:click="nextQuestion" 
                        type="button" 
                        class="btn {{ $feedbackMessage === 'Correct! Well done.' ? 'btn-success' : 'btn-danger' }}">

                        {{-- class="btn btn-secondary"> --}}
                        Continue
                    </button>
                @endif
            </div>
        </div>
    </div>
</div>
