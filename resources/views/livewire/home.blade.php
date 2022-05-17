<main>
  <!-- Hero Section Start -->
  <section id="home" class="pt-36 pb-36 relative bg-bgColor z-0">
    <div class="container">
      <div class="flex flex-wrap">
        <div class="w-full self-center px-4 lg:w-1/2">
          <h1 class="text-base font-semibold text-primary md:text-xl lg:text-2xl">
            Hello Everyone,
            <span class="block font-bold text-dark text-4xl mt-1 lg:text-5xl">Welcome to My Zoo</span>
          </h1>
          <h2 class="font-medium text-secondary text-lg mt-1 mb-5 md:text-xl lg:text-2xl">
            Safe For Any Animal
          </h2>
          <p class="font-medium text-secondary mb-10 leading-relaxed">
            Wildlife is Mother Natures greatest treasure, To protect it, we
            must take every measure.
          </p>
          <a href="#animals"
            class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full hover:shadow-lg hover:opacity-8 transition duration-300 ease-in-out">Explore</a>
        </div>
        <div class="w-full self-end px-4 lg:w-1/2">
          <div class="relative mt-10 lg:mt-9 lg:right-0">
            <img src="{{asset("img/illustration/animal-illustration.png")}}" alt="Illustration"
              class="max-w-full mx-auto" width="300" />
            <span class="absolute bottom-0 left-1/2 -translate-x-1/2 -z-10 md:scale-125">
              <svg width="400" height="400" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <path fill="#14b8a6"
                  d="M52.8,-61.1C65.5,-52.4,70.7,-32.9,70.5,-15.3C70.2,2.3,64.3,18.1,56.2,32.8C48.1,47.6,37.7,61.3,22.9,69.7C8,78.1,-11.3,81,-28.5,75.8C-45.8,70.6,-61,57.3,-68.2,41.1C-75.5,24.9,-74.9,5.9,-70.7,-11.5C-66.5,-28.9,-58.7,-44.7,-46.3,-53.6C-33.9,-62.4,-16.9,-64.2,1.6,-66.1C20.1,-68,40.2,-69.9,52.8,-61.1Z"
                  transform="translate(100 100)" />
              </svg>
            </span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Hero Section End -->

  <!-- About Section Start -->
  <section id="about" class="pt-36 pb-32">
    <div class="container">
      <div>
        <div class="flex flex-wrap">
          <h4 class="font-semibold uppercase mx-auto text-primary px-4 text-xl mb-10">
            About My Zoo
          </h4>
        </div>
        <div class="flex flex-wrap px-4 mb-10 md:flex-row-reverse">
          <div class="w-full self-center md:w-1/2">
            <h2 class="font-bold text-dark text-3xl mb-5 max-w-md">
              Explore in My Zoo
            </h2>
            <p class="font-medium text-md text-secondary max-w-xl">
              Zoos are places where wild animals are kept for public display.
              Zoos are often the sites of sophisticated breeding centers,
              where endangered species may be protected and studied. Some
              zoos, like this aquarium in Monterey, California, are dedicated
              to one species or set of species.
            </p>
          </div>
          <div class="w-full self-end md:w-1/2">
            <img src="{{asset("img/illustration/animal_01.png")}}" alt="Monkey Illustration" width="200" class="mx-auto mt-3 lg:left-0" />
          </div>
        </div>
        <div class="flex flex-wrap px-4">
          <div class="w-full self-center md:w-1/2">
            <h2 class="font-bold text-dark text-3xl mb-5 max-w-md">
              Let's Go to the My Zoo
            </h2>
            <p class="font-medium text-md text-secondary max-w-xl">
              The zoo is the place where we can find and see those birds and animals which we can’t see
              easily around
              us. These animals live there in captivity and supervision of some professionals. Although it
              sounds weird
              that the animals in the Zoo live in captivity, you must also know that these animals get all
              that they
              need and deserve there.
            </p>
          </div>
          <div class="w-full self-end md:w-1/2">
            <img src="{{asset("img/illustration/animal_02.png")}}" alt="Lion Illustration" width="280" class="mx-auto mt-3" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- About Section End -->

  <!-- Animals Section Start -->
  <section id="animals" class="pt-36 pb-28 bg-slate-100">
    <div class="container">
      <div class="w-full px-4">
        <div class="max-w-xl mx-auto text-center mb-16">
          <h4 class="font-semibold uppercase text-xl text-primary mb-3">
            Gallery
          </h4>
          <h2 class="font-bold text-dark text-3xl mb-4">Animals in My Zoo</h2>
          <p class="font-medium text-md text-secondary">
            Our animals come from many parts of the world. We have nearly 500
            animals representing more than 100 different species at My Zoo.
          </p>
        </div>
      </div>
      <div class="w-full px-4">
        <!-- Slider main container -->
        <div class="swiper w-[400px] md:w-[600px]">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
              <div
                class="max-w-sm bg-slate-50 rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 mx-auto w-[250px] md:w-full">
                <a href="#">
                  <img class="rounded-t-lg"
                    src="https://images.unsplash.com/photo-1459262838948-3e2de6c1ec80?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1169&q=80"
                    alt="" />
                </a>
                <div class="p-5">
                  <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                      Koala
                    </h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    The koala or, inaccurately, koala bear (Phascolarctos
                    cinereus) is an arboreal herbivorous marsupial native to
                    Australia. It is the only extant representative of the
                    family Phascolarctidae and its closest living relatives
                    are the wombats.
                  </p>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div
                class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 mx-auto w-[250px] md:w-full">
                <a href="#">
                  <img class="rounded-t-lg"
                    src="https://images.unsplash.com/photo-1459262838948-3e2de6c1ec80?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1169&q=80"
                    alt="" />
                </a>
                <div class="p-5">
                  <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                      Koala
                    </h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    The koala or, inaccurately, koala bear (Phascolarctos
                    cinereus) is an arboreal herbivorous marsupial native to
                    Australia. It is the only extant representative of the
                    family Phascolarctidae and its closest living relatives
                    are the wombats.
                  </p>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div
                class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 mx-auto w-[250px] md:w-full">
                <a href="#">
                  <img class="rounded-t-lg"
                    src="https://images.unsplash.com/photo-1459262838948-3e2de6c1ec80?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1169&q=80"
                    alt="" />
                </a>
                <div class="p-5">
                  <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                      Koala
                    </h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    The koala or, inaccurately, koala bear (Phascolarctos
                    cinereus) is an arboreal herbivorous marsupial native to
                    Australia. It is the only extant representative of the
                    family Phascolarctidae and its closest living relatives
                    are the wombats.
                  </p>
                </div>
              </div>
            </div>
            ...
          </div>

          <!-- If we need navigation buttons -->
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      </div>
    </div>
  </section>
  <!-- Animals Section End -->

  <!-- Ticket Section Start -->
  <section id="ticket" class="pt-36 pb-32 bg-white">
    <div class="container">
      <div class="w-full px-4">
        <div class="mx-auto text-center mb-16">
          <h4 class="font-semibold uppercase text-xl text-primary mb-3">
            Buy Ticket
          </h4>
          <h2 class="font-bold text-dark text-3xl mb-4">Go To Our Zoo</h2>
          <p class="font-medium text-md text-slate-400">
            Protections allow animals to live and reproduce at natural rates.
            <br />
            Animals are allowed to roam free.
          </p>
        </div>
      </div>

      <div class="w-full px-4">
        <div class="flex flex-wrap justify-center gap-10">
          <a href="#"
            class="sm:inline-flex justify-center items-center text-base font-semibold text-white bg-primary py-3 px-8 rounded-full hover:shadow-lg hover:opacity-8 transition duration-300 ease-in-out uppercase">Get
            Ticket</a>
          <a href="#contact"
            class="sm:inline-flex justify-center items-center text-base font-semibold text-white bg-primary py-3 px-8 rounded-full hover:shadow-lg hover:opacity-8 transition duration-300 ease-in-out uppercase">Contact
            Us</a>
        </div>
      </div>
    </div>
  </section>
  <!-- Ticket Section Start -->

  <!-- Contact Section Start -->
  <section id="contact" class="pt-36 pb-32 bg-slate-100">
    <div class="container">
      <div class="w-full px-4">
        <div class="max-w-xl mx-auto text-center mb-16">
          <h4 class="font-semibold uppercase text-xl text-primary mb-3">
            Contact us
          </h4>
          <h2 class="font-bold text-dark text-3xl mb-4">Get in Touch</h2>
          <p class="font-medium text-md text-secondary">
            We're here to help and answer any question about my zoo. We look
            foward to hearing from you.
          </p>
        </div>
      </div>
      <form action="">
        <div class="w-full lg:w-2/3 lg:mx-auto">
          <div class="w-full px-4 mb-8">
            <label for="name" class="text-base text-primary font-bold">Name</label>
            <input type="text" name="name" id="name"
              class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary" />
          </div>
          <div class="w-full px-4 mb-8">
            <label for="email" class="text-base text-primary font-bold">E-mail</label>
            <input type="email" name="email" id="email"
              class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary" />
          </div>
          <div class="w-full px-4 mb-8">
            <label for="message" class="text-base text-primary font-bold">Message</label>
            <textarea type="text" name="message" id="message"
              class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary h-32"></textarea>
          </div>
          <div class="w-full px-4">
            <button
              class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full hover:opacity-80 hover:shadow-lg transition duration-500 w-full">
              Send Message
            </button>
          </div>
        </div>
      </form>
    </div>
  </section>
  <!-- Contact Section End -->
</main>