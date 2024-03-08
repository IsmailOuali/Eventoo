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
