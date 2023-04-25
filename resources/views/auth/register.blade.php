@extends('layouts.app')

@section('content')
<section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Sign Up') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="f_name" class="col-md-4 col-form-label text-md-end">{{ __('First Name*') }}</label>
                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>
                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="l_name" class="col-md-4 col-form-label text-md-end">{{ __('Last Name*') }}</label>
                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>
                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address*') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password*') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password*') }}</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                @error('password-confirm')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="mobile-number" class="col-md-4 col-form-label text-md-end">{{ __('Mobile Number') }}</label>
                            <div class="col-md-6">
                                <input id="mobile-number" type="text" class="form-control" name="mobile_number"  autocomplete="mobile_number">
                                @error('mobile_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                            </div>
                        </div>

                        <!-- <div class="row mb-3">
                            <label for="resume" class="col-md-4 col-form-label text-md-end">{{ __('Resume') }}</label>
                            <div class="col-md-6">
                                <input id="resume" type="file" class="form-control" name="resume"   >
                                @error('resume')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> -->

                        <div class="row mb-3">
                            <label for="service" class="col-md-4 col-form-label text-md-end" >{{ __('Service*') }}</label>
                            <div class="col-md-6">
                                <select name="service" class="form-control" id="service" required>
                                    <option value="Contingency + Retained">Contingency + Retained</option>
                                    <option value="Contingency Only">Contingency Only </option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" required  value="1" name="agreement"  id="agreement" {{ old('agreement') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="term-condition">
                                           <p>I agree to the <a href="#">Terms and Conditions</a> & <a href="#">Privacy Policy</a></p> 
                                        </label>
                                        @error('agreement')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                        </div>
                        <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" required value="1"  name="fee-agreement" id="fee-agreement" {{ old('fee-agreement') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="term-condition">
                                            <p>I agreee to the the <a href="#">Success fee agreement</a> </p>
                                        </label>
                                        @error('fee-agreement')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                        </div>
                        @if(isset($messageError))
                        
                               {{ $messageError }}
                           
                        @endif
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Sign Up') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12 text-center ">
                        <div class=" mb-5">
                            <h2 style="font-family: Raleway, sans-serif !important;font-weight: 500;font-size: 1.5rem;"> Service</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center mt-5">
                        <div class=" mb-5">
                            <h4> Contingency + Retained </h4>
                            <p class="mt-3"> $100 Per Month For 500 Job Application & Email to Hiring Manager.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center mt-5">
                        <div class=" mb-5">
                            <h4> Contingency Only</h4>
                            <p class="mt-3"> It's Free Until You're Hired!.</p>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
</div>
@endsection
