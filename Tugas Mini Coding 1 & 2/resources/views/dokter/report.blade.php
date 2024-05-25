<table border="1" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Dokter</th>
                                    <th>Email</th>
                                    <th>No. Telp</th>
                                    <th>Tanggal Pelayanan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($dokter as $index => $item)
                                <tr>
                                    <td>{{ $index+1 }}</td>
                                    <td>{{ $item->nama_dokter }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->no_telepon }}</td>
                                    <td>{{ $item->tanggal_pelayanan->format('d F Y H:i:s') }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>