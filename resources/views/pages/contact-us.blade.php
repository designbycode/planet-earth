<x-app-layout>
    <x-slot name="seo">
        <x-seo-meta :$meta/>
    </x-slot>
    <section class="py-20">
        <div class="wrapper my-12 prose">
            <h1 class="text-5xl md:text-4xl font-bold">Contact Us</h1>
            <x-markdown>
                # My title

                This is a [link to our website](https://spatie.be)

                ```php
                echo 'Hello world';
                ```
            </x-markdown>
        </div>
    </section>
</x-app-layout>
