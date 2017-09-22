@extends('layouts.app')

@section('content')
<div class="columns">
      <div class="column is-one-third is-offset-one-third m-t-100">
          <div class="card">
            <div class="card-content">
                <h2 class="title">Join The Community</h2>
                <form action="{{ route('register') }}" method="post" role="form">
                       {{ csrf_field() }}
                       <div class="field">
                             <label for="name" class="label">Name</label>
                             <p class="control">
                               <input class="input {{ $errors->has('name') ? 'is-danger' : '' }}" type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Aa.." required>
                             </p>
                       </div>
                       @if ($errors->has('name'))
                           <p class="help is-danger">{{ $errors->first('name') }}</p>
                       @endif

                      <div class="field">
                            <label for="email" class="label">Email Adress</label>
                            <p class="control">
                              <input class="input {{ $errors->has('email') ? 'is-danger' : '' }}" required type="text" name="email" id="email" value="{{ old('email') }}" placeholder="name@example.com">
                            </p>
                      </div>
                      @if ($errors->has('email'))
                          <p class="help is-danger">{{ $errors->first('email') }}</p>
                      @endif
                      <div class="columns">
                          <div class="column">
                            <div class="field">
                                  <label for="password" class="label">Password</label>
                                  <p class="control">
                                    <input class="input {{ $errors->has('email') ? 'is-danger' : '' }}" required type="password" name="password" id="password">
                                  </p>
                            </div>
                            @if ($errors->has('password'))
                                <p class="help is-danger">{{ $errors->first('password') }}</p>
                            @endif
                          </div>
                          <div class="column">
                            <div class="field">
                                  <label for="password_confirmation" class="label">Confirm Password</label>
                                  <p class="control">
                                    <input class="input {{ $errors->has('password_confirmation') ? 'is-danger' : '' }}" required type="password" name="password_confirmation" id="password_confirmation">
                                  </p>
                            </div>
                            @if ($errors->has('password_confirmation'))
                                <p class="help is-danger">{{ $errors->first('password_confirmation') }}</p>
                            @endif
                          </div>
                      </div>




                      <input type="submit" class="button is-success is-outlined is-fullwidth m-t-20" value="Register">
                </form>
            </div> <!-- end of .card-content-->

          </div> <!-- end of .card-->
          <h5 class="has-text-centered m-t-10">
            <a href="{{ route('login') }}" class="is-muted">
                Already have an account?
            </a>
          </h5>

          </div>
      </div>
  </div>

@endsection
