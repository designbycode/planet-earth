<headless-popover>
    <button
        aria-expanded="false"
        aria-haspopup="true"
        id="navigation_link_{{ Str::lower($link->name) }}"
        @class([
          $link->classes,
          'btn group -mr-4',
          ])>
        <span>{{ $link->name }}</span>
        <svg aria-hidden="true" class="text-gray-400 ml-[2px] h-5 w-5 group-hover:text-primary-500" fill="currentColor"
             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path
                clip-rule="evenodd"
                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                fill-rule="evenodd"
            />
        </svg>
    </button>
    <div
        aria-labelledby="navigation_link_{{ Str::lower($link->name) }}"
        class="absolute w-full inset-x-0 top-full mt-2"
        role="menu"
        tabindex="-1"
        hidden
    >
        <div class="relative bg-gray-200 dark:bg-gray-900 p-6 grid grid-cols-2 lg:grid-cols-4 gap-6 border border-primary-500 rounded-md">
            <a wire:navigate.hover class="font-black text-gray-900 dark:text-gray-100 hover:text-primary-500 text-lg hover:dark:text-primary-500"
               href="{{ route('home') }}" role="menuitem">
                Home
            </a>

        </div>
    </div>

</headless-popover>
