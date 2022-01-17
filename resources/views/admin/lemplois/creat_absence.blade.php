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
        <div class="mt-5">
            <h3 class="text-dark text-center font-weight-bold">Créer Absence De <span class="text-primary"> {{ $student->fname }} {{ $student->lname }}</span></h3>
        </div>
        
        <form action="{{ route("admin.store.absence",$student->id) }}" style="margin-top:100px" method="post">
            @csrf
            <table border="1"  class="table border">
                <thead>
                  <tr>
                    <th scope="col">Select Mois</th>
                    <th scope="col">Nomber Séance</th>
                    <th scope="col">Absence</th>
                    <th scope="col">La Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">
                        <div class="form-group">
                          <label for=""></label>
                          <select  class="custom-select" name="month" id="">
                                <option selected>Select one</option>
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
                            <input type="text" class="form-control w-100" placeholder="Number De Séance" name="seance">
                        </div>

                        @error('seance')
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
                        <label for=""></label>
                        <select  class="custom-select" name="absence" >
                              <option selected>Select Statu</option>
                              <option value="Absent">Absent</option>
                              <option value="Présent">Présent</option>
                          </select>
                      </div>
                      @error('absence')
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
                            <input type="date" class="form-control w-100"  name="date" value="<?php echo date('Y-m-d'); ?>">
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
                        <button class="btn btn-primary">Créer L'absence</button>
                    </td>
                  </tr>
                </tbody>
              </table>
        </form>
    </div>
@endsection