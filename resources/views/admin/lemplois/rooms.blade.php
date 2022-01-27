@extends("layouts.admin")
@section("titles")
    <style>
        table {
        display: none;
        width: 100%;
        text-align: center;
    }
    table.active {
        display: block;
    }
    select {
        
       width: 50%;
        padding: 10px;
        background: #fff9f9;
        border: none;
        border-radius: 5px;
        font-size: 18px;
        display: flex;
        justify-content: center;
        border: 1px solid blue;
        margin: auto;
        outline: none;
    }
    </style>
@endsection
@section('content')
    @if (auth()->user()->is_admin_pro === 'yes')
        <div class="">
            @if (session()->has('message'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>{{ session('message') }}</strong>
                </div>

                <script>
                    $(".alert").alert();
                </script>
            @endif
            <div class="tableima">
                <h1 class="text-center">Gestion Des Salles en l`institute Ima</h1>
                <select   onchange="getValue(this.value)">
                    <option value="">Choisissez le jour</option>
                    <option value="lundi">Lundi</option>
                    <option value="mardi">Mardi</option>
                    <option value="mercredi">Mercredi</option>
                    <option value="judi">Jeudi</option>
                    <option value="vendredi">Vendredi</option>
                    <option value="samedi">Samedi</option>
                    <option value="demanch">Dimanche</option>
                </select>
                <table id="lundi" class="table-bordered  text-center bg-white tableroomss mt-3">
                    <tr>
                        <td colspan="2"></td>
                        <td>8-9</td>
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
                        <th rowspan="5" style="transform: rotate(-90deg); ">
                            IMA
                        </th>
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: orange;">R1</th>
                        @foreach ($lundi as $ima)
                            <td>{{ $ima->room_1 }} <a class="editroow"
                                    href="{{ route('admin.edit.ima.table', $ima->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach

                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: orange;">R2</th>
                        @foreach ($lundi as $ima)
                            <td>{{ $ima->room_2 }} <a class="editroow"
                                    href="{{ route('admin.edit.ima.table', $ima->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a> </td>
                        @endforeach
                    </tr>

                    <tr class="tirashrashjdfg">
                        <th style="color: orange;">R3</th>
                        @foreach ($lundi as $ima)
                            <td>{{ $ima->room_3 }} <a class="editroow"
                                    href="{{ route('admin.edit.ima.table', $ima->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a> </td>
                        @endforeach
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: orange;">R4</th>
                        @foreach ($lundi as $ima)
                            <td>{{ $ima->room_4 }} <a class="editroow"
                                    href="{{ route('admin.edit.ima.table', $ima->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>

                </table>



                <table id="mardi" class="table-bordered  text-center bg-white tableroomss mt-3">
                    <tr>
                        <td colspan="2"></td>
                        <td>8-9</td>
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
                        <th rowspan="5" style="transform: rotate(-90deg); ">
                            IMA
                        </th>
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: orange;">R1</th>
                        @foreach ($mardi as $ima)
                            <td>{{ $ima->room_1 }} <a class="editroow"
                                    href="{{ route('admin.edit.ima.table', $ima->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach

                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: orange;">R2</th>
                        @foreach ($mardi as $ima)
                            <td>{{ $ima->room_2 }} <a class="editroow"
                                    href="{{ route('admin.edit.ima.table', $ima->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a> </td>
                        @endforeach
                    </tr>

                    <tr class="tirashrashjdfg">
                        <th style="color: orange;">R3</th>
                        @foreach ($mardi as $ima)
                            <td>{{ $ima->room_3 }} <a class="editroow"
                                    href="{{ route('admin.edit.ima.table', $ima->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a> </td>
                        @endforeach
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: orange;">R4</th>
                        @foreach ($mardi as $ima)
                            <td>{{ $ima->room_4 }} <a class="editroow"
                                    href="{{ route('admin.edit.ima.table', $ima->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>

                </table>
                

                <table id="mercredi" class="table-bordered  text-center bg-white tableroomss mt-3">
                    <tr>
                        <td colspan="2"></td>
                        <td>8-9</td>
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
                        <th rowspan="5" style="transform: rotate(-90deg); ">
                            IMA
                        </th>
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: orange;">R1</th>
                        @foreach ($mercredi as $ima)
                            <td>{{ $ima->room_1 }} <a class="editroow"
                                    href="{{ route('admin.edit.ima.table', $ima->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach

                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: orange;">R2</th>
                        @foreach ($mercredi as $ima)
                            <td>{{ $ima->room_2 }} <a class="editroow"
                                    href="{{ route('admin.edit.ima.table', $ima->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a> </td>
                        @endforeach
                    </tr>

                    <tr class="tirashrashjdfg">
                        <th style="color: orange;">R3</th>
                        @foreach ($mercredi as $ima)
                            <td>{{ $ima->room_3 }} <a class="editroow"
                                    href="{{ route('admin.edit.ima.table', $ima->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a> </td>
                        @endforeach
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: orange;">R4</th>
                        @foreach ($mercredi as $ima)
                            <td>{{ $ima->room_4 }} <a class="editroow"
                                    href="{{ route('admin.edit.ima.table', $ima->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>

                </table>



                <table id="judi" class="table-bordered  text-center bg-white tableroomss mt-3">
                    <tr>
                        <td colspan="2"></td>
                        <td>8-9</td>
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
                        <th rowspan="5" style="transform: rotate(-90deg); ">
                            IMA
                        </th>
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: orange;">R1</th>
                        @foreach ($jedi as $ima)
                            <td>{{ $ima->room_1 }} <a class="editroow"
                                    href="{{ route('admin.edit.ima.table', $ima->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach

                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: orange;">R2</th>
                        @foreach ($jedi as $ima)
                            <td>{{ $ima->room_2 }} <a class="editroow"
                                    href="{{ route('admin.edit.ima.table', $ima->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a> </td>
                        @endforeach
                    </tr>

                    <tr class="tirashrashjdfg">
                        <th style="color: orange;">R3</th>
                        @foreach ($jedi as $ima)
                            <td>{{ $ima->room_3 }} <a class="editroow"
                                    href="{{ route('admin.edit.ima.table', $ima->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a> </td>
                        @endforeach
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: orange;">R4</th>
                        @foreach ($jedi as $ima)
                            <td>{{ $ima->room_4 }} <a class="editroow"
                                    href="{{ route('admin.edit.ima.table', $ima->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>

                </table>




                <table id="vendredi" class="table-bordered  text-center bg-white tableroomss mt-3">
                    <tr>
                        <td colspan="2"></td>
                        <td>8-9</td>
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
                        <th rowspan="5" style="transform: rotate(-90deg); ">
                            IMA
                        </th>
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: orange;">R1</th>
                        @foreach ($vendredi as $ima)
                            <td>{{ $ima->room_1 }} <a class="editroow"
                                    href="{{ route('admin.edit.ima.table', $ima->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach

                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: orange;">R2</th>
                        @foreach ($vendredi as $ima)
                            <td>{{ $ima->room_2 }} <a class="editroow"
                                    href="{{ route('admin.edit.ima.table', $ima->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a> </td>
                        @endforeach
                    </tr>

                    <tr class="tirashrashjdfg">
                        <th style="color: orange;">R3</th>
                        @foreach ($vendredi as $ima)
                            <td>{{ $ima->room_3 }} <a class="editroow"
                                    href="{{ route('admin.edit.ima.table', $ima->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a> </td>
                        @endforeach
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: orange;">R4</th>
                        @foreach ($vendredi as $ima)
                            <td>{{ $ima->room_4 }} <a class="editroow"
                                    href="{{ route('admin.edit.ima.table', $ima->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>

                </table>



                <table id="samedi" class="table-bordered  text-center bg-white tableroomss mt-3">
                    <tr>
                        <td colspan="2"></td>
                        <td>8-9</td>
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
                        <th rowspan="5" style="transform: rotate(-90deg); ">
                            IMA
                        </th>
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: orange;">R1</th>
                        @foreach ($samedi as $ima)
                            <td>{{ $ima->room_1 }} <a class="editroow"
                                    href="{{ route('admin.edit.ima.table', $ima->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach

                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: orange;">R2</th>
                        @foreach ($samedi as $ima)
                            <td>{{ $ima->room_2 }} <a class="editroow"
                                    href="{{ route('admin.edit.ima.table', $ima->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a> </td>
                        @endforeach
                    </tr>

                    <tr class="tirashrashjdfg">
                        <th style="color: orange;">R3</th>
                        @foreach ($samedi as $ima)
                            <td>{{ $ima->room_3 }} <a class="editroow"
                                    href="{{ route('admin.edit.ima.table', $ima->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a> </td>
                        @endforeach
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: orange;">R4</th>
                        @foreach ($samedi as $ima)
                            <td>{{ $ima->room_4 }} <a class="editroow"
                                    href="{{ route('admin.edit.ima.table', $ima->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>

                </table>


                <table id="demanch" class="table-bordered  text-center bg-white tableroomss mt-3">
                    <tr>
                        <td colspan="2"></td>
                        <td>8-9</td>
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
                        <th rowspan="5" style="transform: rotate(-90deg); ">
                            IMA
                        </th>
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: orange;">R1</th>
                        @foreach ($dimanch as $ima)
                            <td>{{ $ima->room_1 }} <a class="editroow"
                                    href="{{ route('admin.edit.ima.table', $ima->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach

                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: orange;">R2</th>
                        @foreach ($dimanch as $ima)
                            <td>{{ $ima->room_2 }} <a class="editroow"
                                    href="{{ route('admin.edit.ima.table', $ima->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a> </td>
                        @endforeach
                    </tr>

                    <tr class="tirashrashjdfg">
                        <th style="color: orange;">R3</th>
                        @foreach ($dimanch as $ima)
                            <td>{{ $ima->room_3 }} <a class="editroow"
                                    href="{{ route('admin.edit.ima.table', $ima->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a> </td>
                        @endforeach
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: orange;">R4</th>
                        @foreach ($dimanch as $ima)
                            <td>{{ $ima->room_4 }} <a class="editroow"
                                    href="{{ route('admin.edit.ima.table', $ima->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>

                </table>



            </div>
            <hr>

            {{-- institute iphec manageents Rooms --}}

            <div class="tableiphec">
                @if (session()->has('message1'))
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>{{ session('message1') }}</strong>
                    </div>

                    <script>
                        $(".alert").alert();
                    </script>
                @endif
                <h1  class="text-center">Gestion Des Salles en l`institute Iphec</h1>
                <select   onchange="getValueTwo(this.value)">
                    <option value="">Choisissez le jour</option>
                    <option value="lundit">Lundi</option>
                    <option value="mardit">Mardi</option>
                    <option value="mercredit">Mercredi</option>
                    <option value="judit">Jeudi</option>
                    <option value="vendredit">Vendredi</option>
                    <option value="samedit">Samedi</option>
                    <option value="demancht">Dimanche</option>
                </select>

                
                <table id="lundit" class="table-bordered  text-center bg-white tableroomss mt-3">
                    <tr>
                        <td colspan="2"></td>
                        <td>8-9</td>
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
                        <th rowspan="10" style="transform: rotate(-90deg); ">
                            IPHEC
                        </th>
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: blue;">R1</th>
                        @foreach ($lundt as $iphec)
                            <td>{{ $iphec->room_1 }} <a class="editroow"
                                    href="{{ route('admin.edit.iphec.table', $iphec->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: blue;">R2</th>
                        @foreach ($lundt as $iphec)
                            <td>{{ $iphec->room_2 }} <a class="editroow"
                                    href="{{ route('admin.edit.iphec.table', $iphec->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>

                    <tr class="tirashrashjdfg">
                        <th style="color: blue;">R3</th>
                        @foreach ($lundt as $iphec)
                            <td>{{ $iphec->room_3 }} <a class="editroow"
                                    href="{{ route('admin.edit.iphec.table', $iphec->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: blue;">R4</th>
                        @foreach ($lundt as $iphec)
                            <td>{{ $iphec->room_4 }} <a class="editroow"
                                    href="{{ route('admin.edit.iphec.table', $iphec->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: blue;">R5</th>
                        @foreach ($lundt as $iphec)
                            <td>{{ $iphec->room_5 }} <a class="editroow"
                                    href="{{ route('admin.edit.iphec.table', $iphec->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: blue;">R6</th>
                        @foreach ($lundt as $iphec)
                            <td>{{ $iphec->room_6 }} <a class="editroow"
                                    href="{{ route('admin.edit.iphec.table', $iphec->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: blue;">R7</th>
                        @foreach ($lundt as $iphec)
                            <td>{{ $iphec->room_7 }} <a class="editroow"
                                    href="{{ route('admin.edit.iphec.table', $iphec->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: blue;">R8</th>
                        @foreach ($lundt as $iphec)
                            <td>{{ $iphec->room_8 }} <a class="editroow"
                                    href="{{ route('admin.edit.iphec.table', $iphec->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: blue;">R9</th>
                        @foreach ($lundt as $iphec)
                            <td>{{ $iphec->room_9 }} <a class="editroow"
                                    href="{{ route('admin.edit.iphec.table', $iphec->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>


                </table>

                <table id="mardit" class="table-bordered  text-center bg-white tableroomss mt-3">
                    <tr>
                        <td colspan="2"></td>
                        <td>8-9</td>
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
                        <th rowspan="10" style="transform: rotate(-90deg); ">
                            IPHEC
                        </th>
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: blue;">R1</th>
                        @foreach ($mardit as $iphec)
                            <td>{{ $iphec->room_1 }} <a class="editroow"
                                    href="{{ route('admin.edit.iphec.table', $iphec->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: blue;">R2</th>
                        @foreach ($mardit as $iphec)
                            <td>{{ $iphec->room_2 }} <a class="editroow"
                                    href="{{ route('admin.edit.iphec.table', $iphec->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>

                    <tr class="tirashrashjdfg">
                        <th style="color: blue;">R3</th>
                        @foreach ($mardit as $iphec)
                            <td>{{ $iphec->room_3 }} <a class="editroow"
                                    href="{{ route('admin.edit.iphec.table', $iphec->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: blue;">R4</th>
                        @foreach ($mardit as $iphec)
                            <td>{{ $iphec->room_4 }} <a class="editroow"
                                    href="{{ route('admin.edit.iphec.table', $iphec->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: blue;">R5</th>
                        @foreach ($mardit as $iphec)
                            <td>{{ $iphec->room_5 }} <a class="editroow"
                                    href="{{ route('admin.edit.iphec.table', $iphec->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: blue;">R6</th>
                        @foreach ($mardit as $iphec)
                            <td>{{ $iphec->room_6 }} <a class="editroow"
                                    href="{{ route('admin.edit.iphec.table', $iphec->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: blue;">R7</th>
                        @foreach ($mardit as $iphec)
                            <td>{{ $iphec->room_7 }} <a class="editroow"
                                    href="{{ route('admin.edit.iphec.table', $iphec->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: blue;">R8</th>
                        @foreach ($mardit as $iphec)
                            <td>{{ $iphec->room_8 }} <a class="editroow"
                                    href="{{ route('admin.edit.iphec.table', $iphec->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: blue;">R9</th>
                        @foreach ($mardit as $iphec)
                            <td>{{ $iphec->room_9 }} <a class="editroow"
                                    href="{{ route('admin.edit.iphec.table', $iphec->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>


                </table>


                <table id="mercredit" class="table-bordered  text-center bg-white tableroomss mt-3">
                    <tr>
                        <td colspan="2"></td>
                        <td>8-9</td>
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
                        <th rowspan="10" style="transform: rotate(-90deg); ">
                            IPHEC
                        </th>
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: blue;">R1</th>
                        @foreach ($mercredit as $iphec)
                            <td>{{ $iphec->room_1 }} <a class="editroow"
                                    href="{{ route('admin.edit.iphec.table', $iphec->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: blue;">R2</th>
                        @foreach ($mercredit as $iphec)
                            <td>{{ $iphec->room_2 }} <a class="editroow"
                                    href="{{ route('admin.edit.iphec.table', $iphec->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>

                    <tr class="tirashrashjdfg">
                        <th style="color: blue;">R3</th>
                        @foreach ($mercredit as $iphec)
                            <td>{{ $iphec->room_3 }} <a class="editroow"
                                    href="{{ route('admin.edit.iphec.table', $iphec->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: blue;">R4</th>
                        @foreach ($mercredit as $iphec)
                            <td>{{ $iphec->room_4 }} <a class="editroow"
                                    href="{{ route('admin.edit.iphec.table', $iphec->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: blue;">R5</th>
                        @foreach ($mercredit as $iphec)
                            <td>{{ $iphec->room_5 }} <a class="editroow"
                                    href="{{ route('admin.edit.iphec.table', $iphec->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: blue;">R6</th>
                        @foreach ($mercredit as $iphec)
                            <td>{{ $iphec->room_6 }} <a class="editroow"
                                    href="{{ route('admin.edit.iphec.table', $iphec->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: blue;">R7</th>
                        @foreach ($mercredit as $iphec)
                            <td>{{ $iphec->room_7 }} <a class="editroow"
                                    href="{{ route('admin.edit.iphec.table', $iphec->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: blue;">R8</th>
                        @foreach ($mercredit as $iphec)
                            <td>{{ $iphec->room_8 }} <a class="editroow"
                                    href="{{ route('admin.edit.iphec.table', $iphec->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: blue;">R9</th>
                        @foreach ($mercredit as $iphec)
                            <td>{{ $iphec->room_9 }} <a class="editroow"
                                    href="{{ route('admin.edit.iphec.table', $iphec->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>


                </table>

                <table id="judit" class="table-bordered  text-center bg-white tableroomss mt-3">
                    <tr>
                        <td colspan="2"></td>
                        <td>8-9</td>
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
                        <th rowspan="10" style="transform: rotate(-90deg); ">
                            IPHEC
                        </th>
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: blue;">R1</th>
                        @foreach ($jedit as $iphec)
                            <td>{{ $iphec->room_1 }} <a class="editroow"
                                    href="{{ route('admin.edit.iphec.table', $iphec->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: blue;">R2</th>
                        @foreach ($jedit as $iphec)
                            <td>{{ $iphec->room_2 }} <a class="editroow"
                                    href="{{ route('admin.edit.iphec.table', $iphec->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>

                    <tr class="tirashrashjdfg">
                        <th style="color: blue;">R3</th>
                        @foreach ($jedit as $iphec)
                            <td>{{ $iphec->room_3 }} <a class="editroow"
                                    href="{{ route('admin.edit.iphec.table', $iphec->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: blue;">R4</th>
                        @foreach ($jedit as $iphec)
                            <td>{{ $iphec->room_4 }} <a class="editroow"
                                    href="{{ route('admin.edit.iphec.table', $iphec->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: blue;">R5</th>
                        @foreach ($jedit as $iphec)
                            <td>{{ $iphec->room_5 }} <a class="editroow"
                                    href="{{ route('admin.edit.iphec.table', $iphec->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: blue;">R6</th>
                        @foreach ($jedit as $iphec)
                            <td>{{ $iphec->room_6 }} <a class="editroow"
                                    href="{{ route('admin.edit.iphec.table', $iphec->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: blue;">R7</th>
                        @foreach ($jedit as $iphec)
                            <td>{{ $iphec->room_7 }} <a class="editroow"
                                    href="{{ route('admin.edit.iphec.table', $iphec->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: blue;">R8</th>
                        @foreach ($jedit as $iphec)
                            <td>{{ $iphec->room_8 }} <a class="editroow"
                                    href="{{ route('admin.edit.iphec.table', $iphec->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: blue;">R9</th>
                        @foreach ($jedit as $iphec)
                            <td>{{ $iphec->room_9 }} <a class="editroow"
                                    href="{{ route('admin.edit.iphec.table', $iphec->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>


                </table>


                <table id="vendredit" class="table-bordered  text-center bg-white tableroomss mt-3">
                    <tr>
                        <td colspan="2"></td>
                        <td>8-9</td>
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
                        <th rowspan="10" style="transform: rotate(-90deg); ">
                            IPHEC
                        </th>
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: blue;">R1</th>
                        @foreach ($vendredit as $iphec)
                            <td>{{ $iphec->room_1 }} <a class="editroow"
                                    href="{{ route('admin.edit.iphec.table', $iphec->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: blue;">R2</th>
                        @foreach ($vendredit as $iphec)
                            <td>{{ $iphec->room_2 }} <a class="editroow"
                                    href="{{ route('admin.edit.iphec.table', $iphec->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>

                    <tr class="tirashrashjdfg">
                        <th style="color: blue;">R3</th>
                        @foreach ($vendredit as $iphec)
                            <td>{{ $iphec->room_3 }} <a class="editroow"
                                    href="{{ route('admin.edit.iphec.table', $iphec->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: blue;">R4</th>
                        @foreach ($vendredit as $iphec)
                            <td>{{ $iphec->room_4 }} <a class="editroow"
                                    href="{{ route('admin.edit.iphec.table', $iphec->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: blue;">R5</th>
                        @foreach ($vendredit as $iphec)
                            <td>{{ $iphec->room_5 }} <a class="editroow"
                                    href="{{ route('admin.edit.iphec.table', $iphec->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: blue;">R6</th>
                        @foreach ($vendredit as $iphec)
                            <td>{{ $iphec->room_6 }} <a class="editroow"
                                    href="{{ route('admin.edit.iphec.table', $iphec->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: blue;">R7</th>
                        @foreach ($vendredit as $iphec)
                            <td>{{ $iphec->room_7 }} <a class="editroow"
                                    href="{{ route('admin.edit.iphec.table', $iphec->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: blue;">R8</th>
                        @foreach ($vendredit as $iphec)
                            <td>{{ $iphec->room_8 }} <a class="editroow"
                                    href="{{ route('admin.edit.iphec.table', $iphec->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: blue;">R9</th>
                        @foreach ($vendredit as $iphec)
                            <td>{{ $iphec->room_9 }} <a class="editroow"
                                    href="{{ route('admin.edit.iphec.table', $iphec->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>


                </table>

                <table id="samedit" class="table-bordered  text-center bg-white tableroomss mt-3">
                    <tr>
                        <td colspan="2"></td>
                        <td>8-9</td>
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
                        <th rowspan="10" style="transform: rotate(-90deg); ">
                            IPHEC
                        </th>
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: blue;">R1</th>
                        @foreach ($samedit as $iphec)
                            <td>{{ $iphec->room_1 }} <a class="editroow"
                                    href="{{ route('admin.edit.iphec.table', $iphec->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: blue;">R2</th>
                        @foreach ($samedit as $iphec)
                            <td>{{ $iphec->room_2 }} <a class="editroow"
                                    href="{{ route('admin.edit.iphec.table', $iphec->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>

                    <tr class="tirashrashjdfg">
                        <th style="color: blue;">R3</th>
                        @foreach ($samedit as $iphec)
                            <td>{{ $iphec->room_3 }} <a class="editroow"
                                    href="{{ route('admin.edit.iphec.table', $iphec->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: blue;">R4</th>
                        @foreach ($samedit as $iphec)
                            <td>{{ $iphec->room_4 }} <a class="editroow"
                                    href="{{ route('admin.edit.iphec.table', $iphec->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: blue;">R5</th>
                        @foreach ($samedit as $iphec)
                            <td>{{ $iphec->room_5 }} <a class="editroow"
                                    href="{{ route('admin.edit.iphec.table', $iphec->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: blue;">R6</th>
                        @foreach ($samedit as $iphec)
                            <td>{{ $iphec->room_6 }} <a class="editroow"
                                    href="{{ route('admin.edit.iphec.table', $iphec->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: blue;">R7</th>
                        @foreach ($samedit as $iphec)
                            <td>{{ $iphec->room_7 }} <a class="editroow"
                                    href="{{ route('admin.edit.iphec.table', $iphec->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: blue;">R8</th>
                        @foreach ($samedit as $iphec)
                            <td>{{ $iphec->room_8 }} <a class="editroow"
                                    href="{{ route('admin.edit.iphec.table', $iphec->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: blue;">R9</th>
                        @foreach ($samedit as $iphec)
                            <td>{{ $iphec->room_9 }} <a class="editroow"
                                    href="{{ route('admin.edit.iphec.table', $iphec->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>


                </table>

                <table id="demancht" class="table-bordered  text-center bg-white tableroomss mt-3">
                    <tr>
                        <td colspan="2"></td>
                        <td>8-9</td>
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
                        <th rowspan="10" style="transform: rotate(-90deg); ">
                            IPHEC
                        </th>
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: blue;">R1</th>
                        @foreach ($dimancht as $iphec)
                            <td>{{ $iphec->room_1 }} <a class="editroow"
                                    href="{{ route('admin.edit.iphec.table', $iphec->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: blue;">R2</th>
                        @foreach ($dimancht as $iphec)
                            <td>{{ $iphec->room_2 }} <a class="editroow"
                                    href="{{ route('admin.edit.iphec.table', $iphec->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>

                    <tr class="tirashrashjdfg">
                        <th style="color: blue;">R3</th>
                        @foreach ($dimancht as $iphec)
                            <td>{{ $iphec->room_3 }} <a class="editroow"
                                    href="{{ route('admin.edit.iphec.table', $iphec->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: blue;">R4</th>
                        @foreach ($dimancht as $iphec)
                            <td>{{ $iphec->room_4 }} <a class="editroow"
                                    href="{{ route('admin.edit.iphec.table', $iphec->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: blue;">R5</th>
                        @foreach ($dimancht as $iphec)
                            <td>{{ $iphec->room_5 }} <a class="editroow"
                                    href="{{ route('admin.edit.iphec.table', $iphec->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: blue;">R6</th>
                        @foreach ($dimancht as $iphec)
                            <td>{{ $iphec->room_6 }} <a class="editroow"
                                    href="{{ route('admin.edit.iphec.table', $iphec->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: blue;">R7</th>
                        @foreach ($dimancht as $iphec)
                            <td>{{ $iphec->room_7 }} <a class="editroow"
                                    href="{{ route('admin.edit.iphec.table', $iphec->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: blue;">R8</th>
                        @foreach ($dimancht as $iphec)
                            <td>{{ $iphec->room_8 }} <a class="editroow"
                                    href="{{ route('admin.edit.iphec.table', $iphec->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>
                    <tr class="tirashrashjdfg">
                        <th style="color: blue;">R9</th>
                        @foreach ($dimancht as $iphec)
                            <td>{{ $iphec->room_9 }} <a class="editroow"
                                    href="{{ route('admin.edit.iphec.table', $iphec->id) }}"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a></td>
                        @endforeach
                    </tr>


                </table>



            </div>

        </div>
    @else
        <div class="text-center mt-5">
            <h1>لست مسموح بالدخول إلى هده الصفحة .</h1>
            <br>
            <h1>المرجو العودة و شكرا</h1>
        </div>
    @endif
@endsection
@section("scripts")
    <script>
        const select = document.querySelector("select");
const value = select.options[select.selectedIndex].value;


//tables variables ima table
const lundi = document.getElementById("lundi");
const mardi = document.getElementById("mardi");
const mercredi = document.getElementById("mercredi");
const judi = document.getElementById("judi");
const vendredi = document.getElementById("vendredi");
const samedi = document.getElementById("samedi");
const demanch = document.getElementById("demanch");

//variables for iphec taable
const lundit = document.getElementById("lundit");
const mardit = document.getElementById("mardit");
const mercredit = document.getElementById("mercredit");
const judit = document.getElementById("judit");
const vendredit = document.getElementById("vendredit");
const samedit = document.getElementById("samedit");
const demancht = document.getElementById("demancht");




function getValue(e) {

    if (e == "lundi") {

      lundi.classList.add("active")
      mardi.classList.remove("active")
      mercredi.classList.remove("active")
      judi.classList.remove("active")
      vendredi.classList.remove("active")
      samedi.classList.remove("active")
      demanch.classList.remove("active")


    } else if (e == "mardi") {

        lundi.classList.remove("active")
        mardi.classList.add("active")
        mercredi.classList.remove("active")
        judi.classList.remove("active")
        vendredi.classList.remove("active")
        samedi.classList.remove("active")
        demanch.classList.remove("active")

    } else if (e == "mercredi") {

        lundi.classList.remove("active")
        mardi.classList.remove("active")
        mercredi.classList.add("active")
        judi.classList.remove("active")
        vendredi.classList.remove("active")
        samedi.classList.remove("active")
        demanch.classList.remove("active")

    }else if (e == "judi") {

        lundi.classList.remove("active")
        mardi.classList.remove("active")
        mercredi.classList.remove("active")
        judi.classList.add("active")
        vendredi.classList.remove("active")
        samedi.classList.remove("active")
        demanch.classList.remove("active")

    }else if (e == "vendredi") {

        lundi.classList.remove("active")
        mardi.classList.remove("active")
        mercredi.classList.remove("active")
        judi.classList.remove("active")
        vendredi.classList.add("active")
        samedi.classList.remove("active")
        demanch.classList.remove("active")

    }else if (e == "samedi") {

        lundi.classList.remove("active")
        mardi.classList.remove("active")
        mercredi.classList.remove("active")
        judi.classList.remove("active")
        vendredi.classList.remove("active")
        samedi.classList.add("active")
        demanch.classList.remove("active")

    }else if (e == "demanch") {

        lundi.classList.remove("active")
        mardi.classList.remove("active")
        mercredi.classList.remove("active")
        judi.classList.remove("active")
        vendredi.classList.remove("active")
        samedi.classList.remove("active")
        demanch.classList.add("active")

    }else {
        lundi.classList.remove("active")
        mardi.classList.remove("active")
        mercredi.classList.remove("active")
        judi.classList.remove("active")
        vendredi.classList.remove("active")
        samedi.classList.remove("active")
        demanch.classList.remove("active")
    }
}






function  getValueTwo(v) {
    if (v == "lundit") {

        lundit.classList.add("active")
        mardit.classList.remove("active")
        mercredit.classList.remove("active")
        judit.classList.remove("active")
        vendredit.classList.remove("active")
        samedit.classList.remove("active")
        demancht.classList.remove("active")
  
  
      } else if (v == "mardit") {
  
          lundit.classList.remove("active")
          mardit.classList.add("active")
          mercredit.classList.remove("active")
          judit.classList.remove("active")
          vendredit.classList.remove("active")
          samedit.classList.remove("active")
          demancht.classList.remove("active")
  
      } else if (v == "mercredit") {
  
          lundit.classList.remove("active")
          mardit.classList.remove("active")
          mercredit.classList.add("active")
          judit.classList.remove("active")
          vendredit.classList.remove("active")
          samedit.classList.remove("active")
          demancht.classList.remove("active")
  
      }else if (v == "judit") {
  
          lundit.classList.remove("active")
          mardit.classList.remove("active")
          mercredit.classList.remove("active")
          judit.classList.add("active")
          vendredit.classList.remove("active")
          samedit.classList.remove("active")
          demancht.classList.remove("active")
  
      }else if (v == "vendredit") {
  
          lundit.classList.remove("active")
          mardit.classList.remove("active")
          mercredit.classList.remove("active")
          judit.classList.remove("active")
          vendredit.classList.add("active")
          samedit.classList.remove("active")
          demancht.classList.remove("active")
  
      }else if (v == "samedit") {
  
          lundit.classList.remove("active")
          mardit.classList.remove("active")
          mercredit.classList.remove("active")
          judit.classList.remove("active")
          vendredit.classList.remove("active")
          samedit.classList.add("active")
          demancht.classList.remove("active")
  
      }else if (v == "demancht") {
  
          lundit.classList.remove("active")
          mardit.classList.remove("active")
          mercredit.classList.remove("active")
          judit.classList.remove("active")
          vendredit.classList.remove("active")
          samedit.classList.remove("active")
          demancht.classList.add("active")
  
      }else {
          lundit.classList.remove("active")
          mardit.classList.remove("active")
          mercredit.classList.remove("active")
          judit.classList.remove("active")
          vendredit.classList.remove("active")
          samedit.classList.remove("active")
          demancht.classList.remove("active")
      }
}



    </script>
@endsection