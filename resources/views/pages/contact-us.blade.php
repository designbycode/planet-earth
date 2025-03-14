<x-app-layout>
    <x-slot name="seo">
        <x-seo-meta :$meta/>
    </x-slot>
    <section class="py-20">
        <div class="wrapper my-12 prose dark:prose-invert">
            <h1 class="text-5xl md:text-4xl font-bold">Contact Us</h1>
            <livewire:quote-form/>
        </div>
    </section>
</x-app-layout>
