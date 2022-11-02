<div wire:ignore.self class="modal fade" id="adminUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">x</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
            <div class="row">
                <div class="form-group col-md-12 mb-4">
                    <input type="text"
                        class="form-control input-lg @error('firstname') is-invalid @enderror"
                        name="firstname" value="{{ old('firstname') }}" required autocomplete="name"
                        autofocus placeholder="First Name" wire:model="firstname">
                    @error('firstname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group col-md-12 mb-4">
                    <input type="text"
                        class="form-control input-lg @error('lastname') is-invalid @enderror"
                        name="lastname" value="{{ old('lastname') }}" required autocomplete="name"
                        autofocus placeholder="Last Name" wire:model="lastname">
                    @error('lastname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group col-md-12 mb-4">
                    <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                        <input type="radio" id="customRadio1" name="sex" wire:model="sex" value="1" {{ old('role') == 1 ? 'checked' : ''  }}
                            class="custom-control-input @error('sex') is-invalid @enderror" checked
                            required>
                        <label class="custom-control-label" for="customRadio1">Male</label>
                        @error('sex')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                        <input type="radio" id="customRadio2" name="sex" wire:model="sex" value="2"
                            class="custom-control-input @error('sex') is-invalid @enderror"
                            required {{ old('sex') == 2 ? 'checked' : ''  }}>
                        <label class="custom-control-label" for="customRadio2">Female</label>
                        @error('sex')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group col-md-12 mb-4">
                    <!-- Date Input -->
                    <label class="text-dark font-weight-medium" for="">Birth Date</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text mdi mdi-calendar"
                                id="basic-addon1"></span>
                        </div>
                        <input type="date" class="form-control @error('birthdate') is-invalid @enderror" value="{{ old('birthdate') }}" wire:model="birthdate"  name="birthdate"
                            data-mask="00/00/0000" required>
                            @error('birthdate')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                </div>
                <div class="form-group col-md-12 mb-4">
                    <!-- Phone input -->
                    <label class="text-dark font-weight-medium">Phone Number</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text mdi mdi-phone" id="basic-addon1"></span>
                        </div>
                        <input type="number" name="phone_number" wire:model="phone_number" class="form-control @error('phone_number') is-invalid @enderror" value="{{ old('phone_number') }}"  data-mask="(999) 999-9999">
                        @error('phone_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group col-md-12 mb-4">
                    <!-- Phone input -->
                    <label class="text-dark font-weight-medium">Address</label>
                    <div class="input-group mb-3">
                        <input type="text" name="address" wire:model="address" class="form-control @error('address') is-invalid @enderror" value="{{ old('address') }}"  data-mask="(999) 999-9999">
                        @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                    <div class="form-group col-md-12 mb-4">
                        <label for="exampleFormControlSelect12">User Role</label>
                        <select class="form-control" wire:model="role" name="role"
                            id="exampleFormControlSelect12" required>
                            <option value="" selected>Select User Role</option>
                            <option value="1" {{ old('role') == 1 ? 'selected' : ''  }}>Administrator</option>
                            <option value="2" {{ old('role') == 2 ? 'selected' : ''  }}>Employee</option>
                            <option value="3" {{ old('role') == 3 ? 'selected' : ''  }}>Customer</option>
                        </select>
                        @error('role')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                <div class="form-group col-md-12 mb-4">
                    <input type="email" wire:model="email"
                        class="form-control input-lg @error('email') is-invalid @enderror" value="{{ old('email') }}"
                        name="email" required autocomplete="email"
                        placeholder="Email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group col-md-12 ">
                    <input type="password" wire:model="password"
                        class="form-control input-lg @error('password') is-invalid @enderror"
                        name="password" required autocomplete="new-password"
                        placeholder="Password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group col-md-12 ">
                    <input type="password" class="form-control input-lg" id="cpassword" wire:model="cpassword"
                        name="password_confirmation" required autocomplete="new-password"
                        placeholder="Confirm Password">
                </div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary btn-pill" wire:click.prevent="store()">Add User</button>
      </div>
    </div>
  </div>
</div>
