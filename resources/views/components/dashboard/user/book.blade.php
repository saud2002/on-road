<div class="row">
    <div class="col-sm-12">
        <div class="card comman-shadow">
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{route('Book.store')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <h5 class="form-title student-info">Booking Information <span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Full Name <span class="login-danger">*</span></label>
                                <input class="form-control" type="text" name="full_name" value="{{old('full_name')}}" placeholder="Enter Full Name">
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>E-Mail <span class="login-danger">*</span></label>
                                <input class="form-control" type="text" name="email" value="{{old('email')}}" placeholder="Enter Email Address">
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Phone Number <span class="login-danger">*</span></label>
                                <input class="form-control" type="text" name="phone_number" value="{{old('phone_number')}}" placeholder="Enter Phone Number">
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Reason <span class="login-danger">*</span></label>
                                <input class="form-control" type="text" name="reason" value="{{old('reason')}}" placeholder="Enter Reason">
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Location <span class="login-danger">*</span> </label>
                                <input class="form-control" type="text" name="location"  value="{{old('location')}}" placeholder="Enter Location">
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Brand <span class="login-danger">*</span></label>
                                <select class="form-control select" name="brand">
                                    <option>Select Brand</option>
                                    <option value="toyota">Toyota</option>
                                    <option value="bmw">BMW</option>
                                    <option value="ford">Ford</option>
                                    <option value="mercedes">Mercedes</option>
                                    <option value="honda">Honda</option>
                                    <option value="tesla">Tesla</option>
                                    <option value="hyundai">Hyundai</option>
                                    <option value="mitsubushi">Mitsubishi</option>
                                    <option value="volvo">Volvo</option>
                                    <option value="foton">Foton</option>
                                    <option value="tata">TATA</option>
                                    <option value="other">Others</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Vechile Type<span class="login-danger">*</span></label>
                                <select class="form-control select" name="type">
                                    <option>Select Type</option>
                                    <option value="lorry">Lorry</option>
                                    <option value="car">Car</option>
                                    <option value="van">Van</option>
                                    <option value="truck">Truck</option>
                                    <option value="three_wheeler">Three wheeler</option>
                                    <option value="flight">Flight</option>
                                    <option value="train">Train</option>
                                    <option value="motor_cycle">Motor Cycle</option>
                                    <option value="heavy_vechile">Heavy Vechile</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Vechile Number <span class="login-danger">*</span> </label>
                                <input class="form-control" type="text" name="vechile_number" value="{{old('vechile_number')}}" placeholder="Enter Vechile Number">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="student-submit">
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>