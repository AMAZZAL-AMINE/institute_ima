@extends("layouts.admin")

@section("content")
    <div class="container">
        <h1>Inscrire un nouvel étudiant</h1>
         <form class="bg-white rounded p-5" method="post" action="{{ route("admin.inscrire.new.student") }}" enctype="multipart/form-data">
            @csrf
             <div class="form-group">
                 <label for="my-input">Nom</label>
                 <input id="fname" class="form-control" type="text" name="fname">
                 @error('fname')
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
             <div class="form-group">
                <label for="my-input">Prénom</label>
                <input id="lname" class="form-control" type="text" name="lname">
                @error('lname')
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
            <div class="form-group">
                <label for="my-input">Cin</label>
                <input id="cin" class="form-control" type="text" name="cin">
                @error('cin')
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

            <div class="form-group">
                <label for="my-input">Image</label>
                <input id="img" class="form-control" type="file" name="img">
            </div>

            <div class="form-group">
                <label for="my-input">Phone</label>
                <input id="phone" class="form-control" type="number" name="phone">
                @error('phone')
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
            <div class="form-group">
                <label for="my-input">date De Naissance</label>
                <input id="dberth" class="form-control" type="date" name="dberth">
                @error('dberth')
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

            <div class="form-group">
                <label for="my-select">Niveau Scolaire</label>
                <select name="nschole" class="form-control">
                    <option value="">...</option>
                    <option value="sans niveau">sans niveau</option>
                    <option value="Primaire">Primaire</option>
                    <option value="Secondaire du premier cycle"> secondaire du premier cycle</option>
                    <option value="Secondaire">secondaire</option>
                    <option value="Université">Université</option>
                </select>
            </div>

            <div class="form-group">
                <label for="my-select">Select Formation</label>
                <select  class="form-control" name="formation">
                    <option value="">...</option>
                    @foreach ($formations as $formation)
                      <option value="{{ $formation->id }}">{{ $formation->name }}</option>
                    @endforeach
                   
                </select>
            </div>
            <button class="btn btn-primary" type="submit">S'inscrire Le Student</button>
         </form>
    </div>
@endsection