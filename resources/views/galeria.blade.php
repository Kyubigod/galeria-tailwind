<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<nav class="bg-[#0f172a] text-white px-6 py-4 flex justify-between items-center">
    
    <h1 class="text-xl font-bold">Galería</h1>

    <div class="hidden md:flex gap-6 text-sm font-medium">
        <a href="#" class="hover:text-gray-300">Inicio</a>
        <a href="#" class="hover:text-gray-300">Galería</a>
        <a href="#" class="hover:text-gray-300">Nosotros</a>
        <a href="#" class="hover:text-gray-300">Contacto</a>
    </div>
    

    <button class="md:hidden text-2xl">
        &#9776;
    </button>
</nav>
<main class="max-w-6xl mx-auto px-4 py-8">
        <h2 class="text-3xl font-extrabold text-center text-[#0f172a] mb-8">Nuestra Galería</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <img src="https://images.unsplash.com/photo-1469854523086-cc02fe5d8800?w=500" alt="Paisaje Natural" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="font-bold text-lg text-slate-900">Paisaje Natural</h3>
                    <p class="text-slate-500 text-sm mt-1">Una hermosa vista de la naturaleza.</p>
                </div>
            </div>
<div class="bg-white rounded-xl shadow-md overflow-hidden">
    <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?w=500" alt="Montañas" class="w-full h-48 object-cover">
    <div class="p-4">
        <h3 class="font-bold text-lg text-slate-900">Montañas</h3>
        <p class="text-slate-500 text-sm mt-1">Paisajes increíbles rodeados de montañas.</p>
    </div>
</div>

<div class="bg-white rounded-xl shadow-md overflow-hidden">
    <img src="https://images.unsplash.com/photo-1448375240586-882707db888b?w=500" alt="Bosque" class="w-full h-48 object-cover">
    <div class="p-4">
        <h3 class="font-bold text-lg text-slate-900">Bosque</h3>
        <p class="text-slate-500 text-sm mt-1">Un tranquilo bosque rodeado de naturaleza.</p>
    </div>
</div>

<div class="bg-white rounded-xl shadow-md overflow-hidden">
    <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?w=500" alt="Playa" class="w-full h-48 object-cover">
    <div class="p-4">
        <h3 class="font-bold text-lg text-slate-900">Playa</h3>
        <p class="text-slate-500 text-sm mt-1">Un lugar perfecto para descansar.</p>
    </div>
</div>

<div class="bg-white rounded-xl shadow-md overflow-hidden">
    <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=500" alt="Ciudad" class="w-full h-48 object-cover">
    <div class="p-4">
        <h3 class="font-bold text-lg text-slate-900">Ciudad</h3>
        <p class="text-slate-500 text-sm mt-1">Arquitectura moderna en una gran ciudad.</p>
    </div>
</div>

<div class="bg-white rounded-xl shadow-md overflow-hidden">
    <img src="https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?w=500" alt="Aventura" class="w-full h-48 object-cover">
    <div class="p-4">
        <h3 class="font-bold text-lg text-slate-900">Aventura</h3>
        <p class="text-slate-500 text-sm mt-1">Explora nuevos lugares y vive nuevas experiencias.</p>
    </div>
</div>

        </div>
        
    </main>
</body>
</html>