@if($currentStep != 2)
    <div style="display: none" class="row setup-content" id="step-2">
        @endif


        <div class="col-xs-12">
            <div class="col-md-12">
                <br>

                <div class="form-row">
                    <div class="col">
                        <label for="title">  اسم الام باللغه العربيه</label>
                        <input type="text" wire:model="name_mother" class="form-control">
                        @error('name_mother')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="col">
                        <label for="title">اسم الام باللغه الانجليزيه</label>
                        <input type="text" wire:model="name_mother_en" class="form-control">
                        @error('name_mother_en')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                </div><br>

                <div class="form-row">
                    <div class="col-md-3">
                        <label for="title">وظيفه الام</label>
                        <input type="text" wire:model="Job_mother" class="form-control">
                        @error('Job_mother')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="col">
                        <label for="title">رقم الهويه</label>
                        <input type="text" wire:model="National_ID_mother" class="form-control">
                        @error('National_ID_mother')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="col">
                        <label for="title">رقم الجواز</label>
                        <input type="text" wire:model="Passport_ID_mother" class="form-control">
                        @error('Passport_ID_mother')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col">
                        <label for="title">رقم التليفون</label>
                        <input type="text" wire:model="Phone_number_mother" class="form-control">
                        @error('Phone_number_mother')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                </div><br>


                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity"> جنسيه الام </label>
                        <select class="custom-select my-1 mr-sm-2" wire:model="nationalite_mother_id">
                            <option selected>اختر من القائمه...</option>
                            @foreach($nationalites as $nationalit)
                                <option value="{{$nationalit->id}}">{{$nationalit->name}}</option>
                            @endforeach
                        </select>
                        @error('nationalite_mother_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="form-group col">
                        <label for="inputState"> فصيله الدم </label>
                        <select class="custom-select my-1 mr-sm-2" wire:model="blood_mother_id">
                            <option selected>اختر من القائمه...</option>
                            @foreach($bloods as $blood)
                                <option value="{{$blood->id}}">{{$blood->name}}</option>
                            @endforeach
                        </select>
                        @error('blood_mother_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>



                    <div class="form-group col">
                        <label for="inputZip"> ديانه الام </label>
                        <select class="custom-select my-1 mr-sm-2" wire:model="religion_mother_id">
                            <option selected>اختر من القائمه...</option>
                            @foreach($religions as $religion)
                                <option value="{{$religion->id}}">{{$religion->name}}</option>
                            @endforeach
                        </select>
                        @error('religion_mother_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div><br>

                <button class="btn btn-danger btn-sm nextBtn btn-lg pull-right" type="button" wire:click="back(1)">
                    السابق
                </button>


                @if($updateMode)
                <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" wire:click="secondSteptepSubmit_edit"
                        type="button">التالي
                </button>

                @else

                  <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="button"  wire:click="secondStepSubmit">
                   التالي</button>

                   @endif



            </div>
        </div>
    </div><br><br>

