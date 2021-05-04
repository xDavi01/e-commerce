<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/tailwind.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <title>Hello, world!</title>
</head>

<body class="font-sans">
    <div class="min-h-full">

        <div class="p-3 pb-20 h-full">
            <?php
			$var = ["test1", "test2", "test3", "test4", "test5", "test6",];
			foreach ($var as $title):?>
            <div class="flex shadow-md rounded-2xl border my-5">
                <img class="shadow-xl rounded-2xl z-10" src="https://place-hold.it/130" alt="">
                <div class="flex flex-col justify-between">
                    <div class="mt-1 pr-2">
                        <span class="mt-1 font-bold uppercase ml-3">
                            <?php echo $title; ?></span>
                        <span class="overflow-hidden clamp-2 text-sm ml-3"> Kowloon Legba katana motion chrome 3D-printed computer boat. Kanji futurity dead boy 8-bit city bicycle rifle carbon convenience store assault grenade. Man j-pop into tanto katana urban hotdog military-grade face forwards tube </span>
                    </div>
                    <div class="text-center" style="margin-left: -10px;">
                        <a class="border no-border-top block w-full rounded-xl font-bold py-1 prod-card-btn" href="#">ADD TO CART</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
         <!-- NAVBAR -->
        <?php include "common/navbar.php"; ?>
    </div>
</body>

</html>