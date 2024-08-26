@extends('layouts.frontend')
@section('content')
        <div class="container-fluid py-5" style="background-color:#152658;">
            <div class="row px-3">
                <div class="col col-lg-8 offset-lg-2">
                    <form action="">
                        <div class="card p-3">
                            <div class="px-3">
                                 <a class="navbar-brand fw-bold fs-5" href=""><span><img src="https://t3.ftcdn.net/jpg/04/91/76/62/360_F_491766294_h4j7LbW2YgfbNHhq7F8GboIc1XyBSEY5.jpg" alt="" style="width:60px; height:60px;" class="me-2"></span>MIT</a>
                            </div>
                        
                            <hr>
                            <div class="px-3">
                            <h3 class="mt-3">Scholarship Application</h3>
                            <p class="small">Please fill out the application form carefully</p>
                            </div>
                            
                            <div class="my-3 px-3">
                                <div class="my-3">
                                    <label for="name" class="form-label">Enter Your Full Name</label>
                                    <input type="name" class="form-control  @error('name') is-invalid @enderror" placeholder="Aung Aung" id="name"
                                    name="name">

                                </div>
                                <div class="row row-cols-1 row-cols-md-2 my-3">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="date_of_birth" class="form-label">Date of Birth</label>
                                        <input type="text" id="date_of_birth" name="date_of_birth" placeholder="Date Of Birth" class="form-control @error('name') is-invalid @enderror" onfocus="(this.type='date')" >
                                        </div>
                                    </div>
                                    <div class="col">
                                        <label for="age" class="form-label">Your Age</label>
                                        <input id="age" type="number" placeholder="17" class="form-control @error('age') is-invalid @enderror" name="age">
                                    </div>
                                </div>
                                <div class="row row-cols-1 row-cols-md-2 my-3">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="birth_place" class="form-label">Place of Birth</label>
                                        <input type="text" id="birth_place" name="birth_place" placeholder="Yangon" class="form-control @error('birth_place') is-invalid @enderror" >
                                        </div>
                                    </div>
                                    <div class="col">
                                        <label for="gender" class="form-label">Gender</label>
                                        <div class="row mt-2" id="gender">
                                            <div class="col-auto">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gender" id="option1" value="male">
                                                    <label class="form-check-label" for="option1">
                                                        Male
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gender" id="option2" value="female">
                                                    <label class="form-check-label" for="option2">
                                                        Female
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-cols-1 row-cols-md-2 my-3">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="phone" class="form-label">Phone Number</label>
                                            <input id="phone" type="number" placeholder="09xxxxxxxxx" class="form-control @error('phone') is-invalid @enderror" name="phone">

                                        </div>
                                    </div>
                                    <div class="col">
                                        <label for="email" class="form-label">Email</label>
                                        <input id="email" type="email" placeholder="example@gmail.com" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">

                                    </div>
                                </div>

                                <div class="my-3">
                                    <label for="address" class="form-label">Address</label>
                                    <textarea name="address" id="address" class="form-control @error('address') is-invalid @enderror" placeholder="Your Address" ></textarea>

                                </div>
                                
                                <h5 class="mt-5">Matriculation Information</h5>
                                <hr>
                                <div class="my-3">
                                    <label for="matriculation_roll" class="form-label">Roll No.</label>
                                    <input type="matriculation_roll" class="form-control  @error('matriculation_roll') is-invalid @enderror" placeholder="Ta Ka 171" id="matriculation_roll"
                                    name="matriculation_roll">

                                </div>

                                <div class="row row-cols-1 row-cols-md-2 my-3">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="passed_year" class="form-label">Passed Year</label>
                                            <input id="passed_year" type="text" placeholder="2022-2024" class="form-control @error('passed_year') is-invalid @enderror" name="passed_year">

                                        </div>
                                    </div>
                                    <div class="col">
                                        <label for="score" class="form-label">Your Score</label>
                                        <input id="score" type="score" placeholder="410" class="form-control  @error('score') is-invalid @enderror" name="score" value="">

                                    </div>
                                </div>

                                <div class="mt-4 mb-3 text-center">
                                    <button type="submit" class="btn btn-success btn-sm px-4 small">Apply Now</button>
                                </div>

                                




                            </div>
                            
                        </div>
                       
                    </form>

                </div>
            </div>
        </div>
@endsection