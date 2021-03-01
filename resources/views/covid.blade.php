@extends('layout.layout')
@section('content')
<div class="content">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Provinsi</th>
                <th scope="col">Positif</th>
                <th scope="col">Sembuh</th>
                <th scope="col">Meninggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $datas)   
            <tr>
                <td>{{ $datas['Provinsi'] }}</td>
                <td>{{ $datas['Kasus_Posi'] }}</td>
                <td>{{ $datas['Kasus_Semb'] }}</td>
                <td>{{ $datas['Kasus_Meni'] }}</td>
            </tr>
            @endforeach 
        </tbody>
    </table>
</div>
@endsection
