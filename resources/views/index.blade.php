@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Popular Games</h2>
        <div class="popular-games text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-12
        border-b border-gray-800 pb-16">
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/images/ff7.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out
                        duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                         style="right: -20px; bottom: -20px;">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">90%</div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Final Fantasy VII Remake</a>
                <div class="text-gray-400 mt-1">PS4</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/images/doom.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out
                        duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                         style="right: -20px; bottom: -20px;">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">86%</div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Doom Eternal</a>
                <div class="text-gray-400 mt-1">PC, PS4, Xbox One, Nintendo Switch, Stadia</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/images/tlou2.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out
                        duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                         style="right: -20px; bottom: -20px;">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">0%</div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    The Last of Us: Part II</a>
                <div class="text-gray-400 mt-1">PS4</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/images/luigi.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out
                        duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                         style="right: -20px; bottom: -20px;">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">0%</div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Luigi's Mansion 3</a>
                <div class="text-gray-400 mt-1">Nintendo Switch</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/images/animalcrossing.jpg" alt="game cover" class="hover:opacity-75 transition
                        ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                         style="right: -20px; bottom: -20px;">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">83%</div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Animal Crossing: New Horizons</a>
                <div class="text-gray-400 mt-1">Nintendo Switch</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/images/resident.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out
                        duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                         style="right: -20px; bottom: -20px;">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Resident Evil 3</a>
                <div class="text-gray-400 mt-1">PC, PS4, Xbox One, Nintendo Switch</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/images/alyx.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out
                        duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                         style="right: -20px; bottom: -20px;">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">70%</div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Half Life: Alyx</a>
                <div class="text-gray-400 mt-1">PC</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/images/cyberpunk.jpg" alt="game cover" class="hover:opacity-75 transition
                        ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                         style="right: -20px; bottom: -20px;">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">70%</div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Cyberpunk 2077</a>
                <div class="text-gray-400 mt-1">PC, PS4, Xbox One</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/images/desperados.jpg" alt="game cover" class="hover:opacity-75 transition
                        ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                         style="right: -20px; bottom: -20px;">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">0%</div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Desperados III</a>
                <div class="text-gray-400 mt-1">PC, PS4, Xbox One</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/images/minecraft.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out
                        duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                         style="right: -20px; bottom: -20px;">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">0%</div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Minecraft Dungeons</a>
                <div class="text-gray-400 mt-1">PC, PS4, Xbox One, Nintendo Switch</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/images/ghost.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out
                        duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                         style="right: -20px; bottom: -20px;">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">60%</div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Ghost of Tsushima</a>
                <div class="text-gray-400 mt-1">PS4</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/images/avengers.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out
                        duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                         style="right: -20px; bottom: -20px;">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">0%</div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Marvel's Avengers</a>
                <div class="text-gray-400 mt-1">PC, PS4, Xbox One, Stadia</div>
            </div>
        </div> <!-- end popular games -->
        <div class="flex flex-col lg:flex-row my-10">
            <div class="recently-reviewed w-full lg:w-3/4 mr-0 lg:mr-32">
                <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Recently Reviewed</h2>
                <div class="recently-reviewed-container space-y-12 mt-8">
                    <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
                        <div class="relative flex-none">
                            <a href="#">
                                <img src="/images/avengers.jpg" alt="game cover" class="w-48 hover:opacity-75 transition
                                ease-in-out duration-150">
                            </a>
                            <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full"
                                 style="right: -20px; bottom: -20px;">
                                <div class="font-semibold text-xs flex justify-center items-center h-full">0%</div>
                            </div>
                        </div>
                        <div class="ml-12">
                            <a href="#" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-4">
                                Marvel's Avengers</a>
                            <div class="text-gray-400 mt-1">PC, PS4, Xbox One, Stadia</div>
                            <p class="mt-6 text-gray-400 hidden lg:block">
                                Marvel’s Avengers is an epic, third-person, action-adventure game that combines an
                                original, cinematic story with single-player and co-operative gameplay. Assemble into
                                a team of up to four players online, master extraordinary abilities, customize a
                                growing roster of Heroes, and defend the Earth from escalating threats.
                            </p>
                        </div>
                    </div>

                    <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
                        <div class="relative flex-none">
                            <a href="#">
                                <img src="/images/alyx.jpg" alt="game cover" class="w-48 hover:opacity-75 transition
                                ease-in-out duration-150">
                            </a>
                            <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full"
                                 style="right: -20px; bottom: -20px;">
                                <div class="font-semibold text-xs flex justify-center items-center h-full">70%</div>
                            </div>
                        </div>
                        <div class="ml-12">
                            <a href="#" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-4">
                                Half Life: Alyx</a>
                            <div class="text-gray-400 mt-1">PC</div>
                            <p class="mt-6 text-gray-400 hidden lg:block">
                                Half-Life: Alyx is a 2020 virtual reality (VR) first-person shooter developed and
                                published by Valve. Set between the events of Half-Life (1998) and Half-Life 2 (2004),
                                players control Alyx Vance on a mission to seize a superweapon belonging to the alien
                                Combine.
                            </p>
                        </div>
                    </div>

                    <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
                        <div class="relative flex-none">
                            <a href="#">
                                <img src="/images/cyberpunk.jpg" alt="game cover" class="w-48 hover:opacity-75
                                transition ease-in-out duration-150">
                            </a>
                            <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full"
                                 style="right: -20px; bottom: -20px;">
                                <div class="font-semibold text-xs flex justify-center items-center h-full">0%</div>
                            </div>
                        </div>
                        <div class="ml-12">
                            <a href="#" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-4">
                                Cyberpunk 2077</a>
                            <div class="text-gray-400 mt-1">PC, PS4, Xbox One</div>
                            <p class="mt-6 text-gray-400 hidden lg:block">
                                Cyberpunk 2077 is an upcoming action role-playing video game developed and published
                                by CD Projekt. Adapted from the Cyberpunk franchise, the story takes place in dystopian
                                Night City, an open world with six distinct regions. Players assume the first-person
                                perspective of a customisable mercenary known as V, who can acquire skills in hacking
                                and machinery, an arsenal of ranged weapons, and options for melee combat.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="most-anticipated lg:w-1/4 mt-12 lg:mt-0">
                <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Most Anticipated</h2>
                <div class="most-anticipated-container space-y-10 mt-8">
                    <div class="game flex">
                        <a href="#">
                            <img src="/images/cyberpunk.jpg" alt="game cover" class="w-20 hover:opacity-75 transition
                            ease-in-out duration-150">
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">Cuberpunk 2077</a>
                            <div class="text-gray-400 text-sm mt-1">December 10, 2020</div>
                        </div>
                    </div>
                    <div class="game flex">
                        <a href="#">
                            <img src="/images/avengers.jpg" alt="game cover" class="w-20 hover:opacity-75 transition
                            ease-in-out duration-150">
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">Marvel's Avengers</a>
                            <div class="text-gray-400 text-sm mt-1">September 4, 2020</div>
                        </div>
                    </div>
                    <div class="game flex">
                        <a href="#">
                            <img src="/images/alyx.jpg" alt="game cover" class="w-20 hover:opacity-75 transition
                            ease-in-out duration-150">
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">Half Life: Alyx</a>
                            <div class="text-gray-400 text-sm mt-1">March 23, 2020</div>
                        </div>
                    </div>
                    <div class="game flex">
                        <a href="#">
                            <img src="/images/tlou2.jpg" alt="game cover" class="w-20 hover:opacity-75 transition
                            ease-in-out duration-150">
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">The Last of Us Part II</a>
                            <div class="text-gray-400 text-sm mt-1">June 19, 2020</div>
                        </div>
                    </div>
                </div>

                <h2 class="text-blue-500 uppercase tracking-wide font-semibold mt-12">Coming Soon</h2>
                <div class="most-anticipated-container space-y-10 mt-8">
                    <div class="game flex">
                        <a href="#"><img src="/images/cyberpunk.jpg" alt="game cover" class="w-16 hover:opacity-75
                        transition ease-in-out duration-150"></a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">Cyberpunk 2077</a>
                            <div class="text-gray-400 text-sm mt-1">Sept 16, 2020</div>
                        </div>
                    </div>
                    <div class="game flex">
                        <a href="#"><img src="/images/avengers.jpg" alt="game cover" class="w-16 hover:opacity-75
                        transition ease-in-out duration-150"></a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">Marvel's Avengers</a>
                            <div class="text-gray-400 text-sm mt-1">Sept 3, 2020</div>
                        </div>
                    </div>
                    <div class="game flex">
                        <a href="#"><img src="/images/ghost.jpg" alt="game cover" class="w-16 hover:opacity-75
                        transition ease-in-out duration-150"></a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">Ghost of Tsushima</a>
                            <div class="text-gray-400 text-sm mt-1">July 17, 2020</div>
                        </div>
                    </div>
                    <div class="game flex">
                        <a href="#"><img src="/images/tlou2.jpg" alt="game cover" class="w-16 hover:opacity-75
                        transition ease-in-out duration-150"></a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">The Last of Us Part II</a>
                            <div class="text-gray-400 text-sm mt-1">June 19, 2020</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> <!-- end container -->

@endsection
