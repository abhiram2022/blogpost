@extends('admin.layout')
@section('main')        
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Posts</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">All Post</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Slno</th>
                                            <th>Title</th>
                                            <th>Desc</th>
                                            <th>Post on</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Slno</th>
                                            <th>Title</th>
                                            <th>Desc</th>
                                            <th>Post on</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($data as $index=>$value)
                                            <td>{{$value->index}}</td>
                                        @endforeach

                                        @foreach($data as $index => $item)
									<tr>
										<td>{{ $index +1 }}</td>
										<td>{{$item->title}}</td>
                                        <td>{{$item->content}}</td>
                                        <td>{{$item->created_at}}</td>
                                        <td>{{0}}</td>
										<!-- <td><img src="{{asset('/').$item->brand_image }}"width="60
											" height="50"/></td> -->
										<td><a href="{{route('admin.post.show',$item->id)}}" 
											class="btn btn-sm btn-success">View</a>
                                            
                                            <a href="{{route('admin.post.edit',$item->id)}}" 
											class="btn btn-sm btn-warning">Edit</a> 

											<form action="{{route('admin.post.delete')}}" method="post" >
                                                @csrf
                                                <input type='hidden' name="id" value="{{$item->id}}"/>
											<button type="submit" class="btn btn-sm btn-danger" id="delete" >Delete</button>
                                            <form>
                                            </td>
									</tr>
								@endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
 @endsection              
         
        
