<!doctype html>

<title>Laravel From Scratch Blog</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">
    <nav class="md:flex md:justify-between md:items-center">
            <div>
                <a href="/">
                    <img src="./images/Cryptnance.jpg" alt="Cryptnance logo" width="165" height="16">
                </a>
            </div>

            <div class="mt-8 md:mt-0">
                <a href="/" class="text-xs font-bold uppercase">Home Page</a>

                <a href="/about" class="text-xs font-bold uppercase">About Us</a>

                <a href="#" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                    Subscribe for Updates
                </a>
            </div>
        </nav>
        

        <header class="max-w-xl mx-auto mt-20 text-center">
            <h1 class="text-4xl">
                Latest <span class="text-blue-500">Cryptocurrency News</span> 
            </h1>

            <h2 class="inline-flex mt-2">By DavesCryptnance <span class="text-blue-500"><img src="./images/lary-head.svg" 
                                                               alt=" CEO Of Cryptnance"></h2></span>

            <p class="text-sm mt-14">
                Another year. Another update. We're refreshing the popular Cryptnance blog with new content.
                We are  going to keep you guys up to speed with what's going on!
            </p>

            <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-8">
                <!--  Category -->
                <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">
                    <select class="flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold">
                        <option value="category" disabled selected>Category
                        </option>
                        <option value="personal">Blockchains</option>
                        <option value="business">Metaverse</option>
                        <option value="business">NFTS</option>
                        <option value="business">Gaming</option>
                    </select>
                    <svg class="transform -rotate-90 absolute pointer-events-none" style="right: 12px;" width="22"
                         height="22" viewBox="0 0 22 22">
                        <g fill="none" fill-rule="evenodd">
                            <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                            </path>
                            <path fill="#222"
                                  d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                        </g>
                    </svg>
                </div>
                 <!-- Other Filters -->
                 <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">
                    <select class="flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold">
                        <option value="category" disable selected>Exchanges
                        </option>
                        <option value="foo">Binance
                        </option>
                        <option value="bar">Kucoin
                        </option>
                        <option value="bar">CoinEX
                        </option>
                    </select>

                    <svg class="transform -rotate-90 absolute pointer-events-none" style="right: 12px;" width="22"
                         height="22" viewBox="0 0 22 22">
                        <g fill="none" fill-rule="evenodd">
                            <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                            </path>
                            <path fill="#222"
                                  d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                        </g>
                    </svg>
                </div>

                <!-- Search -->
                <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
                    <form method="GET" action="#">
                        <input type="text" name="search" placeholder="Find something"
                               class="bg-transparent placeholder-black font-semibold text-sm">
                    </form>
                </div>
            </div>
        </header>

        <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
            <article
                class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                <div class="py-6 px-5 lg:flex">
                    <div class="flex-1 lg:mr-8">
                        <img src="/images/news1.jpg" alt="" class="rounded-xl">
                    </div>

                    <div class="flex-1 flex flex-col justify-between">
                        <header class="mt-8 lg:mt-0">
                            <div class="space-x-2">
                                <a href="#"
                                   class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                                   style="font-size: 10px">Techniques</a>

                                <a href="#"
                                   class="px-3 py-1 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold"
                                   style="font-size: 10px">Updates</a>
                            </div>

                            <div class="mt-4">
                                <h1 class="text-3xl">
                                Nigerian's passion for crypto is stopping short at the eNaira
                                </h1>

                                <span class="mt-2 block text-gray-400 text-xs">
                                        Published <time>1 day ago</time>
                                    </span>
                            </div>
                        </header>

                        <div class="text-sm mt-2">
                            <p>
                            With less than 0.5% adoption, the central bank of Nigeria is struggling to push its eNaira CBDC to its citizens. 

                            Nigeria’s central bank digital currency (CBDC) is not getting the warm reception expected from its crypto-savvy population.

According to a Bloomberg report, less than 0.5% of Nigeria’s 217 million population are using the government-issued digital currency — the eNaira — a year after its launch.
                            </p>

                            <p class="mt-4">
                            This comes despite Nigeria being identified by Chainalysis as the top country in Africa for crypto adoption and ranking 11th globally, while a KuCoin report found that 35% of the Nigerian population aged 18 to 60 had owned or traded cryptocurrencies this year.
                            </p>
                        </div>

                        <footer class="flex justify-between items-center mt-8">
                            <div class="flex items-center text-sm">
                                <img src="./images/lary-avatar.svg" alt="Lary avatar">
                                <div class="ml-3">
                                    <h5 class="font-bold">Divine </h5>
                                    <h6>Creator at Cryptnance</h6>
                                </div>
                            </div>

                            <div class="hidden lg:block">
                                <a href="/more1"
                                   class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                                >Read More</a>
                            </div>
                        </footer>
                    </div>
                </div>
            </article>

            <div class="lg:grid lg:grid-cols-2">
                <article
                    class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                    <div class="py-6 px-5">
                        <div>
                            <img src="./images/news2.webp" alt="Blog Post illustration" class="rounded-xl">
                        </div>

                        <div class="mt-8 flex flex-col justify-between">
                            <header>
                                <div class="space-x-2">
                                    <a href="#"
                                       class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                                       style="font-size: 10px">Techniques</a>

                                    <a href="#"
                                       class="px-3 py-1 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold"
                                       style="font-size: 10px">Updates</a>
                                </div>

                                <div class="mt-4">
                                    <h1 class="text-3xl">
                                    First Mover Americas: It's a DOGE Day as Elon Musk Close to Completing Twitter Deal
                                    </h1>

                                    <span class="mt-2 block text-gray-400 text-xs">
                                        Published <time>1 day ago</time>
                                    </span>
                                </div>
                            </header>

                            <div class="text-sm mt-4">
                                <p>
                                Price Point

Bitcoin (BTC) was trading at around $20,500 on Thursday, down slightly, while popular meme token dogecoin (DOGE) took the center stage as billionaire and Tesla (TSLA) CEO Elon Musk's purchase of Twitter (TWTR) approached the finish line.

Dogecoin was up 12% over the past 24 hours. Musk has been a major supporter of dogecoin, although he is being sued by a dogecoin investor for allegedly running a pyramid scheme with the coin.
                                </p>

                                <p class="mt-4">
                                Dogecoin’s move up follows bitcoin’s rally on Wednesday when it briefly touched the $21,000 mark, reaching its highest point in over a month. Ether (ETH) also reached monthly highs.
                                </p>
                            </div>

                            <footer class="flex justify-between items-center mt-8">
                                <div class="flex items-center text-sm">
                                    <img src="./images/lary-avatar.svg" alt="Lary avatar">
                                    <div class="ml-3">
                                        <h5 class="font-bold">Divine</h5>
                                        <h6>Creator at Cryptnance</h6>
                                    </div>
                                </div>

                                <div>
                                    <a href="/more2"
                                       class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                                    >
                                        Read More
                                    </a>
                                </div>
                            </footer>
                        </div>
                    </div>
                </article>

                <article
                    class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                    <div class="py-6 px-5">
                        <div>
                            <img src="./images/news1.jpg" alt="Blog Post illustration" class="rounded-xl">
                        </div>

                        <div class="mt-8 flex flex-col justify-between">
                            <header>
                                <div class="space-x-2">
                                    <a href="#"
                                       class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                                       style="font-size: 10px">Techniques</a>

                                    <a href="#"
                                       class="px-3 py-1 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold"
                                       style="font-size: 10px">Updates</a>
                                </div>

                                <div class="mt-4">
                                    <h1 class="text-3xl">
                                    Binance’s CZ Confirms Participating as Equity Investor in Musk’s Twitter Takeover
                                    </h1>

                                    <span class="mt-2 block text-gray-400 text-xs">
                                        Published <time>1 day ago</time>
                                    </span>
                                </div>
                            </header>

                            <div class="text-sm mt-4">
                                <p>
                                Zhao said Binance had wired some $500 million “two days ago” as part of the move. <br>
                                Binance confirmed on Friday that it was as an equity investor in billionaire technology entrepreneur Elon Musk's takeover of microblogging service Twitter (TWTR).

"We're excited to be able to help Elon realize a new vision for Twitter,” Binance founder Changpeng "CZ" Zhao, said in an e-mailed statement. “We aim to play a role in bringing social media and Web3 together in order to broaden the use and adoption of crypto and blockchain technology."
                                </p>

                                <p class="mt-4">
                                CZ said in a tweet that Binance had wired some $500 million as part of the deal two days ago. Twitter did not immediately respond to CoinDesk's request for comment.
                                </p>
                            </div>

                            <footer class="flex justify-between items-center mt-8">
                                <div class="flex items-center text-sm">
                                    <img src="./images/lary-avatar.svg" alt="Lary avatar">
                                    <div class="ml-3">
                                        <h5 class="font-bold">Divine</h5>
                                        <h6>Creator at Cryptnance</h6>
                                    </div>
                                </div>

                                <div>
                                    <a href="/more3"
                                       class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                                    >
                                        Read More
                                    </a>
                                </div>
                            </footer>
                        </div>
                    </div>
                </article>
            </div>

        <footer class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
            <img src="./images/lary-newsletter-icon.svg" alt="" class="mx-auto -mb-6" style="width: 145px;">
            <h5 class="text-3xl">Stay in touch with the latest posts</h5>
            <p class="text-sm mt-3">Promise to keep the inbox clean. No bugs.</p>

            <div class="mt-10">
                <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">

                    <form method="POST" action="/" class="lg:flex text-sm">
                        <div class="lg:py-3 lg:px-5 flex items-center">
                            <label for="email" class="hidden lg:inline-block">
                                <img src="./images/mailbox-icon.svg" alt="mailbox letter">
                            </label>

                            <input id="email" type="text" placeholder="Your email address"
                                   class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none">
                        </div>

                        <button type="submit"
                                class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8"
                        >
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
        </footer>
    </section>
</body>