@extends('layouts.main')
@section('main-section')

    <h1>Customers List </h1>
 
    <div class="table-responsive">
        <table class="table table-striped
        table-hover	
        table-borderless
        table-primary
        align-middle">
            <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>gender</th>
                    <th>DOB</th>
                    <th>Address</th>
                    <th>Active/InActive</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody class="table-group-divider">
                    @isset($customers)                                        
                    @foreach ($customers as $cust )
                    <tr class="table-primary" >
                        <td scope="row">{{$cust->customer_id}}</td>
                        <td>{{$cust->name}}</td>
                        <td>{{$cust->email}}</td>
                        <td>{{$cust->mobile}}</td>
                        <td>{{$cust->gender==='M'?'Male':'Female'}}</td>
                        <td>{{$cust->dob}}</td>
                        <td>{{$cust->address}}</td>
                        <td>
                            @if($cust->isActive==1)
                               
                                <span class="badge bg-success"> Active</span>
                            @else
                            <span class="badge bg-danger"> InActive</span>
                            @endif
                        </td>
                        <td>
                            <a href={{route('customer.edit',['id'=>$cust->customer_id])}} class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                            {{-- <a href={{url('/customer/delete/'.$cust->customer_id)}} class="btn btn-danger"><i class="bi bi-trash"></i></a> --}}

                            <a href={{route('customer.delete',['id'=>$cust->customer_id])}} class="btn btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                    @endisset
                </tbody>

        </table>
    </div>
    
@endsection