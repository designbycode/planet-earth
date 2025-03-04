<headless-navigation class="fixed w-full z-[100] top-0 block text-gray-500 dark:bg-gray-950/80 bg-white/90 border-b border-gray-300 dark:border-primary-500/50 dark:text-gray-100 shadow-md shadow-primary-500/20 backdrop-blur-md">
    <div class="wrapper relative  px-6 py-4  flex flex-wrap justify-between
        items-center ">
        <x-navigation.brand/>
        <div class="flex items-center">
            <x-navigation.wrapper>
                <x-navigation.menu :$links/>
            </x-navigation.wrapper>
            <x-navigation.theme/>
            <x-navigation.mobile.toggle/>
        </div>
        <div hidden id="mobile_close" class="w-full mt-4 lg:hidden space-y-4 font-bold items-center">
            @foreach($links as $link)
                <x-navigation.menu.link :$link :full="true"/>
            @endforeach
        </div>
    </div>
</headless-navigation>
