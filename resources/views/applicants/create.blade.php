<x-layout>
  <x-card class="p-10 max-w-lg mx-auto mt-24">
    <div class="text-right">
        <a href="/" class="text-black ml-4"><< Back </a>
    </div>
  
    <header class="text-center">
      <h2 class="text-2xl font-bold uppercase mb-1">Application Form</h2>
      <p class="mb-4">Apply for the Software Developer Position</p>
    </header>

    <form method="POST" action="/apply" enctype="multipart/form-data">
      @csrf
      <div class="mb-6">
        <label for="first_name" class="inline-block text-lg mb-2">First Name</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="first_name"
          value="{{old('first_name')}}" />

        @error('first_name')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="last_name" class="inline-block text-lg mb-2">Last Name</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="last_name" value="{{old('last_name')}}" />

        @error('last_name')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="resume_link" class="inline-block text-lg mb-2">Resume Link</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="resume_link" value="{{old('resume_link')}}" />

        @error('resume_link')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="email" class="inline-block text-lg mb-2">
        Email
        </label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="email" value="{{old('email')}}" />

        @error('email')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="application_letter" class="inline-block text-lg mb-2">
        Application Letter
        </label>
        <textarea type="text" class="border border-gray-200 rounded p-2 w-full" name="application_letter" rows="10">
            {{old('application_letter')}}
        </textarea>

        @error('application_letter')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="cover_letter" class="inline-block text-lg mb-2">
          Cover Letter
        </label>
        <textarea class="border border-gray-200 rounded p-2 w-full" name="cover_letter" rows="10">
            {{old('cover_letter')}}
        </textarea>

        @error('cover_letter')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
          Submit Application Form
        </button>

      </div>
    </form>
  </x-card>
</x-layout>