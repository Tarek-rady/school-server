
    <div class="row setup-content {{ $currentStep != 3 ? 'displayNone' : '' }}" id="step-3">
            @if ($currentStep != 3)
           <div style="display: none" class="row setup-content" id="step-3">
               @endif

               <div class="col-xs-12">

                   <div class="col-md-12"><br>
                      <h5>هل انت متاكد من حفظ هذه البيانات ؟ </h5>

                       <br>



                       <button class="btn btn-danger btn-sm nextBtn btn-lg pull-right" type="button"
                               wire:click="back(2)">السابق</button>

                            @if($updateMode)

                            <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" wire:click="editForm"
                                    type="button">تعديل البيانات
                            </button>

                            @else

                            <button class="btn btn-success btn-sm btn-lg pull-right" wire:click="submitForm"
                            type="button">تاكيد</button>

                            @endif

                   </div>
               </div>
           </div>



   </div>
