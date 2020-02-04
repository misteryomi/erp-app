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
                        <label><small>Desired Username<sup class="text-red font-weight-900">*</sup></small></label>
                        <div class="input-group input-group-alternative">
                        <input class="form-control" name="username" value="{{ old('username') }}" required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label><small>Email<sup class="text-red font-weight-900">*</sup></small></label>
                        <div class="input-group input-group-alternative">
                        <input class="form-control" name="email" value="{{ old('email') }}" type="email" required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label><small>Password<sup class="text-red font-weight-900">*</sup></small></label>
                        <div class="input-group input-group-alternative">
                        <input class="form-control" name="password" required type="password">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label><small>Confirm Password<sup class="text-red font-weight-900">*</sup></small></label>
                        <div class="input-group input-group-alternative">
                        <input class="form-control" name="password_confirmation" required type="password">
                        </div>
                    </div>
                </div>
                <h3>Personal Details</h3>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label><small>First Name<sup class="text-red font-weight-900">*</sup></small></label>
                        <div class="input-group input-group-alternative">
                        <input class="form-control" name="first_name"  value="{{ old('first_name') }}" type="text" required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label><small>Last Name<sup class="text-red font-weight-900">*</sup></small></label>
                        <div class="input-group input-group-alternative">
                        <input class="form-control" name="last_name" value="{{ old('last_name') }}" type="text" required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label><small>Home address<sup class="text-red font-weight-900">*</sup></small></label>
                        <div class="input-group input-group-alternative">
                        <input class="form-control" name="location"  value="{{ old('location') }}" type="text" required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label><small>Date of Birth<sup class="text-red font-weight-900">*</sup></small></label>
                        <div class="input-group input-group-alternative">
                        <input class="form-control datepicker"  autocomplete="off" name="dob"  value="{{ old('dob') }}" type="text" required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label><small>Gender<sup class="text-red font-weight-900">*</sup></small></label>
                        <div class="input-group input-group-alternative">
                            <select class="form-control" name="sex" required>
                                <option value="">Select an option</option>
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label><small>Phone Number<sup class="text-red font-weight-900">*</sup></small></label>
                        <div class="input-group input-group-alternative">
                        <input class="form-control" name="phone"  value="{{ old('phone') }}" type="text" required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label><small>State of Origin<sup class="text-red font-weight-900">*</sup></small></label>
                        <div class="input-group input-group-alternative">
                            <input type="text" class="form-control" value="{{ old('state_of_origin') }}" name="state_of_origin" required />
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label><small>Marital Status<sup class="text-red font-weight-900">*</sup></small></label>
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
                        <label><small>BIO (Tell us something interesting about yourself)<sup class="text-red font-weight-900">*</sup></small></label>
                        <div class="input-group input-group-alternative">
                            <textarea class="form-control" name="bio" required>{{ old('bio') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label><small>Office Phone Number</small></label>
                        <div class="input-group input-group-alternative">
                        <input class="form-control" name="office_phone" value="{{ old('office_phone') }}" type="text">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label><small>Department<sup class="text-red font-weight-900">*</sup></small></label>
                        <div class="input-group input-group-alternative">
                            <select class="form-control" id="departments" name="department" required>
                                <option value="">Select an option</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label><small>Unit<sup class="text-red font-weight-900">*</sup></small></label>
                        <div class="input-group input-group-alternative">
                            <select class="form-control" id="units" name="sub_unit" required disabled>
                                <option value="">Select an option</option>
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
                        <label><small>Emergency Contact Person<sup class="text-red font-weight-900">*</sup></small></label>
                        <div class="input-group input-group-alternative">
                        <input class="form-control" name="emergency_contact_person" value="{{ old('emergency_contact_person') }}" required type="text">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label><small>Emergency Contact's Phone Number<sup class="text-red font-weight-900">*</sup></small></label>
                        <div class="input-group input-group-alternative">
                        <input class="form-control" name="emergency_contact_phone" value="{{ old('emergency_contact_phone') }}" required  type="text">
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label><small>Date Employed</small></label>
                        <div class="input-group input-group-alternative">
                        <input class="form-control datepicker" autocomplete="off" name="date_employed" value="{{ old('date_employed') }}"  type="text">
                        </div>
                    </div>
                </div>
                <h3>Salary Bank Details</h3>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label><small>Bank Name<sup class="text-red font-weight-900">*</sup></small></label>
                        <div class="input-group input-group-alternative">
                        <input class="form-control" name="salary_account_bank" value="{{ old('salary_account_bank') }}" required  type="text">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label><small>Account Name<sup class="text-red font-weight-900">*</sup></small></label>
                        <div class="input-group input-group-alternative">
                        <input class="form-control" name="salary_account_name" value="{{ old('salary_account_name') }}" required  type="text">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label><small>Account Number<sup class="text-red font-weight-900">*</sup></small></label>
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

                <div class="d-flex justify-content-center">
                    <div class="g-recaptcha" data-sitekey="6Lf5ptEUAAAAAAAlkmtSgdQC5KHfqWdp7GzJl6aq"></div>
                </div>

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
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<!-- <script src="{{ asset('assets/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script> -->

@include('includes.units')
@endsection
