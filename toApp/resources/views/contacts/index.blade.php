@extends('base')

@section('main')
    <div class="row">
        <div class="col-sm-12">
            <h1 class="display-3">Todo List</h1>
            <table class="table table-striped">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Description</td>
                    <td>Completed</td>
                    <td colspan = 2>Actions</td>
                </tr>
                </thead>
                <div>
                    <a style="margin: 19px;" href="{{ route('contacts.create')}}" class="btn btn-primary">New todo</a>
                </div>
                <tbody>
                @foreach($contacts as $contact)
                    @if($contact->user == \Illuminate\Support\Facades\Auth::user())
                    <tr>
                        <td>{{$contact->id}}</td>
                        <td>{{$contact->name}}</td>
                        <td>{{$contact->description}}</td>
                        <td>{{$contact->complete}}</td>

                        <td>
                            <a href="{{ route('contacts.edit',$contact->id)}}" class="btn btn">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('contacts.destroy', $contact->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endif
                @endforeach
                </tbody>
            </table>
            <div>
            </div>
            <div class="col-sm-12">

                @if(session()->get('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
            </div>
@endsection