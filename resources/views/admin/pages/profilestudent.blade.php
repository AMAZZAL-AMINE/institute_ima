@extends("layouts.admin")

@section("content")
<div class="container">
    <div class="topheaderprofile">
        <div class="addbackgroungdark" style="text-align: center; font-size: 25px;color: white;">{{ strtoupper($institute->institute) }}</div>
        <div class="studentprofileimg">
            <div class="img">
                <img src="{{ asset("/storage/".$student->image) }}" alt="">
            </div>
            <div class="text">
                <h1>{{ strtoupper($student->fname) }} {{ strtoupper($student->lname) }}</h1>
                <p>{{ $student->users->email }}</p>
            </div>
            <div>
                <button type="button" class="btn btn-success mt-3 ml-5" data-toggle="modal" data-target="#exampleModalCenter">
                    <i class="fa fa-edit" aria-hidden="true"></i> Edit Profile
                </button>
                <div class="modal fade " id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <form action="{{ route("admin.update.student",$student->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Update Profile</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>



   




                            <div class="modal-body">



                                <div class="input-group mb-3">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="my-addon" >Date D`inscription </span>
                                    </div>
                                    <input class="form-control" type="date" name="d_inscrire" placeholder="Date D`inscription" aria-label="Recipient's " value="{{ $student->created_at->format('Y-m-d') }}" aria-describedby="my-addon">
                                </div>

                                <div class="input-group">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="my-addon" >Nom De Etudiant </span>
                                    </div>
                                    <input class="form-control" type="text" name="f_name" placeholder="Nom De Etudiant" aria-label="Recipient's " value="{{ $student->lname }}" aria-describedby="my-addon">
                                </div>
                                <div class="input-group mt-3">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="my-addon" >Prenom De Etudiant </span>
                                    </div>
                                    <input class="form-control " type="text" name="l_name" placeholder="Prenom De Etudiant" aria-label="Recipient's " value="{{ $student->fname }}" aria-describedby="my-addon">
                                </div>
                                



                                <div class="input-group mt-3">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="my-addon" >Phone De Etudiant </span>
                                    </div>
                                    <input class="form-control " type="number" name="phone" placeholder="Phone De Etudiant" aria-label="Recipient's " value="{{ $student->phone }}" aria-describedby="my-addon">
                                </div>
                                <div class="input-group mt-3">
                                    <div class="input-group-append ">
                                        <span class="input-group-text" id="my-addon" >Cin De Etudiant </span>
                                    </div>
                                    <input class="form-control " type="text" name="cin" placeholder="Cin De Etudiant" aria-label="Recipient's " value="{{ $student->cin }}" aria-describedby="my-addon">
                                </div>
                                <div class="input-group mt-3">
                                    <div class="input-group-append ">
                                        <span class="input-group-text" id="my-addon" >Date de naissance</span>
                                    </div>
                                    <input class="form-control " type="date" name="berthday" placeholder="Date de naissance" aria-label="Recipient's " value="{{ $student->berthday }}" aria-describedby="my-addon">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="my-select">Formation</label>
                                    <select id="my-select" class="form-control" name="formation">
                                        <option value="{{ $student->formation_id }}">{{ $student->formations->name }}</option>
                                       <option value="" disabled class="bg-danger"></option>
                                        @foreach ($formations as $formation)
                                        <option value="{{ $formation->id }}">{{ $formation->name }}</option>
                                       @endforeach
                                       
                                    </select>
                                </div>

                                <div class="input-group mt-3">
                                    <div class="input-group-append ">
                                        <span class="input-group-text" id="my-addon" >Photo De Etudiant</span>
                                    </div>
                                    <input class="form-control p-1" type="file" name="profile"  aria-label="Recipient's " aria-describedby="my-addon">
                                </div>
                                <div  style="margin-top: 120px;">
                                    <img style=" border-radius: 10px;" src="{{ asset("storage/".$student->image) }}" alt="">
                                </div>
                                <div class="input-group mt-3">
                                    <div class="input-group-append ">
                                        <span class="input-group-text" id="my-addon" >Image Cin De Etudiant</span>
                                    </div>
                                    <input class="form-control p-1" type="file" name="cin_img"  aria-label="Recipient's " aria-describedby="my-addon">
                                </div>
                                <div  style="margin-top: 120px;">
                                    <img style=" border-radius: 10px;" src="{{ asset("storage/".$student->cin_img) }}" alt="">
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if (session()->has('message'))
        <div class="alert alert-primary alert-dismissible fade show mt-3" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <strong>{{ session("message") }}</strong> 
        </div>
        
        <script>
          $(".alert").alert();
        </script>
    @endif
    <div class="mt-3">
        <img style="max-width: 100%;" src="{{ asset("/storage/".$student->cin_img) }}" alt="">
    </div>
    <hr>
    <h1 class=" font-weight-bold text-dark mb-5">Informations Sur Les Etudiants</h1>
    <table>
        <tr>
            <th>Nom Et Prénom</th>
            <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
            <td style="color: black; font-weight: bold">{{ strtoupper($student->fname) }} {{ strtoupper($student->lname) }}</td>
        </tr>
        <tr><td></td> </tr>
        <tr> <td></td> </tr>
        <tr><td></td></tr>
        <tr><td></td></tr>
        <tr><td></td></tr>
        <tr><td></td></tr>
        <tr><td></td></tr>
        <tr><td><hr></td></tr>
        
        <tr>
            <th>Formation</th>
            <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
            <td style="color: black; font-weight: bold"><?php echo $student->formations->name ?? "<span class='text-danger'>No Formation Selcted</span>" ?></td>
        </tr>
        <tr><td></td> </tr>
        <tr> <td></td> </tr>
        <tr><td></td></tr>
        <tr><td></td></tr>
        <tr><td></td></tr>
        <tr><td></td></tr>
        <tr><td></td></tr>
        <tr><td><hr></td></tr>
        <tr>
            <th>Phone Number</th>
            <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
            <td style="color: black; font-weight: bold">{{ $student->phone }}</td>
        </tr>
        <tr><td></td> </tr>
        <tr> <td></td> </tr>
        <tr><td></td></tr>
        <tr><td></td></tr>
        <tr><td></td></tr>
        <tr><td></td></tr>
        <tr><td></td></tr>
        <tr><td><hr></td></tr>
        <tr>
            <th>Cart National</th>
            <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
            <td style="color: black; font-weight: bold">{{ $student->cin }}</td>
        </tr>
        <tr><td></td> </tr>
        <tr> <td></td> </tr>
        <tr><td></td></tr>
        <tr><td></td></tr>
        <tr><td></td></tr>
        <tr><td></td></tr>
        <tr><td></td></tr>
        <tr><td><hr></td></tr>
        <tr>
            <th>Niveau De School</th>
            <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
            <td style="color: black; font-weight: bold">{{ $student->nvschole }}</td>
        </tr>
        <tr><td></td> </tr>
        <tr> <td></td> </tr>
        <tr><td></td></tr>
        <tr><td></td></tr>
        <tr><td></td></tr>
        <tr><td></td></tr>
        <tr><td></td></tr>
        <tr><td><hr></td></tr>
        <tr>
            <th>Registerd At</th>
            <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
            <td style="color: black; font-weight: bold">{{ $student->created_at->format('Y-m-d') }}</td>
        </tr>
        <tr><td></td> </tr>
        <tr> <td></td> </tr>
        <tr><td></td></tr>
        <tr><td></td></tr>
        <tr><td></td></tr>
        <tr><td></td></tr>
        <tr><td></td></tr>
        <tr><td><hr></td></tr>
        <tr>
            <th>Date de naissance</th>
            <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
            <td style="color: black; font-weight: bold">{{ $student->berthday }}</td>
        </tr>
    </table>
    <!-- 
    <div class="allbodiessbobys">
        <div class="userdetailbody">
            <div class="gropone">
                <div class="leftone">1</div>
                <div class="contetn">
                    <div class="gottolineefghejg"></div>
                    <div class="sometextnemext"><span>Nom Et Prénom : </span>
                        <b>{{ strtoupper($student->fname) }} {{ strtoupper($student->lname) }}</b>
                    </div>
                </div>
            </div>
            <div class="inespan"></div>
            <div class="gropone">
                <div class="leftone">2</div>
                <div class="contetn">
                    <div class="gottolineefghejg"></div>
                    <div class="sometextnemext"><span>Formation : </span>
                        <b>
                            <?php echo $student->formations->name ?? "<span class='text-danger'>No Formation Selcted</span>" ?>
                        </b>
                    </div>

                </div>
            </div>
            <div class="inespan"></div>
            <div class="gropone">
                <div class="leftone">3</div>
                <div class="contetn">
                    <div class="gottolineefghejg"></div>
                    <div class="sometextnemext"><span>Phone Number : </span> <b>{{ $student->phone }}</b></div>
                </div>
            </div>

            <div class="inespan"></div>
            <div class="gropone">
                <div class="leftone">4</div>
                <div class="contetn">
                    <div class="gottolineefghejg"></div>
                    <div class="sometextnemext"><span>Cart National : </span> <b>{{ $student->cin }}</b></div>
                </div>
            </div>
            <div class="inespan"></div>
            <div class="gropone">
                <div class="leftone">5</div>
                <div class="contetn">
                    <div class="gottolineefghejg"></div>
                    <div class="sometextnemext"><span>Niveau School: </span> <b>{{ $student->nvschole }}</b></div>
                </div>
            </div>
            <div class="inespan"></div>
            <div class="gropone">
                <div class="leftone">6</div>
                <div class="contetn">
                    <div class="gottolineefghejg"></div>
                    <div class="sometextnemext"><span>Registerd At : </span> <b>{{ $student->created_at->format('Y-m-d') }}</b></div>
                    <div style="margin-left: 0.5px;" class="gottolineefghejg "></div>
                    <div class="sometextnemext"><span>Berthday : </span> <b>{{ $student->berthday }}</b></div>
                </div>
            </div>
        </div>
    </div> -->

    <hr class="">
    {{-- stydent all iInfo About Payemnts --}}
    <div class="">
        <h1 class=" font-weight-bold text-dark mb-2">Informations De Paiements</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Month</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Date De Payment</th>
                    <th scope="col" >Edit</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mounths as $stud)
                <tr>
                    <td>{{ $stud->name }}</td>
                    <td>{{ $stud->prix  }} DH</td>
                    <td>{{ $stud->created_at->format('Y-m-d') }}</td>
                    @if (Auth::check() && auth()->user()->is_admin_pro === "yes")
                        <td> <a class="btn btn-outline-primary" href="{{ route("admin.update.payment.page",$stud->id) }}"><i class="fa fa-edit" aria-hidden="true"></i></a> </td>                        
                    @endif
                </tr>
                @endforeach
                <tr>
                    <td>Totale :</td>
                    <td></td>
                    <td>{{ $mounths->sum('prix')}} DH</td>
                </tr>
            </tbody>
        </table>
        <div class="text-center">
            <a class="btn btn-primary" href="{{ route("payment-store.data.new.month",$student->id) }}"><i class="fa fa-plus" aria-hidden="true"></i> Add Anouther Payed Mounth</a>
        </div>
        <div class="text-center mt-3">
            <!-- <a class="btn btn-success" href=""><i class="fa fa-print" aria-hidden="true"></i> Print A Deplome</a> -->
        </div>
    </div>
    <hr>
    <h1 class=" font-weight-bold text-dark mb-2">Informations De Labsence</h1>
    <table border   class="table border text-center mt-5 border bg-white  ">
        <thead>
            <tr>
            <th scope="col">Le Mois</th>
            <th scope="col">Nomber Séance</th>
            <th scope="col">Présent </th>
            <th scope="col">Absent </th>
            <th scope="col">La Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($absences as $absencet)
            <tr>
                <th scope="row">{{ $absencet->month }}</th>
                <td>{{ $absencet->seance }}</td>
                <td>
                    @if($absencet->apsence === null && $absencet->precent === "yes")
                        <span class="text-success"> <i class="fa fa-check" aria-hidden="true"></i> </span>
                        @else
                        {{ null }}
                    @endif
                </td>
                <td>
                    @if($absencet->precent === null && $absencet->apsence === "yes")
                        <span class="text-success"> <i class="fa fa-check" aria-hidden="true"></i> </span>
                        @else
                        {{ null }}
                    @endif
                </td>
                <td>{{ $absencet->date }}</td>
            </tr> 
            @endforeach 

        </tbody>
        
    </table>
    <div class="text-center mb-5">
        <a class="btn btn-success" href="{{ route("admin.createAbsence",$student->id) }}"><i class="fa fa-plus" aria-hidden="true"></i> Créer Absence</a>
    </div>
</div>
</div>
@endsection