<div>

    @if (!empty($successMessage))
        <div class="alert alert-success" id="success-alert">
            <button type="button" class="close" data-dismiss="alert">x</button>
            {{ $successMessage }}
        </div>
    @endif


    @if($show_table)
         @include('livewire.show_table')

     @else
     <button class="btn btn-success btn-sm btn-lg pull-right" wire:click="showform" type="button"> قائمه اولياء الامور</button><br><br>

            <div class="stepwizard">


                 {{-- step 1 --}}

                <div class="stepwizard-row setup-panel">
                    <div class="stepwizard-step">
                        <a href="#step-1" type="button"
                           class="btn btn-circle {{ $currentStep != 1 ? 'btn-default' : 'btn-success' }}">1</a>
                        <p>معلومات الاب</p>
                    </div>


                    {{-- step 2 --}}

                    <div class="stepwizard-step">
                        <a href="#step-2" type="button"
                           class="btn btn-circle {{ $currentStep != 2 ? 'btn-default' : 'btn-success' }}">2</a>
                        <p>معلومات الام</p>
                    </div>

                     {{-- step 3 --}}

                    <div class="stepwizard-step">
                        <a href="#step-3" type="button"
                           class="btn btn-circle {{ $currentStep != 3 ? 'btn-default' : 'btn-success' }}"
                           disabled="disabled">3</a>
                        <p>المعلومات</p>
                    </div>


                </div>
            </div>

            @include('livewire.father_form')
            @include('livewire.form_mother')
            @include('livewire.information')


            @endif
