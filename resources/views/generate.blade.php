<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('auth.Generate') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">

            </div>
        </div>
    </div>
    @push('scripts')
    <script>
        $(document).ready(function(){
            console.log('JQuery Init');
         })
    </script>

    @endpush
</x-app-layout>
