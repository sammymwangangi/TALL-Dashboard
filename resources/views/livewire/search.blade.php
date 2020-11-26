<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring" wire:model="searchTerm" />

    <ul class="list-disc">
        @foreach($users as $user)
            <li>
                <p>{{$user->name}}</p>
            </li>
        @endforeach
    </ul>
</div>
