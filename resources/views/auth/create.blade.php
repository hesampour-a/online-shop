<x-layout>
    <form action="{{route('auth.store')}}" method="post">
        @csrf
        @method('post')

        <div>
            <label for="name">Name</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password">
        </div>
        <div>
            <label for="phone_number">Phone Number</label>
            <input type="number" name="phone_number">
        </div>
        <div>
            <label for="address">Address</label>
            <textarea type="text" name="address"></textarea>
        </div>
        <div>
            <label for="image_path">Image</label>
            <input type="file" name="image_path">
        </div>
    </form>
</x-layout>