@extends('layouts.auth')

@section('content')
    <div class="container">
        <form action="/user/{{$user->id}}" enctype="multipart/form-data" method="post">
            @csrf
            @method('PATCH')
        <div class="container">
            <div class="row  flex-lg-nowrap float-left">
                <div class="col-md-12 col-lg-auto mb-auto" style="width: 250px;">
                    <div class="card rounded-right shadow p-4">
                        <div class="text-center">
                            <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
                            <h6>Upload Foto</h6>
                            <input type="file" class="form-control-file" id="foto" name="foto">
                            @if($errors->has('foto'))
                                <strong>{{ $errors->first('foto') }}</strong>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
            <div class="row  flex-lg-nowrap float-left">
                <div class="col-md-12 col-lg-auto mb-auto" style="width: 250px;">
                    <div class="card rounded-right shadow p-4">
                        <div class="text-center">
                            <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
                            <h6>Upload Cover</h6>
                            <input type="file" class="form-control-file" id="cover" name="cover">
                            @if($errors->has('cover'))
                                <strong>{{ $errors->first('cover') }}</strong>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col mb-3">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="e-profile">
                            <div class="tab-content pt-3">
                                <div class="tab-pane active">

                                        <h2>Edit Profil</h2>
                                        <div class="row">
                                            <div class="col">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="nama">Nama</label>
                                                            <input id="nama"
                                                                   type="text"
                                                                   class="form-control @error('nama') is-invalid @enderror"
                                                                   name="nama"
                                                                   value="{{ old('nama') ?? $user->profile->nama}}"
                                                                   autocomplete="nama" autofocus>

                                                            @if($errors->has('nama'))
                                                                <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('nama') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="nama_lengkap">Nama Lengkap</label>
                                                            <input id="nama_lengkap"
                                                                   type="text"
                                                                   class="form-control @error('nama_lengkap') is-invalid @enderror"
                                                                   name="nama_lengkap"
                                                                   value="{{ old('nama_lengkap') ?? $user->profile->nama_lengkap }}"
                                                                   autocomplete="nama_lengkap" autofocus>

                                                            @if($errors->has('nama_lengkap'))
                                                                <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('nama_lengkap') }}</strong>
                                                            </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="jenis_kelamin">Jenis Kelamin</label>
                                                            <div class="form-check">
                                                                <label class="form-check-label" for="jenis_kelamin">
                                                                    <input type="radio"  id="P" name="jenis_kelamin" value="P" {{($user->jenis_kelamin=="P")?  "checked" : "" }} >Perempuan
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <label class="form-check-label" for="jenis_kelamin">
                                                                    <input type="radio"  id="L" name="jenis_kelamin" value="L" {{($user->jenis_kelamin=="L")?  "checked" : "" }}>Laki-laki
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="pendidikan_terakhir">Pendidikan terakhir</label>
                                                            <div class="input-group mb-3">
                                                                <select class="custom-select" id="pendidikan_terakhir" name="pendidikan_terakhir">
                                                                    <option selected>{{old('pendidikan_terakhir')?? $user->profile->pendidikan_terakhir}}</option>
                                                                    <option value="SD" {{($user->pendidikan_terakhir=="SD")}}>SD</option>
                                                                    <option value="SMP"{{($user->pendidikan_terakhir=="SMP")}}>SMP</option>
                                                                    <option value="SMA"{{($user->pendidikan_terakhir=="SMA")}}>SMA</option>
                                                                    <option value="Diploma"{{($user->pendidikan_terakhir=="Diploma")}}>Diploma</option>
                                                                    <option value="S1"{{($user->pendidikan_terakhir=="S1")}}>S1</option>
                                                                    <option value="S2"{{($user->pendidikan_terakhir=="S2")}}>S2</option>
                                                                    <option value="S3"{{($user->pendidikan_terakhir=="S3")}}>S3</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="nomor_telepon">Nomor Telepon</label>
                                                            <input id="nomor_telepon"
                                                                   type="text"
                                                                   class="form-control @error('nomor_telepon') is-invalid @enderror"
                                                                   name="nomor_telepon"
                                                                   value="{{ old('nomor_telepon') ?? $user->profile->nomor_telepon}}"
                                                                   autocomplete="nomor_telepon"
                                                                   placeholder="08XXXXXXXXXX"
                                                                   autofocus>

                                                            @if($errors->has('nomor_telepon'))
                                                                <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('nomor_telepon') }}</strong>
                                                            </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label>Social Media</label>
                                                            <input id="social_media"
                                                                   type="text"
                                                                   class="form-control @error('social_media') is-invalid @enderror"
                                                                   name="social_media"
                                                                   value="{{ old('social_media') ?? $user->profile->social_media}}"
                                                                   autocomplete="social_media" placeholder="Instagram" autofocus>

                                                            @if($errors->has('social_media'))
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('social_media') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col mb-3">
                                                        <div class="form-group">
                                                            <label>Alamat</label>
                                                            {{--                                                            <textarea class="form-control" rows="5" placeholder="Alamat"></textarea>--}}
                                                            <textarea id="alamat"
                                                                      type="text"
                                                                      class="form-control @error('alamat') is-invalid @enderror"
                                                                      rows="5"
                                                                      name="alamat"
                                                                      value="{{ old('alamat') ?? $user->profile->alamat}}"
                                                                      autocomplete="alamat" autofocus>

                                                            </textarea>
                                                            @if($errors->has('alamat'))
                                                                <span class="invalid-feedback" role="alert">
                                                                     <strong>{{ $errors->first('alamat') }}</strong>
                                                            </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{--                                        <div class="row">--}}
                                        {{--                                            <div class="col-12 col-sm-6 mb-3">--}}
                                        {{--                                                <div class="mb-2"><b>Change Password</b></div>--}}
                                        {{--                                                <div class="row">--}}
                                        {{--                                                    <div class="col">--}}
                                        {{--                                                        <div class="form-group">--}}
                                        {{--                                                            <label>Current Password</label>--}}
                                        {{--                                                            <input class="form-control" type="password" placeholder="••••••">--}}
                                        {{--                                                        </div>--}}
                                        {{--                                                    </div>--}}
                                        {{--                                                </div>--}}
                                        {{--                                                <div class="row">--}}
                                        {{--                                                    <div class="col">--}}
                                        {{--                                                        <div class="form-group">--}}
                                        {{--                                                            <label>New Password</label>--}}
                                        {{--                                                            <input class="form-control" type="password" placeholder="••••••">--}}
                                        {{--                                                        </div>--}}
                                        {{--                                                    </div>--}}
                                        {{--                                                </div>--}}
                                        {{--                                                <div class="row">--}}
                                        {{--                                                    <div class="col">--}}
                                        {{--                                                        <div class="form-group">--}}
                                        {{--                                                            <label>Confirm <span class="d-none d-xl-inline">Password</span></label>--}}
                                        {{--                                                            <input class="form-control" type="password" placeholder="••••••"></div>--}}
                                        {{--                                                    </div>--}}
                                        {{--                                                </div>--}}
                                        {{--                                            </div>--}}
                                        {{--                                        </div>--}}
                                        <div class="row">
                                            <div class="col d-flex justify-content-end">
                                                <button class="btn btn-primary" type="submit">Save Changes</button>
                                            </div>
                                        </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>

@endsection
