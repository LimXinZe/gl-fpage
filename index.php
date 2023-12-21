<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listing Page and Forecasting Page</title>

    <!-- Bootstrap -->
    <!-- Bootstrap -->
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous" defer></script>
    <!-- Bootstrap End -->
    <!-- Bootstrap End -->
    <!-- Bootstrap End -->
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="stylesheet" href="/assets/css/index.css">

</head>

<body>
    <div class="main p-4">
        <section class="container shadow-sm rounded p-4 pt-2">
            <!-- title -->
            <h3 id="title" class="">Game Lists</h3>
            <!-- filter and search button -->
            <div class="d-flex flex-nowrap justify-content-between">
                <button class="btn background-none rounded-pill px-4 py-1 border d-flex flex-nowrap gap-2 align-items-center">
                    <i class="fa-solid fa-filter"></i>
                    Filter
                </button>

                <button class="btn background-none rounded-pill px-4 py-1 border d-flex flex-nowrap gap-2 align-items-center">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    Search
                </button>
            </div>

            <div class="d-flex flex-nowrap mt-2 align-items-center">
                <!-- filter list -->
                <div id="filterBadges" class="d-flex flex-nowrap gap-1 col align-items-center pr-4">
                    <?php
                    if (!count($_GET)) $_GET['All'] = True;

                    foreach (array_keys($_GET) as $key => $value) :
                        echo "<span class=\"badge rounded-pill text-secondary text-capitalize\">{$value}</span>";
                    endforeach;
                    ?>
                </div>

                <!-- show how many result  -->
                <div class="d-flex flex-nowrap col justify-content-end gap-3 align-items-center">
                    <div class="d-flex align-items-center h-full gap-2">
                        <select name="" id="" class="bg-transparent text-gray rounded-pill py-1 px-2 ">
                            <option value="10">10</option>
                            <option value="10">15</option>
                            <option value="10">20</option>
                        </select>
                        <p class="p-0 m-0" style="font-size:14px ;font-weight:bold; color:gray;">Result</p>
                    </div>
                </div>

            </div>

            <hr class="invisible my-2">

            <div id="ticketLists" class="row justify-content-between " style="gap:1rem 0;" >
                <?php for ($i = 0; $i < 10; $i++) : ?>
                    <div class="col-6 px-4">
                        <div class="ticket " style="user-select:none;">
                            <a href="/forecasters.php" class="d-block w-100 h-100 ticketDetails">

                                <div class="d-flex " style="height:20px;color:#333333c7;">
                                    <p class="fw-bold p-0 m-0" style="font-size:13px;">Open Date : 12 Dec 2023</p>
                                    <hr class="invisible mx-4">
                                    <p class="fw-bold p-0 m-0" style="font-size:13px;"><i class="fa-solid fa-bitcoin-sign"></i> BTC</p>
                                </div>
                                <h5 class="fw-bold" style="min-height:2.8rem;">MegaSena_BTC_140520231220</h5>

                                <h4 class>USD 4.50 <sup class="text-danger" style="font-size:9px;"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></sup></h4>

                                <hr class="border-2 m-0 mx-2" style="margin-right:3rem !important ;">

                                <div class="d-flex gap-4 mt-2 fw-bold text-capitalize" style="font-size:14px;color:#333333c7;">
                                    <p><i class="fa-solid fa-dollar-sign"></i> 5 Million</p>
                                    <p><i class="fa-solid fa-chart-pie"></i> 144 Analysis</p>
                                    <p><i class="fa-solid fa-receipt"></i> 325 Receipt</p>
                                </div>

                                <h4 id="leftText" class="text-uppercase position-absolute">details</h4>
                            </a>
                        </div>
                    </div>


                <?php endfor; ?>
            </div>


        </section>
    </div>
</body>

</html>