 <link rel="stylesheet" href="/css/login_register.css">
 <link rel="icon" type="image/svg" href="/images/logo.svg" />
 <div class="container">
     <div class="mainCont">
         <div class="col-md-8">
             <div class="card">
                

                 <div class="card-body">
                     <form method="POST" action="{{ route('register') }}">
                         @csrf

                         <div class="row mb-3">
                             <label for="name"
                                 class="email_label">{{ __('Name') }}</label>

                             <div class="col-md-6">
                                 <input id="name" type="text"
                                     class="textinput @error('name') is-invalid @enderror" name="name"
                                     value="{{ old('name') }}" required autocomplete="name" autofocus>

                                 @error('name')
                                     <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                     </span>
                                 @enderror
                             </div>
                         </div>

                         <div class="row mb-3">
                             <label for="email"
                             class="email_label">{{ __('Email Address') }}</label>

                             <div class="col-md-6">
                                 <input id="email" type="email"
                                     class="textinput @error('email') is-invalid @enderror" name="email"
                                     value="{{ old('email') }}" required autocomplete="email">

                                 @error('email')
                                     <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                     </span>
                                 @enderror
                             </div>
                         </div>

                         <div class="row mb-3">
                             <label for="password"
                             class="email_label">{{ __('Password') }}</label>

                             <div class="col-md-6">
                                 <input id="password" type="password"
                                     class="textinput @error('password') is-invalid @enderror" name="password"
                                     required autocomplete="new-password">

                                 @error('password')
                                     <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                     </span>
                                 @enderror
                             </div>
                         </div>

                         <div class="row mb-3">
                             <label for="password-confirm"
                             class="email_label">{{ __('Confirm Password') }}</label>

                             <div class="col-md-6">
                                 <input id="password-confirm" type="password" class="textinput"
                                     name="password_confirmation" required autocomplete="new-password">
                             </div>
                         </div>
                         @if (Route::has('login'))
                         <a class="forgot" href="{{ route('login') }}">
                             {{ __('Already have an account?') }}
                         </a>
                     @endif
                         <div class="row mb-0">
                             <div class="col-md-6 offset-md-4">
                                 <button type="submit" class="login">
                                     {{ __('Register') }}
                                 </button>
                             </div>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </div>
