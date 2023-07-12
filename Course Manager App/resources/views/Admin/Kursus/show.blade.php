<x-app>
    <div class="container mt-3">
        <a href="{{ url('Kursus') }}" class="btn btn-sm btn-default mb-2"
            style="border: 1px solid #696CFF; color:#696CFF"><i class="bx bx-chevron-left "></i>Kembali</a>

        <div class="row">
            <div class="col-md-12 mt-3">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            DETAIL KURSUS
                            <hr>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <dl class="row">
                                    <dt class="col-md-4">Judul</dt>
                                    <dd class="col-md-8">: {{ $kursus->judul }}</dd>
                                    <dt class="col-md-4">Durasi</dt>
                                    <dd class="col-md-8">: {{ $kursus->durasi }}</dd>
                                    <dt class="col-md-4">Deskripsi</dt>
                                    <dd class="col-md-8">: {{ $kursus->deskripsi }}</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md mb-4 mb-md-0">
                <div class="col-md-12 mt-3">
                    <div class="card">
                        <div class="card-header">
                            Data Materi Pada Kursus Ini
                            <div class="col-md-12">
                                <div class="card mb-2">
                                    <div class="card-body">
                                        <p class="demo-inline-spacing">
                                            <a class="btn btn-primary btn-sm me-1 collapsed" data-bs-toggle="collapse"
                                                href="#collapseExample" role="button" aria-expanded="false"
                                                aria-controls="collapseExample">
                                                <i class="tf-icons bx bx-plus-circle"></i>Tambah Materi
                                            </a>
                                        </p>
                                        <div class="collapse" id="collapseExample" style="">
                                            <div class="d-grid p-3 border">
                                                <form action="{{ url('Materi') }}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="kursus_id" value="{{ $kursus->id }}">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Judul" name="judul">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Embed Link" name="embed_link">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mt-3">
                                                        <textarea class="form-control" name="deskripsi" aria-label="With textarea" placeholder="Deskripsi"></textarea>
                                                    </div>
                                                    <br>
                                                    <div class="button-group float-end">
                                                        <button class="btn btn-dark btn-sm"><i class="fa fa-save "></i>
                                                            Simpan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive text-nowrap">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>no.</th>
                                            <th width="100px">Aksi</th>
                                            <th>Judul Materi</th>
                                            <th>Embed Link Materi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($list_materi->isEmpty())
                                            <tr>
                                                <td colspan="4">Tidak ada data materi.</td>
                                            </tr>
                                        @else
                                            @foreach ($kursus->materi as $materi)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>
                                                        <div class="btn-group ml-2">
                                                            <div>
                                                                <a href="{{ url('Materi', $materi->id) }}"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#modalScrollable{{ $materi->id }}"
                                                                    class="btn btn-sm btn-dark">
                                                                    <i class="bx bx-info-circle"></i></a>
                                                                <a href="{{ url('Materi', $materi->id) }}/edit"
                                                                    class="btn btn-sm btn-warning btn-mat"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#backDropModal{{ $materi->id }}">
                                                                    <i class="bx bx-edit"></i></a>
                                                                <button class="btn btn-sm btn-danger" type="button"
                                                                    onclick="deleteData('{{ $materi->id }}', 'Materi')">
                                                                    <i class="bx bx-trash"></i>
                                                                </button>
                                                            </div>
                                                        </div>

                                                    </td>
                                                    <td>
                                                        {{ $materi->judul }}
                                                    </td>
                                                    <td>
                                                        {{ $materi->embed_link }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @foreach ($list_materi as $materi)
        <div class="col-lg-4 col-md-3">
            <!-- Modal Show -->
            <div class="modal fade" id="modalScrollable{{ $materi->id }}" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalScrollableTitle">Detai Data Materi</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12 mt-3">
                                    <div class="col-md-12">
                                        <dl class="row">
                                            @if ($list_materi->isEmpty())
                                                <dt class="col-md-12">Tidak ada data materi.</dt>
                                            @else
                                                <dt class="col-md-4">Judul</dt>
                                                <dd class="col-md-8">: {{ $materi->judul }}</dd>
                                                <hr>
                                                <dt class="col-md-4">Link Materi</dt>
                                                <dd class="col-md-8">: <a href="{{ $materi->embed_link }}"
                                                        target="_blank"><i class="bx bx-link"></i></a></dd>
                                                <hr>
                                                <label style="font-weight:bolder"
                                                    class="text-center">Deskripsi</label>
                                                <dd style="text-align:justify">{{ $materi->deskripsi }}</dd>
                                            @endif
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-3">
            <div class="mt-3">
                <!-- Modal Edit-->
                <div class="modal fade" id="backDropModal{{ $materi->id }}" data-bs-backdrop="static"
                    tabindex="-1" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog">
                        <form action="{{ url('Materi', $materi->id) }}" method="post" class="modal-content">
                            @csrf
                            @method('PUT')
                            <div class="modal-header">
                                <h5 class="modal-title" id="backDropModalTitle">Edit Data Materi</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col mb-3">
                                        <label for="nameBackdrop" class="form-label">Judul</label>
                                        <input type="text" id="nameBackdrop" class="form-control"
                                            value="{{ $materi->judul }}" name="judul">
                                    </div>
                                    <div class="col mb-0">
                                        <label for="emailBackdrop" class="form-label">Link Materi</label>
                                        <input type="text" class="form-control" name="embed_link"
                                            value="{{ $materi->embed_link }}">
                                    </div>
                                </div>
                                <div class="row g-2">
                                    <div class="col mb-0">
                                        <label for="dobBackdrop" class="form-label">Deskripsi</label>
                                        <textarea class="form-control" name="deskripsi" aria-label="With textarea">{{ $materi->deskripsi }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                    Batal
                                </button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    @push('script')
        <script>
            const deleteData = (id, path) => {
                const url = `{{ url('/') }}/${path}/${id}`;

                Swal.fire({
                    title: 'Yakin akan menghapus data ini?',
                    text: "Data yang dihapus tidak dapat dikembalikan!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Lanjutkan'
                }).then((result) => {
                    if (result.isConfirmed) {
                        const csrf_token = `{{ csrf_token() }}`;
                        const form = document.createElement('form');
                        form.method = 'POST';
                        form.action = url;

                        const tokenInput = document.createElement('input');
                        tokenInput.type = 'hidden';
                        tokenInput.name = '_token';
                        tokenInput.value = csrf_token;

                        const methodInput = document.createElement('input');
                        methodInput.type = 'hidden';
                        methodInput.name = '_method';
                        methodInput.value = 'DELETE';

                        form.appendChild(tokenInput);
                        form.appendChild(methodInput);

                        document.body.appendChild(form);
                        form.submit();
                    }
                });
            };
        </script>
    @endpush

</x-app>
