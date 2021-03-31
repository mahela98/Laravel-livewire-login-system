<div>
    Contact Page

    <form wire:submit.prevent="saveMessage">
        <div>
            <input type="text" name="name" wire:model.lazy="name" placeholder="Name" id="">
            @error('name')
            <div class="block w-full" style="color: red">{{$message}}</div>    
            @enderror
        </div>
        <div>
            <input type="email" name="email" wire:model.lazy="email" placeholder="Email" id="">
            @error('email')
            <div class="block w-full" style="color: red">{{$message}}</div>    
            @enderror
        </div>
        <div>
            <textarea wire:model.lazy="message" name="message" id="" cols="30" placeholder="Message" rows="10"></textarea>
            @error('message')
            <div class="block w-full" style="color: red">{{$message}}</div>    
            @enderror
        </div>
        <div>
            <button type="submit">Save</button>
        </div>
        <div>
            {{-- {{$message}} --}}
        </div>

    </form>

</div>