<div class="card-body">
    <div class="row mb-2">
        <label class="col-sm-3 col-form-label">Nama Kategori <sup class="form-wajib" style="color:red">* wajib</sup></label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="nama" placeholder="Nama Kategori" value="{{ !empty($data) ? ( old('nama', $data->nama ?? null) ) : old('nama') }}" required>
        </div>
    </div>
</div>

<div class="card-footer text-end mb-2">
    <div class="col-sm-12">
        <a href="{{ route('backoffice.master-data.kategori.index') }}" class="btn btn-info float-start">Kembali</a>
        <button type="reset" class="btn btn-danger">Cancel</button>
        <button class="btn btn-primary submit-btn" type="submit">Submit</button>
    </div>
</div>