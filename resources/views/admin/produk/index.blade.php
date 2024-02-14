<div class="row p-2">
    <div class="col-md-12">
        <div class="card">

            <div class="card-title p-3" style='text-align: center'>
                <h5><b>{{ $title }}</b></h5>
            </div>

            <div class="card-body">

                <a href="/admin/produk/create" class="btn btn-sm btn-primary "><i class="fas fa-plus"></i> Tambah</a>
                <table class="table mt-2">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Aksi</th>
                    </tr>

                    @foreach ($produk as $item)
                      
                    
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name}}</td>
                        <td>
                            <div class="d-flex">
                                <a href="/admin/produk/{{ $item->id }}/edit" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i>
                                    Edit</a>
                                    <form action="/admin/produk/{{ $item->id }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm ml-1"><i class="fas fa-trash"></i>
                                        Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </table>

                {{ $produk->links() }}
            </div>
        </div>
    </div>
</div>
