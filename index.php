<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>APP de Jose Vidal Salvador</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-blue-600 via-sky-500 to-cyan-400 min-h-screen flex items-center justify-center">
  <div class="bg-white rounded-2xl shadow-2xl p-10 text-center max-w-md">
    <h1 class="text-3xl font-bold text-gray-800 mb-4">
      APP de Jose Vidal Salvador
    </h1>
    <p class="text-lg text-gray-600 mb-6">
      Curso Azure
    </p>
    
    <div class="text-xl text-blue-700 font-semibold">
        <?php
        echo "Hola desde la app de Jose Vidal Salvador";
        
        require_once 'conexion.php';
        
        ?>
    </div>
  </div>
</body>
</html>




