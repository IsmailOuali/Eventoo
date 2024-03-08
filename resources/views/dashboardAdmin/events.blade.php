<x-app-layout>

  
    <div class="flex flex-col h-screen bg-gray-100">
    
=        <div class="flex-1 flex flex-wrap">
            <div class=" p-2 bg-white w-full md:w-60 flex flex-col md:flex hidden" id="sideNav">
                <nav>
                    <a href="{{ route('dashboardAdmin.users') }}" class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-500 hover:to-cyan-500 hover:text-white" href="#">
                        <i class="fas fa-home mr-2"></i>Gestion users
                    </a>
                    <a href="{{ route('dashboardAdmin.categories') }}" class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-500 hover:to-cyan-500 hover:text-white" href="#">
                        <i class="fas fa-file-alt mr-2"></i>Gestion des categories
                    </a>
                    <a href="{{ route('dashboardAdmin.events') }}" class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-500 hover:to-cyan-500 hover:text-white" href="#">
                        <i class="fas fa-file-alt mr-2"></i>Events
                    </a>
                    <a href="{{ route('dashboardAdmin.demandes') }}" class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-500 hover:to-cyan-500 hover:text-white" href="#">
                        <i class="fas fa-store mr-2"></i>Acceptation de demande
                    </a>
                </nav>
            </div>
    
            
                <div class="w-1/2 mt-8  p-4 shadow rounded-lg">
                    <div
                    class="mx-auto block max-w-md rounded-lg bg-gray-400 text-black bgp-6 shadow-4 dark:bg-surface-dark">
                    <form>
                      <div class="relative mb-6" data-twe-input-wrapper-init>
                        <input
                          type="text"
                          class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear  data-[twe-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-white dark:placeholder:text-black dark:autofill:shadow-autofill dark: [&:not([data-twe-input-placeholder-active])]:placeholder:opacity-0"
                          id="exampleInput7"
                          placeholder="Nom d'event" />
                        <label
                          for="exampleInput7"
                          class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6]  transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8]  peer-data-[twe-input-state-active]:-translate-y-[0.9rem] peer-data-[twe-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-300"
                          >Nom d'event
                        </label>
                      </div>
                  
                      <div class="relative mb-6" data-twe-input-wrapper-init>
                        <select name="" id="">
                            <option value="1">Maroc</option>
                            <option value="2">U.S.A</option>
                            <option value="1">Finland</option>
                            <option value="1">Argentina</option>
                        </select>
                      </div>
                      <div class="relative mb-6" data-twe-input-wrapper-init>
                        <select name="" id="">
                            <option value="1">Out</option>
                            <option value="2">Sport</option>
                            <option value="1">Art</option>
                            <option value="1">Argentina</option>
                        </select>
                      </div>
                  
                      <div class="relative mb-6" data-twe-input-wrapper-init>
                        <textarea
                          class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[twe-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-white dark:placeholder:text-neutral-300 dark:peer-focus:text-primary [&:not([data-twe-input-placeholder-active])]:placeholder:opacity-0"
                          id="exampleFormControlTextarea13"
                          rows="3"
                          placeholder="Message"></textarea>
                        <label
                          for="exampleFormControlTextarea13"
                          class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[twe-input-state-active]:-translate-y-[0.9rem] peer-data-[twe-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-300 dark:peer-focus:text-primary"
                          >Description
                        </label>
                      </div>
                  
                  
                      <button type="button" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">Submit</button>

                    </form>
                  </div>
                </div>

            </div>
        </div>
    </div>
    
    <script>
    
        const menuBtn = document.getElementById('menuBtn');
        const sideNav = document.getElementById('sideNav');
    
        menuBtn.addEventListener('click', () => {
            sideNav.classList.toggle('hidden'); 
        });
    </script>
</x-app-layout>
