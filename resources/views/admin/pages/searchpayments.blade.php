@extends("layouts.admin")

@section("content")
    <div class="container">
        <h1>This is Page Of Search Students</h1>

        <div class="searchfrmationusingmonth">
            <form action="" method="get">
                <div class="allinputs">
                    <div class="selectformation">
                        <div>Select Le Formation</div>
                        <select name="formation" >
                            <option value="">Select Formation</option>
                        </select>
                    </div>
                    <div class="selectmonth">
                        <div>Select Le Mois</div>
                        <select name="month" >
                            <option value="">Select Le Mois</option>
                        </select>
                    </div>
                </div>
                <button type="submit"><i class="fa fa-search"></i> Search</button>
            </form>
        </div>
    </div>
@endsection