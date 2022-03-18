@extends("layouts.admin")

@section("content")
    @if (auth()->user()->is_admin_pro === "yes")
        <div class="container">
            @if(session()->has('message'))
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <strong> {{ session("message") }} </strong> 
                </div>
                
                <script>
                  $(".alert").alert();
                </script>
            @endif
            <form action="{{ route("admin.edit.data.store",$user->id) }}" method="post">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="name">Admin Nom & Prénom</label>
                    <input id="name" class="form-control" type="text" name="name" value="{{ $user->name }}">
                    @error("name")
                        <small class="text-danger">
                            *{{ $message }}
                        </small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Admin Email </label>
                    <input id="email" class="form-control" type="text" name="email" value="{{ $user->email }}">
                    @error("email")
                    <small class="text-danger">
                        *{{ $message }}
                    </small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">Enter Noveau Password </label>
                    <input id="password" class="form-control" type="password" name="password" >
                </div>
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-save" aria-hidden="true"></i> Save 
                </button>
            </form>
        </div>
    @endif 
@endsection