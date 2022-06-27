 <!DOCTYPE html>
<html>
<head>
<title>Page Title</title>



  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>


<!-- component -->
<div class="bg-white p-5 max-w-md mx-auto rounded shadow-sm">
    <h2 class="text-4xl px-4 ">Log In</h2>
    <form class="mt-10 space-y-8">
        <input
          class="w-full border rounded h-12 px-4 focus:outline-none"
          placeholder="Email adress "
          type="email"
        />

        <div class="flex items-center ">
          <input
            class="w-full border rounded h-12 px-4 focus:outline-none -mr-7"
            placeholder="Password"
            type="password"
          />
          
        </div>
        <div>
          <div class="flex flex-col md:flex-row md:items-center justify-between ">
            <input
              class="bg-orange-500 text-sm active:bg-gray-700 cursor-pointer font-regular text-white px-4 py-2 rounded uppercase"
              type="submit"
              value="login now"
            />
            <a href="https://localhost/Balaji/twitter/signup.php" 
              class="text-gray-400 text-sm 
            underline self-center 
            md:self-auto mt-4 md:mt-0"
            >
              SignUp
            </p>
          </div>
        </div>
      </form>
</div>
</body>
</html> 