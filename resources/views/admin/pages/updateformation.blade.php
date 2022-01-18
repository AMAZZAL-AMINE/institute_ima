@extends("layouts.admin")

@section("content")
    <div class="container">
        <h1>Edit La Formation</h1>
        @if(session()->has('message'))
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <strong>{{ session("message") }}</strong> 
            </div>
            <script>
              $(".alert").alert();
            </script>
        @endif
        <form method="post" action="{{ route("admin.update.formation",$formation->id) }}" class="mt-5 bg-white p-5 border rounded">
            @csrf
            @method("PUT")
            <div class="">
                <label class="sr-only" for="inlineFormInputGroupUsername">Username</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">Edit Nom De Formation</div>
                  </div>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{ $formation->name }}">
                </div>
                @error('name')
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <strong>{{ $message }}</strong> 
                    </div>
                    
                    <script>
                      $(".alert").alert();
                    </script>
                @enderror
            </div>
            <div class="mt-3">
                <label class="sr-only" for="inlineFormInputGroupUsername">Username</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">Edit Slug De Formation</div>
                  </div>
                  <input type="text" class="form-control" name="slug" id="slug" placeholder="Slug" value="{{ $formation->slug }}">
                </div>
                @error('slug')
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <strong>{{ $message }}</strong> 
                </div>
                
                <script>
                  $(".alert").alert();
                </script>
            @enderror
            </div>
            <div class="form-group mt-5">
                <textarea id="desc" name="desc" placeholder="Formation Description" ><?php echo $formation->description ?></textarea>
                @error('desc')
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong> {{ $message }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                @enderror
            </div>
            
            <button class="btn btn-primary">
               <i class="fas fa-cloud-upload-alt    "></i> Update Formation
            </button>
        </form>
    </div>
    <script>
        tinymce.init({
            selector: 'textarea',
            toolbar_mode: 'floating',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
        });
    </script>
@endsection