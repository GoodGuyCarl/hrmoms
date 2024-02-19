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
    <div class="border rounded border-[#377037] mx-auto my-2">
        <div class="relative w-full overflow-x-auto">
            <table class="caption-bottom w-full text-xs">
                <thead class="[&amp;_tr]:border-b [&amp;_tr]:border-b-[#377037]">
                <tr class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-gray-600"/>
                    </th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0">
                        Surname
                    </th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0">
                        First Name
                    </th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0">
                        Middle Name
                    </th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0">
                        Date of Birth
                    </th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0">
                        Place of Birth
                    </th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0">
                        Citizenship
                    </th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0">
                        Sex
                    </th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0">
                        Civil Status
                    </th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0">
                        Occupation
                    </th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0">
                        Email
                    </th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0">
                        Phone Number
                    </th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0">
                        Address
                    </th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0">
                        Country
                    </th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0">
                        State
                    </th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0">
                        City
                    </th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0">
                        Zip Code
                    </th>
                </tr>
                </thead>
                <tbody class="[&amp;_tr:last-child]:border-0">
                <tr class="transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted selected:bg-blue-200">
                    <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-gray-600"/>
                    </td>
                    <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">Doe</td>
                    <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">John</td>
                    <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">A.</td>
                    <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">1990-01-01</td>
                    <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">New York</td>
                    <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">Filipino</td>
                    <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">Male</td>
                    <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">Single</td>
                    <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">Software Engineer</td>
                    <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">john.doe@example.com</td>
                    <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">+1 123 456 7890</td>
                    <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">123 Main St</td>
                    <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">USA</td>
                    <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">New York</td>
                    <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">New York</td>
                    <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">10001</td>
                </tr>
                <tr class="transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted selected:bg-blue-200">
                    <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-gray-600"/>
                    </td>
                    <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">Doe</td>
                    <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">John</td>
                    <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">A.</td>
                    <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">1990-01-01</td>
                    <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">New York</td>
                    <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">Filipino</td>
                    <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">Male</td>
                    <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">Single</td>
                    <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">Software Engineer</td>
                    <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">john.doe@example.com</td>
                    <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">+1 123 456 7890</td>
                    <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">123 Main St</td>
                    <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">USA</td>
                    <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">New York</td>
                    <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">New York</td>
                    <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">10001</td>
                </tr>
                </tbody>
            </table>
        </div>

        {{--@if($datasheets->count() == 0)
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
        @endif--}}
    </div>
</div>
