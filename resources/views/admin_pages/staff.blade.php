@extends(' layouts.admin')
@section('content')

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Edit Profile</h4>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-5 pr-1">
                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <input type="text" class="form-control" value="">
                                                </div>
                                            </div>
                                            <div class="col-md-3 px-1">
                                                <div class="form-group">
                                                    <label>Staff ID</label>
                                                    <input type="text" class="form-control" value="">
                                                </div>
                                            </div>
                                            <div class="col-md-4 pl-1">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email address</label>
                                                    <input type="email" class="form-control" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 pr-1">
                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <input type="text" class="form-control" value="">
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <input type="text" class="form-control" placeholder="Home Address" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-4 pr-1">
                                                <div class="form-group">
                                                    <label>Role</label>
                                                    <div class="form-check form-check-radio">
                                                        <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="gender" id="male" value="male" >
                                                        Male
                                                        <span class="circle">
                                                            <span class="check"></span>
                                                        </span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-radio">
                                                        <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="gender" id="female" value="female" checked=false>
                                                        Female
                                                        <span class="circle">
                                                            <span class="check"></span>
                                                        </span>
                                                        </label>
                                                    </div>

                                                    <div class="form-check form-check-radio disabled">
                                                        <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="gender" id="others" value="others">
                                                        Others
                                                        <span class="circle">
                                                            <span class="check"></span>
                                                        </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 px-1">
                                                    <label>Role</label>

                                                <select class="selectpicker " data-style="select-with-transition" title="Select role" data-size="7" value="role">
                                                    <option disabled>Select role</option>
                                                    <option value="Developer" >Developer</option>
                                                    <option value="Admin" >Admin</option>
                                                    <option value="Library staff" >Library staff</option>

                                                </select>
                                            </div>


                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>Aadhar Card Number</label>
                                                    <input type="text" class="form-control" value="">
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6 pl-1">
                                                <div class="form-group">
                                                    <label>Age</label>
                                                    <input type="number" class="form-control" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Books Issued</label>
                                                    <textarea rows="4" cols="80" class="form-control" value=""></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-user">
                                <div class="card-image">
                                    <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="...">
                                </div>
                                <div class="card-body">
                                    <div class="author">
                                        <a href="#">
                                            <img class="avatar border-gray" src="img/faces/face-3.jpg" alt="...">
                                            <h5 class="title"></h5>
                                        </a>
                                        <p class="description">
                                        </p>
                                    </div>
                                    
                                </div>
                                <hr>
                                <div class="button-container mr-auto ml-auto">
                                    <button href="#" class="btn btn-simple btn-link btn-icon">
                                        <i class="fa fa-facebook-square"></i>
                                    </button>
                                    <button href="#" class="btn btn-simple btn-link btn-icon">
                                        <i class="fa fa-twitter"></i>
                                    </button>
                                    <button href="#" class="btn btn-simple btn-link btn-icon">
                                        <i class="fa fa-google-plus-square"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @endsection

            
