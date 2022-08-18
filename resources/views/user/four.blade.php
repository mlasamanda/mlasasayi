@extends('index')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('FORM FOUR RESULT') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('form_four') }}">

                        @csrf
                        <div class="row mb-3">
                            <label for="fournumber" class="col-md-4 col-form-label text-md-end">{{ __('Index Number') }}</label>
                            <div class="col-md-6">
                                <input id="fournumber" type="text" class="form-control @error('fournumber') is-invalid @enderror" name="fournumber" value="{{ old('fournumber') }}" required autocomplete="fournumber" autofocus>

                                @error('fournumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="fourschool" class="col-md-4 col-form-label text-md-end">{{ __('Name of School') }}</label>
                            <div class="col-md-6">
                                <input id="fourschool" type="text" class="form-control
                                @error('fourschool') is-invalid @enderror" name="fourschool" value="{{ old('sixschool') }}" required autocomplete="fourschool" autofocus>

                                @error('fourschool')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Get result') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
