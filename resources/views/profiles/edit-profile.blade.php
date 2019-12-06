<div class="py-5">
    <form action="{{ route('profile.update') }}" method="POST">
    @csrf
    <div class="row">
        <div class="form-group col-md-6">
            <label><small>Email</small></label>
            <div class="input-group input-group-alternative">
            <input class="form-control" name="email" value="{{ $user_details['email'] }}" type="email" required>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label><small>First Name</small></label>
            <div class="input-group input-group-alternative">
            <input class="form-control" name="first_name"  value="{{ explode(' ', $user_details['name'])[0] }}" type="text" required>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label><small>Last Name</small></label>
            <div class="input-group input-group-alternative">
            <input class="form-control" name="last_name" value="{{ explode(' ', $user_details['name'])[1] }}" type="text" required>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label><small>Home address</small></label>
            <div class="input-group input-group-alternative">
            <input class="form-control" name="location"  value="{{ $user_details['location'] }}" type="text" required>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label><small>Date of Birth</small></label>
            <div class="input-group input-group-alternative">
            <input class="form-control" name="dob"  value="{{ $user_details['dob'] }}" type="text" required>
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
            <input class="form-control" name="phone"  value="{{ $user_details['phone'] }}" type="text" required>
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
                <textarea class="form-control" name="bio" value="{{ $user_details['bio'] }}" required></textarea>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label><small>Office Phone Number</small></label>
            <div class="input-group input-group-alternative">
            <input class="form-control" name="office_phone" value="{{ $user_details['office_phone'] }}" type="text">
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
            <input class="form-control" name="level" value="{{ $user_details['level'] }}" type="text">
            </div>
        </div>
        <div class="form-group col-md-6">
            <label><small>Designation</small></label>
            <div class="input-group input-group-alternative">
            <input class="form-control" name="designation"  value="{{ $user_details['designation'] }}" type="text">
            </div>
        </div>
        <div class="form-group col-md-6">
            <label><small>International Passport Number</small></label>
            <div class="input-group input-group-alternative">
            <input class="form-control" name="intl_passport_no" value="{{ $user_details['intl_passport_no'] }}" type="text">
            </div>
        </div>
        <div class="form-group col-md-6">
            <label><small>Emergency Contact Person</small></label>
            <div class="input-group input-group-alternative">
            <input class="form-control" name="emergency_contact_person" value="{{ $user_details['emergency_contact_person'] }}" required type="text">
            </div>
        </div>
        <div class="form-group col-md-6">
            <label><small>Emergency Contact's Phone Number</small></label>
            <div class="input-group input-group-alternative">
            <input class="form-control" name="emergency_contact_phone" value="{{ $user_details['emergency_contact_phone'] }}" required  type="text">
            </div>
        </div>
        <div class="form-group col-md-12">
            <label><small>Date Employed</small></label>
            <div class="input-group input-group-alternative">
            <input class="form-control" name="date_employed" value="{{ $user_details['date_employed'] }}"  type="text">
            </div>
        </div>
        <div class="form-group col-md-6">
            <label><small>Bank Name</small></label>
            <div class="input-group input-group-alternative">
            <input class="form-control" name="salary_account_bank" value="{{ $user_details['salary_account_bank'] }}" required  type="text">
            </div>
        </div>
        <div class="form-group col-md-6">
            <label><small>Account Name</small></label>
            <div class="input-group input-group-alternative">
            <input class="form-control" name="salary_account_name" value="{{ $user_details['salary_account_name'] }}" required  type="text">
            </div>
        </div>
        <div class="form-group col-md-6">
            <label><small>Account Number</small></label>
            <div class="input-group input-group-alternative">
            <input class="form-control" name="salary_account_no" value="{{ $user_details['salary_account_no'] }}" required  type="text">
            </div>
        </div>
        <div class="form-group col-md-6">
            <label><small>Pension PIN Number</small></label>
            <div class="input-group input-group-alternative">
            <input class="form-control" name="pension_pin" value="{{ $user_details['pension_pin'] }}"  type="text">
            </div>
        </div>
        <div class="form-group col-md-6">
            <label><small>Pension Fund Administrator</small></label>
            <div class="input-group input-group-alternative">
            <input class="form-control" name="pension_admin" value="{{ $user_details['pension_admin'] }}"  type="text">
            </div>
        </div>
    </div>

    <div class="text-center">
        <button type="submit" class="btn btn-block btn-primary my-4">Update Profile</button>
    </div>
    </form>
</div>

