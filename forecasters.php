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
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="stylesheet" href="/assets/css/forecasters.css">
</head>

<body>
    <div class="main p-4">
        <section class="container shadow-sm rounded p-4">
            <header id="ticketBox" class=" rounded" style="user-select:none;">
                <div class="d-flex flex-nowrap justify-content-between align-items-center fs-5" style="gap: 3rem;">
                    <span><i class="fa-solid fa-star"></i></span>
                    <hr class="m-0 border-4 border-black w-100 opacity-100">
                    <span><i class="fa-solid fa-star"></i></span>
                </div>

                <div class="content h-auto text-center pt-2" style="min-height:100px;">
                    <h3 class="fw-bold text-capitalize text-black">MegaSena_BTC_140520231220</h3>
                    <div class="d-flex gap-4 mt-2 fw-bold text-capitalize justify-content-center" style="font-size:14px;color:#333333c7;">
                        <p><i class="fa-solid fa-dollar-sign"></i> 5 Million</p>
                        <p><i class="fa-solid fa-chart-pie"></i> 144 Analysis</p>
                        <p><i class="fa-solid fa-receipt"></i> 325 Receipt</p>
                    </div>
                </div>

                <div class="d-flex flex-nowrap justify-content-between align-items-center fs-5" style="gap: 3rem;">
                    <span><i class="fa-solid fa-star"></i></span>
                    <hr class="m-0 border-4 border-black w-100 opacity-100">
                    <span><i class="fa-solid fa-star"></i></span>
                </div>
                <!-- Design -->
                <!-- Design -->
                <!-- Design -->
                <?php foreach (["l", "r"] as $direction) : ?>
                    <div class="ticketBox-Design <?= $direction ?>">
                        <div class="ticketBox-Design_Ball"></div>
                        <?php for ($i = 0; $i < 6; $i++) : ?>
                            <div class="ticketBox-Design_smBall"> </div>
                        <?php endfor; ?>
                        <div class="ticketBox-Design_Ball"></div>
                    </div>
                <?php endforeach; ?>
                <!-- Design End -->
                <!-- Design End -->
                <!-- Design End -->
            </header>
            <hr class="my-2 invisible">
            <main>
                <div class="d-flex flex-nowrap gap-4">
                    <div class="col-7 ">

                        <div class="d-flex flex-nowrap justify-content-between align-items-center gap-4 mt-4">
                            <button id="guessBoxLists-btnleft" class="border-0 text-white rounded-pill px-3 py-2" style="background:#d7b682;outline:none;"><i class="fa-solid fa-angle-left"></i></button>

                            <div id="guessBoxListsBox">
                                <div id="guessBoxLists" class="d-flex flex-nowrap gap-4">
                                    <?php for ($y = 0; $y < 30; $y++) : ?>
                                        <div class="shadow rounded gap-4 guessBox">
                                            <p class="m-0 p-0  mb-2 px-2 fw-bold text-white" style="background:#d7b682;">Guess <?= $y + 1 ?> | <span class="fw-normal" style="font-size:12px;">6 number</sub></p>
                                            <div class="d-flex flex-wrap gap-1 justify-content-between px-2">
                                                <?php for ($i = 0; $i < 60; $i++) : ?>
                                                    <span class="rounded-pill bg-secondary text-white text-center d-grid " style="width:25px;height:25px;place-items:center;opacity:.9;font-size:12px;"><?= $i + 1 ?></span>
                                                <?php endfor; ?>
                                            </div>
                                        </div>
                                    <?php endfor; ?>
                                </div>
                            </div>


                            <button id="guessBoxLists-btnright" class="border-0 text-white rounded-pill px-3 py-2" style="background:#d7b682;outline:none;"><i class="fa-solid fa-angle-right"></i></button>
                        </div>
                    </div>
                    <div class="col">
                        <h4 class="text-secondary">Ticket Details</h4>
                        <hr class="border-secondary border-2 m-0 mb-2 w-50" />

                        <div class="d-flex flex-wrap px-2">
                            <div class="ticketDetail col-8" style="--content:'Present' "><span>:</span> 5 Million</div>
                            <div class="ticketDetail col-8" style="--content:'Concurso' "><span>:</span> 2023</div>
                            <div class="ticketDetail col-8" style="--content:'End Date' "><span>:</span> 30 Dec 2023</div>
                            <div class="ticketDetail col-8" style="--content:'Group' "><span>:</span> TM-JAA-025</div>
                            <div class="ticketDetail col-8" style="--content:'Analysis' "><span>:</span> 144</div>
                        </div>
                        <div id="buyItemsBox" class="d-flex flex-nowrap px-2 mt-4 align-items-center gap-5">
                            <div class="d-flex flex-nowrap gap-2">
                                <button id="buyItemsBox-minus" class="btn rounded-pill minusItems p-0 py-1 px-2 shadow-sm" style="font-size:12px;"><i class="fa-solid fa-minus"></i></button>
                                <input id="buyItemsBox-Number" type="number" class="d-block rounded px-2 text-center border-0 shadow-sm outline-0" style="width:80px;outline:none;" value="1" min="1" max="999">
                                <button id="buyItemsBox-plus" class="btn rounded-pill minusItems p-0 py-1 px-2 shadow-sm" style="font-size:12px;"><i class="fa-solid fa-plus"></i></button>
                            </div>

                            <button class="fw-bold px-5 py-2 rounded border-0 shadow-sm text-white" style="background-color:#d7b682;outline:none; ">BUY NOW</button>
                        </div>
                    </div>
                </div>
            </main>

        </section>

        <section class="container shadow-sm rounded p-4 mt-2">
            <h4 class="text-secondary">About</h4>
            <hr class="border-secondary border-2 m-0 mb-2 w-25" />
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore dolore ex quaerat sint laudantium eius, voluptas, modi necessitatibus minima perspiciatis autem? Debitis, est dignissimos. Quod placeat illum tenetur illo. Soluta?
                Tempora officia aperiam, laboriosam veniam incidunt assumenda quae, saepe beatae harum corrupti porro minus dolorem, vero temporibus facilis maiores earum cupiditate magni hic consequuntur ab itaque? Corporis repellat a amet?
                Dolorem natus sint vel blanditiis? Repellendus quod tempore fugiat corrupti perspiciatis maxime sint, consequuntur, atque neque labore eaque! Nemo possimus alias quae necessitatibus, accusantium vero rerum obcaecati nostrum porro veritatis!
                Alias maxime dolor, exercitationem ipsa, iusto porro sunt harum, illum quasi possimus odit quidem eum velit soluta impedit sit optio adipisci veritatis dolorem aut aperiam est vel non. Deleniti, ex.
                Eligendi nemo assumenda ab porro velit distinctio autem ex placeat laudantium culpa, error sequi numquam. Dolores maxime quod iste quia quos in nihil et quasi quae, laboriosam odit ipsam mollitia!
                Exercitationem nam magnam, vero numquam, eum porro autem esse repudiandae ratione labore accusamus aperiam consequuntur quibusdam ullam eaque debitis facere? Hic consequatur similique voluptatibus voluptas voluptatum aliquam neque nihil incidunt.
                Voluptatem ex laborum quibusdam eaque dolore vero id hic eveniet deleniti unde, aliquid sequi voluptates repellat accusantium cum soluta assumenda ipsa labore quasi consequatur magni fuga! Nam voluptates sequi magnam!
                Pariatur soluta iste eius sunt. Repellat, eveniet, fugiat laborum necessitatibus, repudiandae repellendus nemo eos consectetur soluta consequatur non nesciunt exercitationem mollitia numquam. Iste dignissimos facilis numquam possimus repellendus dolor nisi?
                Non alias saepe impedit dignissimos minima odit ea tempora. Dolor aliquid labore, corrupti cupiditate doloribus ipsam sequi quidem ut! Assumenda non omnis facilis veritatis nihil minima adipisci architecto ut eum.
                Incidunt necessitatibus dicta expedita minus sed labore, minima adipisci. Explicabo laudantium amet hic? Obcaecati, quae? Voluptates deleniti voluptatum enim sed consequuntur illum quis obcaecati, sint dolor nostrum fuga, ipsum sit!
                Corporis pariatur, adipisci culpa corrupti incidunt cumque mollitia nemo esse hic suscipit, vero magnam modi recusandae quis nihil tempore voluptatum praesentium, debitis magni dolore saepe! Esse porro amet non iste?
                Excepturi quia sed molestiae suscipit ex doloremque. Sapiente magnam obcaecati perspiciatis laboriosam, esse adipisci pariatur odio possimus, beatae earum corporis deserunt tenetur provident blanditiis sit officiis ipsum. Voluptatem, cum maxime.
                Ipsa veniam itaque nulla quas numquam fuga repudiandae laboriosam, odio nesciunt, quae nemo tenetur adipisci. Sed officia fugit excepturi illo dolor cupiditate ipsum? In asperiores iste est voluptatem quia nulla!
                Eveniet ex porro error veniam expedita impedit unde earum, sed explicabo placeat voluptatibus provident illo similique, voluptates beatae pariatur? Assumenda asperiores officiis harum iure veniam dolorum qui dolore sunt omnis!
                Incidunt, ratione dignissimos. Eveniet, iure! Hic vero, ut itaque id suscipit rem aspernatur iste rerum vitae repudiandae accusamus enim corporis quisquam molestias praesentium ullam non ratione porro eius officia? Sequi.
                Dolorum itaque commodi tenetur magni doloribus. Libero, quae ullam exercitationem nam sunt dolor delectus voluptate tempore, illo sint totam excepturi nemo doloremque, ad dolore iure laborum. Voluptates soluta dolores maiores.
                Alias dolorem facere cumque, ipsum voluptates natus eum fuga delectus incidunt odio. Vel, sit blanditiis ex error doloribus officiis. Omnis ea cumque quaerat. Asperiores dignissimos iusto velit quo cumque accusantium.
                Commodi autem, libero voluptatem dolorem quaerat esse error dignissimos ipsum omnis. Consequuntur iusto inventore in consequatur eaque delectus illo provident mollitia laudantium modi, cumque qui. Cumque neque porro cupiditate! Quod!
                Neque voluptates earum suscipit illo non accusamus aspernatur autem, ut dolor expedita in, tenetur, odio architecto sunt reiciendis officiis. Aut recusandae ullam deserunt minima ipsam expedita eligendi ratione corporis praesentium.
                Maxime eaque atque doloribus dolor quod accusamus, fugiat obcaecati nobis maiores ullam laborum ipsam quisquam adipisci ducimus recusandae dolorum. Ut libero mollitia repellendus culpa ducimus enim! Error saepe quaerat tempora.</p>
        </section>
    </div>

    <script>
        let btnPlus = document.getElementById("buyItemsBox-plus")
        let btnMinus = document.getElementById("buyItemsBox-minus")
        let itemsNum = document.getElementById("buyItemsBox-Number")

        btnPlus.addEventListener("click", () => {
            if (+itemsNum.value >= 999) return
            itemsNum.value = +itemsNum.value + 1
        })

        btnMinus.addEventListener("click", () => {
            if (+itemsNum.value <= 1) return
            itemsNum.value = +itemsNum.value - 1
        })


        // slider
        let btnSliderR = document.getElementById("guessBoxLists-btnright")
        let btnSliderL = document.getElementById("guessBoxLists-btnleft")
        let btnSlider = document.getElementById("guessBoxLists")

        btnSliderR.addEventListener("click", () => {
            let max = -(btnSlider.querySelector(".guessBox").offsetWidth * 30 + 24 * 30 - 500);
            if (parseInt(btnSlider.style.left) - 330 <= max) {
                btnSlider.style.left = `${max}px`
                return
            }
            btnSlider.style.left = `${(parseInt(btnSlider.style.left) || 0) - 330}px`
        })
        btnSliderL.addEventListener("click", () => {
            if ((parseInt(btnSlider.style.left) || 0) + 330 > 0) {
                btnSlider.style.left = 0
                return
            }
            btnSlider.style.left = `${(parseInt(btnSlider.style.left) || 0)  + 330}px`
        })
    </script>
</body>

</html>