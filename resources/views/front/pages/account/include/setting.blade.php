 <div class="tab-pane fade my-acc-sub-heading @if($active_tab == 'setting') show active @endif" id="tab4" role="tabpanel">
                        <h4>Change Password</h4>
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12">
                                <div class="right-panel p-0">

                                    <div id="login-error-message"></div>
                                    <form id="update_password" action="javascript:;">
                                        <div class="row">

                                            <div class="col-12 col-md-6 col-lg-6 mb-3">

                                                <div class="form-group">
                                                    <label>Current Password</label>
                                                    <div class="input-group">
                                                        <input type="password" class="form-control" 
                                                            name="current_password" id="current_password"
                                                            placeholder="Enter Current Password">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text pb-2 showpassword" data-mode="show"
                                                                data-id="current_password">SHOW</span>
                                                        </div>
												     
                                                    </div>
                                                      @php echo from_input_error_message('current_password') @endphp
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-6 mb-3">

                                                <div class="form-group">
                                                    <label>New Password</label>
                                                    <div class="input-group">
                                                        <input type="password" class="form-control"
                                                            name="new_password" id="new_password"
                                                            placeholder="Enter New password">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text pb-2 showpassword" data-mode="show"
                                                                data-id="new_password">SHOW</span>
                                                        </div>
												
												       

                                                    </div>
                                                    @php echo from_input_error_message('new_password') @endphp
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4 m-auto">
                                                <a style="color:#fff" onclick="update_password()" type="submit" class="btn btn-primary btn-block">Submit</a>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                