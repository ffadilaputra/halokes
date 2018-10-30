@foreach ($santri as $item)
    <table>
        <tr>
            <td>NIS</td>
            <td>Nama Lengkap</td>
            <td>Tempat Lahir</td>
            <td>Kelurahan</td>
            <td>Kecamatan</td>
            <td>Kota</td>
            <td>Profinsi</td>
            <td>Telepon</td>
            <td>Kodepos</td>
            <td>Status</td>
            <td>Opsi</td>
        </tr>
        <tr>
            <td>{{ $item->getAllSantri->nis }}</td>
            <td>{{ $item->getAllSantri->nama_lengkap }} </td>
            <td>{{ $item->getAllSantri->tempat_lahir }}</td>
            <td>{{ $item->getAllSantri->kelurahan }}</td>
            <td>{{ $item->getAllSantri->kecamatan }}</td>
            <td>{{ $item->getAllSantri->kota }}</td>
            <td>{{ $item->getAllSantri->provinsi }}</td>
            <td>{{ $item->getAllSantri->telepon }}</td>
            <td>{{ $item->getAllSantri->kode_pos }}</td>
            <td>{{ $item->status }}</td>
            <td><a href="#">Detail</a></td>
        </tr>
    </table>
@endforeach