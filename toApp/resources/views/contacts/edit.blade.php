@extends('base')
@section('main')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Update a Todo</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <br />
            @endif
            <form method="post" action="{{ route('contacts.update', $contact->id) }}">
                @method('PATCH')
                @csrf
                <div class="form-group">

                    <label for="name">Name:</label>
                    <input type="text" class="form-control" name="name" value={{ $contact->name }} />
                </div>

                <div class="form-group">
                    <label for="description">description:</label>
                    <input type="text" class="form-control" name="description" value={{ $contact->description }} />
                </div>

                <div class="form-group">
                    <label for="description">Complete? (Yes/No)</label>
                    <input type="text" class="form-control" name="complete" value={{ $contact->complete }} />
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection