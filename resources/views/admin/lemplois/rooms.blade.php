@extends("layouts.admin")

@section("content")
    <div class="">
        @if (session()->has("message"))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <strong>{{ session("message") }}</strong> 
            </div>
            
            <script>
              $(".alert").alert();
            </script>
        @endif
        <div class="tableima">
            <h1 class="text-center">Gestion Des Salles en l`institute Ima</h1>
            <table  class="table-bordered  text-center bg-white tableroomss">
                <tr>
                    <td colspan="2"></td>  
                    <td >8-9</td>
                    <td>9-10</td>
                    <td>10-11</td>
                    <td>11-12</td>
                    <td>12-1</td>
                    <td>1-2</td>
                    <td>2-3</td>
                    <td>3-4</td>
                    <td>4-5</td>
                    <td>5-6</td>
                    <td>6-7</td>
                    <td>7-8</td>
                    <td>8-9</td>
                    <td>9-10</td>
                    <td>10-11</td>
                </tr>
                <tr style="background-color: orange; color: white;">
                    <th rowspan="5" style="transform: rotate(-90deg); " >
                        IMA
                    </th>
                </tr>
                <tr class="tirashrashjdfg">               
                 <th style="color: orange;">R1</th>
                    @foreach ($imas as $ima)
                        <td >{{ $ima->room_1 }}  <a class="editroow" href="{{ route("admin.edit.ima.table",$ima->id) }}"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                    @endforeach
                   
                </tr>
                <tr class="tirashrashjdfg">               
                    <th style="color: orange;">R2</th>
                    @foreach ($imas as $ima)
                        <td >{{ $ima->room_2 }} <a class="editroow" href="{{ route("admin.edit.ima.table",$ima->id) }}"><i class="fa fa-edit" aria-hidden="true"></i></a> </td>
                    @endforeach
                   </tr>
    
                   <tr class="tirashrashjdfg">               
                    <th style="color: orange;">R3</th>
                    @foreach ($imas as $ima)
                        <td >{{ $ima->room_3 }} <a class="editroow" href="{{ route("admin.edit.ima.table",$ima->id) }}"><i class="fa fa-edit" aria-hidden="true"></i></a> </td>
                    @endforeach
                   </tr>
                   <tr class="tirashrashjdfg">               
                    <th style="color: orange;">R4</th>
                    @foreach ($imas as $ima)
                        <td >{{ $ima->room_4 }} <a class="editroow" href="{{ route("admin.edit.ima.table",$ima->id) }}"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                    @endforeach
                   </tr>
                
            </table>
        </div>
<hr>

        {{-- institute iphec manageents Rooms --}}

        <div class="tableiphec">
            @if (session()->has("message1"))
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <strong>{{ session("message1") }}</strong> 
            </div>
            
            <script>
              $(".alert").alert();
            </script>
        @endif
            <h1 class="text-center">Gestion Des Salles en l`institute Iphec</h1>
            <table  class="table-bordered  text-center bg-white tableroomss">
                <tr>
                    <td colspan="2"></td>  
                    <td >8-9</td>
                    <td>9-10</td>
                    <td>10-11</td>
                    <td>11-12</td>
                    <td>12-1</td>
                    <td>1-2</td>
                    <td>2-3</td>
                    <td>3-4</td>
                    <td>4-5</td>
                    <td>5-6</td>
                    <td>6-7</td>
                    <td>7-8</td>
                    <td>8-9</td>
                    <td>9-10</td>
                    <td>10-11</td>
                </tr>
                <tr style="background-color: blue; color: white;">
                    <th rowspan="10" style="transform: rotate(-90deg); " >
                        IPHEC
                    </th>
                </tr>
                <tr class="tirashrashjdfg">               
                 <th style="color: blue;">R1</th>
                 @foreach ($iphecs as $iphec)
                    <td >{{ $iphec->room_1 }} <a class="editroow" href="{{ route("admin.edit.iphec.table",$iphec->id) }}"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                 @endforeach
                </tr>
                <tr class="tirashrashjdfg">               
                    <th style="color: blue;">R2</th>
                    @foreach ($iphecs as $iphec)
                       <td >{{ $iphec->room_2 }} <a class="editroow" href="{{ route("admin.edit.iphec.table",$iphec->id) }}"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                    @endforeach
                   </tr>
    
                   <tr class="tirashrashjdfg">               
                    <th style="color: blue;">R3</th>
                    @foreach ($iphecs as $iphec)
                    <td >{{ $iphec->room_3 }} <a class="editroow" href="{{ route("admin.edit.iphec.table",$iphec->id) }}"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                    @endforeach
                   </tr>
                   <tr class="tirashrashjdfg">               
                    <th style="color: blue;">R4</th>
                    @foreach ($iphecs as $iphec)
                    <td >{{ $iphec->room_4 }} <a class="editroow" href="{{ route("admin.edit.iphec.table",$iphec->id) }}"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                    @endforeach
                   </tr>
                   <tr class="tirashrashjdfg">               
                    <th style="color: blue;">R5</th>
                    @foreach ($iphecs as $iphec)
                    <td >{{ $iphec->room_4 }} <a class="editroow" href="{{ route("admin.edit.ima.table",$iphec->id) }}"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                    @endforeach
                   </tr>
                   <tr class="tirashrashjdfg">               
                    <th style="color: blue;">R6</th>
                    @foreach ($iphecs as $iphec)
                    <td >{{ $iphec->room_6 }} <a class="editroow" href="{{ route("admin.edit.iphec.table",$iphec->id) }}"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                    @endforeach
                   </tr>
                   <tr class="tirashrashjdfg">               
                    <th style="color: blue;">R7</th>
                    @foreach ($iphecs as $iphec)
                    <td >{{ $iphec->room_7 }} <a class="editroow" href="{{ route("admin.edit.iphec.table",$iphec->id) }}"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                    @endforeach
                   </tr>
                   <tr class="tirashrashjdfg">               
                    <th style="color: blue;">R8</th>
                    @foreach ($iphecs as $iphec)
                    <td >{{ $iphec->room_8 }} <a class="editroow" href="{{ route("admin.edit.iphec.table",$iphec->id) }}"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                     @endforeach
                   </tr>
                   <tr class="tirashrashjdfg">               
                    <th style="color: blue;">R9</th>
                    @foreach ($iphecs as $iphec)
                    <td >{{ $iphec->room_9 }} <a class="editroow" href="{{ route("admin.edit.iphec.table",$iphec->id) }}"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                    @endforeach
                   </tr>
                   
                
            </table>        
        </div>
        {{-- <div class="text-center mt-3 mb-4">
            <a class="btn btn-primary " href="">
                <i class="fa fa-edit" aria-hidden="true"></i> Edit Lemploi Iphec
            </a>
        </div> --}}

    </div>
@endsection