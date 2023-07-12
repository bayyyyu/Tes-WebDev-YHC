<x-app>
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Data Kursus
                        <a href="{{ url('Kursus/create') }}" class="btn btn-prmary float-end"><i
                                class="tf-icons bx bx-plus-circle"></i></a>
                        </a>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>no.</th>
                                        <th width="100px">Aksi</th>
                                        <th>Judul</th>
                                        <th>Durasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($list_kursus->isEmpty())
                                        <tr>
                                            <td colspan="4">Tidak ada data kursus.</td>
                                        </tr>
                                    @else
                                        @foreach ($list_kursus as $kursus)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <div class="btn-group ml-2">
                                                        <div>
                                                            <a href="{{ url('Kursus', $kursus->id) }}"
                                                                class="btn btn-sm btn-dark">
                                                                <i class="bx bx-info-circle"></i></a>
                                                            <a href="{{ url('Kursus', $kursus->id) }}/edit"
                                                                class="btn btn-sm btn-warning btn-mat">
                                                                <i class="bx bx-edit"></i></a>
                                                            <x-button.delete id="{{ $kursus->id }}" />
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    {{ $kursus->judul }}
                                                </td>
                                                <td>
                                                    {{ $kursus->durasi }}
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
        <!--End Row-->
        <!--start overlay-->
        <div class="overlay toggle-menu"></div>
        <!--end overlay-->

    </div>

</x-app>
