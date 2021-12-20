<div><!----><div><!--v-if--></div><div class="min-h-screen bg-gray-100"><nav class="bg-white border-b border-gray-100"><!-- Primary Navigation Menu --><div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8"><div class="flex justify-between h-16"><div class="flex"><!-- Logo --><div class="shrink-0 flex items-center"><a href="http://127.0.0.1:8000/dashboard"><svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" class="block h-9 w-auto"><path d="M11.395 44.428C4.557 40.198 0 32.632 0 24 0 10.745 10.745 0 24 0a23.891 23.891 0 0113.997 4.502c-.2 17.907-11.097 33.245-26.602 39.926z" fill="#6875F5"></path><path d="M14.134 45.885A23.914 23.914 0 0024 48c13.255 0 24-10.745 24-24 0-3.516-.756-6.856-2.115-9.866-4.659 15.143-16.608 27.092-31.75 31.751z" fill="#6875F5"></path></svg></a></div><!-- Navigation Links --><div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex"><a class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition" href="http://127.0.0.1:8000/dashboard"> Dashboard </a></div></div><div class="hidden sm:flex sm:items-center sm:ml-6"><div class="ml-3 relative"><!-- Teams Dropdown --><!--v-if--></div><!-- Settings Dropdown --><div class="ml-3 relative"><div class="relative"><div><span class="inline-flex rounded-md"><button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">admin <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button></span></div><!-- Full Screen Dropdown Overlay --><div class="fixed inset-0 z-40" style="display: none;"></div><div class="absolute z-50 mt-2 rounded-md shadow-lg w-48 origin-top-right right-0" style="display: none;"><div class="rounded-md ring-1 ring-black ring-opacity-5 py-1 bg-white"><!-- Account Management --><div class="block px-4 py-2 text-xs text-gray-400"> Manage Account </div><div><a class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition" href="http://127.0.0.1:8000/user/profile"> Profile </a></div><!--v-if--><div class="border-t border-gray-100"></div><!-- Authentication --><form><div><button type="submit" class="block w-full px-4 py-2 text-sm leading-5 text-gray-700 text-left hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition"> Log Out </button></div></form></div></div></div></div></div><!-- Hamburger --><div class="-mr-2 flex items-center sm:hidden"><button class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition"><svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24"><path class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path><path class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg></button></div></div></div><!-- Responsive Navigation Menu --><div class="hidden sm:hidden"><div class="pt-2 pb-3 space-y-1"><div><a class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition" href="http://127.0.0.1:8000/dashboard"> Dashboard </a></div></div><!-- Responsive Settings Options --><div class="pt-4 pb-1 border-t border-gray-200"><div class="flex items-center px-4"><!--v-if--><div><div class="font-medium text-base text-gray-800">admin</div><div class="font-medium text-sm text-gray-500">admin@gmail.com</div></div></div><div class="mt-3 space-y-1"><div><a class="block pl-3 pr-4 py-2 border-l-4 border-indigo-400 text-base font-medium text-indigo-700 bg-indigo-50 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700 transition" href="http://127.0.0.1:8000/user/profile"> Profile </a></div><!--v-if--><!-- Authentication --><form method="POST"><div><button class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition w-full text-left"> Log Out </button></div></form><!-- Team Management --><!--v-if--></div></div></div></nav><!-- Page Heading --><header class="bg-white shadow"><div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8"><h2 class="font-semibold text-xl text-gray-800 leading-tight"> Profile </h2></div></header><!-- Page Content --><main><div><div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8"><div><div class="md:grid md:grid-cols-3 md:gap-6"><div class="md:col-span-1 flex justify-between"><div class="px-4 sm:px-0"><h3 class="text-lg font-medium text-gray-900"> Profile Information </h3><p class="mt-1 text-sm text-gray-600"> Update your account's profile information and email address. </p></div><div class="px-4 sm:px-0"></div></div><div class="mt-5 md:mt-0 md:col-span-2"><form><div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md"><div class="grid grid-cols-6 gap-6"><!-- Profile Photo --><!--v-if--><!-- Name --><div class="col-span-6 sm:col-span-4"><label class="block font-medium text-sm text-gray-700" for="name"><span>Name</span></label><input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" id="name" type="text" autocomplete="name"><div class="mt-2" style="display: none;"><p class="text-sm text-red-600"></p></div></div><!-- Email --><div class="col-span-6 sm:col-span-4"><label class="block font-medium text-sm text-gray-700" for="email"><span>Email</span></label><input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" id="email" type="email"><div class="mt-2" style="display: none;"><p class="text-sm text-red-600"></p></div></div></div></div><div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md"><div class="mr-3"><div class="text-sm text-gray-600" style="display: none;"> Saved. </div></div><button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"> Save </button></div></form></div></div><div class="hidden sm:block"><div class="py-8"><div class="border-t border-gray-200"></div></div></div></div><div><div class="md:grid md:grid-cols-3 md:gap-6 mt-10 sm:mt-0"><div class="md:col-span-1 flex justify-between"><div class="px-4 sm:px-0"><h3 class="text-lg font-medium text-gray-900"> Update Password </h3><p class="mt-1 text-sm text-gray-600"> Ensure your account is using a long, random password to stay secure. </p></div><div class="px-4 sm:px-0"></div></div><div class="mt-5 md:mt-0 md:col-span-2"><form><div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md"><div class="grid grid-cols-6 gap-6"><div class="col-span-6 sm:col-span-4"><label class="block font-medium text-sm text-gray-700" for="current_password"><span>Current Password</span></label><input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" id="current_password" type="password" autocomplete="current-password"><div class="mt-2" style="display: none;"><p class="text-sm text-red-600"></p></div></div><div class="col-span-6 sm:col-span-4"><label class="block font-medium text-sm text-gray-700" for="password"><span>New Password</span></label><input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" id="password" type="password" autocomplete="new-password"><div class="mt-2" style="display: none;"><p class="text-sm text-red-600"></p></div></div><div class="col-span-6 sm:col-span-4"><label class="block font-medium text-sm text-gray-700" for="password_confirmation"><span>Confirm Password</span></label><input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" id="password_confirmation" type="password" autocomplete="new-password"><div class="mt-2" style="display: none;"><p class="text-sm text-red-600"></p></div></div></div></div><div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md"><div class="mr-3"><div class="text-sm text-gray-600" style="display: none;"> Saved. </div></div><button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"> Save </button></div></form></div></div><div class="hidden sm:block"><div class="py-8"><div class="border-t border-gray-200"></div></div></div></div><div><div class="md:grid md:grid-cols-3 md:gap-6 mt-10 sm:mt-0"><div class="md:col-span-1 flex justify-between"><div class="px-4 sm:px-0"><h3 class="text-lg font-medium text-gray-900"> Two Factor Authentication </h3><p class="mt-1 text-sm text-gray-600"> Add additional security to your account using two factor authentication. </p></div><div class="px-4 sm:px-0"></div></div><div class="mt-5 md:mt-0 md:col-span-2"><div class="px-4 py-5 sm:p-6 bg-white shadow sm:rounded-lg"><h3 class="text-lg font-medium text-gray-900"> You have not enabled two factor authentication. </h3><div class="mt-3 max-w-xl text-sm text-gray-600"><p> When two factor authentication is enabled, you will be prompted for a secure, random token during authentication. You may retrieve this token from your phone's Google Authenticator application. </p></div><!--v-if--><div class="mt-5"><div><span><span><button type="button" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"> Enable </button></span><!--teleport start--><!--teleport end--></span></div></div></div></div></div><div class="hidden sm:block"><div class="py-8"><div class="border-t border-gray-200"></div></div></div></div><div class="md:grid md:grid-cols-3 md:gap-6 mt-10 sm:mt-0"><div class="md:col-span-1 flex justify-between"><div class="px-4 sm:px-0"><h3 class="text-lg font-medium text-gray-900"> Browser Sessions </h3><p class="mt-1 text-sm text-gray-600"> Manage and log out your active sessions on other browsers and devices. </p></div><div class="px-4 sm:px-0"></div></div><div class="mt-5 md:mt-0 md:col-span-2"><div class="px-4 py-5 sm:p-6 bg-white shadow sm:rounded-lg"><div class="max-w-xl text-sm text-gray-600"> If necessary, you may log out of all of your other browser sessions across all of your devices. Some of your recent sessions are listed below; however, this list may not be exhaustive. If you feel your account has been compromised, you should also update your password. </div><!-- Other Browser Sessions --><div class="mt-5 space-y-6"><div class="flex items-center"><div><svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8 text-gray-500"><path d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg></div><div class="ml-3"><div class="text-sm text-gray-600">Windows - Chrome</div><div><div class="text-xs text-gray-500">127.0.0.1, <span class="text-green-500 font-semibold">This device</span></div></div></div></div></div><div class="flex items-center mt-5"><button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"> Log Out Other Browser Sessions </button><div class="ml-3"><div class="text-sm text-gray-600" style="display: none;"> Done. </div></div></div><!-- Log Out Other Devices Confirmation Modal --><!--teleport start--><!--teleport end--></div></div></div><div class="hidden sm:block"><div class="py-8"><div class="border-t border-gray-200"></div></div></div><div class="md:grid md:grid-cols-3 md:gap-6 mt-10 sm:mt-0"><div class="md:col-span-1 flex justify-between"><div class="px-4 sm:px-0"><h3 class="text-lg font-medium text-gray-900"> Delete Account </h3><p class="mt-1 text-sm text-gray-600"> Permanently delete your account. </p></div><div class="px-4 sm:px-0"></div></div><div class="mt-5 md:mt-0 md:col-span-2"><div class="px-4 py-5 sm:p-6 bg-white shadow sm:rounded-lg"><div class="max-w-xl text-sm text-gray-600"> Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain. </div><div class="mt-5"><button type="button" class="inline-flex items-center justify-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition"> Delete Account </button></div><!-- Delete Account Confirmation Modal --><!--teleport start--><!--teleport end--></div></div></div></div></div></main></div></div>