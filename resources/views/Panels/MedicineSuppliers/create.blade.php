@extends('Layouts.sidebar')
@include('Layouts.cropImageModal')
@section('contents')



      <form class="form-horizontal" method="POST" action="{{route('medicineSuppliers.store')}}">
            @csrf
           <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
           

<div class="container">
     <div class="row">
            <div class="col-sm-4">
                <div class="Header  Banner p-2 px-3" style="border-radius: .75rem .75rem 0rem 0rem; letter-spacing: 1px;">
                        <span class="HeaderBannerText">Picture</span>
                </div>

                <div class="flex HeaderBody"> 
                        <form class="md-form">
                                <div class="file-field">
                                  <div class="z-depth-1-half mb-1">
                                    {{-- Photo Insertion --}}
                                    @if ($medicine->medicinePhoto != null)
                                    <img src="{{ asset('images/medicinePhotos/'.$medicine->medicinePhoto) }}" size="250px"  class="img-fluid img-sizes img-shadow" alt="">
                                    @else
                                    <img src="{{ asset('images/medicineicon.png') }}" size="250px"  class="img-fluid img-sizes img-shadow" alt="" >
                                    @endif 
                                  </div>      
                                <p style="margin-top:5px; color:black;" class="text-center"><b><b> {{ucfirst(trans($medicine->brandName))}}</b></b> ({{$medicine->genericName}})</p>
                                                                           
                                </div>
                        </form>
                    </div>
            </div>
    
  <div class="col-sm-8">
                            <div class="HeaderBanner p-2 px-3" style="border-radius: .75rem .75rem 0rem 0rem; letter-spacing: 1px;">
                                    <span class="HeaderBannerText">Details</span>
                            </div>


                            <div class="flex HeaderBody">
                                             
                                <div class="row mb-3">
                                        <div class="col-sm-3">
                                                <label  class="fnt">Quantity</label>
                                        </div>
                                        <div class="col-sm-1">              
                                                <input type="hidden" id="medicineId" class="form-control" value="{{$medicine->id}}" name="medicineId">
                                                <input type="number" list="quantity" name="quantity"  min='0'  onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode >= 48 && event.charCode <= 57" required>
                                        </div>
                                    </div>
                                
                                    <div class="row mb-3">
                                        <div class="col-sm-3 ">
                                                <label  class="fnt">Supplier </label> 
                                        </div>
                                                <div class="col-sm-5">
                                                    <select id="supplierId" class="form-control"  name="supplierId">
                                                        @foreach($suppliers as $supplier)
                                                    <option value={{$supplier->id}}>{{$supplier->suppliersName}}</option>
                                                    @endforeach
                                                </select>
                                                </div>
                                            </div>
                                
                                    <div class="row mb-3">
                                <div class="col-sm-3 ">
                                        <label  class="fnt">Purchased Price </label> 
                                </div>
                                        <div class="col-sm-5">
                                                <input type='text'  pattern="^\d*(\.\d{0,2})?$"  title="Number only" class="form-control" name="purchasedPrice" required>
                                        </div>
                                    </div>



                               
                                <div class="form-row">
                                        <div class="form-group col-sm-3 ">
                                        <label  class="fnt">Received Date</label>
                                        </div>
                                    <div class="form-group col-sm-3">
                                          
                                        <select name='receivedMonth' id='month1' onchange="getDay('month1', 'day1', 'year1');" class="form-control" required>
                                            {!! month() !!}
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-3">
                                        <select name='receivedDay' id='day1' class='form-control' required> 
                                            <option value="" disabled selected>Day</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-3">
                                        <select name='receivedYear' id='year1' onchange="getDay('month1', 'day1', 'year1');" class="form-control" required>
                                            <option value="" disabled selected>Year</option>
                                            {!! year() !!}
                                        </select>
                                    </div>
                                </div>



                                <div class="form-row">
                                        <div class="form-group col-sm-3 ">
                                                <label  class="fnt">Manufactured Date</label>
                                                </div>
                                    <div class="form-group col-sm-3">
                                        <select name='manufacturedMonth' id='month2' onchange="getDay('month2', 'day2', 'year2');" class="form-control" required>
                                            {!! month() !!}
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-3">
                                        <select name='manufacturedDay' id='day2' class='form-control' required> 
                                            <option value="" disabled selected>Day</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-3">
                                        <select name='manufacturedYear' id='year2' onchange="getDay('month2', 'day2', 'year2');" class="form-control" required>
                                            <option value="" disabled selected>Year</option>
                                            {!! year() !!}
                                        </select>
                                    </div>
                                </div>


                               
                        <div class="form-row">
                                <div class="form-group col-sm-3">
                                        <label  class="fnt">Expiration Date</label>
                                        </div>
                            <div class="form-group col-sm-3">
                                <select name='expirationMonth' id='month3' onchange="getDay('month3', 'day3', 'year3');" class="form-control" required>
                                    {!! month() !!}
                                </select>
                            </div>
                            <div class="form-group col-sm-3">
                                <select name='expirationDay' id='day3' class='form-control' required> 
                                    <option value="" disabled selected>Day</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-3">
                                <select name='expirationYear' id='year3' onchange="getDay('month3', 'day3', 'year3');" class="form-control" required>
                                    <option value="" disabled selected>Year</option>
                                    {!! year() !!}
                                </select>
                            </div>
                        </div>
    
                        </div>
                    

                      <div class="DivTemplate">
                          <p class='DivHeaderText' style="font-size:9px;">ACTIONS</p>
                          <div class="hr mb-2"></div> 
                          <button type="submit" class="btn btn-primary btn-sm">SAVE</button>
                          <button class="btn btn-outline-info waves-effect float-right btn-sm" type="button" onclick="window.location = '{{ route('medicineSuppliers.show',$medicine->id) }}'">BACK</button>    
                      </div>

                    </div>


                </form>
                    </div>              


            </div>
      </div>
</div>

<script>
 //getting days on day dropdownlist function
    function getDay(month, day, year){
    month = document.getElementById(month);
    day = document.getElementById(day);
    year = document.getElementById(year);
    if (month.value == 1 || month.value == 3 || month.value == 5 || month.value == 7 || month.value == 8 || month.value == 10 || month.value == 12){
        $(day).empty();
        for(i=1; i<=31; i++){
            option = document.createElement('option');
            option.value = i;
            option.innerHTML = i;
            day.appendChild(option);
        }
    } else if(month.value == 4 || month.value == 6 || month.value == 9 || month.value == 11){
        $(day).empty();
        for(i=1; i<=30; i++){
            option = document.createElement('option');
            option.value = i;
            option.innerHTML = i;
            day.appendChild(option);
        }
    } else if(month.value == 2){
        if ((year.value % 4 == 0 && year.value % 100 != 0) || year.value % 400 == 0){
            $(day).empty();
            for(i=1; i<=29; i++){
                option = document.createElement('option');
                option.value = i;
                option.innerHTML = i;
                day.appendChild(option);
            }
        } else {
            $(day).empty();
            for(i=1; i<=28; i++){
                option = document.createElement('option');
                option.value = i;
                option.innerHTML = i;
                day.appendChild(option);
            }
        }
    }    
}


$(document).on('keydown', 'input[pattern]', function(e){
            var input = $(this);
            var oldVal = input.val();
            var regex = new RegExp(input.attr('pattern'), 'g');
          
            setTimeout(function(){
              var newVal = input.val();
              if(!regex.test(newVal)){
                input.val(oldVal); 
              }
            }, 0);
          });
</script>

@endsection