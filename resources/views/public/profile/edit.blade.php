@extends('app.template')
@section('title', 'Edit Profile')


@section('content')
<style>
    .required {color:red;}
</style>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="profile__img">
                <img src="{{ env('APP_URL')}}/avatars/{{ Auth::user()->avatar }}" alt="">

               
                
                <a class="zmdi zmdi-edit zmdi-hc-fw profile__img__edit"></a>
                <input type="file" name="avatar" / hidden>
                
            
            </div>
            
            <div class="col-md-10">
                <form method="POST" action="{{ env('APP_URL') }}/profile/edit">
                    @csrf
                    <h4>Name <small class="required">*</small></h4>
                    <div class="form-group">
                        <input id="name" name="name" type="text" class="form-control input-lg"  value="{{ Auth::user()->name }}" readonly>
                        <i class="form-group__bar"></i>
                    </div>

                    <h4>Email <small class="required">*</small></h4>
                    <div class="form-group">
                        <input id="email" name="email" type="email" class="form-control input-lg"  value="{{ Auth::user()->email }}">
                        <i class="form-group__bar"></i>
                    </div>

                    <h4>Quote</h4>
                    <div class="form-group">
                        <input id="quote" name="quote" type="text" class="form-control input-lg"  value="{{ Auth::user()->quote }}">
                        <i class="form-group__bar"></i>
                    </div>

                    <h4>IGN</h4>
                    <div class="form-group">
                        <input id="ign" name="ign" type="text" class="form-control input-lg"  value="{{ Auth::user()->ign }}">
                        <i class="form-group__bar"></i>
                    </div>

                    <h4>Growtopia Forums</h4>
                    <div class="form-group">
                        <input id="growtopiaf" name="growtopiaf" type="text" class="form-control input-lg"  value="{{ Auth::user()->growtopia_forums }}">
                        <i class="form-group__bar"></i>
                    </div>

                    <h4>Biography</h4>
                    <div class="form-group">
                        <textarea id="bio" name="bio" class="form-control text-counter" data-max-length="500" rows="3">{{ Auth::user()->bio }}</textarea>
                        <i class="form-group__bar"></i>
                    </div>

                    <button type="submit" class="btn btn-success">Save Settings</button>
                </form>
            </div>
        
        </div>
    </div>
</div>
@endsection