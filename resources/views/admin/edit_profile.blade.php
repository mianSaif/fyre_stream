@extends('admin.layouts.master')

@section('title')

    <title>Edit Profile</title>

@section('content')

    <div class="main-content">
        <div class="col-md-9">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-user"></i> Users</a></li>
                                <li class="breadcrumb-item"><a href="#">John</a></li>
                            </ol>
                        </nav>

                        <div class="buttons ml-auto">
                            <a href="#" class="btn btn-dark">Go Back</a>
                            <a href="#" class="btn btn-info">View Profile</a>
                            <a href="#" class="btn btn-danger">Delete All Posts</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                <img class="img-thumbnail" src="{{asset('web_admin/img/users/user1-round.png')}}" alt="">
                            </div>
                            <div class="col-md-5">
                                <div class="card">
                                    <div class="card-body">
                                        <ul class="list-group">
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                User ID
                                                <span class="badge badge-primary badge-pill">14</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Joined
                                                <span class="badge badge-primary badge-pill">2</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Last Login
                                                <span class="badge badge-primary badge-pill">1</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="card">
                                    <div class="card-body">
                                        <ul class="list-group">
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Friends
                                                <span class="badge badge-primary badge-pill">14</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Following
                                                <span class="badge badge-primary badge-pill">2</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Followers
                                                <span class="badge badge-primary badge-pill">1</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h5>BASIC</h5>
                            </div>
                            <div class="col-md-12">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#account" role="tab"
                                           aria-controls="account" aria-selected="true">Account</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                           aria-controls="profile" aria-selected="false">Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#privacy" role="tab"
                                           aria-controls="privacy" aria-selected="false">Privacy</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#security" role="tab"
                                           aria-controls="security" aria-selected="false">Security</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#membership" role="tab"
                                           aria-controls="membership" aria-selected="false">Membership</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#extra" role="tab"
                                           aria-controls="extra" aria-selected="false">Extra</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
                                        <div class="row mt-4">
                                            <div class="col-md-3">Verified User</div>
                                            <div class="col-md-9">
                                                <div class="pretty p-switch p-fill">
                                                    <input type="checkbox" />
                                                    <div class="state">
                                                        <label>Fill</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">Banned</div>
                                            <div class="col-md-9">
                                                <div class="pretty p-switch p-fill">
                                                    <input type="checkbox" />
                                                    <div class="state">
                                                        <label>Fill</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">Account Activated</div>
                                            <div class="col-md-9">
                                                <div class="pretty p-switch p-fill">
                                                    <input type="checkbox" />
                                                    <div class="state">
                                                        <label>Fill</label>
                                                    </div>
                                                </div>
                                                <p>Account activation enabled from your system setting by Email</p>
                                            </div>
                                            <div class="col-md-3">User Group</div>
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <select class="form-control">
                                                        <option>Option 1</option>
                                                        <option>Option 2</option>
                                                        <option>Option 3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">User Name</div>
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">https://fyrestream.com/</div>
                                                        </div>
                                                        <input type="text" class="form-control" id="inlineFormInputGroup">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">Email Address</div>
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">@</div>
                                                        </div>
                                                        <input type="text" class="form-control" id="inlineFormInputGroup">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">Email Verified</div>
                                            <div class="col-md-9 mb-3">
                                                <div class="pretty p-switch p-fill">
                                                    <input type="checkbox" />
                                                    <div class="state">
                                                        <label>Fill</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">Password</div>
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="buttons ml-auto">
                                                <a href="#" class="btn btn-success">Save Changes</a>
                                                <a href="#" class="btn btn-danger">Delete User</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="password">First Name</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="password">Last Name</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="password">I AM</label>
                                                    <select class="form-control">
                                                        <option>Option 1</option>
                                                        <option>Option 2</option>
                                                        <option>Option 3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="password">Relationship Status</label>
                                                    <select class="form-control">
                                                        <option>Option 1</option>
                                                        <option>Option 2</option>
                                                        <option>Option 3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="password">Country</label>
                                                    <select class="form-control">
                                                        <option>Option 1</option>
                                                        <option>Option 2</option>
                                                        <option>Option 3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="password">Website</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="password">Birth Day</label>
                                                            <select class="form-control">
                                                                <option>Option 1</option>
                                                                <option>Option 2</option>
                                                                <option>Option 3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="password">Birth Day</label>
                                                            <select class="form-control">
                                                                <option>Option 1</option>
                                                                <option>Option 2</option>
                                                                <option>Option 3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="password">Birth Day</label>
                                                            <select class="form-control">
                                                                <option>Option 1</option>
                                                                <option>Option 2</option>
                                                                <option>Option 3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">About me</label>
                                                    <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <h5>Work</h5>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="password">Work Title</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="password">Work Place</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="password">Work Website</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <h5>LOCATION</h5>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="password">Current City</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="password">Hometown</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <h5>Education</h5>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="password">School</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="password">Major</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="password">Class</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Facebook Profile URl</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="fas fa-phone"></i>
                                                            </div>
                                                        </div>
                                                        <input type="text" class="form-control phone-number">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Facebook Profile URl</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="fas fa-phone"></i>
                                                            </div>
                                                        </div>
                                                        <input type="text" class="form-control phone-number">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Facebook Profile URl</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="fas fa-phone"></i>
                                                            </div>
                                                        </div>
                                                        <input type="text" class="form-control phone-number">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Facebook Profile URl</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="fas fa-phone"></i>
                                                            </div>
                                                        </div>
                                                        <input type="text" class="form-control phone-number">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Facebook Profile URl</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="fas fa-phone"></i>
                                                            </div>
                                                        </div>
                                                        <input type="text" class="form-control phone-number">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Facebook Profile URl</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="fas fa-phone"></i>
                                                            </div>
                                                        </div>
                                                        <input type="text" class="form-control phone-number">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <h5>Others</h5>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Sample Custom Field</label>
                                                    <select class="form-control">
                                                        <option>Option 1</option>
                                                        <option>Option 2</option>
                                                        <option>Option 3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <a href="#" class="btn btn-dark btn-block">Go Back</a>
                                            </div>
                                            <div class="col-md-6">
                                                <a href="#" class="btn btn-block btn-info">Save Changes</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="privacy" role="tabpanel" aria-labelledby="privacy-tab">
                                        Privacy
                                    </div>
                                    <div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="security-tab">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                                                <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>BROWSER</th>
                                                    <th>OS</th>
                                                    <th>DATE</th>
                                                    <th>IP</th>
                                                    <th>ACTIONS</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Tiger Nixon</td>
                                                    <td>System Architect</td>
                                                    <td>Edinburgh</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                    <td>$320,800</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="membership" role="tabpanel" aria-labelledby="membership-tab">
                                       <div class="row mt-4">
                                           <div class="col-md-12">
                                               <h6>UPGRADE PACKAGE</h6>
                                           </div>
                                           <div class="col-md-3">Select Package</div>
                                           <div class="col-md-9">
                                               <div class="form-group">
                                                   <select class="form-control">
                                                       <option>Option 1</option>
                                                       <option>Option 2</option>
                                                       <option>Option 3</option>
                                                   </select>
                                               </div>
                                               <div class="buttons">
                                                   <a href="#" class="btn btn-primary">Save Changes</a>
                                               </div>
                                           </div>
                                       </div>
                                    </div>
                                    <div class="tab-pane fade" id="extra" role="tabpanel" aria-labelledby="extra-tab">
                                        Extra
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
