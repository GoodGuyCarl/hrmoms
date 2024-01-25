<div class="bg-gray-100 rounded-xl shadow-md p-5">
    <h1 class="text-2xl font-medium">Create a new datasheet</h1>
    <ol class="flex justify-between flex-wrap">
        <li class="">
            1. Personal Information
        </li>
        <li class="">
            2. Family Background
        </li>
        <li class="">
            3. Educational Background
        </li>
        <li class="">
            4. Civil Service Eligibility
        </li>
        <li class="">
            5. Work Experience
        </li>
        <li class="">
            6. Voluntary Work or Involvement in Civic/Non-Government/People/Voluntary Organization/s
        </li>
        <li>
            7. Training Programs Attended
        </li>
        <li>
            8. Other Information
        </li>
    </ol>

    <div class="flex justify-between">
        <button {{ $currentStep == 1 ? 'disabled' : '' }} class="disabled:text-red-500 p-3 rounded-xl drop-shadow">Previous</button>
        <button {{ $currentStep == 0/* max */ ? 'disabled' : '' }}>Next</button>
    </div>{{-- --}}
{{--    <form wire:submit="create" autocomplete="on">--}}
{{--        <div class="bg-green-500 text-white p-3 rounded-lg text-center">--}}
{{--            {{ session('success') ?? session('error') }}--}}
{{--        </div>--}}
{{--        <h1 class="text-2xl font-semibold">Create New Datasheet</h1>--}}
{{--        --}}{{--            <input type="file"  wire:model.defer=" file" class="mt-5">--}}
{{--        <div class="grid grid-cols-2">--}}
{{--            <div class="col-span-1">--}}
{{--                <label for="firstname" class="mt-5">First Name</label>--}}
{{--                <input id="firstname" type="text" wire:model.defer="firstname"--}}
{{--                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">--}}
{{--                <label for="middlename" class="mt-5">Middle Name</label>--}}
{{--                <input id="middlename" type="text" wire:model.defer="middlename"--}}
{{--                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">--}}
{{--                <label for="surname" class="mt-5">Surname</label>--}}
{{--                <input id="surname" type="text" wire:model.defer="surname"--}}
{{--                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">--}}
{{--                <label for="suffix" class="mt-5">Suffix</label>--}}
{{--                <input id="suffix" type="text" wire:model.defer="name_extension"--}}
{{--                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">--}}
{{--                <label for="birthdate" class="mt-5">Birthdate</label>--}}
{{--                <input id="birthdate" type="date" wire:model.defer="birthdate"--}}
{{--                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">--}}
{{--                <label for="birthplace" class="mt-5">Birthplace</label>--}}
{{--                <input id="birthplace" type="text" wire:model.defer="birthplace"--}}
{{--                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">--}}
{{--                <label for="sex" class="mt-5">Sex</label>--}}
{{--                <select wire:model.defer="sex" id="sex">--}}
{{--                    <option value="Male">Male</option>--}}
{{--                    <option value="Female">Female</option>--}}
{{--                </select>--}}
{{--                <label for="civilstatus" class="mt-5">Civil Status</label>--}}
{{--                <select wire:model.defer="civil_status" id="civilstatus">--}}
{{--                    <option>Single</option>--}}
{{--                    <option value="Married">Married</option>--}}
{{--                    <option value="Separated">Separated</option>--}}
{{--                    <option value="Widowed">Widowed</option>--}}
{{--                </select>--}}
{{--                <label for="citizenship" class="mt-5">Citizenship</label>--}}
{{--                <input id="citizenship" type="text" wire:model.defer="citizenship"--}}
{{--                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">--}}
{{--                <label for="height" class="mt-5">Height</label>--}}
{{--                <input id="height" type="text" wire:model.defer="height"--}}
{{--                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">--}}
{{--                <label for="weight" class="mt-5">Weight</label>--}}
{{--                <input id="weight" type="text" wire:model.defer="weight"--}}
{{--                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">--}}
{{--            </div>--}}
{{--            <div class="col-span-1">--}}
{{--                <label for="bloodtype" class="mt-5">Blood Type</label>--}}
{{--                <select wire:model.defer="blood_type" id="bloodtype">--}}
{{--                    <option value="A">A</option>--}}
{{--                    <option value="B">B</option>--}}
{{--                    <option value="AB">AB</option>--}}
{{--                    <option value="O">O</option>--}}
{{--                </select>--}}
{{--                <label for="gsis" class="mt-5">GSIS ID No.</label>--}}
{{--                <input id="gsis" type="text" wire:model.defer="gsis_id_no"--}}
{{--                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">--}}
{{--                <label for="pagibig" class="mt-5">PAG-IBIG ID No.</label>--}}
{{--                <input id="pagibig" type="text" wire:model.defer="pagibig_id_no"--}}
{{--                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">--}}
{{--                <label for="philhealth" class="mt-5">PHILHEALTH No.</label>--}}
{{--                <input id="philhealth" type="text" wire:model.defer="philhealth_id_no"--}}
{{--                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">--}}
{{--                <label for="sss" class="mt-5">SSS No.</label>--}}
{{--                <input id="sss" type="text" wire:model.defer="sss_no"--}}
{{--                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">--}}
{{--                <label for="tin" class="mt-5">TIN No.</label>--}}
{{--                <input id="tin" type="text" wire:model.defer="tin_no"--}}
{{--                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">--}}
{{--                <label for="agencyemployee" class="mt-5">Agency Employee No.</label>--}}
{{--                <input id="agencyemployee" type="text" wire:model.defer="agency_employee_no"--}}
{{--                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">--}}
{{--                <label for="telephone" class="mt-5">Telephone No.</label>--}}
{{--                <input id="telephone" type="text" wire:model.defer="telephone_no" placeholder="e.g. 123-4567"--}}
{{--                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">--}}
{{--                <label for="mobile" class="mt-5">Mobile No.</label>--}}
{{--                <input id="mobile" type="text" wire:model.defer="mobile_no" placeholder="e.g. 09123456789"--}}
{{--                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">--}}
{{--                <label for="email" class="mt-5">Email Address</label>--}}
{{--                <input id="email" type="text" wire:model.defer="email_address" placeholder="e.g. user@gmail.com"--}}
{{--                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <button type="submit">Save</button>--}}
{{--    </form>--}}
</div>
