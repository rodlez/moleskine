<!-- To use the layout.blade.php in views/components as a Template to render in the slot variable -->
<x-app-layout>
    <!-- Notes -->    
    <div class="note-container">
        <!-- 2 ways to generate the routes, hardcoded or use the name defined in the routes -->
        <a href="note/create" class="new-note-btn">Create Note</a>
        <a href="{{ route('note.create') }}" class="new-note-btn">Create Note</a>
        <div class="notes">
            @foreach ($notes as $note)
            <div class="note">
                <div class="note-body">
                {{ Str::words($note->note, 30) }}
                </div>
                <div class="note-buttons">
                    <!-- To include the id -> Laravel resolve note passing the id key if we include the object, or we can pass it specifically -->
                    <a href="{{ route('note.show', $note) }}" class="note-edit-button">View</a>
                    <a href="{{ route('note.edit', $note) }}" class="note-edit-button">Edit</a>
                    <form action="{{ route('note.destroy', $note) }}" method="POST">
                        <!-- Add Token to prevent Cross-Site Request Forgery (CSRF) -->
                        @csrf
                        <!-- Dirtective to Override the http method -->
                        @method('DELETE')
                        <button class="note-delete-button">Delete</button>
                    </form>
                </div>
            </div>
            @endforeach            
        </div>
        <!-- Add pagination -->
        {{ $notes->links() }}
    </div>

</x-app-layout>
