@extends('layouts.admin')

@section('content')
<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title">Library Data</h4>
                                    <p class="card-category">. .  . . . . . . . . . . . . . . .</p>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                @if (count($books)>0)
                                        
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <th>Sr. No.</th>
                                            <th>Book Code</th>
                                            <th>Author</th>
                                            <th>Title</th>
                                            <th>Shelf no.</th>
                                            <th>No. of copies</th>
                                            <th>Language</th>
                                            

                                        </thead>
                                        <tbody>
                                        @foreach($books as $b)
                                            <tr>
                                            <td>{{$b->id}}</td>
                                            <td>{{$b->book_code}}</td>
                                            <td>{{$b->author}}</td>
                                            <td>{{$b->title}}</td>
                                            <td>{{$b->shelf_no}}</td>
                                            <td>{{$b->copies}}</td>
                                            <td>{{$b->lang}}</td>
                                         @endforeach

                                            
                                        </tbody>
                                    </table>
                                
                                    @else
                                        <p>Library is empty!
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                          @endsection
