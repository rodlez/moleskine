<!-- To use the layout.blade.php in views/components as a Template to render in the slot variable -->
<x-app-layout>
    <div class="note-container single-note">
        <h1 class="text-3xl py-4">Edit note ID: {{ $note->id }}</h1>
        <form action="{{ route('note.update', $note->id) }}" method="POST" class="note">
            <!-- Add Token to prevent Cross-Site Request Forgery (CSRF) -->
            @csrf
            <!-- Dirtective to Override the http method -->
            @method('PUT')
            <textarea name="note" id="" cols="30" rows="10" class="note-body" placeholder="Enter note">{{ $note->note }}
            </textarea>
            <div class="note-buttons">
                <a href="{{ route('note.index') }}" class="note-cancel-button">Cancel</a>
                <button class="note-submit-button">Submit</button>
            </div>        
        </form>        
    </div>
</x-app-layout>