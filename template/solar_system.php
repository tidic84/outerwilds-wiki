<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solar System</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="./template/js/parallax.js"></script>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            overflow: hidden; /* Empêche le défilement */
        }
        .background {
            position: absolute;
            top: 0;
            left: 0%;
            width: 100%;
            height: 100%;
            z-index: -1; /* Place l'image derrière le contenu */
            object-fit: cover; /* Couvre toute la fenêtre */
        }
        .Sol {
            position: absolute;
            left: 0%; /* Positionner à 0% du bord gauche */
            top: 50%;
            width: 200px;
            transform: translateY(-50%);
        }
        .astre {
            position: absolute;
            top: 50%;
            width: 250px;
            transform: translateY(-50%);
        }
        .orbite {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
        }
    </style>
</head>
<body>
    <img src="./res/Back_sol__void.png" alt="Background" class="background">
    <div class="flex">
        <div class="w-1/6 flex justify-center">
            <img src="./res/soleil1.png" alt="Soleil" class="Sol">
        </div>
        <div class="w-1/6 flex justify-center">
            <img src="./res/saborb.png" alt="saborb" class="orbite">
            <img src="./res/sablieresfond.png" alt="sabliere" class="astre parallax" >
        </div>
        <div class="w-1/6 flex justify-center">
        <img src="./res/atreorb.png" alt="saborb" class="orbite">
            <img src="./res/aatrebois.png" alt="atrebois" class="astre parallax">
        </div>
        <div class="w-1/6 flex justify-center">
        <img src="./res/cravorb.png" alt="saborb" class="orbite">
            <img src="./res/cravité.png" alt="cravite" class="astre parallax">
        </div>
        <div class="w-1/6 flex justify-center">
        <img src="./res/levorb.png" alt="saborb" class="orbite">
            <img src="./res/leviate.png" alt="leviate" class="astre parallax">
        </div>
        <div class="w-1/6 flex justify-center">
        <img src="./res/somborb.png" alt="saborb" class="orbite">
            <img src="./res/sombronce.png" alt="sombronce" class="astre parallax">
        </div>
    </div>
    
    <!-- Your content here -->
</body>
</html>