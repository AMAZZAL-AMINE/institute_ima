@extends("layouts.admin")

@section("content")
    <div class="container">
        <div class="topheaderprofile">
             <div class="addbackgroungdark"></div>
             <div class="studentprofileimg">
                    <div class="img">
                        <img src="{{ asset("/storage/".$student->image) }}" alt="">
                    </div>
                    <div class="text">
                        <h1>{{ strtoupper($student->fname) }} {{  strtoupper($student->lname) }}</h1>
                        <p>{{ $student->users->email }}</p>
                    </div>
             </div>
        </div>
        <hr>
        <div class="allbodiessbobys">
            <div class="userdetailbody">
                <div class="gropone">
                    <div class="leftone">1</div>
                    <div class="contetn">
                       <div class="gottolineefghejg"></div> 
                        <div class="sometextnemext"><span>Nom Et Prénom :  </span> 
                            <b>{{ strtoupper($student->fname) }} {{  strtoupper($student->lname) }}</b>
                        </div>
                    </div>
                </div>
                <div class="inespan"></div>
                <div class="gropone">
                    <div class="leftone">2</div>
                    <div class="contetn">
                       <div class="gottolineefghejg"></div> <div class="sometextnemext"><span>Formation :  </span> 
                        <b>
                            <?php echo $student->formations->name ?? "<span class='text-danger'>No Formation Selcted</span>" ?>
                        </b></div>
                        
                    </div>
                </div> 
                <div class="inespan"></div>
                <div class="gropone">
                    <div class="leftone">3</div>
                    <div class="contetn">
                       <div class="gottolineefghejg"></div> <div class="sometextnemext"><span>Phone Number :  </span> <b>{{ $student->phone }}</b></div>
                    </div>
                </div>
                
                <div class="inespan"></div>
                <div class="gropone">
                    <div class="leftone">4</div>
                    <div class="contetn">
                       <div class="gottolineefghejg"></div> <div class="sometextnemext"><span>Cart National :  </span> <b>{{ $student->cin }}</b></div>
                    </div>
                </div>  
                <div class="inespan"></div>
                <div class="gropone">
                    <div class="leftone">5</div>
                    <div class="contetn">
                       <div class="gottolineefghejg"></div> <div class="sometextnemext"><span>Niveau School:  </span> <b>{{ $student->nvschole }}</b></div>
                    </div>
                </div>  
                <div class="inespan"></div>
                <div class="gropone">
                    <div class="leftone">6</div>
                    <div class="contetn">
                       <div class="gottolineefghejg"></div> <div class="sometextnemext"><span>Registerd At :  </span> <b>{{ $student->created_at->format('Y-m-d') }}</b></div>
                       <div style="margin-left: 0.5px;" class="gottolineefghejg "></div> <div class="sometextnemext"><span>Berthday :  </span> <b>{{ $student->berthday }}</b></div>
                    </div>
                </div> 
            </div>
        </div>

        <hr class="mt-5">
        {{-- stydent all iInfo About Payemnts --}}
        <div class="tabmespayments">
            <div class="titletableskdhfg">All About Payment Of This Student</div>
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Month</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Date De Payment</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Prix De Inscription</td>
                        <td>{{ $student->firstPayed }} DH</td>
                        <td>{{ $student->updated_at->format("Y-m-d") }}</td>
                    </tr>
                    @foreach ($mounths as $stud)
                    <tr>
                        <td>{{ $stud->name }}</td>
                        <td>{{  $stud->prix  }} DH</td>
                        <td>{{ $stud->created_at->format('Y-m-d') }}</td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
@endsection