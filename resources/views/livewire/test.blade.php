<div>
    {{ $message }}
    <br/>
    <button wire:key="send" wire:loading.remove wire:click="showMessage">Show message</button>
    <button wire:key="wait" wire:loading disabled>Please wait...</button>
</div>
