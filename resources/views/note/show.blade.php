<!-- To use the layout.blade.php in views/components as a Template to render in the slot variable -->
<x-layout>
    <div class="note-container single-note">
        <div class="note-header">
            <h1>Note: {{ $note->created_at }}</h1>
            <div class="note-buttons">
                <a href="{{ route('note.edit', $note->id) }}" class="note-edit-button">Edit</a>
                <button class="note-delete-button">Delete</button>
            </div>
        </div>
        <div class="note">
            <div class="note-body">{{ $note->note }}</div>
        </div>
    </div>
</x-layout>
