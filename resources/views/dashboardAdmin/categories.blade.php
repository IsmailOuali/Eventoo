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
