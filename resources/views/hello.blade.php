@extends('layouts.frontend')
@section('content')
<div style="background-color: #4d9de0; padding: 100px 0" class="clearfix">
    <div class="container text-center">
        <h1 style="color: #fff">Pengaduan Cepat</h1>
        <div class="input-group form-search">
        <input type="text" class="form-control input-lg search-query">
        <span class="input-group-btn">
        <button type="submit" class="btn btn-lg btn-primary" data-type="last">Cari</button>
        </span>
        </div>
        <div class="help-block" style="color: #fff">Malu bertanya sesat di dunia maya.</div>
    </div>
</div>

<div style="background-color: #fafafa;">
    <div class="text-center" style="padding: 48px 0">
        <p class="lead">
            <strong>Berbageek</strong> adalah platform tanya jawab, diskusi, dan berbagi <del>ilmu</del> apapun khusus untuk <abbr title="">geek</abbr>.
            <br/><small><i class="text-muted">Selain geek dilarang masuk.</i></small>
        </p>
        <strong><small class="text-muted">Ga yakin dengan identitasmu? Galau antara <abbr title="geek">geek</abbr>, <abbr title="">nerd</abbr>, atau <abbr title="">warga biasa</abbr>? <a href="">Cari tahu disini</a>.</small></strong>
    </div>

    <div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
              <div class="panel-heading">Trending</div>
              <ul class="list-group">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Morbi leo risus</li>
                <li class="list-group-item">Porta ac consectetur ac</li>
                <li class="list-group-item">Vestibulum at eros</li>
              </ul>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
              <div class="panel-heading">Terbaru</div>
              <ul class="list-group">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Morbi leo risus</li>
                <li class="list-group-item">Porta ac consectetur ac</li>
                <li class="list-group-item">Vestibulum at eros</li>
              </ul>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
              <div class="panel-heading">Geek of The Month</div>
              <ul class="list-group">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Morbi leo risus</li>
                <li class="list-group-item">Porta ac consectetur ac</li>
                <li class="list-group-item">Vestibulum at eros</li>
              </ul>
            </div>
        </div>
    </div>

    </div>

</div>

<div class="container" style="padding-top:48px">
    <h2 class="text-center" style="margin-bottom: 48px">Lihat Kementerian</h2>
    <div class="row">
    @foreach(range(1,12) as $item)
    <div class="col-md-4">
        <div class="thumbnail">
            <div class="caption text-center">
                <h3>PHP</h3>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id ...</p>
            </div>
        </div>
    </div>
    @endforeach

    </div>
</div>
@stop
