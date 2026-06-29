<div class="min-h-screen flex flex-col items-center justify-center bg-gray-100">
  <h1 class="text-2xl font-bold text-gray-800 mb-6">Welcome to your Dashboard!</h1>

  <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit"
      class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600">
      Log Out
    </button>
  </form>
</div>

