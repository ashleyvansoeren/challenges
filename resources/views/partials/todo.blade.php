<div class="todo mx-auto max-w-md">
  <form class="bg-sky-500 p-6 max-w-md" onsubmit="return false">
    <h1 class="text-white text-center uppercase p-4 font-bold text-3xl">My To Do List</h2>
    <div class="flex flex-wrap content-center -mx-3 mb-6">
      <div class="w-full md:w-2/3 mb-6 md:mb-0">
        <input class="appearance-none block w-full bg-gray-200 text-blue-600 px-4 py-3 mb-3 leading-tight focus:outline-none focus:bg-white rounded-l-lg" id="grid-task" type="text" placeholder="Title">
      </div>

      {{-- <div class="w-full md:w-1/3"> --}}
        <button class="w-full md:w-1/3 bg-sky-700 transition ease delay-50 duration-300 hover:bg-sky-400 text-white font-bold py-2 rounded-r-lg focus:bg-sky-400 focus:border-transparent focus-visible:ring-transparent" id="add">
          Add
        </button>
      {{-- </div> --}}
    </div>
  </form>
  <ul class="bg-sky-300" id="output"><li></li></ul>
</div>


<style>
  button {
    height: 44px;
  }
  </style>
