<headless-popover class="w-full block">
    <button
        aria-expanded="false"
        aria-haspopup="true"
        id="navigation_link_mobile_{{ $link->slug }}"
        @class([
          $link->class,
          'flex items-center group w-full px-1.5 rounded py-1 justify-between'
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
        aria-labelledby="navigation_link_mobile_{{ $link->slug }}"
        class="relative w-full inset-x-0 top-full mt-2"
        role="menu"
        tabindex="-1"
        hidden
    >
        <div class="pl-4 border-l ml-4 border-gray-300 dark:border-gray-800 space-y-4">
            link
        </div>
    </div>
</headless-popover>
