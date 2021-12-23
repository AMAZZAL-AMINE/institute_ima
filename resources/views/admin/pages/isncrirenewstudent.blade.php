@extends("layouts.admin")

@section("content")
    <div class="container">
         <form method="post" action="" enctype="multipart/form-data">
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
                <input id="image" class="form-control" type="file" name="image">
                @error('image')
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
                <div class="inputtitle">Niveau Scolaire</div>
                <select name="nschole">
                    <option value="">...</option>
                    <option value="sans niveau">sans niveau</option>
                    <option value="Primaire">Primaire</option>
                    <option value="Secondaire du premier cycle"> secondaire du premier cycle</option>
                    <option value="Secondaire">secondaire</option>
                    <option value="Université">Université</option>

                </select>
            </div>
            <div class="ninscschole">
                <div class="inputtitle">Select Formation:</div>
                <select name="formation">
                    <option value="">...</option>
                    <option value="1">AIDE PHARMACIE مساعد صيدلي</option>
                    <option value="2">ASSISTANTE SOCIALE مساعد اجتماعي</option>
                    <option value="3"> ASSISTANTE MÉDICALE السكرتارية الطبية</option>
                    <option value="4">CENTRE D’APPEL تكوين في مراكز الاتصال</option>
                    <option value="5">COMPTABILITÉ ET GESTION المحاسبة و التسيير</option>
                </select>
            </div>
            <button type="submit">S'inscrire</button>
         </form>
    </div>
@endsection