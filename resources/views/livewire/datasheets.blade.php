<div>
    <div class="flex items-center gap-x-5">
        <h1 class="text-2xl font-semibold">PDS Manager</h1>
        <a href="/datasheets/create" wire:navigate
           class="flex gap-2.5 px-4 py-2 text-white bg-[#377037] rounded-md shadow-md">
            <i class="fa-sharp fa-solid fa-circle-plus self-center"></i>
            <p class="self-center cursor-pointer font-bold">
                New Record
            </p>
        </a>
    </div>
    <div class="relative my-4">
       @if($datasheets->count() == 0)
           <div class="">
               <p class="text-center text-2xl font-semibold">No records found.</p>
           </div>
        @else
            <div class="border-collapse rounded">
                <div class="table border border-[#377037] overflow-x-auto rounded-xl">
                    <div class="table-header-group">
                        <div class="table-row border-b border-[#377037]">
                            <div class="table-cell px-6 py-3 align-middle">
                                <p class="text-sm text-gray-500 font-extralight text-center">ID</p>
                            </div>
                            <div class="table-cell px-6 py-3 align-middle">
                                <p class="text-sm text-gray-500 font-extralight text-center">Name</p>
                            </div>
                            <div class="table-cell px-6 py-3 align-middle">
                                <p class="text-sm text-gray-500 font-extralight text-center">Sex</p>
                            </div>
                            <div class="table-cell px-6 py-3 align-middle">
                                <p class="text-sm text-gray-500 font-extralight text-center">Date Created</p>
                            </div>
                            <div class="table-cell px-6 py-3 align-middle">
                                <p class="text-sm text-gray-500 font-extralight text-center">Made by</p>
                            </div>
                        </div>
                    </div>
                    @foreach($datasheets as $datasheet)
                        <div class="table-row-group">
                            <div class="table-row border-b border-[#377037]">
                                <div class="table-cell px-6 py-4 font-medium align-middle text-center">
                                   PDS {{ $datasheet->id }}
                                </div>
                                <div class="table-cell px-6 py-4 font-medium align-middle text-center">
                                    {{ $datasheet->firstname . ' ' . $datasheet->middlename . ' ' . $datasheet->surname . ' ' . $datasheet->name_extension }}
                                </div>
                                <div class="table-cell px-6 py-4 font-medium align-middle text-center">
                                    < other data here >
                                </div>
                                <div class="table-cell px-6 py-4 font-medium align-middle text-center">
                                    {{ $datasheet->created_at->locale('en')->isoFormat('MMM DD, YYYY') }}
                                </div>
                                
                                <div class="table-cell px-6 py-4 align-middle">
                                    <button class="flex gap-2.5 px-3 py-1.5 text-white bg-[#377037] rounded-md shadow-md">
                                        <i class="fa-sharp fa-solid fa-circle-plus self-center"></i>
                                        <p class="self-center cursor-pointer font-bold">
                                            View
                                        </p>
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
       @endif
    </div>
</div>
