<x-app-layout>

  
    <div class="flex flex-col h-screen bg-gray-100">
    
        <!-- Contenido principal -->
        <div class="flex-1 flex flex-wrap">
            <!-- Barra lateral de navegación (oculta en dispositivos pequeños) -->
            <div class="p-2 bg-white w-full md:w-60 flex flex-col md:flex hidden" id="sideNav">
                <nav>
                    <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-500 hover:to-cyan-500 hover:text-white" href="#">
                        <i class="fas fa-home mr-2"></i>Statistiques sur mes evenements
                    </a>
                    <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-500 hover:to-cyan-500 hover:text-white" href="#">
                        <i class="fas fa-file-alt mr-2"></i>Gestion des evenements
                    </a>
                    <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-500 hover:to-cyan-500 hover:text-white" href="#">
                        <i class="fas fa-store mr-2"></i>Acceptation de demande
                    </a>
                </nav>
    
                <a class="block text-gray-500 py-2.5 px-4 my-2 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-500 hover:to-cyan-500 hover:text-white mt-auto" href="#">
                    <i class="fas fa-sign-out-alt mr-2"></i>Cerrar sesión
                </a>
    
                <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mt-2"></div>
    
                <p class="mb-1 px-5 py-3 text-left text-xs text-cyan-500">Copyright OualiIsmail@2024</p>
    
            </div>
    
            <div class="flex-1 p-4 w-full">
    
                <div class="mt-4 flex flex-wrap space-x-0 space-y-2 md:space-x-4 md:space-y-0">

                    <div class="flex-1 bg-white p-4 shadow rounded-lg w-full">
                        <h2 class="text-gray-500 text-lg font-semibold pb-1">Stats</h2>
                        <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mb-6"></div> 
                        <div class="stats-container pt-4">
                            <p>Nombre des evenemnts:</p>
                            <strong>4</strong>
                        </div>
                        <div class="stats-container pt-4">
                            <p>Pourcentage de place vide a Mawazin:</p>
                            <strong>761 / 5000</strong>
                        </div>
                        <div class="stats-container pt-4">
                            <p>Pourcentage de place vide a Tomorrow Land:</p>
                            <strong>1203 / 20000</strong>
                        </div>
                    </div>
                </div>
    
                <div class="mt-8 bg-white p-4 shadow rounded-lg">
                    <h2 class="text-gray-500 text-lg font-semibold pb-4">Vos evenements</h2>
                    <div class="my-1"></div> 
                    <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mb-6"></div> 
                    <table class="w-full table-auto text-sm">
                        <thead>
                            <tr class="text-sm leading-normal">
                                <th class="py-2  bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">#</th>
                                <th class="py-2  bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">Name</th>
                                <th class="py-2  bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">Place</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="hover:bg-grey-lighter">
                                <td class="py-2  border-b border-grey-light"><img src="https://via.placeholder.com/40" alt="Foto Perfil" class="rounded-full h-10 w-10"></td>
                                <td class="py-2  border-b border-grey-light">Tomorrow Land</td>
                                <td class="py-2  border-b border-grey-light">Belguim</td>
                            </tr>
                            <tr class="hover:bg-grey-lighter">
                                <td class="py-2  border-b border-grey-light"><img src="https://via.placeholder.com/40" alt="Foto Perfil" class="rounded-full h-10 w-10"></td>
                                <td class="py-2  border-b border-grey-light">Mawazin</td>
                                <td class="py-2  border-b border-grey-light">Morocco</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="text-right mt-4">
                        <button class="bg-cyan-500 hover:bg-cyan-600 text-white font-semibold py-2 px-4 rounded">
                            Voir Plus
                        </button>
                    </div>
                </div>
 
                <div class="mt-8 bg-white p-4 shadow rounded-lg">
                    <div class="bg-white p-4 rounded-md mt-4">
                        <h2 class="text-gray-500 text-lg font-semibold pb-4">Demande d'acceptation</h2>
                        <div class="my-1"></div> 
                        <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mb-6"></div>
                        <table class="w-full table-auto text-sm">
                            <thead>
                                <tr class="text-sm leading-normal">
                                    <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">Nom</th>
                                    <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">Date</th>
                                    <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light text-right">Event</th>
                                    <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="hover:bg-grey-lighter">
                                    <td class="py-2 px-4 border-b border-grey-light">Carlos Sánchez</td>
                                    <td class="py-2 px-4 border-b border-grey-light">27/07/2023 12:00:23</td>
                                    <td class="py-2 px-4 border-b border-grey-light text-right">Mawazin</td>
                                    <td class="py-2 px-4 border-b border-grey-light text-right">
                                        <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Approuver</button>
                                        <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Refuser</button>

                                    </td>
                                </tr>
                            <tr class="hover:bg-grey-lighter">
                                <td class="py-2 px-4 border-b border-grey-light">Pedro Hernández</td>
                                <td class="py-2 px-4 border-b border-grey-light">02/08/2023 </td>
                                <td class="py-2 px-4 border-b border-grey-light text-right">Tomorrow Land</td>
                                <td class="py-2 px-4 border-b border-grey-light text-right">
                                    <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Approuver</button>
                                    <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Refuser</button>

                                </td>
                            </tr>
                            <tr class="hover:bg-grey-lighter">
                                <td class="py-2 px-4 border-b border-grey-light">Sara Ramírez</td>
                                <td class="py-2 px-4 border-b border-grey-light">03/08/2023</td>
                                <td class="py-2 px-4 border-b border-grey-light text-right">Tomorrow Land</td>
                                <td class="py-2 px-4 border-b border-grey-light text-right">
                                    <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Approuver</button>
                                    <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Refuser</button>

                                </td>
                            </tr>
                            <tr class="hover:bg-grey-lighter">
                                <td class="py-2 px-4 border-b border-grey-light">Daniel Torres</td>
                                <td class="py-2 px-4 border-b border-grey-light">04/08/2023</td>
                                <td class="py-2 px-4 border-b border-grey-light text-right">Mawazin</td>
                                <td class="py-2 px-4 border-b border-grey-light text-right">
                                    <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Approuver</button>
                                    <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Refuser</button>

                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="text-right mt-4">
                            <div class="text-right mt-4">
                                <button class="bg-cyan-500 hover:bg-cyan-600 text-white font-semibold py-2 px-4 rounded">
                                    Voir Plus
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script>
    
        // Agregar lógica para mostrar/ocultar la navegación lateral al hacer clic en el ícono de menú
        const menuBtn = document.getElementById('menuBtn');
        const sideNav = document.getElementById('sideNav');
    
        menuBtn.addEventListener('click', () => {
            sideNav.classList.toggle('hidden'); // Agrega o quita la clase 'hidden' para mostrar u ocultar la navegación lateral
        });
    </script>
</x-app-layout>
