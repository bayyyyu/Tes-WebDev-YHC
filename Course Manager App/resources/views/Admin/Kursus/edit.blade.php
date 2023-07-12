<x-app>
    <div class="container-xxl flex-grow-1 container-p-y">
        <a href="{{ url('Kursus') }}" class="btn btn-sm btn-default mb-2"
            style="border: 1px solid #696CFF; color:#696CFF"><i class="bx bx-chevron-left "></i>Kembali</a>
        <div class="row">
            <!-- Basic -->
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Edit Data Kursus</h5>
                    <div class="card-body demo-vertical-spacing demo-only-element">
                        <form action="{{ url('Kursus', $kursus->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Judul" name="judul"
                                            value="{{ $kursus->judul }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Durasi" name="durasi"
                                            value="{{ $kursus->durasi }}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="deskripsi" aria-label="With textarea" placeholder="Deskripsi">{{ $kursus->deskripsi }}</textarea>
                            </div>
                            <br>
                            <div class="button-group float-end">
                                <a href="{{ url('Kursus') }}" class="btn btn-danger btn-sm" style="margin-right:10px"><i
                                        class="fa fa-trash "></i>Batal</a>
                                <button class="btn btn-dark btn-sm"><i class="fa fa-save "></i> Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>
