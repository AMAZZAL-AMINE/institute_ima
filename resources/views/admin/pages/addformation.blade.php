@extends("layouts.admin")

@section("content")
    <div class="container">
        <h1>Add New Formation</h1>

        <form method="post" action="" class="mt-5 bg-white p-5 border rounded">
            @csrf
            <div class="">
                <label class="sr-only" for="inlineFormInputGroupUsername">Username</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">Le Nom De Formation</div>
                  </div>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                </div>
            </div>
            <div class="mt-3">
                <label class="sr-only" for="inlineFormInputGroupUsername">Username</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">Le Slug De Formation</div>
                  </div>
                  <input type="text" class="form-control" name="slug" id="slug" placeholder="Slug">
                </div>
            </div>
        </form>
    </div>
@endsection