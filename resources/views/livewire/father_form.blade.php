
@if($currentStep != 1)
    <div style="display: none" class="row setup-content" id="step-1">
        @endif


        <div class="col-xs-12">
            <div class="col-md-12">
                <br>


                <div class="form-row">
                    <div class="col">
                        <label for="title">الايميل</label>
                        <input type="email" wire:model="Email"  class="form-control">
                        @error('Email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="col">
                        <label for="title">كلمه السر</label>
                        <input type="password" wire:model="password" class="form-control" >
                        @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-row">

                    <div class="col">
                        <label for="title">اسم الاب باللغه العربيه</label>
                        <input type="text" wire:model="name_father" class="form-control" >
                        @error('name_father')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="col">
                        <label for="title">اسم الاب باللغه الانجليزيه</label>
                        <input type="text" wire:model="name_father_en" class="form-control" >
                        @error('name_father_en')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                </div>

                <div class="form-row">
                    <div class="col-md-3">
                        <label for="title">وظيفه الاب</label>
                        <input type="text" wire:model="Job_father" class="form-control">
                        @error('Job_father')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="col">
                        <label for="title">رقم الهويه</label>
                        <input type="text" wire:model="National_ID_Father" class="form-control">
                        @error('National_ID_Father')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col">
                        <label for="title">رقم الجواز</label>
                        <input type="text" wire:model="Passport_ID_Father" class="form-control">
                        @error('Passport_ID_Father')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col">
                        <label for="title">رقم التليفون</label>
                        <input type="text" wire:model="Phone_number" class="form-control">
                        @error('Phone_number')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                </div>


                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity"> جنسيه الاب </label>
                        <select class="custom-select my-1 mr-sm-2" wire:model="nationalite_father_id">
                            <option selected>اختر من القائمه...</option>

                             @foreach($nationalites as $nationalite)
                                <option value="{{$nationalite->id}}">{{$nationalite->name}}</option>
                            @endforeach

                        </select>
                        @error('nationalite_father_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="form-group col">
                        <label for="inputState"> فصيله دم الاب </label>
                        <select class="custom-select my-1 mr-sm-2" wire:model="blood_father_id">
                            <option selected>اختر من القائمه...</option>
                            @foreach($bloods as $blood)
                                <option value="{{$blood->id}}">{{$blood->name}}</option>
                            @endforeach
                        </select>
                        @error('blood_father_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group col">
                        <label for="inputZip">ديانه الاب</label>
                        <select class="custom-select my-1 mr-sm-2" wire:model="religion_father_id">
                            <option selected> اختر من القائمه ...</option>
                             @foreach($religions as $religion)
                                <option value="{{$religion->id}}">{{$religion->name}}</option>
                            @endforeach
                        </select>
                        @error('religion_father_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>


                    @if($updateMode)
                    <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" wire:click="firstStepSubmit_edit"
                            type="button">التالي
                    </button>

                    @else

                    <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" wire:click="firstStepSubmit"
                            type="button">التالي
                    </button>

                    @endif


            </div>
        </div>
    </div><br><br>
