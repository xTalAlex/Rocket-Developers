<x-layout.master>

<section class="relative block" style="height: 500px;">

    <div
        class="absolute top-0 w-full h-full bg-center bg-cover"
        style='background-image: url("https://images.pexels.com/photos/270348/pexels-photo-270348.jpeg?cs=srgb&dl=pexels-pixabay-270348.jpg&fm=jpg");'
    >
        <span
        id="blackOverlay"
        class="w-full h-full absolute opacity-50 bg-black"
        ></span>
    </div>

    <div
        class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
        style="height: 70px;"
    >
        <svg
        class="absolute bottom-0 overflow-hidden"
        xmlns="http://www.w3.org/2000/svg"
        preserveAspectRatio="none"
        version="1.1"
        viewBox="0 0 2560 100"
        x="0"
        y="0"
        >
        <polygon
            class="text-gray-300 fill-current"
            points="2560 0 2560 100 0 100"
        ></polygon>
        </svg>
    </div>

</section>

<section class="relative py-16 bg-gray-300">
<div class="container mx-auto px-4">
    <div
    class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-64"
    >
        <div class="px-6">
            <div class="flex flex-wrap justify-center">

            <!-- Avatar -->
            <div
                class="w-full lg:w-3/12 px-4 lg:order-2 flex justify-center"
            >
                <div class="relative">
                <img
                    alt="Avatar"
                    src="{{ $user->avatar }}"
                    class="shadow-2xl bg-white rounded-full h-36 w-36 max-w-min align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 object-cover ring-4 ring-white"
                />
                </div>
            </div>
            <!-- End Avatar -->

            <div
                class="w-full lg:w-4/12 px-4 lg:order-3 lg:text-right lg:self-center"
            >
                <div class="flex items-center py-6 px-3 mt-32 sm:mt-0">
                    
                    @if(auth()->user() && auth()->user()->is($user))
                        @if($user->isDeveloper())
                        <a  href="/admin"
                            class="bg-gray-900 active:bg-pink-600 uppercase text-white font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1"
                            type="button"
                            style="transition: all 0.15s ease 0s;"
                        >
                            Admin Panel
                        </a>
                        @endif

                        <modal-profile-edit :user="{{ $user->load('socials') }}" :socials="{{ $socials }}"></modal-profile-edit>
                    @endif

                </div>
                
            </div>

            <div class="w-full lg:w-4/12 px-4 lg:order-1">
                <div class="flex justify-center py-4 lg:pt-4 pt-8">
                <div class="mr-4 p-3 text-center">
                    <span
                    class="text-xl font-bold block uppercase tracking-wide text-gray-700"
                    >Reclutato Il</span>
                    <span class="text-sm text-gray-500">{{ $user->created_at->format('d M y') }}</span>
                </div>
                
                </div>
            </div>
            </div>
            <div class="text-center mt-12">
                <h3
                    class="text-4xl font-semibold leading-normal mb-2 text-gray-800"
                >
                    {{ $user->full_name }}
                </h3>
                <div
                    class="text-sm leading-normal mt-0 mb-2 text-gray-500 font-bold lowercase"
                >
                    <i
                    class="fas fa-envelope mr-2 text-lg text-gray-500"
                    ></i>
                    {{ $user->email }}
                </div>

                @if($user->role)
                <div class="mb-2 text-gray-700 mt-10">
                    <i class="fas fa-briefcase mr-2 text-lg text-gray-500"></i
                    >{{ $user->role->description }}
                </div>
                @else
                <div class="mb-2 text-gray-700 mt-10">
                    <i class="fas fa-user-alt mr-2 text-lg text-gray-500"></i
                    >Ospite
                </div>    
                @endif

            </div>
            <div class="mt-10 py-10 border-t border-gray-300 text-center">
                <div class="flex flex-wrap justify-center">
                    <div class="w-full lg:w-9/12 px-4">
                    <p class="mb-4 text-lg leading-relaxed text-gray-800">
                        @if($user->biography)
                            {{ $user->biography }}
                        @else
                            Nessuna informazione
                        @endif
                    </p>

                    <div class="mt-6">
                        @foreach($user->socials as $social)
                            <a
                                href="{{ $social->pivot->link }}"
                                class="bg-pink-500 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                type="button"
                            >
                                <i class="fab fa-dribbble"></i>
                            </a>
                        @endforeach
                    </div>
                    <!--
                    <a href="#pablo" class="font-normal text-pink-500"
                        >Show more</a
                    >
                    -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

</x-layout.master>

