@extends('layouts.app')


@section('title', $title)

@section('css')
    <!-- Kalau Ada Plugin Tambahan -->
@endsection

@section('style')
  
@endsection

@section('breadcrumb-title')
    <h3> Halaman {{ $title }}</h3>
@endsection

@section('content')    

<div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">{{ $title }}</h3>
      <div class="block-options">
        <a href="{{ route('backoffice.master-data.kategori.create') }}" class="btn btn-primary" data-original-title="Tambah Data Baru">
          +
      </a>
      </div>
    </div>
    <div class="block-content">
      <form class="row theme-form mb-2 form-bottom">
        <div class="mb-3 col-sm-9">
            <div class="input-group">
                <input class="form-control" type="text" name="cari" value="{{ request()->get('cari') }}" placeholder="Cari">
            </div>
        </div>

        <div class="mb-3 col-sm-3 pull-right">
            <button class="btn btn-success" data-bs-original-title="" title="">Filter</button>
            <button type="clear" class="btn btn-danger m-l-5 btn-clear" data-bs-original-title="" title="clear pencarian">Clear</button>
        </div>
    </form>

      <div class="table-responsive">
        <table class="table table-bordered table-striped table-vcenter">
          <thead>
            <tr>
              <th class="text-center" style="width: 100px;">
                No
              </th>
              <th>Nama Kategori</th>
              <th class="text-center" style="width: 100px;">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $value)
            <tr id="{{ $value->id }}">
              <td>{{ $loop->iteration + $data->firstItem() - 1 }}</td>
              <td>{{ $value->nama ?? '-' }}</td>
              <td>
                <div class="btn-group">
                  <a href="{{ route('backoffice.master-data.kategori.edit', $value->id) }}" class="btn btn-sm btn-warning" data-original-title="Edit Data">
                      <i class="fa fa-pencil"></i>
                  </a>
                  <button data-route="{{ route('backoffice.master-data.kategori.destroy', $value->id) }}" class="btn btn-sm btn-danger" onclick="destroyItem(this)">
                      <i class="fa fa-trash"></i>
                  </button>

              </div> 
              </td>
            </tr>
                
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

  @endsection

  @section('script')
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script>
    const destroyItem = (e) => {
        let target = $(e);

        callSwal(target.data('route') )
    }

    const callSwal = ( route ) => {
        Swal.fire({
            title: "Apakah Anda Yakin?",
            html: "<p style='center'>Setelah Data Dihapus maka Anda Tidak Akan Bisa Mengembalikan Data Kembali!</p>",
            icon: "warning",
            showCancelButton: true,
            reverseButtons: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Hapus!',
            cancelButtonText: 'Batalkan!'
        })
        .then( (willDelete) => {
            if (willDelete.isConfirmed) {
                (new FormElementHelper)
                    .createAttribute('hidden', '_token', '{{ csrf_token() }}')
                    .createAttribute('hidden', '_method', 'DELETE')
                    .post(route);
            } else {
                Swal.fire({
                    title: "Aksi Dibatalkan :)",
                    icon: "info",
                })
            }
        })
    }
</script>
  @endsection