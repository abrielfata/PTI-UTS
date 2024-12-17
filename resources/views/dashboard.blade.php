<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
          {{ __('Home Page') }}
      </h2>
  </x-slot>

  <main class="mx-auto px-4 sm:px-6 lg:px-8 mt-5">
      <div class="bg-white py-24 sm:py-32">
          <div class="mx-auto grid max-w-7xl gap-20 px-6 lg:px-8 xl:grid-cols-3">
              <div class="max-w-xl">
                  <h2 class="text-pretty text-3xl font-semibold tracking-tight text-gray-900 sm:text-4xl">
                      Meet our leadership
                  </h2>
                  <p class="mt-6 text-lg/8 text-gray-600">
                      Kami adalah kelompok dinamis yang penuh semangat dengan apa yang kami kerjakan dan berdedikasi untuk memberikan hasil terbaik bagi klien kami
                  </p>
              </div>
              <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
                  <li>
                      <div class="flex items-center gap-x-6">
                          <div>
                              <h3 class="text-base/7 font-semibold tracking-tight text-gray-900">Agus Prayoga</h3>
                              <p class="text-sm/6 font-semibold text-indigo-600">Founder</p>
                          </div>
                      </div>
                  </li>
                  <li>
                      <div class="flex items-center gap-x-6">
                          <div>
                              <h3 class="text-base/7 font-semibold tracking-tight text-gray-900">Pujiasa Noriza Abdillah</h3>
                              <p class="text-sm/6 font-semibold text-indigo-600">Content Manager</p>
                          </div>
                      </div>
                  </li>
                  <li>
                      <div class="flex items-center gap-x-6">
                          <div>
                              <h3 class="text-base/7 font-semibold tracking-tight text-gray-900">Khozin Oktaviana</h3>
                              <p class="text-sm/6 font-semibold text-indigo-600">Live Host Team Leader</p>
                          </div>
                      </div>
                  </li>
                  <li>
                      <div class="flex items-center gap-x-6">
                          <div>
                              <h3 class="text-base/7 font-semibold tracking-tight text-gray-900">Jaelani Yusuf</h3>
                              <p class="text-sm/6 font-semibold text-indigo-600">Production Director</p>
                          </div>
                      </div>
                  </li>
              </ul>
          </div>
      </div>
      <div class="relative isolate overflow-hidden bg-gray-900 py-24 sm:py-32">
          <div class="mx-auto max-w-7xl px-6 lg:px-8">
              <div class="mx-auto max-w-2xl lg:mx-0">
                  <h2 class="text-5xl font-semibold tracking-tight text-white sm:text-7xl">Work with us</h2>
                  <p class="mt-8 text-lg font-medium text-gray-300 sm:text-xl/8">
                      Sebuah kerja sama dalam tim tentunya lebih dari sekadar kumpulan orang biasa. Ini lebih kepada proses memberi dan menerima.
                  </p>
              </div>
          </div>
      </div>
  </main>

  <footer class="bg-gray-800 py-10">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="text-center">
              <p class="text-white text-sm font-semibold">© {{ date('Y') }} Kepstore. </p>
              <p class="text-gray-400 text-sm mt-2">
                 Made by<span class="font-semibold"> 10122219 | Abriel Fata Saptaji | IF-06</span>
              </p>
          </div>
          <div class="flex justify-center space-x-6 mt-6">
            <a href="https://shopee.co.id/kepswell" class="text-blue-400 hover:text-white">Shopee</a>
            <a href="https://www.instagram.com/kepstore/" class="text-blue-400 hover:text-white">Instagram</a>
            <a href="https://www.tiktok.com/@kepswell" class="text-blue-400 hover:text-white">Tiktok</a>
        </div>
      </div>
  </footer>
</x-app-layout>
