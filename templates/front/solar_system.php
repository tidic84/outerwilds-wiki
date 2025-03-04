<script src="<?php echo $racine_path."templates/front/js/parallax.js" ?>"></script>
<script src="<?php echo $racine_path."templates/front/js/anim_circ.js" ?>"></script>
<style>
    /* .background {
        position: absolute;
        top: 0;
        left: 0%;
        width: 100%;
        height: 100%;
        z-index: -1;
        object: cover;
    } */

    @keyframes circle {
        0% {
            transform: rotate(90deg)translateY(200%)translate(-900px) rotate(-90deg)translateX(-200px);
        }

        100% {
            transform: rotate(140deg)translate(-160px) rotate(-140deg)translateX(-123px)translateY(-16px);
        }
    }
    .object {
        margin-top: 100vh;
        transform: translateY(-50%);
    }

    .anim {
        animation: circle 2s;
    }

    .parallax .hidden {
        display: none;
    }
</style>

<img src="../../res/Back_sol__void.png" alt="Background">
<div class="flex">
    <div class="w-1/6 flex justify-center">
        <img src="../../res/soleil1.png" alt="Soleil" class="object absolute top-1/2">
    </div>
    <div class="w-1/6 flex justify-center z-0">
        <img src="./res/saborb.png" alt="saborb" class="object absolute top-1/2">
        <img src="./res/sablieresfond.png" alt="sabliere" class="object w-3xs absolute top-1/2 w-3xs absolute top-1/2 parallax hidden">
    </div>
    <div class="w-1/6 flex justify-center">
        <img src="../../res/atreorb.png" alt="saborb" class="object absolute top-1/2">
        <img src="../../res/aatrebois.png" alt="atrebois" class="object w-3xs absolute top-1/2 parallax hidden">
    </div>
    <div class="w-1/6 flex justify-center">
        <img src="../../res/cravorb.png" alt="saborb" class="object absolute top-1/2">
        <img src="../../res/cravité.png" alt="cravite" class="object w-3xs absolute top-1/2 parallax hidden">
    </div>
    <div class="w-1/6 flex justify-center">
        <img src="../../res/levorb.png" alt="saborb" class="object absolute top-1/2">
        <img src="../../res/leviate.png" alt="leviate" class="object w-3xs absolute top-1/2 parallax hidden">
    </div>
    <div class="w-1/6 flex justify-center">
        <img src="../../res/somborb.png" alt="saborb" class="object absolute top-1/2">
        <img src="../../res/sombronce.png" alt="sombronce" class="object w-3xs absolute top-1/2 parallax hidden">
    </div>
</div>