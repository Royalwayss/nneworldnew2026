<div class="tab-pane fade my-acc-sub-heading @if($active_tab == 'profile') show active @endif" id="tab1" role="tabpanel">
                        <h4>My Profile</h4>
                        <section class="main-contact-form-area py-0">
                            <div class="container">

                                <div class="forms-main-bg">
                                    <form action="javascript:;" id="save_account" data-action="{{ route('saveaccount') }}"> @csrf
                                        <div class="row">

                                            <div class="col-12 col-md-6 col-lg-4 mb-3">
                                                <div class="form-group">
                                                    <label for="category">Select Category</label>
                                                    <select id="category" name="category" class="form-control">
                                                        <option value="">Select</option>
                                                        <option value="Chartered Accountant" @if($user_detail['category'] == 'Chartered Accountant') selected @endif >Chartered Accountant</option>
                                                        <option value="Company Secretary" @if($user_detail['category'] == 'Company Secretary') selected @endif>Company Secretary</option>
                                                        <option value="Advocate" @if($user_detail['category'] == 'Advocate') selected @endif>Advocate</option>
                                                        <option value="Real Estate Consultant" @if($user_detail['category'] == 'Real Estate Consultant') selected @endif>Real Estate Consultant</option>
                                                        <option value="Digital Marketing Expert" @if($user_detail['category'] == 'Digital Marketing Expert') selected @endif>Digital Marketing Expert</option>
                                                        <option value="LOAN DSA" @if($user_detail['category'] == 'LOAN DSA') selected @endif>LOAN DSA</option>
                                                        <option value="Developer" @if($user_detail['category'] == 'Developer') selected @endif>Developer</option>
                                                        <option value="Others" @if($user_detail['category'] == 'Others') selected @endif>Others</option>
                                                    </select>
                                                    @php echo from_input_error_message('category') @endphp
                                                </div>

                                            </div> 
                                            @include('front.pages.account.include.country_drop_down')
                                            <div class="col-12 col-md-6 col-lg-4 mb-3">
                                                <div class="form-group ">
                                                    <label for="name">Name</label>
                                                    <input type="text" class="form-control" name="name" id="name"
                                                        placeholder="Name" value="{{ $account['name'] }}">
                                                    @php echo from_input_error_message('name') @endphp
                                                </div>

                                            </div>
                                            <div class="col-12 col-md-6 col-lg-4 mb-3">
                                                <div class="form-group ">
                                                    <label for="company_name">Company Name</label>
                                                    <input type="text" class="form-control" name="company_name"
                                                        id="company_name" placeholder="Company Name" value="{{ $account['company_name'] }}">
                                                    @php echo from_input_error_message('company_name') @endphp
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-4 mb-3">
                                                <div class="form-group ">
                                                    <label for="website">Website</label>
                                                    <input type="text" class="form-control" name="website" id="website"
                                                        placeholder="Website" value="{{ $account['website'] }}">
                                                    @php echo from_input_error_message('website') @endphp
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-4 mb-3">
                                                <div class="form-group ">
                                                    <label for="email">Email</label>
                                                    <input type="email" class="form-control"  id="email"
                                                        placeholder="Email" value="{{ $account['email'] }}" disabled>
                                                    @php echo from_input_error_message('email') @endphp
                                                </div>
                                            </div>
                                          
                                            <div class="col-12 col-md-6 col-lg-4 mb-3">
                                                <div class="form-group ">
                                                    <label for="telephone">Telephone</label>
                                                    <input type="number" class="form-control" name="telephone"
                                                        id="telephone" placeholder="Telephone" value="{{ $account['telephone'] }}">
                                                    @php echo from_input_error_message('telephone') @endphp
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-6 col-lg-4 mb-3">
                                                <div class="form-group ">
                                                    <label for="contact_no">Mobile Number</label>
                                                    <input type="number" class="form-control" name="contact_no"
                                                        id="contact_no" placeholder="Mobile Number" value="{{ $account['mobile'] }}">
                                                    @php echo from_input_error_message('contact_no') @endphp
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-4 mb-3">
                                                <div class="form-group">
                                                    <label for="gender">Gender</label>
                                                    <select id="gender" name="gender" class="form-control">
                                                        <option value="">Choose..</option>
                                                        <option value="Male" @if($account['gender'] == 'Male') selected @endif>Male</option>
                                                        <option value="Female" @if($account['gender'] == 'Female') selected @endif>Female</option>
                                                        <option value="Others" @if($account['gender'] == 'Others') selected @endif>Others</option>
                                                    </select>
                                                    @php echo from_input_error_message('gender') @endphp
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-12 col-lg-12 mb-3">
                                                <div class="form-group">
                                                    <label for="address">Address</label>
                                                    <input type="text" class="form-control" name="address" id="address"
                                                        placeholder="Address" value="{{ $account['name'] }}">
                                                    @php echo from_input_error_message('address') @endphp
                                                </div>
                                            </div>




                                            <div class="col-12 col-md-6 col-lg-6 mb-3">
                                                <div class="form-group">
                                                    <label for="picture">Profile Picture / Logo</label>
                                                    <input type="file" class="form-control-file" id="profile"
                                                        name="profile">
                                                    @php echo from_input_error_message('profile') @endphp
                                                </div>
                                            </div>
											
											@if($account['profile'] != '')
											<div class="col-12 col-md-6 col-lg-6 mb-3">
                                                <div class="form-group">
                                                    <img src="{{ asset('uploads/user/'.$account['profile']) }}" style="max-width:200px">
                                                    <br> <label for="picture">Profile Picture</label>

                                                </div>
                                            </div>
                                            @endif
                                            <div class="col-12 col-md-12 col-lg-12 my-3 text-center">
                                                <div class="forms-buttons">
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </div>
                                            </div>
                                        </div>


                                    </form>
                                </div>
                            </div>
                        </section>
                    </div>
                    