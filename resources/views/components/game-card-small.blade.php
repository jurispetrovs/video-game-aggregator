<div class="game flex">
    <a href="#">
        @if($game['coverImageUrl'])
            <img src="{{ $game['coverImageUrl'] }}" alt="game cover" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
        @else
            <div class="bg-gray-800 w-16 h-20 flex-none"></div>
        @endif
    </a>
    <div class="ml-4">
        <a href="#" class="hover:text-gray-300">{{ $game['name'] }}</a>
        <div class="text-gray-400 text-sm mt-1">{{ $game['releaseDate'] }}</div>
    </div>
</div>
