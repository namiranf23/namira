@extends('dashboard.layouts.main')

@section('container')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Data</h1>
    </div>

    <div class="col-lg-8">
        <form action="{{ url('dashboard/mobil/'.$mobil->id) }}" method="POST" class="mb-5" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="mb-3">
              <label for="kode_mobil" class="form-label">Kode Mobil</label>
              <input type="text" class="form-control @error('kode_mobil') is-invalid @enderror" id="kode_mobil" name="kode_mobil" required autofocus value="{{ old('kode_mobil', $mobil->kode_mobil) }}">
              @error('kode_mobil')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="merek_mobil" class="form-label">Merek Mobil</label>
              <input type="text" class="form-control @error('merek_mobil') is-invalid @enderror" id="merek_mobil" name="merek_mobil" required value="{{ old('merek_mobil', $mobil->merek_mobil) }}">
              @error('merek_mobil')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="tipe_mobil" class="form-label">Tipe Mobil</label>
              <input type="text" class="form-control @error('tipe_mobil') is-invalid @enderror" id="tipe_mobil" name="tipe_mobil" required value="{{ old('tipe_mobil', $mobil->tipe_mobil) }}">
              @error('tipe_mobil')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="warna_mobil" class="form-label">Warna Mobil</label>
              <input type="text" class="form-control @error('warna_mobil') is-invalid @enderror" id="warna_mobil" name="warna_mobil" required value="{{ old('warna_mobil', $mobil->warna_mobil) }}">
              @error('warna_mobil')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="harga_mobil" class="form-label">Harga Mobil</label>
              <input type="text" class="form-control @error('harga_mobil') is-invalid @enderror" id="harga_mobil" name="harga_mobil" required value="{{ old('harga_mobil', $mobil->harga_mobil) }}">
              @error('harga_mobil')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="mb-3">
                <label for="gambar_mobil" class="form-label">Post Image</label>
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="gambar_mobil" name="gambar_mobil" value="{{ old('gambar_mobil', $mobil->gambar_mobil) }}">
                @error('gambar_mobil')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-dark border-0">Edit Post</button>
            <a href="/dashboard/mobil" class="btn btn-dark text-light">Batal</a>
          </form>
    </div>


@endsection
