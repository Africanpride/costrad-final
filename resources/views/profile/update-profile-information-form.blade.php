<div>

    <x-jet-form-section submit="updateProfileInformation">

        <x-slot name="form">


            <!-- Profile Photo -->
            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                <div x-data="{ photoName: null, photoPreview: null }" class="col-span-6 sm:col-span-4">
                    <x-jet-label for="photo" value="{{ __('Profile Photo') }}" />
                    <div class="flex justify-start items-center gap-3">
                        <div class="col-span-1">
                            <!-- Profile Photo File Input -->
                            <input type="file" class="hidden" wire:model="photo" x-ref="photo"
                                x-on:change="
                     photoName = $refs.photo.files[0].name;
                     const reader = new FileReader();
                     reader.onload = (e) => {
                         photoPreview = e.target.result;
                     };
                     reader.readAsDataURL($refs.photo.files[0]);
             " />


                            <!-- Current Profile Photo -->
                            <div class="mt-2 relative" x-show="! photoPreview">
                                <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->full_name }}"
                                    class="rounded-full h-20 w-20 object-cover z-10"
                                    x-on:click.prevent="$refs.photo.click()">
                            </div>

                            <!-- New Profile Photo Preview -->
                            <div class="mt-2" x-show="photoPreview" style="display: none;">
                                <span class="block rounded-full w-20 h-20 bg-cover bg-no-repeat bg-center"
                                    x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                                </span>
                            </div>
                        </div>

                        <div class=" flex gap-2 justify-start items-center ">
                            <div class="grid grid-cols-2 gap-x-2">
                                <x-jet-button class="mt-2 mr-2 text-[10px]" type="button"
                                    x-on:click.prevent="$refs.photo.click()">
                                    {{ __('Select Photo') }}
                                </x-jet-button>
                                @if ($this->user->profile_photo_path)
                                    <x-jet-secondary-button type="button" class="mt-2 text-[10px]"
                                        wire:click="deleteProfilePhoto">
                                        {{ __('Remove Photo') }}
                                    </x-jet-secondary-button>
                                @endif
                            </div>
                        </div>


                    </div>
                    <x-jet-input-error for="photo" class="mt-2" />
                </div>
            @endif
            <!-- Email -->

            <div class="col-span-6 sm:col-span-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" type="email" class="mt-1 block w-full"
                    wire:model.defer="state.email" />
                <x-jet-input-error for="email" class="mt-2" />

                @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::emailVerification()) &&
                        !$this->user->hasVerifiedEmail())
                    <div class="w-full text-left">
                        <p class="text-sm mt-2">
                            {{ __('Your email address is unverified.') }}

                        <div class="flex justify-start items-center gap-2">
                            <button type="button" class="underline text-sm text-gray-600 hover:text-gray-900"
                                wire:click.prevent="sendEmailVerification">
                                {{ __('Click here to re-send the verification email.') }}
                            </button>

                            @if ($this->verificationLinkSent)
                                <p v-show="verificationLinkSent" class=" font-medium text-sm text-green-600">
                                    {{ __('A new verification link has been sent to your email address.') }}
                                </p>
                            @endif

                        </div>
                        </p>
                    </div>

                @endif
            </div>


            <div class="block">

                <div
                    class="p-5 flex flex-col bg-white border shadow-sm rounded-xl dark:bg-gray-800 dark:border-gray-700 w-full ">
                    <label for="disabled" class="flex justify-between p-2 md:p-4">
                        <span class="flex mr-3 ">
                            <span>
                                <x-lucide-accessibility class=" w-5 h-5 text-gray-500" />
                            </span>
                            <span class="ml-5">
                                <span class="block font-medium text-gray-800 dark:text-gray-200">Disability
                                    Assistance</span>
                                <span class="block text-[12px] text-gray-500 w-10/12">
                                    Let us know if you would requirean assistance regarding any disability. This is to
                                    enable us better serve
                                    you.</span>
                            </span>
                        </span>

                        <input type="checkbox" id="pricing-switch"
                            class="relative shrink-0 w-[3.25rem] h-7 bg-gray-300 text-blue-900 checked:bg-none checked:bg-blue-900  rounded-full cursor-pointer transition-colors ease-in-out duration-200 border border-transparent ring-1 ring-transparent focus:border-blue-900 focus:ring-blue-900 ring-offset-white focus:outline-none appearance-none dark:bg-gray-700 dark:checked:bg-blue-900 dark:focus:ring-offset-gray-800 before:inline-block before:w-6 before:h-6 before:bg-white before:translate-x-0 checked:before:translate-x-full before:shadow before:rounded-full before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-gray-400"
                            checked>
                    </label>
                </div>
            </div>

            <div class="grid md:grid-cols-4 gap-4">
                <div>
                    <x-jet-label for="title" value="{{ __('Title') }}" />
                    <select id="title"
                        class="py-2 px-3 pr-9 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-firefly-900 dark:border-gray-700 dark:text-gray-400"
                        wire:model.defer="state.title" autocomplete="title">
                        <option value="">Select a title</option>
                        <option value="Mr">Mr</option>
                        <option value="Mrs">Mrs</option>
                        <option value="Miss">Miss</option>
                        <option value="Ms">Ms</option>
                        <option value="Dr">Dr</option>
                    </select>
                    <x-jet-input-error for="title" class="mt-2" />
                </div>
                <div>
                    <x-jet-label for="title" value="{{ __('Gender') }}" />
                    <select id="title"
                        class="py-2 px-3 pr-9 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-firefly-900 dark:border-gray-700 dark:text-gray-400"
                        wire:model.defer="state.gender" autocomplete="gender">
                        <option value="">Select Gender</option>
                        <option value="male">male</option>
                        <option value="female">female</option>
                    </select>
                    <x-jet-input-error for="title" class="mt-2" />
                </div>
                <div>
                    <x-jet-label for="dateOfBirth" value="{{ __('Date of Birth: DD/MM/YYYY') }}" />
                    <x-jet-input id="dateOfBirth" type="date" placeholder="Date of Birth"
                        class="py-2 px-3 pr-9 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-firefly-900 dark:border-gray-700 dark:text-gray-400"
                        wire:model.defer="state.dateOfBirth" autocomplete="dateOfBirth" />
                    <x-jet-input-error for="dateOfBirth" class="mt-2" />
                </div>

                <div>
                    <x-jet-label for="marital_status" value="{{ __('Marital Status') }}" />
                    <select id="marital_status"
                        class="py-2 px-3 pr-9 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-firefly-900 dark:border-gray-700 dark:text-gray-400"
                        wire:model.defer="state.marital_status" autocomplete="marital_status">
                        <option value="">Select Marital Status</option>
                        <option value="single">Single</option>
                        <option value="married">Married</option>
                        <option value="divorced">Divorced</option>
                        <option value="widowed">Widowed</option>
                    </select>
                    <x-jet-input-error for="marital_status" class="mt-2" />
                </div>


            </div>
            <div class="grid md:grid-cols-3 gap-4">
                <div class="">
                    <x-jet-label for="firstName" value="{{ __('First Name') }}" />
                    <x-jet-input id="firstName" type="text" class="mt-1 block w-full"
                        wire:model.defer="state.firstName" autocomplete="firstName" />
                    <x-jet-input-error for="firstName" class="mt-2" />
                </div>
                <div class="">
                    <x-jet-label for="lastName" value="{{ __('Last Name') }}" />
                    <x-jet-input id="lastName" type="text" class="mt-1 block w-full"
                        wire:model.defer="state.lastName" autocomplete="lastName" />
                    <x-jet-input-error for="lastName" class="mt-2" />
                </div>
                <div>
                    <x-jet-label for="telephone" value="{{ __('Telephone') }}" />
                    <x-jet-input id="telephone" type="tel" class="mt-1 block w-full"
                        wire:model.defer="state.telephone" autocomplete="telephone" placeholder="+x(xxx)xxx-xxxx" />
                    <x-jet-input-error for="telephone" class="mt-2" />
                </div>

            </div>
            <div class="grid grid-cols-1">
                <div>
                    <x-jet-label for="address1" value="{{ __('Address') }}" />
                    <x-jet-input id="address1" type="text" class="mt-1 block w-full"
                        wire:model.defer="state.address" autocomplete="address" />
                    <x-jet-input-error for="address1" class="mt-2" />
                </div>
            </div>
            <div class="grid md:grid-cols-4 gap-4">


                <div>
                    <x-jet-label for="state" value="{{ __('State') }}" />
                    <x-jet-input id="state" type="text" class="mt-1 block w-full"
                        wire:model.defer="state.state" autocomplete="state" />
                    <x-jet-input-error for="state" class="mt-2" />
                </div>
                <div>
                    <x-jet-label for="city" value="{{ __('City') }}" />
                    <x-jet-input id="city" type="text" class="mt-1 block w-full"
                        wire:model.defer="state.city" autocomplete="city" />
                    <x-jet-input-error for="city" class="mt-2" />
                </div>
                <div>
                    <x-jet-label for="country" value="{{ __('Country') }}" />
                    <x-jet-input id="country" type="text" class="mt-1 block w-full"
                        wire:model.defer="state.country" autocomplete="country" />
                    <x-jet-input-error for="country" class="mt-2" />
                </div>
                <div>
                    <x-jet-label for="zipcode" value="{{ __('Zipcode') }}" />
                    <x-jet-input id="zipcode" type="text" class="mt-1 block w-full"
                        wire:model.defer="state.zipcode" autocomplete="zipcode" />
                    <x-jet-input-error for="zipcode" class="mt-2" />
                </div>
            </div>
            <div class="grid md:grid-cols-3 gap-4">
                <div>
                    <x-jet-label for="emergencyContactName" value="{{ __('Emergency Contact Name') }}" />
                    <x-jet-input id="emergencyContactName" type="text" class="mt-1 block w-full"
                        wire:model="user.profile.emergencyContactName" autocomplete="emergencyContactName"
                        placeholder="Emergency Contact Name" />
                    <x-jet-input-error for="emergencyContactName" class="mt-2" />
                </div>
                <div>
                    <x-jet-label for="emergencyContactTelephone" value="{{ __('Emergency Contact Telephone') }}" />
                    <x-jet-input id="emergencyContactTelephone" type="text" class="mt-1 block w-full"
                        wire:model.defer="user.emergencyContactTelephone" autocomplete="emergencyContactTelephone" />
                    <x-jet-input-error for="emergencyContactTelephone" class="mt-2" />
                </div>

                <div>
                    <x-jet-label for="nationality" value="{{ __('Nationality') }}" />
                    <x-jet-input id="nationality" type="text" class="mt-1 block w-full"
                        wire:model.defer="state.nationality" autocomplete="nationality" />
                    <x-jet-input-error for="nationality" class="mt-2" />
                </div>
            </div>

            <div>
                <div>
                    <x-jet-label for="bio" value="{{ __('Bio') }}" />
                    <div class="mt-1">
                        <textarea wire:model.defer="state.bio" autocomplete="bio" name="bio" id="bio" rows="5"

                            class="shadow-sm focus:ring-blue-600 focus:border-blue-600 block w-full sm:text-sm border-gray-300 rounded-md dark:bg-firefly-900 dark:text-gray-300 dark:border-gray-700"
                            placeholder="{{ Auth::user()?->profile->bio }}"></textarea>
                    </div>
                </div>
            </div>

        </x-slot>

        <x-slot name="actions">
            <x-jet-button wire:loading.attr="disabled" wire:target="photo">
                {{ __('Save Settings') }}
            </x-jet-button>
            <x-jet-action-message class="mr-3" on="saved">
                <div class="max-w-xs bg-white border rounded-md shadow-lg dark:bg-gray-800 dark:border-gray-700"
                    role="alert">
                    <div class="flex p-4">
                        <div class="flex-shrink-0">
                            <svg class="h-4 w-4 text-green-500 mt-0.5" xmlns="http://www.w3.org/2000/svg"
                                width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                            </svg>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm text-gray-700 dark:text-gray-400">
                                Successfully Saved.
                            </p>
                        </div>
                    </div>
                </div>
            </x-jet-action-message>

        </x-slot>

    </x-jet-form-section>

</div>
