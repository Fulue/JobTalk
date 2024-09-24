<div class="flex justify-end">
    <div class="hs-dropdown [--strategy:absolute] [--flip:false] [--placement:bottom-right] hs-dropdown-example relative inline-flex">
        <button
            id="hs-dropdown-example"
            type="button"
            class="hs-dropdown-toggle py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
            aria-haspopup="menu"
            aria-expanded="false"
            aria-label="Dropdown"
        >
            <x-mdi-filter-outline class="size-4"/>
        </button>
        <div
            class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden z-10"
            role="menu"
            aria-orientation="vertical"
            aria-labelledby="hs-dropdown-transform-style"
        >
            <div class="hs-dropdown-open:ease-in hs-dropdown-open:opacity-100 hs-dropdown-open:scale-100 transition ease-out opacity-0 scale-95 duration-200 mt-2 origin-top-left min-w-44 bg-white shadow-md rounded-lg dark:bg-neutral-800 dark:border dark:border-neutral-700 dark:divide-neutral-700" data-hs-transition>
                <div class="p-1 space-y-0.5">
                    @foreach($levels as $level)
                        <a
                            wire:navigate
                            class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700"
                            href="/profession/{{$professionId}}/level/{{$level['id']}}/questions"
                        >
                            <x-dynamic-component :component="$level['icon']" class="size-4" />
                            {{ $level['level'] }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>