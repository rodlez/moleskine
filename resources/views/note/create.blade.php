<!-- To use the layout.blade.php in views/components as a Template to render in the slot variable -->
<x-app-layout>
    <div class="note-container single-note">
        <h1>Create new note</h1>
        <form action="{{ route('note.store') }}" method="POST" class="note">
            <!-- Add Token to prevent Cross-Site Request Forgery (CSRF) -->
            @csrf
            <textarea name="note" id="" cols="30" rows="10" class="note-body" placeholder="Enter note"></textarea>
            <div class="note-buttons">
                <a href="{{ route('note.index') }}" class="note-cancel-button">Cancel</a>
                <button class="note-submit-button">Submit</button>
            </div>        
        </form>        
    </div>
</x-app-layout>