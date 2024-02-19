<div class="flex flex-col gap-5">
    <h1 class="text-2xl font-bold">{{__('Dashboard')}}</h1>
    <div class="flex space-x-5">
        <div class="flex flex-col p-5 bg-gray-200 shadow rounded-lg w-1/2 border border-1 border-[#377037] space-y-2.5">
            <h1 class="block font-medium">{{__('Account Details')}}</h1>
            <span class="block text-sm leading-normal">Name: {{auth()->user()->name}}</span>
            <span class="block text-sm leading-normal">Email address: {{auth()->user()->email}}</span>
            <span
                class="block text-sm leading-normal">Job Title: <span class="uppercase">{{auth()->user()->role}}</span>
        </span>
            <span class="block text-sm leading-normal">Date Joined: {{ auth()->user()->created_at->translatedFormat('M d, Y') }} ({{ auth()->user()->created_at->shortAbsoluteDiffForHumans() }})</span>
            <div>
                <button class="flex gap-2.5 px-4 py-2.5 font-bold text-white bg-[#377037] rounded-md shadow-md">
                    <i class="fa-sharp fa-solid fa-circle-plus self-center"></i>
                    <p class="self-center cursor-pointer">
                        {{ __('EDIT PROFILE') }}
                    </p>
                </button>
            </div>
        </div>
        <div class="flex flex-col">
            <h1 class="block font-medium my-2">{{__('Quick Access Section')}}</h1>
            <div class="flex gap-2.5">
                <div
                    class="p-5 w-44 min-h-32 justify-center flex flex-col text-center bg-gray-50 rounded-lg shadow-md">
                    <h1 class="block text-lg font-semibold">{{__('Total PDS')}}</h1>
                    <p class="block text-5xl font-bold leading-normal uppercase">{{-- $approved_datasheets->count() --}}
                        0</p>
                </div>
                <div
                    class="p-5 w-44 min-h-32 justify-center flex flex-col text-center bg-gray-50 rounded-lg shadow-md">
                    <h1 class="block text-lg font-semibold">{{__('Total Resumes')}}</h1>
                    <p class="block text-5xl font-bold leading-normal uppercase">0</p>
                </div>
                <div class="flex flex-col gap-1.5">
                    <button
                        class="flex w-44 gap-2.5 px-4 py-2.5 font-bold text-white bg-[#377037] rounded-md shadow-md">
                        <i class="fa-sharp fa-solid fa-circle-plus self-center"></i>
                        <p class="self-center cursor-pointer">
                            {{ __('NEW PDS') }}
                        </p>
                    </button>
                    <button
                        class="flex w-44 gap-2.5 px-4 py-2.5 font-bold text-white bg-[#377037] rounded-md shadow-md">
                        <i class="fa-sharp fa-solid fa-circle-plus self-center"></i>
                        <p class="self-center cursor-pointer">
                            {{ __('NEW RESUME') }}
                        </p>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="flex space-x-5">
        <div class="flex flex-col">
            <h1 class="text-lg font-semibold">{{ __('Awaiting approval') }}</h1>
            <div class="flex gap-2.5 flex-wrap">
                <div class="border rounded border-[#377037] my-2">
                    <div class="relative w-full overflow-x-auto">
                        <table class="caption-bottom w-full text-xs">
                            <thead class="[&amp;_tr]:border-b [&amp;_tr]:border-b-[#377037]">
                            <tr class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                                <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0">
                                    <input type="checkbox" class="form-checkbox h-5 w-5 text-gray-600"/>
                                </th>
                                <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0">
                                    Document Type
                                </th>
                                <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0">
                                    Name of Applicant
                                </th>
                                <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0">
                                    Submitted By
                                </th>
                                <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0">
                                    Date Submitted
                                </th>
                                <th class="h-12 px-4 text-center align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0">
                                    Action
                                </th>
                            </tr>
                            </thead>
                            <tbody class="[&amp;_tr:last-child]:border-0">
                            <tr class="transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted selected:bg-blue-200">
                                <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">
                                    <input type="checkbox" class="form-checkbox h-5 w-5 text-gray-600"/>
                                </td>
                                <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">Personal Datasheet</td>
                                <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">Juan Dela Cruz</td>
                                <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">Carl Angelo Sanguyo</td>
                                <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">1990-01-01</td>
                                <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">
                                    <button class="bg-[#377037] px-2.5 py-2 rounded-full text-white font-semibold drop-shadow">
                                        <i class="fa-regular fa-eye"></i>
                                    </button>
                                    <button class="bg-white px-2.5 py-2 rounded-full text-[#377037] font-semibold drop-shadow">
                                        <i class="fa-solid fa-check"></i>
                                    </button>
                                    <button class="bg-red-600 px-3 py-2 rounded-full text-white font-semibold drop-shadow">
                                        <i class="fa-solid fa-times"></i>
                                    </button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                @if(Auth::user()->role == 'employee')
                    @foreach($valid_datasheets as $valid_datasheet)
                        <div class="flex flex-col bg-gray-50 py-2.5 px-5 rounded-lg shadow-lg max-w-4xl w-64">
                            <h1 class="font-semibold">
                                PDS
                            </h1>
                            <div class="flex flex-col">
                                <p class="text-sm">
                                    {{ $valid_datasheet->firstname . ' ' . $valid_datasheet->middlename . ' ' . $valid_datasheet->surname . ' ' . $valid_datasheet->name_extension }}
                                </p>
                                <p class="text-xs opacity-70">
                                    {{ $valid_datasheet->sex . ', ' . $valid_datasheet->civil_status }}
                                </p>
                                <div class="flex justify-between">
                                    <p class="text-xs font-semibold self-center">
                                        {{ $valid_datasheet->created_at->diffForHumans() }}
                                    </p>
                                </div>
                                <div class="flex justify-between mt-3">
                                    <form method="post"
                                          action="{{ route('datasheets.approve', ['datasheet' => $valid_datasheet->id]) }}">
                                        @csrf
                                        <button
                                            class="self-center bg-[#377037] px-4 py-2 rounded-full text-white font-semibold drop-shadow">
                                            Approve
                                        </button>
                                    </form>
                                    <button
                                        class="self-center bg-white px-4 py-2 rounded-full text-[#377037] font-semibold drop-shadow">
                                        Decline
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @foreach($pending_datasheets as $pending_datasheet)
                        <div class="flex flex-col bg-gray-50 py-2.5 px-5 rounded-lg shadow-lg max-w-4xl w-64">
                            <h1 class="font-semibold">
                                PDS
                            </h1>
                            <div class="flex flex-col">
                                <p class="text-sm">
                                    {{ $pending_datasheet->firstname . ' ' . $pending_datasheet->middlename . ' ' . $pending_datasheet->surname . ' ' . $pending_datasheet->name_extension }}
                                </p>
                                <p class="text-xs opacity-70">
                                    {{ $pending_datasheet->sex . ', ' . $pending_datasheet->civil_status }}
                                </p>
                                <div class="flex justify-between">
                                    <p class="text-xs font-semibold self-center">
                                        {{ $pending_datasheet->created_at->diffForHumans() }}
                                    </p>
                                </div>
                                <div class="flex justify-between mt-3">
                                    <form method="post"
                                          action="{{ route('datasheets.validate', ['datasheet' => $pending_datasheet->id]) }}">
                                        @csrf
                                        <button
                                            class="self-center bg-[#377037] px-4 py-2 rounded-full text-white font-semibold drop-shadow">
                                            Validate
                                        </button>
                                    </form>
                                    <button
                                        class="self-center bg-white px-4 py-2 rounded-full text-[#377037] font-semibold drop-shadow">
                                        Decline
                                    </button>
                                </div>
                            </div>
                            @endforeach
                            @elseif(Auth::user()->role == 'secretary')
                                @foreach($pending_datasheets as $pending_datasheet)
                                    <div
                                        class="flex flex-col bg-gray-50 py-2.5 px-5 rounded-lg shadow-lg max-w-4xl w-64">
                                        <h1 class="font-semibold">
                                            PDS
                                        </h1>
                                        <div class="flex flex-col">
                                            <p class="text-sm">
                                                {{ $pending_datasheet->firstname . ' ' . $pending_datasheet->middlename . ' ' . $pending_datasheet->surname . ' ' . $pending_datasheet->name_extension }}
                                            </p>
                                            <p class="text-xs opacity-70">
                                                {{ $pending_datasheet->sex . ', ' . $pending_datasheet->civil_status }}
                                            </p>
                                            <div class="flex justify-between">
                                                <p class="text-xs font-semibold self-center">
                                                    {{ $pending_datasheet->created_at->diffForHumans() }}
                                                </p>
                                                <button class="self-center bg-[#377037] px-2 py-0.5 rounded-full"><i
                                                        class="text-white fa-solid fa-pen fa-xs"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                </div>
            </div>
            <div class="flex flex-col flex-grow">
                <h1 class="text-lg font-semibold">{{ __('Recent Activities') }}</h1>
                <div class="flex flex-col gap-2.5">
                    <div class="flex flex-col bg-gray-50 py-2.5 px-5 rounded-lg shadow-lg max-w-4xl w-64">
                        <h1 class="font-semibold">
                            PDS
                        </h1>
                        <div class="flex flex-col">
                            <p class="text-sm">
                                Juan Dela Cruz
                            </p>
                            <p class="text-xs opacity-70">
                                Test
                            </p>
                            <div class="flex justify-between">
                                <p class="text-xs font-semibold self-center">
                                    1 hour ago
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
