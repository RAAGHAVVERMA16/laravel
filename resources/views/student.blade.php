@extends('layouts.app')
@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="text-center">
                <h2>PHP Form</h2>
                <p><span class="error text-danger">* required field</span></p>
            </div>
            <form method="post" action="{{ route('details-store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name :</label>
                    <input type="text" class="form-control" name="name" id="name" value="">
                    <span class="error text-danger">*</span>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">E-mail :</label>
                    <input type="text" class="form-control" name="email" id="email" value="">
                    <span class="error text-danger">*</span>
                </div>
                <div class="mb-3">
                    <label for="class" class="form-label">Class :</label>
                    <input type="text" class="form-control" name="class" id="class" value="">
                    <span class="error text-danger">*</span>
                </div>
                <div class="mb-3">
                    <label for="section" class="form-label">Section :</label>
                    <input type="text" class="form-control" name="section" id="section" value="">
                    <span class="error text-danger">*</span>
                </div>

               
                <div class="mb-3">
                    <label for="address" class="form-label">Address :</label>
                    <textarea class="form-control" name="address" id="address" rows="5"></textarea>
                    <span class="error text-danger">*</span>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number :</label>
                    <input type="text" class="form-control" name="phone" id="phone" value="">
                    <span class="error text-danger">*</span>
                </div>

                <div class="mb-3">
                    <label class="form-label">Gender :</label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="gender" value="male" id="male">
                        <label class="form-check-label" for="male">Male</label>
                    </div>

                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="gender" value="female" id="female">
                        <label class="form-check-label" for="female">Female</label>
                    </div>

                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="gender" value="other" id="other">
                        <label class="form-check-label" for="other">Other</label>
                    </div>
                    <span class="error text-danger">*</span>
                </div>
                <div class="container">

        <div class="row">

             <div class="col-md-12 col-sm-12 col-xs-12">

                  <!-- Alert message (start) -->
                  @if(Session::has('message'))
                  <div class="alert {{ Session::get('alert-class') }}">
                       {{ Session::get('message') }}
                  </div>
                  @endif 
                  <!-- Alert message (end) -->

                
                        <div class="form-group">
                             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">File <span class="required">*</span></label>
                             <div class="col-md-6 col-sm-6 col-xs-12">

                                  <input type='file' name='file' class="form-control">

                                  @if ($errors->has('file'))
                                        <span class="errormsg text-danger">{{ $errors->first('file') }}</span>
                                  @endif
                             </div>
                        </div>

                

                <button type="submit" class="btn btn-primary" name="submit" id="sub1">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection