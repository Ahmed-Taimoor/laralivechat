<div
class="flex flex-col transition-all h-full overflow-hidden"
x-data="{type:'all'}">

    <header class="px-3 z-10 bg-white sticky top-0 w-full py-2">
        <div class="border-b justify-between flex items-center pb-2">
            <div class="flex items-center gap-2">
                <h5 class="font-extrabold text-2xl">Chats</h5>
            </div>
            <button>
                <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    viewBox="0 0 16 16">
                    <path
                        d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5m-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5" />
                </svg>
            </button>
        </div>
    </header>

    <div class="flex gap-3 overflow-x-scroll items-center bg-white">
        <button @click="type='all'" :class="{'bg-blue-100 bordered text-black' :type=='all'}" class="inline-flex justify-center items-center rounded-full gap-x-1 text-xs font-medium px-3 lg:px-5 py-2.5 lg:py2.5 border">
            All
        </button>

        <button @click="type='deleted'" :class="{'bg-blue-100 bordered text-black' :type=='deleted'}" class="inline-flex justify-center items-center rounded-full gap-x-1 text-xs font-medium px-3 lg:px-5 py-2.5 lg:py2.5 border">
            Deleted
        </button>
    </div>
    
    <main class=" overflow-y-scroll overflow-hidden grow relative" style="contain:content">

        <ul class="p-2 grid w-full spacey-y-2">

            <li class="py-3 hover:bg-gray-50 rounded-2xl dark:hover:bg-gray-700/70 transition-colors duration-150 flex gap-4 relative w-full cursor-pointer px-2 ">
                >lo
            </li>

       </ul>
    </main>
</div>
