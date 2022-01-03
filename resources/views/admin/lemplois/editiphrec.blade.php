@extends("layouts.admin")

@section("content")
    <div class="container">
        <h1>Modifier  table Des Salles </h1>
        <hr>
        <form action="{{ route("admin.lemploi.save.iphec",$iphec->id) }}" method="post">
            @csrf
            @method("PUT")
            <div class="form-group">
                <label for="my-input1">Class 1</label>
                <input id="my-input1" class="form-control" type="text" name="room_1" value="{{ $iphec->room_1 }}">
            </div>
            <div class="form-group">
                <label for="my-input2">Class 2</label>
                <input id="my-input2" class="form-control" type="text" name="room_2" value="{{ $iphec->room_2 }}">
            </div>
            <div class="form-group">
                <label for="my-input3">Class 3</label>
                <input id="my-input3" class="form-control" type="text" name="room_3" value="{{ $iphec->room_3 }}">
            </div>
            <div class="form-group">
                <label for="my-input4">Class 4</label>
                <input id="my-input4" class="form-control" type="text" name="room_4" value="{{ $iphec->room_4 }}">
            </div>
            <div class="form-group">
                <label for="my-input5">Class 5</label>
                <input id="my-input5" class="form-control" type="text" name="room_5" value="{{ $iphec->room_5 }}">
            </div>
            <div class="form-group">
                <label for="my-input6">Class 6</label>
                <input id="my-input6" class="form-control" type="text" name="room_6" value="{{ $iphec->room_6 }}">
            </div>
            <div class="form-group">
                <label for="my-input7">Class 7</label>
                <input id="my-input7" class="form-control" type="text" name="room_7" value="{{ $iphec->room_7 }}">
            </div>
            <div class="form-group">
                <label for="my-input8">Class 8</label>
                <input id="my-input8" class="form-control" type="text" name="room_8" value="{{ $iphec->room_8 }}">
            </div>
            <div class="form-group">
                <label for="my-input9">Class 9</label>
                <input id="my-input9" class="form-control" type="text" name="room_9" value="{{ $iphec->room_9 }}">
            </div>

            <button class="btn btn-primary" type="submit">Save Edite</button>
            
        </form>
        
    </div>
@endsection