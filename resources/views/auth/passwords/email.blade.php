@extends('layouts.app')

@section('content')

  @if (session('status'))
      <div class="notification is-success">
          {{ session('status') }}
      </div>
  @endif
<div class="columns">
      <div class="column is-one-third is-offset-one-third m-t-100">
          <div class="card">
            <div class="card-content">
                <h1 class="title">Forgot Password</h1>
                <form action="{{ route('password.email') }}" method="post" role="form">
                       {{ csrf_field() }}
                      <div class="field">
                            <label for="email" class="label">Email Adress</label>
                            <p class="control">
                              <input class="input {{ $errors->has('email') ? 'is-danger' : '' }}" type="text" name="email" id="email" value="{{ old('email') }}" placeholder="name@example.com">
                            </p>
                      </div>
                      @if ($errors->has('email'))
                          <p class="help is-danger">{{ $errors->first('email') }}</p>
                      @endif

                      <input type="submit" class="button is-success is-outlined is-fullwidth m-t-20" value="Get reset Link">
                </form>
            </div> <!-- end of .card-content-->

          </div> <!-- end of .card-->
          <h5 class="has-text-centered m-t-10">
            <a href="{{ route('login') }}" class="is-muted">
                <i class="fa fa-caret-left"></i> Back to login.
            </a>
          </h5>

          </div>
      </div>
</div>
@endsection
