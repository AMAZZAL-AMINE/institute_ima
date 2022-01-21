@extends("layouts.admin")

@section('content')
    @if (auth()->user()->is_admin_pro === 'yes')
        <div class="container">
            <h1>Modifier table Des Salles </h1>
            <hr>
            <form action="{{ route('admin.lemploi.save.ima', $ima->id) }}" method="post">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="my-input1">Class 1</label>
                    <input id="my-input1" class="form-control" type="text" name="room_1" value="{{ $ima->room_1 }}">
                </div>
                <div class="form-group">
                    <label for="my-input2">Class 2</label>
                    <input id="my-input2" class="form-control" type="text" name="room_2" value="{{ $ima->room_2 }}">
                </div>
                <div class="form-group">
                    <label for="my-input3">Class 3</label>
                    <input id="my-input3" class="form-control" type="text" name="room_3" value="{{ $ima->room_3 }}">
                </div>
                <div class="form-group">
                    <label for="my-input4">Class 4</label>
                    <input id="my-input4" class="form-control" type="text" name="room_4" value="{{ $ima->room_4 }}">
                </div>

                <button class="btn btn-primary" type="submit">Save Edite</button>

            </form>

        </div>
    @else
        <div class="text-center mt-5">
            <h1>لست مسموح بالدخول إلى هده الصفحة .</h1>
            <br>
            <h1>المرجو العودة و شكرا</h1>
        </div>
    @endif
@endsection
