@extends("layouts.admin")


@section("content")
    <div class="container">
        <form action="{{ route("admin.createCertificate",$student->id) }}" method="get">
            <div class="form-group">
                <label for="my-input">Formation En France</label>
                <input id="my-input" class="form-control" type="text" name="forma_fr">
            </div>

            <button type="submit" class="btn btn-primary">Get Certificate</button>
        </form>
    </div>
@endsection