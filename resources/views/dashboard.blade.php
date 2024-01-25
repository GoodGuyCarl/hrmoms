<?php

use App\Models\Datasheet;

$pending_datasheets = Datasheet::where('status', 'pending')->get();;
$valid_datasheets = Datasheet::where('status', 'validated')->get();;
?>
<div class="flex flex-col gap-5">
    <h1 class="text-2xl font-bold">{{__('Dashboard')}}</h1>
    <div class="flex flex-col">
        <h1 class="block text-lg font-bold">{{__('My Account')}}</h1>
        <span class="block text-sm font-semibold leading-normal uppercase">{{auth()->user()->name}}</span>
        <span
            class="block opacity-70 text-sm font-medium leading-normal uppercase">{{auth()->user()->role}}</span>
    </div>
    <div class="flex flex-col">
        <h1 class="block text-lg font-semibold">{{__('Quick Access Section')}}</h1>
        <div class="flex gap-5">
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
            <div class="grid">
                <div class="row-span-1">
                    <button
                        class="flex w-44 gap-2.5 px-4 py-2.5 font-bold text-white bg-[#377037] rounded-md shadow-md">
                        <i class="fa-sharp fa-solid fa-circle-plus self-center"></i>
                        <p class="self-center cursor-pointer">
                            {{ __('NEW PDS') }}
                        </p>
                    </button>
                </div>
                <div class="row-span-1">
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
        <div class="flex flex-col">
            <h1 class="text-lg font-semibold">{{ __('Awaiting approval') }}</h1>
            <div class="flex gap-2.5 flex-wrap">
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
    </div>
</div>
