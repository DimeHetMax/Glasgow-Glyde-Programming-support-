<?php
    include 'partials/header.php';
?>
<!-- Section Hero -->
 <section class=" w-full  bg-[#0A2025] py-9 px-8">
  <div class="mx-auto flex  flex-col items-center lg:flex-row justify-center gap-10 py-40 max-w-[1440px] bg-no-repeat ">
    <div class="w-[660px]  flex-col justify-center items-start gap-20 inline-flex">
      <div class="self-stretch  flex-col justify-start items-start gap-5 flex">
        <h1 class="self-stretch">
          <span class="text-white text-5xl font-bold font-['Roboto']">Redefining Motion:</span><span class="text-[#3e9d26] text-5xl font-bold font-['Roboto']">The Future of Footwear is Here</span>
        </h1>
        <p class="self-stretch text-white text-xl font-normal font-['Roboto']">Experience unparalleled comfort and
          innovative design with our state-of-the-art, futuristic sports shoes. Built for champions, designed for you.
        </p>
      </div>
      <div class="justify-start items-center gap-5 inline-flex">
        <div class="justify-start items-center gap-2.5 flex">
          <p class="text-white text-sm font-normal font-['Roboto']">Step into the Future</p>
          <div data-svg-wrapper="true" class="relative"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path
                d="M20.7806 12.5306L14.0306 19.2806C13.8899 19.4213 13.699 19.5004 13.5 19.5004C13.301 19.5004 13.1101 19.4213 12.9694 19.2806C12.8286 19.1399 12.7496 18.949 12.7496 18.75C12.7496 18.551 12.8286 18.3601 12.9694 18.2194L18.4397 12.75H3.75C3.55109 12.75 3.36032 12.671 3.21967 12.5303C3.07902 12.3897 3 12.1989 3 12C3 11.8011 3.07902 11.6103 3.21967 11.4697C3.36032 11.329 3.55109 11.25 3.75 11.25H18.4397L12.9694 5.78061C12.8286 5.63988 12.7496 5.44901 12.7496 5.24999C12.7496 5.05097 12.8286 4.8601 12.9694 4.71936C13.1101 4.57863 13.301 4.49957 13.5 4.49957C13.699 4.49957 13.8899 4.57863 14.0306 4.71936L20.7806 11.4694C20.8504 11.539 20.9057 11.6217 20.9434 11.7128C20.9812 11.8038 21.0006 11.9014 21.0006 12C21.0006 12.0986 20.9812 12.1961 20.9434 12.2872C20.9057 12.3782 20.8504 12.461 20.7806 12.5306Z"
                fill="white"></path>
            </svg></div>
        </div>
        <button class="px-8 py-2.5 bg-[#3e9d26] rounded-[10px] justify-center items-center gap-2.5 flex text-white text-sm font-semibold font-['Roboto']">Shop Now</button>
      </div>
    </div><img class="w-full max-w-[400px]" src="https://iili.io/338c9je.png" alt="">
  </div>
</section>
<!-- End of the Hero section -->

<!-- Section cards -->
<section class=" w-full bg-white dark:bg-[#0A2025] py-9 px-8">
  <div class="mx-auto max-w-[1160px] ">
    <header class="h-12 mb-8 justify-between items-center flex">
      <h2 class="text-[#0A2025] dark:text-white text-2xl font-bold font-['Roboto']" id ="work">Shop by Sport</h2>
      <div class="flex gap-4"><svg width="40" height="40" viewBox="0 0 40 40" fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <path
            d="M20 0.5C16.1433 0.5 12.3731 1.64366 9.16639 3.78634C5.95963 5.92903 3.46027 8.97451 1.98436 12.5377C0.508449 16.1008 0.122284 20.0216 0.874696 23.8043C1.62711 27.5869 3.4843 31.0615 6.21143 33.7886C8.93855 36.5157 12.4131 38.3729 16.1957 39.1253C19.9784 39.8777 23.8992 39.4916 27.4623 38.0156C31.0255 36.5397 34.071 34.0404 36.2137 30.8336C38.3564 27.6269 39.5 23.8567 39.5 20C39.4945 14.83 37.4383 9.87322 33.7826 6.21745C30.1268 2.56167 25.1701 0.50546 20 0.5ZM20 36.5C16.7366 36.5 13.5465 35.5323 10.8331 33.7192C8.11969 31.9062 6.00484 29.3293 4.756 26.3143C3.50715 23.2993 3.1804 19.9817 3.81705 16.781C4.45371 13.5803 6.02518 10.6403 8.33275 8.33274C10.6403 6.02517 13.5803 4.4537 16.781 3.81704C19.9817 3.18039 23.2993 3.50714 26.3143 4.75599C29.3293 6.00483 31.9062 8.11968 33.7193 10.8331C35.5323 13.5465 36.5 16.7366 36.5 20C36.495 24.3745 34.7551 28.5685 31.6618 31.6618C28.5685 34.7551 24.3746 36.495 20 36.5ZM29 20C29 20.3978 28.842 20.7794 28.5607 21.0607C28.2794 21.342 27.8978 21.5 27.5 21.5H16.1206L19.5613 24.9387C19.7006 25.0781 19.8112 25.2436 19.8866 25.4257C19.962 25.6077 20.0008 25.8029 20.0008 26C20.0008 26.1971 19.962 26.3923 19.8866 26.5743C19.8112 26.7564 19.7006 26.9219 19.5613 27.0613C19.4219 27.2006 19.2564 27.3112 19.0744 27.3866C18.8923 27.462 18.6971 27.5008 18.5 27.5008C18.3029 27.5008 18.1078 27.462 17.9257 27.3866C17.7436 27.3112 17.5781 27.2006 17.4388 27.0613L11.4388 21.0613C11.2993 20.9219 11.1887 20.7565 11.1132 20.5744C11.0377 20.3923 10.9988 20.1971 10.9988 20C10.9988 19.8029 11.0377 19.6077 11.1132 19.4256C11.1887 19.2435 11.2993 19.0781 11.4388 18.9387L17.4388 12.9387C17.7202 12.6573 18.102 12.4992 18.5 12.4992C18.8981 12.4992 19.2798 12.6573 19.5613 12.9387C19.8427 13.2202 20.0008 13.602 20.0008 14C20.0008 14.398 19.8427 14.7798 19.5613 15.0613L16.1206 18.5H27.5C27.8978 18.5 28.2794 18.658 28.5607 18.9393C28.842 19.2206 29 19.6022 29 20Z"
            fill="#449596" fill-opacity="0.5"></path>
        </svg><svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M20 0.5C16.1433 0.5 12.3731 1.64366 9.16639 3.78634C5.95963 5.92903 3.46027 8.97451 1.98436 12.5377C0.508449 16.1008 0.122284 20.0216 0.874696 23.8043C1.62711 27.5869 3.4843 31.0615 6.21143 33.7886C8.93855 36.5157 12.4131 38.3729 16.1957 39.1253C19.9784 39.8777 23.8992 39.4916 27.4623 38.0156C31.0255 36.5397 34.071 34.0404 36.2137 30.8336C38.3564 27.6269 39.5 23.8567 39.5 20C39.4945 14.83 37.4383 9.87322 33.7826 6.21745C30.1268 2.56167 25.1701 0.50546 20 0.5ZM20 36.5C16.7366 36.5 13.5465 35.5323 10.8331 33.7192C8.11969 31.9062 6.00484 29.3293 4.756 26.3143C3.50715 23.2993 3.1804 19.9817 3.81705 16.781C4.45371 13.5803 6.02518 10.6403 8.33275 8.33274C10.6403 6.02517 13.5803 4.4537 16.781 3.81704C19.9817 3.18039 23.2993 3.50714 26.3143 4.75599C29.3293 6.00483 31.9062 8.11968 33.7193 10.8331C35.5323 13.5465 36.5 16.7366 36.5 20C36.495 24.3745 34.7551 28.5685 31.6618 31.6618C28.5685 34.7551 24.3746 36.495 20 36.5ZM28.5613 18.9387C28.7007 19.0781 28.8114 19.2435 28.8868 19.4256C28.9623 19.6077 29.0012 19.8029 29.0012 20C29.0012 20.1971 28.9623 20.3923 28.8868 20.5744C28.8114 20.7565 28.7007 20.9219 28.5613 21.0613L22.5613 27.0613C22.2798 27.3427 21.8981 27.5008 21.5 27.5008C21.102 27.5008 20.7202 27.3427 20.4388 27.0613C20.1573 26.7798 19.9992 26.398 19.9992 26C19.9992 25.602 20.1573 25.2202 20.4388 24.9387L23.8794 21.5H12.5C12.1022 21.5 11.7207 21.342 11.4393 21.0607C11.158 20.7794 11 20.3978 11 20C11 19.6022 11.158 19.2206 11.4393 18.9393C11.7207 18.658 12.1022 18.5 12.5 18.5H23.8794L20.4388 15.0613C20.1573 14.7798 19.9992 14.398 19.9992 14C19.9992 13.602 20.1573 13.2202 20.4388 12.9387C20.7202 12.6573 21.102 12.4992 21.5 12.4992C21.8981 12.4992 22.2798 12.6573 22.5613 12.9387L28.5613 18.9387Z"
            fill="#3E9D26"></path>
        </svg></div>
    </header>
    <main class="flex items-center flex-col md:flex-row  gap-10">
      <div><img class="mb-7 rounded-xl" src="https://iili.io/33etOiX.png">
        <div>
          <h3 class="text-[#0A2025] dark:text-white text-2xl font-bold font-['Roboto']">Keni Golf</h3>
          <p class="mt-5 mb-8 text-[#0A2025] dark:text-white text-sm font-normal font-['Roboto']">Everything you need
            for any course</p><button class="text-[#3e9d26] text-sm font-semibold font-['Roboto']">Shop</button>
        </div>
      </div>
      <div><img class="mb-7 rounded-xl" src="https://iili.io/33etkfn.png">
        <div>
          <h3 class="text-[#0A2025] dark:text-white text-2xl font-bold font-['Roboto']">Keni basketball</h3>
          <p class="mt-5 mb-8 text-[#0A2025] dark:text-white text-sm font-normal font-['Roboto']">Styles made for your
            games.</p><button class="text-[#3e9d26] text-sm font-semibold font-['Roboto']">Shop</button>
        </div>
      </div>
      <div><img class="mb-7 rounded-xl" src="https://iili.io/33etvls.png">
        <div>
          <h3 class="text-[#0A2025] dark:text-white text-2xl font-bold font-['Roboto']">Keni Trail Running</h3>
          <p class="mt-5 mb-8 text-[#0A2025] dark:text-white text-sm font-normal font-['Roboto']">Everything you need
            for adventure.</p><button class="text-[#3e9d26] text-sm font-semibold font-['Roboto']">Shop</button>
        </div>
      </div>
    </main>
  </div>
</section>
<!-- End of cards -->
<?php
    include 'partials/footer.php';
?>