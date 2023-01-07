<div>
    <div class="bg-red-500 text-white p-3">
        Hello <span class="font-bold">{{ $name }}</span> how are you? {{ $message }}
    </div>

    <div>
        <label for="email" class="block text-sm font-medium text-gray-700">Message</label>
        <div class="mt-1">
          <input type="email" name="email" id="email" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Type a message"
          wire:model="message">
        </div>
      </div>

      <div>
        <label for="email" class="block text-sm font-medium text-gray-700">Name</label>
        <div class="mt-1">
          <input type="email" name="email" id="email" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Type a message"
          wire:model="name">
        </div>
      </div>

      <div>
        <label for="email" class="block text-sm font-medium text-gray-700">Name</label>
        <div class="mt-1">
          <input type="email" name="email" id="email" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Type a message"
          wire:model="age">
        </div>
      </div>

    <button type="button" class="inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
    wire:click="changeName()">
    Change Name to Dana</button>

    <button type="button" class="inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
    wire:click="verifyAge()">
    Are you old enough?</button>

    <div>
        <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
        <select id="location" name="location" class="mt-1 block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
          <option>United States</option>
          <option selected>Canada</option>
          <option>Mexico</option>
        </select>
      </div>
</div>
