@extends('layout.main')

@section('dashboard-main')
    <section id="profile" class="shadow-lg rounded mx-auto p-3" style="width:95%">
        <h3 class="text-success">Data Mahasiswa</h3>

        <div class="card">
            <div class="card-header">
                <a href="/mahasiswa/data/create" class="btn btn-success">+ Tambah Data Mahasiswa</a>
            </div>
            <table cellpadding="20" class="table table-hover">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nim</th>
                        <th>Nik</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Angkatan</th>
                        <th>Jenis Kelamin</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nim }}</td>
                            <td>
                                @if (isset($item->identitas_mahasiswa->nik))
                                    {{ $item->identitas_mahasiswa->nik}}
                                @else
                                    -
                                @endif
                            </td>
                            <td>
                                <a href="" class="text-decoration-none text-success">{{ $item->nama_lengkap }}</a>
                            </td>
                            <td>
                                @if (isset($item->email))
                                {{ $item->email}}
                                @else
                                    -
                                @endif
                            </td>
                            <td>{{ $item->angkatan }}</td>
                            <td>{{ $item->jenis_kelamin }}</td>
                            <td class="d-flex py-3">
                                <span class="badge bg-warning mx-2">Edit</span>
                                <form action="/mahasiswa/data/delete/{{ $item->id }}" method="POST" class="d-flex">
                                    @csrf
                                    @method('delete')
                                    <button onclick="return confirm('Apakah anda yakin ingin menghapus data berikut?')" class="badge bg-danger border-0">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection