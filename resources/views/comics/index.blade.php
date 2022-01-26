@extends('layouts.main')

@section('main-content')
   <div>
       <table class="table">
           <thead>
               <tr>
                   <th>ID</th>
                   <th>Title</th>
                   <th>Description</th>
                   <th>Thumb</th>
                   <th>Series</th>
                   <th>Price</th>
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
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->price }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('comics.show', 'comics.show') }}">Show</a>
                        </td>
                        <td>
                            EDIT</td>
                        </td>
                        <td>
                            DELETE</td>
                        </td>
                    </tr>
                @endforeach
           </tbody>
       </table>
   </div>
@endsection