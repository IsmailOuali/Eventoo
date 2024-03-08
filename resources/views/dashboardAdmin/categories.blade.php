<x-app-layout>

  
    <div class="flex h-screen bg-gray-100">
    
=        <div class=" flex flex-wrap">
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
    
            <div class="flex-1 p-4 w-full">
                <div>Ajouter une Cetgorie</div>
    
                <div class="relative w-1/4 min-w-[200px] h-10 pt-4">
                    <form action="">

                        <input
                        class="peer w-full h-full bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                        placeholder=" " />
                        <label
                        class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal !overflow-visible truncate peer-placeholder-shown:text-blue-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[11px] peer-focus:text-[11px] before:content[' '] before:block before:box-border before:w-2.5 before:h-1.5 before:mt-[6.5px] before:mr-1 peer-placeholder-shown:before:border-transparent before:rounded-tl-md before:border-t peer-focus:before:border-t-2 before:border-l peer-focus:before:border-l-2 before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:content[' '] after:block after:flex-grow after:box-border after:w-2.5 after:h-1.5 after:mt-[6.5px] after:ml-1 peer-placeholder-shown:after:border-transparent after:rounded-tr-md after:border-t peer-focus:after:border-t-2 after:border-r peer-focus:after:border-r-2 after:pointer-events-none after:transition-all peer-disabled:after:border-transparent peer-placeholder-shown:leading-[3.75] text-gray-500 peer-focus:text-gray-900 before:border-blue-gray-200 peer-focus:before:!border-gray-900 after:border-blue-gray-200 peer-focus:after:!border-gray-900">Nom de Categorie
                        </label>
                        <button class="mt-4 px-3 py-1 shadow-lg shadow-gray-500/50 bg-black text-white rounded-lg text-[15px] cursor-pointer active:scale-[.97]">
			            Ajouter</button>
                    </form>

                </div>
            </div>
            <div class="flex">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                  <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                      <table
                        class="bg-gray-500 min-w-full text-left text-sm font-light text-surface dark:text-white">
                        <thead
                          class="border-b border-neutral-200 font-medium dark:border-white/10">
                          <tr>
                            <th scope="col" class="px-6 py-4">#</th>
                            <th scope="col" class="px-6 py-4">Name</th>
                            <th scope="col" class="px-6 py-4">Edit</th>
                            <th scope="col" class="px-6 py-4">Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr
                            class="border-b border-neutral-200 transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-white/10 dark:hover:bg-neutral-600">
                            <td class="whitespace-nowrap px-6 py-4 font-medium">1</td>
                            <td class="whitespace-nowrap px-6 py-4">Out</td>
                            <td class="whitespace-nowrap px-6 py-4">
                                <button type="button" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">Editer</button>
                            </td>
                            <td class="whitespace-nowrap px-6 py-4">
                                <button type="button" class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">Supprimer</button>
                            </td>
                          </tr>
                          <tr
                            class="border-b border-neutral-200 transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-white/10 dark:hover:bg-neutral-600">
                            <td class="whitespace-nowrap px-6 py-4 font-medium">2</td>
                            <td class="whitespace-nowrap px-6 py-4">Sport</td>
                            <td class="whitespace-nowrap px-6 py-4">
                                <button type="button" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">Editer</button>
                            </td>
                            <td class="whitespace-nowrap px-6 py-4">
                                <button type="button" class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">Supprimer</button>
                            </td>
                          </tr>
                          <tr
                            class="border-b border-neutral-200 transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-white/10 dark:hover:bg-neutral-600">
                            <td class="whitespace-nowrap px-6 py-4 font-medium">3</td>
                            <td class="whitespace-nowrap px-6 py-4">Art</td>
                            <td class="whitespace-nowrap px-6 py-4">
                                <button type="button" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">Editer</button>
                            </td>
                            <td class="whitespace-nowrap px-6 py-4">
                                <button type="button" class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">Supprimer</button>
                            </td>
                          </tr>
                    
                        </tbody>
                      </table>
                    </div>
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
        }
    </script>
</x-app-layout>
