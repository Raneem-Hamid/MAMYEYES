@extends('layout.master')

@section('head')
    <link href="{{ asset('css/booking.css') }}" rel="stylesheet">
    <link href="{{ asset('css/card.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="container mt-5">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-6">
                <div id="bigdiv">
                    <form id="regForm">
                        {{-- <h1 id="register">Donate</h1> --}}
                        <div class="all-steps" id="all-steps"> <span class="step"></span> <span class="step"></span>
                            <span class="step"></span> <span class="step"></span>
                            {{-- <span class="step"></span><span class="step"></span> --}}
                            <span class="step"></span>
                        </div>
                        <div class="tab">
                            <h1 id="register">Your Information</h1>
                            <p><input placeholder="First Name" oninput="this.className = ''" name="first"></p>
                            <p><input placeholder="Last Name" oninput="this.className = ''" name="last"></p>
                            <p><input placeholder="Email" oninput="this.className = ''" name="email"></p>
                            <p><input placeholder="Phone" oninput="this.className = ''" name="phone"></p>
                            <p><select name="doctor" id="doctor" class="form-select">
                                    <option value="">Select City</option>
                                    <option value="Doctor 1">Amman</option>
                                    <option value="Doctor 2">Zarqa</option>
                                </select></p>
                            <p><input placeholder="Street Address" oninput="this.className = ''" name="address"></p>
                            <p><input placeholder="Building Number" oninput="this.className = ''" name="building"
                                    type="number"></p>
                            <p><input placeholder="Date" oninput="this.className = ''" name="date" type="date"></p>
                            <p>
                            <div class="row">
                                <div class="col-md-6 form-group mt-1">
                                    <label for="timefrom" class=" fs-6">From</label>
                                    <input placeholder="timefrom" oninput="this.className = ''" name="timefrom"
                                        type="time">
                                    <div class="validate"></div>
                                </div>

                                <div class="col-md-6 form-group mt-1">
                                    <label for="timefrom" class=" fs-6">To</label>
                                    <input placeholder="timefrom" oninput="this.className = ''" name="timefrom"
                                        type="time">
                                    <div class="validate"></div>
                                </div>
                            </div>
                            </p>

                        </div>
                        <div class="tab">
                            <h1 id="register">The child information</h1>

                            <p><input type="text" placeholder="Name" oninput="this.className = ''" name="fchname"></p>
                            <p><input placeholder="Age" oninput="this.className = ''" name="fchage" type="number"></p>
                            <h5>Does the child have health problems?</h5>
                            <label class="container">No
                                <input type="radio" checked="checked" name="radio">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">Yes
                                <input type="radio" name="radio">
                                <span class="checkmark"></span>
                            </label>
                            <p>
                                <textarea placeholder="Explain the problem(if found)"></textarea>
                            </p>

                        </div>
                        {{-- <div class="tab">
                            <h1 id="register">Second child information</h1>

                            <p><input type="text" placeholder="Name" oninput="this.className = ''" name="schname"></p>
                            <p><input placeholder="Age" oninput="this.className = ''" name="schage" type="number"></p>
                            <h5>Does the child have health problems?</h5>
                            <label class="container">No
                                <input type="radio" checked="checked" name="radio">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">Yes
                                <input type="radio" name="radio">
                                <span class="checkmark"></span>
                            </label>
                            <p>
                                <textarea placeholder="Explain the problem(if found)"></textarea>
                            </p>

                        </div>
                        <div class="tab">
                            <h1 id="register">Third child information</h1>

                            <p><input type="text" placeholder="Name" oninput="this.className = ''" name="tchname">
                            </p>
                            <p><input placeholder="Age" oninput="this.className = ''" name="tchage" type="number"></p>
                            <h5>Does the child have health problems?</h5>
                            <label class="container">No
                                <input type="radio" checked="checked" name="radio">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">Yes
                                <input type="radio" name="radio">
                                <span class="checkmark"></span>
                            </label>
                            <p>
                                <textarea placeholder="Explain the problem(if found)"></textarea>
                            </p>

                        </div> --}}

                        <div class="tab">
                            <div class="col-md-full form-group mt-3">
                                <select name="department" id="department" class="form-select">
                                    <option value="">Kind of sitter</option>
                                    <option value="Department 1">Junior Sitters</option>
                                    <option value="Department 2">Standard Sitters</option>
                                    <option value="Department 3">Advanced Sitters</option>
                                </select>
                                <div class="validate"></div>
                            </div>

                            <div class="col-md-full form-group mt-3 mb-3">
                                <select name="department" id="department" class="form-select">
                                    <option value="">Select sitter</option>
                                    <option value="Department 1">Nour Ahmad</option>
                                    <option value="Department 2">Nour Ahmad</option>
                                    <option value="Department 3">Nour Ahmad</option>
                                    <option value="Department 4">Nour Ahmad</option>
                                    <option value="Department 5">Nour Ahmad</option>
                                    <option value="Department 6">Nour Ahmad</option>
                                </select>
                                <div class="validate"></div>
                            </div>

                        </div>

                        <div class="tab">
                            <div class="col-md-full mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex flex-column align-items-center text-center">
                                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin"
                                                class="rounded-circle" width="150">
                                            <div class="mt-3">
                                                <h4>John Doe</h4>
                                                <p class="text-secondary mb-1">hhhhhhhh</p>
                                                <p class="text-secondary mb-1"><a href="tel:00962778083610"
                                                        class="text-muted">0778083610</a></p>
                                                <p class="text-muted font-size-sm"><a href="mailto:contact@example.com"
                                                        class="text-muted">exampil@gmail.com</a></p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="tab">

                            <form action="">
                                <div class="inputBox">
                                    <span>card number</span>
                                    <input type="text" maxlength="16" class="card-number-input"id="inputs">
                                </div>
                                <div class="inputBox">
                                    <span>card holder</span>
                                    <input type="text" class="card-holder-input" id="inputs">
                                </div>
                                <div class="flexbox">
                                    <div class="inputBox">
                                        <span>expiration mm</span>
                                        <select name="" class="month-input" id="inputs">
                                            <option value="month" selected disabled>month</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                    </div>
                                    <div class="inputBox">
                                        <span>expiration yy</span>
                                        <select name="" id="inputs" class="year-input">
                                            <option value="year" selected disabled>year</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>
                                            <option value="2026">2026</option>
                                            <option value="2027">2027</option>
                                            <option value="2028">2028</option>
                                            <option value="2029">2029</option>
                                            <option value="2030">2030</option>
                                        </select>
                                    </div>
                                    <div class="inputBox">
                                        <span>cvv</span>
                                        <input type="text" maxlength="4" class="cvv-input" id="inputs">
                                    </div>
                                </div>
                                {{-- <input type="submit" value="submit" class="submit-btn" id="inputs"> --}}
                            </form>

                        </div>

                        <div class="thanks-message text-center" id="text-message"> <img src="img/true.png"
                                width="100" class="mb-4">
                            <h3>Thanks for your Donation!</h3> <span>Your donation has been entered! We will contact you
                                shortly!</span>
                        </div>
                        <div style="overflow:auto;" id="nextprevious">
                            <div style="float:right;"> <button type="button" id="prevBtn"
                                    onclick="nextPrev(-1)">Previous</button> <button type="button" id="nextBtn"
                                    onclick="nextPrev(1)">Next</button> </div>
                            {{-- <button type="submit">Submit</button> --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/booking.js') }}"></script>
    {{-- <script src="{{ asset('js/card.js') }}"></script> --}}
@endsection
