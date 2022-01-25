@extends("layouts.admin")

@section("content")
<div  class="container mt-5">
    @if(session()->has("message"))
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

    
    <form action="{{ route("studnet.update.payment",$payment->id) }}" style="margin-top:100px" method="post">
        @csrf
        @method("PUT")
        <table border="1"  class="table border">
            <thead>
              <tr>
                <th scope="col">Edite Mois</th>
                <th scope="col">Edite Prix (DH)</th>
                <th scope="col">Edite La Date</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">
                    <div class="form-group">
                      <label for=""></label>
                      <select  class="custom-select" name="month" id="">
                            <option value="{{ $payment->name }}">{{ $payment->name }}</option>
                            <option value=""></option>
                            <option class="bg-light" value=""></option>
                            <option value="1er">1er Mois</option>
                            <option value="2eme">2eme Mois</option>
                            <option value="3eme">3eme Mois</option>
                            <option value="4eme">4eme Mois</option>
                            <option value="5eme">5eme Mois</option>
                            <option value="6eme">6eme Mois</option>
                            <option value="7eme">7eme Mois</option>
                            <option value="8eme">8eme Mois</option>
                            <option value="9eme">9eme Mois</option>
                            <option value="10eme">10eme Mois</option>
                            <option value="11eme">11eme Mois</option>
                            <option value="12eme">12eme Mois</option>
                        </select>
                    </div>
                    @error('month')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                          <strong>{{ $message }}</strong> 
                        </div>
                        
                        <script>
                          $(".alert").alert();
                        </script>
                    @enderror
                </th>
                <td>
                    <div class="form-group mt-4">
                        <input type="number" class="form-control w-100" placeholder="Prix" name="prix" value="{{ $payment->prix }}" required>
                    </div>
                  </div>
                  @error('prix')
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>{{ $message }}</strong> 
                  </div>
                  
                  <script>
                    $(".alert").alert();
                  </script>
                @enderror
                </td>
                <td>
                    <div class="form-group mt-4">
                        <input type="date" class="form-control w-100"  name="date" value="{{ $payment->created_at->format('Y-m-d') }}">
                    </div>
                </td>
                @error('date')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <strong>{{ $message }}</strong> 
                </div>
                
                <script>
                  $(".alert").alert();
                </script>
              @enderror
              </tr>
              <tr>
                <td colspan="4" class=" text-center ">
                    <button class="btn btn-success"> <i class="fa fa-save" aria-hidden="true"></i> Enregistrez </button>
                </td>
              </tr>
            </tbody>
        </table>
    </form>
</div>
@endsection