@extends('layouts.app')

@section('content')
<section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" >
                            @csrf

                            <div class="row mb-3">
                                <label for="service" class="col-md-4 col-form-label text-md-end" >{{ __('Service*') }}</label>
                                <div class="col-md-6">
                                    <select name="service" class="form-control" id="service" required>
                                        <option value="Contingency + Retained">Contingency + Retained</option>
                                        <option value="Contingency Only">Contingency Only </option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="button" class="btn btn-primary" onClick="onSubmit()">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    <script>
        function onSubmit(){
            var service = $('#service').val();
            console.log(service);
            if(service === 'Contingency + Retained'){
                window.open(
                    'https://conn365.com/login', "_blank");
            }else{
                window.open(
                    'https://app.cardinaltalent.ai/users/sign_in', "_blank");
            }
        }

    </script>
@endsection



