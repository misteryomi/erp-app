@extends('layouts.auth')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-7">
          <div class="card bg-secondary shadow border-0">
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <h4>Welcome to Primera Internal Resource Stream (IRS)</h4>
                <small>Create your IRS account</small><br/>
                <a href="{{ route('login') }}"><small><strong>Already own an account? Click here to login</strong></small></a>

              </div>

              @include('layouts.partials.alert')

              <form action="{{ route('post.register') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="form-group col-md-6">
                        <label><small>Desired Username</small></label>
                        <div class="input-group input-group-alternative">
                        <input class="form-control" name="username" value="{{ old('username') }}" required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label><small>Email</small></label>
                        <div class="input-group input-group-alternative">
                        <input class="form-control" name="email" value="{{ old('email') }}" type="email" required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label><small>Password</small></label>
                        <div class="input-group input-group-alternative">
                        <input class="form-control" name="password" required type="password">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label><small>Confirm Password</small></label>
                        <div class="input-group input-group-alternative">
                        <input class="form-control" name="password_confirmation" required type="password">
                        </div>
                    </div>
                </div>
                <h3>Personal Details</h3>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label><small>First Name</small></label>
                        <div class="input-group input-group-alternative">
                        <input class="form-control" name="first_name"  value="{{ old('first_name') }}" type="text" required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label><small>Last Name</small></label>
                        <div class="input-group input-group-alternative">
                        <input class="form-control" name="last_name" value="{{ old('last_name') }}" type="text" required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label><small>Home address</small></label>
                        <div class="input-group input-group-alternative">
                        <input class="form-control" name="location"  value="{{ old('location') }}" type="text" required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label><small>Date of Birth</small></label>
                        <div class="input-group input-group-alternative">
                        <input class="form-control" name="dob"  value="{{ old('dob') }}" type="text" required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label><small>Gender</small></label>
                        <div class="input-group input-group-alternative">
                            <select class="form-control" name="sex" required>
                                <option value="">Select an option</option>
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label><small>Phone Number</small></label>
                        <div class="input-group input-group-alternative">
                        <input class="form-control" name="phone"  value="{{ old('phone') }}" type="text" required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label><small>State of Origin</small></label>
                        <div class="input-group input-group-alternative">
                            <select class="form-control" name="state_of_origin" required>
                                <option value="">Select an option</option>
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label><small>Marital Status</small></label>
                        <div class="input-group input-group-alternative">
                            <select class="form-control" name="marital_status" required>
                                <option value="">Select an option</option>
                                <option>Single</option>
                                <option>Married</option>
                                <option>Divorced</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label><small>BIO (Tell us something interesting about yourself)</small></label>
                        <div class="input-group input-group-alternative">
                            <textarea class="form-control" name="bio" value="{{ old('bio') }}" required></textarea>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label><small>Office Phone Number</small></label>
                        <div class="input-group input-group-alternative">
                        <input class="form-control" name="office_phone" value="{{ old('office_phone') }}" type="text">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label><small>Department</small></label>
                        <div class="input-group input-group-alternative">
                            <select class="form-control" name="department" required>
                                <option value="">Select an option</option>
                                <option>Single</option>
                                <option>Married</option>
                                <option>Divorced</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label><small>Unit</small></label>
                        <div class="input-group input-group-alternative">
                            <select class="form-control" name="sub_unit" required>
                                <option value="">Select an option</option>
                                <option>Single</option>
                                <option>Married</option>
                                <option>Divorced</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label><small>Grade/Level</small></label>
                        <div class="input-group input-group-alternative">
                        <input class="form-control" name="level" value="{{ old('level') }}" type="text">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label><small>Designation</small></label>
                        <div class="input-group input-group-alternative">
                        <input class="form-control" name="designation"  value="{{ old('designation') }}" type="text">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label><small>International Passport Number</small></label>
                        <div class="input-group input-group-alternative">
                        <input class="form-control" name="intl_passport_no" value="{{ old('intl_passport_no') }}" type="text">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label><small>Emergency Contact Person</small></label>
                        <div class="input-group input-group-alternative">
                        <input class="form-control" name="emergency_contact_person" value="{{ old('emergency_contact_person') }}" required type="text">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label><small>Emergency Contact's Phone Number</small></label>
                        <div class="input-group input-group-alternative">
                        <input class="form-control" name="emergency_contact_phone" value="{{ old('emergency_contact_phone') }}" required  type="text">
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label><small>Date Employed</small></label>
                        <div class="input-group input-group-alternative">
                        <input class="form-control" name="date_employed" value="{{ old('date_employed') }}"  type="text">
                        </div>
                    </div>
                </div>
                <h3>Salary Bank Details</h3>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label><small>Bank Name</small></label>
                        <div class="input-group input-group-alternative">
                        <input class="form-control" name="salary_account_bank" value="{{ old('salary_account_bank') }}" required  type="text">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label><small>Account Name</small></label>
                        <div class="input-group input-group-alternative">
                        <input class="form-control" name="salary_account_name" value="{{ old('salary_account_name') }}" required  type="text">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label><small>Account Number</small></label>
                        <div class="input-group input-group-alternative">
                        <input class="form-control" name="salary_account_no" value="{{ old('salary_account_no') }}" required  type="text">
                        </div>
                    </div>
                </div>
                <h3>Pension Information</h3>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label><small>Pension PIN Number</small></label>
                        <div class="input-group input-group-alternative">
                        <input class="form-control" name="pension_pin" value="{{ old('pension_pin') }}"  type="text">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label><small>Pension Fund Administrator</small></label>
                        <div class="input-group input-group-alternative">
                        <input class="form-control" name="pension_admin" value="{{ old('pension_admin') }}"  type="text">
                        </div>
                    </div>
                </div>

                <div class="g-recaptcha" data-sitekey="6LerW8oUAAAAAIUnhm9cDz2qQrDJZqfYRcum9ays"></div>
                <br/>

                <div class="text-center">
                  <button type="submit" class="btn btn-block btn-primary my-4">Create Account</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
  </div>
@endsection
@section('scripts')
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
    async defer>
</script>
<script type="text/javascript">
  var onloadCallback = function() {
    console.log("grecaptcha is ready!");
  };
</script>
@endsection
