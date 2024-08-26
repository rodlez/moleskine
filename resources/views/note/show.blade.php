<!-- To use the layout.blade.php in views/components as a Template to render in the slot variable -->
<x-layout>
    <div class="note-container single-note">
        
        <div class="note-header">
            <h1>Note: {{ $note->created_at }}</h1>
            <div class="note-buttons">
                <a href="{{ route('note.index') }}" class="note-edit-button">Back</a>
                <a href="{{ route('note.edit', $note->id) }}" class="note-edit-button">Edit</a>
                <form action="{{ route('note.destroy', $note) }}" method="POST">
                    <!-- Add Token to prevent Cross-Site Request Forgery (CSRF) -->
                    @csrf
                    <!-- Dirtective to Override the http method -->
                    @method('DELETE')
                    <button class="note-delete-button">Delete</button>
                </form>
            </div>
        </div>
        <div class="note">
            <div class="note-body">{{ $note->note }}</div>
        </div>
    </div>
</x-layout>
