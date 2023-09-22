<?php
include_once './components/header.php';
?>
<main>

  <form action="./registerCheck.php" method="post">
    <div class="m-10 h-full bg-white py-6 flex flex-col justify-center sm:py-12">
      <div class="relative py-3 sm:max-w-xl sm:mx-auto">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-300 to-blue-600 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
        </div>
        <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
          <div class="max-w-md mx-auto">
            <div>
              <h1 class="font-sans text-2xl font-semibold text-blue-800">Please fill in this form to create an account.</h1>

            </div>
            <div class="divide-y divide-gray-200">
              <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                <div class="font-sans relative">
                  <input autocomplete="off" id="name" name="name" type="text" required class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Name" />
                  <label for="name" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Name</label>
                </div>
                <div class="font-sans relative">
                  <input autocomplete="off" id="email" name="email" type="email" required class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Email address" />
                  <label for="email" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Email Address</label>
                </div>
                <div class="font-sans relative">
                  <input autocomplete="off" id="password" name="password" type="password" required class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Password" />
                  <label for="password" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Password</label>
                </div>
                <div class="font-sans relative ">
                  <p class="font-sans block  text-base font-normal">By creating an account you agree to our <a class="no-underline hover:underline" href="#">Terms & Privacy</a>.</p>
                  <button class="bg-blue-800 text-white rounded-md px-2 py-1 mt-4">Register now</button>
                </div>
                <div class="font-sans relative ">
                  <p class="font-sans block  text-base font-normal">Already have an account? <a class="no-underline hover:underline" href="./login.php">Sign in</a>.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>



</main>
<?php
include_once './components/footer.php';
?>