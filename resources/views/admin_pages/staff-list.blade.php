@extends('layouts.admin')

@section('content')



<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title">Staff Data</h4>
                                    <p class="card-category">. .  . . . . . . . . . . . . . . .</p>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                @if (count($staff)>0)
                                        
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <th>Sr. No.</th>
                                            <th>Name</th>
                                            <th>Role</th>
                                            <th>Email Address</th>
                                            <th>Contact no.</th>
                                            
                                            

                                        </thead>
                                        <tbody>
                                        @foreach($staff as $s)
                                            <tr> 
                                            <td><a style="color: black" href="/staff/{{$s->id}}">{{$s->id}}</a></td>
                                            <td><a style="color: black" href="/staff/{{$s->id}}">{{$s->name}}</a></td>
                                            <td><a style="color: black" href="/staff/{{$s->id}}">{{$s->role}}</a></td>
                                            <td><a style="color: black" href="/staff/{{$s->id}}">{{$s->email}}</a></td>
                                            <td><a style="color: black" href="/staff/{{$s->id}}">{{$s->contact}}</a></td>
                                         @endforeach

                                            
                                        </tbody>
                                    </table>
                                
                                    @else
                                        <p>No staff present!
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                          @endsection
