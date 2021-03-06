@extends('Layouts.sidebar')
@section('contents')
       
<div class="container">
    <form class="form-horizontal" method="POST" action="{{route('suppliers.update',$supplier->id)}}">
        @csrf
        @method('PUT')
    
            <div class="HeaderBanner p-2 px-3" style="border-radius: .75rem .75rem 0rem 0rem; letter-spacing: 1px;">
                <span class="HeaderBannerText">Details</span>
        </div>
        <div class="flex HeaderBody">
            <div class="table-responsive">
                <table class="table table-borderless dataDisplayer">
                    <tbody>
                        
                        <tr class="fnt">
                            <td class>Suppliers Name</td>
                        <td>{{ucfirst(trans($supplier->suppliersName))}}</td>
                        </tr>
                        
                        <tr class="fnt">
                            <td width="130px">Address</td>
                            <td>{{$supplier->address}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
    
    <div class="col-sm-6">
        <div class="form-row">
            <div class="form-group ml-5 mt-3">
                <center>
                <label class="input-label">STATUS</label><br>
                <div class="form-check form-check-inline ml-4">
                    <input type='radio' class="form-check-input" name='supplier_status' id="emptyStatusActive" value='1' @if ($supplier->supplier_status == 1) checked @endif>
                    <label class="form-check-label" for="emptyStatusActive">Active</label>
                </div>
                <div class="form-check form-check-inline ml-4">
                    <input type='radio' class="form-check-input" name='supplier_status' id="statusInactive" value='0' @if ($supplier->supplier_status == 0) checked @endif>
                    <label class="form-check-label" for="statusInactive">Inactive</label> 
                </div>
                </center>
            </div>
        </div>
    </div>
</div>
    <!--Saving -->
    <div class="DivTemplate" id="div_Actions">
        <p class="DivHeaderText">ACTIONS</p>
        <div class="hr mb-2"></div>
        <button type="submit" class="btn btn-primary" >SAVE</button>
        <input  class="btn btn-outline-info waves-effect float-right" type="button" onclick="window.location='{{route('suppliers.index')}}'" value="BACK">
    </div>
    



@endsection