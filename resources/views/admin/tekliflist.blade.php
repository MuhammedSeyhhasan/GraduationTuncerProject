@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h2 class="text-center mb-5 text-primary">Teklifler</h2>
    <table class="table table-striped">
        <thead class="table-primary">
            <tr>
                <th>Adı Soyadı</th>
                <th>Email</th>
                <th>Telefon</th>
                <th>Ürün</th>
                <th>Mesaj</th>
                <th>Tarih</th>
                <th>Durum</th>
                <th>İşlem</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teklifler->where('status', '!=', 'Okundu') as $talep)
                <tr>
                    <td>{{ $talep->name }}</td>
                    <td>{{ $talep->email }}</td>
                    <td>{{ $talep->phone ?? '-' }}</td>
                    <td>{{ $talep->product ?? '-' }}</td>
                    <td>{{ Str::limit($talep->message, 200) }}</td>
                    <td>{{ $talep->created_at->diffForHumans() }}</td>
                    <td>
                        @if($talep->status == 'Okundu')
                            <span class="badge bg-success">Okundu</span>
                        @else
                            <span class="badge bg-danger">Yeni</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('teklif.markAsRead', $talep->id) }}" class="btn btn-sm btn-outline-primary">
                            Okundu İşaretle
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

   
</div>


@endsection 
