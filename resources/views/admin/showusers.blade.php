@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h2 class="text-center mb-5 text-primary">List of Admins</h2>
    <table class="table table-striped">
        <thead class="table-primary">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Picture</th>
                <th>Bio</th>
                <th>Created At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    @if($user->picture)                    
                    <img src="{{ asset('storage/' . $user->picture) }}" alt="Admin Picture" style="width: 50px; height: 50px; border-radius: 50%;">
                    @else
                        No Image
                    @endif
                </td>
                <td>{{ $user->bio ?? 'N/A' }}</td>
                <td>{{ $user->created_at ? $user->created_at->format('Y-m-d') : 'N/A' }}</td>
                <td>
                    <!-- زر فتح المودال -->
                    <button class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" data-userid="{{ $user->id }}">
                        Delete
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Modal تأكيد الحذف -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="deleteModalLabel">Confirm Deletion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <p class="fs-5">Are you sure you want to delete this user?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <form id="deleteForm" action="" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Yes, Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript لتحميل الـ ID داخل الفورم -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var deleteModal = document.getElementById('deleteModal');
        deleteModal.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget; 
            var userId = button.getAttribute('data-userid'); 
            var form = document.getElementById('deleteForm');
            form.action = "/users/" + userId; 
        });
    });
</script>

@endsection
