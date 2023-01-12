@extends('frontend.main_master')
@section('content')
<!-- @php
$user = DB::table('users')->where('id',Auth::user()->id)->first();
@endphp -->
 <!-- BREADCRUMB AREA START -->
 <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image "  data-bs-bg="img/bg/14.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner">
                    <h1 class="page-title">My Account</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="index.html"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                            <li>My Account</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- WISHLIST AREA START -->
<div class="liton__wishlist-area pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- PRODUCT TAB AREA START -->
                <div class="ltn__product-tab-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="ltn__tab-menu-list mb-50">
                                    <div class="nav">
                                        <a  data-bs-toggle="tab" href="#liton_tab_1_1"><img class="rounded-circle" src="{{ (!empty($user->profile_photo_path))? url('upload/user_images/'.$user->profile_photo_path):url('upload/user_images/no_image.jpg') }}"alt="User Avatar"></a>
                                        <a class="active show" data-bs-toggle="tab" href="#liton_tab_1_1">Dashboard <i class="fas fa-home"></i></a>
                                        
                                            
                                        
                                        <a data-bs-toggle="tab" href="#liton_tab_1_2">Orders <i class="fas fa-file-alt"></i></a>
                                        <a data-bs-toggle="tab" href="#liton_tab_1_3">Downloads <i class="fas fa-arrow-down"></i></a>
                                        <a data-bs-toggle="tab" href="#liton_tab_1_4">address <i class="fas fa-map-marker-alt"></i></a>
                                        <a data-bs-toggle="tab" href="#liton_tab_1_5">Account Details <i class="fas fa-user"></i></a>
                                        <a href="{{route('user.logout')}}">Logout <i class="fas fa-sign-out-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="liton_tab_1_1">
                                        <div class="ltn__myaccount-tab-content-inner">
                                            {{-- <img class="rounded-circle" src="{{ (!empty($adminData->profile_photo_path))? url('upload/admin_images/'.$adminData->profile_photo_path):url('upload/admin_images/no_image.jpg') }}" alt="User Avatar"> --}}
                                            <p>Hello <strong>{{Auth::user()->name}}</strong> (not <strong>{{Auth::user()->name}}</strong>? <small><a href="{{route('user.logout')}}">Log out</a></small> )</p>
                                            <p>From your account dashboard you can view your <span>recent orders</span>, manage your <span>shipping and billing addresses</span>, and <span>edit your password and account details</span>.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="liton_tab_1_2">
                                        <div class="ltn__myaccount-tab-content-inner">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Order</th>
                                                            <th>Date</th>
                                                            <th>Status</th>
                                                            <th>Total</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Jun 22, 2019</td>
                                                            <td>Pending</td>
                                                            <td>$3000</td>
                                                            <td><a href="cart.html">View</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Nov 22, 2019</td>
                                                            <td>Approved</td>
                                                            <td>$200</td>
                                                            <td><a href="cart.html">View</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>Jan 12, 2020</td>
                                                            <td>On Hold</td>
                                                            <td>$990</td>
                                                            <td><a href="cart.html">View</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="liton_tab_1_3">
                                        <div class="ltn__myaccount-tab-content-inner">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Product</th>
                                                            <th>Date</th>
                                                            <th>Expire</th>
                                                            <th>Download</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Carsafe - Car Service PSD Template</td>
                                                            <td>Nov 22, 2020</td>
                                                            <td>Yes</td>
                                                            <td><a href="#"><i class="far fa-arrow-to-bottom mr-1"></i> Download File</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Carsafe - Car Service HTML Template</td>
                                                            <td>Nov 10, 2020</td>
                                                            <td>Yes</td>
                                                            <td><a href="#"><i class="far fa-arrow-to-bottom mr-1"></i> Download File</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Carsafe - Car Service WordPress Theme</td>
                                                            <td>Nov 12, 2020</td>
                                                            <td>Yes</td>
                                                            <td><a href="#"><i class="far fa-arrow-to-bottom mr-1"></i> Download File</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="liton_tab_1_4">
                                        <div class="ltn__myaccount-tab-content-inner">
                                            <p>The following addresses will be used on the checkout page by default.</p>
                                            <div class="row">
                                                <div class="col-md-6 col-12 learts-mb-30">
                                                    <h4>Billing Address <small><a href="#">edit</a></small></h4>
                                                    <address>
                                                        <p><strong>Alex Tuntuni</strong></p>
                                                        <p>1355 Market St, Suite 900 <br>
                                                            San Francisco, CA 94103</p>
                                                        <p>Mobile: (123) 456-7890</p>
                                                    </address>
                                                </div>
                                                <div class="col-md-6 col-12 learts-mb-30">
                                                    <h4>Shipping Address <small><a href="#">edit</a></small></h4>
                                                    <address>
                                                        <p><strong>Alex Tuntuni</strong></p>
                                                        <p>1355 Market St, Suite 900 <br>
                                                            San Francisco, CA 94103</p>
                                                        <p>Mobile: (123) 456-7890</p>
                                                    </address>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="liton_tab_1_5">
                                        <div class="ltn__myaccount-tab-content-inner">
                                            {{-- <p>The following addresses will be used on the checkout page by default.</p> --}}
                                            <div class="ltn__form-box">
                                                <form method="post" action="{{ route('user.profile.store') }}" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row mb-50">
                                                        
                                                        <fieldset>
                                                            
                                                        <legend>Update Profile</legend>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <label>Name:</label>
                                                                    <input  type="text" name="name" value="{{ $user->name }}">
                                                                    <label>Email</label>
                                                                    <input type="email" name="email"  value="{{ $user->email }}">
                                                                    <label>Phone</label>
                                                                    <input type="text" name="phone" value="{{ $user->phone }}">
                                                                    <label>Image</label>
                                                                    <input type="file" name="profile_photo_path" >
                                                                  
                                                                    
                                                                    
                                                                      
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="btn-wrapper">
                                                                <button type="submit" class="btn theme-btn-1 btn-effect-1 text-uppercase">Update</button>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                </form>
                                                <form method="post" action="{{ route('user.password.update') }}">
                                                    @csrf
                                                    <div class="row mb-50">
                                                    <fieldset>
                                                        <legend>Password change</legend>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label>Current password (leave blank to leave unchanged):</label>
                                                                <input type="password" id="current_password" name="oldpassword">
                                                                <label>New password (leave blank to leave unchanged):</label>
                                                                <input type="password" id="password" name="password">
                                                                <label>Confirm new password:</label>
                                                                <input type="password" id="password_confirmation" name="password_confirmation">
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                    <div class="btn-wrapper">
                                                        <button type="submit" class="btn theme-btn-1 btn-effect-1 text-uppercase">Save Changes</button>
                                                    </div>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- PRODUCT TAB AREA END -->
            </div>
        </div>
    </div>
</div>
<!-- WISHLIST AREA START -->


@endsection