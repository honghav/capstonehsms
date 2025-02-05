@extends('login.layout')

@section('age')

<div class="card mt-5">
    <h2 class="card-header">Laravel CRUD Login</h2>
    <div class="card-body">
        
        @if(session('success'))
            <div class="alert alert-success" role="alert">{{ session('success') }}</div>
        @endif

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-success btn-sm" href="{{ route('login.create') }}"><i class="fa fa-plus"></i> Create New Login</a>
        </div>

        <table class="table table-bordered table-striped mt-4">
            <thead>
                <tr>
                    <th width="80px">No</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th width="250px">Action</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($logins as $log)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $log->name }}</td>
                        <td>{{ $log->age }}</td>
                        {{-- <td>
                            <form action="{{ route('login.destroy',$log->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> Delete</button>
                            </form>
                        </td> --}}
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">There are no data.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        
        {!! $login->links() !!}

    </div>
</div>  

@endsection