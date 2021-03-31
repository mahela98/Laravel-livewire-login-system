<div>
    Contact Page

    <form wire:submit.prevent="saveMessage">
        <div>
            <input type="text" name="name" wire:model="name" placeholder="Name" id="">
        </div>
        <div>
            <input type="email" name="email" wire:model="email" placeholder="Email" id="">
        </div>
        <div>
            <textarea wire:model="message" name="message" id="" cols="30" placeholder="Message" rows="10"></textarea>
        </div>
        <div>
            <button type="submit">Save</button>
        </div>
        <div>
            {{-- {{$message}} --}}
        </div>

    </form>

</div>