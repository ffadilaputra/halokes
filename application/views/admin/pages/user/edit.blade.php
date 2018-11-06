<?= form_open('admin/user/update/'.$user->id_users) ?>

<label for="nama_lengkap">Nama Lengkap</label>
<input type="text" name="nama_lengkap" value="{{ $user->nama_lengkap }}">
@if($errors->has('nama_lengkap'))
    <small class="text-danger">{{ $errors->first('nama_lengkap') }}</small>
@endif
<label for="tempat_lahir">Tempat Lahir</label>
<input type="text" name="tempat_lahir" value="{{ $user->tempat_lahir }}">
@if($errors->has('tempat_lahir'))
    <small class="text-danger">{{ $errors->first('tempat_lahir') }}</small>
@endif
<label for="tgl_lahir">Tanggal Lahir</label>
<input type="date" name="tgl_lahir" value="{{ $user->tgl_lahir }}">
@if($errors->has('tgl_lahir'))
    <small class="text-danger">{{ $errors->first('tgl_lahir') }}</small>
@endif
<label for="telepon">Telepon</label>
<input type="text" name="telepon" value="{{ $user->telepon }}">
@if($errors->has('telepon'))
    <small class="text-danger">{{ $errors->first('telepon') }}</small>
@endif
<label for="email">Email</label>
<input type="email" name="email" value="{{ $user->email }}">
@if($errors->has('email'))
    <small class="text-danger">{{ $errors->first('email') }}</small>
@endif
<label for="password">Password</label>
<input type="password" name="password">
@if($errors->has('password'))
    <small class="text-danger">{{ $errors->first('password') }}</small>
@endif
<label for="level">Level</label>
<select name="id_level" id="">
        <option value="0">-- Pilih --</option>
    @foreach ($level as $item)
        <option value="{{ $item->id_level }}">{{ $item->level }}</option>
    @endforeach
</select>
@if($errors->has('id_level'))
    <small class="text-danger">{{ $errors->first('id_level') }}</small>
@endif

<button type="submit">Tambah</button>


<?= form_close() ?>