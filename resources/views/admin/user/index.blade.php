<div class="container-fluid pt-2">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
           
            <div class="card-title p-3" style='text-align: center'>
                <h5><b>{{ $title }}</b></h5>
            </div>

                <div class="card-body">
                    <a href="/admin/user/create" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i> Tambah</a>
                    
                    @if(session()->has('00000000'))
                      <div class="alert alert-success mt-2"><i class="fas fa-check"></i>
                        {{ session('success') }}
                      </div>
                    @endif
                    
                    <table class="table mt-1 ">
                        <tr>
                            <th>No</th>
                            <th>Name</td>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>

                        @foreach ($user as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <th>
                                <div class="d-flex">
                                    <a href="/admin/user/{{ $item->id }}/edit" class="btn btn-warning btn-sm"><i
                                            class="fas fa-edit"></i> Edit</a>
                                    <form action="/admin/user/{{ $item->id }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm ml-1 "><i class="fas fa-trash"></i>
                                            Hapus</button>
                                    </form>
                                </div>
                            </th>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
