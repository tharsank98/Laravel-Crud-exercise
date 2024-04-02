
<x-app-web-layout>
    {{-- <x-slot name="title">
       My Laravel App
    </x-slot> --}}

    <x-slot:title>
        My Laravel AppX
    </x-slot>

    <div class="py-5">
        <div class="container">
            <h4>Welcome to index page</h4>

        </div>
    </div>

    <x-slot:scripts>
        <script>
            alert('This is my Script area');
        </script>
    </x-slot>

</x-app-web-layout>

