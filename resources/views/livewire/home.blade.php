<div>
    @if($show)
    <livewire:media-library
        wire:model="media"
    />
    @else
        <button wire:click="$toggle('show')" class="border p-4">Show uploader</button>
    @endif
</div>
