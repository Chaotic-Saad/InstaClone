@extends('layouts.app')

@section('content')

<div class="container"> 
<form action=" /profile/{{ $user->id }} " enctype="multipart/form-data" method="POST">  
        @csrf
        @method('PATCH') 
   <div class="row">
       
           <div class="col-8 offset-2">

            <div class="form-group row">
                <label for="title" class="col-md-4 col-form-label ">{{ __('Edit Your Title') }}</label>

                    <input name="title" id="title" type="text" 
                    class="form-control @error('title') is-invalid @enderror" 
                    value="{{ old('title') ?? $user->profile->title}}" 
                    autocomplete="title" autofocus>

                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
           </div>
       </div>

       <div class="col-8 offset-2">
     

      <div class="form-group row">
          <label for="description" class="col-md-4 col-form-label ">{{ __('Edit Your Description') }}</label>

              <input name="description" id="description" type="text" 
              class="form-control @error('description') is-invalid @enderror" 
              value="{{ old('description') ?? $user->profile->description}}" 
              autocomplete="description" autofocus>

              @error('description')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
      </div>
     </div>


     <div class="col-8 offset-2">
 

      <div class="form-group row">
          <label for="url" class="col-md-4 col-form-label ">{{ __('Edit your Url') }}</label>

              <input name="url" id="url" type="text" 
              class="form-control @error('url') is-invalid @enderror" 
              value="{{ old('url') ?? $user->profile->url }}" 
              autocomplete="url" autofocus>

              @error('url')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
      </div>
     </div>

       <div class="row">
        <div class="col-8 offset-2">
         <div class="form-group row">

             <label for="image" class="col-md-4 col-form-label ">{{ __('Profile Image') }}</label>

                 <input id="image" type="file" class="form-control-file" id="image" name="image">

                 @error('image')
                         <strong>{{ $message }}</strong>
                 @enderror
         </div>
         <div class="row">
            <button class="btn btn-primary btn-lg btn-block">Save Changes</button>
         </div>
        </div> 
    </div>

    </form> 
</div>
@endsection
