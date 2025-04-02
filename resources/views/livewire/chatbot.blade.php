<div x-data="{ open: false, wiggle: false }" x-init="setInterval(() => { wiggle = true; setTimeout(() => wiggle = false, 500); }, 5000)" class="fixed bottom-4 right-4 z-50">
    <!-- Chat Button -->
    <!-- Chat Button -->
    <button 
        @click="open = !open"
        @mouseenter="wiggle = false" 
        x-bind:class="{ 'animate-wiggle': wiggle }"
        class="bg-orange-600 text-white flex items-center p-3 rounded-full shadow-lg transition-all">
        💬
        <span class="ml-2 text-sm font-medium hidden md:inline">Need Help? Chat with AI Support</span>
    </button>

    <!-- Chat Window -->
    <div x-show="open" x-transition class="absolute bottom-16 right-0 w-70 md:w-100 bg-white shadow-2xl rounded-lg p-4 border border-gray-200">
        <div class="flex justify-between items-center border-b pb-2">
            <h3 class="text-lg font-semibold">AI Chat Support</h3>
            <button @click="open = false" class="text-gray-500">&times;</button>
        </div>

        <div class="h-64 overflow-y-auto space-y-2 p-2">
            @foreach ($messages as $message)
                <div class="flex {{ $message['sender'] === 'user' ? 'justify-end' : 'justify-start' }}">
                    <div class="p-3 rounded-lg max-w-xs {{ $message['sender'] === 'user' ? 'bg-orange-600 text-white' : 'bg-gray-200 text-gray-800' }}">
                        {{ $message['text'] }}
                    </div>
                </div>
            @endforeach
        </div>

        <div class="flex items-center border-t pt-2 flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-2">
    <input 
        wire:model="input" 
        wire:keydown.enter="sendMessage" 
        type="text" 
        class="flex-1 p-2 border rounded-md w-full sm:w-auto" 
        placeholder="Type a message..."
    >
    <button 
        wire:click="sendMessage" 
        class="ml-2 p-2 bg-orange-600 text-white rounded-md w-full sm:w-auto">
        Send
    </button>
</div>

    </div>
    <style>
    @keyframes wiggle {
        0%, 100% { transform: rotate(0deg); }
        25% { transform: rotate(5deg); }
        50% { transform: rotate(-5deg); }
        75% { transform: rotate(5deg); }
    }
    .animate-wiggle {
        animation: wiggle 0.5s ease-in-out;
    }
    </style>

</div>