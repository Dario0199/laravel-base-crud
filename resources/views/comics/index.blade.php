@extends('layouts.main')

@section('main-content')
   <div>

        @if (session('deleted'))
            <div class="alert alert-success">
                <strong>{{ session('deleted') }}</strong>
                succesfully deleted
            </div>
            
        @endif

       <table class="table">
           <thead>
               <tr>
                   <th>ID</th>
                   <th>Title</th>
                   <th>Description</th>
                   <th>Thumb</th>
                   <th>Price</th>
                   <th>Series</th>
                   <th>Sale Date</th>
                   <th>Type</th>
                   <th colspan="3">Action</th>
               </tr>
           </thead>
           <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <td>{{ $comic->id }}</td>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->description }}</td>
                        <td>{{ $comic->thumb }}</td>
                        <td>{{ $comic->price }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->sale_date }}</td>
                        <td>{{ $comic->type }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('comics.show', $comic->id) }}">Show</a>
                        </td>
                        <td>
                            <a class="btn btn-success" href="{{ route('comics.edit', $comic->id) }}">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('comics.destroy', $comic->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" class="btn btn-danger" value="Delete" onclick="return confirm('Are you sure you want to delete {{ $comic->title }}?')">
                            </form>
                        </td>
                    </tr>
                @endforeach
           </tbody>
       </table>
   </div>
@endsection