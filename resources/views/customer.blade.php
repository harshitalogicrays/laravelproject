@extends('layouts.main')
@push('title')
    <title>Customer Registration</title>
@endpush
@section('main-section')
    <form method="post" action="{{url('/customer')}}">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Enter name">
          </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
            </div>
            <div class="form-group">
                <label for="mob">Mobile No</label>
                <input type="text" class="form-control" id="mob" aria-describedby="emailHelp" placeholder="Enter Mobile Number" name="mobile">

              </div>
              <div class="form-group">
                <label for="address">Address</label>
                <textarea class="form-control" id="address" name="address" placeholder="enter address"></textarea>
              </div>

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="M">
                <label class="form-check-label" for="inlineRadio1">Male</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="F">
                <label class="form-check-label" for="inlineRadio2">Female</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="O">
                <label class="form-check-label" for="inlineRadio3">Other</label>
              </div>

              <div class="form-group">
                <label for="dob">Date Of Birth</label>
                <input type="date" class="form-control" id="dob" name="dob" >
              </div>
              <div class="form-group mt-2">
              <select class="form-select" name="isActive">
                <option value="select" selected disabled>isActive</option>
                <option value="0">No</option>
                <option value="1">Yes</option>
              </select>
              </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
            </div>
         <button type="submit" class="btn btn-primary mt-3">Add Customer</button>
    </form>

@endsection